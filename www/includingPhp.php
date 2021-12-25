<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Including Html</title>
</head>
<body>
    <?php 
    $title ="Blog";
    $author = "Hunter G.";
    $wordcount = 400;
    include "article-header.php";
    include "useful-tools.php";
    
    sayHi("George");
?>
</body>




</html>