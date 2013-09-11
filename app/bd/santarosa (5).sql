-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-08-2013 a las 13:09:30
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
-- Estructura de tabla para la tabla `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('video','foto') NOT NULL,
  `link` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `ads`
--

INSERT INTO `ads` (`id`, `type`, `link`, `created`, `modified`, `filename`, `dir`) VALUES
(2, '', 'sdfsdfsd', '2013-07-25 17:02:39', '2013-07-25 17:02:39', '396598_216143645175761_1280604036_n.jpg', 'img\\ad\\filename'),
(3, '', 'ffffffg', '2013-07-25 17:52:49', '2013-07-25 17:52:49', '396598_216143645175761_1280604036_n-0.jpg', 'img\\ad\\filename'),
(4, '', 'dddddd', '2013-07-27 11:08:51', '2013-07-27 11:08:51', '396598_216143645175761_1280604036_n-1.jpg', 'img\\ad\\filename'),
(5, '', 'es ', '2013-07-27 11:09:20', '2013-07-27 11:09:20', 'mentira.jpg', 'img\\ad\\filename'),
(6, '', 'xccx', '2013-07-27 11:13:21', '2013-07-27 11:13:21', 'mentira_verdad.jpg', 'img\\ad\\filename'),
(7, '', 'sssssssssssss', '2013-07-27 11:13:33', '2013-07-27 11:13:33', 'images_1996.jpg', 'img\\ad\\filename'),
(8, '', 'adfasd', '2013-07-27 11:23:51', '2013-07-27 11:23:51', 'imagesm.jpg', 'img\\ad\\filename'),
(9, '', 'er', '2013-07-27 11:25:50', '2013-07-27 11:25:50', '396598_216143645175761_1280604036_n-2.jpg', 'img\\ad\\filename'),
(16, 'video', '//www.youtube.com/embed/7n52XC5ckjs', '2013-08-17 00:00:00', '2013-08-17 00:00:00', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `benefits`
--

INSERT INTO `benefits` (`id`, `title`, `description`, `filename`, `dir`) VALUES
(4, 'beneficios ', 'dsfsdfsd sf sdfsd ', 'Captura.png', 'img\\benefit\\filename'),
(5, 'carnes', 'sdfsdfs sds', 'RRHH2-0.jpg', 'img\\benefit\\filename'),
(6, 'modal', 'modal', 'nu.jpg', 'img\\benefit\\filename'),
(7, 'ultimo ', 'loms sdfsdfsdfsdfsdfsdf', 'conta1.jpg', 'img\\benefit\\filename'),
(8, 'yyyyyyyyyyyyyy', 'dfsdfs', '970029_249055515249169_1172640689_n.jpg', 'img\\benefit\\filename'),
(9, 'hoy', 'fhfgh', 'Captura-0.png', 'img\\benefit\\filename'),
(10, 'wewerwer', 'werwerwe', '970029_249055515249169_1172640689_n.jpg', 'img\\benefit\\filename'),
(11, 'ttttttttttttt', 'dfsdfs', '970029_249055515249169_1172640689_n-0.jpg', 'img\\benefit\\filename'),
(12, 'bbbbbbbb', 'werwer', '970029_249055515249169_1172640689_n-1.jpg', 'img\\benefit\\filename'),
(13, 'beneficio de hoy', 'git add -ugit add -ugit add -ugit add -ugit add -ugit add -ugit add -ugit add -ugit add -ugit add -ugit add -ugit add -ugit add -ugit add -ugit add -ugit add -u', 'RRHH-0.jpg', 'img\\benefit\\filename'),
(14, 'cc dsdfafa 232', '0fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf fsdfsdf ', 'RRHH2.jpg', 'img\\benefit\\filename');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  `type` char(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` char(50) NOT NULL,
  `movil` int(11) NOT NULL,
  `fax` char(50) NOT NULL,
  `contact` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `branches`
--

INSERT INTO `branches` (`id`, `company_id`, `name`, `filename`, `dir`, `type`, `address`, `phone`, `movil`, `fax`, `contact`) VALUES
(1, 1, 'Cochabamba', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque aperiam maxime nemo omnis? Labore, aspernatur, magni. Sapiente, molestiae, consectetur, laboriosam ipsam suscipit dolor aperiam commodi tempore ', '484645564', 744946, '264684', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(2, 1, 'oruro', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque aperiam maxime nemo omnis? Labore, aspernatur, magni. Sapiente, molestiae, consectetur, laboriosam ipsam suscipit dolor aperiam commodi tempore earum porro magnam.', '45786789', 79646546, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(3, 1, 'Cochabamba', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque aperiam maxime nemo omnis? Labore, aspernatur, magni. Sapiente, molestiae, consectetur, laboriosam ipsam suscipit dolor aperiam commodi tempore ', '484645564', 744946, '264684', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(4, 1, 'oruro', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque aperiam maxime nemo omnis? Labore, aspernatur, magni. Sapiente, molestiae, consectetur, laboriosam ipsam suscipit dolor aperiam commodi tempore earum porro magnam.', '45786789', 79646546, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(5, 1, 'Cochabamba', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque aperiam maxime nemo omnis? Labore, aspernatur, magni. Sapiente, molestiae, consectetur, laboriosam ipsam suscipit dolor aperiam commodi tempore ', '484645564', 744946, '264684', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(6, 1, 'oruro', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque aperiam maxime nemo omnis? Labore, aspernatur, magni. Sapiente, molestiae, consectetur, laboriosam ipsam suscipit dolor aperiam commodi tempore earum porro magnam.', '45786789', 79646546, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(7, 1, 'Cochabamba', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque aperiam maxime nemo omnis? Labore, aspernatur, magni. Sapiente, molestiae, consectetur, laboriosam ipsam suscipit dolor aperiam commodi tempore ', '484645564', 744946, '264684', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(8, 1, 'oruro', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque aperiam maxime nemo omnis? Labore, aspernatur, magni. Sapiente, molestiae, consectetur, laboriosam ipsam suscipit dolor aperiam commodi tempore earum porro magnam.', '45786789', 79646546, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(9, 1, 'otroooo', '', '', 'mmmm', 'calle ....', '46454654', 77777, '777777', 'juan .... .. . .'),
(10, 1, 'dsdf', 'Muchas_Gracias_Por_su_Atencion.jpg', 'img\\branch\\filename', 'rete', ' sfsd', '4343', 3434, '3434', 'fsdf ');

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
-- Estructura de tabla para la tabla `charges`
--

CREATE TABLE IF NOT EXISTS `charges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `deadline` date NOT NULL,
  `description` text NOT NULL,
  `formation` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `charges`
--

INSERT INTO `charges` (`id`, `branch_id`, `title`, `deadline`, `description`, `formation`, `created`, `modified`) VALUES
(1, 1, 'empleo1', '1998-11-07', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cum minus nihil possimus vel culpa neque pariatur quidem eos quaerat. Voluptate, recusandae, id assumenda laudantium cum fuga aliquam quasi quisquam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cum minus nihil possimus vel culpa neque pariatur quidem eos quaerat. Voluptate, recusandae, id assumenda laudantium cum fuga aliquam quasi quisquam.', '2013-08-15 16:02:40', '2013-08-15 16:02:40'),
(2, 1, 'empleo2', '2013-08-16', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cum minus nihil possimus vel culpa neque pariatur quidem eos quaerat. Voluptate, recusandae, id assumenda laudantium cum fuga aliquam quasi quisquam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cum minus nihil possimus vel culpa neque pariatur quidem eos quaerat. Voluptate, recusandae, id assumenda laudantium cum fuga aliquam quasi quisquam.', '2013-08-15 16:03:14', '2013-08-15 16:03:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `content`) VALUES
(1, '<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">\r\n	<tbody>\r\n		<tr>\r\n			<td>dfgdf</td>\r\n			<td>fsdfsds</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>45</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td><img alt="devil" height="20" src="http://localhost/santarosa/js/ckeditor/plugins/smiley/images/devil_smile.gif" title="devil" width="20" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><img alt="jajaja" src="http://www.avicola-santarosa.com/fno/banner-embutidos4.jpg" style="width: 516px; height: 530px; border-width: 2px; border-style: solid; float: left;" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, impedit, id, quibusdam laborum ducimus odit sapiente tenetur distinctio facere recusandae earum sit expedita quia inventore repellat harum nobis. Libero, maxime.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, impedit, id, quibusdam laborum ducimus odit sapiente tenetur distinctio facere recusandae earum sit expedita quia inventore repellat harum nobis. Libero, maxime.</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultations`
--

CREATE TABLE IF NOT EXISTS `consultations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `address` text NOT NULL,
  `phone` char(20) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `message` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `consultations`
--

INSERT INTO `consultations` (`id`, `name`, `address`, `phone`, `email`, `message`, `created`, `modified`) VALUES
(1, 'osccccccc', 'sdfsdfsdf sd', '489797879', 'ronaldo_racso@hotmail.com', 'mmmmmmm snfsdofsod ', '2013-08-10 17:41:44', '2013-08-10 17:41:44'),
(2, 'errterte r', ' erte rter', '546456', 'ronaldo_racso@hotmail.com', 'dfffffffff', '2013-08-15 15:31:19', '2013-08-15 15:31:19'),
(3, 'fdgfdsggs', 'gsf sfgs', '3453', 'ronaldo_racso@hotmail.com', 'sdfsd', '2013-08-15 18:20:20', '2013-08-15 18:20:20');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `images_recipes`
--

INSERT INTO `images_recipes` (`id`, `filename`, `dir`, `description`, `recipe_id`) VALUES
(1, 'receta.PNG', 'img\\images_recipe\\filename', 'sdsdsd', 2),
(2, 'receta-0.PNG', 'img\\images_recipe\\filename', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 3),
(3, 'receta-1.PNG', 'img\\images_recipe\\filename', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 4),
(4, 'receta-2.PNG', 'img\\images_recipe\\filename', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 5),
(5, 'receta-3.PNG', 'img\\images_recipe\\filename', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', 6),
(6, 'receta-4.PNG', 'img\\images_recipe\\filename', 'kbjbkj', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredients`
--

CREATE TABLE IF NOT EXISTS `ingredients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` char(10) NOT NULL,
  `name` text NOT NULL,
  `recipe_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `recipe_id` (`recipe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ingredients`
--

INSERT INTO `ingredients` (`id`, `amount`, `name`, `recipe_id`) VALUES
(1, '1/2', 'fs sf sdfsd fsd', 1),
(2, '11', 'papa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `presentacion` char(150) NOT NULL,
  `description` text,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`id`, `name`, `presentacion`, `description`, `category_id`) VALUES
(1, 'mmmmm', 'entero trosado', 'ghgh', 1),
(2, 'item 3', 'entero trosado', 'mmmmmmmmm', 1),
(3, 'item 4', 'entero trosado', 'on nnon oikn', 1),
(4, 'item 4', 'entero trosado', 'smdosmdom', 1),
(5, 'item 5', 'entero trosado', 'mms mpsmp smp', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items_quotes`
--

CREATE TABLE IF NOT EXISTS `items_quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `quote_id` (`quote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `items_quotes`
--

INSERT INTO `items_quotes` (`id`, `item_id`, `quote_id`, `detail`, `amount`) VALUES
(24, 1, 22, '', 3453),
(25, 4, 22, '', 45),
(26, 1, 23, 'sdsds', 78787),
(27, 2, 24, '', 554),
(28, 2, 25, '', 78787),
(29, 3, 25, '', 88);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` char(50) NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` char(50) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `quotes`
--

INSERT INTO `quotes` (`id`, `fullname`, `address`, `phone`, `email`, `message`, `created`, `modified`) VALUES
(22, 'WEWE', 'SDFSDF', 3534534, 'ro@hotmail.com', 'SFSDFSD', '2013-08-15 11:34:30', '2013-08-15 11:34:30'),
(23, 'sfsdfs', 'ewfsdf', 34534534, 'ro@hotmail.com', 'sdfs', '2013-08-15 11:35:20', '2013-08-15 11:35:20'),
(24, 'RAOCS', 'sfsd', 3434, 'ro@hotmail.com', 'sdf', '2013-08-15 11:36:14', '2013-08-15 11:36:14'),
(25, 'ssdfsd', 'sdsf', 4646554, 'ro@hotmail.com', 'sdfsdf', '2013-08-15 12:13:27', '2013-08-15 12:13:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quote_services`
--

CREATE TABLE IF NOT EXISTS `quote_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `fullname` char(100) NOT NULL,
  `address` char(100) NOT NULL,
  `phone` char(10) NOT NULL,
  `email` char(50) NOT NULL,
  `issue` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `quote_services`
--

INSERT INTO `quote_services` (`id`, `service_id`, `fullname`, `address`, `phone`, `email`, `issue`, `message`, `created`, `modified`) VALUES
(1, 1, 'sssss', 'afdfa', '34354', 'ro@hotamil.com', 'sdfsd', 'fsdfsd', '2013-08-16 13:26:48', '2013-08-16 13:26:48'),
(2, 1, 'sssss', 'sdfw', '234234', 'ro@hotamil.com', 'fff', 'ffsdfs', '2013-08-16 13:30:58', '2013-08-16 13:30:58'),
(3, 1, 'sssss', 'sdfw', '234234', 'ro@hotamil.com', 'fff', 'ffsdfs', '2013-08-16 13:39:21', '2013-08-16 13:39:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(150) NOT NULL,
  `time` int(11) NOT NULL,
  `portion` int(11) NOT NULL,
  `preparation` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `time`, `portion`, `preparation`, `created`, `modified`) VALUES
(1, 'aa primera re', 0, 0, ' mn n kjnjnjk', '2013-08-04 12:31:32', '2013-08-04 12:31:32'),
(2, 'segunda receta', 0, 0, 'nklnlk', '2013-08-04 12:32:13', '2013-08-04 12:32:13'),
(3, 'receta 1', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', '2013-08-08 14:09:38', '2013-08-08 14:09:38'),
(4, 'receta 2', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', '2013-08-08 14:10:03', '2013-08-08 14:10:03'),
(5, 'receta 3', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', '2013-08-08 14:10:30', '2013-08-08 14:10:30'),
(6, 'receta 4', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, hic, asperiores, optio voluptas repudiandae iure nulla totam at itaque laudantium aliquam fugit tempora quaerat et nemo repellat reiciendis fuga magnam!', '2013-08-08 14:10:54', '2013-08-08 14:10:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requirements`
--

CREATE TABLE IF NOT EXISTS `requirements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `charge_id` int(11) NOT NULL,
  `fullname` char(100) CHARACTER SET utf8 NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` enum('Masculino','Femenino') CHARACTER SET utf8 NOT NULL,
  `address` text,
  `phone` int(11) DEFAULT NULL,
  `email` char(100) CHARACTER SET utf8 NOT NULL,
  `curriculum` text CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `charge_id` (`charge_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `requirements`
--

INSERT INTO `requirements` (`id`, `charge_id`, `fullname`, `date_of_birth`, `sex`, `address`, `phone`, `email`, `curriculum`, `message`, `created`, `modified`) VALUES
(1, 1, 'fgdfgd', '2029-02-03', 'Masculino', 'fdfgdfg', 4353453, 'ro@hotmail.com', 'datos.png', 'sdfsdfs', '2013-08-15 21:48:48', '2013-08-15 21:48:48'),
(2, 1, 'rerterter', '2018-02-17', 'Masculino', 'erterterter', 345345, 'ro@hotmail.com', 'Ventajas de.docx', 'tryrt', '2013-08-15 23:35:03', '2013-08-15 23:35:03'),
(3, 2, 'fdgdfg', '2013-08-15', 'Masculino', 'dfgdfgdfgd', 564564564, 'rona@hotmail.com', 'Ventajas de.docx', 'fsdfsdfsdfsdf', '2013-08-15 23:39:14', '2013-08-15 23:39:14'),
(4, 1, 'uikyuhj', '2013-03-04', 'Masculino', 'hjkhj8', 7878, 'ro@hotmail.com', 'Ventajas de.docx', 'hjkhjkhjk', '2013-08-15 23:46:14', '2013-08-15 23:46:14'),
(5, 1, 'ooooooooo', '2013-08-15', 'Masculino', 'hhhhhhhhhhhhh', 77777, 'ro@hotmail.com', '1ro@hotmail.comVentajas de.docx', 'vvvvhgjgh', '2013-08-15 23:52:41', '2013-08-15 23:52:41'),
(6, 2, 'sdfsdf', '2013-04-06', 'Masculino', 'fsdfsdf', 4545454, 'ro@hotmail.com', '2ro@hotmail.comoss.docx', 'asdfadsf', '2013-08-16 14:12:37', '2013-08-16 14:12:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `content`) VALUES
(1, '<p>\\\\</p>\r\n\r\n<p><img alt="" src="http://www.avicola-santarosa.com/fse/frigorificoweb.jpg" style="width: 800px; height: 1265px;" /></p>\r\n\r\n<p align="left" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 17px;"><strong>Localizado en nuestro Complejo en la zona de Collpapampa a 14 km, de la ciudad.</strong></p>\r\n\r\n<ol style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 17px;" type="a">\r\n	<li>Inicialmente tenemos 7 Contenedores Refrigerados, m&aacute;s conocidos como Reefers. Cada uno de ellos tiene su propio compresor de fr&iacute;o, capaz de bajar hasta menos 25 grados bajo cero (<st1:metricconverter productid="-25ÂºC" w:st="on">-25&ordm;C). Son de acero inoxidable por dentro. Tienen una capacidad de almacenar 25,000 Kg., de alimentos congelados.</st1:metricconverter><br />\r\n	&nbsp;</li>\r\n	<li><st1:metricconverter productid="-25ÂºC" w:st="on"><st1:metricconverter productid="-25ÂºC" w:st="on">Almacenamiento de productos refrigerados a temperaturas entre 0 a&nbsp;<st1:metricconverter productid="8ÂºC" w:st="on">8&ordm;C, como fruta fresca, carne fresca de ave y res, verduras frescas, hortalizas, legumbres.</st1:metricconverter></st1:metricconverter></st1:metricconverter><br />\r\n	&nbsp;</li>\r\n	<li><st1:metricconverter productid="-25ÂºC" w:st="on"><st1:metricconverter productid="-25ÂºC" w:st="on"><st1:metricconverter productid="8ÂºC" w:st="on"><st1:metricconverter productid="-25ÂºC" w:st="on"><st1:metricconverter productid="8ÂºC" w:st="on">Almacenamiento de productos congelados a temperatura entre -2 y&nbsp;<st1:metricconverter productid="-25ÂºC" w:st="on">-25&ordm;C, como carne de ave, de res, mariscos, helados, papa frita, hielo.</st1:metricconverter></st1:metricconverter></st1:metricconverter></st1:metricconverter></st1:metricconverter></st1:metricconverter><br />\r\n	&nbsp;</li>\r\n	<li><st1:metricconverter productid="-25ÂºC" w:st="on">Transporte de de productos refrigerados y congelados, a nivel nacional e internacional. Para ello el contenedor se coloca en un cami&oacute;n con chata plana y se agrega al Reefer un generador de electricidad GenSet que funciona con diesel y proporciona autonom&iacute;a para transportar 4 d&iacute;as.</st1:metricconverter><br />\r\n	&nbsp;</li>\r\n	<li><st1:metricconverter productid="-25ÂºC" w:st="on">La tarifa plana es 16 Bs., por metro c&uacute;bico por d&iacute;a. Para cantidades mayores efectuaremos la cotizaci&oacute;n correspondiente.</st1:metricconverter></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n');

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
(1, 'iper1', 'logo.PNG', 'img\\supermarket\\filename', 'http://www.ketal.com.bo/', 'ssssssssssssss'),
(3, 'iper2', 'logo.PNG', 'img\\supermarket\\filename	', 'http://www.ketal.com.bo/', 'http://www.vidamrr.com/2013/03/30-'),
(4, 'iper3', 'logo.PNG', 'sdddddd', 'http://www.ketal.com.bo/', 'dfdfdfdfdf'),
(5, 'iper2', 'logo.PNG', 'img\\supermarket\\filename	', 'http://www.ketal.com.bo/', 'http://www.vidamrr.com/2013/03/30-'),
(6, 'iper3', 'logo.PNG', 'sdddddd', 'http://www.ketal.com.bo/', 'dfdfdfdfdf'),
(7, 'iper2', 'logo.PNG', 'img\\supermarket\\filename	', 'http://www.ketal.com.bo/', 'http://www.vidamrr.com/2013/03/30-'),
(8, 'iper3', 'logo.PNG', 'sdddddd', 'http://www.ketal.com.bo/', 'dfdfdfdfdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tips`
--

CREATE TABLE IF NOT EXISTS `tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL,
  `description` text NOT NULL,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tips`
--

INSERT INTO `tips` (`id`, `title`, `description`, `filename`, `dir`) VALUES
(1, 'sa df fsdfsd', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consequuntur ipsam molestias explicabo fugiat veritatis dicta ullam animi iusto dolorem sunt minus recusandae officia deleniti rerum eligendi amet corrupti et!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consequuntur ipsam molestias explicabo fugiat veritatis dicta ullam animi iusto dolorem sunt minus recusandae officia deleniti rerum eligendi amet corrupti et!', 'salud.jpg', 'img\\tip\\filename'),
(2, 'consejo 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consequuntur ipsam molestias explicabo fugiat veritatis dicta ullam animi iusto dolorem sunt minus recusandae officia deleniti rerum eligendi amet corrupti et!', 'salud-0.jpg', 'img\\tip\\filename'),
(3, 'consejo 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consequuntur ipsam molestias explicabo fugiat veritatis dicta ullam animi iusto dolorem sunt minus recusandae officia deleniti rerum eligendi amet corrupti et!', 'salud-1.jpg', 'img\\tip\\filename'),
(4, 'consejo 4', 'sdfsdf', 'salud-2.jpg', 'img\\tip\\filename'),
(5, 'consejo 5', 'sLorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consequuntur ipsam molestias explicabo fugiat veritatis dicta ullam animi iusto dolorem sunt minus recusandae officia deleniti rerum eligendi amet corrupti et!', 'salud-3.jpg', 'img\\tip\\filename');

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
-- Filtros para la tabla `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Filtros para la tabla `charges`
--
ALTER TABLE `charges`
  ADD CONSTRAINT `charges_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`);

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
-- Filtros para la tabla `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`);

--
-- Filtros para la tabla `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `items_quotes`
--
ALTER TABLE `items_quotes`
  ADD CONSTRAINT `items_quotes_ibfk_3` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `items_quotes_ibfk_4` FOREIGN KEY (`quote_id`) REFERENCES `quotes` (`id`);

--
-- Filtros para la tabla `quote_services`
--
ALTER TABLE `quote_services`
  ADD CONSTRAINT `quote_services_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Filtros para la tabla `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_ibfk_1` FOREIGN KEY (`charge_id`) REFERENCES `charges` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
