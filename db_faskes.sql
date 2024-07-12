-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 03:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_faskes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faskes`
--

CREATE TABLE `faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_pengelola` varchar(45) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longtitude` double DEFAULT NULL,
  `jenis_faskes_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `kabkota_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faskes`
--

INSERT INTO `faskes` (`id`, `nama`, `nama_pengelola`, `alamat`, `website`, `email`, `rating`, `latitude`, `longtitude`, `jenis_faskes_id`, `kategori_id`, `kabkota_id`) VALUES
(1, 'RSUD bandung', 'Abraham', 'JL. Raya Bandung', 'www.rsudbandung.com', 'rsudbandung@gmail.com', 8, NULL, NULL, 1, 1, 1),
(2, 'Rumah Sakit Cipto Mangunkusumo (RSCM)', 'Budi', 'Jl. Pangeran Diponegoro No.71, Kenari, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta', 'www.rscm.com', 'rscm@gmail.com', 3, NULL, NULL, 1, 1, 2),
(3, 'Rumah Sakit Pondok Indah', 'Bambang', 'Jalan Metro Duta Kav. UE, Pd. Pinang, Kec. Kby. Lama, Daerah Khusus Ibukota Jakarta 12310', 'www.rspi.com', 'rspi@gmail.com', 4, NULL, NULL, 1, 2, 2),
(4, 'Rumah Sakit Fatmawati', 'Basuki', 'Jl. RS. Fatmawati Raya, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Ja', '', 'rsfatmawati@gmail.com', 3, -6.294464, 106.796452, 1, 1, 2),
(5, 'Rumah Sakit Umum Daerah (RSUD) Pasar Minggu', 'Eko', 'Jl. TB Simatupang No.1 1, RT.10/RW.5, Ragunan, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibuko', 'www.rsudpm.com', 'rsudpm@gmail.com', 4, NULL, NULL, 1, 3, 2),
(6, 'RSUD Khidmat Sehat Afiat (KiSA) Kota Depok', 'Aisyah', 'Jl. Raya Muchtar No.99, Sawangan Lama, Kec. Sawangan, Kota Depok, Jawa Barat 16511', 'www.kisa.com', 'kisa@gmail.com', 4, NULL, NULL, 1, 3, 3),
(7, 'Rumah Sakit Umum Daerah (RSUD) Cibinong', 'Hartono', 'Jl. KSR Dadi Kusmayadi No.27, Tengah, Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16914', 'www.rsudcibinong.com', 'rsudcibinong@gmail.com', 3, -6.3869491, 106.6921463, 1, 2, 4),
(8, 'Puskesmas Kramat Jati', 'Hery', 'Jl. Kerja Bakti No.1 2, RT.2/RW.10, Kramat Jati, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus', '', 'puskesmaskramat@gmail.com', 4, -6.208238, 106.838821, 2, 2, 2),
(9, 'Puskesmas Tanah Abang', 'Abi', 'Jl. Danau Toba No.1 Blok A, RT.20/RW.4, Bend. Hilir, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daer', 'www.puskestanahabang.com', 'puskestanah@gmail.com', 4, -6.206813, 106.808701, 2, 1, 2),
(10, 'Puskesmas Pasar Minggu', 'Hersa', 'Jl. Kebagusan Raya No.4, RT.4/RW.4, Kebagusan, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibuko', 'www.puskespm.com', 'puskespm@gmail.com', 4, -6.272909, 106.822999, 2, 2, 2),
(11, 'Puskesmas Pancoran Mas', 'Dani', 'Jl. Pemuda No.2, RT.002/RW.008, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431', '', 'Puskesmaspancoran@gmail.com', 3, -6.398756, 106.8062897, 2, 3, 3),
(12, 'Puskesmas Cimanggis', NULL, 'Jl. Raya Jakarta-Bogor No.km. 33, RT.005/RW.2, Curug, Kec. Cimanggis, Kota Depok, Jawa Barat 16453', NULL, 'PuskesCimanggis@gmail.com', 3, -6.386915, 106.867565, 2, 3, 3),
(13, 'Puskesmas Bogor Tengah', 'Tora', 'Jl. Telepon No.1, RT.002/RW.001, Pabaton, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16121', NULL, 'puskesbogort@gmail.com', 4, -6.592812, 106.79451, 2, 1, 4),
(14, 'Apotek K-24 jenderal sudirman bogor ', 'Joko', 'Jl. Jend. Sudirman No.22, RT.01/RW.04, Sempur, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 19169', 'www.apotek24.com', 'apotek24@gmail.com', 4, NULL, NULL, 3, 1, 4),
(15, 'Apotek Kimia Farma juanda bogor', 'Surya', 'Jl. Ir. H. Juanda No.30, RT.03/RW.02, Paledang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16122', 'www.kimiafarma.com', 'apotekkimia@gmail.com', 3, -6.600027, 106.794579, 3, 2, 4),
(16, 'Apotek Guardian giant pajajaran', 'Anto', '9RV5+9J2, Jl. Raya Pajajaran, RT.04/RW.11, Tegallega, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143', 'www.guardian.com', 'guardian@gmail.com', 5, -6.60668, 106.80892, 3, 1, 4),
(17, 'Apotek Century bogor', 'Santi', 'Bogor Indah Plaza Lt. Semi Basement - Lt. 1, RT.04/RW.09, Kedungbadak, Kec. Tanah Sereal, Kota Bogor', 'www.century.com', 'century@gmail.com', 5, -6.556289, 106.779633, 3, 1, 4),
(18, 'Apotek Roxy depok', 'Rony', 'Jl. Nusantara Raya No.76, Beji, Kecamatan Beji, Kota Depok, Jawa Barat 16421', 'www.roxy.com', 'roxy@gmail.com', 4, -6.384412, 106.81471, 3, 2, 3),
(19, 'Apotek Viva Generik margasatwa', 'Valen', 'Jl. Margasatwa No.1 4, RT.4/RW.3, Pd. Labu, Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibuko', 'www.viva.com', 'apotekviva@gmail.com', 4, -6.311073, 106.80352, 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_faskes`
--

CREATE TABLE `jenis_faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jenis_faskes`
--

INSERT INTO `jenis_faskes` (`id`, `nama`) VALUES
(3, 'Apotik'),
(2, 'Puskesmas'),
(1, 'Rumah Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kabkota`
--

CREATE TABLE `kabkota` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `latitude` double DEFAULT NULL,
  `longtitude` double DEFAULT NULL,
  `provinsi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kabkota`
--

INSERT INTO `kabkota` (`id`, `nama`, `latitude`, `longtitude`, `provinsi_id`) VALUES
(1, 'Bandung', NULL, NULL, 1),
(2, 'Jakarta', NULL, NULL, 2),
(3, 'Depok', NULL, NULL, 1),
(4, 'Bogor', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Tingkat 1'),
(2, 'Tingkat 2'),
(3, 'Tingkat 3');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `ibukota` varchar(45) NOT NULL,
  `latitude` double DEFAULT NULL,
  `longtitude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`, `ibukota`, `latitude`, `longtitude`) VALUES
(1, 'Jawa Barat', 'Bandung', NULL, NULL),
(2, 'Jakarta', 'Jakarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('csCuvUnHCc1kjPD9ijwFH4Hw3kbRpV1kxUInCqn7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXlHZ1RINGxmRFphTVBLVGs2WWJ4dTh2b2VTUk02Tkw5SUhnOFVxcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1720708186);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$12$CO8ppIu9JvAs5iZcXKr3.e298lEz4SD.OiHpXPbifH4YB29n27cRS', '6yDjPZu343WgTIFgLiWztMUCQUSax2HgxdQkwL2QtGvXYiwS4GYJ7lku3QPq', '2024-07-10 09:58:42', '2024-07-10 09:58:42'),
(2, 'user', 'user', 'user@gmail.com', NULL, '$2y$12$Qm2OvZKFD8nVkh4F/PCA1OGm5MF9woebnat0BMRguwOQ9yAy5/ntu', 'IPwkMBfZu62OYmgHncvVu2CAk6THANQYgzoJRv0ToglwEe6vsvkXy7yVzEj3', '2024-07-10 10:40:36', '2024-07-10 10:40:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`),
  ADD UNIQUE KEY `nama_pengelola_UNIQUE` (`nama_pengelola`),
  ADD UNIQUE KEY `alamat_UNIQUE` (`alamat`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_faskes_jenis_faskes` (`jenis_faskes_id`),
  ADD KEY `fk_faskes_kategori1` (`kategori_id`),
  ADD KEY `fk_faskes_kabkota1` (`kabkota_id`);

--
-- Indexes for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`),
  ADD KEY `fk_kabkota_provinsi1` (`provinsi_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`),
  ADD UNIQUE KEY `ibukota_UNIQUE` (`ibukota`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabkota`
--
ALTER TABLE `kabkota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faskes`
--
ALTER TABLE `faskes`
  ADD CONSTRAINT `fk_faskes_jenis_faskes` FOREIGN KEY (`jenis_faskes_id`) REFERENCES `jenis_faskes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_faskes_kabkota1` FOREIGN KEY (`kabkota_id`) REFERENCES `kabkota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_faskes_kategori1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD CONSTRAINT `fk_kabkota_provinsi1` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
