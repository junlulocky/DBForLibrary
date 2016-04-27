<?php include("check_login.php");?>
<html>
<head>
<link href="CSS/style.css" rel="stylesheet">
		<script language="javascript">
		function checkreader(form){
			if(form.barcode.value==""){
				alert("请输入读者证件号!");form.barcode.focus();return;
			}
			form.submit();
		}
		function checkbook(form){
			if(form.barcode.value==""){
				alert("请输入读者证件号!");form.barcode.focus();return;
			}		
			if(form.inputkey.value==""){
				alert("请输入查询关键字!");form.inputkey.focus();return;
			}
        form.submit();
	   }
		</script>
</head>
<body>
<?php include("navigation.php");?>
<table width="776"  border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td valign="top" bgcolor="#FFFFFF">
    <table width="100%" height="509"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
    <tr>
    <td align="left" valign="top" style="padding:5px;"> &nbsp; <span class="word_orange">&nbsp;当前位置：图书借还 &gt; 图书借阅&gt;&gt;&gt; </span>      
      <table width="100%"  border="0" cellpadding="0" cellspacing="0">
	<?php
		include("conn/conn.php");
		$barcode=@$_POST['barcode'];
		$sql=mysql_query("select * from library_card where card_id = '$barcode'");
		//$sql=mysql_query("select r.*,t.name as typename,t.number,book.bookname,book.price,borr.borrowTime,borr.backTime,pub.pubname,bc.name as bookcase from tb_reader r left join tb_readerType t on r.typeid=t.id join tb_borrow as borr on borr.readerid=r.id join tb_bookinfo as book on book.id=borr.bookid join tb_publishing as pub on book.ISBN=pub.ISBN  join tb_bookcase as bc on book.bookcase=bc.id where r.barcode='$barcode'");
		$info=mysql_fetch_array($sql);
	?>
	<form name="form1" method="post" action="">
        <tr>
          <td height="72" align="center" valign="top" background="Images/main_booksort_1.gif" bgcolor="#F8BF73">
          <br>		  
          <table width="96%" border="0" cellpadding="0" cellspacing="0" bordercolor="#00FFFF" bgcolor="#9ECFEE" class="tableBorder_grey">
          <tr>
              <td height="33" valign="top" background="Images/bookborr.gif">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                    <tr>
                      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="33" background="Images/bookborr.gif">&nbsp;</td>
                        </tr>
                  </table>
                        <table width="100%" height="21" border="0" cellpadding="0" cellspacing="0" >
                          <tr>
                            <td width="24%" height="18" style="padding-left:7px;padding-top:7px;">
                               <img src="Images/bg_line.gif" width="132" height="20">
                            </td>
                            
                 <tr>
                 <td width="92%" align="center">读者卡号：</td>
                 </tr>
               </tr>
               <tr>
                 <td height="27" colspan="2" align="center">
                 <input name="barcode" type="text" id="barcode" value="<?php echo $barcode;?>" size="24">
                   &nbsp;
                   <input name="Button" type="button" class="btn_grey" value="确定" onClick="checkreader(form1)"></td>
               </tr>
             </table></td>
             <td width="1%" align="center" valign="bottom"><img src="Images/borrow_fg.gif" width="18" height="111"></td>
             <td width="66%" align="right">
			 <table width="96%" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td height="27">姓&nbsp;&nbsp;&nbsp;&nbsp;名：
                       <input name="readername" type="text" id="readername" value="<?php echo @$info[name];?>"></td>
               </tr>
               <tr>
                 <td height="27">单&nbsp;&nbsp;&nbsp;&nbsp;位：
                   <input name="unit" type="text" id="unit" value="<?php echo @$info[unit];?>"></td>
               </tr>
               <tr>
                 <td height="27">读者类型：
                   <input name="readerType" type="text" id="readerType" value="<?php echo @$info[type];?>"></td>
               </tr>
							</tr>
                      </table></td>
                    </tr>
                </table></td>
            </tr>
                 <tr>
                   <td height="32">&nbsp;添加的依据：
                     <input name="f" type="radio" class="noborder" value="book_id" checked>
                     图书书本号（请查阅图书档案管理） &nbsp;&nbsp;
                     
  <input name="inputkey" type="text" id="inputkey" size="50">
                     <input name="Submit" type="button" class="btn_grey" id="Submit" onClick="checkbook(form1);" value="确定">
                     <input name="operator" type="hidden" id="operator" value="<?php echo @$_SESSION['adminname'];?>">
    <input name="Button2" type="button" class="btn_grey" id="Button2" onClick="window.location.href='bookBorrow.php'" value="完成借阅">                   </td>
                 </tr> 
            <tr>
              <td valign="top" bgcolor="#D2E5F1" style="padding:5px"><table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#9ECFEE" bgcolor="#FFFFFF">
                     <tr align="center" bgcolor="#E2F4F6">
                       <td width="29%" height="25">图书名称</td>
                       <td width="12%">借阅时间</td>
                       <td width="14%">应还时间</td>
                       <td width="17%">出版社</td>
                       <td width="14%">作者</td>
                       <td colspan="2">定价(元)</td>
                     </tr>
<?php
$readerid=@$info[card_id];
$sql1=mysql_query("select * from library_card,record,book where library_card.card_id=record.card_id and record.book_id=book.book_id and library_card.card_id = '$barcode'");
//$sql=mysql_query("select t.days from tb_bookinfo b left join tb_booktype t on b.typeid=t.id where b.barcode='$barcode'");
$info1=mysql_fetch_array($sql1);
$borrowNumber=mysql_num_rows($sql1);     //获取结果集中行的数目
do{
	if(@$info1[return_time] == NULL && @$info1[borrow_time] != NULL){
?>
                     <tr>
                       <td height="25" style="padding:5px;">&nbsp;<a href="book_look.php?id=<?php echo @$info1[book_id];?>"><?php echo @$info1[book_name];?></a></td>
                       <td style="padding:5px;">&nbsp;<?php echo @$info1[borrow_time];?></td>
                       <td style="padding:5px;">&nbsp;<?php echo "1 month later";?></td>
                       <td align="center">&nbsp;<?php echo @$info1[press];?></td>
                       <td align="center">&nbsp;<?php echo @$info1[author];?></td>
                       <td width="14%" align="center">&nbsp;<?php echo @$info1[price];?></td>
                     </tr>
<?php 
	}
}while($info1=mysql_fetch_array($sql1));
?>
   <input name="borrowNumber" type="hidden" id="borrowNumber" value="<?php echo $borrowNumber; ?>">

                   </table>			</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="19" background="Images/main_booksort_2.gif">&nbsp;</td>
        </tr>
	   </form>
<?php
if(@$_POST['inputkey']!=""){
@$f=$_POST[f];
@$inputkey=trim($_POST['inputkey']);
@$card_id=$_POST[barcode];
@$borrowTime=date('Y-m-d');
@$query=mysql_query("select * from book where $f='$inputkey'");
@$result=mysql_fetch_array($query);   //检索图书信息是否存在
if($result==false){
	echo "<script language='javascript'>alert('该图书不存在！');window.location.href='bookBorrow.php?barcode=$barcode';</script>";
}
else{
	$query1=mysql_query("select inventory from book_number natural join book where $f='$inputkey'");   //检索所借书籍的余量

	$result1=mysql_fetch_array($query1);
	if(@$result1[inventory]=='0'){    //如果借阅的图书已被该读者借阅，那么提示不能重复借阅 
		echo "<script language='javascript'>alert('该图书没有余量！');window.location.href='bookBorrow.php?barcode=$barcode';</script>";
	}
	else{    //否则，完成图书借阅操作
			@$bookid=$result[book_id];
			mysql_query("insert into record(book_id,card_id,borrow_time,return_time,admin_id) values('$result[book_id]','$card_id','$borrowTime',NULL,'$_SESSION[admin_id]')");
		
			//mysql_query("update book_number set inventory=inventory-1 where book_id='$bookid'");
 			echo "<script language='javascript'>alert('图书借阅操作成功！');window.location.href='bookBorrow.php?barcode=$barcode';</script>";
}
}
}
?>
    </table></td>
  </tr>
</table>
    <?php include("copyright.php");?></td>
  </tr>
</table>
</body>
</html>
