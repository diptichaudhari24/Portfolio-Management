<?php

include("config.php");

$sql="INSERT INTO customer (custid,custname,custadd,custcity,custmobile,custemail,password,master) 
VALUES ('$_POST[cust_id]','$_POST[cust_name]','$_POST[cust_add]','$_POST[cust_city]','$_POST[cust_mob]','$_POST[cust_email]','$_POST[cust_pass]',1)";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
	
  }
else
{
header("Location:http://localhost/project/main.html");
}



mysql_close($con);

?>