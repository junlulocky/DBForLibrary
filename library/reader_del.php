<?php
include("conn/conn.php");
@$id=$_GET[id];
@$sql=mysql_query("delete from library_card where card_id='$id'");
if($sql){
echo "<script language=javascript>alert('Reader information deleted successfully!');window.location.href='reader.php';</script>";
}
else{
echo "<script language=javascript>alert('Failed to delete reader information!');window.location.href='reader.php';</script>";
}
?>

