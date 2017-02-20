<html>
<body background="back.jpg">
<font size = 5>HINTS AND IDEAS !</font>
<font size =4>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("project", $con);


$result = mysql_query("SELECT * FROM hint");

echo "<br><br><br><font size =4>";

while($row = mysql_fetch_array($result))
  {
  echo $row['srlno'] . " -  ".$row[hint];
  echo "<br><br><br><br/>";
  } 

mysql_close($con);

?>
</body>
</html>