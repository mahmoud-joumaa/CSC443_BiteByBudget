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
						<label>Rating</label>
						<!-- TODO: Add cookie icons as labels -->
						<input name="rating" type="radio" value="1">
						<input name="rating" type="radio" value="2">
						<input name="rating" type="radio" value="3" checked>
						<input name="rating" type="radio" value="4">
						<input name="rating" type="radio" value="5">
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

	function submitFormScript() {
		?>
			<script>
				function submitForm() {

				}
			</script>
		<?php
	}

?>
