<?php 

require_once("../Models/ingredient-model.php");

if (isset($_REQUEST["action"])){
    $action=$_REQUEST["action"];
    switch ($action){
        case "Fetch_Recepies":
            if(isset($_POST['recipe_id'])){
                echo json_encode(Fetch_Ingerdients($_POST['recipe_id']));
            }
            else{
                echo -1;
            }

            break;
        
    }
}

?>