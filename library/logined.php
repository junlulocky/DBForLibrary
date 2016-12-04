<?php 
include("check_login.php"); 
include("conn/conn.php");
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">   <!--在html中meta标签没有结束标签--> 
                  <!--charset 属性用于指定作为链接目标的文档中所使用的字符编码,GB2312码是中华人民共和国国家汉字信息交换用编码-->
<head>
<title>Library Management System</title>
<link href="CSS/style.css" rel="stylesheet">
</head>

<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td><?php include("navigation.php"); ?></td>
  </tr>
	<td bgcolor="#FFFFFF">    <!--背景色是白色--> 
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top" bgcolor="#FFFFFF">
          <table width="100%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
            <tr>
              <td align="center" valign="top" style="padding:5px;">
                 <table width="738"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                  <td height="148" valign="top">
                  <table width="738"  border="0" cellspacing="0" cellpadding="0">                
                  <td height="5" colspan="1" >
                    <a href="download.php" target="_blank"> 
                    Current page: Home > E-book download page >>>             
                    </a>
                  </td> 
                  </table>
<table align="right">
<tr><td ><?php include("date.php"); ?></td>
</tr>
</table>

                  </td>
                  </tr>
<tr>
<marquee direction="right" VSPACE = 30 SCROLLAMOUNT = 5 loop=100 onMouseOut="this.start()" onMouseOver="this.stop()">
<?php 
echo "Hello！Welcome to my library!" ;
?>
</marquee>
</tr>
                 </table>
                <p>&nbsp;</p>
             </td>
             </tr>
          </table>
        </td>
      </tr>
    </table>
  <?php include("copyright.php"); ?></td>
  </tr>
</table>
</html>
