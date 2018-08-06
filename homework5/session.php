<?php
   // create and check connection
	$connection  = mysqli_connect('localhost', 'root', '');
	if (!$connection ) {
		die('Could not connect: ' . mysqli_error());
	}

	// connect to database
	mysqli_select_db($connection,"user_information_hw5");


   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($connection,"select email from users where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.html");
   }
?>