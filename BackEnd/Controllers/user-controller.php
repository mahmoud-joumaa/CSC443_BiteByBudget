<?php 

require_once("../Models/user-model.php");

if (isset($_REQUEST["action"])){
    $action=$_REQUEST["action"];
    switch ($action){
        case "Authenticate":
            if(!isset($_POST['username']) || !isset($_POST['password'])) return 1;
            echo Authenticate($_POST["username"], $_POST["password"]);

            break;

        case "update_user":
            if (isset($_POST['OLD_USERNAME'])) {
                echo update_user( $_POST['OLD_USERNAME'], $_POST['NEW_USERNAME'],$_POST['IsAdmin'], $_POST['Pass']); 
            }
            break;

        case "add_user":
            if (isset($_POST['USERNAME']) && isset($_POST['Pass']) && isset($_POST['IsAdmin'])) {

                echo add_user($_POST['USERNAME'], $_POST['Pass'], $_POST['IsAdmin']);

            }
            else{
                echo "failed";
            }
            break;

        
    }
}


?>