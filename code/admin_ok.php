<?php include("check_login.php");?>
<?php
include("conn/conn.php");
if(@$_POST[Submit]!=""){
@$name=$_POST[name];
@$admin_id=$_POST[admin_id];
@$phone=$_POST[phone];
@$password=$_POST[password]; 
@$sql=mysql_query("insert into admin values('$admin_id','$password','$name','$phone')");
if($sql==true){
echo "<script language=javascript>alert('����Ա��Ϣ��ӳɹ���');history.back();location.href='admin.php';</script>";
}
else{
echo "<script language=javascript>alert('����Ա��Ϣ���ʧ�ܣ�');history.back();window.opener.location.reload();</script>";
}
}
?>
