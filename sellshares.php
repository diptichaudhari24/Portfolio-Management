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

//for entry in sold shares
	$resultt = mysql_query("SELECT * FROM soldshares WHERE custid = '$custtid' and compname = '$_POST[compname]' and accno=$_POST[accno] and sellprice=$ptprice and selldate= CURDATE() ",$con);
	$resulttt = mysql_query("SELECT * FROM presentshares WHERE custid = '$custtid' and compname = '$_POST[compname]' ",$con);
	
$row11 = mysql_fetch_array($resulttt);

if($row11['quantity']>=$_POST[quantity])
{
	if(!mysql_num_rows($resultt))
		$sql="insert into soldshares values('$custtid','$_POST[compname]',$_POST[accno],$ptprice, CURDATE() ,$_POST[quantity])";
	else
		$sql="update soldshares set quatity=quatity+$_POST[quantity] where custid = '$custtid' and compname = '$_POST[compname]' and accno='$_POST[accno]' and sellprice=$ptprice and selldate= CURDATE() ";
		
	mysql_query("update account set balance=balance + $ptprice * $_POST[quantity] WHERE custid='$custtid' and accno=$_POST[accno]");

	if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}
	if($row11['quantity']==$_POST['quantity'])
		mysql_query("DELETE FROM presentshares WHERE custid = '".$custid."'and compname = '$_POST[compname]' and quantity = '$_POST[quantity]'",$con);
	else
		mysql_query("update presentshares set quantity=quantity-$_POST[quantity] WHERE custid = '$custtid' and compname = '$_POST[compname]' and accno='$_POST[accno]'",$con);	
	
	header('Location:http://127.0.0.1/project/blank.html');
}
else
	header('Location:http://127.0.0.1/project/sell_shares1.php');


mysql_close($con);
//