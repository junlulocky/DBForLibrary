<?php include("check_login.php");?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<head>
<title>图书馆管理系统</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<script language="javascript">
function check(form){
	if(form.name.value==""){
		alert("请输入读者姓名!");form.name.focus();return false;
	}
	if(form.barcode.value==""){
		alert("请输入证件号码!");form.paperNO.focus();return false;
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
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：读者管理 &gt; 读者档案管理 &gt; 修改读者信息 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
  <tr>
<?php 
  include("conn/conn.php");
	$query=mysql_query("select * from library_card where card_id='$_GET[id]'");
	$result=mysql_fetch_array($query);
?>


    <td align="center" valign="top">	<form name="form1" method="post" action="reader_modifyok.php">
      <table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td width="173" align="center">姓名：</td>
          <td width="427" height="39">
            <input name="name" type="text" value="<?php echo @$result[name];?>">
        * 
        <input name="readerid" type="hidden" id="readerid" value="<?php echo @$result[id];?>"></td>
        </tr>
        <tr>
          <td><input name="barcode" type="hidden" id="barcode" value="<?php echo @$result[card_id];?>">
          </td>
        </tr>
	  <tr>
        <td align="center">读者类型：</td>
        <td>
		<select name="typeid" class="wenbenkuang" id="typeid" >		
          <option value="teacher">teacher</option>
		  <option value="worker">worker</option>
		  <option value="student">student</option>
		  <option value="others">others</option>
        </select>        </td>
      </tr>
        <tr>
          <td align="center">单位：</td>
          <td><input name="unit" type="text" id="unit" value="<?php echo @$result[unit];?>"></td>
        </tr>
        <tr>
          <td align="center">备注：</td>
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
