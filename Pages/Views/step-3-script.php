<?php





function load_step_3_scripts(){
    ?>
    <script> 
        function load_ingredients_ajx(recipe){
            $.ajax({
                type: "POST",
                url: "../BackEnd/Controllers/ingredient-controller.php",
                data: {action: "Fetch_Ingredients", "recipe_id": recipe},
                success: function(data){
                    ingredients = data;
                    let sending = {function_name : "populate_Ingredients", "ingredients": ingredients};
                    $.ajax({
                        type: "POST",
                        url: "Views/browse-recipes-views.php",
                        data: sending,
                        success:function(data){
                            $("#step-1").html("");
                            $("#step-2").html("");
                            $("#step-3").html(data);
                        }
                    });
                }

            });
        }       

    </script>


        
    <script>
    
        // Decreases value of ingredients by 1 when - button is clicked
        $(document).on("click", ".item-sell-step-3", function(e){
            let curr_val = parseInt($(this).next().val());
            curr_val -= 1;
            $(this).next().val(curr_val);
        });
    
        // Increases value of ingredients by 1 when + button is clicked
        $(document).on("click", ".item-buy-step-3", function(e){
            let curr_val = parseInt($(this).prev().val());
            curr_val += 1;
            $(this).prev().val(curr_val);
        });
    
    
        // Load step-2 when back button is clicked in step-3
        $(document).on("click", "#back-button-step-3", function(e){
            e.preventDefault();
            recipe_id = -1;
            document.getElementById("step-3").innerHTML = "";
            load_recipes_ajx();
            
        });
    
        // Loads step 4 when Next button is clicked
        $(document).on("click", "#next-button-step-3", function(e){
            e.preventDefault();
            let ingredients_temp = JSON.parse(ingredients);
            
            
            let values = document.querySelectorAll(".item-wrapper .item-input-step-3");
            for (let i = 0; i < values.length; i++) {
                ingredient_quantity.push(values[i].value);
                ingredient_ids.push(ingredients_temp[i]["4"]);
            }
    
            ingredients =JSON.parse(ingredients);
            
            for(let i=0; i<ingredient_quantity.length; i++){
                ingredients[i]["Quantity"] = ingredient_quantity[i];
            }
            
            ingredients =JSON.stringify(ingredients);
            
            load_supermarkets_ajx(ingredient_ids, ingredient_quantity).then((response) => {
                ingredients_of_supermarket = response;
            }).catch((error) => {
                console.error(error);
            });
        });
    
    </script>
    <?php
}    
?>

