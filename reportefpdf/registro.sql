-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2016 a las 11:23:34
-- Versión del servidor: 5.7.12-log
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `loginName` varchar(20) NOT NULL,
  `passuser` varchar(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `ci_rif` varchar(10) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`loginName`, `passuser`, `nombre`, `apellido`, `ci_rif`, `telefono`, `idUser`) VALUES
('joserp', 'jRp-159357*', 'Jose Manuel', 'Rodriguez Perez', '18693752', '0274-2625874/0414-5368741', 1),
('juanpablo', '123654987', 'Juan Pablo', 'Molina', '10324789', '0274-2514698/0414-7536988', 3),
('anamr', '12547896369-*', 'Ana Maria', 'Rincon', '18693752', '0414569874', 4),
('usuario', 'user-*123', 'Pablo jose', 'Perez', '12356321', '0274-2447534/0414-584713', 5),
('USUARIOV', '123456', 'Jose Manuel', 'ramirez torres', '10324789', '0414569874', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
