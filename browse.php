<html>
    <head>
        <title>EarnIt - Browse offers - Featured</title>
		<meta charset="utf-8">
		<meta name="description" content="Browse job offers and commissions from entrepreneurs">
		<meta name="keywords" content="earnit, freelancer, freelancing, entrepreneur, student, coding, graphic design, programming, wed design, web development, ui, ux, computer science, job, commission">
	    <meta name="author" content="Mateusz Mielowski, Paula Pudane, Anete Serecenko">
		<link rel="stylesheet" href="main.css">
		<link rel='icon' href='img/favicon.png'>
        
    </head>
	<body>
		<div id="body-wrapper">

			<?php
			
				$subcurrent = $_GET['page'];
				include('config.php');
				include('header.php');
			?>

			<div class="page-container">
				<div class="center" class="col-12">
					<ul class="sub-nav">
						<li>
							<a <?php if($subcurrent == 'feat') {echo ' class=\'sub-current\'';} ?> href="?page=feat">Featured</a>
						</li>
						<li>
							<a <?php if($subcurrent == 'recent') {echo ' class=\'sub-current\'';} ?> href="?page=recent">Search</a>
						</li>
						<li>
							<a <?php if($subcurrent == 'categ') {echo ' class=\'sub-current\'';} ?> href="?page=categ">Categories</a>
						</li>
					</ul>
				</div>
				

			<?php 
				include('footer.php');
			?>
				<?php switch ($subcurrent) {
					case "feat":
					  include('browse-feat.php');
					  break;
					case "recent":
					 include('browse-search.php');
					  break;
					case "categ":
					  include('browse-categ.php');
					  break;
					}
				?>
				
			</div>
		
		</div>
	</body>
</html>