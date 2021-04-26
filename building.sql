-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 26 avr. 2021 à 11:54
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `building`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartement`
--

CREATE TABLE `appartement` (
  `idAppart` int(11) NOT NULL,
  `codeAppart` varchar(30) DEFAULT NULL,
  `superficieAppart` varchar(45) DEFAULT NULL,
  `nbPieces` varchar(45) DEFAULT NULL,
  `idEtageF` int(11) NOT NULL,
  `idContratF` int(11) NOT NULL,
  `idImF` int(11) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartement`
--

INSERT INTO `appartement` (`idAppart`, `codeAppart`, `superficieAppart`, `nbPieces`, `idEtageF`, `idContratF`, `idImF`, `etat`) VALUES
(2, 'Ap-001', '45', '3', 1, 1, 3, 1),
(3, 'Ap-002', NULL, '5', 1, 2, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contratbail`
--

CREATE TABLE `contratbail` (
  `idBail` int(11) NOT NULL,
  `numeroBail` varchar(255) DEFAULT NULL,
  `montantBail` varchar(255) DEFAULT NULL,
  `dateEffetBail` datetime DEFAULT current_timestamp(),
  `idLocF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contratbail`
--

INSERT INTO `contratbail` (`idBail`, `numeroBail`, `montantBail`, `dateEffetBail`, `idLocF`) VALUES
(1, NULL, '120000', '2020-07-19 19:25:41', 14),
(2, NULL, '120000', '2020-07-19 19:26:38', 15),
(3, NULL, '50000', '2020-07-19 20:04:11', 16),
(4, NULL, '150000', '2020-07-23 06:16:02', 17);

-- --------------------------------------------------------

--
-- Structure de la table `etage`
--

CREATE TABLE `etage` (
  `idEtage` int(11) NOT NULL,
  `numEtage` int(11) DEFAULT NULL,
  `nbAppart` int(11) DEFAULT NULL,
  `idImm` int(11) DEFAULT NULL,
  `idImF` int(11) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etage`
--

INSERT INTO `etage` (`idEtage`, `numEtage`, `nbAppart`, `idImm`, `idImF`, `etat`) VALUES
(1, 2, 3, 1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `idFac` int(11) NOT NULL,
  `dateEmissionFac` datetime DEFAULT NULL,
  `anneeFacturation` varchar(45) DEFAULT NULL,
  `moisFacturation` varchar(45) DEFAULT NULL,
  `idContrat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gardien`
--

CREATE TABLE `gardien` (
  `idGardien` int(11) NOT NULL,
  `nomGardien` varchar(45) DEFAULT NULL,
  `prenomGardien` varchar(45) DEFAULT NULL,
  `adresseGardien` varchar(45) DEFAULT NULL,
  `telGardien` varchar(45) DEFAULT NULL,
  `salaireGardien` varchar(45) DEFAULT NULL,
  `idImm` int(11) DEFAULT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gardien`
--

INSERT INTO `gardien` (`idGardien`, `nomGardien`, `prenomGardien`, `adresseGardien`, `telGardien`, `salaireGardien`, `idImm`, `etat`) VALUES
(1, 'Demba', 'Ndiaye', NULL, '77 555 88 22', '120000', 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `histocontrat`
--

CREATE TABLE `histocontrat` (
  `idHisto` int(11) NOT NULL,
  `dateResiliation` datetime DEFAULT NULL,
  `idContratBail` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `immeuble`
--

CREATE TABLE `immeuble` (
  `idIm` int(11) NOT NULL,
  `codeIm` varchar(45) DEFAULT NULL,
  `nomBat` varchar(100) DEFAULT NULL,
  `emplacement` varchar(250) NOT NULL,
  `nbEtage` int(11) DEFAULT NULL,
  `nbAppart` int(11) NOT NULL,
  `anneeCons` varchar(10) DEFAULT NULL,
  `idQartier` int(11) DEFAULT NULL,
  `etat` int(11) NOT NULL,
  `idPF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `immeuble`
--

INSERT INTO `immeuble` (`idIm`, `codeIm`, `nomBat`, `emplacement`, `nbEtage`, `nbAppart`, `anneeCons`, `idQartier`, `etat`, `idPF`) VALUES
(3, 'IM-PA-001', 'VILLLA PARCELLES ', 'PARCELLES ASSAINIES', 3, 10, '2009', NULL, 1, 1),
(4, 'IM-PA-002', 'ZONE 4', 'ABIDJAN', 2, 3, '2008', NULL, 1, 1),
(5, NULL, 'guy', 'knk', 1, 3, NULL, NULL, 1, 1),
(6, NULL, 'L6', 'Liberté', 2, 3, NULL, NULL, 1, 1),
(7, NULL, 'L6', 'LIBERTE', 3, 3, NULL, NULL, 1, 1),
(8, NULL, 'L6', 'LIBERTE', 1, 2, NULL, NULL, 1, 1),
(9, NULL, 'L9', 'LIBERTE 6 Camp Pénal', 1, 2, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `locataires`
--

CREATE TABLE `locataires` (
  `idLoc` int(11) NOT NULL,
  `nomLoc` varchar(200) NOT NULL,
  `prenomLoc` varchar(200) NOT NULL,
  `emailLoc` varchar(200) DEFAULT NULL,
  `ageLoc` varchar(150) DEFAULT NULL,
  `phoneLoc` longtext DEFAULT NULL,
  `cniLoc` varchar(150) NOT NULL,
  `professionLoc` varchar(200) DEFAULT NULL,
  `dateArrLoc` datetime DEFAULT current_timestamp(),
  `dateDepLoc` datetime DEFAULT NULL,
  `etat` int(11) NOT NULL,
  `idUserF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `locataires`
--

INSERT INTO `locataires` (`idLoc`, `nomLoc`, `prenomLoc`, `emailLoc`, `ageLoc`, `phoneLoc`, `cniLoc`, `professionLoc`, `dateArrLoc`, `dateDepLoc`, `etat`, `idUserF`) VALUES
(1, 'NIANG 2', 'SAMSI 2', 'samm@ffff.com', NULL, '+221 77 8888 88 88', '0000 1111 1111 22222', 'Ingenieur', '2020-07-18 16:52:44', NULL, 1, 1),
(2, 'NIANG', 'SAMSI', 'samm@ffff.com', NULL, '+221 77 192 65 94', '789465', 'Developpeur Web 2', '2020-07-18 17:14:49', NULL, 1, 1),
(3, 'NIANG', 'DJIBRIL', 'Building21@gmail.com', NULL, '+221 77  064 25 21', '1111 2222 3333', 'Entrepreneur', '2020-07-19 17:46:59', NULL, 1, 1),
(4, 'BARRY', 'MOUSSA', 'barrymoussa564@gmail.com', NULL, '645321', '1111 2222 3333', NULL, '2020-07-19 17:48:45', NULL, 0, 1),
(5, 'kb', 'jkkn', 'lnkbklj', NULL, 'n,:;', '54', NULL, '2020-07-19 17:49:20', NULL, 0, 1),
(6, 'DIALLO', 'MARIO', 'samm@ffff.com', NULL, '4445454', '879465132', NULL, '2020-07-19 17:50:09', NULL, 0, 1),
(7, 'test', 'test', 'test5@gmail.com', NULL, '123', '123', 'test profession', '2020-07-19 17:53:59', NULL, 0, 1),
(8, 'td', 'Test', 'samm@ffff.com', NULL, '+221775632897', 'NEANT', 'hvjhvk', '2020-07-19 18:10:13', NULL, 0, 1),
(9, 'Test', 'test', 'admin', NULL, '+221771926594', 'NEANT', 'uytfxd', '2020-07-19 18:11:32', NULL, 0, 1),
(10, 'LY am', 'BEBE SAMBA COUDY', 'barrymoussa564@gmail.com', NULL, '+221775632897', '1234 456 789', 'khyuftdyfghkj', '2020-07-19 19:17:14', NULL, 0, 1),
(11, 'CAISSE DE FAMILLE', 'ALASSANE GALLY', 'admin', NULL, '+221771926594', '1111 2222 3333', 'khbjgfydcghj', '2020-07-19 19:18:05', NULL, 0, 1),
(12, 'CAISSE DE FAMILLE', 'hjbvj', 'admin', NULL, '+221771926594', 'INCONNUEl', 'kjhgjchfgvhbkjn', '2020-07-19 19:22:25', NULL, 0, 1),
(13, 'CAISSE DE FAMILLE', 'MADANE Ly', 'admin', NULL, '+221775632897', '1111 2222 3333', 'gh', '2020-07-19 19:24:22', NULL, 0, 1),
(14, 'LY amadou', 'ALASSANE GALLY', 'samsiniang@gmail.com', NULL, '+221775632897', '1111 2222 3333', 'hgfhvh', '2020-07-19 19:25:41', NULL, 1, 1),
(15, 'CAISSE DE FAMILLE', 'NIANG', 'barrymoussa564@gmail.com', '80', '+221775632897', '1234 456 789', 'CODEUR ', '2020-07-19 19:26:38', NULL, 1, 1),
(16, 'NIANG', 'DAVID', 'samsiniang1@gmail.com', '50', '+22507784012', '1111 2222 3333', 'COMMERCANT', '2020-07-19 20:04:10', NULL, 1, 1),
(17, 'Niang_Test', 'Samsi', 'kaniste@gmail.com', '25', 'INCONNUE', '1111 2222 3333', 'DEVELOPPEUR', '2020-07-23 06:16:02', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `nomG` varchar(85) DEFAULT NULL,
  `prenomG` varchar(65) DEFAULT NULL,
  `adresseG` varchar(100) DEFAULT NULL,
  `telG` varchar(25) DEFAULT NULL,
  `idImm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `idProfil` int(11) NOT NULL,
  `nomProfil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`idProfil`, `nomProfil`) VALUES
(1, 'Administrateur'),
(2, 'Simple');

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `idP` int(11) NOT NULL,
  `nomP` varchar(45) DEFAULT NULL,
  `prenomP` varchar(45) DEFAULT NULL,
  `adresseP` varchar(75) DEFAULT NULL,
  `emailP` varchar(200) DEFAULT NULL,
  `phoneP` varchar(45) DEFAULT NULL,
  `cniP` varchar(75) DEFAULT NULL,
  `professionP` varchar(150) DEFAULT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proprietaire`
--

INSERT INTO `proprietaire` (`idP`, `nomP`, `prenomP`, `adresseP`, `emailP`, `phoneP`, `cniP`, `professionP`, `etat`) VALUES
(1, 'NIANG', 'ERWIN', 'DAKAR', 'barrymoussa564@gmail.com', '79845', 'NEANT', 'COMMERCANT', 1),
(2, 'NIANG', 'DJIBRIL', 'Parcelle Assainies', 'kaniste@gmail.com', '+221 77 064 25 21', '1234 4567 7890', 'ENTREPREUNEUR 2', 1),
(3, 'CAISSE DE FAMILLE', 'ALASSANE GALLY', 'POLEL DIAOUBE', 'admin', '+221775632897', '1234 456 789', 'zergtr', 0);

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `idQuartier` int(11) NOT NULL,
  `nomQuartier` varchar(45) DEFAULT NULL,
  `idVille` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE `reglement` (
  `idReglement` int(11) NOT NULL,
  `dateReglement` datetime DEFAULT NULL,
  `montantReglement` varchar(100) DEFAULT NULL,
  `idFac` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `siteData`
--

CREATE TABLE `siteData` (
  `IdSite` int(11) NOT NULL,
  `nomSite` varchar(255) DEFAULT NULL,
  `descriptionSite` text DEFAULT NULL,
  `modeSite` tinyint(1) DEFAULT NULL,
  `idUserF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `siteData`
--

INSERT INTO `siteData` (`IdSite`, `nomSite`, `descriptionSite`, `modeSite`, `idUserF`) VALUES
(1, 'Building21', 'Site de gestion de locataires', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `typeappart`
--

CREATE TABLE `typeappart` (
  `idTypeAppart` int(11) NOT NULL,
  `libType` varchar(45) DEFAULT NULL,
  `idAppart` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `username` varchar(150) NOT NULL,
  `idProfilF` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `login` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `imgProfil` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nom`, `prenom`, `username`, `idProfilF`, `phone`, `adresse`, `email`, `login`, `password`, `imgProfil`) VALUES
(1, 'Niang', 'Djibril', 'ril221', 1, '77 064 25 21', 'Parcelles Assainies', 'ril@gmail.com', 'admin', 'admin', 'IMG_20200731_094000.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idVille` int(11) NOT NULL,
  `nomVille` varchar(75) DEFAULT NULL,
  `villecol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartement`
--
ALTER TABLE `appartement`
  ADD PRIMARY KEY (`idAppart`),
  ADD KEY `idContrat` (`idContratF`),
  ADD KEY `idEtageF` (`idEtageF`),
  ADD KEY `idImF` (`idImF`);

--
-- Index pour la table `contratbail`
--
ALTER TABLE `contratbail`
  ADD PRIMARY KEY (`idBail`),
  ADD KEY `idLocF` (`idLocF`);

--
-- Index pour la table `etage`
--
ALTER TABLE `etage`
  ADD PRIMARY KEY (`idEtage`),
  ADD KEY `idImF` (`idImF`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`idFac`);

--
-- Index pour la table `gardien`
--
ALTER TABLE `gardien`
  ADD PRIMARY KEY (`idGardien`),
  ADD KEY `idImm` (`idImm`);

--
-- Index pour la table `histocontrat`
--
ALTER TABLE `histocontrat`
  ADD PRIMARY KEY (`idHisto`);

--
-- Index pour la table `immeuble`
--
ALTER TABLE `immeuble`
  ADD PRIMARY KEY (`idIm`),
  ADD KEY `idPF` (`idPF`);

--
-- Index pour la table `locataires`
--
ALTER TABLE `locataires`
  ADD PRIMARY KEY (`idLoc`),
  ADD KEY `idUserF` (`idUserF`);

--
-- Index pour la table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idProfil`);

--
-- Index pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD PRIMARY KEY (`idP`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`idQuartier`);

--
-- Index pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD PRIMARY KEY (`idReglement`);

--
-- Index pour la table `siteData`
--
ALTER TABLE `siteData`
  ADD PRIMARY KEY (`IdSite`),
  ADD KEY `idManager` (`idUserF`);

--
-- Index pour la table `typeappart`
--
ALTER TABLE `typeappart`
  ADD PRIMARY KEY (`idTypeAppart`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idProfilF` (`idProfilF`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`idVille`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartement`
--
ALTER TABLE `appartement`
  MODIFY `idAppart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contratbail`
--
ALTER TABLE `contratbail`
  MODIFY `idBail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etage`
--
ALTER TABLE `etage`
  MODIFY `idEtage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `gardien`
--
ALTER TABLE `gardien`
  MODIFY `idGardien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `histocontrat`
--
ALTER TABLE `histocontrat`
  MODIFY `idHisto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `immeuble`
--
ALTER TABLE `immeuble`
  MODIFY `idIm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `locataires`
--
ALTER TABLE `locataires`
  MODIFY `idLoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `idProfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `idQuartier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reglement`
--
ALTER TABLE `reglement`
  MODIFY `idReglement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `siteData`
--
ALTER TABLE `siteData`
  MODIFY `IdSite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `typeappart`
--
ALTER TABLE `typeappart`
  MODIFY `idTypeAppart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idVille` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartement`
--
ALTER TABLE `appartement`
  ADD CONSTRAINT `appartement_ibfk_1` FOREIGN KEY (`idContratF`) REFERENCES `contratbail` (`idBail`),
  ADD CONSTRAINT `appartement_ibfk_2` FOREIGN KEY (`idEtageF`) REFERENCES `etage` (`idEtage`),
  ADD CONSTRAINT `appartement_ibfk_3` FOREIGN KEY (`idImF`) REFERENCES `immeuble` (`idIm`);

--
-- Contraintes pour la table `contratbail`
--
ALTER TABLE `contratbail`
  ADD CONSTRAINT `contratbail_ibfk_1` FOREIGN KEY (`idLocF`) REFERENCES `locataires` (`idLoc`);

--
-- Contraintes pour la table `gardien`
--
ALTER TABLE `gardien`
  ADD CONSTRAINT `gardien_ibfk_1` FOREIGN KEY (`idImm`) REFERENCES `immeuble` (`idIm`);

--
-- Contraintes pour la table `immeuble`
--
ALTER TABLE `immeuble`
  ADD CONSTRAINT `immeuble_ibfk_1` FOREIGN KEY (`idPF`) REFERENCES `proprietaire` (`idP`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `profil-constr` FOREIGN KEY (`idProfilF`) REFERENCES `profil` (`idProfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
