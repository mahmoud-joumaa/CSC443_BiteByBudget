<?php 


/**
 * Handles the logic of loading the page step by step
 */
function loadScripts(){
    ?>
            <script>


                // Decreases value of ingredients by 1 when - button is clicked
                $(document).on("click", ".item-sell", function(e){
                    let curr_val = parseInt($(this).next().val());
                    curr_val -= 1;
                    $(this).next().val(curr_val);
                });

                // Increases value of ingredients by 1 when + button is clicked
                $(document).on("click", ".item-buy", function(e){
                    let curr_val = parseInt($(this).prev().val());
                    curr_val += 1;
                    $(this).prev().val(curr_val);
                });
            
            </script>

            <script>  
                let budget = 0;
                let recipe_id = -1;
                let ingredients = null;
                let ingredient_ids = [];
                let ingredient_quantity = [];

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
                    recipe_id = $(this).attr('recipe_id');
                    $.ajax({
                        type: "POST",
                        url: "../BackEnd/Controllers/ingredient-controller.php",
                        data: {action: "Fetch_Ingredients", "recipe_id": recipe_id},
                        success: function(data){
                            ingredients = data;
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


                // Loads step 4 when Next button is clicked
                $(document).on("click", "#next-button-step-3", function(e){
                    e.preventDefault();
                    let ingredients_temp = JSON.parse(ingredients);
                    let values = document.querySelectorAll(".item-wrapper .item-input");
                    for (let i = 0; i < values.length; i++) {
                        ingredient_quantity.push(values[i].value);
                        ingredient_ids.push(ingredients_temp[i]["4"]);
                    }
                    
                    $.ajax({
                        type: "POST",
                        url: "../BackEnd/Controllers/supermarket-controller.php",
                        data: {action: "Fetch_SuperMarkets_With_Prices", "ing_IDs": ingredient_ids, "ing_quantity": ingredient_quantity},
                        success: function(data){
                            let markets = data;
                            $.ajax({
                                type: "POST",
                                url: "Views/browse-recipes-page-view.php",
                                data: {function_name : "populate_market_page", "markets": markets},
                                success:function(data){
                                    $("#step-3").html("");
                                    $("#step-4").html(data);
                                }
                            });
                        }
                    });

                });

                // Loads step-3 when back button is clicked in step-4
                $(document).on("click", "#back-button-step-4", function(e){
                    e.preventDefault();
                    ingredients =JSON.parse(ingredients);
                    console.log(ingredients);
                    for(let i=0; i<ingredient_quantity.length; i++){
                        ingredients[i]["Quantity"] =ingredient_quantity[i];
                    }
                    console.log(ingredients);
                    ingredients =JSON.stringify(ingredients);
                    ingredient_ids = [];
                    ingredient_quantity = [];

                    
                    $.ajax({
                        type: "POST",
                        url: "Views/browse-recipes-page-view.php",
                        data: {function_name : "populate_Ingredients", "ingredients": ingredients},
                        success:function(data){
                            $("#step-4").html("");
                            $("#step-3").html(data);
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
                <input class='item-input' type='number' pattern='\d*' value= <?php echo $ingredients[$i]->Quantity ?> >
                <button class='item-buy'>+</button>
                <?php echo $ingredients[$i]->Unit ?>
            </div>
            </div>
        <?php
    } 

    ?>
    <button id="back-button-step-3"> Back </button>
    <button id="next-button-step-3"> Next </button>
    <?php
}


function populate_Markets($markets){
    $markets = json_decode($markets);
    foreach($markets as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    ?>
    <button id="back-button-step-4"> Back </button>

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

        case "populate_market_page":
            if(isset($_POST["markets"])){

                echo populate_Markets($_POST["markets"]);
            }
            break;

    }
}


?>

