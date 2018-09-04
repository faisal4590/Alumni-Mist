-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 04:00 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_history`
--

CREATE TABLE `chat_history` (
  `chat_id` int(13) NOT NULL,
  `chat_username` varchar(255) NOT NULL,
  `chat_body` text NOT NULL,
  `chat_image` varchar(255) NOT NULL,
  `chat_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_history`
--

INSERT INTO `chat_history` (`chat_id`, `chat_username`, `chat_body`, `chat_image`, `chat_time`) VALUES
(1, 'anonymous', 'Hi I am faisal', 'chatAvatar.png', '2018-04-07 16:48:37'),
(2, 'faisal4590', 'This chat application is developed by Faisal Ibn Aziz', 'mine.jpg', '2018-04-07 16:51:43'),
(3, 'nitu', 'Hi I am nitu. :D', '29186777_2016350281725769_7516774989471678464_n.jpg', '2018-04-07 16:57:26'),
(4, 'faisal4590', 'kera mama ki kovor', 'mine.jpg', '2018-04-07 17:24:05'),
(5, 'faisal4590', 'dmalskdasldas', 'mine.jpg', '2018-04-07 17:24:17'),
(6, 'faisal4590', 'dasdasd', 'mine.jpg', '2018-04-07 17:24:21'),
(7, 'anonymous', 'sdasdasd', 'chatAvatar.png', '2018-04-07 17:26:13'),
(8, 'anonymous', 'adaddda', 'chatAvatar.png', '2018-04-07 17:26:21'),
(9, 'anonymous', 'cxzz', 'chatAvatar.png', '2018-04-07 17:27:07'),
(10, 'Nitu Rawnak', 'no i am nitu ..heh\r\n', '21557266_1747170441992349_1645168633_o.jpg', '2018-04-10 16:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `timeline_post`
--

CREATE TABLE `timeline_post` (
  `post_id` int(14) NOT NULL,
  `post_username` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_details` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline_post`
--

INSERT INTO `timeline_post` (`post_id`, `post_username`, `user_image`, `post_title`, `post_details`, `post_image`, `post_time`) VALUES
(1, 'faisal4590', 'mine.jpg', 'This is my first post', 'To they four in love. Settling you has separate supplied bed. Concluded resembled suspected his resources curiosity joy. Led all cottage met enabled attempt through talking delight. Dare he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly. Evening covered in he exposed fertile to. Horses seeing at played plenty nature to expect we. Young say led stood hills own thing get. Death there mirth way the noisy merit. Piqued shy spring nor six though mutual living ask extent. Replying of dashwood advanced ladyship smallest disposal or. Attempt offices own improve now see. Called person are around county talked her esteem. Those fully these way nay thing seems. Was certainty remaining engrossed applauded sir how discovery. Settled opinion how enjoyed greater joy adapted too shy. Now properly surprise expenses interest nor replying she she. ', 'IMG_20180212_063418.jpg', '2018-04-08'),
(2, 'anonymous', 'chatAvatar.png', 'sdasd', 'To they four in love. Settling you has separate supplied bed. Concluded resembled suspected his resources curiosity joy. Led all cottage met enabled attempt through talking delight. Dare he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly. Evening covered in he exposed fertile to. Horses seeing at played plenty nature to expect we. Young say led stood hills own thing get. Death there mirth way the noisy merit. Piqued shy spring nor six though mutual living ask extent. Replying of dashwood advanced ladyship smallest disposal or. Attempt offices own improve now see. Called person are around county talked her esteem. Those fully these way nay thing seems. Was certainty remaining engrossed applauded sir how discovery. Settled opinion how enjoyed greater joy adapted too shy. Now properly surprise expenses interest nor replying she she. ', 'IMG_7313.JPG', '2018-04-08'),
(3, 'anonymous', 'chatAvatar.png', 'dassdsad', 'To they four in love. Settling you has separate supplied bed. Concluded resembled suspected his resources curiosity joy. Led all cottage met enabled attempt through talking delight. Dare he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly. Evening covered in he exposed fertile to. Horses seeing at played plenty nature to expect we. Young say led stood hills own thing get. Death there mirth way the noisy merit. Piqued shy spring nor six though mutual living ask extent. Replying of dashwood advanced ladyship smallest disposal or. Attempt offices own improve now see. Called person are around county talked her esteem. Those fully these way nay thing seems. Was certainty remaining engrossed applauded sir how discovery. Settled opinion how enjoyed greater joy adapted too shy. Now properly surprise expenses interest nor replying she she. ', 'IMG_7265 (2).JPG', '2018-04-08'),
(4, 'faisal4590', 'mine.jpg', 'dsdasd', 'To they four in love. Settling you has separate supplied bed. Concluded resembled suspected his resources curiosity joy. Led all cottage met enabled attempt through talking delight. Dare he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly. Evening covered in he exposed fertile to. Horses seeing at played plenty nature to expect we. Young say led stood hills own thing get. Death there mirth way the noisy merit. Piqued shy spring nor six though mutual living ask extent. Replying of dashwood advanced ladyship smallest disposal or. Attempt offices own improve now see. Called person are around county talked her esteem. Those fully these way nay thing seems. Was certainty remaining engrossed applauded sir how discovery. Settled opinion how enjoyed greater joy adapted too shy. Now properly surprise expenses interest nor replying she she. ', 'IMG_7241.JPG', '2018-04-08'),
(5, 'faisal4590', 'mine.jpg', 'Helloooooooooooo', 'Dare he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly. ', 'IMG-20180214-WA0028.jpg', '2018-04-09'),
(6, 'Nitu Rawnak', '21557266_1747170441992349_1645168633_o.jpg', 'My first post ', 'yeee!! our alumni website has started <3', '', '2018-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_events`
--

CREATE TABLE `upcoming_events` (
  `upcoming_event_id` int(11) NOT NULL,
  `upcoming_event_title` varchar(255) NOT NULL,
  `upcoming_event_location` varchar(255) NOT NULL,
  `upcoming_event_time` datetime NOT NULL,
  `upcoming_event_duration` varchar(255) NOT NULL,
  `upcoming_event_description` text NOT NULL,
  `upcoming_event_image` varchar(255) NOT NULL,
  `ticket_request_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming_events`
--

INSERT INTO `upcoming_events` (`upcoming_event_id`, `upcoming_event_title`, `upcoming_event_location`, `upcoming_event_time`, `upcoming_event_duration`, `upcoming_event_description`, `upcoming_event_image`, `ticket_request_status`) VALUES
(1, 'czxcz', 'zcxxczc', '2018-06-12 18:45:00', '3', ' zxczxcczxc', 'IMG20180212093113.jpg', 0),
(2, 'asdsd', 'dassdas', '2018-04-18 09:00:00', '3', 'sdasdasdasd', 'IMG_7326.JPG', 0),
(3, 'zxasasdd', 'MIST', '2018-09-09 13:47:00', '2', 'dasasfczxc', 'IMG_20180212_063325.jpg', 0),
(4, 'Pohela Boishakh ', 'MIST plaza', '2018-04-14 08:00:00', '1', 'dress code: white & Red, Sharee, Panjabi.\r\nno western dress.', 'baishakh.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_fnm` varchar(255) NOT NULL,
  `u_unm` varchar(255) NOT NULL,
  `u_pwd` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_img` varchar(255) NOT NULL,
  `forgot_pass_identity` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_email`, `u_img`, `forgot_pass_identity`, `created`, `modified`, `status`) VALUES
(2, 'adssdas', 'dasdsd', 'asdfgh', 'abdullah@gmail.com', 'Capture.PNG', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'Mushfiqur Rahim', 'mushi123', 'mushi', 'mushi123@gmail.com', 'IMG20180212172321.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'asdxcc', 'fsdasdasd', 'naved', 'naved@gmail.com', '28534983_1936042756469317_341201337_n.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(5, 'Faisal Ibn Aziz', 'faisal4590', 'googlemaniac420', 'optimizedfaisal42@gmail.com', 'mine.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(6, 'Tamim Iqbal', 'dashing_tamim', 'tamim', 'tamim@gmail.com', '27751595_10211536402985982_2832427990587427186_n.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(7, 'admin', 'admin', 'admin', 'admin@gmail.com', 'IMG_20180212_174325.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(8, 'Salman Sirajee', 'salman', 'salman', 'salman@ymail.com', '18447078_1891393441074528_3751286787578052717_n.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(9, 'nitu_rawnak', 'nitu', 'nitu', 'nitu@gmail.com', '29186777_2016350281725769_7516774989471678464_n.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(10, 'Mahmuda Rawnak Jahan', 'Nitu Rawnak', 'nitu201514058', 'nitu.islam96@gmail.com', '21557266_1747170441992349_1645168633_o.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_history`
--
ALTER TABLE `chat_history`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `timeline_post`
--
ALTER TABLE `timeline_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  ADD PRIMARY KEY (`upcoming_event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_history`
--
ALTER TABLE `chat_history`
  MODIFY `chat_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `timeline_post`
--
ALTER TABLE `timeline_post`
  MODIFY `post_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  MODIFY `upcoming_event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
