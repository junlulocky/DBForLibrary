<?php include("check_login.php");?>
<html>
<head>
<title>图书馆管理系统</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
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
        <table width="98%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="22" valign="top" class="word_orange">当前位置：图书管理 &gt; 图书档案管理 &gt;&gt;&gt;</td>
        </tr>
      <tr>
        <td align="center" valign="top">
		<?php
		include("Conn/conn.php");
		$query=mysql_query("select * from book natural join book_number");
		$result=mysql_fetch_array($query);
        if($result==false){
		?>
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">暂无图书信息！</td>
            </tr>
          </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <a href="book_add.php">添加图书信息</a> </td>
  </tr>
    <tr>
    
</table>
 <?php
}else{
?>
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="87%">&nbsp;      </td>
	<td width="13%">
      <a href="book_add.php">添加图书信息</a></td>
  </tr>
</table>
  <table width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="13%">书本号</td>
    <td width="26%">图书名称</td>
    <td width="15%">图书类型</td>
    <td width="14%">出版社</td>
    <td width="12%">余量</td>
    <td width="6%">修改</td>
    <td width="5%">删除</td>
  </tr>
<?php do{ ?>
  <tr align="center">
    <td style="padding:5px;">&nbsp;<?php echo @$result[book_id];?></td>
    <td style="padding:5px;"><a href="book_look.php?id=<?php echo @$result[book_id];?>"><?php echo @$result[book_name];?></a></td>
    <td style="padding:5px;">&nbsp;<?php echo @$result[type];?></td>
    <td style="padding:5px;">&nbsp;<?php echo @$result[press];?></td>
    <td style="padding:5px;">&nbsp;<?php echo @$result[number];?></td>
    <td align="center"><a href="book_Modify.php?id=<?php echo @$result[book_id];?>">修改</a></td>
    <td align="center"><a href="book_del.php?id=<?php echo @$result[book_id];?>">删除</a></td>
  </tr>
<?php
  }while($result=mysql_fetch_array($query));?>

  <?php
}
?>

</td>
      </tr>
    </table>
    <table width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
    <a href="upload.php">批量上传书本</a>
    </table>
</td>
  </tr>
  <tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr>
  <tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr>
  <tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr>
  <tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr>
  <tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr>
  <tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
