
<html>
<head>
<title>Welcome</title>
<style type="text/css">
<!--
.style2 {font-size: 24px}
.style3 {font-size: 24px; font-weight: bold; }
.style4 {font-size: 36px; font-weight: bold; }
-->
</style>
</head>

<body>

<?php

function dispname()
{	
	include("config.php");

	$sql1="select custname from customer where master=1";
	$result=mysql_query($sql1);
	$row = mysql_fetch_array($result);
	$temp=$row['custname'];
	mysql_close($link);
	echo $temp;
}

?>
<body background="back.jpg">
<p>&nbsp;	</p>
<p>
  <marquee class="style4">
  PORTFOLIO MANAGEMENT SYSTEM
  </marquee>
</p>
<pre>





<p class="style3">Welcome <?php dispname(); ?>
  to profolio managment systems</p>
</body>
</html>
