<?php 
session_start();
include("conn/conn.php");
@$name=$_POST[name];
@$barcode=$_POST[barcode];
@$unit=$_POST[unit];
@$typeid=$_POST[typeid];
@$remark=$_POST[remark];
@$sql=mysql_query("update library_card set name='$name',unit='$unit',type='$typeid',remark='$remark'  where card_id= '$barcode'");
if($sql==true){
	echo "<script language='javascript'>alert('������Ϣ�޸ĳɹ�!');window.location.href='reader.php';</script>";
}
else{
	echo "<script language='javascript'>alert('������Ϣ�޸�ʧ��!');window.location.href='reader.php';</script>";
}

?>
