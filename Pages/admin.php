<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// Get the Recipe_ID from the URL parameter
// if (isset($_GET['Supermarket_Name'])) {
//     $Supermarket_Name = $_GET['Supermarket_Name'];
$Admin_Name = "Admin"; 

// Fetch data from the "sells" table
$query = "SELECT r.Recipe_Name, i.ingredient_name, i.Ingredient_ID, r.Recipe_ID, c.Quantity
          FROM consistsof AS c
          INNER JOIN recipe AS r ON r.Recipe_ID= c.Recipe_ID
          INNER JOIN ingredient AS i ON i.Ingredient_ID = c.Ingredient_ID";

$stmt = $db->prepare($query);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin page</title>
  <meta name="description" content="Table design. Made in Webflow, by Mirela Prifti.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link href="https://assets.website-files.com/5ec7e046dab94257e6c39d51/css/table-template-81d32b.webflow.183baf243.css" rel="stylesheet" type="text/css">
  <link href="../Styles/buttons.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">
    !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
  </script>
  <link rel="apple-touch-icon" href="https://assets.website-files.com/img/webclip.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper-section">
        <div class="div-1">
            <h1 class="heading-3">Editing the Recipes</h1>
            <div class="div-block-414">
                <form action="/search" class="search saved-shortlists w-form">
                    <input type="search" class="search-input w-input" maxlength="256" name="query" placeholder="Search..." id="search" onkeyup="myFunction()" required=""/>
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
                    <div class="table-heading">Recipe Name</div>
                </div>
                <div class="table-box">
                    <div class="table-heading">Ingredient</div>
                </div>
                <div class="table-box">
                    <div class="table-heading">Edit Quantity</div>
                </div>
                <div class="table-box action">
                    <div class="table-heading">Delete</div>
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
                                    <div class="table-heading">Recipe Name</div>
                                </div>
                                <div class="table-box">
                                    <div class="table-heading">Ingredient</div>
                                </div>
                                <div class="table-box">
                                    <div class="table-heading">Edit Quantity</div>
                                </div>
                                <div class="table-box action">
                                    <div class="table-heading">Delete</div>
                                </div>
                            </div>
                            <?php
                                $count = 0;
                                foreach ($rows as $row) {
                                    $count++;
                                    $ingredients = $row['ingredient_name'];
                                    $ingredientId = $row['Ingredient_ID']; // Generate a unique id for each ingredient to dec and inc correctly
                                    $recipeId = $row['Recipe_ID'];
                                    $recipes = $row['Recipe_Name'];
                            ?>
                            <div class="table-row">
                                <div class="div-block-406 _2">
                                    <div class="table-row-nr"><?php echo $count; ?></div>
                                </div>
                                <div class="table-box _2">
                                    <a href="#" class="table-data link" data-title="<?php echo $recipes; ?>"><?php echo $recipes; ?></a>
                                </div>
                                <div class="table-box _2">
                                    <a href="#" class="table-data link" data-title="<?php echo $ingredients; ?>"><?php echo $ingredients; ?></a>
                                </div>
                                <div class="table-box _2">
                                    <div class="table-data" style="box-sizing = border-box">
                                    <form style="box-sizing: border-box;">
                                    <div class="value-button" id="decrease" onclick="decreaseQuantity('<?php echo $ingredientId; ?>', '<?php echo $recipeId; ?>')" value="Decrease Value">-</div>
                                        <input type="number" class="number" id="<?php echo $ingredientId; ?>" value="<?php echo $row['Quantity']; ?>"/>
                                        <div class="value-button" id="increase" onclick="increaseQuantity('<?php echo $ingredientId; ?>', '<?php echo $recipeId; ?>')" value="Increase Value">+</div>
                                    </form>
                                    </div>
                                </div>
                                <div class="table-box _2 action">
                                <form>
                                <div name="FrmDelete" class="FrmDelete" onclick="deleteRecipe('<?php echo $ingredientId; ?>', '<?php echo $recipeId; ?>')" value="Delete">
                                    <a data-w-id="ae27a065-dfeb-a9cb-56ca-8b63a99081be" href="#" class="link-block-10 w-inline-block">
                                    <img src="https://assets.website-files.com/5ec7e046dab94257e6c39d51/5ec7e05fdab942a262c39db7_close%20(2).svg" alt="" class="table-action-icon-2 x"/>
                                    </a>
                                </div>
                                </form>
                                </div>
                            </div>
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
  function deleteRecipe(ingredientId, recipeId) {
        $.ajax({
          url: '../BackEnd/deleteRecipe.php',
          type: 'POST',
          data: {
            ingredientId: ingredientId,
            recipeId: recipeId
          },
          success: function(response) {
            console.log(response);
          },
          error: function(xhr, status, error) {
            console.log(error);
          }
        });
  }

  function increaseQuantity(ingredientId, recipeId) {
    var value = parseInt(document.getElementById(ingredientId).value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById(ingredientId).value = value;
    updateQuantity(ingredientId, value, recipeId); // Call the updateQuantity function
  }

  function decreaseQuantity(ingredientId, recipeId) {
    var value = parseInt(document.getElementById(ingredientId).value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById(ingredientId).value = value;
    updateQuantity(ingredientId, value, recipeId); // Call the updateQuantity function
  }
  function updateQuantity(ingredientId, value, recipeId) {
        $.ajax({
          url: '../BackEnd/edit-recipeQ.php',
          type: 'POST',
          data: {
            ingredientId: ingredientId,
            value:value,
            recipeId: recipeId
          },
          success: function(response) {
            console.log(response);
          },
          error: function(xhr, status, error) {
            console.log(error);
          }
        });
  }
  /* working on the search bar */

const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".table-container");

function myFunction() {
  var input, filter, movieList, movieListItems, title;
  input = document.getElementById("search");
  filter = input.value.toLowerCase();
  movieList = document.getElementsByClassName("scroll-table-content")[0];
  movieListItems = movieList.getElementsByClassName("table-row");
  for (var i = 0; i < movieListItems.length; i++) {
    title = movieListItems[i].querySelector(".table-data.link");
if (title) {
  title = title.textContent;
} else {
  title = ""; // or any other default value you prefer
}
    if (title.toLowerCase().indexOf(filter) > -1) {
      movieListItems[i].style.display = "";
    } else {
      movieListItems[i].style.display = "none";
    }
  }
}

arrows.forEach((arrow, i) => {
  const movieList = movieLists[i];
  if (movieList) {
    const itemNumber = movieList.querySelectorAll(".table-row").length;
    let clickCounter = 0;
    arrow.addEventListener("click", () => {
      const ratio = Math.floor(window.innerWidth / 270);
      clickCounter++;
      if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
        movieList.style.transform = `translateX(${
          movieList.computedStyleMap().get("transform")[0].x.value - 300
        }px)`;
      } else {
        movieList.style.transform = "translateX(0)";
        clickCounter = 0;
      }
    });
  }

  console.log(Math.floor(window.innerWidth / 270));
});

// TOGGLE

const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
  ".wrapper-section,.table-heading,.search,.search-input,.search-button,.search-icon"
);

if (ball) {
  ball.addEventListener("click", () => {
    items.forEach((item) => {
      item.classList.toggle("active");
    });
    ball.classList.toggle("active");
  });
}


</script>
