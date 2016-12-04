<?php session_start();?>
<html>
<head>
<title>Library Management System</title>
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
        <td height="22" valign="top" class="word_orange">Current Location: Book and file management &gt; Book details &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">
		<?php 
        include("conn/conn.php");
        $sql=mysql_query("select * from book natural join book_number where book_id='$_GET[id]'");
		$info=mysql_fetch_array($sql);
		?>
	<table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="173" align="center">Book NO:</td>
        <td width="427" height="39">
          <input name="barcode" type="text" id="barcode" value="<?php echo @$info[book_id];?>"></td>
      </tr>
      <tr>
        <td align="center">Book Title:</td>
        <td height="39"><input name="bookName" type="text" id="bookName" value="<?php echo @$info[book_name];?>" size="50"> 
        * </td>
      </tr>
      <tr>
        <td align="center">Category</td>
        <td>
		<input type="text" value="<?php echo @$info[type];?>">
         </td>
      </tr>
      <tr>
        <td align="center">Author:</td>
        <td><input name="author" type="text" id="author" value="<?php echo @$info[author];?>" size="40"></td>
      </tr>
      <tr>
        <td align="center">Date:</td>
        <td><input name="translator" type="text" id="translator" value="<?php echo @$info[publish_time];?>" size="40"></td>
      </tr>
      <tr>
        <td align="center">Press</td>
        <td>
		<input name="isbn" type="text" class="wenbenkuang" value="<?php echo @$info[press];?>">
        </td>
      </tr>
      <tr>
        <td align="center">Price:</td>
        <td><input name="price" type="text" id="price" value="<?php echo @$info[price];?>">
        (Ôª)</td>
      </tr>
      <tr>
        <td align="center">Amount:</td>
        <td><input name="page" type="text" id="page" value="<?php echo @$info[store];?>"></td>
      </tr>
      <tr>
        <td align="center">Remaining Amount:</td>
        <td><input name="bookcaseid" class="wenbenkuang" value="<?php echo @$info[inventory];?>">
      </tr>
      <tr>
        <td colspan="2" align="center">
			  <input name="Submit2" type="button" class="btn_grey" value="·µ»Ø" onClick="history.back();"></td>
        </tr>
    </table>
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
