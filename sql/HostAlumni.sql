-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 05:04 PM
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
(1, 'CSE', '10', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(2, 'EECE', '05', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(5, 'CSE', '15', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(6, 'EECE', '08', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(7, 'EECE', '15', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(9, 'CSE', '05', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(10, 'ME', '02', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(11, 'CIVIL', '11', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(12, 'ME', '03', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(13, 'CSE', '07', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(14, 'CSE', '14', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(15, 'CSE', '18', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(16, 'CSE', '19', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(17, 'CSE', '12', '27458954_1727552490621283_8360662668094967845_n.jpg'),
(18, 'ME', '12', 'alumni graduation.jpg');

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
(1, '                        Faisal Ibn Aziz', 'Hello this is testing', '22.JPG', '2018-10-15 13:58:34'),
(2, '                        Faisal Ibn Aziz', 'Hello from faisal', '22.JPG', '2018-10-15 13:58:47'),
(3, '                        Faisal Ibn Aziz', 'CSE fest e ke ke ashbi?', '22.JPG', '2018-10-15 13:58:58');

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
(1, 'President', 'Faisal', 'khair@gmail.com', '01521201537', '44/1,east matikata, Dhaka', 'MIST commandant', 'commandant.jpg'),
(2, 'Vice President', 'Air Commodore Md Afzal Hossain, ndc, psc', ' afzal@cse.mist.ac.bd', '015210201536', '8th Floor, Room No: 816. General Mustafiz Tower, MIST.\r\n\r\nMirpur Cantonment, Dhaka-1216, Bangladesh.', 'Head, Dept of CSE\r\nFaculty of Electrical & Computer Engineering', 'afzal.jpg'),
(3, 'General Secretary', 'Col A B M HUMAYUN KABIR', ' humayun4190@yahoo.com', '015210201536', '	Department of Computer Science and Engineering (CSE), Military Institute of Science and Technology (MIST), Mirpur Cantonment, Dhaka-1216, Bangladesh.', 'SI, Dept of CSE\r\nFaculty of Electrical & Computer Engineering', 'humayoon.jpg'),
(4, 'Assistant Secretary', 'Lt Col Md Mahboob Karim', 'mahboob4146@yahoo.com', '015210201536', 'Instr Cl A\r\nFaculty of Electrical & Computer Engineering', 'Instr Cl A\r\nFaculty of Electrical & Computer Engineering', 'mahboob.jpg'),
(5, 'Treasurer', 'Lt Commander S M Anisur Rahman', 'anis@cse.mist.ac.bd', '015210201536', 'Department of Computer Science and Engineering (CSE), Military Institute of Science and Technology (MIST), Mirpur Cantonment, Dhaka-1216, Bangladesh.', 'Assistant Professor\r\nFaculty of Electrical & Computer Engineering', 'anis.jpg'),
(6, 'Organizing Secretary', 'Major Dr. Muhammad Nazrul Islam', 'nazrulturku@gmail.com', '015210201536', 'Faculty of Electrical and Computer Engineering\r\n\r\nMilitary Institute of Science and Technology (MIST)\r\n\r\nMirpur Cantonment, Dhaka-1216, Bangladesh.', 'Associate Professor\r\nFaculty of Electrical & Computer Engineering', 'Nazrul.jpg'),
(7, 'Cultural Secretary', 'Tasmiah Tamzid Anannya', 'anannya.tasmi@gmail.com', '015210201536', '8th Floor, General Mustafiz Tower, MIST.\r\n\r\nMirpur Cantonment, Dhaka-1216, Bangladesh.', 'Lecturer\r\nFaculty of Electrical & Computer Engineering', 'Tasmiah.jpg'),
(8, 'Publication Secretary', 'Rubyeat Islam', 'rubyeat88@gmail.com', '015210201536', '8th Floor, Room No: 806, General Mustafiz Tower, MIST.\r\n\r\nMirpur Cantonment, Dhaka-1216, Bangladesh', 'Lecturer\r\nFaculty of Electrical & Computer Engineering', 'rubiyat.jpg'),
(9, 'Sports Secretary', '\r\n\r\nSahrima Jannat Oishwee', ' sjoishwee@gmail.com', '015210201536', '8th Floor, General Mustafiz Tower, MIST.\r\n\r\nMirpur Cantonment, Dhaka-1216, Bangladesh.', 'Lecturer\r\nFaculty of Electrical & Computer Engineering', 'oishwee.jpg');

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
-- Table structure for table `managecontents`
--

CREATE TABLE `managecontents` (
  `id` int(11) NOT NULL,
  `logo_title` varchar(255) NOT NULL,
  `logo_image` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managecontents`
--

INSERT INTO `managecontents` (`id`, `logo_title`, `logo_image`, `background`) VALUES
(1, 'MIST ALUMNI ASSOCIATION', 'mine.jpg', 'asd');

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
(4, 'Pohela Boishakhh ', 'MIST tower building', '0000-00-00 00:00:00', '3', 'dress code: white &amp; Red, Sharee, Panjabi.\r\nno western dress.\r\nCasual dress is a must.', '19732321_290365301432953_8780345044869974288_n.jpg', 0),
(5, 'New event', 'Dhaka', '2017-09-10 15:00:00', '3', 'helllo', '29496883_1756994034364184_6200295209643528779_n.jpg', 0),
(6, '3dasd', 'kgkghjgh', '2015-06-16 14:04:00', '1', 'jghjghj', '19437455_2020927161468963_350370723283409496_n.jpg', 0),
(7, 'Kalboishakhi', 'MIST', '2018-12-19 14:01:00', '3', 'Lorem Ipsum is simply', 'FB_IMG_1521193583255.jpg', 0),
(8, 'Borodin', 'MIST', '2018-04-22 14:04:00', '2', 'Borodiner chuti yeee', 'FB_IMG_1521193619787.jpg', 0),
(11, 'test', 'asd', '0000-00-00 00:00:00', '2', 'asdasdas', '19511530_1704019939893724_554267434792721661_n.jpg', 0),
(12, 'sadads', 'adsasdas', '0011-12-31 00:33:00', '2', '3wsadasd', '19990552_149137342327230_2027344403726549988_n.jpg', 0),
(13, 'CSE Fest', 'MIST', '2018-10-30 14:11:00', '2', 'CSE fest will be arranged for all department of CSE', 'IMG_7225.JPG', 0);

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
(0, 'admin', 'admin', 'admin', 'admin@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', '', ''),
(8, '                    Mahmuda Rawnak Jahan Nitu', '                        Mahmuda Rawnak', 'nitu', 'nitu@gmail.com', '01798608077', 'Student', 'Dhaka', 'MIST', 'Oriental Harmony. House: 34/B. Road:5, Dhanmondi.', '201514058', '131401150056', 'CSE', '15', 'previous student', 'https://www.researchget.net/smart-germination-assistant/', '', '', '', '', '', 'partial fund', '', '', '', '', '', '                                                                    ', '                                                                    ', '58.PNG', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'https://www.facebook.com/nitu', 'https://www.twittwer.com/nitu', 'https://www.gmail.com/nitu', 'https://www.linkdin.com/nitu'),
(9, '                    Rubyeat Islam', '                        Rubyeat Islam', 'rubyeat', 'rubyeat@gmail.com', '01521389534', 'Lecturer,Faculty of Electrical &amp; Computer Engineering', 'Dhaka', 'MIST', '8th Floor, Room No: 806, General Mustafiz Tower, MIST.\r\nMirpur Cantonment, Dhaka-1216, Bangladesh', '201214022', '111401150021', 'CSE', '12', 'previous student', 'https://researchget.net/data-mining', 'University Of Virginia', 'USA, Virginia', 'CSE', 'Data mining', 'MSc', 'full fund', '3.95', '7.5', '320', '5', '3 ', '                                                                    Contacted professor directly. He encouraged me to apply centrally.', '                                                              Central fund      ', 'rubiyat.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'https://www.facebook.com/rubyeat/', 'https://www.twitter.com/rubyeat/', 'https://www.gmail.com/rubyeat/', 'https://www.linkdin.com/rubyeat/'),
(10, '                                        Faisal Ibn Aziz', '                                                Faisal Ibn Aziz', 'googlemaniac420', 'optimizedfaisal42@gmail.com', '01521201537', 'Student', 'Dhaka', 'MIST', '44/1, east matikata, dhaka cantonment, dhaka', '201514022', '131401150021', 'CSE', '15', 'previous student', 'www.researchget.net/smart-germination-assistant/', 'University of Alabama', 'Arisona', 'CSE', 'Data mining', 'Phd', 'partial fund', '3.60', '7', '312', '2', '1 year', '                                                                                            Contacted professor                                            ', '                                                                                   Through professor                                                     ', '22.JPG', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'https://www.facebook.com/faisal4590', 'https://www.twitter.com/faisal4590', 'https://www.gmail.com/faisal4590', 'https://www.linkdin.com/faisal4590');

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
(3, 7, 'Your account has been accepted'),
(4, 2, 'Your account has been accepted'),
(5, 2, 'Your account has been accepted'),
(6, 2, 'Your account has been accepted'),
(7, 2, 'Your account has been accepted'),
(8, 2, 'Your account has been accepted'),
(9, 2, 'Your account has been accepted'),
(10, 2, 'Your account has been accepted'),
(11, 2, 'Your account has been accepted'),
(12, 2, 'Your account has been accepted'),
(13, 2, 'Your account has been accepted'),
(14, 2, 'Your account has been accepted'),
(15, 2, 'Your account has been accepted'),
(16, 2, 'Your account has been accepted'),
(17, 2, 'Your account has been accepted'),
(18, 2, 'Your account has been accepted'),
(19, 2, 'Your account has been accepted'),
(20, 2, 'Your account has been accepted'),
(21, 2, 'Your account has been accepted'),
(22, 3, 'Your account has been accepted'),
(23, 4, 'Your account has been accepted'),
(24, 4, 'Your account has been accepted'),
(25, 4, 'Your account has been accepted'),
(26, 14, 'Your account has been accepted'),
(27, 7, 'Your account has been accepted'),
(28, 8, 'Your account has been accepted'),
(29, 9, 'Your account has been accepted'),
(30, 10, 'Your account has been accepted');

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
(13, 1, 'optimizedfaisal42@gmail.com', '8', 'Pohela Baisakh', 'Your ticket request for Pohela Baisakh has been accepted. Check your email to get the ticket.'),
(14, 1, 'optimizedfaisal42@gmail.com', '18', 'zxasasdd', 'Your ticket request for zxasasdd has been accepted. Check your email to get the ticket.'),
(15, 1, 'optimizedfaisal42@gmail.com', '16', 'Kalboishakhi', 'Your ticket request for Kalboishakhi has been accepted. Check your email to get the ticket.'),
(16, 1, 'optimizedfaisal42@gmail.com', '16', 'Kalboishakhi', 'Your ticket request for Kalboishakhi has been accepted. Check your email to get the ticket.'),
(17, 10, 'optimizedfaisal42@gmail.com', '17', 'Kalboishakhi', 'Your ticket request for Kalboishakhi has been accepted. Check your email to get the ticket.');

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
-- Indexes for table `managecontents`
--
ALTER TABLE `managecontents`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `alumni_cover_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `chat_history`
--
ALTER TABLE `chat_history`
  MODIFY `chat_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `managecontents`
--
ALTER TABLE `managecontents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timeline_post`
--
ALTER TABLE `timeline_post`
  MODIFY `post_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  MODIFY `upcoming_event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_registration_notification`
--
ALTER TABLE `user_registration_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_ticket_notification`
--
ALTER TABLE `user_ticket_notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `validate_ticket`
--
ALTER TABLE `validate_ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
