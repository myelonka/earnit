<html>
    <head>
        <title>Post an Offer - EarnIt</title>
		<meta charset="utf-8">
		<meta name="description" content="Find the best freelancers for your project">
		<meta name="keywords" content="earnit, freelancer, freelancing, entrepreneur, student, coding, graphic design, programming, wed design, web development, ui, ux, computer science">
	    <meta name="author" content="Mateusz Mielowski, Paula Pudane, Anete Serecenko">
		<link rel="stylesheet" href="main.css">
		<link rel='icon' href='img/favicon.png'>
    </head>
	<body>
		<div id="body-wrapper">
		
		<?php
			include('config.php');
			include('header.php');
		?>
		
		<div class="page-container">
			<div class="col-12"><h1>Post a job offer</h1></div>
        <?php
            $db = new mysqli('localhost', 'root', '', 'testinguser');
            // How variables $_POST and $_GET work.
           // VALUES are set in these variables with a reference on their NAME, to retrieve them.
           //  ex :  <form method="post" action="post.php">
           //        <input type="text" NAME="author" VALUE=""><br><br>
           //        <input type="submit" NAME="submit">
           //        </form> 
           // If you don't set the name, you won't be able to check if the input exists in POST/GET => You don't know if the button has been pressed.

           if (isset($_POST['submit_form'])){ //if submit button is pressed
               //add security
               $author = trim($_POST['author']);
               $title = trim($_POST['title']);
               $description = $_POST['description'];//trim removes white space..we dont purt it here
               $promo = $_POST['promo'];
               $employerMail = trim($_POST['employerMail']);
               $deadline = strtotime($_POST['deadline']);//converting into timestamp
               $field = $_POST['field'];          
               
               if (!$author || !$title || !$description || !$promo ||!$employerMail || !$deadline){
                   printf('<img id="exclamation" src="img/exclamation_icon.png"><span id="message_style">You must fill out all the form fields</span>');
               } 
               
               $author = addslashes($author);
               $author = htmlentities($author);
               $author = mysqli_real_escape_string($db, $author);
               $title = addslashes($title);
               $title = htmlentities($title);
               $title = mysqli_real_escape_string($db, $title);
               $description = addslashes($description);
               $description = htmlentities($description);
               $description = mysqli_real_escape_string($db, $description);
               $promo = addslashes($promo);
               $promo = htmlentities($promo);
               $promo = mysqli_real_escape_string($db, $promo);
               $employerMail = addslashes($employerMail);
               $employerMail = htmlentities($employerMail);
               $employerMail = mysqli_real_escape_string($db, $employerMail);
               $deadline = addslashes($deadline); //do this parameter need addslashes?
              
              @$db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
                if ($db->connect_error) {
                  echo "could not connect: " . $db->connect_error;
                  printf("<br><a href=index.php?>Return to home page </a>");
                  exit();
                }

                if (isset($_POST['field'])) {
                    $optionArray = $_POST['field'];
                    for ($i=0; $i<count($optionArray); $i++) {
                       // echo $optionArray[$i]."<br />";
                        $fieldvalue = $optionArray[$i];//which checkbox was marked
                    }
                }
               $stmt = $db->prepare('INSERT INTO posts (postId, author, title, description, promo, employerMail, timestamp, category) VALUES (null, ?, ?, ?, ?, ?, ?, ?)');
               
               $stmt->bind_param('sssssis', $author, $title, $description, $promo, $employerMail, $deadlline, $fieldvalue);

               // if the request has been executed by checking the return of it (True for yes, False, for no).
               // $smth->error() will return  the error message.
               // echo $smth->error() will print the error message.
               if (!$stmt->execute()){
                  
                  // Here you have an error, you should print it and redirect the user with an explicit error message
                  exit();
               }
                  
           }
            
        ?>
            <form id="post_form" method="post" action="post.php">
              Company name:<br>
              <input type="text" class="back" name="author" value=""><br><br>
              Title:<br>
              <input type="text" class="back" name="title" value=""><br><br>
              Job description (max 5000 characters):<br>
              <textarea maxlength="5000" type="text" class="back" name="description" value="description" cols="80px" rows="15" wrap="soft"></textarea><br><br>
              Job promo (max 500 characters):<br>
              <textarea maxlength="500" type="text" class="back" name="promo" value="description" cols="80px" rows="15" wrap="soft"></textarea><br><br>
              Email:<br>
              <input type="email" class="back" name="employerMail"><br><br>
              Application deadline:<br>
              <input type="date" min="2017-01-01" max="2027-01-01" name="deadline"><br><br>
              Job field:<br><br>

              <input type="checkbox" name="field[]" value="frontEnd">Front End<br>
              <input type="checkbox" name="field[]" value="backEnd" >Back End<br>
              <input type="checkbox" name="field[]" value="webDesigner">Web Designer<br>
              <input type="checkbox" name="field[]" value="uiDesigner" >UI Designer<br>
              <input type="checkbox" name="field[]" value="uxDesigner">UX Designer<br>
              <input type="checkbox" name="field[]" value="interactionDesigner" >Interaction Designer<br>
              <input type="checkbox" name="field[]" value="seoSpecialist">SEO Specialist<br><br><br>
              <input type="submit" name="submit_form" class="submit_forms"><br><br><br>


           
		</div>
		
		<?php 
			include('footer.php');
     	?>
		
		</div>
	</body>
</html>