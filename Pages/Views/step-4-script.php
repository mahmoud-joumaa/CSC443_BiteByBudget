<?php 







function load_step_4_scripts(){
    ?>
    <script>
        function return_to_ingredients_ajx(ings){
            $.ajax({
                type: "POST",
                url: "Views/browse-recipes-views.php",
                data: {function_name : "populate_Ingredients", "ingredients": ings},
                success:function(data){
                    $("#step-4").html("");
                    $("#step-3").html(data);
                }
            });
        }
    </script>
    
    <script>
        function load_supermarkets_ajx(ing_IDs, ing_quantity) {
        return new Promise((resolve, reject) => {
            $.ajax({
            type: "POST",
            url: "../BackEnd/Controllers/supermarket-controller.php",
            data: {
                action: "Fetch_SuperMarkets_With_Prices",
                ing_IDs: ing_IDs,
                ing_quantity: ing_quantity
            },
            success: function(data) {
                let markets = data;
                let response = JSON.parse(data);
                response = ingredients_of_supermarket["supermarketIngredients"];
                response = JSON.stringify(data);
                $.ajax({
                type: "POST",
                url: "Views/browse-recipes-views.php",
                data: { function_name: "populate_market_page", markets: markets },
                success: function(data) {
                    $("#step-3").html("");
                    $("#step-4").html(data);
                    resolve(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    reject(errorThrown);
                }
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                reject(errorThrown);
            }
            });
        });
        }
    
    </script>
    
    <script>
    
    // Loads step-3 when back button is clicked in step-4
    $(document).on("click", "#back-button-step-4", function(e){
        e.preventDefault();
        ingredients =JSON.parse(ingredients);
        
        for(let i=0; i<ingredient_quantity.length; i++){
            ingredients[i]["Quantity"] =ingredient_quantity[i];
        }
        ingredients =JSON.stringify(ingredients);
        ingredient_ids = [];
        ingredient_quantity = [];
        return_to_ingredients_ajx(ingredients);
    });
    
    
    
        // Loads step 5 if the buget is sufficient else goes to step 4 and a half
        $(document).on("click", ".select-supermarket-button", function(e){
            e.preventDefault();
            supermarket = $(this).prev().prev().html();
            supermarket = $("#supermarket-select").val();
            chosen_price = $("#supermarket-select option:selected").attr("price");
            ingredients_of_supermarket = JSON.parse(ingredients_of_supermarket);
            
            if(budget >= parseInt(chosen_price)){
                let ingredients_of_supermarket_param = JSON.parse(ingredients_of_supermarket);
                ingredients_of_supermarket_param =ingredients_of_supermarket_param["supermarketIngredients"];
                ingredients_of_supermarket_param = JSON.stringify(ingredients_of_supermarket_param);
                load_step_5_ajx(chosen_price, supermarket, ingredients, ingredients_of_supermarket_param);
            }
            else{
                show_buget_insufficient_page_ajx(chosen_price, budget);
            }
    
        });
    
    
    </script>
    <?php
}    
?>
