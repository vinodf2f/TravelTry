<?php
    if(!mysql_connect("localhost","root",""))
    {
    	die('oops connection problem....'.mysql_error());
    }

    if(!mysql_select_db("dbtest"))
    {
    	die('oops database selection problem'.mysql_error());
    }
    if (isset($_POST['submit'])) 
    {
    	$q=mysql_query("INSERT INTO regform
    	    (name,address,zip_code,country,gender,subject,phone,email)
    	     VALUES('$_POST[name]','$_POST[address]','$_POST[zip]','$_POST[country]','$_POST[gender]','$_POST[subject]','$_POST[phone]','$_POST[email]'
		    	   )");
   if(!$q)
    {
    	die("couldn't inserted".mysql_error()) ;
    }
    else
    {
       
    	echo "inserted successfully";
    	
    	

    }
}  	  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>test form</title>
<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<link href="proj2.css" rel="stylesheet"> 
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script> 
</head>
<body>
	<div class="container col-lg-4">
	<form id="forma" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
			<h2>regestration form</h2>
			<div class="form-group">
				<label for="name" >Name</label>	
				 <input class="form-control" type="text" name="name" required>
		      </div>
		<div class="form-group">
				<label  >Address</label>
				<textarea class="form-control" name="address" ></textarea>
	    </div>
		<div class="form-group">
		      <label>Zip code</label>
			  <input class="form-control" type="text" name="zip" required>
		</div >
		<div class="form-group">
			<label>Country</label>
			<select  required name="country">
				<option >ind</option>
				<option>pak</option>
				<option>NZ</option>
				<option>Usa</option>
			</select>
		</div>
		
		<div class="form-group">
		
			<label>Gender</label>
			<br>
			<input  type="radio" name="gender" value="male" checked required> Male
			<input type="radio" name="gender" value="female"> Female 
			<input  type="radio" name="gender" value="other"> Other	
		</div>
		<br>
		<div class="form-group">
			<label>Subject</label>
			<br>
			<input type="checkbox" name="subject" value="phy" checked>phy
                   <input  type="checkbox" name="subject" value="chem" >chem
                   <input type="checkbox" name="subject" value="math">math
                  <input type="checkbox" name="subject" value="bio" >bio
		</div>
		<div class="form-group">
			<label>Phone no:</label>  <input class="form-control" type="number" name="phone" required>
		</div>
		<div class="form-group">
			<label>email</label>  <input class="form-control" type="email" name="email">
		</div>
		<div class="form-group">
		<button class="btn btn-success btn-lg" type="submit" name="submit">submit</button>
	</div>
	</form>
	</div>
	<div>
		<a href="kiran.php"><button class="btn btn-success " type="submit" name="submit">go back</button></a>
	</div>
</body>
</html>