<?php

include("config.php");

$sql1="select custid from customer where master=1";
$result=mysql_query($sql1);
$row = mysql_fetch_array($result);
$sql="INSERT INTO account VALUES ('$_POST[accno]','$_POST[acctype]','$_POST[bankname]','$_POST[branch]','$_POST[startbal]','$row[custid]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
	
  }
else
{
header("Location:http://localhost/project/welcome.php");
}



mysql_close($link);

?>