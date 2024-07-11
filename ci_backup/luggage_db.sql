-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 11:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luggage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings_master`
--

CREATE TABLE `bookings_master` (
  `bookings_id` int(11) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `small_bags` int(11) NOT NULL,
  `medium_bags` int(11) NOT NULL,
  `large_bags` int(11) NOT NULL,
  `extra_large_bags` int(11) NOT NULL,
  `premium_services` text DEFAULT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hub_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings_master`
--

INSERT INTO `bookings_master` (`bookings_id`, `booking_date`, `check_in_date`, `check_out_date`, `small_bags`, `medium_bags`, `large_bags`, `extra_large_bags`, `premium_services`, `total_cost`, `user_id`, `hub_id`, `status`, `created_at`) VALUES
(1, '2024-06-23 20:52:30', '2024-06-25', '2024-06-26', 2, 1, 0, 0, 'null', 47.25, 1, 4, 'Booked', '2024-06-23 20:52:30'),
(2, '2024-06-23 21:01:16', '2024-06-27', '2024-06-29', 3, 2, 0, 0, '[\"200.00\",\"350.00\"]', 745.50, 2, 4, 'Booked', '2024-06-23 21:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `hubpricing_master`
--

CREATE TABLE `hubpricing_master` (
  `hubpricing_id` int(11) NOT NULL,
  `hub_id` int(11) DEFAULT NULL,
  `hourlyPrice1` decimal(10,2) DEFAULT NULL,
  `dailyPrice1` decimal(10,2) DEFAULT NULL,
  `hourlyPrice2` decimal(10,2) DEFAULT NULL,
  `dailyPrice2` decimal(10,2) DEFAULT NULL,
  `hourlyPrice3` decimal(10,2) DEFAULT NULL,
  `dailyPrice3` decimal(10,2) DEFAULT NULL,
  `hourlyPrice4` decimal(10,2) DEFAULT NULL,
  `dailyPrice4` decimal(10,2) DEFAULT NULL,
  `premiumServiceRate1` decimal(10,2) DEFAULT NULL,
  `premiumServiceRate2` decimal(10,2) DEFAULT NULL,
  `premiumServiceRate3` decimal(10,2) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hubpricing_master`
--

INSERT INTO `hubpricing_master` (`hubpricing_id`, `hub_id`, `hourlyPrice1`, `dailyPrice1`, `hourlyPrice2`, `dailyPrice2`, `hourlyPrice3`, `dailyPrice3`, `hourlyPrice4`, `dailyPrice4`, `premiumServiceRate1`, `premiumServiceRate2`, `premiumServiceRate3`, `createdAt`) VALUES
(1, 1, 20.00, 10.00, 30.00, 25.00, NULL, NULL, NULL, NULL, 150.00, 200.00, 300.00, '2024-06-05 20:56:06'),
(2, 4, 20.00, 10.00, 30.00, 25.00, 50.00, 40.00, 100.00, 75.00, 150.00, 200.00, 350.00, '2024-06-05 20:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `mainuser_master`
--

CREATE TABLE `mainuser_master` (
  `mainuser_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mainuser_master`
--

INSERT INTO `mainuser_master` (`mainuser_id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Tripti Ghosh', 'tripti@qwerty.com', 'MTExMTEx', '2024-06-21 21:08:45'),
(2, 'Rahul Mitra', 'rahul@gmail.com', 'MTIzNDU2', '2024-06-23 21:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `myhub_master`
--

CREATE TABLE `myhub_master` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hubname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `latvalue` decimal(10,8) DEFAULT NULL,
  `lonvalue` decimal(11,8) DEFAULT NULL,
  `mobilenumber` varchar(15) DEFAULT NULL,
  `hubarea` varchar(255) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `description` longtext NOT NULL,
  `helpGuide` longtext NOT NULL,
  `hub_image` varchar(255) NOT NULL,
  `del_status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myhub_master`
--

INSERT INTO `myhub_master` (`id`, `user_id`, `hubname`, `address`, `latvalue`, `lonvalue`, `mobilenumber`, `hubarea`, `capacity`, `description`, `helpGuide`, `hub_image`, `del_status`) VALUES
(1, 1, 'Bounce', 'Gariahat, Rash Behari Avenue, Ballygunge, Kolkata, Kolkata District, West Bengal, 700029, India', 22.51963840, 88.36562410, '9858745896', '2598', 14500, '<p>Bounce provides luggage storage through partnerships with local businesses, ensuring a safe and flexible service available in many cities globally.</p>\r\n', '<ul>\r\n	<li>Use the Bounce website or app to find a storage location.</li>\r\n	<li>Choose your city and browse available options.</li>\r\n	<li>Reserve your storage space online.</li>\r\n	<li>Drop off your luggage at the selected location.</li>\r\n	<li>Pick up your luggage at your convenience.</li>\r\n</ul>\r\n', 'c4853777894d00a01e7cba35dcec05b1.PNG', 0),
(2, 1, 'Truvalue Luggage Store', 'Netaji Subhash Chandra Bose International Airport, Old Jessore Road, Madhyamgram, Barasat - II, North 24 Parganas District, West Bengal, 700132, India', 22.65646230, 88.44672447, '8758965874', '3500', 4800, '<p>Truvalue Luggage Store, now known as Radical Storage, offers luggage storage through a network of local businesses including cafes and shops in various cities worldwide.</p>\r\n', '<ul>\r\n	<li>Access Radical Storage via their website or app.</li>\r\n	<li>Select your city and find a nearby storage spot.</li>\r\n	<li>Book your storage online.</li>\r\n	<li>Drop off your luggage at the designated location.</li>\r\n	<li>Collect your luggage when you need it.</li>\r\n</ul>\r\n', '2d381c7dccf78e6794d10580d1183990.jpg', 0),
(3, 1, 'CityStasher', 'Esplanade, Kolkata, Kolkata District, West Bengal, 700001, India', 22.56329200, 88.35035660, '8563258965', '4800', 1786, '<p>CityStasher connects travelers with local shops and hotels offering secure luggage storage. They operate in several major cities.</p>\r\n', '<ul>\r\n	<li>Go to the CityStasher website or app.</li>\r\n	<li>Select your city and find a suitable storage location.</li>\r\n	<li>Book your storage slot online.</li>\r\n	<li>Drop off your luggage at the chosen site.</li>\r\n	<li>Retrieve your luggage at a convenient time.</li>\r\n</ul>\r\n', 'f6545665c9eca45a4c7b3204d54c3148.jpg', 0),
(4, 2, ' Luggage Hero', 'Gariahat, Rash Behari Avenue, Ballygunge, Kolkata, Kolkata District, West Bengal, 700042, India', 22.51977890, 88.36542970, '9898969695', '7800', 148500, '<p>LuggageHero offers convenient, safe, and insured luggage storage locations in major cities worldwide. Their storage sites include hotels, shops, and cafes.</p>\r\n', '<ul>\r\n	<li>Visit the LuggageHero website or app.</li>\r\n	<li>Choose your city and find a nearby storage location.</li>\r\n	<li>Book your storage online.</li>\r\n	<li>Drop off your luggage and receive a security seal.</li>\r\n	<li>Enjoy your day and pick up your luggage when you&#39;re ready.</li>\r\n</ul>\r\n', '66e6341fec7b8b4a45c8e1eb8fa1207e.jpg', 0),
(5, 2, 'Stasher', 'Maniktala, Kolkata, Kolkata District, West Bengal, 700067, India', 22.58808960, 88.38528340, '9985845789', '22987', 13987, '<p>Welcome to the Grotte du Moulin! This natural loft is recessed in a limestone mound and will surprise you with its transparency. It consists of a large kitchen open to the living room and a bedroom with bathroom separated by a sliding garage door. In the bedroom, you have a double bed (160 cm) and in the living room a single bed (90 cm) with a non convertible sofa that can be used as a small&nbsp;</p>\r\n', '<ul>\r\n	<li>We know that carrying your luggage can be a hassle. Let us take care of it for you. Guide for dropping off and picking up your luggage during your stay.</li>\r\n	<li>We will help you in unloading and tagging your bags, which will be delivered to your room or stored securely if your room isn&#39;t ready.</li>\r\n	<li>We will help you in coordinating pickup times to ensuring your belongings are securely handed back to you, we&#39;ve got you covered</li>\r\n</ul>\r\n', 'efd1bdee47bb7a5afd933b59933ad4ed.PNG', 0),
(6, 2, 'Vertoe', 'Bhabanipur, Shaharasti Upazila, Chandpur District, Chattogram Division, 3620, Bangladesh', 23.18246460, 90.93111710, '8574857485', '7845', 888958, '<p>Vertoe offers short-term luggage storage at convenient locations like retail stores, cafes, and more. They provide a secure and insured service.</p>\r\n', '<ol>\r\n	<li>Access Vertoe via their website or app.</li>\r\n	<li>Choose your city and find a storage location.</li>\r\n	<li>Book and pay for your storage online.</li>\r\n	<li>Drop off your luggage and receive a unique tamper-proof seal.</li>\r\n	<li>Pick up your luggage as per your schedule.</li>\r\n</ol>\r\n', '6dccb926c2b7061b7f0d7d786a65915a.png', 0),
(7, 2, 'Nannybag', 'Sealdah, Parikshit Roy Lane, Sealdah, Kolkata, Kolkata District, West Bengal, 700009, India', 22.56566280, 88.37239150, '23453243', '324423', 43534, '<p>Nannybag partners with hotels and local businesses to provide luggage storage solutions in numerous cities around the world.</p>\r\n', '<ul>\r\n	<li>Visit the Nannybag website or use their app.</li>\r\n	<li>Select your city and find a suitable storage spot.</li>\r\n	<li>Book your storage online.</li>\r\n	<li>Drop off your luggage at the chosen location.</li>\r\n	<li>Retrieve your luggage whenever you need.</li>\r\n</ul>\r\n', '9a20d3d97a9db9f1c9620f8c108662da.PNG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification_master`
--

CREATE TABLE `notification_master` (
  `notification_id` int(11) NOT NULL,
  `notification_text` text NOT NULL,
  `notification_datetime` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `mainuser_id` int(11) NOT NULL,
  `read_status` enum('unread','read') NOT NULL DEFAULT 'unread',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_master`
--

INSERT INTO `notification_master` (`notification_id`, `notification_text`, `notification_datetime`, `user_id`, `mainuser_id`, `read_status`, `created_at`, `updated_at`) VALUES
(1, 'You got a new booking', '2024-06-23 22:52:30', 2, 1, 'unread', '2024-06-23 20:52:30', '2024-06-23 20:52:30'),
(2, 'You got a new booking', '2024-06-23 23:01:16', 2, 2, 'unread', '2024-06-23 21:01:16', '2024-06-23 21:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `options_master`
--

CREATE TABLE `options_master` (
  `options_id` int(11) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_identity` varchar(255) NOT NULL,
  `option_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options_master`
--

INSERT INTO `options_master` (`options_id`, `option_name`, `option_identity`, `option_value`) VALUES
(1, 'Tax', 'Tax', '5');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `about` longtext NOT NULL,
  `mobilenumber` varchar(150) NOT NULL,
  `identity` varchar(255) NOT NULL DEFAULT 'default.png',
  `profile_pic` varchar(255) NOT NULL DEFAULT 'default.png',
  `established_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `username`, `email`, `password`, `full_name`, `about`, `mobilenumber`, `identity`, `profile_pic`, `established_date`, `created_at`) VALUES
(1, 'rahulm', 'rahul@qwerty.com', '123456', 'Rahul Mitra', 'Your Storage Expert', '45643535', 'springroll.PNG', 'face124.jpg', '2020-02-07', '2024-05-29 20:05:32'),
(2, 'mainak', 'mb@qwerty.com', '111111', 'Mainak Bhattacharjee', 'In love with this beautiful region, dressed in green and inlaid with history, I wanted to show you a hidden traditional treasure, the cave habitat.  What a reception to stay in the rock! Passionate about flea market, I appreciate staging the recovered souls who give the place a unique atmosphere. The pleasure of welcoming you. Sandrine.', '23454233345', 'booking-1-1@2x.png', 'ellipse-1194-11@2x.png', '2021-06-10', '2024-05-29 20:31:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings_master`
--
ALTER TABLE `bookings_master`
  ADD PRIMARY KEY (`bookings_id`);

--
-- Indexes for table `hubpricing_master`
--
ALTER TABLE `hubpricing_master`
  ADD PRIMARY KEY (`hubpricing_id`);

--
-- Indexes for table `mainuser_master`
--
ALTER TABLE `mainuser_master`
  ADD PRIMARY KEY (`mainuser_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `myhub_master`
--
ALTER TABLE `myhub_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_master`
--
ALTER TABLE `notification_master`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `options_master`
--
ALTER TABLE `options_master`
  ADD PRIMARY KEY (`options_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings_master`
--
ALTER TABLE `bookings_master`
  MODIFY `bookings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hubpricing_master`
--
ALTER TABLE `hubpricing_master`
  MODIFY `hubpricing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mainuser_master`
--
ALTER TABLE `mainuser_master`
  MODIFY `mainuser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `myhub_master`
--
ALTER TABLE `myhub_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notification_master`
--
ALTER TABLE `notification_master`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `options_master`
--
ALTER TABLE `options_master`
  MODIFY `options_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
