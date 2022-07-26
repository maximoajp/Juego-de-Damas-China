-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-07-2022 a las 20:47:32
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `damachina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

CREATE TABLE IF NOT EXISTS `tabla` (
  `id` int(11) NOT NULL,
  `fila` varchar(1) NOT NULL,
  `col` int(11) NOT NULL,
  `ficha` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`id`, `fila`, `col`, `ficha`, `color`) VALUES
(1, '1', 1, 'a11', 'a'),
(2, '1', 2, 'v12', 'v'),
(3, '1', 3, 'a13', 'r'),
(4, '1', 4, 'v14', 'r'),
(5, '1', 5, 'a15', 'a'),
(6, '1', 6, 'v16', 'v'),
(7, '1', 7, 'a17', 'a'),
(8, '1', 8, 'v18', 'v'),
(9, '2', 1, 'v21', 'v'),
(10, '2', 2, 'a22', 'a'),
(11, '2', 3, 'v23', 'a'),
(12, '2', 4, 'a24', 'a'),
(13, '2', 5, 'v25', 'v'),
(14, '2', 6, 'a26', 'a'),
(15, '2', 7, 'v27', 'v'),
(16, '2', 8, 'a28', 'a'),
(17, '3', 1, 'a31', 'a'),
(18, '3', 2, 'v32', 'v'),
(19, '3', 3, 'a33', 'a'),
(20, '3', 4, 'v34', 'v'),
(21, '3', 5, 'a35', 'v'),
(22, '3', 6, 'v36', 'v'),
(23, '3', 7, 'a37', 'v'),
(24, '3', 8, 'v38', 'v'),
(25, '4', 1, 'v41', 'v'),
(26, '4', 2, 'v42', 'v'),
(27, '4', 3, 'v43', 'v'),
(28, '4', 4, 'v44', 'v'),
(29, '4', 5, 'v45', 'v'),
(30, '4', 6, 'v46', 'v'),
(31, '4', 7, 'v47', 'v'),
(32, '4', 8, 'v48', 'v'),
(33, '5', 1, 'v51', 'v'),
(34, '5', 2, 'v52', 'v'),
(35, '5', 3, 'v53', 'v'),
(36, '5', 4, 'v54', 'v'),
(37, '5', 5, 'v55', 'v'),
(38, '5', 6, 'v56', 'v'),
(39, '5', 7, 'v57', 'a'),
(40, '5', 8, 'v58', 'v'),
(41, '6', 1, 'v61', 'v'),
(42, '6', 2, 'r62', 'v'),
(43, '6', 3, 'v63', 'v'),
(44, '6', 4, 'r64', 'v'),
(45, '6', 5, 'v65', 'v'),
(46, '6', 6, 'r66', 'r'),
(47, '6', 7, 'v67', 'v'),
(48, '6', 8, 'r68', 'r'),
(49, '7', 1, 'r71', 'r'),
(50, '7', 2, 'v72', 'v'),
(51, '7', 3, 'r73', 'r'),
(52, '7', 4, 'v74', 'v'),
(53, '7', 5, 'r75', 'r'),
(54, '7', 6, 'v76', 'v'),
(55, '7', 7, 'r77', 'r'),
(56, '7', 8, 'v78', 'v'),
(57, '8', 1, 'v81', 'v'),
(58, '8', 2, 'r82', 'r'),
(59, '8', 3, 'v83', 'v'),
(60, '8', 4, 'r84', 'r'),
(61, '8', 5, 'v85', 'v'),
(62, '8', 6, 'r86', 'r'),
(63, '8', 7, 'v87', 'v'),
(64, '8', 8, 'r88', 'r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player` varchar(100) NOT NULL,
  `mov_i` varchar(11) NOT NULL,
  `mov_f` varchar(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=251 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `player`, `mov_i`, `mov_f`) VALUES
(244, 'rojo', 'r64', 'v53'),
(245, 'azul', 'a37', 'v46'),
(246, 'rojo', 'v53', 'v14'),
(247, 'azul', 'a13', 'v23'),
(248, 'rojo', 'r62', 'v54'),
(249, 'azul', 'v46', 'v57'),
(250, 'rojo', 'v54', 'a13');
