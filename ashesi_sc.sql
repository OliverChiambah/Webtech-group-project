-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 12:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashesi_sc`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `replies` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `message`, `replies`) VALUES
(1, 'hi|hello|hey', 'Hello there!\r\n'),
(2, 'how are you?', 'I am fine, how are you?'),
(3, 'What is the function of the ASC|How important is the ASC|What is the relevance of the ASC|What role does the ASC play|Is the ASC important? ', 'he ASC is the representative body for students. The ASC represents and plays the important role of fighting for student’s interests.'),
(4, 'What can land me at the AJC|Why are people invited to the AJC| What offense can take me to the AJC| Why am I being invited to the AJC? ', 'Breaching any of the codes of conduct specified in the student’s handbook can land the culprit at the AJC. Sometimes too, people who may be witnesses or just have information of interest pertaining to a case may be invited to the AJC. '),
(5, 'What clubs can I join on campus| What are the names of the clubs on campus| Are there any interesting organizations on campus that I can join|List of clubs on campus ', 'Ashesi Leo Club, Ashesi Wiki Club, Storytellers, CodeEx, CAD Club  '),
(6, 'Who can I go to for emotional support|Where can I get counseling | Who offers counseling |Can I get counseling |Where do I go to for counseling | ', 'The department of counseling and career offers counseling. There are three counselors available that you can talk to. '),
(7, 'What services does the support center offer|Where can I get help for technology challenges| Where can I get help to fix an issue with my laptop| I am facing technical difficulties, where can I get help', 'The support center offers services for students and staff members who are facing technological or technical challenges. They are responsible for any technology-related issue in the university.'),
(8, 'Which people serve on the AJC|Can I apply to serve on the AJC| Who constitute the AJC|', 'The Ashesi membership is neither contested for nor is it constant . It is made up of two students, a faculty, a non-faculty staff member and an external person, who may change with every new case.'),
(9, 'What happens if my class does not sign unto the honour code|What if I do not believe in the honour code|What happens if I do not sign unto the honour code| ', ' If a class decides not to adopt the honour code, it implies that they can not be trusted and they would have their examinations invigilated. '),
(10, 'What happens if I fail a course|what are the effects of failing a course|What the consequences of failing a course|How does failing a course affect me|', 'You are typically asked to retake failed courses. If the course is a prerequisite for other courses, your expected date of graduation may be affected'),
(11, 'What services are offered by the health center| What services can I access/get at the health centre|What does the health centre do| What help can I get at the health centre|', 'The health center provides diagnosis and first aid services. In the event of severe cases, patients are referred to any of the hospitals that the university works with. '),
(12, 'Who is the president of Ashesi|Who is the founder of Ashesi', 'Patrick Awuah'),
(13, 'When did Ashesi begin|When was Ashesi started?|Which year did Ashesi start?', '2002'),
(14, 'What really is the honour code about|What is the honour code|Is the honour code important|How important is the honour code|Should I care about the honour code|Why should I care about the honour code| ', 'The honour code is a self-binding set of standards that members of the Ashesi community decide to adopt. If adopted, members are expected to individually and collectively uphold these standards as it promotes trust within our community and beyond. '),
(15, 'ASC president|who is the ASC president| What is the ASC presidents name', 'Tobias Woode');

-- --------------------------------------------------------

--
-- Table structure for table `cohesionfund`
--

CREATE TABLE `cohesionfund` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(75) NOT NULL,
  `lname` varchar(75) NOT NULL,
  `gender` enum('Male','female','other') DEFAULT NULL,
  `email` varchar(75) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `class` enum('2022','2023','2024','2025') NOT NULL,
  `course` enum('CS','BA','CE','ME','EE','MIS') NOT NULL,
  `pname` varchar(75) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cohesionfund`
--

INSERT INTO `cohesionfund` (`user_id`, `fname`, `lname`, `gender`, `email`, `phone`, `class`, `course`, `pname`, `description`) VALUES
(1, 'jj', 'oo', 'Male', 'oliver.ngong@ashesi.edu.gh', 'ooo', '', 'CS', '000', 'oo'),
(2, 'Ngong', 'Oliver', 'Male', 'oliver.ngong@ashesi.edu.gh', '055989898', '2022', 'CS', 'Black Lives Matter', 'Just a slogan'),
(3, 'Ngong', 'Oliver', 'Male', 'oliver.ngong@ashesi.edu.gh', '055989898', '2022', 'CS', 'Black Lives Matter', 'Just a slogan'),
(4, 'Oliver ', 'Ngong', 'Male', 'oliver.ngong@ashesi.edu.gh', '223322332', '', 'CE', 'logo', 'dddddddd'),
(5, 'Oliver ', 'Ngong', 'Male', 'oliver.ngong@ashesi.edu.gh', '223322332', '', 'CE', 'logo', 'dddddddd'),
(6, 'olloo', 'aaaa', 'Male', 'oliver.ngong@ashesi.edu.gh', '8888', '', 'CS', 'jjhjh', 'asss');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`) VALUES
(1, 'posts', 'This is my first post', '2021-11-26 04:00:36'),
(2, 'Prices on campus', ' Why are prices on campus, especially at Akornor sky-rocketing? Something needs to be done about this!!', '2021-11-26 04:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `First_name`, `Last_name`, `email`, `password`) VALUES
(51, 'precious', 'Njeck', 'precious.njeck@ashesi.edu.gh', '6f0e0bed7e9f0bb75711b1d3731728ea'),
(52, 'Oliver', 'Ngong', 'Oliver.ngong@ashesi.edu.gh', '9afb3a59b3f874c893faf179163459e6'),
(53, 'Caleb', 'Gb', 'precious.njeck@ashesi.edu.gh', 'e123b76b6f7ba22a338c16e0091a195f'),
(54, 'Pamela', 'Niyongere', 'pamela.niyongere@ashesi.edu.gh', '99a575522624bbcb12cc2405f083e0d8'),
(55, 'prenahosih', 'hflws', 'oliver.ngong@ashesi.edu.gh', '59d37218148feecec160bb468efc781f'),
(56, 'pamela', 'Niyongere2', 'pamela.niyon@ashesi.edu.gh', '59d37218148feecec160bb468efc781f'),
(57, 'Oliver', 'Chiambah', 'oliver.chiambah@ashesi.edu.gh', '0cef1fb10f60529028a71f58e54ed07b'),
(58, 'caleb', 'Yaw', 'caleb.yaw@ashesi.edu.gh', '06c2982539fb45bf7cf731584bca0896');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cohesionfund`
--
ALTER TABLE `cohesionfund`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cohesionfund`
--
ALTER TABLE `cohesionfund`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
