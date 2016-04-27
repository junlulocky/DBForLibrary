<?php 
session_start();
include("Conn/conn.php");
@$book_id=$_POST[barcode];
@$book_name=$_POST[bookName];
@$type=$_POST[type];
@$author=$_POST[author];
@$press=$_POST[press];
@$price=$_POST[price];
@$time=$_POST[time];
@$number=$_POST[number];
@$info = mysql_query("select * from book where book_id = '$book_id'");
echo $info;
if($info){
	mysql_query("update book_number set store = store + $number where book_id = '$book_id'");
	mysql_query("update book_number set inventory = inventory + $number where book_id = '$book_id'");
}
mysql_query("insert into book values ('$book_id','$type','$book_name','$press','$time','$author','$price','$number')");
echo "<script language='javascript'>alert('图书导入成功');history.back();</script>";
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
