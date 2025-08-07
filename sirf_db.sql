-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2025 at 02:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `infra_facilities`
--

CREATE TABLE `infra_facilities` (
  `id` int(11) NOT NULL,
  `institution_name` varchar(255) DEFAULT NULL,
  `basic_amenities` text DEFAULT NULL,
  `cultural_sports_facilities` text DEFAULT NULL,
  `lab_facilities` text DEFAULT NULL,
  `library_facilities` text DEFAULT NULL,
  `infra_satisfaction_score` decimal(5,2) DEFAULT NULL,
  `wifi_update_info` text DEFAULT NULL,
  `student_computer_ratio` varchar(50) DEFAULT NULL,
  `ict_enabled_facilities` text DEFAULT NULL,
  `online_services_percent` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infra_facilities`
--

INSERT INTO `infra_facilities` (`id`, `institution_name`, `basic_amenities`, `cultural_sports_facilities`, `lab_facilities`, `library_facilities`, `infra_satisfaction_score`, `wifi_update_info`, `student_computer_ratio`, `ict_enabled_facilities`, `online_services_percent`) VALUES
(1, 'TCE', '123', '123', '231', '123', 123.00, '123', '123', '123', 213.00),
(2, 'TCE', '', '', '', '', 123.00, '0', '123', '', 213.00),
(3, 'AU', '12', '12', '12', '12', 12.00, '12', '', '12', 12.00);

-- --------------------------------------------------------

--
-- Table structure for table `institution_ranking`
--

CREATE TABLE `institution_ranking` (
  `id` int(11) NOT NULL,
  `cgpa` decimal(4,2) DEFAULT NULL,
  `nba_percentage` decimal(5,2) DEFAULT NULL,
  `nirf_rank` int(11) DEFAULT NULL,
  `global_participation` varchar(255) DEFAULT NULL,
  `global_rank` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institution_ranking`
--

INSERT INTO `institution_ranking` (`id`, `cgpa`, `nba_percentage`, `nirf_rank`, `global_participation`, `global_rank`) VALUES
(1, 12.00, 12.00, 12, '12', '12'),
(2, 12.00, 999.99, 1212, '12', '12'),
(3, 12.00, 22.00, 22, '22', '22'),
(4, 99.99, 111.00, 11, '111', '11'),
(5, 12.00, 12.00, 12, '12', '12');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `research_projects` varchar(255) DEFAULT NULL,
  `patents` varchar(255) DEFAULT NULL,
  `consultancy` varchar(255) DEFAULT NULL,
  `publications` varchar(255) DEFAULT NULL,
  `funded_projects` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_data`
--

CREATE TABLE `research_data` (
  `id` int(11) NOT NULL,
  `publications` int(11) DEFAULT NULL,
  `patents_filed` int(11) DEFAULT NULL,
  `patents_granted` int(11) DEFAULT NULL,
  `research_funding` bigint(20) DEFAULT NULL,
  `consultancy_revenue` bigint(20) DEFAULT NULL,
  `projects_completed` int(11) DEFAULT NULL,
  `scholars_enrolled` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research_data`
--

INSERT INTO `research_data` (`id`, `publications`, `patents_filed`, `patents_granted`, `research_funding`, `consultancy_revenue`, `projects_completed`, `scholars_enrolled`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 3, 12, 12, 12, 12, 12, 12),
(3, 3, 12, 12, 12, 12, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `student_outcome_data`
--

CREATE TABLE `student_outcome_data` (
  `id` int(11) NOT NULL,
  `institution_name` varchar(255) DEFAULT NULL,
  `students_to_premier_pct` float DEFAULT NULL,
  `graduates_employed_pct` float DEFAULT NULL,
  `average_ctc` float DEFAULT NULL,
  `tansche_score_avg` float DEFAULT NULL,
  `startup_initiated_pct` float DEFAULT NULL,
  `startup_survival_pct` float DEFAULT NULL,
  `alumni_leaders_pct` float DEFAULT NULL,
  `student_competition_participation_pct` float DEFAULT NULL,
  `student_competition_winrate_pct` float DEFAULT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_outcome_data`
--

INSERT INTO `student_outcome_data` (`id`, `institution_name`, `students_to_premier_pct`, `graduates_employed_pct`, `average_ctc`, `tansche_score_avg`, `startup_initiated_pct`, `startup_survival_pct`, `alumni_leaders_pct`, `student_competition_participation_pct`, `student_competition_winrate_pct`, `submission_date`) VALUES
(1, 'TCE', 12, 12, 12, 12, 12, 12, 12, 12, 12, '2025-07-31 11:38:06'),
(2, 'TCE', 12, 12, 12, 12, 12, 12, 12, 12, 13, '2025-07-31 11:38:20'),
(3, 'TCE', 14, 12, 12, 12, 12, 12, 12, 12, 13, '2025-07-31 11:38:34'),
(4, '234', 22, 22, 22, 22, 22, 22, 22, 22, 22, '2025-08-01 04:59:46'),
(5, 'AU', 12, 12, 12, 12, 12, 12, 12, 12, 12, '2025-08-04 05:03:40'),
(6, 'AU', 12, 12, 12, 12, 12, 12, 12, 12, 12, '2025-08-04 05:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `student_support`
--

CREATE TABLE `student_support` (
  `id` int(11) NOT NULL,
  `institution_name` varchar(255) DEFAULT NULL,
  `reported_incidents` int(11) DEFAULT NULL,
  `grievance_resolve_rate` decimal(5,2) DEFAULT NULL,
  `surveillance_coverage` int(11) DEFAULT NULL,
  `committee_meetings` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_support`
--

INSERT INTO `student_support` (`id`, `institution_name`, `reported_incidents`, `grievance_resolve_rate`, `surveillance_coverage`, `committee_meetings`) VALUES
(1, 'TCE', 34, 21.00, 12, 12),
(2, 'TCE', 34, 21.00, 12, 12),
(3, 'TCE', 34, 21.00, 12, 34),
(4, 'TCE', 34, 21.00, 12, 12),
(5, 'AU', 12, 12.00, 12, 12),
(6, 'TCE', 12, 12.00, 12, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infra_facilities`
--
ALTER TABLE `infra_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institution_ranking`
--
ALTER TABLE `institution_ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_data`
--
ALTER TABLE `research_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_outcome_data`
--
ALTER TABLE `student_outcome_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_support`
--
ALTER TABLE `student_support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infra_facilities`
--
ALTER TABLE `infra_facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `institution_ranking`
--
ALTER TABLE `institution_ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research_data`
--
ALTER TABLE `research_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_outcome_data`
--
ALTER TABLE `student_outcome_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_support`
--
ALTER TABLE `student_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
