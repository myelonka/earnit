<html>
    <head>
        <title>Edit Profile - EarnIt</title>
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
			
			@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
			
			if (isset($_POST['update-profile'])) {
				
				$fname = trim($_POST['fName']);
				$lname = trim($_POST['lName']);
				$bio = trim($_POST['bio']);
				$headline = trim($_POST['headline']);
				$country = trim($_POST['country']);
				$location = trim($_POST['location']);
				$phone = trim($_POST['phoneNo']);
				$facebook = trim($_POST['linkFacebook']);
				$linkedin = trim($_POST['linkLinkedIn']);
				$github = trim($_POST['linkGitHub']);
				
				$fname = addslashes($fname);
				$lname = addslashes($lname);
				$bio = addslashes($bio);
				$headline = addslashes($headline);
				$country = addslashes($country);
				$location = addslashes($location);
				$phone = addslashes($phone);
				$facebook = addslashes($facebook);
				$linkedin = addslashes($linkedin);
				$github = addslashes($github);
				
				
				if ($db->connect_error) {
					echo "could not connect: " . $db->connect_error;
					printf("<br><a href=index.php?>Return to home page </a>");
					exit();
				 };
				
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
				
			 	$stmt = $db->prepare("UPDATE users SET fName='$fname', lName='$lname', bio='$bio', linkFacebook='$facebook', linkLinkedIn='$linkedin', linkGitHub='$github', headline='$headline', phoneNo='$phone', country='$country', location='$location' WHERE email='$login_session'");
				
				$stmt->bind_param('ssssssssss', $fname, $lname, $bio, $facebook, $linkedin, $github, $headline, $phone, $country, $location);
               printf($stmt->error);
				
			}
			
			?>
			
				<div class="page-container">
					<form action="" id="profile-edit" name="update" method="POST">
						<div class="col-2" id="profile-info">
						<div id="avatar"></div>
						<a href="logout.php">Logout</a>
						</div>
						<div class="col-10" id="profile-name"><br>
							<span><h2><?php echo $_SESSION['login_user']; ?></h2></span>
							<span><p>&mdash;<br>edit</p></span>
						</div>
						<div class="col-10">
							<label>First Name:</label><input type="text" name="fName" />
							<label>Last Name:</label><input type="text" name="lName" />
							<label>Headline:</label><input type="text" name="headline" />
							<label>Bio:</label><textarea type="text" name="bio"></textarea>
							<label>Country:</label><input type="text" name="country" />
							<label>Location:</label><input type="text" name="location" />
							<label>Phone Number:</label><input type="tel" name="phoneNo" />
							<label>Facebook:</label><input type="url" name="linkFacebook" />
							<label>LinkedIn:</label><input type="url" name="linkLinkedIn" />
							<label>GitHub:</label><input type="url" name="linkGitHub" />
							 <input type="submit" name="update-profile" value="Save" />
							<input type="reset" />
						</div>
					</form>
				</div>
			
		
		<?php 
			include('footer.php');
     	?>
			
		</div>
	</body>
</html>