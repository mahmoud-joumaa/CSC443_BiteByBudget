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
