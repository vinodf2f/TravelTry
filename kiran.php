<?php
  session_start(); 
	include_once'dbconnect.php';
	if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>TIMEPASS</title>
	<style>
	#title
	{
		width: 100%;
		background-color: #ccc;
		text-align: center;
		
		padding: 1px;

		
	}
	#title a
	{
		text-align: left;
	}
	#home{
		 min-height: 90px;
		margin-left: 183px;
		margin-top: 55px;
		position: relative;
	}
	.nav
	{    width: 100%;
		display: none;
		margin-left: 183px;
		margin-top: 55px;
		position: relative;

		
		
		
	}
	#temp2
	{
		margin-left: 161px;
		width: 70%;
	    margin-top: 1px;
	    height: 100%;
	   
	    background-repeat: no-repeat;
	    padding-top: 1;
	}
	#temp2 img
	{ 
		position: absolute;
	}
	#temp
	{   
		height: 100%;
		position: absolute;
		background-color: #60c8da;
		
	}
	
	#temp ul h3
	{
		
		padding : 10px;
		background-color: green;
		
		margin-left: -40px;
	}
	#temp ul  li 
	{
		padding: 4px;
		list-style: none;
		font-weight: bold;

	}
	#temp ul  li a
	{
		
		text-decoration: none;
		padding: 5px;
		margin: 1px;

	}
		
	</style>
	
	<script>
		function val1()
		{
			document.getElementById('nanded').style.display="block";
			document.getElementById('courses').style.display="none";
			document.getElementById('faculty').style.display="none";
			document.getElementById('contact us').style.display="none";

		}
		function val2()
		{
			
			document.getElementById('nanded').style.display="none";
			document.getElementById('courses').style.display="block";
			document.getElementById('faculty').style.display="none";
			document.getElementById('contact us').style.display="none";

		}
		function val3()
		{
			
			document.getElementById('nanded').style.display="none";
			document.getElementById('courses').style.display="none";
			document.getElementById('faculty').style.display="block";
			document.getElementById('contact us').style.display="none";
		}
		function val4()
		{
			
			document.getElementById('nanded').style.display="none";
			document.getElementById('courses').style.display="none";
			document.getElementById('faculty').style.display="none";
			document.getElementById('contact us').style.display="block";

		}
	</script>
</head>
<body>
	 <div  id="title">
   <h1>TIME PASS</h1>
   <form method="post" action="logout1.php" >
   	<button  type="submit" name="btn-logout">Sign out</button>   
   </form>
   </div>
  <div id="temp">
  	<ul><h3>Menu Navigation</h3>
   	<li><a href="#" onclick="val1()">Nanded</a></li>
   	<li><a href="#" onclick="val2()">Ladga</a></li>
   	<li><a href="#" onclick="val3()">Savargaon</a></li>
   	<li><a href="#" onclick="val4()">Pune</a></li>
   </ul>
  </div>
   
   <div id="temp2">
   	<img src="IMG_0666.jpg" width="1100px" height="800px">
   	<div id="home"><a href="form.php"><h2>To register click on register </h2></a></div>
   <div  class="nav" id="nanded">
   	<h4>This is first Heading</h4>
   	<ul>
   		<li>H1H1</li>
   		<li>H1H2</li>
   		<li>H1H3</li>
   		<li>H1H4</li>
   	</ul>
   
   </div>
  
   <div class="nav" id="courses">
     <h4>This is Second Heading</h4>
   	<ul>
   		<li>H2H1</li>
   		<li>H2H2</li>
   		<li>H2H3</li>
   		<li>H2H4</li>
   	</ul>
   </div>
   <div class="nav" id="faculty">
   	<h4>This is Third Heading</h4>
   	<ul>
   		<li>H3H1</li>
   		<li>H3H2</li>
   		<li>H3H3</li>
   		<li>H3H4</li>
   	</ul>
   	
   </div>
    <div class="nav" id="contact us">
   	<h4>This is Fourth Heading</h4>
   	<ul>
   		<li>H4H1</li>
   		<li>H4H2</li>
   		<li>H4H3</li>
   		<li>H4H3</li>
   	</ul>
   </div>
   </div>
   
</body>
</html>