<!DOCTYPE html>
<html> 
<head> 
<meta charset="utf-8">
<title> URL PARAMETERS</title>
<body>
<form action="urlParameters.php" method="get">
    Name: <input type="text" name="name"> <br>
    <input type="submit">
</form>
<br><br>
<?php echo $_GET["name"]; ?>





</body>
</head>






















</html>