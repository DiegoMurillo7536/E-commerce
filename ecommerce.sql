-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2022 a las 18:57:28
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro_compra`
--

CREATE TABLE `carro_compra` (
  `sesion` varchar(255) NOT NULL,
  `id_producto` varchar(10) NOT NULL,
  `Cantidad_Carro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carro_compra`
--

INSERT INTO `carro_compra` (`sesion`, `id_producto`, `Cantidad_Carro`) VALUES
('1', '01', 2),
('1', '02', 5),
('1', '03', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `nombre` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `precio` float(3,3) DEFAULT NULL,
  `descrip` text NOT NULL,
  `id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`nombre`, `marca`, `precio`, `descrip`, `id`) VALUES
('Reloj Plateado', 'Q&Q', 0.999, 'El reloj es muy bonito', '01'),
('Reloj digital', 'Apple', 0.750, 'Este reloj es muy tecnológico', '02'),
('Reloj moderno', 'Q&Q', 0.400, 'Este reloj es muy económico', '03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carro_compra`
--
ALTER TABLE `carro_compra`
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carro_compra`
--
ALTER TABLE `carro_compra`
  ADD CONSTRAINT `carro_compra_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
