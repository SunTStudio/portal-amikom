-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2024 pada 05.00
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal-amikom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customs`
--

CREATE TABLE `customs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `Nama_Link` varchar(255) NOT NULL,
  `Source_Link` varchar(255) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL,
  `id_kategori_link` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customs`
--

INSERT INTO `customs` (`id`, `id_pengguna`, `Nama_Link`, `Source_Link`, `Deskripsi`, `id_kategori_link`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chat GPT', 'https://chatgpt.com/', 'Merupakan Website AI untuk membantu mahasiswa.', 3, '2024-06-30 22:57:14', '2024-06-30 22:57:14'),
(2, 1, 'Dashboard MHS', 'https://auth.amikom.ac.id/mhs', 'Merupakan Website Mahasiswa Amikom yang digunakan untuk keperluan akademis Mahasiswa.', 3, '2024-06-30 22:57:14', '2024-06-30 22:57:14'),
(3, 1, 'Github', 'https://github.com/', 'Merupakan Website Kolaborasi tim untuk mengerjakan project programing bersama.', 3, '2024-06-30 22:57:14', '2024-06-30 22:57:14'),
(4, 1, 'Template Figma UI Form', 'https://www.figma.com/', 'Berikut Template UI Form yang menarik.', 3, '2024-06-30 22:57:14', '2024-06-30 22:57:14'),
(5, 2, 'AI POE', 'poe.com', 'AI kaya GPT', 4, '2024-06-30 22:58:20', '2024-06-30 22:58:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `default_links`
--

CREATE TABLE `default_links` (
  `Id_Default` bigint(20) UNSIGNED NOT NULL,
  `Nama_Link` varchar(255) NOT NULL,
  `Source_Link` varchar(255) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `default_links`
--

INSERT INTO `default_links` (`Id_Default`, `Nama_Link`, `Source_Link`, `Deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Mahasiswa Amikom Yogyakarta', 'https://auth.amikom.ac.id/mhs', 'Website informasi untuk mahasiswa seperti materi, krs, ujian, jadwal perkuliahan', '2024-06-30 22:57:43', '2024-06-30 22:57:43'),
(2, 'Waskita Amikom Yogyakarta', 'https://waskita.amikom.ac.id/', 'Website perkuliahan untuk tugas dan materi', '2024-06-30 22:57:43', '2024-06-30 22:57:43'),
(3, 'Universitas Amikom Yogyakarta', 'https://home.amikom.ac.id/', 'Website informasi mengenai Universitas AMIKOM Yogyakarta', '2024-06-30 22:57:43', '2024-06-30 22:57:43'),
(4, 'D3-Manajemen Informatika', 'https://mi.amikom.ac.id/', 'Website informasi mengenai Prodi Manajemen Informatika', '2024-06-30 22:57:43', '2024-06-30 22:57:43'),
(5, 'Ungu.In', 'https://app.ungu.in/', 'Produk website short url dari AMIKOM', '2024-06-30 22:57:43', '2024-06-30 22:57:43'),
(6, 'DAAK Amikom', 'https://daak.amikom.ac.id/', 'Website informasi mengenai perkuliahan di Universitas AMIKOM Yogyakarta', '2024-06-30 22:57:43', '2024-06-30 22:57:43'),
(7, 'Keuangan Amikom', 'https://keuangan.amikom.ac.id/', 'Website informasi mengenai pembayaran di Universitas AMIKOM Yogyakarta', '2024-06-30 22:57:43', '2024-06-30 22:57:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
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
-- Struktur dari tabel `job_batches`
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
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Jurnal', '2024-06-20 20:02:29', '2024-06-20 20:02:29'),
(2, 'Akademik', '2024-06-20 20:02:29', '2024-06-20 20:02:29'),
(3, 'Umum', '2024-06-20 20:02:29', '2024-06-20 20:02:29'),
(4, 'Custom', '2024-06-20 20:02:29', '2024-06-20 20:02:29'),
(5, 'Jurnal', '2024-06-30 22:57:34', '2024-06-30 22:57:34'),
(6, 'Akademik', '2024-06-30 22:57:34', '2024-06-30 22:57:34'),
(7, 'Umum', '2024-06-30 22:57:34', '2024-06-30 22:57:34'),
(8, 'Custom', '2024-06-30 22:57:34', '2024-06-30 22:57:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_31_030445_create_links_table', 1),
(5, '2024_06_03_021232_kategori', 1),
(6, '2024_06_03_032458_create_customs_table', 1),
(7, '2024_06_03_044131_create_public_links_table', 1),
(8, '2024_06_03_044145_create_default_links_table', 1),
(9, '2024_06_03_081004_add_column_id_pengguna_to_custom_links', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `nim` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `public_links`
--

CREATE TABLE `public_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna_link` bigint(20) UNSIGNED NOT NULL,
  `id_custom_link` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Ea7sUVwO64UzUcdiVWrFAbutgdyPTz9HzSiPcdKf', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRkI3NERJejNHSjhyVDV0TDhYcFJ3QnpCcVhjOU9hdzBVQWFEM3YxaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MzoibmltIjtpOjI7fQ==', 1719813503),
('haBcTQoSD4mRRPQsA4SyZ9O35j9UclcMZYThG7Lq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSU1XVGFpdVQxVVhuTGFUYXNnRGdzRTdJdkhYeWk4eVd3VUFBNXRFbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hdXRoL3JlZGlyZWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720148270),
('pavG9Os9Tko8AlyXXb7plcx5zCw5zQ3HfEHhdGPT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfdG9rZW4iO3M6NDA6Ik1BN0xLck95V1V2UTUwVDQ5TVcyNTFwUGhVOGlzaU1hNUF0S2hDREsiO30=', 1719887366);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `google_token` varchar(255) DEFAULT NULL,
  `google_refresh_token` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nim`, `email`, `password`, `google_token`, `google_refresh_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'miqbalnp@students.amikom.ac.id', '$2y$12$nV/fwlt0jkgBRjF4oreM8uLAeD9103WKc.aYIj5Kktp3DIdpqS69O', 'ya29.a0AXooCguFIwJ-P5kQR27YX8_QDc45L-MLgJsRR47ovRirUdpnjgVGvXlK4Ff_JS5E946BSqcyiZ-0vHGDGCPFkz1VpQFdUxR0jsCAqUEBxoyOZPwkOpHRbCSt93qbI_M-HJx24tjFgbmGAm98tG5VidMq00roTBVvg6iZaCgYKAVESARMSFQHGX2MiOpVINeTJ_XrBNxrSwgsEeg0171', NULL, NULL, '2024-06-30 22:53:54', '2024-06-30 22:53:54'),
(2, '22.02.0001', NULL, '$2y$12$QQyGTLRCAxgJ6FUUAMdoK.6qH2momO9NKBnf5Ij0Npt.BDddAu5sW', NULL, NULL, NULL, '2024-06-30 22:56:11', '2024-06-30 22:56:11'),
(3, '22.02.0002', NULL, '$2y$12$pwS5YCekcth8jKEc7v4yuO//SbTEOPK2IEMIkMsJCkteFoXKPXl6i', NULL, NULL, NULL, '2024-06-30 22:56:11', '2024-06-30 22:56:11'),
(4, '22.02.0003', NULL, '$2y$12$aO.73R5Hul51tLqy.yfAFuDgC/S4tmDfV3eqI.GDglvFJP.nlLoEO', NULL, NULL, NULL, '2024-06-30 22:56:11', '2024-06-30 22:56:11'),
(5, '22.02.0004', NULL, '$2y$12$s0oQEfozhuOP5V4I3sKtheuU5reKvqngysw7zj8bUpanCIShJ4sj2', NULL, NULL, NULL, '2024-06-30 22:56:11', '2024-06-30 22:56:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `customs`
--
ALTER TABLE `customs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customs_id_pengguna_foreign` (`id_pengguna`),
  ADD KEY `customs_id_kategori_link_foreign` (`id_kategori_link`);

--
-- Indeks untuk tabel `default_links`
--
ALTER TABLE `default_links`
  ADD PRIMARY KEY (`Id_Default`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `public_links`
--
ALTER TABLE `public_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `public_links_id_pengguna_link_foreign` (`id_pengguna_link`),
  ADD KEY `public_links_id_custom_link_foreign` (`id_custom_link`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customs`
--
ALTER TABLE `customs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `default_links`
--
ALTER TABLE `default_links`
  MODIFY `Id_Default` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `public_links`
--
ALTER TABLE `public_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `customs`
--
ALTER TABLE `customs`
  ADD CONSTRAINT `customs_id_kategori_link_foreign` FOREIGN KEY (`id_kategori_link`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customs_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `public_links`
--
ALTER TABLE `public_links`
  ADD CONSTRAINT `public_links_id_custom_link_foreign` FOREIGN KEY (`id_custom_link`) REFERENCES `customs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `public_links_id_pengguna_link_foreign` FOREIGN KEY (`id_pengguna_link`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
