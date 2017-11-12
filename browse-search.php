<div class="col-12"><h1>Search a job offer</h1></div>

<div id="browse_container">

   <form id="featured_form" method="post" action="">
   <h10>Seach by title:</h10><br><br>
   <input type="text" name="search" class="back" value=""><br>
   <input type="submit" value="Search" name="search_form" class="submit_forms"><br><br>
 </form>
</div>

<?php
  include('config.php');
     @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error){
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}
       
if (isset($_POST['search_form'])){
    $search_input = trim($_POST['search']);
    $search_input = addslashes($search_input);
    $search_input = htmlentities($search_input);
    $search_input = mysqli_real_escape_string($db, $search_input);
}

$query = "SELECT postId, author, title, promoSentence FROM posts";
if (isset($_POST['search_form'])){
  $query = "SELECT postId, author, title, promoSentence FROM posts WHERE title LIKE '%$search_input%'";

}

//echo "Running the query: $query <br/>"; # For debugging

if(!$stmt = $db->prepare($query)){
  printf($db->error);
}
$stmt->bind_result($postId, $author, $title, $promoSentence);
$stmt->execute();


while ($stmt->fetch()) {
    // Set the postid in the url so you can know which post has been clicked
    echo "<div class='col-4 equal' id='stile_ingrid'><span class='post_title'>$title </span> <br> Employer: <span class='post_var'>$author</span><br><br> <span >$promoSentence</span><br> <a id='apply-button' href=?page=recent&id=$postId#openModal>APPLY</a></div>";
    }
    $stmt->close();
?>     
    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
        <?php
            $id = $_GET["id"];
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
          
            if (isset($_POST['submit_application'])){
                $query = "INSERT IGNORE INTO usertopost (postId, userId) VALUES (?, ?)";
                if (!$stmt = $db->prepare($query)){
                    printf($db->error);
                }
                $stmt->bind_param('ii', $id, $_SESSION['login_user']);
                if (!$stmt->execute()){
                    printf($db->error);
                }
            }


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




            if (isset($_FILES['submit_application'])){
                $allowedextensions = array('pdf');
                $extension = strtolower(substr($_FILES['upload']['name'], strrpos($_FILES['upload']['name'], '.') + 1));
                if(in_array($extension, $allowedextensions) === false){
                    #add a new array entry
                        $error[] = 'This is not an PDF file, upload is allowed only for PDF files.';
                    if($_FILES['upload']['size'] > 1000000){
                         $error[]='The file exceeded the upload limit';
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
            <form id="featured_form2" method="post" action="" enctype="multipart/form-data">
              <h10> Name: </h10><br>
              <input type="text" name="employee_name" class="back" value=""><br><br>
              <h10> Surname:</h10><br>
              <input type="text" name="employee_surname" class="back" value=""><br><br>
              <h10> Motivation letter (max 5000 characters):</h10><br>
              <textarea maxlength="5000" type="text" class="back" name="description" value="description" cols="40px" rows="15" wrap="soft"></textarea><br><br>
              <h10> Upload your CV (pdf format):</h10><br>
              <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
              <input type="submit" value="Apply" name="submit_application" class="submit_forms"><br><br>
             </form>
             <?php 
             
            foreach ($emailsId as $key => $value) {
                echo "<h10>".$value."</h10><br>";
            }
             ?>
	</div>
    </div>