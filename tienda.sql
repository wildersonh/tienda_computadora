-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2023 a las 02:42:16
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL COMMENT 'llave primaria',
  `nombre` varchar(30) NOT NULL,
  `nombre_usuario` varchar(15) NOT NULL,
  `contrasenia` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `nombre_usuario`, `contrasenia`, `apellido`, `correo`, `fecha_nacimiento`) VALUES
(1, 'Juan', 'JuanP', 'JuanP123', 'Perez', 'juan@gmail.com', '2005-10-15'),
(2, 'Manuel', 'Manuel_xd', '12345678', 'Martinez', 'manuel@gmail.com', '2000-03-25'),
(3, 'Diego', 'DiegoL', 'DiegoL123', 'Landa', 'DiegoLanda@gmail.com', '2000-12-01'),
(4, 'Diana', 'DianaH', '123Diana_15', 'Hernandez', 'Diana_H@gmail.com', '1999-05-05'),
(5, 'Wilker', 'WilkerH', 'Wilder123.', 'Hernandez', 'wildersonh@gmail.com', '1989-04-13'),
(6, 'Abraham', 'abrahamAA', '123456', 'Lopez', 'abraham@gmail.com', '2005-02-10'),
(7, 'Luis', 'LuisB', '123456789', 'Becerra', 'Lusi@gmail.com', '1999-02-15'),
(8, 'Juan', 'JuanA', '123456789', 'Aleman', 'JuanA@gmail.com', '1999-05-16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
