<?php
   include('config.php');
   @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT email FROM users WHERE email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
   }
?>