<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

<head>
<title>University Library Management System</title>   <!--title 元素的内容会显示在浏览器的标题栏中,我用的是搜狗浏览器，标题栏在左上角 -->
<link href="CSS/style.css" rel="stylesheet" />    <!--链接一个外部样式表,只能存在于head部分，不过可以出现很多次 -->
</head>

<script language="javascript">
function check(form){
	if (form.name.value==""){
		alert("请输入管理员名称!");
        form.name.focus();
        return false;
	}
	if (form.pwd.value==""){
		alert("请输入密码!");
        form.pwd.focus();
        return false;
	}	
}
</script>

<body bgcolor="#d0d0d0">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php include("date_login.php"); ?>
<form name="form1" method="post" action="chklogin.php">
  <table width="100%"  border="0" cellspacing="0" cellpadding="0" >
    <tr>
      <td width="30%" bgcolor="#DCDCDC">&nbsp;</td>
      <td width="32%"  background="images/view.jpg">
      <table width="603" height="243"  border="0" align="center" cellpadding="0" cellspacing="0" > </td>
        <tr>
          <td width="50%" height="100" align="center">&nbsp;</td>
          <td width="50%">&nbsp;</td>
        </tr>
        <tr>
          <td height="90" rowspan="3" align="center">&nbsp;</td>
          <td height="30" valign="top">Admin ID :  
            <input name="name" type="text" class="logininput" id="name3" size="25" value="3100102884"></td>
        </tr>
        <tr>
          <td height="30" valign="top">Admin Pwd:
            <input name="pwd" type="password" class="logininput" id="pwd2" size="25" value="19911218"></td>
        </tr>
        <tr>
          <td height="30" align="center" valign="top"><input name="submit" type="submit" class="btn_grey" value="OK" onClick="return check(form1)">
          &nbsp;&nbsp;
          <input name="submit3" type="reset" class="btn_grey" value="Reset">
          &nbsp;&nbsp;
          <input name="submit2" type="button" class="btn_grey" value="Close" onClick="window.close();"></td>
        </tr>
        <tr bgcolor="#e3F4F7">
          <td height="53" colspan="2" align="center"><a href="bookfind.php">Not an administrator??? Please click here</a></td>
        </tr>
        
      </table></td>
      <td width="30%" bgcolor="#DCDCDC"><br></td>
    </tr>
  </table>
</form>
</body>
</html>
