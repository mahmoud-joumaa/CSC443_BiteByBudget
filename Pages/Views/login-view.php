<?php 


function populate_login_page(){
    ?>

<div class="left">
        <br><br>
        <div class="content">
            <div class="title">
                <span>Login</span>
            </div>             
            <div class="paragraph" style="border:0;">
                <form name="signup-form" id="login-form">
                    <p id = "error" style="color:red;"></p>
                    <p id = "Success"style="color:green;"></p>
                    <input type="text" name="username" placeholder="User Name" id="username" class="textfield">
                    <br><br>
                    <input type="password" name="password" placeholder="Password" id="pass" class="textfield">
                    <br><br>
                    <input type="submit" value="Login " class="mButton">
                    <br><br>
                    <input type="button" value="Cancel" class="mButton" onclick="ClearForm()">
                </form>
            </div>
            <br>
            <p style="margin-top: 10px; color:  black;">Not an admin? <a href="" style="color: black;">click here</a></p> 
        </div>
    </div>

    <script>
        function ClearForm() {
            document.getElementById("username").value = "";
            document.getElementById("pass").value = "";
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
                            $("#Sucess").text("Please enter username or password");
                            break;
                        case "2":
                            $("#error").text("Error: Invalid username or password");
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