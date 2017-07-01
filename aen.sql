-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 01 Juillet 2017 à 08:33
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
  `prenom` varchar(100) COLLATE utf8_bin NOT NULL,
  `login` varchar(100) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `avion`
--

CREATE TABLE IF NOT EXISTS `avion` (
`idAvion` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(100) COLLATE utf8_bin NOT NULL,
  `categorie` varchar(100) COLLATE utf8_bin NOT NULL,
  `surface` int(11) NOT NULL,
  `groupeaccoustique` varchar(100) COLLATE utf8_bin NOT NULL,
  `jeta` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `validation` varchar(100) COLLATE utf8_bin NOT NULL,
  `datevalidation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`idClient` int(11) NOT NULL,
  `login` varchar(100) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(100) COLLATE utf8_bin NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(100) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(100) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(100) COLLATE utf8_bin NOT NULL,
  `adresseMail` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idClient`, `login`, `mdp`, `nom`, `prenom`, `adresse`, `telephone`, `adresseMail`) VALUES
(6, '5417', 'ANC823204', 'Reed', 'Noë', 'CP 570, 5816 Curae; Rue', '03 24 86 48 55', 'velit@justositamet.edu'),
(7, '2441', 'GER154585', 'Phelps', 'Loane', '7274 Ornare, Avenue', '06 69 49 47 53', 'Donec@Cras.net'),
(8, '2145', 'YCE687265', 'Ware', 'Carla', '5196 Consectetuer Rue', '04 00 52 67 80', 'in.consequat@torquentper.edu'),
(9, '6573', 'GWK299955', 'Hess', 'Grégory', '503-7369 Non Route', '07 37 55 24 84', 'Duis.volutpat@turpis.edu'),
(10, '9088', 'INE939557', 'Miles', 'Jeanne', 'Appartement 461-8581 Consectetuer Route', '07 30 60 92 47', 'quis@fermentummetus.com'),
(11, '3478', 'TSR534067', 'Chaney', 'Léane', 'Appartement 624-9720 Dignissim Rue', '04 17 79 28 82', 'tincidunt.vehicula@cursus.net'),
(12, '8721', 'FAB804138', 'Nieves', 'Tatiana', '4234 Eu Rd.', '06 13 49 21 11', 'eget@NulladignissimMaecenas.org'),
(13, '2072', 'KSS304973', 'Bass', 'Victor', '1750 Integer Rue', '03 95 70 91 34', 'Nunc.mauris@scelerisquemollis.org'),
(14, '6526', 'FQE285892', 'Hutchinson', 'Nina', '931-4749 A, Rd.', '09 68 77 01 91', 'Donec.est@elit.co.uk'),
(15, '5960', 'HJE834743', 'Byrd', 'Thibault', 'Appartement 398-2872 Eu Impasse', '04 62 60 37 15', 'ultricies.adipiscing.enim@infaucibusorci.org'),
(16, '6054', 'BWY569645', 'Lane', 'Amandine', '506-6473 Tristique Avenue', '04 66 03 11 84', 'Aliquam@montesnasceturridiculus.edu'),
(17, '9184', 'TYM512439', 'Erickson', 'Romain', 'CP 594, 9786 Senectus Impasse', '02 17 93 83 18', 'scelerisque.mollis.Phasellus@odio.ca'),
(18, '1291', 'RGU964046', 'Ball', 'Noémie', '446-3153 Dictum Avenue', '08 36 47 45 13', 'molestie@dolorNullasemper.com'),
(19, '6535', 'OLZ860517', 'Duncan', 'Diego', 'Appartement 891-7151 Donec Rue', '07 93 64 14 97', 'quam.elementum.at@velit.net'),
(20, '5072', 'VDS291830', 'Baxter', 'Dimitri', '230-9438 Convallis, Rue', '04 66 08 57 64', 'tempus@posuere.co.uk'),
(21, '2721', 'JTW819371', 'Dunn', 'Mohamed', 'Appartement 525-946 Sit Route', '08 62 93 31 26', 'urna.Vivamus@orci.co.uk'),
(22, '9742', 'WNX727435', 'Ortiz', 'Élouan', 'CP 438, 204 Leo. Rd.', '09 20 79 78 16', 'mollis@cursusnonegestas.edu'),
(23, '9069', 'VIW097182', 'Adkins', 'Marion', '933-1385 Dolor. Ave', '01 21 96 74 60', 'consectetuer.adipiscing@Phasellus.edu'),
(24, '2347', 'UZN528481', 'Battle', 'Lilian', 'CP 749, 4422 Pellentesque Route', '05 08 85 56 74', 'orci.quis.lectus@dolorvitaedolor.edu'),
(25, '6432', 'RNU151453', 'Sweet', 'Romain', '4443 Dictum Route', '09 00 55 74 81', 'lobortis@Pellentesquehabitant.ca'),
(26, '5733', 'GQZ347253', 'Gallegos', 'Dorian', 'Appartement 191-2190 Tortor. Av.', '07 39 51 05 35', 'sem@purus.edu'),
(27, '4134', 'TUW704713', 'Porter', 'Jordan', 'Appartement 933-9569 Erat Rd.', '06 36 41 28 94', 'tincidunt.dui@quisturpisvitae.com'),
(28, '8310', 'KGH282321', 'Langley', 'Clément', '717-9322 Non Rd.', '06 43 05 79 05', 'volutpat@euismodest.org'),
(29, '2732', 'IND922478', 'Dejesus', 'Adam', '584-2617 Gravida Avenue', '06 34 55 81 07', 'lectus@malesuadamalesuada.net'),
(30, '3303', 'PPB000848', 'Bartlett', 'Salomé', 'Appartement 294-7250 Nec Avenue', '03 02 42 70 70', 'neque.Sed@nec.net'),
(31, '5596', 'UYL897017', 'Bird', 'Louis', 'CP 744, 7321 Eros Impasse', '04 36 24 38 77', 'tempus@tinciduntnunc.ca'),
(32, '9042', 'DAX029468', 'Walker', 'Dimitri', '3359 Mauris Ave', '07 35 90 62 43', 'feugiat.Lorem.ipsum@orciUt.com'),
(33, '1321', 'TGE564177', 'Bishop', 'Jeanne', '2875 A Rue', '01 19 88 28 98', 'Curae@temporloremeget.com'),
(34, '2981', 'PUJ826947', 'Gamble', 'Robin', 'Appartement 270-910 Magna, Ave', '08 21 53 83 17', 'vulputate.posuere.vulputate@nuncsedpede.net'),
(35, '1980', 'FAL130318', 'Gates', 'Lilian', 'CP 935, 1679 Scelerisque Impasse', '01 43 04 98 94', 'mauris@maurissit.edu'),
(36, '8092', 'PTN670001', 'Knox', 'Éléna', 'Appartement 708-5264 At, Avenue', '01 54 30 21 36', 'consequat.auctor@placerat.ca'),
(37, '6368', 'FTX027747', 'Moses', 'Lilian', 'CP 601, 6306 Egestas. Ave', '02 09 70 98 89', 'sem@Phasellus.org'),
(38, '7236', 'FXK400153', 'Turner', 'Hugo', '8491 Erat. Rd.', '02 84 54 49 01', 'dictum@luctuslobortis.edu'),
(39, '2989', 'MSC390171', 'Booker', 'Carla', '5717 Nam Chemin', '01 21 79 79 97', 'luctus.vulputate@id.co.uk'),
(40, '8625', 'SLO172404', 'York', 'Jasmine', 'CP 609, 6708 Dictum Rue', '02 54 15 34 66', 'aliquam.arcu.Aliquam@laciniaSedcongue.com'),
(41, '9933', 'NQT332634', 'Orr', 'Baptiste', 'Appartement 706-903 Vel, Rd.', '01 03 85 73 17', 'metus.Vivamus.euismod@Seddiamlorem.com'),
(42, '9800', 'GNW154452', 'Hyde', 'Élisa', 'Appartement 275-3431 Est, Impasse', '05 27 26 65 13', 'Donec.egestas@velitduisemper.com'),
(43, '5108', 'VCT398460', 'Burch', 'Constant', '774-612 At, Route', '06 36 01 99 27', 'Donec@consequat.ca'),
(44, '4808', 'UWJ670527', 'Keith', 'Thibault', '4005 Et Ave', '02 96 45 17 79', 'lorem.Donec@sollicitudincommodoipsum.co.uk'),
(45, '1482', 'PCS225504', 'Tyler', 'Margot', 'Appartement 655-8312 Dui Avenue', '09 36 06 74 67', 'lectus@Suspendissenonleo.org'),
(46, '3516', 'ZJO595990', 'Jensen', 'Margaux', '7285 Quisque Rue', '04 75 34 47 95', 'lacus.Ut@magna.ca'),
(47, '4741', 'GII775111', 'Nash', 'Mohamed', 'CP 919, 7909 Donec Ave', '09 97 57 97 49', 'tortor.nibh@Fusce.org'),
(48, '5753', 'SIV137839', 'Nixon', 'Esteban', '5853 Eget, Impasse', '06 64 26 06 06', 'elit@duisemperet.org'),
(49, '8997', 'CKA964659', 'Potts', 'Amélie', 'Appartement 907-6270 Nullam Chemin', '06 31 99 02 45', 'fermentum.convallis@nequeIn.ca'),
(50, '2281', 'DQF302110', 'Brock', 'Quentin', 'CP 239, 2036 Eu Ave', '07 05 00 11 11', 'id.erat@orciluctus.edu'),
(51, '8518', 'YWQ681941', 'Hester', 'Zacharis', '293-2711 Non Chemin', '04 98 59 10 43', 'hendrerit.Donec@Phasellus.com'),
(52, '5336', 'MLX712683', 'Hensley', 'Léa', 'CP 156, 4230 Mauris Rue', '06 22 75 31 60', 'risus.Donec.egestas@elitpedemalesuada.org'),
(53, '3716', 'DGQ796388', 'Parrish', 'Benjamin', 'Appartement 382-2038 Ante Chemin', '09 44 14 86 78', 'Ut.semper.pretium@Duis.org'),
(54, '9776', 'WGX374101', 'Montgomery', 'Adrien', 'CP 373, 4464 Quisque Rd.', '09 41 66 16 77', 'et@liberoettristique.co.uk'),
(55, '2300', 'KCO040467', 'Boyd', 'Killian', 'CP 729, 4074 Hendrerit Av.', '04 64 06 74 65', 'pede.ultrices.a@NuncmaurisMorbi.ca'),
(56, '1842', 'YXG278530', 'Good', 'Benjamin', '1528 Conubia Rd.', '01 59 93 25 79', 'ut.ipsum.ac@ipsum.net'),
(57, '1614', 'JTG577311', 'Boone', 'Charlotte', '507-7914 Commodo Chemin', '08 13 41 04 51', 'amet.diam@vulputatenisi.edu'),
(58, '7095', 'FTE036023', 'Estrada', 'Renaud', 'CP 970, 7985 Placerat Rue', '02 12 79 95 73', 'at.libero.Morbi@ipsum.com'),
(59, '3394', 'OLT050556', 'Downs', 'Thomas', 'Appartement 943-1896 Vel Ave', '09 44 92 85 34', 'Ut.nec.urna@ametdapibusid.ca'),
(60, '2223', 'ICY745497', 'Skinner', 'Mattéo', 'CP 850, 1842 Magna. Impasse', '03 41 79 31 08', 'mauris.sapien.cursus@elementum.ca'),
(61, '9326', 'DOK618333', 'Wells', 'Mélanie', 'Appartement 436-7292 Molestie Av.', '06 69 41 35 65', 'ac.fermentum@aptent.org'),
(62, '2773', 'KKF899451', 'Berry', 'Romain', '8267 Donec Rd.', '04 69 01 82 93', 'Sed.eget@iaculis.net'),
(63, '6890', 'ILY567527', 'Griffith', 'Kimberley', 'Appartement 278-8675 Vel Rd.', '01 50 88 16 32', 'malesuada.augue.ut@tellusid.ca'),
(64, '9881', 'QUK949196', 'Harrell', 'Alexia', '7129 Odio Impasse', '06 45 28 78 43', 'vitae@Donec.ca'),
(65, '2680', 'TTN731966', 'Solomon', 'Émile', '408-740 Non, Rue', '08 76 85 78 70', 'risus.Donec.egestas@pharetra.com'),
(66, '8793', 'IQE503603', 'Fleming', 'Anaël', '6400 Metus. Route', '02 89 14 49 77', 'lectus.Cum.sociis@luctus.ca'),
(67, '5945', 'PMZ802567', 'Fulton', 'Killian', 'Appartement 387-709 Integer Ave', '04 25 55 18 96', 'at@Sedmolestie.org'),
(68, '8329', 'SIY009289', 'Salazar', 'Hugo', 'Appartement 569-2788 Tincidunt Av.', '01 87 83 66 28', 'amet.consectetuer.adipiscing@Phasellus.net'),
(69, '1618', 'IRQ955110', 'Kidd', 'Alexandra', 'CP 694, 3692 Aliquam Rue', '06 20 87 96 69', 'tempus@loremsit.edu'),
(70, '5674', 'ZDB599999', 'Mitchell', 'Mathieu', 'Appartement 134-7100 Nam Impasse', '04 56 58 85 93', 'bibendum.fermentum.metus@dui.edu'),
(71, '5719', 'TZA926583', 'Luna', 'Candice', '8967 Ultricies Route', '08 48 16 97 72', 'dolor.dapibus.gravida@nec.org'),
(72, '6287', 'EFU407391', 'Skinner', 'Guillaume', '1832 Et Avenue', '06 92 74 84 46', 'fringilla.Donec@ac.net'),
(73, '4289', 'OWA548954', 'Wells', 'Éléna', '8966 Fringilla Impasse', '09 63 99 47 75', 'dui.semper.et@seddictum.org'),
(74, '3539', 'OQF119083', 'Daniel', 'Léon', 'Appartement 934-1888 Integer Rd.', '02 75 23 45 34', 'Nullam@temporest.co.uk'),
(75, '8882', 'BAI170859', 'Diaz', 'Antonin', 'CP 257, 8573 Ultrices Av.', '08 19 92 49 23', 'augue.eu.tempor@etipsum.edu'),
(76, '9494', 'JXN670817', 'Robbins', 'Kyllian', 'Appartement 799-1326 Eros. Impasse', '01 39 35 29 03', 'dictum.mi@Duis.ca'),
(77, '4579', 'RJD445225', 'Raymond', 'Solene', '7933 Ipsum. Impasse', '09 10 91 83 63', 'sem@acfermentumvel.org'),
(78, '9523', 'DQB975762', 'Ramsey', 'Lena', 'Appartement 895-4402 Tellus. Chemin', '03 94 67 96 10', 'mauris.blandit.mattis@molestie.com'),
(79, '8425', 'QVE179142', 'Sanford', 'Bruno', '665 Pede. Chemin', '09 38 80 37 01', 'Ut.sagittis@cubiliaCurae.net'),
(80, '2327', 'VTA741882', 'Cantu', 'Pierre', '2287 Consequat Avenue', '03 26 98 75 36', 'nec.tempus.mauris@enimSuspendissealiquet.com'),
(81, '4781', 'WYY467322', 'Mcclure', 'Émilie', '5220 Suspendisse Chemin', '09 09 70 16 21', 'ac.fermentum.vel@nisi.co.uk'),
(82, '1709', 'DRY138578', 'Maynard', 'Dorian', '5771 Vivamus Chemin', '08 76 00 92 67', 'Nullam.nisl@utodio.com'),
(83, '5743', 'AXM809541', 'Ballard', 'Bastien', 'Appartement 270-3575 Aliquet. Rd.', '04 36 90 74 55', 'nisi.magna.sed@magnaseddui.net'),
(84, '8875', 'AJX209943', 'Ramsey', 'Lutécia', 'Appartement 650-300 Fusce Chemin', '03 18 25 98 37', 'bibendum.fermentum.metus@enimconsequatpurus.ca'),
(85, '4475', 'LNM339777', 'Potter', 'Pauline', '105-5931 Ut Chemin', '03 90 50 04 20', 'Vivamus@Phaselluselitpede.co.uk'),
(86, '8479', 'AXZ394722', 'Clements', 'Hugo', '884-5609 Id Chemin', '04 25 27 54 15', 'orci.sem@velitjusto.co.uk'),
(87, '8514', 'XVN671528', 'Cole', 'Louise', 'CP 441, 6439 Erat Av.', '01 65 69 65 05', 'In.lorem.Donec@neque.net'),
(88, '6541', 'YPV062417', 'Cooley', 'Emma', 'CP 652, 4557 Vestibulum Ave', '06 70 34 29 79', 'purus.in@Mauris.com'),
(89, '4934', 'MBV243639', 'Bass', 'Enzo', 'CP 170, 9858 Magna Route', '03 17 18 21 35', 'pede.Suspendisse@blandit.edu'),
(90, '3543', 'BPP048046', 'Richard', 'Solene', '643-8023 Donec Avenue', '03 35 45 48 38', 'nec@placeratvelit.co.uk'),
(91, '8392', 'ZZI141319', 'Hansen', 'Lou', '6041 Semper Avenue', '04 95 21 57 14', 'et.malesuada@vestibulum.com'),
(92, '7620', 'KJI607965', 'Flynn', 'Margaux', 'CP 106, 829 Arcu Rd.', '01 47 49 80 57', 'dolor.egestas@Maecenas.edu'),
(93, '5786', 'YMH074918', 'Hinton', 'Bruno', '708-7589 Est Chemin', '01 70 73 54 39', 'Sed@milorem.edu'),
(94, '9765', 'KXG265139', 'Rice', 'Arthur', 'Appartement 951-1309 Sit Impasse', '03 14 66 71 51', 'et.ultrices.posuere@etmagnis.ca'),
(95, '8455', 'WIW058300', 'Clements', 'Valentin', '9141 Purus. Chemin', '04 44 93 99 71', 'nulla.magna.malesuada@acsem.org'),
(96, '9863', 'DTB581712', 'Gray', 'Valentine', '1515 Ipsum Rd.', '09 43 94 36 60', 'Proin@sit.co.uk'),
(97, '4231', 'YCN688722', 'Woodard', 'Laura', '2960 Suspendisse Av.', '08 00 45 59 30', 'risus@Sedetlibero.co.uk'),
(98, '4829', 'ZFG325726', 'Duncan', 'Marie', '4846 Non, Impasse', '09 17 07 59 78', 'tortor@magnaet.edu'),
(99, '6322', 'GJZ911381', 'Dyer', 'Ambre', 'Appartement 343-674 Hendrerit Rue', '09 02 36 26 01', 'Donec.nibh@dolorsitamet.org'),
(100, '8203', 'NDA900980', 'Grimes', 'Katell', 'CP 903, 4627 Mi Impasse', '04 65 06 86 07', 'Nullam.velit.dui@ligulaAliquamerat.org'),
(101, '1924', 'IMX595767', 'Murphy', 'Cédric', 'Appartement 125-6654 Donec Rue', '05 41 51 52 19', 'at.arcu@fames.org'),
(102, '3710', 'ONT685436', 'Lowery', 'Lucie', 'Appartement 756-5939 Nibh Rue', '06 54 72 18 31', 'non.dui.nec@Phasellusat.org'),
(103, '1491', 'IBA693943', 'Gregory', 'Bruno', '797-4712 Dolor Rd.', '08 98 80 20 32', 'ipsum.primis.in@adipiscing.co.uk'),
(104, '8298', 'WDK151689', 'Ashley', 'Thomas', '205-7798 Nibh Impasse', '08 83 61 32 69', 'ultrices.Duis@velitAliquamnisl.edu'),
(105, '7681', 'VNF788573', 'Langley', 'Lilou', '724-2396 Elit. Impasse', '01 77 87 99 95', 'Mauris@consectetueradipiscingelit.ca');

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
  `statut` varchar(100) COLLATE utf8_bin NOT NULL,
  `idService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `correspondanceidweather`
--

CREATE TABLE IF NOT EXISTS `correspondanceidweather` (
  `IDWeather` int(3) NOT NULL,
  `icone` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `correspondanceidweather`
--

INSERT INTO `correspondanceidweather` (`IDWeather`, `icone`) VALUES
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
  `methodedepaiement` varchar(100) COLLATE utf8_bin NOT NULL,
  `datepaiement` int(11) NOT NULL,
  `statut` varchar(100) COLLATE utf8_bin NOT NULL,
  `majoration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `groupeacoustique`
--

CREATE TABLE IF NOT EXISTS `groupeacoustique` (
`id` int(11) NOT NULL,
  `groupeAcoustique` varchar(2) COLLATE utf8_bin NOT NULL,
  `jour et soir (6h00-22h00)` float NOT NULL,
  `Nuit(22h00-6h00)` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `groupeacoustique`
--

INSERT INTO `groupeacoustique` (`id`, `groupeAcoustique`, `jour et soir (6h00-22h00)`, `Nuit(22h00-6h00)`) VALUES
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
  `weather` varchar(200) COLLATE utf8_bin NOT NULL,
  `description` varchar(200) COLLATE utf8_bin NOT NULL,
  `tempnow` varchar(200) COLLATE utf8_bin NOT NULL,
  `pressure` varchar(200) COLLATE utf8_bin NOT NULL,
  `humidity` varchar(200) COLLATE utf8_bin NOT NULL,
  `tempsmin` varchar(200) COLLATE utf8_bin NOT NULL,
  `tempsmax` varchar(200) COLLATE utf8_bin NOT NULL,
  `visibility` varchar(200) COLLATE utf8_bin NOT NULL,
  `windspeed` varchar(150) COLLATE utf8_bin NOT NULL,
  `winddegree` varchar(200) COLLATE utf8_bin NOT NULL,
  `sunrise` varchar(200) COLLATE utf8_bin NOT NULL,
  `sunset` varchar(200) COLLATE utf8_bin NOT NULL,
  `dt` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `meteo`
--

INSERT INTO `meteo` (`iDMeteo`, `weather`, `description`, `tempnow`, `pressure`, `humidity`, `tempsmin`, `tempsmax`, `visibility`, `windspeed`, `winddegree`, `sunrise`, `sunset`, `dt`) VALUES
(108, '800', 'ciel dégagé', '295.68', '1019', '53', '295.15', '296.15', '10000', '3.1', '60', '1497325836', '1497384053', '1497364200'),
(109, '300', 'bruine légère', '288.68', '1014', '93', '288.15', '289.15}', '6000', '4.6', '290}', '1498881328', '1498939377}', '1498894200');

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
  `CreaneauHoraire` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `redevanceabris`
--

CREATE TABLE IF NOT EXISTS `redevanceabris` (
`categorie` int(11) NOT NULL,
  `tarifmensuelbasesHT` float NOT NULL,
  `tarifmensuelbasesTTC` float NOT NULL,
  `tarifjournalierbasesHT` float NOT NULL,
  `tarifjournalierbasesTTC` float NOT NULL,
  `tarifjournaliernonbasesHT` float NOT NULL,
  `tarifjournaliernonbasesTTC` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `redevanceabris`
--

INSERT INTO `redevanceabris` (`categorie`, `tarifmensuelbasesHT`, `tarifmensuelbasesTTC`, `tarifjournalierbasesHT`, `tarifjournalierbasesTTC`, `tarifjournaliernonbasesHT`, `tarifjournaliernonbasesTTC`) VALUES
(1, 150, 180, 5.5, 6.6, 9.38, 11.25),
(2, 116.67, 140, 4.33, 5.2, 7.29, 8.75),
(3, 70.83, 85, 2.63, 3.15, 4.42, 5.3);

-- --------------------------------------------------------

--
-- Structure de la table `redevanceatterrissage`
--

CREATE TABLE IF NOT EXISTS `redevanceatterrissage` (
`id` int(11) NOT NULL,
  `TypesAvions` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `TypesAbonnement` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `HorsTaxes` float NOT NULL,
  `TVA` float NOT NULL,
  `TTC` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `redevanceatterrissage`
--

INSERT INTO `redevanceatterrissage` (`id`, `TypesAvions`, `TypesAbonnement`, `HorsTaxes`, `TVA`, `TTC`) VALUES
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
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `typeabonnement` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
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
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mdp` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adresse` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telephone` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `experience` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `staff`
--

INSERT INTO `staff` (`idStaff`, `login`, `mdp`, `nom`, `prenom`, `adresse`, `email`, `telephone`, `experience`) VALUES
(6, '8881', 'NAN360763', 'Whitley', 'Thomas', 'Appartement 860-6242 Adipiscing Chemin', 'est.Nunc@nequeIn.ca', '02 37 52 84 14', 6),
(7, '2081', 'CGA801189', 'Dickson', 'Rose', 'Appartement 325-7570 Vitae Av.', 'tristique.senectus.et@aliquetProin.com', '07 83 19 54 71', 4),
(8, '7224', 'UTA427484', 'Jarvis', 'Yasmine', '3177 Sociis Rue', 'fringilla.cursus@tortornibhsit.org', '08 29 87 22 16', 1),
(9, '9973', 'HYW758277', 'Rojas', 'Katell', '8726 Lorem, Rue', 'in.aliquet@auctorquis.net', '01 22 94 47 59', 4),
(10, '4719', 'UPC878375', 'Underwood', 'Julien', '4202 Non, Rd.', 'Aenean@nonmagnaNam.org', '01 83 41 33 21', 6),
(11, '3973', 'TEH293146', 'Mathis', 'Yanis', '9579 Erat Ave', 'ipsum@euodio.ca', '01 63 03 10 92', 5),
(12, '4358', 'KIA503611', 'Abbott', 'Syrine', 'Appartement 623-3894 Nec Rd.', 'mauris.id.sapien@mattis.ca', '09 02 91 60 41', 2),
(13, '5244', 'GGT166496', 'Lawson', 'Nolan', 'CP 482, 3496 Quis Av.', 'Donec.consectetuer@Quisqueporttitor.ca', '06 60 33 88 61', 5),
(14, '7906', 'AAV487959', 'Chandler', 'Quentin', 'CP 188, 9959 Aliquet Route', 'cursus.Nunc.mauris@ut.co.uk', '01 20 83 13 16', 2),
(15, '2012', 'KED025471', 'Nicholson', 'Chloé', 'CP 348, 6873 Phasellus Ave', 'sit.amet.diam@luctus.org', '05 38 38 49 06', 1),
(16, '7084', 'PIK875561', 'Tillman', 'Samuel', 'Appartement 462-2446 Cras Chemin', 'blandit.enim@Maurisnon.co.uk', '01 03 61 54 80', 5);

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
 ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
 ADD PRIMARY KEY (`iDCommande`);

--
-- Index pour la table `correspondanceidweather`
--
ALTER TABLE `correspondanceidweather`
 ADD UNIQUE KEY `IDWeather` (`IDWeather`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
 ADD PRIMARY KEY (`idFacture`);

--
-- Index pour la table `groupeacoustique`
--
ALTER TABLE `groupeacoustique`
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
-- Index pour la table `redevanceabris`
--
ALTER TABLE `redevanceabris`
 ADD PRIMARY KEY (`categorie`);

--
-- Index pour la table `redevanceatterrissage`
--
ALTER TABLE `redevanceatterrissage`
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
MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
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
-- AUTO_INCREMENT pour la table `groupeacoustique`
--
ALTER TABLE `groupeacoustique`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `meteo`
--
ALTER TABLE `meteo`
MODIFY `iDMeteo` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT pour la table `planning`
--
ALTER TABLE `planning`
MODIFY `idPlanning` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `redevanceabris`
--
ALTER TABLE `redevanceabris`
MODIFY `categorie` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `redevanceatterrissage`
--
ALTER TABLE `redevanceatterrissage`
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
MODIFY `idStaff` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
