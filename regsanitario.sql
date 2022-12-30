-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2022 a las 08:06:02
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `regsanitario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elaboracion`
--

CREATE TABLE `elaboracion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `elaboracion` varchar(20) NOT NULL,
  `caducidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `elaboracion`
--

INSERT INTO `elaboracion` (`id`, `nombre`, `cantidad`, `elaboracion`, `caducidad`) VALUES
(1, 'palo de nata', 12, '2022-12-29', '2023-01-05'),
(2, 'Petisu de crema', 12, '2022-12-28', '2023-01-05'),
(3, 'san marco yema', 11, '2022-12-29', '2023-01-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `numLote` varchar(15) NOT NULL,
  `compra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `caducidad` date NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `visible` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `cantidad`, `numLote`, `compra`, `caducidad`, `id_proveedor`, `visible`) VALUES
(1, 'Nata', 0, '123', '2022-12-29 07:59:54', '2022-12-23', 2, 0),
(2, 'Leche', 0, 'asf', '2022-12-29 07:59:50', '2022-12-26', 2, 0),
(3, 'Biscocho', 0, '12351234', '2022-12-29 07:59:52', '2023-01-05', 1, 1),
(4, 'Yema', 3, '235649', '2022-12-29 07:59:57', '2023-01-08', 1, 1),
(5, 'Yema', 3, '235649', '2022-12-29 07:59:59', '2023-01-08', 1, 1),
(6, 'leche', 4, '1826', '2022-12-29 07:59:48', '2023-08-09', 2, 1),
(7, 'palo', 120, '22222', '2022-12-28 23:00:00', '2023-11-11', 2, 1),
(8, 'nata', 24, '1234', '2022-12-28 23:00:00', '2023-01-08', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `regSan` varchar(10) NOT NULL,
  `tlf` varchar(9) NOT NULL,
  `direccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `regSan`, `tlf`, `direccion`) VALUES
(1, 'La artesana', '', '959322270', 'Avd. Alcalde Narciso Martin Navarro    nº 21'),
(2, 'supeco', 'xxx', '', 'Avd. Alcalde Narciso Martin Navarro    nº1'),
(3, 'payco', '666', '3837', 'sevilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utilizado`
--

CREATE TABLE `utilizado` (
  `id_elaboracion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `utilizado`
--

INSERT INTO `utilizado` (`id_elaboracion`, `id_producto`) VALUES
(1, 7),
(1, 8),
(2, 4),
(2, 7),
(3, 3),
(3, 4),
(3, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `elaboracion`
--
ALTER TABLE `elaboracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `utilizado`
--
ALTER TABLE `utilizado`
  ADD PRIMARY KEY (`id_elaboracion`,`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `elaboracion`
--
ALTER TABLE `elaboracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
