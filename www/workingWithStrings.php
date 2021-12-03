<!DOCTYPE HTML>
<html>
<head>
    <neta charset= 'utf-8'>
        <title></title>
</head>
<body>
    <?php
    $phrase = "Yolo Restaurant";
    $phrase [0]="B";
    echo strtolower($phrase);
    echo strtoupper("Food");
    echo strlen("Food");
    echo $phrase[1];
    echo 'Mike'[0];
    echo str_replace("Yolo","Panda",$phrase);
    echo substr($phrase, 8,3);
    ?>

</body>

</html>