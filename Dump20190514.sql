-- MySQL dump 10.13  Distrib 5.7.19, for osx10.12 (x86_64)
--
-- Host: 192.168.10.10    Database: chefsassistant
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `groceryListItems`
--

LOCK TABLES `groceryListItems` WRITE;
/*!40000 ALTER TABLE `groceryListItems` DISABLE KEYS */;
/*!40000 ALTER TABLE `groceryListItems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `groceryLists`
--

LOCK TABLES `groceryLists` WRITE;
/*!40000 ALTER TABLE `groceryLists` DISABLE KEYS */;
/*!40000 ALTER TABLE `groceryLists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `itemCategories`
--

LOCK TABLES `itemCategories` WRITE;
/*!40000 ALTER TABLE `itemCategories` DISABLE KEYS */;
INSERT INTO `itemCategories` VALUES (1,'Potatoes','Potatoes based products'),(2,'Soup','Soups'),(3,'Meat','Food from Animals');
/*!40000 ALTER TABLE `itemCategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Tater Tots',1,'Crispy potato goodness'),(2,'Ground Beef',3,'Meat from a cow'),(3,'Cream of Chicken Soup',2,'Soup'),(4,'Cream of Mushroom Soup',2,'Soup'),(5,'Cheddar Cheese Soup',2,'Soup');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_10_27_122550_recipes',1),(4,'2018_10_27_123218_grocery_list_items',1),(5,'2018_10_27_123354_grocery_lists',1),(6,'2018_10_27_123417_item_categories',1),(7,'2018_10_27_123427_items',1),(8,'2018_10_27_123504_recipe_ingredients',1),(9,'2018_10_27_123520_recipe_steps',1),(10,'2018_10_27_123533_tag_relationships',1),(11,'2018_10_27_123542_tags',1),(12,'2018_10_27_123553_unit_conversions',1),(13,'2018_10_27_123604_units',1),(14,'2019_04_06_112549_user_recipes',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `recipeIngredients`
--

LOCK TABLES `recipeIngredients` WRITE;
/*!40000 ALTER TABLE `recipeIngredients` DISABLE KEYS */;
INSERT INTO `recipeIngredients` VALUES (1,1,1,3),(1,2,1,3),(1,3,11,2),(1,4,11,2),(1,5,11,2);
/*!40000 ALTER TABLE `recipeIngredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `recipeSteps`
--

LOCK TABLES `recipeSteps` WRITE;
/*!40000 ALTER TABLE `recipeSteps` DISABLE KEYS */;
INSERT INTO `recipeSteps` VALUES (1,1,'Preheat the oven to 350 degrees'),(1,2,'Brown the ground beef'),(1,3,'Meanwhile, mix the cream of chicken, cream of mushroom soup in a glass baking dish'),(1,4,'Also while completing the first two steps prepare the tater tots as desired. For best results use a deep fryer'),(1,5,'Mix the brown ground beef with the soups'),(1,6,'Put the tater tots in a layer on top of the mixture'),(1,7,'Bake for 30 minutes ');
/*!40000 ALTER TABLE `recipeSteps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES (1,'Tater Tot Casserole',NULL,NULL,NULL,'The best meal on the planet what is there not to love about this perfect casserole',NULL,NULL,'2019-04-01 12:17:05','2019-04-01 12:17:05',NULL,NULL);
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tagRelationships`
--

LOCK TABLES `tagRelationships` WRITE;
/*!40000 ALTER TABLE `tagRelationships` DISABLE KEYS */;
/*!40000 ALTER TABLE `tagRelationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `unitConversions`
--

LOCK TABLES `unitConversions` WRITE;
/*!40000 ALTER TABLE `unitConversions` DISABLE KEYS */;
/*!40000 ALTER TABLE `unitConversions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `units`
--

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;
INSERT INTO `units` VALUES (1,'Teaspoon','tsp'),(2,'Ounce','oz'),(3,'Pound','lb');
/*!40000 ALTER TABLE `units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `userRecipes`
--

LOCK TABLES `userRecipes` WRITE;
/*!40000 ALTER TABLE `userRecipes` DISABLE KEYS */;
INSERT INTO `userRecipes` VALUES (1,1);
/*!40000 ALTER TABLE `userRecipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Wyatt Morgan','wmorganaz25@yahoo.com',NULL,'$2y$10$dAfCbNWwuws2W/lJlyzm1u.RkxambT9z9DBJ.KOW8H..0KheALElW',NULL,'2019-04-06 11:55:04','2019-04-06 11:55:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-14 19:26:20
