-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2015 at 11:18 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `giantshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`, `email`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kdbarang` char(5) NOT NULL,
  `nmbarang` varchar(50) NOT NULL,
  `kdjenis` char(5) NOT NULL,
  `kdmerk` char(5) NOT NULL,
  `kdsupplier` char(5) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kdbarang`, `nmbarang`, `kdjenis`, `kdmerk`, `kdsupplier`, `deskripsi`, `foto`, `harga`, `stok`) VALUES
('BR001', 'Sepatu Pria Catenzo - Kets', 'KB001', 'MB002', 'SP002', 'Sepatu yang cocok buat jalan-jalan dan bersantai bersama teman', 'Sepatu-Pria-Catenzo---Kets.jpg', 150000, 5),
('BR002', 'Sepatu putih pink', 'KB001', 'MB001', 'SP002', 'Sepatu asik warna putih dan pink yang paling cocok untuk jalan-jalan', 'Sepatu-putih-pink.jpg', 200000, 5),
('BR003', 'CK SAND (White)', 'KB002', 'M007', 'SP001', 'CK USA', 'CK-SAND-(White).jpg', 200000, 20),
('BR004', 'Kaos Olahraga Pria Merah', 'KB007', 'MB002', 'SP002', 'Kaos merk adidas warna merah yang cocok buat olah raga', 'kaos-olahraga-pria.jpg', 80000, 5),
('BR005', 'Jam Tangan', 'KB002', 'M007', 'SP001', 'uyeeeeeeeeeeee', 'Jam-Tangan.jpg', 170000, 1),
('BR006', 'Jam Kece Guess', 'KB002', 'MB008', 'SP002', 'Jam tangan berwarna hitam dari Guess yang sudah terkenal di kalangan pengusaha. Jam tangan ini juga tahan air dan sangat elegan bagi para profesional muda. Terbuat dari bahan yang tidak gatal di tangan.', 'Jam-Kece-Guess.jpg', 1000000, 6),
('BR007', 'Topi Premium Nation', 'KB003', 'MB006', 'SP002', 'deskripsi topi, katanya..', 'Topi-Premium-Nation.jpg', 20000, 8),
('BR008', 'Jaket Frankin Marshal', 'KB004', 'MB002', 'SP001', 'Jaket dengan tulisan Frankin Marshal berwarna biru putih, cocok untuk main bersama temen. Dengan bahan yang nyaman.', 'Jaket-Frankin-Marshal.jpg', 130000, 5),
('BR009', 'Kemeja Kotak - Kotak', 'KB005', 'MB001', 'SP001', 'Kemeja lengan pendek dengan warna dasar abu abu dan aksen biru ini sangat stylish di kalangan anak muda jaman sekarang. Apa lagi dengan bahan katun sangat nyaman digunakan', 'Kemeja-Kotak---Kotak.jpg', 98000, 10),
('BR010', 'Kemeja Calvin Klein Biru', 'KB005', 'MB005', 'SP001', 'Kemeja yang cocok untuk ngantor. Dengan warna biru yang elegan serta bahan yang enak digunakan akan terlihat bagus.', 'Kemeja-Calvin-Klein-Biru.jpg', 105000, 21),
('BR011', 'AP Stuff Hijau', 'KB003', 'MB004', 'SP002', 'Topi keren dengan warna dasar putih dan aksen hijau yang keren pokoknya', 'AP-Stuff-Hijau.jpg', 50000, 13),
('BR012', 'Jam Twist Unik Limited', 'KB002', 'M007', 'SP002', 'Jam tangan dengan bentuk unik dan berwarna pink, sangat cocok bagi mereka yang ingin tampil beda.', 'Jam-Twist-Unik-Limited.jpg', 89500, 5),
('BR013', 'Jam Puma Arloji', 'KB002', 'MB009', 'SP001', 'Barang yang elegan untuk para profesional muda seperti boss muda.', 'Jam-Puma-Arloji.jpg', 97000, 3),
('BR014', 'Sepatu Merah Putih', 'KB001', 'MB001', 'SP001', 'Sepatu kets yang asik buat olah raga. Dengan warna merah akan membuat Anda mencolok dan menarik', 'Sepatu-Merah-Putih.jpg', 108000, 8),
('BR015', 'Kemeja Batik Bagus', 'KB006', 'MB003', 'SP001', 'Batik lengan pendek yang cocok untuk acara santai kayak dipantai', 'Kemeja-Batik-Bagus.jpg', 123000, 3),
('BR016', 'Jaket Bertudung', 'KB004', 'MB004', 'SP001', 'Jaket pria maupun wanita yang asik buat pergi jalan-jalan di tempat dingin.', 'Jaket-Bertudung.jpg', 125000, 4),
('BR017', 'Topi Gambar Segitiga', 'KB003', 'MB002', 'SP001', 'Topi dengan tiga warna yaitu orange, putih, dan biru dongker yang cocok untuk anak muda', 'Topi-Gambar-Segitiga.jpg', 45000, 6),
('BR018', 'Jam Cewek Pink Putih', 'KB002', 'MB010', 'SP002', 'Jam tangan warni pink dan putih perak minimalis buat para wanita dari Casio', 'Jam-Cewek-Pink-Putih.jpg', 97000, 8),
('BR019', 'Jaket Batik Casual', 'KB006', 'MB003', 'SP001', 'Jaket batik warna warni yang keren pokoknya.', 'Jaket-Batik-Casual.jpg', 132000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `detailtrx`
--

CREATE TABLE IF NOT EXISTS `detailtrx` (
  `kdtrx` int(5) NOT NULL,
  `kdbarang` char(5) NOT NULL,
  `jml` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailtrx`
--

INSERT INTO `detailtrx` (`kdtrx`, `kdbarang`, `jml`, `subtotal`) VALUES
(8, 'BR003', 2, 400000),
(8, 'BR006', 1, 1000000),
(9, 'BR006', 1, 1000000),
(10, 'BR003', 1, 200000),
(11, 'BR004', 3, 240000),
(12, 'BR002', 1, 200000),
(13, 'BR002', 1, 200000),
(14, 'BR001', 2, 300000),
(14, 'BR005', 1, 170000),
(15, 'BR004', 2, 160000),
(15, 'BR005', 1, 170000),
(16, 'BR001', 3, 450000),
(17, 'BR003', 1, 200000),
(18, 'BR004', 2, 160000),
(19, 'BR002', 1, 200000),
(19, 'BR006', 3, 3000000),
(20, 'BR002', 2, 400000),
(20, 'BR005', 1, 170000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `kdjenis` char(5) NOT NULL,
  `nmjenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`kdjenis`, `nmjenis`) VALUES
('KB001', 'Sepatu'),
('KB002', 'Jam Tangan'),
('KB003', 'Topi'),
('KB004', 'Jaket'),
('KB005', 'Kemeja'),
('KB006', 'Batik'),
('KB007', 'Kaos');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`idkomentar` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `kdbarang` char(5) DEFAULT NULL,
  `tgl` date NOT NULL,
  `isikomentar` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idkomentar`, `email`, `kdbarang`, `tgl`, `isikomentar`) VALUES
(1, 'asaputra_95@ymail.com', 'BR005', '2015-01-03', 'bagus'),
(2, 'emily@yahoo.com', 'BR006', '2015-01-09', 'kereeeen.. uyeeee pokoknyaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE IF NOT EXISTS `merk` (
  `kdmerk` char(5) NOT NULL,
  `nmmerk` varchar(30) NOT NULL,
  `notelp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`kdmerk`, `nmmerk`, `notelp`) VALUES
('M007', 'CK', '8865643576'),
('MB001', 'Nike', '888888'),
('MB002', 'Adidas', '555555'),
('MB003', 'Keris', '666688'),
('MB004', 'Blink', '546548'),
('MB005', 'Cardinal', '956549845'),
('MB006', 'Bilabong', '21354282'),
('MB008', 'GUESS', '9766554'),
('MB009', 'PUMA', '76766554'),
('MB010', 'Casio', '087956676');

-- --------------------------------------------------------

--
-- Table structure for table `statustransaksi`
--

CREATE TABLE IF NOT EXISTS `statustransaksi` (
  `idstatus` int(1) NOT NULL,
  `nmstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statustransaksi`
--

INSERT INTO `statustransaksi` (`idstatus`, `nmstatus`) VALUES
(1, 'menunggu pembayaran'),
(2, 'dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `kdsupplier` char(5) NOT NULL,
  `nmsupplier` varchar(50) NOT NULL,
  `alamt` varchar(200) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kdsupplier`, `nmsupplier`, `alamt`, `notelp`, `email`) VALUES
('SP001', 'PT Persero', 'lfdjsljd kfdsjflk sdf', '26542156', 'mail@mail.com'),
('SP002', 'CV Perusahaan', 'di mana mana', '6501245', 'email@mail.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `trx`
--

CREATE TABLE IF NOT EXISTS `trx` (
`kdtrx` int(5) NOT NULL,
  `tgltrx` date NOT NULL,
  `tglkirim` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `idstatus` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx`
--

INSERT INTO `trx` (`kdtrx`, `tgltrx`, `tglkirim`, `email`, `alamat`, `idstatus`) VALUES
(8, '2014-12-16', NULL, 'asaputra_95@ymail.com', 'fdffsd', 1),
(9, '2014-12-16', '2015-01-09', 'asaputra_95@ymail.com', 'jjklkgjkgglkj', 2),
(10, '2014-12-16', '2015-01-09', 'asaputra_95@ymail.com', 'fgdgsf', 2),
(11, '2014-12-16', NULL, 'asaputra_95@ymail.com', 'jhgjghg', 1),
(12, '2014-12-16', '2015-01-09', 'asaputra_95@ymail.com', 'dsrsre', 2),
(13, '2014-12-16', NULL, 'asaputra_95@ymail.com', 'dfsfs', 1),
(14, '2014-12-16', NULL, 'asaputra_95@ymail.com', 'gzsfesf', 1),
(15, '2014-12-17', '2015-01-09', 'asaputra_95@ymail.com', 'alamat aja', 2),
(16, '2014-12-17', '2015-01-09', 'emily@yahoo.com', 'rumahkuuu', 2),
(17, '2014-12-17', NULL, 'emily@yahoo.com', 'entahlaah', 1),
(18, '2014-12-19', '2015-01-09', 'asaputra_95@ymail.com', 'fdfgdg', 2),
(19, '2015-01-09', NULL, 'emily@yahoo.com', 'Bantul', 1),
(20, '2015-01-09', NULL, 'asaputra_95@ymail.com', 'Pajangan Bantul Yogyakarta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `nama`, `notelp`, `alamat`) VALUES
('asaputra_95@ymail.com', 'ed707f833673d415aef303411d5bfc9edba113aa', 'Andika Saputra', '085725839573', 'Bantul Aja lah'),
('emily@yahoo.com', 'aa2000087a809cf2f91a4ba4a907a106b5a77e82', 'Emilyka', '087876461356', 'Bantul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`kdbarang`), ADD KEY `kdjenis` (`kdjenis`), ADD KEY `kdmerk` (`kdmerk`), ADD KEY `kdsupplier` (`kdsupplier`);

--
-- Indexes for table `detailtrx`
--
ALTER TABLE `detailtrx`
 ADD UNIQUE KEY `kdtrx` (`kdtrx`,`kdbarang`), ADD KEY `kdbarang` (`kdbarang`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
 ADD PRIMARY KEY (`kdjenis`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`idkomentar`), ADD KEY `email` (`email`), ADD KEY `kdbarang` (`kdbarang`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
 ADD PRIMARY KEY (`kdmerk`);

--
-- Indexes for table `statustransaksi`
--
ALTER TABLE `statustransaksi`
 ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
 ADD PRIMARY KEY (`kdsupplier`);

--
-- Indexes for table `trx`
--
ALTER TABLE `trx`
 ADD PRIMARY KEY (`kdtrx`), ADD KEY `email` (`email`), ADD KEY `idstatus` (`idstatus`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `idkomentar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `trx`
--
ALTER TABLE `trx`
MODIFY `kdtrx` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kdjenis`) REFERENCES `jenis` (`kdjenis`),
ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`kdmerk`) REFERENCES `merk` (`kdmerk`),
ADD CONSTRAINT `barang_ibfk_3` FOREIGN KEY (`kdsupplier`) REFERENCES `supplier` (`kdsupplier`);

--
-- Constraints for table `detailtrx`
--
ALTER TABLE `detailtrx`
ADD CONSTRAINT `detailtrx_ibfk_1` FOREIGN KEY (`kdtrx`) REFERENCES `trx` (`kdtrx`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `detailtrx_ibfk_2` FOREIGN KEY (`kdbarang`) REFERENCES `barang` (`kdbarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`),
ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`kdbarang`) REFERENCES `barang` (`kdbarang`);

--
-- Constraints for table `trx`
--
ALTER TABLE `trx`
ADD CONSTRAINT `trx_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`),
ADD CONSTRAINT `trx_ibfk_2` FOREIGN KEY (`idstatus`) REFERENCES `statustransaksi` (`idstatus`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
