-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2025 at 12:52 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metode_smart`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisis_siswa`
--

CREATE TABLE `analisis_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_raport` int(11) NOT NULL DEFAULT 0,
  `id_keaktifan` int(11) NOT NULL DEFAULT 0,
  `id_absensi` int(11) NOT NULL DEFAULT 0,
  `id_kepribadian` int(11) NOT NULL DEFAULT 0,
  `id_kejuaraan` int(11) NOT NULL DEFAULT 0,
  `nama_siswa` varchar(125) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `hasil` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisis_siswa`
--

INSERT INTO `analisis_siswa` (`id_siswa`, `id_user`, `id_raport`, `id_keaktifan`, `id_absensi`, `id_kepribadian`, `id_kejuaraan`, `nama_siswa`, `kelas`, `angkatan`, `jk`, `hasil`) VALUES
(1, 1, 5, 4, 6, 4, 5, 'Ahmad Fauzi Ramadan ', 'X', 2023, 'Laki - Laki', '244'),
(2, 1, 5, 5, 6, 4, 4, 'Amelia Nur Hikmah ', 'X', 2023, 'Perempuan', '292'),
(3, 1, 5, 5, 5, 5, 4, 'Anggun Nur Afifa', 'X', 2023, 'Perempuan', '300'),
(4, 1, 5, 4, 7, 4, 4, 'Anindyta Priatna ', 'X', 2023, 'Perempuan', '300'),
(5, 1, 5, 3, 7, 4, 4, 'Chandika Yahya Wijaya ', 'X', 2023, 'Laki - Laki', '280'),
(6, 1, 6, 3, 6, 5, 5, 'Dedeh Geisya Aulia ', 'X', 2023, 'Perempuan', '296'),
(7, 1, 6, 5, 7, 5, 2, 'Fadhil Alfath ', 'X', 2023, 'Laki - Laki', '464'),
(8, 1, 6, 4, 6, 4, 4, 'Fahri Muhammad Rayhan ', 'X', 2023, 'Laki - Laki', '300'),
(9, 1, 6, 4, 5, 4, 4, 'Fauziah Miftahul Janah ', 'X', 2023, 'Perempuan', '272'),
(10, 1, 5, 4, 6, 3, 4, 'Gymnastiar Tri Raja ', 'X', 2023, 'Laki - Laki', '236'),
(11, 2, 0, 0, 0, 0, 0, 'Ha Ura Az-Zahra Dzahabiiyah ', 'XI', 2023, 'Perempuan', '0'),
(12, 2, 0, 0, 0, 0, 0, 'Kania Fauziah B ', 'XI', 2023, 'Perempuan', '0'),
(13, 2, 0, 0, 0, 0, 0, 'Kasih Ramadhanti ', 'XI', 2023, 'Perempuan', '0'),
(14, 2, 0, 0, 0, 0, 0, 'Mamay Siti Maryam ', 'XI', 2023, 'Perempuan', '0'),
(15, 2, 0, 0, 0, 0, 0, 'Mona Maryam ', 'XI', 2023, 'Perempuan', '0'),
(16, 2, 0, 0, 0, 0, 0, 'Muhamad Nazril Anugrah ', 'XI', 2023, 'Laki - Laki', '0'),
(17, 2, 0, 0, 0, 0, 0, 'Muhamad Raihan Dani', 'XI', 2023, 'Laki - Laki', '0'),
(18, 2, 0, 0, 0, 0, 0, 'Muhammad Rafly Akbar ', 'XI', 2023, 'Laki - Laki', '0'),
(19, 2, 0, 0, 0, 0, 0, 'Muthia Sri Rahayu Azzahra ', 'XI', 2023, 'Perempuan', '0'),
(20, 2, 0, 0, 0, 0, 0, 'Nabilla Nafisyatul Mardiah ', 'XI', 2023, 'Perempuan', '0'),
(21, 3, 0, 0, 0, 0, 0, 'Adry Alwi Rahnan ', 'XII', 2023, 'Laki - Laki', '0'),
(22, 3, 0, 0, 0, 0, 0, 'Ahmad Musyafa', 'XII', 2023, 'Laki - Laki', '0'),
(23, 3, 0, 0, 0, 0, 0, 'Daffa Diaulhaq  ', 'XII', 2023, 'Laki - Laki', '0'),
(24, 3, 0, 0, 0, 0, 0, 'Dhiya Haura Az-Zahra ', 'XII', 2023, 'Perempuan', '0'),
(25, 3, 0, 0, 0, 0, 0, 'Dina Anjani  ', 'XII', 2023, 'Perempuan', '0'),
(26, 3, 0, 0, 0, 0, 0, 'Dinda Khitfiyatul Maula ', 'XII', 2023, 'Perempuan', '0'),
(27, 3, 0, 0, 0, 0, 0, 'Eka Noviyanti ', 'XII', 2023, 'Perempuan', '0'),
(28, 3, 0, 0, 0, 0, 0, 'Elin Sky Zaskia Lestari ', 'XII', 2023, 'Perempuan', '0'),
(29, 3, 0, 0, 0, 0, 0, 'Elsa Safitri Cahyani ', 'XII', 2023, 'Perempuan', '0'),
(30, 3, 0, 0, 0, 0, 0, 'Grasela Agustin ', 'XII', 2023, 'Perempuan', '0'),
(31, 4, 0, 0, 0, 0, 0, 'Abil Febrian', 'X', 2022, 'Laki - Laki', '0'),
(32, 4, 0, 0, 0, 0, 0, 'Ahmad Fadil ', 'X', 2022, 'Laki - Laki', '0'),
(33, 4, 0, 0, 0, 0, 0, 'Aida Hayatun Solihah ', 'X', 2022, 'Perempuan', '0'),
(34, 4, 0, 0, 0, 0, 0, 'Aisy Alldia Tama ', 'X', 2022, 'Laki - Laki', '0'),
(35, 4, 0, 0, 0, 0, 0, 'Ajeng Putri Nur Rohmah ', 'X', 2022, 'Perempuan', '0'),
(36, 4, 0, 0, 0, 0, 0, 'Aliy Wahfi Trilian', 'X', 2022, 'Perempuan', '0'),
(37, 4, 0, 0, 0, 0, 0, 'Amara Sidkoh ', 'X', 2022, 'Perempuan', '0'),
(38, 4, 0, 0, 0, 0, 0, 'Desi Salsabila ', 'X', 2022, 'Perempuan', '0'),
(39, 4, 0, 0, 0, 0, 0, 'Dewangga Praba ', 'X', 2022, 'Laki - Laki', '0'),
(40, 4, 0, 0, 0, 0, 0, 'Eka Nur Safitri ', 'X', 2022, 'Perempuan', '0'),
(41, 5, 0, 0, 0, 0, 0, 'Fahrani Rahmaniyah ', 'XI', 2022, 'Perempuan', '0'),
(42, 5, 0, 0, 0, 0, 0, 'Faska Fradana ', 'XI', 2022, 'Laki - Laki', '0'),
(43, 5, 0, 0, 0, 0, 0, 'Hadi Suhadi ', 'XI', 2022, 'Laki - Laki', '0'),
(44, 5, 0, 0, 0, 0, 0, 'Ikbal Husaeni ', 'XI', 2022, 'Laki - Laki', '0'),
(45, 5, 0, 0, 0, 0, 0, 'Ilham Farhanul Hakim ', 'XI', 2022, 'Laki - Laki', '0'),
(46, 5, 0, 0, 0, 0, 0, 'Intan Nurani ', 'XI', 2022, 'Perempuan', '0'),
(47, 5, 0, 0, 0, 0, 0, 'Karlina ', 'XI', 2022, 'Perempuan', '0'),
(48, 5, 0, 0, 0, 0, 0, 'Krisna Tri Ananda ', 'XI', 2022, 'Laki - Laki', '0'),
(49, 5, 0, 0, 0, 0, 0, 'Mia Dwi Amalia', 'XI', 2022, 'Perempuan', '0'),
(50, 5, 0, 0, 0, 0, 0, 'Muhamad Ilham Maulani ', 'XI', 2022, 'Laki - Laki', '0'),
(51, 6, 0, 0, 0, 0, 0, 'Muhammad Daffa Andhika ', 'XII', 2022, 'Laki - Laki', '0'),
(52, 6, 0, 0, 0, 0, 0, 'Nissa Khairunnajah ', 'XII', 2022, 'Perempuan', '0'),
(53, 6, 0, 0, 0, 0, 0, 'Nur Apriani', 'XII', 2022, 'Perempuan', '0'),
(54, 6, 0, 0, 0, 0, 0, 'Pirda Salsa Apipah ', 'XII', 2022, 'Perempuan', '0'),
(55, 6, 0, 0, 0, 0, 0, 'Putri Maisun Najibah', 'XII', 2022, 'Perempuan', '0'),
(56, 6, 0, 0, 0, 0, 0, 'Rachma Destiyanti ', 'XII', 2022, 'Perempuan', '0'),
(57, 6, 0, 0, 0, 0, 0, 'Refa Andriyani ', 'XII', 2022, 'Perempuan', '0'),
(58, 6, 0, 0, 0, 0, 0, 'Ridho Abdullah  ', 'XII', 2022, 'Laki - Laki', '0'),
(59, 6, 0, 0, 0, 0, 0, 'Tasya Khojanah', 'XII', 2022, 'Perempuan', '0'),
(60, 6, 0, 0, 0, 0, 0, 'Tohid Nur Falah ', 'XII', 2022, 'Laki - Laki', '0'),
(61, 7, 0, 0, 0, 0, 0, 'Adelia Apriliani ', 'X', 2021, 'Perempuan', '0'),
(62, 7, 0, 0, 0, 0, 0, 'Ahmad Iqballudin', 'X', 2021, 'Laki - Laki', '0'),
(63, 7, 0, 0, 0, 0, 0, 'Alicia Destiani Indah Pertiwi ', 'X', 2021, 'Perempuan', '0'),
(64, 7, 0, 0, 0, 0, 0, 'Andin Novianti ', 'X', 2021, 'Perempuan', '0'),
(65, 7, 0, 0, 0, 0, 0, 'Ayla Nafisa Salsabila ', 'X', 2021, 'Perempuan', '0'),
(66, 7, 0, 0, 0, 0, 0, 'Berliana Zahara Putri ', 'X', 2021, 'Perempuan', '0'),
(67, 7, 0, 0, 0, 0, 0, 'Chusnul Mar\'Iyah ', 'X', 2021, 'Perempuan', '0'),
(68, 7, 0, 0, 0, 0, 0, 'Dela Anggun Havana', 'X', 2021, 'Perempuan', '0'),
(69, 7, 0, 0, 0, 0, 0, 'Diani Mutmainah ', 'X', 2021, 'Perempuan', '0'),
(70, 7, 0, 0, 0, 0, 0, 'Dwi Wulandari ', 'X', 2021, 'Laki - Laki', '0'),
(71, 8, 0, 0, 0, 0, 0, 'Fira Nurfiyanti ', 'XI', 2021, 'Perempuan', '0'),
(72, 8, 0, 0, 0, 0, 0, 'Jihad Al Fauzan ', 'XI', 2021, 'Laki - Laki', '0'),
(73, 8, 0, 0, 0, 0, 0, 'Muhammad Ikmal Shofiullah ', 'XI', 2021, 'Laki - Laki', '0'),
(74, 8, 0, 0, 0, 0, 0, 'Muhammad Iqbal Masrul ', 'XI', 2021, 'Laki - Laki', '0'),
(75, 8, 0, 0, 0, 0, 0, 'Muhammad Sabila Ali Rosyad ', 'XI', 2021, 'Laki - Laki', '0'),
(76, 8, 0, 0, 0, 0, 0, 'Neng Endah Toiyibah ', 'XI', 2021, 'Perempuan', '0'),
(77, 8, 0, 0, 0, 0, 0, 'Nida Nur Hamidah ', 'XI', 2021, 'Perempuan', '0'),
(78, 8, 0, 0, 0, 0, 0, 'Putri Dwi Rahayu ', 'XI', 2021, 'Perempuan', '0'),
(79, 8, 0, 0, 0, 0, 0, 'Raafi Alfajr ', 'XI', 2021, 'Laki - Laki', '0'),
(80, 8, 0, 0, 0, 0, 0, 'Rena Nurfebriyanti ', 'XI', 2021, 'Perempuan', '0'),
(81, 9, 0, 0, 0, 0, 0, 'Ade Tasyah ', 'XII', 2021, 'Perempuan', '0'),
(82, 9, 0, 0, 0, 0, 0, 'Ahmad Iqmalludin ', 'XII', 2021, 'Laki - Laki', '0'),
(83, 9, 0, 0, 0, 0, 0, 'Allan Nestha', 'XII', 2021, 'Laki - Laki', '0'),
(84, 9, 0, 0, 0, 0, 0, 'Anjani ', 'XII', 2021, 'Perempuan', '0'),
(85, 9, 0, 0, 0, 0, 0, 'Asep Romdoni ', 'XII', 2021, 'Laki - Laki', '0'),
(86, 9, 0, 0, 0, 0, 0, 'Dela Daliyatul Hasanah', 'XII', 2021, 'Perempuan', '0'),
(87, 9, 0, 0, 0, 0, 0, 'Elza Zaharanie ', 'XII', 2021, 'Perempuan', '0'),
(88, 9, 0, 0, 0, 0, 0, 'Evan Cipta Nurrizky ', 'XII', 2021, 'Laki - Laki', '0'),
(89, 9, 0, 0, 0, 0, 0, 'Fika Farhatul Azkia ', 'XII', 2021, 'Perempuan', '0'),
(90, 9, 0, 0, 0, 0, 0, 'Hilda Aulia Ramadani ', 'XII', 2021, 'Perempuan', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisis_siswa`
--
ALTER TABLE `analisis_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisis_siswa`
--
ALTER TABLE `analisis_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
