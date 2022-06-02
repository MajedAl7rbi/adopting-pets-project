-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2022 at 05:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypets`
--

-- --------------------------------------------------------

--
-- Table structure for table `Adopt`
--

CREATE TABLE `Adopt` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `physical_address` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `owning_pets` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Adopt`
--

INSERT INTO `Adopt` (`first_name`, `last_name`, `city`, `physical_address`, `date_of_birth`, `phone_number`, `email`, `owning_pets`) VALUES
('Cullen', 'Beard', 'Libero est mollitia ', 'Irure aliquam veniam', '1983-01-05', '+1 (441) 947-7585', 'wyfakuji@mailinator.com', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `physical_address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL DEFAULT current_timestamp(),
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_age` varchar(255) NOT NULL,
  `pet_kind` varchar(255) NOT NULL,
  `pet_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`first_name`, `last_name`, `city`, `physical_address`, `date_of_birth`, `phone_number`, `email`, `pet_name`, `pet_age`, `pet_kind`, `pet_image`) VALUES
('Sylvia', 'Cantrell', 'Aperiam excepteur es', 'Ut esse in explicab', '1985-10-18', '+1 (828) 889-4403', 'riwaze@mailinator.com', 'Ivor', 'Ea voluptatum sint t', 'kitten', '../uploads/img464320.jpeg'),
('Lenore', 'Mayo', 'Dolorum laudantium ', 'Adipisicing quaerat ', '2005-06-24', '+1 (531) 365-2577', 'punyriji@mailinator.com', 'Adara', 'Consequatur eum par', 'petkind', '../uploads/img416661.jpeg'),
('Dolan', 'George', 'Quas nulla quae repu', 'Aspernatur ea minima', '2011-09-23', '+1 (962) 663-6071', 'jagicovad@mailinator.com', 'Keegan', 'Esse nisi ad illo di', 'cat', '../uploads/img119873.webp'),
('Simon', 'Montgomery', 'Voluptatem et et fug', 'Molestias enim liber', '2010-09-03', '+1 (903) 889-5917', 'futuc@mailinator.com', 'May', 'Dignissimos veritati', 'kitten', '../uploads/img305866.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
