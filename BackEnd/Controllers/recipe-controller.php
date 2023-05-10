<?php

require_once("../Models/recipe-model.php");

if (isset($_REQUEST["action"])){
    $action=$_REQUEST["action"];
    switch ($action){
        case "Fetch_Recepies":
            echo json_encode(Fetch_Recepies());

        break;
        
        case "Fetch_Slideshow_Recepies";
            echo json_encode(Fetch_Slideshow_Recepies());
        break;
    }
}

?>