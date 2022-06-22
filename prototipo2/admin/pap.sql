-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Maio-2022 às 20:47
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_accounts`
--

DROP TABLE IF EXISTS `admin_accounts`;
CREATE TABLE IF NOT EXISTS `admin_accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES
(10, 'rodrigo', '$2y$10$EW3lJQhda2Ondy754JJnbe2GRoc9SSKuSV32vL.b7MzUvu7g2X5Fm', 'IRbW8Z0iCcwMkS5a', '$2y$10$aTy8YARWwDkm36400q1CNOfqvsmbNFCotvE1CJyxNBb0Dpr6yzZee', '2022-06-25 14:47:57', 'super'),
(11, 'rocha', '$2y$10$cVdwUPq4Za3bIIqUVEc5zOyPi/MfIbXwA6hL6oLQGYk5iDrBdVZBW', NULL, NULL, NULL, 'admin'),
(12, 'joao', '$2y$10$n5nThZN9lW9es4FeaYsuFeN1JLv5kBcFhqcv9fPhB9G7DFqn43Iwe', NULL, NULL, NULL, 'super');

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_03_21_083316_create_videos_table', 1),
(2, '2022_03_21_084037_create_playlists_table', 1),
(3, '2022_03_21_084311_create_users_table', 1),
(4, '2022_03_21_084750_create_tags_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlists`
--

DROP TABLE IF EXISTS `playlists`;
CREATE TABLE IF NOT EXISTS `playlists` (
  `id` bigint UNSIGNED NOT NULL,
  `playlist-name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_video` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `playlists_fk_video_foreign` (`fk_video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` date NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int NOT NULL,
  `fk_playlist` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_fk_playlist_foreign` (`fk_playlist`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `dateofbirth`, `email`, `password`, `level`, `fk_playlist`, `created_at`, `updated_at`) VALUES
(0, 'rodrigo', 'wwdwd', '2003-01-25', 'rodrigo.rocha04@hotmail.com', 'efsfsefsesfes', 0, 0, '2022-05-26 14:50:25', NULL),
(1, 'wdwd', 'wdwddwdw', '2012-07-03', 'wwww2@gmail.com', 'wwdwddw', 1, 1, NULL, NULL),
(2, 'rocha2003', 'wwdwd', '2003-12-25', 'rochagamer771@gmail.com', '221', 0, 0, '2022-05-26 15:54:16', NULL),
(3, 'Rodrigo', 'Rodrigo Rocha Soares', '2003-03-25', 'rochagamer771@gmail.com', 'wdwdwwdwdwdwd', 1, 0, '2022-05-27 08:43:21', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `link`, `tags`, `created_at`, `updated_at`) VALUES
(0, 'dwdwdwwd', 'wddwdwdw', '12211221', '1212121212', '2022-05-25 13:06:48', '2022-05-25 13:55:33'),
(8, 'Treino 1', 'Este treino consiste na perda de peso', 'https://www.youtube.com/watch?v=BYSsJ55ZUV8', 'Perda de peso', '2022-05-25 13:02:25', NULL),
(9, 'Treino 2', 'O treino destina-se ao ganho de shape', 'Ganho de musculo', 'musculo, ganhar', '2022-05-25 13:03:45', NULL),
(10, 'Video musculação', 'Video onde se ganha músculo', 'https://www.youtube.com/watch?v=BYSsJ55ZUV8', 'musculo, ganhar', '2022-05-25 13:05:10', NULL),
(11, 'Video musculação', 'Video onde se ganha músculo', 'https://www.youtube.com/watch?v=BYSsJ55ZUV8', 'musculo, ganhar', '2022-05-25 13:06:23', NULL),
(12, 'wddw', 'wdwdwdwd', '1w121', 'dwdw2121', '2022-05-25 13:06:35', NULL),
(22, 'wd', 'wd', 'wd', 'wd', '2022-05-25 13:16:29', '2022-05-25 13:56:39'),
(23, 'wdwdw', 'www', 'wdwwwww', '211212211', '2022-05-27 08:48:14', NULL),
(25, 'anos', 'Meus anos', 'teste1', 'anos, rodrigo', '2022-05-25 13:15:10', NULL),
(27, 'wddw', '21121', '2dwda', 'dwwd', '2022-05-25 14:02:54', NULL),
(222, 'wwd', '212', '4554', 'dwd', '2022-05-25 14:10:11', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
