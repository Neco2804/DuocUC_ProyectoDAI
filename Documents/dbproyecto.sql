-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2019 a las 04:27:03
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `RUT` int(11) NOT NULL COMMENT 'RUN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commune`
--

CREATE TABLE `commune` (
  `COD_COMMUNE` int(2) NOT NULL COMMENT 'Codigo de la comuna',
  `COD_NAME_COMM` varchar(225) NOT NULL COMMENT 'Nombre de la comuna'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parameter_orders`
--

CREATE TABLE `parameter_orders` (
  `COD_ORDER` int(1) NOT NULL COMMENT 'Codigo de orden',
  `STATUS_NAME` varchar(225) NOT NULL COMMENT 'Estado de la orden'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `professions`
--

CREATE TABLE `professions` (
  `COD_PROFESSION` int(2) NOT NULL COMMENT 'Codigo de la profesión',
  `NAME_PROFESSION` varchar(225) NOT NULL COMMENT 'Nombre de la profesión'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `RUT` int(8) NOT NULL COMMENT 'RUN',
  `DV` text NOT NULL COMMENT 'Digito Verificador',
  `NAME` text NOT NULL COMMENT 'Nombre',
  `LAST_NAME` text NOT NULL COMMENT 'Apellido',
  `DIRECTION` text NOT NULL COMMENT 'Direccion',
  `COMMUNE` int(11) NOT NULL COMMENT 'Comuna',
  `EMAIL` text NOT NULL COMMENT 'Correo Electronico',
  `RATING` int(1) NOT NULL COMMENT 'Calificacion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worker`
--

CREATE TABLE `worker` (
  `RUT` int(8) NOT NULL COMMENT 'RUN',
  `COD_PROFESSION` int(2) NOT NULL COMMENT 'Codigo de profesión'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `work_orders`
--

CREATE TABLE `work_orders` (
  `COD_ORDER` int(5) NOT NULL COMMENT 'Codigo de orden',
  `STATE_ORDER` int(1) NOT NULL COMMENT 'Estado de la orden',
  `DATE_ORDER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de orden',
  `CLIENT_RUT` int(8) NOT NULL COMMENT 'RUN del clliente',
  `WORKER_RUT` int(8) NOT NULL COMMENT 'RUN del trabajador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`RUT`);

--
-- Indices de la tabla `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`COD_COMMUNE`);

--
-- Indices de la tabla `parameter_orders`
--
ALTER TABLE `parameter_orders`
  ADD PRIMARY KEY (`COD_ORDER`);

--
-- Indices de la tabla `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`COD_PROFESSION`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`RUT`),
  ADD UNIQUE KEY `COMMUNE_2` (`COMMUNE`),
  ADD KEY `COMMUNE` (`COMMUNE`),
  ADD KEY `RATING` (`RATING`);

--
-- Indices de la tabla `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`RUT`),
  ADD KEY `COD_PROFESSION` (`COD_PROFESSION`);

--
-- Indices de la tabla `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`COD_ORDER`),
  ADD KEY `STATE_ORDER` (`STATE_ORDER`),
  ADD KEY `CLIENT_RUT` (`CLIENT_RUT`),
  ADD KEY `WORKER_RUT` (`WORKER_RUT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
