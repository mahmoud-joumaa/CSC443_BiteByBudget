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
    print "Error!:" . $e->getMessage() . "<br/>";
    die();
}

$ingredientId = $_POST["ingredientId"];
$quantity = $_POST["quantity"];
$supermarketId = $_POST["supermarketId"];

$query = "UPDATE sells 
          SET `Quantity` = :quantity 
          WHERE Ingredient_ID = :ingredientId
          AND Supermarket_ID = :supermarketId";
$stmt = $db->prepare($query);
$stmt->bindParam(":quantity", $quantity, PDO::PARAM_INT);
$stmt->bindParam(":ingredientId", $ingredientId, PDO::PARAM_INT);
$stmt->bindParam(":supermarketId", $supermarketId, PDO::PARAM_INT);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo $quantity;
} else {
    echo -1;
}
?>
