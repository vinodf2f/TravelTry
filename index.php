<?php
	session_start(); 
	include_once'dbconnect.php';
	if(isset($_SESSION['user'])!="")
{
	header("Location: kiran.php");
}	
	if(isset($_POST['btn-login']))
	{
		$email=$_POST['email'];
	    $pass=$_POST['upass'];
	    $res=mysql_query("SELECT * FROM users WHERE email='$email'");
	    $row=mysql_fetch_array($res);
		
	    if($row['password']==md5($pass))
	{  
		$_SESSION['user'] = $row['user_id'];
		header("Location: kiran.php");
	}
	else
	{
		?>
        <script>
        alert('wrong details');
        </script>
        <?php
        
        
	}
}
 ?>
 <!DOCTYPE html>
<html>
<head>
<html lang="en"> 
    <title>Travel guide</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
	<link href="proj2.css" rel="stylesheet"> 
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script> 
     
     <style>
     	
     	

     </style>
	 
  </head>
<body style="background-color:rgba(237,222,196,1);">
	  	<div>
  	<nav class="navbar navbar-default" >
  		<div class="navbar-header">
  			<span class="col-xs-2"><img src="images/1.jpg" width="80px" height="60px"></span>
  			<button type="button" class="navbar-toggle " data-target="#mainnavbar" data-toggle="collapse">
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  		</div>
  		<div class="navbar-collapse collapse" id="mainnavbar">
  			<ul class="nav nav-tabs">
  				<li class="active"><a href="#">home</a></li>
  				<li><a href="#">home</a></li>
  				<li class="dropdown">
  					<a href="#" class="dropdown-toggle" data-toggle="dropdown">more<span class="caret"></span></a>
  				<ul class="dropdown-menu">
  						<li><a href="#">homea1</a></li>
  						<li><a href="#">homea1</a></li>
  						<li><a href="#">homea1</a></li>
  					</ul>
  					</li>	
  				<li><a href="#myform">contact</a></li>
				<li data-toggle="modal" data-target="#mymodal" ><a href="#lg">login</a></li>
  				<form class=" navbar navbar-right" role="search">
  				<div id="searchbox" class="form-group form-inline">
  					<input type="text" name="search" placeholder="search" class="form-control">
  					<button type="submit" class="btn btn-success">submit</button>
  			</form>
  				</div>
  				
  			</ul>
  			</nav>
  		</div>
		
		
		<div id="mymodal" class="modal fade" role="dialog">

			<div class="modal-dialog">

			  <div class="modal-content">

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>login</h4>

				</div>

				<div class="modal-body">
					<div class="col-lg-12 pull-right">
						
							<form method="post"  >
							
								<div  class="form-group">
									<input id="lg" class="form-control" type="email"  name="email" placeholder=" your email ">
								</div>

								<div class="form-group">
									<input class="form-control" type="password" name="upass" placeholder="your password ">
							    </div>  
							
					</div>
				</div>

			<div class="modal-footer" >

			         		   <button  class="btn btn-success" type="submit" name="btn-login">Sign In</button>

							   <button><a href="register.php">Sign Up Here</a></button>
							    </form>
	
				</div>

			 </div>

		</div>

	</div>
			

	  	<div  class="container-fluid ">
	  		
			  	<div id="mycarousel" class="carousel slide" data-ride="carousel">
					  	<ol class="carousel-indicators">
					  		<li data-target="#mycarousel" data-slide-to="0" ></li>
					  		<li data-target="#mycarousel" data-slide-to="1"></li>
					  		<li data-target="#mycarousel" data-slide-to="2"></li>
					  	</ol>

		  					<div id="carouselc" class="carousel-inner " >
					  				<div  class="item active ">
					  					<img class="img-responsive" style="width:90%; height: 500px;" src="pexel1.jpeg">
					  				</div>
							  		<div class="item">
							  			<img class="img-responsive" style="width:90%; height: 500px;" src="pexel2.jpeg">
							  		</div>
							  		<div class="item">
							  			<img class="img-responsive" style="width:90%; height: 500px;" src="pexel3.jpeg">
							  		</div>
		  					</div>
								   	<a class="left carousel-control" href="#mycarousel" data-slide="prev">
								      <span class="glyphicon glyphicon-chevron-left"></span>
								      <span class="sr-only">Previous</span>
								    </a>
								    <a class="right carousel-control" href="#mycarousel" data-slide="next">
								      <span class="glyphicon glyphicon-chevron-right"></span>
								      <span class="sr-only">Next</span>
								    </a>
 				</div>
 		 </div>

	  	<div id="myform" class="container">
	  		<div class="col-lg-4">
	  			<form >
	  				<div class="form-group">
	  					<h2 >Contact us</h2>
	  				</div>
	  				<div class="form-group ">
	  					<label for="name">name</label>
	  					<input class="form-control" type="text" required id="name" placeholder="name">
	  				</div>
	  				<div class="form-group">
	  					<label>surname</label>
	  					<input class="form-control" type="text" required name="" placeholder="surname">
	  				</div>
	  				<div class="form-group">
	  					<label>city</label>
	  					<input class="form-control" type="text" required name="" placeholder="city">
	  				</div>
	  				<div class="form-group">
	  					<label>gender</label>
	  					<input  type="radio" name="gender" >male
	  					<input  type="radio" name="gender" >female
	  				</div>
	  				<div class="form-group">
	  					<label>email</label>
	  					<input class="form-control" required type="email" name="" placeholder="email">
	  				</div>
	  				<div class="form-group">
	  					<label>Comment</label>
	  					<textarea class="form-control" rows="5" required placeholder="comment here"></textarea>
	  				</div>
	  				<button type="submit" class="btn btn-success">submit</button>
	  			</form>
	  		</div>



			<div id="thumb">
		  		<div  class="col-lg-4 col-md-4">
		  			
		  			<img class="thumbnail img-responsive" width="300px" src="pexel1.jpeg"  >
		  			<img class="thumbnail img-responsive" width="300px" src="pexel4.jpeg" >

		  		</div>

				<div class="col-lg-4 col-md-4">
		  			
		  			<img class="thumbnail img-responsive" width="300px" src="pexel3.jpeg" >
		  			<img class="thumbnail img-responsive" width="300px" src="pexel4.jpeg" >

				</div>
			</div>
     </div>
	  	

	  	<br><br><br>

	  	<div  class="container">
	  		<ol id="bdc" class="breadcrumb col-xs-10">
				<li><a href="#">Home</a></li>
				<li><a href="#">services</a></li>
				<li class="active">aboutus</li>
				<li><a href="#">contactus</a></li>
			</ol>
	  	</div>
			</body>
			</html>
	  	

