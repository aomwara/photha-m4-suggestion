-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2024 at 02:46 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `pp`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
    `username` int(5) NOT NULL, `password` varchar(10) NOT NULL, `name` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registerr`
--

CREATE TABLE `registerr` (
    `user_id` int(5) NOT NULL, `username` varchar(10) NOT NULL, `password` varchar(10) NOT NULL, `name` varchar(15) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Dumping data for table `registerr`
--

INSERT INTO
    `registerr` (
        `user_id`, `username`, `password`, `name`
    )
VALUES (1, 'admin', '1234', 'hello'),
    (2, '34854', '1234', 'ppp'),
    (3, 'tt', '1234', 'punch'),
    (4, 'rr', '1234', 'punch'),
    (5, 'photha', '1234', 'punch'),
    (6, 'pp', '1234', 'photha'),
    (7, 'ff', '1234', 'punch'),
    (8, 'pu', '1234', 'punch');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assessment`
--

CREATE TABLE `tbl_assessment` (
    `user_id` int(5) NOT NULL, `score1` int(1) NOT NULL DEFAULT '0', `score2` int(1) NOT NULL DEFAULT '0', `score3` int(1) NOT NULL DEFAULT '0', `score4` int(1) NOT NULL DEFAULT '0', `score5` int(1) NOT NULL DEFAULT '0', `dateCreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Dumping data for table `tbl_assessment`
--

INSERT INTO
    `tbl_assessment` (
        `user_id`, `score1`, `score2`, `score3`, `score4`, `score5`, `dateCreate`
    )
VALUES (
        1, 36, 0, 0, 0, 0, '2024-02-06 14:21:03'
    ),
    (
        2, 36, 0, 0, 0, 0, '2024-02-06 14:40:16'
    );

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
    `user_id` int(5) NOT NULL, `username` varchar(15) NOT NULL, `password` varchar(10) NOT NULL, `name` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Dumping data for table `user`
--

INSERT INTO
    `user` (
        `user_id`, `username`, `password`, `name`
    )
VALUES (1, 'admin', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
    `user_id` int(5) NOT NULL, `username` varchar(10) NOT NULL, `password` varchar(10) NOT NULL, `name` varchar(10) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register` ADD PRIMARY KEY (`username`);

--
-- Indexes for table `registerr`
--
ALTER TABLE `registerr` ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_assessment`
--
ALTER TABLE `tbl_assessment` ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user` ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userr`
--
ALTER TABLE `userr` ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registerr`
--
ALTER TABLE `registerr`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 9;
--
-- AUTO_INCREMENT for table `tbl_assessment`
--
ALTER TABLE `tbl_assessment`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;
--
-- AUTO_INCREMENT for table `userr`
--
ALTER TABLE `userr`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_assessment`
--
ALTER TABLE `tbl_assessment`
ADD CONSTRAINT `tbl_assessment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registerr` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;