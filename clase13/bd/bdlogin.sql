-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2025 a las 04:33:59
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdlogin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finalb192`
--

CREATE TABLE `finalb192` (
  `res_id` int(11) NOT NULL,
  `res_nombre` varchar(25) NOT NULL,
  `res_celular` int(20) NOT NULL,
  `res_correo` varchar(25) NOT NULL,
  `res_presupuesto` varchar(30) NOT NULL,
  `res_destino` varchar(30) NOT NULL,
  `res_fecha` date NOT NULL,
  `res_observaciones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `finalb192`
--

INSERT INTO `finalb192` (`res_id`, `res_nombre`, `res_celular`, `res_correo`, `res_presupuesto`, `res_destino`, `res_fecha`, `res_observaciones`) VALUES
(2, 'dasd', 123123, 'darielcalderon@gmail.com', 'Entre $1.000.000 y $3.000.000', 'Europa', '2025-05-04', '      dasdsadaqsda      ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(25) NOT NULL,
  `clave` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES
('admin', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `finalb192`
--
ALTER TABLE `finalb192`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `finalb192`
--
ALTER TABLE `finalb192`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
