-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Sep 2018 pada 16.54
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Mahendra', 'mahendra', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(5) NOT NULL,
  `nama` varchar(15) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL,
  `durasi` int(2) DEFAULT NULL,
  `vasilitas` varchar(50) DEFAULT NULL,
  `mesin` varchar(10) DEFAULT NULL,
  `tahun_pembuatan` int(4) DEFAULT NULL,
  `kapasitas` int(2) DEFAULT NULL,
  `nopol` varchar(10) DEFAULT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id`, `nama`, `harga`, `durasi`, `vasilitas`, `mesin`, `tahun_pembuatan`, `kapasitas`, `nopol`, `img`) VALUES
(5034, 'Meja Kursi', '1500000', 0, '500 ', '', 0, 10000, '', 'gambar/WhatsApp Image 2018-09-04 at 20.21.06.jpeg'),
(5391, 'Stage', '500000', 0, 'Stage KOmplit', '', 0, 1, '', 'gambar/Untitled.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id` int(10) NOT NULL,
  `id_numb` int(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `item` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `status_bayar` varchar(35) NOT NULL,
  `bukti` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_numb`, `nama`, `item`, `no_hp`, `date`, `status_bayar`, `bukti`) VALUES
(5147, 1111111, 'Aji', '', '0812', '0000-00-00', 'dibayar', 'bukti/WhatsApp Image 2018-09-04 at 20.21.06.jpeg'),
(1143, 222222, '2222', '', '122222', '2018-09-04', 'dibayar', 'bukti/Untitled.png'),
(8303, 333, '1', 'Stage', '333', '2018-09-04', 'dibayar', 'bukti/Untitled.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `gambar` varchar(70) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `gambar`, `kode`, `date`) VALUES
(1, 'Toyota Avanza', 'Harga : Rp 200.000Durasi : 12 JamHarga 2 : RP 300.000Durasi : 24 JamTermasuk : Mobil SajaMesin : 1300 ccTahun Pembuatan : 2013Kapasitas : 7 Orang', 'img/avanza.jpeg', '1502774213', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
