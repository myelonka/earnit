<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		
		<title>welcome to earnit</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="javascript.fullPage.css" />
		<link rel="stylesheet" type="text/css" href="../main.css" />
		<link rel='icon' href='../img/favicon.png'>

		<style>


			/* Custom CSS
			 * --------------------------------------- */
			
			.content{
				position: relative;
				top: 40%;
				transform: translateY(-50%);
				text-align: left;
				max-width: 75rem;
				margin: 0 auto;
			}

			/* Section 1
			 * --------------------------------------- */
			#section0{
				background-image: url("../img/macbook2.jpeg");
			}
			
			#section0 img {
				display: inline-block;
			}
			#section0 .content {
				background-color:rgba(102, 51, 255, 0.7);
				padding: 2rem;
				border-radius: 0.5rem;
			}
			#section0 .content div{
				margin-top: 8rem;	
			}
			#section0 h2 {
				font-family: 'Space Mono', monospace;
				color: #fff;
			}
			#section0 p{
				color: #fff;
				font-size: 1.2rem;
				line-height: 1.2;
			}
			#landing-logo {
				display: block;
			}


			/* Section 2
			 * --------------------------------------- */
			#section1{
				background-color: #2EBE21;
			}
			#section1 h2{
				color: #fff;
				background-color: #5836FF;
				padding: 1rem;
				display: inline-block;
				text-transform: uppercase;
			}
			#section1 p{
				opacity: 0.8;
			}


			/* Section 3
			 * --------------------------------------- */
			#section2{
				background-color: #2C3E50;
			}
			#section2 h2{
				color: #fff;
				background-color: #5836FF;
				padding: 1rem;
				display: inline-block;
				text-transform: uppercase;
			}
			#section2 p{
				opacity: 0.6;
			}
		</style>
	</head>
	<body>


	<div id="fullpage">
		<div class="section " id="section0">
			<div class="content">
				<img id="landing-logo" src="../img/earnit-logo-w@1x.png" />
				<img src="../img/underscore@1x.gif" /><br>
				<div>
					<h2>looking for freelance work?</h2><br>
					<p>&mdash;<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla dolor nulla, eget posuere mi pellentesque a. Maecenas porttitor quam ac quam aliquet, quis fringilla lorem pretium. Nam aliquet consectetur dui, id tincidunt leo imperdiet vel. Nulla facilisi. Quisque sollicitudin imperdiet velit vel viverra. Aenean gravida erat purus, ut tristique lectus molestie vitae. Etiam facilisis faucibus dui, nec tincidunt nibh hendrerit eget.</p>
					<a href="../index.php">Go to homepage >></a>
				</div>
			</div>
		</div>
		<div class="section" id="section1">
			<div class="slide" id="slide1">
				<div class="content">
					<h2>No need for jQuery</h2>
					<p>
						5 Kb gzipped!!
					</p>
					<p>
			      		Improve the loading time of your site!
					</p>
				</div>
			</div>
			<div class="slide" id="slide2">
				<div class="content">
					<h2>Slides too!</h2>
				</div>
			</div>
			<div class="slide" id="slide2">
				<div class="content">
					<h2>More slides!</h2>
				</div>
			</div>
		</div>
		<div class="section" id="section2">
			<div class="content">
				<h2>Compatible</h2>
				<p>IE 8+ support.</p>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="javascript.fullPage.js"></script>
	<script type="text/javascript">
		fullpage.initialize('#fullpage', {
			anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
			menu: '#menu',
			css3:true
		});

	</script>

	</body>
</html>
