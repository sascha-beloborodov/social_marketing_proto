-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "content_types" ----------------------------
-- CREATE TABLE "content_types" --------------------------------
CREATE TABLE `content_types` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "migrations" -------------------------------
-- CREATE TABLE "migrations" -----------------------------------
CREATE TABLE `migrations` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`migration` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`batch` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = MyISAM
AUTO_INCREMENT = 4;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "password_resets" --------------------------
-- CREATE TABLE "password_resets" ------------------------------
CREATE TABLE `password_resets` ( 
	`email` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`token` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`created_at` Timestamp NULL )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = MyISAM;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "periods" ----------------------------------
-- CREATE TABLE "periods" --------------------------------------
CREATE TABLE `periods` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "posts" ------------------------------------
-- CREATE TABLE "posts" ----------------------------------------
CREATE TABLE `posts` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`url` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
	`reach` Int( 11 ) NOT NULL DEFAULT '0',
	`impressions` Int( 11 ) NOT NULL DEFAULT '0',
	`clicks` Int( 11 ) NOT NULL DEFAULT '0',
	`likes` Int( 11 ) NOT NULL DEFAULT '0',
	`shares` Int( 11 ) NOT NULL DEFAULT '0',
	`group_in` Int( 11 ) NOT NULL DEFAULT '0',
	`site_visits` Int( 11 ) NOT NULL DEFAULT '0',
	`purchase_intentions` Int( 11 ) NOT NULL DEFAULT '0',
	`transactions` Int( 11 ) NOT NULL DEFAULT '0',
	`content_type_id` Int( 10 ) UNSIGNED NULL,
	`period_id` Int( 10 ) UNSIGNED NULL,
	`purchase_model_id` Int( 10 ) UNSIGNED NULL,
	`social_id` Int( 10 ) UNSIGNED NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	`comments` Int( 11 ) NOT NULL DEFAULT '0',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "purchase_models" --------------------------
-- CREATE TABLE "purchase_models" ------------------------------
CREATE TABLE `purchase_models` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "socials" ----------------------------------
-- CREATE TABLE "socials" --------------------------------------
CREATE TABLE `socials` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "users" ------------------------------------
-- CREATE TABLE "users" ----------------------------------------
CREATE TABLE `users` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`email` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`password` VarChar( 191 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`remember_token` VarChar( 100 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
	`created_at` Timestamp NULL,
	`updated_at` Timestamp NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `users_email_unique` UNIQUE( `email` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = MyISAM
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "content_types" ----------------------------
INSERT INTO `content_types`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '1', 'Scored', '2018-03-18 15:09:29', '2018-03-18 15:09:29' );
-- ---------------------------------------------------------


-- Dump data of "migrations" -------------------------------
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '1', '2014_10_12_000000_create_users_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '2', '2014_10_12_100000_create_password_resets_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '3', '2018_03_18_114407_create_base_tables', '1' );
-- ---------------------------------------------------------


-- Dump data of "password_resets" --------------------------
-- ---------------------------------------------------------


-- Dump data of "periods" ----------------------------------
INSERT INTO `periods`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '1', '2016_11 (Nov)', '2018-03-18 14:59:14', '2018-03-18 14:59:14' );
INSERT INTO `periods`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '2', '2016_12 (Dec)', '2018-03-18 15:05:12', '2018-03-18 15:05:12' );
-- ---------------------------------------------------------


-- Dump data of "posts" ------------------------------------
INSERT INTO `posts`(`id`,`url`,`reach`,`impressions`,`clicks`,`likes`,`shares`,`group_in`,`site_visits`,`purchase_intentions`,`transactions`,`content_type_id`,`period_id`,`purchase_model_id`,`social_id`,`created_at`,`updated_at`,`comments`) VALUES ( '1', 'Cupiditate a vero qui nihil similique veniam dolorem harum velit commodo quod', '59', '88', '74', '45', '4', '98', '9', '24', '36', '1', '2', '2', NULL, '2018-03-19 22:34:11', '2018-03-19 22:34:11', '0' );
INSERT INTO `posts`(`id`,`url`,`reach`,`impressions`,`clicks`,`likes`,`shares`,`group_in`,`site_visits`,`purchase_intentions`,`transactions`,`content_type_id`,`period_id`,`purchase_model_id`,`social_id`,`created_at`,`updated_at`,`comments`) VALUES ( '2', 'Esse ullam similique velit repudiandae perferendis consequuntur cupiditate in dolor', '51', '50', '77', '74', '23', '46', '53', '71', '75', '1', '2', '2', NULL, '2018-03-20 08:40:48', '2018-03-20 08:40:48', '0' );
-- ---------------------------------------------------------


-- Dump data of "purchase_models" --------------------------
INSERT INTO `purchase_models`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '1', 'CPM', '2018-03-19 01:20:36', '2018-03-19 01:20:36' );
INSERT INTO `purchase_models`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '2', 'CPC', '2018-03-19 01:20:51', '2018-03-19 01:20:51' );
-- ---------------------------------------------------------


-- Dump data of "socials" ----------------------------------
-- ---------------------------------------------------------


-- Dump data of "users" ------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "password_resets_email_index" --------------
-- CREATE INDEX "password_resets_email_index" ------------------
CREATE INDEX `password_resets_email_index` USING BTREE ON `password_resets`( `email` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "posts_content_type_id_foreign" ------------
-- CREATE INDEX "posts_content_type_id_foreign" ----------------
CREATE INDEX `posts_content_type_id_foreign` USING BTREE ON `posts`( `content_type_id` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "posts_period_id_foreign" ------------------
-- CREATE INDEX "posts_period_id_foreign" ----------------------
CREATE INDEX `posts_period_id_foreign` USING BTREE ON `posts`( `period_id` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "posts_purchase_model_id_foreign" ----------
-- CREATE INDEX "posts_purchase_model_id_foreign" --------------
CREATE INDEX `posts_purchase_model_id_foreign` USING BTREE ON `posts`( `purchase_model_id` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "posts_social_id_foreign" ------------------
-- CREATE INDEX "posts_social_id_foreign" ----------------------
CREATE INDEX `posts_social_id_foreign` USING BTREE ON `posts`( `social_id` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "posts_content_type_id_foreign" -------------
-- CREATE LINK "posts_content_type_id_foreign" -----------------
ALTER TABLE `posts`
	ADD CONSTRAINT `posts_content_type_id_foreign` FOREIGN KEY ( `content_type_id` )
	REFERENCES `content_types`( `id` )
	ON DELETE Set NULL
	ON UPDATE Restrict;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "posts_period_id_foreign" -------------------
-- CREATE LINK "posts_period_id_foreign" -----------------------
ALTER TABLE `posts`
	ADD CONSTRAINT `posts_period_id_foreign` FOREIGN KEY ( `period_id` )
	REFERENCES `periods`( `id` )
	ON DELETE Set NULL
	ON UPDATE Restrict;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "posts_purchase_model_id_foreign" -----------
-- CREATE LINK "posts_purchase_model_id_foreign" ---------------
ALTER TABLE `posts`
	ADD CONSTRAINT `posts_purchase_model_id_foreign` FOREIGN KEY ( `purchase_model_id` )
	REFERENCES `purchase_models`( `id` )
	ON DELETE Set NULL
	ON UPDATE Restrict;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE LINK "posts_social_id_foreign" -------------------
-- CREATE LINK "posts_social_id_foreign" -----------------------
ALTER TABLE `posts`
	ADD CONSTRAINT `posts_social_id_foreign` FOREIGN KEY ( `social_id` )
	REFERENCES `socials`( `id` )
	ON DELETE Set NULL
	ON UPDATE Restrict;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


