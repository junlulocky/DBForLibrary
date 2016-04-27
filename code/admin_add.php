<?php include("check_login.php");?>
<html>
<script language="jscript">
function check(form){
	if(form.name.value==""){
		alert("请输入管理员姓名!");form.name.focus();return false;
	}
	if(form.admin_id.value==""){
		alert("请输入管理员ID!");form.barcode.focus();return false;
	}
	if(form.phone.value==""){
		alert("请输入电话号码!");form.barcode.focus();return false;
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
        <td height="22" valign="top" class="word_orange">当前位置：管理员管理 &gt; 管理员档案管理 &gt; 添加管理员信息 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">
	<form name="form1" method="post" action="admin_ok.php">
	<table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="173" align="center">姓名：</td>
        <td width="427" height="39">
          <input name="name" type="text"> 
          *         </td>
      </tr>
      <tr>
        <td align="center">管理员ID：</td>
        <td><input name="admin_id" type="text" id="admin_id">
* </td>
      </tr>
      <tr>
        <td align="center">密码：</td>
        <td><input name="password" type="text" id="password">
* </td>
      </tr>
      <tr>         
        <td align="center">电话：</td>
        <td><input name="phone" type="text" id="phone">*</td>
      </tr>
      <tr>
        <td align="center">备注：</td>
        <td><textarea name="remark" cols="50" rows="5" class="wenbenkuang" id="remark"></textarea></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td><input name="Submit" type="submit" class="btn_grey" value="保存" onClick="return check(form1)">
&nbsp;
<input name="Submit2" type="button" class="btn_grey" value="返回" onClick="history.back()"></td>
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
