-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220625.0c1859477d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2022 pada 07.57
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-housing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ehousingdata`
--

CREATE TABLE `ehousingdata` (
  `datetime` datetime DEFAULT NULL,
  `voltage` varchar(10) DEFAULT NULL,
  `current` varchar(10) DEFAULT NULL,
  `power` varchar(10) DEFAULT NULL,
  `energy` varchar(10) DEFAULT NULL,
  `frequency` varchar(10) DEFAULT NULL,
  `power_factor` varchar(10) DEFAULT NULL,
  `current_ch1` varchar(10) DEFAULT NULL,
  `current_ch2` varchar(10) DEFAULT NULL,
  `current_ch3` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



