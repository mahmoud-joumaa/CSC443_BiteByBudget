<?php

require_once "Pages/Views/Shared/populate-page.php";

require_once "Pages/Views/home-page-views.php";

?>

<html>

	<head>
		<!-- Title Bar -->
		<title>BBB | Home Page</title>
		<!-- Linked Styles -->
		<link href="Styles/Shared/reset.css" rel="stylesheet" type="text/css">
		<link href="Styles/Shared/icons.css" rel="stylesheet" type="text/css">
		<link href="Styles/Shared/header.css" rel="stylesheet" type="text/css">
		<link href="Styles/Shared/footer.css" rel="stylesheet" type="text/css">
		<link href="Styles/home-page.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- Menu Nav Bar -->
		<?php populateHomePageHeaderView(); ?>
		<!-- Main -->
		<div id="main">
			<!-- Slideshow -->
			<?php populateSlideshowView(); ?>
			<!-- Description(s) -->
			<div class="description">
				<h1>What is Bite By Budget?</h1>
			</div>
			<div class="description">
				<h1>How do You Use Bite By Budget?</h1>
			</div>
			<!-- Speical Offers -->
			<?php populateOffersView(); ?>
		</div>
		<!-- Footer -->
		<?php populateFooterView(); ?>
	</body>

	<!-- Linked Scripts -->
	<?php
		toggleHeaderScript();
		fetchSlideshowImagesScript();
		moveSlideshowScript();
	?>

</html>
