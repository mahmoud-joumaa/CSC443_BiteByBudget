<?php 


require_once("../Common/db-connect.php");


function Fetch_Ingerdients($recipe_id){
    $db = DBConnect();
    $sql = "SELECT i.Image, c.Quantity, c.Unit, i.Ingredient_Name
            FROM consistsof c
            INNER JOIN ingredient i ON c.Ingredient_ID = i.Ingredient_ID
            WHERE c.Recipe_ID = $recipe_id";
    $result = $db->query($sql)->fetchAll();
    return $result;
}

function Fetch_Ingerdient_Offers(){
    $NUM_OF_INGREDIENTS = 3;
    $db = DBConnect();
    $sql = "SELECT s.Ingredient_ID, Ingredient_Name,  Image, Status FROM sells s, ingredient i WHERE Status != '' AND s.Ingredient_ID=i.Ingredient_ID";
    $ingredients = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    $random_keys = array_rand($ingredients, $NUM_OF_INGREDIENTS);
    $random_ingrdients = array();
    foreach ($random_keys as $key) {
        $random_ingrdients[] = $ingredients[$key];
    }
    
    return $random_ingrdients;
}



?>
