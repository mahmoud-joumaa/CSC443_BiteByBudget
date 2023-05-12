<?php 
session_start();
unset($_SESSION['username']);
session_destroy();
require_once("Views/admin-view.php");

?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link href="../Images/Icons/favicon-enhanced-no-bg.ico" rel="icon" type="image/ico">
    <script src="../Libraries/jquery.min.js"> </script>
</head>
<body>

    <div id="main"> 
        <?php populate_add_user()?>
        <?php populate_update_user();?>
    </div>
    
</body>
</html>
