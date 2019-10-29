<?php
require_once('globals.php');

/*
$ID = $_POST['userid'];
$Password = $_POST['password'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_GET['email']))   //checking the 'userid' which is from Sign-In.html, is it empty or have some text
{

	$query = mysql_query("SELECT * FROM users where email = '$_GET[email]' AND password = '$_GET[password]'") or die(mysql_error());
	
	$row = mysql_fetch_array($query);

	if(!empty($row['username']) AND !empty($row['userid']))
	{
		$_SESSION['username'] = $row['username'];
		$_SESSION['userid'] = $row['userid'];
		header("Location: index.php");
	

	}
	else
	{
		header("Location: login.php?incorrectLogin=true");
	exit;
		

	}
}
}
if(isset($_GET['login-submit']))
{
	SignIn();
}


?>


