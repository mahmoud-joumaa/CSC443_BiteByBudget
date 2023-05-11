<?php 
    



function load_step_1_scripts(){
    ?>
    <script> 
        function load_budget_ajx(){
            $.ajax({
                type: "POST",
                url: "Views/browse-recipes-views.php",
                data: {function_name: "populate_budget_page"},
                success: function(data){
                    $("#step-1").html(data);
                }
    
            });
        }   
    
    
        $(document).ready(function(){
            // Loads step-1 page
            load_budget_ajx();
        });
    
    </script>
    
    
    <script>
    // loads step-2 when budget is submitted
        $(document).on("submit", "#budget-form", function(e){
            e.preventDefault();
            budget = $("#budget").val();

            
            load_recipes_ajx();
            
        });
    </script>
    <?php
}

?>