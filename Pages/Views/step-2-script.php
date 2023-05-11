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
        let txt = $(this).val();
        let childs =  $("#step-2").children(".recipe");
        let str = "";
        for (let i = 0; i < childs.length; i++) {
            str = $(childs[i]).children("h4").text().replace(/\s/g, "").toLowerCase();
            if(txt[0] != '@'){
                if(str.substring(0, txt.length) != txt.replace(/\s/g, "").toLowerCase()){
                    $(childs[i]).hide();
                }
                else{
                    $(childs[i]).show();
                }
                
            }
        }   
        
    });

    $(document).on("change", "#search-bar", function(){
        let txt = $(this).val();
        let childs =  $("#step-2").children(".recipe");
        let str = "";
        for (let i = 0; i < childs.length; i++) {
            if(txt[0] == '@'){
                let recipe = $(childs[i]).attr("recipe_id");
                $.ajax({
                type: "POST",
                url: "../BackEnd/Controllers/ingredient-controller.php",
                data: {action: "Fetch_Ingredients", "recipe_id": recipe},
                success: function(data){
                    data =JSON.parse(data);
                    let has_ing = false;
                    for(let j=0; j<data.length; j++){
                        str = data[j]["Ingredient_Name"].replace(/\s/g, "").toLowerCase();
                        
                        if(str.substring(0, txt.length-1) == txt.replace(/\s/g, "").toLowerCase().substring(1)){
                            has_ing = true;
                        }
                    }

                    if(!has_ing){
                        $(childs[i]).hide();
                    }
                    else{
                        $(childs[i]).show();
                    }
                    
                }

                });
                
            }
        }   
        
    });
    
    </script>
    <?php
}
?>