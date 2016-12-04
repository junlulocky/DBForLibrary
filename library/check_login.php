<?php
session_start();
if($_SESSION['admin_name']==""){
	echo "<script>alert('Sorry, please register the library management system in the right way.');window.location.href='login.php';</script>";
}
?>
