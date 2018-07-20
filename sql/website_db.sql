CREATE DATABASE IF NOT EXISTS `website` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `website`;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `settings_name` varchar(30) NOT NULL,
  `settings_value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `news` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(50) NOT NULL DEFAULT 'News title',
	`description` VARCHAR(255) NOT NULL DEFAULT 'News description',
	`content` VARCHAR(65000) NOT NULL DEFAULT 'News body content',
	`image` VARCHAR(50) NOT NULL DEFAULT 'news_image_1.jpg',
	`author` VARCHAR(30) NOT NULL ,
	`timestamp` INT(20) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`))
  ENGINE=InnoDB;

CREATE TABLE `news_comments` (
  `id` INT(10) NOT NULL AUTO_INCREMENT ,
  `newsId` INT(10) NOT NULL ,
  `comment` VARCHAR(250) NOT NULL ,
  `author` VARCHAR(30) NOT NULL ,
  `is_gm` INT(10) NOT NULL ,
  `timestamp` INT(20) NOT NULL ,
   PRIMARY KEY (`id`))
 ENGINE=InnoDB;

 CREATE TABLE `error_logs` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `message` VARCHAR(200) NOT NULL COMMENT 'Error message provided.' ,
    `username` VARCHAR(30) NOT NULL COMMENT 'Username of the user who faced an error.' ,
    `ip` VARCHAR(30) NOT NULL COMMENT 'IP of the aforementioned user.' ,
    `date` VARCHAR(30) NOT NULL COMMENT 'Date of occurrence.' ,
    PRIMARY KEY (`id`))
 ENGINE = InnoDB;
