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
            echo "<div class='col-4 equal' id='stile_ingrid'> <a href='#openModal'></a><br><span class='post_title'>$title </span> <br><br> Employer: <span class='post_var'>$author</span><br><br> <span >$promoSentence</span><br><img src='img/browse_icon.png'/></div> ";
        }    
    ?>

</div>

    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            
        </div>
	</div>

</div>
