<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<?php 
    $index =1;
    while($index<=10){
        echo "$index <br>";
        $index++;
    }
    $luckyNumbers = array(4,8,14,16,23,42);
    for ($i=0;$i < count($luckyNumbers);$i++) {
        echo "$luckyNumbers[$i] <br>";

    }
?>
</body>
</html>