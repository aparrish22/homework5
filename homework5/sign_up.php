<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Homework5</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
	<body>
		<?php 

			// create and check connection
			$connection  = mysqli_connect('localhost', 'root', '');
			if (!$connection ) {
				die('Could not connect: ' . mysqli_error());
			}

			// connect to database
			mysqli_select_db($connection,"user_information_hw5");



			// values sent from form
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['pw'];

			$min_length = 1;

			if(strlen($fname) >= $min_length &&
			   strlen($lname) >= $min_length &&
			   strlen($email) >= $min_length &&
			   strlen($password) >= $min_length) {


			    // input data into database
				$sqlquery = "INSERT INTO users (fname, lname, email, password)
						VALUES ('".$fname."','".$lname."','".$email."','".$password."') ";
         		
         		// check if $sqlquery is a member instantiated into our $connection 
         		if ($connection->query($sqlquery) === TRUE) {
         			echo "User account created successfully!";
         		} else {
         			echo "Error: ".$connection->error;
         		}
        
			} else { // if any variables submitted are less than minimum
				echo "Minimum length is ".$min_length;
			}

			$connection->close();
				
		?>
		
		<form action="index.html">
			<button type="submit">Sign Up Page</button>
		</form>
		<form action="login.html">
			<button type="submit">Login Page</button>
		</form>
		<form action="display_users.php">
			<button type="submit">Table of Users</button>
		</form>
	</body>
</html>