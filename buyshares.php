<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("project", $con);

$result = mysql_query("SELECT custid FROM customer WHERE master = 1");
$row = mysql_fetch_array($result);
$custtid = $row['custid'];
 
$result1 = mysql_query("SELECT ptprice FROM company WHERE compname = '$_POST[compname]'",$con);
$row1 = mysql_fetch_array($result1);
$ptprice = $row1[ptprice];


$result = mysql_query("SELECT balance FROM account WHERE custid='$custtid' and accno=$_POST[accno]");
$row = mysql_fetch_array($result);
$curbal=$row[balance];

if($curbal > $ptprice * $_POST[quantity])
{
	$resultt = mysql_query("SELECT * FROM boughtshares WHERE custid = '$custtid' and compname = '$_POST[compname]' and accno=$_POST[accno] and buyprice=$ptprice and buydate= CURDATE() ",$con);
	$resulttt = mysql_query("SELECT * FROM presentshares WHERE custid = '$custtid'and compname = '$_POST[compname]' and accno=$_POST[accno]",$con);


	if(!mysql_num_rows($resultt))
		$sql="insert into boughtshares values('$custtid','$_POST[compname]',$_POST[accno],$ptprice, CURDATE() ,$_POST[quantity])";
	else
		$sql="update boughtshares set quantity=quantity+$_POST[quantity] where custid = '$custtid' and compname = '$_POST[compname]' and accno='$_POST[accno]' and buyprice=$ptprice and buydate= CURDATE() ";
		
	mysql_query("update account set balance=balance - $ptprice * $_POST[quantity] WHERE custid='$custtid' and accno=$_POST[accno]");

	if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}
	if(!mysql_num_rows($resulttt))
		mysql_query("INSERT INTO presentshares VALUES ('$custtid',$_POST[accno],'$_POST[compname]',$_POST[quantity],$ptprice)",$con);
	else
		mysql_query("update presentshares set quantity=quantity+$_POST[quantity] WHERE custid = '$custtid' and compname = '$_POST[compname]' and accno='$_POST[accno]'",$con);	
	
	header('Location:http://127.0.0.1/project/blank.html');
}
else
header('Location:http://127.0.0.1/project/buy_shares1.php');
//New header with error msg


mysql_close($con);
?>
