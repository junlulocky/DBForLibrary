<?php
     $conn=mysql_connect("localhost","root","19911218") or die("���ݿ���������Ӵ���".mysql_error());
     mysql_select_db("library",$conn) or die("���ݿ���ʴ���".mysql_error());
     mysql_query("set names gb2312");
?>
