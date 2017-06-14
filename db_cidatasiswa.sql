-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jun 2017 pada 10.33
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cidatasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`, `level`, `nama`, `keterangan`) VALUES
('admin', '$2y$10$F6rClbUZc83yGvooKYLEVemLuRK1/iDrxhUFLVkP/aj3s4lkCzwNu', 1, 'Mahrus Khomaini', 'Web Developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tmpt_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `jk`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `nama_ayah`, `nama_ibu`) VALUES
('12129987', 'yughi', 'P', 'mm', '2017-05-02', 'jkbv9999', 'jk', 'm'),
('12323245', 'Indri Rahayuningsih', 'P', 'Jakarta', '1997-06-03', 'Jakarta         ', 'Sugeng ', 'Inamas'),
('13291722', 'Dedi Hermawan Putra', 'L', 'Malang', '1997-08-06', 'Blitar', 'Hedi', 'Heni'),
('14201021', 'Arista Septiana Dewi', 'P', 'Situbondo', '1995-07-17', 'Malang', 'Dani', 'Heni'),
('14201064', 'Rian Priskanova', 'L', 'Malang', '1996-05-08', 'Malang', 'Sugianto', 'Rina'),
('14201075', 'Mahrus Khomaini', 'L', 'Sungai Durian', '1996-05-03', 'Bandung', 'Muhammad Makky', 'Rusminah'),
('14201076', 'Muhammad Idris', 'L', 'Pasuruan', '1997-10-21', 'Pasuruan', 'Sugeng', 'Dewi Sakinah'),
('14201077', 'Muhammad Yusuf', 'L', 'Malang', '1996-07-16', 'Malang', 'Sigit', 'Donita'),
('14201088', 'Siti Halimah', 'P', 'Malang', '1996-07-22', 'Surabaya', 'Joko', 'Hesni'),
('14201278', 'Yuni Ika Sari', 'P', 'Pasuruan', '1996-04-16', 'Malang', 'Joni', 'Hani'),
('21490782', 'mmmm', 'P', 'vyih', '2017-06-08', 'vhkj', 'hj', 'bhj'),
('23239822', 'Muhammad Musfafa', 'L', 'Banjarmasin', '1998-12-02', 'Banjarmasin', 'Ahmat Tani', 'Tina'),
('32323822', 'Lingga Dewi Ramadhani', 'P', 'Malang', '1995-07-05', 'Malang', 'Ramadhan', 'Dewi'),
('45233245', 'Hasni Ika', 'P', 'Malang', '1996-08-14', 'Jakarta', 'Joko', 'Ina'),
('45493876', 'Devi Rahayu', 'P', 'Surabaya', '1997-02-21', 'Bandung', 'Antoni', 'Sakinah'),
('54355467', 'Ramadhani Eka Putri', 'P', 'Jambi', '1994-06-07', 'Bandung', 'SigitnPurnomo', 'Dewi Satina'),
('75675667', 'Eko Ramadhan', 'L', 'Jakarta', '1997-12-08', 'Surabaya', 'Darji Santo', 'Santi Putirani'),
('75839204', 'jjj', 'P', 'fdgfdgfdgf', '2017-06-07', 'fdfgdfgd', 'fgdgfd', 'fgdfg'),
('76589144', 'Muhammad Nasution Putra', 'L', 'Banjarmasin', '1997-03-09', 'Blitar', 'Sodik', 'Dewilah'),
('76886790', 'Arka Jaya Romadhon', 'L', 'Bandung', '1997-07-22', 'Bandung', 'Sutisna', 'Eni'),
('83019298', 'Dani Prasetyo Ramadhan', 'L', 'Malang', '1998-06-11', 'Madura', 'Darmaji', 'Hardiana'),
('93939393', 'mmmm', 'P', 'vyih', '2017-06-08', 'vhkj', 'hj', 'bhj'),
('94949403', 'Musa', 'P', 'Surabaya', '2017-06-14', 'Muha', '', ''),
('95039481', '<script type="text/javascript">   alert("HAHAHA"); </script>', 'L', 'hjnv', '2017-06-01', 'uiyfuihoj', 'hhvji', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
