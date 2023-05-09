<?php
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

// Fetch data from the "sells" table
$query = "SELECT s.supermarket_name, i.ingredient_name, se.Quantity
          FROM sells AS se
          INNER JOIN supermarket AS s ON se.Supermarket_ID = s.Supermarket_ID
          INNER JOIN ingredient AS i ON se.Ingredient_ID = i.Ingredient_ID;";
$stmt = $db->query($query);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<html data-wf-domain="table-template-81d32b.webflow.io" data-wf-page="5ec7e046dab9421e1dc39d52" data-wf-site="5ec7e046dab94257e6c39d51">
<head>
  <meta charset="utf-8">
  <title>Admin Page</title>
  <meta name="description" content="Table design. Made in Webflow, by Mirela Prifti.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link href="https://assets.website-files.com/5ec7e046dab94257e6c39d51/css/table-template-81d32b.webflow.183baf243.css" rel="stylesheet" type="text/css">
  <link href="../Styles/buttons.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">
    !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
  </script>
  <link rel="shortcut icon" type="image/x-icon" href="https://assets.website-files.com/img/favicon.ico">
  <link rel="apple-touch-icon" href="https://assets.website-files.com/img/webclip.png">
</head>
<body>
    <div class="wrapper-section">
        <div class="div-1">
            <h1 class="heading-3">Ingredients in Supermarkets</h1>
            <div class="div-block-414">
                <form action="/search" class="search saved-shortlists w-form">
                    <input type="search" class="search-input w-input" maxlength="256" name="query" placeholder="Search..." id="search" required=""/>
                    <input type="submit" value="Search" class="search-button _2 w-button"/>
                    <img src="https://assets.website-files.com/5ec7e046dab94257e6c39d51/5ec7e05fdab942c5dbc39db1_search.svg" alt="" class="search-icon"/>
                </form>
            </div>
        </div>
        
        <div class="table-wrapper">
            <div class="table-row head">
                <div class="div-block-406">
                </div>
                <div class="table-box">
                    <div class="table-heading">Supermarket</div>
                </div>
                <div class="table-box">
                    <div class="table-heading">Ingredients Name</div>
                </div>
                <div class="table-box _11">
                    <div class="table-heading">Last Update</div>
                </div>
                <div class="table-box">
                    <div class="table-heading">Edit Amount</div>
                </div>
                <div class="table-box action">
                    <div class="table-heading">Action</div>
                </div>
            </div>
            <div class="table-container">
                <div class="table-data-wrapper">
                    <div class="scroll-container">
                        <div class="scroll-table-content">
                            <div class="table-row head hide">
                                <div class="div-block-406">
                                </div>
                                <div class="table-box">
                                    <div class="table-heading">Supermarket</div>
                                </div>
                                <div class="table-box">
                                    <div class="table-heading">Ingredients Name</div>
                                </div>
                                <div class="table-box _11">
                                    <div class="table-heading">Last Update</div>
                                </div>
                                <div class="table-box">
                                    <div class="table-heading">Edit Amount</div>
                                </div>
                                <div class="table-box action">
                                    <div class="table-heading">Action</div>
                                </div>
                            </div>
                            <?php
                                $count = 0;
                                foreach ($rows as $row) {
                                    $count++;
                                    $supermarket = $row['supermarket_name'];
                                    $ingredients = $row['ingredient_name'];
                                    $ingredientId = "ingredient_" . $count; // Generate a unique id for each ingredient row
                            ?>
                            <div class="table-row">
                                <div class="div-block-406 _2">
                                    <div class="table-row-nr"><?php echo $count; ?></div>
                                </div>
                                <div class="table-box _2">
                                    <div class="table-data name"><?php echo $supermarket; ?></div>
                                </div>
                                <div class="table-box _2">
                                    <a href="#" class="table-data link"><?php echo $ingredients; ?></a>
                                </div>
                                <div class="table-box _2 small">
                                    <div class="table-data"><?php echo $date = date("M d Y"); ?></div>
                                </div>
                                <div class="table-box _2">
                                    <div class="table-data" style="box-sizing = border-box">
                                    <form style="box-sizing: border-box;">
                                        <div class="value-button" id="decrease" onclick="decreaseValue('<?php echo $ingredientId; ?>')" value="Decrease Value">-</div>
                                        <input type="number" class="number" id="<?php echo $ingredientId; ?>" value="<?php echo $row['Quantity']; ?>" />
                                        <div class="value-button" id="increase" onclick="increaseValue('<?php echo $ingredientId; ?>')" value="Increase Value">+</div>
                                    </form>
                                    </div>
                                </div>
                                <div class="table-box _2 action">
                                    <a data-w-id="ae27a065-dfeb-a9cb-56ca-8b63a99081be" href="#" class="link-block-10 w-inline-block">
                                    <img src="https://assets.website-files.com/5ec7e046dab94257e6c39d51/5ec7e05fdab942a262c39db7_close%20(2).svg" alt="" class="table-action-icon-2 x"/>
                                    </a>
                                </div>
                            </div>
                            <script>
                            function increaseValue() {
                            var value = parseInt(document.getElementById('count').value, 10);
                            value = isNaN(value) ? 0 : value;
                            value++;
                            document.getElementById('count').value = value;
                            }

                            function decreaseValue() {
                            var value = parseInt(document.getElementById('count').value, 10);
                            value = isNaN(value) ? 0 : value;
                            value < 1 ? value = 1 : '';
                            value--;
                            document.getElementById('count').value = value;
                            }
                            </script>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5ec7e046dab94257e6c39d51" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://assets.website-files.com/5ec7e046dab94257e6c39d51/js/webflow.b493206f0.js" type="text/javascript"></script>
</body>
</html>
<script>
function increaseValue(ingredientId) {
    var value = parseInt(document.getElementById(ingredientId).value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById(ingredientId).value = value;
}

function decreaseValue(ingredientId) {
    var value = parseInt(document.getElementById(ingredientId).value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById(ingredientId).value = value;
}
</script>
