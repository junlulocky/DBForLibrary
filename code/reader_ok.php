<?php
include("conn/conn.php");
if(@$_POST[Submit]!=""){
  @$name=$_POST[name];
  @$barcode=$_POST[barcode];
  @$typeid=$_POST[typeid];
  @$unit=$_POST[unit];
  @$remark=$_POST[remark];
  @$sql=mysql_query("insert into library_card values('$barcode','$name','$unit','$typeid','$remark')");
  if($sql==true){
    echo "<script language=javascript>alert('读者信息添加成功！');history.back();location.href='reader.php';</script>";
  }
  else{
    echo "<script language=javascript>alert('读者信息添加失败！');history.back();window.opener.location.reload();</script>"; 
  }
}
?>
