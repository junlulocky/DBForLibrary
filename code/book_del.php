<?php
include("Conn/conn.php");
$info_del=mysql_query("delete from book where book_id='$_GET[id]'");
if($info_del){
    echo "<script language='javascript'>alert('图书信息删除成功!');history.back();</script> ";
}
?>
