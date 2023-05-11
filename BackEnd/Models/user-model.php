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
            $_SESSION['IsSupermarket'] = 1;
            echo 2;
        } else if($row['IsAdmin'] == 0){
            //header('Location: welcomeuser.html');
            $_SESSION['IsSupermarket'] = 0;
            echo 3;
        }
        else{
            echo 4;
        }
    } else {
        $error = 1;
        echo $error;
    }

}

function update_user($OLD_USERNAME, $NEW_USERNAME, $IsAdmin, $Pass){
    $db = DBConnect();
    

    // Prepare the SQL query with placeholders
    $sql = "UPDATE users SET ";
    $params = [];

    // Check if the new username is provided
    if (!empty($NEW_USERNAME)) {
        $sql .= "USERNAME = ?, ";
        $params[] = $NEW_USERNAME;
    }

    // Check if the new password is provided
    if (!empty($Pass)) {
        $sql .= "Pass = ?, ";
        $params[] = $Pass;
    }

    // Check if the isAdmin status is provided
    if (!empty($IsAdmin)) {
        $sql .= "IsAdmin = ?, ";
        $params[] = $IsAdmin;
    }

    // Trim the trailing comma and space from the SQL query
    $sql = rtrim($sql, ", ");

    // Add the WHERE clause to update the specific user
    $sql .= " WHERE USERNAME = ?";
    $params[] = $OLD_USERNAME;
    if (!empty($params)) {
        try {
            $stmt = $db->prepare($sql);
            $stmt->execute($params);

            if ($stmt->rowCount() > 0) {
                echo "User updated successfully.";
            } else {
                echo "Error updating user details.";
            }
        } catch (PDOException $e) {
            echo "Error updating user: " . $e->getMessage();
        }
    } else {
        echo "Error updating user: No fields to update.";
    }
}

function add_user($USERNAME, $Pass, $IsAdmin){
    $db = DBConnect();

	if (!empty($USERNAME)) {
		try {
			$stmt = $db->prepare("INSERT INTO users (`USERNAME`, `Pass`, `IsAdmin`) VALUES (?, ?, ?)");
			$stmt->execute([$USERNAME, $Pass, $IsAdmin]);
			
			if ($stmt->rowCount() > 0) {
				echo "User added successfully.";
			} else {
				echo "Error adding user.";
			}
		} catch (PDOException $e) {
			echo "Error adding user: " . $e->getMessage();
		}
	} else {
		echo "Error adding user: Username field cannot be empty.";
	}
}
?>