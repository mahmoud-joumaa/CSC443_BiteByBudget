<?php 
require_once("../Common/db-connect.php");


/**
 * This function returns the list of all recipes in the database 
 * 
 * @return array {Recipe_Name: ..., Image: ...}
 */
function Fetch_Recepies(){
    $db = DBConnect();
    $query = "SELECT Recipe_ID, Recipe_Name, Image FROM recipe ORDER BY Recipe_Name ASC";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $recipes;
}



/**
 * This function returns a random list of 5 recipes 
 * 
 * @return array {Recipe_Name: ..., Image}
 */
function Fetch_Slideshow_Recepies(){
    $NUM_OF_RECIPES = 5;
    $db = DBConnect();
    $query = "SELECT Recipe_ID, Recipe_Name, Image FROM recipe ORDER BY Recipe_Name ASC";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $random_keys = array_rand($recipes, $NUM_OF_RECIPES);
    $random_recipes = array();
    foreach ($random_keys as $key) {
        $random_recipes[] = $recipes[$key];
    }

    return $random_recipes;
}



?>