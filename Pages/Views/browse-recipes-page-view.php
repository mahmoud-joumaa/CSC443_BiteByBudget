<?php 


/**
 * Handles the logic of loading the page step by step
 */
function loadScripts(){
    ?>
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
                let budget = 0;
                let recipe_id = -1;
                let ingredients = null;

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
                    budget = $("#budget").val();
                    
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
                                    $("#step-1").html("");
									$("#step-2").html(data);
                                    
								}
							});
						}

                    });
                });

                // Load step-1 when back button is clicked in step-2
                $(document).on("click", "#back-button-step-2", function(e){
                    e.preventDefault();
                    buget = null;
                    $.ajax({
                        type: "POST",
                        url: "Views/browse-recipes-page-view.php",
						data: {function_name: "populate_budget_page"},
						success: function(data){
							$("#step-1").html(data);
                            $('#step-2').html("");
						}

                    });
                });

                // Load step-2 when back button is clicked in step-3
                $(document).on("click", "#back-button-step-3", function(e){
                    e.preventDefault();
                    recipe_id = null;

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
                                    $("#step-3").html("");
									$("#step-2").html(data);
                                    
								}
							});
						} 

                    });
                    
                });


                // Loads step-3 when recipe is clicked
                $(document).on("click", ".recipe", function(e){
                    e.preventDefault();
                    recipe_id = $(this).attr('recipe_id')
                    $.ajax({
                        type: "POST",
                        url: "../BackEnd/Controllers/ingredient-controller.php",
                        data: {action: "Fetch_Recepies", "recipe_id": recipe_id},
                        success: function(data){
                            ingredients = data;
                            console.log(data);
                            $.ajax({
                                type: "POST",
                                url: "Views/browse-recipes-page-view.php",
                                data: {function_name : "populate_Ingredients", "ingredients": ingredients},
                                success:function(data){
                                    $("#step-2").html("");
                                    $("#step-3").html(data);
                                }
                            });
                        }

                    });

                });



            </script>
    <?php
}

/**
 * Loads step-1 or the budget form page
 */
function populate_budget_page(){
    ?>
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
    <?php
}
/**
 * Loads step-2 or the recipe view page
 */
function populate_Recipes($recipes){
    $recipes = json_decode($recipes);
    for($i = 0; $i < sizeof($recipes); $i++){
        $image = "../" . $recipes[$i]->Image;
        $recipe_name = $recipes[$i]->Recipe_Name;
        $recipe_id = $recipes[$i] ->Recipe_ID;
        ?>

        <div class="recipe" recipe_id = "<?php echo $recipe_id?>"> 
            <image width=100 class="recipe-img" src="<?php echo $image?>">
            <span> <?php echo $recipe_name ?></span>
        </div>

    <?php
    }
    ?>
    <button id="back-button-step-2"> Back </button>
    <?php
}


/**
 * Loads step-3 or the ingredients page
 */
function populate_Ingredients($ingredients){
    $ingredients = json_decode($ingredients);
    for($i = 0; $i < sizeof($ingredients); $i++){
        ?>
        <div class='item-wrapper'>
            <img width=100 class='item-img' src= <?php echo "../" . $ingredients[$i]->Image ?> >
            <div class='item-name'> <?php echo $ingredients[$i]->Ingredient_Name ?></div>
            <div class='item-cost'>
                <button class='item-sell'>-</button>
                <input class='item-input' type='number' pattern='\d*' value= <?php $ingredients[$i]->Quantity ?> >
                <button class='item-buy'>+</button>
                <?php echo $ingredients[$i]->Unit ?>
            </div>
            </div>
        <?php
    } 

    ?>
    <button id="back-button-step-3"> Back </button>
    <?php
}




// Controls the page loading according to the name of the function called
if(isset($_POST["function_name"])){
    $name = $_POST["function_name"];
    switch($name){
        case "populate_Recipes":
            if(isset($_POST["recipes"])){
                echo populate_Recipes($_POST["recipes"]);
            }
            break;
        case "populate_Ingredients":
            if(isset($_POST["ingredients"])){
                echo populate_Ingredients($_POST["ingredients"]);
            }
            break;
        case "populate_budget_page":
                
            echo populate_budget_page();
                
            break;

    }
}


?>

