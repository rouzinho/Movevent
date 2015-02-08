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
-- Base de données: `moveevent`
--
CREATE DATABASE IF NOT EXISTS `moveevent` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `moveevent`;


-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `first_name` varchar(16) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `age` int(2) NOT NULL,
  `mail` varchar(32) NOT NULL,
  `adress` varchar(64) NOT NULL,
  `city` varchar(32) NOT NULL,
  `carpool` tinyint(1) NOT NULL,
  `car` varchar(16) DEFAULT NULL,
  `model` varchar(16) DEFAULT NULL,
  `type` varchar(16) DEFAULT NULL,
  `num_place` int(2) DEFAULT NULL,
  `smoker` tinyint(1) DEFAULT NULL,
  `animal` tinyint(1) DEFAULT NULL,
  `baggage` tinyint(1) DEFAULT NULL,
  `lodge` tinyint(1) NOT NULL,
  `interest` varchar(64) DEFAULT NULL,
  `description` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `first_name`, `last_name`, `age`, `mail`, `adress`, `city`, `carpool`, `car`, `model`, `type`, `num_place`, `smoker`, `animal`, `baggage`, `lodge`, `interest`, `description`) VALUES
(1, 'etienne44', 'etienne44', 'Etienne', 'Dupont', 25, 'etienne44@localhost.fr', '66 rue de la musique', 'nantes', 1 , 'volkswagen', 'transporter', 'minibus', 6, 1, 1, 1, 1, 'guitare,batterie,metal', 'Je dispose d''un clic-clac dans mon salon.'),
(2, 'manu75', 'manu75', 'Manu', 'Durand', 30, 'manu75@localhost.fr', '12 rue des images', 'paris', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'dessin,musique,culture', 'Je dispose d''une chambre d''ami'),
(3, 'sophie31', 'sophie31', 'Sophie', 'Smith', 20, 'sophie31@localhost.fr ', '31 rue des vendanges', 'toulouse', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'photographie,ecologie,vegetarien', 'je dispose d''un matelas gonflable'),
(4, 'pascale67', 'pascale67', 'Pascale', 'Doe', 47, 'pascale67@localhost.fr', '47 rue de la choucroute', 'strasbourg', 1, 'peugeot', '407', 'berline', 4, 0, 0, 1, 1, 'peinture,psychologie,musique', 'je dispose de namebreuses chambre d''ami'),
(5, 'arthur', 'arthur', 'arthur', 'leroi', 31, 'arthurleroi@localhost.fr', '12 rue de la table ronde', 'paris', 1, 'renault', 'clio', 'citadine', 3, 1, 1, 1, 1, 'musique,chant,psychologie,culture', 'Je dispose d''un canapé');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `theme` varchar(32) NOT NULL,
  `place` varchar(32) NOT NULL,
  `city` varchar(16) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `name`, `theme`, `place`, `city`, `start_time`, `end_time`, `description`) VALUES
(1, 'Festival hip-op ', 'festival', 'Le Cinematographe', 'nantes', '2015-02-05', '2015-02-21', 'festival de hip hop annuel ayant'),
(2, 'Festival aborted', 'festival', 'zenith', 'paris', '2014-12-14', '2014-12-14', 'festival parisien de metal'),
(3, 'Festival Artefact', 'festival', 'zenith europe', 'strasbourg', '2015-04-08', '2015-04-26', 'Artefact est un festival de musique accueillant des artistes de tout horizon. Il se déroule au Zenith Europe et à la Laitier, à Strabourg.');

-- --------------------------------------------------------

--
-- Structure de la table `couchsurfing`
--

CREATE TABLE IF NOT EXISTS `couchsurfings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `num_place` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (event_id) REFERENCES events(id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `couchsurfing`
--

INSERT INTO `couchsurfings` (`id`, `user_id`, `event_id`, `date`, `num_place`) VALUES
(1, 1, 1, '2015-01-06', 2);

-- --------------------------------------------------------

--
-- Structure de la table `covoiturage`
--

CREATE TABLE IF NOT EXISTS `carpools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `departure_town` varchar(16) NOT NULL,
  `arrival_town` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `num_place` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (event_id) REFERENCES events(id),
  FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `covoiturage`
--

INSERT INTO `carpools` (`id`, `event_id`, `user_id`, `departure_town`, `arrival_town`, `date`, `price`, `num_place`, `description`) VALUES
(1, 2, 5, 'nantes', 'paris', '2015-01-01', 25, 4, 'Je vous propose ce covoiturage depuis Nantes pour le festival Aborted, je peux venir vous chercher a Nantes et alentour de Paris'),
(2, 3, 1, 'nantes', 'strasbourg', '2015-04-10', 30, 4, ''),
(3, 3, 5, 'paris', 'strasbourg', '2015-04-10', 20, 4, '');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `origin_user_id` int(11) NOT NULL,
  `destination_user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `post` text NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (origin_user_id) REFERENCES users(id),
  FOREIGN KEY (destination_user_id) REFERENCES users(id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `origin_user_id`, `destination_user_id`, `date`, `post`) VALUES
(1, 5, 1, '2015-01-14', 'Bonjour Etienne44,\r\n\r\nMoi même ainsi que ma compagne cherchons un lodgement à Nantes durant le Festival Hip Opsession 2015 en février prochain. Nous aimerions savoir si il était possible de passer la soirée du vendredi chez vous.\r\nEn attendant de vos nouvelles,\r\n\r\nArthur et Guenievre'),
(2, 2, 5, '2015-01-01', 'J''aimerais profiter de votre offre de covoiturage pour le trajet paris-strasbourg le 10 Avril.');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
