
 
<?php
	/*  I Hung Dam, student 000736057, certify that all code submitted is my own work;
	 that I have not copied from any other source. I also certify that I have not allowed
	 my work to be copied by others. If in any instance that an external resource is used, 
	 I will cite/and or give credit to the original author.
	 */
		
	/* This script display the items in the database with the items sorted by the purchase date. */
	session_start(); // start session
	include "connect.php"; //include connection settings for database
	include "code.php"; // include code has bunch of print statement
	error_reporting(0); //turn off the notice where someone access this page indirectly with out login
	
	$name = []; // array for name
	$type = []; // array for type
	$id = []; // array for ID
	$date = []; // array for purchase date
	$description = []; // array for description
	
	// if no user logged on
	if(!empty($_SESSION['currrentUser'])){
		printError(); // print no user error
	}else{
		
		// sql SELECT command
		$command = "SELECT  ID, name, type, description, date FROM freezer ORDER BY date;";
		// sql prepare statement for queries, for security purpose
		$stmt = $dbh->prepare($command);
		$stmt->execute(); // execute the query

		while($row = $stmt->fetch()){
			array_push($id, $row['ID']); // store ID into this array		
			array_push($name, $row['name']); // store name into this array
			array_push($type, $row['type']); // store type into this array
			array_push($date, $row['date']); // store date into this array
			array_push($description, $row['description']); // store description into this array
			}
			
	}	
	
?>

<!DOCTYPE html>
<!--
 I Hung Dam, student 000736057, certify that all code submitted is my own work;
 that I have not copied from any other source. I also certify that I have not allowed
 my work to be copied by others. If in any instance that an external resource is used, 
 I will cite/and or give credit to the original author.
-->
<html>
    <head>
        <title>Date Sort</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
		<link href="style.css" rel="stylesheet" type="text/css">
    </head> 
	
    <body>
		<div id="status"> 
		<h3> STATUS</h3>
			<a href="logout.php" id="logout">click to logout.</a>
			<?php
				if(!empty($_SESSION['currrentUser'])){
					echo "<p>login error!</p>";
				}else{
					echo "<p>the current user is {$_SESSION['currentUser']}</p>";
				};
			?>
		</div>
		
		
		<?php 
			// if user is logged on
			if($_SESSION['logged_in']){
				
				// display this set of html code
				echo "
				<div class='form'>
					<h3>Create New Item</h3>
					<form action='insert.php' method='POST'>
						<label class='update'>Name:</label> <input type='text' class='update' name='name'><br>
						<label class='update'>Type:</label> <input type='text'  class='update'name='type' value='NULL'><br>
						<label class='update'>Purchase Date:</label> <input type='text' class='update' name='purchase_date'><br>
						<input type='submit' class='submit'>			
						
					</form>
				</div> 
			
		
			<div  class='form'>
				<h3>Update Item </h3>
				<form action='update.php' method='POST'>
					<label class='update'>ID:</label> <input class='update' type='text' name='id'><br>
					<label class='update'>Type:</label> <input class='update' value='NULL' type='text' name='type'><br>
					<label class='update'>Description: </label> <input class='update' value='NULL' type='text' name='description'><br>

					<input type='submit' class='submit'>			
				
				</form>
			</div>
		

			<div class='formSmall'>
				<h3>Delete Item .</h3>
				<form class='formSmall2' action='delete.php' method='POST'>
					<label class='update'>ID: </label> <input class='update' type='text' name='id'>
					<input type='submit'  id='submit2'>			
				</form>
			</div> 
			
			<div class='formSmall'>
				<h3>Search By Name</h3>
				<form class='formSmall2' action='search.php' method='POST'>
					<label class='update'>Item Name: </label> <input class='update' type='text' name='item_name'>
					<input type='submit'  id='submit2'>			
				</form>
			</div> 
			
			<div class='formSmall'>
				<h3>Search By Type.</h3>
				<form class='formSmall2' action='search_type.php' method='POST'>
					<label class='update'>Type: </label> <input class='update' type='text' name='type_name'>
					<input type='submit'  id='submit2'>			
				</form>
			</div>";
			}
			?>
			

			
			<div class='formTable'>
				<h3>Show freezer items</h3>
				<p>Here is what you have in your freezer.</p>
				<p>Click on the link below to sort the list to your likings</p>
				<a href="sort_by_name.php"><h2>Name</h2></a>
				<a href="sort_by_type.php"><h2>Type</h2></a>
				<a href="sort_by_date.php"><h2>Date</h2></a>
				<a href="form.php"><h2>ID</h2></a>
				<a href="form.php" ><h2>CRUD</h2></a>
			</div>	
			<table>
				<tbody>					
					<tr><th class="theader"><b>ID<b/></th><th class="theader"><b>Name<b/></th><th class="theader"><b>Type</b></th><th class="theader"><b>Purchase Date<b/></th><th class="theader"><b> Description<b/></th></tr>					
					<?php
							// if user is logged on
							if(($_SESSION['logged_in'])){
							
								$arrlength = count($name); // count the last_name array length			
								for($x = 0; $x < $arrlength; $x++){
									// echoes out result in table format
									echo "<tr><td>$id[$x]</td> <td>$name[$x]</td> <td>$type[$x]</td> <td>$date[$x]</td><td>$description[$x]</td>" ;
									echo "<br>";
								}
							}
					?>		
				</tbody>
			</table>		
		</div>
	</body>	
</html>
