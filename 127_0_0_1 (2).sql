-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 03:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--
CREATE DATABASE IF NOT EXISTS `api` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `api`;

-- --------------------------------------------------------

--
-- Table structure for table `apidata`
--

CREATE TABLE `apidata` (
  `CelebId` int(11) NOT NULL,
  `CelebFName` varchar(50) NOT NULL,
  `CelebLName` varchar(50) NOT NULL,
  `CelebFact` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apidata`
--

INSERT INTO `apidata` (`CelebId`, `CelebFName`, `CelebLName`, `CelebFact`) VALUES
(1, 'Matthew', 'Perry', 'He lost part of his middle finger as a kid'),
(2, 'Elvis', 'Presley', 'He was naturally a blonde'),
(3, 'Denzel', 'Washington', 'The actor dislocated his pinky so many times that his finger occasionally falls out of place when he moves his hand.'),
(4, 'Tim', 'Allen', 'In 1978 he was caught with 1.4 pounds of cocaine in an undercover operation. He was facing life in prison, but snitched on other dealers in exchange for a lighter sentence.'),
(5, 'Dennis', 'Rodman', 'The basketball star actually once said that he had 46 brothers and sisters, but his dad — who\'s name is Philander — came out and said he only had 29 kids.'),
(6, 'Kesha', '', 'She claims that at one point in a flop house at Rural Canyon, she and a \'weird energy\' had sex.'),
(7, 'Eva', 'Mendes', 'She wanted to be a nun when she was growing up, but ditched the idea when she realized they didn\'t make money.'),
(8, 'James', 'Lipton', 'He used to work as a pimp in Paris in the 1950s.'),
(9, 'Leighton', 'Meester', 'Her mother was in prison for trying to smuggle marijuana from Jamaica to the US when the actress was born.'),
(10, 'Whitney', 'Houston', 'She was a producer on \'The Princess Diaries\''),
(11, 'Nicole', 'Kidman', 'She has lepidopterophobia. This means she has a phobia of butterflies.'),
(12, 'Angelina', 'Jolie', 'When she was 22, she tried to hire a hitman to kill her, but he convinced her to stay alive.'),
(13, 'Charlie', 'Sheen', 'He accidently shot his then-fiance Kelly Preston, she had to get stiches in her arm'),
(14, 'Harry', 'Styles', 'He has four nipples, its called polythelia'),
(19, 'Rob', 'Lowe', 'He not only believes in BigFoot, but believes that he has met BigFoot in the Ozark Mountains.');

-- --------------------------------------------------------

--
-- Table structure for table `apiusers`
--

CREATE TABLE `apiusers` (
  `UserId` int(2) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ApiKey` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apiusers`
--

INSERT INTO `apiusers` (`UserId`, `Email`, `ApiKey`) VALUES
(7, 'cadenps19@yahoo.com', '81bf938bab7f1b5410349fe69ed496b2'),
(8, 'abc123@gmail.com', '51d24d46a404f97657e0a02c7146b3a8'),
(9, 'cs0929315@otc.edu', '1e0ff7014310f029e8a09b7efb49ca39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apidata`
--
ALTER TABLE `apidata`
  ADD PRIMARY KEY (`CelebId`);

--
-- Indexes for table `apiusers`
--
ALTER TABLE `apiusers`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apidata`
--
ALTER TABLE `apidata`
  MODIFY `CelebId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `apiusers`
--
ALTER TABLE `apiusers`
  MODIFY `UserId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
