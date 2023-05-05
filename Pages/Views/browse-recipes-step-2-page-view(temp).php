<?php 



function populate_Recipes($recipes){
    $recipes = json_decode($recipes);
    for($i = 0; $i < sizeof($recipes); $i++){
        $image = $recipes[$i]->Image;
        $recipe_name = $recipes[$i]->Recipe_Name;
        ?>

        <div class="recipe-img"> 
            <image src="<?php echo $image?>">
            <span> <?php echo $recipe_name ?></span>
        </div>

    <?php
    }

    
    
    
}


if(isset($_POST["function-name"])){
    $name = $_POST["function-name"];
    switch($name){
        case "populate_Recipes":
            if(isset($_POST["recipes"])){
                echo populate_Recipes($_POST["recipes"]);
            }
            break;

    }
}


?>

