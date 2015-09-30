CREATE TABLE IF NOT EXISTS `redirect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `to_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `from_url` (`from_url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

INSERT INTO `redirect` (`id`, `from_url`, `to_url`, `active`) VALUES
(1, 'http://yourdomain.com/poop', 'http://google.com/', 1);