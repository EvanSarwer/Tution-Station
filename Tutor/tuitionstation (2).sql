-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 04:10 PM
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
-- Database: `tuitionstation`
--

-- --------------------------------------------------------

--
-- Table structure for table `search_student`
--

CREATE TABLE `search_student` (
  `district` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `class` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `medium` varchar(22) NOT NULL,
  `subject` varchar(22) NOT NULL,
  `day` int(22) NOT NULL,
  `salary` varchar(22) NOT NULL,
  `comment` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_student`
--

INSERT INTO `search_student` (`district`, `area`, `class`, `gender`, `medium`, `subject`, `day`, `salary`, `comment`) VALUES
('Dhaka', 'Mirpur', 'Playpen', 'Male', 'Bangla', 'Art', 4, '1000tk/month', 'abcd'),
('Dhaka', 'Savar', 'playpen', 'Male', 'English', 'oop1', 2, '2000tk/month', ' k'),
('Faridpur', 'tangail area', 'class 3', 'Male', 'English', 'Accounting', 4, '4000tk/month', ' fgjhghfh'),
('Gopalganj', 'Uttara', 'class 2', 'Male', 'Arts', 'oop1', 3, '2000tk/month', ' uu'),
('Faridpur', 'Bashudara Residentia', 'class 2', 'Female', 'English', 'Finance', 3, '4000tk/month', ' y'),
('Faridpur', 'Mirpur', 'playpen', 'Female', 'Arts', 'Admission test', 4, '8000tk/month', ' dkjdsbfhj'),
('Dhaka', 'Bashudara Residentia', 'Higher Secondary', 'Female', 'Bangla', 'Writing', 2, '10,000tk/month', ' EF'),
('kishoreganj', 'Mirpur', 'Admission test', 'Male', 'Bangla', 'Chemistry', 2, '1000tk/month', ' dddd'),
('Gazipur', 'Mirpur', 'Higher Secondary', 'Male', 'Bangla', 'Writing', 2, '8000tk/month', ' ddd'),
('NarayanGanj', 'Mirpur', 'Admission test', 'Male', 'English', 'Admission test', 3, '10,000tk/month', ' fff');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_advertisement`
--

CREATE TABLE `tutor_advertisement` (
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `email` varchar(22) NOT NULL,
  `Extrainfo` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_advertisement`
--

INSERT INTO `tutor_advertisement` (`title`, `name`, `uname`, `id`, `email`, `Extrainfo`) VALUES
('need a tutor for ', 'aaa', 'aaa', 'aaa', 'aaa', 'aa'),
('need a student ', 'rozinaranu', 'ranu34', '101', 'rozinaranu1239@gmail.c', 'night shift\r\nsalary 10');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_table`
--

CREATE TABLE `tutor_table` (
  `name` varchar(20) NOT NULL,
  `email` varchar(12) NOT NULL,
  `adress` varchar(13) NOT NULL,
  `subject` varchar(22) NOT NULL,
  `bm` varchar(22) NOT NULL,
  `day` varchar(22) NOT NULL,
  `salary` varchar(22) NOT NULL,
  `comment` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_table`
--

INSERT INTO `tutor_table` (`name`, `email`, `adress`, `subject`, `bm`, `day`, `salary`, `comment`) VALUES
('fgg', 'gfh', 'gfhgf', 'Bangla', 'Bangla medium', '2', '1000tk/month', 'v'),
('Tanvirvhai', 'tanvir@gmail', 'dhanmondi', 'Bangla', 'Bangla medium', '3', '6000tk/month', 'timeshift morning'),
('minaraju', 'aaaaa', 'nnnn', 'Bangla', 'Bangla medium', '1', '1000tk/month', 'dd'),
('ssssss', 'rozinaranu12', 'kuratoli', 'English', 'Bangla medium', '1', '2000tk/month', 'dff'),
('rozina', 'rozinaranu12', 'kuratoli', 'Bangla', 'Bangla medium', '2', '2000tk/month', 'i am happy'),
('aaaaaa', 'rozinaranu12', 'kuratoli', 'English', 'English medium', '2', '2000tk/month', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `updatetutor`
--

CREATE TABLE `updatetutor` (
  `name` varchar(10) NOT NULL,
  `email` varchar(11) NOT NULL,
  `adress` varchar(11) NOT NULL,
  `Extrainfo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updatetutor`
--

INSERT INTO `updatetutor` (`name`, `email`, `adress`, `Extrainfo`) VALUES
('gh', 'jjhg', 'jhgjj', 'ygtj'),
('sadsas', 'assd', 'sadfe', 'fdsef'),
('ddd', 'eeee', 'dddd', 'mmmm'),
('sdss', 'sad', 'dsas', 'sdaf'),
('aaa', 'sds', 'df', 'few'),
('KHAN ALI', 'KHAN@34GMAI', 'BASHUNDARA', 'CHECK'),
('gh', 'ghrfh', 'jty', 'thjty'),
('ramai', 'rozinaranu1', 'kuratoli', 'fff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutor_advertisement`
--
ALTER TABLE `tutor_advertisement`
  ADD PRIMARY KEY (`uname`,`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
