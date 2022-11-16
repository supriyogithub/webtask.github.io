<?php
   $conn=mysqli_connect("localhost","root","","reg");
?>
<html>
<head>
<title>Login.com</title>
</head>
<body>
<div id="h1">
<center><h1>Login</h1></center>
</div>
<br><br><br>
<center><img src="login1.png" width="340px" height="352px"></center>
<br><br><br>
<form action="" method="POST">
<div id="inp1">
<br>
&nbsp;&nbsp;email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="x" placeholder="Email">
</div>
<div id="inp2">
<br>
&nbsp;&nbsp;password&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="y" placeholder="Password">
</div>
<div id="inp3">
	<br>
<center><button type="submit" name="c" autofocus>Login</button></center>
</div>
</form>
</body>
</html>
<style>
	body{
		padding: 17px;
		margin: 40px 40px 25px 40px;
	}
	body{
		border: 8px solid blue;
	}
   #h1{
	   background-color:bisque;
	   width:100%;
	   height:70px;
	   color:limegreen;
   }
   #inp1{
	   background-color:gray;
	   width:100%;
	   height:68px;
   }
   #inp2{
	   background-color:limegreen;
	   width:100%;
	   height:68px;
   }
   #inp3{
	background-color:orange;
	width:100%;
	height:68px;
   }
   input[type=email]{
	   width:300px;
	   height:40px;
   }
   input[type=text]{
	   width:300px;
	   height:40px;
   }
   input[type=email]:focus{
	   background-color:yellow;
   }
   input[type=text]:focus{
	   background-color:pink;
   }
   button[type=submit]{
	   background-image:url("");
	   background-repeat:no-repeat;
	   cursor:pointer;
	   width:100px;
	   height:28px;
	   color:black;
   }
</style>
<?php
  if(isset($_POST['c']))
  {
	  $x=$_POST['x'];
	  $y=$_POST['y'];
	  $sql="select * from `registration` where `Email`='$x' and `Password`='$y'";
	  $row=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($row)>0)
	  {
		  header("location:home.php");
	  }
	  else
	  {
		  echo "you have not registered";
	  }
  }
?>