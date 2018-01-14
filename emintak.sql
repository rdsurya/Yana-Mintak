-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 07:56 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emintak`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandar`
--

CREATE TABLE `bandar` (
  `g.musang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kadok` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kkrai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pmas` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pgklnkubor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `peringat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tnhmerah` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tumpat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `w.bharu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenispekerjaan1`
--

CREATE TABLE `jenispekerjaan1` (
  `kerajaan1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `swasta1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sendiri1` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenistanah`
--

CREATE TABLE `jenistanah` (
  `tanahkerajaan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanahpengambilan` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `negeri`
--

CREATE TABLE `negeri` (
  `kelantan` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahunrentahan`
--

CREATE TABLE `tahunrentahan` (
  `1957` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1958` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1959` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1960` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1961` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1962` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1963` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1964` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1965` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1966` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1967` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1968` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1969` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1970` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1971` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1972` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1973` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1974` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1975` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1976` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1977` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1978` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1979` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1980` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1981` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1982` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1983` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1984` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1985` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1986` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1987` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1988` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1989` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1990` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1991` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1992` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1993` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1994` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1995` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1996` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1997` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1998` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `1999` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2000` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2001` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2002` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2003` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2004` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2005` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2006` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2007` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2008` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2009` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2010` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2011` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2012` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2013` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2014` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2015` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2016` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `2017` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `tiada` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tarafperkahwinan`
--

CREATE TABLE `tarafperkahwinan` (
  `bujang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `berkahwin` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `duda` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `janda` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `tanaman` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dusun` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `padi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `kelapa sawit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bangunan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `lainlain` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ic1` int(20) NOT NULL,
  `alamat1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `poskod1` int(5) NOT NULL,
  `bandar1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `negeri1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `umur1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tmptlahir1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `jenispekerjaan1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alamattmptkerja1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no.teltmptkerja1` int(15) NOT NULL,
  `pendapatan1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `lainlainpendapatan1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tmptlahirbapa1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tanahlain1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `no.tel1` int(15) NOT NULL,
  `email1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tarafperkahwinan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ic2` int(20) NOT NULL,
  `alamat2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `poskod2` int(5) NOT NULL,
  `bandar2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `negeri2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `umur2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tmptlahir2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `jenispekerjaan2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alamattmptkerja2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no.teltmptkerja2` int(15) NOT NULL,
  `pendapatan2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `lainlainpendapatan2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `tmptlahirbapa2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `no.tel2` int(15) NOT NULL,
  `email2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jenistanah` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tahunrentahan` int(5) NOT NULL,
  `tanaman` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bangunan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tujuan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mukim` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tmptlokasitanah` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `luas` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jauh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no.bah` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sempadan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `utara` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `selatan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `timur` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ic1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
