<html>
<head>
</head>

<body background="back.jpg">
<br><br><br><br><br>
<strong><font size="+2" face="Times New Roman, Times, serif"><pre>Account Number        Company Name      Sell Date        Quantity       Sell Price</strong><br><br>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("project", $con);
$result = mysql_query("SELECT custid FROM customer WHERE master = 1");

$row = mysql_fetch_array($result);

$result = mysql_query("SELECT * FROM soldshares WHERE custid ='".$row['custid']."'");


while($row = mysql_fetch_array($result))
  {
  echo $row['accno'] . "                  " . $row['compname']."              ".$row['selldate']."         ".$row['quatity']."           ".$row[sellprice];
  echo "<br/>";
  } 

mysql_close($con); 
?>


</body>
</html>
