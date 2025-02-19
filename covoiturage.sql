-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2025 at 11:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covoiturage`
--

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE `compte` (
  `num_type_compte` int(11) DEFAULT NULL,
  `num_uti` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`num_type_compte`, `num_uti`, `login`, `password`, `email`) VALUES
(1, 38, 'susie', 'password', 'maz.dorra@gmail.com'),
(3, 39, 'foufou', 'firas', 'firas@gmail.com'),
(2, 40, 'om', '55555', 'omar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('dorra', 'maz.dorra@gmail.com', 'how do i signup as a driver and passenger simultaneously');

-- --------------------------------------------------------

--
-- Table structure for table `etape`
--

CREATE TABLE `etape` (
  `num_etape` int(11) NOT NULL,
  `num_trajet` int(11) NOT NULL,
  `ville_depart_trajet` varchar(255) NOT NULL,
  `heure` time NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `ville_arrivee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reserver`
--

CREATE TABLE `reserver` (
  `id` int(11) NOT NULL,
  `num_uti` int(11) DEFAULT NULL,
  `num_trajet` int(11) DEFAULT NULL,
  `nb_place_reserve` int(11) DEFAULT NULL,
  `reserver_num_uti` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserver`
--

INSERT INTO `reserver` (`id`, `num_uti`, `num_trajet`, `nb_place_reserve`, `reserver_num_uti`) VALUES
(4, 38, 4, 3, 40);

-- --------------------------------------------------------

--
-- Table structure for table `trajet`
--

CREATE TABLE `trajet` (
  `num_trajet` int(11) NOT NULL,
  `num_uti` int(11) NOT NULL,
  `ville_depart_trajet` varchar(255) NOT NULL,
  `heure` time NOT NULL,
  `distance` float NOT NULL,
  `durree` time NOT NULL,
  `date_trajet` date NOT NULL,
  `heure_pickup` time DEFAULT NULL,
  `etat_trajet` varchar(255) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `prix` decimal(10,2) NOT NULL,
  `ville_arrivee_trajet` varchar(255) NOT NULL,
  `is_reserved` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trajet`
--

INSERT INTO `trajet` (`num_trajet`, `num_uti`, `ville_depart_trajet`, `heure`, `distance`, `durree`, `date_trajet`, `heure_pickup`, `etat_trajet`, `commentaire`, `prix`, `ville_arrivee_trajet`, `is_reserved`) VALUES
(4, 38, 'Tunis', '08:00:00', 40, '03:00:00', '2024-08-01', '07:45:00', 'safe', NULL, 20.00, 'Sousse', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_compte`
--

CREATE TABLE `type_compte` (
  `num_type_compte` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type_compte`
--

INSERT INTO `type_compte` (`num_type_compte`, `type_name`) VALUES
(1, 'Admin'),
(2, 'Passenger'),
(3, 'Driver');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `num_uti` int(11) NOT NULL,
  `nom_uti` varchar(100) DEFAULT NULL,
  `prenom_uti` varchar(100) DEFAULT NULL,
  `phone_uti` varchar(20) NOT NULL,
  `cin_uti` varchar(20) NOT NULL,
  `ville_uti` varchar(100) DEFAULT NULL,
  `sexe_uti` enum('M','F','Other') DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `fumeur_oui_non` enum('Yes','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`num_uti`, `nom_uti`, `prenom_uti`, `phone_uti`, `cin_uti`, `ville_uti`, `sexe_uti`, `date_naissance`, `fumeur_oui_non`) VALUES
(38, 'dorra', 'mazhoud', '+316954786', '4512365', 'tunis', '', '1996-01-01', ''),
(39, 'firas', 'fares', '+216548245', '4512565', 'tunis', '', '2000-11-30', ''),
(40, 'omar', 'ramo', '7845329', '154614554', 'tunis', '', '1996-07-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicule`
--

CREATE TABLE `vehicule` (
  `mat` varchar(50) NOT NULL,
  `num_uti` int(11) DEFAULT NULL,
  `marque` varchar(100) DEFAULT NULL,
  `modele` varchar(100) DEFAULT NULL,
  `nbrplace` int(11) DEFAULT NULL,
  `comfort` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicule`
--

INSERT INTO `vehicule` (`mat`, `num_uti`, `marque`, `modele`, `nbrplace`, `comfort`) VALUES
('123456789', 38, '', '', 3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`num_uti`,`login`);

--
-- Indexes for table `etape`
--
ALTER TABLE `etape`
  ADD PRIMARY KEY (`num_etape`),
  ADD KEY `num_trajet` (`num_trajet`);

--
-- Indexes for table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `num_uti` (`num_uti`),
  ADD KEY `num_trajet` (`num_trajet`),
  ADD KEY `reserver_num_uti` (`reserver_num_uti`);

--
-- Indexes for table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`num_trajet`),
  ADD KEY `num_uti` (`num_uti`);

--
-- Indexes for table `type_compte`
--
ALTER TABLE `type_compte`
  ADD PRIMARY KEY (`num_type_compte`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`num_uti`,`cin_uti`);

--
-- Indexes for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`mat`),
  ADD KEY `num_uti` (`num_uti`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etape`
--
ALTER TABLE `etape`
  MODIFY `num_etape` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reserver`
--
ALTER TABLE `reserver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trajet`
--
ALTER TABLE `trajet`
  MODIFY `num_trajet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_compte`
--
ALTER TABLE `type_compte`
  MODIFY `num_type_compte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `num_uti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`num_uti`) REFERENCES `utilisateur` (`num_uti`);

--
-- Constraints for table `etape`
--
ALTER TABLE `etape`
  ADD CONSTRAINT `etape_ibfk_1` FOREIGN KEY (`num_trajet`) REFERENCES `trajet` (`num_trajet`);

--
-- Constraints for table `reserver`
--
ALTER TABLE `reserver`
  ADD CONSTRAINT `reserver_ibfk_1` FOREIGN KEY (`num_uti`) REFERENCES `utilisateur` (`num_uti`),
  ADD CONSTRAINT `reserver_ibfk_2` FOREIGN KEY (`num_trajet`) REFERENCES `trajet` (`num_trajet`),
  ADD CONSTRAINT `reserver_ibfk_3` FOREIGN KEY (`reserver_num_uti`) REFERENCES `utilisateur` (`num_uti`);

--
-- Constraints for table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `trajet_ibfk_1` FOREIGN KEY (`num_uti`) REFERENCES `utilisateur` (`num_uti`);

--
-- Constraints for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`num_uti`) REFERENCES `utilisateur` (`num_uti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
