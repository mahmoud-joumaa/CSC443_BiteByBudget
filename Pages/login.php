<?php

require_once "Views/Shared/populate-page.php";

require_once "Views/login-view.php";


?>

<html>

	<head>
		<!-- Title Bar -->
		<title>BBB | Login</title>
			<!-- Linked Styles -->
			<link href="../Styles/Shared/reset.css" rel="stylesheet" type="text/css">
			<link href="../Styles/Shared/header.css" rel="stylesheet" type="text/css">
			<link href="../Styles/Shared/footer.css" rel="stylesheet" type="text/css">
            <script src="../Libraries/jquery.min.js"></script>
            
            
	</head>

	<body>
		<!-- Loader -->
		<?php populateLoaderView(); ?>
		<!-- Menu Nav Bar -->
		<?php populateHeaderView(); ?>
			<!-- Main -->
			<div id="main">
                <?php populate_login_page() ?>
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
