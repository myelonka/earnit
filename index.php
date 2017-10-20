<html>
    <head>
        <title>EarnIt</title>
		
		<meta charset="utf-8">
		<meta name="description" content="EarnIt is a platform that brings together entrepreneurs and freelancers">
		<meta name="keywords" content="earnit, freelancer, freelancing, entrepreneur, student, coding, graphic design, programming, wed design, web development, ui, ux, computer science">
	    <meta name="author" content="Mateusz Mielowski, Paula Pudane, Anete Serecenko">
		
		<link rel="stylesheet" href="main.css">
		<link rel='icon' href='img/favicon.png'>
    </head>
	<body>
		<div id="body-wrapper">
			
			<?php
			include('config.php');
			include('header.php');
			
			session_start();
			
			$email = '';
			$password = '';
			$errors = array();

			@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
			ini_set('session.cookie_httponly', true);
				
			if (isset($_POST['register'])) {
				$email = mysqli_real_escape_string($db, $_POST['email']);
				$password = mysqli_real_escape_string($db, $_POST['password']);
				$passwordConf = mysqli_real_escape_string($db, $_POST['passwordc']);
				
				if ($password != $passwordConf) {
					array_push($errors, 'Passwords don\'t match!');
				}
				
				if (count($errors) == 0) {
					$passwordEncr = md5($password); //ENCRYPTING PASSWORD BEFORING STORING TO DB
					$sql = "INSERT INTO users (email, password) 
								VALUES ('$email', '$password')";
					mysqli_query($db, $sql);
					header('location: profile.php');
					
					$_SESSION['email'] = $email;
					$_SESSION['success'] = 'Log in successful!';
					header('location: profile.php');
				}
			}
			
			
			?>

			<div id="top-banner">
				<div id="top-banner-wrapper">
					<div id="banner-img"><img src="img/banner.png" alt="start earning today" /></div>
					<div id="reg-form">
						<form action="index.php" method="POST">
							<?php include('errors.php'); ?>
							<table>
								<tr>
									<th></th>
									<th><h5>&mdash;<br>Register for free!</h5></th>
								</tr>
								<tr>
									<td></td>
									<td><input type="email" name="email" placeholder="email address" spellcheck="false" required></td>
									<br>
								</tr>
								<tr>
									<td></td>
									<td><input type="password" name="password" placeholder="password" required></td>
									<br>
								</tr>
								<tr>
									<td></td>
									<td><input type="password" name="passwordc" placeholder="confirm password" required></td>
									<br>
								</tr>
								<tr>	
									<td></td>
									<td>
										<br>
										<button type="submit" name="register" id="reg-signupbtn">Sign Up</button>
										<h6>Already have an account?&nbsp;</h6>
										<a href="login.php" id="reg-loginbtn">Sign In</a>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			
			<div class="page-container">
				<div class="col-12"><h1>Hello world!</h1></div>
				<div class="row">
					<div class="col-3"><h2>Lorem ipsum [h2]</h2></div>
					<div class="col-9"><h3>&hellip; dolor sit amet. [h3]</h3></div>
				</div>
				<div class="col-3"><h4>&mdash;<br>Lorem ipsum dolor sit amet. [h4]</h4></div>
				<div class="col-3"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [p]</p></div>
				<div class="col-3"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [h6]</h6></div>
				<div class="col-3"><a href="js/landing-page.php">Go to landing page [a] &raquo;</a></div>
			</div>

			<?php
				include('footer.php');
			?>
		</div>
	</body>      
</html>
