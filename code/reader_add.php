<?php include("check_login.php");?>
<html>
<script language="jscript">
function check(form){
	if(form.name.value==""){
		alert("请输入读者姓名!");form.name.focus();return false;
	}
	if(form.barcode.value==""){
		alert("请输入条形码!");form.barcode.focus();return false;
	}
	if(form.unit.value==""){
		alert("请输入单位!");form.barcode.focus();return false;
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
      <td valign="top" bgcolor="#FFFFFF">
      <table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
    <tr>
      <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：读者管理 &gt; 读者档案管理 &gt; 添加读者信息 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
        <table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF">
        <tr>
          <td align="center" valign="top">
	        <form name="form1" method="post" action="reader_ok.php">
        	<table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tr>
              <td width="173" align="center">姓名：</td>
              <td width="427" height="39">
              <input name="name" type="text"> *</td>
            </tr>
            <tr>
              <td align="center">卡号：</td>
              <td><input name="barcode" type="text" id="barcode"> *</td>
            </tr>
	        <tr>
              <td align="center">读者类别：</td>
              <td>
	          <select name="typeid" class="wenbenkuang" id="typeid">		
              <option value="teacher">teacher</option>
		      <option value="worker">worker</option>
		      <option value="student">student</option>
		      <option value="others">others</option>
              </select>        
              </td>
            </tr>
	        <tr>
              <td align="center">单位：</td>
              <td><input name="unit" type="text" id="unit"></td>
            </tr>
            <tr>
              <td align="center">电话：</td>
              <td><input name="tel" type="text" id="tel"></td>
            </tr>
            <tr>
              <td align="center">备注：</td>
              <td><textarea name="remark" cols="50" rows="5" class="wenbenkuang" id="remark"></textarea></td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
              <td><input name="Submit" type="submit" class="btn_grey" value="保存" onClick="return check(form1)">
                 &nbsp;
                  <input name="Submit2" type="button" class="btn_grey" value="返回" onClick="history.back()">
              </td>
            </tr>
         </table>
	     </form>
	     </td>
         </tr>
       </table>
       </td>
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
