<?php
session_start();
$dbhost = "127.0.0.1";
$dbname = "bitebybudget";
$dbuser = "root";
$dbpass = "";
$db = null;

try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!:" . $e->getMessage() . "<br/>";
    die();
}
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
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
        $error = "Invalid username or password";
       // echo $error;
    }
}
else {
    echo "Please enter a username, password";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <div class="left">
        <div class="content">
            <div class="title">
                <span>Login</span>
            </div>             
            <div class="paragraph" style="border:0;">
                <form action="login.php" method="POST" name="signup-form" id="signup-form">
                    <?php if(isset($error)) { ?>
                        <p style="color:red;"><?php echo $error; ?></p>
                    <?php } ?>
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
</body>
</html>
