<?php

require_once("../Common/db-connect.php");

function Authenticate($username, $password){

    $db = DBConnect();
    // Attempt to login with provided username and password
    $stmt = $db->prepare("SELECT IsAdmin FROM users WHERE USERNAME = ? AND Pass = ?");
    $stmt->execute([$username, $password]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //we will fetch the IsAdmin value from the database and check if they are an admin or not
    //1 will be representig they are an admin which will redirect them to their specific page to edit recipes and users
    //0 will be representing they are a supermarket which will redirect them to their specific page to eidt quantity and prices
    if($row) {
        $_SESSION['username'] = $username;
        // Redirect to appropriate page based on IsAdmin flag in the database
        if($row['IsAdmin'] == 1){
            //header('Location: welcomeadmin.html');
            echo "Success, welcome admin";
        } else {
            //header('Location: welcomeuser.html');
            echo "Success, welcome ".$username;
        }
    } else {
        $error = 2;
        echo $error;
    }

}
?>