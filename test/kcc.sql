-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-11-04 03:39
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
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(3) NOT NULL,
  `writer` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `changedFilename` text,
  `originalFilename` text,
  `fileLocation` text,
  `date` date NOT NULL,
  `hits` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `writer`, `subject`, `content`, `changedFilename`, `originalFilename`, `fileLocation`, `date`, `hits`) VALUES
(2, '가나다', '가나다', '가나다', NULL, '', NULL, '2016-11-04', 3),
(3, 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', NULL, '', NULL, '2016-11-04', 3),
(4, 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', NULL, '', NULL, '2016-11-04', 0),
(5, 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', NULL, '', NULL, '2016-11-04', 0),
(6, 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', NULL, '', NULL, '2016-11-04', 2),
(7, '44', '44444', '44444', NULL, 'Penguins.jpg', 'fup/20161104-7a3be637563bda97b42f76f3b039b274/Penguins.jpg', '2016-11-04', 6),
(8, 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', 'ㅁㄴㅇㄹ', NULL, '한글이름.WAV', 'fup/20161104-fff0e33382337e94866d77b306aa69f8/한글이름.WAV', '2016-11-04', 2),
(10, 'asdf', 'adsf', 'asdf', NULL, 'Brackets.exe', 'fup/', '2016-11-04', 2),
(11, 'asdf', 'asdf', 'asdf', NULL, 'snapshot_blob.bin', 'fup/', '2016-11-04', 9),
(12, 'asdf', 'adsf', 'asdf', NULL, 'Chrysanthemum.jpg', 'fup/', '2016-11-04', 3),
(13, 'awa', 'waa', 'asdfasdf', NULL, 'Hydrangeas.jpg', 'fup/20161104-50e3e8c290b20d870664103058cbd4ab/Hydrangeas.jpg', '2016-11-04', 4),
(14, 'asdf', 'adf', 'asdf', NULL, NULL, NULL, '2016-11-04', 1),
(15, 'asdf', 'asdf', 'asdf', NULL, 'Tulips.jpg', 'fup/20161104-fe54b2392154c3912c2fdf2a8608522eTulips.jpg', '2016-11-04', 1),
(16, 'asdf', 'asdf', 'asdf', NULL, 'Hydrangeas.jpg', 'fup/20161104-a128daa65461f8c2aea5db874879ee87Hydrangeas.jpg', '2016-11-04', 1),
(17, 'asdf', 'asdf', 'asdf', NULL, 'Koala.jpg', 'fup/20161104-ec2f542cfbac6248f9984c6ff07690d8Koala.jpg', '2016-11-04', 2),
(18, 'asdfasd', 'asdfsadf', 'asdf', NULL, 'Lighthouse.jpg', 'fup/20161104-57a4a5b39e5f90acf2beacbcbf3694c2Lighthouse.jpg', '2016-11-04', 1),
(19, 'asdf', 'asdf', 'asdf', NULL, 'Jellyfish.jpg', '/fup/20161104-7cb437d144a9ea791e7d9d5d4e30fce0Jellyfish.jpg', '2016-11-04', 1),
(20, 'asdf', 'asd', 'fasdf', NULL, 'Penguins.jpg', 'fup/20161104-e4bcdc9035c66697bc12bc847e6c574d/Penguins.jpg', '2016-11-04', 2),
(21, 'asdf', 'asdf', 'asdf', NULL, 'Desert.jpg', 'fup/20161104-3656e969868b1fb760880e1df0d7036e/Desert.jpg', '2016-11-04', 0),
(22, 'asdf', 'asdf', 'sadf', NULL, 'Lighthouse.jpg', 'fup/20161104-7a7b2e299c1e6f935b493c9216d34e6a/Lighthouse.jpg', '2016-11-04', 0),
(23, 'asdf', 'ad', 'asdf', '20161104-e572fba61233bfe4575a3d4e2c3fe5ff.jpg', 'Tulips.jpg', 'C:/xampp/htdocs\\fup\\', '2016-11-04', 1),
(24, 'asdf', 'asdf', 'asdf', '20161104-f1a15d1597715d19664f96f11c9e2e0a.jpg', 'Tulips.jpg', 'fup/', '2016-11-04', 3),
(25, 'ㅁㄴㅇㄹ', 'aㄴㅇㄹ', 'ㅁㄴㅇㄹ', '20161104-f61b77710e9f646723ff19eeaaa1ecc9.jpg', 'Penguins.jpg', 'fup/', '2016-11-04', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `kName` varchar(20) NOT NULL,
  `eName` varchar(20) DEFAULT NULL,
  `birth` date NOT NULL,
  `id` varchar(30) NOT NULL,
  `pw` varchar(36) NOT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `cellphone` varchar(14) NOT NULL,
  `sms` tinyint(1) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `housePostcode` varchar(5) NOT NULL,
  `houseAddress` varchar(300) NOT NULL,
  `DM` tinyint(1) NOT NULL,
  `officeName` varchar(20) NOT NULL,
  `jobFamily` varchar(20) DEFAULT NULL,
  `jobPosition` varchar(20) NOT NULL,
  `officePostcode` varchar(5) NOT NULL,
  `officeAddress` varchar(300) NOT NULL,
  `officePhone` varchar(14) DEFAULT NULL,
  `faxNumber` varchar(14) DEFAULT NULL,
  `chkMarry` tinyint(1) DEFAULT NULL,
  `weddingDay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `kName`, `eName`, `birth`, `id`, `pw`, `phone`, `cellphone`, `sms`, `email`, `housePostcode`, `houseAddress`, `DM`, `officeName`, `jobFamily`, `jobPosition`, `officePostcode`, `officeAddress`, `officePhone`, `faxNumber`, `chkMarry`, `weddingDay`) VALUES
(1, 'dsdtg', '', '0000-00-00', 'jghhf', 'aaaas', '', '010-4354-6467', 0, '', '6027', '서울 강남구 압구정로 102 (신사동, 형지제2빌딩)2cmd', 0, 'sm', '', 'a/s', '7630', '서울 강서구 마곡중앙로 11 (내발산동, 공원관리사무실)a23', '', '', 1, '2011-06-05'),
(2, '장숭리', '', '1999-03-07', 'sodas789', 'sodas789', '', '010-3334-5942', 0, '', '04934', '서울 광진구 긴고랑로15길 21 (중곡동, 파인빌15차)2층', 0, '서울디지텍고등학교', '', '2학년', '04346', '서울 용산구 회나무로12길 27 (이태원동, 서울디지텍고등학교)4층', '', '', 1, '2016-10-20'),
(3, '24e1', '4214214', '2016-01-01', '342562', '123123', '022-141-4211', '010-1234-1234', 0, '1232141@nafe.rm', '06339', '서울 강남구 개포로124길 5 (일원동)124124', 0, '124124', '124214', '124124', '01606', '서울 노원구 동일로241길 15 (상계동)42141', '02-214-1241', '021-241-1421', 1, '2016-02-04');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
