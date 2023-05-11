<?php 

require_once("Views/admin-view.php");

?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <script src="../Libraries/jquery.min.js"> </script>
</head>
<body>

    <div id="main"> 
        <?php populate_add_user()?>
        <?php populate_update_user();?>
    </div>
    
</body>
</html>
