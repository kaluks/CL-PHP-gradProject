-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2016 at 08:16 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_gcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer1` varchar(100) NOT NULL,
  `answer2` varchar(100) NOT NULL,
  `answer3` varchar(100) NOT NULL,
  `answer4` varchar(100) NOT NULL,
  `answer5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`) VALUES
(2, 'What is the advantage of a carbon fiber AFO compared to fixed angle AFO?', 'Flexibility for use of active planterflexors', 'Provides improved ankle stability', 'Flexibility for use of active dorsiflexors', 'Accommodates fluctuating edema', 'A fixed angle AFO is the preferred device'),
(3, ' Which has more bones: a horse or a human? ', 'A human.', 'A horse.', 'A tree.', 'Neither has bones. ', 'Impossible to answer.'),
(4, ' Tomato or Tomahtoe? ', 'Tomato', 'Tomahto', 'Toledo', 'Toronto', 'Consuelo'),
(5, '  Presbycusis is typically:', 'a sensorineural loss', 'unilateral', 'more pronounced at lower frequencies', 'related to stenosis', 'known as noise-induced hearing loss'),
(6, '  Your mCTSIB results are: 30 seconds, 4 seconds, 19 seconds, 12 seconds. You predict a balance loss is due to: ', 'proprioception in the lower extremities', 'vestibular hypofunction', 'BPPV', 'central atrophy', 'bilateral vestibular loss'),
(8, ' The core temperature of a 44 y/o male is 97.9 degrees C. The predicted HR is: ', '0 bpm', '65 bpm', '68 bpm', '72 bpm', '76 bpm'),
(14, '  Your patient has a positive FABER test of the right lower extremity. During the test, the patient reported:  ', 'pain over the left SI ', 'left anterior hip pain', 'right knee pain', 'sensory changes left lateral ankle', 'motor changes right lateral ankle'),
(15, '  Your 68 y/o woman expresses concerns about osteoporosis prevention. You recommend:              ', 'thoracic extension strength &amp; flexibility exercises', 'pool therapy at 75% max HR, three times weekly', 'lumbar flexion strength &amp; flexibility exercises', 'a walking program at 3 mph, 5 days/ week', 'referral to physician for medication intervention '),
(18, '    Imaging results indicate lumbar stenosis, lower cervical DDD, and healed compression fractures at T8 and T10. Your POC should include:    ', 'segmental stabilization from neutral spine position performed supine', 'lumbar and thoracic extension strength exercises performed seated', 'core and lower extremity strength exercises performed seated', 'spine extensor strengthening from prone', 'referral to spine orthopaedic specialist'),
(21, 'Will there be any math?', 'Yes, yes indeed.', 'Probably', 'I''m not giving away answers', 'No ', 'Ask again later.'),
(39, 'Your company is promoting its programs to lower re-hospitalization rates, and would like to include a screening tool. You recommend:', 'gait speed', 'floor to stand measure', 'Tinetti', '30 second sit to stand ', 'four square test'),
(40, ' A 59 y/o male has been discharged home with a new diagnosis of CHF. His EF is estimated 70%. Your education should stress the importance of:', 'diet and medication compliance', 'fluid restricitons', 'strength program at 30% one rep max', 'use of ramps instead of stairs', 'limiting driving to daylight hours');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
