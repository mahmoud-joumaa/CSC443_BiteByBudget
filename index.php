<?php

require_once "Pages/Views/Shared/populate-page.php";

require_once "Pages/Views/home-page-views.php";

?>

<html>

	<head>
		<!-- Title Bar -->
		<title>BBB | Home Page</title>
		<link href="Images/Icons/favicon-enhanced.png" rel="favicon" type="image/png">
		<!-- Linked Styles -->
		<link href="Styles/Shared/reset.css" rel="stylesheet" type="text/css">
		<link href="Styles/Shared/icons.css" rel="stylesheet" type="text/css">
		<link href="Styles/Shared/header.css" rel="stylesheet" type="text/css">
		<link href="Styles/Shared/footer.css" rel="stylesheet" type="text/css">
		<link href="Styles/home-page.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- Loader -->
		<?php populateLoaderView(); ?>
		<!-- Menu Nav Bar -->
		<?php populateHomePageHeaderView(); ?>
		<!-- Main -->
		<div id="main">
			<!-- Slideshow -->
			<?php populateSlideshowView(); ?>
			<!-- Description(s) -->
			<div class="description">
				<h1>What is Bite By Budget?</h1>
				<p>In light of the current economic crisis in Lebanon, a team of university students decided to create "Bite By Budget". It is an open-source and free-to-use website that <i>finds a bite for every budget</i>. Such a service can help you stay on budget while satisfying their cravings. Check out <a class="underlined" href="Pages/our-partners.php">our partners here</a> to get a better idea of what to expect when browsing recipes.</p>
			</div>
			<div class="description">
				<h1>How Do You Use Bite By Budget?</h1>
				<h2>For Supermarkets</h2>
				<p>Login using your corresponding credentials. If you were not provided with any, make sure to check with our IT support team via the <a href="Pages/contact-us.php" class="underlined">contact us</a> page.</p>
				<p>Upon logging in, you should be instantly redirected to a view corresponding to your supermarket. If you have already provided us with a list of ingredients, it should be populated with the relevant data. Otherwise, it will be an empty table. You should be able to view, edit, and delete ingredients via the provided interface.</p>
				<h2>For Clients</h2>
				<p>There's no signup, no login, and no payment! Bite By Budget is free, forever. All you need to do to get started is navigate to the "Browse Recipes" page on our website. You'll find a detailed description of each step as you go, but here's a general overview of what to expect:</p>
				<p>After inputting your budget, select a recipe from our the populated gallery. A list of ingredients will then be generated for you to view and edit. When you proceed, a list of supermarkets will be generated. The list is sorted primarily by decreasing order of ingredient availability and secondarily by increasing order of price. After selecting which supermarket you wish to shop at, the shopping list will be generated for you to use while running your errands.</p>
			</div>
			<!-- Speical Offers -->
			<?php populateOffersView(); ?>
		</div>
		<!-- Footer -->
		<?php populateHomeFooterView(); ?>
	</body>

	<!-- Linked Scripts -->
	<?php
		animateLoaderScript();
		toggleHeaderScript();
		fetchSlideshowImagesScript();
		moveSlideshowScript();
	?>

</html>
