
 
CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` float NOT NULL,
  `long` float NOT NULL,
  `creator` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fileurl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



INSERT INTO `markers` (`id`, `lat`, `long`, `creator`, `name`, `fileurl`) VALUES
(1, 48.8566, 2.35222, 'lavaeagle', 'paris', '.html');


