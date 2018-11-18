<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location: kiran.php");
}

if(isset($_POST['btn-logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header("Location: index.php");
}
?>