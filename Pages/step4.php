<?php
    $dbhost = "127.0.0.1";
    $dbname = "bitebybudget";
    $dbuser = "root";
    $dbpass = "";
    $db = null;

    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        print "Error!:" . $e->getMessage() . "<br/>";
        die();
    }

    $ingredients = [[1, 500], [6, 3], [7, 10],[4,0]];
    $ing_IDs = array();
    $ing_quantity = array();

    foreach ($ingredients as $ingredient) {
        array_push($ing_IDs, $ingredient[0]);
        array_push($ing_quantity, $ingredient[1]);
    }

    // Create a placeholder the same size as one of the arrays (in this case as $ing_ID)
    $placeholders = array_fill(0, count($ing_IDs), '(c.Ingredient_ID = ? AND c.Quantity >= ?)');

    // Join the elements of the array into a string using OR
    // (c.Ingredient_ID = ? AND c.Quantity >= ?) OR (c.Ingredient_ID = ? AND c.Quantity >= ?) OR ...
    $whereClause = implode(' OR ', $placeholders);

    // SQL query
    $query = "SELECT s.Supermarket_Name, c.Price AS calculated_price, c.Ingredient_ID
    FROM supermarket s
    JOIN sells c ON s.Supermarket_ID = c.Supermarket_ID
    WHERE $whereClause;";

    // Prepare the statement
    $statement = $db->prepare($query);

    // Bind the values from the arrays to the placeholders
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
    foreach ($results as $row) {
        $supermarketName = $row['Supermarket_Name'];
        $calculatedPrice = $row['calculated_price'];
        $ingredientID = $row['Ingredient_ID'];

        // Multiply the calculated price by the ingredient quantity
        $ingredientIndex = array_search($ingredientID, array_column($ingredients, 0)); // we will search for the index of the ingredient to find the index of the quantity need. Smart eh :)
        $ingredientQuantity = $ingredients[$ingredientIndex][1];
        $totalPrice = $calculatedPrice * $ingredientQuantity;

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

    // sort the dictionary 
    asort($supermarketPrices);

    // Display the supermarket name and the total price for each supermarket
    foreach ($supermarketPrices as $supermarketName => $totalPrice) {
        if ($supermarketContaining[$supermarketName]== sizeof($ingredients)){
            echo "Supermarket Name: $supermarketName, Total Price: $totalPrice <br>";
        }
        
    }

    print_r($supermarketPrices);
?>
