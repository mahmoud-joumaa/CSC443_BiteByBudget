<?php
	function populateSlideshowView() {
		?>
		<div id="slideshow">
			<div id="slideshow-carousel">
			</div>
			<div class="slideshow-arrow left" onclick="moveSlideshowLeft()"></div>
			<div class="slideshow-arrow right" onclick="moveSlideshowRight()"></div>
			<div id="slider">
			</div>
			<!--
			<div id="view">
				<a href="#offers">View Current Offers!</a>
			</div>
			-->
		</div>
		<?php
	}

	function fetchSlideshowImagesScript() {
		?>
			<script>
				const slideshow = document.getElementById("slideshow");
				const carousel = document.getElementById("slideshow-carousel");

				const size = 10;
				let index = 0;
				// Generate slider
				const slider = document.getElementById("slider");
				for (let i = 0; i < size; i++) {
					const circle = document.createElement("div");
					circle.setAttribute("tabindex", 0);
					circle.setAttribute("onclick", `moveSlideshowToIndex(${i})`);
					circle.classList.add("circle");
					slider.appendChild(circle);
				}
				const circles = document.querySelectorAll("#slider .circle");
				// Generate slideshow images
				const image_srcs = ["AvengersAgeOfUltron.jpg", "BreakingBad.jpg", "CaptainAmericaTheFirstAvenger.jpg", "CaptainMarvel.jpg", "FRIENDS.png", "GuardiansOfTheGalaxy.webp", "GuardiansOfTheGalaxy2.webp", "IronMan.jpg", "IronMan2.jpg", "Manifest.jpg", "TheIncredibleHulk.webp"];
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
			circles[0].classList.add("fill");
			const updateSpeed = 3500;
			let moveSlideshowInterval = setInterval(moveSlideshowRight, updateSpeed);
			function moveSlideshowLeft() {
				circles[index].classList.remove("fill");
				index -= 1;
				if (index < 0) index = size-1;
				moveSlideshow();
			}
			function moveSlideshowRight() {
				circles[index].classList.remove("fill");
				index = (index+1)%size;
				moveSlideshow();
			}
			function moveSlideshowToIndex(current_index) {
				circles[index].classList.remove("fill");
				index = current_index;
				moveSlideshow();
			}
			function moveSlideshow() {
				clearInterval(moveSlideshowInterval);
				circles[index].classList.add("fill");
				for (let i = 0; i < size; i++) {
					const offset = index - i;
					images[i].style.right = `${offset*100}%`;
				}
				moveSlideshowInterval = setInterval(moveSlideshowRight, updateSpeed);
			}
		</script>
		<?php
	}

	function populateOffersView() {
		?>
			<script src="Libraries/jquery.min.js"> </script>
			

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

			
			<script> 
			

			$(document).ready(function(){
				$.ajax({
					type: "POST",
					url: "BackEnd/Controllers/ingredient-controller.php",
					data: {action: "Fetch_Offers"},
					success:function(data){
						data = JSON.parse(data);
						for(var i in data){
							if(data[i].Status.slice(0, 7) == "on sale"){
								data[i].Status = "-" + data[i].Status.slice(10) + "%";
							}
						}
						console.log(data);
						$("#main #offers .offer:nth-child(1)").css("background-image",'url(' + data[0].Image +')');
						$("#main #offers .offer:nth-child(1) a").text(data[0].Ingredient_Name);
						$("#main #offers .offer:nth-child(1) .sticker").text(data[0].Status);
						$("#main #offers .offer:nth-child(2)").css("background-image",'url(' + data[1].Image +')');
						$("#main #offers .offer:nth-child(2) a").text(data[1].Ingredient_Name);
						$("#main #offers .offer:nth-child(2) .sticker").text(data[1].Status);
						$("#main #offers .offer:nth-child(3)").css("background-image",' url( '+ data[2].Image +')');
						$("#main #offers .offer:nth-child(3) a").text(data[2].Ingredient_Name);
						$("#main #offers .offer:nth-child(3) .sticker").text(data[2].Status);
						
					}
				});
			});
		
			</script>
		<?php
	}

?>
