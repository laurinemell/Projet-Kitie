-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2020 at 03:42 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitie`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptant`
--

CREATE TABLE `adoptant` (
  `idAdoptant` int(10) NOT NULL,
  `sexe` int(1) DEFAULT NULL,
  `nom` varchar(15) DEFAULT NULL,
  `prenom` varchar(15) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `codePostal` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `idBox` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`idBox`) VALUES
('R101'),
('R102'),
('R103'),
('R104'),
('R105'),
('R106'),
('R107'),
('R108'),
('R109'),
('R110'),
('R111'),
('R112'),
('R113'),
('R114'),
('R201'),
('R202'),
('R203'),
('R204'),
('R205'),
('R206'),
('R207'),
('R208'),
('R209'),
('R210'),
('R211'),
('R212'),
('R213'),
('R214'),
('R301'),
('R302'),
('R303'),
('R304'),
('R305'),
('R306'),
('R307'),
('R308'),
('R309'),
('R310'),
('R311'),
('R312'),
('R313'),
('R314'),
('R401'),
('R402'),
('R403'),
('R404'),
('R405'),
('R406'),
('R407'),
('R408'),
('R409'),
('R410'),
('R411'),
('R412'),
('R413'),
('R414'),
('R501'),
('R502'),
('R503'),
('R504'),
('R505'),
('R506'),
('R507'),
('R508'),
('R509'),
('R510'),
('R511'),
('R512'),
('R513'),
('R514'),
('R601'),
('R602'),
('R603'),
('R604'),
('R605'),
('R606'),
('R607'),
('R608'),
('R609'),
('R610'),
('R611'),
('R612'),
('R613'),
('R614'),
('R701'),
('R702'),
('R703'),
('R704'),
('R705'),
('R706'),
('R707'),
('R708'),
('R709'),
('R710'),
('R711'),
('R712'),
('R713'),
('R714');

-- --------------------------------------------------------

--
-- Table structure for table `chien`
--

CREATE TABLE `chien` (
  `idChien` int(10) NOT NULL,
  `nomChien` varchar(50) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `dateEntree` date DEFAULT NULL,
  `dateSortie` varchar(10) DEFAULT NULL,
  `idSexe` int(1) DEFAULT NULL,
  `idSterilisation` int(1) DEFAULT NULL,
  `idTarification` int(1) DEFAULT NULL,
  `idMordeur` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chien`
--

INSERT INTO `chien` (`idChien`, `nomChien`, `dateNaissance`, `dateEntree`, `dateSortie`, `idSexe`, `idSterilisation`, `idTarification`, `idMordeur`) VALUES
(14752163, 'NERVAL', '2014-02-01', '2019-11-10', '', 0, 1, 1, 0),
(16602813, 'FALCO', '2014-02-01', '2019-12-14', '', 0, 1, 3, 0),
(100068026, 'FURAX', '2019-01-01', '2020-01-03', '', 1, 1, 3, 0),
(100068035, 'TYSON', '2012-01-01', '2020-01-03', '', 0, 1, 3, 0),
(100106783, 'BALOO', '2019-06-01', '2020-01-24', '', 0, 0, 3, 0),
(100107161, 'CORA', '2018-10-01', '2020-01-24', '', 1, 0, 3, 0),
(201766694, 'POKI', '2017-12-01', '2019-12-28', '', 0, 1, 3, 0),
(400009792, 'CARAMEL', '2008-10-01', '2018-03-22', '', 0, 1, 1, 0),
(500048691, 'PICSOU', '2007-11-01', '2020-01-31', '', 0, 1, 1, 1),
(500069127, 'DINGO DIT DISCO', '2008-04-01', '2020-01-06', '', 0, 1, 1, 0),
(500262918, 'JACK', '2009-04-01', '2019-12-09', '', 0, 1, 1, 0),
(500561547, 'HERCULE', '2012-08-01', '2018-03-29', '', 0, 1, 1, 3),
(500751919, 'DJANGO', '2015-02-01', '2020-01-03', '', 0, 1, 3, 0),
(500770405, 'CHAINA', '2013-08-01', '2019-09-30', '', 1, 1, 3, 0),
(501080512, 'GOLF', '2015-01-01', '2019-10-03', '', 1, 1, 2, 2),
(501217962, 'TYSON', '2016-09-01', '2019-02-13', '', 0, 1, 1, 1),
(501387833, 'CHANCE', '2017-09-01', '2020-01-15', '', 1, 1, 3, 0),
(501408688, 'ZANGO', '2017-08-01', '2019-12-04', '', 0, 1, 3, 0),
(501507555, 'MEITAY', '2018-07-01', '2020-01-25', '', 1, 0, 3, 0),
(501631093, 'KIARA', '2018-11-01', '2019-12-26', '', 1, 1, 3, 0),
(600041407, 'MAX', '2016-01-01', '2020-01-04', '', 0, 1, 3, 0),
(600112272, 'PILOU', '2017-05-01', '2019-06-03', '', 0, 1, 3, 2),
(600192550, 'OPS', '2018-08-01', '2020-01-17', '', 0, 1, 3, 0),
(600230009, 'PINA', '2019-01-01', '2020-01-13', '', 1, 1, 3, 0),
(602218702, 'CHARLY', '2007-07-01', '2019-07-15', '', 0, 1, 1, 0),
(602824117, 'E PITT VON DER GLUCKEN', '2009-12-01', '2020-01-11', '', 0, 1, 1, 0),
(602842530, 'STRYKE', '2009-06-01', '2019-12-07', '', 0, 1, 1, 0),
(604021670, 'BILLY', '2008-05-01', '2020-01-10', '', 0, 0, 1, 0),
(604150223, 'FILOU', '2010-05-01', '2020-01-25', '', 0, 1, 3, 0),
(604321869, 'FIDJI', '2011-01-01', '2020-01-13', '', 1, 1, 3, 0),
(604884959, 'ISIS', '2013-02-01', '2019-07-23', '', 1, 1, 1, 1),
(606090147, 'TAO', '2014-01-01', '2020-01-11', '', 0, 1, 3, 0),
(606100377, 'BONNIE', '2012-12-01', '2020-01-04', '', 1, 1, 3, 0),
(606191738, 'LUDIVINE', '2015-03-01', '2020-01-04', '', 1, 1, 3, 0),
(606201420, 'TURTLE', '2015-03-01', '2019-08-16', '', 0, 1, 2, 0),
(606205619, 'CAMENBERT', '2015-03-01', '2019-10-10', '', 0, 1, 2, 0),
(606380724, 'JOE DIT SULTAN', '2014-12-01', '2019-10-13', '', 0, 1, 1, 1),
(606558989, 'TYE', '2014-11-01', '2019-06-20', '', 0, 1, 2, 2),
(606594777, 'LUNA', '2012-10-01', '2019-12-18', '', 1, 1, 3, 0),
(608177696, 'PABLO', '2018-11-01', '2020-01-11', '', 0, 1, 3, 0),
(608258509, 'BOUBA', '2018-11-01', '2019-08-07', '', 0, 1, 3, 0),
(608298259, 'TYSON', '2018-09-01', '2019-12-29', '', 0, 1, 2, 0),
(700256398, 'CHIPS DIT DORI', '2007-02-01', '2020-01-07', '', 0, 1, 3, 0),
(711025363, 'ROCKY', '2013-08-01', '2017-06-10', '', 0, 1, 1, 1),
(712252412, 'CHAMALLOW', '2014-11-01', '2019-10-12', '', 0, 1, 2, 3),
(712339421, 'E1BK22', '2015-08-01', '2019-10-17', '', 1, 1, 3, 0),
(712678597, 'OLLIE', '2018-04-01', '2020-01-21', '', 1, 1, 3, 0),
(712678707, 'L6BX26', '2018-04-01', '2019-10-17', '', 1, 1, 3, 0),
(731020202, 'GEISHA', '2011-03-01', '2019-12-12', '', 1, 1, 3, 1),
(731452679, 'MOKA DIT MEIKO', '2016-04-01', '2019-10-26', '', 0, 1, 1, 1),
(731508984, 'ATHOS', '2014-07-01', '2020-01-02', '', 0, 1, 3, 0),
(731559255, 'MACHA', '2014-02-01', '2017-05-20', '', 1, 1, 1, 0),
(731559353, 'ROXY', '2015-04-01', '2019-09-10', '', 0, 1, 1, 1),
(731679311, 'NELSON', '2016-02-01', '2020-01-09', '', 0, 1, 3, 0),
(731701634, 'KIPPER', '2015-12-01', '2019-01-30', '', 0, 1, 1, 0),
(732033195, 'PETIT', '2014-09-01', '2019-04-05', '', 0, 1, 1, 3),
(732137576, 'JAGGER', '2017-01-01', '2019-02-05', '', 0, 1, 1, 2),
(732137799, 'LENNY', '2015-02-01', '2018-10-06', '', 0, 1, 1, 0),
(732192089, 'PANACHE', '2014-07-01', '2018-03-13', '', 0, 1, 1, 3),
(732192145, 'BOSCO', '2017-11-01', '2020-01-09', '', 0, 1, 3, 0),
(732192345, 'LILI', '2017-05-01', '2018-12-26', '', 1, 1, 1, 3),
(732234302, 'COLT', '2017-10-01', '2019-12-26', '', 0, 1, 3, 0),
(732301158, 'ETOILE', '2017-07-01', '2019-06-09', '', 1, 1, 1, 0),
(732340306, 'NOX', '2017-10-01', '2020-01-30', '', 0, 1, 3, 0),
(732448639, 'SLAM', '2016-12-01', '2018-11-26', '', 0, 1, 2, 1),
(732448688, 'ENOX', '2016-12-01', '2018-11-26', '', 0, 1, 2, 1),
(732539708, 'LAIKA', '2015-11-01', '2020-01-08', '', 1, 1, 3, 0),
(732563697, 'MYLO', '2018-12-01', '2019-12-19', '', 0, 1, 3, 0),
(732578930, 'DOOGGY', '2017-04-01', '2019-04-30', '', 0, 1, 1, 2),
(732579116, 'ARROW', '2018-07-01', '2019-07-22', '', 0, 1, 3, 1),
(732642022, 'PASSO', '2019-06-01', '2020-02-02', '', 0, 1, 3, 0),
(732642085, 'PACHA KENDJI', '2018-06-01', '2019-11-25', '', 0, 1, 1, 0),
(732645184, 'OWEN', '2018-06-01', '2019-06-11', '', 0, 1, 2, 2),
(732645334, 'BOSS', '2014-07-01', '2020-01-09', '', 0, 1, 3, 0),
(743019646, 'PRINCE', '2015-09-01', '2019-08-28', '', 0, 1, 2, 0),
(743019910, 'MADIBA', '2014-08-01', '2019-07-15', '', 1, 1, 1, 0),
(743057283, 'DARK', '2018-09-01', '2019-11-08', '', 0, 1, 2, 0),
(743057463, 'HATCHI', '2018-09-01', '2019-12-22', '', 0, 1, 3, 0),
(743104287, 'MUJDAT', '2018-11-01', '2019-11-20', '', 0, 1, 3, 0),
(743105653, 'NAYA', '2016-12-01', '2019-10-09', '', 1, 1, 3, 0),
(743105688, 'PIERROT', '2014-10-01', '2019-10-24', '', 0, 1, 1, 0),
(743105720, 'SPIKE', '2016-11-01', '2019-06-01', '', 0, 1, 3, 0),
(743140960, 'PLATO', '2017-12-01', '2019-12-26', '', 0, 1, 3, 0),
(743140974, 'BELLA', '2009-04-01', '2019-11-23', '', 1, 1, 1, 0),
(743141181, 'ANETH DIT ETOILE', '2018-11-01', '2020-01-31', '', 1, 1, 3, 0),
(743141209, 'ULINE', '2018-12-01', '2019-12-04', '', 1, 1, 3, 2),
(743141270, 'HAWAI', '2013-11-01', '2019-11-26', '', 0, 1, 1, 0),
(743141300, 'KALY', '2012-11-01', '2019-07-12', '', 1, 1, 2, 0),
(743185385, 'AYA', '2015-06-01', '2020-01-07', '', 1, 1, 3, 0),
(743185584, 'PEPITA', '2018-08-01', '2019-12-10', '', 1, 1, 3, 0),
(743185862, 'MARCO', '2011-03-01', '2020-01-06', '', 0, 1, 3, 0),
(743185870, 'PAPRIKA', '2018-01-01', '2019-12-09', '', 1, 1, 3, 0),
(743185874, 'EPICE', '2019-01-01', '2020-01-22', '', 1, 0, 3, 0),
(743185886, 'NIKOS', '2009-12-01', '2019-12-20', '', 0, 1, 1, 0),
(743185900, 'ALIKA', '2019-02-01', '2020-01-13', '', 1, 1, 3, 0),
(743185918, 'DJUNE', '2019-01-01', '2020-01-09', '', 1, 1, 3, 0),
(743185920, 'ETNA', '2018-07-01', '2020-01-15', '', 1, 1, 3, 0),
(743185925, 'PIRATE', '2016-01-01', '2019-12-10', '', 0, 1, 3, 0),
(743185950, 'APOLO', '2019-01-01', '2020-01-11', '', 0, 1, 3, 0),
(743185952, 'ESPOIR', '2016-01-01', '2020-01-09', '', 0, 1, 3, 0),
(743185953, 'ASTON', '2016-01-01', '2020-01-16', '', 0, 1, 3, 0),
(743185967, 'SAMY', '2012-01-01', '2020-01-02', '', 0, 1, 1, 0),
(743185979, 'OLGA', '2009-12-01', '2019-12-14', '', 1, 1, 1, 0),
(743186025, 'ELTON', '2014-01-01', '2019-12-28', '', 0, 1, 3, 0),
(743186061, 'DYLAN', '2016-01-01', '2020-01-29', '', 0, 0, 3, 0),
(743186067, 'GALAK', '2018-01-01', '2020-01-27', '', 0, 0, 3, 0),
(743186097, 'FLAMM', '2016-01-01', '2020-01-29', '', 0, 0, 3, 0),
(743186111, 'ROCKY', '2008-12-01', '2019-12-29', '', 0, 1, 2, 0),
(743186127, 'GIANI', '2018-01-01', '2020-01-15', '', 0, 1, 3, 0),
(743186265, 'SNOOP', '2016-01-01', '2020-01-16', '', 0, 1, 3, 0),
(743186333, 'POMME', '2016-01-01', '2019-12-11', '', 1, 1, 3, 0),
(743565979, 'NINA', '2017-07-01', '2020-01-31', '', 1, 1, 3, 0),
(802025753, 'PEPETTE', '2012-09-01', '2020-01-02', '', 1, 1, 3, 0),
(802037260, 'TINO', '2009-12-01', '2019-06-03', '', 0, 1, 3, 1),
(810539115, 'JANGO', '2014-04-01', '2020-01-07', '', 0, 1, 3, 0),
(810673865, 'LYLO', '2015-01-01', '2019-02-01', '', 0, 1, 1, 0),
(811375114, 'INAYA', '2017-12-01', '2019-12-28', '', 1, 1, 3, 0),
(811381926, 'NACHOS DE L\'IMPREINTE DE GOLIA', '2017-05-01', '2019-01-24', '', 0, 1, 1, 1),
(811542404, 'HARPER', '2012-07-01', '2020-01-27', '', 0, 0, 3, 0),
(812084551, 'MURPHY', '2016-10-01', '2019-10-24', '', 0, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `couleur`
--

CREATE TABLE `couleur` (
  `idCouleur` int(2) NOT NULL,
  `nomCouleur` varchar(31) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couleur`
--

INSERT INTO `couleur` (`idCouleur`, `nomCouleur`) VALUES
(1, 'Blanc'),
(2, 'Noir'),
(3, 'Chocolat'),
(4, 'Marron'),
(5, 'Fauve'),
(6, 'Charbonnée'),
(7, 'Gris'),
(8, 'Bleu'),
(9, 'Tricolore (Noir, Blanc, Marron)'),
(10, 'Feu'),
(11, 'Beige'),
(12, 'Bringe'),
(13, 'Abricot'),
(14, 'Bicolore'),
(15, 'Arlequin'),
(16, 'Truite');

-- --------------------------------------------------------

--
-- Table structure for table `etatlegal`
--

CREATE TABLE `etatlegal` (
  `idCategorie` int(1) NOT NULL,
  `description` varchar(23) DEFAULT NULL,
  `races` varchar(26) DEFAULT NULL,
  `obligations` varchar(109) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etatlegal`
--

INSERT INTO `etatlegal` (`idCategorie`, `description`, `races`, `obligations`) VALUES
(1, 'Chiens d\'attaque', 'Pitbull, Boerbull', 'permis de détention, identification, stérilisation, casier vierge, muselière, interdit dans les lieux publics'),
(2, 'Chiens de garde/défense', 'Am Staff, Tosa, Rottweiler', 'permis de détention, identification, stérilisation, casier vierge, muselière'),
(3, 'Autres chiens', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `etredecouleur`
--

CREATE TABLE `etredecouleur` (
  `idChien` int(10) NOT NULL,
  `idCouleur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etredecouleur`
--

INSERT INTO `etredecouleur` (`idChien`, `idCouleur`) VALUES
(810673865, 16),
(743105688, 15),
(606100377, 14),
(732539708, 14),
(743019646, 14),
(732033195, 14),
(500751919, 13),
(743186333, 12),
(608177696, 12),
(743185950, 12),
(743186097, 12),
(731020202, 12),
(731559255, 12),
(500770405, 12),
(743185584, 12),
(743185920, 12),
(600230009, 12),
(732645184, 12),
(732563697, 12),
(743185870, 11),
(743186127, 11),
(810673865, 11),
(743565979, 10),
(810539115, 10),
(743186067, 10),
(743185952, 10),
(501507555, 10),
(743019910, 10),
(732642085, 10),
(500262918, 10),
(500561547, 10),
(600112272, 10),
(400009792, 10),
(604884959, 10),
(743185979, 9),
(712678707, 9),
(712339421, 9),
(712678597, 9),
(600192550, 9),
(743140960, 9),
(743140974, 9),
(700256398, 9),
(743185874, 9),
(743185918, 9),
(604321869, 9),
(600041407, 9),
(501387833, 9),
(606594777, 9),
(732645334, 8),
(731020202, 8),
(711025363, 7),
(802037260, 7),
(731701634, 6),
(743186025, 6),
(501408688, 6),
(743057463, 6),
(501080512, 6),
(732192089, 6),
(743185967, 5),
(201766694, 5),
(100107161, 5),
(501408688, 5),
(743057463, 5),
(743186061, 5),
(608258509, 5),
(732340306, 5),
(812084551, 5),
(811375114, 5),
(732448639, 5),
(743141209, 5),
(731452679, 5),
(501080512, 5),
(732192089, 5),
(602824117, 5),
(802025753, 5),
(606100377, 5),
(743019646, 5),
(743185862, 4),
(731679311, 4),
(743185925, 4),
(100068026, 4),
(606191738, 4),
(732642022, 4),
(743185953, 4),
(743186265, 4),
(606201420, 4),
(743104287, 4),
(602842530, 4),
(743141270, 4),
(604021670, 4),
(731559353, 4),
(14752163, 4),
(100068035, 4),
(732192345, 4),
(732234302, 3),
(500069127, 2),
(604150223, 2),
(743565979, 2),
(743185385, 2),
(743185886, 2),
(810539115, 2),
(743186067, 2),
(743185952, 2),
(743185920, 2),
(501507555, 2),
(16602813, 2),
(743185900, 2),
(743019910, 2),
(732642085, 2),
(100068035, 2),
(743186111, 2),
(731508984, 2),
(606090147, 2),
(732192145, 2),
(500262918, 2),
(606558989, 2),
(732579116, 2),
(732578930, 2),
(732448688, 2),
(501217962, 2),
(811381926, 2),
(606380724, 2),
(500048691, 2),
(732645184, 2),
(732137576, 2),
(501631093, 2),
(602218702, 2),
(743105653, 2),
(743057283, 2),
(743105720, 2),
(712252412, 2),
(743141300, 2),
(500561547, 2),
(600112272, 2),
(743141181, 2),
(400009792, 2),
(732301158, 2),
(604884959, 2),
(608298259, 2),
(100106783, 2),
(811542404, 2),
(732539708, 2),
(732563697, 2),
(606205619, 2),
(743105688, 2),
(732340306, 2),
(732033195, 2),
(732137799, 2),
(731701634, 2),
(606100377, 2),
(501080512, 2),
(732192345, 2),
(802025753, 1),
(743141270, 1),
(604021670, 1),
(731559353, 1),
(743185584, 1),
(100106783, 1),
(811542404, 1),
(600230009, 1),
(732563697, 1),
(14752163, 1),
(606205619, 1),
(802037260, 1),
(732192345, 1),
(810673865, 1),
(732137799, 1),
(500069127, 1),
(743185862, 1),
(743185385, 1),
(731679311, 1),
(743185886, 1),
(743185925, 1),
(201766694, 1),
(100068026, 1),
(606191738, 1),
(732642022, 1),
(16602813, 1),
(743185953, 1),
(743186265, 1),
(743185900, 1),
(731508984, 1),
(606201420, 1),
(606090147, 1),
(732192145, 1),
(812084551, 1),
(732579116, 1),
(732578930, 1),
(732448639, 1),
(732448688, 1),
(731452679, 1),
(501217962, 1),
(811381926, 1),
(606380724, 1),
(711025363, 1),
(732645334, 1),
(500048691, 1),
(743104287, 1),
(731559255, 1),
(501631093, 1),
(602218702, 1),
(743105720, 1),
(743141181, 1),
(602842530, 1),
(732301158, 1),
(608298259, 1),
(732539708, 1),
(743105688, 1),
(731020202, 1),
(743019646, 1),
(732033195, 1);

-- --------------------------------------------------------

--
-- Table structure for table `etremalade`
--

CREATE TABLE `etremalade` (
  `idMaladie` int(10) DEFAULT NULL,
  `idChien` int(10) DEFAULT NULL,
  `dateDiagnostique` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `etreraces`
--

CREATE TABLE `etreraces` (
  `idChien` int(9) DEFAULT NULL,
  `idRace` int(3) DEFAULT NULL,
  `Categorie` int(1) DEFAULT NULL,
  `Lof` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etreraces`
--

INSERT INTO `etreraces` (`idChien`, `idRace`, `Categorie`, `Lof`) VALUES
(802025753, 66, 3, 0),
(500069127, 66, 3, 0),
(743141270, 66, 3, 0),
(743185967, 168, 3, 0),
(604021670, 53, 3, 0),
(743185979, 58, 3, 0),
(743185979, 23, 3, 0),
(604150223, 36, 3, 0),
(743565979, 161, 3, 0),
(712678707, 11, 3, 0),
(712339421, 11, 3, 0),
(712678597, 11, 3, 0),
(743185862, 53, 3, 0),
(600192550, 26, 3, 0),
(743185385, 66, 3, 0),
(731679311, 40, 3, 0),
(743185886, 58, 3, 0),
(743140960, 11, 3, 0),
(731559353, 66, 3, 0),
(743185870, 109, 3, 0),
(743185584, 27, 3, 0),
(743185925, 27, 3, 0),
(743186333, 109, 3, 0),
(743186333, 58, 3, 0),
(743140974, 11, 3, 0),
(700256398, 11, 3, 0),
(201766694, 100, 3, 0),
(201766694, 66, 3, 0),
(500751919, 36, 3, 0),
(810539115, 44, 3, 0),
(743185874, 40, 3, 0),
(743186067, 33, 3, 0),
(743186127, 13, 3, 0),
(100106783, 52, 3, 0),
(100107161, 13, 3, 0),
(100068026, 32, 3, 0),
(743185952, 40, 3, 0),
(743185918, 40, 3, 0),
(606191738, 13, 3, 0),
(606100377, 83, 3, 0),
(608177696, 35, 3, 0),
(743185920, 13, 3, 0),
(501507555, 13, 3, 0),
(811542404, 124, 3, 0),
(811542404, 58, 3, 0),
(732642022, 40, 3, 0),
(16602813, 40, 3, 0),
(600230009, 66, 3, 0),
(501408688, 13, 3, 0),
(732539708, 53, 3, 0),
(743185953, 53, 3, 0),
(743186265, 53, 3, 0),
(743057463, 58, 3, 0),
(604321869, 7, 3, 0),
(743185950, 13, 3, 0),
(743185900, 26, 3, 0),
(743186061, 13, 3, 0),
(743186097, 14, 3, 0),
(743186097, 83, 3, 0),
(732563697, 11, 3, 0),
(14752163, 50, 3, 0),
(743019910, 13, 3, 0),
(732642085, 58, 3, 0),
(732642085, 13, 3, 0),
(608258509, 83, 3, 0),
(608258509, 13, 3, 0),
(100068035, 13, 3, 0),
(743186111, 69, 3, 0),
(743186111, 26, 3, 0),
(606205619, 13, 3, 0),
(731508984, 69, 3, 0),
(731508984, 13, 3, 0),
(606201420, 13, 3, 0),
(743105688, 13, 3, 0),
(732340306, 83, 3, 0),
(732340306, 14, 3, 0),
(600041407, 53, 3, 0),
(501387833, 13, 3, 0),
(501387833, 35, 3, 0),
(606090147, 3, 3, 0),
(732192145, 59, 3, 0),
(500262918, 17, 3, 0),
(812084551, 50, 3, 0),
(731020202, 106, 1, 0),
(606558989, 106, 1, 0),
(732579116, 106, 1, 0),
(732578930, 106, 1, 0),
(811375114, 4, 3, 0),
(732448639, 106, 1, 0),
(732448688, 106, 1, 0),
(743141209, 106, 1, 0),
(802037260, 136, 2, 1),
(731452679, 136, 2, 1),
(501217962, 106, 1, 0),
(811381926, 136, 2, 1),
(606380724, 136, 2, 1),
(711025363, 106, 1, 0),
(732645334, 106, 1, 0),
(500048691, 136, 3, 0),
(732645184, 106, 1, 0),
(743104287, 106, 1, 0),
(731559255, 139, 3, 0),
(743019646, 83, 3, 0),
(732137576, 60, 3, 0),
(501631093, 51, 3, 0),
(732033195, 53, 3, 0),
(602218702, 42, 3, 0),
(501080512, 83, 3, 0),
(501080512, 16, 3, 0),
(743105653, 13, 3, 0),
(743057283, 13, 3, 0),
(732192345, 66, 3, 0),
(732192089, 83, 3, 0),
(732192089, 16, 3, 0),
(743105720, 13, 3, 0),
(743105720, 58, 3, 0),
(712252412, 109, 3, 0),
(743141300, 58, 3, 0),
(500561547, 14, 3, 1),
(600112272, 67, 3, 0),
(743141181, 58, 3, 0),
(810673865, 69, 3, 0),
(732137799, 58, 3, 0),
(731701634, 83, 3, 0),
(732234302, 125, 3, 0),
(400009792, 13, 3, 0),
(500770405, 13, 3, 0),
(602842530, 13, 3, 0),
(602842530, 69, 3, 0),
(732301158, 167, 3, 0),
(732301158, 69, 3, 0),
(602824117, 83, 3, 0),
(602824117, 16, 3, 0),
(606594777, 13, 3, 0),
(743186025, 83, 3, 0),
(604884959, 118, 3, 1),
(608298259, 13, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `etresociable`
--

CREATE TABLE `etresociable` (
  `idChien` int(9) DEFAULT NULL,
  `idIndividu` int(1) DEFAULT NULL,
  `Appreciation` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etresociable`
--

INSERT INTO `etresociable` (`idChien`, `idIndividu`, `Appreciation`) VALUES
(604021670, 2, 'TRUE'),
(600192550, 1, 'TRUE'),
(600192550, 3, 'TRUE'),
(810539115, 2, 'TRUE'),
(811542404, 1, 'TRUE'),
(811542404, 2, 'TRUE'),
(811542404, 3, 'TRUE'),
(732642022, 2, 'TRUE'),
(14752163, 2, 'FALSE'),
(743019910, 2, 'FALSE'),
(732642085, 1, 'TRUE'),
(732642085, 2, 'FALSE'),
(732642085, 3, 'TRUE'),
(743186111, 1, 'FALSE'),
(743186111, 2, 'FALSE'),
(743186111, 3, 'TRUE'),
(606205619, 1, 'TRUE'),
(606205619, 1, 'TRUE'),
(732340306, 1, 'TRUE'),
(732340306, 3, 'TRUE'),
(501387833, 1, 'FALSE'),
(501387833, 2, 'FALSE'),
(501387833, 3, 'TRUE'),
(500262918, 1, 'FALSE'),
(500262918, 2, 'FALSE'),
(500262918, 3, 'TRUE'),
(811375114, 1, 'FALSE'),
(811375114, 3, 'TRUE'),
(500048691, 1, 'TRUE'),
(731559255, 1, 'FALSE'),
(732137576, 1, 'TRUE'),
(732137576, 2, 'TRUE'),
(732137576, 3, 'FALSE'),
(501631093, 1, 'TRUE'),
(732033195, 1, 'TRUE'),
(732033195, 2, 'FALSE'),
(732033195, 3, 'TRUE'),
(743057283, 1, 'TRUE'),
(712252412, 2, 'TRUE'),
(600112272, 2, 'FALSE'),
(600112272, 3, 'TRUE'),
(810673865, 1, 'FALSE'),
(810673865, 2, 'FALSE'),
(732137799, 1, 'FALSE'),
(732137799, 2, 'FALSE'),
(732234302, 3, 'TRUE'),
(400009792, 1, 'FALSE'),
(400009792, 3, 'FALSE'),
(602842530, 1, 'FALSE'),
(602842530, 2, 'TRUE'),
(732301158, 1, 'TRUE'),
(608298259, 1, 'FALSE'),
(608298259, 3, 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `etrevaccine`
--

CREATE TABLE `etrevaccine` (
  `idChien` int(10) DEFAULT NULL,
  `idVaccin` int(1) DEFAULT NULL,
  `dateVaccin` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etrevaccine`
--

INSERT INTO `etrevaccine` (`idChien`, `idVaccin`, `dateVaccin`) VALUES
(802025753, 1, '2020-01-10'),
(500069127, 1, '2020-01-24'),
(743141270, 1, '2019-12-24'),
(743185967, 1, '2020-01-24'),
(743185979, 1, '2020-01-10'),
(743565979, 1, '2019-12-24'),
(712678707, 1, '2019-11-26'),
(712339421, 1, '2019-11-26'),
(712678597, 1, '2019-11-26'),
(743185862, 1, '2020-01-24'),
(600192550, 1, '2019-11-15'),
(743185385, 1, '2020-01-31'),
(731679311, 1, '2020-01-31'),
(743185886, 1, '2020-01-10'),
(743140960, 1, '2020-01-14'),
(731559353, 1, '2019-04-05'),
(743185870, 1, '2020-01-31'),
(743185584, 1, '2020-01-31'),
(743185925, 1, '2020-01-31'),
(743186333, 1, '2020-01-31'),
(743140974, 1, '2020-01-03'),
(700256398, 1, '2019-08-23'),
(500751919, 1, '2020-01-31'),
(810539115, 1, '2020-01-14'),
(743186127, 1, '2020-01-31'),
(100068026, 1, '2020-01-21'),
(811542404, 1, '2019-03-14'),
(732642022, 1, '2019-10-25'),
(16602813, 1, '2020-01-10'),
(501408688, 1, '2019-12-24'),
(732539708, 1, '2019-12-31'),
(743057463, 1, '2019-10-04'),
(732563697, 1, '2020-01-07'),
(14752163, 1, '2019-09-20'),
(743019910, 1, '2019-08-27'),
(732642085, 1, '2019-07-09'),
(608258509, 1, '2019-08-27'),
(100068035, 1, '2020-01-21'),
(743186111, 1, '2020-01-24'),
(606205619, 1, '2019-11-12'),
(731508984, 1, '2019-10-28'),
(606201420, 1, '2019-08-13'),
(743105688, 1, '2019-11-15'),
(732340306, 1, '2019-12-06'),
(600041407, 1, '2020-01-24'),
(501387833, 1, '2019-05-28'),
(732192145, 1, '2019-05-09'),
(500262918, 1, '2019-10-12'),
(812084551, 1, '2019-11-05'),
(731020202, 1, '2020-01-03'),
(606558989, 1, '2019-07-09'),
(732579116, 1, '2019-08-09'),
(732578930, 1, '2019-05-17'),
(811375114, 1, '2020-01-31'),
(732448639, 1, '2019-12-20'),
(732448688, 1, '2019-12-20'),
(743141209, 1, '2019-12-31'),
(802037260, 1, '2019-06-25'),
(731452679, 1, '2019-11-19'),
(501217962, 1, '2019-03-08'),
(811381926, 1, '2019-07-30'),
(606380724, 1, '2019-05-07'),
(711025363, 1, '2019-10-11'),
(732645334, 1, '2019-07-23'),
(500048691, 1, '2019-01-11'),
(732645184, 1, '2019-07-05'),
(743104287, 1, '2019-12-03'),
(731559255, 1, '2019-02-15'),
(743019646, 1, '2019-08-27'),
(732137576, 1, '2020-01-14'),
(501631093, 1, '2020-01-31'),
(732033195, 1, '2019-10-11'),
(602218702, 1, '2019-08-02'),
(501080512, 1, '2019-10-25'),
(743105653, 1, '2019-12-03'),
(743057283, 1, '2019-10-04'),
(732192345, 1, '2019-06-18'),
(732192089, 1, '2019-04-05'),
(743105720, 1, '2019-12-10'),
(712252412, 1, '2019-09-06'),
(743141300, 1, '2019-12-20'),
(500561547, 1, '2019-04-05'),
(600112272, 1, '2019-08-30'),
(743141181, 1, '2019-12-03'),
(810673865, 1, '2019-03-08'),
(732137799, 1, '2019-03-08'),
(731701634, 1, '2019-08-09'),
(732234302, 1, '2019-08-09'),
(400009792, 1, '2019-08-09'),
(500770405, 1, '2020-01-24'),
(602842530, 1, '2019-07-25'),
(732301158, 1, '2019-08-30'),
(606594777, 1, '2020-01-03'),
(604884959, 1, '2019-08-09'),
(608298259, 1, '2019-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `individu`
--

CREATE TABLE `individu` (
  `idIndividu` int(1) NOT NULL,
  `nomIndividu` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `individu`
--

INSERT INTO `individu` (`idIndividu`, `nomIndividu`) VALUES
(1, 'Chien'),
(2, 'Chat'),
(3, 'Enfants');

-- --------------------------------------------------------

--
-- Table structure for table `lof`
--

CREATE TABLE `lof` (
  `idLof` int(1) NOT NULL,
  `Lof` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lof`
--

INSERT INTO `lof` (`idLof`, `Lof`) VALUES
(0, 'Non'),
(1, 'Oui');

-- --------------------------------------------------------

--
-- Table structure for table `loger`
--

CREATE TABLE `loger` (
  `idBox` varchar(4) DEFAULT NULL,
  `idChien` int(10) DEFAULT NULL,
  `dateDebut` varchar(10) DEFAULT NULL,
  `dateFin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loger`
--

INSERT INTO `loger` (`idBox`, `idChien`, `dateDebut`, `dateFin`) VALUES
('R101', 802025753, '', ''),
('R101', 500069127, '', ''),
('R102', 743141270, '', ''),
('R105', 743185967, '', ''),
('R105', 604021670, '', ''),
('R106', 743185979, '', ''),
('R106', 604150223, '', ''),
('R106', 743565979, '', ''),
('R107', 712678707, '', ''),
('R107', 712339421, '', ''),
('R107', 712678597, '', ''),
('R108', 743185862, '', ''),
('R108', 600192550, '', ''),
('R109', 743185385, '', ''),
('R109', 731679311, '', ''),
('R110', 743185886, '', ''),
('R110', 743140960, '', ''),
('R111', 731559353, '', ''),
('R112', 743185870, '', ''),
('R112', 743185584, '', ''),
('R112', 743185925, '', ''),
('R112', 743186333, '', ''),
('R113', 743140974, '', ''),
('R113', 700256398, '', ''),
('R114', 201766694, '', ''),
('R114', 500751919, '', ''),
('R114', 810539115, '', ''),
('R201', 743185874, '', ''),
('R201', 743186067, '', ''),
('R202', 743186127, '', ''),
('R203', 100106783, '', ''),
('R203', 100107161, '', ''),
('R204', 100068026, '', ''),
('R204', 743185952, '', ''),
('R204', 743185918, '', ''),
('R205', 606191738, '', ''),
('R205', 606100377, '', ''),
('R206', 608177696, '', ''),
('R206', 743185920, '', ''),
('R207', 501507555, '', ''),
('R207', 811542404, '', ''),
('R208', 732642022, '', ''),
('R209', 16602813, '', ''),
('R209', 600230009, '', ''),
('R210', 501408688, '', ''),
('R210', 732539708, '', ''),
('R211', 743185953, '', ''),
('R211', 743186265, '', ''),
('R212', 743057463, '', ''),
('R212', 604321869, '', ''),
('R213', 743185950, '', ''),
('R213', 743185900, '', ''),
('R214', 743186061, '', ''),
('R214', 743186097, '', ''),
('R301', 732563697, '', ''),
('R302', 14752163, '', ''),
('R304', 743019910, '', ''),
('R304', 732642085, '', ''),
('R305', 608258509, '', ''),
('R306', 100068035, '', ''),
('R307', 743186111, '', ''),
('R308', 606205619, '', ''),
('R309', 731508984, '', ''),
('R310', 606201420, '', ''),
('R311', 743105688, '', ''),
('R312', 732340306, '', ''),
('R313', 600041407, '', ''),
('R403', 501387833, '', ''),
('R405', 606090147, '', ''),
('R406', 732192145, '', ''),
('R407', 500262918, '', ''),
('R408', 812084551, '', ''),
('R410', 731020202, '', ''),
('R411', 606558989, '', ''),
('R412', 732579116, '', ''),
('R413', 732578930, '', ''),
('R414', 811375114, '', ''),
('R501', 732448639, '', ''),
('R502', 732448688, '', ''),
('R503', 743141209, '', ''),
('R504', 802037260, '', ''),
('R505', 731452679, '', ''),
('R506', 501217962, '', ''),
('R507', 811381926, '', ''),
('R508', 606380724, '', ''),
('R509', 711025363, '', ''),
('R510', 732645334, '', ''),
('R511', 500048691, '', ''),
('R512', 732645184, '', ''),
('R513', 743104287, '', ''),
('R514', 731559255, '', ''),
('R601', 743019646, '', ''),
('R602', 732137576, '', ''),
('R603', 501631093, '', ''),
('R604', 732033195, '', ''),
('R605', 602218702, '', ''),
('R606', 501080512, '', ''),
('R608', 743105653, '', ''),
('R608', 743057283, '', ''),
('R609', 732192345, '', ''),
('R610', 732192089, '', ''),
('R611', 743105720, '', ''),
('R612', 712252412, '', ''),
('R613', 743141300, '', ''),
('R614', 500561547, '', ''),
('R701', 600112272, '', ''),
('R701', 743141181, '', ''),
('R702', 810673865, '', ''),
('R703', 732137799, '', ''),
('R704', 731701634, '', ''),
('R705', 732234302, '', ''),
('R706', 400009792, '', ''),
('R707', 500770405, '', ''),
('R708', 602842530, '', ''),
('R709', 732301158, '', ''),
('R710', 602824117, '', ''),
('R711', 606594777, '', ''),
('R712', 743186025, '', ''),
('R713', 604884959, '', ''),
('R714', 608298259, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `maladie`
--

CREATE TABLE `maladie` (
  `idMaladie` int(1) NOT NULL,
  `nomMaladie` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maladie`
--

INSERT INTO `maladie` (`idMaladie`, `nomMaladie`) VALUES
(1, 'Rage'),
(2, 'Leishmaniose'),
(3, 'Toux des chenils'),
(4, 'Leptospirose'),
(5, 'Parvovirose'),
(6, 'Tetanos'),
(7, 'Maladie de Carré'),
(8, 'Hépatite de Rubarth');

-- --------------------------------------------------------

--
-- Table structure for table `mordeur`
--

CREATE TABLE `mordeur` (
  `idMordeur` int(1) NOT NULL,
  `Evaluation` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mordeur`
--

INSERT INTO `mordeur` (`idMordeur`, `Evaluation`) VALUES
(0, ''),
(1, '¼'),
(2, '2/4'),
(3, '¾'),
(4, '4/4');

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

CREATE TABLE `races` (
  `idRace` int(3) NOT NULL,
  `nomRace` varchar(34) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `races`
--

INSERT INTO `races` (`idRace`, `nomRace`) VALUES
(1, 'Affenpinscher'),
(2, 'Akita'),
(3, 'Akita americain'),
(4, 'Americain bully'),
(5, 'American Staffordshire Terrier'),
(6, 'Amstaff'),
(7, 'Ariegeois'),
(8, 'Barzoï'),
(9, 'Basset des Alpes'),
(10, 'Basset'),
(11, 'Beagle'),
(12, 'Beauceron'),
(13, 'Berger'),
(14, 'Berger allemand'),
(15, 'Berger Australien'),
(16, 'Berger belge'),
(17, 'Berger de beauce'),
(18, 'Berger Hollandais'),
(19, 'Bernhardiner'),
(20, 'Bichon havanais'),
(21, 'Bichon maltais'),
(22, 'Billy'),
(23, 'Bleu de gascogne'),
(24, 'Boerbull'),
(25, 'Boersoel'),
(26, 'Border collie'),
(27, 'Bouledogue'),
(28, 'Bouledogue Anglais'),
(29, 'Bouledogue français'),
(30, 'Bouvier bernois'),
(31, 'Boxer'),
(32, 'Braque francais'),
(33, 'Bruno du jura'),
(34, 'Bullmastiff'),
(35, 'Cane corso'),
(36, 'Caniche'),
(37, 'Carlin'),
(38, 'Cavalier King Charles'),
(39, 'Cavalier King Charles Spaniel'),
(40, 'Chasse'),
(41, 'Chihuahua'),
(42, 'Cocker'),
(43, 'Cocker américain'),
(44, 'Cocker anglais'),
(45, 'Colley'),
(46, 'Dalmatien'),
(47, 'Danois'),
(48, 'Dobermann'),
(49, 'Dogue'),
(50, 'Dogue allemand'),
(51, 'Dogue argentin'),
(52, 'Epagneul'),
(53, 'Epagneul breton'),
(54, 'Épagneul tibétain'),
(55, 'Eurasier'),
(56, 'Fox terrier'),
(57, 'Golden Retriever'),
(58, 'Griffon'),
(59, 'Griffon korthal'),
(60, 'Groenendael'),
(61, 'Hokkaïdo'),
(62, 'Husky'),
(63, 'Irish terrier'),
(64, 'Irish wolfhound'),
(65, 'Italian greyhound'),
(66, 'Jack Russell'),
(67, 'Jagdterrier allemand'),
(68, 'Komondor'),
(69, 'Labrador'),
(70, 'Landseer'),
(71, 'Lévrier'),
(72, 'Lévrier afghan'),
(73, 'Lévrier anglais'),
(74, 'Lévrier ecossais'),
(75, 'Lévrier espagnol'),
(76, 'Lévrier hongrois'),
(77, 'Lévrier irlandais'),
(78, 'Lévrier polonais'),
(79, 'Lévrier sicilien'),
(80, 'Lévrier whippet'),
(81, 'Lhassa apso'),
(82, 'Loulou nain'),
(83, 'Malinois'),
(84, 'Maltais'),
(85, 'Manchester terrier'),
(86, 'Mastiff'),
(87, 'Mastiff tibétain'),
(88, 'Mâtin de navarre'),
(89, 'Mâtin des pyrénées'),
(90, 'Mâtin espagnol'),
(91, 'Mâtin napolitain'),
(92, 'Montagne des pyrénées'),
(93, 'Mops'),
(94, 'Newfoundland'),
(95, 'Norfolk-terrier'),
(96, 'Norwich terrier'),
(97, 'Old country bulldog'),
(98, 'Old english sheepdog'),
(99, 'Otterhound'),
(100, 'Papillon'),
(101, 'Pékinois'),
(102, 'Pinscher'),
(103, 'Pinscher allemand'),
(104, 'Pinscher autrichien à poil court'),
(105, 'Pinscher nain'),
(106, 'Pitbull'),
(107, 'Pointer'),
(108, 'Poitevin'),
(109, 'Ratier'),
(110, 'Retriever'),
(111, 'Retriever à poil bouclé'),
(112, 'Retriever à poil plat'),
(113, 'Retriever de la baie de chesapeake'),
(114, 'Retriever de la Nouvelle-Ecosse'),
(115, 'Retriever doré'),
(116, 'Retriever du labrador'),
(117, 'Riezenschnauzer'),
(118, 'Rottweiler'),
(119, 'Russian toy'),
(120, 'Russkaya psovaya borzaya'),
(121, 'Russkiy toy'),
(122, 'Saint bernard'),
(123, 'Schipperke'),
(124, 'setter'),
(125, 'Sharpei'),
(126, 'Sheltie'),
(127, 'Shetland sheepdog'),
(128, 'Shiba'),
(129, 'Shiba inu'),
(130, 'Shichon'),
(131, 'Shih tzu'),
(132, 'Spitz'),
(133, 'Spitz allemand'),
(134, 'Staffie'),
(135, 'Staffordshire bull terrier'),
(136, 'Staffordshire terrier'),
(137, 'Teckel'),
(138, 'Terre-neuve'),
(139, 'Terrier'),
(140, 'Terrier tibétain'),
(141, 'Tosa'),
(142, 'Toy-terrier'),
(143, 'U cursinu'),
(144, 'Vallhund suédois'),
(145, 'Vizsla'),
(146, 'Waterside-terrier'),
(147, 'Weimaraner'),
(148, 'Weisser schweizer schäferhund'),
(149, 'Welsh corgi'),
(150, 'Welsh corgi cardigan'),
(151, 'Welsh corgi pembroke'),
(152, 'Welsh springer spaniel'),
(153, 'Welsh terrier'),
(154, 'West-highland white-terrier'),
(155, 'Westfälische dachsbracke'),
(156, 'Westie'),
(157, 'Wetterhoun'),
(158, 'Whippet'),
(159, 'Wolfhound'),
(160, 'Xoloitzcuintle'),
(161, 'Yorkshire'),
(162, 'Yorshire'),
(163, 'Youjak'),
(164, 'Zwergaffen'),
(165, 'Zwergpinscher'),
(166, 'Zwergschnauzer'),
(167, 'Bull terrier'),
(168, 'Fauve de Bretagne');

-- --------------------------------------------------------

--
-- Table structure for table `sexe`
--

CREATE TABLE `sexe` (
  `IdSexe` int(1) NOT NULL,
  `NomSexe` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sexe`
--

INSERT INTO `sexe` (`IdSexe`, `NomSexe`) VALUES
(0, 'Male'),
(1, 'Femelle');

-- --------------------------------------------------------

--
-- Table structure for table `sexehumain`
--

CREATE TABLE `sexehumain` (
  `sexeHum` int(1) NOT NULL,
  `etat` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sexehumain`
--

INSERT INTO `sexehumain` (`sexeHum`, `etat`) VALUES
(0, 'Homme'),
(1, 'Femelle');

-- --------------------------------------------------------

--
-- Table structure for table `statut`
--

CREATE TABLE `statut` (
  `idStatut` int(1) NOT NULL,
  `Statut` varchar(8) DEFAULT NULL,
  `Lecture` int(1) DEFAULT NULL,
  `Modification` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statut`
--

INSERT INTO `statut` (`idStatut`, `Statut`, `Lecture`, `Modification`) VALUES
(1, 'Employé', 1, 1),
(2, 'Bénévole', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sterilisation`
--

CREATE TABLE `sterilisation` (
  `idSterilisation` int(1) NOT NULL,
  `Etat` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sterilisation`
--

INSERT INTO `sterilisation` (`idSterilisation`, `Etat`) VALUES
(0, 'Non'),
(1, 'Oui');

-- --------------------------------------------------------

--
-- Table structure for table `tarification`
--

CREATE TABLE `tarification` (
  `idTarification` int(1) NOT NULL,
  `description` varchar(11) DEFAULT NULL,
  `tarif` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tarification`
--

INSERT INTO `tarification` (`idTarification`, `description`, `tarif`) VALUES
(1, 'CoupDeCoeur', 50),
(2, 'CoupDePouce', 150),
(3, 'Normal', 250),
(4, 'Chiot', 350);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(10) NOT NULL,
  `idStatut` int(1) DEFAULT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `idSexe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vaccin`
--

CREATE TABLE `vaccin` (
  `idVaccin` int(1) NOT NULL,
  `nomVaccin` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vaccin`
--

INSERT INTO `vaccin` (`idVaccin`, `nomVaccin`) VALUES
(1, 'CHPPiL'),
(2, 'CHLRP'),
(3, 'CHLP'),
(4, 'CHP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoptant`
--
ALTER TABLE `adoptant`
  ADD PRIMARY KEY (`idAdoptant`),
  ADD KEY `idSexeH` (`sexe`);

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`idBox`);

--
-- Indexes for table `chien`
--
ALTER TABLE `chien`
  ADD PRIMARY KEY (`idChien`),
  ADD KEY `idMordeur` (`idMordeur`),
  ADD KEY `idTarification` (`idTarification`),
  ADD KEY `idSterilisation` (`idSterilisation`),
  ADD KEY `idSexe` (`idSexe`);

--
-- Indexes for table `couleur`
--
ALTER TABLE `couleur`
  ADD PRIMARY KEY (`idCouleur`);

--
-- Indexes for table `etatlegal`
--
ALTER TABLE `etatlegal`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Indexes for table `etredecouleur`
--
ALTER TABLE `etredecouleur`
  ADD KEY `id` (`idChien`),
  ADD KEY `idCouleur1` (`idCouleur`);

--
-- Indexes for table `etremalade`
--
ALTER TABLE `etremalade`
  ADD KEY `idChien` (`idChien`),
  ADD KEY `idMaladie` (`idMaladie`);

--
-- Indexes for table `etreraces`
--
ALTER TABLE `etreraces`
  ADD KEY `idChien1` (`idChien`),
  ADD KEY `etreDeRace` (`idRace`),
  ADD KEY `etrelof` (`Lof`),
  ADD KEY `etatLegal` (`Categorie`);

--
-- Indexes for table `individu`
--
ALTER TABLE `individu`
  ADD PRIMARY KEY (`idIndividu`);

--
-- Indexes for table `lof`
--
ALTER TABLE `lof`
  ADD PRIMARY KEY (`idLof`);

--
-- Indexes for table `loger`
--
ALTER TABLE `loger`
  ADD KEY `seLoger` (`idBox`),
  ADD KEY `idChienLoger` (`idChien`);

--
-- Indexes for table `maladie`
--
ALTER TABLE `maladie`
  ADD PRIMARY KEY (`idMaladie`);

--
-- Indexes for table `mordeur`
--
ALTER TABLE `mordeur`
  ADD PRIMARY KEY (`idMordeur`);

--
-- Indexes for table `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`idRace`);

--
-- Indexes for table `sexe`
--
ALTER TABLE `sexe`
  ADD PRIMARY KEY (`IdSexe`);

--
-- Indexes for table `sexehumain`
--
ALTER TABLE `sexehumain`
  ADD PRIMARY KEY (`sexeHum`);

--
-- Indexes for table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`idStatut`);

--
-- Indexes for table `sterilisation`
--
ALTER TABLE `sterilisation`
  ADD PRIMARY KEY (`idSterilisation`);

--
-- Indexes for table `tarification`
--
ALTER TABLE `tarification`
  ADD PRIMARY KEY (`idTarification`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`),
  ADD KEY `idSexe1` (`idSexe`),
  ADD KEY `leStatu` (`idStatut`);

--
-- Indexes for table `vaccin`
--
ALTER TABLE `vaccin`
  ADD PRIMARY KEY (`idVaccin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoptant`
--
ALTER TABLE `adoptant`
  ADD CONSTRAINT `idSexeH` FOREIGN KEY (`sexe`) REFERENCES `sexehumain` (`sexeHum`);

--
-- Constraints for table `chien`
--
ALTER TABLE `chien`
  ADD CONSTRAINT `idMordeur` FOREIGN KEY (`idMordeur`) REFERENCES `mordeur` (`idMordeur`),
  ADD CONSTRAINT `idSexe` FOREIGN KEY (`idSexe`) REFERENCES `sexe` (`IdSexe`),
  ADD CONSTRAINT `idSterilisation` FOREIGN KEY (`idSterilisation`) REFERENCES `sterilisation` (`idSterilisation`),
  ADD CONSTRAINT `idTarification` FOREIGN KEY (`idTarification`) REFERENCES `tarification` (`idTarification`);

--
-- Constraints for table `etredecouleur`
--
ALTER TABLE `etredecouleur`
  ADD CONSTRAINT `id` FOREIGN KEY (`idChien`) REFERENCES `chien` (`idChien`),
  ADD CONSTRAINT `idCouleur1` FOREIGN KEY (`idCouleur`) REFERENCES `couleur` (`idCouleur`);

--
-- Constraints for table `etremalade`
--
ALTER TABLE `etremalade`
  ADD CONSTRAINT `idChien` FOREIGN KEY (`idChien`) REFERENCES `chien` (`idChien`),
  ADD CONSTRAINT `idMaladie` FOREIGN KEY (`idMaladie`) REFERENCES `maladie` (`idMaladie`);

--
-- Constraints for table `etreraces`
--
ALTER TABLE `etreraces`
  ADD CONSTRAINT `etatLegal` FOREIGN KEY (`Categorie`) REFERENCES `etatlegal` (`idCategorie`),
  ADD CONSTRAINT `etreDeRace` FOREIGN KEY (`idRace`) REFERENCES `races` (`idRace`),
  ADD CONSTRAINT `etrelof` FOREIGN KEY (`Lof`) REFERENCES `lof` (`idLof`),
  ADD CONSTRAINT `idChien1` FOREIGN KEY (`idChien`) REFERENCES `chien` (`idChien`);

--
-- Constraints for table `loger`
--
ALTER TABLE `loger`
  ADD CONSTRAINT `idChienLoger` FOREIGN KEY (`idChien`) REFERENCES `chien` (`idChien`),
  ADD CONSTRAINT `seLoger` FOREIGN KEY (`idBox`) REFERENCES `box` (`idBox`);

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `idSexe1` FOREIGN KEY (`idSexe`) REFERENCES `sexehumain` (`sexeHum`),
  ADD CONSTRAINT `leStatu` FOREIGN KEY (`idStatut`) REFERENCES `statut` (`idStatut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
