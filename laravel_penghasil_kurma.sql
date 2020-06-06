-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 09:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_penghasil_kurma`
--

-- --------------------------------------------------------

--
-- Table structure for table `kurmas`
--

CREATE TABLE `kurmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurmas`
--

INSERT INTO `kurmas` (`id`, `negara`, `img`, `deskripsi`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Mesir', '1589730568.jpg', '<p>Berdasarkan data tahun 2017, Mesir mampu menghasilkan 1.5 juta ton kurma setiap tahunnya dan menjadi negara penghasil kurma terbesar di dunia mengalahkan Iran dan Algeria yang berada di urutan nomor 2 dan 3. Pohon kurma membutuhkan wilayah seperti tanah lempung berpasir yang cukup dalam dan kering. Kualitas tanah juga sebaiknya berada di pH 8 – 11. Tanah juga tidak asal kering, namun harus mampu menahan kelembaban.Selain itu, tanah juga harus bebas dari kalsium karbonat. Seperti yang kita tahu, kualitas tanah seperti ini sangat cocok dengan kondisi tanah dan iklim di Mesir. Mesir memiliki 15 juta pohon kurma yang tersebar di seluruh penjuru wilayahnya.</p><p>Banyaknya kurma yang dihasilkan ternyata tidak lantas membuat negara Mesir mengekspor buah ini habis-habisan keluar negara. Tercatat dari tahun ke tahunnya, Mesir hanya mengekspor sekitar 3% dari total kurma yang dihasilkan. Hal ini tentu karena permintaan di dalam negara Mesir sendiri juga banyak dan harus dipenuhi. Angka ekspor ini terus menerus berkurang sejak tahun 1993. Mesir memang sengaja mengurangi ekspor kurmanya bahkan hingga 100% dari tahun 1993 tersebut.</p><p>Negara Mesir mengekspor 53% dari 3% kapasitas ekspornya ke Maroko, kemudian disusul 24% nya ke Indonesia dan Malaysia sekitar 15%. Nilai ekspor ini mencapai $41.8 juta.</p>', 'mesir', 1, '2020-05-17 07:49:28', '2020-05-17 07:49:28'),
(3, 'Iran', '1589767638.jpg', '<p>Menyusul Mesir dengan penghasilan 1.5 juta ton kurma setiap tahunnya, Iran mampu menghasilkan sekitar 1.1 juta ton kurma. Angka ini terus naik dari tahun ke tahun. Namun, ekspor kurma dari negara Iran ternyata lebih besar dibandingkan Mesir, meskipun masih terbilang kecil untuk total ekspor dunia. Iran mengekspor sekitar 7.7% dari total kurma yang dihasilkan ke berbagai negara. Paling banyak negara yang mengimpor kurma dari Iran adalah negara-negara di Asia. Negara pengimpor kurma dari Iran paling besar adalah India sebesar 16% dan Malaysia sekitar 11%. Rusia juga ternyata mengimpor kurma dari Iran sebesar 9.9%.</p>', 'iran', 1, '2020-05-17 18:07:18', '2020-05-17 18:07:18'),
(4, 'Algeria', '1589767942.png', '<p>Algeria merupakan negara yang terletak di Afrika Utara. Luas wilayahnya diperkirakan mencapai 2 juta km2. Algeria menjadi negara terbesar yang berada di urutan 10 di seluruh dunia dan terbesar nomor 1 di wilayah Arab. Banyak pohon-pohon kurma Algeria tumbuh di pegunungan-pegunungan menyusul dengan berbagai jenis flora lainnya. Mereka tumbuh di wilayah-wilayah yang cenderung punya iklim dan cuaca yang lebih hangat. Algeria mampu menghasilkan 1 juta ton kurma setiap tahunnya.</p>', 'algeria', 1, '2020-05-17 18:12:22', '2020-05-17 18:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_17_084734_create_kurmas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dandi', 'dandi@dandi.com', NULL, '$2y$10$2n3QEoAv03tW7ZBP.SqD.eKeaCYnY8DZYgbEKRYCQn6gyxfn8rpAm', 1, NULL, '2020-05-17 07:32:09', '2020-05-17 18:27:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurmas`
--
ALTER TABLE `kurmas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kurmas_negara_unique` (`negara`),
  ADD KEY `kurmas_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurmas`
--
ALTER TABLE `kurmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kurmas`
--
ALTER TABLE `kurmas`
  ADD CONSTRAINT `kurmas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
