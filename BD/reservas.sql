-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2019 a las 01:34:57
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
  `fecha` date NOT NULL,
  `hora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `listado_reservas`
--

INSERT INTO `listado_reservas` (`id_reservas`, `nombre`, `apellido`, `email`, `telefono`, `fecha`, `hora`) VALUES
(1, 'Lorena', 'Santiri', 'lsantiri@gmail.com', 1163859641, '2019-11-15', 2000);

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
  MODIFY `id_reservas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
