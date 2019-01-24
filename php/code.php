<?php
	/*
	This script contain functions and variables for the system	
	*/
	// these 4 values are hard coded username and password for loging
	$username1 = 'Jimmy';
	$password1 = 'magiseal';
	$username2 = 'Karen';
	$password2 = 'chicochico';
	
	// print statement for superUser
	function godMode(){
		echo "<p>{$_SESSION['currentUser']} superuser.</p>";
	}
	
	// print statement for link to CRUD
	function crud(){
		echo "<a href='form.php' id='click'>click to CRUD.</a>";
	}

	// print statement for link to login page
	function index(){
		echo "<a href='index.html' id='click'>click to log back in.</a>";
	}
	
	// print statement for link to main page
	function main(){
		echo "<a href='main.php' id='click'>Main page.</a>";
	}
	
	// print statement for login errors
	function  printError(){
		echo "<p>There's an error with the login, please login and try again.</p>";
		
	}


?>