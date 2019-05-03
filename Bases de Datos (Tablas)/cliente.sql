-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2019 a las 07:31:30
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marbaranbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(4) NOT NULL,
  `apellidoPaterno` varchar(20) NOT NULL,
  `apellidoMaterno` varchar(20) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `calle` varchar(20) NOT NULL,
  `numero` int(4) NOT NULL,
  `cp` int(4) NOT NULL,
  `telefono` int(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tipo` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `apellidoPaterno`, `apellidoMaterno`, `nombres`, `municipio`, `colonia`, `calle`, `numero`, `cp`, `telefono`, `email`, `password`, `tipo`) VALUES
(1, 'Hernandez', 'Alonso', 'Hector Andrey', 'San Luis Potosi', 'Jardines del Sur', 'Amatista', 1518, 78399, 2147483647, 'andrey_hz@outlook.com', 'zaz', 0),
(7, ' dsds', 'dsds', 'Andrey', 'fds', 'k', 'lkl', 22, 21, 432423232, 'ejemplo@ejemplo.com', '222', 1),
(8, 'y', 'adios', 'hola', 'san l', 'dsdad', 'calle', 1, 2021, 0, 'hola@gmail.com', '1234', 0),
(9, 'd', 'Alonso', 'Andrey', '', '', '', 0, 0, 0, 'ulisesgomez@gmail.com', '12', 0),
(10, 'Hernandez', 'Alonso', 'Hector Andrey', 'San Luis Potosi', 'Jardines del Sur', 'Amatista', 1518, 78399, 2147483647, 'andrey_hz@outlook.com', '123', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
