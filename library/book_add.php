<?php include("check_login.php");?>
<html>
<head>
<title>Library Management System</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<script language="javascript">
function check(form){
	if(form.barcode.value==""){
		alert("Please enter a book number!");form.barcode.focus();return false;
	}
	{
	}
	if(form.bookName.value==""){
		alert("Please enter a book title!");form.bookName.focus();return false;
	}
	if(form.price.value==""){
		alert("Please enter a book price!");form.price.focus();return false;
	}
	if(form.price.number==""){
		alert("Please enter the number of books!");form.price.focus();return false;
	}
form.submit();
}
</script>
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
		<td valign="top" bgcolor="#FFFFFF">
        <table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
	  <tr>
		<td height="510" align="center" valign="top" style="padding:5px;">
        <table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td height="22" valign="top" class="word_orange">Current Location: Book and file management &gt; Add book information &gt;&gt;&gt;</td>
		  </tr>
		  <tr>
			<td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
	  <tr>
    <td align="center" valign="top">
	<form name="form1" method="post" action="book_ok.php">
	<table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="173" align="center">书&nbsp;本&nbsp;号：</td>
        <td width="427" height="39">
          <input name="barcode" type="text" id="barcode"></td>
      </tr>
      <tr>
        <td align="center">Book Title:</td>
        <td height="39"><input name="bookName" type="text" id="bookName" size="50"> * </td>
      </tr>
      <tr>
        <td align="center">Category:</td>
        <td>
		<input name="type" type="text" id="type" size="50"> * 
		</td>
      </tr>
      <tr>
        <td align="center">Author:</td>
        <td><input name="author" type="text" id="author" size="40"></td>
      </tr>
      <tr>
        <td align="center">Date:</td>
        <td><input name="time" type="text" id="time" size="40"></td>
      </tr>
      <tr>
        <td align="center">Press:</td>
        <td>
		<input name="press" type="text" id="press" size="50"> * 
		</td>
      </tr>
      <tr>
        <td align="center">Press:</td>
        <td><input name="price" type="text" id="price">(Dollar)</td>
      </tr>
	  <tr>
        <td align="center">Amount:</td>
        <td>
		<input name="number" type="text" id="number" size="50"> * 
		</td>
      </tr>
      <tr>
        <td>
          <input name="operator" type="hidden" id="operator" value="<?php echo @$info3[name];?>"></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td><input name="Submit" type="submit" class="btn_grey" value="保存" onClick="return check(form1)">&nbsp;
			<input name="Submit2" type="button" class="btn_grey" value="返回" onClick="history.back();"></td>
      </tr>
    </table>
	</form>
	</td>
  </tr>
</table></td>
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
