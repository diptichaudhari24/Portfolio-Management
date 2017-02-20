<html>

<head>
<title>BUY SHARES</title>
<style type="text/css">
.style1 {
	font-size: xx-large;
	color: #00FFFF;
	font-weight: bold;
}
.style2 {
	font-weight: bold;
}
.style3 {
	color: #000000;
}
.style4 {
	color: #800080;
	font-size: large;
}
.style5 {color: #000066}
</style>

</head>

<body background="back.jpg">


<form action="http://localhost/project/buyshares.php" name="register" method="post"  onSubmit="return checkout(this.form);">
<script langauge="javascript">
alert("SORRY you dont have enough Funds");
</script>
<table cellpadding="0" cellspacing="0" style="width: 844px; height: 890px">
	<!-- MSTableType="layout" -->
	<tr>
		<td valign="top">&nbsp;</td>
		<td class="style1" colspan="3" valign="top">&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="2">&nbsp;</td>
		<td style="height: 48px"></td>
	</tr>
	<tr>
		<td class="style3" valign="top">&nbsp;</td>
		<td class="style1" colspan="3" valign="top">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td valign="top"></td>
		<td style="height: 48px"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="3" valign="top" class="style1 style5">BUY SHARES </td>
		<td>&nbsp;</td>
		<td colspan="2">&nbsp;</td>
		<td style="height: 96px"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td valign="top">&nbsp;</td>
	  <td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td colspan="2" valign="top">&nbsp;</td>
		<td style="height: 54px"></td>
	</tr>
	<tr>
		<td rowspan="2" valign="top">&nbsp;</td>
		<td valign="top"><b>Acc No </b></td>
		<td valign="top">
		  <select name="accno" style="width: 124px">

			<?php 
			include("config.php");
	
			$sql1="select custid from customer where master=1";
			$result=mysql_query($sql1);
			$row = mysql_fetch_array($result);
			$sql="select accno from account where custid = '$row[custid]'";
			$res=mysql_query($sql,$link);
			
			while($row = mysql_fetch_array($res))
  			{
  				echo "<option>$row[accno]</option>";
 
  			}


			mysql_close($link);
			?>
			</select>
		</td>
		<td rowspan="2" valign="top">&nbsp;</td>
		<td rowspan="2" valign="top">&nbsp;</td>
		<td colspan="2" rowspan="2" valign="top">&nbsp;</td>
		<td style="height: 58px"></td>
	</tr>
	<tr>
		<td valign="top"><strong>Company Name </strong></td>
		<td valign="top">
		<select name="compname" style="width: 124px">

			<?php 
			include("config.php");
	
			$sql="select compname from company order by(compname)";
			$res=mysql_query($sql,$link);
			
			while($row = mysql_fetch_array($res))
  			{
  				echo "<option>$row[compname]</option>";
 
  			}


			mysql_close($link);
			?>
		</select>

		</td>
		<td style="height: 55px"></td>
	</tr>
	<tr>
		<td valign="top">&nbsp;</td>
		<td valign="top"><strong>Quantity</strong></td>
		<td valign="top">
				<input class="style2" name="quantity" type="text" />		</td>
		<td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td colspan="2" valign="top">&nbsp;</td>
		<td style="height: 55px"></td>
	</tr>
	<tr>
		<td valign="top">&nbsp;</td>
		<td valign="top"><strong>Buy Date</strong> </td>
		<td valign="top">
			<input class="style2" name="buydate" type="text" value="<?php echo date("d/m/Y"); ?>"/>		</td>
		<td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td colspan="2" valign="top">&nbsp;</td>
		<td style="height: 51px"></td>
	</tr>
	<tr>
		<td height="54" valign="top">&nbsp;</td>
		<td valign="top"><input name="buy_shares" style="width: 129px; height: 30px" type="submit" value="BUY" /></td>
		<td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td colspan="2" valign="top">&nbsp;</td>
		<td style="height: 51px"></td>
	</tr>
	<tr>
	  	<td colspan="8" class="style4">Sorry! You don't have enough balance.</td>
	</tr>
	<tr>
		<td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td valign="top">
		</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="2">&nbsp;</td>
		<td style="height: 58px"></td>
	</tr>
	
	<tr>
		<td style="width: 138px">&nbsp;</td>
		<td style="width: 138px">&nbsp;</td>
		<td style="width: 140px">&nbsp;</td>
		<td style="width: 141px">&nbsp;</td>
		<td style="width: 141px">&nbsp;</td>
		<td colspan="2" style="width: 141px">&nbsp;</td>
		<td style="height: 210px; width: 5px"></td>
	</tr>
</table>
</form>
</body>

</html>
