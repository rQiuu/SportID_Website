-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2023 pada 17.51
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport_id`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` varchar(20) NOT NULL,
  `order_mulai` datetime NOT NULL,
  `order_selesai` datetime NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `bayar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `order_mulai`, `order_selesai`, `id_customer`, `id_lapangan`, `bayar`) VALUES
('27935', '2023-05-03 10:30:00', '2023-05-03 12:30:00', 1, 1, 70000),
('92094', '2023-05-10 10:00:00', '2023-05-10 11:00:00', 1, 1, 35000),
('53503', '2023-05-10 13:00:00', '2023-05-10 15:00:00', 1, 2, 105000),
('41495', '2023-06-01 11:00:00', '2023-06-01 13:00:00', 6, 1, 70000),
('06610', '2023-06-02 13:00:00', '2023-06-02 14:00:00', 6, 1, 35000),
('81767', '2023-06-03 09:00:00', '2023-06-03 12:00:00', 6, 3, 105000),
('76630', '2023-06-03 15:00:00', '2023-06-03 18:00:00', 6, 2, 105000),
('82390', '2023-06-04 10:00:00', '2023-06-04 11:00:00', 6, 3, 35000),
('23958', '2023-06-05 09:00:00', '2023-06-05 11:00:00', 1, 2, 70000),
('72389', '2023-06-10 10:00:00', '2023-06-10 13:00:00', 11, 1, 105000),
('15362', '2023-06-10 22:00:00', '2023-06-10 23:00:00', 1, 1, 35000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `username`, `password`, `nama`) VALUES
(1, 'refanda', '123', 'refanda'),
(6, 'rizqi', '123', 'rizqi'),
(10, '123210023', '123', 'Rizqi'),
(11, 'user', 'user', 'Refanda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `nama_lapangan` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `deskripsi`, `fasilitas`, `image`, `nama_lapangan`, `alamat`, `kategori`) VALUES
(1, 'Deskripsi Lapangan Futsal\r\n\r\nUkuran lapangan futsal Panjang: \r\n\r\ninternasional minimal 38 dan maksimal 42 m, standar minimal 25 dan maksimal 42 m \r\nLebar: internasional minimal 18 dan maksimal 25 m, standar minimal 15 dan maksimal 25 m \r\nRadius lingkaran tengah: 3 m\r\nLebar gawang: 3 m \r\nTinggi gawang: 2 m \r\nJarak gawang dengan circle (setengah lingkaran): 5 m \r\nJarak titik penalti pertama: 6 m Jarak titik penalti kedua: 12 m', 'Fasilitas :\r\n- Mushola\r\n- Toilet\r\n- Tempat Parkir\r\n- Coffee Shop\r\n- Tribun\r\n- Ruang Ganti\r\n- Taman', 'futsal0.jpg', 'Lapangan Futsal Babarsari', 'Jl. Babarsari, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, \r\nDaerah Istimewa Yogyakarta 55281', 'futsal'),
(2, 'Deskripsi Lapangan Futsal\r\n\r\nUkuran lapangan futsal Panjang: \r\n\r\ninternasional minimal 38 dan maksimal 42 m, standar minimal 25 dan maksimal 42 m \r\nLebar: internasional minimal 18 dan maksimal 25 m, standar minimal 15 dan maksimal 25 m \r\nRadius lingkaran tengah: 3 m\r\nLebar gawang: 3 m \r\nTinggi gawang: 2 m \r\nJarak gawang dengan circle (setengah lingkaran): 5 m \r\nJarak titik penalti pertama: 6 m Jarak titik penalti kedua: 12 m', 'Fasilitas :\r\n- Mushola\r\n- Toilet\r\n- Tempat Parkir\r\n- Coffee Shop\r\n- Tribun\r\n- Ruang Ganti\r\n- Taman', 'futsal2.jpg', 'Lapangan Futsal Kledokan', 'JL. Seturan Raya, No. 12, Caturtunggal, Depok, Kledokan, Caturtunggal, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'futsal'),
(3, 'Deskripsi Lapangan Futsal\r\n\r\nUkuran lapangan futsal Panjang: \r\n\r\ninternasional minimal 38 dan maksimal 42 m, standar minimal 25 dan maksimal 42 m \r\nLebar: internasional minimal 18 dan maksimal 25 m, standar minimal 15 dan maksimal 25 m \r\nRadius lingkaran tengah: 3 m\r\nLebar gawang: 3 m \r\nTinggi gawang: 2 m \r\nJarak gawang dengan circle (setengah lingkaran): 5 m \r\nJarak titik penalti pertama: 6 m Jarak titik penalti kedua: 12 m', 'Fasilitas :\r\n- Mushola\r\n- Toilet\r\n- Tempat Parkir\r\n- Coffee Shop\r\n- Tribun\r\n- Ruang Ganti\r\n- Taman', 'futsal3.jpg', 'Lapangan Futsal Demangan', 'JL. Gejayan, Demangan, Kompleks RRI-Pro 2, Mrican, Mrican, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55222', 'futsal'),
(4, 'Deskripsi Lapangan Futsal\r\n\r\nUkuran lapangan futsal Panjang: \r\n\r\ninternasional minimal 38 dan maksimal 42 m, standar minimal 25 dan maksimal 42 m \r\nLebar: internasional minimal 18 dan maksimal 25 m, standar minimal 15 dan maksimal 25 m \r\nRadius lingkaran tengah: 3 m\r\nLebar gawang: 3 m \r\nTinggi gawang: 2 m \r\nJarak gawang dengan circle (setengah lingkaran): 5 m \r\nJarak titik penalti pertama: 6 m Jarak titik penalti kedua: 12 m', 'Fasilitas :\r\n- Mushola\r\n- Toilet\r\n- Tempat Parkir\r\n- Coffee Shop\r\n- Tribun\r\n- Ruang Ganti\r\n- Taman', 'basket1.jpg', 'Lapangan Basket Babarsari', 'Jl. Babarsari, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, \r\nDaerah Istimewa Yogyakarta 55281', 'basket'),
(5, 'Deskripsi Lapangan Futsal\r\n\r\nUkuran lapangan futsal Panjang: \r\n\r\ninternasional minimal 38 dan maksimal 42 m, standar minimal 25 dan maksimal 42 m \r\nLebar: internasional minimal 18 dan maksimal 25 m, standar minimal 15 dan maksimal 25 m \r\nRadius lingkaran tengah: 3 m\r\nLebar gawang: 3 m \r\nTinggi gawang: 2 m \r\nJarak gawang dengan circle (setengah lingkaran): 5 m \r\nJarak titik penalti pertama: 6 m Jarak titik penalti kedua: 12 m', 'Fasilitas :\r\n- Mushola\r\n- Toilet\r\n- Tempat Parkir\r\n- Coffee Shop\r\n- Tribun\r\n- Ruang Ganti\r\n- Taman', 'basket2.jpg', 'Lapangan Basket Kledokan', 'JL. Seturan Raya, No. 12, Caturtunggal, Depok, Kledokan, Caturtunggal, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'basket'),
(6, 'Deskripsi Lapangan Futsal\r\n\r\nUkuran lapangan futsal Panjang: \r\n\r\ninternasional minimal 38 dan maksimal 42 m, standar minimal 25 dan maksimal 42 m \r\nLebar: internasional minimal 18 dan maksimal 25 m, standar minimal 15 dan maksimal 25 m \r\nRadius lingkaran tengah: 3 m\r\nLebar gawang: 3 m \r\nTinggi gawang: 2 m \r\nJarak gawang dengan circle (setengah lingkaran): 5 m \r\nJarak titik penalti pertama: 6 m Jarak titik penalti kedua: 12 m', 'Fasilitas :\r\n- Mushola\r\n- Toilet\r\n- Tempat Parkir\r\n- Coffee Shop\r\n- Tribun\r\n- Ruang Ganti\r\n- Taman', 'basket3.jpg', 'Lapangan Basket Demangan', 'JL. Gejayan, Demangan, Kompleks RRI-Pro 2, Mrican, Mrican, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55222', 'basket'),
(7, 'Deskripsi Lapangan Futsal\r\n\r\nUkuran lapangan futsal Panjang: \r\n\r\ninternasional minimal 38 dan maksimal 42 m, standar minimal 25 dan maksimal 42 m \r\nLebar: internasional minimal 18 dan maksimal 25 m, standar minimal 15 dan maksimal 25 m \r\nRadius lingkaran tengah: 3 m\r\nLebar gawang: 3 m \r\nTinggi gawang: 2 m \r\nJarak gawang dengan circle (setengah lingkaran): 5 m \r\nJarak titik penalti pertama: 6 m Jarak titik penalti kedua: 12 m', 'Fasilitas :\r\n- Mushola\r\n- Toilet\r\n- Tempat Parkir\r\n- Coffee Shop\r\n- Tribun\r\n- Ruang Ganti\r\n- Taman', 'batminton1.jpg', 'Lapangan Badminton Babarsari', 'Jl. Babarsari, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, \r\nDaerah Istimewa Yogyakarta 55281', 'bultang'),
(8, 'Deskripsi Lapangan Futsal\r\n\r\nUkuran lapangan futsal Panjang: \r\n\r\ninternasional minimal 38 dan maksimal 42 m, standar minimal 25 dan maksimal 42 m \r\nLebar: internasional minimal 18 dan maksimal 25 m, standar minimal 15 dan maksimal 25 m \r\nRadius lingkaran tengah: 3 m\r\nLebar gawang: 3 m \r\nTinggi gawang: 2 m \r\nJarak gawang dengan circle (setengah lingkaran): 5 m \r\nJarak titik penalti pertama: 6 m Jarak titik penalti kedua: 12 m', 'Fasilitas :\r\n- Mushola\r\n- Toilet\r\n- Tempat Parkir\r\n- Coffee Shop\r\n- Tribun\r\n- Ruang Ganti\r\n- Taman', 'batminton2.jpg', 'Lapangan Badminton Kledokan', 'JL. Seturan Raya, No. 12, Caturtunggal, Depok, Kledokan, Caturtunggal, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'bultang'),
(9, 'Deskripsi Lapangan Futsal\r\n\r\nUkuran lapangan futsal Panjang: \r\n\r\ninternasional minimal 38 dan maksimal 42 m, standar minimal 25 dan maksimal 42 m \r\nLebar: internasional minimal 18 dan maksimal 25 m, standar minimal 15 dan maksimal 25 m \r\nRadius lingkaran tengah: 3 m\r\nLebar gawang: 3 m \r\nTinggi gawang: 2 m \r\nJarak gawang dengan circle (setengah lingkaran): 5 m \r\nJarak titik penalti pertama: 6 m Jarak titik penalti kedua: 12 m', 'Fasilitas :\r\n- Mushola\r\n- Toilet\r\n- Tempat Parkir\r\n- Coffee Shop\r\n- Tribun\r\n- Ruang Ganti\r\n- Taman', 'batminton3.jpg', 'Lapangan Badminton Demangan', 'JL. Gejayan, Demangan, Kompleks RRI-Pro 2, Mrican, Mrican, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55222', 'bultang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`order_mulai`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_lapangan` (`id_lapangan`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_lapangan`) REFERENCES `lapangan` (`id_lapangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
