-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 29 Janvier 2015 à 15:52
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `moveevent_database`
--
CREATE DATABASE IF NOT EXISTS `movevent` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `movevent`;

-- --------------------------------------------------------

--
-- Structure de la table `couchsurfing`
--

CREATE TABLE IF NOT EXISTS `couchsurfing` (
  `id_couchsurfing` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `date` date NOT NULL,
  `nbplace` int(11) NOT NULL,
  PRIMARY KEY (`id_couchsurfing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `couchsurfing`
--

INSERT INTO `couchsurfing` (`id_couchsurfing`, `id_user`, `id_event`, `date`, `nbplace`) VALUES
(1, 1, 1, '2015-01-06', 2);

-- --------------------------------------------------------

--
-- Structure de la table `covoiturage`
--

CREATE TABLE IF NOT EXISTS `covoiturage` (
  `id_covoiturage` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `villedepart` varchar(16) NOT NULL,
  `villearrivee` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `prix` int(11) NOT NULL,
  `nbplace` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_covoiturage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `covoiturage`
--

INSERT INTO `covoiturage` (`id_covoiturage`, `id_event`, `id_user`, `villedepart`, `villearrivee`, `date`, `prix`, `nbplace`, `description`) VALUES
(1, 2, 5, 'nantes', 'paris', '2015-01-01', 25, 4, 'Je vous propose ce covoiturage depuis Nantes pour le festival Aborted, je peux venir vous chercher a Nantes et alentour de Paris'),
(2, 3, 1, 'nantes', 'strasbourg', '2015-04-10', 30, 4, ''),
(3, 3, 5, 'paris', 'strasbourg', '2015-04-10', 20, 4, '');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL,
  `theme` varchar(32) NOT NULL,
  `lieu` varchar(32) NOT NULL,
  `ville` varchar(16) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id_event`, `nom`, `theme`, `lieu`, `ville`, `datedebut`, `datefin`, `description`) VALUES
(1, 'Festival hip-op ', 'festival', 'Le Cinematographe', 'nantes', '2015-02-05', '2015-02-21', 'festival de hip hop annuel ayant'),
(2, 'Festival aborted', 'festival', 'zenith', 'paris', '2014-12-14', '2014-12-14', 'festival parisien de metal'),
(3, 'Festival Artefact', 'festival', 'zenith europe', 'strasbourg', '2015-04-08', '2015-04-26', 'Artefact est un festival de musique accueillant des artistes de tout horizon. Il se déroule au Zenith Europe et à la Laitier, à Strabourg.');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE IF NOT EXISTS `messagerie` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_origine` int(11) NOT NULL,
  `id_user_destination` int(11) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `messagerie`
--

INSERT INTO `messagerie` (`id_message`, `id_user_origine`, `id_user_destination`, `date`, `message`) VALUES
(1, 5, 1, '2015-01-14', 'Bonjour Etienne44,\r\n\r\nMoi même ainsi que ma compagne cherchons un hebergement à Nantes durant le Festival Hip Opsession 2015 en février prochain. Nous aimerions savoir si il était possible de passer la soirée du vendredi chez vous.\r\nEn attendant de vos nouvelles,\r\n\r\nArthur et Guenievre'),
(2, 2, 5, '2015-01-01', 'J''aimerais profiter de votre offre de covoiturage pour le trajet paris-strasbourg le 10 Avril.');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `id_info` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_info` (`id_info`,`id_service`),
  KEY `id_info_2` (`id_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `login`, `password`, `id_info`, `id_service`) VALUES
(1, 'etienne44', 'etienne44', 1, 1),
(2, 'manu75', 'manu75', 2, 2),
(3, 'sophie31', 'sophie31', 3, 3),
(4, 'pascale67', 'pascale67', 4, 4),
(5, 'arthur', 'arthur', 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurinfo`
--

CREATE TABLE IF NOT EXISTS `utilisateurinfo` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(16) NOT NULL,
  `nom` varchar(16) NOT NULL,
  `age` int(2) NOT NULL,
  `mail` varchar(32) NOT NULL,
  `adresse` varchar(64) NOT NULL,
  `ville` varchar(32) NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `utilisateurinfo`
--

INSERT INTO `utilisateurinfo` (`id_info`, `prenom`, `nom`, `age`, `mail`, `adresse`, `ville`) VALUES
(1, 'Etienne', 'Dupont', 25, 'etienne44@localhost.fr', '66 rue de la musique', 'nantes'),
(2, 'Manu', 'Durand', 30, 'manu75@localhost.fr', '12 rue des images', 'paris'),
(3, 'Sophie', 'Smith', 20, 'sophie31@localhost.fr ', '31 rue des vendanges', 'toulouse'),
(4, 'Pascale', 'Doe', 47, 'pascale67@localhost.fr', '47 rue de la choucroute', 'strasbourg'),
(5, 'arthur', 'leroi', 31, 'arthurleroi@localhost.fr', '12 rue de la table ronde', 'paris');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurservice`
--

CREATE TABLE IF NOT EXISTS `utilisateurservice` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `covoiture` tinyint(1) NOT NULL,
  `voiture` varchar(16) DEFAULT NULL,
  `modele` varchar(16) DEFAULT NULL,
  `type` varchar(16) DEFAULT NULL,
  `nbplace` int(2) DEFAULT NULL,
  `fumeur` tinyint(1) DEFAULT NULL,
  `animaux` tinyint(1) DEFAULT NULL,
  `bagages` tinyint(1) DEFAULT NULL,
  `heberge` tinyint(1) NOT NULL,
  `interet` varchar(64) DEFAULT NULL,
  `description` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `utilisateurservice`
--

INSERT INTO `utilisateurservice` (`id_service`, `covoiture`, `voiture`, `modele`, `type`, `nbplace`, `fumeur`, `animaux`, `bagages`, `heberge`, `interet`, `description`) VALUES
(1, 1, 'volkswagen', 'transporter', 'minibus', 6, 1, 1, 1, 1, 'guitare,batterie,metal', 'Je dispose d''un clic-clac dans mon salon.'),
(2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'dessin,musique,culture', 'Je dispose d''une chambre d''ami'),
(3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'photographie,ecologie,vegetarien', 'je dispose d''un matelas gonflable'),
(4, 1, 'peugeot', '407', 'berline', 4, 0, 0, 1, 1, 'peinture,psychologie,musique', 'je dispose de nombreuses chambre d''ami'),
(5, 1, 'renault', 'clio', 'citadine', 3, 1, 1, 1, 1, 'musique,chant,psychologie,culture', 'Je dispose d''un canapé');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
