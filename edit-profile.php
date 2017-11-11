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
			session_start();
			include('session.php');
			ini_set('session.cookie_httponly', true);
			
			@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
			
			if ($db->connect_error) {
					echo "could not connect: " . $db->connect_error;
					printf("<br><a href=index.php?>Return to home page </a>");
					exit();
			 };
			
			if (isset($_POST['update-profile'])) {
				
				
				/*#AVATAR UPLOAD 
				if (isset($_FILES['upload'])) {

					 $allowedextensions = array('jpg', 'jpeg', 'gif', 'png');
					 $extension = strtolower(substr($_FILES['upload']['name'], strrpos($_FILES['upload']['name'], '.') + 1));

					 $error = array ();

					 if(in_array($extension, $allowedextensions) === false){
						  $error[] = 'This is not an image, upload is allowed only for images.';  
					 }

					 # 100 MB
					 if($_FILES['upload']['size'] > 100000000){
						  $error[]='The file exceeded the upload limit';
					 }


					 if(empty($error)){
						  move_uploaded_file($_FILES['upload']['tmp_name'], "uploads/{$_FILES['upload']['name']}"); 
						  $_FILES['upload']['name'] = $avatar;
					 }

				} */
				
				$fname = trim($_POST['fName']);
				$lname = trim($_POST['lName']);
				$headline = trim($_POST['headline']);
				$location = trim($_POST['location']);
				$phone = trim($_POST['phoneNo']);
				$facebook = trim($_POST['linkFacebook']);
				$linkedin = trim($_POST['linkLinkedIn']);
				$github = trim($_POST['linkGitHub']);
				
				$fname = addslashes($fname);
				$lname = addslashes($lname);
				$headline = addslashes($headline);
				$location = addslashes($location);
				$phone = addslashes($phone);
				$facebook = addslashes($facebook);
				$linkedin = addslashes($linkedin);
				$github = addslashes($github);
				
			 	$stmt = mysqli_prepare($db, 
				"UPDATE users 
				SET 
					fName='$fname', 
					lName='$lname',  
					linkFacebook='$facebook', 
					linkLinkedIn='$linkedin', 
					linkGitHub='$github', 
					headline='$headline', 
					phoneNo='$phone', 
					location='$location' 
				WHERE id='$login_session'");
				
				mysqli_stmt_bind_param($stmt, 'ssssssss', $fname, $lname, $facebook, $linkedin, $github, $headline, $phone, $location);
               printf($stmt->error);
				
			}
			
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
					<form action="" id="profile-edit" name="update" method="POST">
						<div class="col-2" id="profile-info">
						<div id="avatar" style="background-image: url(uploads/<?php if(!is_null($qrow['avatar'])) { echo $qrow['avatar']; } else { echo 'default.jpg'; }; ?>)"></div>
						<!--<div>
							<form action="" method="POST" enctype="multipart/form-data">
                       <input type="file" name="upload" /></br>
                       <input  type="submit" value="Upload new profile image" />
                   	</form>
						</div>-->
						<a href="logout.php">Logout</a>
						</div>
						<div class="col-10" id="profile-name"><br>
							<span><h2><?php echo $qrow['email']; ?></h2></span>
							<span><p>&mdash;<br>edit</p></span>
						</div>
						<div class="col-10">
							<label>First Name:</label><input type="text" name="fName" value="<?php echo $qrow['fName']?>"/>
							<label>Last Name:</label><input type="text" name="lName" value="<?php echo $qrow['lName']?>"/>
							<label>Headline:</label><input type="text" name="headline" value="<?php echo $qrow['headline']?>"/>
							<label>Location:</label><input type="text" name="location" value="<?php echo $qrow['location']?>"/>
							<label>Phone Number:</label><input type="tel" name="phoneNo" value="<?php echo $qrow['phoneNo']?>"/>
							<label>Facebook:</label><input type="url" name="linkFacebook" value="<?php echo $qrow['linkFacebook']?>"/>
							<label>LinkedIn:</label><input type="url" name="linkLinkedIn" value="<?php echo $qrow['linkLinkedIn']?>"/>
							<label>GitHub:</label><input type="url" name="linkGitHub" value="<?php echo $qrow['linkGitHub']?>"/>
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