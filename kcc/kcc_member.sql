-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-06 04:27
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kcc`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `kcc_member`
--

CREATE TABLE `kcc_member` (
  `korname` varchar(12) NOT NULL,
  `enname` varchar(12) DEFAULT NULL,
  `birth` int(12) NOT NULL,
  `id` varchar(12) NOT NULL,
  `pw` varchar(12) NOT NULL,
  `phone` int(12) DEFAULT NULL,
  `cellphone` int(12) NOT NULL,
  `sms` varchar(12) NOT NULL,
  `email` int(12) DEFAULT NULL,
  `home_address` varchar(12) NOT NULL,
  `dm` varchar(12) NOT NULL,
  `company_name` varchar(12) NOT NULL,
  `job` varchar(12) DEFAULT NULL,
  `position` varchar(12) NOT NULL,
  `company_address` varchar(12) NOT NULL,
  `company_phone` int(12) NOT NULL,
  `fax` int(12) DEFAULT NULL,
  `marry` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
