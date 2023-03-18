-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2023 at 04:14 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(350) NOT NULL,
  `pic` varchar(250) NOT NULL,
  `group` varchar(300) NOT NULL,
  `made` varchar(450) NOT NULL,
  `category` varchar(20) NOT NULL COMMENT 'designing/developing/motion',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `images`, `pic`, `group`, `made`, `category`) VALUES
(1, 'Sportsnet', 'We were assigned to create an intro for Sportsnet Football Match using Cinema 4D and After Effects. The 3d modeling and texturing have been done using Cinema 4D by me, and further, the rendered videos were edited in After Effects. ', '\"sp1.jpg\",\"sp2.jpg\",\"sp3.jpg\",\"sp4.jpg\"', 'sp2.jpg', 'individual', 'C4D, After Effects', 'motion'),
(2, 'Ceci', 'This assignment was to create a whole brand from scratch. We were given the names, from which we had to make the logo and further all the container models, brand guidelines, banner ads, and last but not least, a promotional video.', '\"ceci1.jpg\",\"ceci2.jpg\",\"ceci3.jpg\",\"ceci4.jpg\"', 'ceci2.jpg', 'individual', 'Illustrator, Photoshop, Indesign, After Effects', 'designing'),
(3, 'Travel Commercial', 'Morphing in Cinema 4D- this was a fun assignment. We were free to choose any theme of our choice and make a tv commercial. I made a travel agency commercial using 3d models of monuments, in which each monument gets changed to another as the frame changes.', '\"travel1.jpg\",\"travel2.jpg\",\"travel3.jpg\"', 'travel1.jpg', 'individual', 'C4D, After Effects', 'Motion'),
(4, 'Hackathon', 'This was our midterm assignment in all the subjects together. HouseComm ThermoSecurity System, we had to build a one-scroll webpage for this using all the concepts we learned till then and create a 3d model for this and advertisements in 24 hours. My role was as a web developer in this assignment.', '\"hack1.jpg\",\"hack2.jpg\",\"hack3.jpg\",\"hack4.jpg\"', 'hack4.jpg', 'Group', 'HTML, SCSS, CSS, JS, Cinema4D, Illustrator, Indesign', 'developing'),
(5, 'Bootcamp', 'This was a surprise assignment for the first week of school after summer break. We were divided into groups of four and were assigned to do a branding for a new startup company of our own. From getting to know your group members, to making this assignment a success, we had to go through a lot in 5 days. But it was a really interesting assignment.', '\"bootcamp1.jpg\",\"bootcamp2.jpg\",\"bootcamp3.jpg\",\"bootcamp4.jpg\"', 'bootcamp2.jpg', 'Group', 'HTML, SCSS, CSS, JS, Cinema4D, Illustrator, After Effects', 'developing'),
(6, 'Roku', 'This assignment is still under build. Its a group project for the Roku OTT platform for movies, radio, and music. This one is stretched for two semesters, the fall semester, and it\'s designers\' part and development is for the winter semester.', '\"roku1.jpg\",\"roku2.jpg\",\"roku3.jpg\",\"roku4.jpg\"', 'roku2.jpg', 'Group', 'Illustrator, XD', 'developing'),
(7, 'Pampers Beer', 'For this, we were supposed a make a whole new mashup brand from two existing brands. The ones I and my team member got were Heineken Beer and Pampers Diaper. What\'s more interesting than a Pampers Beer as the mashup Product, for Babies and Mothers? I was the developer of the group.', '\"pampers1.jpg\",\"pampers2.jpg\",\"pampers3.jpg\",\"pampers4.jpg\"', 'pampers3.jpg', 'Group', 'C4D, After Effects, Illustrator, HTML, CSS, JS', 'developing'),
(8, 'Guess the Character', 'This is a project using python. Out of all the characters from Winnie the Pooh, a guessing game is made. ', '', '', 'Single', 'Python Build', 'developing'),
(9, 'Vaping Campaign', 'Campaign against vaping in teenagers.', '', '', 'Group', 'After Effects', 'motion'),
(10, 'Play Fair', 'Campaign against bullying against LGBTQ+ community in sports. ', '', '', 'group (charge of backend)', '', 'developing'),
(11, 'Title Sequence', 'trailer Kinda', '', '', 'individual', 'after effects', 'motion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
