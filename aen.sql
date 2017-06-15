-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 15 Juin 2017 à 17:31
-- Version du serveur :  5.5.54-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `aen`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`idAdmin` int(11) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avion`
--

CREATE TABLE IF NOT EXISTS `avion` (
`idAvion` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `surface` int(11) NOT NULL,
  `groupeaccoustique` varchar(100) NOT NULL,
  `jeta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `bia`
--

CREATE TABLE IF NOT EXISTS `bia` (
`idBIA` int(11) NOT NULL,
  `iDClient` int(11) NOT NULL,
  `iDStaff` int(11) NOT NULL,
  `iDAvion` int(11) NOT NULL,
  `seance1` date NOT NULL,
  `seance2` date NOT NULL,
  `validation` varchar(100) NOT NULL,
  `datevalidation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`iDClient` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `adresseMail` varchar(100) DEFAULT NULL,
  `heureDeVol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
`iDCommande` int(11) NOT NULL,
  `iDClient` int(11) NOT NULL,
  `iDRedevance` int(11) NOT NULL,
  `date` date NOT NULL,
  `tarifHT` int(11) NOT NULL,
  `tarifTTC` int(11) NOT NULL,
  `tvaTotal` int(11) NOT NULL,
  `statut` varchar(100) NOT NULL,
  `idService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `correspondanceIDWeather`
--

CREATE TABLE IF NOT EXISTS `correspondanceIDWeather` (
  `IDWeather` int(3) NOT NULL,
  `icone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `correspondanceIDWeather`
--

INSERT INTO `correspondanceIDWeather` (`IDWeather`, `icone`) VALUES
(200, 'wi-thunderstorm'),
(201, 'wi-thunderstorm'),
(202, 'wi-thunderstorm'),
(210, 'wi-thunderstorm'),
(211, 'wi-thunderstorm'),
(212, 'wi-thunderstorm'),
(221, 'wi-thunderstorm'),
(230, 'wi-storm-showers'),
(231, 'wi-storm-showers'),
(232, 'wi-storm-showers'),
(300, 'wi-sleet'),
(301, 'wi-sleet'),
(302, 'wi-sleet'),
(310, 'wi-sleet'),
(311, 'wi-sleet'),
(312, 'wi-sleet'),
(313, 'wi-sleet'),
(314, 'wi-sleet'),
(321, 'wi-sleet'),
(500, 'wi-showers'),
(501, 'wi-rain'),
(502, 'wi-rain'),
(503, 'wi-rain'),
(504, 'wi-rain'),
(511, 'wi-snow'),
(520, 'wi-rain'),
(521, 'wi-rain'),
(522, 'wi-rain'),
(531, 'wi-rain'),
(600, 'wi-snow'),
(601, 'wi-snow'),
(602, 'wi-snow'),
(611, 'wi-sleet'),
(612, 'wi-sleet'),
(615, 'wi-snow'),
(616, 'wi-snow'),
(620, 'wi-snow'),
(621, 'wi-snow'),
(622, 'wi-snow'),
(701, 'wi-fog'),
(711, 'wi-smoke'),
(721, 'wi-fog'),
(731, 'wi-dust'),
(741, 'wi-fog'),
(751, 'wi-dust'),
(761, 'wi-dust'),
(762, 'wi-dust'),
(771, 'wi-dust'),
(781, 'wi-tornado'),
(800, 'wi-day-sunny'),
(801, 'wi-day-cloudy wi-night-alt-clo'),
(802, 'wi-cloud'),
(803, 'wi-cloudy'),
(804, 'wi-cloudy'),
(900, 'wi-tornado'),
(901, 'wi-hurricane'),
(902, 'wi-hurricane'),
(903, 'wi-thermometer-exterior'),
(904, 'wi-thermometer'),
(905, 'wi-strong-wind'),
(906, 'wi-sleet');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
`idFacture` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL,
  `paiement` float NOT NULL,
  `methodedepaiement` varchar(100) NOT NULL,
  `datepaiement` int(11) NOT NULL,
  `statut` varchar(100) NOT NULL,
  `majoration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `groupeAcoustique`
--

CREATE TABLE IF NOT EXISTS `groupeAcoustique` (
`id` int(11) NOT NULL,
  `groupeAcoustique` varchar(2) CHARACTER SET utf8 NOT NULL,
  `jour et soir (6h00-22h00)` float NOT NULL,
  `Nuit(22h00-6h00)` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupeAcoustique`
--

INSERT INTO `groupeAcoustique` (`id`, `groupeAcoustique`, `jour et soir (6h00-22h00)`, `Nuit(22h00-6h00)`) VALUES
(1, '1', 1.3, 4),
(2, '2', 1.2, 1.8),
(3, '3', 1.15, 1.725),
(4, '4', 1, 1.5),
(5, '5a', 0.85, 1.275),
(6, '5b', 0.7, 1.05);

-- --------------------------------------------------------

--
-- Structure de la table `meteo`
--

CREATE TABLE IF NOT EXISTS `meteo` (
`iDMeteo` int(5) NOT NULL,
  `weather` varchar(200) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 NOT NULL,
  `tempnow` varchar(200) NOT NULL,
  `pressure` varchar(200) NOT NULL,
  `humidity` varchar(200) NOT NULL,
  `tempsmin` varchar(200) NOT NULL,
  `tempsmax` varchar(200) NOT NULL,
  `visibility` varchar(200) NOT NULL,
  `windspeed` varchar(150) NOT NULL,
  `winddegree` varchar(200) NOT NULL,
  `sunrise` varchar(200) NOT NULL,
  `sunset` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `meteo`
--

INSERT INTO `meteo` (`iDMeteo`, `weather`, `description`, `tempnow`, `pressure`, `humidity`, `tempsmin`, `tempsmax`, `visibility`, `windspeed`, `winddegree`, `sunrise`, `sunset`) VALUES
(108, '800', 'ciel dégagé', '295.68', '1019', '53', '295.15', '296.15', '10000', '3.1', '60', '1497325836', '1497384053');

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

CREATE TABLE IF NOT EXISTS `planning` (
`idPlanning` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `iDStaff` int(11) NOT NULL,
  `idAvion` int(11) NOT NULL,
  `iDCommande` int(11) NOT NULL,
  `jours` date NOT NULL,
  `CreaneauHoraire` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `redevanceAbris`
--

CREATE TABLE IF NOT EXISTS `redevanceAbris` (
`categorie` int(11) NOT NULL,
  `tarifmensuelbasesHT` float NOT NULL,
  `tarifmensuelbasesTTC` float NOT NULL,
  `tarifjournalierbasesHT` float NOT NULL,
  `tarifjournalierbasesTTC` float NOT NULL,
  `tarifjournaliernonbasesHT` float NOT NULL,
  `tarifjournaliernonbasesTTC` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `redevanceAbris`
--

INSERT INTO `redevanceAbris` (`categorie`, `tarifmensuelbasesHT`, `tarifmensuelbasesTTC`, `tarifjournalierbasesHT`, `tarifjournalierbasesTTC`, `tarifjournaliernonbasesHT`, `tarifjournaliernonbasesTTC`) VALUES
(1, 150, 180, 5.5, 6.6, 9.38, 11.25),
(2, 116.67, 140, 4.33, 5.2, 7.29, 8.75),
(3, 70.83, 85, 2.63, 3.15, 4.42, 5.3);

-- --------------------------------------------------------

--
-- Structure de la table `redevanceAtterrissage`
--

CREATE TABLE IF NOT EXISTS `redevanceAtterrissage` (
`id` int(11) NOT NULL,
  `TypesAvions` varchar(200) CHARACTER SET utf8 NOT NULL,
  `TypesAbonnement` varchar(200) CHARACTER SET utf8 NOT NULL,
  `HorsTaxes` float NOT NULL,
  `TVA` float NOT NULL,
  `TTC` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `redevanceAtterrissage`
--

INSERT INTO `redevanceAtterrissage` (`id`, `TypesAvions`, `TypesAbonnement`, `HorsTaxes`, `TVA`, `TTC`) VALUES
(1, 'Mono-turbine<br>Bi-turbine', 'Week-end/JF(non basé)', 34.5, 6.9, 41.4),
(2, 'Mono-turbine<br>Bi-turbine', 'Semaine(non basé)', 31.17, 6.23, 37.4),
(3, 'Mono-turbine<br>Bi-turbine', 'Avion basé(mensuel)', 113, 22.6, 135.6),
(4, 'Mono-turbine<br>Bi-turbine', 'Avion basé(unité)', 15.25, 3.05, 18.3),
(5, 'Réacteur<br>mono/multi', 'Week-end/JF\r\n(non basé)', 41.17, 8.23, 49.4),
(6, 'Réacteur<br>mono/multi', 'Semaine\r\n(non basé)', 37.17, 7.43, 44.6),
(7, 'Réacteur<br>mono/multi', 'Avion basé\r\n(mensuel)', 120, 24, 144),
(8, 'Réacteur<br>mono/multi', 'Avion basé\r\n(unité)', 18, 3.6, 21.6);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`idService` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `typeabonnement` varchar(100) NOT NULL,
  `tarifHT` int(11) NOT NULL,
  `tarifTTC` int(11) NOT NULL,
  `TVA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
`idStaff` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `avion`
--
ALTER TABLE `avion`
 ADD PRIMARY KEY (`idAvion`);

--
-- Index pour la table `bia`
--
ALTER TABLE `bia`
 ADD PRIMARY KEY (`idBIA`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`iDClient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
 ADD PRIMARY KEY (`iDCommande`);

--
-- Index pour la table `correspondanceIDWeather`
--
ALTER TABLE `correspondanceIDWeather`
 ADD UNIQUE KEY `IDWeather` (`IDWeather`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
 ADD PRIMARY KEY (`idFacture`);

--
-- Index pour la table `groupeAcoustique`
--
ALTER TABLE `groupeAcoustique`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `meteo`
--
ALTER TABLE `meteo`
 ADD PRIMARY KEY (`iDMeteo`);

--
-- Index pour la table `planning`
--
ALTER TABLE `planning`
 ADD PRIMARY KEY (`idPlanning`);

--
-- Index pour la table `redevanceAbris`
--
ALTER TABLE `redevanceAbris`
 ADD PRIMARY KEY (`categorie`);

--
-- Index pour la table `redevanceAtterrissage`
--
ALTER TABLE `redevanceAtterrissage`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`idService`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`idStaff`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `avion`
--
ALTER TABLE `avion`
MODIFY `idAvion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `bia`
--
ALTER TABLE `bia`
MODIFY `idBIA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
MODIFY `iDClient` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
MODIFY `iDCommande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
MODIFY `idFacture` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `groupeAcoustique`
--
ALTER TABLE `groupeAcoustique`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `meteo`
--
ALTER TABLE `meteo`
MODIFY `iDMeteo` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT pour la table `planning`
--
ALTER TABLE `planning`
MODIFY `idPlanning` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `redevanceAbris`
--
ALTER TABLE `redevanceAbris`
MODIFY `categorie` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `redevanceAtterrissage`
--
ALTER TABLE `redevanceAtterrissage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
MODIFY `idStaff` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
