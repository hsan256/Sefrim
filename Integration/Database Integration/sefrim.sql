-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 11:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sefrim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `MDP` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Nom`, `Prenom`, `Adresse`, `MDP`, `Image`) VALUES
(7, 'torkhani', 'yassine', 'mohamedyassine.torkhani@esprit.tn', 'Azerty18', 'images/yassine.png'),
(8, 'karoui', 'houaida', 'houaidafatma.karoui@esprit.tn', 'Houaida1', 'images/tunivision.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Id` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Date_a` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Id`, `Titre`, `Date_a`, `Description`, `Image`) VALUES
(4, 'promo', '2020-06-09 16:32:48', 'promotion exclusive', 'images/kiwis.jpg'),
(9, 'PROMOTION 1', '2020-06-11 17:34:01', 'zfjhzoef', 'images/bananes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`Id`, `Nom`, `Description`) VALUES
(5, 'fruit', 'azerty');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_adresse` text NOT NULL,
  `user_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Gouvernaurat` varchar(255) NOT NULL,
  `CodePostale` int(11) NOT NULL,
  `ModePaiment` varchar(255) NOT NULL,
  `ModeLivraison` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`id`, `Adresse`, `Ville`, `Gouvernaurat`, `CodePostale`, `ModePaiment`, `ModeLivraison`, `Prix`) VALUES
(1111, 'sbs', 'marsa', 'Ariana', 2026, 'A la Livraison<', 'A Domicile', 55);

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `Id` int(11) NOT NULL,
  `Id_Client` int(11) NOT NULL,
  `Date_c` date NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Id_Article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`Id`, `Id_Client`, `Date_c`, `Description`, `Id_Article`) VALUES
(40, 8, '2020-06-11', 'banane         (administrateur)', 9),
(41, 0, '2020-06-11', 'BIEN', 4),
(42, 8, '2020-06-11', 'ce produit est Ã  moins de 20%         (administrateur)', 4);

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fournisseur`
--

INSERT INTO `fournisseur` (`Id`, `Nom`, `Image`, `Link`) VALUES
(27, 'elixir', 'images/elixir.jpg', 'http://www.elixir.tn/notre-marche-bio/'),
(30, 'intigo', 'images/entigo.jpg', 'https://intigo.tn/'),
(31, 'biofield', 'images/biofield.png', 'https://www.bio-field.com/fr/'),
(32, 'aramex', 'images/aramex.png', 'https://www.aramex.com/tn/ar');

-- --------------------------------------------------------

--
-- Table structure for table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(11) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `CodePostale` int(11) NOT NULL,
  `DateLivraison` date NOT NULL,
  `Statut` varchar(255) NOT NULL,
  `ModeLivraison` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `NomLivreur` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `ModePaiment` varchar(255) NOT NULL,
  `Gouvernaurat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livraison`
--

INSERT INTO `livraison` (`id`, `Adresse`, `CodePostale`, `DateLivraison`, `Statut`, `ModeLivraison`, `Prix`, `NomLivreur`, `Ville`, `ModePaiment`, `Gouvernaurat`) VALUES
(147, 'sbs', 2026, '2020-06-20', 'passe', 'A Domicile', 888, 'karoui houaida', 'sidi bou said', 'A la Livraison<', 'Ariana');

-- --------------------------------------------------------

--
-- Table structure for table `livreur`
--

CREATE TABLE `livreur` (
  `Cin` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Etat` tinyint(1) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livreur`
--

INSERT INTO `livreur` (`Cin`, `Nom`, `Prenom`, `Age`, `Email`, `Telephone`, `Ville`, `Etat`, `Image`) VALUES
(12345678, 'torkhani', 'yassine', 20, 'houaidafatma.karoui@esprit.tn', 28099163, 'L\'Aouina', 0, 'images/yassine.png'),
(15014052, 'karoui', 'houaida', 20, 'houaidafatma.karoui@esprit.tn', 26234333, 'Sidi Bou Said ', 1, 'images/tunivision.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `Id` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Prix` double NOT NULL,
  `Quantite` double NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Statut` tinyint(1) NOT NULL,
  `tauxpromo` int(11) NOT NULL,
  `quantite_promo` int(11) NOT NULL,
  `oldpr` int(11) NOT NULL,
  `pub` int(11) NOT NULL,
  `img_pub` varchar(255) NOT NULL,
  `view_pub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`Id`, `Nom`, `Type`, `Prix`, `Quantite`, `Description`, `Image`, `Statut`, `tauxpromo`, `quantite_promo`, `oldpr`, `pub`, `img_pub`, `view_pub`) VALUES
(1234500057, 'bananee', 'fruit', 800, 0, 'Fruit', 'images/bananes.jpg', 0, 20, 5, 1000, 1, 'images/bananes.jpg', 54),
(1234500062, 'Kiwi', 'fruit', 54, 50, 'azerty', 'images/kiwis.jpg', 1, 0, 0, 0, 0, 'images/kiwis.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `Id` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `DateR` varchar(255) NOT NULL,
  `Heure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`Id`, `Titre`, `DateR`, `Heure`) VALUES
(1, 'azeretry', '05/06/2020', '19:00 pm'),
(2, 'promo', '06/24/2020', '13:00 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Article` (`Id_Article`);

--
-- Indexes for table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`Cin`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234500063;

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_article` FOREIGN KEY (`Id_Article`) REFERENCES `article` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
