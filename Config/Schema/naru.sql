-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2016 a las 20:34:14
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `naru`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `activities`
--

INSERT INTO `activities` (`id`, `name`, `photo`) VALUES
(1, 'Hello', 'img1470945158KMF.jpg'),
(2, 'una ahi blondes 2', 'img1471990182GAU.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities_destinations`
--

CREATE TABLE IF NOT EXISTS `activities_destinations` (
`id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` int(10) NOT NULL,
  `region_id` int(10) NOT NULL,
  `country_id` int(10) NOT NULL,
  `terminal_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `region_id`, `country_id`, `terminal_id`) VALUES
(1, 'San Antonio', 1, 1, 1, 0),
(2, 'Caracas', 3, 2, 1, 0),
(3, 'Petare', 3, 2, 1, 0),
(4, 'San Cristobal', 1, 1, 1, 0),
(5, 'Betis', 4, 3, 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities_terminals`
--

CREATE TABLE IF NOT EXISTS `cities_terminals` (
`id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `terminal_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cities_terminals`
--

INSERT INTO `cities_terminals` (`id`, `city_id`, `terminal_id`) VALUES
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 1, 2),
(6, 3, 2),
(7, 4, 2),
(8, 5, 2),
(9, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `service_id` int(10) NOT NULL,
  `schedule` text NOT NULL,
  `price` float NOT NULL,
  `country_id` int(10) NOT NULL,
  `region_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `photo_1` varchar(255) NOT NULL,
  `photo_2` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `name`, `service_id`, `schedule`, `price`, `country_id`, `region_id`, `state_id`, `city_id`, `lat`, `longitude`, `photo_1`, `photo_2`, `payment`) VALUES
(1, 'Jungle Men', 3, 'Summer', 100000, 0, 0, 0, 0, '60min', '15seg', 'img14713633661SA.jpg', 'img1471363368LXK.jpg', 'Cash'),
(2, 'Alirio', 3, 'day', 1000000, 0, 0, 0, 0, '60min', '45sec', 'img1471990799SDY.jpg', 'img1471990809QWD.jpg', 'credit card'),
(3, 'Sapitos Co.', 4, 'hello, now im a text area', 10000, 0, 0, 0, 0, '5min', '350seg', 'img1473194689EXE.jpg', 'img1473194696HYO.jpg', 'credit card'),
(4, 'Bellezas', 2, 'Verano', 9913840000, 1, 2, 3, 2, '30min', '60sec', 'img1473361781WTP.jpg', 'img1473362946W6D.jpg', 'credit card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients_destinations`
--

CREATE TABLE IF NOT EXISTS `clients_destinations` (
`id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `destination_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients_terminals`
--

CREATE TABLE IF NOT EXISTS `clients_terminals` (
`id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `terminal_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commentaries`
--

CREATE TABLE IF NOT EXISTS `commentaries` (
`id` int(10) NOT NULL,
  `comment` text NOT NULL,
  `destination_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `security` int(5) NOT NULL,
  `environment` int(5) NOT NULL,
  `budget` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `commentaries`
--

INSERT INTO `commentaries` (`id`, `comment`, `destination_id`, `user_id`, `security`, `environment`, `budget`) VALUES
(1, 'adkfjhakjasj', 1, 1, 1, 2, 3),
(2, 'Another commentary', 1, 1, 2, 3, 44),
(3, 'Quiero agregar un comment', 2, 1, 1, 2, 5),
(4, 'Hello', 1, 1, 3, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Venezuela'),
(2, 'Colombia'),
(3, 'EspaÃ±a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `country_id` int(10) NOT NULL,
  `region_id` int(10) NOT NULL,
  `park_id` int(10) NOT NULL,
  `point_id` int(10) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `ranking` int(1) NOT NULL,
  `security` int(1) NOT NULL,
  `environment` int(1) NOT NULL,
  `budget` int(1) NOT NULL,
  `affluence` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `description`, `type_id`, `state_id`, `city_id`, `country_id`, `region_id`, `park_id`, `point_id`, `lat`, `longitude`, `photo1`, `ranking`, `security`, `environment`, `budget`, `affluence`) VALUES
(1, 'Mi Casa', 'Best place in da world', 1, 1, 1, 1, 1, 1, 0, '360m', '10sec', 'img1471380349NKJ.jpg', 0, 0, 0, 1, 2),
(2, 'Tuja', 'Tremendas orgias en las noches', 1, 3, 2, 1, 2, 5, 0, '987812m', '134134sec', 'img1471991127LIN.jpg', 0, 0, 0, 70000, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinations_terminals`
--

CREATE TABLE IF NOT EXISTS `destinations_terminals` (
`id` int(10) NOT NULL,
  `destination_id` int(10) NOT NULL,
  `terminal_id` int(10) NOT NULL,
  `price` float NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `hours` int(10) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destinations_terminals`
--

INSERT INTO `destinations_terminals` (`id`, `destination_id`, `terminal_id`, `price`, `schedule`, `hours`, `payment`, `company`) VALUES
(1, 1, 1, 0, '', 0, '', ''),
(2, 2, 1, 0, '', 0, '', ''),
(3, 1, 2, 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foruma`
--

CREATE TABLE IF NOT EXISTS `foruma` (
`id` int(10) NOT NULL,
  `answer` text NOT NULL,
  `user_id` int(10) NOT NULL,
  `forumq_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `foruma`
--

INSERT INTO `foruma` (`id`, `answer`, `user_id`, `forumq_id`) VALUES
(1, 'Si, seguramente', 1, 1),
(2, 'Es posible que tengan que soplar', 1, 1),
(3, 'No, busquen donde irse', 1, 1),
(4, 'Acaba de rebotar a una pues...', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forumq`
--

CREATE TABLE IF NOT EXISTS `forumq` (
`id` int(10) NOT NULL,
  `question` text NOT NULL,
  `destination_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `forumq`
--

INSERT INTO `forumq` (`id`, `question`, `destination_id`, `user_id`) VALUES
(1, 'Hay cama pa tanta gente?', 1, 1),
(2, 'A Diego le gustan las gorditas??', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `destination_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `start_trip` date NOT NULL,
  `user_id` int(10) NOT NULL,
  `date_trip` date NOT NULL,
  `limit_person` int(10) NOT NULL,
  `joined` int(5) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `destination_id`, `description`, `start_trip`, `user_id`, `date_trip`, `limit_person`, `joined`, `active`) VALUES
(1, 'BachiBachi', 1, 'Bachi bachi', '2016-08-17', 0, '2016-08-29', 30, 0, 0),
(4, 'Hola', 1, 'Wola', '2016-08-17', 0, '2016-08-17', 10, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups_users`
--

CREATE TABLE IF NOT EXISTS `groups_users` (
`id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_tokens`
--

CREATE TABLE IF NOT EXISTS `login_tokens` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parks`
--

CREATE TABLE IF NOT EXISTS `parks` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parks`
--

INSERT INTO `parks` (`id`, `name`, `lat`, `longitude`) VALUES
(1, 'Sierra Maestra', '', ''),
(2, 'Llovizna', '', ''),
(3, 'Gran Sabana', '', ''),
(5, '80mts cuadrados no vi el editar', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
`id` int(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `commentary_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `points`
--

CREATE TABLE IF NOT EXISTS `points` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `country_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `destination_id` int(10) DEFAULT NULL,
  `terminal_id` int(10) NOT NULL,
  `price` float NOT NULL,
  `schedule` text NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `points`
--

INSERT INTO `points` (`id`, `name`, `lat`, `longitude`, `country_id`, `state_id`, `city_id`, `destination_id`, `terminal_id`, `price`, `schedule`, `payment`) VALUES
(1, 'BaÃ±o', '0min', '0sec', 0, 0, 0, 1, 0, 0, 'all day', 'credit card'),
(2, 'Cuarto', '0min', '0sec', 0, 0, 0, 1, 0, 0, 'Nights Only', 'credit card'),
(8, 'TestDRIVE', '3', '4', 1, 3, 2, NULL, 2, 12, 'asdsadasd', 'credit card'),
(9, 'Anotherasd', '3', '2', 1, 3, 2, NULL, 2, 2314310, 'asdfasdasd', 'Debit'),
(10, 'EL PUTO PUNTO', '12', '12', 1, 1, 1, 1, 1, 364567, 'dasd', 'DEbito MAMAGUEVOOOO!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `points_terminals`
--

CREATE TABLE IF NOT EXISTS `points_terminals` (
`id` int(10) NOT NULL,
  `terminal_id` int(10) NOT NULL,
  `point_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promotions`
--

CREATE TABLE IF NOT EXISTS `promotions` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `client_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promotions`
--

INSERT INTO `promotions` (`id`, `name`, `description`, `price`, `photo1`, `photo2`, `client_id`) VALUES
(1, 'Air Conditioner', 'A promotion, a very good promotion', 50000, 'img1472670606MO0.jpg', 'img14726706209CB.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `regions`
--

INSERT INTO `regions` (`id`, `name`, `country_id`) VALUES
(1, 'Los Andes', 1),
(2, 'Litoral Central', 1),
(3, 'AndalucÃ­a', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(2, 'Aire Acondicionado'),
(3, 'Safari'),
(4, 'Putas x4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE IF NOT EXISTS `states` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region_id` int(10) NOT NULL,
  `country_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `name`, `region_id`, `country_id`) VALUES
(1, 'TÃ¡chira', 1, 1),
(2, 'MÃ©rida', 1, 1),
(3, 'Distrito Federal', 2, 1),
(4, 'Numancia', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminals`
--

CREATE TABLE IF NOT EXISTS `terminals` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `terminals`
--

INSERT INTO `terminals` (`id`, `name`, `country_id`, `city_id`, `state_id`, `lat`, `longitude`, `schedule`, `description`, `phone`, `contact`) VALUES
(1, 'Terminal Nacional de San Antonio', 1, 1, 1, '60min', '15sec', 'Summer', 'Horroroso', '+582125555555', 'Directiva'),
(2, 'La Bandera', 1, 2, 3, '60', '45', 'all day', 'aslkdjakljfhkjadhvkljoijc ieic', '02120000000', 'Pedro Perez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types`
--

CREATE TABLE IF NOT EXISTS `types` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Playa'),
(2, 'MontaÃ±a'),
(3, 'Casa de Alirio 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types_users`
--

CREATE TABLE IF NOT EXISTS `types_users` (
`id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `commentary_id` int(10) NOT NULL,
  `country_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `ranking` int(5) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `interest_1` int(3) NOT NULL,
  `interest_2` int(3) NOT NULL,
  `interest_3` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `username`, `password`, `salt`, `email`, `first_name`, `last_name`, `email_verified`, `active`, `ip_address`, `created`, `modified`, `phone`, `commentary_id`, `country_id`, `state_id`, `city_id`, `ranking`, `photo`, `interest_1`, `interest_2`, `interest_3`) VALUES
(1, 1, 'admin', '365caef7fccbdb1ee711f084be9317a7', '1e6d99570a4d37cc29b18c4a6b06e6ed', 'admin@admin.com', 'Admin', '', 1, 1, '', '2016-03-29 11:38:05', '2016-03-29 11:38:05', '', 0, 0, 0, 0, 0, '', 0, 0, 0),
(4, 2, 'yo', '32be46b5e9c57c15bd8e32e2ea498eb7', '780c29cc13ff8ff6c8b53250f8f47574', 'yo@mail.com', 'Unusuario', 'UnUsuarioahi', 1, 1, NULL, '2016-08-25 16:02:48', '2016-08-25 16:02:48', '0092883aqsas', 0, 1, 1, 1, 0, 'img1472155366F9G.jpg', 9912383, 123993, 1322121);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
`id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `alias_name`, `allowRegistration`, `created`, `modified`) VALUES
(1, 'Admin', 'Admin', 0, '2016-03-29 11:38:05', '2016-03-29 11:38:05'),
(2, 'User', 'User', 1, '2016-03-29 11:38:05', '2016-03-29 11:38:05'),
(3, 'Guest', 'Guest', 0, '2016-03-29 11:38:05', '2016-03-29 11:38:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_group_permissions`
--

CREATE TABLE IF NOT EXISTS `user_group_permissions` (
`id` int(10) unsigned NOT NULL,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=259 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_group_permissions`
--

INSERT INTO `user_group_permissions` (`id`, `user_group_id`, `controller`, `action`, `allowed`) VALUES
(1, 1, 'Pages', 'display', 1),
(2, 2, 'Pages', 'display', 1),
(3, 3, 'Pages', 'display', 1),
(4, 1, 'UserGroupPermissions', 'index', 1),
(5, 2, 'UserGroupPermissions', 'index', 0),
(6, 3, 'UserGroupPermissions', 'index', 0),
(7, 1, 'UserGroupPermissions', 'update', 1),
(8, 2, 'UserGroupPermissions', 'update', 0),
(9, 3, 'UserGroupPermissions', 'update', 0),
(10, 1, 'UserGroups', 'index', 1),
(11, 2, 'UserGroups', 'index', 0),
(12, 3, 'UserGroups', 'index', 0),
(13, 1, 'UserGroups', 'addGroup', 1),
(14, 2, 'UserGroups', 'addGroup', 0),
(15, 3, 'UserGroups', 'addGroup', 0),
(16, 1, 'UserGroups', 'editGroup', 1),
(17, 2, 'UserGroups', 'editGroup', 0),
(18, 3, 'UserGroups', 'editGroup', 0),
(19, 1, 'UserGroups', 'deleteGroup', 1),
(20, 2, 'UserGroups', 'deleteGroup', 0),
(21, 3, 'UserGroups', 'deleteGroup', 0),
(22, 1, 'Users', 'index', 1),
(23, 2, 'Users', 'index', 1),
(24, 3, 'Users', 'index', 0),
(25, 1, 'Users', 'viewUser', 1),
(26, 2, 'Users', 'viewUser', 0),
(27, 3, 'Users', 'viewUser', 0),
(28, 1, 'Users', 'myprofile', 1),
(29, 2, 'Users', 'myprofile', 1),
(30, 3, 'Users', 'myprofile', 0),
(31, 1, 'Users', 'login', 1),
(32, 2, 'Users', 'login', 1),
(33, 3, 'Users', 'login', 1),
(34, 1, 'Users', 'logout', 1),
(35, 2, 'Users', 'logout', 1),
(36, 3, 'Users', 'logout', 1),
(37, 1, 'Users', 'register', 1),
(38, 2, 'Users', 'register', 1),
(39, 3, 'Users', 'register', 1),
(40, 1, 'Users', 'changePassword', 1),
(41, 2, 'Users', 'changePassword', 1),
(42, 3, 'Users', 'changePassword', 0),
(43, 1, 'Users', 'changeUserPassword', 1),
(44, 2, 'Users', 'changeUserPassword', 0),
(45, 3, 'Users', 'changeUserPassword', 0),
(46, 1, 'Users', 'addUser', 1),
(47, 2, 'Users', 'addUser', 0),
(48, 3, 'Users', 'addUser', 0),
(49, 1, 'Users', 'editUser', 1),
(50, 2, 'Users', 'editUser', 0),
(51, 3, 'Users', 'editUser', 0),
(52, 1, 'Users', 'dashboard', 1),
(53, 2, 'Users', 'dashboard', 1),
(54, 3, 'Users', 'dashboard', 0),
(55, 1, 'Users', 'deleteUser', 1),
(56, 2, 'Users', 'deleteUser', 0),
(57, 3, 'Users', 'deleteUser', 0),
(58, 1, 'Users', 'makeActive', 1),
(59, 2, 'Users', 'makeActive', 0),
(60, 3, 'Users', 'makeActive', 0),
(61, 1, 'Users', 'accessDenied', 1),
(62, 2, 'Users', 'accessDenied', 1),
(63, 3, 'Users', 'accessDenied', 1),
(64, 1, 'Users', 'userVerification', 1),
(65, 2, 'Users', 'userVerification', 1),
(66, 3, 'Users', 'userVerification', 1),
(67, 1, 'Users', 'forgotPassword', 1),
(68, 2, 'Users', 'forgotPassword', 1),
(69, 3, 'Users', 'forgotPassword', 1),
(70, 1, 'Users', 'makeActiveInactive', 1),
(71, 2, 'Users', 'makeActiveInactive', 0),
(72, 3, 'Users', 'makeActiveInactive', 0),
(73, 1, 'Users', 'verifyEmail', 1),
(74, 2, 'Users', 'verifyEmail', 0),
(75, 3, 'Users', 'verifyEmail', 0),
(76, 1, 'Users', 'activatePassword', 1),
(77, 2, 'Users', 'activatePassword', 1),
(78, 3, 'Users', 'activatePassword', 1),
(79, 1, 'Start', 'sendMail', 1),
(80, 2, 'Start', 'sendMail', 1),
(81, 3, 'Start', 'sendMail', 1),
(82, 1, 'Activities', 'delete', 0),
(83, 2, 'Activities', 'delete', 1),
(84, 3, 'Activities', 'delete', 0),
(85, 1, 'Activities', 'edit', 0),
(86, 2, 'Activities', 'edit', 1),
(87, 3, 'Activities', 'edit', 0),
(88, 1, 'Activities', 'add', 0),
(89, 2, 'Activities', 'add', 1),
(90, 3, 'Activities', 'add', 0),
(91, 1, 'Activities', 'view', 0),
(92, 2, 'Activities', 'view', 1),
(93, 3, 'Activities', 'view', 0),
(94, 1, 'Activities', 'index', 0),
(95, 2, 'Activities', 'index', 1),
(96, 3, 'Activities', 'index', 0),
(97, 1, 'Clients', 'index', 0),
(98, 2, 'Clients', 'index', 1),
(99, 3, 'Clients', 'index', 0),
(100, 1, 'Clients', 'view', 0),
(101, 2, 'Clients', 'view', 1),
(102, 3, 'Clients', 'view', 0),
(103, 1, 'Clients', 'add', 0),
(104, 2, 'Clients', 'add', 1),
(105, 3, 'Clients', 'add', 0),
(106, 1, 'Clients', 'edit', 0),
(107, 2, 'Clients', 'edit', 1),
(108, 3, 'Clients', 'edit', 0),
(109, 1, 'Commentaries', 'add', 0),
(110, 2, 'Commentaries', 'add', 1),
(111, 3, 'Commentaries', 'add', 0),
(112, 1, 'Commentaries', 'edit', 0),
(113, 2, 'Commentaries', 'edit', 1),
(114, 3, 'Commentaries', 'edit', 0),
(115, 1, 'Commentaries', 'delete', 0),
(116, 2, 'Commentaries', 'delete', 1),
(117, 3, 'Commentaries', 'delete', 0),
(118, 1, 'Forumas', 'edit', 0),
(119, 2, 'Forumas', 'edit', 1),
(120, 3, 'Forumas', 'edit', 0),
(121, 1, 'Forumas', 'add', 0),
(122, 2, 'Forumas', 'add', 1),
(123, 3, 'Forumas', 'add', 0),
(124, 1, 'Forumqs', 'delete', 0),
(125, 2, 'Forumqs', 'delete', 1),
(126, 3, 'Forumqs', 'delete', 0),
(127, 1, 'Forumqs', 'edit', 0),
(128, 2, 'Forumqs', 'edit', 1),
(129, 3, 'Forumqs', 'edit', 0),
(130, 1, 'Forumqs', 'add', 0),
(131, 2, 'Forumqs', 'add', 1),
(132, 3, 'Forumqs', 'add', 0),
(133, 1, 'Forumqs', 'view', 0),
(134, 2, 'Forumqs', 'view', 1),
(135, 3, 'Forumqs', 'view', 0),
(136, 1, 'Forumqs', 'index', 0),
(137, 2, 'Forumqs', 'index', 1),
(138, 3, 'Forumqs', 'index', 0),
(139, 1, 'Groups', 'delete', 0),
(140, 2, 'Groups', 'delete', 1),
(141, 3, 'Groups', 'delete', 0),
(142, 1, 'Groups', 'edit', 0),
(143, 2, 'Groups', 'edit', 1),
(144, 3, 'Groups', 'edit', 0),
(145, 1, 'Groups', 'add', 0),
(146, 2, 'Groups', 'add', 1),
(147, 3, 'Groups', 'add', 0),
(148, 1, 'Groups', 'unjoin_g', 0),
(149, 2, 'Groups', 'unjoin_g', 1),
(150, 3, 'Groups', 'unjoin_g', 0),
(151, 1, 'Groups', 'join_g', 0),
(152, 2, 'Groups', 'join_g', 1),
(153, 3, 'Groups', 'join_g', 0),
(154, 1, 'Groups', 'view', 0),
(155, 2, 'Groups', 'view', 1),
(156, 3, 'Groups', 'view', 0),
(157, 1, 'Groups', 'index', 0),
(158, 2, 'Groups', 'index', 1),
(159, 3, 'Groups', 'index', 0),
(160, 1, 'Pages', 'dashboard', 0),
(161, 2, 'Pages', 'dashboard', 1),
(162, 3, 'Pages', 'dashboard', 1),
(163, 1, 'Parks', 'view', 0),
(164, 2, 'Parks', 'view', 1),
(165, 3, 'Parks', 'view', 0),
(166, 1, 'Parks', 'index', 0),
(167, 2, 'Parks', 'index', 1),
(168, 3, 'Parks', 'index', 0),
(169, 1, 'Countries', 'view', 0),
(170, 2, 'Countries', 'view', 1),
(171, 3, 'Countries', 'view', 0),
(172, 1, 'Countries', 'index', 0),
(173, 2, 'Countries', 'index', 1),
(174, 3, 'Countries', 'index', 0),
(175, 1, 'Cities', 'view', 0),
(176, 2, 'Cities', 'view', 1),
(177, 3, 'Cities', 'view', 0),
(178, 1, 'Cities', 'index', 0),
(179, 2, 'Cities', 'index', 1),
(180, 3, 'Cities', 'index', 0),
(181, 1, 'Photos', 'index', 0),
(182, 2, 'Photos', 'index', 1),
(183, 3, 'Photos', 'index', 0),
(184, 1, 'Photos', 'view', 0),
(185, 2, 'Photos', 'view', 1),
(186, 3, 'Photos', 'view', 0),
(187, 1, 'Photos', 'add', 0),
(188, 2, 'Photos', 'add', 1),
(189, 3, 'Photos', 'add', 0),
(190, 1, 'Photos', 'edit', 0),
(191, 2, 'Photos', 'edit', 1),
(192, 3, 'Photos', 'edit', 0),
(193, 1, 'Photos', 'delete', 0),
(194, 2, 'Photos', 'delete', 1),
(195, 3, 'Photos', 'delete', 0),
(196, 1, 'Promotions', 'delete', 0),
(197, 2, 'Promotions', 'delete', 1),
(198, 3, 'Promotions', 'delete', 0),
(199, 1, 'Promotions', 'edit', 0),
(200, 2, 'Promotions', 'edit', 1),
(201, 3, 'Promotions', 'edit', 0),
(202, 1, 'Promotions', 'add', 0),
(203, 2, 'Promotions', 'add', 1),
(204, 3, 'Promotions', 'add', 0),
(205, 1, 'Promotions', 'view', 0),
(206, 2, 'Promotions', 'view', 1),
(207, 3, 'Promotions', 'view', 0),
(208, 1, 'Promotions', 'index', 0),
(209, 2, 'Promotions', 'index', 1),
(210, 3, 'Promotions', 'index', 0),
(211, 1, 'Clients', 'delete', 0),
(212, 2, 'Clients', 'delete', 1),
(213, 3, 'Clients', 'delete', 0),
(214, 1, 'Regions', 'index', 0),
(215, 2, 'Regions', 'index', 1),
(216, 3, 'Regions', 'index', 0),
(217, 1, 'Regions', 'view', 0),
(218, 2, 'Regions', 'view', 1),
(219, 3, 'Regions', 'view', 0),
(220, 1, 'Points', 'view', 0),
(221, 2, 'Points', 'view', 1),
(222, 3, 'Points', 'view', 0),
(223, 1, 'Points', 'index', 0),
(224, 2, 'Points', 'index', 1),
(225, 3, 'Points', 'index', 0),
(226, 1, 'Services', 'delete', 0),
(227, 2, 'Services', 'delete', 1),
(228, 3, 'Services', 'delete', 0),
(229, 1, 'Services', 'edit', 0),
(230, 2, 'Services', 'edit', 1),
(231, 3, 'Services', 'edit', 0),
(232, 1, 'Services', 'add', 0),
(233, 2, 'Services', 'add', 1),
(234, 3, 'Services', 'add', 0),
(235, 1, 'Services', 'view', 0),
(236, 2, 'Services', 'view', 1),
(237, 3, 'Services', 'view', 0),
(238, 1, 'Services', 'index', 0),
(239, 2, 'Services', 'index', 1),
(240, 3, 'Services', 'index', 0),
(241, 1, 'States', 'view', 0),
(242, 2, 'States', 'view', 1),
(243, 3, 'States', 'view', 0),
(244, 1, 'States', 'index', 0),
(245, 2, 'States', 'index', 1),
(246, 3, 'States', 'index', 0),
(247, 1, 'Terminals', 'view', 0),
(248, 2, 'Terminals', 'view', 1),
(249, 3, 'Terminals', 'view', 0),
(250, 1, 'Terminals', 'index', 0),
(251, 2, 'Terminals', 'index', 1),
(252, 3, 'Terminals', 'index', 0),
(253, 1, 'Types', 'view', 0),
(254, 2, 'Types', 'view', 1),
(255, 3, 'Types', 'view', 0),
(256, 1, 'Types', 'index', 0),
(257, 2, 'Types', 'index', 1),
(258, 3, 'Types', 'index', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activities`
--
ALTER TABLE `activities`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `activities_destinations`
--
ALTER TABLE `activities_destinations`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cities_terminals`
--
ALTER TABLE `cities_terminals`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients_destinations`
--
ALTER TABLE `clients_destinations`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients_terminals`
--
ALTER TABLE `clients_terminals`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `commentaries`
--
ALTER TABLE `commentaries`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destinations`
--
ALTER TABLE `destinations`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destinations_terminals`
--
ALTER TABLE `destinations_terminals`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `foruma`
--
ALTER TABLE `foruma`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `forumq`
--
ALTER TABLE `forumq`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups_users`
--
ALTER TABLE `groups_users`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_tokens`
--
ALTER TABLE `login_tokens`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parks`
--
ALTER TABLE `parks`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `photos`
--
ALTER TABLE `photos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `points`
--
ALTER TABLE `points`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `points_terminals`
--
ALTER TABLE `points_terminals`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promotions`
--
ALTER TABLE `promotions`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `regions`
--
ALTER TABLE `regions`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `terminals`
--
ALTER TABLE `terminals`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `types`
--
ALTER TABLE `types`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `types_users`
--
ALTER TABLE `types_users`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `user` (`username`), ADD KEY `mail` (`email`), ADD KEY `users_FKIndex1` (`user_group_id`);

--
-- Indices de la tabla `user_groups`
--
ALTER TABLE `user_groups`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_group_permissions`
--
ALTER TABLE `user_group_permissions`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activities`
--
ALTER TABLE `activities`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `activities_destinations`
--
ALTER TABLE `activities_destinations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `cities_terminals`
--
ALTER TABLE `cities_terminals`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `clients_destinations`
--
ALTER TABLE `clients_destinations`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `clients_terminals`
--
ALTER TABLE `clients_terminals`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `commentaries`
--
ALTER TABLE `commentaries`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `destinations`
--
ALTER TABLE `destinations`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `destinations_terminals`
--
ALTER TABLE `destinations_terminals`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `foruma`
--
ALTER TABLE `foruma`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `forumq`
--
ALTER TABLE `forumq`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `groups_users`
--
ALTER TABLE `groups_users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `login_tokens`
--
ALTER TABLE `login_tokens`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `parks`
--
ALTER TABLE `parks`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `photos`
--
ALTER TABLE `photos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `points`
--
ALTER TABLE `points`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `points_terminals`
--
ALTER TABLE `points_terminals`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `promotions`
--
ALTER TABLE `promotions`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `regions`
--
ALTER TABLE `regions`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `terminals`
--
ALTER TABLE `terminals`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `types`
--
ALTER TABLE `types`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `types_users`
--
ALTER TABLE `types_users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `user_groups`
--
ALTER TABLE `user_groups`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `user_group_permissions`
--
ALTER TABLE `user_group_permissions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=259;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
