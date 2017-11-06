<div class="col-12"><h1>Categories</h1>
    <form id="post_form" method="post" action="">
              Choose a job field:<br>
              <input type="checkbox" name="field[]" value="frontEnd">Front End<br>
              <input type="checkbox" name="field[]" value="backEnd" >Back End<br>
              <input type="checkbox" name="field[]" value="webDesigner">Web Designer<br>
              <input type="checkbox" name="field[]" value="uiDesigner" >UI Designer<br>
              <input type="checkbox" name="field[]" value="uxDesigner">UX Designer<br>
              <input type="checkbox" name="field[]" value="interactionDesigner" >Interaction Designer<br>
              <input type="checkbox" name="field[]" value="seoSpecialist">SEO Specialist<br><br><br>
              <input type="submit" name="submit_form" class="submit_forms"><br><br><br><br><br>
    
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
         $query = $query . " where title =" .$fieldvalue;
    }

//echo "Running the query: $query <br/>"; # For debugging

$stmt = $db->prepare($query);
    $stmt->bind_result($author, $title, $description,$promoSentence,$deadline);
    $stmt->execute();
    

while ($stmt->fetch()) {
        echo "<div class='col-4 equal' id='stile_ingrid'> <a href='#openModal'><img src='img/browse_icon.png'/></a><br><span class='post_title'>$title </span> <br> Employer: <span class='post_var'>$author</span><br><br> <span >$promoSentence</span></div> ";
    }    
?>


<div class="col-12">
    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
        </div>
	</div>
    </div>

