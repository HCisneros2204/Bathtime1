-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2021 a las 19:40:41
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bathtime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `Id_Auto` int(11) NOT NULL,
  `Modelo` varchar(60) NOT NULL,
  `Marca` varchar(60) NOT NULL,
  `Color` varchar(60) NOT NULL,
  `Matricula` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogoservicios`
--

CREATE TABLE `catalogoservicios` (
  `Id_servicio` int(11) NOT NULL,
  `NombreServicio` varchar(80) NOT NULL,
  `Costo` int(11) NOT NULL,
  `Tiempo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_Cliente` int(11) NOT NULL,
  `NombreCliente` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Comportamiento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `ID` int(11) NOT NULL,
  `Id_venta` int(11) NOT NULL,
  `ID_Servicio` int(11) NOT NULL,
  `Precio_S` decimal(60,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `ID_reporte` int(11) NOT NULL,
  `FechaReporte` int(11) NOT NULL,
  `Archivo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id_Rol` int(11) NOT NULL,
  `TypeRol` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `Id_Sucursal` int(11) NOT NULL,
  `NombreSucursal` varchar(60) NOT NULL,
  `Direccion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tableroespera`
--

CREATE TABLE `tableroespera` (
  `ID_tablero` int(11) NOT NULL,
  `Id_Sucursal` int(11) NOT NULL,
  `Direccion` varchar(60) NOT NULL,
  `totalTiempo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tticket`
--

CREATE TABLE `tticket` (
  `Folio` int(11) NOT NULL,
  `ID_Nombre` int(11) NOT NULL,
  `ID_Auto` int(11) NOT NULL,
  `Iva` int(11) NOT NULL,
  `Subtotal` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `TiempoTotal` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`Id_Auto`);

--
-- Indices de la tabla `catalogoservicios`
--
ALTER TABLE `catalogoservicios`
  ADD PRIMARY KEY (`Id_servicio`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Id_venta` (`Id_venta`),
  ADD KEY `ID_Servicio` (`ID_Servicio`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`ID_reporte`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id_Rol`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`Id_Sucursal`);

--
-- Indices de la tabla `tableroespera`
--
ALTER TABLE `tableroespera`
  ADD PRIMARY KEY (`ID_tablero`),
  ADD KEY `Id_Sucursal` (`Id_Sucursal`);

--
-- Indices de la tabla `tticket`
--
ALTER TABLE `tticket`
  ADD PRIMARY KEY (`Folio`),
  ADD UNIQUE KEY `ID_Auto` (`ID_Auto`),
  ADD KEY `ID_Nombre` (`ID_Nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogoservicios`
--
ALTER TABLE `catalogoservicios`
  MODIFY `Id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `ID_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Id_Rol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tableroespera`
--
ALTER TABLE `tableroespera`
  MODIFY `ID_tablero` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `Servicios` FOREIGN KEY (`ID_Servicio`) REFERENCES `catalogoservicios` (`Id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tableroespera`
--
ALTER TABLE `tableroespera`
  ADD CONSTRAINT `Sucursales` FOREIGN KEY (`Id_Sucursal`) REFERENCES `sucursal` (`Id_Sucursal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tticket`
--
ALTER TABLE `tticket`
  ADD CONSTRAINT `Auto` FOREIGN KEY (`ID_Auto`) REFERENCES `auto` (`Id_Auto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cliente` FOREIGN KEY (`ID_Nombre`) REFERENCES `cliente` (`Id_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Ticket` FOREIGN KEY (`Folio`) REFERENCES `detalle_venta` (`Id_venta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TiempoTotal` FOREIGN KEY (`Folio`) REFERENCES `tableroespera` (`ID_tablero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
