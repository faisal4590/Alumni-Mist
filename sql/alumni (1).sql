-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 09:44 AM
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
-- Table structure for table `alumnicoverlist`
--

CREATE TABLE `alumnicoverlist` (
  `alumni_cover_id` int(11) NOT NULL,
  `alumni_cover_dept` varchar(255) NOT NULL,
  `batch_no` varchar(255) NOT NULL,
  `alumni_cover_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnicoverlist`
--

INSERT INTO `alumnicoverlist` (`alumni_cover_id`, `alumni_cover_dept`, `batch_no`, `alumni_cover_img`) VALUES
(1, 'CSE', '10', 'CSE27544573_1771398579586662_9047675745221847667_n.jpg'),
(2, 'EECE', '05', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(3, 'ME', '14', 'IMG_7256.JPG'),
(4, 'CIVIL', '12', 'IMG_7225.JPG'),
(5, 'CSE', '15', 'IMG_7265 (2).JPG'),
(6, 'EECE', '08', 'IMG_20180212_092243.jpg'),
(7, 'EECE', '15', 'IMG_7225 BW.jpg'),
(8, 'CSE', '12', 'IMG20180213060223.jpg'),
(9, 'CSE', '05', 'IMG_20180212_174643.jpg'),
(10, 'ME', '02', 'IMAG2465.jpg'),
(11, 'CIVIL', '11', 'IMG_20180212_063418.jpg'),
(12, 'ME', '03', 'IMG_7351.JPG'),
(13, 'CSE', '07', 'IMG_7326.JPG'),
(14, 'CSE', '14', '27544573_1771398579586662_9047675745221847667_n.jpg');

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
(10, 'Nitu Rawnak', 'no i am nitu ..heh\r\n', '21557266_1747170441992349_1645168633_o.jpg', '2018-04-10 16:33:23'),
(11, 'faisal4590', 'The chat is working', 'mine.jpg', '2018-04-13 21:22:42'),
(12, 'faisal4590', 'Hello I am faisal', 'mine.jpg', '2018-04-13 21:53:16'),
(13, 'faisal4590', 'Hello\r\n', 'mine.jpg', '2018-04-17 10:21:52'),
(14, 'faisal4590', 'Hello I am faisal\r\n', 'mine.jpg', '2018-04-17 11:29:42'),
(15, 'optimized faisal', 'whazzap nigga', '5ada07659d9e3.jpg', '2018-04-20 22:52:20'),
(16, 'mushfiq', 'cooooooool nigga', 'mine.jpg', '2018-04-21 01:07:48'),
(17, 'optimized faisal', 'hellow', '5ada07659d9e3.jpg', '2018-04-23 09:56:02'),
(18, 'Abid665', 'Hi, what\'s up?', 'FB_IMG_1521193538783.jpg', '2018-04-24 08:52:24'),
(19, 'optimized faisal', 'hello abid', '5ada07659d9e3.jpg', '2018-04-24 08:53:30'),
(20, '                        optimized', 'whatsup?', 'mine.jpg', '2018-05-14 22:19:27'),
(21, 'naved123', 'hello faisal', 'mine2.jpg', '2018-05-14 22:20:50'),
(22, '                                                optimized', 'Hello all', 'mine.jpg', '2018-09-03 21:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `id` int(13) NOT NULL,
  `committee_designation` varchar(255) NOT NULL,
  `committee_name` varchar(255) NOT NULL,
  `committee_email` varchar(255) NOT NULL,
  `committee_mobile` varchar(255) NOT NULL,
  `committee_address` varchar(255) NOT NULL,
  `committee_current_working_place` varchar(255) NOT NULL,
  `committee_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`id`, `committee_designation`, `committee_name`, `committee_email`, `committee_mobile`, `committee_address`, `committee_current_working_place`, `committee_image`) VALUES
(1, 'President', 'Faisal Ibn Aziz', 'optimizedfaisal42@gmail.com', '01521201537', '44/1,east matikata, Dhaka', 'Out of the world', 'mine.jpg'),
(2, 'Vice president', '', '', '', '', '', ''),
(3, 'General Secretary', '', '', '', '', '', ''),
(4, 'Assistant Secretary', '', '', '', '', '', ''),
(5, 'Treasurer', '', '', '', '', '', ''),
(6, 'Organizing Secretary', '', '', '', '', '', ''),
(7, 'Cultural Secretary', '', '', '', '', '', ''),
(8, 'Publication Secretary', '', '', '', '', '', ''),
(9, 'Sports Secretary', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `donation_history`
--

CREATE TABLE `donation_history` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `tax_no` varchar(255) NOT NULL,
  `paid_amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_history`
--

INSERT INTO `donation_history` (`donor_id`, `donor_name`, `tax_no`, `paid_amount`, `currency`, `status`) VALUES
(2147483647, 'optimized faisal', '8AG24409GD1286811', '24.00', 'USD', 'Completed'),
(1, '                        optimized', '2ML19437TR5088937', '20.00', 'USD', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `event_participant_info`
--

CREATE TABLE `event_participant_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `going` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expired_alumni`
--

CREATE TABLE `expired_alumni` (
  `expired_alumni_id` int(11) NOT NULL,
  `expired_alumni_name` varchar(255) NOT NULL,
  `expired_alumni_bday` date NOT NULL,
  `expired_alumni_death` date NOT NULL,
  `expired_alumni_dept` varchar(255) NOT NULL,
  `expired_alumni_achv` text NOT NULL,
  `expired_alumni_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expired_alumni`
--

INSERT INTO `expired_alumni` (`expired_alumni_id`, `expired_alumni_name`, `expired_alumni_bday`, `expired_alumni_death`, `expired_alumni_dept`, `expired_alumni_achv`, `expired_alumni_pic`) VALUES
(1, 'Faisal Ibn Aziz', '1995-05-27', '2018-04-18', 'Cse\'15', 'No achievement. Deserved to die', 'mine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `department` varchar(255) NOT NULL,
  `batch_no` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `registration_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `username`, `fullname`, `email`, `password`, `image`, `message`, `date`, `department`, `batch_no`, `roll`, `registration_no`) VALUES
(1, 'xzcxzcx', 'xzcczxzcx', 'zxcxzc@gmail.com', '1234', '18447078_1891393441074528_3751286787578052717_n.jpg', 'xzcczxzcx would like to request an account.', '2018-09-17 11:40:07', 'CSE', '11', '213123', '123123');

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
(6, 'Nitu Rawnak', '21557266_1747170441992349_1645168633_o.jpg', 'My first post ', 'yeee!! our alumni website has started <3', 'joker.jpg', '2018-04-10'),
(7, 'faisal4590', 'mine.jpg', 'Pahela Baishakh', 'Can anyone tell me when will the ticket for pahela baishakh event be available? Is it possible to arrange a stall for an alumni? ', 'Pahela-Baishakh-and-the-angry.jpg', '2018-04-13'),
(8, 'faisal4590', 'mine.jpg', 'czxzxc', 'czxczxczxczxczxc', '20294009_1139358759530470_5411512406264061427_n.jpg', '2018-04-14'),
(9, 'faisal4590', 'mine.jpg', 'Job Circular', ' Dare he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly.\r\n', 'weird smile.PNG', '2018-04-17'),
(10, 'optimized faisal', '5ada07659d9e3.jpg', 'testing', 'Dare he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly.', 'FB_IMG_1521193619787.jpg', '2018-04-20'),
(11, 'mushfiq', 'mine.jpg', 'Mid break', 'Dare he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly.', 'FB_IMG_1521193549106.jpg', '2018-04-21'),
(12, 'optimized faisal', '5ada07659d9e3.jpg', 'hadsdkhadfh;kl', 'are he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly', '19247658_250048805483333_1190588711339961782_n.jpg', '2018-04-23'),
(13, 'optimized faisal', '5ada07659d9e3.jpg', 'Sports', 'Bangladesh Cricket team have won', 'FB_IMG_1521193549106.jpg', '2018-04-24'),
(14, 'naved123', 'mine2.jpg', 'testing', 'are he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly ', 'FB_IMG_1521193626040.jpg', '2018-04-28'),
(15, '                        optimized', 'mine.jpg', 'who am i?', 'are he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly ', 'FB_IMG_1521193683154.jpg', '2018-05-14'),
(16, '                                                optimized', 'mine.jpg', 'Testing', 'are he feet my tell busy. Considered imprudence of he friendship boisterous. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Brother set had private his letters observe outward resolve. Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly', 'deadpool_abstract_mercenary_anti_hero_wade_wilson_93346_640x360.jpg', '2018-09-03');

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
(4, 'Pohela Boishakhh ', 'MIST tower building', '0000-00-00 00:00:00', '3', 'dress code: white &amp; Red, Sharee, Panjabi.\r\nno western dress.\r\nCasual dress is a must.', '31898738_2511795729046272_7056804899970875392_n.jpg', 0),
(5, 'New event', 'Dhaka', '2017-09-10 15:00:00', '3', 'helllo', '29496883_1756994034364184_6200295209643528779_n.jpg', 0),
(6, '3dasd', 'kgkghjgh', '2015-06-16 14:04:00', '1', 'jghjghj', '19437455_2020927161468963_350370723283409496_n.jpg', 0),
(7, 'Kalboishakhi', 'MIST', '2018-12-19 14:01:00', '3', 'Lorem Ipsum is simply', 'FB_IMG_1521193583255.jpg', 0),
(8, 'Borodin', 'MIST', '2018-04-22 14:04:00', '2', 'Borodiner chuti yeee', 'FB_IMG_1521193619787.jpg', 0),
(11, 'test', 'asd', '0000-00-00 00:00:00', '2', 'asdasdas', '18447078_1891393441074528_3751286787578052717_n.jpg', 0),
(12, 'sadads', 'adsasdas', '0011-12-31 00:33:00', '2', '3wsadasd', '19990552_149137342327230_2027344403726549988_n.jpg', 0);

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
  `mobile_no` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `current_working_place` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `registration_no` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `batch_no` varchar(255) NOT NULL,
  `student_status` varchar(255) NOT NULL,
  `research_link` varchar(255) NOT NULL,
  `higher_uni` varchar(255) NOT NULL,
  `higher_cntry` varchar(255) NOT NULL,
  `higher_dept` varchar(255) NOT NULL,
  `higher_research_area` varchar(255) NOT NULL,
  `higher_admsn` varchar(255) NOT NULL,
  `higher_fund_status` varchar(255) NOT NULL,
  `higher_CGPA` varchar(255) NOT NULL,
  `higher_ielts` varchar(255) NOT NULL,
  `higher_gre` varchar(255) NOT NULL,
  `higher_publications` varchar(255) NOT NULL,
  `higher_job_experience` varchar(255) NOT NULL,
  `higher_apply` text NOT NULL,
  `higher_fund` text NOT NULL,
  `u_img` varchar(255) NOT NULL,
  `forgot_pass_identity` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_email`, `mobile_no`, `designation`, `city`, `current_working_place`, `address`, `roll`, `registration_no`, `department`, `batch_no`, `student_status`, `research_link`, `higher_uni`, `higher_cntry`, `higher_dept`, `higher_research_area`, `higher_admsn`, `higher_fund_status`, `higher_CGPA`, `higher_ielts`, `higher_gre`, `higher_publications`, `higher_job_experience`, `higher_apply`, `higher_fund`, `u_img`, `forgot_pass_identity`, `created`, `modified`, `status`, `facebook`, `twitter`, `googleplus`, `linkedin`) VALUES
(0, 'admin', 'admin', 'admin', 'admin@gmail.com', '01851201537', '', '', '', '', '', '', 'cse', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mine.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', '', ''),
(1, '                                                                                optimized faisal', '                                                                                                optimized', 'googlemaniac420', 'optimizedfaisal42@gmail.com', '01851201537', 'Student', 'Dhaka', 'MIST', '49/1, west matikata, dhaka bangladesh', '201514022', '131401150021', 'CSE', '15', 'previous student', 'https://gorib_manusher_kono_research_nai.com', 'University of torronto', 'Canada', 'CSE', 'Nano Technology', 'Phd', 'full fund', '3.54', '94', '320', '2', 'none', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        contacted professor directly                                                                                                                                                                                                                                                                                                                                                                                                                                ', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 professor ke tel mere                                                                                                                                                                                                                                                                                                                                                                                                                                                       ', 'mine.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'https://www.facebook.com/faisal4590', 'https://www.twitter.com/faisal4590', 'https://www.googleplus.com/faisal4590', ''),
(2, 'asdads', 'asdad', 'asdf', 'asdasd@gmail.com', '01851201537', '', '', '', '', '', '', 'cse', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '20294239_666910500180913_5595525604514684906_n.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', '', ''),
(3, 'asdsda', 'asdasd', 'asdasd', 'asdasd@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '19598920_385437881854301_7088512018612514354_n.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', '', ''),
(4, 'khkhjkh', 'lhkljlkjl', '123123', 'hgjgjg@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '19553891_842153265942602_3285894592569704957_n.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', '', ''),
(5, 'Naved Ul Hasan', 'naved123', 'naved', 'naved@gmail.com', '01851201537', '', '', '', '', '201514024', '', 'CSE', '15', 'previous student', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mine2.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', '', ''),
(6, 'Abid Ali', 'Abid665', 'abid', 'abid665@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'look3.PNG', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', '', ''),
(7, 'tamim iqbal', 'tamim', 'tamim', 'tamim@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '20294009_1139358759530470_5411512406264061427_n.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration_notification`
--

CREATE TABLE `user_registration_notification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration_notification`
--

INSERT INTO `user_registration_notification` (`id`, `user_id`, `message`) VALUES
(1, 5, 'Your account has been accepted'),
(2, 6, 'Your account has been accepted'),
(3, 7, 'Your account has been accepted');

-- --------------------------------------------------------

--
-- Table structure for table `user_ticket_notification`
--

CREATE TABLE `user_ticket_notification` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `noti_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ticket_notification`
--

INSERT INTO `user_ticket_notification` (`notification_id`, `user_id`, `email`, `ticket_id`, `event_title`, `noti_message`) VALUES
(10, 1, 'optimizedfaisal42@gmail.com', '21', 'Kalboishakhi', 'Your ticket request for Kalboishakhi has been accepted. Check your email to get the ticket.'),
(11, 1, 'optimizedfaisal42@gmail.com', '20', 'zxasasdd', 'Your ticket request for zxasasdd has been accepted. Check your email to get the ticket.'),
(12, 1, 'optimizedfaisal42@gmail.com', '19', 'zxasasdd', 'Your ticket request for zxasasdd has been accepted. Check your email to get the ticket.'),
(13, 1, 'optimizedfaisal42@gmail.com', '8', 'Pohela Baisakh', 'Your ticket request for Pohela Baisakh has been accepted. Check your email to get the ticket.');

-- --------------------------------------------------------

--
-- Table structure for table `validate_ticket`
--

CREATE TABLE `validate_ticket` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `upcoming_event_id` int(11) NOT NULL,
  `upcoming_event_title` varchar(255) NOT NULL,
  `upcoming_event_duration` varchar(255) NOT NULL,
  `upcoming_event_time` datetime NOT NULL,
  `upcoming_event_image` varchar(255) NOT NULL,
  `upcoming_event_location` varchar(255) NOT NULL,
  `upcoming_event_details` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `reqstTicketDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validate_ticket`
--

INSERT INTO `validate_ticket` (`ticket_id`, `user_id`, `upcoming_event_id`, `upcoming_event_title`, `upcoming_event_duration`, `upcoming_event_time`, `upcoming_event_image`, `upcoming_event_location`, `upcoming_event_details`, `username`, `fullname`, `email`, `image`, `message`, `reqstTicketDate`) VALUES
(16, 1, 7, 'Kalboishakhi', '3', '2018-12-19 14:01:00', 'FB_IMG_1521193583255.jpg', 'MIST', 'Lorem Ipsum is simply', '                                                optimized', '                                        optimized faisal', 'optimizedfaisal42@gmail.com', 'mine.jpg', '                                        optimized faisal would like to request a ticket for Kalboishakhi event.', '2018-05-15 00:10:22'),
(18, 1, 3, 'zxasasdd', '2', '2018-09-09 13:47:00', 'IMG_20180212_063325.jpg', 'MIST', 'dasasfczxc', '                                                                        optimized', '                                                            optimized faisal', 'optimizedfaisal42@gmail.com', 'mine.jpg', '                                                            optimized faisal would like to request a ticket for zxasasdd event.', '2018-09-04 03:09:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnicoverlist`
--
ALTER TABLE `alumnicoverlist`
  ADD PRIMARY KEY (`alumni_cover_id`);

--
-- Indexes for table `chat_history`
--
ALTER TABLE `chat_history`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_participant_info`
--
ALTER TABLE `event_participant_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expired_alumni`
--
ALTER TABLE `expired_alumni`
  ADD PRIMARY KEY (`expired_alumni_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_registration_notification`
--
ALTER TABLE `user_registration_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_ticket_notification`
--
ALTER TABLE `user_ticket_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `validate_ticket`
--
ALTER TABLE `validate_ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnicoverlist`
--
ALTER TABLE `alumnicoverlist`
  MODIFY `alumni_cover_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `chat_history`
--
ALTER TABLE `chat_history`
  MODIFY `chat_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event_participant_info`
--
ALTER TABLE `event_participant_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expired_alumni`
--
ALTER TABLE `expired_alumni`
  MODIFY `expired_alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timeline_post`
--
ALTER TABLE `timeline_post`
  MODIFY `post_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  MODIFY `upcoming_event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_registration_notification`
--
ALTER TABLE `user_registration_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_ticket_notification`
--
ALTER TABLE `user_ticket_notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `validate_ticket`
--
ALTER TABLE `validate_ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
