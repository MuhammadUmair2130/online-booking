-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 01:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmax`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `booking_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_movie_dur` varchar(200) NOT NULL,
  `user_movie_cinema` varchar(200) NOT NULL,
  `user_movie_name` varchar(200) NOT NULL,
  `user_date` varchar(200) NOT NULL,
  `user_price` varchar(200) NOT NULL,
  `user_seat` varchar(200) NOT NULL,
  `user_card` varchar(200) NOT NULL,
  `user_movie_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`booking_id`, `user_name`, `user_email`, `user_movie_dur`, `user_movie_cinema`, `user_movie_name`, `user_date`, `user_price`, `user_seat`, `user_card`, `user_movie_img`) VALUES
(11, 'ali', 'ali@123', '2:15 PM to 4:00 PM', 'Atrium Cinemas\r\n', 'Thank God', '23-Mar-Thursday', '', '4', '5555-5555-5555-5555', 'thankgod.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbladdmovie`
--

CREATE TABLE `tbladdmovie` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `date_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `movie_image` varchar(200) NOT NULL,
  `movie_trl_url` varchar(200) NOT NULL,
  `movie_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladdmovie`
--

INSERT INTO `tbladdmovie` (`movie_id`, `movie_name`, `cinema_id`, `date_id`, `genre_id`, `industry_id`, `language_id`, `movie_image`, `movie_trl_url`, `movie_time`) VALUES
(2, 'Thank God', 2, 3, 8, 2, 3, 'thankgod.jpg', ' https://www.youtube.com/embed/x-sgnhYJGOA', '2:15 PM to 4:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `tbladminlogin`
--

CREATE TABLE `tbladminlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladminlogin`
--

INSERT INTO `tbladminlogin` (`id`, `email`, `password`) VALUES
(1, 'umair123@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tblcinema`
--

CREATE TABLE `tblcinema` (
  `cinema_id` int(11) NOT NULL,
  `cinema_name` text NOT NULL,
  `cinema_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcinema`
--

INSERT INTO `tblcinema` (`cinema_id`, `cinema_name`, `cinema_location`) VALUES
(1, 'nueplex cinemas askari', 'Rashid Minhas Road, Askari 4 - Karachi 75290'),
(2, 'Atrium Cinemas\r\n', 'MBL Panorama Karachi Cantonment, Karachi'),
(3, 'nueplex cinemas DHA', 'defence housing society pase 2'),
(4, 'capri cinemas tariq road', 'tariq road near,5 block');

-- --------------------------------------------------------

--
-- Table structure for table `tbldate`
--

CREATE TABLE `tbldate` (
  `date_id` int(11) NOT NULL,
  `cinema_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldate`
--

INSERT INTO `tbldate` (`date_id`, `cinema_date`) VALUES
(1, '2023-02-01'),
(2, '2023-02-02'),
(3, '2023-02-03'),
(4, '2023-02-04'),
(5, '2023-02-05'),
(6, '2023-02-06'),
(7, '2023-02-07'),
(8, '2023-02-08'),
(9, '2023-02-09'),
(10, '2023-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `tblgenre`
--

CREATE TABLE `tblgenre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblgenre`
--

INSERT INTO `tblgenre` (`genre_id`, `genre_name`) VALUES
(2, 'Action and thriller'),
(3, 'horror'),
(4, 'suspense and thrilller'),
(5, 'kids'),
(6, 'Animated'),
(7, 'fiction'),
(8, 'Romantic and thriller'),
(9, 'Animals and birds'),
(10, 'Documentry'),
(11, 'science Fiction'),
(12, 'biography'),
(13, 'Mystery');

-- --------------------------------------------------------

--
-- Table structure for table `tblindustry`
--

CREATE TABLE `tblindustry` (
  `industry_id` int(11) NOT NULL,
  `industry_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblindustry`
--

INSERT INTO `tblindustry` (`industry_id`, `industry_name`) VALUES
(1, 'Hollywood'),
(2, 'Bollywood'),
(3, 'Lollywood'),
(4, 'korean'),
(5, 'Tollywood'),
(6, 'spanish'),
(8, 'french');

-- --------------------------------------------------------

--
-- Table structure for table `tbllanguage`
--

CREATE TABLE `tbllanguage` (
  `language_id` int(11) NOT NULL,
  `language` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllanguage`
--

INSERT INTO `tbllanguage` (`language_id`, `language`) VALUES
(1, 'English'),
(2, 'Urdu'),
(3, 'hindi'),
(4, 'Turkish'),
(5, 'tamil');

-- --------------------------------------------------------

--
-- Table structure for table `tblprice`
--

CREATE TABLE `tblprice` (
  `price_id` int(11) NOT NULL,
  `movie_name_price` varchar(50) NOT NULL,
  `economy` int(11) NOT NULL,
  `premium` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblprice`
--

INSERT INTO `tblprice` (`price_id`, `movie_name_price`, `economy`, `premium`) VALUES
(1, 'Thank God', 1000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tblsignup`
--

CREATE TABLE `tblsignup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsignup`
--

INSERT INTO `tblsignup` (`id`, `name`, `email`, `password`) VALUES
(1, 'ali', 'ali@123', '111'),
(3, 'zain', 'zain1@gmail.com', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbladdmovie`
--
ALTER TABLE `tbladdmovie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `cinema_id` (`cinema_id`),
  ADD KEY `date_id` (`date_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `industry_id` (`industry_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `tbladminlogin`
--
ALTER TABLE `tbladminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcinema`
--
ALTER TABLE `tblcinema`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `tbldate`
--
ALTER TABLE `tbldate`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `tblgenre`
--
ALTER TABLE `tblgenre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `tblindustry`
--
ALTER TABLE `tblindustry`
  ADD PRIMARY KEY (`industry_id`);

--
-- Indexes for table `tbllanguage`
--
ALTER TABLE `tbllanguage`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `tblprice`
--
ALTER TABLE `tblprice`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `tblsignup`
--
ALTER TABLE `tblsignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbladdmovie`
--
ALTER TABLE `tbladdmovie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbladminlogin`
--
ALTER TABLE `tbladminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcinema`
--
ALTER TABLE `tblcinema`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbldate`
--
ALTER TABLE `tbldate`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblgenre`
--
ALTER TABLE `tblgenre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblindustry`
--
ALTER TABLE `tblindustry`
  MODIFY `industry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbllanguage`
--
ALTER TABLE `tbllanguage`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblprice`
--
ALTER TABLE `tblprice`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblsignup`
--
ALTER TABLE `tblsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbladdmovie`
--
ALTER TABLE `tbladdmovie`
  ADD CONSTRAINT `tbladdmovie_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `tblcinema` (`cinema_id`),
  ADD CONSTRAINT `tbladdmovie_ibfk_2` FOREIGN KEY (`date_id`) REFERENCES `tbldate` (`date_id`),
  ADD CONSTRAINT `tbladdmovie_ibfk_3` FOREIGN KEY (`genre_id`) REFERENCES `tblgenre` (`genre_id`),
  ADD CONSTRAINT `tbladdmovie_ibfk_4` FOREIGN KEY (`industry_id`) REFERENCES `tblindustry` (`industry_id`),
  ADD CONSTRAINT `tbladdmovie_ibfk_5` FOREIGN KEY (`language_id`) REFERENCES `tbllanguage` (`language_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
