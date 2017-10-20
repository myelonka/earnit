<html>
    <head>
        <title>EarnIt - Profile</title>
		<meta charset="utf-8">
		<meta name="description" content="Profilepage for registered users">
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
			
			
			if (empty($_SESSION['email'])) {
				header('location: login.php');
			}
			
			session_start();
			
		?>

		<div class="page-container">
			<?php if (isset($_SESSION['success'])): ?>
			
				<div class="error success">
					<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</div>
			
			
			
			<?php endif ?>
			
			
			
			<?php if (isset($_SESSION['email'])): ?>
				
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
					<div class="col-2" id="profile-info">
					<div id="avatar"></div>
					<span><p>Latvia</p></span>
					<span><p>speaks basic english, greek</p></span>
					<span><p>knows HTML, CSS, PHP, JS</p></span>
					<span><p>member since September 2017</p></span>
					
					<form action='profile.php?logout='1'' name='logout' method="GET">
						<button type=submit>Log out</button>
					</form>
						
					
					</div>
					<div class="col-10" id="profile-name">
						<span><h2><?php $_SESSION['email']; ?></h2></span>
						<span><p>&mdash;<br>front-end web developer &amp; graphic designer</p></span>
					</div>
					<div class="col-10" id="profile-work">
						<div class="col-3"></div>
						<div class="col-3"></div>
						<div class="col-3"></div>
						<div class="col-3"></div>
						<div class="col-3"></div>
						<div class="col-3"></div>
						<div class="col-3"></div>
						<div class="col-3"></div>
					</div>
				</div>
				
			<?php endif ?>
			
		
		<?php 
			include('footer.php');
     	?>
			
		</div>
	</body>
</html>
