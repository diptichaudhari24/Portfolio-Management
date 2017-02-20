<html>

<head>
<title>Customer ID</title>
</head><center>
<font size =6>DETAILS</font>
<font size =4 >
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("project", $con);
$result = mysql_query("SELECT * FROM customer WHERE master = 1");

$row = mysql_fetch_array($result);
echo"<center>";
 echo " <br><br><br>Custid -   ". $row['custid'] . " <br><br>Name -     " . $row['custname']."<br><br> Address  -        ".$row['custadd']."<br><br>City  -      ".$row['custcity']." <br><br> Mobile  -          ".$row['custmobile']."<br><br> Email  -          ".$row['custemail'];
mysql_close($con);

?>
<body background="back.jpg">
<form name="profile">
<a href="add_account.html">Add Account</a>
<br><br>
<a href="http://localhost/project/account_details.php">Account Details</a>
</body>

</html>
