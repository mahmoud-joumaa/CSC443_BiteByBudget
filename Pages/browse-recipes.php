<?php
session_start();
unset($_SESSION['username']);
session_destroy();
require_once "Views/Shared/populate-page.php";

require_once "Views/browse-recipes-views.php";


?>

<html>

	<head>
		<!-- Title Bar -->
		<title>BBB | Browse Recipes</title>
		<link href="../Images/Icons/favicon-enhanced-no-bg.ico" rel="icon" type="image/ico">
			<!-- Linked Styles -->
			<link href="../Styles/Shared/reset.css" rel="stylesheet" type="text/css">
			<link href="../Styles/Shared/header.css" rel="stylesheet" type="text/css">
			<link href="../Styles/Shared/footer.css" rel="stylesheet" type="text/css">
			<link href="../Styles/browse-recipes.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- Loader -->
		<?php populateLoaderView(); ?>
		<!-- Menu Nav Bar -->
		<?php populateHeaderView(); ?>
			<!-- Main -->
			<div id="main">
				<div id="step-tracker-wrapper">
					<h3 class="step-tracker">Step 1</h3>
					<h3 class="step-tracker">Step 2</h3>
					<h3 class="step-tracker">Step 3</h3>
					<h3 class="step-tracker">Step 4</h3>
					<h3 class="step-tracker">Step 5</h3>
				</div>
				<div id="step-1" class="step-wrapper"></div>
				<div id="step-2" class="step-wrapper" style="pointer-events: none;"></div>
				<div id="step-3" class="step-wrapper" style="pointer-events: none;"></div>
				<div id="step-4" class="step-wrapper" style="pointer-events: none;"></div>
				<div id="step-4-half" class="step-wrapper" style="pointer-events: none;"></div>
				<div id="step-5" class="step-wrapper" style="pointer-events: none;"></div>
				<div class="arrow prev hide" onclick="prevStep()"></div>
				<div class="arrow next" onclick="nextStep()"></div>
			</div>
			<!-- Footer -->
			<?php populateFooterView(); ?>
		</body>

	<!-- Linked Scripts -->
	<script src="../Libraries/jquery.min.js"></script>
	<?php
		animateLoaderScript();
		toggleHeaderScript();
		trackStepsScript();
		selectRecipeScript();
		selectSupermarketScript();
		echo loadScripts();
	?>

</html>
