<?php

	function populateLoaderView() {
		?>
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>
		<?php
	}

	function animateLoaderScript() {
		?>
			<script>
				const loader_wrapper = document.querySelector("#loader-wrapper");
				// Set loader to appear / disapper
				window.addEventListener("load", removeLoader);
				function removeLoader() {
					loader_wrapper.style.display = "none";
				}
				// Rotate loader
				const loader = document.querySelector("#loader");
				setInterval(rotateLoader, 1000);
				let i = 1;
				function rotateLoader() {
					loader.style.rotate = `${i*360}deg`;
					i++;
				}
			</script>
		<?php
	}

	function populateHeaderView() {
		?>
			<div id="header">
				<a href="../index.php"><i class="logo"></i><span>Bite By Budget</span></a>
				<div id="burger-menu" tabindex="0" onclick="toggleHeader()">
					<div class="burger-bun"></div>
					<div class="burger-bun"></div>
					<div class="burger-bun"></div>
				</div>
				<ul>
					<li><a href="about-us.php">About Us</a></li>
					<li><a href="our-partners.php">Our Partners</a></li>
					<li><a href="browse-recipes.php">Browse Recipes</a></li>
					<li><a href="contact-us.php">Contact Us</a></li>
					<li><button>Login</button></li>
				</ul>
			</div>
		<?php
	}

	function populateHomePageHeaderView() {
		?>
			<div id="header">
				<a href="../index.php"><i class="logo"></i><span>Bite By Budget</span></a>
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

	function toggleHeaderScript() {
		?>
			<script>
				function toggleHeader() {
					const menu = document.getElementById("burger-menu");
					const main = document.getElementById("main");
					menu.classList.toggle("expand");
					// COMBAK: Consider another effect
					// main.classList.toggle("shrink");
				}
			</script>
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
							<li><i class="social-media facebook"></i><a href="https://instagram.com/bitebybudget?igshid=NTc4MTIwNjQ2YQ==" target="_blank">Facebook</a></li>
							<li><i class="social-media instagram"></i><a href="https://instagram.com/bitebybudget?igshid=NTc4MTIwNjQ2YQ==" target="_blank">Instagram</a></li>
							<li><i class="social-media linkedin"></i><a href="https://instagram.com/bitebybudget?igshid=NTc4MTIwNjQ2YQ==" target="_blank">LinkedIn</a></li>
						</ul>
					</div>
					<div id="contact-info">
						<ul>
							<li><a href="tel:96181823557">Phone</a><i class="contact phone"></i></li>
							<li><a href="mailto:mahmoud.joumaa@lau.edu">Email</a><i class="contact email"></i></li>
							<li><a href="contact-us.php">Rate Us</a><i class="contact rating"></i></li>
						</ul>
					</div>
				</div>
			</div>
		<?php
	}

	function populateHomeFooterView() {
		?>
			<div id="footer">
				<div id="copyright">
					<span>copyright@2023</span>
				</div>
				<div id="connect">
					<span>Let's Connect</span>
					<div id="social-media">
						<ul>
							<li><i class="social-media facebook"></i><a href="https://instagram.com/bitebybudget?igshid=NTc4MTIwNjQ2YQ==" target="_blank">Facebook</a></li>
							<li><i class="social-media instagram"></i><a href="https://instagram.com/bitebybudget?igshid=NTc4MTIwNjQ2YQ==" target="_blank">Instagram</a></li>
							<li><i class="social-media linkedin"></i><a href="https://instagram.com/bitebybudget?igshid=NTc4MTIwNjQ2YQ==" target="_blank">LinkedIn</a></li>
						</ul>
					</div>
					<div id="contact-info">
						<ul>
							<li><a href="tel:96181823557">Phone</a><i class="contact phone"></i></li>
							<li><a href="mailto:mahmoud.joumaa@lau.edu">Email</a><i class="contact email"></i></li>
							<li><a href="Pages/contact-us.php">Rate Us</a><i class="contact rating"></i></li>
						</ul>
					</div>
				</div>
			</div>
		<?php
	}

?>
