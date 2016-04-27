<?php
session_start();
$newpwd=@$_POST[pwd];
include("conn/conn.php");
$sql=mysql_query("update admin set password='$newpwd' where admin_id='$_SESSION[admin_id]'");
?>
<script language="javascript">alert("口令更改成功!");window.location.href="pwd_modify.php";</script>		
