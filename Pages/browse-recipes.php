<?php

require_once "Views/Shared/populate-page.php";

require_once "Views/browse-recipes-page-view.php";


?>

<html>

	<head>
		<!-- Title Bar -->
		<title>BBB | Browse Recipes</title>
			<!-- Linked Styles -->
			<link href="../Styles/Shared/reset.css" rel="stylesheet" type="text/css">
			<link href="../Styles/Shared/header.css" rel="stylesheet" type="text/css">
			<link href="../Styles/Shared/footer.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- Loader -->
		<?php populateLoaderView(); ?>
		<!-- Menu Nav Bar -->
		<?php populateHeaderView(); ?>
			<!-- Main -->
			<div id="main">
				<div id="step-1"> </div>
				<div id="step-2"> </div>
				<div id="step-3"> </div>
				<div id="step-4"> </div>
				<div id="step-4-half"></div>
				<div id="step-5"> </div>
			</div>
			<!-- Footer -->
			<?php populateFooterView(); ?>
		</body>

	<!-- Linked Scripts -->
	<script src="../Libraries/jquery.min.js"></script>
	<?php
		animateLoaderScript();
		toggleHeaderScript();
		echo loadScripts();
	?>

</html>
