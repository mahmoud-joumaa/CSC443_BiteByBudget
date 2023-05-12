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
            <input id="submit-button"type="submit" value="Login">
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
            if (msg.classList.contains("error"))
                msg.classList.remove("error");
            msg.innerText = "Please enter your username and password.";
        }
    </script>

    <script>
        $(document).on("click", "#submit-button", function(e){
            e.preventDefault();
            
            var username = $(this).parent().prev().prev().prev().val();
            var password = $(this).parent().prev().val();
            console.log(username);
            console.log(password);
            $.ajax({
                type: "POST",
                url: "../BackEnd/Controllers/user-controller.php",
                data: {action: "Authenticate", "username":username, "password":password},
                success:function(data){
                    const msg = $("#user-message");
                    switch(data){
                        case "1":
                            msg.addClass("error");
                            msg.text("Error: Invalid username or password");
                            break;
                        case "3":
                            window.location = "Supermarket.php";
                            break;
                        case "2":
                            window.location="admin.php";
                            break
                        case "4":
                            msg.addClass("error");
                            msg.text("Error: This user is not active");
                            
                    }
                }
            });
        });
    </script>
    <?php
}


?>
