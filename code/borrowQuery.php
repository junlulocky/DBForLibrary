<?php session_start();?>
<html>
<head>
<link href="CSS/style.css" rel="stylesheet">
<script src="JS/function.js"></script>
</head>
<script language="javascript">
function check(myform){
	if(myform.flag1.checked==false && myform.flag2.checked==false){
		alert("��ѡ���ѯ��ʽ!");return false;
	}
	if (myform.flag2.checked){
		if(myform.sdate.value==""){
			alert("�����뿪ʼ����");myform.sdate.focus();return false;
		}		
		if(CheckDate(myform.sdate.value)){
			alert("������Ŀ�ʼ���ڲ���ȷ���磺2007-12-01��\n ��ע������!");myform.sdate.focus();return false;
		}
		if(myform.edate.value==""){
			alert("�������������");myform.edate.focus();return false;
		}		
		if(CheckDate(myform.edate.value)){
			alert("������Ľ������ڲ���ȷ���磺2007-12-01��\n ��ע������!");myform.edate.focus();return false;
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
    <td height="510" align="left" valign="top" style="padding:5px;">      <table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
      
        <td class="word_orange"><img src="images/booklog.png" width="50" height="50"> &nbsp;&nbsp;��ǰλ�ã�ͼ��軹 &gt; ͼ����Ĳ�ѯ&gt;&gt;&gt; </td>
      </tr>
      <tr>
        <td align="center" valign="top">
          <table width="723" height="37" border="0" cellpadding="0" cellspacing="0">
          
          </table>
          <form name="myform" method="post" action="">
            <table width="723" height="67"  border="0" cellpadding="1" cellspacing="0" bgcolor="#9ECFEE" class="tableBorder_gray">
              <tr>
                <td width="8%" rowspan="2" align="center">&nbsp;<img src="Images/querybook.png" width="37" height="29"></td>
                <td width="92%" height="29"><input name="flag1" type="checkbox" class="noborder" value="a" checked>
              ��ѡ���ѯ���ݣ�
                <select name="f" class="wenbenkuang" id="f">
                  <option value="book_id" >ͼ��������</option>
                  <option value="book_name">ͼ������</option>
                  <option value="card_id">����������</option>
                  <option value="name">��������</option>
                </select>
                <input name="key1" type="text" id="key1" size="50">
                <input name="Submit" type="submit" class="btn_grey" value="��ѯ" onClick="return check(myform);"></td>
              </tr>
              <tr>
                <td height="26">
                  <input name="flag2" type="checkbox" class="noborder" id="flag" value="b">
              ����ʱ�䣺 ��
              <input name="sdate" type="text" id="sdate">
              ��
              <input name="edate" type="text" id="edate">
              (���ڸ�ʽΪ��2013-03-03)</td>
              </tr>
            </table>
          </form>
          <?php 
include("conn/conn.php");
//if($_POST[key1]=="" && $_POST[sdate]=="" && $_POST[edate]==""){
$sql=mysql_query("select * from record ,library_card,book where library_card.card_id = record.card_id and record.book_id = book.book_id");
//}

if(@$_POST[Submit]!=""){
	@$f=$_POST[f];
	@$key1=$_POST[key1];
	@$sdate=$_POST[sdate];
	@$edate=$_POST[edate];
	@$flag1=$_POST[flag1];
	@$flag2=$_POST[flag2];
	if($flag1=="a"){
	$sql=mysql_query("select * from record ,library_card,book where library_card.card_id = record.card_id and record.book_id = book.book_id and record.$f like '%$key1%'");
	}
	if($flag2=="b"){
	$sql=mysql_query("select * from record ,library_card,book where library_card.card_id = record.card_id and record.book_id = book.book_id and borrow_time between '$sdate' and '$edate'");
	}
	if($flag1=="a" && $flag2=="b"){
	$sql=mysql_query("select * from record ,library_card,book where library_card.card_id = record.card_id and record.book_id = book.book_id  where borrow_time between '$sdate' and '$edate' and $f like '%$key1%'");
	}
}
@$result=mysql_fetch_array($sql);
if($result==false){
?>
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">����ͼ�������Ϣ��</td>
            </tr>
          </table>
          <?php
}
else{
?>
          <table width="723"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
            <tr align="center" bgcolor="#D0E9F8">
              <td width="13%">ͼ��������</td>
              <td width="20%">ͼ������</td>
              <td width="15%">����������</td>
              <td width="11%">��������</td>
              <td width="13%">����ʱ��</td>
              <td width="11%">�黹ʱ��</td>
			  <td width="7%">������</td>
              <td width="10%">�Ƿ�黹</td>
            </tr>
            <?php
do{
if(@$result[return_time]==NULL){
		$ifbackstr="δ�黹";
}else{
		$ifbackstr="�ѹ黹";
}
?>
            <tr>
              <td style="padding:5px;">&nbsp;<?php echo @$result[book_id];?></td>
              <td style="padding:5px;"><a href="book_look.php?id=<?php echo @$result[book_id]; ?>"><?php echo @$result[book_name];?></a></td>
              <td style="padding:5px;">&nbsp;<?php echo @$result[card_id];?></td>
              <td style="padding:5px;">&nbsp;<?php echo @$result[name];?></td>
              <td style="padding:5px;">&nbsp;<?php echo @$result[borrow_time];?></td>
              <td style="padding:5px;">&nbsp;<?php echo @$result[return_time];?></td>
			  <td style="padding:5px;">&nbsp;<?php echo @$result[admin_id];?></td>
              <td style="padding:5px;">&nbsp;<?php echo @$ifbackstr;?></td>
            </tr>
            <?php
	}while($result=mysql_fetch_array($sql));
}
?>
          </table>
    </table></td>
  </tr>
    </table><?php include("copyright.php");?></td>
  </tr>
</table></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
