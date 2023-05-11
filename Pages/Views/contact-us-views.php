<?php

	function populateContactFormView() {
		?>
			<div id="form-wrapper">
				<h1>Contact Us!</h1>
				<form id="contact-form" action="https://formspree.io/mzbjqwzj" method="POST" onsubmit="event.preventDefault();">
					<div class="section-wrapper">
						<label for="email">Email</label>
						<input id="email" name="email" type="text">
					</div>
					<div class="section-wrapper">
						<label>Rating </label>
						<div id="rating-ui-wrapper">
							<div id="rating-labels-wrapper">
								<div class="label-wrapper"><label class="rating-label one" for="rating-1" onclick="updateRating(1)" tabindex="0"></label></div>
								<div class="label-wrapper"><label class="rating-label two" for="rating-2" onclick="updateRating(2)" tabindex="0"></label></div>
								<div class="label-wrapper selected"><label class="rating-label three" for="rating-3" onclick="updateRating(3)" tabindex="0"></label></div>
								<div class="label-wrapper"><label class="rating-label four" for="rating-4" onclick="updateRating(4)" tabindex="0"></label></div>
								<div class="label-wrapper"><label class="rating-label five" for="rating-5" onclick="updateRating(5)" tabindex="0"></label></div>
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
						<label for="subject">Subject</label>
						<input id="subject" name="subject" list="subjects">
						<datalist id="subjects">
							<option value="Bug Report"></option>
							<option value="Customer Support"></option>
							<option value="Feature Request"></option>
							<option value="Information Technology"></option>
						</datalist>
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
					ratings[index-1].parentNode.classList.remove("selected");
					index = i;
					ratings[index-1].parentNode.classList.add("selected");
					msg.innerText = msgs[index-1];
				}
			</script>
		<?php
	}

	function submitFormScript() {
		?>
			<script>
				// Get elements
				const email = document.querySelector("#email");
				const subject = document.querySelector("#subject");
				const feedback = document.querySelector("#feedback");
				// Validate form submission
				function submitForm() {
					if (!validateEmail(email.value))
						alert("Please enter a valid email.");
					else if (!validateSubject(subject.value))
						alert("Kindly select a subject from the list or type in a subject.");
					else if (!validateFeedback(feedback.value))
						alert("Please enter a minimum of 3 characters as feedback.");
					else
						// document.getElementById("contact-form").submit();
						console.log("submitted");

					function validateEmail(text) {
						if (text.length == 0) return false;
						for (let i = 0; i < text.length; i++) {
							if (text[i] == '@' || text[i] == '.') {
								if (i == 0 || i == text.length-1)
									return false;
								if (text[i+1] == '@' || text[i+1] == '.')
									return false;
							}
						}
						return true;
					}
					function validateSubject(text) {
						return text.length != 0;
					}
					function validateFeedback(text) {
						return text.length >= 3;
					}
				}

			// 	$(document).on("submit", "#contact-form", function(){
			// 		var formData = $(this).serializeArray();
			// 		var email, rating, subject, feedback;
					
			// 		$.each(formData, function(index, field) {
			// 			if (field.name === "email") {
			// 			email = field.value;
			// 			} else if (field.name === "rating") {
			// 			rating = field.value;
			// 			} else if (field.name === "subject") {
			// 			subject = field.value;
			// 			} else if (field.name === "feedback") {
			// 			feedback = field.value;
			// 			}
			// 		});
			// 		console.log(email + " " + rating + " " + subject + " " + feedback);

			// 		$.ajax({
			// 			"method": "POST",
			// 			"url": "Views/contact-send.php",
			// 			"data": {"email": email, "rating":rating, "subject":subject, "feedback":feedback},
			// 			success: function(data){

			// 			}

			// 		});
			// 	});
			// </script>
		<?php
	}

?>
