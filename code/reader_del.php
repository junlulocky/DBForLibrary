<?php
include("conn/conn.php");
@$id=$_GET[id];
@$sql=mysql_query("delete from library_card where card_id='$id'");
if($sql){
echo "<script language=javascript>alert('������Ϣɾ���ɹ���');window.location.href='reader.php';</script>";
}
else{
echo "<script language=javascript>alert('������Ϣɾ��ʧ�ܣ�');window.location.href='reader.php';</script>";
}
?>

