<?php

	function populateContactFormView() {
		?>
			<div id="form-wrapper">
				<h1>Contact Us!</h1>
				<form action="" method="POST">
					<div class="section-wrapper">
						<label for="email">Email</label>
						<input id="email" name="email" type="text">
					</div>
					<div class="section-wrapper">
						<label>Rating </label>
						<div id="rating-ui-wrapper">
							<div id="rating-labels-wrapper">
								<label class="rating-label one" for="rating-1" onclick="updateRating(1)"></label>
								<label class="rating-label two" for="rating-2" onclick="updateRating(2)"></label>
								<label class="rating-label three selected" for="rating-3" onclick="updateRating(3)"></label>
								<label class="rating-label four" for="rating-4" onclick="updateRating(4)"></label>
								<label class="rating-label five" for="rating-5" onclick="updateRating(5)"></label>
							</div>
							<span id="rating-message">3 - Fine, I guess</span>
						</div>
						<input id="rating-2" name="rating" type="radio" value="2">
						<input id="rating-1" name="rating" type="radio" value="1">
						<input id="rating-3" name="rating" type="radio" value="3" checked>
						<input id="rating-4" name="rating" type="radio" value="4">
						<input id="rating-5" name="rating" type="radio" value="5">
					</div>
					<div class="section-wrapper">
						<label for="feedback">Feedback</label>
						<textarea id="feedback" name="feedback" type="textarea" rows="5"></textarea>
					</div>
					<div class="section-wrapper">
						<button onclick="submitForm()">Submit</button>
					</div>
				</form>
			</div>
		<?php
	}

	function updateRatingScript() {
		?>
			<script>
				// initialize index
				let index = 3;
				// get all cookie labels
				const ratings = document.querySelectorAll("#rating-labels-wrapper .rating-label");
				// generate rating messages
				const msgs = ["1 - Dead", "2 - Pretty Bad", "3 - Fine I guess", "4 - Nice", "5 - Flawless"];
				// get rating message
				const msg = document.querySelector("#rating-message");
				// update the rating UI
				function updateRating(i) {
					ratings[index-1].classList.remove("selected");
					index = i;
					ratings[index-1].classList.add("selected");
					msg.innerText = msgs[index-1];
				}
			</script>
		<?php
	}

	function submitFormScript() {
		?>
			<script>
				function submitForm() {

				}
			</script>
		<?php
	}

?>
