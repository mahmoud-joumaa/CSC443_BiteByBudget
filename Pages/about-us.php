<?php

require_once "Views/Shared/populate-page.php";

require_once "Views/about-us-views.php";

?>

<html>

	<head>
		<!-- Title Bar -->
		<title>BBB | Home Page</title>
		<!-- Linked Styles -->
		<link href="../Styles/Shared/reset.css" rel="stylesheet" type="text/css">
		<link href="../Styles/Shared/icons.css" rel="stylesheet" type="text/css">
		<link href="../Styles/Shared/header.css" rel="stylesheet" type="text/css">
		<link href="../Styles/Shared/footer.css" rel="stylesheet" type="text/css">
		<link href="../Styles/about-us.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- Menu Nav Bar -->
		<?php populateHeaderView(); ?>
		<!-- Main -->
		<div id="main">
			<h2>Meet The Team</h2>
			<div id="team-wrapper">
				<?php
					$members = getMembers();
					$team_size = count($members);
					for ($i = 0; $i < $team_size; $i++) {
						populateTeamMemberView($members[$i]);
					}
				?>
			</div>
		</div>
		<!-- Footer -->
		<?php populateFooterView(); ?>
	</body>

	<!-- Linked Scripts -->
	<?php
		toggleHeaderScript();
	?>

</html>
