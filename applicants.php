
    <?php

    // THIS PAGE CAN BE DELETED LATER !!!

     @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if ($db->connect_error){
        echo "could not connect: " . $db->connect_error;
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
    }
        
           if (isset($_POST['submit_application'])){ //if submit button is pressed
               //add security
               $fNameApplicant = trim($_POST['employee_name']);
               $lNameApplicant = trim($_POST['employee_surname']);
               $description = $_POST['description'];//trim removes white space..we dont purt it here
               $cv = $_POST['fileToUpload'];       
               
               if (!$fNameApplicant || !$lNameApplicant || !$description || !$cv){
                   printf('<img id="exclamation" src="img/exclamation_icon.png"><span id="message_style">You must fill out all the form fields</span>');
                 } 
               
               $fNameApplicant = addslashes($fNameApplicant);
               $fNameApplicant = htmlentities($fNameApplicant);
               $fNameApplicant = mysqli_real_escape_string($db, $fNameApplicant);
               $lNameApplicant = addslashes($lNameApplicant);
               $lNameApplicant = htmlentities($lNameApplicant);
               $lNameApplicant = mysqli_real_escape_string($db, $lNameApplicant);
               $description = addslashes($description);
               $description = htmlentities($description);
               $description = mysqli_real_escape_string($db, $description);
               $cv = addslashes($cv);
               $cv = htmlentities($cv);
               $cv = mysqli_real_escape_string($db, $cv);
              
              @$db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
                if ($db->connect_error) {
                  echo "could not connect: " . $db->connect_error;
                  printf("<br><a href=index.php?>Return to home page </a>");
                  exit();
                }

                }


               $stmt = $db->prepare('INSERT INTO applicants (idApplicant, fNameApplicant, lNameApplicant, description, cv) VALUES (null, ?, ?, ?, ?)');
				  
               $stmt->bind_param('ss', $fNameApplicant, $lNameApplicant, $description, $cv);
               printf($stmt->error);
               $stmt->execute();

               // if the request has been executed by checking the return of it (True for yes, False, for no).
               // $smth->error() will return  the error message.
               // echo $smth->error() will print the error message.
               if (!$stmt->execute()){
                  
                  // Here you have an error, you should print it and redirect the user with an explicit error message
                  exit();
               }
            
        ?>






        
        
    <?php

    // THIS PAGE CAN BE DELETED LATER !!!

     @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if ($db->connect_error){
        echo "could not connect: " . $db->connect_error;
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
    }
        
           if (isset($_POST['submit_application'])){ //if submit button is pressed
               //add security
               $fNameApplicant = trim($_POST['employee_name']);
               $lNameApplicant = trim($_POST['employee_surname']);
               $letter = $_POST['letter'];//trim removes white space..we dont purt it here      
               
               if (!$fNameApplicant || !$lNameApplicant || !$letter ){
                   printf('<img id="exclamation" src="img/exclamation_icon.png"><span id="message_style">You must fill out all the form fields</span>');
                 } 
               
               $fNameApplicant = addslashes($fNameApplicant);
               $fNameApplicant = htmlentities($fNameApplicant);
               $fNameApplicant = mysqli_real_escape_string($db, $fNameApplicant);
               $lNameApplicant = addslashes($lNameApplicant);
               $lNameApplicant = htmlentities($lNameApplicant);
               $lNameApplicant = mysqli_real_escape_string($db, $lNameApplicant);
               $letter = addslashes($letter);
               $letter = htmlentities($letter);
               $letter = mysqli_real_escape_string($db, $letter);
              
              @$db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
                if ($db->connect_error) {
                  echo "could not connect: " . $db->connect_error;
                  printf("<br><a href=index.php?>Return to home page </a>");
                  exit();
                }

                }


               $stmt = $db->prepare('INSERT INTO applicants (idApplicant, fNameApplicant, lNameApplicant, letter) VALUES (null, ?, ?, ?)');
                  
               $stmt->bind_param('ssssss', $fNameApplicant, $lNameApplicant, $letter);
               printf($stmt->error);
               $stmt->execute();

               // if the request has been executed by checking the return of it (True for yes, False, for no).
               // $smth->error() will return  the error message.
               // echo $smth->error() will print the error message.
               if (!$stmt->execute()){
                  
                  // Here you have an error, you should print it and redirect the user with an explicit error message
                  exit();
               }
            
        ?>