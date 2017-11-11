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
					$_SESSION['login_user'] = $id;
					header('location: edit-profile.php');
				}
			}
			?>

			<?php if (empty($_SESSION['login_user'])): ?>
			<div id="top-banner"> 
				<div id="top-banner-wrapper">
					<div id="banner-img"><img src="img/banner.png" alt="start earning today" /></div>
					<div id="reg-form">
						<form action="index.php" method="POST">
							<table>
								<tr>
									<th></th>
									<th><h5><br>Register for free!</h5></th>
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
				<div id="homepage" class="col-12">
					<div id="homepage-text" class="col-12">
						<h1>Work for your tomorrow.<br><span style="background-color: #FC3A52">&nbsp;Today.&nbsp;</span></h1>
					</div>
					<div id="homepage-text" class="col-12">
						<p>
							<i class="fa fa-check-circle" aria-hidden="true"></i>&emsp;Whatever you need to simplify your to do list, no matter your budget.
							<br>
							<i class="fa fa-check-circle" aria-hidden="true"></i>&emsp;Find services based on your goals and deadlines, it’s that simple.
							<br>
							<i class="fa fa-check-circle" aria-hidden="true"></i>&emsp;Your payment is always secure, EarnIt is built to protect your peace of mind.
						</p>
					</div>
				</div>
			</div>

			<?php
				include('footer.php');
			?>
		</div>
	</body>      
</html>
