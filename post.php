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
			<div class="col-1">10</div>
			<div class="col-12"><h1>Post a job offer</h1></div>
            
            <form method="post" action="formtest.php">
                Company name:<br>
              <input type="text" name="author"><br>
              Title:<br>
              <input type="text" name="title"><br>
              Job description:<br>
              <textarea type="text" name="description" cols="80px" rows="15" wrap="soft">
              </textarea>
              
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