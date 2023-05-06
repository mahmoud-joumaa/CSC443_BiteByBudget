<?php

	function populateSlideshowView() {
		?>
		<div id="slideshow">
			<div id="view">
				<a href="#offers">View Current Offers!</a>
			</div>
		</div>
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
								data[i].Status = "-" + data[i].Status.slice(10);
							}
							$("#main #offers .offer:nth-child("+(i+1)+")").css("background-image"," url('../"+ data[i]["Image"] +"')");
							$("#main #offers .offer:nth-child("+(i+1)+") a").text(data[i].Ingredient_Name);
							$("#main #offers .offer:nth-child("+(i+1)+") .sticker").text(data[i].Status);
						}
						
					}
				});
			});
		
			</script>
		<?php
	}

?>
