-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-11-30 13:55
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
-- 테이블 구조 `kcc_board`
--

CREATE TABLE `kcc_board` (
  `idx` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `hit` int(11) NOT NULL,
  `file_name` text,
  `file_location` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `kcc_board`
--

INSERT INTO `kcc_board` (`idx`, `title`, `content`, `name`, `date`, `hit`, `file_name`, `file_location`) VALUES
(1, 'aa', 'yhgfd', 'a', '2016-11-30', 57, NULL, NULL),
(2, '빼에에에에에에에엑', '올ㅋ<br />\r\n<br />\r\n올ㅋ', '익명', '2016-11-30', 20, '20161130-ade2a753de133e1261e07db0ee153bec.png', 'fup/'),
(3, 'TT', '아무거나 걸쳐도 아름다워<br />\r\n<br />\r\n거울속 단둘이서 하는 패션 쇼! 쇼!', '트와이스', '2016-11-30', 1, '20161130-0731d340887fdeac35087b6839191d64.jpg', 'fup/'),
(4, 'ㅇㅇ', '너무해<br />\r\n<br />\r\n너무해', 'ㅇㅇ', '2016-11-30', 2, '20161130-.jpg', 'fup/'),
(7, '트와이스', '이미 난 다컷다고 생각하는데<br />\r\n<br />\r\n어쩌면 내맘인데 왜<br />\r\n<br />\r\n내맘대로 할수 없는건데', '원스', '2016-11-30', 4, '20161130-430858_250016_5611.jpg.jpg', 'fup/'),
(8, 'ㅁㅇㅇ', 'ㅇㅁㅇㅁㅇ<br />\r\n<br />\r\nㄴㅇ호ㅜㅇ리', 'ㅇㅁㅇㅇ', '2016-11-30', 9, '20161130-3064187941_645caca7_1.jpg.jpg', 'fup/'),
(9, 'ㄹㅇ', 'ㅓㅗㅎㄹㅇㄴ<br />\r\nㅓㅗㅎㄹㅊㅌㅁㅋ', 'ㅗㅎㄹㅇㄴ', '2016-11-30', 1, NULL, NULL),
(10, 'ㅗㅎㄹㅇㄴ', 'ㅎㄹㅇㄴ', 'ㅎㄹㅇㄴ', '2016-11-30', 1, '20161130-2_805.jpg.jpg', 'fup/'),
(11, '양기봉좋다', '호로로로로롤', 'ㅎㄹㅇㄴ', '2016-11-30', 6, '20161130-1.jpg.jpg', 'fup/');

-- --------------------------------------------------------

--
-- 테이블 구조 `kcc_member`
--

CREATE TABLE `kcc_member` (
  `idx` int(11) NOT NULL,
  `korname` varchar(100) NOT NULL,
  `enname` varchar(100) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `cellphone` varchar(100) NOT NULL,
  `sms` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `dm` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `company_phone` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `marry` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `kcc_member`
--

INSERT INTO `kcc_member` (`idx`, `korname`, `enname`, `birth`, `id`, `pw`, `phone`, `cellphone`, `sms`, `email`, `home_address`, `dm`, `company_name`, `job`, `position`, `company_address`, `company_phone`, `fax`, `marry`) VALUES
(1, 'a', 'a', '190011', 'a', 'a', '02-4242-4242', '010-4242-7577', 'y', 'gr@ghrd.fds', '05239서울 강동구 고덕로 19-10 (암사동)af', 'home', 'hdf', 'hdrffr', 'er', '07278서울 영등포구 양평동2가 1-474', '010-6534-7564', '010-5353-6464', '미혼'),
(2, 'ㅁㅇㄴㅁㄹ', 'ㄻㄴㄻㄴ', '190011', '543', '5432', '02-6543-6543', '010-4563-5436', 'y', 'faw@faf.df', '17950경기 평택시 포승읍 2함대길 40 (원정리, 해군원정아파트)ffaegds', 'company', 'sdvds', 'vsdvsdvb', 'fsf', '48211부산 수영구 과정로 3 (망미동)f64542', '010-654-654', '010-654-7654', '미혼');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `kcc_board`
--
ALTER TABLE `kcc_board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `kcc_member`
--
ALTER TABLE `kcc_member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `kcc_board`
--
ALTER TABLE `kcc_board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 테이블의 AUTO_INCREMENT `kcc_member`
--
ALTER TABLE `kcc_member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
