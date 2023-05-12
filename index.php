<?php

require_once "Pages/Views/Shared/populate-page.php";

require_once "Pages/Views/home-page-views.php";

?>

<html>

	<head>
		<!-- Title Bar -->
		<title>BBB | Home Page</title>
		<link href="Images/Icons/favicon-enhanced-no-bg.ico" rel="icon" type="image/ico">
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
				<p>You might be wondering how we came up with the idea, why, and what's behind the unique name. The inspiration behind this top notch idea comes, unfortunately, from the unfavorable living conditions many Lebanese citizens have been experiencing, such as inflation and the devaluation  of their national currency which caused prices of simple ingredients, like eggs and butter, to sky rocket. As a result, many would opt for recipes that are more affordable  and won't punch a hole in their wallet. With a couple of laptops, more than a couple of sleepless nights, and half of the developers in the team running on solely on caffeine, "Bite By Budget" came to life by the efforts of a team of just five university students. Check out <a href="Pages/about-us.php" class="underlined">this page</a> if you're just as excited to meet us as we are to meet you!</p>
				<p>So why “Bite By Budget”? Well, it is an open-source and FREE-to-use website that <i>finds a bite for every budget</i>. With this service, we can guarantee that you will not have to choose between an affordable recipe and a tasty recipe, even amid the current economic crisis. Our service will help satisfy your cravings while staying on budget. To ensure you find the ingredients you need to cook your next dish, we have partnered up with a few supermarkets to help widen the scope of your search. Make sure to <a class="underlined" href="Pages/our-partners.php">check them out here</a> to get a sense of what to expect when browsing for your next budget-friendly addiction!</p>
			</div>
			<div class="description">
				<h1>How Do You Use Bite By Budget?</h1>
				<h2>For Supermarkets</h2>
				<p>Login using your corresponding credentials. If you were not provided with any, reach out to our IT Support Team via the <a class="underlined" href="Pages/contact-us.php">contact us page</a>.</p>
				<p>Upon logging in, you should be instantly redirected to a view corresponding to your supermarket. If you have already provided us with a list of ingredients, it should be populated with the relevant data. Otherwise, it will be an empty table. You should be able to view, edit, and delete ingredients via the provided interface.</p>
				<h2>For Clients</h2>
				<p>To get started, navigate to the "Browse Recipes" page on our website. You'll find a detailed description of what to do in each step as you progress through the search, but here's a general overview of what to expect when looking for your favorite recipe:</p>
				<p>After inputting your budget, kindly select a recipe from the populated gallery. A list of ingredients will then be generated for you to view and edit. Accordingly, a list of supermarkets will be generated. The list is sorted primarily by decreasing order of ingredient availability and secondarily by increasing order of price. Lastly after selecting the supermarket you wish to shop at, the shopping list will be generated for you to use while running your errands. Happy shopping, and happy cooking!</p>
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
