-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2019 a las 22:30:13
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turnoscop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `id` int(11) NOT NULL,
  `cont` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contador`
--

INSERT INTO `contador` (`id`, `cont`) VALUES
(1, 6),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `ticket` varchar(4) NOT NULL,
  `escritorio` varchar(15) DEFAULT NULL,
  `tipo_ticket` smallint(1) NOT NULL,
  `estado` smallint(1) NOT NULL,
  `fh_llegada` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fh_atencion` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id`, `ticket`, `escritorio`, `tipo_ticket`, `estado`, `fh_llegada`, `fh_atencion`) VALUES
(1, 'A001', '1', 1, 2, '2019-11-28 23:46:27', NULL),
(2, 'A002', '1', 1, 2, '2019-11-28 23:47:39', NULL),
(3, 'A003', '1', 1, 2, '2019-11-28 23:47:43', NULL),
(4, 'A004', '1', 1, 2, '2019-11-28 23:49:44', NULL),
(5, 'B001', '1', 2, 2, '2019-11-28 23:48:18', NULL),
(6, 'B002', '1', 2, 2, '2019-11-28 23:49:52', NULL),
(7, 'B003', '1', 2, 2, '2019-11-28 23:50:03', NULL),
(8, 'A005', '1', 1, 2, '2019-11-28 23:51:15', NULL),
(9, 'A006', '1', 1, 2, '2019-11-28 23:51:23', NULL),
(10, 'A007', '1', 1, 2, '2019-11-28 23:51:35', NULL),
(11, 'A008', '1', 1, 2, '2019-11-28 23:51:40', NULL),
(12, 'B004', '1', 2, 2, '2019-11-28 23:51:26', NULL),
(13, 'B005', '1', 2, 2, '2019-11-28 23:51:29', NULL),
(14, 'B006', '1', 2, 2, '2019-11-28 23:51:34', NULL),
(15, 'B007', '1', 2, 2, '2019-11-28 23:51:45', NULL),
(16, 'A009', '1', 1, 2, '2019-11-28 23:52:20', NULL),
(17, 'B008', '1', 2, 2, '2019-11-28 23:52:51', NULL),
(18, 'B009', '1', 2, 2, '2019-11-29 00:07:47', NULL),
(19, 'A010', '1', 1, 2, '2019-11-28 23:52:46', NULL),
(20, 'B010', '1', 2, 2, '2019-11-29 00:08:16', NULL),
(21, 'A011', '1', 1, 2, '2019-11-29 02:05:38', NULL),
(22, 'A012', '1', 1, 2, '2019-11-29 02:46:24', NULL),
(23, 'B011', '1', 2, 2, '2019-11-29 02:49:16', NULL),
(24, 'A013', '1', 1, 2, '2019-11-29 02:47:12', NULL),
(25, 'B012', '1', 2, 2, '2019-11-29 02:49:23', NULL),
(26, 'B013', '1', 2, 2, '2019-11-29 02:49:36', NULL),
(27, 'B014', '1', 2, 2, '2019-11-29 03:03:07', NULL),
(28, 'A014', '1', 1, 2, '2019-11-29 02:47:18', NULL),
(29, 'A015', '1', 1, 2, '2019-11-29 03:02:59', NULL),
(30, 'A016', '1', 1, 2, '2019-11-29 03:06:58', NULL),
(31, 'A017', '1', 1, 2, '2019-11-29 03:07:53', NULL),
(32, 'A018', '1', 1, 2, '2019-11-29 03:07:58', NULL),
(33, 'A019', '1', 1, 2, '2019-11-29 03:10:38', NULL),
(34, 'B015', '1', 2, 2, '2019-11-29 03:07:56', NULL),
(35, 'B016', '1', 2, 2, '2019-11-29 03:08:00', NULL),
(36, 'B017', '1', 2, 2, '2019-11-29 03:10:44', NULL),
(37, 'B018', '1', 2, 2, '2019-11-29 03:14:13', NULL),
(38, 'B019', '1', 2, 2, '2019-11-29 03:15:26', NULL),
(39, 'B020', '1', 2, 2, '2019-11-29 03:40:34', NULL),
(40, 'A020', '1', 1, 2, '2019-11-29 03:15:17', NULL),
(41, 'B021', '1', 2, 2, '2019-11-29 03:41:10', NULL),
(42, 'A021', '1', 1, 2, '2019-11-29 03:15:20', NULL),
(43, 'B022', '2', 2, 2, '2019-11-29 03:41:59', NULL),
(44, 'B023', '4', 2, 2, '2019-11-29 03:50:13', NULL),
(45, 'A022', '4', 1, 2, '2019-11-29 03:50:10', NULL),
(46, 'A023', '4', 1, 2, '2019-11-29 03:50:15', NULL),
(47, 'A024', '4', 1, 2, '2019-11-29 03:53:49', NULL),
(48, 'B024', '4', 2, 2, '2019-11-29 03:50:17', NULL),
(49, 'A025', '4', 1, 2, '2019-11-29 03:55:43', NULL),
(50, 'A026', '4', 1, 2, '2019-11-29 03:55:49', NULL),
(51, 'B025', '4', 2, 2, '2019-11-29 03:55:47', NULL),
(52, 'A027', '4', 1, 2, '2019-11-29 03:55:55', NULL),
(53, 'B026', '4', 2, 2, '2019-11-29 03:55:52', NULL),
(54, 'A028', '4', 1, 2, '2019-11-29 04:01:01', NULL),
(55, 'B027', '4', 2, 2, '2019-11-29 04:01:03', NULL),
(56, 'A029', '4', 1, 2, '2019-11-29 04:01:50', NULL),
(57, 'B028', '4', 2, 2, '2019-11-29 04:21:58', NULL),
(58, 'A030', '4', 1, 2, '2019-11-29 04:21:56', NULL),
(59, 'B029', '4', 2, 2, '2019-11-29 04:27:44', NULL),
(60, 'A031', '4', 1, 2, '2019-11-29 04:27:40', NULL),
(61, 'A032', '4', 1, 2, '2019-11-29 04:33:20', NULL),
(62, 'A033', '1', 1, 2, '2019-11-29 12:51:07', NULL),
(63, 'A034', '1', 1, 2, '2019-11-29 12:52:59', NULL),
(64, 'B030', '1', 2, 2, '2019-11-29 04:33:36', NULL),
(65, 'B031', '1', 2, 2, '2019-11-29 12:52:14', NULL),
(66, 'A035', '1', 1, 2, '2019-11-29 12:53:05', NULL),
(67, 'A036', '1', 1, 2, '2019-11-29 12:53:10', NULL),
(68, 'A037', '1', 1, 2, '2019-11-29 12:53:16', NULL),
(69, 'A038', '1', 1, 2, '2019-11-29 12:53:23', NULL),
(70, 'A039', '1', 1, 2, '2019-11-29 12:53:55', NULL),
(71, 'B032', '1', 2, 2, '2019-11-29 12:52:52', NULL),
(72, 'A040', '1', 1, 2, '2019-11-29 12:54:03', NULL),
(73, 'A041', '0', 1, 2, '2019-11-29 19:18:28', NULL),
(74, 'B033', '0', 2, 2, '2019-11-29 19:18:42', NULL),
(75, 'A042', '3', 1, 2, '2019-11-29 19:19:06', NULL),
(76, 'B034', '3', 2, 2, '2019-11-29 19:19:12', NULL),
(77, 'A043', 'ejecutivo1', 1, 2, '2019-11-29 19:20:46', NULL),
(78, 'B035', '1', 2, 2, '2019-11-29 19:21:35', NULL),
(79, 'A044', 'Ejecutivo 1', 1, 2, '2019-11-29 19:21:16', NULL),
(80, 'B036', '1', 2, 2, '2019-11-29 21:02:34', NULL),
(81, 'A045', 'Ejecutivo 1', 1, 2, '2019-11-29 19:21:30', NULL),
(82, 'B037', '2', 2, 2, '2019-11-29 21:10:00', NULL),
(83, 'A046', '1', 1, 2, '2019-11-29 19:21:40', NULL),
(84, 'B038', '2', 2, 2, '2019-11-29 21:10:07', NULL),
(85, 'A047', '1', 1, 2, '2019-11-29 20:04:27', NULL),
(86, 'A048', '1', 1, 2, '2019-11-29 20:04:32', NULL),
(87, 'A001', '1', 1, 2, '2019-11-29 21:02:28', NULL),
(88, 'A002', '1', 1, 2, '2019-11-29 21:02:38', NULL),
(89, 'B001', '2', 2, 2, '2019-11-29 21:10:21', NULL),
(90, 'A003', '3', 1, 2, '2019-11-29 21:08:39', NULL),
(91, 'A004', '2', 1, 2, '2019-11-29 21:09:41', NULL),
(92, 'A005', '3', 1, 2, '2019-11-29 21:10:45', NULL),
(93, 'B002', NULL, 2, 1, '2019-11-29 21:01:40', NULL),
(94, 'A006', NULL, 1, 1, '2019-11-29 21:07:55', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario` char(15) NOT NULL,
  `tipo` smallint(6) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `tipo`, `nombre`, `password`, `fecha`, `estado`) VALUES
('admin', 1, 'Luis', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2019-11-22', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contador`
--
ALTER TABLE `contador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
