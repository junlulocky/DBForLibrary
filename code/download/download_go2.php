<html>
<body>
<?php
$filename = $filename = 'e:\wamp\www\library\download\Ð£Àú.pdf';
header("Content-Type:application/pdf");
header('Content-Disposition:attachment;filename='.$filename);
header('Content-Transfer-Encodeing: binary');
readfile($filename);
?>
</html>
</body>






