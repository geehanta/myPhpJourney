<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<?php
$isMale = true;
$isTall = true;
if ($isMale && $isTall){
echo "You are a tall male individual!!";
}elseif($isMale && !$isTall){
    echo "Youre short!";
}
else {
    echo "You are a short female!!";
}
?>
</body>
</html>