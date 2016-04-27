<html>
<body>
<?php
$filename = $filename = 'e:\wamp\www\library\download\Qt4中文教程[完整版].pdf';
header("Content-Type:application/pdf");
header('Content-Disposition:attachment;filename='.$filename);
header('Content-Transfer-Encodeing: binary');
readfile($filename1);
?>
</html>
</body>






