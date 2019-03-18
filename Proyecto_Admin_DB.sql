-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-02-2019 a las 17:46:05
-- Versión del servidor: 5.7.25-0ubuntu0.18.04.2
-- Versión de PHP: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Proyecto_Admin_DB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE `Clientes` (
  `ID_Cliente` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefono` int(9) DEFAULT NULL,
  `CIF_NIF` varchar(9) NOT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Provincia` varchar(50) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `CP` int(5) NOT NULL,
  `Fecha_Modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `Clientes` (`ID_Cliente`, `Nombre`, `Email`, `Telefono`, `CIF_NIF`, `Direccion`, `Provincia`, `Localidad`, `CP`, `Fecha_Modificacion`) VALUES
(1, 'Santiago Insegura Rodríguez', 'sinsegurar@gmail.com', 655443322, '47771234J', 'Paseo de los Pinos Verdes, 6', 'Madrid', 'Aranjuez', 28300, '2019-02-19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
