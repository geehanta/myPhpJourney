<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form action="simpleWebsite.php" method="post">
Enter Students Name: <input type="text" name="student">
<input type="submit">

</form>
<?php
$grades = array("Jim"=>"A+","Pam"=>"B-","Tim"=>"C+");
echo $grades[$_POST["student"]]
 

?>
</body>
</html>