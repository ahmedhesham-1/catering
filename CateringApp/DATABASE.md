-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2021 at 08:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(600) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `phone`, `subject`, `message`, `ID`) VALUES
('hagar', '000', 'hhhh', 'hagaraf', 1),
('hagar', '000', 'hhhh', 'hagaraf', 2),
('heba', '666', 'cancel', 'i want to cancel my order', 3),
('heba', '666', 'cancel', 'i want to cancel my order', 4);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `opinion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`opinion`) VALUES
('Submit'),
('Submit'),
('Submit'),
('hauhasujagbjksagxdkjAZBXKJAGzudbxhAXJhbagj');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phonenumber` double NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `orderDetails` varchar(200) NOT NULL,
  `userID` varchar(200) NOT NULL,
  `Radio1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `username`, `phonenumber`, `address`, `date`, `orderDetails`, `userID`, `Radio1`) VALUES
(1, 'software', 911, 'miu', '2021-06-23', 'legend', '2', 'pickup');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `price` float NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `ID` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`price`, `name`, `description`, `category`, `img`, `ID`) VALUES
(20, 'Green Salad', 'a bowl for 2 persons', 'salads', 'public/img/pizza.jpg', 2),
(199, 'Panne', 'chicken panne', 'maindish', 'public/img/pizza.jpg', 3),
(50, 'Mozarella Sticks', '8 pieces of mozzarella sticks', 'appetizers', 'public/img/pizza.jpg', 4),
(50, 'Sambousak', '12 pieces of sambousak filled with louki\'s cheese mixture', 'appetizers', 'public/img/pizza.jpg', 5),
(40, 'Greek Salad', 'ingredients: onion, cucumber, black olives, lettuce,fetta cheese and louki\'s dressing.        person', 'salads', 'public/img/pizza.jpg', 6),
(30, 'Potato Salad', 'ingredients: potatoes, onions, mayonise', 'salads', 'public/img/pizza.jpg', 7),
(100, 'Shrimp Kunafa', '6 pieces of shrimps rolled inside a layer of kunafa', 'appetizers', 'public/img/pizza.jpg', 8),
(199, 'Steak', 'Steak', 'maindish', 'public/img/pizza.jpg', 9),
(199, 'Cordonblu', 'cordon', 'maindish', 'public/img/pizza.jpg', 10),
(120, 'chicken alfredo pasta', 'pasta', 'maindish', 'public/img/pizza.jpg', 11),
(60, 'Spring Rolls', '12 pieces of spring rolls filled with vegetables and minced meat', 'appetizers', 'public/img/pizza.jpg', 12),
(423, 'bolognese pasta', 'pasta', 'maindish', 'public/img/pizza.jpg', 18),
(40, 'Potato Croquette', '8 pieces of golden fried potato croquette', 'appetizers', 'public/img/pizza.jpg', 19),
(900, 'Amr hegazi', 'fasdfdasd', 'salads', 'public/img/pizza.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'user',
  `profilePic` varchar(200) NOT NULL DEFAULT 'def.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `phone`, `password`, `type`, `profilePic`) VALUES
(1, 'Amr hegazi', '01153347006', '$2y$10$E5iOdcaMY9y72BHSjkqhd.RQ5hsiJaq4.EtVxnfl2enTyq3BwNY/q', 'user', 'public/img/banner.jpg'),
(2, 'a', '9283008488', '$2y$10$Duf7MlAgwuNVkOWurv3LFuEfMHOf7WUnR2u1LAAx1honDphgGEsam', 'user', 'def.jpg'),
(5, 'Amr', '123', '$2y$10$b3RC9Z1IpjZ4h/g/QbJoZuBqoT3FA8BGXM0aCUas3p9iGAeEYoaXa', 'admin', 'def.jpg'),
(6, 'asd', 'dsa', '$2y$10$p.rh6ncgPRAUrbYgIelW.uDFKSkpIeUKYy4YKuLz89hkhXsXx3YOu', 'user', 'def.jpg'),
(7, 'dsadsa', 'dsasda', '$2y$10$BCjWfQ2veJjAgWfnwm.plOFyBoaVFaeiXPRMdsoO5eGfnJZxvNHDe', 'user', 'def.jpg'),
(8, 'Samir', '011', '$2y$10$r3qF.MdzcpeJEadrqpbbJO17HgMm4/SzepVTEOajDHwgSHMZKMSJm', 'user', 'def.jpg'),
(9, 'Amr hegazi', '44', '$2y$10$GaByQuTRAxwmVKz7PlHaFedqzckNTvF72jA9IGuyKGYzWQH.4iaM2', 'user', 'def.jpg'),
(10, 'Amr hegazi', '0121313', '$2y$10$tsODw8FmTJriQQ7K83BwIOVEo80Uu4seBlgE7eGegVdrlFJl.b4AW', 'user', 'def.jpg'),
(11, 'hagar', '000', '$2y$10$SHkp1Qvfas1ciG1oL9oh.u4QGwuFVIoIyU5mPZ5LzTC3JrPQ9X8Yi', 'user', 'def.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
