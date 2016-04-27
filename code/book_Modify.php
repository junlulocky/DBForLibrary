<?php include("check_login.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<style type="text/css">
<!--
.style1 {color: #FF6600}
-->
</style>
</head>
<script language="javascript">
function check(form){
	if(form.barcode.value==""){
		alert("请输入书本号!");form.barcode.focus();return false;
	}
	if(form.bookName.value==""){
		alert("请输入图书姓名!");form.bookName.focus();return false;
	}
	if(form.price.value==""){
		alert("请输入图书定价!");form.price.focus();return false;
	}
form.submit();
}
</script>
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
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="475"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="473" align="center" valign="top" style="padding:5px;"><table width="98%" height="463"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：图书档案管理 &gt; 修改图书信息 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td height="441" align="center" valign="top"><table width="100%" height="421"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="421" align="center" valign="top">
	<form name="form1" method="post" action="book_modify_ok.php">
	<?php
	include("conn/conn.php");
	$sql=mysql_query("select * from book where book_id ='$_GET[id]'");     
	$info=mysql_fetch_array($sql);
	?>
    <input type="hidden" name="bid" value="<?php echo @$info[book.id];?>">
    <table width="600" height="397"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="173" align="center">书&nbsp;本&nbsp;号：</td>
        <td width="427" height="33">
          <input name="barcode" type="text" id="barcode" value="<?php echo @$info[book_id];?>"></td>
      </tr>
      <tr>
        <td align="center">图书名称：</td>
        <td height="35"><input name="bookName" type="text" id="bookName" value="<?php echo @$info[book_name];?>" size="50">
          <span class="style1"></span></td>
      </tr>
      <tr>
        <td height="35" align="center">图书类型：</td>
        <td>
		<input name="type" class="wenbenkuang" type="text" id="typeId" value="<?php echo @$info[type];?>">
		</td>
      </tr>
      <tr>
        <td align="center">作&nbsp;&nbsp;者：</td>
        <td><input name="author" type="text" id="author" value="<?php echo @$info[author];?>" size="40"></td>
      </tr>
      <tr>
        <td height="36" align="center">出版时间：</td>
        <td><input name="time" type="text" id="time" value="<?php echo @$info[publish_time];?>" size="40"></td>
      </tr>
      <tr>
        <td height="34" align="center">出&nbsp;版&nbsp;社：</td>
        <td>
		<input name="press" class="wenbenkuang" value="<?php echo @$info[press];?>" size="40">
		</td>
      </tr>
      <tr>
        <td align="center">价&nbsp;&nbsp;格：</td>
        <td><input name="price" type="text" id="price" value="<?php echo @$info[price];?>">
        (元)</td>
      </tr>
      <tr>
        <td align="center">余&nbsp;&nbsp;量：</td>
        <td><input name="number" type="text" id="number" value="<?php echo @$info[number];?>">
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input name="Submit" type="submit" class="btn_grey" value="保存" onClick="return check(form1)">&nbsp;
			<input name="Submit2" type="button" class="btn_grey" value="返回" onClick="history.back();"></td>
        </tr>
    </table>
	</form>	</td>
  </tr>
</table></td>
      </tr>
    </table></td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>

