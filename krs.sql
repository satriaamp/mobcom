-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 08:15 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krs`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_dosen`
--

CREATE TABLE `t_dosen` (
  `nidn` varchar(20) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dosen`
--

INSERT INTO `t_dosen` (`nidn`, `nama_dosen`) VALUES
('102831283124', 'Dr. Juli Rejitos'),
('83123891038', 'Dr. Atje Setiawan A, M.S');

-- --------------------------------------------------------

--
-- Table structure for table `t_krs`
--

CREATE TABLE `t_krs` (
  `npm` varchar(12) NOT NULL,
  `kd_matkul` varchar(20) NOT NULL,
  `nama_matkul` varchar(45) NOT NULL,
  `semester_diambil` int(1) NOT NULL,
  `sks` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_krs`
--

INSERT INTO `t_krs` (`npm`, `kd_matkul`, `nama_matkul`, `semester_diambil`, `sks`) VALUES
('140810140049', '81012-UNX10.040202', 'Kewarganegaraan', 4, 2),
('140810140049', '81012-D10C.04A0102', 'Fisika Dasar II', 4, 3),
('140810140049', '81012-D10F.04A0201', 'Statistika', 4, 3),
('140810140049', '81012-D10A.0400201', 'Kalkulus II', 4, 3),
('140810140049', '81012-D10K-6004', 'Teori Bahasa & Automata', 4, 3),
('140810140049', '81012-UNX10.040201', 'Bahasa Inggris II', 4, 2),
('140810140043', '81012-UNX10.040201', 'Bahasa Inggris II', 2, 2),
('140810140043', '81012-UNX10.040202', 'Kewarganegaraan', 2, 2),
('140810140043', '81012-D10C.04A0102', 'Fisika Dasar II', 2, 3),
('140810140043', '81012-D10F.04A0201', 'Statistika', 2, 3),
('140810140043', '81012-D10A.0400201', 'Kalkulus II', 2, 3),
('140810140043', '81012-D10K-2001', 'Struktur Data', 2, 3),
('140810140043', '81012-D10K-2002', 'Arsitektur & Organisasi Komputer', 2, 3),
('140810140043', '81012-UNX10.040401', 'Pancasila', 2, 2),
('140810140043', '81012-D10A.0400401', 'Operasional Riset', 2, 3),
('140810140007', '81012-D10K-6D01', 'Manajemen Jaringan', 4, 3),
('140810140007', '81012-D10K-6B02', 'Sistem Informasi Multimedia', 4, 3),
('140810140007', '81012-D10K-6B01', 'Database Terdistribusi', 4, 3),
('140810140007', '81012-D10K-6002', 'Interaksi Manusia & Komputer', 4, 3),
('140810140007', '81012-D10K-6001', 'Analisis Algoritma', 4, 3),
('140810140007', '81012-UNX10.040202', 'Kewarganegaraan', 8, 2),
('140810140007', '81012-D10C.04A0102', 'Fisika Dasar II', 8, 3),
('140810140007', '81012-D10F.04A0201', 'Statistika', 8, 3),
('140810140007', '81012-D10A.0400201', 'Kalkulus II', 8, 3),
('140810140007', '81012-D10K-5A01', 'Pemodelan dan Simulasi', 5, 3),
('140810140007', '81012-D10K-5B01', 'Decision Support Systems', 5, 3),
('140810140007', '81012-D10K-5B02', 'Kriptografi', 5, 3),
('140810140007', '81012-D10K-5C01', 'Grafika Komputer', 5, 3),
('140810140007', '140810_0090000_01', 'Kuliah Kerja Nyata (KKN)', 5, 3),
('140810140007', '81012-D10K-7001', 'Data Mining', 5, 3),
('140810140007', '81012-D10K-1001', 'Pengantar Teknologi Komputer & Informatika', 5, 3),
('140810140059', '81012-D10A.0400101', 'Kalkulus I', 7, 3),
('140810140059', '81012-D10C.04A0101', 'Fisika Dasar I', 7, 3),
('140810140059', '81012-D10K-1001', 'Pengantar Teknologi Komputer & Informatika', 7, 3),
('140810140059', '81012-D10K-1002', 'Logika Informatika', 7, 3),
('140810140059', '81012-D10K-1003', 'Algoritma & Pemrograman', 7, 3),
('140810140059', '81012-UNX10.040101', 'Agama', 7, 2),
('140810140061', '140810_0040801_01', 'Seminar', 7, 1),
('140810140061', '140810_0040802_01', 'Skripsi', 7, 6),
('140810140061', '81012-D10K-7001', 'Data Mining', 7, 3),
('140810140061', '81012-D10K-7002', 'Desain User Interface', 7, 3),
('140810140061', '81012-D10K-7B01', 'Kapita Selekta SIRPL', 7, 3),
('140810140061', '81012-D10K-7B02', 'Data Warehousing', 7, 3),
('140810140061', '81012-D10K-7D02', 'Mobile Computing', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_kurikulum`
--

CREATE TABLE `t_kurikulum` (
  `no` int(3) UNSIGNED NOT NULL,
  `kd_matkul` varchar(20) NOT NULL,
  `nama_matkul` varchar(45) NOT NULL,
  `semester` int(1) UNSIGNED NOT NULL,
  `sks` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_kurikulum`
--

INSERT INTO `t_kurikulum` (`no`, `kd_matkul`, `nama_matkul`, `semester`, `sks`) VALUES
(65, '140810_0040801_01', 'Seminar', 7, 1),
(66, '140810_0040802_01', 'Skripsi', 7, 6),
(41, '140810_0090000_01', 'Kuliah Kerja Nyata (KKN)', 5, 3),
(4, '81012-D10A.0400101', 'Kalkulus I', 1, 3),
(12, '81012-D10A.0400201', 'Kalkulus II', 2, 3),
(18, '81012-D10A.0400302', 'Aljabar Linier', 3, 3),
(19, '81012-D10A.0400303', 'Metode Numerik', 3, 3),
(20, '81012-D10A.0400304', 'Matematika Diskrit', 3, 3),
(23, '81012-D10A.0400401', 'Operasional Riset', 4, 3),
(24, '81012-D10A.0400403', 'Metodologi Penelitian', 4, 2),
(5, '81012-D10C.04A0101', 'Fisika Dasar I', 1, 3),
(10, '81012-D10C.04A0102', 'Fisika Dasar II', 2, 3),
(11, '81012-D10F.04A0201', 'Statistika', 2, 3),
(1, '81012-D10K-1001', 'Pengantar Teknologi Komputer & Informatika', 1, 3),
(2, '81012-D10K-1002', 'Logika Informatika', 1, 3),
(3, '81012-D10K-1003', 'Algoritma & Pemrograman', 1, 3),
(13, '81012-D10K-2001', 'Struktur Data', 2, 3),
(14, '81012-D10K-2002', 'Arsitektur & Organisasi Komputer', 2, 3),
(15, '81012-D10K-3001', 'Sistem Operasi', 3, 3),
(16, '81012-D10K-3002', 'Pemrograman Berorientasi Objek', 3, 3),
(17, '81012-D10K-3003', 'Pemrograman Web', 3, 3),
(25, '81012-D10K-4001', 'Artificial Intelligence', 4, 3),
(26, '81012-D10K-4002', 'Basis Data', 4, 3),
(27, '81012-D10K-4003', 'Jaringan Komputer', 4, 3),
(28, '81012-D10K-4004', 'Sistem Informasi', 4, 3),
(29, '81012-D10K-5001', 'Sistem Berkas', 5, 3),
(30, '81012-D10K-5002', 'Telematika', 5, 3),
(31, '81012-D10K-5003', 'Entrepreneurship', 5, 2),
(32, '81012-D10K-5004', 'Rekayasa Perangkat Lunak', 5, 3),
(33, '81012-D10K-5A01', 'Pemodelan dan Simulasi', 5, 3),
(34, '81012-D10K-5A02', 'Analisis Numerik', 5, 3),
(35, '81012-D10K-5B01', 'Decision Support Systems', 5, 3),
(36, '81012-D10K-5B02', 'Kriptografi', 5, 3),
(37, '81012-D10K-5C01', 'Grafika Komputer', 5, 3),
(38, '81012-D10K-5C02', 'Jaringan Syaraf Tiruan', 5, 3),
(39, '81012-D10K-5D01', 'Sistem Keamanan Jaringan', 5, 3),
(40, '81012-D10K-5D02', 'Sistem Terdistribusi', 5, 3),
(42, '81012-D10K-6001', 'Analisis Algoritma', 6, 3),
(43, '81012-D10K-6002', 'Interaksi Manusia & Komputer', 6, 3),
(44, '81012-D10K-6003', 'Etika Profesi', 6, 2),
(45, '81012-D10K-6004', 'Teori Bahasa & Automata', 6, 3),
(46, '81012-D10K-6A01', 'Bioinformatika', 6, 3),
(47, '81012-D10K-6A02', 'Optimization Problems', 6, 3),
(48, '81012-D10K-6B01', 'Database Terdistribusi', 6, 3),
(49, '81012-D10K-6B02', 'Sistem Informasi Multimedia', 6, 3),
(50, '81012-D10K-6C01', 'Pengolahan Citra', 6, 3),
(51, '81012-D10K-6C02', 'Fuzzy Logic', 6, 3),
(52, '81012-D10K-6D01', 'Manajemen Jaringan', 6, 3),
(53, '81012-D10K-6D02', 'Jaringan Komputer Lanjut', 6, 3),
(54, '81012-D10K-7001', 'Data Mining', 7, 3),
(55, '81012-D10K-7002', 'Desain User Interface', 7, 3),
(56, '81012-D10K-7003', 'Kecakapan Antar Personal', 7, 2),
(57, '81012-D10K-7A01', 'Kapita Selekta IKMN', 7, 3),
(58, '81012-D10K-7A02', 'High Performance Computing', 7, 3),
(59, '81012-D10K-7B01', 'Kapita Selekta SIRPL', 7, 3),
(60, '81012-D10K-7B02', 'Data Warehousing', 7, 3),
(61, '81012-D10K-7C01', 'Kapita Selekta SCSG', 7, 3),
(62, '81012-D10K-7C02', 'Visi Komputer', 7, 3),
(63, '81012-D10K-7D01', 'Kapita Selekta JKKD', 7, 3),
(64, '81012-D10K-7D02', 'Mobile Computing', 7, 3),
(6, '81012-UNX10.040101', 'Agama', 1, 2),
(7, '81012-UNX10.040102', 'Bahasa Inggris I', 1, 2),
(8, '81012-UNX10.040201', 'Bahasa Inggris II', 2, 2),
(9, '81012-UNX10.040202', 'Kewarganegaraan', 2, 2),
(21, '81012-UNX10.040301', 'Bahasa Indonesia', 3, 2),
(22, '81012-UNX10.040401', 'Pancasila', 4, 2),
(67, '81012-UNX10.040701', 'KKN', 7, 3),
(68, '81012-UNX10.040801', 'Seminar', 8, 1),
(69, '81012-UNX10.040802', 'Skripsi', 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE `t_login` (
  `username` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`username`, `password`, `status`) VALUES
('140810140007', 'dc637b0fc5e6a161e30e44e032014c3d', 'mahasiswa'),
('140810140043', '308806a8dbd0d10c2472e66898e10876', 'mahasiswa'),
('140810140049', '0fde1faf5f91daf76d1ab2e8a0545f3d', 'mahasiswa'),
('140810140057', 'e5b2a975d9b73165bcc8b5e63ce488ff', 'mahasiswa'),
('140810140059', '202cb962ac59075b964b07152d234b70', 'mahasiswa'),
('140810140061', 'f91175362474b300428608e9abb7cd05', 'mahasiswa'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `npm` varchar(12) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `semester` int(2) NOT NULL,
  `sks` int(2) NOT NULL,
  `verifikasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`npm`, `nama`, `semester`, `sks`, `verifikasi`) VALUES
('140810140007', 'Andhika', 5, 3, ''),
('140810140043', 'Ryan Adam', 2, 0, ''),
('140810140049', 'Ibrahim Yahya', 4, 8, ''),
('140810140057', 'Raka Karim', 7, 24, 'Pending'),
('140810140059', 'Satria Megananda Purnama', 7, 7, 'Pending'),
('140810140061', 'Alfan Zuhdi', 7, 2, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `t_kurikulum`
--
ALTER TABLE `t_kurikulum`
  ADD PRIMARY KEY (`kd_matkul`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kurikulum`
--
ALTER TABLE `t_kurikulum`
  MODIFY `no` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
