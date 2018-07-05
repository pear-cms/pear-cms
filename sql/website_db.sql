CREATE DATABASE IF NOT EXISTS `website` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `haomarush_website`;
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
