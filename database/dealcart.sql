-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 09:15 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `S.No.` int(10) NOT NULL,
  `NAME` text NOT NULL,
  `PRICE` varchar(30) NOT NULL,
  `QTY` varchar(50) NOT NULL,
  `DEALER NAME` varchar(50) NOT NULL,
  `IMAGES` text NOT NULL,
  `CATEGORY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`S.No.`, `NAME`, `PRICE`, `QTY`, `DEALER NAME`, `IMAGES`, `CATEGORY`) VALUES
(1, 'Lay\'s American Style Cream & Onion Potato Chips ', '50, 48, 47, 47.5', '130gm', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(2, 'Lay\'s Chips Classic Salted', '48, 47, 49, 50', '130gm', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(3, 'Lay\'s Spanish Tomato Tango', '49, 49.5, 47, 48', '130gm', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(4, 'Lay\'s India\'s Magic Masala', '50, 49, 48, 48.5', '130gm', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(5, 'Kurkure Namkeen, Chilli Chatka ', '20, 18, 17, 17.5', '100g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(6, 'Kurkure Namkeen - Masala Munch', '19, 19.5, 20, 18', '100g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(7, 'Kurkure Green Chutney, Rajasthani Style', '20, 19, 18, 17', '100g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(8, 'Kurkure Snacks, Solid Masti', '15.5, 17.5, 18.5, 19.5', '100g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(9, 'Sunfeast YiPPee! Magic Masala (Pack of 4)\r\n', '144, 142, 143, 140', '67.5g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(10, 'MAGGI 2-Minute Special Masala Instant Noodles (Pack of 12)', '180, 178, 179, 177', '70g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(11, 'MAGGI No Onion No Garlic Noodles(Pack of 5)', '399, 395, 392, 398', '70gm', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(12, 'Food World Combo - Maggi Noodles Masala (Pack of 2)', '499, 495, 492, 490', '420g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(13, 'Parle Monaco Cheeselings, Classic', '60, 58, 59, 57', '150g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(14, 'Act II Instant Popcorn Party Pack, Butter Delite, 3x150g (Buy 2 Get 1 Free)', '120, 122, 119, 125', '150g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(15, 'Bingo! Tedhe Medhe Cocktail Mix', '50, 48, 46, 49', '180g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(16, 'Britannia Little Hearts Biscuits', '112, 115, 110, 118', '100g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(17, 'Chaayos Mini Samosas', '139, 140, 138, 135', '150g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(18, 'Bingo! Mad Angles-Achaari Masti', '50, 48, 47, 49', '130g ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(19, 'McCain Chilli Cheesy Nuggets', '130, 135, 132, 129', '250g ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(20, 'Haldiram\'s Peanut-Salted', '48, 45, 42, 50', '200g ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Snacks'),
(21, 'Thums-Up Soft Drink', '40, 42, 35, 34', '750ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(22, 'Kingfisher Radler Non-Alcoholic Beer Malt Beverage - Ginger & Lime(Pack Of 6 Bottles)', '420, 350, 410, 300', '300ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(23, 'Maaza Soft Drink', '70, 66, 65, 62', '1.2L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(24, 'Nestea Instant Iced Tea, Lemon Flavour', '200, 165, 180, 175', '400g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(25, 'Nestle NANGROW Nutritious Milk Drink For Growing Children, Creamy Vanilla', '550, 520, 522, 535', '400g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(26, 'Red Bull Energy Drink (4 Pack)', '440, 420, 410, 400', '250ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(27, 'Cadbury Hot Chocolate Drink Powder Mix', '175, 160, 175, 170', '200g ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(28, 'Pediasure 7+ Specialized Nutrition Drink Powder for Growing Children Vanilla Flavour', '395, 400, 390, 398', '400gm', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(29, 'Coca-Cola ', '40, 35, 34, 38', '750ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(30, 'Cavin\'s Masala Chaasa', '15, 12, 14,15', '200ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(31, 'Nescafe Ready To Drink Coffee-Hazelnut', '35, 30, 38, 40', '180ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(32, 'Raw Pressery Coconut Water', '60, 40, 50, 55', '200ml ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(33, 'B Natural Mixed Fruit, Goodness Of Fiber, Made From Choicest Fruits (Pack Of 2)', '187, 188, 190, 185', '1L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(34, 'Pepsi Soft Drink ', '90, 85, 88, 90', '2.25L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(35, 'Kinley Club Soda', '20, 15, 18, 17', '750ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(36, 'Glucon-D Instant Energy Health Drink Nimbu Pani (Sipper Free)', '330, 297, 290, 310', '1kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(37, 'Mirinda-Soft Drink', '75, 69, 70, 65', '1.5L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(38, 'Pepsi Mountain Dew Soft Drink ', '75, 70, 65, 70', '1.5L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(39, 'Horlicks Health & Nutrition Drink ', '242, 250, 245, 255', '500g ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(40, 'Almond Drink Unsweetend', '300, 279, 270, 290', '1L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Beverages'),
(41, 'Mother Dairy Paneer', '79, 80, 75, 77', '200g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Dairy Products'),
(42, 'Amul Butter - Pasteurised', '245, 240, 242, 235', '500g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Dairy Products'),
(43, 'Amul Cheese - 10 Slices', '126, 125, 117, 115', '200g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Dairy Products'),
(44, 'Ananda Desi Ghee', '510, 500, 505, 510', '1L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Dairy Products'),
(45, 'Amul Taaza', '68, 70, 65, 69', '1L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Dairy Products'),
(46, 'Epigamia Greek Yogurt Smoothie - Blueberry', '70, 65, 69, 66', '200ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Dairy Products'),
(47, 'Mother Dairy Cheese - Cubes', '110, 100, 94, 99', '180g ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Dairy Products'),
(48, 'Bakerswhip Whipping Cream Powder', '395, 400, 390, 398', '450g ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Dairy Products'),
(49, 'Amul Masti Dahi Cup', '40, 35, 38, 40', '400g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Dairy Products'),
(50, 'Mother Dairy UHT Fit Lite ESL Milk', '29, 30, 25, 28', '450ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Dairy Products'),
(51, 'SanDisk Cruzer Blade 32GB USB Flash Drive', '650, 600, 450, 340', '0', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Electronics & Accessories'),
(52, 'boAt Flash Edition Smartwatch with Activity Tracker,Multiple Sports Modes,Full Touch 1.3\" Screen,Sleep Monitor,Gesture, Camera & Music Control,IP68 Dust,Sweat & Splash Resistance(Lightning Black)', '1999, 6999, 2999, 4999', '0', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Electronics & Accessories'),
(53, 'boAt Stone 180 5W Bluetooth Speaker with Upto 10 Hours Playback, 1.75\" Driver, IPX7 and TWS Feature(Blue)', '899, 900, 880, 850', '0', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Electronics & Accessories'),
(54, 'Havells Ambrose 1200mm Ceiling Fan (Gold Mist Wood)', '2910, 2900, 2495, 2400', '0', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Electronics & Accessories'),
(55, 'Samsung Original EP-TA20IWECGIN Type C Fast Charge (White)', '849, 1190, 1000, 950', '0', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Electronics & Accessories'),
(56, 'Mi Micro USB Cable 120cm, USB Type A(Black)', '299, 230, 200, 250', '0', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Electronics & Accessories'),
(57, 'PHILIPS Base B22 9-Watts LED Bulb (White) - (Pack Of 4)', '390, 399, 980, 585', '0', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Electronics & Accessories'),
(58, 'SYSKA 20W LED White Tubelight (Pack Of 1)', '393, 699, 350, 500', '0', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Electronics & Accessories'),
(59, 'HAVELLS Pathfinder 30 3-Watt Rechargeable LED Torch', '325, 320, 300, 310', '0', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Electronics & Accessories'),
(60, 'DesiDiya® 3AA Battery Operated Copper String Decorative Fairy Lights Diwali Christmas Festival LED Fairy Lights Warm White, 10 Meters, 100 LED\'s (Pack of 1)', '129, 100, 150, 200', '0', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Electronics & Accessories'),
(61, 'Apsara Scholars Kit', '99, 110, 90, 95', '1 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(62, 'Faber-Castell Connector Pen Set-25 Count', '128, 140, 150, 120', '1 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(63, 'Classmate Octane Gel Pen(Blue & Black)-25 Count + 4 Gel Refills Free', '250, 214, 220, 200', '1 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(64, 'Classmate Stationary Kit Bag', '539, 550, 500, 530', '12 Items', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(65, 'Vega Scissor Set', '250, 200, 210, 240', '2 Pairs', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(66, 'DALUCI Memo Note Pad With Sticky Notes', '198, 400, 210, 195', '1 Pack ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(67, 'Classmate Soft Cover Spiral Binding Notebook, Single Line', '124, 145, 140, 130', '300 Pages', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(68, 'Swastik CloudShopz 0597 Paper Cutter', '99, 90, 100, 129 ', '18mm', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(69, 'Cello Butterflow Ball Pen-Jar Of 25 units', '80, 190, 110, 90', '1 Jar', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(70, 'Shuban Desk Pen Holder', '379, 320, 350, 370', '4 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(71, 'Kabello Pencil Pouch Multipurpose Pen Pencil Travel Stylish Pouch for Kids 10 Grams Pack of 1', '240, 220, 200, 210', '6 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(72, 'Faber-Castell Textliner-5 Counts', '120, 110, 100, 90', '1 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(73, 'Classmate Notebook-Single Line, 140 Pages, 240mm*180mm', '140, 120, 110, 100', '4 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(74, 'Nourish A5 Size Daily Planner', '236, 240, 299, 200 ', '1 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(75, 'OFIXO 100 Pieces A4 Color Paper(10 Sheets For Each Color)', '217, 200, 220, 210', '10*10 Sheets', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Stationary'),
(76, 'Natureland Organics Biryani Basmati Rice', '225, 200, 220, 210', '1kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(77, 'Natureland Organics Brown Rice Premium ', '211, 235, 220, 200', '1kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(78, 'Daawat Rozana Super Basmati Rice ', '475, 500, 480, 470', '5 kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(79, 'Daawat Rozana Gold Basmati Rice', '375, 450, 390, 360', '5 kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(80, 'India Gate Basmati Rice Regular Choice', '375, 400, 350, 310', '5 kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat '),
(81, 'India Gate Basmati Rice, Feast Rozana', '364, 485, 450, 355', '5 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(82, 'Tata Sampann Unpolished Moong Dal', '164, 170, 162, 160', '1 Kg ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(83, 'Tata Sampann Unpolished Toor/Arhar Dal', '150, 160, 170, 155', '1 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(84, 'Tata Sampann Unpolished Chana Dal', '128, 125, 130, 135', '1 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(85, 'Tata Sampann Unpolished Kala Channa ', '116, 120, 110, 125', '1 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(86, 'Tata Sampann Unpolished Masoor Dal', '140, 145, 150, 160', '1 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(87, 'Tata Sampann Unpolished Kabuli Chana ', '184, 180, 194, 182', '1 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(88, 'Tata Sampann Unpolished Green Moong Dal ', '154, 160, 165, 150', '1 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(89, 'NESTLE GOLD Crunchy Oat and Corn Flakes, Breakfast Cereal', '180, 200, 185, 190', '475g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(90, 'Nestle CEREGROW Growing Up Multigrain Cereal with Milk & Fruits', '277, 292, 285, 275', '300g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(91, 'Post Oreo O\'s Cereal', '489, 480, 485, 477', '311g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(92, 'Kellogg\'s Muesli', '380, 415, 377, 325', '750g ', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(93, 'Kellogg\'s Crunchy Granola Almonds and Cranberries', '300, 315, 320, 325', '460g', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(94, 'Aashirvaad Atta with Multigrains', '64, 62, 66, 60', '1 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(95, 'Aashirvaad Select Premium Sharbati Atta', '245, 305, 250, 240', '5 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(96, 'Fortune Chakki Fresh Atta', '172, 170, 175, 178', '5 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(97, 'Swastik Refined Fresh Pure & Tasty Maida', '185, 190, 200, 195', '1 Kg', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Grains & Wheat'),
(98, 'Saffola Total Refined Cooking oil | Blended Rice Bran & Safflower oil | Helps Manage Cholesterol ', '230, 225, 220, 235', '1L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Cooking Oil'),
(99, 'Fortune Rice Bran Health Oil, Cooking Oil for Healthier Heart', '899, 890, 880, 885', '5L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Cooking Oil'),
(100, 'Oleev Olive Pomace Oil for Everyday Cooking', '1599, 1500, 1550, 1590', '5L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Cooking Oil'),
(101, 'Saffola Active Refined Cooking oil | Blended Rice Bran & SoyaBean oil | Pro Weight Watchers | Material : vegetarian', '894, 1100, 990, 1005', '5L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Cooking Oil'),
(102, 'Figaro Olive Oil, All Cooking Healthy Olive Oil Durable Tin Packaging', '1471, 1450, 1500, 1457', '2L', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Cooking Oil'),
(103, 'VWash Plus Expert Intimate Hygiene Wash, Prevents Itching, irritation & dryness, No Paraben & SLS, Suitable For All Skin Types, For Daily Use', '285, 280, 277, 275', '200ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Daily Hygiene'),
(104, 'TARGET HYGIENE Cotton Hand Protection Multi-Purpose Gloves | Unisex Cotton Reusable Gloves | Ideal for Gardening, Kitchen and Daily Routine Activities (RED)', '249, 350, 255, 220', '1 Pair', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Daily Hygiene'),
(105, 'Whisper Clean and Fresh Daily Liners, 40 Sanitary pads for women', '189, 210, 185, 180', '1 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Daily Hygiene'),
(106, 'QUARANT 3 Ply Disposable Surgical Face Mask, UV Sterilized, BFE & PFE >98%, ISI, BIS, CE & ISO Certified, ASTM Level 3, Meltblown Layer Fabric Masks with Adjustable Nose Pin (Blue, Without Valve, 100 Pieces) for Unisex', '599, 550, 590, 540', '1 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Daily Hygiene'),
(107, 'Dettol Liquid Hand wash Refill Original', '188, 210, 200, 190', '1500ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Daily Hygiene'),
(108, 'Listerine Cool Mint Mouthwash Liquid, Removes 99.9% Germs, 250ml Combo Pack of 3 (Buy 2 Get 1 Free)', '281, 290, 295, 277', '250ml', 'Dheeraj, Aniket, Vinit, Kashish', '', 'Daily Hygiene'),
(109, 'QOZWEID Silicone Scrubbing Gloves, Non-Slip, Dishwashing and Pet Grooming, Magic Latex Gloves for Household Cleaning Great for Protecting Hands in Dishwashing (Multicolor)', '348, 355, 345, 369', '1 Pair', 'Dheeraj, Aniket, Vinit, Kashish', '', 'House Cleaning'),
(110, 'Scotch-Brite No-Dust Broom, Long handle, Easy floor cleaning (Multi-use)', '265, 270, 277, 260', '1 Unit', 'Dheeraj, Aniket, Vinit, Kashish', '', 'House Cleaning'),
(111, 'Spotzero by Milton Prime Spin Mop with Big Wheels and Stainless Steel Wringer, Bucket Floor Cleaning and Mopping System,2 Microfiber Refills,Aqua Green', '1199, 1120, 1500, 1450', '1 Unit', 'Dheeraj, Aniket, Vinit, Kashish', '', 'House Cleaning'),
(112, 'Gala - 153070 Multipurpose Microfiber Duster for Home and Car Use (Blue)', '135, 150, 144, 140', '1 Unit', 'Dheeraj, Aniket, Vinit, Kashish', '', 'House Cleaning'),
(113, 'Scotch-Brite Sponge Wipe, 5 Wipes (Color and Print May Vary)', '231, 225, 236, 240', '1 Pack', 'Dheeraj, Aniket, Vinit, Kashish', '', 'House Cleaning');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `S.No.` int(11) NOT NULL,
  `CATEGORY` text NOT NULL,
  `NO_OF_ITEMS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`S.No.`, `CATEGORY`, `NO_OF_ITEMS`) VALUES
(1, 'Snacks', 20),
(2, 'Beverages', 20),
(3, 'Dairy Products', 10),
(4, 'Electronics & Accessories', 10),
(5, 'Grains & Wheat', 22),
(6, 'Stationary', 15),
(7, 'Cooking Oil', 5),
(8, 'Daily Hygiene', 6),
(9, 'House Cleaning', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`S.No.`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`S.No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `S.No.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `S.No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
