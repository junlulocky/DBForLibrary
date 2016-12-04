<?php 
session_start();

@$book_id=$_POST[barcode];
@$book_name=$_POST[bookName];
@$type=$_POST[type];
@$press=$_POST[press];
@$author=$_POST[author];
@$time=$_POST[time];
@$price=$_POST[price];
@$number=$_POST[number];
include("conn/conn.php");
@$query=mysql_query("update book set book_id='$book_id', type='$type',book_name='$book_name',press='$press',publish_time='$time',author='$author',price='$price',number='$number' where book_id='$book_id'");
@$query2=mysql_query("update book_number set store='$number' where book_id='$book_id'");
echo "<script language='javascript'>alert('Book information modified successfully!');history.back();</script>";
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
