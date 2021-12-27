-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 19, 2021 at 01:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `bookname`, `author`, `description`, `image`, `category`) VALUES
(21, 'Name of the Wind', 'bbb', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin leo elit, luctus a blandit sit amet, gravida ut ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel tincidunt libero, id egestas est.', '1639466952_b95986c85b16fe53adca.jpg', 'kids'),
(22, 'Sin Eater', 'aaaa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin leo elit, luctus a blandit sit amet, gravida ut ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel tincidunt libero, id egestas est', '1639514211_179c14963ce6286714d5.jpg', 'adults'),
(23, 'The Ninth Life', 'aaaa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin leo elit, luctus a blandit sit amet, gravida ut ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel tincidunt libero, id egestas est', '1639514562_a8c4403787f8dc143c44.jpg', 'kids'),
(24, 'Follow me to ground', 'aaaa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin leo elit, luctus a blandit sit amet, gravida ut ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel tincidunt libero, id egestas est', '1639514627_a3f29f96c56275767a4e.jpg', 'teens'),
(25, 'The Swallows', 'bbb', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin leo elit, luctus a blandit sit amet, gravida ut ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel tincidunt libero, id egestas est', '1639514779_a665ae41d1b700bcc342.jpg', 'adults'),
(26, 'The Vegetarian', 'aaaa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin leo elit, luctus a blandit sit amet, gravida ut ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel tincidunt libero, id egestas est', '1639514964_1aed9199e723d5c51a6a.png', 'teens'),
(27, 'The water cure', 'aaaa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin leo elit, luctus a blandit sit amet, gravida ut ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel tincidunt libero, id egestas est', '1639515070_fc17ef82ad2b5f321636.jpg', 'adults'),
(28, 'No place like here', 'aaaa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin leo elit, luctus a blandit sit amet, gravida ut ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel tincidunt libero, id egestas est', '1639516686_408665a9bdb081aaabfe.jpg', 'kids'),
(29, 'The Jungle', 'aaaa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin leo elit, luctus a blandit sit amet, gravida ut ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel tincidunt libero, id egestas est', '1639516761_31850b69b32807043d08.jpg', 'teens');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `removed_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_id`, `book_id`, `removed_at`) VALUES
(67, 5, 28, '2021-12-17 20:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `selected_books`
--

CREATE TABLE `selected_books` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `added_at` varchar(20) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selected_books`
--

INSERT INTO `selected_books` (`id`, `book_id`, `user_id`, `added_at`) VALUES
(98, 27, 5, '2021-12-16 00:42:48'),
(99, 24, 5, '2021-12-16 00:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(256) NOT NULL,
  `password_confirm` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `password_confirm`, `created_at`) VALUES
(4, 'Andza', 'sk', '12345@inbox.com', '$2y$10$ayLJeAVYXp68xgUpfHbaCOfFAiLlRZCOjfl1AbFR4bYUhv.PFQEnS', '$2y$10$dxFBa6uI7jzXlStVDBZJBOZcuyzzZCbV5JCFiQNPbFx1bvuaNOdDe', '2021-12-02 08:17:02'),
(5, 'qwerty', 'qwert', 'qwerty@gmail.com', '$2y$10$6BmxuknhK6FkQt3HwD0vMuqTdH/k9mVy4/.R5KgDpi1L62hqkd4Sa', '$2y$10$QAzRNG1e6I2rtAT6/m5UhO1IWpBbXDkPtepsw3YachqBEZB/MI5DK', '2021-12-02 08:17:02'),
(6, 'gustins', 'petersilis', 'zibensmakvins@inbox.lv', '$2y$10$vRx3xiM0n2Vl8GsNo5gJternWqlS9hLPGl9voGv7uO7XKcEeqo1zK', '$2y$10$Q5N8/58U9moeCKK2QxihPu7S2/InRjgpgcqh1VlTpnWKBzXaBWYDe', '2021-12-02 08:17:02'),
(7, 'koļa', 'sotņiks', 'kola@gmail.com', '$2y$10$/0dF5w09JL72cusCLvHO6O3wv64OA/z8EGYsQJ9ECrwdgXDLboflm', '$2y$10$Lpxk52zUqFSSzCMqTuHGYeE1VzGoQJNOKGo8pLhR70gHegKGrZ/Nq', '2021-12-02 08:17:02'),
(8, 'wafaf', 'awfAFD', 'wfsaf@gmail.com', '$2y$10$ORs/OMlyANowFbFOqjnSWOAkI0rrWgR8JqvU8epTWNr7H7.C6Z3Q2', '$2y$10$btPrl3MzTjAtk9bcuXYA9uQmkk7ReOkcBIi6gxpUANwN6RJR1hnc.', '2021-12-02 08:18:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selected_books`
--
ALTER TABLE `selected_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `selected_books`
--
ALTER TABLE `selected_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
