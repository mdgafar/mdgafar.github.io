<!DOCTYPE html>
<html>
<body>

<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
?>

</body>
</html>
