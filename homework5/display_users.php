<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Homework5</title>
    <h2>Homework5 by Austin Parrish</h2>
    <h3>Sign Up Page</h3>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>

</head>
	<body>

<?php
	$connection  = mysqli_connect('localhost', 'root', '');
	if (!$connection ) {
		die('Could not connect: ' . mysqli_error());
	}
	
	mysqli_select_db($connection,"user_information_hw5");
	$SQLstring = "SELECT Fname, Lname, email, password FROM users";
	$QueryResult = @mysqli_query($connection, $SQLstring);
	echo "<table width='100%' border='1'>\n";
	echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th>
		 <th>Password</th></tr>\n";
	while (($Row = mysqli_fetch_row($QueryResult)) != FALSE) {
		 echo "<tr><td>{$Row[0]}</td>";
		 echo "<td>{$Row[1]}</td>";
		 echo "<td>{$Row[2]}</td>";
		 echo "<td>{$Row[3]}</td></tr>\n";
		 
	}
	
	echo "</table>\n";
	mysqli_close($connection);
?>

	<form action="index.html">
		<button type="submit">Go to Main Menu</button>
	</form>

	</body>
</html>