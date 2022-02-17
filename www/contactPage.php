<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <style>
        body{background-color: whitesmoke;}
        h2{
            text-align: center;
            color: #900C3F;
            font-family: Arial, Helvetica, sans-serif;
            height:30px;}
        p{  text-align: left;
            line-height: 20px;
            align-self: center;
            font-family: Arial, Helvetica, sans-serif;
            
        }
        #navbar{
            position: fixed;
            top:0px;
            left: 0px;
            width:100%;
            height:50px;
            color: whitesmoke;
            align-content: center;
            background-color: #900C3F;
            justify-content: center;
            padding-left:20px ;}
       .border{
        margin: auto;
        width:50%; 
        position:relative;
        top:100px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 15px;
        background-color:#E8E8E8;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }
            
        .input{
            margin: auto;
            width:60%;
            padding:5px;
            height: 200px;
            border-radius: 5px;
        }
        .btn{
        margin: auto;
        background-color: #900C3F;
        color: whitesmoke;
        font-family: Arial, Helvetica, sans-serif;
        color: whitesmoke;
        border-radius: 5px;
        width: 60px;
        height: 25px;
        }
        .btn:hover{
            background-color:white;
            color: #900C3F;    
        }
        footer{
            position: fixed;
            bottom:0;
            width:100%;
            background-color:#900C3F;
            color: whitesmoke;
            padding:0.5em;
        }



    </style>
</head>
<header id="navbar">
    <h1>Contact Us </h1>
</header>
<main>
    <article class="border">
        <article id="shadow">
        <h2>We value your feedback!</h2>
        <hr>
        <p>Please do not hesitate to reach out to us by submitting
             any complaints or reports to the submission textarea below.<br>
            This institution has a zero tolerance policy on harassment,prejudice or ethnic profiling.</p>
            <br>
            <br>
        <form method="POST" action="contactPage.php">
        <label>Type something</label><br><br>
        <input type="text" name="feedback" value="Feedback" class="input"><br><br>
        <button class="btn"  type="submit" value="Submit">Submit</button>

        </form>
    </article>
</main>
<br>
<footer><center><b> &copy; 2022 SPAC3BAR.inc </b> </center></footer>
</html>