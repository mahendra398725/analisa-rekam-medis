-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2023 pada 17.41
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
-- Database: `rekamedis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_analisis`
--

CREATE TABLE `tb_analisis` (
  `id_analisis` int(11) UNSIGNED NOT NULL,
  `rm_id` int(11) UNSIGNED NOT NULL,
  `poli_id` int(11) UNSIGNED NOT NULL,
  `dokter_id` int(11) UNSIGNED NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `status_kelengkapan` enum('lengkap','tidak_lengkap') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_analisis`
--

INSERT INTO `tb_analisis` (`id_analisis`, `rm_id`, `poli_id`, `dokter_id`, `petugas`, `status_kelengkapan`, `tanggal`) VALUES
(9, 3004, 1, 1, 'USER', 'lengkap', '2023-06-04'),
(10, 3102, 1, 1, 'USER', 'tidak_lengkap', '2019-11-01'),
(11, 3101, 2, 1, 'USER', 'tidak_lengkap', '2023-06-04'),
(12, 3003, 4, 1, 'USER', 'lengkap', '2023-06-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(10) UNSIGNED NOT NULL,
  `kd_dokter` varchar(10) NOT NULL,
  `poli_id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `kd_dokter`, `poli_id`, `nip`, `nama_dokter`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `alamat`) VALUES
(1, 'DR0001', 1, 'DR-1234', 'ABCD', 'TRENGGALEK', '1999-10-01', 'LAKI-LAKI', '012345678912', 'Trenggalek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` int(10) UNSIGNED NOT NULL,
  `kd_poli` varchar(10) NOT NULL,
  `nama_poli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `kd_poli`, `nama_poli`) VALUES
(1, 'PL0001', 'POLI UMUM'),
(2, 'PL0002', 'POLI GIGI'),
(3, 'PL0003', 'POLI KIA'),
(4, 'PL0004', 'POLI KB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekam_medis`
--

CREATE TABLE `tb_rekam_medis` (
  `id_rm` int(11) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_rm` varchar(10) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `terapi` varchar(100) NOT NULL,
  `tensi` varchar(10) NOT NULL,
  `nadi` varchar(3) NOT NULL,
  `suhu` varchar(3) NOT NULL,
  `pernapasan` varchar(3) NOT NULL,
  `tinggi` varchar(3) NOT NULL,
  `berat` varchar(3) NOT NULL,
  `lingkar_perut` varchar(3) NOT NULL,
  `id_diagnosa` varchar(10) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_rekam_medis`
--

INSERT INTO `tb_rekam_medis` (`id_rm`, `nama`, `no_rm`, `no_bpjs`, `no_ktp`, `JK`, `tanggal_lahir`, `umur`, `alamat`, `pekerjaan`, `keluhan`, `terapi`, `tensi`, `nadi`, `suhu`, `pernapasan`, `tinggi`, `berat`, `lingkar_perut`, `id_diagnosa`, `diagnosa`, `tindakan`) VALUES
(3101, 'WIJI', '012172', '0001036815006', '', 'P', '1968-10-03', '53 ', '44696', 'Mengurus Rumah Tangga', 'tangan trasa panas', '', '120/80', '8', '36', '18', '16', '6', '8', 'R53', 'Malaise and fatigue', 'Pelayanan Rawat Jalan'),
(3102, 'SAMSIYAH', '012174', '0000664611129', '', 'P', '1968-07-05', '53 ', '44788', 'Mengurus Rumah Tangga', 'cek gula darah', '', '177/104', '8', '36', '18', '16', '7', '8', 'I10', 'Essential (primary) hypertension', 'Pelayanan Rawat Jalan'),
(3103, 'ALYA DWI NANDA', '012177', '0001369606601', '3603014901050001', 'P', '2005-01-09', '17 ', '44768', 'Pelajar / Mahasiswa', 'suket', '', '', '', '', '', '', '', '', 'Z00.0', 'General medical examination', 'Pelayanan Rawat Jalan'),
(3104, 'MISKIYEM', '011321', '0003104574175', '', 'P', '1971-02-01', '51 ', '44765', 'Mengurus Rumah Tangga', 'cek tensi', '', '220/130', '8', '36', '18', '16', '8', '8', 'I10', 'Essential (primary) hypertension', 'Pelayanan Rawat Jalan'),
(3105, 'DEVI YULIANINGSIH', '012171', '', '3503016312930003', 'P', '1993-12-23', '28 ', 'DUSUN KRAJAN, RT : 3,RW :2', 'Mengurus Rumah Tangga', 'cek hb', '', '126/70', '', '', '', '', '', '', 'K29', 'Gastritis and duodenitis', 'Pelayanan Rawat Jalan'),
(3106, 'FINA ROIUL AULIA', '012173', '', '', 'P', '2008-05-24', '13 ', '33/13', 'Pelajar / Mahasiswa', 'batuk berdahak', '', '120/80', '', '', '', '', '', '', 'J06', 'Acute upper respiratory infections of multiple and unspecified sites', 'Pelayanan Rawat Jalan'),
(3107, 'WULAN RAMADHANI', '002239', '', '', 'P', '2011-08-04', '10 ', '44563', 'Belum / Tidak Bekerja', 'batuk,pilek,panas', '', '110/70', '', '', '', '', '', '', 'J06', 'Acute upper respiratory infections of multiple and unspecified sites', 'Pelayanan Rawat Jalan'),
(3108, 'SONEM', '009657', '', '3503014712540001', 'P', '1954-12-07', '67 ', 'DUSUN PASUR, RT : 12,RW :3', 'Mengurus Rumah Tangga', 'keju linu', '', '', '', '', '', '', '', '', 'M06.0', 'Seronegative rheumatoid arthritis', 'Pelayanan Rawat Jalan'),
(3109, 'PARDAN RIANTO', '010632', '0000663023215', '', 'L', '1991-04-08', '30 ', '44564', 'Wiraswasta', 'kontrol odgj', '', '110/70', '8', '36', '18', '155', '6', '8', 'F20', 'Schizophrenia', 'Pelayanan Rawat Jalan'),
(3110, 'MULYONO', '001226', '0000106633539', '', 'L', '1942-12-30', '79 ', 'RT 07 RW 04', 'Pegawai Negeri Sipil', 'minta rujukan', '', '128/80', '8', '36', '18', '158', '6', '8', 'I63.9', 'Cerebral infarction, unspecified', 'Pelayanan Rawat Jalan'),
(3111, 'DWI LESTARI', '012180', '', '', 'P', '2001-01-15', '21 ', '44717', 'Wiraswasta', 'gatal', '', '', '', '', '', '', '', '', 'L20', 'Atopic dermatitis', 'Pelayanan Rawat Jalan'),
(3112, 'ISBATUL MUKAROMAH', '001382', '', '', 'P', '2006-01-09', '16 ', 'RT 26 RW 07', 'Pelajar / Mahasiswa', 'suket', '', '', '', '', '', '', '', '', 'Z00.0', 'General medical examination', 'Pelayanan Rawat Jalan'),
(3113, 'SUSALMAH', '004448', '0000664604897', '', 'P', '1972-03-04', '49 ', '44632', 'Mengurus Rumah Tangga', 'pusing', '', '170/100', '8', '36', '18', '16', '6', '8', 'I10', 'Essential (primary) hypertension', 'Pelayanan Rawat Jalan'),
(3114, 'BEJO', '011876', '', '', 'L', '1933-12-31', '88 ', 'DUSUN BLIMBING 12', 'Wiraswasta', 'aff kateter', '', '120/80', '8', '36', '18', '16', '6', '8', 'K29', 'Gastritis and duodenitis', 'Pelayanan Rawat Jalan'),
(3116, 'NAPSIYAH', '012194', '0000106683153', '', 'P', '1945-08-15', '76 ', 'BARANG', '0', 'Pusing', '', '180/111', '8', '36', '18', '16', '55', '8', 'I10', 'Essential (primary) hypertension', 'Pelayanan Rawat Jalan'),
(3117, 'NYAMIYO', '007264', '0002526802806', '3503012403830004', 'L', '1983-03-24', '38 ', 'DUSUN BELANGAN, RT : 8,RW :3', 'Petani/Pekebun', 'Pusing', '', '120/80', '8', '36', '18', '155', '6', '7', 'I10', 'Essential (primary) hypertension', 'Pelayanan Rawat Jalan'),
(3118, 'TUMINI', '008063', '0000663236987', '', 'P', '1973-10-05', '48 ', 'DUSUN PAKURAN, RT : 7,RW :4', 'Mengurus Rumah Tangga', 'pusing', '', '120/80', '8', '36', '18', '16', '6', '8', 'I10', 'Essential (primary) hypertension', 'Pelayanan Rawat Jalan'),
(3119, 'ENI CUNARA ISTIKA PUTRI', '012197', '0000664493488', '', 'P', '2000-02-17', '21 ', '44666', 'Mengurus Rumah Tangga', 'nyeri perut', '', '120/80', '8', '36', '18', '16', '7', '8', 'K29', 'Gastritis and duodenitis', 'Pelayanan Rawat Jalan'),
(3120, 'UMI ROHMAH', '012199', '0002014075719', '', 'P', '1988-08-21', '33 ', '44822', 'Wiraswasta', 'nyeri perut', '', '100/70', '8', '36', '18', '16', '69', '8', 'K29', 'Gastritis and duodenitis', 'Pelayanan Rawat Jalan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_role` int(11) UNSIGNED NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_roles`
--

INSERT INTO `tb_roles` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Rekam Medis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `kd_user` varchar(10) NOT NULL,
  `nama_users` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles` int(11) UNSIGNED NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `agama` enum('ISLAM','PROTESTAN','KATOLIK','HINDU','BUDDHA','KHONGHUCU') NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('verification','unverification') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `kd_user`, `nama_users`, `username`, `email`, `password`, `roles`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_ktp`, `no_telp`, `agama`, `alamat`, `status`) VALUES
(9, 'USR00001', 'ADMIN', 'ujiadmin', 'admin@mail.test', '25d55ad283aa400af464c76d713c07ad', 1, 'Trenggalek', '1991-01-01', 'L', '1234567891234567', '123456789123', 'ISLAM', 'Trenggalek', 'verification'),
(10, 'USR00002', 'USER', 'users', 'user@mail.test', '25d55ad283aa400af464c76d713c07ad', 2, 'TRENGGALEK', '2000-01-06', 'L', '123456', '123456', 'ISLAM', 'Trenggalek', 'unverification'),
(11, 'USR00003', 'TRIO MAHENDRA', 'ujiatasan', 'example1@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 'TRENGGALEK', '1998-07-25', 'L', '123456789', '123456789', 'ISLAM', 'Trenggalek', 'unverification');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_analisis`
--
ALTER TABLE `tb_analisis`
  ADD PRIMARY KEY (`id_analisis`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `poli_id` (`poli_id`);

--
-- Indeks untuk tabel `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indeks untuk tabel `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `roles` (`roles`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_analisis`
--
ALTER TABLE `tb_analisis`
  MODIFY `id_analisis` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `id_poli` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  MODIFY `id_rm` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3121;

--
-- AUTO_INCREMENT untuk tabel `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_role` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD CONSTRAINT `tb_dokter_ibfk_1` FOREIGN KEY (`poli_id`) REFERENCES `tb_poli` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `tb_users_ibfk_1` FOREIGN KEY (`roles`) REFERENCES `tb_roles` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
