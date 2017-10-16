-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 08:56 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `authorId` int(3) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `birthYear` year(4) NOT NULL,
  `ssn` int(9) DEFAULT NULL,
  `moreInfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`authorId`, `fName`, `lName`, `birthYear`, `ssn`, `moreInfo`) VALUES
(1, 'Stieg', 'Larsson', 1954, NULL, 'http://stieglarsson.se/'),
(2, 'Henning', 'Mankell', 1948, NULL, 'http://henningmankell.se/'),
(3, 'David', 'Lagercrantz', 1962, NULL, 'http://www.davidlagercrantz.com/'),
(4, 'Dennis', 'Cooper', 1953, 189185795, 'https://en.wikipedia.org/wiki/Dennis_Cooper'),
(5, 'Stephen', 'Amidon', 1959, 158447137, 'https://en.wikipedia.org/wiki/Stephen_Amidon'),
(6, 'David', 'Graeber', 1961, NULL, 'https://en.wikipedia.org/wiki/David_Graeber'),
(7, 'Jeff', 'VanderMeer', 1968, 345565037, 'http://jeffvandermeer.com/');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` varchar(13) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `pagesNo` int(5) NOT NULL,
  `edition` varchar(255) DEFAULT NULL,
  `yearPubl` year(4) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `onLoan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `title`, `author`, `pagesNo`, `edition`, `yearPubl`, `publisher`, `onLoan`) VALUES
('0430553966', 'Ugly Man', 'Dennis Cooper', 272, NULL, 2009, 'Harper Perennial', 0),
('0747583092', 'The Utopia of Rules', 'David Graeber', 272, 'Reprint', 2016, 'Melville House', 0),
('1051253785', 'The Man from Beijing', 'Henning Mankell', 464, NULL, 2008, 'Vintage Crime/Black Lizard', 1),
('2076141471', 'Smothered in Hugs', 'Dennis Cooper', 400, NULL, 2010, 'Harper Perennial', 0),
('5676896203', 'The Fifth Woman', 'Henning Mankell', 437, 'Wallander Series', 1996, 'Vintage Crime/Black Lizard', 1),
('7588047572', 'Security', 'Stephen Amidon', 288, NULL, 2008, 'Penguin Publishing', 0),
('9186904040', 'The Girl Who Played with Fire', 'Stieg Larsson', 689, NULL, 2006, 'Vintage Crime/Black Lizard', 0),
('9771923860', 'The Girl with the Dragon Tattoo', 'Stieg Larsson', 672, NULL, 2005, 'Vintage Crime/Black Lizard', 0),
('9786009494', 'The Girl Who Takes an Eye for an Eye', 'David Lagercrantz', 347, NULL, 2017, 'Vintage Crime/Black Lizard', 0),
('9823309477', 'Annihilation', 'Jeff VanderMeer', 208, NULL, 2014, 'Penguin Publishing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `userpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authorId`),
  ADD UNIQUE KEY `authorId` (`authorId`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authorId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
