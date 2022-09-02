-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 05:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothing`
--

CREATE TABLE `clothing` (
  `pid` int(4) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdescription` varchar(500) NOT NULL,
  `pqty` int(5) NOT NULL,
  `pprice` decimal(6,0) NOT NULL,
  `pimage` varchar(50) NOT NULL,
  `pcategory` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`pid`, `pname`, `pdescription`, `pqty`, `pprice`, `pimage`, `pcategory`) VALUES
(1, 'CLASSIC WESTERN STANDARD FIT SHIRT', 'Worn by pioneers and cowboys, our Western Shirts have been loved by generations for a reason: With its durable construction and iconic style, it’s the epitome of rugged Americana.', 4, '60', 'images/1.jpg', 'man'),
(2, 'BARSTOW WESTERN DENIM SHIRT', 'Cowboy boots and chaps not included. As a brand with deep roots in the American West, there\'s nothing we love more than the rugged-yet-put-together Western Shirt. ', 6, '70', 'images/2.jpg', 'man'),
(3, 'BARSTOW WESTERN SHIRT (BIG).', 'Cowboy boots and chaps not included. As a brand with deep roots in the American West, there\'s nothing we love more than the rugged-yet-put-together Western Shirt.', 9, '70', 'images/3.jpg', 'man'),
(4, 'MOCK T-SHIRT.', 'Laid-back and ultra-luxe. Our new Mock T Shirt features a classic tee cut, short sleeves and a high collar that lays fitted against the neck. In a supersoft Muted Lime wide-striped design, this instant closet favorite is as comfortable as it is seasonless.', 10, '68', 'images/4.jpg', 'man'),
(5, 'HOUSEMARK POLO SHIRT.', 'This is no ordinary polo shirt. Designed with performance technology, it\'ll keep you looking—and feeling—cool, even during the dog days of summer.', 12, '39', 'images/5.jpg', 'man'),
(6, 'RELAXED POCKET TEE\r\n', 'With 100% cotton jersey, a modern, relaxed silhouette and a vintage-inspired pocket, this is everything a T-shirt should be. Wear it with your favorite jeans.', 6, '29', 'images/6.jpg', 'man'),
(7, 'RELAXED FIT SHORT SLEEVE T-SHIRT.', 'Jeans and a tee… name a more iconic duo, we’ll wait. With soft jersey and a streetwear-inspired relaxed fit', 60, '30', 'images/7.jpg', 'man'),
(8, 'SUNSET CAMP SHIRT.', 'No summer line-up\'s complete without a camp shirt. It breathes the relaxed vibe that summer\'s all about, but is slightly more stepped-up than a T-shirt.', 12, '65', 'images/8.jpg', 'man'),
(9, 'DENIM SHORTALLS TODDLER GIRLS 2T-4T.', 'They\'re like your favorite overalls—only shorter! Made from stretchy denim, they feature a buckle closure, adjustable shoulder straps and crotch snaps for easy changing.', 56, '45', 'images/9.jpg', 'kids'),
(10, 'STRETCH TRUCKER JACKET LITTLE GIRLS 4-6X.', 'A style so classic it\'s been passed down for generations, this is an everyday kind of layer.', 13, '56', 'images/10.jpg', 'kids'),
(11, 'TRUCKER JACKET LITTLE BOYS 4-7.', 'The original jean jacket, downsized for your little one,Made with all the classic styling features you expect from a jean jacket.', 29, '44', 'images/11.jpg', 'kids'),
(12, 'RETRO RINGER T-SHIRT BIG GIRLS S-XL.', 'Our playful tees are designed to pair perfectly with our denim. We constructed this tee out of super soft jersey that\'ll feel comfy all day long.', 66, '22', 'images/12.jpg', 'kids'),
(13, '510™ SKINNY FIT PATCHED BIG BOYS JEANS 8-20.', 'Stretch denim,Sits below waist,Skinny from hip to ankle,Patches and deconstructions,Adjustable waistband,5 pockets,Button closure,Skinny fit', 27, '48', 'images/13.jpg', 'kids'),
(14, 'SCRUNCHIE WAIST TRUCKER JACKET BIG GIRLS S-XL.', 'This Oversized Cropped Trucker Jacket will be the perfect effortless outer layer for the warm days ahead. Made from traditional non-stretch denim, it features a button closure, cuffs, classic collar and two pockets for essentials.', 52, '60', 'images/14.jpg', 'kids'),
(15, 'LONG SLEEVE HOODED T-SHIRT BIG BOYS S-XL.', 'Cotton for comfy feel,Elastic cuffs,Long sleeves,Hoodie,Kangaroo pocket,Levi\'s® graphic print,Print on sleeve.', 19, '28', 'images/15.jpg', 'kids'),
(16, 'SHORT SLEEVE GRAPHIC T-SHIRT BIG BOYS S-XL.', 'Cotton for comfy feel,Ribbed collar,Short sleeves,Levi\'s® logo,Graphic tie-dye print,Casual\\, comfy fit.', 61, '23', 'images/16.jpg', 'kids'),
(17, '501® ORIGINAL HIGH RISE WOMEN\'S SHORTS.', 'We didn’t just invent the blue jean—we also invented the first-ever jean shorts. An iconic style that defines your waist and hugs you in all the right places.', 28, '79', 'images/17.jpg', 'woman'),
(18, '501® ORIGINAL MID THIGH WOMEN\'S SHORTS.', 'The first-ever jean shorts. Modeled after the 501® Original Jeans, these denim shorts were made with our iconic vintage-inspired fit, a flattering high rise and a longer inseam.', 65, '70', 'images/18.jpg', 'woman'),
(19, '501® ORIGINAL HIGH-RISE WOMEN\'S SHORTS.', 'Inspired by the Levi\'s® Fresh Produce collection from 1973, Levi\'s® Fresh is a new line of sustainably produced clothing. Made with plant-based, planet-friendly dyes.', 24, '69', 'images/19.jpg', 'woman'),
(20, 'RED TAB™ SWEATSHIRTS.', 'This modern take on an old faithful is part of our new Tab™ Sweats collection, full of cozy essentials that are outside world-approved.', 65, '50', 'images/20.jpg', 'woman'),
(21, '501® \'90S CRAZY LEGS WOMEN\'S SHORTS.', 'Ready to own a piece of denim history? This Levi’s® 501® Shorts fit, aptly named Crazy Legs, takes inspiration from an illustration-covered 1967 collection of the same name.', 65, '80', 'images/21.jpg', 'woman'),
(22, 'CLASSIC BERMUDA DENIM WOMEN\'S SHORTS.', 'The shorts of the season. Our Bermuda Shorts feature a classic mid-rise and a knee-grazing fit for an always timeless, vintage-inspired look.', 24, '50', 'images/22.jpg', 'woman'),
(23, 'RIBCAGE DENIM SKIRT.', 'Our highest high rise reimagined as a versatile denim skirt. It\'s become a hip-slimming and waist-defining obsession. Sustainably made with TENCEL™ fabric for reduced environmental impact.', 38, '80', 'images/23.jpg', 'woman'),
(24, '501® ORIGINAL WOMEN\'S SHORTS.', 'We didn’t just invent the blue jean—we also invented the first-ever jean shorts. An iconic style that defines your waist and hugs you in all the right places', 120, '44', 'images/24.jpg', 'woman');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cname` varchar(20) NOT NULL,
  `csubject` varchar(20) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `cphone` varchar(30) NOT NULL,
  `cmessage` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cname`, `csubject`, `cemail`, `cphone`, `cmessage`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerno` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `contactno` int(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerno`, `name`, `email`, `password`, `contactno`, `address`) VALUES
(1, 'zain', 'zainbinpervaiz@gmail', '1234', 213211, '3213211321321'),
(2, 'moiz khan', 'moiz@gmail.com', '1234', 13212, '54'),
(3, 'muneeb', 'muneeb@gmail.com', '1234', 5454, '654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
