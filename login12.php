﻿<html>

<head>

<title>Username</title>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("project", $con);


$result = mysql_query(" update customer set master = 0 where master = 1");

mysql_close($con);

?>
<script type="text/javascript">

function text_validate1()
{
	x=document.getElementById("username");
	y=document.getElementById("pass");
	if(x.value == "&nbsp;" || y.value == "&nbsp;")
	{
		alert("You cannot use blank character!!!");
	}
}

function text_validate()
{
	x=document.getElementById("username");
	y=document.getElementById("pass");
	if(x.value == "")
	{
		alert("You cannot leave Username blank!!!");
	}
	else if(y.value == "")
	{
		alert("You cannot leave Password blank!!!");
	}
}




</script>
</head>

<body background="back.jpg"><center><font size =5>PORTFOLIO MANAGEMENT SYSTEMS<br>LOGIN</font>
<form action="http://localhost/project/validate.php" method="post">
<table style="width: 25%; height: 73px; float: center">
	<tr>
		<td style="width: 80px; height: 2px;" align="right"><br/><br/>Username:</td>
		<td style="height: 2px" align="center"><br/><br/>
			<input name="cust_id" type="text" onKeyUp="text_validate1()" size="20" id="username" />
		&nbsp;</td>

	</tr>
	<tr>
		<td style="width: 80px; height: 5px;" align="right"><br/><br/>Password:</td>
		<td style="height: 5px" align="center"><br/><br/>
			<input name="cust_pass" type="password" size="20"  id="pass"/>
		&nbsp;</td>
	</tr>
	<tr>
	<td colspan="2" align="center"><br/>
	<input type="submit" value="Sign In!" id="signin" onClick="text_validate()"/>
	</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
	<td align="center" colspan="2"><input type="button" value="Create new account..." onClick="window.location.assign('newcust.html')" /></td>
	</tr>
</table>
</form>
</body>

</html>
