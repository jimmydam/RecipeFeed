<!DOCTYPE html>
<!--
I Hung Dam, student 000736057, certify that all code submitted is my own work;
 that I have not copied from any other source. I also certify that I have not allowed my work to be copied by others. If in any instance that an external resource is used,
I will cite/and or give credit to the original author.
-->


<html>
    <head>
        <meta charset='UTF-8'>
        <title>PHP - create</title>
    </head>
    <body>
        <h2>There .<h2>
		<a href="../index.html">Go back</a>
		<br>
		<?php

			/* This script insert new entries into the database, the entries comes from the form.php page. */
			
		
			include "../php/connect.php";
			include "../php/code.php";
			
			$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
			$recipe = filter_input(INPUT_POST, "recipe", FILTER_SANITIZE_SPECIAL_CHARS);

		
			// sql  command
			$sql = "INSERT INTO recipe (name, recipe) VALUES ('{$name}','{$recipe}');";
			// sql prepare statement for queries, for security purpose
			$stmt = $dbh->prepare($sql);
			// result would be if the sql statement execute 
			$result = $stmt->execute(); // execute the query
			
			// if result returns true
			if($result){
			$message = 'query was successful'; // let user know their query was successful
			}else{
			$message = 'query failed'; // let user know their query failed
			} // end of if $result
			
			echo "<p>$message</p>"; // echo out result of query
			header('Location: http://localhost/recipeFeed/index.html'); // redirect to index page
			exit(); // exit script
		
	
			echo $message;
			
		?>
    </body>
</html>



