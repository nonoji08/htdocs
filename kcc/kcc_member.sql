-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-14 02:34
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

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
  `korname` varchar(30) NOT NULL,
  `enname` varchar(30) DEFAULT NULL,
  `birth` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `pw` varchar(30) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `cellphone` varchar(30) NOT NULL,
  `sms` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `home_address` varchar(100) NOT NULL,
  `dm` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `job` varchar(30) DEFAULT NULL,
  `position` varchar(30) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `company_phone` varchar(30) NOT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `marry` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `kcc_member`
--

INSERT INTO `kcc_member` (`korname`, `enname`, `birth`, `id`, `pw`, `phone`, `cellphone`, `sms`, `email`, `home_address`, `dm`, `company_name`, `job`, `position`, `company_address`, `company_phone`, `fax`, `marry`) VALUES
('', '', '190011', '', '', '02', '010', 'y', '', '', 'home', '', '', '', '', '010dsddddsd', '010', '미혼');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
