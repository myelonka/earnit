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
			
			$query = mysqli_query($db, "
				  SELECT
						email,
						fName,
						lName,
						bio,
						avatar,
						linkFacebook,
						linkLinkedIn,
						linkGitHub,
						headline,
						phoneNo,
						country,
						location
				  FROM users 
				  WHERE email = '$login_session'
			 ");
			
			$qrow = mysqli_fetch_array($query,MYSQLI_ASSOC);
			
		?>
			
				<div class="page-container">
					<div class="col-4" id="profile-info">
					<div id="avatar" style="background-image: url(' <?php echo $qrow['avatar'] ?> ')"></div>
					&mdash;	
					<span><p><?php echo $qrow['bio'] ?></p></span>
					&mdash;
					<span><p><?php echo $qrow['country'] ?></p></span>
					&mdash;
					<span><p><?php echo $qrow['location'] ?></p></span>
					&mdash;
					<span><p><?php echo $qrow['phoneNo'] ?></p></span>
					&mdash;
					<span><p><?php echo $qrow['linkFacebook'] ?></p></span>
					&mdash;
					<span><p><?php echo $qrow['linkLinkedIn'] ?></p></span>
					<br>
					<a href="logout.php">Logout</a>	
						
					
					</div>
					<div class="col-8" id="profile-name"><br>
						<span><h2><?php echo $qrow['fName'] . '&nbsp;' . $qrow['lName']; ?></h2></span>
						<span><p>&mdash;<br><?php echo $qrow['headline'] ?></p></span>
					</div>
					<div class="col-8" id="profile-work">
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
