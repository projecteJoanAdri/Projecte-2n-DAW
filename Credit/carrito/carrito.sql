-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-09-2014 a las 03:26:04
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
`id` int(6) NOT NULL,
  `img` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `nom` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `preu` double NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `img`, `nom`, `preu`) VALUES
(1, 'bici1.jpg', 'Bicicleta Csepel Royal Torpedo Lila', 395),
(2, 'bici2.jpg', 'Bicicleta Csepel Royal Lila', 395),
(3, 'bici3.jpg', 'Bicicleta Minivelo Csepel Royal Frisco', 396),
(4, 'bici4.jpg', 'Fixiedreams_1', 595),
(5, 'bici5.jpg', 'Fixiedreams_2', 595),
(6, 'bici6.jpg', 'Fixiedreams_3 Retrocycle', 270),
(7, 'manillar1.jpg', 'Manillar doble altura negro', 6.95),
(8, 'manillar2.jpg', 'Manillar doble altura Mini-fix colores', 9.95),
(9, 'manillar3.jpg', 'Manillar zoom Recto Negro MTB', 9.95),
(10, 'manillar4.jpg', 'Manillar Zoom touring', 9.95),
(11, 'manillar5.jpg', 'Manillar MSC doble altura', 8.95),
(12, 'manillar6.jpg', 'Manillar TranzX Recto Negro MTB 25.4 mm', 12),
(13, 'piñon1.jpg', 'Piñon fijo', 4.50),
(14, 'piñon2.jpg', 'Piñon para rueda contrapedal', 4.50),
(15, 'piñon3.jpg', 'Piñon libre', 5.95),
(16, 'piñon4.jpg', 'Piñon libre reforzado', 7.95),
(17, 'piñon5.jpg', 'Piñon libre cromado', 6.95),
(18, 'piñon6.jpg', 'Piñon fijo Gusset', 10.95),
(19, 'llanta1.jpg', 'Llanta carretera Remerx Taurus 28', 18),
(20, 'llanta2.jpg', 'Llanta Weinmann 30 mm', 19.95),
(21, 'llanta3.jpg', 'Llanta Origin8 42 mm. 32H', 24.50),
(22, 'llanta4.jpg', 'Llanta Origin8 42 mm Banda frenado CNC', 24.95),
(23, 'llanta5.jpg', 'Llanta Origin8 42 mm. 36H', 30),
(24, 'llanta6.jpg', 'Llanta 50 mm.',24.50),
(25, 'pneumatic1.jpg', 'Cubierta Deestone negra', 6.95),
(26, 'pneumatic2.jpg', 'Cubierta Kenda Cosmos', 9),
(27, 'pneumatic3.jpg', 'Cubierta Dell tire 700x23 colores', 8.95),
(28, 'pneumatic4.jpg', 'Cubierta Rubena V80 Syrinx 26x1,25', 8.95),
(29, 'pneumatic5.jpg', 'Cubierta Rubena V66 Flash 26x1,5', 8.95),
(30, 'pneumatic6.jpg', 'Cubierta Rubena V75 Scylla 700x35', 9.95),
(31, 'camara1.jpg', 'Camara 26X1,90/2,10 V.AMER STAMP. OEM', 2.95),
(32, 'camara2.jpg', 'Camara 20X1,75/2,125 V.AMER OEM', 2.95),
(33, 'camara3.jpg', 'Camara Kenda 700x28/32 40 mm', 3.50),
(34, 'camara4.jpg', 'Camara Kenda 700x20/23 48 mm OEM', 3.75),
(35, 'camara5.jpg', 'Camara Kenda 700x20/23 60 mm OEM', 4),
(36, 'camara6.jpg', 'Camara Deestone 700x20/23 60 mm﻿', 4),
(37, 'camara7.jpg', 'Camara Kenda 700x20/23 80 mm', 6.95),
(38, 'camara8.jpg', 'Camara Kenda 700x20/23 60 mm', 4),
(39, 'camara9.jpg', 'Camara Continental 700x20/25 60 mm', 4.95),
(40, 'pedals1.jpg', 'Pedal nylon PK eco', 8.95),
(41, 'pedals2.jpg', 'Pedales clasicos nylon-metal negro eco', 7.95),
(42, 'pedals3.jpg', 'Pedal clasicos Union R negro', 5.95),
(43, 'pedals4.jpg', 'Pedal clasicos Union Sport colores', 11.95),
(44, 'pedals5.jpg', 'Juego pedales trekking aluminio-goma', 9),
(45, 'pedals6.jpg', 'Pedales Plataforma transparente', 9),
(46, 'maneta1.jpg', 'Fixiedreams_3 Retrocycle', 5.95),
(47, 'maneta2.jpg', 'Camara Deestone 700x20/23 60 mm﻿', 6),
(48, 'maneta3.jpg', 'Camara Kenda 700x20/23 80 mm', 7.95),
(49, 'maneta4.jpg', 'Camara Kenda 700x20/23 60 mm', 8.50),
(50, 'maneta5.jpg', 'Camara Continental 700x20/25 60 mm', 8.50),
(51, 'maneta6.jpg', 'Maneta freno Rush BMX1', 9.84),
(52, 'pastilla1.jpg', 'Set zapatas de freno', 1.95),
(53, 'pastilla2.jpg', 'Pastillas de freno', 2.95),
(54, 'pastilla3.jpg', 'Zapatas de freno colores', 5.95),
(55, 'pastilla4.jpg', 'Zapatas de freno para V-Brake 72 mm', 10.20),
(56, 'prisioners1.jpg', 'Prisioneros de cable de freno 2 uds', 1),
(57, 'tensors1.jpg', 'Tensores de cable de freno﻿ 2 uds﻿', 1.50),
(58, 'tuerca1.jpg', 'Tuerca puente de carretera', 1.95),
(59, 'ponts1.jpg', 'Puentes de freno V-Brake 110mm', 7.95),
(60, 'camara9.jpg', 'Camara Continental 700x20/25 60 mm', 4.95),
(61, 'tope1.jpg', 'Tope funda de freno 10uds', 1),
(62, 'tope2.jpg', 'Tope de sirga', 1),
(63, 'cable3.jpg', 'Cable de freno UNEX MTB', 1.50),
(64, 'cable4.jpg', 'Cable de freno TOPE PERA', 1.50);



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `img` (`img`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
