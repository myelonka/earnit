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
						avatar,
						linkFacebook,
						linkLinkedIn,
						linkGitHub,
						headline,
						phoneNo,
						location
				  FROM users 
				  WHERE id = '$login_session'
			 ");
			
			$qrow = mysqli_fetch_array($query,MYSQLI_ASSOC);
			
		?>
			
				<div class="page-container">
					<div class="col-4" id="profile-info">
					<div id="avatar" style="background-image: url(uploads/<?php if(!is_null($qrow['avatar'])) { echo $qrow['avatar']; } else { echo 'default.jpg'; }; ?>)"></div><br><br>
						<table>
							<?php if(!is_null($qrow['email'])): ?>
							<tr>
							<td id="icon-row"><i class="fa fa-envelope" aria-hidden="true"></i></td>
							<td><span><p><?php echo $qrow['email'] ?></p></span></td>
							</tr><?php endif ?>
							<?php if(!is_null($qrow['location'])): ?>
							<tr>
							<td id="icon-row"><i class="fa fa-location-arrow" aria-hidden="true"></i></td>
							<td><span><p><?php echo $qrow['location'] ?></p></span></td>
							</tr><?php endif ?>
							<?php if(!is_null($qrow['phoneNo'])): ?>
							<tr>
							<td id="icon-row"><i class="fa fa-phone" aria-hidden="true"></i></td>
							<td><span><p><?php echo $qrow['phoneNo'] ?></p></span></td>
							</tr><?php endif ?>
							<?php if(!is_null($qrow['linkFacebook'])): ?>
							<tr>
							<td id="icon-row"><i class="fa fa-facebook" aria-hidden="true"></i></td>
							<td><span><a target="_blank" href="http://www.facebook.com/<?php echo $qrow['linkFacebook'] ?>"><?php echo $qrow['linkFacebook'] ?></a></span></td>
							</tr><?php endif ?>
							<?php if(!is_null($qrow['linkLinkedIn'])): ?>
							<tr>
							<td id="icon-row"><i class="fa fa-linkedin" aria-hidden="true"></i></td>
							<td><span><a target="_blank" href="http://www.linkedin.com/in/<?php echo $qrow['linkLinkedIn'] ?>/"><?php echo $qrow['linkLinkedIn'] ?></a></span></td>
							</tr><?php endif ?>
							<?php if(!is_null($qrow['linkGitHub'])): ?>
							<tr>
							<td id="icon-row"><i class="fa fa-github" aria-hidden="true"></i></td>
							<td><span><a target="_blank" href="https://github.com/<?php echo $qrow['linkGitHub'] ?>"><?php echo $qrow['linkGitHub'] ?></a></span></td>
							</tr><?php endif ?>
						</table>	
						<br>
					</div>
					<div class="col-8" id="profile-name"><br>
						<span><h2><?php echo $qrow['fName'] . '&nbsp;' . $qrow['lName']; ?></h2></span>
						<span><p>&mdash;<br><?php echo $qrow['headline'] ?></p></span>
					</div>
					<div class="col-8">
						<div id="profile-actions">
							<a href="edit-profile.php" id="edit-link"> EDIT PROFILE</a>
							<a href="logout.php" id="logout-link"> LOGOUT</a>
						</div>
					</div>
					<div class="col-8" id="profile-work">
						<div class="col-4"></div>
						<div class="col-4"></div>
						<div class="col-4"></div>
						<div class="col-4"></div>
						<div class="col-4"></div>
						<div class="col-4"></div>
					</div>
				</div>
			
		
		<?php 
			include('footer.php');
     	?>
			
		</div>
	</body>
</html>
