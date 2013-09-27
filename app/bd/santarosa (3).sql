-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-09-2013 a las 11:06:56
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Volcar la base de datos para la tabla `ads`
--

INSERT INTO `ads` (`id`, `type`, `link`, `created`, `modified`, `filename`, `dir`) VALUES
(49, 'foto', '', '2013-09-21 08:13:30', '2013-09-21 08:13:30', 'tamano_publicidad.png', 'img\\ad\\filename'),
(50, 'video', '//www.youtube.com/embed/dF-rMYDo-LM', '2013-09-21 08:18:22', '2013-09-21 08:18:22', 'pavo.jpg', 'img\\ad\\filename'),
(51, 'foto', '', '2013-09-21 08:18:40', '2013-09-21 08:18:40', 'tamano_publicidad-0.png', 'img\\ad\\filename');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcar la base de datos para la tabla `benefits`
--

INSERT INTO `benefits` (`id`, `title`, `description`, `filename`, `dir`) VALUES
(18, 'Un alimento para cualquier ocasiÃ³n ', '<p>El pavo se puede preparar de diversas maneras: fresco con verduras, asado o relleno de varios otros alimentos. Se recomienda siempre preparar el relleno de forma independiente a la preparaci&oacute;n del pavo, porque si se empapa de grasa su textura se vuelve pastosa.</p>\r\n\r\n<p>Para elegir la carne de pavo es necesario considerar que: tenga la piel suave y de color blanco, sin manchas rojizas, que la carne est&eacute; firme y no pegajosa y debe mantenerse en congelaci&oacute;n.</p>\r\n', 'tamano_beneficios.png', 'img\\benefit\\filename'),
(20, 'Carne de pavo, nutritiva y saludable', '<p>El pavo se puede preparar de diversas maneras: fresco con verduras, asado o relleno de varios otros alimentos. Se recomienda siempre preparar el relleno de forma independiente a la preparaci&oacute;n del pavo, porque si se empapa de grasa su textura se vuelve pastosa.</p>\r\n\r\n<p>Para elegir la carne de pavo es necesario considerar que: tenga la piel suave y de color blanco, sin manchas rojizas, que la carne est&eacute; firme y no pegajosa y debe mantenerse en congelaci&oacute;n.</p>\r\n', 'tamano_beneficios-0.png', 'img\\benefit\\filename'),
(21, 'La carne de pavo se ha convertido en una saludable opciÃ³n', '<p>El pavo se puede preparar de diversas maneras: fresco con verduras, asado o relleno de varios otros alimentos. Se recomienda siempre preparar el relleno de forma independiente a la preparaci&oacute;n del pavo, porque si se empapa de grasa su textura se vuelve pastosa.</p>\r\n\r\n<p>Para elegir la carne de pavo es necesario considerar que: tenga la piel suave y de color blanco, sin manchas rojizas, que la carne est&eacute; firme y no pegajosa y debe mantenerse en congelaci&oacute;n.</p>\r\n', 'tamano_beneficios-1.png', 'img\\benefit\\filename'),
(22, 'Poca grasa y bajo nivel de colesterol', '<p>El pavo se puede preparar de diversas maneras: fresco con verduras, asado o relleno de varios otros alimentos. Se recomienda siempre preparar el relleno de forma independiente a la preparaci&oacute;n del pavo, porque si se empapa de grasa su textura se vuelve pastosa.</p>\r\n\r\n<p>Para elegir la carne de pavo es necesario considerar que: tenga la piel suave y de color blanco, sin manchas rojizas, que la carne est&eacute; firme y no pegajosa y debe mantenerse en congelaci&oacute;n.</p>\r\n', 'tamano_beneficios-2.png', 'img\\benefit\\filename');

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
  `movil` char(50) NOT NULL,
  `fax` char(50) NOT NULL,
  `contact` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `branches`
--

INSERT INTO `branches` (`id`, `company_id`, `name`, `filename`, `dir`, `type`, `address`, `phone`, `movil`, `fax`, `contact`) VALUES
(1, 1, 'Cochabamba', 'sucursal_0.jpg', 'img\\branch\\filename', 'Oficina Central', 'Av. Gualberto Villarroel NÂ° 1749, entre Juan Carriles y A. GuzmÃ¡n', '(4) 44552255', '72232223-71733160', '(4) 4455256', 'Sra.Rosmery Pol deGrossberger - Sra. Lorena Grossberger Pol'),
(2, 1, 'La Paz', 'sucursal_0-0.jpg', 'img\\branch\\filename', 'Oficina Central', 'Calle Colombia NÂ° 615, Esq. BoquerÃ³n Zona Central', '(2) 2489237', '72032223', '(2) 2489237', 'Sr. Hennry Cabrera'),
(3, 1, 'Santa Cruz', 'sucursal_0-1.jpg', 'img\\branch\\filename', 'Oficina Central', 'Av. Teniente Vega  NÂº 294 Zona Parque Urbano', '(3) 3370466', '72132223', '', 'Sr. Daniel Condori'),
(4, 1, 'Oruro', 'sucursal_0-2.jpg', 'img\\branch\\filename', 'Distribuidor', 'Calle San Felipe  NÂº 589 Zona Central este', '(2) 5256276', '71850588', '', 'Sra Ruth de CalderÃ³n'),
(5, 1, 'Sucre', 'sucursal_0-3.jpg', 'img\\branch\\filename', 'Distribuidor', 'Calle Juan JosÃ© PÃ©rez  NÂº 331 o 349 Super Mercado SAS', '(4) 6462443', '', '', 'Sr. JosÃ© Antonio Jimenez'),
(6, 1, 'Potosi', 'sucursal_0-4.jpg', 'img\\branch\\filename', 'Distribuidor', 'Micro Mercado Santiago Calle Oruro  NÂº 485 Edif. San Francisco', '(2) 6223796', '60458242', '(2) 6223796', 'Sra. Teresa Leyton'),
(7, 1, 'Tarija', 'sucursal_0-5.jpg', 'img\\branch\\filename', 'Distribuidor', 'Av. Belgrano, Pje. Hermanos Entre EspaÃ±a y Lazcano', '(4) 6634504', '71878415', '(4) 6634504', 'Sr. JosÃ© Barrios'),
(8, 1, 'Trinidad', 'sucursal_0-6.jpg', 'img\\branch\\filename', 'Distribuidor', 'Micro Mercado San JosÃ© Calle NicolÃ¡s SuÃ¡rez  NÂº 597', '(3) 4620058', '', '', 'Sra. Carmen de OÃ±a'),
(9, 1, 'Huanuni', 'sucursal_0-7.jpg', 'img\\branch\\filename', 'Distribuidor', '.', '(4) 711883368', '', '', 'Sra. Rosa Mary GusmÃ¡n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousels`
--

CREATE TABLE IF NOT EXISTS `carousels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  `description` text NOT NULL,
  `number` enum('Uno','Dos') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcar la base de datos para la tabla `carousels`
--

INSERT INTO `carousels` (`id`, `filename`, `dir`, `description`, `number`) VALUES
(20, 'PASE_INICIO_0.jpg', 'img\\carousel\\filename', '', 'Uno'),
(21, 'PASE_INICIO_1.jpg', 'img\\carousel\\filename', '', 'Uno'),
(22, 'PASE_INICIO_2.jpg', 'img\\carousel\\filename', '', 'Uno'),
(23, 'PASE_INICIO_3.jpg', 'img\\carousel\\filename', '', 'Uno'),
(24, 'TAMANO_BANNER_INTERIOR_1.jpg', 'img\\carousel\\filename', '', 'Dos'),
(25, 'TAMANO_BANNER_INTERIOR_2.jpg', 'img\\carousel\\filename', '', 'Dos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8,
  `removed` char(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `removed`) VALUES
(6, 'PECHUGA DE PAVO', '#197C8F', 'no'),
(7, 'JAMÃ“N DE PAVO', '#1CA088', 'no'),
(8, 'PATÃ‰ DE PAVO', '#944780', 'no'),
(9, 'PAVO SANTA ROSA', '#90151A', 'no');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `charges`
--

INSERT INTO `charges` (`id`, `branch_id`, `title`, `deadline`, `description`, `formation`, `created`, `modified`) VALUES
(1, 1, 'oooo', '2013-09-22', '<p>sdf</p>\r\n', '<p>sfd</p>\r\n', '2013-09-22 06:27:31', '2013-09-22 06:27:31'),
(2, 1, 'sdsfsd', '2013-09-25', '<p>fdf</p>\r\n', '<p>dsfsdf</p>\r\n', '2013-09-25 10:14:51', '2013-09-25 10:14:51'),
(3, 1, 'jejejj', '2013-09-27', '<p>fa</p>\r\n', '<p>fsdfsdf</p>\r\n', '2013-09-26 06:30:43', '2013-09-26 06:30:43');

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
-- Volcar la base de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `content`) VALUES
(1, '<p><img alt="" src="http://www.avicola-santarosa.com/fin/banner-embutidosweb.jpg" style="width: 516px; height: 738px; float: left;" /></p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" class="rtab" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11.199999809265137px; line-height: 17px;">\r\n	<tbody>\r\n		<tr style="font-size: 11px; line-height: 17px;">\r\n			<td class="lir" style="font-size: 11px; line-height: 17px;" valign="top">\r\n			<p><span style="font-size:20px;"><span style="font-family:times new roman,times,serif;"><strong>Misi&oacute;n:</strong>&nbsp;<br />\r\n			Proveer productos de alta calidad, nutritivos y sanos a nuestros clientes acompa&ntilde;ados de eficiencia. Aportar al crecimiento de Bolivia en el &aacute;mbito econ&oacute;mico y social, realizando nuestra labor en el marco legal.<br />\r\n			&nbsp;<br />\r\n			<strong>Visi&oacute;n:</strong>&nbsp;<br />\r\n			Somos una empresa cuyo principio b&aacute;sico es crecer junto a Bolivia y mejorar nuestros servicios para en el futuro consolidarnos como la empresa av&iacute;cola l&iacute;der de nuestro pa&iacute;s.<br />\r\n			&nbsp;<br />\r\n			<strong>Valores:</strong>&nbsp;<br />\r\n			Responsabilidad, transparencia, puntualidad e higiene</span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h1>Historia:<br />\r\n<span style="font-family: ''times new roman'', times, serif; font-size: 20px; color: rgb(0, 0, 0); line-height: 17px; background-color: rgb(253, 243, 188);">La empresa Av&iacute;cola Santa Rosa Ltda. tiene sus inicios el a&ntilde;o 1965, cuando el Se&ntilde;or Jos&eacute; Antonio Grossberger, padre del actual due&ntilde;o de la empresa, empez&oacute; con la crianza de pavos de corral en su hacienda ubicada precisamente en la zona de Santa Rosa, km. 7 camino a Quiillacollo, en la ciudad de Cochabamba, Bolivia. Esta granja naci&oacute; con el prop&oacute;sito de incentivar en la cultura culinaria&nbsp; del pa&iacute;s el consumo de esta carne. &nbsp;&nbsp;</span><br style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11.199999809265137px; line-height: 17px;" />\r\n<span style="font-family: ''times new roman'', times, serif; font-size: 20px; color: rgb(0, 0, 0); line-height: 17px; background-color: rgb(253, 243, 188);">La empresa con el tiempo creci&oacute; y desarroll&oacute; la tecnolog&iacute;a necesaria para la crianza de cantidades industriales de aves convirti&eacute;ndose esta actividad en la mayor fuente de ingresos de la hacienda. Tambi&eacute;n se implement&oacute; la producci&oacute;n de embutidos de carne de pavo instalando una f&aacute;brica de mediana capacidad para este prop&oacute;sito.&nbsp;&nbsp;&nbsp;</span><br style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11.199999809265137px; line-height: 17px;" />\r\n<br style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11.199999809265137px; line-height: 17px;" />\r\n<span style="font-family: ''times new roman'', times, serif; font-size: 20px; color: rgb(0, 0, 0); line-height: 17px; background-color: rgb(253, 243, 188);">Con los a&ntilde;os, la empresa adopt&oacute; un giro comercializador m&aacute;s que productor de productos de carne de pavo, ya que si bien los costos de producci&oacute;n en Bolivia son m&aacute;s bajos, Cochabamba no es el lugar apto para la crianza de aves.</span></h1>\r\n');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `consultations`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `counters`
--

CREATE TABLE IF NOT EXISTS `counters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `counters`
--

INSERT INTO `counters` (`id`, `counter`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images_categories`
--

CREATE TABLE IF NOT EXISTS `images_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  `type` enum('Uno','Dos','Tres') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `images_categories`
--

INSERT INTO `images_categories` (`id`, `category_id`, `filename`, `dir`, `type`) VALUES
(1, 6, 'pechuga_de_pavo.jpg', 'img\\images_category\\filename', 'Uno'),
(2, 6, 'pechuga_de_pavo-0.jpg', 'img\\images_category\\filename', 'Dos'),
(3, 6, 'icon_pechuga_de_pavo_celeste.jpg', 'img\\images_category\\filename', 'Tres'),
(4, 7, 'jamon_de_pavo.jpg', 'img\\images_category\\filename', 'Uno'),
(5, 7, 'jamon_de_pavo_categoria2.jpg', 'img\\images_category\\filename', 'Dos'),
(6, 7, 'icon_jamon_de_pavo_turquesa.jpg', 'img\\images_category\\filename', 'Tres'),
(7, 8, 'pate_de_pavo.jpg', 'img\\images_category\\filename', 'Uno'),
(8, 8, 'pate_de_pavo_categoria3.jpg', 'img\\images_category\\filename', 'Dos'),
(9, 8, 'icon_pate_de_pavo_morado.jpg', 'img\\images_category\\filename', 'Tres'),
(10, 9, 'pavo_santa_rosa.jpg', 'img\\images_category\\filename', 'Uno'),
(11, 9, 'pavosantarosa_categoria_4.jpg', 'img\\images_category\\filename', 'Dos'),
(12, 9, 'icon_pavo_santa_rosa_guindo.jpg', 'img\\images_category\\filename', 'Tres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images_presentations`
--

CREATE TABLE IF NOT EXISTS `images_presentations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text NOT NULL,
  `dir` text NOT NULL,
  `description` text,
  `presentation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`presentation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Volcar la base de datos para la tabla `images_presentations`
--

INSERT INTO `images_presentations` (`id`, `filename`, `dir`, `description`, `presentation_id`) VALUES
(65, 'pechuga_de_pavo_cocida.jpg', 'img\\images_presentation\\filename', '', 23),
(66, 'pechuga_de_pavo_cocida_presentacion_2.jpg', 'img\\images_presentation\\filename', '', 24),
(67, 'pechuga_de_pavo_ahumada_presentacion_2.jpg', 'img\\images_presentation\\filename', '', 25),
(68, 'pechuga_de_pavo_ahumada.jpg', 'img\\images_presentation\\filename', '', 26),
(69, 'jamon_de_pavo_cocido.jpg', 'img\\images_presentation\\filename', '', 27),
(70, 'jamon_de_pavo_cocido_presentacion2.jpg', 'img\\images_presentation\\filename', '', 28),
(71, 'jamon_de_pavo_ahumado_presentacion_2.jpg', 'img\\images_presentation\\filename', '', 29),
(72, 'jamon_de_pavo_ahumado.jpg', 'img\\images_presentation\\filename', '', 30),
(73, 'pate_de_pavo.jpg', 'img\\images_presentation\\filename', '', 31),
(74, 'pavo_santa_rosa_entero.jpg', 'img\\images_presentation\\filename', '', 32),
(75, 'productos_sin_imagen_8_0.jpg', 'img\\images_presentation\\filename', '', 33),
(76, 'productos_sin_imagen_8_0-0.jpg', 'img\\images_presentation\\filename', '', 34),
(77, 'productos_sin_imagen_8_0-1.jpg', 'img\\images_presentation\\filename', '', 35),
(78, 'productos_sin_imagen_8_0-2.jpg', 'img\\images_presentation\\filename', '', 36),
(79, 'productos_sin_imagen_8_0-3.jpg', 'img\\images_presentation\\filename', '', 37);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `images_recipes`
--

INSERT INTO `images_recipes` (`id`, `filename`, `dir`, `description`, `recipe_id`) VALUES
(10, 'tamano_recetas.PNG', 'img\\images_recipe\\filename', '', 9),
(11, 'tamano_recetas-0.PNG', 'img\\images_recipe\\filename', '', 10),
(12, 'tamano_recetas-1.PNG', 'img\\images_recipe\\filename', '', 11),
(13, 'tamano_recetas-2.PNG', 'img\\images_recipe\\filename', '', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `removed` char(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcar la base de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `name`, `category_id`, `removed`) VALUES
(17, 'COCIDA', 6, 'no'),
(18, 'AHUMADA', 6, 'no'),
(19, 'COCIDOO', 7, 'no'),
(20, 'AHUMADO', 7, 'no'),
(21, 'PATÃ‰', 8, 'no'),
(22, 'PAVO ENTERO', 9, 'no'),
(23, 'PIERNAS', 9, 'no'),
(24, 'EMTREPIERNAS', 9, 'no'),
(25, 'PIERNAS DE ALA', 9, 'no'),
(26, 'ALAS', 9, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `new_requirements`
--

CREATE TABLE IF NOT EXISTS `new_requirements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `charge` char(150) NOT NULL,
  `fullname` char(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` enum('Masculino','Femenino') NOT NULL,
  `address` text NOT NULL,
  `phone` char(20) NOT NULL,
  `email` char(100) NOT NULL,
  `curriculum` text NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `new_requirements`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentations`
--

CREATE TABLE IF NOT EXISTS `presentations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `descripcion` text NOT NULL,
  `item_id` int(11) NOT NULL,
  `removed` char(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Volcar la base de datos para la tabla `presentations`
--

INSERT INTO `presentations` (`id`, `name`, `descripcion`, `item_id`, `removed`) VALUES
(23, 'barra', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 17, 'no'),
(24, 'sachets', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 17, 'no'),
(25, 'barra', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 18, 'no'),
(26, 'sachets', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 18, 'no'),
(27, 'barra', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 19, 'no'),
(28, 'sachets', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 19, 'no'),
(29, 'barra', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 20, 'no'),
(30, 'sachets', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 20, 'no'),
(31, '150 gr.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 21, 'no'),
(32, 'Entero', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 22, 'no'),
(33, 'Trozado', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 22, 'no'),
(34, 'Trozado', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 23, 'no'),
(35, 'Trozado', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 24, 'no'),
(36, 'Trozado', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 25, 'no'),
(37, 'Trozado', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, aliquid, esse eligendi explicabo officiis voluptatum expedita magnam assumenda odit dolorem doloribus excepturi non ad fugiat amet ratione reiciendis cumque neque?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellendus labore cumque quo doloremque atque deleniti dolore minima enim quaerat officia eveniet odit ratione! Adipisci, exercitationem in quos voluptates dolor.</p>\r\n', 26, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentations_quotes`
--

CREATE TABLE IF NOT EXISTS `presentations_quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `presentation_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`presentation_id`),
  KEY `quote_id` (`quote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `presentations_quotes`
--

INSERT INTO `presentations_quotes` (`id`, `presentation_id`, `quote_id`, `detail`, `amount`) VALUES
(1, 28, 1, '', 78),
(2, 24, 2, '', 7878);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` char(50) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `quotes`
--

INSERT INTO `quotes` (`id`, `name`, `address`, `phone`, `email`, `message`, `created`, `modified`) VALUES
(1, 'ronaldo', 'cbba', 79798, 'ronaldo@hotmail.com', 'dnon ans oansdo', '2013-09-21 12:10:04', '2013-09-21 12:10:04'),
(2, 'ooooooonnw', 'nkjnknkjn', 88787, 'ronaldo@hotmail.com', 'enljfwkj nwkjen jwkenjk', '2013-09-21 14:47:09', '2013-09-21 14:47:09');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `quote_services`
--

INSERT INTO `quote_services` (`id`, `service_id`, `fullname`, `address`, `phone`, `email`, `issue`, `message`, `created`, `modified`) VALUES
(1, 1, 'ooo', 'cbba', '8789', 'ro@hotmail.com', 'mmm', 'ygiu h pii', '2013-09-21 09:35:28', '2013-09-21 09:35:28');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `time`, `portion`, `ingredients`, `preparation`, `created`, `modified`) VALUES
(9, 'Recetas de Pavo al curry', 122, 12, '<ul style="border: 0px; margin: 15px 0px 1em; outline: 0px; padding-right: 0px; padding-left: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; color: rgb(102, 102, 102); font-family: Arial, Helvetica, Geneva, sans-serif; line-height: 16px;">\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 25px; outline: 0px; padding: 5px 0px 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style-type: none; background-position: initial initial; background-repeat: initial initial;">300gr. pechuga de pavo</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 25px; outline: 0px; padding: 5px 0px 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style-type: none; background-position: initial initial; background-repeat: initial initial;">cebolla colorada</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 25px; outline: 0px; padding: 5px 0px 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style-type: none; background-position: initial initial; background-repeat: initial initial;">maiz</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 25px; outline: 0px; padding: 5px 0px 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style-type: none; background-position: initial initial; background-repeat: initial initial;">ajo</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 25px; outline: 0px; padding: 5px 0px 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style-type: none; background-position: initial initial; background-repeat: initial initial;">tomate</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 25px; outline: 0px; padding: 5px 0px 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style-type: none; background-position: initial initial; background-repeat: initial initial;">sal</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 25px; outline: 0px; padding: 5px 0px 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style-type: none; background-position: initial initial; background-repeat: initial initial;">pimienta</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 25px; outline: 0px; padding: 5px 0px 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style-type: none; background-position: initial initial; background-repeat: initial initial;">curry</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 25px; outline: 0px; padding: 5px 0px 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style-type: none; background-position: initial initial; background-repeat: initial initial;">vino</li>\r\n</ul>\r\n', '<ol id="recipeInstructions" itemprop="recipeInstructions" style="border: 0px; margin: 10px 0px 1em; outline: 0px; padding-right: 0px; padding-left: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; counter-reset: li 0; color: rgb(102, 102, 102); font-family: Arial, Helvetica, Geneva, sans-serif; line-height: 16px;">\r\n	<li style="border: 0px; margin: 0px 0px 15px; outline: 0px; padding: 4px 0px 4px 37px; background-color: transparent; font-size: 16px; vertical-align: baseline; clear: both; display: table; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">\r\n	<div class="step" style="border: 0px; margin: 0px; outline: 0px; padding: 0px 3px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; line-height: 22px; background-position: initial initial; background-repeat: initial initial;">Cortamos el pavo en pequenos cuadrados mas o menos todos del mismo tama&ntilde;o. Una vez cortado salpimentamos y le agregamos curry a gusto. regamos todo el picadillo con aceite de oliva y dejamos reposar</div>\r\n\r\n	<div class="yoxview" style="border: 0px; margin: 10px 0px 0px 10px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; background-position: initial initial; background-repeat: initial initial;"><a alt="Paso 1 de Receta de Pavo al curry " href="http://static.recetasgratis.net/images/recetas/47779_20130821191945.jpeg" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 204); background-position: initial initial; background-repeat: initial initial;"><img src="http://static.recetasgratis.net/images/recetas/47779_20130821191945.jpeg" style="border: 3px solid rgb(221, 221, 221); margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; max-width: 550px; background-position: initial initial; background-repeat: initial initial;" title="Paso 1 de Receta de Pavo al curry " /></a></div>\r\n	</li>\r\n	<li style="border: 0px; margin: 0px 0px 15px; outline: 0px; padding: 4px 0px 4px 37px; background-color: transparent; font-size: 16px; vertical-align: baseline; clear: both; display: table; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">\r\n	<div class="step" style="border: 0px; margin: 0px; outline: 0px; padding: 0px 3px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; line-height: 22px; background-position: initial initial; background-repeat: initial initial;">Picamos las cebollas y el tomate e peque&ntilde;os cuadritos.Picamos 4 dientesde ajo en tiras finita</div>\r\n\r\n	<div class="yoxview" style="border: 0px; margin: 10px 0px 0px 10px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; background-position: initial initial; background-repeat: initial initial;"><a alt="Paso 2 de Receta de Pavo al curry " href="http://static.recetasgratis.net/images/recetas/47779_20130821191947.jpeg" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 204); background-position: initial initial; background-repeat: initial initial;"><img src="http://static.recetasgratis.net/images/recetas/47779_20130821191947.jpeg" style="border: 3px solid rgb(221, 221, 221); margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; max-width: 550px; background-position: initial initial; background-repeat: initial initial;" title="Paso 2 de Receta de Pavo al curry " /></a></div>\r\n	</li>\r\n	<li style="border: 0px; margin: 0px 0px 15px; outline: 0px; padding: 4px 0px 4px 37px; background-color: transparent; font-size: 16px; vertical-align: baseline; clear: both; display: table; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">\r\n	<div class="step" style="border: 0px; margin: 0px; outline: 0px; padding: 0px 3px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; line-height: 22px; background-position: initial initial; background-repeat: initial initial;">A fuego muy lento, comenzamos a fritar con aceite, una cabeza de ajo cortada en 4 junto con la cebolla picada.</div>\r\n\r\n	<div class="yoxview" style="border: 0px; margin: 10px 0px 0px 10px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; background-position: initial initial; background-repeat: initial initial;"><a alt="Paso 3 de Receta de Pavo al curry " href="http://static.recetasgratis.net/images/recetas/47779_20130821191948.jpeg" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 204); background-position: initial initial; background-repeat: initial initial;"><img src="http://static.recetasgratis.net/images/recetas/47779_20130821191948.jpeg" style="border: 3px solid rgb(221, 221, 221); margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; max-width: 550px; background-position: initial initial; background-repeat: initial initial;" title="Paso 3 de Receta de Pavo al curry " /></a></div>\r\n	</li>\r\n	<li style="border: 0px; margin: 0px 0px 15px; outline: 0px; padding: 4px 0px 4px 37px; background-color: transparent; font-size: 16px; vertical-align: baseline; clear: both; display: table; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">\r\n	<div class="step" style="border: 0px; margin: 0px; outline: 0px; padding: 0px 3px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; line-height: 22px; background-position: initial initial; background-repeat: initial initial;">Cuando la cebolla comienza a tomar temperatura la regamos toda con un chorro bien generoso de vino tinto y dejamos cocer.</div>\r\n\r\n	<div class="yoxview" style="border: 0px; margin: 10px 0px 0px 10px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; background-position: initial initial; background-repeat: initial initial;"><a alt="Paso 4 de Receta de Pavo al curry " href="http://static.recetasgratis.net/images/recetas/47779_20130821191950.jpeg" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 204); background-position: initial initial; background-repeat: initial initial;"><img src="http://static.recetasgratis.net/images/recetas/47779_20130821191950.jpeg" style="border: 3px solid rgb(221, 221, 221); margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; max-width: 550px; background-position: initial initial; background-repeat: initial initial;" title="Paso 4 de Receta de Pavo al curry " /></a></div>\r\n	</li>\r\n	<li style="border: 0px; margin: 0px 0px 15px; outline: 0px; padding: 4px 0px 4px 37px; background-color: transparent; font-size: 16px; vertical-align: baseline; clear: both; display: table; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">\r\n	<div class="step" style="border: 0px; margin: 0px; outline: 0px; padding: 0px 3px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; line-height: 22px; background-position: initial initial; background-repeat: initial initial;">Antes que el vino se reduzca por completo, a&ntilde;adimos al sarten, el resto del ajo, el tomate y el ma&iacute;z que previamente hab&iacute;amos picado. dejamos sofritar a fuego muy lento durante aprox 15 minutos. remover continuamente.</div>\r\n\r\n	<div class="yoxview" style="border: 0px; margin: 10px 0px 0px 10px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; background-position: initial initial; background-repeat: initial initial;"><a alt="Paso 5 de Receta de Pavo al curry " href="http://static.recetasgratis.net/images/recetas/47779_20130821191951.jpeg" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 204); background-position: initial initial; background-repeat: initial initial;"><img src="http://static.recetasgratis.net/images/recetas/47779_20130821191951.jpeg" style="border: 3px solid rgb(221, 221, 221); margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; max-width: 550px; background-position: initial initial; background-repeat: initial initial;" title="Paso 5 de Receta de Pavo al curry " /></a></div>\r\n	</li>\r\n	<li style="border: 0px; margin: 0px 0px 15px; outline: 0px; padding: 4px 0px 4px 37px; background-color: transparent; font-size: 16px; vertical-align: baseline; clear: both; display: table; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">\r\n	<div class="step" style="border: 0px; margin: 0px; outline: 0px; padding: 0px 3px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; line-height: 22px; background-position: initial initial; background-repeat: initial initial;">En otro sarten colocamos a fuego lento el pavo con un chorrito generoso de aceite. agregamos pimienta y tapamos praquese cueza lentamnete.</div>\r\n\r\n	<div class="yoxview" style="border: 0px; margin: 10px 0px 0px 10px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; background-position: initial initial; background-repeat: initial initial;"><a alt="Paso 6 de Receta de Pavo al curry " href="http://static.recetasgratis.net/images/recetas/47779_20130821191952.jpeg" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 204); background-position: initial initial; background-repeat: initial initial;"><img src="http://static.recetasgratis.net/images/recetas/47779_20130821191952.jpeg" style="border: 3px solid rgb(221, 221, 221); margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; max-width: 550px; background-position: initial initial; background-repeat: initial initial;" title="Paso 6 de Receta de Pavo al curry " /></a></div>\r\n	</li>\r\n	<li style="border: 0px; margin: 0px 0px 15px; outline: 0px; padding: 4px 0px 4px 37px; background-color: transparent; font-size: 16px; vertical-align: baseline; clear: both; display: table; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">\r\n	<div class="step" style="border: 0px; margin: 0px; outline: 0px; padding: 0px 3px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; line-height: 22px; background-position: initial initial; background-repeat: initial initial;">Removemos continuamente tanto el pavo como el picadillo.</div>\r\n	</li>\r\n	<li style="border: 0px; margin: 0px 0px 15px; outline: 0px; padding: 4px 0px 4px 37px; background-color: transparent; font-size: 16px; vertical-align: baseline; clear: both; display: table; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">\r\n	<div class="step" style="border: 0px; margin: 0px; outline: 0px; padding: 0px 3px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; line-height: 22px; background-position: initial initial; background-repeat: initial initial;">El pavo estar&aacute; cocido en aproximadamente 10 minutos</div>\r\n\r\n	<div class="yoxview" style="border: 0px; margin: 10px 0px 0px 10px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; background-position: initial initial; background-repeat: initial initial;"><a alt="Paso 7 de Receta de Pavo al curry " href="http://static.recetasgratis.net/images/recetas/47779_20130821191954.jpeg" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(0, 0, 204); background-position: initial initial; background-repeat: initial initial;"><img src="http://static.recetasgratis.net/images/recetas/47779_20130821191954.jpeg" style="border: 3px solid rgb(221, 221, 221); margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; max-width: 550px; background-position: initial initial; background-repeat: initial initial;" title="Paso 7 de Receta de Pavo al curry " /></a></div>\r\n	</li>\r\n	<li style="border: 0px; margin: 0px 0px 15px; outline: 0px; padding: 4px 0px 4px 37px; background-color: transparent; font-size: 16px; vertical-align: baseline; clear: both; display: table; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">\r\n	<div class="step" style="border: 0px; margin: 0px; outline: 0px; padding: 0px 3px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; line-height: 22px; background-position: initial initial; background-repeat: initial initial;">Colocamos en un molde el picadillo y sevimos en un plato junto con u aracion generosade pavo.</div>\r\n\r\n	<div class="yoxview" style="border: 0px; margin: 10px 0px 0px 10px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; background-position: initial initial; background-repeat: initial initial;"><a alt="Paso 8 de Receta de Pavo al curry " href="http://static.recetasgratis.net/images/recetas/47779_20130821191955.jpeg" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(255, 102, 0); text-decoration: none; background-position: initial initial; background-repeat: initial initial;"><img src="http://static.recetasgratis.net/images/recetas/47779_20130821191955.jpeg" style="border: 3px solid rgb(221, 221, 221); margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; max-width: 550px; background-position: initial initial; background-repeat: initial initial;" title="Paso 8 de Receta de Pavo al curry " /></a></div>\r\n	</li>\r\n	<li style="border: 0px; margin: 0px 0px 15px; outline: 0px; padding: 4px 0px 4px 37px; background-color: transparent; font-size: 16px; vertical-align: baseline; clear: both; display: table; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">\r\n	<div class="step" style="border: 0px; margin: 0px; outline: 0px; padding: 0px 3px; background-color: transparent; font-size: 16px; vertical-align: baseline; display: table; line-height: 22px; background-position: initial initial; background-repeat: initial initial;">Buen provecho!</div>\r\n	</li>\r\n</ol>\r\n', '2013-09-21 07:42:05', '2013-09-21 07:42:05'),
(10, 'Receta de Pavo americano relleno', 123, 12, '<ul style="border: 0px; margin: 0px 0px 1em; outline: 0px; padding-right: 0px; padding-left: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; list-style: none; line-height: 21px; color: rgb(102, 102, 102); font-family: Arial, Helvetica, Geneva, sans-serif;">\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">150 ccs de aguardiente</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 rama de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Apio-ingredientes_recetas-676_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Apio">Apio</a></li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Cebolla-ingredientes_recetas-122_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Cebolla">Cebolla</a></li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">150 gramos de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Harina-ingredientes_recetas-259_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Harina">Harina</a></li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">200 ccs de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Mantequilla-ingredientes_recetas-368_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Mantequilla">Mantequilla</a></li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Manzana-ingredientes_recetas-369_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Manzana">Manzana</a>&nbsp;frita en mantequilla</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">Menudillos del pavo</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">150 gramos de nueces</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">125 gramos de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Pan-ingredientes_recetas-451_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Pan">Pan</a>&nbsp;cortado en dados</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">100 gramos de pasas</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 pavo no muy grande</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 pizca de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Pimienta-ingredientes_recetas-714_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Pimienta">Pimienta</a></li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 pizca de sal</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 vasito de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Sidra-ingredientes_recetas-596_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Sidra">Sidra</a>&nbsp;de ca&ntilde;a</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 cucharadita de tomillo</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">3 zanahorias</li>\r\n</ul>\r\n', '<ol class="marcado" style="border: 0px; margin: 5px 0px 1em; outline: 0px; padding-right: 0px; padding-left: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; counter-reset: li 0; color: rgb(102, 102, 102); font-family: Arial, Helvetica, Geneva, sans-serif; line-height: 24px;">\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Con el pan, las pasas, la manzana, el tomillo, las nueces, los menudillos, sal y pimienta se forma el relleno reg&aacute;ndolo con aguardiente y sidra de ca&ntilde;a.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">El pavo se empieza a rellenar por arriba se cose y se sigue por abajo cosi&eacute;ndolo a continuaci&oacute;n, no se pone mucho relleno, pues, se hincha mucho.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se frota bien el pavo con sal y pimienta, se ata el pavo empezando por el cuello continuando por las alas y cruzando el cord&oacute;n por las patas para que queden muy juntas, se unta con bastante mantequilla y se mete al horno muy fuerte una hora, se baja el fuego y se deja cocer tres horas m&aacute;s.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se pica zanahoria, apio y cebolla se refr&iacute;e y se le echa una cucharada de harina se rehoga y se le a&ntilde;ade caldo, esta salsa se pasa por el chino y sirve para acompa&ntilde;ar al pavo.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Vino recomendado: 2002 V Napa Valley Viader.</li>\r\n</ol>\r\n', '2013-09-21 07:46:21', '2013-09-21 07:46:21');
INSERT INTO `recipes` (`id`, `title`, `time`, `portion`, `ingredients`, `preparation`, `created`, `modified`) VALUES
(11, 'Receta de Pavo horneado', 123, 12, '<ul style="border: 0px; margin: 0px 0px 1em; outline: 0px; padding-right: 0px; padding-left: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; list-style: none; line-height: 21px; color: rgb(102, 102, 102); font-family: Arial, Helvetica, Geneva, sans-serif;">\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 pavo de 7 kilos,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">2 &oacute; 3 limones,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">2 tazas de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Cebolla-ingredientes_recetas-122_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Cebolla">Cebolla</a>&nbsp;licuada,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1/4 de taza de vinagre,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">3 cdas. de aceite,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">12 dientes de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Ajo-ingredientes_recetas-693_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Ajo">Ajo</a>,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">4 cebollines picaditos (s&oacute;lo lo blanco),</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 ajoporro grande picadito (s&oacute;lo lo blanco),</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">2 hojas de laurel,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">3 cdas. de sal,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">3 cdas. de salsa inglesa worcestershire,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 cdta. de pimienta molida,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">2 ramitas de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Tomillo-ingredientes_recetas-619_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Tomillo">Tomillo</a>&nbsp;o 1/4 de cdta. si es seco, molido,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">3 &oacute; 4 hojitas de salvia,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 ramita de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Perejil-ingredientes_recetas-713_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Perejil">Perejil</a>,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 taza de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Vino-blanco-ingredientes_recetas-651_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Vino blanco">Vino blanco</a>&nbsp;seco,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">3 cdas. de co&ntilde;ac,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">La pulpa de 2 manzanas peladas en pedacitos y sin el coraz&oacute;n ni las semillas,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1/2 taza de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Agua-ingredientes_recetas-15_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Agua">Agua</a>,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 cdta. de az&uacute;car,</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1/8 de cdta. de pimienta molida.</li>\r\n</ul>\r\n', '<ol class="marcado" style="border: 0px; margin: 5px 0px 1em; outline: 0px; padding-right: 0px; padding-left: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; counter-reset: li 0; color: rgb(102, 102, 102); font-family: Arial, Helvetica, Geneva, sans-serif; line-height: 24px;">\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se elimina el pescuezo,que se deja aparte,el pavo.Se frota con lim&oacute;n.Se tritura la cebolla conjuntamente con el vinagre,el aceite y los ajos,se mezcla en un envase,para hacer un adobo,con el<a href="http://www.recetasgratis.net/Recetas-con-Cebollin-ingredientes_recetas-696_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con CebollÃ­n">Ceboll&iacute;n</a>,el ajoporro,el laurel,la sal,la salsa inglesa,la pimienta,el tomillo,la salvia,el perejil,el vino,el co&ntilde;ac.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Con el adobo se frota el pavo por dentro y por fuera.El pavo se deja en la nevera,por unas 3 &oacute; 4 horas,d&aacute;ndole vuelta de cuando en cuando.Se precalienta el horno a 175 grados.Se pone el pavo, el adobo y el pescuezo en una bandeja.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se tapa o se cubre con papel de aluminio,se mete en el horno por 1 1/2 hora,hasta dorar.Se saca del horno,se voltea el pavo sobre,sin cubrir,se hornea por 30 minutos m&aacute;s.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se mete el pavo en el horno,se voltea,se hornea por 30 minutos m&aacute;s,.Se repite la operaci&oacute;n.En total unas 3 a 3 1/2 horas.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se saca del horno. Salsa:Se eliminan el pescuezo y las hierbas del envase.Se elimina la grasa.<br style="border: none; margin: 0px; outline: 0px; padding: 0px;" />\r\n	Se cuela la salsa a trav&eacute;s de un colador,apretando los s&oacute;lidos contra las paredes del colador con un mazo de madera,con una esp&aacute;tula.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">En una olla se pone la pulpa de las 2 manzanas peladas y cortadas en pedacitos con la 1/2 taza de agua.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se lleva a un hervor y se cocinan hasta ablandar,unos 10 minutos.<br style="border: none; margin: 0px; outline: 0px; padding: 0px;" />\r\n	Se pasan las manzanas con el l&iacute;quido restante de la cocci&oacute;n a una trituradora;se tritura bien y se agrega a la olla con la salsa.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se agregan el az&uacute;car y la pimienta para rectificar la saz&oacute;n,se lleva a un hervor y se cocina por unos 3 minutos.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">La salsa se sirve al lado. NOTA 1:Se recomienda guardar el esqueleto del pavo,para hacer un Consom&eacute; de Pavo, seg&uacute;n receta.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">NOTA 2: Si se quiere pavo relleno, se recomienda hacer el relleno aparte, seg&uacute;n receta.<br style="border: none; margin: 0px; outline: 0px; padding: 0px;" />\r\n	Relleno de manzanas y&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Ciruelas-pasas-ingredientes_recetas-150_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Ciruelas pasas">Ciruelas pasas</a>.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Ingredientes: 125 gramos de almendras sin piel y picaditas, 1/2 kilo de ciruelas pasas sin semillas cortadas en cuartos, 175 gramos de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Mantequilla-ingredientes_recetas-368_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Mantequilla">Mantequilla</a>&nbsp;(12 cucharadas), 1 1/2 taza de cebolla picadita, 8 a 10 dientes de ajo machacados, 1 1/3 taza de ceboll&iacute;n picadito (parte blanca y algo de lo verde), 1/2 kilo de carne de cochino sin grasa (molida gruesa), 250 gramos de h&iacute;gado de pollo (limpios y picaditos), 1 cdta. de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Pimienta-negra-ingredientes_recetas-497_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Pimienta negra">Pimienta negra</a>molida, 3 a 4 cucharaditas de sal, 1 cucharadita de salsa inglesa Worcest&eacute;rshire, 3 ramitas de tomillo fresco o 3/4 de cdta. si es seco molido, 2 cdas. de co&ntilde;ac, 3/4 de taza de vino dulce Moscatel, 1/4 de taza de perejil picadito, 1 1/2 a 2 tazas del consom&eacute; preparado con los menudos del pavo o pollo, o de consom&eacute; de pollo o de carne, 4 tazas de manzanas amarillas o verdes peladas y en trocitos, 1/2 taza de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Pan-ingredientes_recetas-451_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Pan">Pan</a>&nbsp;seco molido.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Preparaci&oacute;n: Si las almendras tienen piel, se pone en una ollita suficiente agua para cubrir las almendras.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se lleva a un hervor. Se agregan las almendras. Se lleva nuevamente a un hervor y se retira del fuego.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Al enfriar un poco se les quita la piel.Se secan con papel absorbente y se pican menudamente en un procesador o trituradora.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se ponen aparte.En una olla se ponen las ciruelas con agua que las cubra.Se lleva a un hervor y se cocinan por 2 a 3 minutos o hasta ablandar.Se retiran del fuego.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se escurren y se ponen aparte.En un caldero se pone la mantequilla a calentar,se agregan la cebolla y el ajo y se sofr&iacute;en unos 5 minutos.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se agrega el ceboll&iacute;n y se cocina unos 7 minutos m&aacute;s.Se agrega el cochino,los h&iacute;gados de pollo,la pimienta,la sal,la salsa inglesa,el tomillo,el co&ntilde;ac,el vino,el perejil y el consom&eacute;.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se lleva a un hervor y se cocina unos 20 minutos o hasta secar un poco.Se pone a fuego fuerte suave,se agregan las almendras,las ciruelas pasas y las manzanas y se cocina por unos 10 minutos.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Se agrega el pan molido, se revuelve y se cocina 5 minutos m&aacute;s.<br style="border: none; margin: 0px; outline: 0px; padding: 0px;" />\r\n	Se retira del fuego y se pone aparte a enfriar para conservarlo en la nevera hasta por 24 horas, si no se va a usar de inmediato.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">En ese caso, cuando se vaya a servir, se calienta en el horno en una bandeja cubierta con papel de aluminio y, si se quiere, agreg&aacute;ndole previamente 3 &oacute; 4 cucharadas de la salsa del pavo..</li>\r\n</ol>\r\n', '2013-09-21 07:47:35', '2013-09-21 07:47:35'),
(12, 'Receta de relleno de pavo de dulce estilo de GUAYAQUIL', 123, 12, '<ul style="border: 0px; margin: 0px 0px 1em; outline: 0px; padding-right: 0px; padding-left: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; list-style: none; line-height: 21px; color: rgb(102, 102, 102); font-family: Arial, Helvetica, Geneva, sans-serif;">\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 pavo de unas 15 lbs</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 caja de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Ciruelas-pasas-ingredientes_recetas-150_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Ciruelas pasas">Ciruelas pasas</a></li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1/2 libra de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Nueces-peladas-ingredientes_recetas-432_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Nueces peladas">Nueces peladas</a></li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 libra de jamon dulce</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 taza de pasas</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">15 aceitunas rellenas sin pepa</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">6&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Pan-ingredientes_recetas-451_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Pan">Pan</a>&nbsp;dulces pequenos (hawaian bread)</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">Menudo, del pavo higado molleja corazon, cuello</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">1 taza de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Leche-ingredientes_recetas-318_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Leche">Leche</a></li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">2 tazas de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Vino-tinto-ingredientes_recetas-657_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Vino tinto">Vino tinto</a></li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">3 cucharadas de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Azucar-ingredientes_recetas-48_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Azucar">Azucar</a>&nbsp;morena ( a tu gusto)</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">3 tazas de consome de&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Pollo-ingredientes_recetas-516_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Pollo">Pollo</a>&nbsp;( chicken broth )</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">Sal</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;"><a href="http://www.recetasgratis.net/Recetas-con-Pimienta-ingredientes_recetas-714_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Pimienta">Pimienta</a>&nbsp;al gusto</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;"><a href="http://www.recetasgratis.net/Recetas-con-Achiote-ingredientes_recetas-706_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Achiote">Achiote</a>&nbsp;(aniato seads)</li>\r\n	<li itemprop="ingredients" style="border: 0px; margin: 0px 0px 0px 1em; outline: 0px; padding: 0px; background-color: transparent; font-size: 14px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;">Aceite de maiz</li>\r\n</ul>\r\n', '<ol class="marcado" style="border: 0px; margin: 5px 0px 1em; outline: 0px; padding-right: 0px; padding-left: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; counter-reset: li 0; color: rgb(102, 102, 102); font-family: Arial, Helvetica, Geneva, sans-serif; line-height: 24px;">\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">Marianar el pavo la noche anterior con,una mescla de sal pimienta, vino azucar morena achiote preparado ( poner un paquete de aniato a Hervir en un poco de aceite hasta obtener un aceite de color rojizo no sobre calentar) frotar el pavo por dentro y por fuera con esta mescla dejar en la nevera toda la noche.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">PONER A REMOJAR EL PAN EN LA LECHE PARA ABLANDAR, LUEGO LIQUAR HASTA OBTENER UNA SALSA CREMOSA.<br style="border: none; margin: 0px; outline: 0px; padding: 0px;" />\r\n	LAS PASAS Y LAS CIRUELAS PASAS PONER A REMOJAR EN EL VINO POR UNAS 6 HORAS, LAS NUECES PONER A REMOJAR EN&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Agua-ingredientes_recetas-15_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Agua">Agua</a>&nbsp;TIBIA UNA HORA ANTES DE ;A PREPARACION.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">PREPARAR EL CONSOME CON EL MENUDO DE PAVO Y LUEGO CONTAR ESTE EN PEAZOS PEQUENOS, EL JAMOS CORTA EN PEDAZOS DE 1 SQUARE INCHE.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">LAS ACEITUNAS CORTAR EN MITADES, PREPARAR UN REFRITO CON I&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Cebolla-ingredientes_recetas-122_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Cebolla">Cebolla</a>&nbsp;PAITENA (COLORADA) 2 DIENTES DE&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Ajo-ingredientes_recetas-693_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Ajo">Ajo</a>&nbsp;1&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Pimiento-verde-ingredientes_recetas-505_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Pimiento verde">Pimiento verde</a>&nbsp;UN TALLO DE&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Apio-ingredientes_recetas-676_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Apio">Apio</a>&nbsp;TODO ESTO PICADO MUY FINA MENTE SAL PIMIENTA&nbsp;<a href="http://www.recetasgratis.net/Recetas-con-Comino-ingredientes_recetas-169_1.html" style="border-bottom-style: dotted; border-width: 0px 0px 1px; margin: 0px; outline: 0px; padding: 0px; background-color: transparent; font-size: 16px; vertical-align: baseline; color: rgb(102, 102, 102); text-decoration: none; background-position: initial initial; background-repeat: initial initial;" title="Recetas con Comino">Comino</a>&nbsp;Y UNAS 3 CUCHARADAS DE ACEITE DE ACHIOTE AL GUSTO CUANDO EL SOFRITO ESTE LISTO UNOS 5 MINUTOS AGREGAR LAS CIRUELAS,PASAS,ACEITUNAS,LA SALSA DEL PAN MOLIDO EL CONSOME EL MENUDO DEL PAVO Y EL JAMON PICADO DEJAR HERVIR A FUEGO LENTO HASTA QUE EL RELLENO COMIENSE A ESPEZAR ANADIR LAS NUECES EN ESTE PUNTO COCINAR POR UNA HORA APROXIMADAMENTE O HASTA QUE TENGA EL ESPESOR ADECUADO MOVIENTO CON CUCHARA DE MADERA.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">DEJAR REPOZAR POR UNA HORA EL RELENO, PONER DENTRO DE LA CAVIDAD PRICIPAL DEL PAVO Y PONER A HORNEAR A 325 GRADOS NO CENTIGRADOS POR UNAS 3-4 HORAS HASTA QUE EL PAVO TENGA UNA TEMPERATURA DE 180 GRADOS (TERMOMETRO DE AVES) DISFRUTA LA CENA.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">NO ES FACIL DE PREPARAR PERO SI SIGUES ESTOS PASOS LO VAS A DISFRUTAR MUCO COMO LO HACIAN NUESTRAS ABUELAS.</li>\r\n	<li style="border: 0px; margin: 0px 0px 6px -18px; outline: 0px; padding: 4px 18px; background-color: transparent; font-size: 16px; vertical-align: baseline; list-style: none; position: relative; background-position: initial initial; background-repeat: initial initial;">ROY</li>\r\n</ol>\r\n', '2013-09-21 07:49:18', '2013-09-21 07:49:18');

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
  `phone` char(20) DEFAULT NULL,
  `email` char(100) CHARACTER SET utf8 NOT NULL,
  `curriculum` text CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `charge_id` (`charge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `requirements`
--


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
-- Volcar la base de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `content`) VALUES
(1, '<p dir="rtl" style="text-align: left;">&nbsp;</p>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>\r\n<p align="left" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 17px;"><strong>Localizado en nuestro Complejo en la zona de Collpapampa a 14 km, de la ciudad.</strong></p>\r\n\r\n<ol style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 17px;" type="a">\r\n	<li>Inicialmente tenemos 7 Contenedores Refrigerados, m&aacute;s conocidos como Reefers. Cada uno de ellos tiene su propio compresor de fr&iacute;o, capaz de bajar hasta menos 25 grados bajo cero (<st1:metricconverter productid="-25ÂºC" w:st="on">-25&ordm;C). Son de acero inoxidable por dentro. Tienen una capacidad de almacenar 25,000 Kg., de alimentos congelados.</st1:metricconverter><br />\r\n	&nbsp;</li>\r\n	<li><st1:metricconverter productid="-25ÂºC" w:st="on"><st1:metricconverter productid="-25ÂºC" w:st="on">Almacenamiento de productos refrigerados a temperaturas entre 0 a&nbsp;<st1:metricconverter productid="8ÂºC" w:st="on">8&ordm;C, como fruta fresca, carne fresca de ave y res, verduras frescas, hortalizas, legumbres.</st1:metricconverter></st1:metricconverter></st1:metricconverter><br />\r\n	&nbsp;</li>\r\n	<li><st1:metricconverter productid="-25ÂºC" w:st="on"><st1:metricconverter productid="-25ÂºC" w:st="on"><st1:metricconverter productid="8ÂºC" w:st="on"><st1:metricconverter productid="-25ÂºC" w:st="on"><st1:metricconverter productid="8ÂºC" w:st="on">Almacenamiento de productos congelados a temperatura entre -2 y&nbsp;<st1:metricconverter productid="-25ÂºC" w:st="on">-25&ordm;C, como carne de ave, de res, mariscos, helados, papa frita, hielo.</st1:metricconverter></st1:metricconverter></st1:metricconverter></st1:metricconverter></st1:metricconverter></st1:metricconverter><br />\r\n	&nbsp;</li>\r\n	<li><st1:metricconverter productid="-25ÂºC" w:st="on">Transporte de de productos refrigerados y congelados, a nivel nacional e internacional. Para ello el contenedor se coloca en un cami&oacute;n con chata plana y se agrega al Reefer un generador de electricidad GenSet que funciona con diesel y proporciona autonom&iacute;a para transportar 4 d&iacute;as.</st1:metricconverter><br />\r\n	&nbsp;</li>\r\n	<li><st1:metricconverter productid="-25ÂºC" w:st="on">La tarifa plana es 16 Bs., por metro c&uacute;bico por d&iacute;a. Para cantidades mayores efectuaremos la cotizaci&oacute;n correspondiente.</st1:metricconverter></li>\r\n</ol>\r\n</div>\r\n');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcar la base de datos para la tabla `supermarkets`
--

INSERT INTO `supermarkets` (`id`, `name`, `filename`, `dir`, `link`, `description`) VALUES
(1, 'lknlknlk', 'KETAL.jpg', 'img\\supermarket\\filename', 'http://www.ketal.com.bo/', '.'),
(3, 'CIBUM', 'CIBUM.jpg', 'img\\supermarket\\filename', 'https://www.facebook.com/cibum.supermercadofamiliar', '.'),
(4, 'HIPERMAXI', 'HIPERMAXI.jpg', 'img\\supermarket\\filename', 'http://www.hipermaxi.com/', '.'),
(5, 'ICENORTE', 'ICENORTE.jpg', 'img\\supermarket\\filename', 'http://www.icnorte.com/', '.'),
(6, 'SLAN', 'SLAN.jpg', 'img\\supermarket\\filename', 'http://superslan.com/', '.'),
(16, 'PLAZA', 'PLAZA.jpg', 'img\\supermarket\\filename', 'http://www.curriculum.bo/perfiles/empresa_plaza-hipermercados_10106350.html', '.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `tips`
--

INSERT INTO `tips` (`id`, `title`, `description`, `filename`, `dir`) VALUES
(1, 'Cuida tu salud: quÃ© hacer', '<p>Lo m&aacute;s importante de un entrenamiento es el descanso, si, suena raro pero as&iacute; es, es cuando el cuerpo entiende que debe recuperar porque es posible que al d&iacute;a siguiente se le exija otra vez lo mismo. El cuerpo regenera el m&uacute;sculo, rellena las reservas y por si acaso, se prepara para estar mejor el pr&oacute;ximo d&iacute;a, por eso, el descanso es sagrado, esencial y necesario. Lo ideal entonces ser&iacute;a montar un d&iacute;a si, y otro no.</p>\r\n\r\n<p>Como dije en uno de los comentarios del anterior art&iacute;culo, el ritmo o velocidad ideal, deber&iacute;a ser el que &nbsp;te permitiese poder hablar y tener una conversaci&oacute;n completamente flu&iacute;da mientras pedaleamos, sin llegar a entrecortarnos, pero tampoco como para dar un mon&oacute;logo e ir de ch&aacute;chara. Si eres chica y te preocupa ganar m&uacute;sculo o gemelo montando en bici, no te preocupes, por definici&oacute;n, el ciclismo, al ser un deporte de fondo, consume m&uacute;sculo, es un ejercici&oacute; aer&oacute;bico que precisamente hace lo contrario, pero si quieres estar segur@ procura dar bastantes pedaladas por minuto, los ejercicios con poco peso y muchas repeticiones no generan m&uacute;sculo, lo mejoran, por eso los culturistas hacen lo contrario, levantan pocas veces las pesas, pero con mucho peso cada una.</p>\r\n\r\n<p>Si te encuentras con ganas, puedes apretar un poco unos minutos, y luego recuperar, pero lo ideal ser&iacute;a que siempre llegases a casa con fuerzas como para haber hecho m&aacute;s, es importante que mentalmente te encuentres a gusto y con ganas de m&aacute;s.</p>\r\n\r\n<p>El tiempo, pues puedes empezar con 40 minutos e ir aumentando cada d&iacute;a 5 minutos m&aacute;s hasta llegar a la hora y cuarto, con eso deber&iacute;a ser m&aacute;s que suficiente y de sobra, para perder peso y ponerte en muy buena forma.</p>\r\n\r\n<p>Lo peor de todo, ser&aacute; el dolor de culo, el 2&ordm; d&iacute;a especialmente. Puedes comprar un acolchado para el sill&iacute;n, pero solamente calmar&aacute; un poco, la soluci&oacute;n solo est&aacute; en acostumbrar a tu culo. Para los que empiezan es lo peor de este deporte, y con raz&oacute;n, pero de verdad que se pasa con el tiempo, ten fe y aguanta el tir&oacute;n, luego todo lo malo se olvida ;)</p>\r\n\r\n<p>Ya sabes, cu&eacute;ntanos que tal te ha ido todo, si te he animado, si te ha funcionado, si quieres m&aacute;s&hellip;.. estar&eacute; aqu&iacute; para lo que quieras :)</p>\r\n', 'tamano_beneficios.png', 'img\\tip\\filename'),
(2, 'Como para cuidar tu salud', '<p>Lo m&aacute;s importante de un entrenamiento es el descanso, si, suena raro pero as&iacute; es, es cuando el cuerpo entiende que debe recuperar porque es posible que al d&iacute;a siguiente se le exija otra vez lo mismo. El cuerpo regenera el m&uacute;sculo, rellena las reservas y por si acaso, se prepara para estar mejor el pr&oacute;ximo d&iacute;a, por eso, el descanso es sagrado, esencial y necesario. Lo ideal entonces ser&iacute;a montar un d&iacute;a si, y otro no.</p>\r\n\r\n<p>Como dije en uno de los comentarios del anterior art&iacute;culo, el ritmo o velocidad ideal, deber&iacute;a ser el que &nbsp;te permitiese poder hablar y tener una conversaci&oacute;n completamente flu&iacute;da mientras pedaleamos, sin llegar a entrecortarnos, pero tampoco como para dar un mon&oacute;logo e ir de ch&aacute;chara. Si eres chica y te preocupa ganar m&uacute;sculo o gemelo montando en bici, no te preocupes, por definici&oacute;n, el ciclismo, al ser un deporte de fondo, consume m&uacute;sculo, es un ejercici&oacute; aer&oacute;bico que precisamente hace lo contrario, pero si quieres estar segur@ procura dar bastantes pedaladas por minuto, los ejercicios con poco peso y muchas repeticiones no generan m&uacute;sculo, lo mejoran, por eso los culturistas hacen lo contrario, levantan pocas veces las pesas, pero con mucho peso cada una.</p>\r\n\r\n<p>Si te encuentras con ganas, puedes apretar un poco unos minutos, y luego recuperar, pero lo ideal ser&iacute;a que siempre llegases a casa con fuerzas como para haber hecho m&aacute;s, es importante que mentalmente te encuentres a gusto y con ganas de m&aacute;s.</p>\r\n\r\n<p>El tiempo, pues puedes empezar con 40 minutos e ir aumentando cada d&iacute;a 5 minutos m&aacute;s hasta llegar a la hora y cuarto, con eso deber&iacute;a ser m&aacute;s que suficiente y de sobra, para perder peso y ponerte en muy buena forma.</p>\r\n\r\n<p>Lo peor de todo, ser&aacute; el dolor de culo, el 2&ordm; d&iacute;a especialmente. Puedes comprar un acolchado para el sill&iacute;n, pero solamente calmar&aacute; un poco, la soluci&oacute;n solo est&aacute; en acostumbrar a tu culo. Para los que empiezan es lo peor de este deporte, y con raz&oacute;n, pero de verdad que se pasa con el tiempo, ten fe y aguanta el tir&oacute;n, luego todo lo malo se olvida ;)</p>\r\n\r\n<p>Ya sabes, cu&eacute;ntanos que tal te ha ido todo, si te he animado, si te ha funcionado, si quieres m&aacute;s&hellip;.. estar&eacute; aqu&iacute; para lo que quieras :)</p>\r\n', 'tamano_beneficios-0.png', 'img\\tip\\filename'),
(3, 'Dieta baja en calorÃ­as', '<p>Lo m&aacute;s importante de un entrenamiento es el descanso, si, suena raro pero as&iacute; es, es cuando el cuerpo entiende que debe recuperar porque es posible que al d&iacute;a siguiente se le exija otra vez lo mismo. El cuerpo regenera el m&uacute;sculo, rellena las reservas y por si acaso, se prepara para estar mejor el pr&oacute;ximo d&iacute;a, por eso, el descanso es sagrado, esencial y necesario. Lo ideal entonces ser&iacute;a montar un d&iacute;a si, y otro no.</p>\r\n\r\n<p>Como dije en uno de los comentarios del anterior art&iacute;culo, el ritmo o velocidad ideal, deber&iacute;a ser el que &nbsp;te permitiese poder hablar y tener una conversaci&oacute;n completamente flu&iacute;da mientras pedaleamos, sin llegar a entrecortarnos, pero tampoco como para dar un mon&oacute;logo e ir de ch&aacute;chara. Si eres chica y te preocupa ganar m&uacute;sculo o gemelo montando en bici, no te preocupes, por definici&oacute;n, el ciclismo, al ser un deporte de fondo, consume m&uacute;sculo, es un ejercici&oacute; aer&oacute;bico que precisamente hace lo contrario, pero si quieres estar segur@ procura dar bastantes pedaladas por minuto, los ejercicios con poco peso y muchas repeticiones no generan m&uacute;sculo, lo mejoran, por eso los culturistas hacen lo contrario, levantan pocas veces las pesas, pero con mucho peso cada una.</p>\r\n\r\n<p>Si te encuentras con ganas, puedes apretar un poco unos minutos, y luego recuperar, pero lo ideal ser&iacute;a que siempre llegases a casa con fuerzas como para haber hecho m&aacute;s, es importante que mentalmente te encuentres a gusto y con ganas de m&aacute;s.</p>\r\n\r\n<p>El tiempo, pues puedes empezar con 40 minutos e ir aumentando cada d&iacute;a 5 minutos m&aacute;s hasta llegar a la hora y cuarto, con eso deber&iacute;a ser m&aacute;s que suficiente y de sobra, para perder peso y ponerte en muy buena forma.</p>\r\n\r\n<p>Lo peor de todo, ser&aacute; el dolor de culo, el 2&ordm; d&iacute;a especialmente. Puedes comprar un acolchado para el sill&iacute;n, pero solamente calmar&aacute; un poco, la soluci&oacute;n solo est&aacute; en acostumbrar a tu culo. Para los que empiezan es lo peor de este deporte, y con raz&oacute;n, pero de verdad que se pasa con el tiempo, ten fe y aguanta el tir&oacute;n, luego todo lo malo se olvida ;)</p>\r\n\r\n<p>Ya sabes, cu&eacute;ntanos que tal te ha ido todo, si te he animado, si te ha funcionado, si quieres m&aacute;s&hellip;.. estar&eacute; aqu&iacute; para lo que quieras :)</p>\r\n', 'tamano_beneficios-1.png', 'img\\tip\\filename'),
(4, 'Algunos consejos', '<p>Lo m&aacute;s importante de un entrenamiento es el descanso, si, suena raro pero as&iacute; es, es cuando el cuerpo entiende que debe recuperar porque es posible que al d&iacute;a siguiente se le exija otra vez lo mismo. El cuerpo regenera el m&uacute;sculo, rellena las reservas y por si acaso, se prepara para estar mejor el pr&oacute;ximo d&iacute;a, por eso, el descanso es sagrado, esencial y necesario. Lo ideal entonces ser&iacute;a montar un d&iacute;a si, y otro no.</p>\r\n\r\n<p>Como dije en uno de los comentarios del anterior art&iacute;culo, el ritmo o velocidad ideal, deber&iacute;a ser el que &nbsp;te permitiese poder hablar y tener una conversaci&oacute;n completamente flu&iacute;da mientras pedaleamos, sin llegar a entrecortarnos, pero tampoco como para dar un mon&oacute;logo e ir de ch&aacute;chara. Si eres chica y te preocupa ganar m&uacute;sculo o gemelo montando en bici, no te preocupes, por definici&oacute;n, el ciclismo, al ser un deporte de fondo, consume m&uacute;sculo, es un ejercici&oacute; aer&oacute;bico que precisamente hace lo contrario, pero si quieres estar segur@ procura dar bastantes pedaladas por minuto, los ejercicios con poco peso y muchas repeticiones no generan m&uacute;sculo, lo mejoran, por eso los culturistas hacen lo contrario, levantan pocas veces las pesas, pero con mucho peso cada una.</p>\r\n\r\n<p>Si te encuentras con ganas, puedes apretar un poco unos minutos, y luego recuperar, pero lo ideal ser&iacute;a que siempre llegases a casa con fuerzas como para haber hecho m&aacute;s, es importante que mentalmente te encuentres a gusto y con ganas de m&aacute;s.</p>\r\n\r\n<p>El tiempo, pues puedes empezar con 40 minutos e ir aumentando cada d&iacute;a 5 minutos m&aacute;s hasta llegar a la hora y cuarto, con eso deber&iacute;a ser m&aacute;s que suficiente y de sobra, para perder peso y ponerte en muy buena forma.</p>\r\n\r\n<p>Lo peor de todo, ser&aacute; el dolor de culo, el 2&ordm; d&iacute;a especialmente. Puedes comprar un acolchado para el sill&iacute;n, pero solamente calmar&aacute; un poco, la soluci&oacute;n solo est&aacute; en acostumbrar a tu culo. Para los que empiezan es lo peor de este deporte, y con raz&oacute;n, pero de verdad que se pasa con el tiempo, ten fe y aguanta el tir&oacute;n, luego todo lo malo se olvida ;)</p>\r\n\r\n<p>Ya sabes, cu&eacute;ntanos que tal te ha ido todo, si te he animado, si te ha funcionado, si quieres m&aacute;s&hellip;.. estar&eacute; aqu&iacute; para lo que quieras :)</p>\r\n', 'tamano_beneficios-2.png', 'img\\tip\\filename');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`) VALUES
(1, 'oss', '421d8f5eadb389d2a1a74597ea42e3a016b3904f', '1', 'ronaldo_racso@hotmail.com', '2013-08-08 00:00:00', '2013-08-08 00:00:00'),
(2, 'avicolasantarosa', 'f8dd36b2a1833d41f20b7c12dd8008981aac4da7', NULL, '', NULL, NULL),
(3, 'avicolasantarosa', 'f8dd36b2a1833d41f20b7c12dd8008981aac4da7', NULL, '', NULL, NULL);

--
-- Filtros para las tablas descargadas (dump)
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
-- Filtros para la tabla `images_categories`
--
ALTER TABLE `images_categories`
  ADD CONSTRAINT `images_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `images_presentations`
--
ALTER TABLE `images_presentations`
  ADD CONSTRAINT `images_presentations_ibfk_1` FOREIGN KEY (`presentation_id`) REFERENCES `presentations` (`id`);

--
-- Filtros para la tabla `images_recipes`
--
ALTER TABLE `images_recipes`
  ADD CONSTRAINT `images_recipes_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`);

--
-- Filtros para la tabla `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `new_requirements`
--
ALTER TABLE `new_requirements`
  ADD CONSTRAINT `new_requirements_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`);

--
-- Filtros para la tabla `presentations`
--
ALTER TABLE `presentations`
  ADD CONSTRAINT `presentations_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Filtros para la tabla `presentations_quotes`
--
ALTER TABLE `presentations_quotes`
  ADD CONSTRAINT `presentations_quotes_ibfk_2` FOREIGN KEY (`presentation_id`) REFERENCES `presentations` (`id`),
  ADD CONSTRAINT `presentations_quotes_ibfk_3` FOREIGN KEY (`quote_id`) REFERENCES `quotes` (`id`);

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
