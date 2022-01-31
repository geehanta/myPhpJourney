<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form action="betterCalculator.php" method="post">
First Number: <input type="number", step="0.1" name="num1"> <br>
Second Number: <input type="number", name="num2"> <br>
Operation: <input type="text" name="op"><br>

<input type="submit">
</form>
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];


if($op == "+"){
    echo $num1 + $num2;    
}elseif($op == "-"){
    echo $num1 - $num2;
}elseif($op == "*"){
    echo $num1 * $num2;
}elseif($op == "/"){
    echo $num1 / $num2;
}
?>
</body>
</html>