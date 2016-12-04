<?php
if (!session_id()) 
  session_start();   
include("conn/conn.php");
@$query=mysql_query("select m.admin_id,m.name from admin as m where m.admin_id='@$_SESSION[admin_name]'");
$info=mysql_fetch_array($query);
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<script src="JS/menu.JS"></script>
<div class=menuskin id=popmenu
      onmouseover="clearhidemenu();highlightmenu(event,'on')"
      onmouseout="highlightmenu(event,'off');dynamichide(event)" style="Z-index:100;position:absolute;"></div>
      <!--div调用menuskin这个样式，它的id是popmenu,当鼠标经过时执行一个函数clearhidemenu();highlightmenu(event,'on'),-->
      <!--当鼠标离开时再执行一个函数highlightmenu(event,'off');dynamichide(event)-->
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="115" align="right" valign="bottom"  >
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <p> <img src="images/zjulibrary.jpg" width="100%" height="100"></p>
      </tr>
      <tr>
        <td height="26" align="right">User：<?php echo @$_SESSION[admin_name];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="23%" align="right">
          <script type=text/javascript>
            document.write("<span id='labtime' width='120px' Font-Size='9pt'></span>")
            setInterval("labtime.innerText=new Date().toLocaleString()",1000)
          </script>
        </td>
      </tr>
      <!-- <tr>
        <td width="23%" align="right">
          <script type=text/javascript>
		        document.write("<span id='labtime' width='120px' Font-Size='9pt'></span>")
		        setInterval("labtime.innerText=new Date().toLocaleString()",1000)
		      </script>
        </td>
      </tr> -->
    </table>
    </td>
  </tr>
  <tr>
    <td height="33" align="right" background="images/menu_line1.jpg" bgcolor="#FD9C11">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1%"></td>
        
        <td width="85%" align="center"><a href="logined.php" class="a1">Home&nbsp</a> ┊ 
          <a  onmouseover=showmenu(event,sysmenu) onmouseout=delayhidemenu()  style="CURSOR:hand"  class="a1">Settings</a>&nbsp ┊&nbsp 
          <a  onmouseover=showmenu(event,readermenu) onmouseout=delayhidemenu()  style="CURSOR:hand" class="a1">Reader</a> &nbsp┊ 
          <a href="book.php" class="a1">Management</a> ┊ <a  onmouseover=showmenu(event,borrowmenu) onmouseout=delayhidemenu() style="CURSOR:hand"class="a1" >Borrow&Return</a> ┊ 
          <a  onmouseover=showmenu(event,querymenu) onmouseout=delayhidemenu()  style="CURSOR:hand" class="a1">Query</a> ┊ 
          <a  href="pwd_Modify.php" class="a1">Change pwd</a> ┊ 
          <a href="safequit.php" class="a1">Logout</a>
        </td>
        <td width="1%">&nbsp;</td>
      </tr>
    </table>
    </td>
  </tr>
</table>
