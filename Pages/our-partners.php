<?php

require_once "Views/Shared/populate-page.php";

require_once "Views/our-partners-views.php";

?>

<html>

	<head>
		<!-- Title Bar -->
		<title>BBB | Our Partners</title>
		<link href="../Images/Icons/favicon-enhanced.png" rel="favicon" type="image/png">
		<!-- Linked Styles -->
		<link href="../Styles/Shared/reset.css" rel="stylesheet" type="text/css">
		<link href="../Styles/Shared/header.css" rel="stylesheet" type="text/css">
		<link href="../Styles/Shared/footer.css" rel="stylesheet" type="text/css">
		<link href="../Styles/our-partners.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- Loader -->
		<?php populateLoaderView(); ?>
		<!-- Menu Nav Bar -->
		<?php populateHeaderView(); ?>
		<!-- Main -->
		<div id="main">
			<h2>Meet Our Partners</h2>
			<?php
				$partners = populatePartners();
				for ($i = 0; $i < count($partners); $i++) {
					populatePartnerView($i%2, $partners[$i]->name, $partners[$i]->image, $partners[$i]->description);
				}
			?>
		</div>
		<!-- Footer -->
		<?php populateFooterView(); ?>
	</body>

	<!-- Linked Scripts -->
	<?php
		animateLoaderScript();
		toggleHeaderScript();
	?>

</html>
