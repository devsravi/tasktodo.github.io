-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 08:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `todo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `uid`, `todo`) VALUES
(1, 1, 'Hello sir, i am Ravi kumar'),
(3, 1, 'Hey to day i am  working with php mysqli'),
(4, 2, 'Hello sir, i am Abhishek'),
(5, 1, 'Hello, sir i am complete to do task'),
(6, 1, 'COMPLETED'),
(7, 4, 'Hello sir, i am Irfan khan'),
(8, 4, 'Sir, my first todo');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Gender` varchar(250) NOT NULL,
  `Education` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `C_Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `FirstName`, `LastName`, `Email`, `Mobile`, `Gender`, `Education`, `Password`, `C_Password`) VALUES
(7, 'Ravi', 'kumar', 'kumarsravi398@gmail.com', '6388778933', 'Male', 'Graduation', '$2y$10$98IB6EiYhryIoIGWIr4P5eNLaZj7EEmjqErRPpf5zGUUF/hnsAIcS', '$2y$10$uTvb9TNU7wBaRXBExshviuLMAmFYn0nSfGB/wPokv29K4cdC.2iIy'),
(8, 'Md', 'Irfan', 'jsirfan.khan@gmail.com', '9113734364', 'Male', 'Post Graduation', '$2y$10$2rxMgdoy5pbWxAdY4raVbek7frRMTrDP9m9q1FcDx6UZ6r2FYaYp2', '$2y$10$.vW//jwvrzNRk09MY9ANse.AcveprYXxpJIi5VSyUqEzo30PfDOEW'),
(9, 'D-Free', 'INDIA', 'dfeeindia@gmail.com', '9113734364', 'Male', 'Post Graduation', '$2y$10$uDDdZWmtUKJY3OYl.NwKK.T/G3hpdlADDqGs.SY2srkRkHp14W6tO', '$2y$10$y3/EvVT8ZI3IsSu1IDuzNu.LfJfoCjqjs3trzHUkDE8ovPMJIl4TO'),
(10, 'Demo', 'Ac', 'demo@gamil.conm', '7894561230', 'Male', 'SSC', '$2y$10$4CDINBCFczX/Dd8/cJnuGOSO3hDTYEto/vNhuoVfknw6r2HGp9OFG', '$2y$10$PLUzbW3n/5y9nRcOIxdE9.2NPdDg1xaYp5Ev96l/yoX19LUGqM6lK'),
(11, 'Abhi', 'Singh', 'singh@gmail.com', '7894561230', 'Male', 'Post Graduation', '$2y$10$LgFIHQvHAcc1otmqPCET0uHNbi9pjuvQLPG7KdllbDUhmhrob.0p6', '$2y$10$.mvgq2c6Maf565DwUQOd/eNbY9uXWigTPkraYu1LRtxrNiBVB.iPa'),
(12, 'Ravi', 'kumar', 'kumarsravi397@gmail.com', '6388778933', 'Male', 'Post Graduation', '$2y$10$XQA6k2nvcTKCvFwfL0zjqeHKKefe8yev9q/lhCOFPJoAFshYuGLx6', '$2y$10$MWiibjbQDR2TES7HbTQKeeobApidcAz.jxXqDxB2PICfm5M8dcnQi'),
(13, 'Kapil', 'dev', 'kd@gamil.com', '7894561230', 'Male', 'Post Graduation', '$2y$10$uPxTxpEIMpLSbnHhJcmK6OZDhn/8T1fkST3v4kK0.u7P/sUl2mWMO', '$2y$10$LLJnSoxpE75/eZXNN9IF0uTAc06QBZv46hp8uiZLISoTgNhTaxyOG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`) VALUES
(1, 'Ravi Kumar', 'kumarsravi397@gmail.com', '7388094142', '1234', '1234'),
(2, 'Abhishek', 'abhi@gmail.com', '7894561230', '1234', '1234'),
(3, 'Satyam ', 'satyam@gamil.com', '7889945610', '1234', '1234'),
(4, 'Irfan', 'irfan@gmail.com', '7894561230', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`uid`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
