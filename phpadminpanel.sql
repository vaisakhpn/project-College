-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2023 at 09:09 AM
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
-- Database: `phpadminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `img` varchar(999) NOT NULL,
  `name` varchar(500) NOT NULL,
  `longdesc` varchar(2000) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `img`, `name`, `longdesc`, `description`, `date`, `time`) VALUES
(15, '1680032454.jpeg', 'holi', 'Although it is a Hindu festival, it is popular among non-Hindus. People gather the night before Holi and perform religious rituals and then pray for the destruction of their internal evil. The next morning people start the real carnival traditions and smear each other with colored powders; they sometimes use water guns and water-filled balloons for more fun. Groups of people march the streets with drums and other instruments, singing and dancing. People also gather with their families and friends to color each other and share Holi delicacies.\r\n\r\n \r\n\r\nThe event lasts for a night and day, from the evening of the full moon (Purnima). Holika Dahan, the burning demon Holika, is the first evening of the event. On this night, people gather, perform religious rituals on a bonfire and pray that the evil inside them is destroyed the way Holika was killed in the fire. ', 'Bright neon powder covers revelers in northern India during the annual Hindu celebration called Holi, usually held in March. Known as the festival of colors,', '2023-03-24', '10:00:00'),
(16, '1680024785.jpg', 'arts', 'afdbkasytfdy', 'awdbqaydtfyqwd', '2023-02-22', '12:55:00'),
(19, '1680448925.jpeg', 'ONAM', 'The festival of Onam is celebrated throughout the state of Kerala. Kerala during Onam is marked by happiness, excitement and enjoyment among all sections of people. Onam is celebrated as an outcome of reasons that have to do with mythology as well as old agrarian practices. If one is to go by the myth, then King Mahabali or Maveli was a generous and virtuous ruler, who had once ruled Kerala. During his rule, the kingdom became so prosperous that devas (gods of the Heaven) felt jealous about this and also for the reason that King Mahabali was an asura - a member of the demon clan - who were the enemies of devas. So, they sent Lord Vishnu in the guise of Vamana (a dwarf) to King Mahabali. As an offering from the generous king, Vamanarequested Mahabali for three feet of land. And at the time of measuring the three feet of land,Vamana grew so huge that he measured all the worlds in two steps. Since he had nowhere else to place his third step, Mahabali asked Vamana to place it on his head. Pleased by his benevolence, Vamana blessed Mahabali before he was sent to the nether world and granted him permission to visit his dear subjects once in a year. This occasion is celebrated by all Keralites as Onam.\r\n\r\nAnd the other cause for celebrating Onam is because it is the time of the year when a good harvest has been gathered all over Kerala, resulting in plenitude and happiness.', 'Onam is a ten-day long harvest festival celebrated in Kerala.', '2022-08-15', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `grievreply`
--

CREATE TABLE `grievreply` (
  `id` int(11) NOT NULL,
  `phn` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grievreply`
--

INSERT INTO `grievreply` (`id`, `phn`, `msg`) VALUES
(1, '2147483647', 'sgdvd'),
(2, '2147483647', 'sgdvd'),
(16, '12345678', 'gchghgffffffffffff'),
(20, '2147483647', 'aaajajajajaj'),
(21, '9847101479', 'fsddsssdsdds');

-- --------------------------------------------------------

--
-- Table structure for table `grievstud`
--

CREATE TABLE `grievstud` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `admi` int(11) NOT NULL,
  `phn` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grievstud`
--

INSERT INTO `grievstud` (`id`, `name`, `admi`, `phn`, `type`, `msg`) VALUES
(1, 'Vaisakh', 1122, '2147483647', 'Grievance related to Admission', 'ansk.jbs cmansckas ckhabscm ams masc'),
(11, 'sinan', 1212, '12312312', 'Grievance related to Admission', '2dasasdsad'),
(26, 'Adarsh', 9856, '12345678', 'Grievance related to Admission', 'adsasdaedfefd'),
(29, 'pradeep', 12345, '9847101479', 'Grievance related to Attendance', 'dhghvbbv'),
(30, 'aswathy', 44444, '9847101479', 'Grievance related to Admission', 'gdvvsfgsfg');

-- --------------------------------------------------------

--
-- Table structure for table `live`
--

CREATE TABLE `live` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `live`
--

INSERT INTO `live` (`id`, `title`, `content`, `date`) VALUES
(1, 'asd', 'sadcakdjsbkjabscjhabichyajdchvjanscjnabcjhajhbaschacbajhcsbahsbchabbcbccjabc jac ja cja jsc jac jah jefj ef fh jebhbfnbd ehfiuehbcjnc enduhbebne kegfijflwef wjekjnkcbm knv  kjfbcncjhbcjhdc jhgfhsbdksb', '2023-04-17'),
(4, 'asd', 'afdadca dad zscsdnsbdfhbsd cjshdbchsf hsiufhhjsfndk dsjbsdj', '2023-04-22'),
(5, 'hello', 'asdsdasdasdasdasdads', '2023-04-22'),
(6, 'breaking ', 'sf dfnv dfnvbksj sfnsnfksj sdjfsdjfnlksd sdfnskdjfsihknsf ksdkjsdfjsdnfk', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`) VALUES
(3, '1680031564.jpg'),
(4, '1680031668.jpeg'),
(5, '1680031684.jpeg'),
(6, '1680031696.jpg'),
(7, '1680031711.jpg'),
(9, '1680031983.jpeg'),
(10, '1680032223.jpeg'),
(11, '1680032424.jpeg'),
(13, '1680349122.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `positon` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`id`, `image`, `name`, `department`, `positon`, `email`) VALUES
(23, '1682098587.jpg', 'akku', 'General', 'HOD', 'vaisakhpn78@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stafcmp`
--

CREATE TABLE `stafcmp` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `positon` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stafcv`
--

CREATE TABLE `stafcv` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `positon` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stafeee`
--

CREATE TABLE `stafeee` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `positon` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stafeee`
--

INSERT INTO `stafeee` (`id`, `image`, `name`, `department`, `positon`, `email`) VALUES
(7, '1682098516.jpg', 'Adarsh', 'Electrical', 'lecture', 'mohdsinan0201@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stafel`
--

CREATE TABLE `stafel` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `positon` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stafel`
--

INSERT INTO `stafel` (`id`, `image`, `name`, `department`, `positon`, `email`) VALUES
(4, '1682099115.jpg', 'Vaisakh', 'Electronics', 'HOD', 'mohdsinan0201@gmail.com'),
(5, '1682099257.jpg', 'sarath', 'Electronics', 'lecture', 'vaisakhpn78@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stafmec`
--

CREATE TABLE `stafmec` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `positon` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uname`, `password`, `role`, `created_at`) VALUES
(1, 'admin', 'admin', '123', 1, '0000-00-00 00:00:00'),
(8, 'Vaisakh', 'vaisakh', '456', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video`) VALUES
(2, '1680246640.MP4'),
(3, '1680246901.MP4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grievreply`
--
ALTER TABLE `grievreply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grievstud`
--
ALTER TABLE `grievstud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafcmp`
--
ALTER TABLE `stafcmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafcv`
--
ALTER TABLE `stafcv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafeee`
--
ALTER TABLE `stafeee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafel`
--
ALTER TABLE `stafel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafmec`
--
ALTER TABLE `stafmec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `grievreply`
--
ALTER TABLE `grievreply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `grievstud`
--
ALTER TABLE `grievstud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `live`
--
ALTER TABLE `live`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stafcmp`
--
ALTER TABLE `stafcmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stafcv`
--
ALTER TABLE `stafcv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stafeee`
--
ALTER TABLE `stafeee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stafel`
--
ALTER TABLE `stafel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stafmec`
--
ALTER TABLE `stafmec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
