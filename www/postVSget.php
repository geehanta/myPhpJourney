<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>postvsget</title>
<body>
<form action="postVSget.php" method="post">
Password: <input type="password" name="password"><br>
</form>
<br>
<input type="submit">
<?php  
echo $_POST["password"]; 
?>
















</body>

</head>





















</html>