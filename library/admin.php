<html>
<?php include("check_login.php");?>
<head>
<link href="CSS/style.css" rel="stylesheet">   
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" align="center" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">Current Location: Admin &gt; Admin File Management  &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
<?php 
if(@$_SESSION[admin_id]=='root'){
include("conn/conn.php");
$sql=mysql_query("select * from admin");
$info=mysql_fetch_array($sql);
if($info==false){
?> 
<table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">No other administrator information!</td>
            </tr>
          </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <a href="admin_add.php">Add another administrator information</a>
    </td>
  </tr>
</table>
 <?php 
}
  ?>  
 

<?php 
  
}else{
	$sql=mysql_query("select * from admin where admin_id = '$_SESSION[admin_id]'");
	$info=mysql_fetch_array($sql);
?> 
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="87%">&nbsp;      </td>
    <td width="13%">
      <a href="admin_add.php">Add Admin Info</a></td>	  
  </tr>
</table>
<table width="96%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="30%">ID</td>  
    <td width="30%">Name</td>
    <td width="30%">Contact</td>
  </tr>
  <tr>
    <td style="padding:5px;"align="center"><?php echo @$info[admin_id];?> </td>  
    <td style="padding:5px;"align="center"><?php echo @$info[name];?> </td>
    <td align="center"><?php echo @$info[phone];?> </td>
     <td width="6%" align="center"><a href="admin_modify.php?id=<?php echo @$info[admin_id];?>">Update</a></td>
    <td width="5%" align="center">Delete</td>
  </tr>
<?php
}
	?></table>
</td>
      </tr>
    </table></td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
