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

			// note to self: session_start() is required to use $_SESSION 
			session_start();

			// username and password sent from form 
			$email = $_POST['email'];
			$password = $_POST['pw']; 

			$sql = "SELECT email FROM users WHERE email = '$email' and password = '$password'";
			$result = mysqli_query($connection,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			$count = mysqli_num_rows($result);

			// If result matches, table row must be 1 row
			if ($count == 1) {
				
				$_SESSION['login_user'] = $email;

				header("location: welcome.php");
			} else {
				echo "Your Login Name or Password is invalid";
			}


			$connection->close();

		?>

	</body>
</html>