<?php
   @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT id FROM users WHERE id = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['id'];

   
   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
   }

	//SESSION STARTS IN THE HEADER
	
?>