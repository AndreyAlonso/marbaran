-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2019 at 08:30 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marbaranbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
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
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`idCliente`, `apellidoPaterno`, `apellidoMaterno`, `nombres`, `municipio`, `colonia`, `calle`, `numero`, `cp`, `telefono`, `email`, `password`) VALUES
(1, 'Hernandez', 'Alonso', 'Andrey', 'San Luis Potosi', 'Jardines del Sur', 'Amatista', 1518, 78399, 2147483647, 'andrey_hz@outlook.com', '1234'),
(2, 'Hernandez', 'Hernandez', 'Paulina', 'San Luis Potosi', 'Jardines del Sur', 'Amatista 1518', 1518, 78399, 1234556, 'hec_boy@hotmail.com', '1010'),
(6, 'para', 'siempre', 'Xavo', 'Soledad', 'Himno Nacional', 'Mozart', 12334545, 110291, 2147483647, 'qwerty@gmail.com', '1120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
