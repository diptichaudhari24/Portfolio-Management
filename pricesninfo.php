<html>
<head>
</head>
<body background="back.jpg">
<br><br><br><br><br>
<strong><font size="+4" face="Times New Roman, Times, serif "><pre>
PRICES AND INFORMATION<br><br><pre>

<font size="+2" face="Times New Roman, Times, serif"> Company ID        Company Name       Present Price          City               Chairman           Estbdate</strong><br><br><br><br>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("project", $con);

$result = mysql_query("SELECT * FROM company");

while($row = mysql_fetch_array($result))
  {
  echo "  ".$row['compid'] . "                         " . $row['compname']."                    ".$row['ptprice']."                    ".$row['compcity']."                ".$row[chairman]."            ".$row['estbdate'];
  echo "<br/>";
  } 

mysql_close($con); 
?>


</body>
</html>
