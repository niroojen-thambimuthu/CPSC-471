-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2017 at 10:33 PM
-- Server version: 10.0.33-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masih_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `fave`
--

CREATE TABLE `fave` (
  `List_id` int(11) NOT NULL DEFAULT '0',
  `Ruser_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `List_id` int(11) NOT NULL DEFAULT '0',
  `Images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `Luser_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(10) NOT NULL DEFAULT '',
  `contact` int(11) DEFAULT NULL,
  `legal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`Luser_id`, `username`, `fullname`, `password`, `contact`, `legal`) VALUES
(100, 'example', 'example', 'example', 100, 'example'),
(101, 'john123', 'john paul', '123', 50, 'something'),
(102, 'username', 'boby', 'bobby1', 50, 'yes'),
(103, 'name', 'first last', 'last', 80, 'no'),
(104, 'last', 'ititi', 'kit', 90, '90'),
(105, 'ttt123', 'payly', '50505', 90909, 'some legal stuff'),
(117, 't', 't', 't', 3, 't'),
(119, 'ooo', 'ooo', 'ooo', 3, '3'),
(130, 'masih', 'masih', 'masih', 200, 'masih'),
(143, '', '', '', 0, ''),
(144, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
  `List_id` int(11) NOT NULL,
  `Luser_id` int(11) NOT NULL DEFAULT '0',
  `Property_type` varchar(255) NOT NULL DEFAULT '',
  `Ad_title` varchar(255) NOT NULL DEFAULT '',
  `Price` decimal(10,2) DEFAULT NULL,
  `Availibility` varchar(255) NOT NULL DEFAULT '',
  `Description` varchar(255) DEFAULT NULL,
  `Unit_no` varchar(11) DEFAULT NULL,
  `street` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `Postalcode` varchar(6) NOT NULL DEFAULT '',
  `Legal_documentation` varchar(255) DEFAULT NULL,
  `Contract` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`List_id`, `Luser_id`, `Property_type`, `Ad_title`, `Price`, `Availibility`, `Description`, `Unit_no`, `street`, `city`, `Postalcode`, `Legal_documentation`, `Contract`) VALUES
(1, 100, 'Building', 'A big building', '100000.00', 'Yes', 'A whole building', '150', '100 John road', 'Calgary', 'T3QQQQ', 'I have all of them.', 'Yes'),
(3, 117, 'Apartment', 'A new refurbished office', '5000.00', 'Yes', 'Beautiful', '500', '40 John', 'Edmonton', '9t9e9r', 'No', 'No'),
(7, 130, 'Shopping Distract', 'A new shopping mall', '1000.00', 'No', 'Small', '800', '777 road', 'Toronto', '555555', 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `List_id` int(11) NOT NULL DEFAULT '0',
  `size` varchar(255) DEFAULT NULL,
  `Floor` int(2) DEFAULT NULL,
  `Amenities` varchar(255) DEFAULT NULL,
  `oppurtunities` varchar(255) DEFAULT NULL,
  `Unit_type` varchar(255) NOT NULL DEFAULT '',
  `Capacity` varchar(255) DEFAULT NULL,
  `Parking` varchar(255) DEFAULT NULL,
  `Other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`List_id`, `size`, `Floor`, `Amenities`, `oppurtunities`, `Unit_type`, `Capacity`, `Parking`, `Other`) VALUES
(1, '500x500', 6, 'Shopping Mall', 'Yes', 'Big Building', '200', '6', 'Yes'),
(3, '1000x1000', 99, 'None', 'None', 'Law', '1000000', 'No', 'No'),
(7, '1x1', 0, 'Yes', 'Maybe', 'Maybe', 'Something', 'Yes 2', 'Nope');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `Ruser_id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(10) NOT NULL DEFAULT '',
  `contact` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `credit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`Ruser_id`, `fullname`, `username`, `password`, `contact`, `age`, `gender`, `relationship`, `background`, `credit`) VALUES
(1, 'tot', 'tyt', 'trere', 50, 50, 'sdfs', 'dfth', 'fdsd', 'good'),
(2, 'something', 'something', 'something', 70, 70, 'M', 'single', 'killer', 'bad'),
(4, 'girly', 'dir', 'qwe', 999, 888, 'F', 'windowed', 'single', 'very good'),
(8, '999', '9999', '9999', 9999, 9999, '9999', '9999', '9999', '9999'),
(10, '1111', 'sdf', 'fdgn', 8888, 9999, 'www', 'qqq', 'ggg', 'fff'),
(80, '90', '100', '110', 120, 130, '140', '150', '160', '170'),
(300, 'pop', 'pop', 'pop', 1, 1, 'pop', 'pop', 'pop', 'pop'),
(301, 'm', 'm', 'm', 1, 1, 'm', 'm', 'm', ''),
(302, 'n', 'n', 'n', 2, 2, 'n', 'n', 'n', ''),
(311, 'tom', 'tom', 'tom', 2, 3, 'tom', 'tom', 'tom', '');

-- --------------------------------------------------------

--
-- Table structure for table `residential`
--

CREATE TABLE `residential` (
  `List_id` int(11) NOT NULL DEFAULT '0',
  `Unit_type` varchar(255) DEFAULT NULL,
  `Bedrooms` int(11) NOT NULL DEFAULT '0',
  `Baths` decimal(10,1) DEFAULT NULL,
  `Under_18` char(1) DEFAULT NULL,
  `Parking` varchar(255) DEFAULT NULL,
  `Size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `residential`
--

INSERT INTO `residential` (`List_id`, `Unit_type`, `Bedrooms`, `Baths`, `Under_18`, `Parking`, `Size`) VALUES
(1, '4', 4, '4.0', 'y', '4', '55ft^2'),
(3, '5', 5, '5.0', 'n', '5', '700ft^2'),
(7, '4', 5, '1.0', 'n', '5', '800ft^2');

-- --------------------------------------------------------

--
-- Table structure for table `review_listing`
--

CREATE TABLE `review_listing` (
  `List_id` int(11) NOT NULL DEFAULT '0',
  `Ruser_id` int(11) NOT NULL DEFAULT '0',
  `Comment` varchar(255) DEFAULT NULL,
  `Rate` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_listing`
--

INSERT INTO `review_listing` (`List_id`, `Ruser_id`, `Comment`, `Rate`) VALUES
(1, 4, 'How Amazing is this', '5 stars');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `contact`, `fullname`) VALUES
(1, 'rental', 'password', 1, 'bob bob'),
(2, 'niro', 'idk', 912, 'niroojen'),
(3, 'ruhma', 'something', 82, 'Ruhma Faraz'),
(151, 'm', 'm', 1, 'm'),
(152, 'n', 'n', 2, 'n'),
(164, 'y', 'y', 3, 'y'),
(171, 't', 't', 3, 't'),
(173, 'ooo', 'ooo', 3, 'ooo'),
(182, 'masih', 'masih', 22, 'masih'),
(190, 'tom', 'tom', 2, 'tom'),
(198, '', '', 0, ''),
(199, '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fave`
--
ALTER TABLE `fave`
  ADD PRIMARY KEY (`List_id`,`Ruser_id`),
  ADD KEY `FRuser_id` (`Ruser_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`List_id`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`Luser_id`);

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`List_id`),
  ADD KEY `Luser_id` (`Luser_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`List_id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`Ruser_id`);

--
-- Indexes for table `residential`
--
ALTER TABLE `residential`
  ADD PRIMARY KEY (`List_id`);

--
-- Indexes for table `review_listing`
--
ALTER TABLE `review_listing`
  ADD PRIMARY KEY (`List_id`,`Ruser_id`),
  ADD KEY `RWRuser_id` (`Ruser_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `Luser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `List_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `Ruser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fave`
--
ALTER TABLE `fave`
  ADD CONSTRAINT `FRuser_id` FOREIGN KEY (`Ruser_id`) REFERENCES `renter` (`Ruser_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Flist_id` FOREIGN KEY (`List_id`) REFERENCES `listing` (`List_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `List_id` FOREIGN KEY (`List_id`) REFERENCES `listing` (`List_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `listing`
--
ALTER TABLE `listing`
  ADD CONSTRAINT `Luser_id` FOREIGN KEY (`Luser_id`) REFERENCES `landlord` (`Luser_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `Olist_id` FOREIGN KEY (`List_id`) REFERENCES `listing` (`List_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `residential`
--
ALTER TABLE `residential`
  ADD CONSTRAINT `Rslist_id` FOREIGN KEY (`List_id`) REFERENCES `listing` (`List_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_listing`
--
ALTER TABLE `review_listing`
  ADD CONSTRAINT `RWRuser_id` FOREIGN KEY (`Ruser_id`) REFERENCES `renter` (`Ruser_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `RwList_id` FOREIGN KEY (`List_id`) REFERENCES `listing` (`List_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
