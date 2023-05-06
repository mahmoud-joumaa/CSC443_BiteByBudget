<?php

	function populateSlideshowView() {
		?>
		<div id="slideshow">
			<div id="slideshow-carousel">
			</div>
			<div class="slideshow-arrow left" onclick="moveSlideshowLeft()"></div>
			<div class="slideshow-arrow right" onclick="moveSlideshowRight()"></div>
			<div id="view">
				<a href="#offers">View Current Offers!</a>
			</div>
		</div>
		<?php
	}

	function fetchSlideshowImagesScript() {
		?>
			<script>
				const slideshow = document.getElementById("slideshow");
				const carousel = document.getElementById("slideshow-carousel");
				let image_srcs = ["AvengersAgeOfUltron.jpg", "BreakingBad.jpg", "CaptainAmericaTheFirstAvenger.jpg", "CaptainMarvel.jpg", "FRIENDS.png", "GuardiansOfTheGalaxy.webp", "GuardiansOfTheGalaxy2.webp", "IronMan.jpg", "IronMan2.jpg", "Manifest.jpg", "TheIncredibleHulk.webp"];
				const size = 10;
				let index = 0;
				for (let i = 0; i < size; i++) {
					const img = document.createElement("div");
					img.classList.add("slideshow-image");
					img.style.backgroundImage = `url(Images/Recipes/${image_srcs[i]})`;
					img.style.right = `-${i*100}%`;
					carousel.appendChild(img);
				}
				const images = document.querySelectorAll("#slideshow .slideshow-image");
			</script>
		<?php
	}

	function moveSlideshowScript() {
		?>
		<script>
			let moveSlideshowInterval = setInterval(moveSlideshowRight, 3000);
			function moveSlideshowLeft() {
				index -= 1;
				if (index < 0) index = size-1;
				moveSlideshow();
			}
			function moveSlideshowRight() {
				index = (index+1)%size;
				moveSlideshow();
			}
			function moveSlideshow() {
				clearInterval(moveSlideshowInterval);
				for (let i = 0; i < size; i++) {
					const offset = index - i;
					images[i].style.right = `${offset*100}%`;
				}
				moveSlideshowInterval = setInterval(moveSlideshowRight, 3000);
			}
		</script>
		<?php
	}

	function populateOffersView() {
		?>
			<div id="offers">
				<div class="offer">
					<div class="overlay">
						<a href="">Night Changes</a>
					</div>
					<span class="sticker">-10%</span>
				</div>
				<div class="offer">
					<div class="overlay">
						<a href="">Derniere Danse</a>
					</div>
					<span class="sticker">-20%</span>
				</div>
				<div class="offer">
					<div class="overlay">
						<a href="">Set Fire To The Rain</a>
					</div>
					<span class="sticker">HOT</span>
				</div>
			</div>
		<?php
	}

?>
