<html>
<body>
<?php
$filename = 'e:\wamp\www\library\download\[ͨ���������].���.���ְ�.pdf';
header("Content-Type:application/pdf");
header('Content-Disposition:attachment;filename='.$filename);
header('Content-Transfer-Encodeing: binary');
readfile($filename);
?>
</html>
</body>






