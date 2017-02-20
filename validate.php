<?php

include("config.php");

$result = mysql_query("SELECT custid,password FROM customer where custid='$_POST[cust_id]' and password='$_POST[cust_pass]'");

if(mysql_num_rows($result))
{
$sql="update customer set master=1 where custid='$_POST[cust_id]'";
mysql_query($sql);
header('Location:http://127.0.0.1/project/main.html');
}
else
{
header('Location:http://127.0.0.1/project/login12.php');
}


mysql_close($con);




?>