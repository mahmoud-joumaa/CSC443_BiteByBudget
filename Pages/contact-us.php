<?php

require_once "Views/Shared/populate-page.php";

require_once "Views/contact-us-views.php";

?>

<html>

	<head>
		<!-- Title Bar -->
		<title>BBB | Contact Us</title>
		<link href="../Images/Icons/favicon-enhanced.png" rel="favicon" type="image/png">
		<!-- Linked Styles -->
		<link href="../Styles/Shared/reset.css" rel="stylesheet" type="text/css">
		<link href="../Styles/Shared/header.css" rel="stylesheet" type="text/css">
		<link href="../Styles/Shared/footer.css" rel="stylesheet" type="text/css">
		<link href="../Styles/contact-us.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- Loader -->
		<?php populateLoaderView(); ?>
		<!-- Menu Nav Bar -->
		<?php populateHeaderView(); ?>
		<!-- Main -->
		<div id="main">
			<?php populateContactFormView() ?>
		</div>
		<!-- Footer -->
		<?php populateFooterView(); ?>
	</body>

	<!-- Linked Scripts -->
	<?php
		animateLoaderScript();
		toggleHeaderScript();
		updateRatingScript();
		submitFormScript();
	?>

</html>
