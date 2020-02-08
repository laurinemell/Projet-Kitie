-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2020 at 08:57 PM
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
  `etatLegal` int(1) NOT NULL,
  `description` varchar(23) DEFAULT NULL,
  `races` varchar(26) DEFAULT NULL,
  `obligations` varchar(109) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etatlegal`
--

INSERT INTO `etatlegal` (`etatLegal`, `description`, `races`, `obligations`) VALUES
(1, 'Chiens d\'attaque', 'Pitbull, Boerbull', 'permis de détention, identification, stérilisation, casier vierge, muselière, interdit dans les lieux publics'),
(2, 'Chiens de garde/défense', 'Am Staff, Tosa, Rottweiler', 'permis de détention, identification, stérilisation, casier vierge, muselière'),
(3, 'Autres chiens', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `etredecouleur`
--

CREATE TABLE `etredecouleur` (
  `idChien` int(10) NOT NULL,
  `idCouleur1` int(2) NOT NULL,
  `idCouleur2` int(2) NOT NULL,
  `idCouleur3` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `idVaccin` varchar(1) DEFAULT NULL,
  `dateVaccin` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `idChien` int(9) DEFAULT NULL,
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
-- Table structure for table `statu`
--

CREATE TABLE `statu` (
  `idStatut` int(1) NOT NULL,
  `Statut` varchar(8) DEFAULT NULL,
  `Lecture` int(1) DEFAULT NULL,
  `Modification` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statu`
--

INSERT INTO `statu` (`idStatut`, `Statut`, `Lecture`, `Modification`) VALUES
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
  `statut` int(1) DEFAULT NULL,
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
  ADD PRIMARY KEY (`etatLegal`);

--
-- Indexes for table `etredecouleur`
--
ALTER TABLE `etredecouleur`
  ADD KEY `id` (`idChien`),
  ADD KEY `idCouleur1` (`idCouleur1`),
  ADD KEY `idCouleur2` (`idCouleur2`),
  ADD KEY `idCouleur3` (`idCouleur3`);

--
-- Indexes for table `etremalade`
--
ALTER TABLE `etremalade`
  ADD KEY `idChien` (`idChien`),
  ADD KEY `idMaladie` (`idMaladie`);

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
-- Indexes for table `statu`
--
ALTER TABLE `statu`
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
  ADD KEY `idSexe1` (`idSexe`);

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
  ADD CONSTRAINT `idCouleur1` FOREIGN KEY (`idCouleur1`) REFERENCES `couleur` (`idCouleur`),
  ADD CONSTRAINT `idCouleur2` FOREIGN KEY (`idCouleur2`) REFERENCES `couleur` (`idCouleur`),
  ADD CONSTRAINT `idCouleur3` FOREIGN KEY (`idCouleur3`) REFERENCES `couleur` (`idCouleur`);

--
-- Constraints for table `etremalade`
--
ALTER TABLE `etremalade`
  ADD CONSTRAINT `idChien` FOREIGN KEY (`idChien`) REFERENCES `chien` (`idChien`),
  ADD CONSTRAINT `idMaladie` FOREIGN KEY (`idMaladie`) REFERENCES `maladie` (`idMaladie`);

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `idSexe1` FOREIGN KEY (`idSexe`) REFERENCES `sexehumain` (`sexeHum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
