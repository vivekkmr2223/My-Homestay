-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 04:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_homestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details`
--

CREATE TABLE `hotel_details` (
  `hotel_id` int(11) NOT NULL,
  `user_hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(200) DEFAULT NULL,
  `hotel_description` varchar(2000) DEFAULT NULL,
  `hotel_country` text DEFAULT NULL,
  `hotel_state` text DEFAULT NULL,
  `hotel_city` text DEFAULT NULL,
  `hotel_local_address` text DEFAULT NULL,
  `hotel_price` int(255) DEFAULT NULL,
  `hotel_room_no_guest` int(100) DEFAULT NULL,
  `hotel_room_no_bedroom` int(10) DEFAULT NULL,
  `hotel_room_no_beds` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_details`
--

INSERT INTO `hotel_details` (`hotel_id`, `user_hotel_id`, `hotel_name`, `hotel_description`, `hotel_country`, `hotel_state`, `hotel_city`, `hotel_local_address`, `hotel_price`, `hotel_room_no_guest`, `hotel_room_no_bedroom`, `hotel_room_no_beds`) VALUES
(1, 3, 'Ashoka', 'Nice...', 'India', 'Chhattisgarh', 'Raipur', 'Sejbahar', 10000, 2, 1, 1),
(2, 4, 'Shankra Canteen', 'lorem ipsum', 'India', 'Chhattisgarh', 'Raipur', 'Sejbahar', 1000, 2, 2, 2),
(3, 5, 'Vihang Farmhouse', 'Vihang Farmhouse is airy, bright, and simplistic with a wonderful view of the backwaters and grasslands of Gangapur Dam, an Important Bird Area! We are located a 20 minute drive away from Sula, York, and Soma vineyards and wineries which are on the opposite bank of Gangapur Dam. We have three bedrooms: The Florican Room, Owlet Room & the Quail Room. We also provide breakfast.', 'India', 'Maharastra', 'Nashik', 'Kota, Gudhiyari', 5000, 3, 2, 1),
(6, 6, 'StayVista at Cottage 1 ', 'Nestled in a lesser known Suswa valley, surrounded by the Shivaliks and the Himalayan foothills, 20 km from Dehradun is Dudley Manor. Boasting of its picturesque location and lychee orchards amidst the organic farm, Dudley Manor overlooks the Himalayas. Taking one back to the roots and enjoying the simple yet often forgotten joys of life, the property has a multitude of activities to keep the guests engaged and bring them closer to an organic, holistic and sustainable living.', 'India', 'Uttarakhand', 'Badowala', 'Badowala,Uttarakhand', 15000, 3, 1, 1),
(7, 7, 'Plantation homestay', 'Alencherry plantation homestay is an authentic homestay where Antony Alencherry and his wife LIzzy, have been staying for the past several decades. The homestay offers 5 en-suite bedrooms for guests that are part of the main house where the hosts also live. Chottupara, where we are located, is a quiet, rural village 9 kilometres away from kumily and Thekkady. The location is lovely for walking, ideal for relaxing in beautiful countryside and exploring some of the lesser known areas of Thekkady, an area of outstanding natural beauty, though still close to all the attractions.', 'India', 'Kerala', 'periyar', 'periyar,Kerala', 3960, 2, 1, 5),
(8, 8, 'Stellar Assagao', 'Villa in North Goa with stunning uninterrupted field view. The villa has 3 large bedrooms both with en-suite bathrooms and the master en-suite includes a bathtub. An open concept living area including kitchen, leads out to an open air living. Upstairs there is a lovely open plan very versatile living space and more incredible field view. An infinity pool completes the outdoor space where you can relax whilst enjoying the full view towards Assagao.', 'India', 'Goa', 'Assagao', 'Assagao,Goa', 19054, 9, 2, 3),
(9, 9, 'Casa Caisua', 'Casa Caisua is a Susegad Village house located at Anjuna and Nestled right in the middle of the village, it is set in a private 20,000-square-feet Orchard and is a few minutes walk to Vagator beach. The structure, standing tall amidst lush greenery and under the bright sun, is entrenched with multiple tales that have been revived to resonate in today’s time. Casa Caisua, about a century old house was carefully restored in a sensitive manner, keeping the charm of the original structure intact.', 'India', 'Chhattisgarh', 'Raipur', 'Sejbahar', 5000, 4, 2, 2),
(10, 10, 'Luxury 3BHK Villa', 'Located in the heart of Assagao, close to Anjuna & Vagator beach, famous restaurants, pubs, & clubs (Mojigao, Jamun, Gunpowder, Vinayak, Soro etc).\r\nThe villa consists of 3 Bedrooms with attached bathrooms, private jacuzzi and a stunning swimming pool is a peaceful oasis amidst green paddy fields of Assagao with 24-hour security and car park. This villa comes with shared pool and a private Jacuzzi.', 'India', 'Goa', 'Goa', 'Assagao', 12999, 4, 2, 2),
(11, 11, 'MSimba Estate Villa', 'This tranquil villa is located on a 38 acre coffee estate. The villa has 3 large bedrooms and a beautiful sit out area with a spectacular view of the coffee estate. With a pool, cycles, lots of board games and a great estate walk you will always have lots to do. The estate is bordered on one side by an temple forest.', 'India', 'Karnataka', 'Nokya', 'Nokya', 26508, 5, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_img`
--

CREATE TABLE `hotel_img` (
  `img_id` int(255) NOT NULL,
  `user_img_id` int(255) DEFAULT NULL,
  `hotel_img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_img`
--

INSERT INTO `hotel_img` (`img_id`, `user_img_id`, `hotel_img`) VALUES
(1, 3, '849662_117500_hotel23.webp'),
(2, 3, '496429_128004_vietnam3.webp'),
(3, 3, '675397_128774_hotel161.webp'),
(4, 3, '646329_139338_hotel132.webp'),
(5, 3, '281983_145845_hotel133.webp'),
(6, 4, '908578_139338_hotel132.webp'),
(7, 4, '352546_142917_hotel92.webp'),
(8, 4, '691610_143314_hotel32.webp'),
(9, 4, '771925_145845_hotel133.webp'),
(10, 4, '838065_202504_hotel23.webp'),
(11, 5, '588958_329083_hotel62.webp'),
(12, 5, '385710_518681_hotel131.webp'),
(13, 5, '592962_524763_hotel163.webp'),
(14, 5, '196833_563044_hotel113.webp'),
(15, 5, '361194_566751_hotel91 - Copy.webp'),
(16, 5, '852480_128774_hotel161.webp'),
(17, 5, '738403_139338_hotel132.webp'),
(18, 5, '588617_142917_hotel92.webp'),
(19, 5, '597566_145845_hotel133.webp'),
(20, 5, '661122_234579_hotel172.webp'),
(21, 5, '382941_128774_hotel161.webp'),
(22, 5, '723296_142917_hotel92.webp'),
(23, 5, '806194_145845_hotel133.webp'),
(24, 5, '252535_234579_hotel172.webp'),
(25, 5, '310730_236325_hotel72.webp'),
(26, 6, '363865_128774_hotel161 - Copy.webp'),
(27, 6, '134754_131359_hotel23 - Copy.webp'),
(28, 6, '553684_142917_hotel92 - Copy.webp'),
(29, 7, '267565_128004_vietnam3 - Copy.webp'),
(30, 7, '291491_139338_hotel132.webp'),
(31, 7, '640365_142917_hotel92.webp'),
(32, 7, '958374_145845_hotel133.webp'),
(33, 7, '394486_208044_hotel31.webp'),
(34, 8, '425453_221845_hotel51.webp'),
(35, 8, '753755_236325_hotel72.webp'),
(36, 8, '263170_242227_thailent3.webp'),
(37, 8, '552458_385564_hotel171.webp'),
(38, 8, '620620_469121_hotel32.webp'),
(39, 9, '618580_805708_hotel81.webp'),
(40, 9, '668764_957128_hotel162.webp'),
(41, 9, '261986_961530_hotel13.webp'),
(42, 9, '582389_991828_hotel41.webp'),
(43, 9, '490340_993306_hotel12.webp'),
(44, 10, '893152_143314_hotel32.webp'),
(45, 10, '393788_242227_thailent3.webp'),
(46, 10, '667098_249146_hotel121.webp'),
(47, 10, '864524_257227_hotel81.webp'),
(48, 10, '436143_287240_hotel72.webp'),
(49, 11, '590376_337308_hotel13.webp'),
(50, 11, '334677_365281_hotel31.webp'),
(51, 11, '428129_385564_hotel171.webp'),
(52, 11, '132749_449410_hotel42.webp'),
(53, 11, '722051_563044_hotel113.webp');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_details`
--

CREATE TABLE `reservation_details` (
  `reservation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_phone_no` int(10) NOT NULL,
  `user_country` varchar(100) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_city` varchar(500) NOT NULL,
  `no_of_guest` int(11) DEFAULT NULL,
  `arrival_date` date NOT NULL,
  `leaving_date` date NOT NULL,
  `no_of_rooms` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation_details`
--

INSERT INTO `reservation_details` (`reservation_id`, `user_id`, `hotel_id`, `user_full_name`, `user_phone_no`, `user_country`, `user_state`, `user_city`, `no_of_guest`, `arrival_date`, `leaving_date`, `no_of_rooms`) VALUES
(1, 3, 1, 'satish', 354312554, 'india', 'cg', 'raipur', 5, '2022-10-22', '2022-10-29', 2),
(2, 4, 1, 'varun', 2147483647, 'india', 'cg', 'raipur', 2, '2022-12-09', '2022-12-10', 2),
(3, 5, 2, 'satish', 2147483647, 'india', 'cg', 'raipur', 2, '2022-12-24', '2022-12-25', 5),
(4, 5, 7, 'satish', 2147483647, 'india', 'cg', 'raipur', 5, '2022-12-24', '2022-12-29', 3),
(5, 5, 11, 'Satish', 544, '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(6, 5, 11, 'Satish', 2147483647, 'india', 'cg', 'raipur', 4, '2022-12-24', '2022-12-30', 4),
(7, 4, 3, 'varun', 546546212, 'india', 'cg', 'raipur', 3, '2022-12-24', '2022-12-30', 5),
(8, 5, 6, 'satish', 2147483647, 'india', 'cg', 'raipur', 2, '2022-12-24', '2022-12-29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(3, 'a', 'a@gmail.com', '$2y$10$vj4LoVnncagtEwzfXB6SA.9sD.qC3g.PoMiz8ilYRKBRdw6W5XAd2'),
(4, 'varun', 'varun@gmail.com', '$2y$10$rAueYMIqFBegYcR5tg.07uGz2lJI8SptWnpMDP1ocGQyz1FX/4pcO'),
(5, 'satish', 'vasettisatish@gmail.com', '$2y$10$.Vov.Jqz89/pRJCqrSieA.BFqN/I8sVSWqNLCSznWlt.SWeiFzLM6'),
(6, 'vivek', 'v@gmail.com', '$2y$10$J/VYsnNAwj4jO.TDZgP9ouUIdlztNt8mvoRpeUMvxspKxhZeNrzbe'),
(7, 'Pooja', 'pooja@gmail.com', '$2y$10$pPht7FTyIOXkrbmfqaHaY.K5/yKWqhzzKe6pR.nJA72THdRkvmLD6'),
(8, 'Tony Stark', 'tony@gmail.com', '$2y$10$w.aZrGyd/8EMebrPZkOYYeHWkISHrLKpAWaFflvqC2QzIkXSOs272'),
(9, 'Peter Parker', 'Peter@gmail.com', '$2y$10$ItBaxfhNJLWEVQQJLQAhZO2VKv.dgdP5QcrWNy3eOxgorKxm5hv4C'),
(10, 'Gwen Stacy', 'gwen@gmail.com', '$2y$10$HuWWtlqD.14z/cb3A0oyouOtHHqJVXMJtDgT0s9yWutV5oiK8P0Em'),
(11, 'Ravi ', 'ravi@gmail.com', '$2y$10$Fg/k9Rx84cLCzrx2RF3W0u8ZfR25UhwTkvcWA.rIZLme9CXho1ohW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_details`
--
ALTER TABLE `hotel_details`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_img`
--
ALTER TABLE `hotel_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_details`
--
ALTER TABLE `hotel_details`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hotel_img`
--
ALTER TABLE `hotel_img`
  MODIFY `img_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `reservation_details`
--
ALTER TABLE `reservation_details`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
