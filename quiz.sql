-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 03:24 PM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE `adminpanel` (
  `Admin_id` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`Admin_id`, `Email`, `Password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer_clg_eng_option`
--

CREATE TABLE `answer_clg_eng_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answer_clg_gk_option`
--

CREATE TABLE `answer_clg_gk_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_clg_gk_option`
--

INSERT INTO `answer_clg_gk_option` (`id`, `question_number`, `is_correct`, `answer_option`) VALUES
(1, 1, 1, 'Object Oriented Programming'),
(2, 1, 0, 'Object Oral Programming'),
(3, 1, 0, 'both of them'),
(4, 1, 0, 'none of them'),
(5, 2, 0, 'Angela Markel'),
(6, 2, 0, 'Dipu Moni'),
(7, 2, 1, 'Ada was named for Augusta Ada King'),
(8, 2, 0, 'none of them'),
(9, 3, 1, 'Dennis Ritchie'),
(10, 3, 0, 'Sakib'),
(11, 3, 0, 'Mushfiq'),
(12, 3, 0, 'Tamim'),
(13, 4, 0, '5th July'),
(14, 4, 0, '5th August'),
(15, 4, 0, '5th January'),
(16, 4, 1, '5th June'),
(17, 5, 1, '21st February'),
(18, 5, 0, '26th March'),
(19, 5, 0, '16th December'),
(20, 5, 0, '10th January');

-- --------------------------------------------------------

--
-- Table structure for table `answer_clg_ict_option`
--

CREATE TABLE `answer_clg_ict_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answer_clg_math_option`
--

CREATE TABLE `answer_clg_math_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answer_scl_eng_option`
--

CREATE TABLE `answer_scl_eng_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_scl_eng_option`
--

INSERT INTO `answer_scl_eng_option` (`id`, `question_number`, `is_correct`, `answer_option`) VALUES
(1, 1, 1, 'international'),
(2, 1, 0, 'national'),
(3, 1, 0, 'native'),
(4, 1, 0, 'none of these'),
(5, 2, 0, '20'),
(6, 2, 0, '30'),
(7, 2, 0, '41'),
(8, 2, 1, '26'),
(9, 3, 0, '6'),
(10, 3, 1, '5'),
(11, 3, 0, '2'),
(12, 3, 0, '3'),
(13, 4, 0, '26'),
(14, 4, 0, '5'),
(15, 4, 1, '21'),
(16, 4, 0, '0'),
(17, 5, 1, '3'),
(18, 5, 0, '2'),
(19, 5, 0, '4'),
(20, 5, 0, '8');

-- --------------------------------------------------------

--
-- Table structure for table `answer_scl_gk_option`
--

CREATE TABLE `answer_scl_gk_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_scl_gk_option`
--

INSERT INTO `answer_scl_gk_option` (`id`, `question_number`, `is_correct`, `answer_option`) VALUES
(33, 7, 0, 'Virat Kohli'),
(34, 7, 0, 'Ricky Ponting'),
(35, 7, 1, 'Sachin Tendulkar'),
(36, 7, 0, 'Brain Lara'),
(37, 3, 1, 'Dhaka'),
(38, 3, 0, 'Sylhet'),
(39, 3, 0, 'Rajshahi'),
(40, 3, 0, 'Chattogram'),
(41, 4, 0, 'Lion'),
(42, 4, 1, 'Tiger'),
(43, 4, 0, 'Bear'),
(44, 4, 0, 'Elephant'),
(45, 5, 0, 'Brazil'),
(46, 5, 0, 'Belgium'),
(47, 5, 0, 'Croatia'),
(48, 5, 1, 'France'),
(49, 1, 0, 'Rupi'),
(50, 1, 0, 'Pound'),
(51, 1, 1, 'Taka'),
(52, 1, 0, 'Doller'),
(53, 2, 1, 'England'),
(54, 2, 0, 'Australia'),
(55, 2, 0, 'Bangladesh'),
(56, 2, 0, 'India'),
(57, 6, 0, 'Begum Khaleda Zia'),
(58, 6, 1, 'Shekh Hasina'),
(59, 6, 0, 'Abdul Hamid'),
(60, 6, 0, 'Ziaur Rahman'),
(61, 8, 1, 'Abdul Hamid'),
(62, 8, 0, 'Begum Khaleda Zia'),
(63, 8, 0, 'Ziaur Rahman'),
(64, 8, 0, 'Shekh Hasina'),
(65, 9, 0, 'Rose'),
(66, 9, 0, 'Joba'),
(67, 9, 0, 'Belly'),
(68, 9, 1, 'Shapla'),
(69, 10, 0, '5'),
(70, 10, 0, '6'),
(71, 10, 1, '8'),
(72, 10, 0, '7');

-- --------------------------------------------------------

--
-- Table structure for table `answer_scl_ict_option`
--

CREATE TABLE `answer_scl_ict_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_scl_ict_option`
--

INSERT INTO `answer_scl_ict_option` (`id`, `question_number`, `is_correct`, `answer_option`) VALUES
(1, 1, 0, 'Informatics and Communication Technolgy'),
(2, 1, 1, 'Information and Communication Technolgy'),
(3, 1, 0, 'International Communication Technolgy'),
(4, 1, 0, 'Informatics of Computer Technolgy'),
(9, 2, 0, '2'),
(10, 2, 1, '10'),
(11, 2, 0, '0'),
(12, 2, 0, 'nothing'),
(13, 3, 0, 'Wide Area Network'),
(14, 3, 1, 'Local Area Network'),
(15, 3, 0, 'both of them'),
(16, 3, 0, 'none of them');

-- --------------------------------------------------------

--
-- Table structure for table `answer_scl_math_option`
--

CREATE TABLE `answer_scl_math_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_scl_math_option`
--

INSERT INTO `answer_scl_math_option` (`id`, `question_number`, `is_correct`, `answer_option`) VALUES
(1, 1, 0, '10'),
(2, 1, 1, '2'),
(3, 1, 0, '3'),
(4, 1, 0, '4'),
(5, 2, 0, '5'),
(6, 2, 0, '6'),
(7, 2, 0, '2'),
(8, 2, 1, '3'),
(9, 3, 1, 'no'),
(10, 3, 0, 'yes'),
(11, 3, 0, 'blank'),
(12, 3, 0, 'blank'),
(13, 4, 0, '5'),
(14, 4, 0, '7'),
(15, 4, 1, '6'),
(16, 4, 0, '0'),
(17, 5, 1, '5'),
(18, 5, 0, '2'),
(19, 5, 0, '4'),
(20, 5, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `answer_uni_eng_option`
--

CREATE TABLE `answer_uni_eng_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answer_uni_gk_option`
--

CREATE TABLE `answer_uni_gk_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_uni_gk_option`
--

INSERT INTO `answer_uni_gk_option` (`id`, `question_number`, `is_correct`, `answer_option`) VALUES
(1, 1, 0, 'dhaka'),
(2, 1, 1, 'Santiago'),
(3, 1, 0, 'London'),
(4, 1, 0, 'Mumbai'),
(9, 2, 0, 'Dhaka'),
(10, 2, 0, 'Peris'),
(11, 2, 0, 'New York'),
(12, 2, 1, 'London');

-- --------------------------------------------------------

--
-- Table structure for table `answer_uni_ict_option`
--

CREATE TABLE `answer_uni_ict_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answer_uni_math_option`
--

CREATE TABLE `answer_uni_math_option` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `answer_option` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `SL_No` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` text NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SL_No`, `Email`, `Subject`, `Message`) VALUES
(1, 'abcd@gmail.com', 'Complain', 'qwertyuioplkjhgfdsazxcvbnm'),
(2, 'tania@gmail.com', 'Kicchu nay', 'sjfwofejpsifjsdfkcmspdcmapomck;zcm\r\nlksncsfmcpoafmoqamc');

-- --------------------------------------------------------

--
-- Table structure for table `question_college_eng`
--

CREATE TABLE `question_college_eng` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_college_gk`
--

CREATE TABLE `question_college_gk` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_college_gk`
--

INSERT INTO `question_college_gk` (`question_number`, `question_text`) VALUES
(1, 'OOP meaning?'),
(2, 'Who was the first woman computer programmer who had a programming language named for her?'),
(3, 'Who is the father of programming?'),
(4, 'World Environment Day__'),
(5, 'International Mother Language Day__');

-- --------------------------------------------------------

--
-- Table structure for table `question_college_ict`
--

CREATE TABLE `question_college_ict` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_college_math`
--

CREATE TABLE `question_college_math` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_school_eng`
--

CREATE TABLE `question_school_eng` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_school_eng`
--

INSERT INTO `question_school_eng` (`question_number`, `question_text`) VALUES
(1, 'English is an____ language'),
(2, 'how many letters in the English alphabet?'),
(3, 'How many vowels are in A to Z?'),
(4, 'How many consonants are in the English alphabet?'),
(5, 'In English language grammar, tense has___ types');

-- --------------------------------------------------------

--
-- Table structure for table `question_school_gk`
--

CREATE TABLE `question_school_gk` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_school_gk`
--

INSERT INTO `question_school_gk` (`question_number`, `question_text`) VALUES
(1, 'What is currency name of Bangladesh?'),
(2, 'Who won the ICC CWC 2019?'),
(3, 'What is The Capital of Bangladesh?'),
(4, 'What is national animal of Bangladesh?'),
(5, 'Who win the FIFA World Cup 2018?'),
(6, 'What is the name of the Prime Minister of Bangladesh?'),
(7, 'Highest Run Scorer in ODI cricket?'),
(8, 'What is the name of the President of Bangladesh?'),
(9, 'What is the name of the national flower of Bangladesh?'),
(10, 'How many divisions are there in Bangladesh?');

-- --------------------------------------------------------

--
-- Table structure for table `question_school_ict`
--

CREATE TABLE `question_school_ict` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_school_ict`
--

INSERT INTO `question_school_ict` (`question_number`, `question_text`) VALUES
(1, 'ICT means?'),
(2, '1+1=?'),
(3, 'LAN Means__');

-- --------------------------------------------------------

--
-- Table structure for table `question_school_math`
--

CREATE TABLE `question_school_math` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_school_math`
--

INSERT INTO `question_school_math` (`question_number`, `question_text`) VALUES
(1, '1+1=?'),
(2, '9 is the square of___'),
(3, 'Does 1 count as a prime number?'),
(4, '2*3=?'),
(5, '10-5=?');

-- --------------------------------------------------------

--
-- Table structure for table `question_uni_eng`
--

CREATE TABLE `question_uni_eng` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_uni_gk`
--

CREATE TABLE `question_uni_gk` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_uni_gk`
--

INSERT INTO `question_uni_gk` (`question_number`, `question_text`) VALUES
(1, 'What is the capital of Chile?'),
(2, 'Where would you find the River Thames?');

-- --------------------------------------------------------

--
-- Table structure for table `question_uni_ict`
--

CREATE TABLE `question_uni_ict` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_uni_math`
--

CREATE TABLE `question_uni_math` (
  `question_number` int(11) NOT NULL,
  `question_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confirm_Password` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Institute` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Name`, `Email`, `Password`, `Confirm_Password`, `Gender`, `Institute`) VALUES
(1, 'abcd', 'abcd@gmail.com', '12345', '12345', 'Female', 'neub'),
(2, 'abid', 'abid@gmail.com', '123', '123', 'Male', 'neub'),
(4, 'Chanda', 'chandra@gmail.com', '123', '123', 'Female', 'NU'),
(5, 'Dip', 'dip@yahoo.com', 'goru', 'goru', 'Male', 'NEUB'),
(8, 'jafrul Hussen', 'jafrul@gmail.com', 'jafrul', 'jafrul', 'Male', 'NEUB'),
(12, 'jony', 'jony@gmail.com', '12345', '12345', 'Male', 'NU'),
(14, 'joy', 'joy@gmail.com', '123', '123', 'Male', 'NU'),
(10, 'Gulam Kibria', 'kibria@yahoo.com', '12345', '12345', 'Male', 'NEUB'),
(6, 'Mahin', 'mahin@gmail.com', '123', '123', 'Male', 'DU'),
(11, 'Mashrafe', 'mashrafe@gmail.com', '12345', '12345', 'Male', 'JU'),
(13, 'Cristiano Ronaldo', 'ronaldo@gmail.com', '12345', '12345', 'Male', 'Porto University'),
(7, 'tania', 'tania@gmail.com', '112233', '112233', 'Female', 'NEUB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpanel`
--
ALTER TABLE `adminpanel`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Admin_id` (`Admin_id`);

--
-- Indexes for table `answer_clg_eng_option`
--
ALTER TABLE `answer_clg_eng_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_clg_gk_option`
--
ALTER TABLE `answer_clg_gk_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_clg_ict_option`
--
ALTER TABLE `answer_clg_ict_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_clg_math_option`
--
ALTER TABLE `answer_clg_math_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_scl_eng_option`
--
ALTER TABLE `answer_scl_eng_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_scl_gk_option`
--
ALTER TABLE `answer_scl_gk_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_scl_ict_option`
--
ALTER TABLE `answer_scl_ict_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_scl_math_option`
--
ALTER TABLE `answer_scl_math_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_uni_eng_option`
--
ALTER TABLE `answer_uni_eng_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_uni_gk_option`
--
ALTER TABLE `answer_uni_gk_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_uni_ict_option`
--
ALTER TABLE `answer_uni_ict_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_uni_math_option`
--
ALTER TABLE `answer_uni_math_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`SL_No`);

--
-- Indexes for table `question_college_eng`
--
ALTER TABLE `question_college_eng`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_college_gk`
--
ALTER TABLE `question_college_gk`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_college_ict`
--
ALTER TABLE `question_college_ict`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_college_math`
--
ALTER TABLE `question_college_math`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_school_eng`
--
ALTER TABLE `question_school_eng`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_school_gk`
--
ALTER TABLE `question_school_gk`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_school_ict`
--
ALTER TABLE `question_school_ict`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_school_math`
--
ALTER TABLE `question_school_math`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_uni_eng`
--
ALTER TABLE `question_uni_eng`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_uni_gk`
--
ALTER TABLE `question_uni_gk`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_uni_ict`
--
ALTER TABLE `question_uni_ict`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `question_uni_math`
--
ALTER TABLE `question_uni_math`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpanel`
--
ALTER TABLE `adminpanel`
  MODIFY `Admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer_clg_eng_option`
--
ALTER TABLE `answer_clg_eng_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answer_clg_gk_option`
--
ALTER TABLE `answer_clg_gk_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `answer_clg_ict_option`
--
ALTER TABLE `answer_clg_ict_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answer_clg_math_option`
--
ALTER TABLE `answer_clg_math_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answer_scl_eng_option`
--
ALTER TABLE `answer_scl_eng_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `answer_scl_gk_option`
--
ALTER TABLE `answer_scl_gk_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `answer_scl_ict_option`
--
ALTER TABLE `answer_scl_ict_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `answer_scl_math_option`
--
ALTER TABLE `answer_scl_math_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `answer_uni_eng_option`
--
ALTER TABLE `answer_uni_eng_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answer_uni_gk_option`
--
ALTER TABLE `answer_uni_gk_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `answer_uni_ict_option`
--
ALTER TABLE `answer_uni_ict_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answer_uni_math_option`
--
ALTER TABLE `answer_uni_math_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SL_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
