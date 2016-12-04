<?php include("check_login.php");?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<head>
<title>Library Management System</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<script language="javascript">
function check(form){
	if(form.name.value==""){
		alert("Please enter the administrator name!");form.name.focus();return false;
	}
	if(form.phone.value==""){
		alert("Please enter the administrator mobile NO!");form.paperNO.focus();return false;
	}
}
</script>
<body>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF">
    <table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;">
    <table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">Current Location: Admin &gt; Admin File Management &gt; Edit Administrator Information  &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
  <tr>
<?php 
  include("conn/conn.php");
	$query=mysql_query("select * from admin where admin_id='$_GET[id]'");
	$result=mysql_fetch_array($query);
?>


    <td align="center" valign="top">	
    <form name="form1" method="post" action="admin_modifyok.php">
      <table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td width="173" align="center">Name:</td>
          <td width="427" height="39">
            <input name="name" type="text" value="<?php echo @$result[name];?>">
        * </td>
        </tr>
        <tr>
          <td><input name="admin_id" type="hidden" id="admin_id" value="<?php echo @$result[admin_id];?>">
        </td>
        </tr>
        <tr>
          <td align="center">Mobile:</td>
          <td><input name="phone" type="text" id="phone" value="<?php echo @$result[phone];?>"></td>
        </tr>
        <tr>
          <td align="center">Remark:</td>
          <td><textarea name="remark" cols="50" rows="5" class="wenbenkuang" id="remark"><?php echo @$result[remark];?></textarea></td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
          <td><input name="Submit" type="submit" class="btn_grey" value="保存" onClick="return check(form1)">
&nbsp;
        <input name="Submit2" type="button" class="btn_grey" value="返回" onClick="history.back()"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table></td>
      </tr>
    </table>
</td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
