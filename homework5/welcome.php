<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>

      <br>
      </br>

		<form action="display_users.php">
			<button type="submit">Table of Users</button>
		</form>

   </body>
   
</html>