<?php
   $conn=mysqli_connect("localhost","root","","reg");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP WITH SQL PROGRAM</title>
    </head>
    <body>
        <div id="h1">
        <center><h1><font color="gray">"Registration"</font></h1></center>
        </div>
        <br><br>
        <center><img src="h1.png" width="300px" height="300px"></center>
        <br><br><br><br>
        <form action="" method="POST">
          <font color="gray">username<font color="red">*</font><br>
          <div id="form">
          <input type="text" name="u" size="22" required/><br>
          </div>
          Email<font color="red">*</font><br>
          <input type="text" name="e" size="22" required/><br>
          Mobile_No<font color="red">*</font><br>
          <input type="text" name="m" size="22" required/><br>
          Password</font><font color="red">*</font><br>
          <input type="text" name="p" size="22" required/><br><br>
          <center><input type="submit" value="Registers" name="cal"></center>
        </form><p align="right"><a href="Program 57.php"><button>Login</button></a></p>
    </body>
</html>
<style>
    #h1{
        background-image:url("head2.jpeg");
        background-repeat:no-repeat;
        background-size:100% 50px;
        font-variant:small-caps;
    }
    body{
        background-color:rgba(0.3,0.3,255,192);
        background-image:url("bg1.jpg");
        background-repeat:no-repeat;
        background-position:center;
        background-size:1454px 782px;
        margin: -15px 9px 0px 9px;
        padding: 25px;
    }
    input[type=text]{
        width:100%;
        height:33px;
    }
    input:focus{
        background-color:limegreen;
    }
    input[type=submit]{
        width:150px;
        height:34px;
        background-color:blue;
        color:yellow;
    }
	input[type=submit]:focus{
		background-color:red;
	}
</style>
<?php
if(isset($_POST['cal']))
{
    $u=$_POST['u'];
    $e=$_POST['e'];
    $m=$_POST['m'];
    $p=$_POST['p'];
    $sql="insert into `registration`(`username`,`Email`,`Mobile_No`,`Password`) values ('$u','$e','$m','$p')";
    mysqli_query($conn,$sql);
}
?>