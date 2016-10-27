-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-27 04:36
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

-- --------------------------------------------------------

--
-- 테이블 구조 `notice`
--

CREATE TABLE `notice` (
  `idx` int(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` varchar(100) NOT NULL,
  `hit` int(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `notice`
--

INSERT INTO `notice` (`idx`, `title`, `content`, `hit`, `date`) VALUES
(2, '김형준', '김형준 105kg 일수도 있고 더 많이 나갈수도 있습니다.', 5546, '2016-10-27');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `notice`
--
ALTER TABLE `notice`
  MODIFY `idx` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
