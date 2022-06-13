-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2021 at 01:04 AM
-- Server version: 10.3.31-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `givomipq_svms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_desc` varchar(10000) NOT NULL,
  `about_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_desc`, `about_image`) VALUES
(1, 'Welcome to Sri Vinayaka Polytechnic', '<p>Sri Vinayaka Group of Institutions campus is situated at 2 location , The Sri Vinayaka Institute of Technology and Sri Vinayaka PUC is situated within 10 Km from Bangarpet Junction at the heart of the city Kolar Gold Fields , the campus is clean & green conducive for learning.</p>\r\n<p>The Engineer Courses offered in Sri Vinayaka Group of Institutions is affiliated to Visvesvaraya Technological University (VTU), Karnataka and is approved by the All India Council for Technical Education (AICTE).</p>\r\n', 'https://givogo.in/svms/uploads/92687314-woman-writes-something-on-paper-starts-to-write-a-letter-person-sign-document-write-on-paper-using-p1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `online_admission_id` int(11) NOT NULL,
  `candidate_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_occuption` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_occuption` varchar(255) NOT NULL,
  `father_mobile` int(10) NOT NULL,
  `mother_mobile` int(10) NOT NULL,
  `candidate_mobile` int(10) NOT NULL,
  `aadhar_number` int(12) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `caste` int(2) NOT NULL,
  `date_of_birth` date NOT NULL,
  `department` tinyint(4) NOT NULL,
  `gender` text NOT NULL,
  `marital_status` text NOT NULL,
  `candidate_belongs` varchar(255) NOT NULL,
  `mother_tongue` text NOT NULL,
  `candidate_email` varchar(255) NOT NULL,
  `eq_sc` varchar(255) NOT NULL,
  `eq_q` varchar(255) NOT NULL,
  `eq_yp` int(4) NOT NULL,
  `eq_tm` int(4) NOT NULL,
  `eq_per` varchar(6) NOT NULL,
  `eq_sc1` varchar(255) DEFAULT NULL,
  `eq_q1` varchar(255) DEFAULT NULL,
  `eq_yp1` int(4) DEFAULT NULL,
  `eq_tm1` int(4) DEFAULT NULL,
  `eq_per1` varchar(6) DEFAULT NULL,
  `eq_sc2` varchar(255) DEFAULT NULL,
  `eq_q2` varchar(255) DEFAULT NULL,
  `eq_yp2` int(4) DEFAULT NULL,
  `eq_tm2` int(4) DEFAULT NULL,
  `eq_per2` varchar(6) DEFAULT NULL,
  `present_address` varchar(500) NOT NULL,
  `permanent_address` varchar(500) NOT NULL,
  `candidate_aadhar_upload` varchar(255) NOT NULL,
  `candidate_aadhar1_upload` varchar(255) NOT NULL,
  `candidate_marks_upload` varchar(255) NOT NULL,
  `candidate_photo_upload` varchar(255) NOT NULL,
  `admission_session` int(2) NOT NULL,
  `admission_status` tinyint(4) DEFAULT NULL,
  `admission_confirm` tinyint(4) DEFAULT NULL,
  `application_rejection_reason` varchar(255) DEFAULT NULL,
  `candidate_otp` int(6) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`online_admission_id`, `candidate_name`, `father_name`, `father_occuption`, `mother_name`, `mother_occuption`, `father_mobile`, `mother_mobile`, `candidate_mobile`, `aadhar_number`, `nationality`, `religion`, `caste`, `date_of_birth`, `department`, `gender`, `marital_status`, `candidate_belongs`, `mother_tongue`, `candidate_email`, `eq_sc`, `eq_q`, `eq_yp`, `eq_tm`, `eq_per`, `eq_sc1`, `eq_q1`, `eq_yp1`, `eq_tm1`, `eq_per1`, `eq_sc2`, `eq_q2`, `eq_yp2`, `eq_tm2`, `eq_per2`, `present_address`, `permanent_address`, `candidate_aadhar_upload`, `candidate_aadhar1_upload`, `candidate_marks_upload`, `candidate_photo_upload`, `admission_session`, `admission_status`, `admission_confirm`, `application_rejection_reason`, `candidate_otp`, `register_date`) VALUES
(1, 'sandeep', 'sdf', 'dsfsd', 'dsf', 'sdf', 1234567890, 1234567890, 1234567890, 2147483647, '857', '8796', 4, '2021-09-08', 8, 'male', 'single', 'karnataka', 'df', 'connectwithworld61@gmail.com', 'sdf', 'sdf', 2012, 2101, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dasd', 'sada', 'https://givogo.in/svms/uploads/admission/front.jpg', 'https://givogo.in/svms/uploads/admission/back.jpg', 'http://localhost/svms/uploads/admission/31.jpg', 'http://localhost/svms/uploads/admission/51.jpg', 2, 1, 1, NULL, 960538, '2021-10-04 02:01:25'),
(2, 'fdgd', 'fdgfd', 'fdgd', 'fdg', 'fds', 1234567890, 1234567890, 1234567890, 2147483647, 'yuty', 'tyurt', 5, '2021-09-15', 8, 'female', 'single', 'karnataka', 'fgh', '24suryar@gmail.com', 'hjf', 'yf', 1234, 120, '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdhgf', 'gfdhrfd', 'https://givogo.in/svms/uploads/admission/front.jpg', 'https://givogo.in/svms/uploads/admission/back.jpg', 'http://localhost/svms/uploads/admission/Screenshot_2021-09-11_at_11-53-39_Shree_Vinayaka_Dashboard2.png', 'https://givogo.in/svms/uploads/admission/Screenshot_2021-09-11_at_11-53-39_Shree_Vinayaka_Dashboard3.png', 2, 1, NULL, NULL, NULL, '2021-10-29 06:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `complaint_subject` varchar(225) DEFAULT NULL,
  `complaint` varchar(10000) NOT NULL,
  `complaint_session` int(10) NOT NULL,
  `complaint_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `student_id`, `dept_id`, `complaint_subject`, `complaint`, `complaint_session`, `complaint_date`) VALUES
(3, 1, 8, '8', 'fhf', 2, '2021-09-26 05:26:26'),
(5, 1, 8, '8', 'sfsafsdfgsdfsdfs', 2, '2021-10-02 14:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_category`
--

CREATE TABLE `complaint_category` (
  `complaint_cat_id` int(11) NOT NULL,
  `complaint_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint_category`
--

INSERT INTO `complaint_category` (`complaint_cat_id`, `complaint_type`) VALUES
(8, 'complaint on faculty\'s');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_public`
--

CREATE TABLE `complaint_public` (
  `complaint_public_id` int(11) NOT NULL,
  `complaint_public_name` varchar(255) NOT NULL,
  `complaint_public_email` varchar(255) NOT NULL,
  `complaint_public_mobile` varchar(10) NOT NULL,
  `complaint_public_subject` varchar(255) NOT NULL,
  `complaint_public` varchar(10000) NOT NULL,
  `complaint_public_session` int(11) NOT NULL,
  `complaint_public_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_public`
--

INSERT INTO `complaint_public` (`complaint_public_id`, `complaint_public_name`, `complaint_public_email`, `complaint_public_mobile`, `complaint_public_subject`, `complaint_public`, `complaint_public_session`, `complaint_public_date`) VALUES
(1, 'sandeep', 'shopatgivogo@gmail.com', '8861630673', 'complaint on rash driving', 'we have noticed that you sollege vehicale is rash driving', 2, '2021-09-26 09:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(225) NOT NULL,
  `department_duriation` int(1) NOT NULL,
  `department_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_duriation`, `department_image`) VALUES
(8, 'Diplomo in Mechanical Engineering', 3, 'https://givogo.in/svms/uploads/mech-dept-img1.jpg'),
(9, 'Diploma in Computer Science and Engineering.', 3, 'https://givogo.in/svms/uploads/1as.jpg'),
(10, 'Diploma in Electrical Engineering.', 3, 'https://givogo.in/svms/uploads/gd-electrical-engineering.jpg'),
(11, 'Diploma in Civil Engineering.', 3, 'https://givogo.in/svms/uploads/Diploma-Civil-Engg_-1170x747.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `enquiry_name` varchar(255) NOT NULL,
  `enquiry_type` tinyint(1) NOT NULL,
  `enquiry_details` varchar(1500) NOT NULL,
  `enquiry_contact` varchar(255) NOT NULL,
  `enquiry_session` int(10) NOT NULL,
  `enquiry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `enquiry_name`, `enquiry_type`, `enquiry_details`, `enquiry_contact`, `enquiry_session`, `enquiry_date`) VALUES
(4, 'sandeep', 1, 'look forward to your reply and a resolution to my problem and will wait until the aforementioned time before seeking help from a consumer protection agency or the Better Business Bureau. Please contact me at the above address or by phone at 098100XXXXX.', 'connectwithworld61@gmail.com', 2, '2021-09-04 11:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_category`
--

CREATE TABLE `enquiry_category` (
  `enquiry_cat_id` int(11) NOT NULL,
  `enquiry_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry_category`
--

INSERT INTO `enquiry_category` (`enquiry_cat_id`, `enquiry_type`) VALUES
(1, 'Admission'),
(6, 'About Institutes');

-- --------------------------------------------------------

--
-- Table structure for table `fees_details`
--

CREATE TABLE `fees_details` (
  `fees_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `studend_id` int(11) NOT NULL,
  `fees_paid` varchar(12) NOT NULL,
  `fees_paid_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `general_settings_id` int(11) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `institute_code` varchar(255) NOT NULL,
  `institute_tagline` varchar(255) NOT NULL,
  `institute_address` varchar(255) NOT NULL,
  `institute_phone` varchar(15) NOT NULL,
  `institute_email` varchar(255) NOT NULL,
  `institute_logo` varchar(255) NOT NULL,
  `institute_favicon` varchar(255) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `front_cms` tinyint(1) NOT NULL,
  `online_application` tinyint(1) NOT NULL,
  `whatsapp_url` varchar(255) NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `twitter_url` varchar(255) NOT NULL,
  `instagram_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`general_settings_id`, `institute_name`, `institute_code`, `institute_tagline`, `institute_address`, `institute_phone`, `institute_email`, `institute_logo`, `institute_favicon`, `footer_text`, `front_cms`, `online_application`, `whatsapp_url`, `facebook_url`, `twitter_url`, `instagram_url`) VALUES
(1, 'Shree Vinayaka', 'CODE-526', '(Recognized by the Government of Karnataka - Affiliated to AICTE)', 'Coromandel post, Kolar Gold Fields, Karnataka - 563120', '+91853270975', 'admission@svgi.edu.in', 'https://givogo.in/svms/uploads/logo1.png', 'https://givogo.in/svms/uploads/favicon.png', 'Copyright © 2021-2022 Shree Vinayaka Polytechnic. All rights reserved.', 1, 1, 'gdfgdf', 'dfgd', 'dfgdf', 'dfgd');

-- --------------------------------------------------------

--
-- Table structure for table `grivance`
--

CREATE TABLE `grivance` (
  `grivance_id` int(11) NOT NULL,
  `grivance_title` varchar(255) NOT NULL,
  `grivance_desc` varchar(10000) NOT NULL,
  `grivance_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grivance`
--

INSERT INTO `grivance` (`grivance_id`, `grivance_title`, `grivance_desc`, `grivance_image`) VALUES
(1, 'Complaint Management<br>of our College', 'A grievance is a complaint. It can be formal,<br> as when an employee files a grievance because of unsafe working conditions,<br> or more of an emotional matter, like a grievance against an old friend who betrayed you.<br> A grievance is a complaint that may or may not be justified. ', 'https://givogo.in/svms/uploads/92687314-woman-writes-something-on-paper-starts-to-write-a-letter-person-sign-document-write-on-paper-using-p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grivance_verification`
--

CREATE TABLE `grivance_verification` (
  `grivance_verify_id` int(11) NOT NULL,
  `grivance_email` varchar(255) NOT NULL,
  `grivance_sess` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grivance_verification`
--

INSERT INTO `grivance_verification` (`grivance_verify_id`, `grivance_email`, `grivance_sess`) VALUES
(1, 'connectwithworld61@gmail.com', '961500'),
(2, 'shopatgivogo@gmail.com', '440504'),
(3, 'projotest6@gmail.com', '241012');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `semester_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`semester_id`, `department_id`, `semester_name`) VALUES
(1, 1, '1st Year'),
(2, 1, '2nd Year');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `session` varchar(10) NOT NULL,
  `session_status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `session`, `session_status`) VALUES
(1, '2021-22', NULL),
(2, '2022-23', 1),
(3, '2023-24', NULL),
(4, '2024-25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_desc` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_desc`, `slider_image`) VALUES
(3, 'Something and share your whatever', 'Else it easy for you to do whatever this thing does.', 'https://givogo.in/svms/uploads/College_image.jpg'),
(4, 'Create and share your whatever anytime', 'Make it easy for you to do whatever this thing does.', 'https://givogo.in/svms/uploads/down-_-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_category`
--

CREATE TABLE `student_category` (
  `student_cat_id` int(11) NOT NULL,
  `student_cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_category`
--

INSERT INTO `student_category` (`student_cat_id`, `student_cat_name`) VALUES
(4, 'SC'),
(5, 'ST'),
(7, 'OBC');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` varchar(225) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_role` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_role`, `reg_date`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$VJdjnZYaO3ejMu870nhfkuecmS3d/JuHPltLHuvFytCN91iqEvlyi', 'admin', '2021-10-29 01:54:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`online_admission_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `complaint_category`
--
ALTER TABLE `complaint_category`
  ADD PRIMARY KEY (`complaint_cat_id`);

--
-- Indexes for table `complaint_public`
--
ALTER TABLE `complaint_public`
  ADD PRIMARY KEY (`complaint_public_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `enquiry_category`
--
ALTER TABLE `enquiry_category`
  ADD PRIMARY KEY (`enquiry_cat_id`);

--
-- Indexes for table `fees_details`
--
ALTER TABLE `fees_details`
  ADD PRIMARY KEY (`fees_id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`general_settings_id`);

--
-- Indexes for table `grivance`
--
ALTER TABLE `grivance`
  ADD PRIMARY KEY (`grivance_id`);

--
-- Indexes for table `grivance_verification`
--
ALTER TABLE `grivance_verification`
  ADD PRIMARY KEY (`grivance_verify_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `student_category`
--
ALTER TABLE `student_category`
  ADD PRIMARY KEY (`student_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `online_admission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `complaint_category`
--
ALTER TABLE `complaint_category`
  MODIFY `complaint_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `complaint_public`
--
ALTER TABLE `complaint_public`
  MODIFY `complaint_public_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiry_category`
--
ALTER TABLE `enquiry_category`
  MODIFY `enquiry_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fees_details`
--
ALTER TABLE `fees_details`
  MODIFY `fees_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `general_settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grivance`
--
ALTER TABLE `grivance`
  MODIFY `grivance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grivance_verification`
--
ALTER TABLE `grivance_verification`
  MODIFY `grivance_verify_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_category`
--
ALTER TABLE `student_category`
  MODIFY `student_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
