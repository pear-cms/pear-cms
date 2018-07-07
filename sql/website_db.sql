CREATE DATABASE IF NOT EXISTS `website` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `website`;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `settings_name` varchar(30) NOT NULL,
  `settings_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

CREATE TABLE `news` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(50) NOT NULL DEFAULT 'Title',
	`description` VARCHAR(255) NOT NULL DEFAULT 'Description',
	`content` VARCHAR(65000) NOT NULL DEFAULT 'Content',
	`picture` VARCHAR(50) NOT NULL DEFAULT 'news_image_1.jpg',
	`date` INT(20) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
)
ENGINE=InnoDB
AUTO_INCREMENT=1
;


