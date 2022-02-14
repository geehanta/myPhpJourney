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
            width: 500px;
            margin: auto;
            border-color: gray;
            border-width: 5px;
            border-radius: 5px;
            border-style: solid;
            padding: 30px;
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

    










</style>

</head>
<div class="header">   
<h2 style="float:left;">Login</center></h2>
</div>
<body>
    <a href="inputSchool.php" <img src="close.png" width="40px" style="float: right;" style="margin-top: 85px;"> </a>
    <div class="pageFrame"align="center">
        <h3>Sign In</h3>
       
    <form class="border" method="get" action="inputSchool.php">
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
        <p style="float: right;">You don't have an account? <a href="signup.php">Sign Up</a></p>
    </form>
    

    </div>
</body>
</html>