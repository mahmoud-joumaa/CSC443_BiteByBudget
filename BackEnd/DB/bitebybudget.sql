-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2023 at 11:20 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitebybudget`
--

-- --------------------------------------------------------

--
-- Table structure for table `consistsof`
--

DROP TABLE IF EXISTS `consistsof`;
CREATE TABLE IF NOT EXISTS `consistsof` (
  `Recipe_ID` int NOT NULL,
  `Ingredient_ID` int NOT NULL,
  `Quantity` int NOT NULL,
  `Unit` varchar(255) NOT NULL,
  PRIMARY KEY (`Recipe_ID`,`Ingredient_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `consistsof`
--

INSERT INTO `consistsof` (`Recipe_ID`, `Ingredient_ID`, `Quantity`, `Unit`) VALUES
(1, 1, 500, 'g'),
(1, 3, 57, 'g'),
(1, 4, 960, 'mL'),
(1, 5, 170, 'g'),
(1, 6, 252, 'g'),
(1, 7, 60, 'mL'),
(2, 8, 30, 'mL'),
(2, 9, 115, 'g'),
(2, 10, 390, 'g'),
(2, 16, 500, 'g'),
(2, 14, 200, 'g'),
(2, 11, 480, 'g'),
(2, 13, 4, 'g'),
(2, 17, 3, 'g'),
(2, 12, 3, 'g'),
(3, 1, 250, 'g'),
(3, 19, 50, 'g'),
(3, 21, 5, 'g'),
(3, 20, 4, 'mL'),
(3, 4, 125, 'mL'),
(3, 6, 120, 'g'),
(3, 5, 125, 'g'),
(4, 6, 660, 'g'),
(4, 1, 23, 'g'),
(4, 3, 4, 'g'),
(4, 22, 3, 'g'),
(4, 21, 3, 'g'),
(4, 17, 3, 'g'),
(4, 25, 7, 'g'),
(4, 23, 45, 'g'),
(4, 24, 5, 'g'),
(4, 8, 5, 'mL'),
(5, 26, 1500, 'g'),
(5, 27, 250, 'mL'),
(5, 1, 200, 'g'),
(5, 28, 10, 'g'),
(5, 21, 10, 'g'),
(5, 12, 4, 'g'),
(5, 29, 5, 'g'),
(5, 30, 5, 'g'),
(5, 31, 5, 'g'),
(5, 32, 1000, 'mL'),
(5, 17, 3, 'g'),
(6, 33, 455, 'g'),
(6, 36, 920, 'g'),
(6, 38, 1, 'kg'),
(6, 37, 220, 'g'),
(6, 39, 2, 'tbs'),
(6, 40, 2, 'tbs'),
(6, 8, 2, 'tbs'),
(6, 17, 1, 'tsp'),
(6, 41, 15, ''),
(6, 42, 300, 'g'),
(6, 13, 1, 'tsp'),
(7, 5, 230, 'g'),
(7, 43, 260, 'g'),
(7, 44, 300, 'g'),
(7, 45, 150, 'g'),
(7, 20, 1, 'tbs'),
(7, 21, 1, 'tsp'),
(7, 6, 3, ''),
(7, 1, 155, 'g'),
(7, 46, 35, 'g'),
(8, 51, 24, ''),
(8, 50, 24, ''),
(8, 8, 4, 'tbs'),
(8, 21, 1, 'tsp'),
(8, 49, 1, 'tsp'),
(8, 48, 1, 'tsp'),
(8, 29, 1, 'tsp'),
(8, 30, 1, 'tsp'),
(8, 28, 1, 'tsp'),
(8, 47, 910, 'g'),
(9, 56, 250, 'g'),
(9, 55, 3, 'tbs'),
(9, 54, 100, 'g'),
(9, 45, 2, 'tbs'),
(9, 53, 2, ''),
(9, 23, 4, ''),
(9, 8, 30, 'mL'),
(9, 52, 5, ''),
(10, 60, 1, 'tbs'),
(10, 59, 690, 'g'),
(10, 55, 2, 'tbs'),
(10, 58, 150, 'g'),
(10, 53, 60, 'g'),
(10, 52, 1, 'tbs'),
(10, 23, 75, 'g'),
(10, 57, 240, 'mL'),
(10, 26, 348, 'g'),
(10, 6, 3, ''),
(10, 32, 2, 'tsp'),
(11, 64, 20, ''),
(11, 63, 290, 'g'),
(11, 62, 1, 'tsp'),
(11, 61, 170, 'g'),
(11, 28, 1, 'tsp'),
(11, 1, 125, 'g'),
(11, 17, 1, 'tsp'),
(11, 13, 1, 'tsp'),
(11, 30, 1, 'tsp'),
(12, 5, 2, 'tbs'),
(12, 65, 2, 'tbs'),
(12, 67, 84, 'g'),
(12, 66, 2, ''),
(13, 69, 2, ''),
(13, 70, 2, ''),
(13, 71, 2, ''),
(13, 68, 1, ''),
(13, 61, 115, 'g'),
(13, 32, 3, 'tbs'),
(13, 55, 80, 'mL'),
(13, 52, 3, ''),
(13, 26, 3, ''),
(13, 17, 1, 'tsp'),
(14, 26, 455, 'g'),
(14, 42, 225, 'g'),
(14, 1, 60, 'g'),
(14, 6, 2, ''),
(14, 21, 1, 'tsp'),
(14, 17, 1, 'tsp'),
(14, 29, 1, 'tsp'),
(14, 72, 50, 'g'),
(15, 73, 455, 'g'),
(15, 67, 200, 'g'),
(15, 4, 1, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `Ingredient_ID` int NOT NULL AUTO_INCREMENT,
  `Ingredient_Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`Ingredient_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`Ingredient_ID`, `Ingredient_Name`, `Type`, `Image`) VALUES
(1, 'flour', 'grains', 'Images/IngredientsAndRecipes/flour.jpg'),
(3, 'baking powder', 'powder', 'Images/IngredientsAndRecipes/baking-powder.png'),
(4, 'milk', 'dairy', 'Images/IngredientsAndRecipes/milk.jpg'),
(5, 'butter', 'dairy', 'Images/IngredientsAndRecipes/butter.jpg'),
(6, 'egg', 'protein', 'Images/IngredientsAndRecipes/egg.jpg'),
(7, 'maple syrup', 'syrup', 'Images/IngredientsAndRecipes/syrup.jpg'),
(8, 'olive oil', 'oil', 'Images/IngredientsAndRecipes/olive-oil.jpg'),
(9, 'white onion', 'vegetable', 'Images/IngredientsAndRecipes/white-onion.png'),
(10, 'orange sweet potato', 'vegetable', 'Images/IngredientsAndRecipes/orange-sweet-potato.jpg'),
(11, 'gala apple', 'fruit', 'Images/IngredientsAndRecipes/gala-apple.jpg'),
(12, 'fresh thyme', 'herb', 'Images/IngredientsAndRecipes/fresh-thyme.jpg'),
(13, 'kosher salt', 'seasoning', 'Images/IngredientsAndRecipes/kosher-salt.jpg'),
(14, 'delicata squash', 'fruit', 'Images/IngredientsAndRecipes/delicata-squash.jpg'),
(15, 'potato', 'vegetable', 'Images/IngredientsAndRecipes/potato.jpg'),
(16, 'purple potato', 'vegetable', 'Images/IngredientsAndRecipes/purple-potato.jpg'),
(17, 'black pepper', 'seasoning', 'Images/IngredientsAndRecipes/black-pepper.jpg'),
(18, 'corn starch', 'grains', 'Images/IngredientsAndRecipes/corn-starch.jpeg'),
(19, 'sugar', 'powder', 'Images/IngredientsAndRecipes/sugar.jpg'),
(20, 'vanilla extract', 'syrup', 'Images/IngredientsAndRecipes/vanilla-extract.jpeg'),
(21, 'salt', 'seasoning', 'Images/IngredientsAndRecipes/salt.jpg'),
(22, '7-spice seasoning', 'seasoning', 'Images/IngredientsAndRecipes/7-spice-seasoning.jpg'),
(23, 'green onion', 'vegetable', 'Images/IngredientsAndRecipes/green-onion.jpg'),
(24, 'mint', 'herb', 'Images/IngredientsAndRecipes/mint.jpeg'),
(25, 'cilantro', 'herb', 'Images/IngredientsAndRecipes/cilantro.jpg'),
(26, 'chicken', 'protein', 'Images/IngredientsAndRecipes/chicken.jpg'),
(27, 'buttermilk', 'powder', 'Images/IngredientsAndRecipes/buttermilk.png'),
(28, 'paprika', 'seasoning', 'Images/IngredientsAndRecipes/paprika.jpg'),
(29, 'dried oregano', 'herb', 'Images/IngredientsAndRecipes/dried-oregano.jpg'),
(30, 'garlic powder', 'powder', 'Images/IngredientsAndRecipes/garlic-powder.jpg'),
(31, 'onion powder', 'powder', 'Images/IngredientsAndRecipes/onion-powder.jpeg'),
(32, 'vegetable oil', 'oil', 'Images/IngredientsAndRecipes/vegetable-oil.jpg'),
(33, 'ground beef', 'meat', 'Images/IngredientsAndRecipes/ground-beef.jpg'),
(36, 'marinara sauce', 'sauce', 'Images/IngredientsAndRecipes/marinara-sauce.jpg'),
(37, 'parmesan cheese', 'dairy', 'Images/IngredientsAndRecipes/parmesan-cheese.jpg'),
(38, ' whole milk ricotta cheese', 'dairy', 'Images/IngredientsAndRecipes/whole-milk-ricotta-cheese.jpg'),
(39, ' fresh parsley', 'vegetable ', 'Images/IngredientsAndRecipes/fresh-parsley.jpg'),
(40, 'fresh basil', 'vegetable', 'Images/IngredientsAndRecipes/fresh-basil.jpg'),
(41, 'lasagna noodles', 'pasta', 'Images/IngredientsAndRecipes/lasagna-noodles.jpg'),
(42, ' mozzarella cheese', 'dairy', 'Images/IngredientsAndRecipes/mozzarella-cheese.jpg'),
(43, 'semi-sweet chocolate chips', 'chocolate chips', 'Images/IngredientsAndRecipes/semi-sweet-chocolate-chips.jpg'),
(44, ' granulated sugar', 'sugar', 'Images/IngredientsAndRecipes/granulated-sugar.jpg'),
(45, 'brown sugar', 'sugar', 'Images/IngredientsAndRecipes/brown-sugar.jpg'),
(46, 'dark cocoa powder', 'powder', 'Images/IngredientsAndRecipes/dark-cocoa-powder.jpg'),
(47, 'shrimp', 'seafood', 'Images/IngredientsAndRecipes/shrimp.jpg'),
(48, 'cumin', 'seasoning', 'Images/IngredientsAndRecipes/cumin.jpg'),
(49, 'red pepper flakes', 'seasoning', 'Images/IngredientsAndRecipes/red-pepper-flakes.jpg'),
(50, 'skewers', 'sticks', 'Images/IngredientsAndRecipes/skewers.jpg'),
(51, 'corn tortillas', 'bread', 'Images/IngredientsAndRecipes/corn-tortillas.jpg'),
(52, 'garlic', 'vegetable', 'Images/IngredientsAndRecipes/garlic.jpg'),
(53, 'carrots', 'vegetable', 'Images/IngredientsAndRecipes/carrots.jpg'),
(54, 'snap peas', 'vegetable', 'Images/IngredientsAndRecipes/snap-peas.jpg'),
(55, 'soy sauce', 'sauce', 'Images/IngredientsAndRecipes/soy-sauce.jpg'),
(56, 'dried rice noodles', 'noodles', 'Images/IngredientsAndRecipes/dried-rice-noodles.jpg'),
(57, 'teriyaki sauce', 'sauce', 'Images/IngredientsAndRecipes/teriyaki-sauce.jpg'),
(58, 'broccoli floret', 'vegetable', 'Images/IngredientsAndRecipes/broccoli-floret.jpg'),
(59, 'brown rice', 'whole grain', 'Images/IngredientsAndRecipes/brown-rice.jpg'),
(60, 'sesame oil pepper', 'oil', 'Images/IngredientsAndRecipes/sesame-oil-pepper.jpg'),
(61, 'honey', 'sweetener', 'Images/IngredientsAndRecipes/honey.jpg\n'),
(62, 'chili powder', 'seasoning', 'Images/IngredientsAndRecipes/chili-powder.jpg\n'),
(63, 'bbq sauce', 'sauce', 'Images/IngredientsAndRecipes/bbq-sauce.jpg\n'),
(64, 'chicken wings', 'poultry', 'Images/IngredientsAndRecipes/chicken-wings.jpg\n'),
(65, 'mayonnaise', 'sauce', 'Images/IngredientsAndRecipes/mayonnaise.jpg\n'),
(66, 'sourdough bread', 'bread', 'Images/IngredientsAndRecipes/sourdough-bread.jpg\n'),
(67, 'cheddar cheese', 'dairy', 'Images/IngredientsAndRecipes/cheddar-cheese.jpg\r\n'),
(68, 'red onion', 'vegetable', 'Images/IngredientsAndRecipes/red-onion.jpg\n'),
(69, 'red bell peppers', 'vegetable', 'Images/IngredientsAndRecipes/red-bell-peppers.jpg\n'),
(70, 'yellow bell peppers', 'vegetable', 'Images/IngredientsAndRecipes/yellow-bell-peppers.jpg\n'),
(71, 'orange bell peppers', 'vegetable', 'Images/IngredientsAndRecipes/orange-bell-peppers.jpg\n'),
(72, 'panko breadcrumbs', 'breadcrumbs', 'Images/IngredientsAndRecipes/panko-breadcrumbs.jpg\n'),
(73, 'elbow macaroni', 'pasta', 'Images/IngredientsAndRecipes/elbow-macaroni.jpg\n');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `Recipe_ID` int NOT NULL AUTO_INCREMENT,
  `Recipe_Name` varchar(255) NOT NULL,
  `Ingredients` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`Recipe_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`Recipe_ID`, `Recipe_Name`, `Ingredients`, `Image`) VALUES
(1, 'fluffy pancake', 'flour, baking powder, milk, butter, egg, maple syrup', 'Images/IngredientsAndRecipes/fluffy-pancake.jpg'),
(2, 'ratatouille', 'olive oil, white onion, orange sweet potato, gala apple, fresh thyme, kosher salt, potato, delicata squash, purple potato, black pepper', 'Images/IngredientsAndRecipes/ratatouille.jpg'),
(3, 'crispy belgian waffles', 'flour, cornstarch, baking powder, sugar, salt, eggs, butter, milk, vanilla extract', 'Images/IngredientsAndRecipes/crispy-belgian-waffles.jpg'),
(4, 'ejjeh', 'eggs, baking powder, 7-spice seasoning, salt, cilantro, green onion, mint, olive oil', 'Images/IngredientsAndRecipes/ejjeh.jpg'),
(5, 'krispy chicken', 'chicken, buttermilk, flour, paprika, salt, thyme, dired oregano, garlic powder, onion powder, black pepper, vegetable oil', 'Images/IngredientsAndRecipes/krispy-chicken.jpg'),
(6, 'lasagna', 'ground beef,marinara sauce,whole milk ricotta cheese, parmesan cheese,fresh parsley,fresh basil,kosher salt,black pepper,olive oil,lasagna noodles,mozzarella cheese', 'Images/IngredientsAndRecipes/lasagna.jpg'),
(7, 'brownies', 'butter,brown sugar,granulated sugar ,vanilla extract,salt,egg,flour,dark cocoa powder,semi-sweet chocolate chips', 'Images/IngredientsAndRecipes/brownies.jpg'),
(8, 'grilled shrimp tacos', 'shrimp,paprika,garlic powder, dried oregano,cumin,red pepper flakes,salt,skewers,olive oil,corn tortillas', 'Images/IngredientsAndRecipes/grilled-shrimp-tacos.jpg'),
(9, 'veggie garlic noodles\r\n', 'vegetable oil,garlic,green onions,carrots,snap peas,brown sugar,soy sauce,rice noodles', 'Images/IngredientsAndRecipes/veggie-garlic-noodles.jpg'),
(10, 'chicken teriyaki fried rice', 'chicken,teriyaki sauce,vegetable oil,green onion,garlic,carrot,broccoli floret,egg,brown rice,soy sauce,sesame oil\npepper', 'Images/IngredientsAndRecipes/chicken-teriyaki-fried-rice.jpg'),
(11, 'honey BBQ chicken wings', 'flour,chili powder,kosher salt,black pepper,paprika,garlic powder,chicken wings,BBQ sauce,honey', 'Images/IngredientsAndRecipes/honey-BBQ-chicken-wings.jpg'),
(12, 'grilled cheese', 'sourdough bread,butter,mayonnaise,cheddar cheese', 'Images/IngredientsAndRecipes/grilled-cheese.jpg\n'),
(13, 'honey garlic chicken & veggie skewers', 'vegetable oil,honey,soy sauce,garlic,black pepper,chicken,red onion,red bell peppers,orange bell peppers,yellow bell peppers', 'Images/IngredientsAndRecipes/honey-garlic-chicken-&-veggie-skewers.jpg\n'),
(14, 'cheesy chicken nuggets', 'chicken,salt,black pepper,mozzarella cheese,panko breadcrumbs,dried oregano,flour,egg', 'Images/IngredientsAndRecipes/cheesy-chicken-nuggets.jpg\n'),
(15, 'mac & cheese', 'milk,elbow macaroni,cheddar cheese', 'Images/IngredientsAndRecipes/mac-&-cheese.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

DROP TABLE IF EXISTS `sells`;
CREATE TABLE IF NOT EXISTS `sells` (
  `Supermarket_ID` int NOT NULL,
  `Ingredient_ID` int NOT NULL,
  `Quantity` int NOT NULL,
  `Price` double NOT NULL,
  `Status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`Supermarket_ID`,`Ingredient_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`Supermarket_ID`, `Ingredient_ID`, `Quantity`, `Price`, `Status`) VALUES
(1, 1, 321132, 0.03, 0),
(1, 3, 132323, 0.02, 0),
(1, 4, 312122, 0.05, 0),
(1, 5, 423324, 0.1, 0),
(1, 6, 534543, 0.15, 0),
(1, 7, 645654, 0.08, 0),
(1, 8, 4242323, 0.09, 0),
(1, 9, 88888, 0.04, 0),
(1, 10, 4332422, 0.08, 0),
(1, 11, 654354, 0.07, 0),
(1, 12, 21332312, 0.05, 0),
(1, 13, 21332, 0.02, 0),
(1, 14, 33321, 0.03, 0),
(1, 15, 423443, 0.04, 0),
(1, 16, 111111, 0.05, 0),
(1, 17, 45455, 0.02, 0),
(1, 18, 7774685, 0.03, 0),
(1, 19, 9878743, 0.03, 0),
(1, 20, 3213212, 0.02, 0),
(1, 21, 54435, 0.02, 0),
(3, 1, 536517, 0.02, 0),
(3, 18, 2113211, 0.031, 0),
(3, 3, 12332, 0.021, 0),
(3, 19, 31232321, 0.03, 0),
(3, 21, 4324342, 0.02, 0),
(3, 6, 654654, 0.19, 0),
(3, 5, 7348724, 0.12, 0),
(3, 4, 222220, 0.08, 0),
(3, 20, 675765, 0.02, 0),
(1, 33, 43543, 0.5, 0),
(1, 36, 7687, 0.3, 0),
(1, 38, 32132, 0.09, 0),
(1, 37, 4324, 0.08, 0),
(1, 39, 12267, 0.04, 0),
(1, 41, 5675, 0.12, 0),
(1, 42, 362347, 0.08, 0),
(2, 46, 281712, 0.03, 0),
(2, 1, 32344, 0.032, 0),
(2, 3, 313122, 0.022, 0),
(2, 4, 24334, 0.06, 0),
(2, 5, 33112, 0.13, 0),
(2, 6, 67678, 0.16, 0),
(2, 7, 87231, 0.07, 0),
(2, 8, 43222, 0.091, 0),
(2, 9, 43224, 0.042, 0),
(2, 10, 12312, 0.085, 0),
(2, 11, 37198, 0.071, 0),
(2, 15, 321212, 0.042, 0),
(2, 43, 12312, 0.03, 0),
(2, 44, 213312, 0.02, 0),
(2, 45, 11212, 0.025, 0),
(2, 20, 12161, 0.021, 0),
(2, 21, 44531, 0.02, 0),
(2, 41, 13221, 0.13, 0),
(2, 42, 43243, 0.09, 0),
(3, 47, 23424, 0.45, 0),
(3, 48, 5656, 0.02, 0),
(3, 49, 31132, 0.022, 0),
(3, 30, 3423, 0.021, 0),
(3, 28, 23131, 0.021, 0),
(3, 29, 323232, 0.021, 0),
(3, 50, 327727, 0.03, 0),
(3, 51, 778787, 0.02, 0),
(3, 8, 262726, 0.089, 0),
(3, 32, 343243, 0.07, 0),
(3, 52, 21211, 0.03, 0),
(3, 23, 54354, 0.022, 0),
(3, 53, 432432, 0.02, 0),
(3, 54, 12112, 0.023, 0),
(3, 45, 57577, 0.024, 0),
(3, 55, 43221, 0.04, 0),
(3, 56, 31231, 0.05, 0),
(3, 26, 3132, 0.4, 0),
(3, 57, 313111, 0.04, 0),
(3, 59, 231321, 0.031, 0),
(3, 58, 434342, 0.02, 0),
(3, 60, 243342, 0.02, 0),
(1, 62, 31212, 0.02, 0),
(1, 28, 31212, 0.02, 0),
(1, 64, 31212, 0.3, 0),
(1, 30, 36171, 0.02, 0),
(1, 63, 23456, 0.01, 0),
(1, 61, 35433, 0.12, 0),
(2, 66, 4443, 0.25, 0),
(2, 67, 432423, 0.08, 0),
(2, 65, 24324, 0.01, 0),
(3, 61, 312312, 0.11, 0),
(3, 68, 32312, 0.04, 0),
(3, 70, 21211, 0.03, 0),
(3, 69, 42234, 0.03, 0),
(3, 71, 321311, 0.03, 0),
(2, 72, 132132, 0.022, 0),
(2, 17, 23432, 0.02, 0),
(2, 26, 321211, 0.42, 0),
(2, 32, 43233, 0.08, 0),
(2, 29, 12332, 0.02, 0),
(1, 73, 432431, 0.03, 0),
(2, 73, 423432, 0.025, 0),
(3, 73, 321312, 0.02, 0),
(1, 67, 31213, 0.079, 0),
(3, 67, 312131, 0.075, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supermarket`
--

DROP TABLE IF EXISTS `supermarket`;
CREATE TABLE IF NOT EXISTS `supermarket` (
  `Supermarket_ID` int NOT NULL AUTO_INCREMENT,
  `Supermarket_Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`Supermarket_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `supermarket`
--

INSERT INTO `supermarket` (`Supermarket_ID`, `Supermarket_Name`, `Location`, `Image`) VALUES
(1, 'Siyarafour', 'Lebanon,Beirut,Hazmieh Street', 'Images/Logos/Siyarafourlogo.jpg'),
(2, 'Winneys', 'Lebanon,Beirut,Ashrafieh', 'Images/Logos/Winneyslogo.jpg'),
(3, 'Foodies', 'Lebanon,Beirut,Mar Elias', 'Images/Logos/Foodieslogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `IsAdmin` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `Pass`, `IsAdmin`) VALUES
(11, 'admin', 'admin', 1),
(8, 'siyarfour', 'siyarafour', 0),
(9, 'winneys', 'winneys', 0),
(10, 'foodies', 'foodies', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
