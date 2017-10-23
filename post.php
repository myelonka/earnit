<html>
    <head>
        <title>EarnIt - Post an offer</title>
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
           if (isset($_POST['submit'])){//if submit button is pressed
               //add security
               $author = trim($_POST['author']);
               $title = trim($_POST['title']);
               $description = trim($_POST['description']);
               $employerMail = trim($_POST['employerMail']);
               $deadline = strtotime($_POST['deadline']);//converting into timestamp
               $deadline = date("Y-m-d, $deadline");//formating before saing into DB
               $field = $_POST['field'];//do i need to modify?
                                
               if (!$author || !$title || !$description || !$employerMail || !$deadline){
                   printf('You must fill out all the form fields');
               } //29:00 on video
               
               $author = addslashes($author);
               $title = addslashes($title);
               $description = addslashes($description);
               $employerMail = addslashes($employerMail);
               $deadline = addslashes($deadline); //do this parameter need addslashes?
               
            @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
               
                if ($db->connect_error) {
                echo "could not connect: " . $db->connect_error;
                printf("<br><a href=index.php>Return to home page </a>");
                exit();
                }
               
               $smth = $db->prepare('INSERT INTO posts (postid, author, title, description, empoyerMail, deadlline)VALUES (null, ?, ?, ?, ?, ?)');
                   
               $smth->bind_param('sssss', $author, $title, $description, $empoyerMail, $deadlline);
               $smth->execute();
               
               if (isset($_POST['field'])) {
                    $optionArray = $_POST['field'];
                    for ($i=0; $i<count($optionArray); $i++) {
                        echo $optionArray[$i]."<br />";
                        $fieldvalue = $opptionArray[i].value;//which checkbox was marked
                    }
                }
               
               $smth1 = $db->prepare('INSERT INTO category (categoryid, categoryname) VALUES (null, ?)');
               
               $smth1->bind_param('s', $fieldvalue);//value = stored from for loop
               $smth1->execute();
           }
            
        ?>
            <form method="post" action="post.php">
              Company name:<br>
              <input type="text" name="author" value=""><br><br>
              Title:<br>
              <input type="text" name="title" value=""><br><br>
              Job description:<br>
              <textarea type="text" name="description" value="description" cols="80px" rows="15" wrap="soft">
              </textarea><br><br>
              Email:<br>
              <input type="email" name="employerMail"><br><br>
              Application deadline:<br>
              <input type="date" min="2017-01-01" name="deadline"><br><br>
              Job field:<br><br>
              <input type="checkbox" name="field[]" value="1">Front End<br>
              <input type="checkbox" name="field[]" value="2" >back End<br>
              <input type="checkbox" name="field[]" value="3">Web Designer<br>
              <input type="checkbox" name="field[]" value="4" >UI Designer<br>
              <input type="checkbox" name="field[]" value="5">UX Designer<br>
              <input type="checkbox" name="field[]" value="6" >Interaction Designer<br>
              <input type="checkbox" name="field[]" value="7">SEO Specialist<br><br><br>
              <input type="submit">
            </form>

            
			<div class="col-6"><h2>Lorem ipsum dolor sit amet.</h2></div>
			<div class="col-6" style="grid-column: 7/13"><h2>Lorem ipsum dolor sit amet.</h2></div>
			<div class="col-3"><h3>Lorem ipsum dolor sit amet.</h3></div>
			<div class="col-3" style="grid-column: 4/7"><h3>Lorem ipsum dolor sit amet.</h3></div>
			<div class="col-3" style="grid-column: 7/10"><h3>Lorem ipsum dolor sit amet.</h3></div>
			<div class="col-3" style="grid-column: 10/13"><h3>Lorem ipsum dolor sit amet.</h3></div>
		</div>
		
		<?php 
			include('footer.php');
     	?>
		
		</div>
	</body>
</html>