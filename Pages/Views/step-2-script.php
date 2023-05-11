<?php





function load_step_2_scripts(){
    ?>
    <script> 
        function load_recipes_ajx(){
            $.ajax({
                type: "POST",
                url: "../BackEnd/Controllers/recipe-controller.php",
                data: {action: "Fetch_Recepies"},
                success: function(data){
                    $.ajax({
                        type: "POST",
                        url: "Views/browse-recipes-views.php",
                        data: {function_name : "populate_Recipes", recipes: data},
                        success:function(data){
                            $("#step-1").html("");
                            $("#step-2").html(data);
                            
                        }
                    });
                }
    
            });
        }       
    
    </script>
    
    <script>
        
    
    // Load step-1 when back button is clicked in step-2
    $(document).on("click", "#back-button-step-2", function(e){
        e.preventDefault();
        buget = 0;
        document.getElementById("step-2").innerHTML = "";
        load_budget_ajx();
    });
    
    // Loads step-3 when recipe is clicked
    $(document).on("click", ".recipe", function(e){
        e.preventDefault();
        recipe_id = $(this).attr('recipe_id');
        load_ingredients_ajx(recipe_id);
    
    });


    $(document).on("input", "#search-bar", function(){
        let arr =  $("#step-2").children(".recipe");
        for (let i = 0; i < arr.length; i++) {
            arr[i] = $(arr[i]).children("span").text().trim();
        }   
        console.log(arr);

    });
    
    </script>
    <?php
}
?>