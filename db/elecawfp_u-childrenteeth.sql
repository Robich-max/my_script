-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2020 at 02:37 PM
-- Server version: 10.3.25-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elecawfp_u-childrenteeth`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `dateat` datetime DEFAULT NULL,
  `target` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `dateat`, `target`) VALUES
(15, '2020-08-21 13:01:06', '500'),
(16, '2020-08-22 16:19:35', '0'),
(17, '2020-08-23 10:34:07', '1000'),
(18, '2020-05-23 10:34:07', '1500'),
(19, '2020-08-27 07:31:18', '1500'),
(20, '2020-08-28 11:48:11', '400'),
(21, '2020-09-07 12:34:52', '200'),
(22, '2020-09-08 12:33:19', '250'),
(23, '2020-09-09 10:27:43', '500'),
(24, '2020-09-10 10:29:28', '600'),
(25, '2020-11-20 03:10:11', ''),
(26, '2020-11-21 16:47:41', '500'),
(27, '2020-11-23 17:33:59', '1000'),
(28, '2020-11-24 15:24:37', ''),
(29, '2020-11-30 16:21:26', '5000'),
(30, '2020-12-02 11:06:43', '800');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'lhbib95@gmail.com', '08e5e51eab755ed1e8a324116e01dd1d84838d7e');

-- --------------------------------------------------------

--
-- Table structure for table `bannerfive`
--

CREATE TABLE `bannerfive` (
  `id` int(11) NOT NULL,
  `desc` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `two_img` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `bt_text` text DEFAULT NULL,
  `bt_text_color` text DEFAULT NULL,
  `bt_text_hv_color` text DEFAULT NULL,
  `bt_color` text DEFAULT NULL,
  `bt_hv_color` text DEFAULT NULL,
  `banner_five_color` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bannerfive`
--

INSERT INTO `bannerfive` (`id`, `desc`, `img`, `two_img`, `video`, `active_status`, `test`, `serial`, `url`, `bt_text`, `bt_text_color`, `bt_text_hv_color`, `bt_color`, `bt_hv_color`, `banner_five_color`) VALUES
(3, '<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; color: #000000;\"><span style=\"color: #f1949f; font-size: 18pt;\"><strong><span style=\"font-family: HelveticaNeue; padding: 0cm; border: 1pt none windowtext;\">JUSTE POUR LES ENFANTS..</span></strong></span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; text-align: center;\"><span style=\"font-family: HelveticaNeue; color: black; padding: 0cm; background-position: initial; background-repeat: initial; background-color: white; border: 1pt none windowtext;\">Apr&egrave;s avoir parl&eacute; &agrave; de nombreux parents, nous avons identifi&eacute; un probl&egrave;me commun... La lutte qu\'ils m&egrave;nent avec le temps de brossage de leur enfant !</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; text-align: center;\"><span style=\"font-family: HelveticaNeue; color: black; padding: 0cm; background-position: initial; background-repeat: initial; background-color: white; border: 1pt none windowtext;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; text-align: center;\"><span style=\"font-family: HelveticaNeue; color: black; padding: 0cm; background-position: initial; background-repeat: initial; background-color: white; border: 1pt none windowtext;\">Les statistiques le montrent :</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; text-align: center;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; text-align: center;\"><span style=\"font-family: HelveticaNeue; color: black; padding: 0cm; background-position: initial; background-repeat: initial; background-color: white; border: 1pt none windowtext;\"><span style=\"color: #626262; background-color: #ffffff;\"><span style=\"color: #f1949f;\">&clubs;</span> 25.% des enfants de 3 &agrave; 7 ans ne se brossent les dents qu\'une fois par jour</span></span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; text-align: center;\"><span style=\"font-family: HelveticaNeue; color: black; padding: 0cm; background-position: initial; background-repeat: initial; background-color: white; border: 1pt none windowtext;\"><span style=\"color: #626262; background-color: #ffffff;\"><span style=\"background-color: #ffffff; color: #f1949f;\">&clubs; </span>34.2% des enfants de 8 &agrave; 14 ans ne se brossent les dents qu\'une fois par jour</span></span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; text-align: center;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; text-align: center;\"><span style=\"font-family: HelveticaNeue; color: black; padding: 0cm; background-position: initial; background-repeat: initial; background-color: white; border: 1pt none windowtext;\">La brosse &agrave; dents pour enfants&nbsp;<span style=\"color: #626262; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">CHILDTEETH</span>&nbsp;est con&ccedil;ue pour &eacute;liminer toutes les bact&eacute;ries en 30 secondes seulement ! Offrir aux enfants une brosse &agrave; dents intelligente, amusante et efficace, qui leur donnera envie de se brosser les dents matin et soir !</span></p>', 'c20fddd0c78d0ce663a19026fb59dccf.jpg', NULL, '', 1, '', 3, 'https://u-childrenteeth.com/15', 'DECOUVRIR', '#ffffff', '#e1dfdf', '#f1949f', '#fed9e0', '#ffffff'),
(4, '<h2 style=\"font-size: 18pt; font-family: \'Times New Roman\', serif; color: #000000; text-align: center; background-position: initial; background-repeat: initial; background-color: white;\" align=\"center\">&nbsp;</h2>\r\n<h2 style=\"font-size: 18pt; font-family: \'Times New Roman\', serif; color: #000000; text-align: center; background-position: initial; background-repeat: initial; background-color: white;\" align=\"center\"><span style=\"font-size: 18pt; font-family: HelveticaNeue; color: #f1949f;\">3 FOIS PLUS EFFICACE QU&rsquo;UN BROSSAGE MANUEL</span></h2>\r\n<p style=\"text-align: center;\"><span style=\"color: #000000; font-family: \'Josefin Sans\', HelveticaNeue, \'Helvetica Neue\', sans-serif; font-size: 16px; background-color: #ffffff;\">Les ultrasons d&eacute;logent les bact&eacute;ries et la plaque dentaire accumul&eacute;e au fil de la journ&eacute;e. Les poils en silicone assurent un&nbsp;</span><span style=\"color: #000000; font-family: \'Josefin Sans\', HelveticaNeue, \'Helvetica Neue\', sans-serif; font-size: 16px; background-color: #ffffff;\">brossage &agrave; 360&deg; sans agresser les gencives de vos enfants </span><span style=\"color: #000000; font-family: \'Josefin Sans\', HelveticaNeue, \'Helvetica Neue\', sans-serif; font-size: 16px; background-color: #ffffff;\">, et entre les dents pour assurer une hygi&egrave;ne optimale.&nbsp;</span></p>', '4f370597756862dcf46eb6955c09e4fc.jpg', '2eb766900a2f5e33407859fd8d3211fd.jpg', '', 1, '', 2, 'https://u-childrenteeth.com/15', 'DECOUVRIR', '#ffffff', '#ffffff', '#f1949f', '#fed9e0', '#ffffff'),
(5, '<p class=\"MsoNormal\" style=\"font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; text-align: center; background-position: initial; background-repeat: initial; background-color: white;\" align=\"center\"><span style=\"color: #f1949f; font-size: 18pt;\"><strong><span style=\"font-family: HelveticaNeue;\">CHARGEMENT SANS FIL !</span></strong></span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; text-align: center;\"><span style=\"font-family: HelveticaNeue; color: black; padding: 0cm; background-position: initial; background-repeat: initial; background-color: white; border: 1pt none windowtext;\">Chargement sans fil et conception portable, chargement de 3 heures sur 1 semaine de charge &agrave; vie. Rappel de batterie faible. arr&ecirc;t automatique apr&egrave;s une charge compl&egrave;te, compatible avec n\'importe quelle source d\'alimentation. Brosse &agrave; dents &eacute;lectrique pratique &agrave; utiliser &agrave; la maison ou en voyage.</span></p>', '58f56a9b05d1da0a129fc55d12ba8a99.jpg', NULL, '', 1, '', 1, 'https://u-childrenteeth.com/15', 'DECOUVRIR', '#ffffff', '#ffffff', '#f1949f', '#fed9e0', '#ffffff');

-- --------------------------------------------------------

--
-- Table structure for table `bannerfour`
--

CREATE TABLE `bannerfour` (
  `id` int(11) NOT NULL,
  `img` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `icon_one` text DEFAULT NULL,
  `icon_two` text DEFAULT NULL,
  `icon_three` text DEFAULT NULL,
  `icon_one_text` text DEFAULT NULL,
  `icon_two_text` text DEFAULT NULL,
  `icon_three_text` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bannerfour`
--

INSERT INTO `bannerfour` (`id`, `img`, `desc`, `icon_one`, `icon_two`, `icon_three`, `icon_one_text`, `icon_two_text`, `icon_three_text`, `active_status`) VALUES
(1, '62b30dd6a92830c1ccd0ff3bee131aba.jpg', '<p></p><div style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 1rem;\"><b style=\"\"><font color=\"#f7f7f7\">Un grand volume d\'air avec un</font></b></span></div><div style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 1rem;\"><b><font color=\"#f7f7f7\">contrôle de température intelligent</font></b></span></div><div style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 1rem;\"><b style=\"\"><font color=\"#f7f7f7\">Sèche rapidement en protégeant le cheveu</font></b></span></div><p></p>\r\n', 'list-01', 'list-02', 'list-03', 'Ventilateur à haute vitesse\r\n?2?', 'Flux d\'air rapide\r\n?2?', 'Contrôle intelligent de la température avec fonction', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bannerone`
--

CREATE TABLE `bannerone` (
  `id` int(11) NOT NULL,
  `img` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `icon_one` text DEFAULT NULL,
  `icon_two` text DEFAULT NULL,
  `icon_three` text DEFAULT NULL,
  `icon_one_text` text DEFAULT NULL,
  `icon_two_text` text DEFAULT NULL,
  `icon_three_text` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL,
  `icon_one_text_two` text DEFAULT NULL,
  `icon_one_text_three` text DEFAULT NULL,
  `icon_two_text_two` text DEFAULT NULL,
  `icon_two_text_three` text DEFAULT NULL,
  `icon_three_text_two` text DEFAULT NULL,
  `icon_three_text_three` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bannerone`
--

INSERT INTO `bannerone` (`id`, `img`, `desc`, `icon_one`, `icon_two`, `icon_three`, `icon_one_text`, `icon_two_text`, `icon_three_text`, `active_status`, `test`, `icon_one_text_two`, `icon_one_text_three`, `icon_two_text_two`, `icon_two_text_three`, `icon_three_text_two`, `icon_three_text_three`) VALUES
(1, '84efb5a074ace098fd9fa3ebc2513165.jpg', '<p><span style=\"color: #ffffff;\">Ras-le-bol des bouloches sur les pulls. Vous souhaitez acheter un accessoire anti-bouloche, notre electrclint sera la solution id&eacute;al pour redonner vie &agrave; vos v&ecirc;tements???</span></p>', '7662b60f2bd292fdaf5d18660f344d04.png', 'a4b2a47303c6c3c1fd9aa7c2afe1adb9.png', '2dcd9d579b9d6467c8c1e3fbb655d5a0.png', 'Aspire toutes les saletés ', 'Améliore la durée de vie', 'Facile à transporter', 0, '', 'Même le plus coriaces', '', 'de tous vos vêtements ', '', 'partout où vous allez', '');

-- --------------------------------------------------------

--
-- Table structure for table `bannerthree`
--

CREATE TABLE `bannerthree` (
  `id` int(11) NOT NULL,
  `desc` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bannerthree`
--

INSERT INTO `bannerthree` (`id`, `desc`, `img`, `video`, `active_status`, `test`) VALUES
(1, '<h3 class=\"title-h3\" style=\"margin-right: 0px; margin-bottom: 0.3em; margin-left: 0px; padding: 0px; font-family: Montserrat-Regular, sans-serif; line-height: 1.3; font-size: 0.42em; opacity: 0.8; text-align: center;\"><span style=\"color: #efefef;\">Rapide et Efficace<strong><br style=\"margin: 0px; padding: 0px;\" /></strong></span></h3>\r\n<h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 1.7; font-family: Montserrat-Regular; opacity: 0.7; text-align: center;\"><span style=\"color: #efefef;\">La grande surface de la lame permet de redonner un aspect neuf &agrave; vos habits rapidement et facilement, rasoir tous textiles, pour des pulls, &eacute;charpes couvertures comme neufs</span></h3>\r\n<div id=\"dropDownSelect1\" style=\"margin: 0px; padding: 0px;\"></div>\r\n<div id=\"dropDownSelect2\" style=\"margin: 0px; padding: 0px;\"></div>', 'dc2b1bb668cf50e47ab7b5afd7080753.png', 'fcf569f25c5b829fcbb7cc154f4099ac.mp4', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `bannertwo`
--

CREATE TABLE `bannertwo` (
  `id` int(11) NOT NULL,
  `desc` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bannertwo`
--

INSERT INTO `bannertwo` (`id`, `desc`, `img`, `video`, `active_status`, `test`) VALUES
(1, '<h3 class=\"title-h3\" style=\"margin-right: 0px; margin-bottom: 0.3em; margin-left: 0px; padding: 0px; font-family: Montserrat-Regular, sans-serif; line-height: 1.3; font-size: 0.42em; text-align: center;\"><font color=\"#ffffff\">DURABLE & STRONG SUCTION</font></h3><p class=\"mj-description\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 1.7; font-family: Montserrat-Regular; opacity: 0.8; text-align: center;\"><span style=\"font-size: 14px;\" helvetica=\"\" neue\";=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" left;\"=\"\"><font color=\"#ffffff\">Les 3 lames d\'alliage rotatives lavables offrent une netteté, une durabilité et des résistances à la rouille, éliminent facilement les bavures ennuyeuses et les pilules de tissu. Il génère une forte aspiration lorsque les lames tournent, ce qui entraîne puissamment tous les parasites indésirables dans le récipient.</font></span><br></p>', '', 'adf0411b68b912b5f70ce6b39f007031.mp4', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `barslids`
--

CREATE TABLE `barslids` (
  `id` int(11) NOT NULL,
  `desc` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barslids`
--

INSERT INTO `barslids` (`id`, `desc`, `img`, `serial`, `active_status`, `position`, `test`) VALUES
(1, '<h4 class=\"h4\" style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Oswald, serif; font-size: 18px; text-align: center;\"><span style=\"color: #000000;\"><span style=\"font-weight: bold;\">Imp&eacute;rmiable &agrave; l\'eau ( waterproof)</span></span></h4>\r\n<h4 class=\"h4\" style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Oswald, serif; font-size: 18px; text-align: center;\"><span style=\"color: #111111; font-family: \'Amazon Ember\', Arial, sans-serif; font-size: 13.3333px; text-align: left; background-color: #ffffff;\">Le lav&eacute; autant de fois que vous voulais</span></h4>\r\n<h4 class=\"h4\" style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Oswald, serif; font-size: 18px; text-align: center;\">&nbsp;</h4>\r\n<p>&nbsp;</p>\r\n<h4 class=\"h4\" style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Oswald, serif; font-size: 18px; text-align: center;\">&nbsp;</h4>\r\n<div style=\"text-align: center;\">&nbsp;</div>\r\n<div style=\"text-align: center;\"><span style=\"color: #424242; font-family: Roboto;\"><span style=\"font-size: 12px; white-space: pre-wrap;\"><strong>&nbsp;</strong></span></span></div>', '49e1cf6828106b331a19907c04f9da03.png', 1, 1, 1, NULL),
(3, '<h4 class=\"h4\" style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Oswald, serif; font-size: 18px; text-align: center;\"><span style=\"color: #000000;\"><strong>98,7% la bactterie &eacute;limin&eacute;e</strong></span></h4>\r\n<h6 style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: center;\"><span style=\"text-align: left; white-space: pre-wrap;\"><span style=\"color: #424242; font-family: Roboto;\"><span style=\"font-size: 12px;\">Rapidement et efficacement </span></span></span></h6>', 'c7f096e93c0843788ab1d04668f081b2.png', 2, 1, 1, NULL),
(5, '<h4 class=\"h4\" style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Oswald, serif; font-size: 18px; text-align: center;\"><span style=\"color: #000000;\"><strong>Brossage &agrave; 360 degr&eacute;</strong></span></h4>\r\n<h6 style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Oswald, serif; text-align: center;\"><span style=\"font-family: Roboto; text-align: left; white-space: pre-wrap;\"><span style=\"font-size: 11px;\"><span style=\"color: #424242;\"> Con&ccedil;u pour atteindre tous les surfaces</span></span></span></h6>', '59597ab615b1836eb396390050667f5c.png', 1, 1, 1, NULL),
(6, '<h4 class=\"h4\" style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Oswald, serif; font-size: 18px; text-align: center;\"><span style=\"color: #000000;\"><span style=\"font-weight: bold;\">30 seconds pour nettoyer</span></span></h4>\r\n<div style=\"text-align: center;\"><span style=\"color: #111111; font-family: \'Amazon Ember\', Arial, sans-serif; text-align: left; background-color: #ffffff; font-size: 10pt;\">un nettoyage en profondeur</span></div>\r\n<div style=\"text-align: center;\"><span style=\"color: #424242; font-family: Roboto;\"><span style=\"font-size: 12px; white-space: pre-wrap;\"><strong>&nbsp;</strong></span></span></div>', 'c18f7bb7b7406358bf848262af1ead10.png', 0, 1, 1, NULL),
(14, '<div class=\"text-center\">\r\n<h4 class=\"h4\" style=\"box-sizing: border-box; word-break: break-word; color: #000000; margin: 0px 0px 20px; text-align: center;\"><span style=\"font-family: Roboto; font-size: 18px;\"><strong>Support fran&ccedil;ais</strong></span></h4>\r\n<h6 style=\"text-align: center;\"><span style=\"--main-font: \'Slabo 27px\', serif; --responsive: calc((var(--min-font) * 1px) + (var(--max-font) - var(--min-font)) * ((100vw - 420px) / (1200 - 420))); color: #000000; background-color: #ffffff; font-family: Roboto; font-size: 11px;\">Une &eacute;quipe est d&eacute;di&eacute;e au support<br style=\"--main-font: \'Slabo 27px\', serif; --responsive: calc((var(--min-font) * 1px) + (var(--max-font) - var(--min-font)) * ((100vw - 420px) / (1200 - 420)));\" /></span><span style=\"--main-font: \'Slabo 27px\', serif; --responsive: calc((var(--min-font) * 1px) + (var(--max-font) - var(--min-font)) * ((100vw - 420px) / (1200 - 420))); color: #000000; background-color: #ffffff; font-family: Roboto; font-size: 11px;\">pour r&eacute;pondre &agrave; toutes vos questions</span></h6>\r\n<h6 style=\"word-break: break-word; text-align: center;\">&nbsp;</h6>\r\n</div>', '704c85f56258c378071f11a520d353b8.png', 0, 1, 0, NULL),
(11, '<div class=\"text-center\">\r\n<h4 class=\"h4\" style=\"box-sizing: border-box; word-break: break-word; color: #000000; margin: 0px 0px 20px; text-align: center;\"><span style=\"font-family: Roboto; font-size: 18px;\"><span style=\"font-weight: bold;\">Livraison gratuite</span></span></h4>\r\n<div class=\"content_general hide_mobile\">\r\n<h6 style=\"word-break: break-word; text-align: center;\"><span style=\"color: #000000;\"><span style=\"font-family: Roboto; font-size: 11px;\">Votre commande sera livr&eacute;e<br /></span><span style=\"font-family: Roboto; font-size: 11px;\">gratuitement &agrave; votre</span></span></h6>\r\n<h6 style=\"word-break: break-word;\">&nbsp;</h6>\r\n</div>\r\n</div>', '91ba24e678f0bea81f1dd646c1731945.png', 0, 1, 0, NULL),
(12, '<div class=\"text-center\">\r\n<h4 class=\"h4\" style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: center;\"><span style=\"font-family: Roboto; font-size: 18px; color: #000000;\"><strong>Paiement S&eacute;curis&eacute;</strong></span></h4>\r\n</div>\r\n<div>\r\n<h6 style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 8pt; color: #000000;\">Nous confiant la gestion de nos paiements</span><br /><span style=\"font-family: arial, helvetica, sans-serif; font-size: 8pt; color: #000000;\">en ligne &agrave; Stripe &amp; Paypal 100% S&eacute;curis&eacute;s.</span></h6>\r\n</div>', '99c3d0ab9273088a6ebb7677505b2fbe.png', 0, 1, 0, NULL),
(13, '<div class=\"text-center\">\r\n<h4 class=\"h4\" style=\"word-break: break-word; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: center;\"><span style=\"font-family: Roboto; font-size: 18px; color: #000000;\"><strong>Retours</strong></span></h4>\r\n</div>\r\n<div class=\"content_general hide_mobile\">\r\n<h6 style=\"text-align: center;\"><span style=\"color: #000000;\"><span style=\"font-size: 11px; font-family: Roboto;\">Nous proposons le Satisfait o&ugrave; Rembours&eacute;</span><br /><span style=\"font-family: Roboto; font-size: 11px;\">pendant 14 jours&nbsp;apr&egrave;s r&eacute;ception des articles !</span></span></h6>\r\n</div>', 'bce6aed1a8d97236d3181cdb9caa5fe1.png', 0, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(400) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `page_title` text DEFAULT NULL,
  `page_desc` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `banner_img` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `menu_id`, `title`, `desc`, `serial`, `active_status`, `test`, `slug`, `page_title`, `page_desc`, `img`, `banner_img`, `created_at`) VALUES
(14, 6, '25 Years of Experience in Feed Manufacturing', '<p>25 Years of Experience in Feed Manufacturing25&nbsp; Years of Experience in Feed Manufacturing25 Years of Experience in Feed Manufacturing<br></p>', 1, 1, NULL, '25-years-of-experience-in-feed-manufacturing', '25 Years of Experience in Feed Manufacturing', NULL, '16c29287b806e882c6c84070a48024f4.jpg', '06cb44436aa29067fc3e018900762710.jpg', NULL),
(15, NULL, '25 Years of Experience in Feed Manufacturing', '<p>25 Years of Experience in Feed Manufacturing<br></p>', 1, 1, NULL, '25-years-of-experience-in-feed-manufacturing', '25 Years of Experience in Feed Manufacturing', '', '904e895e020ae553f2916db176aa469d.jpg', '005c79fcc8c79f683b893779349f8e51.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `img` varchar(150) NOT NULL,
  `position` int(11) NOT NULL,
  `page_title` text DEFAULT NULL,
  `page_desc` text DEFAULT NULL,
  `page_url` text NOT NULL,
  `banner_img` text DEFAULT NULL,
  `test` text DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `subcat` int(11) DEFAULT NULL,
  `footer` int(11) DEFAULT NULL,
  `footer_column` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `checkout_visit`
--

CREATE TABLE `checkout_visit` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `visit` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout_visit`
--

INSERT INTO `checkout_visit` (`id`, `date`, `visit`) VALUES
(704, '2020-12-01 21:55:41', '1'),
(705, '2020-12-02 21:27:36', '1'),
(706, '2020-12-03 13:27:30', '1'),
(707, '2020-12-04 00:55:36', '1'),
(708, '2020-12-04 08:19:40', '1'),
(709, '2020-12-04 15:06:59', '1'),
(710, '2020-12-04 16:48:21', '1'),
(711, '2020-12-05 04:00:30', '1'),
(712, '2020-12-05 07:28:13', '1'),
(713, '2020-12-05 10:05:51', '1'),
(714, '2020-12-05 10:20:14', '1'),
(715, '2020-12-05 10:22:36', '1'),
(716, '2020-12-05 12:31:34', '1'),
(717, '2020-12-05 13:11:22', '1'),
(718, '2020-12-05 13:13:35', '1'),
(719, '2020-12-05 13:15:01', '1'),
(720, '2020-12-05 13:15:13', '1'),
(721, '2020-12-05 13:15:40', '1'),
(722, '2020-12-05 13:21:18', '1'),
(723, '2020-12-05 13:21:27', '1'),
(724, '2020-12-05 13:22:34', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(400) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `page_title` varchar(400) DEFAULT NULL,
  `page_desc` varchar(400) DEFAULT NULL,
  `slug` varchar(400) DEFAULT NULL,
  `test` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `menu_id`, `title`, `desc`, `active_status`, `page_title`, `page_desc`, `slug`, `test`) VALUES
(1, 5, 'Contacter-Nous', '<p style=\"margin-top: 0px; text-rendering: optimizelegibility; word-break: break-word; color: #000000; font-family: Poppins, sans-serif; font-size: 16px;\">Service Client Childrenteeth</p>\r\n<p style=\"margin-top: 0px; text-rendering: optimizelegibility; word-break: break-word; color: #000000; font-family: Poppins, sans-serif; font-size: 16px;\">Nous souhaitons que chacun de nos clients soit satisfait du service prodigue? par&nbsp;<span style=\"color: #000000;\">Childrenteeth</span>.</p>\r\n<p style=\"margin-top: 0px; text-rendering: optimizelegibility; word-break: break-word; color: #000000; font-family: Poppins, sans-serif; font-size: 16px;\">Si vous avez une question concernant votre commande, l&rsquo;installation ou tout autre type de demande, nous sommes la? pour vous aider.</p>\r\n<p style=\"margin-top: 0px; text-rendering: optimizelegibility; word-break: break-word; color: #000000; font-family: Poppins, sans-serif; font-size: 16px;\">N&rsquo;he?sitez pas a? nous contacter via le formulaire ci-dessous.<br />Nous re?pondons ge?ne?ralement sous 24 &agrave; 48h, mais jamais plus de 2 jours ouvres.</p>\r\n<p style=\"margin-top: 0px; text-rendering: optimizelegibility; word-break: break-word; color: #000000; font-family: Poppins, sans-serif; font-size: 16px;\">Merci pour votre confiance.</p>\r\n<p style=\"margin-top: 0px; text-rendering: optimizelegibility; word-break: break-word; color: #000000; font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p>', 1, 'sa', '', 'contacter-nous', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `pageViews` int(11) NOT NULL,
  `source` varchar(100) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date` varchar(15) NOT NULL,
  `device` varchar(30) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `pageViews`, `source`, `ip`, `date`, `device`, `datetime`) VALUES
(5833, 7798, 'https://u-childrenteeth.com/admin', '86.76.162.33', '1606911141', 'desktop', '2020-11-30 21:54:01'),
(5834, 2007, 'https://u-childrenteeth.com/admin/viewReport', '27.255.50.235', '1606911141', 'desktop', '2020-11-30 20:14:48'),
(5835, 1, 'http://u-childrenteeth.com/', '116.202.113.215', '1606911141', 'desktop', '2020-11-30 21:28:29'),
(5836, 1, '', '52.168.17.88', '1606911141', 'desktop', '2020-11-30 22:22:06'),
(5837, 1, '', '213.159.213.137', '1606911141', 'Unknown', '2020-11-30 22:30:11'),
(5838, 3, '', '206.127.221.136', '1606911141', 'Unknown', '2020-12-02 23:16:12'),
(5839, 1, 'http://u-childrenteeth.com/', '181.215.221.169', '1606911141', 'Unknown', '2020-12-02 23:16:13'),
(5840, 1, 'http://u-childrenteeth.com/', '158.46.219.160', '1606911141', 'Unknown', '2020-12-02 23:16:16'),
(5841, 3, 'http://u-childrenteeth.com/', '52.168.17.88', '1606911141', 'desktop', '2020-12-02 23:35:06'),
(5842, 2, '', '116.202.209.244', '1606911141', 'desktop', '2020-12-03 00:25:14'),
(5843, 1, '', '179.43.171.74', '1606911141', 'desktop', '2020-12-03 03:02:55'),
(5844, 2, 'https://u-childrenteeth.com/', '86.76.162.33', '1606911141', 'desktop', '2020-12-03 04:37:13'),
(5845, 3779, 'https://u-childrenteeth.com/', '86.76.162.33', '1606911141', 'desktop', '2020-12-03 04:37:13'),
(5846, 1, '', '64.71.131.244', '1606911141', 'desktop', '2020-12-03 04:46:15'),
(5847, 6, '', '52.14.147.13', '1606911141', 'desktop', '2020-12-02 05:09:01'),
(5848, 2, 'https://u-childrenteeth.com//15', '81.185.167.179', '1606911141', 'desktop', '2020-12-02 05:43:07'),
(5849, 134, 'https://u-childrenteeth.com//15', '81.185.167.179', '1606911141', 'desktop', '2020-12-02 05:43:07'),
(5850, 2, '', '91.227.68.176', '1606911141', 'desktop', '2020-12-02 05:49:41'),
(5851, 14961, 'https://u-childrenteeth.com/', '46.193.0.131', '1606911141', 'desktop', '2020-12-02 06:05:53'),
(5852, 2748, 'https://u-childrenteeth.com/admin.html', '27.255.50.31', '1606911141', 'desktop', '2020-12-02 07:31:22'),
(5853, 3238, 'https://u-childrenteeth.com/admin.html', '46.119.58.92', '1606911141', 'desktop', '2020-12-02 07:59:38'),
(5854, 2, '', '50.7.93.83', '1606911141', 'desktop', '2020-12-02 08:03:30'),
(5855, 1, '', '35.225.123.24', '1606911141', 'desktop', '2020-12-02 10:47:27'),
(5856, 325, 'https://u-childrenteeth.com//admin/datefilter', '198.16.70.52', '1606911141', 'desktop', '2020-12-02 11:03:01'),
(5857, 170, '', '27.147.203.200', '1606911141', 'desktop', '2020-12-02 11:50:14'),
(5858, 5435, 'https://u-childrenteeth.com/admin.html', '46.119.58.92', '1606863600', 'desktop', '2020-12-02 12:12:59'),
(5859, 4514, 'https://u-childrenteeth.com//admin/datefilter', '27.255.50.31', '1606863600', 'desktop', '2020-12-02 12:13:02'),
(5860, 30284, 'https://u-childrenteeth.com/', '46.193.0.131', '1606863600', 'desktop', '2020-12-02 12:13:03'),
(5861, 2, '', '179.43.171.74', '1606863600', 'desktop', '2020-12-02 12:28:34'),
(5862, 1, '', '181.215.221.169', '1606863600', 'Unknown', '2020-12-02 16:58:52'),
(5863, 1, '', '206.127.221.136', '1606863600', 'Unknown', '2020-12-02 16:58:53'),
(5864, 1, 'http://u-childrenteeth.com/', '89.185.76.3', '1606863600', 'Unknown', '2020-12-02 16:58:53'),
(5865, 1, 'http://u-childrenteeth.com/', '147.78.120.40', '1606863600', 'Unknown', '2020-12-02 16:58:53'),
(5866, 1, '', '54.36.148.243', '1606863600', 'desktop', '2020-12-02 17:00:23'),
(5867, 1, '', '64.71.131.244', '1606863600', 'desktop', '2020-12-02 17:22:28'),
(5868, 16349, 'https://u-childrenteeth.com/home.html', '86.76.162.33', '1606863600', 'desktop', '2020-12-02 17:35:16'),
(5869, 1, '', '64.71.131.244', '1606911141', 'desktop', '2020-12-02 04:46:15'),
(5870, 2, '', '31.13.103.15', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5871, 1, '', '31.13.103.12', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5872, 1, '', '31.13.103.8', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5873, 3, '', '31.13.103.14', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5874, 2, '', '31.13.103.9', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5875, 7, '', '31.13.103.117', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5876, 4, '', '31.13.103.2', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5877, 2, '', '31.13.103.19', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5878, 2, '', '31.13.103.118', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5879, 3, '', '31.13.103.11', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5880, 1, '', '31.13.103.111', '1606863600', 'Unknown', '2020-12-02 20:12:27'),
(5881, 3, '', '31.13.103.18', '1606863600', 'Unknown', '2020-12-02 20:12:28'),
(5882, 4, '', '31.13.103.16', '1606863600', 'Unknown', '2020-12-02 20:12:28'),
(5883, 1, '', '31.13.103.21', '1606863600', 'Unknown', '2020-12-02 20:12:28'),
(5884, 3, '', '31.13.103.17', '1606863600', 'Unknown', '2020-12-02 20:12:28'),
(5885, 2, '', '31.13.103.6', '1606863600', 'Unknown', '2020-12-02 20:12:28'),
(5886, 1, '', '173.252.127.35', '1606863600', 'Unknown', '2020-12-02 20:12:28'),
(5887, 1, '', '31.13.103.24', '1606863600', 'Unknown', '2020-12-02 20:12:28'),
(5888, 2, '', '31.13.103.23', '1606863600', 'Unknown', '2020-12-02 20:12:28'),
(5889, 6, '', '31.13.103.10', '1606863600', 'Unknown', '2020-12-02 20:12:28'),
(5890, 4, '', '31.13.103.119', '1606863600', 'Unknown', '2020-12-02 20:12:28'),
(5891, 6, '', '69.171.251.42', '1606863600', 'desktop', '2020-12-02 20:12:30'),
(5892, 1, '', '173.252.127.6', '1606863600', 'Unknown', '2020-12-02 20:12:34'),
(5893, 2, 'https://u-childrenteeth.com/?fbclid=IwAR0DDqWuMAH4d6AHgOYZ8Hhph2_B9c6SMM041APM1wx_hSISBcehWj2NX44', '69.171.251.13', '1606863600', 'desktop', '2020-12-02 20:12:35'),
(5894, 3, '', '31.13.103.3', '1606863600', 'Unknown', '2020-12-02 20:12:38'),
(5895, 2, '', '31.13.103.5', '1606863600', 'Unknown', '2020-12-02 20:12:38'),
(5896, 1, '', '31.13.103.4', '1606863600', 'Unknown', '2020-12-02 20:12:38'),
(5897, 1, '', '31.13.103.112', '1606863600', 'Unknown', '2020-12-02 20:12:38'),
(5898, 2, '', '31.13.103.20', '1606863600', 'Unknown', '2020-12-02 20:12:39'),
(5899, 1, '', '31.13.103.13', '1606863600', 'Unknown', '2020-12-02 20:12:39'),
(5900, 1, '', '173.252.127.116', '1606863600', 'Unknown', '2020-12-02 20:12:41'),
(5901, 1, '', '173.252.127.117', '1606863600', 'Unknown', '2020-12-02 20:12:41'),
(5902, 5, 'https://u-childrenteeth.com/?fbclid=IwAR0DDqWuMAH4d6AHgOYZ8Hhph2_B9c6SMM041APM1wx_hSISBcehWj2NX44', '69.171.251.16', '1606863600', 'desktop', '2020-12-02 20:12:43'),
(5903, 5, 'https://u-childrenteeth.com/?fbclid=IwAR0DDqWuMAH4d6AHgOYZ8Hhph2_B9c6SMM041APM1wx_hSISBcehWj2NX44', '69.171.251.28', '1606863600', 'desktop', '2020-12-02 20:12:43'),
(5904, 4, 'https://u-childrenteeth.com/?fbclid=IwAR0DDqWuMAH4d6AHgOYZ8Hhph2_B9c6SMM041APM1wx_hSISBcehWj2NX44', '69.171.251.11', '1606863600', 'desktop', '2020-12-02 20:12:48'),
(5905, 1, '', '173.252.87.119', '1606863600', 'desktop', '2020-12-02 20:13:13'),
(5906, 6, '', '66.220.149.23', '1606863600', 'desktop', '2020-12-02 20:13:37'),
(5907, 6, 'https://u-childrenteeth.com/?fbclid=IwAR3gQjEJjCwp0jTKFIqgdzEWTcvsxNn9Svj_tHujNUMxLMusAfiholXhKd4', '66.220.149.118', '1606863600', 'desktop', '2020-12-02 20:13:40'),
(5908, 5, 'https://u-childrenteeth.com/?fbclid=IwAR3gQjEJjCwp0jTKFIqgdzEWTcvsxNn9Svj_tHujNUMxLMusAfiholXhKd4', '66.220.149.14', '1606863600', 'desktop', '2020-12-02 20:13:47'),
(5909, 5, 'https://u-childrenteeth.com/?fbclid=IwAR3gQjEJjCwp0jTKFIqgdzEWTcvsxNn9Svj_tHujNUMxLMusAfiholXhKd4', '66.220.149.3', '1606863600', 'desktop', '2020-12-02 20:13:47'),
(5910, 1, '', '66.220.149.21', '1606863600', 'desktop', '2020-12-02 20:14:11'),
(5911, 6, '', '31.13.115.3', '1606863600', 'desktop', '2020-12-02 20:14:22'),
(5912, 5, 'https://u-childrenteeth.com/?fbclid=IwAR0ECNpkCHGyPbatIQMbUTWDMZ42qQtHmYQPVUw2b5CWR2W12W2jvNUJs3s', '31.13.115.2', '1606863600', 'desktop', '2020-12-02 20:14:30'),
(5913, 1, 'https://u-childrenteeth.com/?fbclid=IwAR0ECNpkCHGyPbatIQMbUTWDMZ42qQtHmYQPVUw2b5CWR2W12W2jvNUJs3s', '31.13.115.14', '1606863600', 'desktop', '2020-12-02 20:14:45'),
(5914, 5, 'https://u-childrenteeth.com/?fbclid=IwAR0ECNpkCHGyPbatIQMbUTWDMZ42qQtHmYQPVUw2b5CWR2W12W2jvNUJs3s', '31.13.115.20', '1606863600', 'desktop', '2020-12-02 20:14:45'),
(5915, 1, 'https://u-childrenteeth.com/?fbclid=IwAR0ECNpkCHGyPbatIQMbUTWDMZ42qQtHmYQPVUw2b5CWR2W12W2jvNUJs3s', '31.13.115.5', '1606863600', 'desktop', '2020-12-02 20:14:45'),
(5916, 4, 'https://u-childrenteeth.com/?fbclid=IwAR0ECNpkCHGyPbatIQMbUTWDMZ42qQtHmYQPVUw2b5CWR2W12W2jvNUJs3s', '31.13.115.1', '1606863600', 'desktop', '2020-12-02 20:14:50'),
(5917, 7, 'https://u-childrenteeth.com/admin/chartId/yearly', '50.7.93.83', '1606863600', 'desktop', '2020-12-02 20:14:51'),
(5918, 1, '', '173.252.111.8', '1606863600', 'desktop', '2020-12-02 20:15:18'),
(5919, 6, '', '66.220.149.32', '1606863600', 'desktop', '2020-12-02 20:30:10'),
(5920, 6, 'https://u-childrenteeth.com/?fbclid=IwAR0N14by9grZHTfIR5L4JWU_Tj-KcgzPhGV0CiVYkIwUodn8Arkg40HceAg', '66.220.149.27', '1606863600', 'desktop', '2020-12-02 20:30:13'),
(5921, 5, 'https://u-childrenteeth.com/?fbclid=IwAR0N14by9grZHTfIR5L4JWU_Tj-KcgzPhGV0CiVYkIwUodn8Arkg40HceAg', '66.220.149.12', '1606863600', 'desktop', '2020-12-02 20:30:20'),
(5922, 5, 'https://u-childrenteeth.com/?fbclid=IwAR0N14by9grZHTfIR5L4JWU_Tj-KcgzPhGV0CiVYkIwUodn8Arkg40HceAg', '66.220.149.20', '1606863600', 'desktop', '2020-12-02 20:30:20'),
(5923, 1, '', '18.184.195.200', '1606863600', 'desktop', '2020-12-02 20:35:51'),
(5924, 1, '', '54.36.148.165', '1606863600', 'desktop', '2020-12-02 20:40:42'),
(5925, 5983, 'https://u-childrenteeth.com//admin/datefilter', '27.255.50.31', '1606863600', 'desktop', '2020-12-03 12:13:02'),
(5926, 2748, 'https://u-childrenteeth.com/admin.html', '27.255.50.31', '1606911141', 'desktop', '2020-12-03 07:31:22'),
(5927, 111, 'www.google.com', '86.76.162.33', '1606942611', 'mobile', '2020-12-03 20:57:53'),
(5928, 1, '', '66.249.79.71', '1606863600', 'robot', '2020-12-02 22:21:21'),
(5929, 1, '', '69.171.249.12', '1606863600', 'Unknown', '2020-12-02 22:56:02'),
(5930, 33194, 'https://u-childrenteeth.com/', '86.76.162.33', '1606950000', 'desktop', '2020-12-02 23:18:02'),
(5931, 498, 'https://u-childrenteeth.com/admin.html', '46.119.58.92', '1606950000', 'desktop', '2020-12-02 23:28:57'),
(5932, 2, '', '181.214.190.196', '1606950000', 'Unknown', '2020-12-02 23:58:10'),
(5933, 3, '', '147.78.120.40', '1606950000', 'Unknown', '2020-12-02 23:58:10'),
(5934, 2, 'http://u-childrenteeth.com/', '89.185.76.3', '1606950000', 'Unknown', '2020-12-02 23:58:10'),
(5935, 1, 'http://u-childrenteeth.com/', '178.171.78.48', '1606950000', 'Unknown', '2020-12-02 23:58:11'),
(5936, 2, '', '54.36.148.165', '1606950000', 'desktop', '2020-12-03 00:17:37'),
(5937, 1, '', '74.120.14.40', '1606950000', 'desktop', '2020-12-03 00:19:29'),
(5938, 1, '', '167.248.133.38', '1606950000', 'desktop', '2020-12-03 00:20:05'),
(5939, 1, '', '162.142.125.53', '1606950000', 'desktop', '2020-12-03 00:20:26'),
(5940, 1, '', '167.248.133.54', '1606950000', 'desktop', '2020-12-03 00:21:48'),
(5941, 1, 'https://u-childrenteeth.com/contact', '66.249.79.75', '1606950000', 'robot', '2020-12-03 01:05:57'),
(5942, 1, 'https://u-childrenteeth.com/contact', '66.249.79.77', '1606950000', 'robot', '2020-12-03 01:05:58'),
(5943, 1, 'https://u-childrenteeth.com/contact', '66.249.79.79', '1606950000', 'robot', '2020-12-03 01:05:58'),
(5944, 1, '', '54.36.148.72', '1606950000', 'desktop', '2020-12-03 02:12:56'),
(5945, 1, '', '54.36.149.24', '1606950000', 'desktop', '2020-12-03 04:06:07'),
(5946, 1, '', '31.13.127.11', '1606950000', 'Unknown', '2020-12-03 05:21:09'),
(5947, 1, '', '31.13.127.1', '1606950000', 'Unknown', '2020-12-03 05:21:11'),
(5948, 49217, 'https://u-childrenteeth.com//15', '46.193.0.131', '1606950000', 'desktop', '2020-12-03 06:05:36'),
(5949, 1, '', '54.36.148.234', '1606950000', 'desktop', '2020-12-03 06:06:36'),
(5950, 3, '', '179.43.171.74', '1606950000', 'desktop', '2020-12-03 06:20:23'),
(5951, 7549, '', '27.255.50.31', '1606950000', 'desktop', '2020-12-03 08:37:53'),
(5952, 1, '', '185.73.217.201', '1606950000', 'Unknown', '2020-12-03 08:43:52'),
(5953, 2, 'http://u-childrenteeth.com/', '181.215.221.169', '1606950000', 'Unknown', '2020-12-03 08:43:52'),
(5954, 1, 'http://u-childrenteeth.com/', '179.61.187.53', '1606950000', 'Unknown', '2020-12-03 08:43:52'),
(5955, 1, '', '54.36.149.42', '1606950000', 'desktop', '2020-12-03 09:51:14'),
(5956, 2543, 'https://u-childrenteeth.com/admin.html', '91.218.98.170', '1606950000', 'desktop', '2020-12-03 11:33:06'),
(5957, 1, '', '54.36.148.126', '1606950000', 'desktop', '2020-12-03 11:45:53'),
(5958, 12344, '', '111.119.187.22', '1606950000', 'desktop', '2020-12-03 13:55:56'),
(5959, 1, '', '54.36.148.90', '1606950000', 'desktop', '2020-12-03 15:06:53'),
(5960, 353, '', '81.185.164.156', '1606950000', 'desktop', '2020-12-03 15:50:31'),
(5961, 1, 'http://u-childrenteeth.com/', '192.71.142.35', '1606950000', 'Unknown', '2020-12-03 16:28:14'),
(5962, 1, '', '51.178.86.137', '1606950000', 'desktop', '2020-12-03 17:07:10'),
(5963, 1, '', '104.197.111.116', '1606950000', 'desktop', '2020-12-03 17:33:02'),
(5964, 63, 'https://u-childrenteeth.com/', '111.119.187.24', '1606950000', 'desktop', '2020-12-03 18:11:26'),
(5965, 1, '', '54.36.149.80', '1606950000', 'desktop', '2020-12-03 18:30:29'),
(5966, 1, '', '145.239.82.147', '1606950000', 'desktop', '2020-12-03 21:02:41'),
(5967, 1, '', '54.36.148.27', '1606950000', 'desktop', '2020-12-03 21:06:20'),
(5968, 2, '', '178.171.78.48', '1607036400', 'Unknown', '2020-12-03 23:46:59'),
(5969, 1, 'http://u-childrenteeth.com/', '206.127.221.136', '1607036400', 'Unknown', '2020-12-03 23:47:00'),
(5970, 4, '', '181.215.221.169', '1607036400', 'Unknown', '2020-12-03 23:47:02'),
(5971, 1, '', '54.36.148.165', '1607036400', 'desktop', '2020-12-03 23:55:36'),
(5972, 1, '', '216.244.66.200', '1607036400', 'desktop', '2020-12-04 03:07:40'),
(5973, 1, 'https://u-childrenteeth.com/', '86.76.162.33', '1607036400', 'desktop', '2020-12-04 03:30:31'),
(5974, 1, 'https://u-childrenteeth.com/', '86.76.162.33', '1607036400', 'desktop', '2020-12-04 03:30:31'),
(5975, 39623, 'https://u-childrenteeth.com/', '86.76.162.33', '1607036400', 'desktop', '2020-12-04 03:30:31'),
(5976, 3, '', '72.13.46.2', '1607036400', 'desktop', '2020-12-04 03:52:57'),
(5977, 5487, '', '111.119.187.53', '1607036400', 'desktop', '2020-12-04 04:31:39'),
(5978, 1802, 'https://u-childrenteeth.com/', '81.185.164.156', '1607036400', 'desktop', '2020-12-04 05:35:58'),
(5979, 57157, 'https://u-childrenteeth.com//admin/datefilter', '46.193.0.131', '1607036400', 'desktop', '2020-12-04 06:06:57'),
(5980, 2, '', '179.43.171.74', '1607036400', 'desktop', '2020-12-04 06:11:08'),
(5981, 1, '', '209.17.96.98', '1607036400', 'desktop', '2020-12-04 06:26:57'),
(5982, 1, '', '147.78.120.40', '1607036400', 'Unknown', '2020-12-04 08:44:07'),
(5983, 3, '', '185.73.217.201', '1607036400', 'Unknown', '2020-12-04 08:44:07'),
(5984, 1, 'http://u-childrenteeth.com/', '89.185.76.3', '1607036400', 'Unknown', '2020-12-04 08:44:10'),
(5985, 4583, '', '111.119.187.56', '1607036400', 'desktop', '2020-12-04 09:16:15'),
(5986, 5116, 'https://u-childrenteeth.com/', '111.119.187.27', '1607036400', 'desktop', '2020-12-04 12:34:03'),
(5987, 14, 'https://u-childrenteeth.com/admin.html', '61.245.161.17', '1607036400', 'desktop', '2020-12-04 14:10:31'),
(5988, 1, '', '111.119.187.27', '1607036400', 'Unknown', '2020-12-04 15:08:18'),
(5989, 10, '', '111.119.187.24', '1607036400', 'desktop', '2020-12-04 15:08:53'),
(5990, 567, '', '39.52.83.106', '1607036400', 'desktop', '2020-12-04 15:09:02'),
(5991, 3243, '', '37.111.129.154', '1607036400', 'desktop', '2020-12-04 15:15:57'),
(5992, 26, '', '119.160.98.186', '1607036400', 'desktop', '2020-12-04 15:19:26'),
(5993, 2, 'https://www.google.com/', '14.192.150.71', '1607036400', 'desktop', '2020-12-04 15:29:53'),
(5994, 1, '', '213.239.214.246', '1607036400', 'desktop', '2020-12-04 16:26:15'),
(5995, 1, '', '34.78.124.121', '1607036400', 'desktop', '2020-12-04 16:49:02'),
(5996, 4, 'https://u-childrenteeth.com//admin/datefilter', '27.255.50.31', '1607036400', 'desktop', '2020-12-04 16:59:10'),
(5997, 1, '', '176.9.46.86', '1607036400', 'desktop', '2020-12-04 20:57:20'),
(5998, 1, '', '18.144.81.233', '1607122800', 'desktop', '2020-12-04 23:01:07'),
(5999, 1, '', '35.238.90.136', '1607122800', 'desktop', '2020-12-04 23:04:57'),
(6000, 2, '', '181.215.221.169', '1607122800', 'Unknown', '2020-12-04 23:43:26'),
(6001, 1, '', '89.185.76.3', '1607122800', 'Unknown', '2020-12-04 23:43:26'),
(6002, 3, 'http://u-childrenteeth.com/', '179.61.187.53', '1607122800', 'Unknown', '2020-12-04 23:43:29'),
(6003, 1, 'http://u-childrenteeth.com/', '181.214.190.196', '1607122800', 'Unknown', '2020-12-04 23:43:29'),
(6004, 2, '', '74.120.14.56', '1607122800', 'desktop', '2020-12-05 00:09:31'),
(6005, 205, 'https://u-childrenteeth.com/', '39.52.83.106', '1607122800', 'desktop', '2020-12-05 00:26:58'),
(6006, 4, 'https://u-childrenteeth.com/', '37.111.129.1', '1607122800', 'desktop', '2020-12-05 01:32:50'),
(6007, 14, 'https://www.google.com/', '157.161.155.132', '1607122800', 'desktop', '2020-12-05 02:50:23'),
(6008, 1, '', '18.191.173.50', '1607122800', 'desktop', '2020-12-05 03:00:19'),
(6009, 13, '', '18.191.173.50', '1607122800', 'desktop', '2020-12-05 03:00:19'),
(6010, 1, '', '185.191.171.13', '1607122800', 'desktop', '2020-12-05 03:00:56'),
(6011, 2, '', '179.43.171.74', '1607122800', 'desktop', '2020-12-05 05:07:52'),
(6012, 80317, 'https://u-childrenteeth.com/admin', '86.76.162.33', '1607122800', 'desktop', '2020-12-05 05:25:38'),
(6013, 3487, 'https://u-childrenteeth.com/admin.html', '119.155.26.80', '1607122800', 'desktop', '2020-12-05 06:20:29'),
(6014, 5891, '', '111.119.187.9', '1607122800', 'desktop', '2020-12-05 07:25:44'),
(6015, 257, 'https://u-childrenteeth.com/admin.html', '49.34.22.197', '1607122800', 'desktop', '2020-12-05 08:23:11'),
(6016, 2, '', '178.171.78.48', '1607122800', 'Unknown', '2020-12-05 08:37:52'),
(6017, 3, '', '158.46.219.160', '1607122800', 'Unknown', '2020-12-05 08:37:52'),
(6018, 3, '', '52.8.185.89', '1607122800', 'desktop', '2020-12-05 08:40:33'),
(6019, 380, 'https://u-childrenteeth.com/', '203.135.44.44', '1607122800', 'desktop', '2020-12-05 08:57:27'),
(6020, 1, '', '66.249.65.230', '1607122800', 'robot', '2020-12-05 10:01:48'),
(6021, 1, 'https://u-childrenteeth.com/page/9', '66.249.65.225', '1607122800', 'robot', '2020-12-05 10:01:56'),
(6022, 2431, 'https://u-childrenteeth.com/admin.html', '176.189.53.43', '1607122800', 'desktop', '2020-12-05 10:14:29'),
(6023, 1, 'http://u-childrenteeth.com', '67.55.66.180', '1607122800', 'Unknown', '2020-12-05 10:24:08'),
(6024, 1, '', '163.172.110.238', '1607122800', 'desktop', '2020-12-05 10:42:45'),
(6025, 113, '', '92.184.102.155', '1607122800', 'desktop', '2020-12-05 10:43:49'),
(6026, 3, '', '207.102.138.19', '1607122800', 'desktop', '2020-12-05 11:06:54'),
(6027, 584, '', '182.186.86.118', '1607122800', 'desktop', '2020-12-05 11:29:55'),
(6028, 407, 'https://u-childrenteeth.com/home/checkoutpage', '182.186.99.208', '1607122800', 'desktop', '2020-12-05 11:44:41'),
(6029, 1, 'http://162.0.229.235:80/', '192.35.168.144', '1607122800', 'desktop', '2020-12-05 11:48:01'),
(6030, 746, '', '111.119.187.63', '1607122800', 'desktop', '2020-12-05 11:49:39'),
(6031, 62, 'https://u-childrenteeth.com/', '111.119.187.51', '1607122800', 'desktop', '2020-12-05 13:36:35'),
(6032, 216, 'https://u-childrenteeth.com/', '39.52.95.4', '1607122800', 'desktop', '2020-12-05 14:35:05'),
(6033, 143, 'https://u-childrenteeth.com/', '93.22.133.117', '1607122800', 'desktop', '2020-12-05 14:36:27'),
(6034, 214, '', '103.102.42.201', '1607122800', 'desktop', '2020-12-05 15:43:49'),
(6035, 1, '', '35.187.183.112', '1607122800', 'desktop', '2020-12-05 16:29:49'),
(6036, 1, '', '107.175.236.237', '1607122800', 'Unknown', '2020-12-05 18:29:06'),
(6037, 937, '', '39.37.132.134', '1607122800', 'desktop', '2020-12-05 19:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `CountryList`
--

CREATE TABLE `CountryList` (
  `CountryID` int(11) NOT NULL,
  `CountryName` varchar(50) DEFAULT NULL,
  `CountryCode` char(2) DEFAULT NULL,
  `ThreeCharCountryCode` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CountryList`
--

INSERT INTO `CountryList` (`CountryID`, `CountryName`, `CountryCode`, `ThreeCharCountryCode`) VALUES
(1, 'Afghanistan', 'AF', 'AFG'),
(2, 'Aland Islands', 'AX', 'ALA'),
(3, 'Albania', 'AL', 'ALB'),
(4, 'Algeria', 'DZ', 'DZA'),
(5, 'American Samoa', 'AS', 'ASM'),
(6, 'Andorra', 'AD', 'AND'),
(7, 'Angola', 'AO', 'AGO'),
(8, 'Anguilla', 'AI', 'AIA'),
(9, 'Antarctica', 'AQ', 'ATA'),
(10, 'Antigua and Barbuda', 'AG', 'ATG'),
(11, 'Argentina', 'AR', 'ARG'),
(12, 'Armenia', 'AM', 'ARM'),
(13, 'Aruba', 'AW', 'ABW'),
(14, 'Australia', 'AU', 'AUS'),
(15, 'Austria', 'AT', 'AUT'),
(16, 'Azerbaijan', 'AZ', 'AZE'),
(17, 'Bahamas', 'BS', 'BHS'),
(18, 'Bahrain', 'BH', 'BHR'),
(19, 'Bangladesh', 'BD', 'BGD'),
(20, 'Barbados', 'BB', 'BRB'),
(21, 'Belarus', 'BY', 'BLR'),
(22, 'Belgium', 'BE', 'BEL'),
(23, 'Belize', 'BZ', 'BLZ'),
(24, 'Benin', 'BJ', 'BEN'),
(25, 'Bermuda', 'BM', 'BMU'),
(26, 'Bhutan', 'BT', 'BTN'),
(27, 'Bolivia', 'BO', 'BOL'),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES'),
(29, 'Bosnia and Herzegovina', 'BA', 'BIH'),
(30, 'Botswana', 'BW', 'BWA'),
(31, 'Bouvet Island', 'BV', 'BVT'),
(32, 'Brazil', 'BR', 'BRA'),
(33, 'British Indian Ocean Territory', 'IO', 'IOT'),
(34, 'Brunei', 'BN', 'BRN'),
(35, 'Bulgaria', 'BG', 'BGR'),
(36, 'Burkina Faso', 'BF', 'BFA'),
(37, 'Burundi', 'BI', 'BDI'),
(38, 'Cambodia', 'KH', 'KHM'),
(39, 'Cameroon', 'CM', 'CMR'),
(40, 'Canada', 'CA', 'CAN'),
(41, 'Cape Verde', 'CV', 'CPV'),
(42, 'Cayman Islands', 'KY', 'CYM'),
(43, 'Central African Republic', 'CF', 'CAF'),
(44, 'Chad', 'TD', 'TCD'),
(45, 'Chile', 'CL', 'CHL'),
(46, 'China', 'CN', 'CHN'),
(47, 'Christmas Island', 'CX', 'CXR'),
(48, 'Cocos (Keeling) Islands', 'CC', 'CCK'),
(49, 'Colombia', 'CO', 'COL'),
(50, 'Comoros', 'KM', 'COM'),
(51, 'Congo', 'CG', 'COG'),
(52, 'Cook Islands', 'CK', 'COK'),
(53, 'Costa Rica', 'CR', 'CRI'),
(54, 'Ivory Coast', 'CI', 'CIV'),
(55, 'Croatia', 'HR', 'HRV'),
(56, 'Cuba', 'CU', 'CUB'),
(57, 'Curacao', 'CW', 'CUW'),
(58, 'Cyprus', 'CY', 'CYP'),
(59, 'Czech Republic', 'CZ', 'CZE'),
(60, 'Democratic Republic of the Congo', 'CD', 'COD'),
(61, 'Denmark', 'DK', 'DNK'),
(62, 'Djibouti', 'DJ', 'DJI'),
(63, 'Dominica', 'DM', 'DMA'),
(64, 'Dominican Republic', 'DO', 'DOM'),
(65, 'Ecuador', 'EC', 'ECU'),
(66, 'Egypt', 'EG', 'EGY'),
(67, 'El Salvador', 'SV', 'SLV'),
(68, 'Equatorial Guinea', 'GQ', 'GNQ'),
(69, 'Eritrea', 'ER', 'ERI'),
(70, 'Estonia', 'EE', 'EST'),
(71, 'Ethiopia', 'ET', 'ETH'),
(72, 'Falkland Islands (Malvinas)', 'FK', 'FLK'),
(73, 'Faroe Islands', 'FO', 'FRO'),
(74, 'Fiji', 'FJ', 'FJI'),
(75, 'Finland', 'FI', 'FIN'),
(76, 'France', 'FR', 'FRA'),
(77, 'French Guiana', 'GF', 'GUF'),
(78, 'French Polynesia', 'PF', 'PYF'),
(79, 'French Southern Territories', 'TF', 'ATF'),
(80, 'Gabon', 'GA', 'GAB'),
(81, 'Gambia', 'GM', 'GMB'),
(82, 'Georgia', 'GE', 'GEO'),
(83, 'Germany', 'DE', 'DEU'),
(84, 'Ghana', 'GH', 'GHA'),
(85, 'Gibraltar', 'GI', 'GIB'),
(86, 'Greece', 'GR', 'GRC'),
(87, 'Greenland', 'GL', 'GRL'),
(88, 'Grenada', 'GD', 'GRD'),
(89, 'Guadaloupe', 'GP', 'GLP'),
(90, 'Guam', 'GU', 'GUM'),
(91, 'Guatemala', 'GT', 'GTM'),
(92, 'Guernsey', 'GG', 'GGY'),
(93, 'Guinea', 'GN', 'GIN'),
(94, 'Guinea-Bissau', 'GW', 'GNB'),
(95, 'Guyana', 'GY', 'GUY'),
(96, 'Haiti', 'HT', 'HTI'),
(97, 'Heard Island and McDonald Islands', 'HM', 'HMD'),
(98, 'Honduras', 'HN', 'HND'),
(99, 'Hong Kong', 'HK', 'HKG'),
(100, 'Hungary', 'HU', 'HUN'),
(101, 'Iceland', 'IS', 'ISL'),
(102, 'India', 'IN', 'IND'),
(103, 'Indonesia', 'ID', 'IDN'),
(104, 'Iran', 'IR', 'IRN'),
(105, 'Iraq', 'IQ', 'IRQ'),
(106, 'Ireland', 'IE', 'IRL'),
(107, 'Isle of Man', 'IM', 'IMN'),
(108, 'Israel', 'IL', 'ISR'),
(109, 'Italy', 'IT', 'ITA'),
(110, 'Jamaica', 'JM', 'JAM'),
(111, 'Japan', 'JP', 'JPN'),
(112, 'Jersey', 'JE', 'JEY'),
(113, 'Jordan', 'JO', 'JOR'),
(114, 'Kazakhstan', 'KZ', 'KAZ'),
(115, 'Kenya', 'KE', 'KEN'),
(116, 'Kiribati', 'KI', 'KIR'),
(117, 'Kosovo', 'XK', '---'),
(118, 'Kuwait', 'KW', 'KWT'),
(119, 'Kyrgyzstan', 'KG', 'KGZ'),
(120, 'Laos', 'LA', 'LAO'),
(121, 'Latvia', 'LV', 'LVA'),
(122, 'Lebanon', 'LB', 'LBN'),
(123, 'Lesotho', 'LS', 'LSO'),
(124, 'Liberia', 'LR', 'LBR'),
(125, 'Libya', 'LY', 'LBY'),
(126, 'Liechtenstein', 'LI', 'LIE'),
(127, 'Lithuania', 'LT', 'LTU'),
(128, 'Luxembourg', 'LU', 'LUX'),
(129, 'Macao', 'MO', 'MAC'),
(130, 'Macedonia', 'MK', 'MKD'),
(131, 'Madagascar', 'MG', 'MDG'),
(132, 'Malawi', 'MW', 'MWI'),
(133, 'Malaysia', 'MY', 'MYS'),
(134, 'Maldives', 'MV', 'MDV'),
(135, 'Mali', 'ML', 'MLI'),
(136, 'Malta', 'MT', 'MLT'),
(137, 'Marshall Islands', 'MH', 'MHL'),
(138, 'Martinique', 'MQ', 'MTQ'),
(139, 'Mauritania', 'MR', 'MRT'),
(140, 'Mauritius', 'MU', 'MUS'),
(141, 'Mayotte', 'YT', 'MYT'),
(142, 'Mexico', 'MX', 'MEX'),
(143, 'Micronesia', 'FM', 'FSM'),
(144, 'Moldava', 'MD', 'MDA'),
(145, 'Monaco', 'MC', 'MCO'),
(146, 'Mongolia', 'MN', 'MNG'),
(147, 'Montenegro', 'ME', 'MNE'),
(148, 'Montserrat', 'MS', 'MSR'),
(149, 'Morocco', 'MA', 'MAR'),
(150, 'Mozambique', 'MZ', 'MOZ'),
(151, 'Myanmar (Burma)', 'MM', 'MMR'),
(152, 'Namibia', 'NA', 'NAM'),
(153, 'Nauru', 'NR', 'NRU'),
(154, 'Nepal', 'NP', 'NPL'),
(155, 'Netherlands', 'NL', 'NLD'),
(156, 'New Caledonia', 'NC', 'NCL'),
(157, 'New Zealand', 'NZ', 'NZL'),
(158, 'Nicaragua', 'NI', 'NIC'),
(159, 'Niger', 'NE', 'NER'),
(160, 'Nigeria', 'NG', 'NGA'),
(161, 'Niue', 'NU', 'NIU'),
(162, 'Norfolk Island', 'NF', 'NFK'),
(163, 'North Korea', 'KP', 'PRK'),
(164, 'Northern Mariana Islands', 'MP', 'MNP'),
(165, 'Norway', 'NO', 'NOR'),
(166, 'Oman', 'OM', 'OMN'),
(167, 'Pakistan', 'PK', 'PAK'),
(168, 'Palau', 'PW', 'PLW'),
(169, 'Palestine', 'PS', 'PSE'),
(170, 'Panama', 'PA', 'PAN'),
(171, 'Papua New Guinea', 'PG', 'PNG'),
(172, 'Paraguay', 'PY', 'PRY'),
(173, 'Peru', 'PE', 'PER'),
(174, 'Phillipines', 'PH', 'PHL'),
(175, 'Pitcairn', 'PN', 'PCN'),
(176, 'Poland', 'PL', 'POL'),
(177, 'Portugal', 'PT', 'PRT'),
(178, 'Puerto Rico', 'PR', 'PRI'),
(179, 'Qatar', 'QA', 'QAT'),
(180, 'Reunion', 'RE', 'REU'),
(181, 'Romania', 'RO', 'ROU'),
(182, 'Russia', 'RU', 'RUS'),
(183, 'Rwanda', 'RW', 'RWA'),
(184, 'Saint Barthelemy', 'BL', 'BLM'),
(185, 'Saint Helena', 'SH', 'SHN'),
(186, 'Saint Kitts and Nevis', 'KN', 'KNA'),
(187, 'Saint Lucia', 'LC', 'LCA'),
(188, 'Saint Martin', 'MF', 'MAF'),
(189, 'Saint Pierre and Miquelon', 'PM', 'SPM'),
(190, 'Saint Vincent and the Grenadines', 'VC', 'VCT'),
(191, 'Samoa', 'WS', 'WSM'),
(192, 'San Marino', 'SM', 'SMR'),
(193, 'Sao Tome and Principe', 'ST', 'STP'),
(194, 'Saudi Arabia', 'SA', 'SAU'),
(195, 'Senegal', 'SN', 'SEN'),
(196, 'Serbia', 'RS', 'SRB'),
(197, 'Seychelles', 'SC', 'SYC'),
(198, 'Sierra Leone', 'SL', 'SLE'),
(199, 'Singapore', 'SG', 'SGP'),
(200, 'Sint Maarten', 'SX', 'SXM'),
(201, 'Slovakia', 'SK', 'SVK'),
(202, 'Slovenia', 'SI', 'SVN'),
(203, 'Solomon Islands', 'SB', 'SLB'),
(204, 'Somalia', 'SO', 'SOM'),
(205, 'South Africa', 'ZA', 'ZAF'),
(206, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS'),
(207, 'South Korea', 'KR', 'KOR'),
(208, 'South Sudan', 'SS', 'SSD'),
(209, 'Spain', 'ES', 'ESP'),
(210, 'Sri Lanka', 'LK', 'LKA'),
(211, 'Sudan', 'SD', 'SDN'),
(212, 'Suriname', 'SR', 'SUR'),
(213, 'Svalbard and Jan Mayen', 'SJ', 'SJM'),
(214, 'Swaziland', 'SZ', 'SWZ'),
(215, 'Sweden', 'SE', 'SWE'),
(216, 'Switzerland', 'CH', 'CHE'),
(217, 'Syria', 'SY', 'SYR'),
(218, 'Taiwan', 'TW', 'TWN'),
(219, 'Tajikistan', 'TJ', 'TJK'),
(220, 'Tanzania', 'TZ', 'TZA'),
(221, 'Thailand', 'TH', 'THA'),
(222, 'Timor-Leste (East Timor)', 'TL', 'TLS'),
(223, 'Togo', 'TG', 'TGO'),
(224, 'Tokelau', 'TK', 'TKL'),
(225, 'Tonga', 'TO', 'TON'),
(226, 'Trinidad and Tobago', 'TT', 'TTO'),
(227, 'Tunisia', 'TN', 'TUN'),
(228, 'Turkey', 'TR', 'TUR'),
(229, 'Turkmenistan', 'TM', 'TKM'),
(230, 'Turks and Caicos Islands', 'TC', 'TCA'),
(231, 'Tuvalu', 'TV', 'TUV'),
(232, 'Uganda', 'UG', 'UGA'),
(233, 'Ukraine', 'UA', 'UKR'),
(234, 'United Arab Emirates', 'AE', 'ARE'),
(235, 'United Kingdom', 'GB', 'GBR'),
(236, 'United States', 'US', 'USA'),
(237, 'United States Minor Outlying Islands', 'UM', 'UMI'),
(238, 'Uruguay', 'UY', 'URY'),
(239, 'Uzbekistan', 'UZ', 'UZB'),
(240, 'Vanuatu', 'VU', 'VUT'),
(241, 'Vatican City', 'VA', 'VAT'),
(242, 'Venezuela', 'VE', 'VEN'),
(243, 'Vietnam', 'VN', 'VNM'),
(244, 'Virgin Islands, British', 'VG', 'VGB'),
(245, 'Virgin Islands, US', 'VI', 'VIR'),
(246, 'Wallis and Futuna', 'WF', 'WLF'),
(247, 'Western Sahara', 'EH', 'ESH'),
(248, 'Yemen', 'YE', 'YEM'),
(249, 'Zambia', 'ZM', 'ZMB'),
(250, 'Zimbabwe', 'ZW', 'ZWE');

-- --------------------------------------------------------

--
-- Table structure for table `customer_view`
--

CREATE TABLE `customer_view` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `date` datetime DEFAULT NULL,
  `email_send` enum('1','0') NOT NULL DEFAULT '0',
  `emailtwo_send` enum('1','0') NOT NULL DEFAULT '0',
  `emailthree_send` enum('1','0') NOT NULL DEFAULT '0',
  `emailfour_send` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_view`
--

INSERT INTO `customer_view` (`id`, `email`, `date`, `email_send`, `emailtwo_send`, `emailthree_send`, `emailfour_send`) VALUES
(1, 'shad@gmail.com', '0000-00-00 00:00:00', '', '0', '0', NULL),
(9, 'shahadot20@gmail.com', '2020-09-08 00:00:00', '1', '0', '0', NULL),
(10, 'MOMOVSMELLOUKI@GMAIL.COM', '2020-09-08 00:00:00', '0', '0', '0', NULL),
(11, 'altonalvin9@gmail.com', '2020-11-17 00:00:00', '0', '0', '0', NULL),
(12, 'a5454545n9@gmail.com', '2020-11-18 00:00:00', '0', '0', '0', NULL),
(13, 'junaidaliansaree@gmail.com', '2020-11-21 00:00:00', '0', '0', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cus_reviews`
--

CREATE TABLE `cus_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `customer_name` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `rating_five` enum('warning','default') DEFAULT NULL,
  `rating_four` enum('warning','default') DEFAULT NULL,
  `rating_three` enum('warning','default') DEFAULT NULL,
  `rating_two` enum('warning','default') DEFAULT NULL,
  `rating_one` enum('warning','default') DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_reviews`
--

INSERT INTO `cus_reviews` (`id`, `product_id`, `customer_name`, `img`, `comment`, `date`, `rating_five`, `rating_four`, `rating_three`, `rating_two`, `rating_one`, `serial`, `active_status`, `test`) VALUES
(1, 6, 'Md Shahadat Hossain', 'c4238dbe41a3cfe378675d3d0b7f2e32.jpg', '<p><span style=\"font-size: 14px;\">ok, we will discuss this matter. after doing this work.</span><span style=\"font-size: 14px;\">?</span><span style=\"font-size: 14px;\">?</span><span style=\"font-size: 14px;\">?</span><br></p>', '2020-08-06', 'warning', 'warning', 'warning', 'default', 'default', -1, 1, NULL),
(2, 7, 'Ali', 'bb0f05c594adb72902a5becabaf132c3.jpg', '<p>nice product</p>', '2020-08-14', 'warning', 'warning', 'warning', 'warning', 'default', 2, 1, NULL),
(3, 7, 'Abdullah', '1287030f74860244020f7f12089c8db1.png', '<span style=\"font-size: 12px;\">good</span>', '2020-08-22', 'warning', 'warning', 'warning', 'warning', 'warning', 3, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `coupon` varchar(100) NOT NULL,
  `num` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `coupon`, `num`, `date`) VALUES
(2, 'shad', 15, '2021-02-05'),
(3, 'TOP', 100, '2020-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `discounts_coupon`
--

CREATE TABLE `discounts_coupon` (
  `id` int(11) NOT NULL,
  `discount_code` varchar(100) NOT NULL,
  `num` int(11) NOT NULL,
  `percnt_type` varchar(100) NOT NULL,
  `discount_value` int(11) NOT NULL,
  `applies_to` varchar(255) NOT NULL,
  `applies_specific_val` varchar(255) NOT NULL,
  `countries` varchar(255) NOT NULL,
  `selected_countries_val` text NOT NULL,
  `exclude_shipping` varchar(255) NOT NULL,
  `exclude_shipping_val` varchar(255) NOT NULL,
  `min_req` varchar(255) NOT NULL,
  `min_purchase_amount_val` varchar(255) NOT NULL,
  `min_purchase_qty_val` varchar(255) NOT NULL,
  `customer_buys` varchar(255) NOT NULL,
  `min_qty` varchar(255) NOT NULL,
  `min_amnt` varchar(255) NOT NULL,
  `min_get_qty` int(11) NOT NULL,
  `specific_buy_val` varchar(255) NOT NULL,
  `specific_gets_val` varchar(255) NOT NULL,
  `discount_customer` varchar(255) NOT NULL,
  `customer_percentage_val` varchar(255) NOT NULL,
  `maximum_order` varchar(255) NOT NULL,
  `maximum_order_val` varchar(255) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `specific_group_customer_val` varchar(255) NOT NULL,
  `specific_customer_val` varchar(255) NOT NULL,
  `limit_number` varchar(255) NOT NULL,
  `limit_number_val` varchar(255) NOT NULL,
  `limit_to_one` varchar(255) NOT NULL,
  `time_used` int(11) NOT NULL DEFAULT 0,
  `start_date` date NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_date_chk` varchar(255) NOT NULL,
  `end_date` date NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `start_date_time` datetime NOT NULL,
  `end_date_time` datetime NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 for active discount code',
  `add_discount` varchar(255) NOT NULL,
  `update_discount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discounts_coupon`
--

INSERT INTO `discounts_coupon` (`id`, `discount_code`, `num`, `percnt_type`, `discount_value`, `applies_to`, `applies_specific_val`, `countries`, `selected_countries_val`, `exclude_shipping`, `exclude_shipping_val`, `min_req`, `min_purchase_amount_val`, `min_purchase_qty_val`, `customer_buys`, `min_qty`, `min_amnt`, `min_get_qty`, `specific_buy_val`, `specific_gets_val`, `discount_customer`, `customer_percentage_val`, `maximum_order`, `maximum_order_val`, `eligibility`, `specific_group_customer_val`, `specific_customer_val`, `limit_number`, `limit_number_val`, `limit_to_one`, `time_used`, `start_date`, `start_time`, `end_date_chk`, `end_date`, `end_time`, `start_date_time`, `end_date_time`, `added_on`, `status`, `add_discount`, `update_discount`) VALUES
(13, 'MNM', 0, 'Fixed amount', 100, 'All products', '', 'All countries', '', '', '', 'min_purchase_amount', '100', '', 'customer_min_qty', '', '', 0, '', '', '', '', '', '', 'Everyone', '', '', '', '', '', 0, '2020-11-21', '08:26', 'end_date_chk', '2020-11-28', '08:26', '2020-11-21 08:26:00', '2020-11-28 08:26:00', '2020-11-22 08:26:15', 1, '', ''),
(14, 'MOM', 0, 'Fixed amount', 100, 'All products', '', 'All countries', '', '', '', 'min_purchase_qty', '30', '1', 'customer_min_qty', '', '', 0, '', '', '', '', '', '', 'Everyone', '', '', '', '', '', 0, '2020-11-20', '08:31', 'end_date_chk', '2020-11-25', '08:31', '2020-11-20 08:31:00', '2020-11-25 08:31:00', '2020-11-22 08:35:32', 1, '', ''),
(15, 'Noel15', 0, 'percentage', 15, 'Specific products', 'Smart Brosse à Dents Enfants', 'All countries', '', '', '', 'min_purchase_amount', '49,95', '', 'customer_min_qty', '', '', 0, '', '', '', '', '', '', 'Everyone', '', '', '', '', '', 0, '2020-11-21', '00:00', '', '2020-11-23', '12:00', '2020-11-21 00:00:00', '2020-11-28 10:31:18', '2020-11-22 09:31:28', 1, '', ''),
(16, 'mami', 0, 'percentage', 50, 'All products', '', 'All countries', '', '', '', 'none', '', '', 'customer_min_qty', '', '', 0, '', '', '', '', '', '', 'specific_customer', '', '', '', '', '', 0, '2020-11-21', '08:00', 'end_date_chk', '2020-11-23', '12:00', '2020-11-21 08:00:00', '2020-11-23 12:00:00', '2020-11-22 12:29:43', 1, '', ''),
(17, 'JUN1', 0, 'Buy X get Y', 0, 'All products', '', 'All countries', '', '', '', 'none', '', '', 'customer_min_amnt', '', '100', 2, 'Smart Brosse à Dents Enfants', 'SMART BROSSE À DENTS ENFANTS', 'Percentage', '60', '', '', 'Everyone', '', '', '', '', '', 0, '2020-11-16', '19:42', 'end_date_chk', '2020-12-04', '19:46', '2020-11-16 19:42:00', '2020-12-04 19:46:00', '2020-11-23 21:17:50', 1, '', ''),
(18, 'JUN2', 0, 'Buy X get Y', 0, 'All products', '', 'All countries', '', '', '', 'none', '', '', 'customer_min_qty', '2', '', 1, 'Smart Brosse à Dents Enfants', 'U-SMART Embout', 'Specific Collection', '', '', '', 'Everyone', '', '', '', '', '', 0, '2020-11-09', '19:47', 'end_date_chk', '2020-11-30', '19:47', '2020-11-09 19:47:00', '2020-11-30 19:47:00', '2020-11-23 19:47:11', 1, '', ''),
(19, 'YES1', 0, 'Buy X get Y', 0, 'All products', '', 'All countries', '', '', '', 'none', '', '', 'customer_min_qty', '2', '', 1, 'Smart Brosse à Dents Enfants', 'U smart', 'Specific Collection', '', '', '', 'Everyone', '', '', '', '', '', 12, '2020-11-22', '12:00', 'end_date_chk', '2020-11-25', '12:00', '2020-11-22 12:00:00', '2020-11-25 12:00:00', '2020-11-24 22:16:16', 1, '', ''),
(20, 'yes22', 0, 'Buy X get Y', 0, 'All products', '', 'All countries', '', '', '', 'none', '', '', 'customer_min_qty', '2', '', 1, 'Smart Brosse à Dents Enfants', 'U-SMART Embout', 'Specific Collection', '', '', '', 'Everyone', '', '', '', '', '', 5, '2020-11-23', '00:57', 'end_date_chk', '2020-11-25', '21:02', '2020-11-23 00:57:00', '2020-11-25 21:02:00', '2020-11-24 22:13:48', 1, '', ''),
(21, '100FREE', 0, 'percentage', 100, 'All products', '', 'All countries', '', '', '', 'none', '', '', 'customer_min_qty', '', '', 0, '', '', '', '', '', '', 'Everyone', '', '', '', '', '', 2, '2020-12-03', '08:00', 'end_date_chk', '2020-12-09', '19:00', '2020-12-03 08:00:00', '2020-12-09 19:00:00', '2020-12-04 14:07:18', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(10) UNSIGNED NOT NULL,
  `protocol` text DEFAULT NULL,
  `smtp_host` text DEFAULT NULL,
  `smtp_user` text DEFAULT NULL,
  `smtp_pass` text DEFAULT NULL,
  `smtp_port` text DEFAULT NULL,
  `wesubject` text DEFAULT NULL,
  `wemail_name` text DEFAULT NULL,
  `weo_image` text DEFAULT NULL,
  `weo_desc` text DEFAULT NULL,
  `weo_one_title` text DEFAULT NULL,
  `weo_one_image` text DEFAULT NULL,
  `weo_one_desc` text DEFAULT NULL,
  `weo_two_title` text DEFAULT NULL,
  `weo_two_image` text DEFAULT NULL,
  `weo_two_desc` text DEFAULT NULL,
  `weo_three_title` text DEFAULT NULL,
  `weo_three_image` text DEFAULT NULL,
  `weo_three_desc` text DEFAULT NULL,
  `weo_color` text DEFAULT NULL,
  `wet_color` text DEFAULT NULL,
  `wet_image` text DEFAULT NULL,
  `wet_desc` text DEFAULT NULL,
  `wet_divo_desc` text DEFAULT NULL,
  `wet_sco_desc` text DEFAULT NULL,
  `wet_sct_desc` text DEFAULT NULL,
  `wet_sco_image` text DEFAULT NULL,
  `wet_sct_image` text DEFAULT NULL,
  `wet_scth_image` text DEFAULT NULL,
  `wet_scth_desc` text DEFAULT NULL,
  `wet_lt_desc` text DEFAULT NULL,
  `pemail_name` text DEFAULT NULL,
  `pe_img` text DEFAULT NULL,
  `pe_desc` text DEFAULT NULL,
  `pw_color` text DEFAULT NULL,
  `abandon_name` text DEFAULT NULL,
  `ab_img` text DEFAULT NULL,
  `ab_desc` text DEFAULT NULL,
  `promotion_name` text DEFAULT NULL,
  `pet_img` text DEFAULT NULL,
  `pet_desc` text DEFAULT NULL,
  `time` varchar(150) DEFAULT NULL,
  `abandontwo_name` text DEFAULT NULL,
  `abtwo_img` text DEFAULT NULL,
  `abandonthree_name` text DEFAULT NULL,
  `abthree_img` text DEFAULT NULL,
  `abtwo_time` varchar(150) DEFAULT NULL,
  `abtwo_desc` text DEFAULT NULL,
  `adthree_time` varchar(150) DEFAULT NULL,
  `abthree_desc` text DEFAULT NULL,
  `abandonfour_name` text DEFAULT NULL,
  `abfour_img` text DEFAULT NULL,
  `adfour_time` text DEFAULT NULL,
  `abfour_desc` text DEFAULT NULL,
  `pe_bn_img` text DEFAULT NULL,
  `ab_active_status` text DEFAULT NULL,
  `abt_active_status` text DEFAULT NULL,
  `abth_active_status` text DEFAULT NULL,
  `abf_active_status` text DEFAULT NULL,
  `btntwo` text DEFAULT NULL,
  `btnone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `protocol`, `smtp_host`, `smtp_user`, `smtp_pass`, `smtp_port`, `wesubject`, `wemail_name`, `weo_image`, `weo_desc`, `weo_one_title`, `weo_one_image`, `weo_one_desc`, `weo_two_title`, `weo_two_image`, `weo_two_desc`, `weo_three_title`, `weo_three_image`, `weo_three_desc`, `weo_color`, `wet_color`, `wet_image`, `wet_desc`, `wet_divo_desc`, `wet_sco_desc`, `wet_sct_desc`, `wet_sco_image`, `wet_sct_image`, `wet_scth_image`, `wet_scth_desc`, `wet_lt_desc`, `pemail_name`, `pe_img`, `pe_desc`, `pw_color`, `abandon_name`, `ab_img`, `ab_desc`, `promotion_name`, `pet_img`, `pet_desc`, `time`, `abandontwo_name`, `abtwo_img`, `abandonthree_name`, `abthree_img`, `abtwo_time`, `abtwo_desc`, `adthree_time`, `abthree_desc`, `abandonfour_name`, `abfour_img`, `adfour_time`, `abfour_desc`, `pe_bn_img`, `ab_active_status`, `abt_active_status`, `abth_active_status`, `abf_active_status`, `btntwo`, `btnone`) VALUES
(2, 'smtp', 'ssl://premium125.web-hosting.com', 'admin@u-childrenteeth.com', '', '465', 'Bienvenue sur notre site', 'welcome_email_two', 'd6752da57d5757de9b8432145acd6c9b.png', '<p><span style=\"font-family: Poppins, Arial, Helvetica, sans-serif; font-size: small; text-align: center;\">We are exited to have you with us. By signing up you will get first our offers, latest news and promotions...Yay!</span><br></p>', '', '5f127acf4440621b54ab421affb9eb5d.png', '', 'hi', '8081d9b5c7fa15086e7ba38172112863.png', '<p><span style=\"font-family: Poppins, Arial, Helvetica, sans-serif; font-size: small; text-align: center;\">We are exited to have you with us. By signing up you will get first our offers, latest news and promotions...Yay!</span><br></p>', '', 'aa895ddb61d8d378dff887b1d3b98b27.png', NULL, '#000000', '#000000', 'cc238fe64ad1d96549c20d378438baa1.jpg', '<div>BIENVENUE À</div><div>ELECTRICLINT</div><div><br></div><div>et merci de vous être inscrits !</div><div><br></div><div>WELCOM à votre code de réduction,</div><div><br></div><div>il vous donne 30% de réduction</div><div><br></div><div>votre prochaine commande !</div>', '<p style=\"text-align: left;\"><font face=\"Poppins, Arial, Helvetica, sans-serif\">Nous sommes très heureux de vous avoir avec nous. En vous inscrivant, vous recevrez d\'abord nos offres, nos dernières nouvelles et nos promotions...Yay !</font><br></p>', '<div style=\"line-height: 1.2; font-size: small; background-color: rgb(252, 238, 239); color: rgb(226, 78, 119); font-family: Poppins, Arial, Helvetica, sans-serif; padding: 10px 10px 0px;\"><div style=\"line-height: 1.2; font-size: 12px;\"><p style=\"line-height: 1.2; font-size: 14px; word-break: break-word; text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><strong style=\"line-height: inherit;\"><span style=\"line-height: inherit; font-size: 18px;\"><a href=\"http://www.example.com/\" rel=\"noopener\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=http://www.example.com/&source=gmail&ust=1598963362032000&usg=AFQjCNHTllVmhWkh5-PDm9MVCsXnzcZS9g\" style=\"line-height: inherit; color: rgb(226, 78, 119);\">Latest News</a></span></strong></p></div></div><div style=\"line-height: 1.5; font-size: small; background-color: rgb(252, 238, 239); font-family: Poppins, Arial, Helvetica, sans-serif; padding: 10px;\"><div style=\"line-height: 1.5; font-size: 12px;\"><p style=\"line-height: 1.5; font-size: 14px; word-break: break-word; text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Weekly newsletters with offers, latest news and promotions!</p></div></div>', '<div style=\"line-height: 1.2; font-size: small; background-color: rgb(252, 238, 239); color: rgb(226, 78, 119); font-family: Poppins, Arial, Helvetica, sans-serif; padding: 10px 10px 0px;\"><div style=\"line-height: 1.2; font-size: 12px;\"><p style=\"line-height: 1.2; font-size: 14px; word-break: break-word; text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><strong style=\"line-height: inherit;\"><span style=\"line-height: inherit; font-size: 18px;\"><a href=\"http://www.example.com/\" rel=\"noopener\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=http://www.example.com/&source=gmail&ust=1598963362032000&usg=AFQjCNHTllVmhWkh5-PDm9MVCsXnzcZS9g\" style=\"line-height: inherit; color: rgb(226, 78, 119);\">High Standards</a></span></strong></p></div></div><div style=\"line-height: 1.5; font-size: small; background-color: rgb(252, 238, 239); font-family: Poppins, Arial, Helvetica, sans-serif; padding: 10px;\"><div style=\"line-height: 1.5; font-size: 12px;\"><p style=\"line-height: 1.5; font-size: 14px; word-break: break-word; text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">For our clients luxury packaging, fast delivery & free returns!</p></div></div>', '85186436d0d416e34678a79fa79b8ecb.jpg', '7ee223b4f2770e13dc51f4f716a479f1.png', 'fd2785bbb387397c94a754ca46126afe.png', '<div style=\"line-height: 1.2; font-size: small; background-color: rgb(252, 238, 239); color: rgb(226, 78, 119); font-family: Poppins, Arial, Helvetica, sans-serif; padding: 10px 10px 0px;\"><div style=\"line-height: 1.2; font-size: 12px;\"><p style=\"line-height: 1.2; font-size: 18px; word-break: break-word; text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"line-height: inherit;\"><strong style=\"line-height: inherit;\"><a href=\"http://www.example.com/\" rel=\"noopener\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=http://www.example.com/&source=gmail&ust=1598963362033000&usg=AFQjCNEF-uGJ4N7J8MfNkOHkYx04zG1Qkg\" style=\"line-height: inherit; color: rgb(226, 78, 119);\">Curated Edits</a></strong></span></p></div></div><div style=\"line-height: 1.5; font-size: small; background-color: rgb(252, 238, 239); font-family: Poppins, Arial, Helvetica, sans-serif; padding: 10px;\"><div style=\"line-height: 1.5; font-size: 12px;\"><p style=\"line-height: 1.5; font-size: 14px; word-break: break-word; text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">We got you covered for anu occasion just see Whatâ€™s New section!</p></div></div>', '<p><br></p><p>Give $50 &amp; Get $50</p><p><br></p><p>Share your code and give $50 in delivery</p><p><br></p><p>fee credit to your friends.</p>', NULL, '016a984db423d673eb7e6aefa81f6ffc.png', '<p style=\"text-align: justify;\"><span style=\"color: #66add9; font-size: 18pt;\">Pour acc&eacute;der aux offres Black Friday avant tout le monde et s&eacute;curiser votre commande, il ne vous reste que quelques heures pour rejoindre la liste VIP</span></p>', '#01cff4', 'abandonEmailOne', '8b6e8eca0ade1559a1f50b9630e558ee.png', '<p style=\"text-align: center;\">[Name], votre commande est en attente : Il semblerait que vous n\'ayez pas compl&eacute;t&eacute; votre commande ! Avez-vous eu un probl&egrave;me au moment du paiement ? Si c\'est le cas merci de nous contacter au +33 XX XX XX XX XX Compl&eacute;tez vos informations de livraison maintenant, d&rsquo;autres personnes regardent votre [Nom.Article]&nbsp;</p>', 'promotionEmail', '016a984db423d673eb7e6aefa81f6ffc.png', '<p>test</p>', '1', 'abandonEmailOne', NULL, 'abandonEmailOne', NULL, '', '<p>Nous gardons votre panier encore quelques heures, le temps que vous passiez commande. Au-del&agrave; de ce d&eacute;lai, nous ne pourrons garantir la disponibilit&eacute; de votre [Nom.Article]. Profitez de XX% de r&eacute;duction valables jusqu&rsquo;&agrave; demain soir 00h00 avec le code XXXXX Entrez simplement ce code au moment du paiement !&nbsp;</p>', '', '<p>Ce soir &agrave; 00h00 votre offre expire, et votre [Nom.Article] disparait ! [Name], d&rsquo;ici quelques heures, votre [Nom.Article] sera supprim&eacute;. Voici donc 5 bonnes raisons de commander avant ce soir 00h00 : 1- Satisfait ou rembours&eacute; 30 jours 2- Paiements s&eacute;curis&eacute;s 3- [&hellip;]&nbsp;</p>\r\n<p>Et n&rsquo;oubliez pas vos XX% de r&eacute;duction avec le code XXXXX</p>\r\n<p>SAISIR MA DERNI&Egrave;RE CHANCE&nbsp;</p>', NULL, NULL, NULL, NULL, '366cb2adc3f874df5e9bb6857c555087.jpg', '1', '1', '0', NULL, 'shop', 'shop noe');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `w_email` text NOT NULL,
  `p_email` text NOT NULL,
  `ref_email` text NOT NULL,
  `f_email` text NOT NULL,
  `pr_email` text NOT NULL,
  `acart_email` text NOT NULL,
  `acart_email2` text NOT NULL,
  `acart_email3` text NOT NULL,
  `acart_email4` text NOT NULL,
  `time_acart1` int(11) NOT NULL,
  `time_acart2` int(11) NOT NULL,
  `time_acart3` int(11) NOT NULL,
  `time_acart4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `w_email`, `p_email`, `ref_email`, `f_email`, `pr_email`, `acart_email`, `acart_email2`, `acart_email3`, `acart_email4`, `time_acart1`, `time_acart2`, `time_acart3`, `time_acart4`) VALUES
(1, '<p>welcome to our website</p>', '<p>votre paiement a &eacute;t&eacute; re&ccedil;u avec succ&egrave;s&nbsp;</p>', '<p>votre commande a &eacute;t&eacute; rembours&eacute;e fait</p>', '<p>votre commande a &eacute;t&eacute; exp&eacute;di&eacute;e</p>', '<p>veuillez payer ce qui vous appartient</p>', '<p>you didn\'t complete your order click here to complete it .</p>', '<p>you didn\'t complete your order click here to complete it .<br></p>', '<p>you didn\'t complete your order click here to complete it .<br></p>', '<p>you didn\'t complete your order click here to complete it .<br></p>', 1, 5, 12, 24);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(400) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `page_title` text DEFAULT NULL,
  `page_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `menu_id`, `title`, `desc`, `serial`, `active_status`, `test`, `slug`, `page_title`, `page_desc`) VALUES
(2, 0, '1. Mon article n\'est toujours pas arrivé, est-ce normal ?', '<p class=\"MsoNormal\" style=\"margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; text-align: justify;\"><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif; color: #000000;\">La livraison prend environ 10 &agrave; 21 jours Si cela fait moins de 3 semaines, soyez juste patient, votre article est en cours de route. Si votre produit n\'est toujours pas l&agrave; apr&egrave;s 6 semaines MAXIMUM, nous vous rembourserons &agrave; 100%. Cela n\'arrive cependant que de mani&egrave;re tr&egrave;s exceptionnelle.</span></p>', 1, 1, '', '1-mon-article-nest-toujours-pas-arrivé-est-ce-normal', '', ''),
(3, 0, '2. Pourquoi la livraison est si longue ?', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Pour &eacute;viter les frais de stockage et de main d\'oeuvre &eacute;lev&eacute;s, nos marchandises se trouvent &agrave; l\'&eacute;tranger. Cela nous permet de vous offrir des articles &agrave; tarifs tr&egrave;s comp&eacute;titifs.</span></p>', 2, 1, '', '2-pourquoi-la-livraison-est-si-longue', '', ''),
(4, 0, '3. Je souhaite annuler ma commande, est-ce possible ?', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">S\'il vous pla&icirc;t soyez aviser qu\'une fois que vous soumettez la commande,elle sera automatiquement transmis par le syst&egrave;me &agrave; notre concepteur/base de donn&eacute;es du fournisseur pour le traitement imm&eacute;diat. Pour cette raison nous n\'acceptons strictement pas les demandes d\'annulation. Assurez-vous que votre d&eacute;cision d\'achat est d&eacute;finitive avant de v&eacute;rifier.</span></p>', 3, 1, '', '3-je-souhaite-annuler-ma-commande-est-ce-possible', '', ''),
(13, 13, '', '<h2 class=\"title faq--heading\" style=\"font-family: Domine, serif; font-weight: 700; font-size: 31px; text-transform: uppercase; line-height: 1.5; color: rgb(10, 1, 1); letter-spacing: 2px; text-rendering: optimizelegibility; -webkit-font-smoothing: antialiased; margin-bottom: 0.75em; padding-top: 30px;\">NOUS RECEVONS TRÈS RÉGULIÈREMENT DES QUESTIONS DE LA PART DE NOS VISITEURS VOICI LA LISTE DES PLUS FRÉQUENTES.</h2>', 6, 0, '', '', '', 'desc'),
(14, NULL, '5. Comment savoir si ma commande est en cours de livraison ou pas ?', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Cliquez sur l\'onglet \"suivi commande\" et entrez votre num&eacute;ro de commande et l\'adresse e-mail que vous avez renseign&eacute; lors de la commande. Vous verrez si le statut de la commande est en mode \"trait&eacute;\" ou \"non-trait&eacute;\".</span></p>', 5, 1, '', '5-comment-savoir-si-ma-commande-est-en-cours-de-livraison-ou-pas', '', ''),
(15, NULL, '6. Est-ce que vous expédiez à l\'étranger ?', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Tout &agrave; fait, nous pouvons exp&eacute;dier partout dans le monde.</span></p>', 6, 1, '', '6-est-ce-que-vous-expédiez-à-létranger', '', ''),
(16, NULL, '7. Mon article est endommagé, puis-je avoir un remboursement ?', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Tout &agrave; fait, si votre article arrive cass&eacute;, renvoyez-le nous et il vous sera rembours&eacute;.</span></p>', 7, 1, '', '7-mon-article-est-endommagé-puis-je-avoir-un-remboursement', '', ''),
(17, NULL, '8. Je me suis trompé dans la taille d\'un article, puis-je avoir un remboursement ?', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Malheureusement ce n\'est pas possible, faites donc bien attention avant de passer une commande, si votre article est un v&ecirc;tement.</span></p>', 8, 1, '', '8-je-me-suis-trompé-dans-la-taille-dun-article-puis-je-avoir-un-remboursement', '', ''),
(18, NULL, '9. Je ne suis pas satisfait de ma commande, puis-je être remboursé ?', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Tout &agrave; fait, il vous suffit de nous contacter et nous vous donnerons la proc&eacute;dure. Vous avez 15 jours &agrave; partir de la r&eacute;ception de la marchandise. Il vous suffira de nous renvoyer l\'article et nous le rembourserons &agrave; 100%. Les frais de renvoi sont &agrave; votre charge.</span></p>', 9, 1, '', '9-je-ne-suis-pas-satisfait-de-ma-commande-puis-je-être-remboursé', '', ''),
(19, NULL, '10. Comment faire pour vous contacter ?', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">E-mail (r&eacute;ponse en 24h dans 99% des cas) :</span>&nbsp;<a style=\"background-color: #d9d9d9; color: red; transition: color 0.1s ease-in 0s, background-color 0.1s ease-in 0s;\" title=\"Nous Contacter\" href=\"https://legend-dragon.com/pages/nous-contacter\">admin@u-childrenteeth.com</a></p>', 10, 1, '', '10-comment-faire-pour-vous-contacter', '', ''),
(20, NULL, '11. Puis-je vous contacter par téléphone ?', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Dans un souci de rapidit&eacute;, nous ne prenons pas d\'appel au t&eacute;l&eacute;phone. Traiter un e-mail nous prend quelques secondes ou minutes, alors qu\'un appel dure en moyenne plusieurs minutes. Pour &eacute;viter les frais et vous offrir les prix les plus bas, nous ne r&eacute;pondons que par e-mail. Sachez que nous n\'ignorons personne et r&eacute;pondons rapidement. Si vous avez des doutes, faites-le test.</span></p>', 11, 1, '', '11-puis-je-vous-contacter-par-téléphone', '', ''),
(21, NULL, '12. Comment passer une commande ?', '<p style=\"text-align: justify;\"><span style=\"color: #000000; font-size: 12pt;\">Choisissez simplement vos articles dans le menu d&eacute;roulant sur la page du produit et cliquez sur le bouton \"Acheter Maintenant\", puis suivez les &eacute;tapes pour compl&eacute;ter votre commande. Nous pr&eacute;parerons celle-ci et vous enverrons un &eacute;mail de confirmation quand votre colis est en route !</span></p>', 12, 1, '', '12-comment-passer-une-commande', '', ''),
(22, NULL, '13. Quelle méthode de paiement acceptez-vous?', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Nous acceptons Toutes les cartes bancaire.</span><br /><br /><span style=\"font-size: 12pt; color: #000000;\">Pour ce faire, vous n&rsquo;avez qu&rsquo;&agrave; s&eacute;lectionner &laquo; Acheter avec Paypal &raquo; sur la page du panier d&rsquo;Achat. Vous pourrez ensuite s&eacute;lectionner &laquo; Payer par carte de cr&eacute;dit ou carte de d&eacute;bit Visa &raquo; sur la page suivante. Ensuite, vous entrez votre pays (France), et dans le type de carte, vous pourrez s&eacute;lectionner Maestro, Aurore et m&ecirc;me Carte Bancaire :)</span></p>', 13, 1, '', '13-quelle-méthode-de-paiement-acceptez-vous', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `img` varchar(300) NOT NULL,
  `sub_title` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `text_position` text DEFAULT NULL,
  `bt_color` text DEFAULT NULL,
  `bt_hv_color` text DEFAULT NULL,
  `bt_ft_color` text DEFAULT NULL,
  `bt_hft_color` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `img`, `sub_title`, `title`, `text`, `position`, `url`, `active_status`, `text_position`, `bt_color`, `bt_hv_color`, `bt_ft_color`, `bt_hft_color`) VALUES
(4, '529f5be05ae83b18f5201e8bda33e005.jpg', '', '<h1 style=\"text-align: center;\"><span style=\"font-size: 18pt; color: #000000;\">98,7% de la bacterie dentaire</span><br /><span style=\"font-size: 18pt; color: #000000;\">&eacute;limin&eacute;e en 30 secondes !</span></h1>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 10pt;\">Rondre la routine orale quotidienne de chaque enfant plus rapide</span></p>', 'J\'ai commandé il y a un petit moment la machine et franchement j\'ai rien à redire....... Elle redonne vie à mes vielle vêtements', 1, 'https://u-childrenteeth.com//15', NULL, 'left', '#000000', '#000000', '#ffffff', '#0e0c0c');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE `mainmenu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(300) NOT NULL DEFAULT '',
  `footer` int(11) DEFAULT NULL,
  `single` int(11) DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL,
  `footer_column` int(11) DEFAULT NULL,
  `menu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`id`, `name`, `footer`, `single`, `serial`, `active_status`, `test`, `footer_column`, `menu`) VALUES
(4, 'À propos de nous', 0, 1, 4, 1, '', 0, 1),
(5, 'Contactez-nous', 1, 1, 5, 1, '', 0, 1),
(9, 'Retours et remboursements', 1, 1, 0, 1, '', 2, NULL),
(10, 'CGV', 1, 1, 0, 1, '', 2, NULL),
(11, 'Mentions legales', 1, 1, 0, 1, '', 2, NULL),
(12, 'Politique de confidentialité', 1, 1, 0, 1, '', 2, NULL),
(13, 'FAQs', 1, 1, 2, 1, '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `sub` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `date` int(11) NOT NULL,
  `seen` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `email`, `sub`, `message`, `date`, `seen`) VALUES
(1, 'Lahbib Hbarte', 'lhbib95@gmail.com', 'sdq', 'dzaaze azezae azaz', 1539557625, 1),
(2, 'Lahbib Hbarte', 'lhbib95@gmail.com', 'sdq', 'dzaaze azezae azaz', 1539557651, 1),
(3, 'SAS', 'saidbenihia@gmail.com', 'SASA', 'TEST', 1550005766, 1),
(4, 'Sulaiman Taniji', 'profaukdave@gmail.com', '89241715274', 'Dear CEO electriclint.store \r\nI have contacted you in your feedback form with an offer to manage a business of high remuneration. \r\nHere is the placement: \r\nValue of funds: ONE HUNDRED AND FORTY MILLION EUROS. \r\nLocation of funds:  BANK IN THE UK. \r\nPlacement opens to:  COMPANIES/INDIVIDUALS. \r\nFund disbursement:  AS SOON AS POSSIBLE. \r\nArea of investment interest: FOREX, CRYPTOCURRENCIES, REAL ESTATE, AGRICULTURE, INDUSTRY, HOTEL AND OTHERS. \r\nPurpose of funds:  LONG TERM INVESTMENT (AT LEAST) 10% ROI/PA. \r\nFunds owner:    RETIRED TRADER \r\nProof of fund:   READILY AVAILABLE UPON DEMAND. \r\nBenefits: 10% Return on Investment (ROI) will be your benefit. If you are capable and ready, kindly reply as soon as possible stating your full names, country of residence, occupation, age and direct phone number. Please, reach out for full details:  maerskinsurancebroker@gmail.com \r\nUpon your reply you will be contacted further from our company’s email address. \r\n \r\nWarm regards, \r\nSulaiman Taniji.', 1600535205, 1),
(5, 'Mike Arnold', 'no-replyJuG@google.com', '82926711376', 'Hi there \r\n \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.monkeydigital.co/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nN E W : \r\nDA60 is now available here \r\nhttps://www.monkeydigital.co/product/moz-da60-seo-plan/ \r\n \r\n \r\nthank you \r\nMike Arnold\r\n \r\nMonkey Digital \r\nsupport@monkeydigital.co', 1601284168, 1),
(6, 'James Walker', 'no-reply@hilkom-digital.de', '88616413617', 'Hi there \r\nI have just checked electriclint.store for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 1601525463, 1),
(7, 'Benjamin Ehinger', 'writingbyb@gmail.com', '84442615151', 'Hi! \r\nDo you struggle to find time to write fresh blog and website content? \r\nI am a highly-skilled blog and web content writer with more than 10 years of experience. Let me provide well-researched, 100 percent unique content specifically for you! \r\nContact Benjamin Today and Discover the Difference a Professional Blog Writer Makes! \r\nCheck out my current special rates here: https://writingbybenjamin.com/content-specials/ \r\nEmail - NewBusiness@writingbybenjamin.com', 1602112312, 1),
(8, 'Dave Stills', 'david@starkwoodmarketing.com', '88675958989', 'Hey electriclint.store, \r\n \r\nCan I get you on the horn to discuss relaunching marketing? \r\n \r\nGet started on a conversion focused landing page, an automated Linkedin marketing tool, or add explainer videos to your marketing portfolio and boost your ROI. \r\n \r\nWe also provide graphic design and call center services to handle all those new leads you\'ll be getting. \r\n \r\n \r\nd.stills@starkwoodmarketing.com \r\n \r\nMy website is http://StarkwoodMarketing.com', 1602301267, 1),
(9, 'RobertSmorp', 'info@deoleodigitalpublishing.com', '81894999357', 'HAVE YOU EVER WANTED TO CONVERT 100% OF YOUR PROSPECTS INTO LOYAL CUSTOMERS FOR YOUR BUSINESS? \r\n \r\nWatch the Official Trailer : https://youtu.be/hb7qJmAIb9M \r\n \r\nUse this link below to Download your E-book copy Now! (50%off! )@ https://www.tonydeoleo.com \r\n \r\nOr visit Amazon \r\nAmazon : https://www.amazon.com/gp/aw/d/B08CG7DYKX/ref=tmm_kin_title_0?ie=UTF8&qid=&sr= \r\n \r\nTHE ART OF DEALING: Becoming a mastercasino dealer. https://www.amazon.com/dp/B08KYKG9MT/ref=cm_sw_r_wa_awdb_t1_KknGFbA7N0C1C.', 1602592014, 1),
(10, 'Madi Manager', 'mehdi@meloncbd.co', '85376597957', 'Hi there, \r\n \r\nI wanted to reach out to share with you a promotion that might interest you: we’ll transform your website into a high-performance marketing machine that generates sales on autopilot. \r\n \r\nMadi from Auratonic here! We are a digital marketing agency. \r\n \r\nI will keep it short. \r\n \r\nOur high-performance websites are handcrafted by direct-response marketers and digital growth experts, not ‘web designers’ whose goal is to make things look pretty. \r\n \r\nWe focus on the data and user experience with a primary goal in mind: converting browsers into buyers. \r\n \r\nIf you are ready to get more clients, just get in touch with me directly at madi@auratonic.com and I’ll set up a quick call for a free website health check. \r\n \r\nThanks and have an awesome day! \r\n \r\n-Madi \r\n \r\nAccount Manager \r\nmadi@auratonic.com \r\nSchedule a call with me ? https://calendly.com/auratonic/madi \r\nP.S: This promotion will end on Monday 19th (Oct)', 1602758864, 1),
(11, 'Mike Douglas', 'no-replyJuG@google.com', '82319959794', 'Hi there \r\n \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.monkeydigital.co/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nN E W : \r\nDA60 is now available here \r\nhttps://www.monkeydigital.co/product/moz-da60-seo-plan/ \r\n \r\n \r\nthank you \r\nMike Douglas\r\n \r\nMonkey Digital \r\nsupport@monkeydigital.co', 1602826929, 1),
(12, 'James Alsopp', 'no-reply@hilkom-digital.de', '84321929969', 'Hеllо! \r\nI have just checked electriclint.store for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 1603425374, 1),
(13, 'Linda Ray', 'linda.ray@theremarketingguys.com', '86986652651', 'I noticed that you are not running Google Remarketing on your website. \r\n \r\nThe most affordable advertising is marketing to previous web viewers who didn\'t convert. \r\n \r\nRemarketing via Google & Facebook ads means tracking and engaging these \'lost\' customers. \r\nThey were on your site once and may only need a reminder of your services and business. \r\n \r\nCan I help you grab these low hanging fruits? \r\n \r\nLinda Ray \r\nEmail - linda@theremarketingguys.com \r\nWebsite - http://www.theremarketingguys.com', 1603442813, 1),
(14, 'WilliamMeere', 'abelbreath456@gmail.com', '86695929762', 'Looking for Facebook likes or Instagram followers? \r\nWe can help you. Please visit https://1000-likes.com/ to place your order.', 1603950169, 1),
(15, 'Mike Higgins', 'no-replyPams@gmail.com', '84677538724', 'Hеllо! \r\n \r\nIf you want to get ahead of your competition then you must have a higher Domain Authority score for your website. Its just as simple as that. \r\n \r\nWith our service your electriclint.store DA score will get above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.moz-boost.com/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nN E W : \r\nahrefs DR50 plan is possible now \r\nhttps://www.moz-boost.com/DR-50-60/ \r\n \r\n \r\nthank you \r\nMike Higgins\r\n \r\nsupport@moz-boost.com', 1605227920, 1),
(16, 'Peter Andrews', 'no-replyteamn@gmail.com', '81222225182', 'Hеllо! \r\n \r\nThis is Peter from Speed SEO Digital Agency \r\n \r\nLet us present you our newest addition: \r\nhttps://speed-seo.net/product/ahrefs-dr60/ \r\n \r\nWe all know how important is the ahrefs Domain Rating score, many believing its more important even than the Moz Domain Authority \r\n \r\n-	We are now able to improve your website`s DR score to get above 50 or even above 60 points \r\n-	Service comes with guaranteed results \r\n-	It will take only 30-40 days to accomplish this great feat for your website \r\n \r\nYou can read more information about our plan here \r\nhttps://speed-seo.net/product/ahrefs-dr60/ \r\n \r\nThe promised 45% discount coupon: AHREFS \r\n \r\nBest Regards \r\nPeter Andrews\r\n \r\nSpeed SEO Digital \r\nsupport@speed-seo.net', 1605533962, 1),
(17, 'Sam Weiss', 'sammyweiss93@gmail.com', '89924783863', 'Hi, I stumbled on electriclint.store yesterday and love the design (I\'ve been making websites since 2005). What platform is it made with? WordPress? \r\n \r\nThe only thing I noticed was that you appeared a bit low on Google search results. \r\n \r\nI manage several eCommerce websites and utilize a few services that really help me rank sites and get more traffic. \r\n \r\nJust want to share them with you as they can really help your site grow. \r\n \r\n \r\n1: LinksChain ( https://www.linkschain.io ) - which manage my link building from start to finish. It has more than doubled my traffic and sales. \r\n \r\n2: SemRush ( https://www.semrush.com ) - which is great for viewing competitor link structure and analyzing keywords. \r\n \r\n \r\nBoth tools have helped me rank my sites to the top of Google. \r\n \r\nIf you are passionate about growing your website, I\'d recommend checking them out. \r\n \r\nBy the way, let me know what theme you are using, it\'s pretty awesome. \r\n \r\nAnyway, have a good one, \r\n \r\nSam', 1605900857, 1),
(18, 'James Little', 'no-reply@google.com', '88415314659', 'Hi there \r\nI have just checked electriclint.store for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 1605936767, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `tele` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `coupon` varchar(300) DEFAULT NULL,
  `totalPrice` float NOT NULL,
  `shipping` float NOT NULL,
  `products` text NOT NULL,
  `date` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `address2` varchar(300) NOT NULL,
  `state` varchar(300) NOT NULL,
  `zipcode` varchar(300) NOT NULL,
  `country` varchar(3) NOT NULL,
  `email` varchar(300) NOT NULL,
  `note` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `payment_status` varchar(100) NOT NULL DEFAULT 'waiting',
  `pay` varchar(20) NOT NULL,
  `datetime` datetime DEFAULT current_timestamp(),
  `order_id` text DEFAULT NULL,
  `order_status` text DEFAULT NULL,
  `deliver` varchar(150) DEFAULT NULL,
  `deliver_number` varchar(150) DEFAULT NULL,
  `target` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `tele`, `address`, `city`, `coupon`, `totalPrice`, `shipping`, `products`, `date`, `status`, `address2`, `state`, `zipcode`, `country`, `email`, `note`, `ip`, `payment_status`, `pay`, `datetime`, `order_id`, `order_status`, `deliver`, `deliver_number`, `target`) VALUES
(112, 'mellouki mohamed', '', '107 impasse René mouchotte', 'Apt', NULL, 57.56, 1, '[{\"q\":\"1\",\"id\":\"15\",\"op\":null}]', 1606856328, 1, '', 'Vaucluse', '84400', 'FR', 'momovsmellouki@gmail.com', '', '86.76.162.33', 'VERIFIED', 'visa', '2020-12-01 21:58:48', '#OR08AC', NULL, NULL, NULL, '00'),
(114, 'mellouki mohamed', '', '107 impasse René mouchotte', 'Apt', NULL, 57.56, 1, '[{\"q\":\"1\",\"id\":\"15\",\"op\":{\"couleurs\":\"White\",\"Age\":\" 8-15ans\"}}]', 1607066446, 1, '', 'Vaucluse', '84400', 'FR', 'momovsmellouki@gmail.com', '', '46.193.0.131', 'VERIFIED', 'visa', '2020-12-04 08:20:46', '#OR9E62', NULL, NULL, NULL, '00'),
(115, 'azerty', '', 'fsdggggggdgshs', 'Apt', NULL, 71.06, 1, '[{\"q\":\"1\",\"id\":\"16\",\"op\":null},{\"q\":\"1\",\"id\":\"15\",\"op\":{\"couleurs\":\"White\",\"Age\":\" 8-15ans\"}}]', 1607090895, 1, 'gsgsgsgsgsg', 'Vaucluse', '84400', 'FR', 'momovsmellouki@gmail.com', '', '46.193.0.131', 'VERIFIED', 'visa', '2020-12-04 15:08:15', '#ORCB7A', NULL, NULL, NULL, '00'),
(116, 'ali', '1231121111', 'Multan, Pakistan', '- - - SELECT - - -', NULL, 545.04, 1, '[{\"q\":\"3\",\"id\":\"15\",\"op\":{\"Colors\":\"White\",\"Age\":\" 8-15ans\"}},{\"q\":null,\"id\":\"16\",\"op\":null},{\"q\":null,\"id\":\"17\",\"op\":null},{\"q\":null,\"id\":\"16\",\"op\":null},{\"q\":null,\"id\":\"17\",\"op\":null},{\"q\":\"1\",\"id\":\"15\",\"op\":null},{\"q\":\"1\",\"id\":\"15\",\"op\":null},{\"q\":\"1\",\"id\":\"15\",\"op\":null},{\"q\":\"1\",\"id\":\"15\",\"op\":null},{\"q\":\"1\",\"id\":\"15\",\"op\":null},{\"q\":\"1\",\"id\":\"15\",\"op\":null}]', 1607169090, 1, 'Multan, Pakistan', 'Windows', '11212', 'PK', 'junaidaliansaree@gmail.com', '', '182.186.99.208', 'VERIFIED', 'visa', '2020-12-05 12:51:30', '#ORF561', NULL, NULL, NULL, '00'),
(117, 'mellouki mohamed', '', '107 impasse René mouchotte', 'Apt', NULL, 115.12, 1, '[{\"q\":\"1\",\"id\":\"15\",\"op\":{\"couleurs\":\"White\",\"Age\":\" 8-15ans\"}},{\"q\":\"1\",\"id\":\"15\",\"op\":{\"couleurs\":\"Blue\",\"Age\":\" 8-15ans\"}}]', 1607170986, 1, '', 'Vaucluse', '84400', 'FR', 'momovsmellouki@gmail.com', '', '86.76.162.33', 'VERIFIED', 'visa', '2020-12-05 13:23:06', '#OR3E7F', NULL, NULL, NULL, '00');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `footer` int(11) NOT NULL DEFAULT 0,
  `page_title` text DEFAULT NULL,
  `page_desc` text DEFAULT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `footer`, `page_title`, `page_desc`, `menu_id`) VALUES
(8, 'Retours et remboursements', 'retours-et-remboursements', '<h1 style=\"font-size: 20px; font-family: \'Libre Baskerville\', serif; line-height: 1.5; color: #0a0101; letter-spacing: 1px; text-rendering: optimizelegibility; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-right: auto; margin-left: auto; clear: both; font-weight: bold; padding-top: 4px; background-color: #ffffff;\">Politique de Retour</h1>\r\n<div class=\"feature_divider\" style=\"width: 1180px; margin-bottom: 15px; border-bottom: 1px solid #0a0101; border-top-color: #0a0101; border-right-color: #0a0101; border-left-color: #0a0101; color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">&nbsp;</div>\r\n<div style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Notre politique dure 30 jours. Si 30 jours se sont &eacute;coul&eacute;s depuis votre achat, nous ne pouvons malheureusement pas vous offrir un remboursement ou un &eacute;change.<br /><br />Pour pouvoir b&eacute;n&eacute;ficier d&rsquo;un retour, votre article doit &ecirc;tre inutilis&eacute; et dans le m&ecirc;me &eacute;tat o&ugrave; vous l&rsquo;avez re&ccedil;u. Il doit &ecirc;tre &eacute;galement dans l&rsquo;emballage d&rsquo;origine.<br /><br />Plusieurs types de produits ne peuvent pas &ecirc;tre retourn&eacute;s. Les marchandises p&eacute;rissables telles que la nourriture, les fleurs ou les magazines ne peuvent pas &ecirc;tre retourn&eacute;es. Nous n&rsquo;acceptons pas non plus de produits &agrave; usage intime ou sanitaire, de produits dangereux ou de gaz ou de liquides inflammables.<br /><br />Autres articles qui ne peuvent pas &ecirc;tre retourn&eacute;s:<br />* Cartes cadeaux<br />* Logiciels t&eacute;l&eacute;chargeables<br />* Certains produits de sant&eacute; et de soins personnels<br /><br />Pour effectuer un retour, vous devez nous pr&eacute;senter un re&ccedil;u ou une preuve d&rsquo;achat.<br /><br />Veuillez s&rsquo;il vous plait ne pas renvoyer votre achat chez le fabricant.<br /><br />Il y a certaines situations o&ugrave; seul un remboursement partiel est accord&eacute;: (le cas &eacute;ch&eacute;ant)<br />* Livres avec des signes &eacute;vidents d&rsquo;utilisation.<br />* CD, DVD, cassette VHS, logiciel, jeu vid&eacute;o, cassette, ou disque vinyle qui a &eacute;t&eacute; ouvert.<br />* Tout article qui n&rsquo;est pas dans son &eacute;tat d&rsquo;origine, qui est endommag&eacute; ou qui pr&eacute;sente certaines pi&egrave;ces manquantes pour des raisons qui ne sont pas dues &agrave; une erreur de notre part.<br />* Tout article qui est retourn&eacute; plus de 30 jours apr&egrave;s la livraison.<br /><br />Remboursements (le cas &eacute;ch&eacute;ant)<br />Une fois que nous aurons re&ccedil;u et inspect&eacute; l&rsquo;article retourn&eacute;, nous vous enverrons un e-mail pour vous confirmer que nous l&rsquo;avons bien re&ccedil;u. Nous vous informerons &eacute;galement de notre d&eacute;cision quant &agrave; l&rsquo;approbation ou au rejet de votre demande de remboursement.<br />Si votre demande est approuv&eacute;e, alors votre remboursement sera trait&eacute;, et un cr&eacute;dit sera automatiquement appliqu&eacute; &agrave; votre carte de cr&eacute;dit ou &agrave; votre m&eacute;thode originale de paiement, dans un d&eacute;lai d&rsquo;un certain nombre de jours.<br /><br />Remboursements en retard ou manquants (le cas &eacute;ch&eacute;ant)<br />Si vous n&rsquo;avez pas encore re&ccedil;u votre remboursement, veuillez d&rsquo;abord consulter votre compte bancaire &agrave; nouveau.<br />Ensuite, contactez l&rsquo;entit&eacute; &eacute;mettrice de votre carte de cr&eacute;dit, car il pourrait y avoir un d&eacute;lai avant que votre remboursement ne soit officiellement affich&eacute;.<br />Ensuite, contactez votre banque. Il y a souvent un d&eacute;lai de traitement n&eacute;cessaire avant qu&rsquo;un remboursement ne soit affich&eacute;.<br />Si apr&egrave;s avoir effectu&eacute; toutes ces &eacute;tapes, vous n&rsquo;avez toujours pas re&ccedil;u votre remboursement, veuillez s&rsquo;il vous plait nous contacter &agrave; admin@electriclint.store.<br /><br />Articles sold&eacute;s (le cas &eacute;ch&eacute;ant)<br />Seuls les articles &agrave; prix courant peuvent &ecirc;tre rembours&eacute;s. Malheureusement, les articles sold&eacute;s ne sont pas remboursables.<br /><br />&Eacute;changes (le cas &eacute;ch&eacute;ant)<br />Nous rempla&ccedil;ons un article seulement s&rsquo;il est d&eacute;fectueux ou endommag&eacute;. Si dans ce cas vous souhaitez l&rsquo;&eacute;changer contre le m&ecirc;me article, envoyez-nous un e-mail &agrave; admin@u-childrenteeth.com<br />Cadeaux<br />Si l&rsquo;article retourn&eacute; &eacute;tait identifi&eacute; comme un cadeau lors de l&rsquo;achat et s&rsquo;il vous a &eacute;t&eacute; envoy&eacute; directement, vous recevrez un cr&eacute;dit-cadeau d&rsquo;une valeur &eacute;gale &agrave; celle de votre retour. Une fois que nous aurons re&ccedil;u l&rsquo;article retourn&eacute;, un ch&egrave;que-cadeau vous sera envoy&eacute; par courrier.<br /><br />Si l&rsquo;article n&rsquo;a pas &eacute;t&eacute; identifi&eacute; comme un cadeau lors de l&rsquo;achat, ou si le donateur du cadeau a pr&eacute;f&eacute;r&eacute; recevoir d&rsquo;abord l&rsquo;article pour vous l&rsquo;offrir plus tard, nous enverrons un remboursement au donateur du cadeau et il saura que vous avez retourn&eacute; l&rsquo;article.<br /><br />Il vous incombera de payer vos propres frais d&rsquo;exp&eacute;dition pour retourner votre article. Les co&ucirc;ts d&rsquo;exp&eacute;dition ne sont pas remboursables. Si vous recevez un remboursement, les frais de retour seront d&eacute;duits de celui-ci.<br /><br />En fonction de l&rsquo;endroit o&ugrave; vous vivez, le d&eacute;lai n&eacute;cessaire pour recevoir votre produit &eacute;chang&eacute; peut varier.<br /><br />Si vous exp&eacute;diez un article d&rsquo;une valeur sup&eacute;rieure &agrave; $75, vous devriez envisager d&rsquo;utiliser un service de livraison qui vous permet de suivre l&rsquo;envoi ou de souscrire &agrave; une assurance de livraison. Nous ne garantissons pas que nous recevrons l&rsquo;article que vous nous retournez.</div>', 0, '', '', 9);
INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `footer`, `page_title`, `page_desc`, `menu_id`) VALUES
(9, 'CGV', 'cgv', '<div>\r\n<div>\r\n<div>\r\n<div title=\"Page 6\">\r\n<div>\r\n<div>\r\n<div>\r\n<p><strong style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">CONDITIONS G&Eacute;N&Eacute;RALES DE VENTE ET D&rsquo;UTILISATION</strong><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">----</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><strong style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">VUE D&rsquo;ENSEMBLE</strong><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Ce site web est exploit&eacute; par carlaa. Sur ce site, les termes \"nous\", \"notre\" et \"nos\" font r&eacute;f&eacute;rence &agrave; carlaa. carlaa propose ce site web, y compris toutes les informations, tous les outils et tous les services qui y sont disponibles pour vous, l&rsquo;utilisateur, sous r&eacute;serve de votre acceptation de l&rsquo;ensemble des modalit&eacute;s, conditions, politiques et avis &eacute;nonc&eacute;s ici.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">En visitant ce site et/ou en achetant un de nos produits, vous vous engagez dans notre \"Service\" et acceptez d&rsquo;&ecirc;tre li&eacute; par les modalit&eacute;s suivantes (\"Conditions G&eacute;n&eacute;rales de Vente\", \"Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation\", \"Conditions\"), y compris les modalit&eacute;s, conditions et politiques additionnelles auxquelles il est fait r&eacute;f&eacute;rence ici et/ou accessibles par hyperlien. Ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation s&rsquo;appliquent &agrave; tous les utilisateurs de ce site, incluant mais ne se limitant pas, aux utilisateurs qui naviguent sur le site, qui sont des vendeurs, des clients, des marchands, et/ou des contributeurs de contenu.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Veuillez lire attentivement ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation avant d&rsquo;acc&eacute;der &agrave; ou d&rsquo;utiliser notre site web. En acc&eacute;dant &agrave; ou en utilisant une quelconque partie de ce site, vous acceptez d&rsquo;&ecirc;tre li&eacute; par ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation. Si vous n&rsquo;acceptez pas toutes les modalit&eacute;s et toutes les Conditions de cet accord, alors vous ne devez pas acc&eacute;der au site web ni utiliser les services qui y sont propos&eacute;s. Si ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation sont consid&eacute;r&eacute;es comme une offre, l&rsquo;acceptation se limite express&eacute;ment &agrave; ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Toutes les nouvelles fonctionnalit&eacute;s et tous les nouveaux outils qui seront ajout&eacute;s ult&eacute;rieurement &agrave; cette boutique seront &eacute;galement assujettis &agrave; ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation. Vous pouvez consulter la version la plus r&eacute;cente des Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation &agrave; tout moment sur cette page. Nous nous r&eacute;servons le droit de mettre &agrave; jour, de changer ou de remplacer toute partie de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation en publiant les mises &agrave; jour et/ou les modifications sur notre site web. Il vous incombe de consulter cette page r&eacute;guli&egrave;rement pour v&eacute;rifier si des modifications ont &eacute;t&eacute; apport&eacute;es. Votre utilisation continue du site web ou votre acc&egrave;s &agrave; celui-ci apr&egrave;s la publication de toute modification constitue une acception de votre part de ces modifications.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Notre boutique est h&eacute;berg&eacute;e sur Shopify Inc. Ils nous fournissent la plate-forme e-commerce qui nous permet de vous vendre nos produits et services.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 1 &ndash; CONDITIONS D&rsquo;UTILISATION DE NOTRE BOUTIQUE EN LIGNE</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">En acceptant ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation, vous d&eacute;clarez que vous avez atteint l&rsquo;&acirc;ge de la majorit&eacute; dans votre pays, &Eacute;tat ou province de r&eacute;sidence, et que vous nous avez donn&eacute; votre consentement pour permettre &agrave; toute personne d&rsquo;&acirc;ge mineur &agrave; votre charge d&rsquo;utiliser ce site web.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">L&rsquo;utilisation de nos produits &agrave; toute fin ill&eacute;gale ou non autoris&eacute;e est interdite, et vous ne devez pas non plus, dans le cadre de l&rsquo;utilisation du Service, violer les lois de votre juridiction (incluant mais ne se limitant pas aux lois relatives aux droits d&rsquo;auteur).</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Vous ne devez pas transmettre de vers, de virus ou tout autre code de nature destructive.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Toute infraction ou violation des pr&eacute;sentes Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation entra&icirc;nera la r&eacute;siliation imm&eacute;diate de vos Services.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 2 &ndash; CONDITIONS G&Eacute;N&Eacute;RALES</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous nous r&eacute;servons le droit de refuser &agrave; tout moment l&rsquo;acc&egrave;s aux services &agrave; toute personne, et ce, pour quelque raison que ce soit.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Vous comprenez que votre contenu (&agrave; l&rsquo;exclusion de vos informations de carte de cr&eacute;dit) pourrait &ecirc;tre transf&eacute;r&eacute; de mani&egrave;re non chiffr&eacute;e, et cela sous-entend (a) des transmissions sur divers r&eacute;seaux; et (b) des changements pour se conformer et s&rsquo;adapter aux exigences techniques pour la connexion des r&eacute;seaux ou appareils. Les informations de carte de cr&eacute;dit sont toujours chiffr&eacute;es pendant la transmission sur les r&eacute;seaux.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Vous acceptez de ne pas reproduire, dupliquer, copier, vendre, revendre ou exploiter une quelconque partie du Service ou utilisation du Service, ou un quelconque acc&egrave;s au Service ou contact sur le site web, par le biais duquel le Service est fourni, sans autorisation &eacute;crite expresse pr&eacute;alable de notre part.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Les titres utilis&eacute;s dans cet accord sont inclus pour votre commodit&eacute;, et ne vont ni limiter ni affecter ces Conditions.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 3 &ndash; EXACTITUDE, EXHAUSTIVIT&Eacute; ET ACTUALIT&Eacute; DES INFORMATIONS</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous ne sommes pas responsables si les informations disponibles sur ce site ne sont pas exactes, compl&egrave;tes ou &agrave; jour. Le contenu de ce site est fourni &agrave; titre indicatif uniquement et ne devrait pas constituer votre seule source d&rsquo;information pour prendre des d&eacute;cisions, sans consulter au pr&eacute;alable des sources d&rsquo;information plus exactes, plus compl&egrave;tes et actualis&eacute;es. Si vous d&eacute;cidez de vous fier au contenu pr&eacute;sent&eacute; sur ce site, vous le faites &agrave; votre propre risque.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Ce site pourrait contenir certaines informations ant&eacute;rieures. Ces informations ant&eacute;rieures, par nature, ne sont pas &agrave; jour et sont fournies &agrave; titre indicatif seulement. Nous nous r&eacute;servons le droit de modifier le contenu de ce site &agrave; tout moment, mais nous n&rsquo;avons aucune obligation de mettre &agrave; jour les informations sur notre site. Vous acceptez qu&rsquo;il vous incombe de surveiller les modifications apport&eacute;es &agrave; notre site.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 4 &ndash; MODIFICATIONS APPORT&Eacute;ES AU SERVICE ET AUX PRIX</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Les prix de nos produits peuvent &ecirc;tre modifi&eacute;s sans pr&eacute;avis.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous nous r&eacute;servons le droit &agrave; tout moment de modifier ou d&rsquo;interrompre le Service (ainsi que toute partie ou tout contenu du Service) sans pr&eacute;avis et en tout temps.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous ne serons pas responsables envers vous ou toute autre tierce partie de toute modification de prix, suspension ou interruption du Service.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 5 &ndash; PRODUITS OU SERVICES (le cas &eacute;ch&eacute;ant)</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Certains produits ou services peuvent &ecirc;tre exclusivement disponibles en ligne sur notre site web. Ces produits ou services peuvent &ecirc;tre disponibles en quantit&eacute;s limit&eacute;es et peuvent uniquement faire l&rsquo;objet de retours ou d&rsquo;&eacute;changes conform&eacute;ment &agrave; notre Politique de Retour.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous avons fait de notre mieux pour afficher aussi clairement que possible les couleurs et images de nos produits qui apparaissent sur notre boutique. Nous ne pouvons pas garantir que l&rsquo;affichage des couleurs par l&rsquo;&eacute;cran de votre ordinateur sera pr&eacute;cis.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous nous r&eacute;servons le droit, sans toutefois &ecirc;tre oblig&eacute;s de le faire, de limiter les ventes de nos produits ou services &agrave; toute personne, et dans toute r&eacute;gion g&eacute;ographique ou juridiction. Nous pourrions exercer ce droit au cas par cas. Nous nous r&eacute;servons le droit de limiter les quantit&eacute;s de tout produit ou service que nous offrons. Toutes les descriptions de produits et tous les prix des produits peuvent &ecirc;tre modifi&eacute;s en tout temps sans avis pr&eacute;alable, &agrave; notre seule discr&eacute;tion. Nous nous r&eacute;servons le droit d&rsquo;arr&ecirc;ter d&rsquo;offrir un produit &agrave; tout moment. Toute offre de service ou de produit pr&eacute;sent&eacute;e sur ce site est nulle l&agrave; o&ugrave; la loi l&rsquo;interdit.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous ne garantissons pas que la qualit&eacute; de tous les produits, services, informations, ou toute autre marchandise que vous avez obtenue ou achet&eacute;e r&eacute;pondra &agrave; vos attentes, ni que toute erreur dans le Service sera corrig&eacute;e.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 6 &ndash; EXACTITUDE DE LA FACTURATION ET DES INFORMATIONS DE COMPTE</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous nous r&eacute;servons le droit de refuser toute commande que vous passez aupr&egrave;s de nous. Nous pourrions, &agrave; notre seule discr&eacute;tion, r&eacute;duire ou annuler les quantit&eacute;s achet&eacute;es par personne, par foyer ou par commande. Ces restrictions pourraient inclure des commandes pass&eacute;es par ou depuis le m&ecirc;me compte client, la m&ecirc;me carte de cr&eacute;dit, et/ou des commandes qui utilisent la m&ecirc;me adresse de facturation et/ou d&rsquo;exp&eacute;dition. Dans le cas o&ugrave; nous modifierions une commande ou si nous venions &agrave; l&rsquo;annuler, nous pourrions tenter de vous avertir en vous contactant &agrave; l&rsquo;e-mail et/ou &agrave; l&rsquo;adresse de facturation/au num&eacute;ro de t&eacute;l&eacute;phone fourni au moment o&ugrave; la commande a &eacute;t&eacute; pass&eacute;e. Nous nous r&eacute;servons le droit de limiter ou d&rsquo;interdire les commandes qui, &agrave; notre seul jugement, pourraient sembler provenir de marchands, de revendeurs ou de distributeurs.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Vous acceptez de fournir des informations de commande et de compte &agrave; jour, compl&egrave;tes et exactes pour toutes les commandes pass&eacute;es sur notre boutique. Vous vous engagez &agrave; mettre &agrave; jour rapidement votre compte et vos autres informations, y compris votre adresse e-mail, vos num&eacute;ros de cartes de cr&eacute;dit et dates d&rsquo;expiration, pour que nous poussions compl&eacute;ter vos transactions et vous contacter si n&eacute;cessaire.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Pour plus de d&eacute;tails, veuillez consulter notre Politique de Retour.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 7 &ndash; OUTILS FACULTATIFS</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous pourrions vous fournir l&rsquo;acc&egrave;s &agrave; des outils de tierces parties sur lesquels nous n&rsquo;exer&ccedil;ons ni suivi, ni contr&ocirc;le, ni influence.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Vous reconnaissez et acceptez le fait que nous fournissons l&rsquo;acc&egrave;s &agrave; de tels outils \"tels quels\" et \"selon la disponibilit&eacute;\", sans aucune garantie, repr&eacute;sentation ou condition d&rsquo;aucune sorte et sans aucune approbation. Nous n&rsquo;aurons aucune responsabilit&eacute; l&eacute;gale r&eacute;sultant de ou li&eacute;e &agrave; l&rsquo;utilisation de ces outils facultatifs de tiers.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Si vous utilisez les outils facultatifs offerts sur le site, vous le faites &agrave; votre propre risque et &agrave; votre propre discr&eacute;tion, et vous devriez consulter les conditions auxquelles ces outils sont offerts par le ou les fournisseurs tiers concern&eacute;(s).</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous pourrions aussi, &agrave; l&rsquo;avenir, offrir de nouveaux services et/ou de nouvelles fonctionnalit&eacute;s sur notre site (incluant de nouveaux outils et de nouvelles ressources). Ces nouvelles fonctionnalit&eacute;s et ces nouveaux services seront &eacute;galement assujettis &agrave; ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 8 &ndash; LIENS DE TIERS</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Certains contenus, produits et services disponibles par le biais de notre Service pourraient inclure des &eacute;l&eacute;ments provenant de tierces parties.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Les liens provenant de tierces parties sur ce site pourraient vous rediriger vers des sites web de tiers qui ne sont pas affili&eacute;s &agrave; nous. Nous ne sommes pas tenus d&rsquo;examiner ou d&rsquo;&eacute;valuer le contenu ou l&rsquo;exactitude de ces sites, et nous ne garantissons pas et n&rsquo;assumons aucune responsabilit&eacute; quant &agrave; tout contenu, site web, produit, service ou autre &eacute;l&eacute;ment accessible sur ou depuis ces sites tiers.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous ne sommes pas responsables des pr&eacute;judices ou dommages li&eacute;s &agrave; l&rsquo;achat ou &agrave; l&rsquo;utilisation de biens, de services, de ressources, de contenu, ou de toute autre transaction effectu&eacute;e en rapport avec ces sites web de tiers. Veuillez lire attentivement les politiques et pratiques des tierces parties et assurez-vous de bien les comprendre avant de vous engager dans toute transaction. Les plaintes, r&eacute;clamations, pr&eacute;occupations, ou questions concernant les produits de ces tiers doivent &ecirc;tre soumises &agrave; ces m&ecirc;mes tiers.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 9 &ndash; COMMENTAIRES, SUGGESTIONS ET AUTRES PROPOSITIONS D&rsquo;UTILISATEURS</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Si, &agrave; notre demande, vous soumettez des contenus sp&eacute;cifiques (par exemple, pour participer &agrave; des concours), ou si sans demande de notre part, vous envoyez des id&eacute;es cr&eacute;atives, des suggestions, des propositions, des plans ou d&rsquo;autres &eacute;l&eacute;ments, que ce soit en ligne, par e-mail, par courrier, ou autrement (collectivement, \"commentaires\"), vous nous accordez le droit, en tout temps, et sans restriction, d&rsquo;&eacute;diter, de copier, de publier, de distribuer, de traduire et d&rsquo;utiliser autrement et dans tout m&eacute;dia tout commentaire que vous nous envoyez. Nous ne sommes pas et ne devrons pas &ecirc;tre tenus (1) de maintenir la confidentialit&eacute; des commentaires; (2) de payer une compensation &agrave; quiconque pour tout commentaire fourni; (3) de r&eacute;pondre aux commentaires.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous pourrions, mais n&rsquo;avons aucune obligation de le faire, surveiller, modifier ou supprimer le contenu que nous estimons, &agrave; notre seule discr&eacute;tion, &ecirc;tre ill&eacute;gal, offensant, mena&ccedil;ant, injurieux, diffamatoire, pornographique, obsc&egrave;ne ou autrement r&eacute;pr&eacute;hensible, ou qui enfreint toute propri&eacute;t&eacute; intellectuelle ou ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Vous vous engagez &agrave; &eacute;crire des commentaires qui ne violent pas les droits de tierces parties, y compris les droits d&rsquo;auteur, les marques d&eacute;pos&eacute;es, la confidentialit&eacute;, la personnalit&eacute;, ou d&rsquo;autres droits personnels ou de propri&eacute;t&eacute;. Vous convenez &eacute;galement que vos commentaires ne contiendront pas de contenu ill&eacute;gal, diffamatoire, offensif ou obsc&egrave;ne, et qu&rsquo;ils ne contiendront non plus pas de virus informatique ou d&rsquo;autres logiciels malveillants qui pourraient affecter de quelque mani&egrave;re que ce soit le fonctionnement du Service ou tout autre site web associ&eacute;. Vous ne pouvez pas utiliser de fausse adresse e-mail, pr&eacute;tendre &ecirc;tre quelqu&rsquo;un que vous n&rsquo;&ecirc;tes pas, ou essayer de nous induire nous et/ou les tierces parties en erreur quant &agrave; l&rsquo;origine de vos commentaires. Vous &ecirc;tes enti&egrave;rement responsable de tous les commentaires que vous publiez ainsi que de leur exactitude. Nous n&rsquo;assumons aucune responsabilit&eacute; et d&eacute;clinons tout engagement quant &agrave; tout commentaire que vous publiez ou que toute autre tierce partie publie.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 10 &ndash; RENSEIGNEMENTS PERSONNELS</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">La soumission de vos renseignements personnels sur notre boutique est r&eacute;gie par notre Politique de Confidentialit&eacute;. Cliquez ici pour consulter notre Politique de Confidentialit&eacute;.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 11 &ndash; ERREURS, INEXACTITUDES ET OMISSIONS</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Il se pourrait qu&rsquo;il y ait parfois des informations sur notre site ou dans le Service qui pourraient contenir des erreurs typographiques, des inexactitudes ou des omissions qui pourraient &ecirc;tre relatives aux descriptions de produits, aux prix, aux promotions, aux offres, aux frais d&rsquo;exp&eacute;dition des produits, aux d&eacute;lais de livraison et &agrave; la disponibilit&eacute;. Nous nous r&eacute;servons le droit de corriger toute erreur, inexactitude, omission, et de changer ou de mettre &agrave; jour des informations ou d&rsquo;annuler des commandes, si une quelconque information dans le Service ou sur tout autre site web associ&eacute; est inexacte, et ce, en tout temps et sans pr&eacute;avis (y compris apr&egrave;s que vous ayez pass&eacute; votre commande).</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous ne sommes pas tenus de mettre &agrave; jour, de modifier ou de clarifier les informations dans le Service ou sur tout autre site web associ&eacute;, incluant mais ne se limitant pas aux informations sur les prix, sauf si requis par la loi. Aucune date d&eacute;finie de mise &agrave; jour ou d&rsquo;actualisation dans le Service ou sur tout autre site web associ&eacute; ne devrait &ecirc;tre prise en compte pour conclure que les informations dans le Service ou sur tout autre site web associ&eacute; ont &eacute;t&eacute; modifi&eacute;es ou mises &agrave; jour.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 12 &ndash; UTILISATIONS INTERDITES</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">En plus des interdictions &eacute;nonc&eacute;es dans les Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation, il vous est interdit d&rsquo;utiliser le site ou son contenu: (a) &agrave; des fins ill&eacute;gales; (b) pour inciter des tiers &agrave; r&eacute;aliser des actes ill&eacute;gaux ou &agrave; y prendre part; (c) pour enfreindre toute ordonnance r&eacute;gionale ou toute loi, r&egrave;gle ou r&eacute;gulation internationale, f&eacute;d&eacute;rale, provinciale ou &eacute;tatique; (d) pour porter atteinte &agrave; ou violer nos droits de propri&eacute;t&eacute; intellectuelle ou ceux de tierces parties; (e) pour harceler, maltraiter, insulter, blesser, diffamer, calomnier, d&eacute;nigrer, intimider ou discriminer quiconque en fonction du sexe, de l&rsquo;orientation sexuelle, de la religion, de l&rsquo;origine ethnique, de la race, de l&rsquo;&acirc;ge, de l&rsquo;origine nationale, ou d&rsquo;un handicap; (f) pour soumettre des renseignements faux ou trompeurs; (g) pour t&eacute;l&eacute;verser ou transmettre des virus ou tout autre type de code malveillant qui sera ou pourrait &ecirc;tre utilis&eacute; de mani&egrave;re &agrave; compromettre la fonctionnalit&eacute; ou le fonctionnement du Service ou de tout autre site web associ&eacute;, ind&eacute;pendant, ou d&rsquo;Internet; (h) pour recueillir ou suivre les renseignements personnels d&rsquo;autrui; (i) pour polluposter, hame&ccedil;onner, d&eacute;tourner un domaine, extorquer des informations, parcourir, explorer ou balayer le web (ou toute autre ressource); (j) &agrave; des fins obsc&egrave;nes ou immorales; ou (k) pour porter atteinte ou contourner les mesures de s&eacute;curit&eacute; de notre Service, de tout autre site web, ou d&rsquo;Internet. Nous nous r&eacute;servons le droit de r&eacute;silier votre utilisation du Service ou de tout site web connexe pour avoir enfreint les utilisations interdites.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 13 &ndash; EXCLUSION DE GARANTIES ET LIMITATION DE RESPONSABILIT&Eacute;</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous ne garantissons ni ne pr&eacute;tendons en aucun cas que votre utilisation de notre Service sera ininterrompue, rapide, s&eacute;curis&eacute;e ou sans erreur.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous ne garantissons pas que les r&eacute;sultats qui pourraient &ecirc;tre obtenus par le biais de l&rsquo;utilisation du Service seront exacts ou fiables.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Vous acceptez que de temps &agrave; autre, nous puissions supprimer le Service pour des p&eacute;riodes de temps ind&eacute;finies ou annuler le Service &agrave; tout moment, sans vous avertir au pr&eacute;alable.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Vous convenez express&eacute;ment que votre utilisation du Service, ou votre incapacit&eacute; &agrave; utiliser celui-ci, est &agrave; votre seul risque. Le Service ainsi que tous les produits et services qui vous sont fournis par le biais du Service sont (sauf mention expresse du contraire de notre part) fournis \"tels quels\" et \"selon la disponibilit&eacute;\" pour votre utilisation, et ce sans repr&eacute;sentation, sans garanties et sans conditions d\'aucune sorte, expresses ou implicites, y compris toutes les garanties implicites de commercialisation ou de qualit&eacute; marchande, d&rsquo;adaptation &agrave; un usage particulier, de durabilit&eacute;, de titre et d&rsquo;absence de contrefa&ccedil;on.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">carlaa, nos directeurs, responsables, employ&eacute;s, soci&eacute;t&eacute;s affili&eacute;es, agents, contractants, stagiaires, fournisseurs, prestataires de services et conc&eacute;dants ne peuvent en aucun cas &ecirc;tre tenus responsables de toute blessure, perte, r&eacute;clamation, ou de dommages directs, indirects, accessoires, punitifs, sp&eacute;ciaux, ou dommages cons&eacute;cutifs de quelque nature qu&rsquo;ils soient, incluant mais ne se limitant pas &agrave; la perte de profits, de revenus, d&rsquo;&eacute;conomies, de donn&eacute;es, aux co&ucirc;ts de remplacement ou tous dommages similaires, qu&rsquo;ils soient contractuels, d&eacute;lictuels (m&ecirc;me en cas de n&eacute;gligence), de responsabilit&eacute; stricte ou autre, r&eacute;sultant de votre utilisation de tout service ou produit provenant de ce Service, ou quant &agrave; toute autre r&eacute;clamation li&eacute;e de quelque mani&egrave;re que ce soit &agrave; votre utilisation du Service ou de tout produit, incluant mais ne se limitant &agrave; toute erreur ou omission dans tout contenu, ou &agrave; toute perte ou tout dommage de toute sorte d&eacute;coulant de l&rsquo;utilisation du Service ou de tout contenu (ou produit) publi&eacute;, transmis, ou autrement rendu disponible par le biais du Service, m&ecirc;me si vous avez &eacute;t&eacute; avertis de la possibilit&eacute; qu&rsquo;ils surviennent. Parce que certains &Eacute;tats ou certaines juridictions ne permettent pas d&rsquo;exclure ou de limiter la responsabilit&eacute; quant aux dommages cons&eacute;cutifs ou accessoires, notre responsabilit&eacute; sera limit&eacute;e dans la mesure maximale permise par la loi.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 14 &ndash; INDEMNISATION</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Vous acceptez d&rsquo;indemniser, de d&eacute;fendre et de prot&eacute;ger carlaa, notre soci&eacute;t&eacute;-m&egrave;re, nos filiales, soci&eacute;t&eacute;s affili&eacute;es, partenaires, responsables, directeurs, agents, contractants, conc&eacute;dants, prestataires de services, sous-traitants, fournisseurs, stagiaires et employ&eacute;s, quant &agrave; toute r&eacute;clamation ou demande, incluant les honoraires raisonnables d&rsquo;avocat, faite par toute tierce partie &agrave; cause de ou d&eacute;coulant de votre violation de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation ou des documents auxquels ils font r&eacute;f&eacute;rence, ou de votre violation de toute loi ou des droits d&rsquo;un tiers.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 15 &ndash; DISSOCIABILIT&Eacute;</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Dans le cas o&ugrave; une disposition des pr&eacute;sentes Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation serait jug&eacute;e comme &eacute;tant ill&eacute;gale, nulle ou inapplicable, cette disposition pourra n&eacute;anmoins &ecirc;tre appliqu&eacute;e dans la pleine mesure permise par la loi, et la partie non applicable devra &ecirc;tre consid&eacute;r&eacute;e comme &eacute;tant dissoci&eacute;e de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation, cette dissociation ne devra pas affecter la validit&eacute; et l&rsquo;applicabilit&eacute; de toutes les autres dispositions restantes.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 16 &ndash; R&Eacute;SILIATION</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Les obligations et responsabilit&eacute;s engag&eacute;es par les parties avant la date de r&eacute;siliation resteront en vigueur apr&egrave;s la r&eacute;siliation de cet accord et ce &agrave; toutes les fins.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation sont effectives &agrave; moins et jusqu&rsquo;&agrave; ce qu&rsquo;elles soient r&eacute;sili&eacute;es par ou bien vous ou non. Vous pouvez r&eacute;silier ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation &agrave; tout moment en nous avisant que vous ne souhaitez plus utiliser nos Services, ou lorsque vous cessez d&rsquo;utiliser notre site.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Si nous jugeons, &agrave; notre seule discr&eacute;tion, que vous &eacute;chouez, ou si nous soup&ccedil;onnons que vous avez &eacute;t&eacute; incapable de vous conformer aux modalit&eacute;s de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation, nous pourrions aussi r&eacute;silier cet accord &agrave; tout moment sans vous pr&eacute;venir &agrave; l&rsquo;avance et vous resterez responsable de toutes les sommes redevables jusqu&rsquo;&agrave; la date de r&eacute;siliation (celle-ci &eacute;tant incluse), et/ou nous pourrions vous refuser l&rsquo;acc&egrave;s &agrave; nos Services (ou &agrave; toute partie de ceux-ci).</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 17 &ndash; INT&Eacute;GRALIT&Eacute; DE L&rsquo;ACCORD</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Tout manquement de notre part &agrave; l&rsquo;exercice ou &agrave; l&rsquo;application de tout droit ou de toute disposition des pr&eacute;sentes Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation ne devrait pas constituer une renonciation &agrave; ce droit ou &agrave; cette disposition.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation ou toute autre politique ou r&egrave;gle d&rsquo;exploitation que nous publions sur ce site ou relativement au Service constituent l&rsquo;int&eacute;gralit&eacute; de l&rsquo;entente et de l&rsquo;accord entre vous et nous et r&eacute;gissent votre utilisation du Service, et remplacent toutes les communications, propositions et tous les accords, ant&eacute;rieurs et contemporains, oraux ou &eacute;crits, entre vous et nous (incluant, mais ne se limitant pas &agrave; toute version ant&eacute;rieure des Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation).</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Toute ambigu&iuml;t&eacute; quant &agrave; l&rsquo;interpr&eacute;tation de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation ne doit pas &ecirc;tre interpr&eacute;t&eacute;e en d&eacute;faveur de la partie r&eacute;dactrice.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 18 &ndash; LOI APPLICABLE</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation, ainsi que tout autre accord s&eacute;par&eacute; par le biais duquel nous vous fournissons des Services seront r&eacute;gis et interpr&eacute;t&eacute;s en vertu des lois en vigueur &agrave; 15, rue la d&eacute;fence, paris, J, 92000, France.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 19 &ndash; MODIFICATIONS APPORT&Eacute;ES AUX CONDITIONS G&Eacute;N&Eacute;RALES DE VENTE ET D&rsquo;UTILISATION</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Vous pouvez consulter la version la plus r&eacute;cente des Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation &agrave; tout moment sur cette page.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Nous nous r&eacute;servons le droit, &agrave; notre seule discr&eacute;tion, de mettre &agrave; jour, de modifier ou de remplacer toute partie de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation en publiant les mises &agrave; jour et les changements sur notre site. Il vous incombe de visiter notre site r&eacute;guli&egrave;rement pour v&eacute;rifier si des changements ont &eacute;t&eacute; apport&eacute;s. Votre utilisation continue de ou votre acc&egrave;s &agrave; notre site apr&egrave;s la publication de toute modification apport&eacute;e &agrave; ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation constitue une acceptation de ces modifications.</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">ARTICLE 20 &ndash; COORDONN&Eacute;ES</span><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><br style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"color: #0a0101; font-family: \'Libre Baskerville\', serif; font-size: 15px; background-color: #ffffff;\">Les questions concernant les Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation devraient nous &ecirc;tre envoy&eacute;es &agrave; admin@electriclint.store.</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 0, '', '', 10);
INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `footer`, `page_title`, `page_desc`, `menu_id`) VALUES
(10, 'Mentions légales', 'mentions-légales', '<h1 style=\"text-align: left;\"><span style=\"color: #000000;\"><strong><span style=\"font-size: 12pt;\">Mentions l&eacute;gales</span></strong></span></h1>\r\n<div>\r\n<h2 style=\"text-align: left;\"><span style=\"color: #000000;\"><strong><span style=\"font-size: 12pt;\">1. Pr&eacute;sentation du site.</span></strong></span></h2>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">En vertu de l\'article 6 de la loi n&deg; 2004-575 du 21 juin 2004 pour la confiance dans l\'&eacute;conomie num&eacute;rique, il est pr&eacute;cis&eacute; aux utilisateurs du site <span style=\"color: #fed9e0;\"><a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a></span>&nbsp;l\'identit&eacute; des diff&eacute;rents intervenants dans le cadre de sa r&eacute;alisation et de son suivi :</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Propri&eacute;taire : Childrenteeth&nbsp;</span><br /><span style=\"font-size: 10pt; color: #000000;\">Cr&eacute;ateur&nbsp;:&nbsp;<span style=\"color: #000000; font-size: 13.3333px;\">Childrenteeth</span>&nbsp;</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Responsable publication : Electriclint &ndash; admin@electriclint.store</span><br /><span style=\"font-size: 10pt; color: #000000;\">Le responsable publication est une personne physique ou une personne morale.</span><br /><span style=\"font-size: 10pt; color: #000000;\">Webmaster : Electriclint &ndash; admin@<span style=\"color: #000000; font-size: 13.3333px;\"> Childrenteeth</span>.com</span><br /><span style=\"font-size: 10pt; color: #000000;\">H&eacute;bergeur&nbsp;: OVH &ndash; france</span></p>\r\n<h3 style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">2. Conditions g&eacute;n&eacute;rales d&rsquo;utilisation du site et des services propos&eacute;s.</span></h3>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">L&rsquo;utilisation du site <a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a><a style=\"color: #000000;\" href=\"http://https//carlaa.fr//\">&nbsp;</a>implique l&rsquo;acceptation pleine et enti&egrave;re des conditions g&eacute;n&eacute;rales d&rsquo;utilisation ci-apr&egrave;s d&eacute;crites. Ces conditions d&rsquo;utilisation sont susceptibles d&rsquo;&ecirc;tre modifi&eacute;es ou compl&eacute;t&eacute;es &agrave; tout moment, les utilisateurs du site&nbsp;</span><a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a><a style=\"color: #000000;\" href=\"http://https//carlaa.fr//\">&nbsp;</a><span style=\"color: #000000; font-size: 10pt;\">sont donc invit&eacute;s &agrave; les consulter de mani&egrave;re r&eacute;guli&egrave;re.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Ce site est normalement accessible &agrave; tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut &ecirc;tre toutefois d&eacute;cid&eacute;e par Carlaa, qui s&rsquo;efforcera alors de communiquer pr&eacute;alablement aux utilisateurs les dates et heures de l&rsquo;intervention.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Le site&nbsp;</span><a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/ </a><span style=\"color: #000000; font-size: 10pt;\">est mis &agrave; jour r&eacute;guli&egrave;rement par electriclint. De la m&ecirc;me fa&ccedil;on, les mentions l&eacute;gales peuvent &ecirc;tre modifi&eacute;es &agrave; tout moment : elles s&rsquo;imposent n&eacute;anmoins &agrave; l&rsquo;utilisateur qui est invit&eacute; &agrave; s&rsquo;y r&eacute;f&eacute;rer le plus souvent possible afin d&rsquo;en prendre connaissance.</span></p>\r\n<h3 style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">3. Description des services fournis.</span></h3>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Le site </span><a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a><span style=\"color: #000000; font-size: 10pt;\">&nbsp;a pour objet de fournir une information concernant l&rsquo;ensemble des activit&eacute;s de la soci&eacute;t&eacute;.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Carlaa s&rsquo;efforce de fournir sur le site&nbsp;<a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/ </a>des informations aussi pr&eacute;cises que possible. Toutefois, il ne pourra &ecirc;tre tenue responsable des omissions, des inexactitudes et des carences dans la mise &agrave; jour, qu&rsquo;elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Tous les informations indiqu&eacute;es sur le site&nbsp;<a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a>sont donn&eacute;es &agrave; titre indicatif, et sont susceptibles d&rsquo;&eacute;voluer. Par ailleurs, les renseignements figurant sur le site&nbsp;<a style=\"color: #000000;\" href=\"http://https//carlaa.fr//\">h</a><a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a>&nbsp;ne sont pas exhaustifs. Ils sont donn&eacute;s sous r&eacute;serve de modifications ayant &eacute;t&eacute; apport&eacute;es depuis leur mise en ligne.</span></p>\r\n<h3 style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">4. Limitations contractuelles sur les donn&eacute;es techniques.</span></h3>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Le site utilise la technologie JavaScript.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Le site Internet ne pourra &ecirc;tre tenu responsable de dommages mat&eacute;riels li&eacute;s &agrave; l&rsquo;utilisation du site. De plus, l&rsquo;utilisateur du site s&rsquo;engage &agrave; acc&eacute;der au site en utilisant un mat&eacute;riel r&eacute;cent, ne contenant pas de virus et avec un navigateur de derni&egrave;re g&eacute;n&eacute;ration mis-&agrave;-jour</span></p>\r\n<h3 style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">5. Propri&eacute;t&eacute; intellectuelle et contrefa&ccedil;ons.</span></h3>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Carlaa est propri&eacute;taire des droits de propri&eacute;t&eacute; intellectuelle ou d&eacute;tient les droits d&rsquo;usage sur tous les &eacute;l&eacute;ments accessibles sur le site, notamment les textes, images, graphismes, logo, ic&ocirc;nes, sons, logiciels.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Toute reproduction, repr&eacute;sentation, modification, publication, adaptation de tout ou partie des &eacute;l&eacute;ments du site, quel que soit le moyen ou le proc&eacute;d&eacute; utilis&eacute;, est interdite, sauf autorisation &eacute;crite pr&eacute;alable de : <a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">Childrenteeth</a>.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Toute exploitation non autoris&eacute;e du site ou de l&rsquo;un quelconque des &eacute;l&eacute;ments qu&rsquo;il contient sera consid&eacute;r&eacute;e comme constitutive d&rsquo;une contrefa&ccedil;on et poursuivie conform&eacute;ment aux dispositions des articles L.335-2 et suivants du Code de Propri&eacute;t&eacute; Intellectuelle.</span></p>\r\n<h3 style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">6. Limitations de responsabilit&eacute;.</span></h3>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Carlaa ne pourra &ecirc;tre tenue responsable des dommages directs et indirects caus&eacute;s au mat&eacute;riel de l&rsquo;utilisateur, lors de l&rsquo;acc&egrave;s au site&nbsp;</span><a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a><span style=\"color: #000000; font-size: 10pt;\">, et r&eacute;sultant soit de l&rsquo;utilisation d&rsquo;un mat&eacute;riel ne r&eacute;pondant pas aux sp&eacute;cifications indiqu&eacute;es au point 4, soit de l&rsquo;apparition d&rsquo;un bug ou d&rsquo;une incompatibilit&eacute;.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Carlaa ne pourra &eacute;galement &ecirc;tre tenue responsable des dommages indirects (tels par exemple qu&rsquo;une perte de march&eacute; ou perte d&rsquo;une chance) cons&eacute;cutifs &agrave; l&rsquo;utilisation du site&nbsp;<a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a>.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Des espaces interactifs (possibilit&eacute; de poser des questions dans l&rsquo;espace contact) sont &agrave; la disposition des utilisateurs. Carlaa se r&eacute;serve le droit de supprimer, sans mise en demeure pr&eacute;alable, tout contenu d&eacute;pos&eacute; dans cet espace qui contreviendrait &agrave; la l&eacute;gislation applicable en France, en particulier aux dispositions relatives &agrave; la protection des donn&eacute;es. Le cas &eacute;ch&eacute;ant, Carlaa se r&eacute;serve &eacute;galement la possibilit&eacute; de mettre en cause la responsabilit&eacute; civile et/ou p&eacute;nale de l&rsquo;utilisateur, notamment en cas de message &agrave; caract&egrave;re raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilis&eacute; (texte, photographie&hellip;).</span></p>\r\n<h3 style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">7. Gestion des donn&eacute;es personnelles.</span></h3>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">En France, les donn&eacute;es personnelles sont notamment prot&eacute;g&eacute;es par la loi n&deg; 78-87 du 6 janvier 1978, la loi n&deg; 2004-801 du 6 ao&ucirc;t 2004, l\'article L. 226-13 du Code p&eacute;nal et la Directive Europ&eacute;enne du 24 octobre 1995.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">A l\'occasion de l\'utilisation du site&nbsp;<a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a>, peuvent &ecirc;tres recueillies : l\'URL des liens par l\'interm&eacute;diaire desquels l\'utilisateur a acc&eacute;d&eacute; au site&nbsp;<a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a><a style=\"color: #000000;\" href=\"http://https//carlaa.fr//\">&nbsp;</a>, le fournisseur d\'acc&egrave;s de l\'utilisateur, l\'adresse de protocole Internet (IP) de l\'utilisateur.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">En tout &eacute;tat de cause Childrenteeth ne collecte des informations personnelles relatives &agrave; l\'utilisateur que pour le besoin de certains services propos&eacute;s par le site&nbsp;<a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a>. L\'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu\'il proc&egrave;de par lui-m&ecirc;me &agrave; leur saisie. Il est alors pr&eacute;cis&eacute; &agrave; l\'utilisateur du site&nbsp;<a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a>&nbsp;l&rsquo;obligation ou non de fournir ces informations.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Conform&eacute;ment aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative &agrave; l&rsquo;informatique, aux fichiers et aux libert&eacute;s, tout utilisateur dispose d&rsquo;un droit d&rsquo;acc&egrave;s, de rectification et d&rsquo;opposition aux donn&eacute;es personnelles le concernant, en effectuant sa demande &eacute;crite et sign&eacute;e, accompagn&eacute;e d&rsquo;une copie du titre d&rsquo;identit&eacute; avec signature du titulaire de la pi&egrave;ce, en pr&eacute;cisant l&rsquo;adresse &agrave; laquelle la r&eacute;ponse doit &ecirc;tre envoy&eacute;e.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Aucune information personnelle de l\'utilisateur du site&nbsp;<a style=\"color: #000000;\" href=\"http://https//carlaa.fr//\">https://electriclint.store </a>&nbsp;n\'est publi&eacute;e &agrave; l\'insu de l\'utilisateur, &eacute;chang&eacute;e, transf&eacute;r&eacute;e, c&eacute;d&eacute;e ou vendue sur un support quelconque &agrave; des tiers. Seule l\'hypoth&egrave;se du rachat de Carlaa et de ses droits permettrait la transmission des dites informations &agrave; l\'&eacute;ventuel acqu&eacute;reur qui serait &agrave; son tour tenu de la m&ecirc;me obligation de conservation et de modification des donn&eacute;es vis &agrave; vis de l\'utilisateur du site&nbsp;</span><a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Les bases de donn&eacute;es sont prot&eacute;g&eacute;es par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative &agrave; la protection juridique des bases de donn&eacute;es.</span></p>\r\n<h3 style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">8. Liens hypertextes et cookies.</span></h3>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Le site&nbsp;</span><a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a><span style=\"color: #000000; font-size: 10pt;\">&nbsp;contient un certain nombre de liens hypertextes vers d&rsquo;autres sites, mis en place avec l&rsquo;autorisation de Carlaa. Cependant, Carlaa n&rsquo;a pas la possibilit&eacute; de v&eacute;rifier le contenu des sites ainsi visit&eacute;s, et n&rsquo;assumera en cons&eacute;quence aucune responsabilit&eacute; de ce fait.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">La navigation sur le site&nbsp;</span><a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/ </a><span style=\"color: #000000; font-size: 10pt;\">est susceptible de provoquer l&rsquo;installation de cookie(s) sur l&rsquo;ordinateur de l&rsquo;utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l&rsquo;identification de l&rsquo;utilisateur, mais qui enregistre des informations relatives &agrave; la navigation d&rsquo;un ordinateur sur un site. Les donn&eacute;es ainsi obtenues visent &agrave; faciliter la navigation ult&eacute;rieure sur le site, et ont &eacute;galement vocation &agrave; permettre diverses mesures de fr&eacute;quentation.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Le refus d&rsquo;installation d&rsquo;un cookie peut entra&icirc;ner l&rsquo;impossibilit&eacute; d&rsquo;acc&eacute;der &agrave; certains services. L&rsquo;utilisateur peut toutefois configurer son ordinateur de la mani&egrave;re suivante, pour refuser l&rsquo;installation des cookies :</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialit&eacute; et choisissez Bloquer tous les cookies. Validez sur Ok.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Sous Firefox : en haut de la fen&ecirc;tre du navigateur, cliquez sur le bouton Firefox, puis aller dans l\'onglet Options. Cliquer sur l\'onglet Vie priv&eacute;e. Param&eacute;trez les R&egrave;gles de conservation sur : utiliser les param&egrave;tres personnalis&eacute;s pour l\'historique. Enfin d&eacute;cochez-la pour d&eacute;sactiver les cookies.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Sous Safari : Cliquez en haut &agrave; droite du navigateur sur le pictogramme de menu (symbolis&eacute; par un rouage). S&eacute;lectionnez Param&egrave;tres. Cliquez sur Afficher les param&egrave;tres avanc&eacute;s. Dans la section \"Confidentialit&eacute;\", cliquez sur Param&egrave;tres de contenu. Dans la section \"Cookies\", vous pouvez bloquer les cookies.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Sous Chrome : Cliquez en haut &agrave; droite du navigateur sur le pictogramme de menu (symbolis&eacute; par trois lignes horizontales). S&eacute;lectionnez Param&egrave;tres. Cliquez sur Afficher les param&egrave;tres avanc&eacute;s. Dans la section \"Confidentialit&eacute;\", cliquez sur pr&eacute;f&eacute;rences. Dans l\'onglet \"Confidentialit&eacute;\", vous pouvez bloquer les cookies.</span></p>\r\n<h3 style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">9. Droit applicable et attribution de juridiction.</span></h3>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Tout litige en relation avec l&rsquo;utilisation du site&nbsp;<a style=\"color: #fed9e0;\" href=\"http://https//carlaa.fr//\">https://u-childrenteeth.com/</a>est soumis au droit fran&ccedil;ais. Il est fait attribution exclusive de juridiction aux tribunaux comp&eacute;tents de Paris.</span></p>\r\n<h3 style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">10. Les principales lois concern&eacute;es.</span></h3>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Loi n&deg; 78-17 du 6 janvier 1978, notamment modifi&eacute;e par la loi n&deg; 2004-801 du 6 ao&ucirc;t 2004 relative &agrave; l\'informatique, aux fichiers et aux libert&eacute;s.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Loi n&deg; 2004-575 du 21 juin 2004 pour la confiance dans l\'&eacute;conomie num&eacute;rique.</span></p>\r\n<h3 style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">11. Lexique.</span></h3>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Utilisateur : Internaute se connectant, utilisant le site susnomm&eacute;.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt; color: #000000;\">Informations personnelles : &laquo; les informations qui permettent, sous quelque forme que ce soit, directement ou non, l\'identification des personnes physiques auxquelles elles s\'appliquent &raquo; (article 4 de la loi n&deg; 78-17 du 6 janvier 1978).</span></p>\r\n</div>', 0, '', '', 11);
INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `footer`, `page_title`, `page_desc`, `menu_id`) VALUES
(11, 'Politique de confidentialité', 'politique-de-confidentialité', '<p><span style=\"font-weight: bolder; color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 12pt;\">CONDITIONS G&Eacute;N&Eacute;RALES DE VENTE ET D&rsquo;UTILISATION</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 12pt;\">----</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"font-weight: bolder; color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 12pt;\">VUE D&rsquo;ENSEMBLE</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Ce site web est exploit&eacute; par electriclint. Sur ce site, les termes \"nous\", \"notre\" et \"nos\" font r&eacute;f&eacute;rence &agrave; electriclint. electriclint propose ce site web, y compris toutes les informations, tous les outils et tous les services qui y sont disponibles pour vous, l&rsquo;utilisateur, sous r&eacute;serve de votre acceptation de l&rsquo;ensemble des modalit&eacute;s, conditions, politiques et avis &eacute;nonc&eacute;s ici.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">En visitant ce site et/ou en achetant un de nos produits, vous vous engagez dans notre \"Service\" et acceptez d&rsquo;&ecirc;tre li&eacute; par les modalit&eacute;s suivantes (\"Conditions G&eacute;n&eacute;rales de Vente\", \"Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation\", \"Conditions\"), y compris les modalit&eacute;s, conditions et politiques additionnelles auxquelles il est fait r&eacute;f&eacute;rence ici et/ou accessibles par hyperlien. Ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation s&rsquo;appliquent &agrave; tous les utilisateurs de ce site, incluant mais ne se limitant pas, aux utilisateurs qui naviguent sur le site, qui sont des vendeurs, des clients, des marchands, et/ou des contributeurs de contenu.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Veuillez lire attentivement ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation avant d&rsquo;acc&eacute;der &agrave; ou d&rsquo;utiliser notre site web. En acc&eacute;dant &agrave; ou en utilisant une quelconque partie de ce site, vous acceptez d&rsquo;&ecirc;tre li&eacute; par ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation. Si vous n&rsquo;acceptez pas toutes les modalit&eacute;s et toutes les Conditions de cet accord, alors vous ne devez pas acc&eacute;der au site web ni utiliser les services qui y sont propos&eacute;s. Si ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation sont consid&eacute;r&eacute;es comme une offre, l&rsquo;acceptation se limite express&eacute;ment &agrave; ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Toutes les nouvelles fonctionnalit&eacute;s et tous les nouveaux outils qui seront ajout&eacute;s ult&eacute;rieurement &agrave; cette boutique seront &eacute;galement assujettis &agrave; ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation. Vous pouvez consulter la version la plus r&eacute;cente des Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation &agrave; tout moment sur cette page. Nous nous r&eacute;servons le droit de mettre &agrave; jour, de changer ou de remplacer toute partie de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation en publiant les mises &agrave; jour et/ou les modifications sur notre site web. Il vous incombe de consulter cette page r&eacute;guli&egrave;rement pour v&eacute;rifier si des modifications ont &eacute;t&eacute; apport&eacute;es. Votre utilisation continue du site web ou votre acc&egrave;s &agrave; celui-ci apr&egrave;s la publication de toute modification constitue une acception de votre part de ces modifications.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Notre boutique est h&eacute;berg&eacute;e sur Shopify Inc. Ils nous fournissent la plate-forme e-commerce qui nous permet de vous vendre nos produits et services.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 1 &ndash; CONDITIONS D&rsquo;UTILISATION DE NOTRE BOUTIQUE EN LIGNE</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">En acceptant ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation, vous d&eacute;clarez que vous avez atteint l&rsquo;&acirc;ge de la majorit&eacute; dans votre pays, &Eacute;tat ou province de r&eacute;sidence, et que vous nous avez donn&eacute; votre consentement pour permettre &agrave; toute personne d&rsquo;&acirc;ge mineur &agrave; votre charge d&rsquo;utiliser ce site web.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">L&rsquo;utilisation de nos produits &agrave; toute fin ill&eacute;gale ou non autoris&eacute;e est interdite, et vous ne devez pas non plus, dans le cadre de l&rsquo;utilisation du Service, violer les lois de votre juridiction (incluant mais ne se limitant pas aux lois relatives aux droits d&rsquo;auteur).</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Vous ne devez pas transmettre de vers, de virus ou tout autre code de nature destructive.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Toute infraction ou violation des pr&eacute;sentes Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation entra&icirc;nera la r&eacute;siliation imm&eacute;diate de vos Services.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 2 &ndash; CONDITIONS G&Eacute;N&Eacute;RALES</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous nous r&eacute;servons le droit de refuser &agrave; tout moment l&rsquo;acc&egrave;s aux services &agrave; toute personne, et ce, pour quelque raison que ce soit.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Vous comprenez que votre contenu (&agrave; l&rsquo;exclusion de vos informations de carte de cr&eacute;dit) pourrait &ecirc;tre transf&eacute;r&eacute; de mani&egrave;re non chiffr&eacute;e, et cela sous-entend (a) des transmissions sur divers r&eacute;seaux; et (b) des changements pour se conformer et s&rsquo;adapter aux exigences techniques pour la connexion des r&eacute;seaux ou appareils. Les informations de carte de cr&eacute;dit sont toujours chiffr&eacute;es pendant la transmission sur les r&eacute;seaux.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Vous acceptez de ne pas reproduire, dupliquer, copier, vendre, revendre ou exploiter une quelconque partie du Service ou utilisation du Service, ou un quelconque acc&egrave;s au Service ou contact sur le site web, par le biais duquel le Service est fourni, sans autorisation &eacute;crite expresse pr&eacute;alable de notre part.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Les titres utilis&eacute;s dans cet accord sont inclus pour votre commodit&eacute;, et ne vont ni limiter ni affecter ces Conditions.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 3 &ndash; EXACTITUDE, EXHAUSTIVIT&Eacute; ET ACTUALIT&Eacute; DES INFORMATIONS</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous ne sommes pas responsables si les informations disponibles sur ce site ne sont pas exactes, compl&egrave;tes ou &agrave; jour. Le contenu de ce site est fourni &agrave; titre indicatif uniquement et ne devrait pas constituer votre seule source d&rsquo;information pour prendre des d&eacute;cisions, sans consulter au pr&eacute;alable des sources d&rsquo;information plus exactes, plus compl&egrave;tes et actualis&eacute;es. Si vous d&eacute;cidez de vous fier au contenu pr&eacute;sent&eacute; sur ce site, vous le faites &agrave; votre propre risque.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Ce site pourrait contenir certaines informations ant&eacute;rieures. Ces informations ant&eacute;rieures, par nature, ne sont pas &agrave; jour et sont fournies &agrave; titre indicatif seulement. Nous nous r&eacute;servons le droit de modifier le contenu de ce site &agrave; tout moment, mais nous n&rsquo;avons aucune obligation de mettre &agrave; jour les informations sur notre site. Vous acceptez qu&rsquo;il vous incombe de surveiller les modifications apport&eacute;es &agrave; notre site.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 4 &ndash; MODIFICATIONS APPORT&Eacute;ES AU SERVICE ET AUX PRIX</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Les prix de nos produits peuvent &ecirc;tre modifi&eacute;s sans pr&eacute;avis.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous nous r&eacute;servons le droit &agrave; tout moment de modifier ou d&rsquo;interrompre le Service (ainsi que toute partie ou tout contenu du Service) sans pr&eacute;avis et en tout temps.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous ne serons pas responsables envers vous ou toute autre tierce partie de toute modification de prix, suspension ou interruption du Service.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 5 &ndash; PRODUITS OU SERVICES (le cas &eacute;ch&eacute;ant)</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Certains produits ou services peuvent &ecirc;tre exclusivement disponibles en ligne sur notre site web. Ces produits ou services peuvent &ecirc;tre disponibles en quantit&eacute;s limit&eacute;es et peuvent uniquement faire l&rsquo;objet de retours ou d&rsquo;&eacute;changes conform&eacute;ment &agrave; notre Politique de Retour.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous avons fait de notre mieux pour afficher aussi clairement que possible les couleurs et images de nos produits qui apparaissent sur notre boutique. Nous ne pouvons pas garantir que l&rsquo;affichage des couleurs par l&rsquo;&eacute;cran de votre ordinateur sera pr&eacute;cis.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous nous r&eacute;servons le droit, sans toutefois &ecirc;tre oblig&eacute;s de le faire, de limiter les ventes de nos produits ou services &agrave; toute personne, et dans toute r&eacute;gion g&eacute;ographique ou juridiction. Nous pourrions exercer ce droit au cas par cas. Nous nous r&eacute;servons le droit de limiter les quantit&eacute;s de tout produit ou service que nous offrons. Toutes les descriptions de produits et tous les prix des produits peuvent &ecirc;tre modifi&eacute;s en tout temps sans avis pr&eacute;alable, &agrave; notre seule discr&eacute;tion. Nous nous r&eacute;servons le droit d&rsquo;arr&ecirc;ter d&rsquo;offrir un produit &agrave; tout moment. Toute offre de service ou de produit pr&eacute;sent&eacute;e sur ce site est nulle l&agrave; o&ugrave; la loi l&rsquo;interdit.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous ne garantissons pas que la qualit&eacute; de tous les produits, services, informations, ou toute autre marchandise que vous avez obtenue ou achet&eacute;e r&eacute;pondra &agrave; vos attentes, ni que toute erreur dans le Service sera corrig&eacute;e.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 6 &ndash; EXACTITUDE DE LA FACTURATION ET DES INFORMATIONS DE COMPTE</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous nous r&eacute;servons le droit de refuser toute commande que vous passez aupr&egrave;s de nous. Nous pourrions, &agrave; notre seule discr&eacute;tion, r&eacute;duire ou annuler les quantit&eacute;s achet&eacute;es par personne, par foyer ou par commande. Ces restrictions pourraient inclure des commandes pass&eacute;es par ou depuis le m&ecirc;me compte client, la m&ecirc;me carte de cr&eacute;dit, et/ou des commandes qui utilisent la m&ecirc;me adresse de facturation et/ou d&rsquo;exp&eacute;dition. Dans le cas o&ugrave; nous modifierions une commande ou si nous venions &agrave; l&rsquo;annuler, nous pourrions tenter de vous avertir en vous contactant &agrave; l&rsquo;e-mail et/ou &agrave; l&rsquo;adresse de facturation/au num&eacute;ro de t&eacute;l&eacute;phone fourni au moment o&ugrave; la commande a &eacute;t&eacute; pass&eacute;e. Nous nous r&eacute;servons le droit de limiter ou d&rsquo;interdire les commandes qui, &agrave; notre seul jugement, pourraient sembler provenir de marchands, de revendeurs ou de distributeurs.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Vous acceptez de fournir des informations de commande et de compte &agrave; jour, compl&egrave;tes et exactes pour toutes les commandes pass&eacute;es sur notre boutique. Vous vous engagez &agrave; mettre &agrave; jour rapidement votre compte et vos autres informations, y compris votre adresse e-mail, vos num&eacute;ros de cartes de cr&eacute;dit et dates d&rsquo;expiration, pour que nous poussions compl&eacute;ter vos transactions et vous contacter si n&eacute;cessaire.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Pour plus de d&eacute;tails, veuillez consulter notre Politique de Retour.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 7 &ndash; OUTILS FACULTATIFS</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous pourrions vous fournir l&rsquo;acc&egrave;s &agrave; des outils de tierces parties sur lesquels nous n&rsquo;exer&ccedil;ons ni suivi, ni contr&ocirc;le, ni influence.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Vous reconnaissez et acceptez le fait que nous fournissons l&rsquo;acc&egrave;s &agrave; de tels outils \"tels quels\" et \"selon la disponibilit&eacute;\", sans aucune garantie, repr&eacute;sentation ou condition d&rsquo;aucune sorte et sans aucune approbation. Nous n&rsquo;aurons aucune responsabilit&eacute; l&eacute;gale r&eacute;sultant de ou li&eacute;e &agrave; l&rsquo;utilisation de ces outils facultatifs de tiers.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Si vous utilisez les outils facultatifs offerts sur le site, vous le faites &agrave; votre propre risque et &agrave; votre propre discr&eacute;tion, et vous devriez consulter les conditions auxquelles ces outils sont offerts par le ou les fournisseurs tiers concern&eacute;(s).</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous pourrions aussi, &agrave; l&rsquo;avenir, offrir de nouveaux services et/ou de nouvelles fonctionnalit&eacute;s sur notre site (incluant de nouveaux outils et de nouvelles ressources). Ces nouvelles fonctionnalit&eacute;s et ces nouveaux services seront &eacute;galement assujettis &agrave; ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 8 &ndash; LIENS DE TIERS</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Certains contenus, produits et services disponibles par le biais de notre Service pourraient inclure des &eacute;l&eacute;ments provenant de tierces parties.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Les liens provenant de tierces parties sur ce site pourraient vous rediriger vers des sites web de tiers qui ne sont pas affili&eacute;s &agrave; nous. Nous ne sommes pas tenus d&rsquo;examiner ou d&rsquo;&eacute;valuer le contenu ou l&rsquo;exactitude de ces sites, et nous ne garantissons pas et n&rsquo;assumons aucune responsabilit&eacute; quant &agrave; tout contenu, site web, produit, service ou autre &eacute;l&eacute;ment accessible sur ou depuis ces sites tiers.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous ne sommes pas responsables des pr&eacute;judices ou dommages li&eacute;s &agrave; l&rsquo;achat ou &agrave; l&rsquo;utilisation de biens, de services, de ressources, de contenu, ou de toute autre transaction effectu&eacute;e en rapport avec ces sites web de tiers. Veuillez lire attentivement les politiques et pratiques des tierces parties et assurez-vous de bien les comprendre avant de vous engager dans toute transaction. Les plaintes, r&eacute;clamations, pr&eacute;occupations, ou questions concernant les produits de ces tiers doivent &ecirc;tre soumises &agrave; ces m&ecirc;mes tiers.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 9 &ndash; COMMENTAIRES, SUGGESTIONS ET AUTRES PROPOSITIONS D&rsquo;UTILISATEURS</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Si, &agrave; notre demande, vous soumettez des contenus sp&eacute;cifiques (par exemple, pour participer &agrave; des concours), ou si sans demande de notre part, vous envoyez des id&eacute;es cr&eacute;atives, des suggestions, des propositions, des plans ou d&rsquo;autres &eacute;l&eacute;ments, que ce soit en ligne, par e-mail, par courrier, ou autrement (collectivement, \"commentaires\"), vous nous accordez le droit, en tout temps, et sans restriction, d&rsquo;&eacute;diter, de copier, de publier, de distribuer, de traduire et d&rsquo;utiliser autrement et dans tout m&eacute;dia tout commentaire que vous nous envoyez. Nous ne sommes pas et ne devrons pas &ecirc;tre tenus (1) de maintenir la confidentialit&eacute; des commentaires; (2) de payer une compensation &agrave; quiconque pour tout commentaire fourni; (3) de r&eacute;pondre aux commentaires.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous pourrions, mais n&rsquo;avons aucune obligation de le faire, surveiller, modifier ou supprimer le contenu que nous estimons, &agrave; notre seule discr&eacute;tion, &ecirc;tre ill&eacute;gal, offensant, mena&ccedil;ant, injurieux, diffamatoire, pornographique, obsc&egrave;ne ou autrement r&eacute;pr&eacute;hensible, ou qui enfreint toute propri&eacute;t&eacute; intellectuelle ou ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Vous vous engagez &agrave; &eacute;crire des commentaires qui ne violent pas les droits de tierces parties, y compris les droits d&rsquo;auteur, les marques d&eacute;pos&eacute;es, la confidentialit&eacute;, la personnalit&eacute;, ou d&rsquo;autres droits personnels ou de propri&eacute;t&eacute;. Vous convenez &eacute;galement que vos commentaires ne contiendront pas de contenu ill&eacute;gal, diffamatoire, offensif ou obsc&egrave;ne, et qu&rsquo;ils ne contiendront non plus pas de virus informatique ou d&rsquo;autres logiciels malveillants qui pourraient affecter de quelque mani&egrave;re que ce soit le fonctionnement du Service ou tout autre site web associ&eacute;. Vous ne pouvez pas utiliser de fausse adresse e-mail, pr&eacute;tendre &ecirc;tre quelqu&rsquo;un que vous n&rsquo;&ecirc;tes pas, ou essayer de nous induire nous et/ou les tierces parties en erreur quant &agrave; l&rsquo;origine de vos commentaires. Vous &ecirc;tes enti&egrave;rement responsable de tous les commentaires que vous publiez ainsi que de leur exactitude. Nous n&rsquo;assumons aucune responsabilit&eacute; et d&eacute;clinons tout engagement quant &agrave; tout commentaire que vous publiez ou que toute autre tierce partie publie.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 10 &ndash; RENSEIGNEMENTS PERSONNELS</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">La soumission de vos renseignements personnels sur notre boutique est r&eacute;gie par notre Politique de Confidentialit&eacute;. Cliquez ici pour consulter notre Politique de Confidentialit&eacute;.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 11 &ndash; ERREURS, INEXACTITUDES ET OMISSIONS</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Il se pourrait qu&rsquo;il y ait parfois des informations sur notre site ou dans le Service qui pourraient contenir des erreurs typographiques, des inexactitudes ou des omissions qui pourraient &ecirc;tre relatives aux descriptions de produits, aux prix, aux promotions, aux offres, aux frais d&rsquo;exp&eacute;dition des produits, aux d&eacute;lais de livraison et &agrave; la disponibilit&eacute;. Nous nous r&eacute;servons le droit de corriger toute erreur, inexactitude, omission, et de changer ou de mettre &agrave; jour des informations ou d&rsquo;annuler des commandes, si une quelconque information dans le Service ou sur tout autre site web associ&eacute; est inexacte, et ce, en tout temps et sans pr&eacute;avis (y compris apr&egrave;s que vous ayez pass&eacute; votre commande).</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous ne sommes pas tenus de mettre &agrave; jour, de modifier ou de clarifier les informations dans le Service ou sur tout autre site web associ&eacute;, incluant mais ne se limitant pas aux informations sur les prix, sauf si requis par la loi. Aucune date d&eacute;finie de mise &agrave; jour ou d&rsquo;actualisation dans le Service ou sur tout autre site web associ&eacute; ne devrait &ecirc;tre prise en compte pour conclure que les informations dans le Service ou sur tout autre site web associ&eacute; ont &eacute;t&eacute; modifi&eacute;es ou mises &agrave; jour.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 12 &ndash; UTILISATIONS INTERDITES</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">En plus des interdictions &eacute;nonc&eacute;es dans les Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation, il vous est interdit d&rsquo;utiliser le site ou son contenu: (a) &agrave; des fins ill&eacute;gales; (b) pour inciter des tiers &agrave; r&eacute;aliser des actes ill&eacute;gaux ou &agrave; y prendre part; (c) pour enfreindre toute ordonnance r&eacute;gionale ou toute loi, r&egrave;gle ou r&eacute;gulation internationale, f&eacute;d&eacute;rale, provinciale ou &eacute;tatique; (d) pour porter atteinte &agrave; ou violer nos droits de propri&eacute;t&eacute; intellectuelle ou ceux de tierces parties; (e) pour harceler, maltraiter, insulter, blesser, diffamer, calomnier, d&eacute;nigrer, intimider ou discriminer quiconque en fonction du sexe, de l&rsquo;orientation sexuelle, de la religion, de l&rsquo;origine ethnique, de la race, de l&rsquo;&acirc;ge, de l&rsquo;origine nationale, ou d&rsquo;un handicap; (f) pour soumettre des renseignements faux ou trompeurs; (g) pour t&eacute;l&eacute;verser ou transmettre des virus ou tout autre type de code malveillant qui sera ou pourrait &ecirc;tre utilis&eacute; de mani&egrave;re &agrave; compromettre la fonctionnalit&eacute; ou le fonctionnement du Service ou de tout autre site web associ&eacute;, ind&eacute;pendant, ou d&rsquo;Internet; (h) pour recueillir ou suivre les renseignements personnels d&rsquo;autrui; (i) pour polluposter, hame&ccedil;onner, d&eacute;tourner un domaine, extorquer des informations, parcourir, explorer ou balayer le web (ou toute autre ressource); (j) &agrave; des fins obsc&egrave;nes ou immorales; ou (k) pour porter atteinte ou contourner les mesures de s&eacute;curit&eacute; de notre Service, de tout autre site web, ou d&rsquo;Internet. Nous nous r&eacute;servons le droit de r&eacute;silier votre utilisation du Service ou de tout site web connexe pour avoir enfreint les utilisations interdites.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 13 &ndash; EXCLUSION DE GARANTIES ET LIMITATION DE RESPONSABILIT&Eacute;</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous ne garantissons ni ne pr&eacute;tendons en aucun cas que votre utilisation de notre Service sera ininterrompue, rapide, s&eacute;curis&eacute;e ou sans erreur.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous ne garantissons pas que les r&eacute;sultats qui pourraient &ecirc;tre obtenus par le biais de l&rsquo;utilisation du Service seront exacts ou fiables.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Vous acceptez que de temps &agrave; autre, nous puissions supprimer le Service pour des p&eacute;riodes de temps ind&eacute;finies ou annuler le Service &agrave; tout moment, sans vous avertir au pr&eacute;alable.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Vous convenez express&eacute;ment que votre utilisation du Service, ou votre incapacit&eacute; &agrave; utiliser celui-ci, est &agrave; votre seul risque. Le Service ainsi que tous les produits et services qui vous sont fournis par le biais du Service sont (sauf mention expresse du contraire de notre part) fournis \"tels quels\" et \"selon la disponibilit&eacute;\" pour votre utilisation, et ce sans repr&eacute;sentation, sans garanties et sans conditions d\'aucune sorte, expresses ou implicites, y compris toutes les garanties implicites de commercialisation ou de qualit&eacute; marchande, d&rsquo;adaptation &agrave; un usage particulier, de durabilit&eacute;, de titre et d&rsquo;absence de contrefa&ccedil;on.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">carlaa, nos directeurs, responsables, employ&eacute;s, soci&eacute;t&eacute;s affili&eacute;es, agents, contractants, stagiaires, fournisseurs, prestataires de services et conc&eacute;dants ne peuvent en aucun cas &ecirc;tre tenus responsables de toute blessure, perte, r&eacute;clamation, ou de dommages directs, indirects, accessoires, punitifs, sp&eacute;ciaux, ou dommages cons&eacute;cutifs de quelque nature qu&rsquo;ils soient, incluant mais ne se limitant pas &agrave; la perte de profits, de revenus, d&rsquo;&eacute;conomies, de donn&eacute;es, aux co&ucirc;ts de remplacement ou tous dommages similaires, qu&rsquo;ils soient contractuels, d&eacute;lictuels (m&ecirc;me en cas de n&eacute;gligence), de responsabilit&eacute; stricte ou autre, r&eacute;sultant de votre utilisation de tout service ou produit provenant de ce Service, ou quant &agrave; toute autre r&eacute;clamation li&eacute;e de quelque mani&egrave;re que ce soit &agrave; votre utilisation du Service ou de tout produit, incluant mais ne se limitant &agrave; toute erreur ou omission dans tout contenu, ou &agrave; toute perte ou tout dommage de toute sorte d&eacute;coulant de l&rsquo;utilisation du Service ou de tout contenu (ou produit) publi&eacute;, transmis, ou autrement rendu disponible par le biais du Service, m&ecirc;me si vous avez &eacute;t&eacute; avertis de la possibilit&eacute; qu&rsquo;ils surviennent. Parce que certains &Eacute;tats ou certaines juridictions ne permettent pas d&rsquo;exclure ou de limiter la responsabilit&eacute; quant aux dommages cons&eacute;cutifs ou accessoires, notre responsabilit&eacute; sera limit&eacute;e dans la mesure maximale permise par la loi.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 14 &ndash; INDEMNISATION</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Vous acceptez d&rsquo;indemniser, de d&eacute;fendre et de prot&eacute;ger carlaa, notre soci&eacute;t&eacute;-m&egrave;re, nos filiales, soci&eacute;t&eacute;s affili&eacute;es, partenaires, responsables, directeurs, agents, contractants, conc&eacute;dants, prestataires de services, sous-traitants, fournisseurs, stagiaires et employ&eacute;s, quant &agrave; toute r&eacute;clamation ou demande, incluant les honoraires raisonnables d&rsquo;avocat, faite par toute tierce partie &agrave; cause de ou d&eacute;coulant de votre violation de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation ou des documents auxquels ils font r&eacute;f&eacute;rence, ou de votre violation de toute loi ou des droits d&rsquo;un tiers.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 15 &ndash; DISSOCIABILIT&Eacute;</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Dans le cas o&ugrave; une disposition des pr&eacute;sentes Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation serait jug&eacute;e comme &eacute;tant ill&eacute;gale, nulle ou inapplicable, cette disposition pourra n&eacute;anmoins &ecirc;tre appliqu&eacute;e dans la pleine mesure permise par la loi, et la partie non applicable devra &ecirc;tre consid&eacute;r&eacute;e comme &eacute;tant dissoci&eacute;e de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation, cette dissociation ne devra pas affecter la validit&eacute; et l&rsquo;applicabilit&eacute; de toutes les autres dispositions restantes.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 16 &ndash; R&Eacute;SILIATION</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Les obligations et responsabilit&eacute;s engag&eacute;es par les parties avant la date de r&eacute;siliation resteront en vigueur apr&egrave;s la r&eacute;siliation de cet accord et ce &agrave; toutes les fins.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation sont effectives &agrave; moins et jusqu&rsquo;&agrave; ce qu&rsquo;elles soient r&eacute;sili&eacute;es par ou bien vous ou non. Vous pouvez r&eacute;silier ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation &agrave; tout moment en nous avisant que vous ne souhaitez plus utiliser nos Services, ou lorsque vous cessez d&rsquo;utiliser notre site.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Si nous jugeons, &agrave; notre seule discr&eacute;tion, que vous &eacute;chouez, ou si nous soup&ccedil;onnons que vous avez &eacute;t&eacute; incapable de vous conformer aux modalit&eacute;s de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation, nous pourrions aussi r&eacute;silier cet accord &agrave; tout moment sans vous pr&eacute;venir &agrave; l&rsquo;avance et vous resterez responsable de toutes les sommes redevables jusqu&rsquo;&agrave; la date de r&eacute;siliation (celle-ci &eacute;tant incluse), et/ou nous pourrions vous refuser l&rsquo;acc&egrave;s &agrave; nos Services (ou &agrave; toute partie de ceux-ci).</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 17 &ndash; INT&Eacute;GRALIT&Eacute; DE L&rsquo;ACCORD</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Tout manquement de notre part &agrave; l&rsquo;exercice ou &agrave; l&rsquo;application de tout droit ou de toute disposition des pr&eacute;sentes Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation ne devrait pas constituer une renonciation &agrave; ce droit ou &agrave; cette disposition.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation ou toute autre politique ou r&egrave;gle d&rsquo;exploitation que nous publions sur ce site ou relativement au Service constituent l&rsquo;int&eacute;gralit&eacute; de l&rsquo;entente et de l&rsquo;accord entre vous et nous et r&eacute;gissent votre utilisation du Service, et remplacent toutes les communications, propositions et tous les accords, ant&eacute;rieurs et contemporains, oraux ou &eacute;crits, entre vous et nous (incluant, mais ne se limitant pas &agrave; toute version ant&eacute;rieure des Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation).</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Toute ambigu&iuml;t&eacute; quant &agrave; l&rsquo;interpr&eacute;tation de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation ne doit pas &ecirc;tre interpr&eacute;t&eacute;e en d&eacute;faveur de la partie r&eacute;dactrice.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 18 &ndash; LOI APPLICABLE</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation, ainsi que tout autre accord s&eacute;par&eacute; par le biais duquel nous vous fournissons des Services seront r&eacute;gis et interpr&eacute;t&eacute;s en vertu des lois en vigueur &agrave; 15, rue la d&eacute;fence, paris, J, 92000, France.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 19 &ndash; MODIFICATIONS APPORT&Eacute;ES AUX CONDITIONS G&Eacute;N&Eacute;RALES DE VENTE ET D&rsquo;UTILISATION</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Vous pouvez consulter la version la plus r&eacute;cente des Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation &agrave; tout moment sur cette page.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Nous nous r&eacute;servons le droit, &agrave; notre seule discr&eacute;tion, de mettre &agrave; jour, de modifier ou de remplacer toute partie de ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation en publiant les mises &agrave; jour et les changements sur notre site. Il vous incombe de visiter notre site r&eacute;guli&egrave;rement pour v&eacute;rifier si des changements ont &eacute;t&eacute; apport&eacute;s. Votre utilisation continue de ou votre acc&egrave;s &agrave; notre site apr&egrave;s la publication de toute modification apport&eacute;e &agrave; ces Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation constitue une acceptation de ces modifications.</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">ARTICLE 20 &ndash; COORDONN&Eacute;ES</span><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><br style=\"color: #777777; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff;\" /><span style=\"color: #000000; font-family: \'Averia Serif Libre\', sans-serif; background-color: #ffffff; font-size: 10pt;\">Les questions concernant les Conditions G&eacute;n&eacute;rales de Vente et d&rsquo;Utilisation devraient nous &ecirc;tre envoy&eacute;es &agrave; admin@electriclint.store.</span></p>', 0, '', '', 12);
INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `footer`, `page_title`, `page_desc`, `menu_id`) VALUES
(13, 'À propos ', 'à-propos', '<p style=\"margin-top: 0px; margin-bottom: 15px; line-height: 1.6em; color: #333333; font-family: Montserrat, sans-serif; font-size: 15px; background-color: #ffffff;\">&nbsp;</p>\r\n<p style=\"margin-top: 0px; margin-bottom: 15px; line-height: 1.6em; color: #333333; font-family: Montserrat, sans-serif; font-size: 15px; background-color: #ffffff;\"><strong><span style=\"color: #00aaff;\"><img src=\"https://i.ibb.co/yWFDx0g/a-propos-de-nous.jpg\" alt=\"\" width=\"640\" height=\"427\" /></span></strong></p>\r\n<p style=\"margin-top: 0px; margin-bottom: 15px; line-height: 1.6em; color: #333333; font-family: Montserrat, sans-serif; font-size: 15px; background-color: #ffffff;\"><span style=\"background-color: #ffffff; color: #fed9e0; font-family: Poppins, sans-serif; font-size: 16px;\">Childrenteeth.com </span>est un projet lanc&eacute; &agrave; l&rsquo;initiative d&rsquo;une &eacute;quipe jeune et dynamique, forte d&rsquo;une solide exp&eacute;rience dans le domaine du commerce &eacute;lectronique en France.</p>\r\n<p style=\"margin-top: 0px; margin-bottom: 15px; line-height: 1.6em; color: #333333; font-family: Montserrat, sans-serif; font-size: 15px; background-color: #ffffff;\">Toute l&rsquo;&eacute;quipe de&nbsp;<span style=\"color: #00aaff;\"><span style=\"color: #fed9e0; font-family: Poppins, sans-serif; font-size: 16px;\">Childrenteeth</span>&nbsp;</span>s&rsquo;engage &agrave; vous d&eacute;nicher les&nbsp;<strong>meilleures affaires</strong>&nbsp;sur le web, aux prix n&eacute;goci&eacute;s avec nos partenaires, pour vous offrir une nouvelle exp&eacute;rience de shopping et profiter ainsi d&rsquo;une vie moins ch&egrave;re.</p>\r\n<p style=\"margin-top: 0px; margin-bottom: 15px; line-height: 1.6em; color: #333333; font-family: Montserrat, sans-serif; font-size: 15px; background-color: #ffffff;\">Nous nous effor&ccedil;ons &agrave; vous parvenir, quotidiennement, un nouveau produit,&nbsp; un nouveau service, une nouvelle opportunit&eacute; de&nbsp;<strong>shopping</strong>, susceptibles de satisfaire vos besoins en termes de qualit&eacute;, de disponibilit&eacute; et de bonne affaire.</p>\r\n<p style=\"margin-top: 0px; margin-bottom: 15px; line-height: 1.6em; color: #333333; font-family: Montserrat, sans-serif; font-size: 15px; background-color: #ffffff;\"><strong>Qualit&eacute; de service, prix bas et satisfaction client&egrave;le</strong>&nbsp;sont nos trois piliers pour proposer les meilleurs bons plans et deals aux consommateurs en qu&ecirc;te de nouvelles tendances &agrave; des prix mini.</p>\r\n<p style=\"margin-top: 0px; margin-bottom: 15px; line-height: 1.6em; color: #333333; font-family: Montserrat, sans-serif; font-size: 15px; background-color: #ffffff;\">Tous nos&nbsp;<strong>produits sont authentique</strong>s livr&eacute;s avec leur factures et sous garantie &laquo; Satisfait ou Rembours&eacute; &raquo;, pour un &eacute;ventuel retour dans un d&eacute;lai de 30 jours.</p>\r\n<p style=\"margin-top: 0px; margin-bottom: 15px; line-height: 1.6em; color: #333333; font-family: Montserrat, sans-serif; font-size: 15px; background-color: #ffffff;\">Un&nbsp;<strong>service client</strong>&nbsp;est &eacute;galement disponible pour renseigner les clients sur leurs transactions et les accompagner dans leurs commandes.</p>', 0, '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `txn_id` int(11) NOT NULL,
  `PaymentMethod` varchar(50) NOT NULL,
  `PayerStatus` varchar(50) NOT NULL,
  `PayerMail` varchar(100) NOT NULL,
  `Total` decimal(19,2) NOT NULL,
  `SubTotal` decimal(19,2) NOT NULL,
  `Tax` decimal(19,2) NOT NULL,
  `Payment_state` varchar(50) NOT NULL,
  `CreateTime` varchar(50) NOT NULL,
  `UpdateTime` varchar(50) NOT NULL,
  `custom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `descr` text NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `images` text NOT NULL,
  `subcat` int(11) NOT NULL DEFAULT 0,
  `date` int(11) NOT NULL,
  `shipping` float NOT NULL,
  `variants` text NOT NULL,
  `fet` int(11) NOT NULL DEFAULT 0,
  `options` text NOT NULL,
  `page_title` text DEFAULT NULL,
  `page_desc` text DEFAULT NULL,
  `page_url` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `info_desc` text DEFAULT NULL,
  `upsell_info` text DEFAULT NULL,
  `dateat` datetime DEFAULT NULL,
  `service_info` text DEFAULT NULL,
  `other_info` text DEFAULT NULL,
  `service_info_desc` text DEFAULT NULL,
  `other_info_desc` text DEFAULT NULL,
  `info_text` text DEFAULT NULL,
  `img_alt_name` text DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `info_icon` text DEFAULT NULL,
  `service_icon` text DEFAULT NULL,
  `other_icon` text DEFAULT NULL,
  `home_page_active` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `descr`, `price`, `discount`, `images`, `subcat`, `date`, `shipping`, `variants`, `fet`, `options`, `page_title`, `page_desc`, `page_url`, `active_status`, `info_desc`, `upsell_info`, `dateat`, `service_info`, `other_info`, `service_info_desc`, `other_info_desc`, `info_text`, `img_alt_name`, `short_desc`, `desc`, `info_icon`, `service_icon`, `other_icon`, `home_page_active`) VALUES
(15, 'Smart Brosse à Dents Enfants', '', 71.95, 20, '52e9b96d13af5a067026348c220885a8.jpg,f8e77245c42482791bdf7098b29d8123.jpg,dbe6169deabff26ae8eacfb13e1d55cb.jpg,b0d272242bc47d62ff5ba5012ba2a7eb.jpg,1f766a189bd29f34cc2fb22ac550dedb.jpg,a9c5725ddbc8040279ab64b0ecbca1fb.jpg', 2, 0, 0, '[{\"tp\":\"couleurs\",\"info\":\"White,Blue,Pink\",\"width\":\"45\",\"height\":\"40\"},{\"tp\":\"Age\",\"info\":\"3-7ans, 8-15ans\",\"width\":\"45\",\"height\":\"55\"}]', 0, '', '', '', 'https://u-childrenteeth.com/brosse-à-dents', 0, '<p><span style=\"color: #383838; font-family: Oswald, serif; font-size: 8pt; text-align: center; background-color: #ffffff;\">Votre commande sera livr&eacute;e gratuitement &agrave; votre domicile</span></p>', '', '2020-12-05 12:02:15', '<p><span style=\"color: #383838;\"><strong><span style=\"font-family: Poppins, sans-serif; font-size: 13.3333px;\">Essayer pendant 14 jours</span></strong></span></p>', '<p><span style=\"font-size: 10pt; color: #383838;\"><strong>&nbsp;Service client&egrave;le 24/7</strong></span></p>\r\n<p>&nbsp;</p>\r\n<table style=\"border-collapse: collapse; width: 89.3035%; height: 50px; background-color: #fed9e0; border-color: #ECF0F1; border-style: solid;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 99.8077%;\">\r\n<p><span style=\"font-size: 12pt;\">&equiv;&nbsp; &nbsp; <span style=\"color: #000000;\"><strong>Pack Famille :</strong> </span><span style=\"color: #2dc26b;\"><strong>2 acheter </strong></span><strong>&nbsp;<span style=\"color: #2dc26b;\">le troisi&egrave;me</span> <span style=\"color: #2dc26b;\">-50%</span></strong>.&nbsp; &nbsp;</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style=\"border-collapse: collapse; width: 89.4959%; height: 50px; background-color: #fed9e0; border-color: #ECF0F1; border-style: solid;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 99.8077%;\">\r\n<p><span style=\"color: #626262; font-size: 16px;\">&equiv;&nbsp; &nbsp;<span style=\"color: #000000;\"><strong>Pack Famille nembreuse</strong></span> : <strong><span style=\"color: #2dc26b;\">3 acheter </span></strong>le <span style=\"color: #2dc26b;\"><strong>quatri&egrave;me gratuit</strong></span></span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<h3><span style=\"font-size: 8pt;\"><span style=\"color: #383838; font-family: Oswald, serif; text-align: center; background-color: #ffffff;\">Nous proposons le&nbsp;</span><span style=\"color: #383838; font-family: Oswald, serif; text-align: center; background-color: #ffffff;\">Satisfait ou Rembours&eacute; pendant 14 jours</span><span style=\"color: #383838; font-family: Oswald, serif; text-align: center; background-color: #ffffff;\"> apr&egrave;s r&eacute;ception des articles !</span></span></h3>', '<p><span style=\"color: #383838; font-family: Oswald, serif; font-size: 8pt; text-align: center; background-color: #ffffff;\">Une &eacute;quipe d&eacute;di&eacute;e au Support pour r&eacute;pondre &agrave; toutes vos questions.</span></p>', '<p><span style=\"font-size: 10pt; color: #383838;\"><strong>en vous offre la livraison</strong></span></p>', '', '<h3 style=\"text-align: center;\"><span style=\"color: #f1949f;\"><strong><span style=\"font-size: 18pt;\">Nous savons tous combien il peut &ecirc;tre difficile de faire en sorte que vos enfants se lavent les dents tous les jours !</span></strong></span></h3>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">&nbsp;</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">Sur le site CHILDTEETH&trade;, nous avons rendu la routine orale quotidienne de chaque enfant plus rapide, plus facile et plus amusante. La brosse &agrave; dents automatis&eacute;e&nbsp;<span style=\"color: #626262;\">CHILDTEETH&trade;</span> 360 est con&ccedil;ue pour atteindre sp&eacute;cifiquement toutes les surfaces, y compris les surfaces avant, arri&egrave;re et mordantes des dents, tout en atteignant les molaires.</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">Elle est dot&eacute;e d\'un syst&egrave;me int&eacute;gr&eacute; qui apprend aux enfants la technique de brossage recommand&eacute;e.&nbsp;</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">1 708 poils individuels combin&eacute;s &agrave; des vibrations soniques r&eacute;duisent le temps n&eacute;cessaire pour un nettoyage efficace &agrave; 30 secondes ! C\'est bien 30 secondes ! Vos enfants vont vous adorer pour cela.</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">L\'efficacit&eacute; : Le nettoyage automatique &agrave; 360&deg; comporte trois modes : brossage r&eacute;gulier avec son, brossage puissant avec son et brossage puissant sans son.</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">S&eacute;curit&eacute; des enfants : La brosse est approuv&eacute;e par la FDA, fabriqu&eacute;e en silicone extra-doux de premi&egrave;re qualit&eacute; pour un confort maximal lors du brossage tout en garantissant l\'absence d\'abrasion des dents.&nbsp;</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">Approuv&eacute;e et recommand&eacute;e par les dentistes du monde entier !</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\"><img style=\"color: #626262;\" src=\"https://media.giphy.com/media/SUXEPb4kDzVwCl4Nbl/giphy.gif\" /></p>\r\n<h3 class=\"p1\" style=\"margin-top: 55px; margin-bottom: 27.5px; font-family: var(--font-stack-header); font-style: var(--font-style-header); font-weight: var(--font-weight-header); line-height: 1.2; overflow-wrap: break-word; font-size: calc(((var(--font-size-header)) / (var(--font-size-base))) * 1em); letter-spacing: 0px;\"><span style=\"font-weight: var(--font-weight-body--bolder);\">B&eacute;n&eacute;fices :</span></h3>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\"><span style=\"color: #f1949f;\">&radic;</span> &Eacute;limine les bact&eacute;ries en 30 secondes !</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\"><span style=\"color: #f1949f;\">&radic;</span>&nbsp;Effet des ultrasons &agrave; 360&deg;.&nbsp;</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">&nbsp;<span style=\"color: #f1949f;\">&radic; </span>S&eacute;curit&eacute; et plaisir d\'utilisation en continu</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\"><span style=\"color: #f1949f;\">&radic;</span>&nbsp;Nettoyage en profondeur par la technique de brossage BASS&nbsp;</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">&nbsp;<span style=\"color: #f1949f;\">&radic; </span>Atteindre plus efficacement toutes les surfaces&nbsp;</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">&nbsp;<span style=\"color: #f1949f;\">&radic; </span>Un moteur de haute qualit&eacute; pour un compagnon d\'hygi&egrave;ne bucco-dentaire plus durable</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\"><span style=\"color: #f1949f;\">&radic; </span>&nbsp;Musique de fond divertissante et &eacute;ducative enseignant aux enfants la bonne technique de brossage</p>\r\n<h3 style=\"text-align: center;\"><span style=\"color: #fed9e0;\">Comment s\'en servir :</span></h3>\r\n<p>&nbsp;</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\"><img style=\"color: #626262;\" src=\"https://media.giphy.com/media/h4kmdrcXiFBKh96QR6/giphy.gif\" /></p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px; text-align: center;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - Apr&egrave;s le brossage, il suffit de laisser tremper, de nettoyer pour d&eacute;sinfecter et d\'essuyer.</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px; text-align: center;\">&nbsp; &nbsp;- S\'assurer que la brosse est bien s&egrave;che avant de la remettre en place.</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px; text-align: left;\">Ce qui est inclus :</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px; text-align: left;\">1x brosse &agrave; dents 360&deg; U-SMART pour enfant</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px; text-align: left;\">1x Embout de brosse &agrave; dents 360&deg; U-SMART pour enfant</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px; text-align: left;\">1x Station de recharge</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px; text-align: left;\">1x c&acirc;ble de chargement USB&nbsp;</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px; text-align: left;\">1x Manuel d\'instructions</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px; text-align: left;\">&Agrave; utiliser en conjonction avec les examens dentaires normaux et r&eacute;guliers.</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">&nbsp;</p>\r\n<p class=\"p1\" style=\"margin-top: 0px; margin-bottom: 19.4444px;\">&nbsp;</p>', '', 'fa fa-truck fa-spin grid-icon', 'fa fa-id-card-o fa-spin grid-icon', 'fa fa-comments fa-spin grid-icon', '1'),
(16, 'U-SMART Embout ', '', 15, 10, 'de14ef223f80af66fe4af754ef3442b9.jpg,fef25eb98787656d90189f49c9eb1e9f.jpg', 2, 0, 0, '[{\"tp\":\"AGE\",\"info\":\"3-7ans , 8-14ans\",\"width\":\"45\",\"height\":\"40\"}]', 0, '', '', '', 'U-SMART_Embout_', 1, '', '', '2020-11-15 07:58:47', '', '', '', '', NULL, '', '<p><span style=\"color: #f1949f; font-size: 14pt;\">Les enfants peuvent m&acirc;cher des choses... On vous comprend !</span></p>\r\n<p>Nous vendons des embouts de remplacement pour les bases de brosses &agrave; dents U-SMART&trade;.</p>\r\n<p>Elles existent en deux tailles : Petits enfants (3-7 ans) et enfants (8-14 ans)</p>\r\n<p>Notre embout buccal est fabriqu&eacute; en silicone alimentaire flexible et antibact&eacute;rien, qui s\'adapte parfaitement &agrave; la forme de la bouche de tout utilisateur. Combin&eacute; &agrave; 1 708 poils individuels avec des micro-canaux int&eacute;gr&eacute;s, qui r&eacute;partissent le dentifrice de mani&egrave;re uniforme, les dents de vos enfants auront un nettoyage complet et efficace &agrave; chaque utilisation.</p>\r\n<p>Mode d\'emploi :</p>\r\n<p>1. Il suffit de retirer l\'embout buccal actuel en le saisissant par le bas, &agrave; l\'endroit o&ugrave; l\'embout buccal rencontre le point de connexion de la brosse, et de le tirer.</p>\r\n<p>2. Ensuite, assurez-vous que l\'espace libre situ&eacute; sous votre nouvel embout buccal glisse dans la tige.</p>\r\n<p>3. Poussez l\'embout vers le bas pour vous assurer qu\'il est bien ajust&eacute;.</p>', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pro_reviews`
--

CREATE TABLE `pro_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `rating_five` text DEFAULT NULL,
  `rating_four` text DEFAULT NULL,
  `rating_three` text DEFAULT NULL,
  `rating_two` text DEFAULT NULL,
  `rating_one` text DEFAULT NULL,
  `rating_br_five` int(11) DEFAULT NULL,
  `rating_br_four` int(11) DEFAULT NULL,
  `rating_br_three` int(11) DEFAULT NULL,
  `rating_br_two` int(11) DEFAULT NULL,
  `rating_br_one` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `rating` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_reviews`
--

INSERT INTO `pro_reviews` (`id`, `rating_five`, `rating_four`, `rating_three`, `rating_two`, `rating_one`, `rating_br_five`, `rating_br_four`, `rating_br_three`, `rating_br_two`, `rating_br_one`, `product_id`, `test`, `active_status`, `rating`) VALUES
(1, 'warning', 'warning', 'warning', 'default', 'default', 100, 50, 10, 30, 100, 8, '', 0, ''),
(2, 'warning', 'warning', 'default', 'default', 'default', 60, 20, 30, 80, 100, 15, '', 1, '4.9'),
(3, 'warning', 'warning', 'warning', 'default', 'default', 100, 50, 80, 10, 30, 16, '', 1, '4.8');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `img` varchar(300) DEFAULT NULL,
  `comment` text NOT NULL,
  `product` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `ac` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `vote`, `name`, `email`, `img`, `comment`, `product`, `date`, `ac`) VALUES
(609, 5, 'M.David', 'Mike@gmail.com', 'https://u-childrenteeth.com/uploads/bed76fe3b0fb9cae159a95ae3c92ec24.jpg', 'Je recommande ce produit', 15, '2020-12-08', 1),
(610, 4, 'A.Franck', 'Frank@gmail.com', 'https://u-childrenteeth.com/uploads/eeef10e99bcf35a4ac57d5de427d9d37.jpg', 'Livraison Rapide', 15, '2020-12-03', 1),
(611, 4, 'Z.Yassmine', 'Yassmine@Yahoo.com', 'https://u-childrenteeth.com/uploads/e6d1b460efeb41cfb18d1d69c507d063.jpg', 'Conforme ?? la description', 15, '2020-12-02', 1),
(612, 5, 'R.Max', 'Robert@hotmail.com', 'https://u-childrenteeth.com/uploads/98f54475247187d925687f89ff110f97.jpg', 'Tous est ok', 15, '2020-12-04', 1),
(613, 2, 'Y.Koon', 'Yann@hotmail.fr', 'https://u-childrenteeth.com/uploads/913add67538e5cd94a7a6379f74d60ee.jpg', 'Super', 15, '2020-12-04', 1),
(614, 2, 'I.Alissia', 'Boss@gmail.com', 'https://u-childrenteeth.com/uploads/15f4f2d4036d215dde2f990e2b10ddb7.jpg', 'Produit correspond ?? la description', 15, '2020-12-09', 1),
(615, 5, 'P.Jean', 'Jean.papert@gmail.com', 'https://u-childrenteeth.com/uploads/e9906866225b406be6c9bc5619072f9e.jpg', 'Fournisseur parfait', 15, '2020-12-03', 1),
(616, 1, 'B.Ioan', 'Patrick.Ioan@gmail.com', 'https://u-childrenteeth.com/uploads/956be3346d3ce4a675c75f22facff14f.jpg', 'Bonne qualit?', 15, '2020-12-01', 1),
(617, 1, 'O.Bob', 'Sami@gmail.com', 'https://u-childrenteeth.com/uploads/258212b0668c7327849e6c7ea5cb490d.jpg', 'Emballage parfait', 15, '2020-12-10', 1),
(618, 5, 'N.Maria', 'Maria.yass@hotmail.fr', 'https://u-childrenteeth.com/uploads/c256a795619a2cd62cd706440bc1f8f6.jpg', 'Mon enfant est heureux', 15, '2020-12-06', 1),
(619, 3, 'F.Mike', 'franck@gmail.com', 'https://u-childrenteeth.com/uploads/a6d02d8cec935dd0dfadc5104fbad77d.jpg', 'tr?s satisfait', 15, '2020-12-03', 1),
(620, 3, 'C.Charlie', 'charle.sami@gmail.com', 'https://u-childrenteeth.com/uploads/19574aa230a29d96d6ff83b40ff52d33.jpg', '? recommander', 15, '2020-12-01', 1),
(621, 5, 'A.Franck', '', 'https://u-childrenteeth.com/uploads/fcb44c8d63d3507e0a3507e08bea5fe8.jpg', 'Bon produit', 15, '2020-12-03', 1),
(622, 4, 'V.Bernard', '', 'https://u-childrenteeth.com/uploads/2216c6408aab4e332d0daf28f81db92a.jpg', 'Super rapide', 15, '2020-12-08', 1),
(623, 4, 'W.Martin', '', 'https://u-childrenteeth.com/uploads/ae07c100bd265fe54f4a94dda24dc81d.jpg', 'Fournisseur ?? l??coute', 15, '2020-12-07', 1),
(624, 5, 'T.Thomas', '', 'https://u-childrenteeth.com/uploads/3cc1f371cf94c6e43bffbbddf34216e4.jpg', '?? la maison en deux semaines', 15, '2020-12-02', 1),
(625, 2, 'M.Laurent', '', 'https://u-childrenteeth.com/uploads/10d839f41ef35417f4ebb59b3472d4ef.jpg', 'Je n?ai pas tester encore', 15, '2020-12-03', 1),
(626, 2, 'D.Petit', '', 'https://u-childrenteeth.com/uploads/a0b37c512042aa44953f566c07a29433.jpg', 'Waw', 15, '2020-12-02', 1),
(627, 5, 'G.Dubois', '', 'https://u-childrenteeth.com/uploads/107b29c0f7986070c560b899eed6f7da.jpg', 'Marche ?? merveille', 15, '2020-12-03', 1),
(628, 1, 'U.Moreau', '', 'https://u-childrenteeth.com/uploads/5342799070f4c73593cdd71327ed9ee9.jpg', 'à voir sur le long terme', 15, '2020-12-08', 1),
(629, 1, 'K.Leroy', '', 'https://u-childrenteeth.com/uploads/c867c0de52832ee05a2f0ee6bb73106d.jpg', 'Livraison un peu long', 15, '2020-12-03', 1),
(630, 5, 'J.Morel', '', 'https://u-childrenteeth.com/uploads/76445b11b10a63c6c711bf1ba404676f.jpg', 'je recommande encore', 15, '2020-12-02', 1),
(631, 3, 'G.Girard', '', 'https://u-childrenteeth.com/uploads/dfc2a2e7800735634dc621361327ad5a.jpg', 'Top qualit?', 15, '2020-12-01', 1),
(632, 3, 'Q.Fournier', '', 'https://u-childrenteeth.com/uploads/003addcd454c0972bbd79f9f8b85ebd7.jpg', 'super ', 15, '2020-12-10', 1),
(633, 5, 'O.Dupont', '', 'https://u-childrenteeth.com/uploads/3613774b1a3fba29d3655c8e87664b68.jpg', 'Super autonomie ', 15, '2020-12-02', 1),
(634, 4, 'R.Rousseau', '', 'https://u-childrenteeth.com/uploads/06c72bade990258a19f775f71add6b39.jpg', 'Fonctionne tr?s bien', 15, '2020-12-07', 1),
(635, 4, 'P.Fontaine', '', 'https://u-childrenteeth.com/uploads/f0bf3c8a4ea17927a8c693bcee24833e.jpg', 'je recommande', 15, '2020-12-07', 1),
(636, 5, 'E.Lambert', '', '', 'Fonctionnement rapide', 15, '2020-12-09', 1),
(637, 2, 'S.Roux', '', '', 'je recommande', 15, '2020-12-08', 1),
(638, 2, 'J.Martin', '', '', 'qualit? au rendez-vous', 15, '2020-12-10', 1),
(639, 5, 'M.Mercier', '', '', 'je commande pour la famille', 15, '2020-12-07', 1),
(640, 1, 'G.Legrand', '', '', 'pour le moment pas tester', 15, '2020-12-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `title` varchar(300) DEFAULT NULL,
  `googlea` text NOT NULL,
  `fbpixel` text NOT NULL,
  `color` varchar(300) NOT NULL,
  `descr` text NOT NULL,
  `header` text NOT NULL,
  `teles` text NOT NULL,
  `whs` text NOT NULL,
  `messangers` text NOT NULL,
  `logo` varchar(300) NOT NULL,
  `currency` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `noteOrder` text NOT NULL,
  `slider_text` varchar(300) NOT NULL,
  `cookiesText` varchar(300) NOT NULL,
  `cookiesPage` text NOT NULL,
  `fb` varchar(300) NOT NULL,
  `tw` varchar(300) NOT NULL,
  `ig` varchar(300) NOT NULL,
  `height` varchar(255) DEFAULT NULL,
  `bg_color` varchar(255) DEFAULT NULL,
  `font` varchar(255) DEFAULT NULL,
  `font_link` varchar(255) DEFAULT NULL,
  `font_size` varchar(255) DEFAULT NULL,
  `icon_font_size` varchar(255) DEFAULT NULL,
  `menu_height` text DEFAULT NULL,
  `menu_bg_color` text DEFAULT NULL,
  `menu_color` text DEFAULT NULL,
  `menu_font_size` text DEFAULT NULL,
  `logo_height` text DEFAULT NULL,
  `logo_width` text DEFAULT NULL,
  `cart_logo` text DEFAULT NULL,
  `cart_logo_height` text DEFAULT NULL,
  `cart_logo_width` text DEFAULT NULL,
  `menu_ac_color` text DEFAULT NULL,
  `slids_bg_color` text DEFAULT NULL,
  `slids_ft_color` text DEFAULT NULL,
  `slids_font_size` text DEFAULT NULL,
  `slids_br_height` text DEFAULT NULL,
  `cart_color` text DEFAULT NULL,
  `menu_font` text DEFAULT NULL,
  `menu_font_link` text DEFAULT NULL,
  `slids_font` text DEFAULT NULL,
  `slids_font_link` text DEFAULT NULL,
  `test` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `site_name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keyword` text DEFAULT NULL,
  `product_title` text DEFAULT NULL,
  `reviews_title` text DEFAULT NULL,
  `reviews_bg_color` text DEFAULT NULL,
  `reviews_tx_color` text DEFAULT NULL,
  `reviews_tg_color` text DEFAULT NULL,
  `barshow` int(11) DEFAULT NULL,
  `reviews_bt_text` text DEFAULT NULL,
  `banner_five_color` text DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `category_sc_color` text DEFAULT NULL,
  `category_bt_color` text DEFAULT NULL,
  `category_bt_hv_color` text DEFAULT NULL,
  `category_bt_tx_color` text DEFAULT NULL,
  `category_bt_tx_hv_color` text DEFAULT NULL,
  `body_bg_color` text DEFAULT NULL,
  `product_tt_color` text DEFAULT NULL,
  `product_tt_hv_color` text DEFAULT NULL,
  `rating_color` text DEFAULT NULL,
  `avis_color` text DEFAULT NULL,
  `cross_price_color` text DEFAULT NULL,
  `price_color` text DEFAULT NULL,
  `product_bt_color` text DEFAULT NULL,
  `product_bt_tx_color` text DEFAULT NULL,
  `footer_color` text DEFAULT NULL,
  `footer_tx_color` text DEFAULT NULL,
  `footer_headline_color` text DEFAULT NULL,
  `subscribe_tx_color` text DEFAULT NULL,
  `subscribe_color` text DEFAULT NULL,
  `subscribe_ip_color` text DEFAULT NULL,
  `subscribe_inp_tx_color` text DEFAULT NULL,
  `footer_socialmd_color` text DEFAULT NULL,
  `cookies_color` text DEFAULT NULL,
  `cookies_bt_color` text DEFAULT NULL,
  `cookies_bt_tx_color` text DEFAULT NULL,
  `cookies_bt_tx_hv_color` text DEFAULT NULL,
  `cookies_bt_hv_color` text DEFAULT NULL,
  `scrol_bg_color` text DEFAULT NULL,
  `scrol_color` text DEFAULT NULL,
  `cookies_bt_br_color` text DEFAULT NULL,
  `cookies_bt_br_hv_color` text DEFAULT NULL,
  `pr_dt_text_info_color` text DEFAULT NULL,
  `blog_bg_color` text DEFAULT NULL,
  `blog_sg_bg_color` text DEFAULT NULL,
  `blog_bt_color` text DEFAULT NULL,
  `blog_bt_tx_color` text DEFAULT NULL,
  `blog_tx_color` text DEFAULT NULL,
  `product_select_color` text DEFAULT NULL,
  `paypal_client_id` text DEFAULT NULL,
  `paypal_secret` text DEFAULT NULL,
  `stripe_key` text DEFAULT NULL,
  `stripe_secret` text DEFAULT NULL,
  `star_color` text DEFAULT NULL,
  `star_bg_color` text DEFAULT NULL,
  `star_bt_br_color` text DEFAULT NULL,
  `star_br_color` text DEFAULT NULL,
  `star_br_bg_color` text DEFAULT NULL,
  `rating_text_color` text DEFAULT NULL,
  `rating_text_size` text DEFAULT NULL,
  `upsell_title` text DEFAULT NULL,
  `modal_bg_color` text DEFAULT NULL,
  `product_of_name` text DEFAULT NULL,
  `product_of_color` text DEFAULT NULL,
  `product_of_tx_color` text DEFAULT NULL,
  `add_to_cart_text` text DEFAULT NULL,
  `add_to_cart_mini_text` text DEFAULT NULL,
  `footer_column_one` text DEFAULT NULL,
  `footer_column_two` text DEFAULT NULL,
  `footer_column_three` text DEFAULT NULL,
  `account_logo` text DEFAULT NULL,
  `account_logo_height` text DEFAULT NULL,
  `product_dv_info_color` text DEFAULT NULL,
  `footer_text` text DEFAULT NULL,
  `login_color` text DEFAULT NULL,
  `login_bt_color` text DEFAULT NULL,
  `login_bt_tx_color` text DEFAULT NULL,
  `login_pg_tx_color` text DEFAULT NULL,
  `input_field_color` text DEFAULT NULL,
  `rg_tx_color` text DEFAULT NULL,
  `rg_bt_color` text DEFAULT NULL,
  `rg_bt_tx_color` text DEFAULT NULL,
  `bn_one_bg_color` text DEFAULT NULL,
  `bn_tx_color` text DEFAULT NULL,
  `bn_two_bg_color` text DEFAULT NULL,
  `login_page_text` text DEFAULT NULL,
  `menu_logo` text DEFAULT NULL,
  `menu_mobile` text DEFAULT NULL,
  `thanks_page_color` text DEFAULT NULL,
  `checkout_img` text DEFAULT NULL,
  `bar_info_color` text DEFAULT NULL,
  `home_btn` text DEFAULT NULL,
  `faq_title` text DEFAULT NULL,
  `faq_color` text DEFAULT NULL,
  `faq_tx_color` text DEFAULT NULL,
  `faq_dc_color` text DEFAULT NULL,
  `faq_dc_tx_color` text DEFAULT NULL,
  `map` text DEFAULT NULL,
  `favicon` text DEFAULT NULL,
  `thanks_img` text DEFAULT NULL,
  `product_img` text DEFAULT NULL,
  `product_desc_title_one` text DEFAULT NULL,
  `product_desc_title_two` text DEFAULT NULL,
  `product_desc_title_three` text DEFAULT NULL,
  `rating_average_title` text DEFAULT NULL,
  `rating_breakdown_title` text DEFAULT NULL,
  `rating_button_title` text DEFAULT NULL,
  `product_abt_name` text DEFAULT NULL,
  `inv_email_first_title` text DEFAULT NULL,
  `inv_email_second_title` text DEFAULT NULL,
  `inv_email_third_title` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`title`, `googlea`, `fbpixel`, `color`, `descr`, `header`, `teles`, `whs`, `messangers`, `logo`, `currency`, `about`, `noteOrder`, `slider_text`, `cookiesText`, `cookiesPage`, `fb`, `tw`, `ig`, `height`, `bg_color`, `font`, `font_link`, `font_size`, `icon_font_size`, `menu_height`, `menu_bg_color`, `menu_color`, `menu_font_size`, `logo_height`, `logo_width`, `cart_logo`, `cart_logo_height`, `cart_logo_width`, `menu_ac_color`, `slids_bg_color`, `slids_ft_color`, `slids_font_size`, `slids_br_height`, `cart_color`, `menu_font`, `menu_font_link`, `slids_font`, `slids_font_link`, `test`, `seo_title`, `site_name`, `description`, `keyword`, `product_title`, `reviews_title`, `reviews_bg_color`, `reviews_tx_color`, `reviews_tg_color`, `barshow`, `reviews_bt_text`, `banner_five_color`, `id`, `category_sc_color`, `category_bt_color`, `category_bt_hv_color`, `category_bt_tx_color`, `category_bt_tx_hv_color`, `body_bg_color`, `product_tt_color`, `product_tt_hv_color`, `rating_color`, `avis_color`, `cross_price_color`, `price_color`, `product_bt_color`, `product_bt_tx_color`, `footer_color`, `footer_tx_color`, `footer_headline_color`, `subscribe_tx_color`, `subscribe_color`, `subscribe_ip_color`, `subscribe_inp_tx_color`, `footer_socialmd_color`, `cookies_color`, `cookies_bt_color`, `cookies_bt_tx_color`, `cookies_bt_tx_hv_color`, `cookies_bt_hv_color`, `scrol_bg_color`, `scrol_color`, `cookies_bt_br_color`, `cookies_bt_br_hv_color`, `pr_dt_text_info_color`, `blog_bg_color`, `blog_sg_bg_color`, `blog_bt_color`, `blog_bt_tx_color`, `blog_tx_color`, `product_select_color`, `paypal_client_id`, `paypal_secret`, `stripe_key`, `stripe_secret`, `star_color`, `star_bg_color`, `star_bt_br_color`, `star_br_color`, `star_br_bg_color`, `rating_text_color`, `rating_text_size`, `upsell_title`, `modal_bg_color`, `product_of_name`, `product_of_color`, `product_of_tx_color`, `add_to_cart_text`, `add_to_cart_mini_text`, `footer_column_one`, `footer_column_two`, `footer_column_three`, `account_logo`, `account_logo_height`, `product_dv_info_color`, `footer_text`, `login_color`, `login_bt_color`, `login_bt_tx_color`, `login_pg_tx_color`, `input_field_color`, `rg_tx_color`, `rg_bt_color`, `rg_bt_tx_color`, `bn_one_bg_color`, `bn_tx_color`, `bn_two_bg_color`, `login_page_text`, `menu_logo`, `menu_mobile`, `thanks_page_color`, `checkout_img`, `bar_info_color`, `home_btn`, `faq_title`, `faq_color`, `faq_tx_color`, `faq_dc_color`, `faq_dc_tx_color`, `map`, `favicon`, `thanks_img`, `product_img`, `product_desc_title_one`, `product_desc_title_two`, `product_desc_title_three`, `rating_average_title`, `rating_breakdown_title`, `rating_button_title`, `product_abt_name`, `inv_email_first_title`, `inv_email_second_title`, `inv_email_third_title`) VALUES
('Childrenteeth | Smart Brosse à dents enfants', '', '<p>781912749037317</p>', '#ffffff', 'Bienvenue chez Childrenteeth', 'Des questions ? Faites-le nous savoir en magasin à l\'adresse Contact@u-childrenteeth.com', 'LES OFFRES LIMITÉES BLACK FRIDAY ! JUSQU’À -50%', '', 'Marie', 'e91e0c552b4a8ab314fc09d2b12efa90.png', 'USD', '<span style=\"color: rgb(48, 49, 51); font-family: Lato, sans-serif; font-size: 14px;\">Boutique entièrement dédiée à l\'Univers Saiyan, Goku Shop® vous propose sa sélection des meilleurs vêtements, figurines et accessoires Dragon Ball !</span>', 'nous utilisons seulement paypal pour le paiement maintenant afin de mieux protéger les informations de votre carte, vous pouvez toujours payer avec votre carte (visa/mastercard...) en utilisant paypal .', '', 'Le site internet Childrenteeth utilise des cookies pour stocker des informations sur votre ordinateur. En utilisant ce site internet, vous acceptez les conditions de notre Politique des cookies.', '', '', '', '', '30', '#1d1b1c', '\'Exo 2\', sans-serif;', '', '14', '16', '50', '#ffffff', '#000000', '15', '150', '150', 'fb676646e18142c08bc5ac6e6f0d4fa9.png', '100', '200', '#3b3a3a', '#fed9e0', '#0d0c0c', '20', '45', '#000000', '\'Exo 2\', sans-serif;', '', NULL, NULL, '', 'Childrenteeth | Smart Brosse à dents enfants', 'Childrenteeth', '', '', '<p>Produits</p>', '<h2 class=\"h1 section-header__title\" style=\"font-family: Poppins, sans-serif; font-weight: 600; margin: 5px 0px 17px; line-height: 1.4; text-rendering: optimizelegibility; font-size: 32px; color: #58595b; text-align: center;\">+10,000 utilisateurs actifs</h2>', '#ffffff', '#f5f5f5', '#fed9e0', 3, 'Vérifié', '#fde2eb', 1, '#ffffff', '#0e0606', '#fed9e0', '#ffffff', '#ffffff', '#ffffff', '#2e2d2d', '#fed9e0', '#fbff00', '#2c2b2b', '#318227', '#2e2e2e', '#4e8e31', '#ffffff', '#fed9e0', '#383838', '#383838', '#ffffff', '#383838', '#fed9e0', '#ffffff', '#383838', '#f0f0f0', '#1f1f1f', '#ffffff', '#292929', '#292929', '#212121', '#db0f0f', '#292929', '#1e0b0b', '#000000', '#ffffff', '#000000', '#113446', '#ffffff', '#ffffff', '#fafafa', 'AYVnbpAeZ8ehARVPVSzVdo6hnpqS_uKKTqox5TDWgunSMvRA50uKYyF0bC0ROXzVrc_iJF5PE_4Zypp8', 'EHRv8mbgEmZ1YG4KCs4gcRjT3pqLeR46vMstj0nV0qtg0qFk8WXDz7y4E0H2ebRR0KbSYqz_fni_nca8', 'pk_live_51HU8VoBf9mGLNnyEJ3aVzdzXXRtEauYwVzOzkAnrYcH46x85jl1UqkeEf7xUANVkdhzXXghlUWR4Ld5mU3eCSyYC00vJrDAigg', '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', '#ada9a9', '#fbff00', '#120202', '#525252', '#e5e5e5', '#000000', '18', 'vous pouvez aussi aimer ces produits vous avez  50% de réduction with this coupon MAMI', '#fcfcfc', 'PROMO', '#ff0000', '#ffffff', NULL, NULL, 'Service Client', 'Suivi', 'Informations', '11d87cac38a7f155b9b06813ff9f1c4d.png', '30', '#ffffff', 'Copyright ©2020 All rights reserved', '#322f2f', '#000000', '#fcf8f8', '#231f1f', '#726e6e', '#f4f0f0', '#f5f5f5', '#1e1515', '#fde2eb', '#f7f7f7', '#fde2eb', '<p><span style=\"color: #000000;\">veuillez saisir ici le texte de votre page de connexion</span></p>', '#d6d1d1', '#242424', '#e8e8e8', '4d36d034bb4432c2ad23b1f5dbf38176.png', '#ffffff', 'margin', 'FAQs', '#ffffff', '#383838', '#ffffff', NULL, '', '96e6cea7388a3715542ea86ed35e54c4.png', 'cb8f61e16979d36cace10f7ecfb1ab42.jpg', '62ebbd357511b3885236df073c4aec88.png', '', '', 'AVIS', '', 'Basé sur 1000 avis', 'ÉCRIRE UN AVIS', 'AJOUTER AU PANIER', 'well done', 'Your Delivery Information.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `info` varchar(300) NOT NULL,
  `price` float NOT NULL,
  `title` varchar(150) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `info`, `price`, `title`, `position`) VALUES
(1, '', 0, 'Livraison standard', 0),
(2, '', 4.99, 'Livraison sécurisé (Perte, Vol, Casse)', 1),
(3, '2 - 10 days', 5.99, 'Livraison express', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `img` varchar(300) NOT NULL,
  `name` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `img`, `name`, `title`, `text`, `position`, `url`, `active_status`) VALUES
(1, '316fbfedc229b9d4732162a5d8dce28d.jpg', '<p><span style=\"color: #000000; font-size: 10pt;\"><strong>K.Pannika</strong></span></p>', '<div>&nbsp;</div>\r\n<div><span style=\"color: #000000; font-size: 12pt;\"><strong>Tr&egrave;s Satisfait&nbsp;</strong></span></div>', '<h6 style=\"text-align: justify;\"><span style=\"color: #000000; font-size: 10pt;\">Ma fille l\'adore et a enfin h&acirc;te de se brosser les dents ! Le meilleur, c\'est qu\'il lui procure un nettoyage efficace et, apr&egrave;s une visite chez le dentiste, ils ont remarqu&eacute; l\'am&eacute;lioration massive ! Je recommande vivement le dentifrice U.KIDS !</span></h6>', 6, NULL, 1),
(2, 'be51924fcd67cd1d84db4ebb1d36ec20.jpg', '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; color: #000000;\"><strong>I.Jemma&nbsp;</strong></span></p>', '<p style=\"text-align: justify;\"><strong><span style=\"color: #424242; font-size: 12pt;\">Tr&egrave;s Pratique</span></strong></p>', '<h6 style=\"text-align: justify;\"><span style=\"color: #000000; font-size: 10pt;\">Nous adorons notre nouvelle brosse, elle change la donne ! Ma fille vit pour se brosser les dents maintenant et avec l\'air entra&icirc;nant \"gauche droite gauche droite, remuez-vous avec votre brosse\", cela l\'aide &agrave; mieux nettoyer</span></h6>', 5, NULL, 1),
(3, 'cc0f7c5c526956e41057a28a5e8cc453.jpg', '<p style=\"text-align: justify;\"><strong><span style=\"font-size: 10pt; color: #000000;\">M.Sophia</span></strong></p>', '<div style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\"><strong>Super</strong></span></div>', '<h6 style=\"text-align: justify;\"><span style=\"color: #424242; font-size: 10pt;\">Nous adorons les nouvelles brosses &agrave; dents T.Snow ! Non seulement les enfants se sont tellement amus&eacute;s qu\'ils ont r&eacute;duit de moiti&eacute; le temps qu\'il leur faut habituellement pour se brosser les dents ! Donc une victoire !</span></h6>', 4, NULL, 1),
(4, '9a757a250b2286ac44992f798efeb53d.jpg', '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; color: #000000;\"><strong>L.Noah&nbsp;</strong></span></p>', '<p><span style=\"color: #000000;\"><strong><span style=\"font-size: 12pt;\">Au top</span></strong></span></p>', '<h6 style=\"text-align: justify;\"><span style=\"color: #000000; font-size: 10pt;\">Cette brosse a &eacute;t&eacute; super facile &agrave; utiliser pour Noah et efficace pour garder ses dents et ses gencives propres ! La voix off lui rappelle de d&eacute;placer la brosse pour un meilleur nettoyage et il s\'amuse &agrave; le faire !</span></h6>', 3, NULL, 1),
(5, '4fe660f93902f18216401bf98ea27557.jpg', '<p><span style=\"color: #000000; font-size: 10pt;\"><strong>V.Shen</strong></span></p>', '<p><span style=\"color: #000000; font-size: 12pt;\">Tr&egrave;s bon produit&nbsp;</span></p>', '<h6 style=\"text-align: justify;\"><span style=\"font-size: 10pt;\">30 secondes... c\'est tout ce qu\'il faut pour se nettoyer les dents &agrave; l\'aide de la brosse &agrave; dents T.Snow Kids ????&nbsp;Mes filles ont test&eacute; les @T.Snow brosse &agrave; dents automatique ces derni&egrave;res semaines. Il est si facile &agrave; utiliser, il s\'allume, joue des chansons et les divertit pendant qu\'ils se brossent les dents.</span></h6>', 2, NULL, 1),
(6, '73fa4a66d1fc63ceac19a7fede07962f.jpg', '<p><span style=\"color: #000000;\"><strong><span style=\"font-size: 10pt;\">S.Shanelle</span></strong></span>&nbsp;</p>', '<p><span style=\"color: #000000; font-size: 12pt;\"><strong><span style=\"font-family: Cairo, -apple-system, BlinkMacSystemFont,;\">1 mois et toujours la meilleure machine !&nbsp;</span></strong></span></p>', '<h6 style=\"text-align: justify;\"><span style=\"color: #636363; font-size: 10pt;\">Ma fille utilise sa brosse &agrave; dents T.Snow depuis environ un mois. Et je peux honn&ecirc;tement dire que nous l\'aimons tous les deux ! Sans demander, elle va faire ses dents, et je suis assez confiant qu\'elle a fait du bon travail.</span></h6>', 2, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slids`
--

CREATE TABLE `slids` (
  `id` int(11) NOT NULL,
  `text` varchar(300) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `position` tinyint(1) NOT NULL,
  `slids_font` text DEFAULT NULL,
  `slids_font_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slids`
--

INSERT INTO `slids` (`id`, `text`, `icon`, `position`, `slids_font`, `slids_font_link`) VALUES
(1, 'Support Français', 'map-pin fa-spin grid-icon', 1, NULL, NULL),
(2, '+10,000 utilisateurs actifs', 'users fa-spin grid-icon', 0, NULL, NULL),
(7, 'Paiement Sécurisé', 'credit-card-alt fa-spin grid-icon', 1, NULL, NULL),
(9, '30 jours satisfait ou remboursé', 'money fa-spin grid-icon', 1, NULL, NULL),
(10, 'Livraison OFFERTE !', '', 2, NULL, NULL),
(12, 'Livraison sécurisée  à domicile', 'truck fa-spin grid-icon', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `test` text DEFAULT NULL,
  `banner_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `date`) VALUES
(1, 'lhobrt@gmail.com', 1592688906),
(10, 'nctest@namecheap.com ', 1599907272),
(11, 'momovsmellouki@gmail.com', 1600628789),
(12, '', 1600879553),
(13, 'shahadot20@gmail.com', 1601135052),
(14, 'makrafadwa@gmail.com', 1604753940);

-- --------------------------------------------------------

--
-- Table structure for table `thankspage`
--

CREATE TABLE `thankspage` (
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `question` varchar(300) NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thankspage`
--

INSERT INTO `thankspage` (`title`, `content`, `question`, `options`) VALUES
('Merci pour votre commande', '<p>Nous l\'exp&eacute;dierons d&egrave;s que possible</p>', 'Pourquoi avez-vous commander ce produit ? ', 'utile pour vous | cadeau pour un proche | quelqu\'un ma recommander ');

-- --------------------------------------------------------

--
-- Table structure for table `upsell`
--

CREATE TABLE `upsell` (
  `id` int(11) NOT NULL,
  `onOrder` int(11) NOT NULL,
  `showProduct` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upsell`
--

INSERT INTO `upsell` (`id`, `onOrder`, `showProduct`, `qty`, `price`) VALUES
(1, 6, 8, NULL, NULL),
(5, 6, 7, NULL, NULL),
(6, 6, 2, NULL, NULL),
(21, 8, 12, 0, ''),
(26, 15, 16, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL,
  `reset_pass` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `email`, `password`, `verification_key`, `is_email_verified`, `reset_pass`) VALUES
(52, 'admin', 'shahadot20@gmail.com', 'YXpl', 'bfa56cbfd8ddf33cc710106d99eaf223', 'no', 'd028dca37fbf76877237ae2a7b3db14b'),
(55, 'admin', 'shadahmedshahadat@gmail.com', 'MTIzNDU2', '440beec3f1915610f06c8293a54cd331', 'yes', NULL),
(56, 'admin', 'momovsmellouki@gmail.com', 'MTIzNDU2', 'add4daec3b5263603ef181fff8d166c4', 'yes', NULL),
(57, 'azerty', 'makrafadwa@gmail.com', 'QXplcnR5', 'c21aeadfe8417978dc3e6ebd05dd32a5', 'no', NULL),
(58, 'junaid', 'junaidaliansaree@gmail.com', 'MTIzNA==', '22c5a05a31d42bc86876c2b78fddf92f', 'no', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerfive`
--
ALTER TABLE `bannerfive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerfour`
--
ALTER TABLE `bannerfour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerone`
--
ALTER TABLE `bannerone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerthree`
--
ALTER TABLE `bannerthree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannertwo`
--
ALTER TABLE `bannertwo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barslids`
--
ALTER TABLE `barslids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_visit`
--
ALTER TABLE `checkout_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CountryList`
--
ALTER TABLE `CountryList`
  ADD PRIMARY KEY (`CountryID`);

--
-- Indexes for table `customer_view`
--
ALTER TABLE `customer_view`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cus_reviews`
--
ALTER TABLE `cus_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts_coupon`
--
ALTER TABLE `discounts_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_reviews`
--
ALTER TABLE `pro_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slids`
--
ALTER TABLE `slids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upsell`
--
ALTER TABLE `upsell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Index_1` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bannerfive`
--
ALTER TABLE `bannerfive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bannerfour`
--
ALTER TABLE `bannerfour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bannerone`
--
ALTER TABLE `bannerone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bannerthree`
--
ALTER TABLE `bannerthree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bannertwo`
--
ALTER TABLE `bannertwo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barslids`
--
ALTER TABLE `barslids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `checkout_visit`
--
ALTER TABLE `checkout_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=725;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6038;

--
-- AUTO_INCREMENT for table `CountryList`
--
ALTER TABLE `CountryList`
  MODIFY `CountryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `customer_view`
--
ALTER TABLE `customer_view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cus_reviews`
--
ALTER TABLE `cus_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discounts_coupon`
--
ALTER TABLE `discounts_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pro_reviews`
--
ALTER TABLE `pro_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slids`
--
ALTER TABLE `slids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `upsell`
--
ALTER TABLE `upsell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
