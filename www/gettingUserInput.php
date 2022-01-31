<!DOCTYPE HTML>
<html>
<head>
    <meta charset= 'utf-8'>
        <title>Getting user input</title>
</head>
<body>
   
    <form action ="gettingUserInput.php" method = "get">
       Name: <input type="text" name="name">
       <br>
       Age: <input type="number" name="age">
       <br>
       School Code : <input type="text" name="code">
       <br>
       <input type="submit">
    </form>
    <br>
    Your name is  <?php echo $_GET['name'] ?>
    <br>
    Your age is <?php echo $_GET["age"] ?>
    <br>
    Your student code is : <?php echo $_GET["code"]?>
    


</body>

</html>