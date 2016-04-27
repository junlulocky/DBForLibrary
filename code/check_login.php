<?php
session_start();
if($_SESSION['admin_name']==""){
	echo "<script>alert('对不起，请通过正确的途径登图书馆管理系统!');window.location.href='login.php';</script>";
}
?>
