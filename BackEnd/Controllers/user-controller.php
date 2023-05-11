<?php 

require_once("../Models/user-model.php");

if (isset($_REQUEST["action"])){
    $action=$_REQUEST["action"];
    switch ($action){
        case "Authenticate":
            if(!isset($_POST['username']) || !isset($_POST['password'])) return 1;
            echo Authenticate($_POST["username"], $_POST["password"]);

        break;
        
    }
}


?>