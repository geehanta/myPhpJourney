<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>School System</title> 
    <style>
        body {background-color: powderblue;
        
        }
        h2   {color: white;
            font-family: Arial, Helvetica, sans-serif;
            
        }
        p { 
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .border{
            width: 300px;
            background-color: grey;
            border-color: gray;
            border-width: 5px;
            border-radius: 10px;
            border-style: solid;
            padding-left: 20px;
            padding-top: 10px;
            padding-bottom: 10px;

        }
        
</style>
</head>
<h2  class="border"> <center>Welcome</center></h2>
<body>
    <hr>
    <br>
    <br>
    <p>  This area is to be filled by admitted students only:<br>
        <form class="border" action="inputSchool.php" method="get">
            <label for ="name">Name:</label><br>
                <input type="text" name="name"> <br>
            <label for ="adm">Admission No:</label><br>
                <input type="text" name="adm"> <br>
            <label for "hostel">Hostel:</label><br>
            <input type="text" name="hostel"> <br> <br><br>
    </p>
    <hr>
    <br>
    <br>
    <p> This area is to be filled by Moderators only:<br><br>
        <form action="inputSchool.php" method="get">
            <label for="mname">Moderator name:</label><br>
            <input type="text" name="mname"> <br>
            <label for="id">Moderator ID </label><br>
            <input type="text" name="id"> <br><br>
            <input type="submit" text="Submit">
        </form> 
    </p>
    <hr>
    <br>
    <br>
    <p> Verify that the following information is true before you proceed:
    </p>
    
    <hr>
    
        <?php 
        $sname =$_GET["name"];
        $sadm =$_GET["adm"];
        $hostel =$_GET["hostel"];
        $ename =$_GET["mname"];
        $eid =$_GET["id"];
    
        echo "You are $sname <br>";
        echo "of admission number $sadm <br>";
        echo "Living in hostel $hostel <br><br>";

        echo "And you were served by:<br>";

       
        echo "Mr/Miss $ename <br>";
        echo "identified by $eid <br>";
        ?>

    <p> If correct, please <a href="www.tukenya.ac.ke" target="blank"> proceed</a></p>
    









    </p>



</body>
</html>