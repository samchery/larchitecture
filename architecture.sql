-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
<<<<<<< Updated upstream
-- Generation Time: May 17, 2017 at 08:01 AM
=======
-- Generation Time: May 17, 2017 at 09:04 AM
>>>>>>> Stashed changes
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `architecture`
--

-- --------------------------------------------------------

--
-- Table structure for table `actus`
--

CREATE TABLE IF NOT EXISTS `actus` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `architecte` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `mainimage` varchar(255) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actus`
--

INSERT INTO `actus` (`id`, `date`, `architecte`, `titre`, `type`, `lieu`, `description`, `mainimage`, `images`) VALUES
(1, '21/05/2009', 'ABH Architectes', 'Projet Astrale - Construction d''un ensemble de bureaux au Plessis Robinson', 'Tertiaire - Bureau', 'Plessis Robinson (92)', '', 'photo_princid1.jpg', ''),
(2, '20/05/2009', 'ARSENAULT Eric', 'Internat du lycée agricole à Château Chinon', 'Enseignement - Lycée', 'Chinon (58)', '', 'photo_princid2.jpg', ''),
(3, '20/05/2009', 'BIK Architecture', 'Aménagement du bowling "Le colisée" à Angers', 'Espace de loisir', 'Angers (49)', '', 'photo_princid3.jpg', ''),
(4, '20/05/2009', 'DUCLOS Architectes Associés', 'Construction de la délégation régionale du CNFPT à Poitiers', 'Tertiaire - Bureau', 'Poities (86)', '', 'photo_princid4.jpg', ''),
(5, '20/05/2009', 'MICHEL Jean-Louis', 'Construction du nouveau siège social de la C.A.F. du Gard', 'Tertiaire - Bureau', 'Gard (30)', '', 'photo_princid5.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `partenaires`
--

CREATE TABLE IF NOT EXISTS `partenaires` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `departement` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `secteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partenaires`
--

INSERT INTO `partenaires` (`id`, `nom`, `departement`, `url`, `region`, `secteur`) VALUES
(1, 'Euroco', 69, 'http://www.euresco.fr/', 'Ile-de-France', 'AGENCEMENT MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES'),
(2, 'LEROUX - PACREAU', 49, 'http://www.leroux-pacreau.fr/', 'Ile-de-France', 'AGENCEMENT MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES'),
(3, 'IRVOAS & CIE', 78, 'http://www.irvoas.fr/', 'Ile-de-France', 'CLOISONS, PLAFONDS, ISOLATION'),
(4, 'HALLOU ESCALIERS', 35, 'http://www.hallou.fr/', 'Ile-de-France', 'ESCALIETEUR'),
(5, 'DREAMTEAM SERVICES', 94, 'http://www.dreamteamservices.com/', 'Ile-de-France', 'SERVICES AUX PROFESSIONNELS'),
(6, 'CALOREO', 76, 'http://caloreo.free.fr/kontakt.html', 'Bretagne - Normandie', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE'),
(7, 'ETDE', 14, 'http://www.bouyguesenergiesservices.com/', 'Bretagne - Normandie', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE'),
(8, 'MELIN', 27, 'http://www.melin-sa.fr/', 'Bretagne - Normandie', 'MENUISERIE (BOIS ET ALU), MIROITERIE');

-- --------------------------------------------------------

--
-- Table structure for table `revues`
--

CREATE TABLE IF NOT EXISTS `revues` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
<<<<<<< Updated upstream
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datepub` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
=======
  `img` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `datepub` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
>>>>>>> Stashed changes

--
-- Dumping data for table `revues`
--

INSERT INTO `revues` (`id`, `numero`, `img`, `region`, `zone`, `datepub`) VALUES
<<<<<<< Updated upstream
(1, 150, 'truc.jpg', 'Ile-de-France', 'France métropolitaine', 2016);
=======
(1, 285, 'couv_285.jpg', 'Martinique', 'France métropolitaine', '2017'),
(2, 284, 'couv_284.jpg', 'Ile-de-France', 'France métropolitaine', '2016'),
(3, 283, 'couv_283.jpg', 'Bretagne - Normandie', 'France métropolitaine', '2016'),
(4, 282, 'couv_282.jpg', 'Rhône-Alpes', 'France métropolitaine', '2016'),
(5, 280, 'couv_280.jpg', 'Guadeloupe', 'Outre-Mer', '2016'),
(6, 279, 'couv_279.jpg', 'Alsace', 'France métropolitaine', '2016'),
(7, 278, 'couv_278.jpg', 'Belgique', 'Europe', '2016'),
(8, 277, 'couv_277.jpg', 'Suisse', 'Europe', '2016'),
(9, 276, 'couv_276.jpg', 'Centre', 'France métropolitaine', '2016'),
(10, 275, 'couv_275.jpg', 'Poitou-Charentes - Pays de la Loire', 'France métropolitaine', '2016'),
(11, 274, 'couv_274.jpg', 'Guyane', 'Outre-Mer', '2015'),
(12, 273, 'couv_273.jpg', 'Franche-Comté - Lorraine', 'France métropolitaine', '2015'),
(13, 272, 'couv_272.jpg', 'Champagne-Ardenne - Picardie - Nord-Pas-de-Calais', 'France métropolitaine', '2015'),
(14, 271, 'couv_271.jpg', 'Réunion', 'Outre-Mer', '2015'),
(15, 270, 'couv_270.jpg', 'Saint-Martin - Saint-barthelemy', 'Outre-Mer', '2015'),
(16, 269, 'couv_269.jpg', 'Ile-de-France', 'France métropolitaine', '2015');
>>>>>>> Stashed changes

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revueNum` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actus`
--
ALTER TABLE `actus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revues`
--
ALTER TABLE `revues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actus`
--
ALTER TABLE `actus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `revues`
--
ALTER TABLE `revues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
