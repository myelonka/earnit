<div id="nav-container">
	<div class="col-12" id="nav">
		<div class="col-3" id="logo-container">
			<span class="helper"></span><a href="index.php"><img src="img/earnit-logo@1x.png" height="36px" alt="earnit logo"/></a>
		</div>
		<div id="nav-menu" style="grid-column: 4/13">
			<ul id="nav-list" class="right">
				<li>
					<a <?php if($current == 'index.php') {echo ' id=\'current\'';} ?> href="index.php">Home</a>
				</li>
				<li>
					<a <?php if($current == 'browse.php') {echo ' id=\'current\'';} ?> href="browse.php">Browse Offers</a>
				</li>
				<li>
					<a <?php if($current == 'post.php') {echo ' id=\'current\'';} ?> href="post.php">Post an Offer</a>
				</li>
				<li>
					<a <?php if($current == 'how.php') {echo ' id=\'current\'';} ?> href="how.php">How It Works</a>
				</li>
				<li>
					<a <?php if($current == 'profile.php') {echo ' id=\'current\'';} ?> href="profile.php">profile</a>
				</li>
			</ul>
		</div>
	</div>
</div>