-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "posts" ------------------------------------
-- CREATE TABLE "posts" ----------------------------------------
CREATE TABLE `posts` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`period_id` Int( 11 ) NULL,
	`url` Text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`content_type_id` Int( 11 ) NULL,
	`reach` Int( 11 ) NULL DEFAULT '0',
	`impressions` Int( 11 ) NULL DEFAULT '0',
	`clicks` Int( 11 ) NULL DEFAULT '0',
	`likes` Int( 11 ) NULL DEFAULT '0',
	`shares` Int( 11 ) NULL DEFAULT '0',
	`comments` Int( 11 ) NULL DEFAULT '0',
	`group_in` Int( 11 ) NULL DEFAULT '0',
	`site_visits` Int( 11 ) NULL DEFAULT '0',
	`purchase_intentions` Int( 11 ) NULL DEFAULT '0',
	`transactions` Int( 11 ) NULL DEFAULT '0',
	`model_id` Int( 11 ) NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "buy_models" -------------------------------
-- CREATE TABLE "buy_models" -----------------------------------
CREATE TABLE `buy_models` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`name` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `unique_id` UNIQUE( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "content_types" ----------------------------
-- CREATE TABLE "content_types" --------------------------------
CREATE TABLE `content_types` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` Text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `unique_id` UNIQUE( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "periods" ----------------------------------
-- CREATE TABLE "periods" --------------------------------------
CREATE TABLE `periods` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` Text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `unique_id` UNIQUE( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "posts" ------------------------------------
-- ---------------------------------------------------------


-- Dump data of "buy_models" -------------------------------
-- ---------------------------------------------------------


-- Dump data of "content_types" ----------------------------
-- ---------------------------------------------------------


-- Dump data of "periods" ----------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_buy_models_posts" ----------------------
-- CREATE LINK "lnk_buy_models_posts" --------------------------
ALTER TABLE `posts`
	ADD CONSTRAINT `lnk_buy_models_posts` FOREIGN KEY ( `model_id` )
	REFERENCES `buy_models`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_content_types_posts" -------------------
-- CREATE LINK "lnk_content_types_posts" -----------------------
ALTER TABLE `posts`
	ADD CONSTRAINT `lnk_content_types_posts` FOREIGN KEY ( `content_type_id` )
	REFERENCES `content_types`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "lnk_periods_posts" -------------------------
-- CREATE LINK "lnk_periods_posts" -----------------------------
ALTER TABLE `posts`
	ADD CONSTRAINT `lnk_periods_posts` FOREIGN KEY ( `period_id` )
	REFERENCES `periods`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


