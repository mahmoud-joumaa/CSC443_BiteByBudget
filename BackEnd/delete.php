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

$ingredientId = $_POST["ingredientId"];

function DeleteUser($id){
    $query="DELETE FROM sells where Ingredient_ID = :ingredientId";
    $stmt=$db->prepare($query);
    $stmt->bindParam(":ingredientId", $ingredientId, PDO::PARAM_INT);
    $stmt->execute();
    if ($stmt->rowCount()>0){
        return 1;
    }else{
        return 0;
    }
}

echo (DeleteUser($id));
?>