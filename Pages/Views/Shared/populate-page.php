<?php

	function populateHeaderView() {
		?>
			<div id="header">
				<a href="index.php"><i>LOGO</i><span>Bite By Budget</span></a>
				<div id="burger-menu" tabindex="0" onclick="toggleHeader()">
					<div class="burger-bun"></div>
					<div class="burger-bun"></div>
					<div class="burger-bun"></div>
				</div>
				<ul>
					<li><a href="Pages/about-us.php">About Us</a></li>
					<li><a href="Pages/our-partners.php">Our Partners</a></li>
					<li><a href="Pages/browse-recipes.php">Browse Recipes</a></li>
					<li><a href="Pages/contact-us.php">Contact Us</a></li>
					<li><button>Login</button></li>
				</ul>
			</div>
		<?php
	}

	function populateFooterView() {
		?>
			<div id="footer">
				<div id="copyright">
					<span>copyright@2023</span>
				</div>
				<div id="connect">
					<span>Let's Connect</span>
					<div id="social-media">
						<ul>
							<li><a href="">Facebook</a></li>
							<li><a href="">Instagram</a></li>
						</ul>
					</div>
					<div id="contact-info">
						<ul>
							<li><a href="">Phone</a></li>
							<li><a href="">Email</a></li>
							<li><a href="Pages/contact-us.php">Submit Feedback</a></li>
						</ul>
					</div>
				</div>
				<div id="site-map">
					<span>Site Map</span>
				</div>
			</div>
		<?php
	}

?>
