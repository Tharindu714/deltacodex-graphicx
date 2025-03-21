-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.32 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for deltagraphics
CREATE DATABASE IF NOT EXISTS `deltagraphics` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `deltagraphics`;

-- Dumping structure for table deltagraphics.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table deltagraphics.admin: ~0 rows (approximately)
REPLACE INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `status`) VALUES
	(1, 'Tharindu', 'Chanaka', 'tharinduchanaka6@gmail.com', 'tharinduCHA@8754', 1),
	(2, 'Sadeesha', 'Nilakshini', 'sadeeshanilakshi25@gmail.com', 'Sadee0325#', 1);

-- Dumping structure for table deltagraphics.company_details
CREATE TABLE IF NOT EXISTS `company_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `totalexp` int NOT NULL,
  `uiexp` int NOT NULL,
  `happyclients` int NOT NULL,
  `uicount` int NOT NULL,
  `graphicworks` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table deltagraphics.company_details: ~0 rows (approximately)
REPLACE INTO `company_details` (`id`, `totalexp`, `uiexp`, `happyclients`, `uicount`, `graphicworks`) VALUES
	(1, 6, 2, 80, 50, 75);

-- Dumping structure for table deltagraphics.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `customer_name` varchar(45) NOT NULL,
  `designation` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table deltagraphics.feedback: ~0 rows (approximately)
REPLACE INTO `feedback` (`id`, `content`, `customer_name`, `designation`) VALUES
	(1, 'Amazing Service, Fast Service & Quality work', 'Tharindu Chanaka', 'Owner of Delta Codex Softwares'),
	(2, 'I develop my business E- commerce application with this company. As it says this company provide me a very friendly service even after the service!! Very recommended company ', 'Chanaka Sanjeewa', 'Owner of Chanaka Electronics');

-- Dumping structure for table deltagraphics.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  `project_name` varchar(45) NOT NULL,
  `portfolio_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_images_portfolio_idx` (`portfolio_id`),
  CONSTRAINT `fk_images_portfolio` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table deltagraphics.images: ~0 rows (approximately)
REPLACE INTO `images` (`id`, `path`, `project_name`, `portfolio_id`) VALUES
	(1, 'Portfolio_photo//0_670984f5242b9FB post - advertisment.png', 'FB post - advertisment', 3),
	(2, 'Portfolio_photo//0_67098f879380eBusiness Advertisment.png', 'Business Advertisement ', 2),
	(3, 'Portfolio_photo//0_670990709350eWedding Advertisement .png', 'Wedding Advertisement ', 3),
	(4, 'Portfolio_photo//0_670990a8c7a3aDesigner Advertisement.png', 'Designer Advertisement', 3),
	(5, 'Portfolio_photo//0_670990ca73e58Wedding Advertisement.png', 'Wedding Advertisement', 3),
	(6, 'Portfolio_photo//0_670990e4848b3Donation Advertisement.jpeg', 'Donation Advertisement', 3),
	(7, 'Portfolio_photo//0_6709910311070Designer Advertisement.jpeg', 'Designer Advertisement', 2),
	(8, 'Portfolio_photo//0_67099154b0851Gaming Youtube thumbnail.jpeg', 'Gaming Youtube thumbnail', 4),
	(9, 'Portfolio_photo//0_670991785f8f0Gaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(10, 'Portfolio_photo//0_670991a0734a9Dancing Youtube Thumbnail.jpeg', 'Dancing Youtube Thumbnail', 4),
	(11, 'Portfolio_photo//0_67099230a8d05Dancing Youtube Thumbnail.jpeg', 'Dancing Youtube Thumbnail', 4),
	(12, 'Portfolio_photo//0_67099246a22b1Dancing Youtube Thumbnail.jpeg', 'Dancing Youtube Thumbnail', 4),
	(13, 'Portfolio_photo//0_6709926cb22fbExplanation Thumbnail.jpeg', 'Explanation Thumbnail', 4),
	(14, 'Portfolio_photo//0_67099298a14ddFitness Gym Post.jpeg', 'Fitness Gym Post', 2),
	(15, 'Portfolio_photo//0_670992f0c0466Fitness Gym Post.jpeg', 'Fitness Gym Post', 2),
	(16, 'Portfolio_photo//0_6709932c1f8e6Opening Ceremony Card.jpeg', 'Opening Ceremony Card', 2),
	(17, 'Portfolio_photo//0_67099344e8dbfMembership Card Design.jpeg', 'Membership Card Design', 3),
	(18, 'Portfolio_photo//0_6709939ae8d07Visiting Card Design .jpeg', 'Visiting Card Design ', 3),
	(19, 'Portfolio_photo//0_670993bb3b8c9Toy Logo Design.jpeg', 'Toy Logo Design', 5),
	(20, 'Portfolio_photo//0_670993dd6cddfTraveling Logo Design.jpeg', 'Traveling Logo Design', 5),
	(21, 'Portfolio_photo//0_670993f360a87Youtube Channel Logos.jpeg', 'Youtube Channel Logos', 5),
	(22, 'Portfolio_photo//0_670994260e54bOnline Store logo.png', 'Online Store logo', 5),
	(23, 'Portfolio_photo//0_67099470d41c0Horrar YT Channel Logo.jpeg', 'Horrar YT Channel Logo', 5),
	(24, 'Portfolio_photo//0_6709948f82e32YT Channel logo.jpeg', 'YT Channel logo', 5),
	(25, 'Portfolio_photo//0_670994b2d1104Software Company Post.png', 'Software Company Post', 3),
	(26, 'Portfolio_photo//0_670994efb4cb1Software Company Post.png', 'Software Company Post', 2),
	(27, 'Portfolio_photo//0_6709951761cbeSoftware Company Post.png', 'Software Company Post', 3),
	(28, 'Portfolio_photo//0_6709952e66d0eSkin Retouching.jpeg', 'Skin Retouching', 7),
	(29, 'Portfolio_photo//0_670995589b605Skin Retouching.jpeg', 'Skin Retouching', 7),
	(30, 'Portfolio_photo//0_670995b33f5fcBook Cover Designs.jpeg', 'Book Cover Designs', 7),
	(31, 'Portfolio_photo//0_670995ca65c5bBook Cover Design.jpeg', 'Book Cover Design', 2),
	(32, 'Portfolio_photo//0_670995e2adc04Book Cover Design.jpeg', 'Book Cover Design', 2),
	(33, 'Portfolio_photo//0_6709962498e88Seller Post Design.jpeg', 'Seller Post Design', 2),
	(34, 'Portfolio_photo//0_6709964958cfbDVD Collection Post.png', 'DVD Collection Post', 2),
	(35, 'Portfolio_photo//0_67099688ec907DVD Collection Post.jpeg', 'DVD Collection Post', 2),
	(36, 'Portfolio_photo//0_670996b4b16a5T-shirt Designs.jpeg', 'T-shirt Designs', 7),
	(37, 'Portfolio_photo//0_670996e1a49cbPrinted arm cut design.jpeg', 'Printed arm cut design', 7),
	(38, 'Portfolio_photo//0_67099708cfc42University T-shirt Design.jpeg', 'University T-shirt Design', 7),
	(39, 'Portfolio_photo//0_6709973637428playboy t-shirt Design.jpeg', 'playboy t-shirt Design', 7),
	(40, 'Portfolio_photo//0_6709977ef3856web site SEO Design.jpeg', 'web site SEO Design', 3),
	(41, 'Portfolio_photo//0_6709979355eabWeb logo design.png', 'Web logo design', 5),
	(42, 'Portfolio_photo//0_670997a9aa0e3Brand Logo design.png', 'Brand Logo design', 5),
	(43, 'Portfolio_photo//0_6709985839c96Chocolate advertisement.jpeg', 'Chocolate advertisement', 3),
	(44, 'Portfolio_photo//0_6709987d54301Chocolate advertisement.jpeg', 'Chocolate advertisement', 3),
	(45, 'Portfolio_photo//0_670998989a495Chocolate advertisement.jpeg', 'Chocolate advertisement', 3),
	(46, 'Portfolio_photo//0_670998aad0f7dChocolate advertisement.jpeg', 'Chocolate advertisement', 3),
	(47, 'Portfolio_photo//0_670998c34eb13Chocolate lifestyle post.jpeg', 'Chocolate lifestyle post', 3),
	(48, 'Portfolio_photo//0_670998d783416Chocolate lifestyle post.jpeg', 'Chocolate lifestyle post', 3),
	(49, 'Portfolio_photo//0_6709995022007Chocolate Life style post.jpeg', 'Chocolate Life style post', 3),
	(50, 'Portfolio_photo//0_6709996ff1a95Visiting card Design.jpeg', 'Visiting card Design', 3),
	(51, 'Portfolio_photo//0_670999c4c42d1Gaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(52, 'Portfolio_photo//0_670999cdab8d2Gaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(53, 'Portfolio_photo//0_670999d865b4bGaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(54, 'Portfolio_photo//0_670999e6ac6c1Gaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(55, 'Portfolio_photo//0_670999f95bd4aGaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(56, 'Portfolio_photo//0_67099a189cf8dGaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(57, 'Portfolio_photo//0_67099a2b944d3Gaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(58, 'Portfolio_photo//0_67099a3f94587Gaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(59, 'Portfolio_photo//0_67099a57678d0Dancing Youtube Thumbnail.jpeg', 'Dancing Youtube Thumbnail', 4),
	(60, 'Portfolio_photo//0_67099a69a0408Dancing Youtube Thumbnail.jpeg', 'Dancing Youtube Thumbnail', 4),
	(61, 'Portfolio_photo//0_67099a8a06062Dancing Youtube Thumbnail.jpeg', 'Dancing Youtube Thumbnail', 4),
	(62, 'Portfolio_photo//0_67099af9e5641Software company post.png', 'Software company post', 3),
	(63, 'Portfolio_photo//0_67099b0d17e70Software company post.png', 'Software company post', 3),
	(64, 'Portfolio_photo//0_67099b1cbffcfSoftware company post.png', 'Software company post', 3),
	(65, 'Portfolio_photo//0_67099b36396c2Software company post.png', 'Software company post', 3),
	(66, 'Portfolio_photo//0_67099b7236becSkin Retouching.jpeg', 'Skin Retouching', 7),
	(67, 'Portfolio_photo//0_67099b88521b2Skin Retouching.jpeg', 'Skin Retouching', 7),
	(68, 'Portfolio_photo//0_67099ba1e7bceSkin Retouching.jpeg', 'Skin Retouching', 7),
	(69, 'Portfolio_photo//0_67099bdba913dBook cover design.jpeg', 'Book cover design', 2),
	(70, 'Portfolio_photo//0_67099ca7d0da3Thorana Poster.jpeg', 'Thorana Poster', 3),
	(71, 'Portfolio_photo//0_67099cbcce8b5Black & white poster.jpeg', 'Black & white poster', 3),
	(72, 'Portfolio_photo//0_67099ce567fecGaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(73, 'Portfolio_photo//0_67099cf6edcf9Gaming Youtube Thumbnails.jpeg', 'Gaming Youtube Thumbnails', 4),
	(74, 'Portfolio_photo//0_67099d2f7da42Promotion post.jpeg', 'Promotion post', 2),
	(75, 'Portfolio_photo//0_67099d4b78c89Customizable flyer.jpeg', 'Customizable flyer', 3),
	(76, 'Portfolio_photo//0_67099d66a50d4Advance logo design.jpeg', 'Advance logo design', 5),
	(77, 'Portfolio_photo//0_67099d7b23743Youtube logo design.jpeg', 'Youtube logo design', 5),
	(78, 'Portfolio_photo//0_67099e2a5695eFront face designs.jpeg', 'Front face designs', 7),
	(79, 'Portfolio_photo//0_67099e5419ec6Front face designs.jpeg', 'Front face designs', 7);

-- Dumping structure for table deltagraphics.portfolio
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `portfolio` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table deltagraphics.portfolio: ~0 rows (approximately)
REPLACE INTO `portfolio` (`id`, `portfolio`) VALUES
	(1, 'WebUI'),
	(2, 'Potrait'),
	(3, 'Landscape'),
	(4, 'Thumbnails'),
	(5, 'Logos'),
	(6, 'Figma'),
	(7, 'Other');

-- Dumping structure for table deltagraphics.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `skills` varchar(45) NOT NULL,
  `percentage` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table deltagraphics.skills: ~0 rows (approximately)
REPLACE INTO `skills` (`id`, `skills`, `percentage`) VALUES
	(1, 'HTML5', 100),
	(2, 'CSS3', 90),
	(3, 'JS', 85),
	(4, 'React', 50),
	(5, 'Photoshop', 100),
	(6, 'CorelDraw', 75),
	(7, 'Figma', 85),
	(8, 'Java', 85);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
