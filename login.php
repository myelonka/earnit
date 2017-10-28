<html>
    <head>
        <title>EarnIt - Sign In</title>
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
			
			session_start();
			@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
			ini_set('session.cookie_httponly', true);
			$error = null;

			if($_SERVER["REQUEST_METHOD"] == "POST") {

			  $email = mysqli_real_escape_string($db,$_POST['email']);
			  $password = mysqli_real_escape_string($db,$_POST['password']); 

			  $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
			  $result = mysqli_query($db,$sql);
			  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			  $active = $row['active'];

			  $count = mysqli_num_rows($result);

			  if($count == 1) {
				 $_SESSION['login_user'] = $email;

				 header("location: profile.php?");
			  }else {
				 $error = 'Your username or password is invalid!';
			  }
			 }

		?>
		
			<div class="page-container">
				<div class="col-1">1</div>
				<div class="col-1">2</div>
				<div class="col-1">3</div>
				<div class="col-1">4</div>
				<div class="col-1">5</div>
				<div class="col-1">6</div>
				<div class="col-1">7</div>
				<div class="col-1">8</div>
				<div class="col-1">9</div>
				<div class="col-1">10</div>
				<div class="col-1">11</div>
				<div class="col-1">12</div>
					<?php if ($error != null) { echo '<div class="errors">', $error, '</div>'; } ?>
				<div class="col-4" id="loginform"><h2>Sign in</h2><br><br><br>
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
								<br>
								<button type="submit" name="login" id="loginbtn">Sign in</button>
								<a href="#" id="forgotbtn">Forgot your password?</a>
							</td>
						</tr>
					</form>
				</div>
				<div class="col-5" id="reg-form2">
					<h2>&#8230; or register</h2><br><br>
					<form action="" name="register" method="POST">
						<table>
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
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="col-3"></div>
			</div>
		
		<?php 
			include('footer.php');
     	?>
		
		</div>
	</body>
</html>
	