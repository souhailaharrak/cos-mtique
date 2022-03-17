-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 11 mars 2022 à 13:17
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_magasine`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `telephone` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `pass` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `adresse`, `telephone`, `email`, `pass`) VALUES
(2, 'fatima', 'zasd', 'tanger202rue', '0614867200', 'erersolicode@gmail.com', ' rtertrteri880'),
(3, 'TRTER', 'fgfgf', 'tanger202rue', '0614867200', 'DFDsolicode@gmail.com', ' Souhila20'),
(5, 'fatima', 'zasd', 'tanger202rue', '0613476850', 'solicoe@gmail.com', ' errezrz34'),
(6, 'TERTR', 'RTRTR', 'tanger202rue', '0613476850', 'eersolicode@gmail.com', ' TRYTYT53'),
(12, 'fatima', 'zasd', 'tanger202rue', '0613476844', 'solicoode@gmail.com', ' souhaila2001'),
(14, 'fatima', 'zasd', 'tanger202rue', '0613476889', 'souhailharrak@gmail.com', ' tryuruyuiuyry57450'),
(16, 'test', 'fgfg', 'ouarzazate2', '0613476880', 'erersolicode@gmail.com', ' souhaila'),
(17, 'test', 'zasd', 'ouarzazate22', '0613476844', 'sidiammi.solicode@gmail.com', ' tryuruyuiuyry57450'),
(18, 'fatima', 'fgfgf', 'ouarzazate22', '0613476880', 'jfdjfj@gmail.com', ' Souhila20'),
(19, 'fatima', 'fgfg', 'ouarzazate2', '0613476889', 'fdjfdjf@gmail.com', ' tryuruyuiuyry57450'),
(20, 'fatima', 'fgfg', 'tanger202rue', '0614867200', 'gjfkjgkfjkg@gmail.com', ' tryuruyuiuyry57450'),
(21, 'fatima', 'fgfgf', 'ouarzazate2', '0613476889', 'hoa.solicode@gmail.com', ' Souhaila2001'),
(22, 'test', 'salma', 'ouarzazate22', '0613476844', 'ttthouda.solicode@gmail.com', ' souhailahatrak20'),
(23, 'fatima', 'brfg', 'tanger202rue', '0613476850', 'row@djd.ll', ' souhailahatrak20'),
(24, 'test', 'salma', 'ouarzazate', '0613476889', 'sidiki.solicode@gmail.com', ' Souhaila2001'),
(25, 'SARA', 'fgfgf', 'ouarzazate22', '0613476844', 'LLLicode@gmail.com', ' Souhila20'),
(26, 'sara', 'salma', 'ouarzazate22', '0614867200', 'row@cdkjkf.kk', ' souhaila2001'),
(27, 'jdlkfldsf', 'brfg', 'tanger202rue', '0613476889', 'sdslicode@gmail.com', ' souhaila2001'),
(28, 'fatima', 'fgfg', 'ouarzazate22', '0613476844', 'LLLicode@gmail.com', ' Souhaila2001'),
(29, 'SARA', 'salma', 'ouarzazate22', '0613476889', 'row@cdkjkf.kk', ' Souhila20LO'),
(30, 'fatima', 'zasd', 'tanger202rue', '0613476889', 'sidiammisolicode@gmail.com', ' souhailahatrak2034'),
(31, 'fatima', 'zasd', 'ouarzazate', '0613476850', 'salma@gmail.com', ' salmasalma21'),
(32, 'fatima', 'zasd', 'tanger202rue', '0613476850', 'dalal@gmail.com', 'souhaila2001');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `adresseLivraison` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `detailscommande`
--

CREATE TABLE `detailscommande` (
  `idCommande` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `libelle` varchar(254) DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL,
  `prix` decimal(8,0) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `libelle`, `description`, `prix`, `stock`, `image`) VALUES
(230, 'Cleansing Toner', 'Moisturizing cleansing toner made from the drippings of eco-friendly chamomile and witch hazel.  The most deeply moisturizing cleanser and toner available, this product will leave you with a totally calm and collected complexion. This is just a demo stor', '45', 0, 'https://cdn.shopify.com/s/files/1/0305/4770/5995/products/wild-violet-01_590x.jpg?v=1579184203'),
(998, 'Baltic Birch Face Daily Mask ', 'We bring you truly natural, cruelty free skincare that provides results you can see and feel. We also believe skincare should smell and feel amazing and add enjoyment to your daily routine.', '30', 3, 'https://cdn.shopify.com/s/files/1/0305/4770/5995/products/love-mist-01_590x.jpg?v=1614685398'),
(1212, 'Bleeding Heart Perfume', 'We bring you truly natural, cruelty free skincare that provides results you can see and feel. We also believe skincare should smell and feel amazing and add enjoyment to your daily routine.', '45', 15, 'https://cdn.shopify.com/s/files/1/0305/4770/5995/products/bleeding-heart-01_590x.jpg?v=1579182319'),
(1542, 'Sugar Face Hydrating Mist', 'A shortcut to the way your skin looks after a full skincare routine—dewy, glowing, cared-for—in one long-wearing product\r\nNourishing oils (that don’t feel greasy) immediately give you a gleamy, well-moisturized look that lasts up to 12 hours', '20', 23, 'https://cdn.shopify.com/s/files/1/0305/4770/5995/products/sugar-face-01_590x.jpg?v=1614685878'),
(2051, 'Good Morning Moonflower Cleanser', 'We bring you truly natural, cruelty free skincare that provides results you can see and feel. We also believe skincare should smell and feel amazing and add enjoyment to your daily routine.', '30', 8, 'https://cdn.shopify.com/s/files/1/0305/4770/5995/products/goodmorning-moonflower-01_590x.jpg?v=1579182633'),
(4210, ' CONTOURING SERUM', ' Weightless water moisturizer made from the drippings of eco-friendly chia seed water.  The most deeply moisturizing water moisturizer available, this product will leave you feeling like a jellyfish dipped in peanut oil.  This is just a demo store to adv', '25', 0, 'https://cdn.shopify.com/s/files/1/0880/2126/products/pump-plastic-default_1100x.jpg?v=1625688721'),
(4442, 'Balance Serum', 'Moisturizing face serum made from the drippings of eco-friendly papaya rinds.  The most deeply moisturizing serum available, this product will leave you feeling like a jellyfish dipped in peanut oil.  This is just a demo store to advertise the Pipeline T', '45', 17, 'https://cdn.shopify.com/s/files/1/0880/2126/products/dropper-square-deafault_1100x.jpg?v=1625688827'),
(4851, 'Blue Water Botanical Serum', 'We bring you truly natural, cruelty free skincare that provides results you can see and feel. We also believe skincare should smell and feel amazing and add enjoyment to your daily routine.', '36', 7, 'https://cdn.shopify.com/s/files/1/0305/4770/5995/products/blue-water-serum-01_590x.jpg?v=1579181909'),
(4872, 'Brightening Essence', 'Natural essence that brightens and corrects for a radiant complexion. Prepares the skin for maximum absorption of treatments that follow. Corrects dullness, dark spots, or uneven skin tone. This product helps with various signs of skin sensitivities such', '45', 27, 'https://cdn.shopify.com/s/files/1/0880/2126/products/bath-default_1100x.jpg?v=1625688686'),
(5330, 'Bed of Roses Face Cream', 'We bring you truly natural, cruelty free skincare that provides results you can see and feel. We also believe skincare should smell and feel amazing and add enjoyment to your daily routine.', '45', 0, 'https://cdn.shopify.com/s/files/1/0305/4770/5995/products/bed-roses-01_590x.jpg?v=1579882367'),
(6211, 'Day After Dark Body Balm', 'We bring you truly natural, cruelty free skincare that provides results you can see and feel. We also believe skincare should smell and feel amazing and add enjoyment to your daily routine.', '12', 12, 'https://cdn.shopify.com/s/files/1/0305/4770/5995/products/day-after-dark-03_22af2d73-f96d-4edb-971c-65f6b7c8af42_590x.jpg?v=1580316333'),
(6492, 'Love in the Mist Perfume', 'This signature perfume oil, has now been delicately blended into a Eau de Parfum. Bloom’s unique scent and hard-to-find status has made it one of the most sought-after fragrances by those in the know.', '80', 8, 'https://cdn.shopify.com/s/files/1/0305/4770/5995/products/love-mist-01_590x.jpg?v=1614685398'),
(8122, 'Antioxidant Detox Serum', ' Oil-free detox serum absorbs quickly into the skin. Suggested for daily use to detoxify the skin of not only traditionally targeted oxygen free radicals and also ones caused by Carbon and Nitrogen. This product leaves the skin deeply detoxified and bett', '25', 15, 'https://cdn.shopify.com/s/files/1/0880/2126/products/black-oil-default_1100x.jpg?v=1625688647'),
(9330, 'Immunity Serum', 'Hydrating anti-aging face serum made from the drippings of eco-friendly Ayurvedic fruit.  The most deeply moisturizing serum available, this product absorbs easily to nourish the skin so it can fight outside aggressors.This is just a demo store to advert', '45', 20, 'https://cdn.shopify.com/s/files/1/0880/2126/products/amber-drop-default_1100x.jpg?v=1625688745'),
(9412, 'Recovery Serum', ' Weightless water moisturizer made from the drippings of eco-friendly chia seed water.  The most deeply moisturizing water moisturizer available, this product will leave you feeling like a jellyfish dipped in peanut oil.  This is just a demo store to adv', '35', 17, 'https://cdn.shopify.com/s/files/1/0880/2126/products/tall-bottle-default_1100x.jpg?v=1625688791'),
(9477, 'Hyaluronic Moisturizer', ' Weightless water moisturizer made from the drippings of eco-friendly chia seed water.  The most deeply moisturizing water moisturizer available, this product will leave you feeling like a jellyfish dipped in peanut oil.  This is just a demo store to adv', '35', 10, 'https://cdn.shopify.com/s/files/1/0880/2126/products/pump-default_1100x.jpg?v=1625688738');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD PRIMARY KEY (`idCommande`,`idProduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD CONSTRAINT `FK_association2` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
