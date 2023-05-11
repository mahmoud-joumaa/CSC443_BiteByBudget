<?php 


function populate_update_user(){
    ?>
    <h1>User Update Form</h1>
    <p id="msg-update-user"> </p>
    <form id="user-update-form" method="POST">
        <label for="old_username">Old Username:</label>
        <input type="text" id="old_username" name="OLD_USERNAME-update" required><br><br>

        <label for="new_username">New Username:</label>
        <input type="text" id="new_username" name="NEW_USERNAME-update"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="Pass-update"><br><br>

        <label for="IsAdmin">Is Admin:</label>
        <select id="is_admin_update" name="IsAdmin-update">
            <option value="0">Supermarket</option>
            <option value="1">Admin</option>
            <option value="-1">InActive</option>
        </select><br><br>

        <input type="submit" value="Update User">
    </form>
    <script>
        $(document).on("submit", "#user-update-form", function(e){
            e.preventDefault();
            let old_username = $(this).find('input[name="OLD_USERNAME-update"]');
            let new_username = $(this).find('input[name="NEW_USERNAME-update"]');
            let isAdmin = $(this).find('select[name="IsAdmin-update"]');
            let Pass = $(this).find('input[name="Pass-update"]');
            $.ajax({
                type: "POST",
                url: "../BackEnd/Controllers/user-controller.php",
                data: {action: "update_user", "OLD_USERNAME": old_username.val(), "NEW_USERNAME": new_username.val(), "IsAdmin": isAdmin.val(), "Pass": Pass.val()},
                success:function(data){
                    $("#msg-update-user").text(data);
                    old_username.val("");
                    new_username.val("");
                    isAdmin.val("");
                    Pass.val("");
                }
            });
        });

    </script>

    <?php
}


function populate_add_user(){
    ?>
    <h2>Add User</h2>
    <p id="msg-add-user"> </p>
	<form  id="add_user_form">
		<label for="USERNAME-add">Username:</label>
		<input type="text" name="USERNAME-add" required><br>

		<label for="Pass-add">Password:</label>
		<input type="password" name="Pass-add" required><br>

		<select id="is_admin" name="IsAdmin-add">
            <option value="0">Supermarket</option>
            <option value="1">Admin</option>
            <option value="-1">InActive</option>
        </select><br><br>

		<input type="submit" value="Add User">
	</form>
    <script>
        $(document).on("submit", "#add_user_form", function(e){
            e.preventDefault();
            let username = $(this).find('input[name="USERNAME-add"]');
            let password = $(this).find('input[name="Pass-add"]');
            let isAdmin = $(this).find('select[name="IsAdmin-add"]');
            
            $.ajax({
                type: "POST",
                url: "../BackEnd/Controllers/user-controller.php",
                data: {action: "add_user", "USERNAME":username.val(), "Pass":password.val(), "IsAdmin":isAdmin.val()},
                success:function(data){
                    $("#msg-add-user").text(data);
                    username.val("");
                    password.val("");
                    isAdmin.val("");
                }
            });
        });
    </script>
    <?php

}

?>