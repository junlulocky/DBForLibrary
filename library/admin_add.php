<?php include("check_login.php");?>
<html>
<script language="jscript">
function check(form){
	if(form.name.value==""){
		alert("Please enter the administrator name!");form.name.focus();return false;
	}
	if(form.admin_id.value==""){
		alert("Please enter the administrator ID!");form.barcode.focus();return false;
	}
	if(form.phone.value==""){
		alert("Please enter the mobile NO!");form.barcode.focus();return false;
	}
}
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>

    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">Current Location: Admin &gt; Admin File Management &gt; Add Administrator Info &gt;&gt;&gt;</td>
      </tr>  
      <tr>
        <td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">
	<form name="form1" method="post" action="admin_ok.php">
	<table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="173" align="center">Name:</td>
        <td width="427" height="39">
          <input name="name" type="text"> 
          *         </td>
      </tr>
      <tr>
        <td align="center">Admin ID:</td>
        <td><input name="admin_id" type="text" id="admin_id">
* </td>
      </tr>
      <tr>
        <td align="center">Password:</td>
        <td><input name="password" type="text" id="password">
* </td>
      </tr>
      <tr>         
        <td align="center">Mobile:</td>
        <td><input name="phone" type="text" id="phone">*</td>
      </tr>
      <tr>
        <td align="center">Remark:</td>
        <td><textarea name="remark" cols="50" rows="5" class="wenbenkuang" id="remark"></textarea></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td><input name="Submit" type="submit" class="btn_grey" value="Save" onClick="return check(form1)">
&nbsp;
<input name="Submit2" type="button" class="btn_grey" value="Back" onClick="history.back()"></td>
      </tr>
    </table>
	</form>
	</td>
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
