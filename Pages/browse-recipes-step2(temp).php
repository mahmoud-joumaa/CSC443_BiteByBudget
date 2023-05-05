<?php 

require_once("Views/Shared/populate-page.php");
require_once("Views/Shared/scripts.php");

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
			<script src="../Libraries/jquery.min.js"></script>

            <script>  
                // loads recipes to page
                $(document).ready(function(){
                    $.ajax({
                        type: "POST",
                        url: "../BackEnd/Controllers/recipe-controller.php",
						data: {"action": "Fetch_Recepies"},
						success: function(data){
							console.log(data);
							$.ajax({
								type: "POST",
								url: "Views/browse-recipes-step-2-page-view(temp).php",
								data: {"function-name" : "populate_Recipes", "recipes": data},
								success:function(data){
									$("#recipes").html(data);
								}
							});
						}

                    });
                });

            </script>


			<!-- Linked Scripts -->
			<?php
				toggleHeaderScript();
			?>
		</head>

		<body>
			<!-- Menu Nav Bar -->
			<?php populateHeaderView(); ?>
			
            <div id="recipes"> </div>


			<!-- Footer -->
			<?php populateFooterView(); ?>
		</body>

	</html>
<?php
?>
