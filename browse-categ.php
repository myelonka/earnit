<div class="col-12" id="browse_heading"><h1>Categories</h1></div>
<div class="col-12">
    <form id="post_form" method="post" action="">
              <h1>Choose a job field:</h1>
              <input type="checkbox" name="field[]" value="frontEnd"><p>Front End</p><br>
              <input type="checkbox" name="field[]" value="backEnd" ><p>Back End</p><br>
              <input type="checkbox" name="field[]" value="webDesigner"><p>Web Designer</p><br>
              <input type="checkbox" name="field[]" value="uiDesigner" ><p>UI Designer</p><br>
              <input type="checkbox" name="field[]" value="uxDesigner"><p>UX Designer</p></p><br>
              <input type="checkbox" name="field[]" value="interactionDesigner" ><p>Interaction Designer</p><br>
              <input type="checkbox" name="field[]" value="seoSpecialist"><p>SEO Specialist</p><br><br><br>
              <input class="submit_forms" type="submit" name="submit_form">

</form>
</div>

<div id="job_container">

    <?php
     @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if ($db->connect_error){
        echo "could not connect: " . $db->connect_error;
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
    }
        
    if (isset($_POST['field'])) {
        $optionArray = $_POST['field'];
        for ($i=0; $i<count($optionArray); $i++){
        // echo $optionArray[$i]."<br />";
        $fieldvalue = $optionArray[$i];//which checkbox was marked
        }
    }

    $query = "select author,title,description,promoSentence,deadline from posts";
    if (isset($_POST['field'])){
        $query = "SELECT author, title, description, promoSentence, deadline FROM posts WHERE category=?";

    }
    //echo "Running the query: $query <br/>"; # For debugging
    if (!$stmt = $db->prepare($query)){
      printf($db->error);
    }
    if (isset($_POST['field'])){
      $stmt->bind_param("s", $fieldvalue);
    }
    $stmt->bind_result($author, $title, $description, $promoSentence, $deadline);
    $stmt->execute();
    while ($stmt->fetch()) {
            echo "<div class='col-4 equal' id='stile_ingrid'><span class='post_title'>$title </span> <br><br> Employer: <span class='post_var'>$author</span><br><br> <span >$promoSentence</span><br><a href='?page=search&id=$postId#openModal' id='apply-button'>APPLY</a></div> ";
        }    
    ?>

</div>

    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            
<<<<<<< HEAD
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
            <div id='categ'>
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
             </form>
            </div>
             <?php 
             
            foreach ($emailsId as $key => $value) {
                echo "<h3>".$value."</h3><br>";
            }
             ?>
=======
>>>>>>> 6c968f32916a4c1477d0e7a34b796bada693564b
        </div>
	</div>

</div>
