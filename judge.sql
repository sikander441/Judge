-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2017 at 07:35 PM
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
-- Database: `judge`
--

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `teamname` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`teamname`, `pid`, `score`) VALUES
('sikander441', 6, 30),
('sikander441', 10, 50),
('test_user', 6, 30),
('test_user', 9, 140),
('test_user', 10, 50),
('sikander441', 9, 140),
('sikander441', 7, 70),
('test_user', 7, 70),
('asd', 6, 30),
('admin', 6, 0),
('aditya_tyagi', 6, 30),
('aditya_tyagi', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `teamname` varchar(25) NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`teamname`, `score`) VALUES
('aditya_tyagi', 30),
('sikander441', 360),
('test_user', 290);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `pid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `statement` text,
  `score` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `test_cases` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`pid`, `title`, `statement`, `score`, `description`, `test_cases`) VALUES
(6, 'A Very Big Sum', 'You are given an array of integers of size N. You need to print the sum of the elements in the array, keeping in mind that some of those integers may be quite large.<br />\r\n<br />\r\n<b>Input format</b><br />\r\nThe first line of the input consists of an integer . The next line contains space-separated integers contained in the array.<br />\r\n<br />\r\n<b>Output Format</b><br />\r\nPrint a single value equal to the sum of the elements in the array.<br />\r\n<br />\r\n<b>Constraints</b><br />\r\n<br />\r\n1 0<=A[i]<=10^7', 30, 'Easy', 3),
(7, 'Palindrome index', 'Given a string, , of lowercase letters, determine the index of the character whose removal will make  a palindrome. If  is already a palindrome or no such character exists, then print . There will always be a valid solution, and any correct answer is acceptable. For example, if  \"bcbc\", we can either remove \"b\" at index  or \"c\" at index .<br />\r\n<br />\r\n<b>Input Format</b><br />\r\n<br />\r\nThe first line contains an integer, , denoting the number of test cases. <br />\r\nEach line  of the  subsequent lines (where ) describes a test case in the form of a single string, .<br />\r\n<br />\r\n<b>Constraints</b><br />\r\n<br />\r\nAll characters are lowercase English letters.<br />\r\nOutput Format<br />\r\n<br />\r\nPrint an integer denoting the zero-indexed position of the character that makes  not a palindrome; if  is already a palindrome or no such character exists, print .<br />\r\n<br />\r\n<b>Sample Input</b><br />\r\n<br />\r\n3<br />\r\naaab<br />\r\nbaa<br />\r\naaa<br />\r\n<b>Sample Output</b><br />\r\n<br />\r\n3<br />\r\n0<br />\r\n-1<br />\r\n<b>Explanation</b><br />\r\n<br />\r\nTest Case 1: \"aaab\" <br />\r\nRemoving \"b\" at index  results in a palindrome, so we print  on a new line.<br />\r\n<br />\r\nTest Case 2: \"baa\" <br />\r\nRemoving \"b\" at index  results in a palindrome, so we print  on a new line.<br />\r\n<br />\r\nTest Case 3: \"aaa\" <br />\r\nThis string is already a palindrome, so we print ; however, , , and  are also all acceptable answers, as the string will still be a palindrome if any one of the characters at those indices are removed.<br />\r\n<br />\r\n<b>Note:</b> The custom checker logic for this challenge is available here.', 140, 'easy', 14),
(9, 'Choclates', 'ily has a chocolate bar consisting of a row of  squares where each square has an integer written on it. She wants to share it with Ron for his birthday, which falls on month  and day . Lily wants to give Ron a piece of chocolate only if it contains  consecutive squares whose integers sum to .<br />\r\n<br />\r\nGiven , , and the sequence of integers written on each square of Lilys chocolate bar, how many different ways can Lily break off a piece of chocolate to give to Ron?<br />\r\n<br />\r\nFor example, if ,  and the chocolate bar contains  rows of squares with the integers written on them from left to right, the following diagram shows two ways to break off a piece:<br />\r\n<br />\r\n', 140, 'easy', 14),
(10, 'Weighted Uniform Strings', 'A weighted string is a string of lowercase English letters where each letter has a weight in the inclusive range from to , defined below:<br />\r\nWe define the following terms:<br />\r\n<br />\r\nThe weight of a string is the sum of the weights of all the strings characters. For example:<br />\r\n uniform string is a string consisting of a single character repeated zero or more times. For example, ccc and a are uniform strings, but bcb and cd are not (i.e., they consist of more than one distinct character).<br />\r\nGiven a string, , let  be the set of weights for all possible uniform substrings (contiguous) of string . You have to answer  queries, where each query  consists of a single integer, . For each query, print Yes on a new line if ; otherwise, print No instead.<br />\r\n<br />\r\nNote: The  symbol denotes that  is an element of set .', 50, 'HARD', 5);

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `teamname` varchar(25) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `code` varchar(2555) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`teamname`, `pid`, `code`, `time_stamp`) VALUES
('sikander441', 6, 'uploads/sikander441/6/sikander441_07-12-14_problem.cpp', '2017-12-18 18:37:14'),
('sikander441', 6, 'uploads/sikander441/6/sikander441_07-12-32_test.cpp', '2017-12-18 18:37:32'),
('sikander441', 7, 'uploads/sikander441/7/sikander441_12-12-36_problem_2.cpp', '2017-12-19 11:49:36'),
('sikander441', 7, 'uploads/sikander441/7/sikander441_12-12-20.cpp', '2017-12-19 11:50:20'),
('sikander441', 6, 'uploads/sikander441/6/sikander441_12-12-34.cpp', '2017-12-19 11:50:34'),
('sikander441', 6, 'uploads/sikander441/6/sikander441_12-12-46_test.cpp', '2017-12-19 11:50:46'),
('admin', 6, 'uploads/admin/6/admin_05-12-47.cpp', '2017-12-19 16:51:47'),
('sikander441', 6, 'uploads/sikander441/6/sikander441_05-12-26.cpp', '2017-12-19 16:52:26'),
('aditya_tyagi', 6, 'uploads/aditya_tyagi/6/aditya_tyagi_05-12-20.cpp', '2017-12-19 16:54:20'),
('aditya_tyagi', 9, 'uploads/aditya_tyagi/9/aditya_tyagi_05-12-46.cpp', '2017-12-19 16:54:46'),
('aditya_tyagi', 6, 'uploads/aditya_tyagi/6/aditya_tyagi_05-12-58.cpp', '2017-12-19 16:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `teamname` varchar(25) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user1` varchar(25) DEFAULT NULL,
  `user2` varchar(25) DEFAULT NULL,
  `email1` varchar(25) DEFAULT NULL,
  `email2` varchar(25) DEFAULT NULL,
  `type` varchar(255) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`teamname`, `password`, `user1`, `user2`, `email1`, `email2`, `type`) VALUES
('aditya_tyagi', '81dc9bdb52d04dc20036dbd8313ed055', 'Aditya singh', 'dasdas', 'aditya@gmail.com', 'daSD@gmadoas.com', 'user'),
('admin', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, NULL, 'admin'),
('sikander441', 'ce4dd986b74f00e363a12d2d15fa0f0b', 'Sikander Singh', 'Sakshit Tiwari', 'sikander441@gmail.com', 'sakshi13@gmail.com', 'user'),
('test_user', 'ce4dd986b74f00e363a12d2d15fa0f0b', 'Sikander Singh', 'sakshi tiwari', 'sikander441@gmail.com', 'sakshi13@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`teamname`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`teamname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
