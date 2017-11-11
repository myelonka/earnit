<html>
    <head>
        <title>Sign In - EarnIt</title>
		<meta charset="utf-8">
		<meta name="description" content="Login page for users">
		<meta name="keywords" content="earnit, freelancer, freelancing, entrepreneur, student, coding, graphic design, programming, wed design, web development, ui, ux, computer science, user, profile">
	    <meta name="author" content="Mateusz Mielowski, Paula Pudane, Anete Serecenko">
		<link rel="stylesheet" href="main.css">
		<link rel='icon' href='img/favicon.png'>
    </head>
	<body>
		<div id="body-wrapper">
		
		<?php
			include('config.php');
			include('header.php');
			
			@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
			session_start();
			ini_set('session.cookie_httponly', true);
			$error = null;

			if(isset($_POST['login'])) {

			  $email = mysqli_real_escape_string($db, $_POST['email']);
			  $password = mysqli_real_escape_string($db,$_POST['password']); 

			  $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
			  $result = mysqli_query($db,$sql);
			  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			  $active = $row['active'];

			  $count = mysqli_num_rows($result);

			  if($count == 1) {
				$_SESSION['login_user'] = $row['id'];
				 header("location: profile.php?");
			  }else {
				 $error = 'Your username or password is invalid!';
			  }
			 }
		?>
		
			<div class="page-container">
				<div class="col-12" id="loginform"><h2>Sign in</h2><br><br><br>
					<form action="" name="login" method="POST">
						<tr>
							<td></td>
							<td><input type="email" name="email" placeholder="email" spellcheck="false" required></td>
							<br>
						</tr>
						<tr>
							<td></td>
							<td><input type="password" name="password" placeholder="password" required></td>
							<br>
						</tr>
						<tr>	
							<td></td>
							<td>
								<button type="submit" name="login" id="loginbtn">Sign in</button>
								<a href="index.php?" id="forgotbtn">Don't have an account?</a>
							</td>
						</tr>
						<?php if ($error != null) { echo '<div class="errors col-12">', $error, '</div>'; } ?>
					</form>
				</div>
			</div>
		
		<?php 
			include('footer.php');
     	?>
		
		</div>
	</body>
</html>
	