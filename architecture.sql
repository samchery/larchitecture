-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 18, 2017 at 11:57 AM
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
  `datepub` varchar(255) NOT NULL,
  `architecte` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `mainimage` varchar(255) NOT NULL,
  `resum` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actus`
--

INSERT INTO `actus` (`id`, `datepub`, `architecte`, `titre`, `type`, `lieu`, `description`, `mainimage`, `resum`) VALUES
(1, '21/05/2009', 'ABH Architectes', 'Projet Astrale - Construction d''un ensemble de bureaux au Plessis Robinson', 'Tertiaire - Bureau', 'Plessis Robinson (92)', 'Situé au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor. L''immeuble tertiaire "Astrale" permet de répondre aussi bien à un mono utilisateur qu’à un grand nombre de locataires. D’une capacité d''accueil de 1 500 personnes, avec une surface de 25 000 m2 SHON et 56 000m2 SHOB, il intègre 760 places de parkings sur 2 niveaux de sous-sol et un restaurant 1000 couverts. Le parti d''implantation est de créer un bâtiment urbain périmétrique permettant de dégager un parc végétal de la plus grande dimension possible en son centre. Le restaurant tout en courbe devient lui même une partie de ce jardin en s''agrémentant d''une terrasse végétalisée. L''ensemble des bâtiments s''articule autour de ce parc où plateaux, paliers, escaliers, rue intérieure et restaurant ont des vues. Deux halls principaux ponctuent l’édifice en marquant fortement la volumétrie de l’ensemble.\nAu Nord une faille entièrement vitrée accompagnée par un voile en béton blanc courbe offre une transparence entre l’avenue et le jardin intérieur.\nAu Sud, un totem vitré lumineux visible depuis l’A86 englobe les salles de réunion rouges afin de former un signal identitaire.\nL’organisation en plan résulte d’une recherche de confort et de flexibilité des plateaux de bureaux ainsi que d’une optimisation de l’éclairage naturel, y compris pour l’ensemble des circulations verticales et horizontales. \nLes systèmes environnementaux développés sont le traitement de toiture végétalisée avec récupération des eaux de pluies, \nla mise en place de pompes à chaleur individuelles réversibles raccordées sur une boucle thermodynamique,\nun système de gestion technique centralisé.', 'photo_princid1.jpg', 'Situé au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor.	'),
(2, '20/05/2009', 'ARSENAULT Eric', 'Internat du lycée agricole à Château Chinon', 'Enseignement - Lycée', 'Chinon (58)', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité. Différentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé.  A l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.', 'photo_princid2.jpg', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan'),
(3, '20/05/2009', 'BIK Architecture', 'Aménagement du bowling "Le colisée" à Angers', 'Espace de loisir', 'Angers (49)', 'Situé au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor.	\r\nL''immeuble tertiaire "Astrale" permet de répondre aussi bien à un mono utilisateur qu’à un grand nombre de locataires.\r\nD’une capacité d''accueil de 1 500 personnes, avec une surface de 25 000 m2 SHON et 56 000m2 SHOB, il intègre 760 places de parkings sur 2 niveaux de sous-sol et un restaurant 1000 couverts.\r\nLe parti d''implantation est de créer un bâtiment urbain périmétrique permettant de dégager un parc végétal de la plus grande dimension possible en son centre.\r\nLe restaurant tout en courbe devient lui même une partie de ce jardin en s''agrémentant d''une terrasse végétalisée.\r\nL''ensemble des bâtiments s''articule autour de ce parc où plateaux, paliers, escaliers, rue intérieure et restaurant ont des vues.\r\n\r\n\r\nDeux halls principaux ponctuent l’édifice en marquant fortement la volumétrie de l’ensemble.\r\nAu Nord une faille entièrement vitrée accompagnée par un voile en béton blanc courbe offre une transparence entre l’avenue et le jardin intérieur.\r\nAu Sud, un totem vitré lumineux visible depuis l’A86 englobe les salles de réunion rouges afin de former un signal identitaire.\r\nL’organisation en plan résulte d’une recherche de confort et de flexibilité des plateaux de bureaux ainsi que d’une optimisation de l’éclairage naturel, y compris pour l’ensemble des circulations verticales et horizontales. \r\nLes systèmes environnementaux développés sont le traitement de toiture végétalisée avec récupération des eaux de pluies, \r\nla mise en place de pompes à chaleur individuelles réversibles raccordées sur une boucle thermodynamique,\r\nun système de gestion technique centralisé.\r\n', 'photo_princid3.jpg', 'Situé au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor. L''immeuble tertiaire "Astrale" permet de répondre aussi bien à un mono utilisateur qu’à un grand nombre de locataires. D’une capacité d''accueil de 1 500 personnes, avec une surface de 25 000 m2 SHON et 56 000m2 SHOB, il intègre 760 places de parkings sur 2 niveaux de sous-sol et un restaurant 1000 couverts.'),
(4, '20/05/2009', 'DUCLOS Architectes Associés', 'Construction de la délégation régionale du CNFPT à Poitiers', 'Tertiaire - Bureau', 'Poities (86)', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité. Différentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé.  A l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.', 'photo_princid4.jpg', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan'),
(5, '20/05/2009', 'MICHEL Jean-Louis', 'Construction du nouveau siège social de la C.A.F. du Gard', 'Tertiaire - Bureau', 'Gard (30)', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité. Différentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé.  A l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.', 'photo_princid5.jpg', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan');

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
  `secteur` varchar(255) NOT NULL,
  `logo` varchar(2555) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partenaires`
--

INSERT INTO `partenaires` (`id`, `nom`, `departement`, `url`, `region`, `secteur`, `logo`) VALUES
(1, 'Euroco', 69, 'http://www.euresco.fr/', 'Ile-de-France', 'AGENCEMENT MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES', 'euresco.png'),
(2, 'LEROUX - PACREAU', 49, 'http://www.leroux-pacreau.fr/', 'Ile-de-France', 'AGENCEMENT MOBILIER, MÉTIERS D''ART, DÉCORATION, CHEMINEES', 'logoleroux.jpg'),
(3, 'IRVOAS & CIE', 78, 'http://www.irvoas.fr/', 'Ile-de-France', 'CLOISONS, PLAFONDS, ISOLATION', 'logoirovas.png'),
(4, 'HALLOU ESCALIERS', 35, 'http://www.hallou.fr/', 'Ile-de-France', 'ESCALIETEUR', 'hallou.png'),
(5, 'DREAMTEAM SERVICES', 94, 'http://www.dreamteamservices.com/', 'Ile-de-France', 'SERVICES AUX PROFESSIONNELS', 'dreamserviceslogo.jpg'),
(6, 'CALOREO', 76, 'http://caloreo.free.fr/kontakt.html', 'Bretagne - Normandie', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 'caloreologo.jpg'),
(7, 'ETDE', 14, 'http://www.bouyguesenergiesservices.com/', 'Bretagne - Normandie', 'ELECTRICITÉ, CHAUFFAGE, CLIMATISATION, PLOMBERIE', 'bouygues-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `revues`
--

CREATE TABLE IF NOT EXISTS `revues` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `datepub` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revues`
--

INSERT INTO `revues` (`id`, `numero`, `img`, `region`, `zone`, `datepub`) VALUES
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
-- AUTO_INCREMENT for table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
