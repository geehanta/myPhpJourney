<!DOCTYPE HTML>
<html>
<head>
    <meta charset= 'utf-8'>
        <title></title>
</head>
<body>
   <form action="madlibs.php" method="get">
       Color: <input type="text" name="color"> <br>
       Plural noun: <input type="text" name="pluralNoun"> <br>
       Celebrity: <input type="text" name="celebrity"> <br>
       Fruits: <input type="text" name ="fruits"><br>
    <input type="submit">
   </form>
    <hr>
    <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity= $_GET["celebrity"];
    $fruits= $_GET["fruits"];

     echo "Roses are $color <br>";
     echo "$pluralNoun are blue <br>";
     echo "I love $celebrity <br>";
     echo "and $fruits <br>";
     ?>


</body>

</html>