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
			
			$query = mysqli_query($db, "
				  SELECT
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
				
			 	$stmt = "
					UPDATE users 
					SET  
					fName='$fname', 
					lName='$lname', 
					bio='$bio', 
					linkFacebook='$facebook', 
					linkLinkedIn='$linkedin', 
					linkGitHub='$github', 
					headline='$headline', 
					phoneNo='$phone', 
					country='$country', 
					location='$location'
					WHERE email='$login_session'
					";
				
				if ($db->query($stmt) === TRUE) {
					echo "Record updated successfully";
				} else {
				 	echo "Error updating record: " . $conn->error;
				}
			}
			
			$query = mysqli_query($db, "
				  SELECT
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
					<form action="" id="profile-edit" name="update" method="POST">
						<div class="col-2" id="profile-info">
						<div id="avatar" style="background-image: url(' <?php echo $qrow['avatar'] ?> ')"></div>
						<a href="logout.php">Logout</a>
						</div>
						<div class="col-10" id="profile-name"><br>
							<span><h2><?php echo $_SESSION['login_user']; ?></h2></span>
							<span><p>&mdash;<br>edit</p></span>
						</div>
						<div class="col-10">
							<label>First Name:</label><input type="text" name="fName" value="<?php echo $qrow['fName']; ?>"/>
							<label>Last Name:</label><input type="text" name="lName"  value="<?php echo $qrow['lName']; ?>"/>
							<label>Headline:</label><input type="text" name="headline"  value="<?php echo $qrow['headline']; ?>"/>
							<label>Bio:</label><textarea type="text" name="bio" value="<?php echo $qrow['bio']; ?>"></textarea>
							<label>Country:</label><input type="text" name="country" value="<?php echo $qrow['country']; ?> "/>
							<label>Location:</label><input type="text" name="location" value="<?php echo $qrow['location']; ?>" />
							<label>Phone Number:</label><input type="tel" name="phoneNo" value="<?php echo $qrow['phoneNo']; ?> "/>
							<label>Facebook:</label><input type="url" name="linkFacebook" value="<?php echo $qrow['linkFacebook']; ?>" />
							<label>LinkedIn:</label><input type="url" name="linkLinkedIn" value="<?php echo $qrow['linkLinkedIn']; ?>" />
							<label>GitHub:</label><input type="url" name="linkGitHub" value="<?php echo $qrow['linkGitHub']; ?>" />
							 <input type="submit" name="update-profile" value="Save" />
						</div>
					</form>
				</div>
			
		
		<?php 
			include('footer.php');
     	?>
			
		</div>
	</body>
</html>