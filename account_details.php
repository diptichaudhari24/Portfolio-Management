<html>
<head>
</head>

<body><body background="back.jpg">
<h1 align="center">ACCOUNT DETAILS</h1>


<body background="back.jpg">
<br><br><br><br><br>
<center><strong><font size="+2" face="Times New Roman, Times, serif"><pre>Account Number        Bank Name      BranchID       Balance</strong><br><br>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("project", $con);
$result = mysql_query("SELECT custid FROM customer WHERE master = 1");

$row = mysql_fetch_array($result);

$result = mysql_query("SELECT * FROM account WHERE custid ='".$row['custid']."'");

while($row = mysql_fetch_array($result))
  {
  echo "   ".$row['accno'] . "                ".$row['bankname']."        ".$row['branchid']."          ".$row['balance'];
  echo "<br/>";
  } 

mysql_close($con); 
?>

</center>
</body>
</html>
