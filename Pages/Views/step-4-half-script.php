<?php 






function load_step_4_half_scripts(){
    ?>
    
    <script>
        function show_buget_insufficient_page_ajx(price, budg){
            $.ajax({
                type: "POST",
                url: "Views/browse-recipes-views.php",
                data: {function_name : "populate_budget_insuficient_page", "budget": budg, "price": price},
                success: function(data){
                    $("#step-4-half").html(data);
                    $("#step-4").html("");
                }
            });
        }
    
        // Loads step-5 after continue button is pressed
        $(document).on("click", "#continue-step-4-half", function(){
            let ingredients_of_supermarket_param = JSON.parse(ingredients_of_supermarket);
            ingredients_of_supermarket_param = JSON.parse(ingredients_of_supermarket_param);
            
            ingredients_of_supermarket_param =ingredients_of_supermarket_param["supermarketIngredients"];
            ingredients_of_supermarket_param = JSON.stringify(ingredients_of_supermarket_param);
            load_step_5_ajx(chosen_price, supermarket, ingredients, ingredients_of_supermarket_param);
        });
    
        // Returns all the way back to step-1 after the return button is pressed in step-4 and a half
        $(document).on("click", "#return-step-4-half", function(){
            budget = 0;
            ingredients = null;
            ingredient_ids = [];
            ingredient_quantity = [];
            supermarket = null;
            recipe_id = -1;
            chosen_price = -1;
            for(let i=0; i<3; i++){
                prevStep();
            }
            $("#step-4-half").html("");
            $("#step-4").html("");
            $("#step-3").html("");
            $("#step-2").html("");
            load_budget_ajx();
        });
    </script>
    <?php
}
?>