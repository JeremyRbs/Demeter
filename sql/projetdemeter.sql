-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 30 avr. 2021 à 09:52
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `projetdemeter`
--

-- --------------------------------------------------------

--
-- Structure de la table `COMMANDE`
--

CREATE TABLE `COMMANDE` (
  `NumCom` int(5) NOT NULL,
  `NomClient` char(25) COLLATE utf8_bin NOT NULL,
  `TelClient` char(12) COLLATE utf8_bin NOT NULL,
  `AdrClient` char(30) COLLATE utf8_bin DEFAULT NULL,
  `CP_Client` char(5) COLLATE utf8_bin NOT NULL,
  `VilClient` char(20) COLLATE utf8_bin DEFAULT NULL,
  `Date` date NOT NULL,
  `HeureDispo` time NOT NULL,
  `TypeEmbal` enum('carton','thermo') COLLATE utf8_bin NOT NULL DEFAULT 'carton',
  `A_Livrer` enum('O','N') COLLATE utf8_bin NOT NULL DEFAULT 'N',
  `EtatLivraison` char(1) COLLATE utf8_bin DEFAULT 'N',
  `CoutLiv` float(6,2) DEFAULT NULL,
  `IdLivreur` int(5) DEFAULT NULL,
  `DateArchiv` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `COM_DET`
--

CREATE TABLE `COM_DET` (
  `Num_OF` int(11) NOT NULL,
  `Quant` int(11) NOT NULL,
  `NumCom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `DETAIL`
--

CREATE TABLE `DETAIL` (
  `Num_OF` int(11) NOT NULL,
  `NomProd` char(30) COLLATE utf8_bin NOT NULL,
  `Taille` enum('S','M','L','XL') COLLATE utf8_bin DEFAULT 'M',
  `IngBase1` char(20) COLLATE utf8_bin NOT NULL,
  `IngBase2` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase3` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase4` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase5` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase6` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase7` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase8` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase9` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase10` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngOpt1` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngOpt2` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngOpt3` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngOpt4` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IdProd` int(11) NOT NULL,
  `DateArchiv` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `DET_INGR`
--

CREATE TABLE `DET_INGR` (
  `Num_OF` int(11) NOT NULL,
  `IdIngred` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `FOURNISSEUR`
--

CREATE TABLE `FOURNISSEUR` (
  `NomFourn` char(25) COLLATE utf8_bin NOT NULL,
  `Adresse` char(30) COLLATE utf8_bin NOT NULL,
  `CodePostal` char(5) COLLATE utf8_bin NOT NULL,
  `Ville` char(20) COLLATE utf8_bin NOT NULL,
  `Tel` char(12) COLLATE utf8_bin NOT NULL,
  `ParDefaut` enum('O','N') COLLATE utf8_bin NOT NULL DEFAULT 'N',
  `DateArchiv` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `FOURN_INGR`
--

CREATE TABLE `FOURN_INGR` (
  `NomFourn` char(25) COLLATE utf8_bin NOT NULL,
  `IdIngred` int(11) NOT NULL,
  `PrixUHT` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `INGREDIENT`
--

CREATE TABLE `INGREDIENT` (
  `IdIngred` int(11) NOT NULL,
  `NomIngred` char(30) COLLATE utf8_bin NOT NULL,
  `Frais` enum('O','N') COLLATE utf8_bin NOT NULL DEFAULT 'N',
  `Unite` char(10) COLLATE utf8_bin NOT NULL DEFAULT '"sans"',
  `StockMin` int(11) NOT NULL,
  `StockReel` float(6,2) NOT NULL,
  `PrixUHT_Moyen` float(5,2) NOT NULL,
  `Q_A_Com` int(11) NOT NULL,
  `DateArchiv` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `LIVREUR`
--

CREATE TABLE `LIVREUR` (
  `IdLivreur` int(11) NOT NULL,
  `Nom` char(20) COLLATE utf8_bin NOT NULL,
  `Prenom` char(20) COLLATE utf8_bin NOT NULL,
  `Tel` char(16) COLLATE utf8_bin NOT NULL,
  `NumSS` char(15) COLLATE utf8_bin NOT NULL,
  `DateArchiv` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `LIVREUR`
--

INSERT INTO `LIVREUR` (`IdLivreur`, `Nom`, `Prenom`, `Tel`, `NumSS`, `DateArchiv`) VALUES
(1, 'MEITE', 'Ben', '0698675465', '123456323456', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `PRODUIT`
--

CREATE TABLE `PRODUIT` (
  `IdProd` int(11) NOT NULL,
  `NomProd` char(20) COLLATE utf8_bin NOT NULL,
  `Taille` enum('S','M','L','XL') COLLATE utf8_bin DEFAULT 'M',
  `NbIngBase` int(11) DEFAULT NULL,
  `NbIngOpt` int(11) DEFAULT NULL,
  `PrixUHT` float(5,2) NOT NULL,
  `Image` char(50) COLLATE utf8_bin DEFAULT NULL,
  `IngBase1` char(20) COLLATE utf8_bin NOT NULL,
  `IngBase2` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase3` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase4` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase5` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase6` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase7` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase8` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase9` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngBase10` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngOpt1` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngOpt2` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngOpt3` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngOpt4` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngOpt5` char(20) COLLATE utf8_bin DEFAULT NULL,
  `IngOpt6` char(20) COLLATE utf8_bin DEFAULT NULL,
  `NbOptMax` int(11) DEFAULT NULL,
  `DateArchiv` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `PRODUIT`
--

INSERT INTO `PRODUIT` (`IdProd`, `NomProd`, `Taille`, `NbIngBase`, `NbIngOpt`, `PrixUHT`, `Image`, `IngBase1`, `IngBase2`, `IngBase3`, `IngBase4`, `IngBase5`, `IngBase6`, `IngBase7`, `IngBase8`, `IngBase9`, `IngBase10`, `IngOpt1`, `IngOpt2`, `IngOpt3`, `IngOpt4`, `IngOpt5`, `IngOpt6`, `NbOptMax`, `DateArchiv`) VALUES
(13, 'Tacos chèvre miel', 'S', 9, 1, 4.50, NULL, 'Galette', 'Escalope', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Fromage de chèvre', 'Miel', NULL, 'Miel', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(14, 'Tacos chèvre miel', 'M', 9, 1, 5.50, NULL, 'Galette', 'Escalope', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Fromage de chèvre', 'Miel', NULL, 'Miel', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(15, 'Tacos chèvre miel', 'L', 9, 1, 7.50, NULL, 'Galette', 'Escalope', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Fromage de chèvre', 'Miel', NULL, 'Miel', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(16, 'Tacos chèvre miel', 'XL', 9, 1, 10.50, NULL, 'Galette', 'Escalope', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Fromage de chèvre', 'Miel', NULL, 'Miel', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(17, 'Tacos chèvre miel', 'S', 9, NULL, 4.00, NULL, 'Galette', 'Escalope', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Fromage de chèvre', 'Miel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(18, 'Tacos chèvre miel', 'M', 9, NULL, 5.00, NULL, 'Galette', 'Escalope', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Fromage de chèvre', 'Miel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(19, 'Tacos chèvre miel', 'L', 9, NULL, 7.00, NULL, 'Galette', 'Escalope', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Fromage de chèvre', 'Miel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(20, 'Tacos chèvre miel', 'XL', 9, NULL, 10.00, NULL, 'Galette', 'Escalope', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Fromage de chèvre', 'Miel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(21, 'Tacos savoyard', 'S', 10, 1, 4.50, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Raclette', 'Crème', 'Lardons', 'Lardons', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(22, 'Tacos savoyard', 'M', 10, 1, 5.50, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Raclette', 'Crème', 'Lardons', 'Lardons', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(23, 'Tacos savoyard', 'L', 10, 1, 7.50, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Raclette', 'Crème', 'Lardons', 'Lardons', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(24, 'Tacos savoyard', 'XL', 10, 1, 10.50, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Raclette', 'Crème', 'Lardons', 'Lardons', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(25, 'Tacos savoyard', 'S', 10, NULL, 4.00, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Raclette', 'Crème', 'Lardons', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(26, 'Tacos savoyard', 'M', 10, NULL, 5.00, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Raclette', 'Crème', 'Lardons', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(27, 'Tacos savoyard', 'L', 10, NULL, 7.00, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Raclette', 'Crème', 'Lardons', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(28, 'Tacos savoyard', 'XL', 10, NULL, 10.00, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Raclette', 'Crème', 'Lardons', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(29, 'Tacos 3 fromages', 'S', 10, 1, 4.50, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Blue', 'Cheddar', 'Emmental', 'Cheddar', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(30, 'Tacos 3 fromages', 'M', 10, 1, 5.50, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Blue', 'Cheddar', 'Emmental', 'Cheddar', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(31, 'Tacos 3 fromages', 'L', 10, 1, 7.50, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Blue', 'Cheddar', 'Emmental', 'Cheddar', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(32, 'Tacos 3 fromages', 'XL', 10, 1, 10.50, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Blue', 'Cheddar', 'Emmental', 'Cheddar', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(33, 'Tacos 3 fromages', 'S', 10, NULL, 4.00, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Blue', 'Cheddar', 'Emmental', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(34, 'Tacos 3 fromages', 'M', 10, NULL, 5.00, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Blue', 'Cheddar', 'Emmental', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(35, 'Tacos 3 fromages', 'L', 10, NULL, 7.00, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Blue', 'Cheddar', 'Emmental', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(36, 'Tacos 3 fromages', 'XL', 10, NULL, 10.00, NULL, 'Galette', 'Viande hachée', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Blue', 'Cheddar', 'Emmental', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(37, 'Tacos black forest', 'S', 9, 1, 4.50, NULL, 'Galette', 'Merguez', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Sauce barbecue', 'Poivrons', NULL, 'Champignons', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(38, 'Tacos black forest', 'M', 9, 1, 5.50, NULL, 'Galette', 'Merguez', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Sauce barbecue', 'Poivrons', NULL, 'Champignons', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(39, 'Tacos black forest', 'L', 9, 1, 7.50, NULL, 'Galette', 'Merguez', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Sauce barbecue', 'Poivrons', NULL, 'Champignons', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(40, 'Tacos black forest', 'XL', 9, 1, 10.50, NULL, 'Galette', 'Merguez', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Sauce barbecue', 'Poivrons', NULL, 'Champignons', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(41, 'Tacos black forest', 'S', 9, NULL, 4.00, NULL, 'Galette', 'Merguez', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Sauce barbecue', 'Poivrons', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(42, 'Tacos black forest', 'M', 9, NULL, 5.00, NULL, 'Galette', 'Merguez', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Sauce barbecue', 'Poivrons', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(43, 'Tacos black forest', 'L', 9, NULL, 7.00, NULL, 'Galette', 'Merguez', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Sauce barbecue', 'Poivrons', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(44, 'Tacos black forest', 'XL', 9, NULL, 10.00, NULL, 'Galette', 'Merguez', 'Salade', 'Tomate', 'Oignon', 'Frites', 'Sauce fromagère', 'Sauce barbecue', 'Poivrons', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `PROD_INGR`
--

CREATE TABLE `PROD_INGR` (
  `IdIngred` int(11) NOT NULL,
  `IdProd` int(11) NOT NULL,
  `Quant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD PRIMARY KEY (`NumCom`),
  ADD UNIQUE KEY `ID_COMMANDE_IND` (`NumCom`),
  ADD KEY `FKLivre` (`IdLivreur`);

--
-- Index pour la table `COM_DET`
--
ALTER TABLE `COM_DET`
  ADD PRIMARY KEY (`Num_OF`),
  ADD UNIQUE KEY `FKCon_DET_IND` (`Num_OF`),
  ADD KEY `FKCon_COM` (`NumCom`);

--
-- Index pour la table `DETAIL`
--
ALTER TABLE `DETAIL`
  ADD PRIMARY KEY (`Num_OF`),
  ADD UNIQUE KEY `ID_DETAIL_IND` (`Num_OF`),
  ADD KEY `FKEstChoisi` (`IdProd`);

--
-- Index pour la table `DET_INGR`
--
ALTER TABLE `DET_INGR`
  ADD PRIMARY KEY (`IdIngred`,`Num_OF`),
  ADD UNIQUE KEY `ID_Utilise_IND` (`IdIngred`,`Num_OF`),
  ADD KEY `FKUti_DET` (`Num_OF`);

--
-- Index pour la table `FOURNISSEUR`
--
ALTER TABLE `FOURNISSEUR`
  ADD PRIMARY KEY (`NomFourn`),
  ADD UNIQUE KEY `ID_FOURNISSEUR_IND` (`NomFourn`);

--
-- Index pour la table `FOURN_INGR`
--
ALTER TABLE `FOURN_INGR`
  ADD PRIMARY KEY (`NomFourn`,`IdIngred`),
  ADD UNIQUE KEY `ID_Provient_IND` (`NomFourn`,`IdIngred`),
  ADD KEY `FKPro_ING` (`IdIngred`);

--
-- Index pour la table `INGREDIENT`
--
ALTER TABLE `INGREDIENT`
  ADD PRIMARY KEY (`IdIngred`),
  ADD UNIQUE KEY `ID_INGREDIENT_IND` (`IdIngred`);

--
-- Index pour la table `LIVREUR`
--
ALTER TABLE `LIVREUR`
  ADD PRIMARY KEY (`IdLivreur`),
  ADD UNIQUE KEY `ID_LIVREUR_IND` (`IdLivreur`);

--
-- Index pour la table `PRODUIT`
--
ALTER TABLE `PRODUIT`
  ADD PRIMARY KEY (`IdProd`),
  ADD UNIQUE KEY `ID_PRODUIT_IND` (`IdProd`);

--
-- Index pour la table `PROD_INGR`
--
ALTER TABLE `PROD_INGR`
  ADD PRIMARY KEY (`IdIngred`,`IdProd`),
  ADD UNIQUE KEY `ID_Comporte_IND` (`IdIngred`,`IdProd`),
  ADD KEY `FKCom_PRO` (`IdProd`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  MODIFY `NumCom` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `DETAIL`
--
ALTER TABLE `DETAIL`
  MODIFY `Num_OF` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `INGREDIENT`
--
ALTER TABLE `INGREDIENT`
  MODIFY `IdIngred` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `LIVREUR`
--
ALTER TABLE `LIVREUR`
  MODIFY `IdLivreur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `PRODUIT`
--
ALTER TABLE `PRODUIT`
  MODIFY `IdProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD CONSTRAINT `FKLivre` FOREIGN KEY (`IdLivreur`) REFERENCES `LIVREUR` (`IdLivreur`);

--
-- Contraintes pour la table `COM_DET`
--
ALTER TABLE `COM_DET`
  ADD CONSTRAINT `FKCon_COM` FOREIGN KEY (`NumCom`) REFERENCES `COMMANDE` (`NumCom`),
  ADD CONSTRAINT `FKCon_DET_FK` FOREIGN KEY (`Num_OF`) REFERENCES `DETAIL` (`Num_OF`);

--
-- Contraintes pour la table `DETAIL`
--
ALTER TABLE `DETAIL`
  ADD CONSTRAINT `FKEstChoisi` FOREIGN KEY (`IdProd`) REFERENCES `PRODUIT` (`IdProd`);

--
-- Contraintes pour la table `DET_INGR`
--
ALTER TABLE `DET_INGR`
  ADD CONSTRAINT `FKUti_DET` FOREIGN KEY (`Num_OF`) REFERENCES `DETAIL` (`Num_OF`),
  ADD CONSTRAINT `FKUti_ING` FOREIGN KEY (`IdIngred`) REFERENCES `INGREDIENT` (`IdIngred`);

--
-- Contraintes pour la table `FOURN_INGR`
--
ALTER TABLE `FOURN_INGR`
  ADD CONSTRAINT `FKPro_FOU` FOREIGN KEY (`NomFourn`) REFERENCES `FOURNISSEUR` (`NomFourn`),
  ADD CONSTRAINT `FKPro_ING` FOREIGN KEY (`IdIngred`) REFERENCES `INGREDIENT` (`IdIngred`);

--
-- Contraintes pour la table `PROD_INGR`
--
ALTER TABLE `PROD_INGR`
  ADD CONSTRAINT `FKCom_ING` FOREIGN KEY (`IdIngred`) REFERENCES `INGREDIENT` (`IdIngred`),
  ADD CONSTRAINT `FKCom_PRO` FOREIGN KEY (`IdProd`) REFERENCES `PRODUIT` (`IdProd`);
