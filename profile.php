<html>
    <head>
        <title>Profile - EarnIt</title>
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
					<div class="col-2" id="profile-info">
					<div id="avatar"></div>
					<span><p>country</p></span>
					<span><p>languages</p></span>
					<span><p>skills</p></span>
					<span><p>member since</p></span>
					<br>
					<a href="logout.php">Logout</a>
						
					
					</div>
					<div class="col-10" id="profile-name"><br>
						<span><h2><?php echo $_SESSION['login_user']; ?></h2></span>
						<span><p>&mdash;<br>short description</p></span>
					</div>
					<div class="col-10" id="profile-work">
						<div class="col-3">profile work</div>
						<div class="col-3">...</div>
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
