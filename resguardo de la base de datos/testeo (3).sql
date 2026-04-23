-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2023 a las 20:14:01
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testeo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE `casas` (
  `IdCasa` tinyint(3) NOT NULL,
  `direccion` text NOT NULL,
  `barrio` text NOT NULL,
  `chacras` text NOT NULL,
  `IdTipo` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`IdCasa`, `direccion`, `barrio`, `chacras`, `IdTipo`) VALUES
(1, 'av martin fierro', 'las rosas', 'chacra N83', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas_tiposcosas`
--

CREATE TABLE `casas_tiposcosas` (
  `IdCasa` tinyint(3) NOT NULL,
  `IdCosas` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `IdPersona` tinyint(3) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `DNI` int(8) NOT NULL,
  `IdCasa` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`IdPersona`, `nombre`, `apellido`, `DNI`, `IdCasa`) VALUES
(6, 'karol g', 'Giraldo', 88888888, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcosas_thabitaciones`
--

CREATE TABLE `tcosas_thabitaciones` (
  `IdCosas` tinyint(4) NOT NULL,
  `IdTipo` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposcosas`
--

CREATE TABLE `tiposcosas` (
  `IdCosas` tinyint(4) NOT NULL,
  `balde` int(10) NOT NULL,
  `florero` int(10) NOT NULL,
  `vaso` int(10) NOT NULL,
  `jarra` int(10) NOT NULL,
  `botella` int(10) NOT NULL,
  `otro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiposcosas`
--

INSERT INTO `tiposcosas` (`IdCosas`, `balde`, `florero`, `vaso`, `jarra`, `botella`, `otro`) VALUES
(2, 5, 6, 3, 1, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdehabitaciones`
--

CREATE TABLE `tiposdehabitaciones` (
  `IdTipo` tinyint(2) NOT NULL,
  `TipodeHabitacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiposdehabitaciones`
--

INSERT INTO `tiposdehabitaciones` (`IdTipo`, `TipodeHabitacion`) VALUES
(1, 'Baño'),
(2, 'Dormitorio'),
(3, 'Libing'),
(4, 'Cocina'),
(5, 'Patio'),
(6, 'Garaje');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`IdCasa`),
  ADD KEY `IdTipo` (`IdTipo`);

--
-- Indices de la tabla `casas_tiposcosas`
--
ALTER TABLE `casas_tiposcosas`
  ADD PRIMARY KEY (`IdCasa`,`IdCosas`),
  ADD KEY `IdCosas` (`IdCosas`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`IdPersona`),
  ADD KEY `IdCasa` (`IdCasa`);

--
-- Indices de la tabla `tcosas_thabitaciones`
--
ALTER TABLE `tcosas_thabitaciones`
  ADD PRIMARY KEY (`IdCosas`,`IdTipo`),
  ADD KEY `IdTipo` (`IdTipo`);

--
-- Indices de la tabla `tiposcosas`
--
ALTER TABLE `tiposcosas`
  ADD PRIMARY KEY (`IdCosas`);

--
-- Indices de la tabla `tiposdehabitaciones`
--
ALTER TABLE `tiposdehabitaciones`
  ADD PRIMARY KEY (`IdTipo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casas`
--
ALTER TABLE `casas`
  ADD CONSTRAINT `casas_ibfk_1` FOREIGN KEY (`IdCasa`) REFERENCES `persona` (`IdCasa`);

--
-- Filtros para la tabla `casas_tiposcosas`
--
ALTER TABLE `casas_tiposcosas`
  ADD CONSTRAINT `casas_tiposcosas_ibfk_1` FOREIGN KEY (`IdCasa`) REFERENCES `casas` (`IdCasa`),
  ADD CONSTRAINT `casas_tiposcosas_ibfk_2` FOREIGN KEY (`IdCosas`) REFERENCES `tiposcosas` (`IdCosas`);

--
-- Filtros para la tabla `tcosas_thabitaciones`
--
ALTER TABLE `tcosas_thabitaciones`
  ADD CONSTRAINT `tcosas_thabitaciones_ibfk_2` FOREIGN KEY (`IdCosas`) REFERENCES `tiposcosas` (`IdCosas`),
  ADD CONSTRAINT `tcosas_thabitaciones_ibfk_3` FOREIGN KEY (`IdTipo`) REFERENCES `tiposdehabitaciones` (`IdTipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
