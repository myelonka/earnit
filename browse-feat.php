<div class="col-12" id="browse_heading"><h1>Featured</h1></div>

<div id="job_container">
<?php
     @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error){
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

// get the postId to be able to easily keep a trace on your element.
$query = "select postId,author,title,promoSentence from posts where isFeatured = 1";

//echo "Running the query: $query <br/>"; # For debugging

$stmt = $db->prepare($query);
$stmt->bind_result($postId, $author, $title, $promoSentence);
$stmt->execute();

    

while ($stmt->fetch()) {
    // Set the postid in the url so you can know which post has been clicked
    echo "<div id='stile_ingrid'> <a href='?page=feat&id=$postId#openModal'><img src='img/browse_icon.png'/></a><br><span class='post_title'>$title </span> <br><br> Employer: <span class='post_var'>$author</span><br><br> <span >$promoSentence</span></div>";
    }
    $stmt->close();
?>

</div>
    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
        <?php
            // Retrieve the id set in the url
            $id = $_GET["id"];
            //ask all the data from database associated to this id
            $query = "SELECT author, title, description, employerMail, deadline FROM posts WHERE postId=$id";
            $stmt = $db->prepare($query);
            $stmt->bind_result($author, $title, $description, $employerMail, $deadline);    
            $stmt->execute();
            $stmt->fetch();
            $stmt->close();
            echo '<h2>' . $title . '</h2><br>';
            echo '<p>Hiring company:' .$author. '</p><br>';
            echo '<p>Job description:<br>' .$description. '</p><br>';
            echo '<p>Application deadline:<br>' .$deadline. '</p><br>';
            echo '<h2>Application form</h2><br>';
          
            $usersId = [];
            $query = "SELECT * FROM usertopost WHERE postId=$id";
            $stmt = $db->prepare($query);
            $stmt->bind_result($postId, $userId);
            $stmt->execute();
            while ($stmt->fetch()){
                array_push($usersId, $userId);
            }
            $stmt->close();
            
            $emailsId = [];
            foreach ($usersId as $key => $value) {
                $query = "SELECT email FROM users WHERE id=$value";
                $stmt = $db->prepare($query);
                $stmt->bind_result($email);
                $stmt->execute();
                $stmt->fetch();
                array_push($emailsId, $email);
                $stmt->close();
            }


            if (isset($_POST['submit_application'])){
                $query = "INSERT IGNORE INTO usertopost (postId, userId) VALUES (4, 8)";
                if (!$stmt1 = $db->prepare($query)){
                    printf($db->error);
                }
                //$stmt->bind_param('ss', $id, $_SESSION['login_user']);
                if (!$stmt1->execute()){
                    printf($db->error);
                }
            }

            if (isset($_FILES['submit_application'])){
                $allowedextensions = array('pdf');
                $extension = strtolower(substr($_FILES['upload']['name'], strrpos($_FILES['upload']['name'], '.') + 1));
                if(in_array($extension, $allowedextensions) === false){
                    #add a new array entry
                        $error[] = '<br> This is not an PDF file, upload is allowed only for PDF files.';
                    if($_FILES['upload']['size'] > 1000000){
                         $error[]='<br> The file exceeded the upload limit';
                    }
                    if(empty($error)){    
                        move_uploaded_file($_FILES['upload']['tmp_name'], "uploads/{$_FILES['upload']['name']}");     
                    }
                }
            }
            if (!empty($error)){
               foreach ($error as $err){
                echo $err;
                }
            }
        ?>
            <form id="featured_form" method="post" action="" enctype="multipart/form-data">
              <h1> Name: </h1>
              <input type="text" name="employee_name" class="back" value="">
              <h1> Surname: </h1>
              <input type="text" name="employee_surname" class="back" value="">
              <h1> Motivation letter (max 5000 characters): </h1>
              <textarea maxlength="5000" type="text" class="back" name="description" value="description" cols="40px" rows="15" wrap="soft"></textarea>
              <h1> Upload your CV (PDF format): </h1>
              <input id="fileToUpload" type="file" name="fileToUpload">
              <br><br>
              <input type="submit" value="Apply" name="submit_application" class="submit_forms"><br><br>
             </form>
             <?php 
             
            foreach ($emailsId as $key => $value) {
                echo "<h1>".$value."</h2><br>";
            }
             ?>
	</div>
    
    </div>
