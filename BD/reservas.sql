-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2019 a las 03:51:34
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listado_reservas`
--

CREATE TABLE `listado_reservas` (
  `id_reservas` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `telefono` int(15) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_bin NOT NULL,
  `hora` varchar(5) COLLATE utf8_bin NOT NULL,
  `personas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `listado_reservas`
--

INSERT INTO `listado_reservas` (`id_reservas`, `nombre`, `apellido`, `email`, `telefono`, `fecha`, `hora`, `personas`) VALUES
(1, 'Lorena', 'Santiri', 'lsantiri@gmail.com', 1163859641, '2019-11-1', '2000', 2),
(2, 'Giannina', 'Sosa', 'gsosa@hotmail.com', 1158964125, '2019-11-3', '2030', 4),
(3, 'Valeria', 'Martinez', 'Valetodo@yahoo,com.ar', 1153859674, '2019-11-2', '2200', 5),
(4, 'Ignacio', 'Gomez Calazanz', 'shorshinitah@fghj.co', 1552857496, '11/19/2019', '22:00', 4),
(5, 'Alejandra', 'Gutierrez', 'alegu@yahoo.com', 1554788596, '22/11/2019', '22:00', 3),
(6, 'Florencia', 'Calvo', 'florcita@hotmail.com', 1234567890, '11/29/2019', '22:00', 3),
(7, 'Alondra', 'Pallas', 'apallas@hotmail.com', 1563968523, '11/23/2019', '23:00', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `username` varchar(10) COLLATE utf8_bin NOT NULL,
  `passwords` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `username`, `passwords`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `listado_reservas`
--
ALTER TABLE `listado_reservas`
  ADD PRIMARY KEY (`id_reservas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `listado_reservas`
--
ALTER TABLE `listado_reservas`
  MODIFY `id_reservas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
