-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for catuang
/*CREATE DATABASE IF NOT EXISTS `id18266608_db_catuang` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
/*USE `id18266608_db_catuang`;*/

-- Dumping structure for table catuang.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table catuang.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table catuang.logs
CREATE TABLE IF NOT EXISTS `logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL,
  `transactions_id` int(10) unsigned DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `logs_users_id_index` (`users_id`),
  KEY `logs_transactions_id_index` (`transactions_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table catuang.logs: ~22 rows (approximately)
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` (`id`, `users_id`, `transactions_id`, `keterangan`, `type`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'Menambahkan transaksi', 'C', '2022-01-07 15:50:52', '2022-01-07 15:50:52'),
	(2, 2, 2, 'Menambahkan transaksi', 'C', '2022-01-07 15:50:59', '2022-01-07 15:50:59'),
	(3, 2, 3, 'Menambahkan transaksi', 'C', '2022-01-07 15:51:20', '2022-01-07 15:51:20'),
	(4, 2, 4, 'Menambahkan transaksi', 'C', '2022-01-07 15:53:02', '2022-01-07 15:53:02'),
	(5, 2, 4, 'Menghapus transaksi', 'D', '2022-01-07 16:00:31', '2022-01-07 16:00:31'),
	(6, 2, 4, 'Menghapus transaksi', 'D', '2022-01-07 16:04:45', '2022-01-07 16:04:45'),
	(7, 2, 2, 'Mengubah transaksi', 'U', '2022-01-07 19:12:38', '2022-01-07 19:12:38'),
	(8, 2, NULL, 'Memperbarui informasi akun', 'U', '2022-01-07 19:14:55', '2022-01-07 19:14:55'),
	(9, 2, NULL, 'Memperbarui informasi akun', 'U', '2022-01-07 19:15:28', '2022-01-07 19:15:28'),
	(10, 2, 5, 'Menambahkan transaksi', 'C', '2022-01-07 19:16:58', '2022-01-07 19:16:58'),
	(11, 2, 6, 'Menambahkan transaksi', 'C', '2022-01-07 19:17:24', '2022-01-07 19:17:24'),
	(12, 2, 7, 'Menambahkan transaksi', 'C', '2022-01-08 00:51:56', '2022-01-08 00:51:56'),
	(13, 2, 8, 'Menambahkan transaksi', 'C', '2022-01-10 13:36:50', '2022-01-10 13:36:50'),
	(14, 2, 9, 'Menambahkan transaksi', 'C', '2022-01-10 13:37:10', '2022-01-10 13:37:10'),
	(15, 2, NULL, 'Memperbarui informasi akun', 'U', '2022-01-10 20:42:54', '2022-01-10 20:42:54'),
	(16, 2, 10, 'Menambahkan transaksi', 'C', '2022-01-10 20:58:14', '2022-01-10 20:58:14'),
	(17, 2, 11, 'Menambahkan transaksi', 'C', '2022-01-10 20:58:51', '2022-01-10 20:58:51'),
	(18, 2, 11, 'Mengubah transaksi', 'U', '2022-01-10 20:59:19', '2022-01-10 20:59:19'),
	(19, 2, 10, 'Menghapus transaksi', 'D', '2022-01-10 20:59:47', '2022-01-10 20:59:47'),
	(20, 2, 12, 'Menambahkan transaksi', 'C', '2022-01-10 23:19:29', '2022-01-10 23:19:29'),
	(21, 2, 8, 'Mengubah transaksi', 'U', '2022-01-11 00:40:31', '2022-01-11 00:40:31'),
	(22, 2, 12, 'Menghapus transaksi', 'D', '2022-01-11 00:42:05', '2022-01-11 00:42:05');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;

-- Dumping structure for table catuang.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table catuang.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_01_05_093846_create_transactions_table', 1),
	(6, '2022_01_05_095836_create_logs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table catuang.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table catuang.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table catuang.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table catuang.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table catuang.transactions
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pemasukan` tinyint(1) NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_users_id_index` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table catuang.transactions: ~12 rows (approximately)
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` (`id`, `users_id`, `tanggal`, `keterangan`, `is_pemasukan`, `nominal`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 2, '2022-01-07', 'Modal awal', 1, 100000, '2022-01-07 15:50:52', '2022-01-07 15:50:52', NULL),
	(2, 2, '2022-01-07', 'Investor', 1, 750000, '2022-01-07 15:50:59', '2022-01-07 19:12:38', NULL),
	(3, 2, '2022-01-07', 'Stok awal', 0, 400000, '2022-01-07 15:51:20', '2022-01-07 15:51:20', NULL),
	(4, 2, '2022-01-07', 'test delete', 0, 50000, '2022-01-07 15:53:02', '2022-01-07 16:04:45', '2022-01-07 16:04:45'),
	(5, 2, '2022-01-07', 'Listrik', 0, 50000, '2022-01-07 19:16:58', '2022-01-07 19:16:58', NULL),
	(6, 2, '2022-01-07', 'Beli Kulkas', 0, 1000000, '2022-01-07 19:17:24', '2022-01-07 19:17:24', NULL),
	(7, 2, '2022-01-05', 'Dana sponsor', 1, 1000000, '2022-01-08 00:51:56', '2022-01-08 00:51:56', NULL),
	(8, 2, '2022-01-10', 'Harian', 1, 1000000, '2022-01-10 13:36:50', '2022-01-11 00:40:31', NULL),
	(9, 2, '2022-01-10', 'Harian', 0, 500000, '2022-01-10 13:37:10', '2022-01-10 13:37:10', NULL),
	(10, 2, '2022-01-10', 'Harian', 1, 200000, '2022-01-10 20:58:14', '2022-01-10 20:59:47', '2022-01-10 20:59:47'),
	(11, 2, '2022-01-10', 'Beli Gas', 0, 50000, '2022-01-10 20:58:51', '2022-01-10 20:59:19', NULL),
	(12, 2, '2022-01-10', 'Token Listrik', 0, 50000, '2022-01-10 23:19:29', '2022-01-11 00:42:05', '2022-01-11 00:42:05');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

-- Dumping structure for table catuang.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` int(11) NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table catuang.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nama_pemilik`, `nama_mitra`, `telepon`, `kota`, `kodepos`, `alamat`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Alam', 'Baso Aci Mojok', '08123456789', 'Bandung', 40130, 'Kopo', 'alam@example.test', NULL, '$2y$10$NMY5bLWFxO.3eFNxv2isbez0iFnehxuhZiWwu6/SB8P5.eonmCEI2', NULL, '2022-01-07 15:49:29', '2022-01-07 15:49:29'),
	(2, 'Alam', 'Baso Aci Mojok', '087777333645', 'Bandung', 40124, 'Depan ITENAS', 'fadilahmovie@gmail.com', NULL, '$2y$10$Y7ZNKOuEL7ldA8VhrsZvxeH8Rcv79YEXLB0g3b0dENTQR0N7EwKqS', 'ufLENSGX3qKclZLiR90IITAnYrIB2e9Oi7l9WrIZG3GbyKjJEAZa3fF3bYxd', '2022-01-07 15:50:21', '2022-01-10 20:42:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
