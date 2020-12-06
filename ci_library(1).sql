-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Des 2020 pada 06.12
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_library`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `2phbmn`
--

CREATE TABLE `2phbmn` (
  `idfile` int(11) NOT NULL,
  `pdf1` text NOT NULL,
  `pdf2` text NOT NULL,
  `pdf3` text NOT NULL,
  `pdf4` text NOT NULL,
  `pdf5` text NOT NULL,
  `pdf6` text NOT NULL,
  `pdf7` text NOT NULL,
  `pdf8` text NOT NULL,
  `pdf9` text NOT NULL,
  `pdf10` text NOT NULL,
  `pdf11` text NOT NULL,
  `xlsx` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `3pbmn`
--

CREATE TABLE `3pbmn` (
  `idfile` int(11) NOT NULL,
  `pdf1` text NOT NULL,
  `pdf2` text NOT NULL,
  `pdf3` text NOT NULL,
  `pdf4` text NOT NULL,
  `pdf5` text NOT NULL,
  `pdf6` text NOT NULL,
  `pdf7` text NOT NULL,
  `pdf8` text NOT NULL,
  `xlsx` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `3pbmnksl`
--

CREATE TABLE `3pbmnksl` (
  `idfile` int(11) NOT NULL,
  `pdf1` text NOT NULL,
  `pdf2` text NOT NULL,
  `pdf3` text NOT NULL,
  `pdf4` text NOT NULL,
  `pdf5` text NOT NULL,
  `pdf6` text NOT NULL,
  `pdf7` text NOT NULL,
  `pdf8` text NOT NULL,
  `pdf9` text NOT NULL,
  `pdf10` text NOT NULL,
  `xlsx` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `3psbmn`
--

CREATE TABLE `3psbmn` (
  `idfile` int(11) NOT NULL,
  `pdf1` text NOT NULL,
  `pdf2` text NOT NULL,
  `xlsx` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(100) NOT NULL,
  `judul` text NOT NULL,
  `terbit` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `halaman` varchar(30) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `peroleh` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `terbit`, `penerbit`, `halaman`, `jumlah`, `peroleh`, `tanggal`) VALUES
(1001, 'Komputer Grafik Desain', '2018', 'Erlangga', '250', 16, 'Gramedia', '01-06-2017'),
(1003, 'Multimedia', '2016', 'Erlangga', '300', 15, 'Erlangga', '19-06-2014'),
(1005, 'Sistem Pakar', '2014', 'Yudhistira', '250', 14, 'Erlangga', '19-06-2014'),
(1006, 'Pemrograman Web', '2016', 'Armico', '202', 11, 'Gramedia', '14-12-2017'),
(1007, 'Pemrograman Mobile Android', '2017', 'Andi Yogyakarta', '145', 12, 'Gramedia', '14-12-2017'),
(1008, 'Pemrograman Berorientasi Objek', '2019', 'Informatika', '102', 35, 'Gramedia', '02-01-2019'),
(1010, 'Internet of Things', '2018', 'Informatika', '98', 36, 'Gramedia', '02-01-2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebook`
--

CREATE TABLE `ebook` (
  `id_ebook` int(11) NOT NULL,
  `judul` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ebook`
--

INSERT INTO `ebook` (`id_ebook`, `judul`, `kategori`, `file`, `jenis`, `tanggal`) VALUES
(1, 'Modul Praktikum Microsoft Access 1', 'Komputer', 'Praktikum Access 1.pdf', 'Ebook', '2020-05-09'),
(5, 'Kumpulan Jurnal Sistem Pakar', 'Komputer', 'hp633-Jurnal-DAR-Sistem_Pakar.rar', 'Kumpulan Ebook', '2020-05-10'),
(6, 'Modul Praktikum Access 2', 'Komputer', 'Praktikum_Access_2.pdf', 'Ebook', '2020-05-10'),
(7, 'Bermain dengan Internet of Things dan Big Data', 'Komputer', 'Dhoto_-_Bermain_dengan_Internet_of_Things_dan_Big_data.pdf', 'Ebook', '2020-05-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id_kas` int(100) NOT NULL,
  `tgl` varchar(30) NOT NULL,
  `denda` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kas`
--

INSERT INTO `kas` (`id_kas`, `tgl`, `denda`) VALUES
(1220, '24-06-2019', 179000),
(1221, '24-06-2019', 7000),
(1222, '24-06-2019', 0),
(1223, '07-05-2020', 148500),
(1224, '07-05-2020', 148500),
(1225, '11-05-2020', 0),
(1226, '11-05-2020', 0),
(1227, '11-05-2020', 0),
(1228, '11-05-2020', 423000),
(1229, '11-05-2020', 500),
(1230, '08-06-2020', 7000),
(1231, '07-06-2020', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `idfile` int(11) NOT NULL,
  `pdf1` int(11) NOT NULL,
  `pdf2` int(11) NOT NULL,
  `pdf3` int(11) NOT NULL,
  `pdf4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spbmn`
--

CREATE TABLE `spbmn` (
  `idfile` int(11) NOT NULL,
  `pdf1` text NOT NULL,
  `pdf2` text NOT NULL,
  `pdf3` text NOT NULL,
  `pdf4` text NOT NULL,
  `xlsx` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spbmn`
--

INSERT INTO `spbmn` (`idfile`, `pdf1`, `pdf2`, `pdf3`, `pdf4`, `xlsx`) VALUES
(1, 'Rancangan_SIP_BMN.pdf', 'Rancangan_SIP_BMN1.pdf', 'Rancangan_SIP_BMN2.pdf', 'Rancangan_SIP_BMN3.pdf', 'Rancangan_SIP_BMN4.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `judul_buku` varchar(250) NOT NULL,
  `id_buku` varchar(30) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `id_peminjam` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `judul_buku`, `id_buku`, `nama_peminjam`, `id_peminjam`, `tgl_pinjam`, `tgl_kembali`, `status`, `ket`) VALUES
(1, 'Pemrograman Visual', '1004', 'User', 'user', '29-11-2017', '06-12-2017', 'Kembali', '1x'),
(2, 'Komputer Grafik', '1001', 'User', 'user', '29-11-2017', '13-12-2017', 'Kembali', '1x'),
(3, 'Komputer Grafik', '1001', 'User', 'user', '30-11-2017', '21-12-2017', 'Kembali', '1x'),
(4, 'Komputer Grafik', '1001', 'User', 'user', '12-12-2017', '16-01-2018', 'Kembali', '1x'),
(5, 'Pemrograman Visual Java', '1004', 'User', 'user', '12-12-2017', '19-12-2017', 'Kembali', '1x'),
(6, 'Multimedia', '1003', 'Ratnasari', 'user3', '13-12-2017', '03-01-2018', 'Kembali', '2x'),
(7, 'Komputer Grafik', '1001', 'User', 'user', '13-12-2017', '20-12-2017', 'Kembali', '1x'),
(8, 'Metodologi Penelitian', '1002', 'Ratnasari', 'user3', '13-12-2017', '27-12-2017', 'Kembali', '1x'),
(9, 'Metodologi Penelitian', '1002', 'Ratnasari', 'user3', '06-12-2017', '13-12-2017', 'Kembali', '1x'),
(10, 'Metodologi Penelitian', '1002', 'Ratnasari', 'user3', '13-12-2017', '20-12-2017', 'Kembali', '1x'),
(11, 'Sistem Pakar', '1005', 'User', 'user', '13-12-2017', '20-12-2017', 'Kembali', '1x'),
(12, 'Sistem Pakar', '1005', 'User', 'user', '13-12-2017', '20-12-2017', 'Kembali', '1x'),
(13, 'Pemrograman Mobile Android', '1007', 'Ratnasari', 'user3', '14-12-2017', '21-12-2017', 'Kembali', '1x'),
(14, 'Pemrograman Mobile Android', '1007', 'Ratnasari', 'user3', '14-12-2017', '04-01-2018', 'Kembali', '1x'),
(15, 'Pemrograman Web', '1006', 'Ratnasari', 'user3', '07-01-2019', '14-01-2019', 'Kembali', '1x'),
(16, 'Pemrograman Mobile Android', '1007', 'User', 'user', '22-05-2019', '05-06-2019', 'Kembali', '1x'),
(17, 'Pemrograman Mobile Android', '1007', 'User', 'user', '22-05-2019', '29-05-2019', 'Kembali', '1x'),
(18, 'Komputer Grafik', '1001', 'User', 'user', '01-06-2019', '08-06-2019', 'Pinjam', '1x'),
(19, 'Multimedia', '1003', 'Ratnasari', 'user3', '17-06-2019', '24-06-2019', 'Kembali', '1x'),
(20, 'Pemrograman Mobile Android', '1007', 'User', 'user', '24-06-2019', '01-07-2019', 'Kembali', '1x'),
(21, 'Komputer Grafik', '1001', 'User', 'user', '24-06-2019', '01-07-2019', 'Kembali', '1x'),
(22, 'Pemrograman Web', '1006', 'User', 'user', '24-06-2019', '01-07-2019', 'Kembali', '1x'),
(23, 'Pemrograman Mobile Android', '1007', 'User', 'user', '24-06-2019', '01-07-2019', 'Kembali', '1x'),
(24, 'Multimedia', '1003', 'User', 'user', '24-06-2018', '01-07-2018', 'Kembali', '1x'),
(25, 'Sistem Pakar', '1005', 'User', 'user', '24-06-2019', '01-07-2019', 'Kembali', '1x'),
(26, 'Pemrograman Web', '1006', 'Ratnasari', 'user3', '24-06-2019', '15-07-2019', 'Kembali', '1x'),
(27, 'Pemrograman Mobile Android', '1007', 'Ratnasari', 'user3', '24-06-2019', '15-07-2019', 'Kembali', '1x'),
(28, 'Internet of Things', '1010', 'Moh Iqbal', 'mahasiswa1', '07-05-2020', '14-05-2020', 'Kembali', '1x'),
(29, 'Komputer Grafik Desain', '1001', 'Moh Iqbal', 'mahasiswa1', '11-05-2020', '18-05-2020', 'Kembali', '1x'),
(30, 'Sistem Pakar', '1005', 'Moh Iqbal', 'mahasiswa1', '02-05-2020', '16-05-2020', 'Pinjam', '2x'),
(31, 'Pemrograman Web', '1006', 'Moh Iqbal', 'mahasiswa1', '11-05-2020', '25-05-2020', 'Pinjam', '2x'),
(32, 'Internet of Things', '1010', 'Moh Iqbal', 'mahasiswa1', '05-05-2020', '10-05-2020', 'Kembali', '1x'),
(33, 'Multimedia', '1003', 'Moh Iqbal', 'mahasiswa1', '11-05-2020', '25-05-2020', 'Kembali', '2x'),
(34, 'Internet of Things', '1010', 'Ratnasari', 'user3', '11-05-2020', '18-05-2020', 'Kembali', '1x'),
(35, 'Komputer Grafik Desain', '1001', 'Moh Iqbal', 'mahasiswa1', '08-06-2020', '22-06-2020', 'Pinjam', '2x'),
(36, 'Sistem Pakar', '1005', 'Moh Iqbal', 'mahasiswa1', '07-06-2020', '14-06-2020', 'Pinjam', '1x');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `lahir` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `level` enum('admin','admin2','admin3','user','user2') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `jk`, `tempat`, `lahir`, `fakultas`, `jurusan`, `tahun`, `alamat`, `email`, `hp`, `foto`, `level`) VALUES
('admin', 'admin', 'Administrator', 'L', 'Subang', '24-09-1992', 'Fakultas Ilmu Komputer', 'Teknik Informatika S-1', '2018', 'Subang', 'administrator@gmail.com', '-', '', 'admin'),
('user', 'user', 'User', 'L', 'Jakarta', '24-09-1992', 'Fakultas Teknik', 'Ilmu Komunikasi S-1', '2011', 'Subang', 'user@gmail.com', '089655700083', 'A023.jpg', 'user'),
('user3', 'user3', 'Ratnasari', 'P', 'Subang', '08-12-1996', 'Fakultas Teknik', 'Teknik Informatika S-1', '2015', 'Subang', 'ratna@gmail.com', '089789789668', 'foto1.png', 'user'),
('mahasiswa1', '001', 'Moh Iqbal', 'L', 'Bandung', '27-03-1998', 'Fakultas Ilmu Komputer', 'Teknik Informatika S-1', '2017', 'Subang', 'miqbaljanuar@gmail.com', '081235327614', '-', 'user'),
('sk3p', 'sk3p', 'Satuan Kerja Pusat Pendidikan ', 'L', 'Subang', '11-11-1998', 'Fakultas Ilmu Komputer', 'Teknik Informatika S-1', '2018', 'Cibogo', 'sk3p@gmail.com', '0123456789', '-', 'user2'),
('bmn', 'bmn', 'BMN', 'L', 'Subang', '11-11-1998', 'Fakultas Teknik', 'Pascasarjana Magister Manajeme', '2018', 'Subang', 'bmn@gmail.com', '01234567', '-', 'admin2'),
('birohukum', 'birohukum', 'Biro Hukum', 'L', 'Subang', '11-11-1998', 'Fakultas Ilmu Komputer', 'Teknik Informatika S-1', '2018', 'Subang', 'birkum@gmail.com', '12345678', '-', 'admin3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `2phbmn`
--
ALTER TABLE `2phbmn`
  ADD PRIMARY KEY (`idfile`);

--
-- Indeks untuk tabel `3pbmn`
--
ALTER TABLE `3pbmn`
  ADD PRIMARY KEY (`idfile`);

--
-- Indeks untuk tabel `3pbmnksl`
--
ALTER TABLE `3pbmnksl`
  ADD PRIMARY KEY (`idfile`);

--
-- Indeks untuk tabel `3psbmn`
--
ALTER TABLE `3psbmn`
  ADD PRIMARY KEY (`idfile`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id_ebook`);

--
-- Indeks untuk tabel `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id_kas`),
  ADD KEY `id_transaksi` (`id_kas`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`idfile`);

--
-- Indeks untuk tabel `spbmn`
--
ALTER TABLE `spbmn`
  ADD PRIMARY KEY (`idfile`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `nama_peminjam` (`nama_peminjam`),
  ADD KEY `nama_peminjam_2` (`nama_peminjam`),
  ADD KEY `nama_peminjam_3` (`nama_peminjam`),
  ADD KEY `nama_peminjam_4` (`nama_peminjam`),
  ADD KEY `id_peminjam` (`id_peminjam`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `nama` (`nama`),
  ADD KEY `nama_2` (`nama`),
  ADD KEY `nama_3` (`nama`),
  ADD KEY `nama_4` (`nama`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `2phbmn`
--
ALTER TABLE `2phbmn`
  MODIFY `idfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `3pbmn`
--
ALTER TABLE `3pbmn`
  MODIFY `idfile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `3pbmnksl`
--
ALTER TABLE `3pbmnksl`
  MODIFY `idfile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `3psbmn`
--
ALTER TABLE `3psbmn`
  MODIFY `idfile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id_ebook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kas`
--
ALTER TABLE `kas`
  MODIFY `id_kas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1232;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `idfile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spbmn`
--
ALTER TABLE `spbmn`
  MODIFY `idfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
