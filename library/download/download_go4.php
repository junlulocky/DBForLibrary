<html>
<body>
<?php
$filename = 'e:\wamp\www\library\download\StrayBirds.txt';
header("Content-Type:text/plain");
header('Content-Disposition:attachment;filename='.$filename);
header('Content-Transfer-Encodeing: binary');
readfile($filename);
?>
</html>
</body>






