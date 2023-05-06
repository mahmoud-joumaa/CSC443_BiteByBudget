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



?>
