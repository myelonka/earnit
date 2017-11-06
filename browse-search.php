<div class="col-12"><h1>Search a job offer</h1></div>

   <form id="featured_form" method="post" action="browse-search.php">
   Seach:<br><br>
   <input type="text" name="search" class="back" value=""><br><br><br><br>
   <input type="submit" value="Search" name="search_form" class="submit_forms"><br><br>

<?php
     @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error){
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}
       
if (isset($_POST['search_form'])){
        $search_input = trim($_POST['search_form']);
        $search_input = addslashes($ $search_input);
        $search_input = htmlentities($search_input);
        $search_input = mysqli_real_escape_string($db, $search_input);
}

$query = "SELECT author, title, promoSentence FROM posts WHERE MATCH(description) AGAINST(''%".search_form."%'');";

//echo "Running the query: $query <br/>"; # For debugging

$stmt = $db->prepare($query);
    $stmt->bind_result($author, $title, $promoSentence);
    $stmt->execute();
    

while ($stmt->fetch()) {
        echo "<div class='col-4 equal' id='stile_ingrid'> <a href='#openModal'><img src='img/browse_icon.png'/></a><br><span class='post_title'>$title </span> <br> Employer: <span class='post_var'>$author</span><br><br> <span >$promoSentence</span></div> ";
    }    
?>