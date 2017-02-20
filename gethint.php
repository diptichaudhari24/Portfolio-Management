<?php 

$q=$_GET["q"];
if (strlen($q) > 0)
{
	include("config.php");
	$result=mysql_query("select * from customer where custid='".$q."'");
	if(mysql_num_rows($result))
		echo "NOT AVAILABLE";
	else
		echo "AVAILABLE";
}
else
	echo "Nothing";
?>