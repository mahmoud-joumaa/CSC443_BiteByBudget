<?php

require_once "Views/Shared/populate-page.php";
require_once "Views/Shared/scripts.php";
require_once "Views/home-page-views.php";

?>

<html>

		<head>
			<!-- Title Bar -->
			<title>BBB | Browse Recipes</title>
			<!-- Linked Styles -->
			<link href="../Styles/Shared/reset.css" rel="stylesheet" type="text/css">
			<link href="../Styles/Shared/icons.css" rel="stylesheet" type="text/css">
			<link href="../Styles/Shared/header.css" rel="stylesheet" type="text/css">
			<link href="../Styles/Shared/footer.css" rel="stylesheet" type="text/css">
            <script src="../Libraries/jquery.min.js"></script>
			<!-- Linked Scripts -->

            <script>
            // Get all the item-buy buttons and add an event listener to each one
                var itemBuyButtons = document.querySelectorAll('.item-buy');
                for (var i = 0; i < itemBuyButtons.length; i++) {
                    itemBuyButtons[i].addEventListener('click', function(event) {
                        // Get the input element for this button's item
                        var input = event.target.parentNode.querySelector('.item-input');
                        // Increment the input value
                        input.value = parseInt(input.value) + 1;
                    });
                }

                // Get all the item-sell buttons and add an event listener to each one
                var itemSellButtons = document.querySelectorAll('.item-sell');
                for (var i = 0; i < itemSellButtons.length; i++) {
                    itemSellButtons[i].addEventListener('click', function(event) {
                        // Get the input element for this button's item
                        var input = event.target.parentNode.querySelector('.item-input');
                        // Decrement the input value, but don't allow negative values nor to reach below zero
                        input.value = Math.max(parseInt(input.value) - 1, 0);
                    });
                }
            </script>

            <script>  
                
                $(document).ready(function(){
                    
                    // Loads step-1 page
                    $.ajax({
                        type: "POST",
                        url: "Views/browse-recipes-page-view.php",
						data: {function_name: "populate_budget_page"},
						success: function(data){
							$("#step-1").html(data);
						}

                    });

                    
                    
                    
                });

                // loads step-2 when budget is submitted
                $(document).on("submit", "#budget-form", function(e){
                    e.preventDefault();
                        $.ajax({
                        type: "POST",
                        url: "../BackEnd/Controllers/recipe-controller.php",
						data: {action: "Fetch_Recepies"},
						success: function(data){
							$.ajax({
								type: "POST",
								url: "Views/browse-recipes-page-view.php",
								data: {function_name : "populate_Recipes", recipes: data},
								success:function(data){
                                    
									$("#step-2").html(data);
                                    
								}
							});
						}

                        });
                    });


                    // Loads step-3 when recipe is clicked
                    $(document).on("click", ".recipe", function(e){
                        e.preventDefault();
                        let recipe_id_recv = $(this).attr('recipe_id');
                        $.ajax({
                            type: "POST",
                            url: "../BackEnd/Controllers/ingredient-controller.php",
                            data: {action: "Fetch_Recepies", recipe_id: recipe_id_recv},
                            success: function(data){
                                $.ajax({
                                    type: "POST",
                                    url: "Views/browse-recipes-page-view.php",
                                    data: {function_name : "populate_Ingredients", ingredients: data},
                                    success:function(data){
                                        console.log(data);
                                        $("#step-3").html(data);
                                    }
                                });
                            }

                        });

                    });



            </script>
			<?php
				toggleHeaderScript();
			?>
		</head>

		<body>
			<!-- Menu Nav Bar -->
			<?php populateHeaderView(); ?>
			<!-- Main -->
			<div id="main">
                <div id="step-1"> </div>
                <div id="step-2"> </div>
                <div id="step-3"> </div>
                <div id="step-4"> </div>
                <div id="step-5"> </div>
			</div>
			<!-- Footer -->
			<?php populateFooterView(); ?>
		</body>

	</html>
