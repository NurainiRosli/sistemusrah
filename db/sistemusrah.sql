-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 09:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemusrah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `ausername` varchar(200) NOT NULL,
  `apassword` varchar(200) NOT NULL,
  `emel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `aname`, `ausername`, `apassword`, `emel`) VALUES
(1, 'SUHAILA ', 'admin1', 'admin1', 'admin1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitator`
--

CREATE TABLE `fasilitator` (
  `idFasi` int(11) NOT NULL,
  `fnama` varchar(200) NOT NULL,
  `fnoMatrik` varchar(200) NOT NULL,
  `noic` varchar(12) NOT NULL,
  `fjabatan` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `fnoTel` varchar(13) NOT NULL,
  `fkelas` varchar(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitator`
--

INSERT INTO `fasilitator` (`idFasi`, `fnama`, `fnoMatrik`, `noic`, `fjabatan`, `semester`, `fnoTel`, `fkelas`, `username`, `password`) VALUES
(5, 'AIN', '18DDT17F1888', '010426010556', 'JRKV', '5', '01377252547', 'DDT5A', 'fasi1', 'fasi1');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idKelas` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `namaKelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `idProgram` int(11) NOT NULL,
  `namaProgram` varchar(200) NOT NULL,
  `tarikh` date NOT NULL,
  `masa` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `idPelajar` int(11) NOT NULL,
  `pnama` varchar(200) NOT NULL,
  `pnoMatrik` varchar(12) NOT NULL,
  `pjabatan` varchar(50) NOT NULL,
  `pkelas` varchar(50) NOT NULL,
  `namaFasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `fasilitator`
--
ALTER TABLE `fasilitator`
  ADD PRIMARY KEY (`idFasi`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idKelas`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`idProgram`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idPelajar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fasilitator`
--
ALTER TABLE `fasilitator`
  MODIFY `idFasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idKelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `idProgram` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `idPelajar` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
