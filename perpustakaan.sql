-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2026 at 04:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` int(16) NOT NULL,
  `judul_buku` varchar(1000) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `thn_terbit` year(4) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penerbit`, `pengarang`, `thn_terbit`, `jenis`) VALUES
(1, 'Mukjizat AlQuran dan Hadis', 'Sapta Sentosa', 'Hisham Thalbah', '2010', 'Ensiklopedia'),
(2, 'Kemukjizatan Penciptaan Manusia', 'Sapta Sentosa', 'Hisham Thalbah', '2010', 'Ensiklopedia'),
(3, 'Kemukjizatan Pengobatan dan Makanan', 'Sapta Sentosa', 'Hisham Thalbah', '2010', 'Ensiklopedia'),
(4, 'Kemukjizatan Psikoterapi Islam', 'Sapta Sentosa ', 'Hisham Thalbah', '2010', 'Ensiklopedia'),
(5, 'Kemukjizatan Penciptaan Hewan ', 'Sapta Sentosa', 'Hisham Thalbah', '2010', 'Ensiklopedia'),
(6, 'Kemukjizatan Tumbuhan dan Buah - Buahan', 'Sapta Sentosa', 'Hisham Thalbah ', '2010', 'Ensiklopedia'),
(7, 'Kemukjizatan Sastra dan Bahasa Indonesia', 'Sapta Sentosa', 'Hisham Thalbah', '2010', 'Ensiklopedia'),
(8, 'Kemukjizatan Penciptaan Bumi', 'Sapta Sentosa', 'Hisham Thalbah', '2010', 'Ensiklopedia'),
(9, 'Kemukjizatan Alam Semesta', 'Sapta Sentosa', 'Hisham Thalbah', '2010', 'Ensiklopedia'),
(10, 'Kemukjizatan Angka', 'Sapta Sentosa', 'Hisham Thalbah', '2010', 'Ensiklopedia'),
(11, 'Fisik Bumi Artik, Amerika Utara dan Amerika Tengah ', 'PT. Lentera Abadi, Jakarta', 'Clive Gifford ', '2007', 'Ensiklopedia'),
(12, 'Karibia dan America Selatan - Eropa', 'PT. Lentera Abadi, Jakarta', 'Clive Gifford', '2007', 'Ensiklopedia'),
(13, 'Eropa Selatan, Balkan, Kaukasus, Dan Asia Kecil - Asia', 'PT. Lentera Abadi, Jakarta', 'Clive Gifford ', '2007', 'Ensiklopedia'),
(14, 'Asia Timur - Afrika', 'PT. Lentera Abadi, Jakarta', 'Clive Gifford', '2007', 'Ensiklopedia'),
(15, 'Osenia Dan Antartika - Rujukan Kilat', 'PT. Lentera Abadi', 'Clive Gifford ', '2007', 'Ensiklopedia'),
(16, 'See Inside Iklim dan Cuaca', 'PT. Erlangga', 'Katie Daynes dan Russell Tate ', '2014', 'Ensiklopedia'),
(17, 'See Inside Alam Semesta ', 'PT. Erlangga', 'Alex Frith  dan Lee Cosgrove', '2014', 'Ensiklopedia'),
(18, 'Air Karunia ALLAH', 'PT. Gemai Insani ', 'Tartila Tartusi ', '2009', 'Ensiklopedia'),
(19, 'Bumi Amanah ALLAH', 'PT. Gemai Insani', 'Tartila Tartusi', '2009', 'Ensiklopedia'),
(20, 'Alam Semesta Kebesaran ALLAH', 'PT. Gemai Insani', 'Tartila Tartusi', '2009', 'Ensiklopedia'),
(21, 'Pahlawanku', 'PT. Gemai Insani', 'Ifa Avianty', '2009', 'Ensiklopedia'),
(22, 'Iman Mengantarmu Menuju Surga', 'PT. Gemai Insani', 'Tartila Tartulis', '2009', 'Ensiklopedia'),
(23, 'Hewan Pesona Fauna Ciptaan ALLAH', 'PT. Gemai Insani', 'TIM Gemai Insani', '2009', 'Ensiklopedia '),
(24, 'Tubuhku Anugerah Ciptaan ALLAH', 'PT. Gemai Insani', 'TIM Gemai Insani', '2009', 'Ensiklopedia'),
(25, 'Transportasi dan Teknologi ', 'PT. Gemai Insani', 'TIM Gemai Insani', '2009', 'Ensiklopedia'),
(26, 'Islam Rahmat Tak Terhingga Dari ALLAH', 'PT. Gemai Insani', 'Tartila Tartusi', '2009', 'Ensiklopedia'),
(27, 'Kesehatan', 'PT. Gemai Insani', 'TIM Gemai Insani', '2009', 'Ensiklopedia'),
(29, 'Ilmuwan, Aku Bisa Seperti Mereka', 'Sapta Books ', 'Eka Wardana', '2011', 'Ensiklopedia'),
(30, 'Teknologi Terkini', 'Sapta Books ', 'Eka Wardana', '2011', 'Ensiklopedia'),
(31, 'Keajaiban Bumi dan Seisinya', 'Sapta Books', 'Eka Wardana', '2011', 'Ensiklopedia'),
(32, 'Cerdas Matematika', 'Sapta Books', 'Eka Wardana', '2011', 'Ensiklopedia'),
(33, 'Keajaiban Ilmu', 'Sapta Books', 'Eka Wardana', '2011', 'Ensiklopedia'),
(34, 'Super Fisika', 'Sapta Books', 'Eka Wardana', '2011', 'Ensiklopedia'),
(35, 'Kesehatan Seni Dunia', 'Sapta Books', 'Eka Wardana', '2011', 'Ensiklopedia'),
(36, 'Keindahan Sastra Dunia', 'Sapta Books', 'Eka Wardana', '2011', 'Ensiklopedia'),
(37, 'Tonggak Sejarah Dunia', 'Sapta Books', 'Eka Wardana', '2011', 'Ensiklopedia'),
(38, 'Aku Pasti Bisa', 'Sapta Books', 'Eka Wardana', '2011', 'Ensiklopedia'),
(39, 'Kamus Cerdas', 'Sapta Books', 'Eka Wardana', '2011', 'Ensiklopedia'),
(40, 'Petunjuk Orang Tua', 'Sapta Books', 'Eka Wardana', '2011', 'Ensiklopedia'),
(41, 'Hewan', 'Ganeca Exact', 'Djoko Santoso', '2006', 'Ensiklopedia'),
(42, 'Jamur', 'Ganeca Exact', 'Djoko Santoso', '2006', 'Ensiklopedia'),
(43, 'Lingkungan Hidup', 'Ganeca Exact', 'Djoko Santoso', '2006', 'Ensiklopedia'),
(44, 'Tumbuhan', 'Ganeca Exact', 'Djoko Santoso', '2006', 'Ensiklopedia'),
(45, 'Mikroba', 'Ganeca Exact', 'Djoko Santoso', '2006', 'Ensiklopedia'),
(46, 'Matematika Operasi Hitung Gabungan', 'Ganeca Exact', 'Djoko Santoso', '2006', 'Ensiklopedia'),
(47, 'Matematika Perkalian', 'Ganeca Exact', 'Djoko Santoso', '2006', 'Ensiklopedia'),
(48, 'Matematika Pembagian', 'Ganeca Exact', 'Djoko Santosa', '2006', 'Ensiklopedia'),
(49, 'Matematika Pembagian', 'Azka Press', 'Janu Ismadi', '2006', 'Ensiklopedia'),
(50, 'Matematika Penjumlahan & Pengurangan', 'Azka Press', 'Janu Ismadi', '2006', 'Ensiklopedia'),
(51, 'Matematika Menggunakan Kalkulator', 'Azka Press', 'Yoni Yuniarto', '2006', 'Ensiklopedia'),
(52, 'Matematika Perpangkatan', 'Azka Press', 'Janu Ismadi', '2006', 'Ensiklopedia'),
(53, 'Bocah Muslim Indonesiaku', 'DAR Mizan', 'Irfan Amalee', '2007', 'Ensiklopedia'),
(54, 'Bocah Muslim Tubuhku', 'DAR Mizan', 'Irfan Amalee', '2007', 'Ensiklopedia'),
(55, 'Bocah Muslim Masyarakat & Bangsa', 'DAR Mizan', 'Irfan Amalee', '2007', 'Ensiklopedia'),
(56, 'Bocah Muslim Dunia Binatang & Mamalia', 'DAR Mizan', 'Irfan Amalee', '2007', 'Ensiklopedia'),
(57, 'Bocah Muslim Sejarah', 'DAR Mizan', 'Irfan Amalee', '2007', 'Ensiklopedia'),
(58, 'Bocah Muslim Burung & Serangga', 'DAR Mizan', 'Irfan Amalee', '2007', 'Ensiklopedia'),
(59, 'Bocah Muslim Bumi Kita', 'DAR Mizan', 'Irfan Amalee', '2007', 'Ensiklopedia');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` varchar(16) NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama_mahasiswa`, `jurusan`, `kelas`) VALUES
('2021', 'Arif', 'TI', 'S6N'),
('2022', 'Edo', 'TI', 'S6N'),
('2023', 'Udjang', 'TI', 'S6N'),
('2024', 'Okta', 'TI', 'S6N'),
('2025', 'Bayu', 'TI', 'S6N'),
('2026', 'Pratama', 'IT', 'S6N'),
('2027', 'Rangga', 'TI', 'S6N'),
('2031', 'Bahar', 'TI', 'S6O'),
('2032', 'Feri', 'TI', 'S6O'),
('2034', 'Nisa', 'TI', 'S6M'),
('2035', 'Wahyu', 'TI', 'S6M'),
('2036', 'Pedro', 'TI', 'S6K'),
('2037', 'Rendi', 'TI', 'S6M'),
('2038', 'Kelvin', 'TI', 'S6M'),
('2039', 'Wildan', 'TI', 'S6K'),
('2040', 'ikhwan', 'B. Inggris', 'I1'),
('2050', 'Bagyano Alfredo', 'TI', 'S6N');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(16) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `id_users`, `nama_pegawai`) VALUES
('09876', 54, 'jajang'),
('114055', 13, 'Afham Kautsar Sahal'),
('1140556', 15, 'Nurdin M Sarif'),
('1140557', 16, 'Evita Sukaesih'),
('1140558', 18, 'Joda Akbar'),
('1140559', 19, 'Saibun'),
('1140560', 20, 'Yulia'),
('1140561', 22, 'Tomi'),
('1140562', 23, 'Ade Bombon'),
('1140564', 25, 'Judika'),
('1140565', 26, 'King Nasar'),
('1140566', 27, 'Mahalini Hapsari'),
('1140567', 28, 'Febrian Sinaga'),
('1140568', 29, 'Sulewati'),
('1140569', 30, 'Junior Andika'),
('1140570', 31, 'Joyko'),
('1140571', 34, 'Melita Sari Pudin'),
('1194055', 1, 'Muhammad Asy\'ari Arif Yusuf'),
('123', 53, 'salman al'),
('2021', 50, 'edo'),
('202143502236', 14, 'Muhammad Asyari Arif Yusuf'),
('20244350', 57, 'salman ali');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `kode_buku` int(16) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `npm` varchar(16) NOT NULL,
  `tgl_pinjam` date NOT NULL DEFAULT (curdate()),
  `tgl_kembali` date DEFAULT NULL,
  `kembali` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `kode_buku`, `nip`, `npm`, `tgl_pinjam`, `tgl_kembali`, `kembali`) VALUES
(5, 10, '1194055', '2021', '2026-08-07', '2026-08-14', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `rak_buku`
--

CREATE TABLE `rak_buku` (
  `jenis` varchar(30) NOT NULL,
  `blok` varchar(10) NOT NULL,
  `lantai` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rak_buku`
--

INSERT INTO `rak_buku` (`jenis`, `blok`, `lantai`) VALUES
('Ensiklopedia', '1E', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(11, 'asyari', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'afham', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'arif', '0ff6c3ace16359e41e37d40b8301d67f'),
(15, 'Unindraku11', '6f4922f45568161a8cdf4ad2299f6d23'),
(16, 'Unindraku12', '1f0e3dad99908345f7439f8ffabdffc4'),
(17, 'Unidraku12', '1f0e3dad99908345f7439f8ffabdffc4'),
(18, 'Unidraku13', '98f13708210194c475687be6106a3b84'),
(19, 'Unidraku14', '3c59dc048e8850243be8079a5c74d079'),
(20, 'Unidraku15', 'b6d767d2f8ed5d21a44b0e5886680cb9'),
(22, 'Unidraku16', '37693cfc748049e45d87b8c7d8b9aacd'),
(23, 'Undiraku17', '1ff1de774005f8da13f42943881c655f'),
(24, 'Unidraku18', '8e296a067a37563370ded05f5a3bf3ec'),
(25, 'Unidraku19', '4e732ced3463d06de0ca9a15b6153677'),
(26, 'Unidraku20', '02e74f10e0327ad868d138f2b4fdd6f0'),
(27, 'Unidraku21', '33e75ff09dd601bbe69f351039152189'),
(28, 'Unidraku22', '6ea9ab1baa0efb9e19094440c317e21b'),
(29, 'Unidraku23', '34173cb38f07f89ddbebc2ac9128303f'),
(30, 'Unidraku24', 'c16a5320fa475530d9583c34fd356ef5'),
(31, 'Unidraku25', '6364d3f0f495b6ab9dcf8d3b5c6e0b01'),
(32, 'Undiraku26', '182be0c5cdcd5072bb1864cdee4d3d6e'),
(34, 'Undiraku27', '182be0c5cdcd5072bb1864cdee4d3d6e'),
(35, 'Unidraku28', 'e369853df766fa44e1ed0ff613f563bd'),
(37, 'arif cuyy', '81dc9bdb52d04dc20036dbd8313ed055'),
(40, 'nur', '81dc9bdb52d04dc20036dbd8313ed055'),
(41, 'ari', 'fc292bd7df071858c2d0f955545673c1'),
(42, 'uli', 'dd55cec2ce59aca4e6647dcfbc90dc27'),
(43, 'ila', 'aafe26449a364e5d6b5db7dc565a9b6a'),
(44, 'fahri', '0d3133e7ed48278b30af611b4a8cd833'),
(46, 'ijul', '2037a7b65f3bc47544d8f7e00b32e203'),
(48, 'urin', '9305b73d359bd06734fee0b3638079e1'),
(49, 'unjun sutomang', '81dc9bdb52d04dc20036dbd8313ed055'),
(50, 'alfredo', '21232f297a57a5a743894a0e4a801fc3'),
(52, 'salmanbung', '81dc9bdb52d04dc20036dbd8313ed055'),
(53, 'salman', '81dc9bdb52d04dc20036dbd8313ed055'),
(54, 'jang', '81dc9bdb52d04dc20036dbd8313ed055'),
(57, 'man', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`),
  ADD KEY `jenis` (`jenis`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `nip` (`nip`,`npm`),
  ADD KEY `npm` (`npm`),
  ADD KEY `kode_buku` (`kode_buku`) USING BTREE;

--
-- Indexes for table `rak_buku`
--
ALTER TABLE `rak_buku`
  ADD PRIMARY KEY (`jenis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjam_ibfk_3` FOREIGN KEY (`kode_buku`) REFERENCES `buku` (`kode_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
