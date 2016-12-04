<?php
include("Conn/conn.php");
$info_del=mysql_query("delete from book where book_id='$_GET[id]'");
if($info_del){
    echo "<script language='javascript'>alert('Book information deleted successfully!');history.back();</script> ";
}
?>
