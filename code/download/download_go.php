<html>
<body>
<?php
$filename = 'e:\wamp\www\library\download\[通信网络基础].李建东.文字版.pdf';
header("Content-Type:application/pdf");
header('Content-Disposition:attachment;filename='.$filename);
header('Content-Transfer-Encodeing: binary');
readfile($filename);
?>
</html>
</body>






