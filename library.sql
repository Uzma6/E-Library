-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 07:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `inc` int(11) NOT NULL,
  `function` varchar(30) NOT NULL,
  `material` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`inc`, `function`, `material`, `id`, `date`) VALUES
(33, 'Edit', 'Book', 'B0017', '2021-06-01'),
(34, 'Delete', 'Member', 'SL0098', '2021-06-03'),
(37, 'Add', 'Video', 'V0008', '2021-06-03'),
(43, 'Issue', 'Member-Book', 'SL0001-B0030', '2021-06-09'),
(44, 'Issue', 'Member-Book', 'SL0001-B0045', '2021-06-10'),
(45, 'Return', 'Member-Book', 'SL0001-B0030', '2021-07-11'),
(46, 'Renew', 'Member-Book', 'SL0001-B0045', '2021-07-02'),
(47, 'Issue', 'Member-Book', 'SL0044-B0005', '2021-06-15'),
(49, 'Renew', 'Member-Book', 'SL0002-B0010', '2021-07-11'),
(50, 'Return', 'Member-Book', 'SL0002-B0010', '2021-06-28'),
(52, 'Issue', 'Member-Book', 'SL0020-B0002', '2021-07-01'),
(54, 'Issue', 'Member-Book', 'SL0044-B0038', '2021-06-22'),
(55, 'Issue', 'Member-Book', 'SL0020-B0021', '2021-06-27'),
(56, 'Return', 'Member-Book', 'SL0044-B0038', '2021-06-16'),
(61, 'Issue', 'Member-Book', 'SL0005-B0045', '2021-07-01'),
(62, 'Issue', 'Member-Book', 'SL0005-B0015', '2021-07-12'),
(63, 'Issue', 'Member-Book', 'SL0005-B0017', '2021-07-12'),
(64, 'Return', 'Member-Book', 'SL0005-B0017', '2021-07-12'),
(65, 'Issue', 'Member-Book', 'SL0005-B0004', '2021-07-12'),
(66, 'Edit', 'Book', 'B0015', '2021-07-12'),
(67, 'Add', 'Question Bank', 'QB0006', '2021-07-12'),
(68, 'Delete', 'Member', 'SL0058', '2021-07-08'),
(69, 'Issue', 'Member-Book', 'SL0005-B0021', '2021-07-12'),
(70, 'Issue', 'Member-Book', 'SL0096-B0002', '2021-07-12'),
(71, 'Issue', 'Member-Book', 'SL0012-B0038', '2021-07-12'),
(72, 'Issue', 'Member-Book', 'SL0044-B0010', '2021-07-12'),
(73, 'Issue', 'Member-Book', 'SL0001-B0038', '2021-07-12'),
(74, 'Issue', 'Member-Book', 'SL0001-B0007', '2021-07-12'),
(75, 'Return', 'Member-Book', 'SL0001-B0007', '2021-07-12'),
(76, 'Return', 'Member-Book', 'SL0001-B0007', '2021-07-12'),
(77, 'Renew', 'Member-Book', 'SL0020-B0021', '2021-07-12'),
(78, 'Renew', 'Member-Book', 'SL0001-B0045', '2021-07-12'),
(79, 'Issue', 'Member-Book', 'SL0001-B0005', '2021-07-12'),
(80, 'Issue', 'Member-Book', 'SL0001-B0021', '2021-07-12'),
(82, 'Issue', 'Member-Book', 'SL0001-B0002', '2021-07-12'),
(88, 'Issue', 'Member-Book', 'SL0001-B0004', '2021-07-12'),
(90, 'Issue', 'Member-Book', 'SL0008-B0002', '2021-07-12'),
(91, 'Issue', 'Member-Book', 'SL0008-B0005', '2021-07-12'),
(92, 'Issue', 'Member-Book', 'SL0008-B0021', '2021-07-12'),
(93, 'Return', 'Member-Book', 'SL0008-B0002', '2021-07-12'),
(94, 'Issue', 'Member-Book', 'SL0014-B0006', '2021-07-18'),
(95, 'Issue', 'Member-Book', 'SL0014-B0003', '2021-07-18'),
(96, 'Return', 'Member-Book', 'SL0001-B0045', '2021-07-18'),
(97, 'Return', 'Member-Book', 'SL0001-B0006', '2021-07-18'),
(98, 'Issue', 'Member-Book', 'SL0012-B0024', '2021-08-09'),
(99, 'Return', 'Member-Book', 'SL0001-B0001', '2021-08-09'),
(100, 'Edit', 'Book', 'B0015', '2021-08-09'),
(108, 'Delete', 'Member', 'SL0014', '2021-08-09'),
(109, 'Issue', 'Member-Book', 'SL0050-B0005', '2021-08-09'),
(110, 'Issue', 'Member-Book', 'SL0050-B0001', '2021-08-09'),
(111, 'Edit', 'Book', 'B0045', '2021-08-09'),
(115, 'Edit', 'Question Bank', 'QB0001', '2021-08-09'),
(116, 'Edit', 'Book', 'B0015', '2021-08-09'),
(117, 'Delete', 'Book', 'B0012', '2021-08-10'),
(118, 'Add', 'Book', 'B0008', '2021-08-10'),
(119, 'Delete', 'Book', 'B0045', '2021-08-10'),
(120, 'Delete', 'Question Bank', 'QB0040', '2021-08-10'),
(121, 'Issue', 'Member-Book', 'SL0001-B0015', '2022-07-25'),
(122, 'Issue', 'Member-Book', 'SL0001-B0017', '2022-07-25'),
(123, 'Issue', 'Member-Book', 'SL0001-B0024', '2022-07-25'),
(124, 'Issue', 'Member-Book', 'SL0001-B0008', '2022-07-25'),
(125, 'Return', 'Member-Book', 'SL0001-B0003', '2022-07-25'),
(126, 'Return', 'Member-Book', 'SL0001-B0015', '2022-07-25'),
(127, 'Return', 'Member-Book', 'SL0001-B0017', '2022-07-25'),
(128, 'Return', 'Member-Book', 'SL0001-B0024', '2022-07-25'),
(129, 'Return', 'Member-Book', 'SL0001-B0008', '2022-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `admin_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'James', 'james123');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` varchar(6) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `book_image` varchar(255) DEFAULT NULL,
  `book_author_name` varchar(255) DEFAULT NULL,
  `category` varchar(10) NOT NULL,
  `book_publication_name` varchar(255) DEFAULT NULL,
  `filepath` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_image`, `book_author_name`, `category`, `book_publication_name`, `filepath`) VALUES
('B0001', 'Discrete Event System Simulation', 'system_simulation.jpg', 'Jerry Banks', '4th Year', 'Publisher 8', '4_SMS.pdf'),
('B0003', 'Data Analytics', 'data_analytics.jpg', 'Anil Maheshwari', '4th Year', 'Publisher 4', '4_BDA.pdf'),
('B0008', 'Data structures', 'ds.jpg', 'Roma Goodenough', '2nd Year', 'Publisher 4', '2_DS.pdf'),
('B0015', 'Fundamentals of C', 'cfundamental.jpg', 'Gracy W', '1st Year', 'Publisher 9', '1_C_fundamentals.pdf'),
('B0017', 'Engineering Chemistry', 'chem.jpg', 'Wordsworth', '1st Year', 'Publisher 6', '1_Chemistry.pdf'),
('B0024', 'Analog and Digital Electronics', 'ade.jpg', 'Othello S', '2nd Year', 'Publisher 5', '2_ADE.pdf'),
('B0030', 'Discrete Mathematical Structures', 'dms.jpg', 'Anna Serene', '2nd Year', 'Publisher 1', '2_DMS.pdf'),
('B0038', 'Software Architecture and Design Patterns', 'sadp.jpg', 'Erich Gamma', '4th Year', 'Publisher 3', '4_SADP.pdf'),
('B0046', 'Python Book 1', 'pap1.jpg', 'Jenny Williams', '3rd Year', 'Publisher 6', '3_Python-1.pdf'),
('B0049', 'Python Book 2', 'pap2.jpg', 'Allen Downey', '3rd Year', 'Publisher 7', '3_Python-2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed`
--

CREATE TABLE `borrowed` (
  `member_id` varchar(20) NOT NULL,
  `book_id` varchar(15) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `fine` int(3) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowed`
--

INSERT INTO `borrowed` (`member_id`, `book_id`, `issue_date`, `due_date`, `fine`, `status`) VALUES
('SL0001', 'B0001', '2021-07-12', '2021-07-27', 13, 'returned'),
('SL0001', 'B0003', '2021-07-12', '2021-07-27', 363, 'returned'),
('SL0005', 'B0015', '2021-07-12', '2021-07-27', 0, 'borrowed'),
('SL0005', 'B0017', '2021-07-12', '2021-07-27', 0, 'returned'),
('SL0001', 'B0030', '2021-06-09', '2021-06-24', 17, 'returned'),
('SL0044', 'B0038', '2021-06-22', '2021-07-07', 4, 'returned'),
('SL0014', 'B0003', '2021-07-18', '2021-08-02', 0, 'borrowed'),
('SL0012', 'B0024', '2021-08-09', '2021-08-24', 0, 'borrowed'),
('SL0050', 'B0001', '2021-08-09', '2021-08-24', 0, 'borrowed'),
('SL0001', 'B0015', '2022-07-25', '2022-08-09', 0, 'returned'),
('SL0001', 'B0017', '2022-07-25', '2022-08-09', 0, 'returned'),
('SL0001', 'B0024', '2022-07-25', '2022-08-09', 0, 'returned'),
('SL0001', 'B0008', '2022-07-25', '2022-08-09', 0, 'returned');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` varchar(12) NOT NULL,
  `mem_name` varchar(25) NOT NULL,
  `mem_password` varchar(20) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `mem_name`, `mem_password`, `city`, `state`) VALUES
('SL0001', 'Sonal', 'sonal246', 'Bangalore', 'Karnataka'),
('SL0002', 'Harsh', 'harshjain', 'Belagavi', 'Karnataka'),
('SL0005', 'Sonal', 'newsonal', 'Jaipur', 'Rajasthan'),
('SL0008', 'Gracy', 'gracy360', 'Mysore', 'Karnataka'),
('SL0010', 'Diana', 'ediana111', 'Pune', 'Maharashtra'),
('SL0012', 'Varun', 'varuns321', 'Mumbai', 'Maharashtra'),
('SL0020', 'Ravi', 'iamravi', 'Kollam', 'Kerala'),
('SL0026', 'Sudhiksha', 'sudhc123', 'Mumbai', 'Maharashtra'),
('SL0028', 'Venki', 'venki080', 'Bangalore', 'Karnataka'),
('SL0036', 'Francis', 'francis27', 'Bangalore', 'Karnataka'),
('SL0044', 'Divya', 'divyarachel', 'Hubli', 'Karnataka'),
('SL0050', 'Jenny', 'jenny123', 'Gulbarga', 'Karnataka'),
('SL0055', 'Rahul', 'rahul123', 'Mysore', 'Karnataka'),
('SL0096', 'William', 'william80', 'Chennai', 'Tamil Nadu');

-- --------------------------------------------------------

--
-- Table structure for table `qb`
--

CREATE TABLE `qb` (
  `id` varchar(20) NOT NULL,
  `subject` varchar(35) NOT NULL,
  `category` varchar(10) NOT NULL,
  `filepath` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qb`
--

INSERT INTO `qb` (`id`, `subject`, `category`, `filepath`) VALUES
('QB0001', 'Engineering Maths 2', '2nd Year', '1_2_mathsqb.pdf'),
('QB0002', 'Engineering Chemistry', '1st Year', '1_chemqb.pdf'),
('QB0003', 'Elements of Civil Engineering', '1st Year', '1_cvqb.pdf'),
('QB0005', 'Database Management System', '3rd Year', '3_dbmsqb.pdf'),
('QB0007', 'Engineering Maths 4', '2nd Year', '2_1_mathsqb.pdf'),
('QB0010', 'Management and Entrepreneurship', '3rd Year', '3_me_qb.pdf'),
('QB0011', 'Design and Analysis of Algorithms', '2nd Year', '2_daa_qb.pdf'),
('QB0013', 'Engineering Maths 1', '1st Year', '1_mathsqb.pdf'),
('QB0015', 'Big Data Analytics', '3rd Year', '4_bda.pdf'),
('QB0019', 'Internet of Things', '4th Year', '4_iotqb.pdf'),
('QB0020', 'Automata Theory and Computability', '3rd Year', '3_atcqb.pdf'),
('QB0023', 'Cyber Networks and Security', '3rd Year', '3_cnscqb.pdf'),
('QB0026', 'Engineering Physics', '1st Year', '1_physicsqb.pdf'),
('QB0027', 'Elements of Mechanical Engineering', '1st Year', '1_meqb.pdf'),
('QB0030', 'Data communication', '2nd Year', '2_dcqb.pdf'),
('QB0031', 'Engineering Maths 3', '2nd Year', '2_1_mathsqb.pdf'),
('QB0034', 'Machine Learning', '4th Year', '4_mlqb.pdf'),
('QB0036', 'Microcontroller and Embedded system', '2nd Year', '2_mpqb.pdf'),
('QB0043', 'Operation Research', '3rd Year', '3_orqb.pdf'),
('QB0045', 'Operating system', '3rd Year', '3_osqb.pdf'),
('QB0047', 'System Modeling and Simulation', '4th Year', '4_smsqb.pdf'),
('QB0049', 'Web Technology and Applications', '4th Year', '4_wtaqb.pdf'),
('QB0050', 'Object Oriented Concepts', '2nd Year', '2_oopsqb.pdf'),
('QB0055', 'Unix Programming', '2nd Year', '2_uspqb.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `member_id` varchar(12) NOT NULL,
  `book_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v`
-- (See below for the actual view)
--
CREATE TABLE `v` (
`book_name` varchar(255)
,`book_image` varchar(255)
,`book_author_name` varchar(255)
,`category` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` varchar(20) NOT NULL,
  `video_image` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_image`, `link`, `subject`, `category`, `description`) VALUES
('V0006', 'quicksort.png', 'https://youtu.be/7h1s2SojIRw', 'Design and Analysis of Algorithms', '2nd Year', 'A brief description about quicksort is presented'),
('V0008', 'quicksort.png', 'https://youtu.be/HqPJF2L5h9U', 'Design and Analysis of Algorithms', '2nd Year', 'Explaining concept of Heapsort'),
('V0010', 'chemlect1.jpg', 'https://youtu.be/d9GP9jv0hBM', 'Engineering Chemistry', '1st Year', 'Lecture on atoms and atomic structure, elements, compounds and periodic table'),
('V0012', 'cv.jpg', 'https://youtu.be/sLRivyEmqxw', 'Elements of Civil Engineering', '1st Year', 'Introduction to Civil Engineering'),
('V0022', 'physicsintro.jpg', 'https://youtu.be/XhKIGhSlmvE', 'Engineering Physics', '1st Year', ' This video covers the syllabus for Engineering Physics '),
('V0023', 'm1.jpg', 'https://youtu.be/7iHJRc0RXP0', 'Engineering Maths 1', '1st Year', 'Beginning with M1, this video explains about n derivations'),
('V0025', 'iotintro.jpg', 'https://youtu.be/LlhmzVL5bm8', 'Internet of Things', '4th Year', 'A brief introduction about IoT is given'),
('V0033', 'basic_ele.jpg', 'https://youtu.be/MkmwIjggolg', 'Basic Electronics', '1st Year', 'The basic electronics topics covered in this video are useful for all students'),
('V0038', 'sms_vi.jpg', 'https://youtu.be/PpTkCVt-1Fo', 'System Modeling and Simulation', '4th Year', 'This video discusses about Random Number Generation and linear congruential method'),
('V0039', 'able_baker.jpg', 'https://youtu.be/O46ZlKEjjHE', 'System Modeling and Simulation', '4th Year', 'This video deals with explanation of Able Baker problem'),
('V0045', 'bda_vi.png', 'https://youtu.be/bAyrObl7TYE', 'Big Data Analytics', '4th Year', 'It introduces about Big Data, 5 Vs of Big Data and about Hadoop'),
('V0053', 'dbmsintro.jpg', 'https://youtu.be/mqprM5YUdpk', 'Database Management System', '3rd Year', 'This video gives brief introduction about dbms'),
('V0057', 'filesys.jpg', 'https://youtu.be/JoTIG_ElTyY', 'File system', '3rd Year', 'This video deals with various implementations of file system'),
('V0071', 'dc.jpg', 'https://youtu.be/ihgpUbNvHL0', 'Data communication', '2nd Year', 'This video explains about physical topology and network types'),
('V0073', 'co.jpg', 'https://youtu.be/oAneKttKjtA', 'Computer Organization', '2nd Year', 'Introduction of Computer Organization & Functional units of a Computer'),
('V0082', 'btree.jpg', 'https://youtu.be/Buvqt4gRKMs', 'File system', '3rd Year', 'This video explains how a B-tree is built'),
('V0086', 'trees.jpg', 'https://youtu.be/qH6yxkw0u78', 'Data structures', '2nd Year', 'Trees'),
('V0095', 'pap.jpg', 'https://youtu.be/jac4oTFnJUk', 'Python Application Programming', '3rd Year', 'Brief Introduction about Python');

-- --------------------------------------------------------

--
-- Structure for view `v`
--
DROP TABLE IF EXISTS `v`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v`  AS  select `b`.`book_name` AS `book_name`,`b`.`book_image` AS `book_image`,`b`.`book_author_name` AS `book_author_name`,`b`.`category` AS `category` from (`books` `b` join `borrowed` `w`) where `b`.`id` = `w`.`book_id` and `w`.`member_id` = 'Sonal' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`inc`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `qb`
--
ALTER TABLE `qb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `inc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
