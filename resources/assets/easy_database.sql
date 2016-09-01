-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-09-02 02:45:31
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_database`
--

-- --------------------------------------------------------

--
-- 表的结构 `easy_admin`
--

CREATE TABLE IF NOT EXISTS `easy_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_permission` varchar(255) DEFAULT NULL,
  `admin_name` varchar(20) NOT NULL DEFAULT '',
  `admin_password` varchar(255) NOT NULL DEFAULT '',
  `admin_login_time` int(10) NOT NULL DEFAULT '0',
  `admin_login_num` int(11) NOT NULL DEFAULT '0',
  `admin_is_super` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为超级管理员'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `easy_admin`
--

INSERT INTO `easy_admin` (`admin_id`, `admin_permission`, `admin_name`, `admin_password`, `admin_login_time`, `admin_login_num`, `admin_is_super`) VALUES
(1, NULL, 'admin', 'eyJpdiI6Im9yeDk0TklXcnB1UE9NZmkyWkNSbUE9PSIsInZhbHVlIjoiY2J5VFJHanJOZk5KUk5YbEd4bG0yUT09IiwibWFjIjoiOTEyODcxYTIwODQ2MDQ4NTE0YWZmYTU0ODM5OTYyOWJiODExMzljNmI0ZThlMzJjZTZjNzIzZjRhNTMxZDAwNyJ9', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `easy_admin`
--
ALTER TABLE `easy_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `easy_admin`
--
ALTER TABLE `easy_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
