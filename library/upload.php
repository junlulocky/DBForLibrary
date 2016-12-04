<form enctype="multipart/form-data" action="" method="post" enctype="multipart/form-data"> 
请选择文件： <br>
<input name="upload_file" type="file"><br>
<input type="submit" value="Upload"> 
</form> 
<form  action="books_add.php" method="post"> 
<input type="submit" value="Import book"> 
</form> 
<?php
$upload_file=@$_FILES['upload_file']['tmp_name'];
$upload_file_name=@$_FILES['upload_file']['name'];

if($upload_file){
$file_size_max = 1000*1000;
$store_dir = "e:/wamp/www/library/upload/";
$accept_overwrite = 1;
if (@$upload_file_size > $file_size_max) {
echo "Sorry, your file size is greater than specified";
exit;
}

// 检查读写文件
if (file_exists($store_dir . $upload_file_name) && !$accept_overwrite) {
Echo  "A file with the same file name exists";
exit;
}

//复制文件到指定目录
if (!move_uploaded_file($upload_file,$store_dir.$upload_file_name)) {
echo "Copy file failed!";
exit;
}

}



$Error=@$_FILES['upload_file']['error'];
switch($Error){
    case 0:
		echo "";
		break;
    case 1:
      Echo  "Uploaded file exceeds php.ini upload_max_filesize option limit value."; break;
    case 2:
      Echo  "The size of the uploaded file exceeds the value specified in the HTML form's MAX_FILE_SIZE option.";  break;
    case 3:
      Echo  "Only part of the file is uploaded";break;
    case 4:
      Echo  "No files are uploaded";break;
}
?>
