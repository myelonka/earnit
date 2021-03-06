<div class="col-12" id="teamwork"><h1>Featured</h1><br>
    <h10>Take a look at the newest offers:</h10>
</div>

<?php
	
     @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error){
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php?>Return to home page </a>");
    exit();
}

// get the postId to be able to easily keep a trace on your element.
$query = "SELECT postId,author,title,promoSentence FROM posts WHERE isFeatured = 1";

//echo "Running the query: $query <br/>"; # For debugging

$stmt = $db->prepare($query);
$stmt->bind_result($postId, $author, $title, $promoSentence);
$stmt->execute();

    

while ($stmt->fetch()) {
    // Set the postid in the url so you can know which post has been clicked
    echo "<div class='col-4 equal' id='stile_ingrid'> <span class='post_title'>$title </span> <br> Employer: <span class='post_var'>$author</span><br><br> <span >$promoSentence</span><br><a id='apply-button' href='?page=feat&id=$postId#openModal'>APPLY</a></div>";
    }
    $stmt->close();
?>

<div class="col-12">
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
            echo '<h10>Hiring company:</h10><p>' .$author. '</p><br><br>';
            echo '<h10>Job description:</h10><p>' .$description. '</p><br><br>';
            echo '<h10>Application deadline:</h10><p>' .$deadline. '</p><br><br><br>';
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
	</div>
    </div>
</div>