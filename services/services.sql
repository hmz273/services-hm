-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 sep. 2021 à 15:59
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `services`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_06_100208_create_sessions_table', 1),
(7, '2021_09_08_080517_add_phone_to_users_table', 2),
(8, '2021_09_08_092526_create_services__categories_table', 3),
(9, '2021_09_13_112841_add_exp_to_users_table', 4),
(10, '2021_09_13_112931_add_ville_to_users_table', 5),
(11, '2021_09_14_104916_create_prvs_table', 6),
(12, '2021_09_15_113801_change_name_to_fname_in_prvs_table', 7),
(13, '2021_09_15_114729_change_name_to_fname_in_prvs_table', 8);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prvs`
--

CREATE TABLE `prvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `svr_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `prvs`
--

INSERT INTO `prvs` (`id`, `fname`, `ville`, `phone`, `exp`, `svr_id`, `created_at`, `updated_at`) VALUES
(1, 'ttttttttt', 'rrrrrrrrr', '111111111', '33333', 2, NULL, NULL),
(2, 'ttttttttt', 'rrrrrrrrr', '111111111', '33333', 2, NULL, NULL),
(9, 'soufiane fatih', 'marrakech', '+212695303296', '12 ans', 14, '2021-09-17 09:01:18', '2021-09-17 09:01:18');

-- --------------------------------------------------------

--
-- Structure de la table `services__categories`
--

CREATE TABLE `services__categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services__categories`
--

INSERT INTO `services__categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Plombier', 'ac', '1521969409.png', NULL, NULL),
(8, 'aaa flah', 'test', '1521969409.png', '2021-09-10 09:12:47', '2021-09-10 09:12:47'),
(14, 'marbre', 'azertyuiop', 'C:\\Users\\Youcode\\AppData\\Local\\Temp\\phpE8EC.tmp', '2021-09-15 11:30:07', '2021-09-15 11:30:07');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hQLIdeSX8UJukPbHSboeNFpCgMHTbF2wXLjYOBVK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRTNYcTg5bUFWUmtRZ3pZOUt3d0Z0Z29wQjFDWlZTY1pEdjVGOTRJRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1632232729),
('Vkl802CINQ9j7hPyWn3onW2pMGfgPf3gWs0X4l5B', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOW9LczdEMWcxNEZsV2FXUEJZa1ZaYVpGU3ZvU05tM3ZLU2ZVRUFRNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zZXJ2aWNlLWNhdGVnb3JpZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkb3A2R2VLd1ZoS3dKVjduT3FXWlU1Lld0Yk5KRXdMbS9ZeWVpOGlSL2FFUURqckxtNVBqdUMiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJG9wNkdlS3dWaEt3SlY3bk9xV1pVNS5XdGJOSkV3TG0vWXllaThpUi9hRVFEanJMbTVQanVDIjt9', 1632132403),
('Ys7ewbRWwacl9lTriAm2nM0Oy9G7ckoc5xYYF2AZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieWozSTJKNUdqTjJCaVU3Qnd2Mnl0c2I2eGZYM3g1VmNCWExoUnRDZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1632232022);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'CST',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`, `phone`, `exp`, `ville`) VALUES
(4, 'admin', 'admin@gmail.com', NULL, '$2y$10$op6GeKwVhKwJV7nOqWZU5.WtbNJEwLm/Yyei8iR/aEQDjrLm5PjuC', NULL, NULL, NULL, NULL, NULL, 'ADM', '2021-09-07 08:39:42', '2021-09-07 08:39:42', NULL, NULL, NULL),
(5, 'costumer', 'customer@gmail.com', NULL, '$2y$10$QCey.8oVN6/oXa5giz2tfO5nUepx2vuSeY.UCE6YyfJORmlPHJXKe', NULL, NULL, NULL, NULL, NULL, 'CST', '2021-09-07 08:40:24', '2021-09-07 08:40:24', NULL, NULL, NULL),
(6, 'Sprv', 'Sprv@gmail.com', NULL, '$2y$10$zSGBUSUqVF02S2gWUqtoTOSXVlCNAUAp7y8HBgkSE9VyzJ8QTx3oK', NULL, NULL, NULL, NULL, NULL, 'SVP', '2021-09-07 08:40:59', '2021-09-07 08:40:59', NULL, NULL, NULL),
(7, 'aaa flah', 'ac@gmail.com', NULL, '$2y$10$q1mGxZq1gb5uOpvuyZg7cuFYO38kwyPGu9EDfQBKnXM4WcnGw/RTK', NULL, NULL, NULL, NULL, NULL, 'CST', '2021-09-14 09:08:53', '2021-09-14 09:08:53', NULL, NULL, NULL),
(8, 'patient Lpatient', 'nn@gmail.com', NULL, '$2y$10$GLrMMoswNa.aiMqppWkm5.by8GTCbv5HYN7pOMBOSrfwzuzyDk3f2', NULL, NULL, NULL, NULL, NULL, 'CST', '2021-09-14 09:25:28', '2021-09-14 09:25:28', NULL, NULL, NULL),
(9, 'tetst', 'test@gmail.com', NULL, '$2y$10$pufZJBPV5jGbF3hmu.YyheYEXrCvXaAaOz4liOGebtRtogjgrCRXG', NULL, NULL, NULL, NULL, NULL, 'SVP', '2021-09-14 09:31:02', '2021-09-14 09:31:02', NULL, NULL, NULL),
(10, 'sf sf', 'abcd@gmail.com', NULL, '$2y$10$wN6Liykw6VXDMuq1ivR7jeukoutMHEpGGEcDnJQUXbH9oXZC2viIq', NULL, NULL, NULL, NULL, NULL, 'SVP', '2021-09-14 09:39:29', '2021-09-14 09:39:29', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `prvs`
--
ALTER TABLE `prvs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prvs_svr_id_foreign` (`svr_id`);

--
-- Index pour la table `services__categories`
--
ALTER TABLE `services__categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services__categories_slug_index` (`slug`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `prvs`
--
ALTER TABLE `prvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `services__categories`
--
ALTER TABLE `services__categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `prvs`
--
ALTER TABLE `prvs`
  ADD CONSTRAINT `prvs_svr_id_foreign` FOREIGN KEY (`svr_id`) REFERENCES `services__categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
