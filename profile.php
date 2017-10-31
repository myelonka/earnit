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
			include('session.php');
			ini_set('session.cookie_httponly', true);
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
					<div class="col-2" id="profile-info">
					<div id="avatar"></div>
					<span><p>Latvia</p></span>
					<span><p>speaks basic english, latvian, russian</p></span>
					<span><p>knows HTML, CSS, PHP, JS</p></span>
					<span><p>member since September 2017</p></span>
					
					<a href="logout.php">Logout</a>
						
					
					</div>
					<div class="col-10" id="profile-name">
						<span><h2><?php echo $_SESSION['login_user']; ?></h2></span>
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
			
		
		<?php 
			include('footer.php');
     	?>
			
		</div>
	</body>
</html>
