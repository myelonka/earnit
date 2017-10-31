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
		
			@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
			ini_set('session.cookie_httponly', true);
			$error = null;
			$email = '';
			$password = '';
			
				
			if (isset($_POST['register'])) {
				$email = mysqli_real_escape_string($db, $_POST['email']);
				$password = mysqli_real_escape_string($db, $_POST['password']);
				$passwordConf = mysqli_real_escape_string($db, $_POST['passwordc']);
				
				if ($password != $passwordConf) {
					$error = 'Passwords don\'t match!';
				}
				
				
				if ($error == null) {
					$sql = "INSERT INTO users (email, password) 
								VALUES ('$email', '$password')";
					mysqli_query($db, $sql);
					header('location: profile.php');
					
					$_SESSION['login_user'] = $email;
					header('location: profile.php?');
				}
			}
			?>

			<?php if (empty($_SESSION['login_user'])): ?>
			<div id="top-banner"> :
				<div id="top-banner-wrapper">
					<div id="banner-img"><img src="img/banner.png" alt="start earning today" /></div>
					<div id="reg-form">
						<form action="index.php" method="POST">
							<table>
								<tr>
									<th></th>
									<th><h5>&mdash;<br>Register for free!</h5></th>
								</tr>
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
									<td><input type="password" name="passwordc" placeholder="confirm password" required></td>
									<br>
								</tr>
								<tr>	
									<td></td>
									<td>
										<br>
										<button type="submit" name="register" id="reg-signupbtn">Sign up</button>
										<h6>Already have an account?&nbsp;</h6>
										<a href="login.php" id="reg-loginbtn">Sign in</a>
									</td>
								</tr>
								<tr>	
									<td></td>
									<td>
										<?php if ($error != null) { echo '<div class="errors">', $error, '</div>'; } ?>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			
			<?php endif; ?>
			
			<div class="page-container">
				<div class="col-12"><h2>Don't just Scooby-Dooby-<i>Dream</i>.<br>Scooby-Dooby-<span style="color: #6633ff">Do</span>.</h2></div>
				<div class="col-3"><h2>Lorem ipsum [h2]</h2></div>
				<div class="col-9"><h3>&hellip; dolor sit amet. [h3]</h3></div>
				<div class="col-3"><h4>&mdash;<br>Lorem ipsum dolor sit amet. [h4]</h4></div>
				<div class="col-3"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [p]</p></div>
				<div class="col-3"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [h6]</h6></div>
				<div class="col-3">AYY LMAO</div>
			</div>

			<?php
				include('footer.php');
			?>
		</div>
	</body>      
</html>
