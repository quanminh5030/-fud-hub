-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 09:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `rating` int(1) NOT NULL,
  `MyTimeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `rating`, `MyTimeStamp`) VALUES
(1, 'ali baba', 'alibaba@gmail.com', 'Awesome recipe.\r\nMust try!!', 4, '2020-02-19 22:19:08'),
(2, 'quan eric', 'quane@gmail.com', 'Amazed by this.\r\nDefinitely going to make this at home!!!', 5, '2020-02-19 22:19:08'),
(4, 'Francesco', 'Pollucini@hotmail.com', 'I tried this recipe, but it is not that good. Try it at your own risk.', 2, '2020-02-19 22:46:48'),
(5, 'Chacha Chaudhary', 'CC@yahoo.com', 'Delighted by this. Would recommend everyone to try this at least once.', 5, '2020-02-19 22:52:32'),
(7, 'Pink Panther', 'Panther@orkut.com', 'It was okay...Not the best, not the worst.', 3, '2020-02-20 08:39:56'),
(8, 'Alladin', 'MagicCarpet@reddit.com', 'Made it for my friends, and got awesome compliments. Great Recipe!!!!!', 5, '2020-02-26 10:02:01'),
(9, 'Christopher Nolan', 'chrisnolan@outlook.com', 'Had a very bad experience with this. I dont wanna explain.', 2, '2020-03-04 08:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `post-a-recipe`
--

CREATE TABLE `post-a-recipe` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cuisine` text NOT NULL,
  `ingredients` mediumtext NOT NULL,
  `instructions` mediumtext NOT NULL,
  `nandn` mediumtext NOT NULL,
  `image` blob NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `s.no.` int(11) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `groupID` text NOT NULL,
  `Time_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`s.no.`, `fname`, `lname`, `city`, `groupID`, `Time_created`) VALUES
(1, 'Satyam', 'Arora', 'Hämeenlinna', 'BBCAP19', '2020-02-13'),
(2, 'Ale', 'Zanni', 'Espoo', 'BBCAP19', '2020-02-13'),
(3, 'Quan', 'ajsja', 'dflklka', 'BBCAP19', '2020-02-13'),
(4, 'sakljd', 'ajsja', 'dflklka', 'BBCAP19', '2020-02-13'),
(5, 'skaldjlak', 'kdfnbkdn', 'sjcnsk', 'BBCAP21', '2020-02-13'),
(6, 'auuo', 'cedjn', 'ooppp', 'BBCAP20', '2020-02-13'),
(7, 'tyytt', 'asasw', 'nmmm', 'BBCAP19', '2020-02-13'),
(8, 'satyam', '', '', 'BBCAP19', '2020-02-13'),
(9, '', '', '', '', '2020-02-13'),
(10, '', '', '', '', '2020-02-13'),
(11, '', '', '', '', '2020-02-13'),
(12, '', '', '', '', '2020-02-13'),
(13, '', '', '', '', '2020-02-13'),
(14, '', '', '', '', '2020-02-13'),
(15, '', '', '', '', '2020-02-13'),
(16, '', '', '', '', '2020-02-13'),
(17, '', '', '', '', '2020-02-13'),
(19, '', '', '', '', '2020-02-13'),
(20, '', '', '', '', '2020-02-13'),
(21, '', '', '', '', '2020-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `fname`, `lname`, `email`, `username`, `password`, `birthday`, `gender`, `create_at`) VALUES
(1, 'Satyam', 'Arora', 'satyamarora012@gmail.com', 'Admin', '0192023a7bbd73250516f069df18b500', '2001-11-21', 'male', '2020-02-26 08:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` tinyint(4) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `display_name` text NOT NULL,
  `premium_member` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `post-a-recipe`
--
ALTER TABLE `post-a-recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`s.no.`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post-a-recipe`
--
ALTER TABLE `post-a-recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `s.no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` tinyint(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
