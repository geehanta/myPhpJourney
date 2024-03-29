<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>School System</title> 
    <style>
        body {background-color:whitesmoke;
        
        }
        .fullcard {
            margin:auto;
            width: 50%;
            position: relative;
            top: 50px;
            border:1px solid #ccc;
            border-radius: 5px;
            padding:10px;
            padding-bottom: 35px;
            height: max-content;
            background-color:#E8E8E8;
        }
        .sidecardLeft{
            margin:auto;
            width:20%;
            float: left;
            border:1px solid #ccc;
            border-top-right-radius: 10px;
            padding: 10px;
            margin-left: 10px;
            height: 500px;
        }
        .sidecardRight{
            margin:auto;
            width:20%;
            float: right;
            border:1px solid #ccc;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;            
            padding: 10px;
            margin-left: 10px;
            height: 500px;
        }
        .cardContent{

            padding:10px;
            text-align: start;
            
        }
        #navbar{
            position: fixed;
            top:0px;
            left: 0px;
            width:100%;
            height:50px;
            background-color: #900C3F;
            justify-content: center;
            padding-left:20px ;
        }
        nav ul {
            margin: 0px;
            padding: 5px 0px 5px 30px;
            }
        nav li {
             display: inline;
             margin-right: 20px;
             padding: 10px;
             
            }
        a {
            text-decoration: none;
            color: white;
            height: 30px;
            font-size: 23px;
            }
        a:hover{
            color:#ccc;
            padding: 15px;
            background-color: rgba(45, 45, 45, 0.6);
        }

        h2   {
            text-align: center;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            height:30px;  
        }
        .header{
            text-align: center;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            height:30px;  
        }
        
        p { 
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-weight: bold;
        }
        .border{
            margin: auto;
            width:50%;
            background-color: rgba(45, 45, 45, 0.1);
            border-color: gray;
            border-width: 5px;
            border-radius: 5px;
            border-style: solid;
            padding-left: 20px;
            padding-top: 35px;
            padding-bottom: 10px;

        }
        .border2{
            margin: auto;
            width: 50%;
            background-color: rgba(45, 45, 85, 0.1);
            border-color: gray;
            border-width: 5px;
            border-radius: 5px;
            border-style: solid;
            padding-left: 20px;
            padding-bottom: 20px;

        }
        
        #thumbnail{
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }
        .links{
        color: blue;
        opacity: 0.7;
        }
        #searchbar{
            position: absolute;
            top: 10px;
            left: 30px;
        }
        section{
            position: relative;  
        }
        .btn:hover{
            background-color: #900C3F;
            color: white;
            
        }
        
</style>
</head>
<main>
<div>
    <nav id="navbar">
        <nav class="header">
        <ul >
            <li><a href="inputSchool.php">Home</a></li>
            <li><a href="contactPage.php">Contact</a></li>
        </ul>
    </nav>
</div>

<body>
    <br>
    <br>
    <h2 align=center   style="color: #900C3F;">Register Here</h2>
    
    <div class="sidecardLeft" id="thumbnail">
        <h2 style="color: #900C3F;">Menu</h2>
    </div>
    <div class="sidecardRight" id="thumbnail">
        <h2 style="color: #900C3F;">Contacts</h2>
        <section>
        <form id="searchbar">
            <label for="search">Search :</label>
            <input type="search"id="search" name="search">
            <input  class="btn"  type="submit" name="submit" value="Go!">
        </form>
    </section>
    </div>

    <div class="fullcard" id="thumbnail" >
        <div class="cardContent">
    
        <form class="border" action="inputSchool.php" method="get">
        <p>  This area is to be filled by admitted students only:<br><br>
            <label for ="name">Name:</label><br>
                <input type="text" name="name"> <br>
            <label for ="adm">Admission No:</label><br>
                <input type="text" name="adm"> <br>
            <label for "hostel">Hostel:</label><br>
            <input type="text" name="hostel"> <br> <br><br>
            <label for "gender">Gender:</label><br><br>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label><br>
            <input type="radio" id="nonbinary" name="gender" value="nonbinary">
            <label for="nonbinary">Non Binary</label><br>
            
            

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
            <input class="btn"  type="submit" text="Submit">
        </form> 
    </p>
        </div>
        <br>
    <div class="border2" id="thumbnail">
        <div class="cardContent">
    <hr>
    <br>
    <p> Verify that the following information is true before you proceed:
    </p>
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

    <p> If correct, please <a class="links" href="www.tukenya.ac.ke" target="blank"> proceed</a></p>

    </p>

    </div>
    <br>
    <br>
    <?php
    include "footerSchool.html"
    ?>
</main>

</body>
</html>