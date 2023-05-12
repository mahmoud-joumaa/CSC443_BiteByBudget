<?php
// $dbhost = "127.0.0.1";
// $dbname = "bitebybudget";
// $dbuser = "root";
// $dbpass = "";
// $db = null;
$dbhost="localhost";
$dbname="id20739541_bitebybudget";
$dbuser="id20739541_user";
$dbpass="User.123";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

if (isset($_POST['recipeName']) && isset($_POST['ingredientName']) && isset($_POST['quantity'])) {
    $recipeName = $_POST['recipeName'];
    $ingredientName = $_POST['ingredientName'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];

    try {
        $db->beginTransaction();

        // Check if the recipe already exists in the recipe table
        $recipeId = null;
        $stmt = $db->prepare("SELECT 'Recipe_ID' FROM recipe WHERE 'Recipe_Name' = ?");
        $stmt->execute([$recipeName]);

        if ($stmt->rowCount() > 0) {
            // Recipe already exists, retrieve its ID
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $recipeId = $row['Recipe_ID'];
        } else {
            // Recipe does not exist, insert it and retrieve the generated ID
            $stmt = $db->prepare("INSERT INTO recipe ('Recipe_Name') VALUES (?)");
            $stmt->execute([$recipeName]);
            $recipeId = $db->lastInsertId();
        }

        // Check if the ingredient already exists in the 'ingredient' table
        $ingredientId = null;
        $stmt = $db->prepare("SELECT 'Ingredient_ID' FROM ingredient WHERE 'Ingredient_Name' = ?");
        $stmt->execute([$ingredientName]);

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $ingredientId = $row['Ingredient_ID'];
        } else {
            // Ingredient does not exist, insert it and retrieve the generated ID
            $stmt = $db->prepare("INSERT INTO ingredient ('Ingredient_Name', 'Type') VALUES (?, ?)");
            $stmt->execute([$ingredientName, '']); 

            $ingredientId = $db->lastInsertId();
        }

        // Insert the recipe and ingredient information into the 'consistsof' table
        $stmt = $db->prepare("INSERT INTO consistsof ('Recipe_ID', 'Ingredient_ID', 'Quantity', 'Unit') VALUES (?, ?, ?, ?)");
        $stmt->execute([$recipeId, $ingredientId, $quantity, $unit]); // Modify 'unit' accordingly

        if ($stmt->rowCount() > 0) {
            // Commit the transaction if all queries executed successfully
            $db->commit();
            echo "1"; // Success
        } else {
            echo "-1"; 
            $db->rollback(); // Rollback the transaction
        }
    } catch (PDOException $e) {
        echo "Error adding recipe ingredient: " . $e->getMessage();
    }
} else {
    echo "Error adding recipe: Some fields are missing.";
}
?>
?>

