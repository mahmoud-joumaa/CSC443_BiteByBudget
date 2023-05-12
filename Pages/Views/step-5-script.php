<?php 



function load_step_5_scripts(){
    ?>

    <script>
        $(document).on("click", ".item-sell-step-5", function(e){
            let curr_val = parseInt($(this).next().val());
            let price_per = parseFloat($(this).next().attr("price"));
            curr_val -= 1;
            $(this).next().val(curr_val);
            $(this).next().next().next().text(curr_val * price_per);
        });

        // Increases value of ingredients by 1 when + button is clicked
        $(document).on("click", ".item-buy-step-5", function(e){
            let curr_val = parseInt($(this).prev().val());
            let price_per = parseFloat($(this).prev().attr("price"));
            curr_val += 1;
            $(this).prev().val(curr_val);
            $(this).next().text(curr_val * price_per);
        });

        $(document).on("change", ".item-input-step-5", function(e){
            let num_items = parseFloat($(this).val());
            let price_per = parseFloat($(this).attr("price"));
            $(this).next().next().text(num_items * price_per);
        });

    </script>

    <script>
        function load_step_5_ajx(totalPrice, supermar, ings, ingredients_of_supermar){
            console.log(ingredients_of_supermar);
            console.log(ings);
            $.ajax({
                type: "POST",
                url: "Views/browse-recipes-views.php",
                data: {function_name : "populate_step_5_page", "supermarket": supermar, "ingredients" : ings, "ingredients_of_supermarket": ingredients_of_supermar, "totalPrice": totalPrice},
                success: function(data){
                    $("#step-4").html("");
                    $("#step-4-half").html(data);
                }
            });
        }

        $(document).on("click", "#back-button-step-5", function(e){
            e.preventDefault();
            ingredients =JSON.parse(ingredients);
            
            for(let i=0; i<ingredient_quantity.length; i++){
                ingredients[i]["Quantity"] = ingredient_quantity[i];
            }
            
            ingredients =JSON.stringify(ingredients);
            supermarket = null;
            document.getElementById("step-4-half").innerHTML = "";
            load_supermarkets_ajx(ingredient_ids, ingredient_quantity);
        });

    </script>
    <?php
}
?>