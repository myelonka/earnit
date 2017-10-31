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
							<a <?php if($subcurrent == 'recent') {echo ' class=\'sub-current\'';} ?> href="?page=recent">New</a>
						</li>
						<li>
							<a <?php if($subcurrent == 'categ') {echo ' class=\'sub-current\'';} ?> href="?page=categ">Categories</a>
						</li>
						<li>
							<a <?php if($subcurrent == 'freel') {echo ' class=\'sub-current\'';} ?> href="?page=freel">Freelancers</a>
						</li>
					</ul>
				</div>
				<div class="col-1">1</div>
				<div class="col-1">2</div>
				<div class="col-1">3</div>
				<div class="col-1">4</div>
				<div class="col-1">5</div>
				<div class="col-1">6</div>
				<div class="col-1">7</div>
				<div class="col-1">8</div>
				<div class="col-1">9</div>
				<div class="col-1">10</div>
				<div class="col-1">11</div>
				<div class="col-1">12</div>
				
				<?php switch ($subcurrent) {
					case "feat":
					  include('browse-feat.php');
					  break;
					case "recent":
					 include('browse-recent.php');
					  break;
					case "categ":
					  include('browse-categ.php');
					  break;
					case "freel":
					 include('browse-freel.php');
					  break;
					}
				?>
				
			</div>

			<?php 
				include('footer.php');
			?>
		
		</div>
	</body>
</html>