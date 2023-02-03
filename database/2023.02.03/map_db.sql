-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2023 pada 03.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `map_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `kode_kategori_buku` int(11) NOT NULL,
  `kode_lemari_buku` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `nama_buku`, `kode_kategori_buku`, `kode_lemari_buku`, `file`, `created_at`, `updated_at`) VALUES
(1, 'BK_000001', 'Harry Potter', 1, 1, '', '2023-02-03 09:05:17', '2023-02-03 09:05:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_masuk`
--

CREATE TABLE `buku_masuk` (
  `id` int(11) NOT NULL,
  `kode_buku_masuk` varchar(10) NOT NULL,
  `kode_buku` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penanggung_jawab` int(11) NOT NULL COMMENT 'id pegawai',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_rusak_hilang`
--

CREATE TABLE `buku_rusak_hilang` (
  `id` int(11) NOT NULL,
  `kode_buku_rusak_hilang` varchar(10) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kode_buku` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku_rusak_hilang`
--

INSERT INTO `buku_rusak_hilang` (`id`, `kode_buku_rusak_hilang`, `tanggal`, `kode_buku`, `jumlah`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'BRH_000001', '2023-02-03 00:00:00', 1, 5, 1, 'Entah apa', '2023-02-03 09:06:39', '2023-02-03 09:06:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_buku`
--

INSERT INTO `kategori_buku` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Buku Baru', '2023-02-03 09:03:57', '2023-02-03 09:03:57'),
(2, 'Buku Lama', '2023-02-03 09:04:05', '2023-02-03 09:04:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_peta`
--

CREATE TABLE `kategori_peta` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_peta`
--

INSERT INTO `kategori_peta` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Peta Buta', '2023-02-02 16:54:54', '2023-02-02 16:54:54'),
(2, 'Peta Tuli', '2023-02-02 16:55:48', '2023-02-02 16:55:48'),
(3, 'Peta Bisu', '2023-02-02 16:55:53', '2023-02-02 16:55:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lemari`
--

CREATE TABLE `lemari` (
  `id` int(11) NOT NULL,
  `kode_lemari` varchar(10) NOT NULL,
  `nama_lemari` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lemari`
--

INSERT INTO `lemari` (`id`, `kode_lemari`, `nama_lemari`, `created_at`, `updated_at`) VALUES
(1, 'LM_000001', 'Lemari Satu', '2023-02-02 16:47:42', '2023-02-02 16:47:42'),
(2, 'LM_000002', 'Lemari Dua', '2023-02-02 16:48:01', '2023-02-02 16:48:01'),
(3, 'LM_000003', 'Lemari Tiga', '2023-02-02 16:48:06', '2023-02-02 16:48:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kode_pegawai` varchar(10) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `user_id`, `kode_pegawai`, `nama_pegawai`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 0, 'PG_000001', 'INSAN KAMIL', 'PROFESOR', '2023-02-02 16:06:37', '2023-02-02 16:06:37'),
(2, 0, 'PG_000002', 'BAHLUL', 'STAFF IT', '2023-02-02 16:13:03', '2023-02-02 16:13:03'),
(3, 0, 'PG_000003', 'PALUI', 'STAFF IT', '2023-02-02 16:13:12', '2023-02-02 16:13:12'),
(5, 0, 'PG_000004', 'MUNIR', 'STAFF KHUSUS', '2023-02-02 16:15:25', '2023-02-02 16:15:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peta`
--

CREATE TABLE `peta` (
  `id` int(11) NOT NULL,
  `kode_peta` varchar(10) NOT NULL,
  `nama_peta` varchar(100) NOT NULL,
  `kode_kategori_peta` int(11) NOT NULL,
  `kode_lemari_peta` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `link_peta` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peta`
--

INSERT INTO `peta` (`id`, `kode_peta`, `nama_peta`, `kode_kategori_peta`, `kode_lemari_peta`, `file`, `link_peta`, `created_at`, `updated_at`) VALUES
(1, 'PT_000001', 'Harta Karun', 1, 1, '', '', '2023-02-02 20:41:08', '2023-02-02 20:41:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peta_masuk`
--

CREATE TABLE `peta_masuk` (
  `id` int(11) NOT NULL,
  `kode_peta_masuk` varchar(10) NOT NULL,
  `kode_peta` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penanggung_jawab` int(11) NOT NULL COMMENT 'id pegawai',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peta_rusak_hilang`
--

CREATE TABLE `peta_rusak_hilang` (
  `id` int(11) NOT NULL,
  `kode_peta_rusak_hilang` varchar(10) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kode_peta` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_barang`
--

CREATE TABLE `status_barang` (
  `id` int(11) NOT NULL,
  `nama_status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `status_barang`
--

INSERT INTO `status_barang` (`id`, `nama_status`, `created_at`, `updated_at`) VALUES
(1, 'Rusak', '2023-02-02 21:36:57', '2023-02-02 21:36:57'),
(2, 'Hilang', '2023-02-02 21:36:57', '2023-02-02 21:36:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku_masuk`
--
ALTER TABLE `buku_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku_rusak_hilang`
--
ALTER TABLE `buku_rusak_hilang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_peta`
--
ALTER TABLE `kategori_peta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lemari`
--
ALTER TABLE `lemari`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peta_masuk`
--
ALTER TABLE `peta_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peta_rusak_hilang`
--
ALTER TABLE `peta_rusak_hilang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_barang`
--
ALTER TABLE `status_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `buku_masuk`
--
ALTER TABLE `buku_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `buku_rusak_hilang`
--
ALTER TABLE `buku_rusak_hilang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori_peta`
--
ALTER TABLE `kategori_peta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lemari`
--
ALTER TABLE `lemari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `peta`
--
ALTER TABLE `peta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `peta_masuk`
--
ALTER TABLE `peta_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peta_rusak_hilang`
--
ALTER TABLE `peta_rusak_hilang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_barang`
--
ALTER TABLE `status_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
