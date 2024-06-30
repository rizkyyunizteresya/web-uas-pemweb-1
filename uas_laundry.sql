-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2024 pada 06.03
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
-- Database: `uas_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapelanggan`
--

CREATE TABLE `datapelanggan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pesanan` varchar(255) DEFAULT NULL,
  `jenis_cucian` varchar(255) DEFAULT NULL,
  `kategori_cucian` varchar(255) DEFAULT NULL,
  `jumlah_cucian` varchar(255) DEFAULT NULL,
  `harga_cucian` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datapelanggan`
--

INSERT INTO `datapelanggan` (`id`, `kode_pesanan`, `jenis_cucian`, `kategori_cucian`, `jumlah_cucian`, `harga_cucian`, `created_at`, `updated_at`) VALUES
(27, 'KP001', 'Pakaian renang', 'cuci kering', '10', 50000, '2024-06-29 20:40:12', '2024-06-29 20:40:52'),
(28, 'KP002', 'Selimut', 'Cuci Basah', '5', 70000, '2024-06-29 20:40:12', '2024-06-29 20:40:12'),
(29, 'KP003', 'Gorden', 'Cuci Setrika', '3', 90000, '2024-06-29 20:40:12', '2024-06-29 20:40:12'),
(30, 'KP004', 'Pakaian', 'Cuci Lipat', '8', 60000, '2024-06-29 20:40:12', '2024-06-29 20:40:12'),
(31, 'KP005', 'Karpet', 'Cuci Basah', '2', 150000, '2024-06-29 20:40:12', '2024-06-29 20:40:12'),
(32, 'KP006', 'Pakaian', 'Cuci Setrika', '15', 75000, '2024-06-29 20:40:12', '2024-06-29 20:40:12'),
(33, 'KP007', 'Jas', 'Cuci Kering', '1', 100000, '2024-06-29 20:40:12', '2024-06-29 20:40:12'),
(34, 'KP008', 'Boneka', 'Cuci Basah', '4', 40000, '2024-06-29 20:40:12', '2024-06-29 20:40:12'),
(35, 'KP009', 'Gorden', 'Cuci Setrika', '6', 120000, '2024-06-29 20:40:12', '2024-06-29 20:40:12'),
(36, 'KP010', 'Pakaian', 'Cuci Lipat', '12', 72000, '2024-06-29 20:40:12', '2024-06-29 20:40:12');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_06_29_022006_create_datalaundry_table', 1),
(3, '2024_06_29_072358_create_user_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'rizki yt', 'yt3312626@gmail.com', '$2y$10$N0AvvjldSOJ37z/Y8QPI9.cP0YQQBl1wVw08378JZjGdblrQbE93y', 'Admin', '2024-06-29 20:16:27', '2024-06-29 20:16:27'),
(4, 'dorayaki', 'dorayaki@gmail.com', '$2y$10$PmOeWjX/NfMbeyO45ZPILO3TtQS9whIHW3fAXcNUuHY0qEmvQ6.em', 'User', '2024-06-29 20:21:34', '2024-06-29 20:21:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapelanggan`
--
ALTER TABLE `datapelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapelanggan`
--
ALTER TABLE `datapelanggan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
