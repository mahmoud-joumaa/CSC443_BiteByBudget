<?php 



function populate_Recipes($recipes){
    $recipes = json_decode($recipes);
    for($i = 0; $i < sizeof($recipes); $i++){
        $image = $recipes[$i]->Image;
        $recipe_name = $recipes[$i]->Recipe_Name;
        $recipe_id = $recipes[$i] ->Recipe_ID;
        ?>

        <div class="recipe" recipe_id = "<?php echo $recipe_id?>"> 
            <image class="recipe-img" src="<?php echo $image?>">
            <span> <?php echo $recipe_name ?></span>
        </div>

    <?php
    }
    
}

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

function populate_Ingredients($ingredients){
    $ingredients = json_decode($ingredients);
    for($i = 0; $i < sizeof($ingredients); $i++){
        ?>
        <div class='item-wrapper'>
            <img class='item-img' src= <?php echo $ingredients[$i]->Image ?> >
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
}




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

