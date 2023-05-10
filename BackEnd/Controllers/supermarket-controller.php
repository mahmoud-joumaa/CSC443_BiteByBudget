<?php 

require_once("../Models/supermarket-model.php");

if (isset($_REQUEST["action"])){
    $action=$_REQUEST["action"];
    switch ($action){
        case "Fetch_SuperMarkets_With_Prices":
            if(!isset($_POST["ing_IDs"]) || !isset($_POST["ing_quantity"])) return "ERROR LOADING MARKETS";
            $ing_IDs = $_POST["ing_IDs"];
            $ing_quantity = $_POST["ing_quantity"];
            echo json_encode(Fetch_SuperMarkets_With_Prices($ing_IDs, $ing_quantity));

        break;
        
    }
}

?>