SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hallesofgames`
--

-- --------------------------------------------------------

--
-- Structure de la table `prg`
--

CREATE TABLE `prg` (
  `id` int(11) NOT NULL,
  `startTime` varchar(255) NOT NULL,
  `endTime` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `codeType` varchar(255) NOT NULL,
  `codeDay` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `prg`
--

INSERT INTO `prg` (`id`, `startTime`, `endTime`, `label`, `icon`, `codeType`, `codeDay`) VALUES
(1, '19h00', '00h00', 'OPENING NIGHT - DJ SETS MC. TALRI & DJ. TIMAL DJ. T-KILLA', '', 'mc', 6),
(2, '19h30', '20h00', 'SHOW DE BREAKDANCE PAR MISTRAL-EST', 'exhibition', 'scene', 6),
(3, '20h30', '20h45', 'SPECTACLE DE DUNKS PAR LES FLYING DUNKERS', 'exhibition', 'basket', 6),
(4, '21h00', '00h00', 'PICKUP GAMES (Viens seul pour jouer en équipe !)', 'competition', 'basket', 6),
(5, '10h00', '11h00', 'U11', 'initiation', 'basket', 7),
(6, '11h00', '12h00', 'U13', 'initiation', 'basket', 7),
(7, '12h00', '13h00', 'U15', 'initiation', 'basket', 7),
(8, '14h00', '17h30', 'TOURNOI MIXTE 3X3 U13', 'competition', 'basket', 7),
(9, '17h30', '18h00', 'CONCOURS DE TIRS À 3 POINTS', 'competition', 'basket', 7),
(10, '18h00', '21h30', 'KING PICKUP GAMES', 'competition', 'basket', 7),
(11, '10h00', '13h00', 'INITIATION AU GRAFF', 'initiation', 'graff', 7),
(12, '10H00', '10H30', 'INITIATIONS AU SKATE (6 places par créneau)\n<br>\nTous les équipements sont fournis', 'initiation', 'skate', 7),
(13, '11H00', '11H30', 'INITIATIONS AU SKATE (6 places par créneau)\n<br>\nTous les équipements sont fournis', 'initiation', 'skate', 7),
(14, '12H00', '12H30', 'INITIATIONS AU SKATE (6 places par créneau)\n<br>\nTous les équipements sont fournis', 'initiation', 'skate', 7),
(15, '10H30', '11H00', 'INITIATIONS AU ROLLER (6 places par créneau)\r\n<br>\r\nTous les équipements sont fournis', 'initiation', 'skate', 7),
(16, '11H30', '12H00', 'INITIATIONS AU ROLLER (6 places par créneau)\r\n<br>\r\nTous les équipements sont fournis', 'initiation', 'skate', 7),
(17, '12H30', '13H00', 'INITIATIONS AU ROLLER (6 places par créneau)\r\n<br>\r\nTous les équipements sont fournis', 'initiation', 'skate', 7),
(18, '16h30', '17h00', 'DÉMOS', 'exhibition', 'scene', 7),
(19, '19h30', '20h00', 'DÉMOS', 'exhibition', 'skate', 7),
(20, '10H00', '10H30', 'INITIATIONS AU PARKOUR (10 places par créneau)', 'initiation', 'parkour', 7),
(21, '10H30', '11H00', 'INITIATIONS AU PARKOUR (10 places par créneau)', 'initiation', 'parkour', 7),
(22, '11H00', '11H30', 'INITIATIONS AU PARKOUR (10 places par créneau)', 'initiation', 'parkour', 7),
(23, '11H30', '12H00', 'INITIATIONS AU PARKOUR (10 places par créneau)', 'initiation', 'parkour', 7),
(24, '11h00', '12h00', 'INITIATION AU DJING AVEC DJ. T-KILLA (8 places par créneau)', 'initiation', 'mc', 7),
(25, '13h00', '18h00', 'INITIATION AU DJING AVEC DJ. CAZE (8 places par créneau)', 'initiation', 'mc', 7),
(26, '18h30', '00H00', 'INITIATION AU DJING AVEC DJ. NEIL ET MC. BAYA (8 places par créneau)', 'initiation', 'mc', 7),
(27, '19H00', '21h00', 'BATTLE DE RAP', 'competition', 'mc', 7);

-- --------------------------------------------------------

--
-- Structure de la table `prgdays`
--

CREATE TABLE `prgdays` (
  `codeDay` int(25) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `prgdays`
--

INSERT INTO `prgdays` (`codeDay`, `label`) VALUES
(6, 'JEUDI 6'),
(7, 'VENDREDI 7'),
(8, 'SAMEDI 8'),
(9, 'DIMANCHE 9'),
(10, 'LUNDI 10');

-- --------------------------------------------------------

--
-- Structure de la table `prgtypes`
--

CREATE TABLE `prgtypes` (
  `codeType` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `prgtypes`
--

INSERT INTO `prgtypes` (`codeType`, `label`) VALUES
('*', 'Tout'),
('basket', 'Basket'),
('graff', 'Graff'),
('mc', 'DJing & Hip-Hop'),
('parkour', 'Parkour'),
('scene', 'Scene'),
('skate', 'Skate & Roller');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `prg`
--
ALTER TABLE `prg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codeType` (`codeType`),
  ADD KEY `codeDay` (`codeDay`);

--
-- Index pour la table `prgdays`
--
ALTER TABLE `prgdays`
  ADD PRIMARY KEY (`codeDay`);

--
-- Index pour la table `prgtypes`
--
ALTER TABLE `prgtypes`
  ADD PRIMARY KEY (`codeType`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `prg`
--
ALTER TABLE `prg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `prg`
--
ALTER TABLE `prg`
  ADD CONSTRAINT `prg_ibfk_1` FOREIGN KEY (`codeType`) REFERENCES `prgtypes` (`codeType`),
  ADD CONSTRAINT `prg_ibfk_2` FOREIGN KEY (`codeDay`) REFERENCES `prgdays` (`codeDay`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
