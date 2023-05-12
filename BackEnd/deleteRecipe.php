<?php
    // $dbhost = "127.0.0.1";
    // $dbname = "bitebybudget";
    // $dbuser = "root";
    // $dbpass = "";

    $dbhost="127.0.0.1";
$dbname="bitebybudget";
$dbuser="root";
$dbpass="";
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $ingredientId = $_POST["ingredientId"];
        $recipeId = $_POST["recipeId"];

        $query = "DELETE FROM consistsof WHERE Recipe_ID = :recipeId AND Ingredient_ID = :ingredientId";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':recipeId', $recipeId);
        $stmt->bindParam(':ingredientId', $ingredientId);
        $stmt->execute();

        echo $query;

        // Optionally, you can check if the deletion was successful and redirect back to the original page
        if ($stmt->rowCount()>0){
            return "1";
        }else{
            return "-1";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
?>
