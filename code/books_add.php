<?php 
session_start();
include("conn/conn.php");
$f_open=fopen("e:/wamp/www/library/upload/books.txt","r");
$farr = file_get_contents("e:/wamp/www/library/upload/books.txt");
$arr = explode("\n",$farr);
$num = count($arr);
for($i=1;$i<=$num;$i=$i+1){
	@$f_arr=fgets($f_open);
	@$array = explode("	",$f_arr);
	@$book_id = $array[0];
	@$type = $array[1];
	@$book_name = $array[2];
	@$press = $array[3];
	@$publish_time = $array[4];
	@$author = $array[5];
	@$price = $array[6];
	@$number = $array[7];
	mysql_query("update book_number set store = store + $number where book_id = '$book_id'");
	mysql_query("update book set number = number + $number where book_id = '$book_id'");
	mysql_query("update book_number set inventory = inventory + $number where book_id = '$book_id'");
}
fclose($f_open);
mysql_query("load data local infile 'e:/wamp/www/library/upload/books.txt' into table book");
echo "<script language='javascript'>alert('导入书本成功!');window.location.href='book.php';</script>";
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
