<html>
<body>
<?php
$filename = $filename = 'e:\wamp\www\library\download\Qt4���Ľ̳�[������].pdf';
header("Content-Type:application/pdf");
header('Content-Disposition:attachment;filename='.$filename);
header('Content-Transfer-Encodeing: binary');
readfile($filename1);
?>
</html>
</body>






