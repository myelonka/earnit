<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    

<div id="nav-container">
	<div id="logo-container">
		<span class="img-helper"></span><a href="index.php">
			<img src="img/earnit-logo.png" alt="earnit logo" />
		</a>
	</div>
	<div id=nav-menu-wrapper>
		<ul id="nav-menu" class="center">
			<li>
				<a <?php if($current == 'index.php') {echo ' class=\'current\'';} ?> href="index.php?">Home</a>
			</li>
			<li>
				<a <?php if($current == 'browse.php') {echo ' class=\'current\'';} ?> href="browse.php?page=feat">Browse offers</a>
			</li>
			<li>
				<a <?php if($current == 'how.php') {echo ' class=\'current\'';} ?> href="how.php?">How it works</a>
			</li>
			<li>
				<a <?php if($current == 'contact.php') {echo ' class=\'current\'';} ?> href="contact.php?">Contact us</a>
			</li>
			<li>
				<a id='cta-link' href="post.php">Post an offer</a>
			</li>
		</ul>
	</div>
	<a <?php if($current == 'profile.php') {echo ' class=\'current\'';} ?> href="profile.php?" class="svg-link" id="profile-img-link"><img src="img/profile-icon.svg" alt="profile icon" class="svg" id="profile-img" /></a>
</div>



<script>
	jQuery('img.svg').each(function(){
				  var $img = jQuery(this);
				  var imgID = $img.attr('id');
				  var imgClass = $img.attr('class');
				  var imgURL = $img.attr('src');

				  jQuery.get(imgURL, function(data) {
						// Get the SVG tag, ignore the rest
						var $svg = jQuery(data).find('svg');

						// Add replaced image's ID to the new SVG
						if(typeof imgID !== 'undefined') {
							 $svg = $svg.attr('id', imgID);
						}
						// Add replaced image's classes to the new SVG
						if(typeof imgClass !== 'undefined') {
							 $svg = $svg.attr('class', imgClass+' replaced-svg');
						}

						// Remove any invalid XML tags as per http://validator.w3.org
						$svg = $svg.removeAttr('xmlns:a');

						// Replace image with new SVG
						$img.replaceWith($svg);

				  }, 'xml');

			 });
</script>
