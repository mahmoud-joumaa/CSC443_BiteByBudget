-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2023 at 09:46 PM
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
(1, 'flour', 'grains', 'Images/ingredients+recipes/flour.jpg'),
(3, 'baking powder', 'powder', 'Images/ingredients+recipes/baking-powder.png'),
(4, 'milk', 'dairy', 'Images/ingredients+recipes/milk.jpg'),
(5, 'butter', 'dairy', 'Images/ingredients+recipes/butter.jpg'),
(6, 'egg', 'protein', 'Images/ingredients+recipes/egg.jpg'),
(7, 'maple syrup', 'syrup', 'Images/ingredients+recipes/syrup.jpeg'),
(8, 'olive oil', 'oil', 'Images/ingredients+recipes/olive-oil.jpg'),
(9, 'white onion', 'vegetable', 'Images/ingredients+recipes/white-onion.png'),
(10, 'orange sweet potato', 'vegetable', 'Images/ingredients+recipes/orange-sweet-potato.jpg'),
(11, 'gala apple', 'fruit', 'Images/ingredients+recipes/gala-apple.jpg'),
(12, 'fresh thyme', 'herb', 'Images/ingredients+recipes/fresh-thyme.jpg'),
(13, 'kosher salt', 'seasoning', 'Images/ingredients+recipes/kosher-salt.jpg'),
(14, 'delicata squash', 'fruit', 'Images/ingredients+recipes/delicata-squash.jpg'),
(15, 'potato', 'vegetable', 'Images/ingredients+recipes/potato.jpg'),
(16, 'purple potato', 'vegetable', 'Images/ingredients+recipes/purple-potato.jpg'),
(17, 'black pepper', 'seasoning', 'Images/ingredients+recipes/black-pepper.jpg'),
(18, 'corn starch', 'grains', 'Images/ingredients+recipes/corn-starch.jpeg'),
(19, 'sugar', 'powder', 'Images/ingredients+recipes/sugar.jpg'),
(20, 'vanilla extract', 'syrup', 'Images/ingredients+recipes/vanilla-extract.jpeg'),
(21, 'salt', 'seasoning', 'Images/ingredients+recipes/salt.jpg'),
(22, '7-spice seasoning', 'seasoning', 'Images/ingredients+recipes/7-spice-seasoning.jpg'),
(23, 'green onion', 'vegetable', 'Images/ingredients+recipes/green-onion.jpg'),
(24, 'mint', 'herb', 'Images/ingredients+recipes/mint.jpeg'),
(25, 'cilantro', 'herb', 'Images/ingredients+recipes/cilantro.jpg'),
(26, 'chicken', 'protein', 'Images/ingredients+recipes/chicken.jpg'),
(27, 'buttermilk', 'powder', 'Images/ingredients+recipes/buttermilk.png'),
(28, 'paprika', 'seasoning', 'Images/ingredients+recipes/paprika.jpg'),
(29, 'dried oregano', 'herb', 'Images/ingredients+recipes/dried-oregano.jpg'),
(30, 'garlic powder', 'powder', 'Images/ingredients+recipes/garlic-powder.jpg'),
(31, 'onion powder', 'powder', 'Images/ingredients+recipes/onion-powder.jpeg'),
(32, 'vegetable oil', 'oil', 'Images/ingredients+recipes/vegetable-oil.jpg'),
(33, 'ground beef', 'meat', 'Images/ingredients+recipes/ground-beef.jpg'),
(36, 'marinara sauce', 'sauce', 'Images/ingredients+recipes/marinara-sauce.jpg'),
(37, 'parmesan cheese', 'dairy', 'Images/ingredients+recipes/parmesan-cheese.jpg'),
(38, ' whole milk ricotta cheese', 'dairy', 'Images/ingredients+recipes/whole-milk-ricotta-cheese.jpg'),
(39, ' fresh parsley', 'vegetable ', 'Images/ingredients+recipes/fresh-parsley.jpg'),
(40, 'fresh basil', 'vegetable', 'Images/ingredients+recipes/fresh-basil.jpg'),
(41, 'lasagna noodles', 'pasta', 'Images/ingredients+recipes/lasagna-noodles.jpg'),
(42, ' mozzarella cheese', 'dairy', 'Images/ingredients+recipes/mozzarella-cheese.jpg'),
(43, 'semi-sweet chocolate chips', 'chocolate chips', 'Images/ingredients+recipes/semi-sweet-chocolate-chips.jpg'),
(44, ' granulated sugar', 'sugar', 'Images/ingredients+recipes/granulated-sugar.jpg'),
(45, 'brown sugar', 'sugar', 'Images/ingredients+recipes/brown-sugar.jpg'),
(46, 'dark cocoa powder', 'powder', 'Images/ingredients+recipes/dark-cocoa-powder.jpg'),
(47, 'shrimp', 'seafood', 'Images/ingredients+recipes/shrimp.jpg'),
(48, 'cumin', 'seasoning', 'Images/ingredients+recipes/cumin.jpg'),
(49, 'red pepper flakes', 'seasoning', 'Images/ingredients+recipes/red-pepper-flakes.jpg'),
(50, 'skewers', 'sticks', 'Images/ingredients+recipes/skewers.jpg'),
(51, 'corn tortillas', 'bread', 'Images/ingredients+recipes/corn-tortillas.jpg'),
(52, 'garlic', 'vegetable', 'Images/ingredients+recipes/garlic.jpg'),
(53, 'carrots', 'vegetable', 'Images/ingredients+recipes/carrots.jpg'),
(54, 'snap peas', 'vegetable', 'Images/ingredients+recipes/snap-peas.jpg'),
(55, 'soy sauce', 'sauce', 'Images/ingredients+recipes/soy-sauce.jpg'),
(56, 'dried rice noodles', 'noodles', 'Images/ingredients+recipes/dried-rice-noodles.jpg'),
(57, 'teriyaki sauce', 'sauce', 'Images/ingredients+recipes/teriyaki-sauce.jpg'),
(58, 'broccoli floret', 'vegetable', 'Images/ingredients+recipes/broccoli-floret.jpg'),
(59, 'brown rice', 'whole grain', 'Images/ingredients+recipes/brown-rice.jpg'),
(60, 'sesame oil pepper', 'oil', 'Images/ingredients+recipes/sesame-oil-pepper.jpg'),
(61, 'honey', 'sweetener', 'Images/ingredients+recipes/honey.jpg\n'),
(62, 'chili powder', 'seasoning', 'Images/ingredients+recipes/chili-powder.jpg\n'),
(63, 'bbq sauce', 'sauce', 'Images/ingredients+recipes/bbq-sauce.jpg\n'),
(64, 'chicken wings', 'poultry', 'Images/ingredients+recipes/chicken-wings.jpg\n'),
(65, 'mayonnaise', 'sauce', 'Images/ingredients+recipes/mayonnaise.jpg\n'),
(66, 'sourdough bread', 'bread', 'Images/ingredients+recipes/sourdough-bread.jpg\n'),
(67, 'cheddar cheese', 'dairy', 'Images/ingredients+recipes/cheddar-cheese.jpg\r\n'),
(68, 'red onion', 'vegetable', 'Images/ingredients+recipes/red-onion.jpg\n'),
(69, 'red bell peppers', 'vegetable', 'Images/ingredients+recipes/red-bell-peppers.jpg\n'),
(70, 'yellow bell peppers', 'vegetable', 'Images/ingredients+recipes/yellow-bell-peppers.jpg\n'),
(71, 'orange bell peppers', 'vegetable', 'Images/ingredients+recipes/orange-bell-peppers.jpg\n'),
(72, 'panko breadcrumbs', 'breadcrumbs', 'Images/ingredients+recipes/panko-breadcrumbs.jpg\n'),
(73, 'elbow macaroni', 'pasta', 'Images/ingredients+recipes/elbow-macaroni.jpg\n');

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
(1, 'fluffy pancake', 'flour, baking powder, milk, butter, egg, maple syrup', 'Images/ingredients+recipes/fluffy-pancake.jpg'),
(2, 'ratatouille', 'olive oil, white onion, orange sweet potato, gala apple, fresh thyme, kosher salt, potato, delicata squash, purple potato, black pepper', 'Images/ingredients+recipes/ratatouille.jpg'),
(3, 'crispy belgian waffles', 'flour, cornstarch, baking powder, sugar, salt, eggs, butter, milk, vanilla extract', 'Images/ingredients+recipes/crispy-belgian-waffles.jpg'),
(4, 'ejjeh', 'eggs, baking powder, 7-spice seasoning, salt, cilantro, green onion, mint, olive oil', 'Images/ingredients+recipes/ejjeh.jpg'),
(5, 'krispy chicken', 'chicken, buttermilk, flour, paprika, salt, thyme, dired oregano, garlic powder, onion powder, black pepper, vegetable oil', 'Images/ingredients+recipes/krispy-chicken.jpg'),
(6, 'lasagna', 'ground beef,marinara sauce,whole milk ricotta cheese, parmesan cheese,fresh parsley,fresh basil,kosher salt,black pepper,olive oil,lasagna noodles,mozzarella cheese', 'Images/ingredients+recipes/lasagna.jpg'),
(7, 'brownies', 'butter,brown sugar,granulated sugar ,vanilla extract,salt,egg,flour,dark cocoa powder,semi-sweet chocolate chips', 'Images/ingredients+recipes/brownies.jpg'),
(8, 'grilled shrimp tacos', 'shrimp,paprika,garlic powder, dried oregano,cumin,red pepper flakes,salt,skewers,olive oil,corn tortillas', 'Images/ingredients+recipes/grilled-shrimp-tacos.jpg'),
(9, 'veggie garlic noodles\r\n', 'vegetable oil,garlic,green onions,carrots,snap peas,brown sugar,soy sauce,rice noodles', 'Images/ingredients+recipes/veggie-garlic-noodles\n.jpg'),
(10, 'chicken teriyaki fried rice', 'chicken,teriyaki sauce,vegetable oil,green onion,garlic,carrot,broccoli floret,egg,brown rice,soy sauce,sesame oil\npepper', 'Images/ingredients+recipes/chicken-teriyaki-fried-rice.jpg'),
(11, 'honey BBQ chicken wings', 'flour,chili powder,kosher salt,black pepper,paprika,garlic powder,chicken wings,BBQ sauce,honey', 'Images/ingredients+recipes/honey-BBQ-chicken-wings.jpg'),
(12, 'grilled cheese', 'sourdough bread,butter,mayonnaise,cheddar cheese', 'Images/ingredients+recipes/grilled-cheese.jpg\n'),
(13, 'honey garlic chicken & veggie skewers', 'vegetable oil,honey,soy sauce,garlic,black pepper,chicken,red onion,red bell peppers,orange bell peppers,yellow bell peppers', 'Images/ingredients+recipes/honey-garlic-chicken-&-veggie-skewers.jpg\n'),
(14, 'cheesy chicken nuggets', 'chicken,salt,black pepper,mozzarella cheese,panko breadcrumbs,dried oregano,flour,egg', 'Images/ingredients+recipes/cheesy-chicken-nuggets.jpg\n'),
(15, 'mac & cheese', 'milk,elbow macaroni,cheddar cheese', 'Images/ingredients+recipes/mac-&-cheese.jpg');

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
  `Status` varchar(255) NOT NULL,
  PRIMARY KEY (`Supermarket_ID`,`Ingredient_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`Supermarket_ID`, `Ingredient_ID`, `Quantity`, `Price`, `Status`) VALUES
(1, 1, 321132, 0.03, 'Trending'),
(1, 3, 132323, 0.02, ''),
(1, 4, 312122, 0.05, ''),
(1, 5, 423324, 0.1, ''),
(1, 6, 534543, 0.15, ''),
(1, 7, 645654, 0.08, ''),
(1, 8, 4242323, 0.09, ''),
(1, 9, 88888, 0.04, ''),
(1, 10, 4332422, 0.08, ''),
(1, 11, 654354, 0.07, ''),
(1, 12, 21332312, 0.05, ''),
(1, 13, 21332, 0.02, ''),
(1, 14, 33321, 0.03, ''),
(1, 15, 423443, 0.04, ''),
(1, 16, 111111, 0.05, ''),
(1, 17, 45455, 0.02, ''),
(1, 18, 7774685, 0.03, ''),
(1, 19, 9878743, 0.03, ''),
(1, 20, 3213212, 0.02, ''),
(1, 21, 54435, 0.02, ''),
(3, 1, 536517, 0.02, 'Best Selling'),
(3, 18, 2113211, 0.031, ''),
(3, 3, 12332, 0.021, ''),
(3, 19, 31232321, 0.03, ''),
(3, 21, 4324342, 0.02, ''),
(3, 6, 654654, 0.19, ''),
(3, 5, 7348724, 0.12, ''),
(3, 4, 222220, 0.08, ''),
(3, 20, 675765, 0.02, ''),
(1, 33, 43543, 0.5, 'on sale - 20'),
(1, 36, 7687, 0.3, ''),
(1, 38, 32132, 0.09, 'on sale - 10'),
(1, 37, 4324, 0.08, ''),
(1, 39, 12267, 0.04, ''),
(1, 41, 5675, 0.12, 'on sale - 5'),
(1, 42, 362347, 0.08, ''),
(2, 46, 281712, 0.03, ''),
(2, 1, 32344, 0.032, ''),
(2, 3, 313122, 0.022, ''),
(2, 4, 24334, 0.06, ''),
(2, 5, 33112, 0.13, ''),
(2, 6, 67678, 0.16, ''),
(2, 7, 87231, 0.07, 'on sale - 5'),
(2, 8, 43222, 0.091, ''),
(2, 9, 43224, 0.042, ''),
(2, 10, 12312, 0.085, ''),
(2, 11, 37198, 0.071, ''),
(2, 15, 321212, 0.042, ''),
(2, 43, 12312, 0.03, ''),
(2, 44, 213312, 0.02, ''),
(2, 45, 11212, 0.025, ''),
(2, 20, 12161, 0.021, ''),
(2, 21, 44531, 0.02, ''),
(2, 41, 13221, 0.13, ''),
(2, 42, 43243, 0.09, ''),
(3, 47, 23424, 0.45, ''),
(3, 48, 5656, 0.02, ''),
(3, 49, 31132, 0.022, ''),
(3, 30, 3423, 0.021, ''),
(3, 28, 23131, 0.021, ''),
(3, 29, 323232, 0.021, ''),
(3, 50, 327727, 0.03, ''),
(3, 51, 778787, 0.02, ''),
(3, 8, 262726, 0.089, ''),
(3, 32, 343243, 0.07, 'on sale - 20'),
(3, 52, 21211, 0.03, ''),
(3, 23, 54354, 0.022, ''),
(3, 53, 432432, 0.02, ''),
(3, 54, 12112, 0.023, ''),
(3, 45, 57577, 0.024, ''),
(3, 55, 43221, 0.04, ''),
(3, 56, 31231, 0.05, ''),
(3, 26, 3132, 0.4, ''),
(3, 57, 313111, 0.04, ''),
(3, 59, 231321, 0.031, ''),
(3, 58, 434342, 0.02, ''),
(3, 60, 243342, 0.02, ''),
(1, 62, 31212, 0.02, ''),
(1, 28, 31212, 0.02, ''),
(1, 64, 31212, 0.3, ''),
(1, 30, 36171, 0.02, ''),
(1, 63, 23456, 0.01, ''),
(1, 61, 35433, 0.12, ''),
(2, 66, 4443, 0.25, ''),
(2, 67, 432423, 0.08, ''),
(2, 65, 24324, 0.01, ''),
(3, 61, 312312, 0.11, ''),
(3, 68, 32312, 0.04, ''),
(3, 70, 21211, 0.03, 'on sale - 50'),
(3, 69, 42234, 0.03, 'on sale - 50'),
(3, 71, 321311, 0.03, 'on sale - 50'),
(2, 72, 132132, 0.022, ''),
(2, 17, 23432, 0.02, ''),
(2, 26, 321211, 0.42, ''),
(2, 32, 43233, 0.08, ''),
(2, 29, 12332, 0.02, ''),
(1, 73, 432431, 0.03, 'on sale -5'),
(2, 73, 423432, 0.025, 'on sale -6'),
(3, 73, 321312, 0.02, 'on sale -7'),
(1, 67, 31213, 0.079, ''),
(3, 67, 312131, 0.075, '');

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
