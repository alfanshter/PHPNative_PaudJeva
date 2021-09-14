-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 12:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jeva`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(11) NOT NULL,
  `nik_absen` varchar(30) NOT NULL,
  `tanggal_absen` date NOT NULL,
  `kehadiran` varchar(20) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`) VALUES
(2, 'Ronaldo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ayah`
--

CREATE TABLE `tb_ayah` (
  `id_ayah` int(30) NOT NULL,
  `nama_ayah` varchar(30) DEFAULT NULL,
  `nik_ayah` int(50) DEFAULT NULL,
  `ttl_ayah` date DEFAULT NULL,
  `tempat_lahir_ayah` varchar(30) DEFAULT NULL,
  `pendidikan_terakhir_ayah` varchar(15) DEFAULT NULL,
  `pekerjaan_ayah` varchar(30) DEFAULT NULL,
  `status_ayah` varchar(15) DEFAULT NULL,
  `penghasilan_ayah` int(20) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ayah`
--

INSERT INTO `tb_ayah` (`id_ayah`, `nama_ayah`, `nik_ayah`, `ttl_ayah`, `tempat_lahir_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_ayah`, `status_ayah`, `penghasilan_ayah`, `reg_date`) VALUES
(20, 'saifudin', 2147483647, '1964-10-15', 'pasuruan', 's2', 'pns', 'Masih Hidup', 4000000, '2021-08-31 22:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `nama_lembaga` varchar(100) NOT NULL,
  `ttl_guru` date NOT NULL,
  `ktp_guru` int(50) NOT NULL,
  `tmt` varchar(50) NOT NULL,
  `tahun_kerja` int(10) NOT NULL,
  `bulan_kerja` int(10) NOT NULL,
  `status_guru` varchar(50) NOT NULL,
  `alamat_lembaga` varchar(100) NOT NULL,
  `alamat_rumah` varchar(100) NOT NULL,
  `pendidikan_guru` varchar(50) NOT NULL,
  `tempatlahir_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `nama_lembaga`, `ttl_guru`, `ktp_guru`, `tmt`, `tahun_kerja`, `bulan_kerja`, `status_guru`, `alamat_lembaga`, `alamat_rumah`, `pendidikan_guru`, `tempatlahir_guru`) VALUES
(34, 'Messi', 'PSG', '1998-02-20', 90, 'koi', 9, 9, 'i09', 'u', '97', '9', '90'),
(35, 'Ronaldo', 'PAUS', '1909-07-20', 980980980, '098', 9809, 809, '809', '809', '809', '8098', 'Jepang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibu`
--

CREATE TABLE `tb_ibu` (
  `id_ibu` int(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `nik_ibu` int(50) DEFAULT NULL,
  `ttl_ibu` datetime NOT NULL,
  `tempat_lahir_ibu` varchar(50) DEFAULT NULL,
  `pendidikan_terakhir_ibu` varchar(15) DEFAULT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `status_ibu` varchar(15) NOT NULL,
  `penghasilan_ibu` int(20) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ibu`
--

INSERT INTO `tb_ibu` (`id_ibu`, `nama_ibu`, `nik_ibu`, `ttl_ibu`, `tempat_lahir_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ibu`, `status_ibu`, `penghasilan_ibu`, `reg_date`) VALUES
(14, 'sofiyah', 2147483647, '1969-06-06 00:00:00', 'malang', 's1', 'petani', 'Masih Hidup', 9000000, '2021-08-31 22:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(10) NOT NULL,
  `waktu_jadwal` varchar(30) NOT NULL,
  `kegiatan_jadwal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `waktu_jadwal`, `kegiatan_jadwal`) VALUES
(3, '09:00 - 12:00', '- membaca\r\n- menari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `created_at`) VALUES
(8, 'Bermain', '2021-08-28 06:04:55'),
(9, 'Ikrar Bersama', '2021-08-28 06:06:25'),
(10, 'Senam Irama', '2021-08-28 06:06:25'),
(11, 'Bernyanyi', '2021-08-28 06:06:25'),
(12, 'Berdoa', '2021-08-28 06:06:25'),
(13, 'Pijakan Sebelum Bermain', '2021-08-28 06:06:25'),
(14, 'Pijakan Setelah Bermain', '2021-08-28 06:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuangan`
--

CREATE TABLE `tb_keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `nik_keuangan` varchar(30) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `jenis_tagihan` varchar(20) NOT NULL,
  `nominal` int(20) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(10) NOT NULL,
  `nik_siswa` varchar(30) NOT NULL,
  `bermain` int(3) DEFAULT NULL,
  `ikrar_bersama` int(3) DEFAULT NULL,
  `senam_irama` int(3) DEFAULT NULL,
  `bernyanyi` int(3) DEFAULT NULL,
  `berdoa` int(3) DEFAULT NULL,
  `pijakan_sebelum_bermain` int(3) DEFAULT NULL,
  `pijakan_setelah_bermain` int(3) DEFAULT NULL,
  `tanggal_nilai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(6) UNSIGNED NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `nik_ayah` int(30) DEFAULT NULL,
  `nik_ibu` int(30) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `jenis_tinggal` varchar(30) DEFAULT NULL,
  `alat_transportasi` varchar(30) DEFAULT NULL,
  `nomor_telepon` varchar(30) DEFAULT NULL,
  `status_dalam_keluarga` varchar(30) DEFAULT NULL,
  `penerima_kps` varchar(30) DEFAULT NULL,
  `no_kps` varchar(30) DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT 0,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `nik_ayah`, `nik_ibu`, `ttl`, `tempat_lahir`, `jk`, `nik`, `alamat`, `agama`, `jenis_tinggal`, `alat_transportasi`, `nomor_telepon`, `status_dalam_keluarga`, `penerima_kps`, `no_kps`, `status`, `reg_date`) VALUES
(49, 'Alfan', 2147483647, 2147483647, '1998-06-20', 'Malang', 'Laki-Laki', '1098230570812', 'pasuruan', 'islam', 'rumah', 'mobil', '098029823', 'anak', 'YA', '320893098', 1, '2021-08-31 22:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` int(5) NOT NULL DEFAULT 0,
  `kode_siswa` int(50) DEFAULT NULL,
  `kode_admin` int(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `kode_siswa`, `kode_admin`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 1, 0, 2, '2021-08-24 01:19:25', '2021-08-24 01:19:25'),
(92, '1098230570812', 'alfan123', 2, 2147483647, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  ADD PRIMARY KEY (`id_ayah`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `ayahsiswa` (`nik_ayah`),
  ADD KEY `ibusiswa` (`nik_ibu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  MODIFY `id_ayah` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  MODIFY `id_ibu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
