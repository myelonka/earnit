<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		
		<title>welcome to EarnIt</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="javascript.fullPage.css" />
		<link rel="stylesheet" type="text/css" href="../main.css" />
		<link rel='icon' href='../img/favicon.png'>

		<style>


			/* Custom CSS
			 * --------------------------------------- */
			
			.content{
				position: relative;
				top: 50%;
				transform: translateY(-50%);
				text-align: left;
				max-width: 75rem;
				margin: 0 auto;
				display: grid;
				grid-gap: 1rem;
				grid-template-columns: repeat(12, 1fr);
			}
			
			.content2 {
				position: relative;
				top: 50%;
				transform: translateY(-50%);
				text-align: left;
				max-width: 75rem;
				margin: 0 auto;
				grid-gap: 1rem;
				grid-template-columns: repeat(12, 1fr);
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
				background-color:rgba(100, 50, 255, 0.7);
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
				background-color: #444;
				padding: 2rem;
			}
			#section1 h2{
				color: #fff;
				display: inline-block;
				font-family: 'Space Mono', monospace;
			}
			#section1 p{
				color: #24207A;
				font-weight: 400;
				font-size: 16px;
			}


			/* Section 3
			 * --------------------------------------- */
			#section2{
				background-color: #444;
			}
			#section2 h2{
				color: #fff;
				display: inline-block;
				font-family: 'Space Mono', monospace;
			}
		</style>
	</head>
	<body>


	<div id="fullpage">
		<div class="section " id="section0">
			<div class="content">
				<img id="landing-logo" src="../img/earnit-logo-w@1x.png" />
				<img src="../img/underscore@1x.gif" />
				<div class="col-12">
					<h2>welcome</h2><br>
					<h4 style="color: #fff;">&mdash;<br>EarnIt is a place for student freelancers and entrepreneurs working in the IT field (and more).<br>You can find dozens of experienced students, and hundreds of well paid job comissions (and the numbers are still growing).<br><br>&#8595;  scroll down to learn more  &#8595;
					<a style="float: right;" href="../index.php">Go to homepage </a></h4>
				</div>
			</div>
		</div>
		<div class="section" id="section1">
			<div class="content" class="col-12">
				<div class="col-6">
					<h2>want to get hired?</h2>
					<h4 style="color: #fff;">
						<br>
						&mdash;<br>
						Our website contains hundreds of job offers from companies and independent entrepreneurs. Choose from a variety of fields.<br>Register and start earning today!<br>
					</h4>
					<img style="height: 160px; float: right;" src="../img/fingerbang-alt.gif" />
				</div>
				<div class="color-div" style="grid-column: 7/13; padding: 2rem 2rem;">
					<form>
						<div class="form-container">
							<label><b>Email</b></label>
							<input type="text" placeholder="Enter Email" name="email" required>

							<label><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="psw" required>

							<label><b>Repeat Password</b></label>
							<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
							<input type="checkbox" checked="checked"> Remember me
							<h5>By creating an account you agree to our <a href="#">Terms & Privacy </a>.</h5>

							<div class="clearfix">
							  <button type="button"  class="cancelbtn">Log In</button>
							  <button type="submit" class="signupbtn">Sign Up</button>
						</div>
					  </div>
					</form>
				</div>
			</div>
		</div>
		<div class="section" id="section2" >
			<div class="content2">
				<h2>... or do you want to have<br>some work done?</h2>
				<h4 style="color: #fff;">
					<br>
					&mdash;<br>
					Hire the perfect freelancer to help with your project. Fill up a simple form to post your job offer and receive replies by email. No registration necessary!<br><br>
				</h4>
				<button style="width: 25%; color: #5836FF; font-weight: 600;" href="#">Open the form</button>
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
