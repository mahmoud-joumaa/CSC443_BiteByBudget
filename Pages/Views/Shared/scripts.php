<?php

function toggleHeaderScript() {
	?>
	<script>
		function toggleHeader() {
			const menu = document.getElementById("burger-menu");
			menu.classList.toggle("expand");
		}
	</script>
	<?php
}

?>
<?php

function sending_budget() {
	?>
	<script>
    $(document).ready(function() {
        $('#budget-form').submit(function(event) {
            event.preventDefault(); // Prevent form from submitting normally
            var budget = $('#budget').val();
            $.ajax({
                url: 'recipes.php',
                type: 'GET',
                data: {budget: budget},
                success: function(response) {
                    // Handle successful response from the server
                    alert('Budget submitted successfully');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle errors
                    alert('Error submitting budget: ' + textStatus + ' - ' + errorThrown);
                }
            });
        });
    });
	</script>
	<?php
}

?>
