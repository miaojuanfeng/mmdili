-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-06-11 22:55:10
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmdili`
--

-- --------------------------------------------------------

--
-- 表的结构 `m_doc`
--

CREATE TABLE `m_doc` (
  `doc_id` int(11) NOT NULL,
  `doc_url` int(11) NOT NULL,
  `doc_title` varchar(255) NOT NULL,
  `doc_content` longtext NOT NULL,
  `doc_user_id` int(11) NOT NULL,
  `doc_ext_id` tinyint(4) NOT NULL,
  `doc_cate_id` tinyint(4) NOT NULL,
  `doc_width` smallint(6) NOT NULL,
  `doc_height` smallint(6) NOT NULL,
  `doc_page_num` tinyint(4) NOT NULL,
  `doc_poly2bitmap` tinyint(4) NOT NULL,
  `doc_dl_forbidden` tinyint(4) NOT NULL,
  `doc_html_view` int(11) NOT NULL,
  `doc_simhash` bigint(20) NOT NULL,
  `doc_modify_date` int(11) NOT NULL,
  `doc_delete_reason` varchar(255) NOT NULL,
  `doc_deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `m_doc_cate`
--

CREATE TABLE `m_doc_cate` (
  `doc_cate_id` tinyint(4) NOT NULL,
  `doc_cate_url` int(11) NOT NULL,
  `doc_cate_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `m_doc_ext`
--

CREATE TABLE `m_doc_ext` (
  `doc_ext_id` tinyint(4) NOT NULL,
  `doc_ext_name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `m_task`
--

CREATE TABLE `m_task` (
  `task_id` int(11) NOT NULL,
  `task_title` varchar(255) NOT NULL,
  `task_type` tinyint(4) NOT NULL,
  `task_create_date` datetime NOT NULL,
  `task_modify_date` datetime NOT NULL,
  `task_deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `m_user`
--

CREATE TABLE `m_user` (
  `user_id` int(11) NOT NULL,
  `user_url` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_name` char(10) NOT NULL,
  `user_modify_date` int(11) NOT NULL,
  `user_deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_doc`
--
ALTER TABLE `m_doc`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doc_url` (`doc_url`);

--
-- Indexes for table `m_doc_cate`
--
ALTER TABLE `m_doc_cate`
  ADD PRIMARY KEY (`doc_cate_id`);

--
-- Indexes for table `m_doc_ext`
--
ALTER TABLE `m_doc_ext`
  ADD PRIMARY KEY (`doc_ext_id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_url` (`user_url`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `m_doc`
--
ALTER TABLE `m_doc`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1293;
--
-- 使用表AUTO_INCREMENT `m_doc_cate`
--
ALTER TABLE `m_doc_cate`
  MODIFY `doc_cate_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `m_doc_ext`
--
ALTER TABLE `m_doc_ext`
  MODIFY `doc_ext_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `m_user`
--
ALTER TABLE `m_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
