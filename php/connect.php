
<?php
	// these are settings to connect to the database:
	// host address, databe name, username, password
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=recipe", "root", "magiseal");
		//echo "<p id='connected'>connected</p>";
	} catch (Exception $e) {
		echo "<p>fail to connect</p>";
		die('Could not connect to DB: ' . $e->getMessage());
		//echo "<p id='failed'>failed</p>";
	}
?>

