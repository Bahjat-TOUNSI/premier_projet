-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 fév. 2022 à 13:56
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mystore`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(6, 'Phone', 'Notre gamme de téléphone'),
(7, 'Tablette', 'Notre gamme de tablette'),
(8, 'Tout en un', 'Nos PC tout en un');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `account_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `account_created`) VALUES
(1, 'Chuck', 'Noris', 'chuck@noris.me', '2022-02-10 14:51:33'),
(2, 'Charlize', 'Therone', 'charlize@therone.me', '2022-02-10 14:51:33'),
(3, 'Ryan', 'Gosling', 'ryan@gosling.me', '2022-02-10 14:51:33');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `number`, `date`, `description`) VALUES
(1, 1, 41896, '2022-02-10 15:11:40', NULL),
(2, 1, 78645, '2022-02-07 15:11:41', NULL),
(3, 2, 782354, '2022-02-08 15:12:48', NULL),
(4, 2, 47887, '2022-02-02 15:12:48', NULL),
(5, 2, 587634, '2022-02-10 15:11:40', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

--
-- Déchargement des données de la table `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(1, 1, 1),
(1, 3, 2),
(2, 7, 1),
(2, 6, 2),
(3, 1, 1),
(3, 6, 1),
(4, 3, 2),
(4, 7, 1),
(5, 1, 1),
(5, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `available` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `name`, `description`, `price`, `weight`, `quantity`, `image`, `available`) VALUES
(1, 6, 'Iphone', 'The phone of the future', '100.00', 1000, 10, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.mn104SisZzo0wVxVpTCqXgHaMf%26pid%3DApi&f=1', 1),
(3, 6, 'Samsung S20', 'Samsung phone', '10.00', 500, 1, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.qUEkzvgxjQC72s6JwSnGrwHaDt%26pid%3DApi&f=1', 1),
(4, 6, 'Pixel 6', 'Google phone', '10.00', 500, 1, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.rXTYSJscpHlWjlGxx8XJfgHaEK%26pid%3DApi&f=1', 0),
(5, 7, 'Ipad', 'The tablette of the future', '13.00', 500, 0, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.explicit.bing.net%2Fth%3Fid%3DOIP.kDFi-buDGSfDFv7VtljWwwHaHa%26pid%3DApi&f=1', 1),
(6, 7, 'Galaxy tab A7', 'Samsung tablette', '50.00', 1200, 2, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.hczV-GR7i_NxkhntsfjmwAHaHa%26pid%3DApi&f=1', 1),
(7, 8, 'Imac', 'The computer of the future', '500.00', 1200, 5, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.P3J1JExqbh_ozvjsdWIRkgHaHa%26pid%3DApi&f=1', 1),
(8, 6, 'Iphone-2', 'The phone of the future', '100.00', 1000, 10, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.mn104SisZzo0wVxVpTCqXgHaMf%26pid%3DApi&f=1', 1),
(9, 6, 'Samsung S20-2', 'Samsung phone', '10.00', 500, 1, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.qUEkzvgxjQC72s6JwSnGrwHaDt%26pid%3DApi&f=1', 1),
(10, 6, 'Pixel 6-2', 'Google phone', '10.00', 500, 1, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.rXTYSJscpHlWjlGxx8XJfgHaEK%26pid%3DApi&f=1', 0),
(11, 7, 'Ipad-2', 'The tablette of the future', '13.00', 500, 0, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.explicit.bing.net%2Fth%3Fid%3DOIP.kDFi-buDGSfDFv7VtljWwwHaHa%26pid%3DApi&f=1', 1),
(12, 7, 'Galaxy tab A7-2', 'Samsung tablette', '50.00', 1200, 2, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.hczV-GR7i_NxkhntsfjmwAHaHa%26pid%3DApi&f=1', 1),
(13, 8, 'Imac-2', 'The computer of the future', '500.00', 1200, 5, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.P3J1JExqbh_ozvjsdWIRkgHaHa%26pid%3DApi&f=1', 1),
(14, 8, 'Imac-3', 'The computer of the future', '500.00', 1200, 5, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.P3J1JExqbh_ozvjsdWIRkgHaHa%26pid%3DApi&f=1', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_id_idx` (`customer_id`);

--
-- Index pour la table `order_product`
--
ALTER TABLE `order_product`
  ADD KEY `product_id_idx` (`product_id`),
  ADD KEY `order_id_idx` (`order_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id_idx` (`categorie_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Contraintes pour la table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
