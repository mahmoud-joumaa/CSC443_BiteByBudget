<?php
// $dbhost = "127.0.0.1";
// $dbname = "bitebybudget";
// $dbuser = "root";
// $dbpass = "";
// $db = null;
$dbhost="127.0.0.1";
$dbname="bitebybudget";
$dbuser="root";
$dbpass="";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!:" . $e->getMessage() . "<br/>";
    die();
}

$ingredientId = $_POST["ingredientId"];
$price = $_POST["price"];
$supermarketId = $_POST["supermarketId"];

$query = "UPDATE sells 
          SET `Price` = :price 
          WHERE Ingredient_ID = :ingredientId
          AND Supermarket_ID = :supermarketId";
$stmt = $db->prepare($query);
$stmt->bindParam(":price", $price, PDO::PARAM_INT);
$stmt->bindParam(":ingredientId", $ingredientId, PDO::PARAM_INT);
$stmt->bindParam(":supermarketId", $supermarketId, PDO::PARAM_INT);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo $price;
} else {
    echo -1;
}
?>
