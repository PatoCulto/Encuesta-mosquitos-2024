-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 18:25:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mosquitos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE `casas` (
  `IdCasa` tinyint(3) NOT NULL,
  `barrio` text NOT NULL,
  `chacras` text NOT NULL,
  `sector` text NOT NULL,
  `calle` text NOT NULL,
  `numCalle` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`IdCasa`, `barrio`, `chacras`, `sector`, `calle`, `numCalle`) VALUES
(0, 'None', 'None', 'None', 'None', 0),
(1, 'barrio123', 'cahcra123', 'Este', 'chipum', 115),
(2, 'cabello', '115', 'Oeste', 'zapata', 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casaxhabitacionesxtcontenedor`
--

CREATE TABLE `casaxhabitacionesxtcontenedor` (
  `IdCasa` tinyint(3) NOT NULL,
  `IdHabitacion` tinyint(3) NOT NULL,
  `IdContenedor` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_usuarios`
--

CREATE TABLE `categorias_usuarios` (
  `cod_categoria` int(4) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias_usuarios`
--

INSERT INTO `categorias_usuarios` (`cod_categoria`, `nombre`) VALUES
(1, 'Habitante'),
(2, 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `IdHabitacion` tinyint(3) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`IdHabitacion`, `nombre`) VALUES
(1, 'cuarto'),
(2, 'baño'),
(3, 'Sala Principal'),
(4, 'cocina'),
(5, 'garaje'),
(6, 'patio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `IdPersona` tinyint(3) NOT NULL,
  `nombre` text NOT NULL,
  `apelido` text NOT NULL,
  `DNI` int(8) NOT NULL,
  `IdCasa` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`IdPersona`, `nombre`, `apelido`, `DNI`, `IdCasa`) VALUES
(1, 'pablito', 'clavito', 12345678, 1),
(2, 'joui', 'jouki', 87654321, 2),
(3, 'Arapino', 'Arapino', 12345678, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocontenedores`
--

CREATE TABLE `tipocontenedores` (
  `IdContenedor` tinyint(2) NOT NULL,
  `nombre` text NOT NULL,
  `total` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipocontenedores`
--

INSERT INTO `tipocontenedores` (`IdContenedor`, `nombre`, `total`) VALUES
(1, 'balde', 0),
(2, 'cobertor', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(4) NOT NULL,
  `alias` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `DNI` int(8) NOT NULL,
  `cod_categoria` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `alias`, `nombre`, `apellido`, `DNI`, `cod_categoria`) VALUES
(1, 'pescoba', 'Pablo', 'Escoba', 12345678, 1),
(2, 'Zapata', 'Juan Karolos', 'Zapatilla', 12354678, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`IdCasa`);

--
-- Indices de la tabla `casaxhabitacionesxtcontenedor`
--
ALTER TABLE `casaxhabitacionesxtcontenedor`
  ADD PRIMARY KEY (`IdCasa`,`IdHabitacion`,`IdContenedor`),
  ADD KEY `IdHabitacion` (`IdHabitacion`),
  ADD KEY `IdContenedor` (`IdContenedor`);

--
-- Indices de la tabla `categorias_usuarios`
--
ALTER TABLE `categorias_usuarios`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`IdHabitacion`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`IdPersona`),
  ADD KEY `IdCasa` (`IdCasa`);

--
-- Indices de la tabla `tipocontenedores`
--
ALTER TABLE `tipocontenedores`
  ADD PRIMARY KEY (`IdContenedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `cod_categoria` (`cod_categoria`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casaxhabitacionesxtcontenedor`
--
ALTER TABLE `casaxhabitacionesxtcontenedor`
  ADD CONSTRAINT `casaxhabitacionesxtcontenedor_ibfk_1` FOREIGN KEY (`IdCasa`) REFERENCES `casas` (`IdCasa`),
  ADD CONSTRAINT `casaxhabitacionesxtcontenedor_ibfk_2` FOREIGN KEY (`IdHabitacion`) REFERENCES `habitaciones` (`IdHabitacion`),
  ADD CONSTRAINT `casaxhabitacionesxtcontenedor_ibfk_3` FOREIGN KEY (`IdContenedor`) REFERENCES `tipocontenedores` (`IdContenedor`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`IdCasa`) REFERENCES `casas` (`IdCasa`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cod_categoria`) REFERENCES `categorias_usuarios` (`cod_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
