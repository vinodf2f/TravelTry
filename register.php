<?php
session_start();

include_once 'dbconnect.php';
if(isset($_POST['btn-signup']))
{
	$uname = ($_POST['uname']);
	$email = ($_POST['uemail']);
	$upass = md5($_POST['upass']);
	
	if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
	{
		?>
        <script>alert('successfully registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php
	}
}
?>
<html>
<head>

<title>Login & Registration System</title>
<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<link href="proj2.css" rel="stylesheet"> 
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script> 

</head>
<body>
<center>
<div id="login-form" class="container col-lg-4 " >
<form method="post" >
	
		<h1>Regester Here</h1>
		    <div class="form-group">
				<input class="form-control" type="text" name="uname" placeholder="Enter your name">
			</div>
			<div class="form-group">
				<input class="form-control" type="email" name="uemail" placeholder="Enter your email">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="upass" placeholder="Enter password">
			</div>
			<div class="form-group">
				<button class="form-control" type="submit" name="btn-signup">Sign Me Up</button>
			</div>
		

				<a href="index.php">Sign in here</a>
			
</form>
</div>
</center>
</body>
</html>
  