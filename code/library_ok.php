<?php
session_start();
if(@$_POST[Submit]!=""){
$libraryname=@$_POST[libraryname];
$curator=@$_POST[curator];
$tel=@$_POST[tel];
$address=@$_POST[address];
$email=@$_POST[email];
$url=@$_POST[url];
$createDate=@$_POST[createDate];
$introduce=@$_POST[introduce];
include("conn/conn.php");
$query=mysql_query("update library set library_name='$libraryname',curator='$curator',phone='$tel',address='$address',email='$email',url='$url',create_date='$createDate',introduce='$introduce' where admin_id='3100102884'");
if($query==true){
	echo "<script language=javascript>alert('图书馆信息修改成功！');history.back();</script>";
}else{
	echo "<script language=javascript>alert('图书馆信息修改失败！');history.back();</script>";
}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gbk2312">
