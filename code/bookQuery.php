<?php include("check_login.php");?>
<html>
<head>
<title>图书馆管理系统</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<script language="javascript">
function check(myform){
	if(myform.flag1.checked==false && myform.flag2.checked==false && myform.flag3.checked==false){
		alert("请选择查询方式!");return false;
	}
	if (myform.flag2.checked){
		if(myform.sdate.value==""){
			alert("请输入开始日期");myform.sdate.focus();return false;
		}		
		if(myform.edate.value==""){
			alert("请输入结束日期");myform.edate.focus();return false;
		}		
	}
	if (myform.flag3.checked){
		if(myform.lprice.value==""){
			alert("请输入开始价格");myform.lprice.focus();return false;
		}		
		if(myform.hprice.value==""){
			alert("请输入结束价格");myform.hprice.focus();return false;
		}		
	}
}
</script>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	<?php include ("navigation.php"); ?>
	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" align="center" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top">
	      <table width="723" height="37" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>&nbsp;
              <img src="images/booklist.png" width="50" height="50">
              <span class="word_orange">当前位置：系统查询 > 图书档案查询>>></span> 
   
              </td>
            </tr>
          </table>
	      <form  name="form1" method="post" action="">
            <table width="723" height="67"  border="0" cellpadding="1" cellspacing="0" bgcolor="#9ECFEE" class="tableBorder_gray">
              <tr>
                <td width="8%" rowspan="2" align="center">&nbsp;<img src="Images/querybook.png" width="37" height="29"></td>
                <td width="92%" height="29"><input name="flag1" type="checkbox" class="noborder" value="a" checked>
              请选择查询依据：
                <select name="f" class="wenbenkuang" id="f">
        <option value="<?php echo "book_id";?>">书本号</option>
        <option value="<?php echo "type";?>">类别</option>
        <option value="<?php echo "book_name";?>" selected>书名</option>
        <option value="<?php echo "author";?>">作者</option>
        <option value="<?php echo "press";?>">出版社</option>
                  </select>
                <input name="key1" type="text" id="key1" size="50">
                <input name="Submit" type="submit" class="btn_grey" value="查询" onClick="return check(form1);"></td>
              </tr>
              <tr>
                <td height="26">
                  <input name="flag2" type="checkbox" class="noborder" id="flag" value="b">
              出版时间： 从
              <input name="sdate" type="text" id="sdate">
              到
              <input name="edate" type="text" id="edate">
			  </td>
              </tr>
            </table>
			<table width="723" height="67"  border="0" cellpadding="1" cellspacing="0" bgcolor="#9ECFEE" class="tableBorder_gray">
			
			  <tr>
                <td height="26">
                  <input name="flag3" type="checkbox" class="noborder" id="flag" value="c">
              价格： 从
              <input name="lprice" type="text" id="lprice">
              到
              <input name="hprice" type="text" id="hprice">
              </td>
              </tr>
              
            </table>
</form>
<?php 
include("conn/conn.php");
$query=mysql_query("select * from book");
$result=mysql_fetch_array($query);
if($result==false){
?>
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">暂无图书信息！</td>
            </tr>
          </table>
<?php
 }
 else{
 ?>		  
  <table width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#D0E9F8">
    <td width="13%">书本号</td>  
    <td width="26%">图书名称</td>
    <td width="15%">图书类型</td>
    <td width="14%">出版社</td>
    <td width="12%">作者</td>
  </tr>
<?php
if(@$_POST[Submit]!=""){
@$f=$_POST[f];
@$key1=$_POST[key1];
@$sdate=$_POST[sdate];
@$edate=$_POST[edate];
@$lprice=$_POST[lprice];
@$hprice=$_POST[hprice];
@$flag1=$_POST[flag1];
@$flag2=$_POST[flag2];
@$flag3=$_POST[flag3];
if($flag1=="a"&&$flag2!="b"&&$flag3!="c"){
if(@$_POST[key1]==""){
@$sql=mysql_query("select * from book");
}else{
@$sql=mysql_query("select * from book where $f like '%$key1%' order by book_name");
}
}
if($flag1=="a"&&$flag2=="b"&&$flag3!="c"){
	$sql=mysql_query("select * from book where $f like '%$key1%' and publish_time between '$sdate' and '$edate' order by book_name");
}
if($flag1 !="a"&&$flag2=="b"&&$flag3!="c"){
	$sql=mysql_query("select * from book where publish_time between '$sdate' and '$edate' order by book_name");
}
if($flag1=="a"&&$flag2=="b"&&$flag3=="c"){
	$sql=mysql_query("select * from book where $f like '%$key1%' and publish_time between '$sdate' and '$edate' and price between '$lprice' and '$hprice' order by book_name");
}
if($flag1!="a"&&$flag2=="b"&&$flag3=="c"){
	$sql=mysql_query("select * from book where and publish_time between '$sdate' and '$edate' and price between '$lprice' and '$hprice' order by book_name");
}
if($flag1=="a"&&$flag2!="b"&&$flag3=="c"){
	$sql=mysql_query("select * from book where $f like '%$key1%'  and price between '$lprice' and '$hprice' order by book_name");
}
if($flag1!="a"&&$flag2!="b"&&$flag3=="c"){
	$sql=mysql_query("select * from book where price between '$lprice' and '$hprice' order by book_name");
}
$info=mysql_fetch_array($sql);
if($info==true){
do{
?>
  <tr align="center">
    <td style="padding:5px;">&nbsp;<?php echo @$info[book_id]; ?></td>  
    <td style="padding:5px;"><a href="book_look.php?id=<?php echo @$info[book_id]; ?>"><?php echo @$info[book_name]; ?></a></td>
    <td style="padding:5px;">&nbsp;<?php echo @$info[type]; ?></td>  
    <td style="padding:5px;">&nbsp;<?php echo @$info[press]; ?></td>  
    <td style="padding:5px;">&nbsp;<?php echo @$info[author]; ?></td>  
    </tr>
<?php
}while($info=mysql_fetch_array($sql));
}else{
?>
    <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
       <tr>
         <td height="36" align="center">您检索的图书信息不存在，请重新检索！</td>
       </tr>
    </table>
<?php
}
}
}
?>  
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
