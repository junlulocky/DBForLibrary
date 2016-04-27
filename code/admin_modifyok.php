<?php include("check_login.php");?>
<?php 

$name=@$_POST[name];
$admin_id=@$_POST[admin_id];
$phone=@$_POST[phone];
$remark=@$_POST[remark];
include("conn/conn.php");
@$sql=mysql_query("update admin set name='$name',phone='$phone',remark='$remark' where admin_id= '$_SESSION[admin_id]'");
if($sql==true){
	echo "<script language='javascript'>alert('管理员信息修改成功!');window.location.href='admin.php';</script>";
}
else{
	echo "<script language='javascript'>alert('管理员信息修改失败!');window.location.href='admin.php';</script>";
}
?>

