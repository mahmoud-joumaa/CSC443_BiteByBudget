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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ingredientName = $_POST["ingredientName"];
    $supermarketName = $_POST["supermarketName"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    // Get the Supermarket_ID based on the Supermarket_Name
    $supermarketQuery = "SELECT Supermarket_ID FROM supermarket WHERE supermarket_name = :supermarketName";
    $stmt = $db->prepare($supermarketQuery);
    $stmt->bindParam(":supermarketName", $supermarketName, PDO::PARAM_STR);
    $stmt->execute();
    $supermarketResult = $stmt->fetch(PDO::FETCH_ASSOC);
    $supermarketId = $supermarketResult['Supermarket_ID'];

    // Check if the ingredient already exists in the ingredient table
    $ingredientId = null;
    $stmt = $db->prepare("SELECT Ingredient_ID FROM ingredient WHERE Ingredient_Name = ?");
    $stmt->execute([$ingredientName]);
    if ($stmt->rowCount() > 0) {
        // Ingredient already exists, retrieve its ID
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $ingredientId = $row['Ingredient_ID'];
    } else {
        // Ingredient does not exist, insert it and retrieve the generated ID
        $stmt = $db->prepare("INSERT INTO ingredient (Ingredient_Name) VALUES (?)");
        $stmt->execute([$ingredientName]);
        $ingredientId = $db->lastInsertId();
    }

    // Insert the ingredient into the sells table
    $insertQuery = "INSERT INTO sells (Ingredient_ID, Supermarket_ID, Quantity, Price)
                    VALUES (:ingredientId, :supermarketId, :quantity, :price)";
    $insertStmt = $db->prepare($insertQuery);
    $insertStmt->bindParam(":ingredientId", $ingredientId, PDO::PARAM_INT);
    $insertStmt->bindParam(":supermarketId", $supermarketId, PDO::PARAM_INT);
    $insertStmt->bindParam(":quantity", $quantity, PDO::PARAM_INT);
    $insertStmt->bindParam(":price", $price, PDO::PARAM_INT);
    $insertStmt->execute();

    echo "Ingredient added successfully!";
} else {
    echo "Invalid request!";
}
?>
