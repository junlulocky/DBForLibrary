<html>
<body>
<?php
$filename = 'e:\wamp\www\library\download\mysql---ʹ������.rar';
header("Content-Type:application/zip");
header('Content-Disposition:attachment;filename='.$filename);
header('Content-Transfer-Encodeing: binary');
readfile($filename);
?>
</html>
</body>






