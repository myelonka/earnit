<div class="col-12" id="teamwork"><h1>Featured</h1></div>

<?php
     @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error){
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

$query = "select author,title,promoSentence from posts where isFeatured = 1";

//echo "Running the query: $query <br/>"; # For debugging

$stmt = $db->prepare($query);
    $stmt->bind_result($author, $title, $promoSentence);
    $stmt->execute();
    

while ($stmt->fetch()) {
        echo "<div class='col-4 equal' id='stile_ingrid'> <a href='#openModal'><img src='img/browse_icon.png'/></a><br><span class='post_title'>$title </span> <br><br> Employer: <span class='post_var'>$author</span><br><br><br> <span >$promoSentence</span></div> ";
    }    
?>

<div class="col-12">
    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
        <?php
            @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

            if ($db->connect_error){
                echo "could not connect: " . $db->connect_error;
                printf("<br><a href=index.php>Return to home page </a>");
                exit();
            }

            $query = "select author,title,description,employerMail,deadline from posts where isFeatured = 1";
            
            $stmt1 = $db->prepare($query);
            $stmt1->bind_result($author, $title, $description, $employerMail, $deadline);
            $stmt1->execute();
    
            echo '<h2>' . $title . '</h2><br>';
            echo '<p>Hiring company:' .$author. '</p><br>';
            echo '<p>Job description:<br>' .$description. '</p><br>';
            echo '<p>Application deadline:<br>' .$deadline. '</p><br>';
            echo '<h2>Application form</h2><br>';
        
            if (isset($_FILES['submit_application'])){
                $allowedextensions = array('pdf');
                $extension = strtolower(substr($_FILES['upload']['name'], strrpos($_FILES['upload']['name'], '.') + 1));
                $error = array ();
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
            <form id="featured_form" method="post" action="" enctype="multipart/form-data">
              Name:<br>
              <input type="text" name="employee_name" class="back" value=""><br><br>
              Surname:<br>
              <input type="text" name="employee_surname" class="back" value=""><br><br>
              Motivation letter (max 5000 characters):<br>
              <textarea maxlength="5000" type="text" class="back" name="description" value="description" cols="40px" rows="15" wrap="soft"></textarea><br><br>
              Upload your CV (pdf format):<br>
              <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
              <input type="submit" value="Apply" name="submit_application" class="submit_forms"><br><br>
              
	</div>
    </div>
</div>