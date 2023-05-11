<?php 


function populate_login_page(){
    ?>

    <h1>Login</h1>
    <div id="user-message">
        Please enter your username and password.
    </div>
    <form name="login-form" id="login-form">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="pass">Password</label>
        <input type="password" name="password" id="pass">
        <div>
            <input type="submit" value="Login">
            <input type="button" value="Reset" onclick="ClearForm()">
        </div>
    </form>

    <script>
        function ClearForm() {
            document.getElementById("username").value = "";
            document.getElementById("pass").value = "";
            const msg = document.getElementById("user-message");
            if (msg.classList.contains("success"))
                msg.classList.remove("success");
            else if (msg.classList.contains("error"))
                msg.classList.remove("error");
            msg.innerText = "Please enter your username and password.";
        }
    </script>

    <script>
        $(document).on("submit", "#login-form", function(e){
            e.preventDefault();
            var username = $("#username").val();
            var password = $("#pass").val();
            $.ajax({
                type: "POST",
                url: "../BackEnd/Controllers/user-controller.php",
                data: {action: "Authenticate", "username":username, "password":password},
                success:function(data){
                    switch(data){
                        case "1":
                            $("#user-message").addClass("success");
                            $("#user-message").text("Login Success!");
                            break;
                        case "2":
                            $("#user-message").addClass("error");
                            $("#user-message").text("Error: Invalid username or password");
                            break;
                        default:
                        $("#Success").text(data);
                    }
                }
            });
        });
    </script>
    <?php
}


?>
