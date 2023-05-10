<?php

require_once "Views/Shared/scripts.php";

?>
<html>
	<head>
		<!-- Title Bar -->
		<title>BBB | Budget</title>
		<!-- Linked Styles -->
		<link href="Styles/Shared/reset.css" rel="stylesheet" type="text/css">
		<link href="Styles/Shared/icons.css" rel="stylesheet" type="text/css">
		<link href="Styles/Shared/header.css" rel="stylesheet" type="text/css">
        <link href="../Styles/budget.css" rel="stylesheet" type="text/css">
		<!-- Linked Scripts -->
		<script src="Scripts/Shared/header.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <?php sending_budget() ?>
		
	</head>
	<body>
        <div class="block">
            <a href="#"><div class="back">Back</a>
        </div>
        <div class="container">
            <h1>Enter your budget</h1>
            <form id="budget-form">
                <input type="text" name="budget" id="budget" placeholder="e.g: 100$" class="textfield">
                <br><br>
                <button type="submit" class="mbutton">Submit</button>
            </form>
        </div>
	</body>
</html>