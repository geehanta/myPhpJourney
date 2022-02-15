<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>School login page</title>
<style>
    body{background-color: whitesmoke;}
    h2{
        color: whitesmoke;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bolder;
    }
    h3{
        background-color: rgba(45, 45, 45, 0.1);
    
        text-align: center;
        padding:10px;
        color: #900C3F;
        border-radius: 5px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bolder;
    }
    
    .header{


        width:100%;
            height:50px;
            background-color: #900C3F;
            justify-content: center;
            padding-left:20px;
    }
    .pageFrame{
        margin:auto;
        width: 50%;
        height: 600px;
        border:3px solid #ccc;
        border-radius: 5px;
        padding:30px;
        padding-bottom: 20px;
        margin-top: 100px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);

    }
    .border{
            width: 50%;
            margin: auto;
            background-color: antiquewhite;
            border-color: gray;
            border-width: 4px;
            border-radius: 5px;
            border-style: solid;
            padding: 30px;
            line-height: 15px;
    }
    .btn{
       margin: auto;
        background-color: #900C3F;
        font-family: Arial, Helvetica, sans-serif;
        color: whitesmoke;
        border-radius: 5px;
        width: 60px;
        height: 25px;
        
    } 
    a:hover{
        color:brown;
    }
    .btn:hover{
        background-color:grey;
    }

    










</style>

</head>
<div class="header">   
<h2 style="float:left;">Login</center></h2>
</div>

<body>
   
    <div class="pageFrame"align="center">
        <h3>Sign In</h3>
       
    <form class="border" method="get" action="loginSchool.php">
        <br>
        <br>
        <label for ="name">Name</label>
        <input type="text" name="name"> <br><br>
        <label for ="adm">Reg No</label>
        <input type="text" name="adm"> <br><br>
        <label for ="password">Password</label>
        <input type="text" name="pwd"> <br>
        <br>
        
        <button class="btn" type="submit">Sign In</button>
        <br>
        <br>
        <br>
        <p style="padding: 10px;">You don't have an account? <a href="inputSchool.php">Register</a></p>
    </form>
    <?php 
        $s1name =$_GET["name"];
        $s1adm =$_GET["adm"];
        $s1pwd =$_GET["pwd"];
       
    
        echo "You are $s1name <br>";
        echo "of admission number $s1adm <br>";
        echo "Remember to change this immediately $s1pwd <br><br>";
        ?>
    <a href="inputSchool.php" <img  src="close.png" width="40px" style="float: right;"> </a>
    
    </div>
</body>
</html>