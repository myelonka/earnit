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
			
			$errors = array();
			
			$_SESSION['success'] = '';

			session_start();

			if (isset($_POST['login'])) {
				$email = mysqli_real_escape_string($db, $_POST['email']);
				$password = mysqli_real_escape_string($db, $_POST['password']);

				if (count($errors) == 0) {
					$password = md5($password);
					$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
					$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
					$active = $row['active'];

					if(mysqli_num_rows($result) == 1) {
						$_SESSION['email'] = $email;
						$_SESSION['success'] = 'Login successful!';
						header('location: profile.php');
					}
					else {
						array_push($errors, 'The email or password is incorrect!');
						header('location: login.php');
					}
				}
			}

			if (isset($_GET['logout'])) {
				session_destroy();
				unset($_SESSION['email']);
				header('location: login.php');
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

				<h1>Log in</h1>

				<form action="profile.php" name='login' method="POST">
				<div class="col-12">
					<label><b>Email</b></label>
					<input type="text" name="email" required>
					<label><b>Password</b></label>
					<input type="password" name="password" required>
					<button type="submit" >Login</button>
					<?php include('errors.php'); ?>
			  </div>
			</form>
			</div>
		
		<?php 
			include('footer.php');
     	?>
		
		</div>
	</body>
</html>
	