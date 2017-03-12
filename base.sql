-- Adminer 3.3.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE `annonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(125) COLLATE utf8_unicode_ci DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CB988C6FBCF5E72D` (`categorie_id`),
  KEY `IDX_CB988C6FFB88E14F` (`utilisateur_id`),
  CONSTRAINT `FK_CB988C6FBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `FK_CB988C6FFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `annonces` (`id`, `categorie_id`, `titre`, `Description`, `image`, `utilisateur_id`) VALUES
(10,	46,	'Titre annonce 1',	'Une rapide description de l\'annonce numéro 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor vitae ante luctus interdum sit amet eu sapien.',	'',	35),
(11,	47,	'Titre annonce 2',	'Une rapide description de l\'annonce numéro 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor vitae ante luctus interdum sit amet eu sapien.',	'',	36),
(12,	48,	'Titre annonce 3',	'Une rapide description de l\'annonce numéro 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor vitae ante luctus interdum sit amet eu sapien.',	'',	37),
(13,	49,	'Titre annonce 4',	'Une rapide description de l\'annonce numéro 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor vitae ante luctus interdum sit amet eu sapien.',	'',	38),
(14,	50,	'Titre annonce 5',	'Une rapide description de l\'annonce numéro 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor vitae ante luctus interdum sit amet eu sapien.',	'',	39),
(47,	48,	'Une nouvelle annonce',	'Ma nouvelle annonce !!!',	NULL,	36),
(50,	48,	'Test d\'une nouvelle annonce',	'This is a template that is great for small businesses. It doesn\'t have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!',	NULL,	36),
(51,	49,	'Nouvelle annonce',	'Avec redirection sur celle-ci',	NULL,	36);

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categories` (`id`, `nom`) VALUES
(46,	'Category 1'),
(47,	'Dapibus ac facilisis in'),
(48,	'Morbi leo risus'),
(49,	'Porta ac consectetur ac'),
(50,	'Vestibulum at eros');

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_497B315E92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_497B315EA0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_497B315EC05FB297` (`confirmation_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `utilisateurs` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(35,	'benjamin',	'benjamin',	'benjamin@gmail.com',	'benjamin@gmail.com',	1,	NULL,	'$2y$13$8fLomlxa7KUSnJ9Sai5OtufvcBTw/8BddK2xCQtacsU1Nu0U9NCUK',	NULL,	NULL,	NULL,	'a:0:{}'),
(36,	'mathilde',	'mathilde',	'mathilde@gmail.com',	'mathilde@gmail.com',	1,	NULL,	'$2y$13$wWU2o4EldgpYxQgXWrjfa.FtgvYbfsAxDObRY5yld/aQ12xT3pnKC',	'2017-03-12 04:07:58',	NULL,	NULL,	'a:0:{}'),
(37,	'pauline',	'pauline',	'pauline@gmail.com',	'pauline@gmail.com',	1,	NULL,	'$2y$13$aLCarzpDyjhB/U1ewVVeXebOLgzM9UtiI/1btnPnfPQeQCjyOB7rq',	NULL,	NULL,	NULL,	'a:0:{}'),
(38,	'tiffany',	'tiffany',	'tiffany@gmail.com',	'tiffany@gmail.com',	1,	NULL,	'$2y$13$Y21wwhdNihixS4LplLl4de79ghPm0pFpYlaPBALMSU5zdaUdTmqxO',	NULL,	NULL,	NULL,	'a:0:{}'),
(39,	'dominique',	'dominique',	'dominique@gmail.com',	'dominique@gmail.com',	1,	NULL,	'$2y$13$wzb9kfLCVpjj7pZNWrBGYO5zq0sMOqbViLKJ44Z66LAoBvWfW1Q1G',	NULL,	NULL,	NULL,	'a:0:{}');

-- 2017-03-12 17:06:40
