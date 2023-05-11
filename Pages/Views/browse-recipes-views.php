<?php 

/**
 * Handles the logic of loading the page step by step
 */
function loadScripts(){
    require_once "step-1-script.php";
    require_once "step-2-script.php";
    require_once "step-3-script.php";
    require_once "step-4-script.php";
    require_once "step-4-half-script.php";
    require_once "step-5-script.php";

    ?>
    <script>
        let budget = 0;
        let recipe_id = -1;
        let ingredients = null;
        let ingredient_ids = [];
        let ingredient_quantity = [];
        let supermarket = null;
        let chosen_price = -1;
        let ingredients_of_supermarket = [];
    </script>    
    <?php

    if(isset($_GET["recipe_id"])){
        ?>
        <script> recipe_id = parseInt(<?php echo $_GET["recipe_id"]?>) </script>
        <?php
        
    }

    load_step_1_scripts();
    load_step_2_scripts();
    load_step_3_scripts();
    load_step_4_half_scripts();
    load_step_4_scripts();
    load_step_5_scripts();

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
                <input type="text" name="budget" id="budget" placeholder="e.g: 100$" class="textfield" >
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
    echo "<br><br>";
    echo "<label for='search'> Search Bar </label>";
    echo "<input name='search' id='search-bar' value=''> </input>";
    
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
                <button class='item-sell-step-3'>-</button>
                <input class='item-input-step-3' type='number' pattern='\d*' value= <?php echo $ingredients[$i]->Quantity ?> >
                <button class='item-buy-step-3'>+</button>
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

/**
 * 
 * Loads the budget insufficient page
 */
function populate_budget_insuficient_page($budget, $price){
    $diff = floatval($price) - floatval($budget);
   ?>
    <div>
        <span> Unfortunately, your budget is not enough for this recipe. <br>
               Your buget was <?php echo $budget ?>$, the price is <?php echo $price ?>$ <br>
                You are <?php echo $diff ?> $ short. <br>
                Do you wish to continue or go back to step-1?
        </span>
        <button id="continue-step-4-half"> CONTINUE </button>
        <button id="return-step-4-half"> RETURN </button>
    </div>
   <?php
}

/**
 * Loads step-4 or the SuperMarkets page
 */
function populate_Markets($markets){
    $markets = json_decode($markets, true);
    $supermarketPrices = $markets["supermarketPrices"];
    $supermarketContaining = $markets["supermarketContaining"];
    $ingredients = $markets["ingredients"];
    $ings_found = array();

    // Display the supermarket name and the total price for each supermarket
    foreach ($supermarketPrices as $supermarketName => $totalPrice) {
        $totalIngCount = sizeof($ingredients);
       $ings_found[$supermarketName] = $totalIngCount - ($totalIngCount - $supermarketContaining[$supermarketName]);
        echo "Supermarket Name: $supermarketName, Total Price: $totalPrice, Ingredients Found: $ings_found[$supermarketName]/$totalIngCount <br>";
        
    }
    
    $availableSupermarkets = array();
    $availableSupermarketsPrices = array();

    foreach ($supermarketContaining as $supermarketName => $numIngredients) {
        $availableSupermarkets[] = $supermarketName;
        $availableSupermarketsPrices[] = $supermarketPrices[$supermarketName];
    }

    

    // Check if any supermarkets are available
    if (count($availableSupermarkets) == 0) {
        echo "No supermarkets found that contain all ingredients.";
    } else {
        // Display the available supermarkets in a dropdown menu
        echo "<form method='post' action=''>";
        echo "<label for='supermarket-select'>Choose a supermarket:</label>";
        echo "<select name='supermarket' id='supermarket-select'>";
        for ($i=0; $i<sizeof($availableSupermarkets); $i++) {
            echo "<option price='$availableSupermarketsPrices[$i] 'value='$availableSupermarkets[$i]'>$availableSupermarkets[$i]</option>";
        }
        echo "</select>";
        echo "<input class='select-supermarket-button' type='button' value='Select'>";
        echo "</form>";

        // If the user has selected a supermarket, display its details
        if (isset($_POST['supermarket'])) {
            $selectedSupermarket = $_POST['supermarket'];
            echo "Selected supermarket: $selectedSupermarket<br>";

            // Display the details of the selected supermarket
            foreach ($supermarketPrices as $supermarketName => $totalPrice) {
                if ($supermarketName == $selectedSupermarket) {
                    echo "Supermarket Name: $supermarketName, Total Price: $totalPrice <br>";
                }
            }
        }
    }
    ?>
    <button id="back-button-step-4"> Back </button>
    <?php

}

function populate_step_5_page($totalPrice, $supermarket, $ingredients, $ingredients_of_supermarket){
    $ingredients = json_decode($ingredients);
    $ingredients_of_supermarket = json_decode($ingredients_of_supermarket);
    echo "<h1> SuperMarket: $supermarket </h1>";
    echo "<span>TOTAL PRICE: $totalPrice</span>";

    for($i = 0; $i < sizeof($ingredients); $i++){
        $is_in_supermarket = false;
        if(isset($ingredients_of_supermarket->{$supermarket}->{$ingredients[$i]->Ingredient_ID}[0]) && isset($ingredients_of_supermarket->{$supermarket}->{$ingredients[$i]->Ingredient_ID}[1])){
            $ing_price = $ingredients_of_supermarket->{$supermarket}->{$ingredients[$i]->Ingredient_ID}[0];
            $ing_quantity = $ingredients_of_supermarket->{$supermarket}->{$ingredients[$i]->Ingredient_ID}[1];
            $price = $ing_price * $ing_quantity;
            $is_in_supermarket = true;
        }

        ?>
        <div class='item-wrapper'>
            <img width=100 class='item-img' src= <?php echo "../" . $ingredients[$i]->Image ?> >
            <div class='item-name'> <?php echo $ingredients[$i]->Ingredient_Name ?></div>
            <div class='item-cost'>
                <button class='item-sell-step-5'>-</button>
                <?php
                if($is_in_supermarket){
                    echo "<input price='$ing_price' class='item-input-step-5' type='number' pattern='\d*' value=" . $ingredients[$i]->Quantity ." >";
                }
                else{
                    echo "<input price='N-A' class='item-input-step-5-NA' type='text' pattern='\d*' value='Item not available'>";
                }
                ?>
                <button class='item-buy-step-5'>+</button>
                <?php  ?>
                <?php 
                if($is_in_supermarket){
                    echo $ingredients[$i]->Unit;
                    echo "<span> $price </span>" ;
                }
                else{
                    echo "<span> </span>"; 
                }
                ?>
            </div>
            </div>
        <?php
    } 

    ?>
    <button id="back-button-step-5"> Back </button>
    <?php
}


// Controls the page loading according to the name of the function called
if(isset($_POST["function_name"])){
    $name = $_POST["function_name"];
    switch($name){
        case "populate_budget_page":
                
            echo populate_budget_page();
                
            break;
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
    
        case "populate_market_page":
            if(isset($_POST["markets"])){

                echo populate_Markets($_POST["markets"]);
            }
            break;

        case "populate_budget_insuficient_page":
            if(isset($_POST["budget"]) && isset($_POST["price"])){

                echo populate_budget_insuficient_page($_POST["budget"], $_POST["price"]);
            }
            break;

        case "populate_step_5_page":
            if(isset($_POST["totalPrice"]) && isset($_POST["ingredients"]) && isset($_POST["supermarket"]) && isset($_POST["ingredients_of_supermarket"])){
                echo populate_step_5_page($_POST["totalPrice"], $_POST["supermarket"], $_POST["ingredients"], $_POST["ingredients_of_supermarket"]);
            }
            
            break;

    }
}


?>
