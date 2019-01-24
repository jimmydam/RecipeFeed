
<!--
I Hung Dam, student 000736057, certify that all code submitted is my own work;
 that I have not copied from any other source. I also certify that I have not allowed my work to be copied by others. If in any instance that an external resource is used,
I will cite/and or give credit to the original author.
-->
<?php

	/* This script process search on the database, search by item name*/
	session_start(); // start session
	include "connect.php"; //include connection settings for database
	include "code.php"; // include code has bunch of print statement
	//error_reporting(0); //turn off the notice where someone access this page indirectly with out login
	
	// variable from post item name to be searched
	$name = []; // array for name
	$recipe = []; // array for recipe
	$id = []; // array for ID
	//$x = $_GET['counter'];
	//$xx = 22;
	// query for anything containing in the POST variable
	$sql = "SELECT ID, name, recipe FROM recipe order by ID desc;"; 
	// preparing the statement with the database
	$stmt = $dbh->query($sql);
	
	
	$counter1 = $_GET["counter"];
	$counter2 = $counter1 + 10;
	
	while($row = $stmt->fetch()){
		array_push($id, $row['ID']); // store ID into this array		
		array_push($name, $row['name']); // store name into this array
		array_push($recipe, $row['recipe']); // store type into this array
	}
	
	$test = "test string";
	
	//$counter = 0;
	//$counter2 = intval($_GET['counter']);
	
	while ($counter1 < $counter2){
		echo "<h3 id='recipeName'>{$counter1}. {$name[$counter1]}</h3>";
		echo "<p id='recipe'>${recipe[$counter1]}</p>";
		$counter1++;
	}
	//$recipePerPage = $recipePerPage + 10;
	
	
	
?>










