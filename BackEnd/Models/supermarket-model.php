<?php

require_once("../Common/db-connect.php");


function Fetch_SuperMarkets_With_Prices($ing_IDs, $ing_quantity){
    $ingredients = [];
    for($i = 0; $i < sizeof($ing_IDs); $i++){
        $ingredients[$i] = [$ing_IDs[$i], $ing_quantity[$i]];
    }

    $db = DBConnect();

    $placeholders = array_fill(0, count($ing_IDs), '(c.Ingredient_ID = ? AND c.Quantity >= ?)');
    
    $whereClause = implode(' OR ', $placeholders);
    
    $query = "SELECT s.Supermarket_Name, c.Price AS calculated_price, c.Ingredient_ID
    FROM supermarket s
    JOIN sells c ON s.Supermarket_ID = c.Supermarket_ID
    WHERE $whereClause;";

    $statement = $db->prepare($query);

    for ($i = 0; $i < count($ing_IDs); $i++) {
        $statement->bindValue(($i * 2) + 1, $ing_IDs[$i]);
        $statement->bindValue(($i * 2) + 2, $ing_quantity[$i]);
    }

    // Execute the query
    $statement->execute();

    // Fetch the results
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    

    // Create an array to store the calculated prices for each supermarket
    $supermarketPrices = array();
    $supermarketContaining = array();
    $supermarketIngredients = array();

    foreach ($results as $row) {
        $supermarketName = $row['Supermarket_Name'];
        $calculatedPrice = $row['calculated_price'];
        $ingredientID = $row['Ingredient_ID'];

        // Multiply the calculated price by the ingredient quantity
        $ingredientIndex = array_search($ingredientID, array_column($ingredients, 0)); // we will search for the index of the ingredient to find the index of the quantity need. Smart eh :)
        $ingredientQuantity = $ingredients[$ingredientIndex][1];
        $totalPrice = $calculatedPrice * $ingredientQuantity;
        
        $supermarketIngredients[$supermarketName][$ingredientID] = [$calculatedPrice, $ingredientQuantity];

        // Sum up the prices for each supermarket
        if (isset($supermarketPrices[$supermarketName])) {
            $supermarketPrices[$supermarketName] += $totalPrice;
            $supermarketContaining[$supermarketName] +=1;
        } 
        else {
            $supermarketPrices[$supermarketName] = $totalPrice;
            $supermarketContaining[$supermarketName] =1;
        }
    }

    asort($supermarketContaining);
    
    return array(
        'supermarketPrices' => $supermarketPrices,
        'supermarketContaining' => $supermarketContaining,
        'ingredients' => $ingredients,
        'supermarketIngredients' => $supermarketIngredients
    );
}




?>