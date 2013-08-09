-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-08-2013 a las 23:35:00
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `santarosa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` char(100) DEFAULT NULL,
  `city` char(100) DEFAULT NULL,
  `sona` char(100) DEFAULT NULL,
  `area` char(100) DEFAULT NULL,
  `locality` char(100) DEFAULT NULL,
  `locality1` char(100) DEFAULT NULL,
  `route` char(100) DEFAULT NULL,
  `latitude` text NOT NULL,
  `length` text NOT NULL,
  `branch_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL,
  `description` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `created`, `modified`, `filename`, `dir`) VALUES
(2, 'dfgdddddddddd', 'sdfsdfsd', '2013-07-25 17:02:39', '2013-07-25 17:02:39', '396598_216143645175761_1280604036_n.jpg', 'img\\ad\\filename'),
(3, 'b$gg', 'ffffffg', '2013-07-25 17:52:49', '2013-07-25 17:52:49', '396598_216143645175761_1280604036_n-0.jpg', 'img\\ad\\filename'),
(4, 'tttttttt', 'dddddd', '2013-07-27 11:08:51', '2013-07-27 11:08:51', '396598_216143645175761_1280604036_n-1.jpg', 'img\\ad\\filename'),
(5, 'hol', 'es ', '2013-07-27 11:09:20', '2013-07-27 11:09:20', 'mentira.jpg', 'img\\ad\\filename'),
(6, 'ssssssss', 'xccx', '2013-07-27 11:13:21', '2013-07-27 11:13:21', 'mentira_verdad.jpg', 'img\\ad\\filename'),
(7, 'ssssssssssss', 'sssssssssssss', '2013-07-27 11:13:33', '2013-07-27 11:13:33', 'images_1996.jpg', 'img\\ad\\filename'),
(8, 'aasdfa', 'adfasd', '2013-07-27 11:23:51', '2013-07-27 11:23:51', 'imagesm.jpg', 'img\\ad\\filename'),
(9, 'ere', 'er', '2013-07-27 11:25:50', '2013-07-27 11:25:50', '396598_216143645175761_1280604036_n-2.jpg', 'img\\ad\\filename');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `benefits`
--

CREATE TABLE IF NOT EXISTS `benefits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `benefits`
--

INSERT INTO `benefits` (`id`, `title`, `description`, `filename`, `dir`) VALUES
(1, 'carne sin grasa', 'aprota pocas calorias mmmm sdf ssfs k lj jlj l  j kj        kj kjn jknj njn kjn  jn jn jk n kjn jn k jn kjn kj n j njn  n k n j', 'conta1.jpg', 'img\\benefit\\filename'),
(2, 'un nuevo beneficio', 'mmmmmm m   j lk j k  l j  jlkkkkk lk lk  pioofeeo l lk lk n on oin oij oij ij i oij oij ij oi jio', 'RRHH2.jpg', 'img\\benefit\\filename'),
(3, 'aki esta todo ', 'aaaaaa  sdfsd sd dfsd s fsd sd f fs s fsdfsd sf sd fsdfsd fsd sdf sdfsd fsdf sd sdf', 'RRHH.jpg', 'img\\benefit\\filename');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `phone` char(50) NOT NULL,
  `fax` char(50) NOT NULL,
  `mobile` char(50) NOT NULL,
  `contact` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `branches_images`
--

CREATE TABLE IF NOT EXISTS `branches_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text NOT NULL,
  `dir` text CHARACTER SET latin1 NOT NULL,
  `descipcion` text CHARACTER SET latin1,
  `branch_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) CHARACTER SET utf8 NOT NULL,
  `filename` text CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `dir` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `filename`, `dir`, `description`) VALUES
(1, 'perimera', 'GNIFP.PNG', 'mmmmm', 'mmmm'),
(2, 'bnnnnnnnnnn', '357925_920.jpg', 'mmmmm', 'bvvvvvvvvv'),
(3, 'categoria 1', 'CaptJJJura.PNG', 'mmmmm', 'mmmmmmmmm'),
(4, 'categoria 2', 'CaptJJJura-0.PNG', 'mmmmm', 'sssssss'),
(5, 'perimera', 'GNIFP.PNG', 'mmmmmmmm', 'mmmmm'),
(6, 'mmss', 'GNIFP.PNG', 'ijoijoio', 'njnjk'),
(7, 'perimera', 'GNIFP.PNG', 'mmmmmmmm', 'mmmmm'),
(8, 'mmss', 'GNIFP.PNG', 'ijoijoio', 'njnjk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `mission` text NOT NULL,
  `vision` text NOT NULL,
  `values` text NOT NULL,
  `history` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultations`
--

CREATE TABLE IF NOT EXISTS `consultations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `company` char(100) DEFAULT NULL,
  `email` char(50) NOT NULL,
  `phone` char(15) DEFAULT NULL,
  `message` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images_items`
--

CREATE TABLE IF NOT EXISTS `images_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  `description` text,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `images_items`
--

INSERT INTO `images_items` (`id`, `filename`, `dir`, `description`, `item_id`) VALUES
(1, 'CaptJJJura.PNG', 'img\\images_item\\filename', 'fasasdfa', 1),
(2, 'Captura.png', 'img\\images_item\\filename', 'ssssssssss', 2),
(3, 'Captura-0.png', 'img\\images_item\\filename', 'sssssssss', 3),
(4, 'Captura-1.png', 'img\\images_item\\filename', 'sssssssss', 4),
(5, 'Captura-2.png', 'img\\images_item\\filename', 'sdfsf', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images_recipes`
--

CREATE TABLE IF NOT EXISTS `images_recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  `description` text,
  `recipe_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `recipe_id` (`recipe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `images_recipes`
--

INSERT INTO `images_recipes` (`id`, `filename`, `dir`, `description`, `recipe_id`) VALUES
(1, 'receta.PNG', 'img\\images_recipe\\filename', 'sdsdsd', 2),
(2, 'receta-0.PNG', 'img\\images_recipe\\filename', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 3),
(3, 'receta-1.PNG', 'img\\images_recipe\\filename', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 4),
(4, 'receta-2.PNG', 'img\\images_recipe\\filename', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 5),
(5, 'receta-3.PNG', 'img\\images_recipe\\filename', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `description` text,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`id`, `name`, `description`, `category_id`) VALUES
(1, 'mmmmm', 'ghgh', 1),
(2, 'item 3', 'mmmmmmmmm', 1),
(3, 'item 4', 'on nnon oikn', 1),
(4, 'item 4', 'smdosmdom', 1),
(5, 'item 5', 'mms mpsmp smp', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(150) NOT NULL,
  `time` int(11) NOT NULL,
  `portion` int(11) NOT NULL,
  `ingredients` text NOT NULL,
  `preparation` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `time`, `portion`, `ingredients`, `preparation`, `created`, `modified`) VALUES
(1, 'primera re', 0, 0, 'jljkljlkjlk', ' mn n kjnjnjk', '2013-08-04 12:31:32', '2013-08-04 12:31:32'),
(2, 'segunda receta', 0, 0, 'lklnk', 'nklnlk', '2013-08-04 12:32:13', '2013-08-04 12:32:13'),
(3, 'receta 1', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', '2013-08-08 14:09:38', '2013-08-08 14:09:38'),
(4, 'receta 2', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', '2013-08-08 14:10:03', '2013-08-08 14:10:03'),
(5, 'receta 3', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', '2013-08-08 14:10:30', '2013-08-08 14:10:30'),
(6, 'receta 4', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', '2013-08-08 14:10:54', '2013-08-08 14:10:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requirements`
--

CREATE TABLE IF NOT EXISTS `requirements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `charge` enum('asistente','gerente') CHARACTER SET utf8 NOT NULL,
  `surnames` char(60) CHARACTER SET utf8 NOT NULL,
  `names` char(50) CHARACTER SET utf8 NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` enum('M','F') CHARACTER SET utf8 NOT NULL,
  `address` text,
  `phone` int(11) DEFAULT NULL,
  `cellular` int(11) NOT NULL,
  `email` char(100) CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `curriculum` text CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermarkets`
--

CREATE TABLE IF NOT EXISTS `supermarkets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  `link` text NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `supermarkets`
--

INSERT INTO `supermarkets` (`id`, `name`, `filename`, `dir`, `link`, `description`) VALUES
(1, 'iper1', 'logo.PNG', 'img\\supermarket\\filename', 'http://www.vidamrr.com/2013/03/30-ejemplos-de-sitios-web-usando-el.html', 'ssssssssssssss'),
(3, 'iper2', 'logo.PNG', 'img\\supermarket\\filename	', '', 'http://www.vidamrr.com/2013/03/30-'),
(4, 'iper3', 'logo.PNG', 'sdddddd', 'sssssssssssss', 'dfdfdfdfdf'),
(5, 'iper2', 'logo.PNG', 'img\\supermarket\\filename	', '', 'http://www.vidamrr.com/2013/03/30-'),
(6, 'iper3', 'logo.PNG', 'sdddddd', 'sssssssssssss', 'dfdfdfdfdf'),
(7, 'iper2', 'logo.PNG', 'img\\supermarket\\filename	', '', 'http://www.vidamrr.com/2013/03/30-'),
(8, 'iper3', 'logo.PNG', 'sdddddd', 'sssssssssssss', 'dfdfdfdfdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `email` char(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`) VALUES
(1, 'oss', 'b5bbe947ae65ab349481e8a245d39825bc49e318', '1', 'ronaldo_racso@hotmail.com', '2013-08-08 00:00:00', '2013-08-08 00:00:00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`);

--
-- Filtros para la tabla `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Filtros para la tabla `branches_images`
--
ALTER TABLE `branches_images`
  ADD CONSTRAINT `branches_images_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`);

--
-- Filtros para la tabla `images_items`
--
ALTER TABLE `images_items`
  ADD CONSTRAINT `images_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Filtros para la tabla `images_recipes`
--
ALTER TABLE `images_recipes`
  ADD CONSTRAINT `images_recipes_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`);

--
-- Filtros para la tabla `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `quotes_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Filtros para la tabla `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
