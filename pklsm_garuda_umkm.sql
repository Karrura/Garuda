-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2022 pada 05.46
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pklsm_garuda_umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `kode_hapus` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `foto`, `keterangan`, `kode_hapus`, `created_at`, `updated_at`) VALUES
(1, 'admingaruda', '$2y$10$0zUBO0Szzsq6pywXi6ck7e9k3AXvL4Xt7NwQrqP.3aF7v4oJIoFG6', NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_edu`
--

CREATE TABLE `a_edu` (
  `id` int(11) NOT NULL,
  `id_k_edu` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `kode_hapus` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `a_edu`
--

INSERT INTO `a_edu` (`id`, `id_k_edu`, `judul`, `video`, `deskripsi`, `kode_hapus`, `created_at`, `updated_at`) VALUES
(1, 3, 'Corrupti ut quia qu', '1646401072100.y2mate.com - FIERSA BESARI Melawan Hati feat PRINSA MANDAGIE official lyric video_480p.mp4', 'Excepturi inventore . <br>', 0, '2022-03-04 06:37:52', '2022-03-04 06:58:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_exportir`
--

CREATE TABLE `a_exportir` (
  `id` int(11) NOT NULL,
  `id_k_exportir` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `kode_hapus` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `a_exportir`
--

INSERT INTO `a_exportir` (`id`, `id_k_exportir`, `judul`, `gambar`, `deskripsi`, `kode_hapus`, `created_at`, `updated_at`) VALUES
(1, 3, 'Its a Quarter After One', '1646396371100.SKY_20200515_014031_1479394281278379159.jpg', '<p><u>Viverra nibh cras pulvinar mattis nunc sed blandit. Magna fermentum \r\niaculis eu non diam phasellus vestibulum. Turpis cursus in hac habitasse\r\n platea dictumst quisque sagittis purus. In est ante in nibh mauris \r\ncursus mattis molestie. Diam in arcu cursus euismod quis viverra. \r\nFacilisis sed odio morbi quis commodo odio aenean sed. Pellentesque \r\ndignissim enim sit amet venenatis urna cursus eget. Hac habitasse platea\r\n dictumst quisque. Risus sed vulputate odio ut enim blandit volutpat \r\nmaecenas. Neque gravida in fermentum et.</u></p>\r\n<p align=\"justify\"><b>Elementum sagittis vitae et leo duis ut. Amet nulla facilisi morbi \r\ntempus iaculis urna id volutpat lacus. Consectetur libero id faucibus \r\nnisl tincidunt. Lectus urna duis convallis convallis tellus id interdum \r\nvelit laoreet. Nunc mattis enim ut tellus. Phasellus vestibulum lorem \r\nsed risus ultricies tristique nulla</b>. Magnis dis parturient montes \r\nnascetur ridiculus. Fringilla est ullamcorper eget nulla facilisi etiam.\r\n Mattis rhoncus urna neque viverra. Sagittis id consectetur purus ut \r\nfaucibus pulvinar elementum integer. Aenean et tortor at risus viverra \r\nadipiscing at. Ornare quam viverra orci sagittis eu. Est pellentesque \r\nelit ullamcorper dignissim cras. Ultrices tincidunt arcu non sodales \r\nneque.</p>', 0, '2022-03-04 05:19:31', '2022-03-04 05:33:44'),
(3, 1, 'Culpa iusto optio d', '1646396998100.IMG_20201130_102526.jpg', '<p>Aliquip aut deleniti<img style=\"width: 640px;\" src=\"https://cdn1-production-images-kly.akamaized.net/ko1EUW7YrruN1vA-wdxeDp-A1BU=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2778728/original/099726200_1555304220-game-of-thrones-character-images-reg.jpg\"></p>', 0, '2022-03-04 05:29:58', '2022-03-04 05:29:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_perizinan`
--

CREATE TABLE `a_perizinan` (
  `id` int(11) NOT NULL,
  `id_k_perizinan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `kode_hapus` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `a_perizinan`
--

INSERT INTO `a_perizinan` (`id`, `id_k_perizinan`, `judul`, `gambar`, `deskripsi`, `kode_hapus`, `created_at`, `updated_at`) VALUES
(1, 1, 'Note', '1646382063100.IMG_20210125_070313.jpg', '<p>L<b>orem ipsum dolor sit amet, consectetur adipiscing elit</b>, <u>sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. </u><i>Venenatis cras sed \r\nfelis eget velit. Dui sapien eget mi proin sed libero</i>.<span style=\"background-color: rgb(181, 214, 165);\"> Leo in vitae \r\nturpis massa sed elementum tempus egestas sed. Eget arcu dictum varius \r\nduis. Mauris vitae ultricies leo integer malesuada nunc vel risus \r\ncommodo. Et netus et malesuada fames ac turpis egestas sed. Id leo in \r\nvitae turpis massa. Sem viverra aliquet eget sit amet tellus cras \r\nadipiscing. Etiam non quam lacus suspendisse faucibus interdum posuere. </span>\r\n<span style=\"font-family: &quot;Comic Sans MS&quot;;\">Augue interdum velit euismod in pellentesque. Orci ac auctor augue \r\nmauris augue neque. Ullamcorper morbi tincidunt ornare massa eget \r\negestas purus viverra. Sed euismod nisi porta lorem mollis aliquam ut \r\nporttitor leo. Lectus proin nibh nisl condimentum id venenatis a.</span></p>', 0, '2022-03-04 01:21:04', '2022-03-04 05:15:56'),
(2, 1, 'Consectetur quo pla', '1646395799100.SKY_20200520_233939_2162047500549544703.jpg', '<b>Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant \r\nmorbi. Commodo sed egestas egestas fringilla phasellus faucibus \r\nscelerisque eleifend donec</b>. <u>Enim ut sem viverra aliquet eget sit amet \r\ntellus cras. Aenean sed adipiscing diam donec adipiscing tristique risus\r\n nec feugiat</u>. <i>Facilisi morbi tempus iaculis urna id volutpat lacus \r\nlaoreet non. Sit amet mauris commodo quis imperdiet massa tincidunt.</i> \r\nNisi vitae suscipit tellus mauris. Nisl pretium fusce id velit ut tortor\r\n pretium viverra suspendisse. Tortor id aliquet lectus proin nibh. \r\nCondimentum mattis pellentesque id nibh tortor id aliquet lectus proin. \r\nConsectetur adipiscing elit duis tristique sollicitudin nibh sit amet. <span style=\"background-color: rgb(255, 0, 0);\">\r\nVitae tempus quam pellentesque nec nam aliquam sem et. Elementum tempus \r\negestas sed sed risus pretium. Eu consequat ac felis donec et odio \r\npellentesque diam. Egestas diam in arcu cursus euismod quis. Sodales \r\nneque sodales ut etiam sit amet nisl purus in. Est ante in nibh mauris \r\ncursus mattis molestie. Viverra vitae congue eu consequat ac felis donec\r\n et odio. Leo in vitae turpis massa sed elementum tempus egestas. Quis \r\nlectus nulla at volutpat diam ut venenatis tellus in.</span>', 0, '2022-03-04 05:09:59', '2022-03-04 05:16:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `app_name` varchar(50) NOT NULL,
  `app_author` varchar(50) NOT NULL,
  `app_desc` text DEFAULT NULL,
  `app_year` varchar(4) NOT NULL,
  `app_icon` varchar(255) DEFAULT NULL,
  `app_favicon` varchar(255) NOT NULL,
  `app_vers` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `config`
--

INSERT INTO `config` (`id`, `app_name`, `app_author`, `app_desc`, `app_year`, `app_icon`, `app_favicon`, `app_vers`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard Garuda UMKM', 'Sukumaya Technology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022', 'garuda.png', 'garudawhite.png', '0.1', '2022-03-05 04:15:34', '2022-03-04 23:03:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_edu`
--

CREATE TABLE `k_edu` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `kode_hapus` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `k_edu`
--

INSERT INTO `k_edu` (`id`, `kategori`, `keterangan`, `kode_hapus`, `created_at`, `updated_at`) VALUES
(1, 'Kategori Video', 'Keterangan', 0, '2022-02-28 20:28:09', '2022-02-28 20:28:09'),
(2, 'Voluptatibus et quos', 'Fugiat delectus eiu', 1, '2022-02-28 20:28:16', '2022-02-28 20:28:24'),
(3, 'Dolor id qui tempori', 'Quis ea accusantium', 0, '2022-03-04 05:48:18', '2022-03-04 05:48:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_exportir`
--

CREATE TABLE `k_exportir` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `kode_hapus` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `k_exportir`
--

INSERT INTO `k_exportir` (`id`, `kategori`, `keterangan`, `kode_hapus`, `created_at`, `updated_at`) VALUES
(1, 'Exportir', 'Keterangan', 0, '2022-02-28 20:23:34', '2022-02-28 20:23:34'),
(2, 'Non ipsam dolorem al', 'Incididunt ut incidi', 1, '2022-02-28 20:24:24', '2022-02-28 20:24:31'),
(3, 'Voluptate lorem reru', 'Excepturi ipsum in', 0, '2022-03-04 05:17:28', '2022-03-04 05:17:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_perizinan`
--

CREATE TABLE `k_perizinan` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `kode_hapus` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `k_perizinan`
--

INSERT INTO `k_perizinan` (`id`, `kategori`, `keterangan`, `kode_hapus`, `created_at`, `updated_at`) VALUES
(1, 'Dummy', 'Keterangan', 0, '2022-02-28 20:12:01', '2022-02-28 20:12:01'),
(3, 'Commodo aliquip in m', 'Soluta ad minus nobi', 0, '2022-03-04 05:17:11', '2022-03-04 05:17:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `marketplace`
--

CREATE TABLE `marketplace` (
  `id` int(11) NOT NULL,
  `marketplace` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `kode_hapus` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `marketplace`
--

INSERT INTO `marketplace` (`id`, `marketplace`, `alamat`, `email`, `telp`, `keterangan`, `foto`, `kode_hapus`, `created_at`, `updated_at`) VALUES
(1, 'UD Merdeka', 'Padang', 'me.ri.sa1603@gmail.com', '6283899196999', 'Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.', '1646060373100.Eden.jpg', 0, '2022-02-28 07:59:33', '2022-02-28 07:59:33'),
(2, 'Castellar', 'Komplek SAHARA', 'dummy@gmail.com', '6282384637581', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '164606959199.IMG_20211011_013906.jpg', 0, '2022-02-28 10:33:11', '2022-02-28 10:33:11'),
(3, 'Tempore molestiae v', 'Autem voluptas sint', 'xuwug@mailinator.com', '765379754', 'Enim quibusdam tempo', '164638111699.Screenshot_2020-11-06-22-39-35-24_e80eb31669cc7edfbce1531f4d25a535.jpg', 0, '2022-03-04 01:05:16', '2022-03-04 01:05:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_marketplace` int(11) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `harga` double DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `kode_hapus` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_marketplace`, `produk`, `harga`, `keterangan`, `foto`, `kode_hapus`, `created_at`, `updated_at`) VALUES
(1, 2, 'Qui ullamco esse ape', 70000, 'Odio molestias aut u', '1646071132100.Gorden.jpg', 0, '2022-02-28 10:58:52', '2022-02-28 10:58:52'),
(2, 2, 'Provident distincti', 40000, 'Non provident sit', NULL, 0, '2022-02-28 11:25:40', '2022-02-28 20:13:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `a_edu`
--
ALTER TABLE `a_edu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `a_exportir`
--
ALTER TABLE `a_exportir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `a_perizinan`
--
ALTER TABLE `a_perizinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `k_edu`
--
ALTER TABLE `k_edu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `k_exportir`
--
ALTER TABLE `k_exportir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `k_perizinan`
--
ALTER TABLE `k_perizinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `marketplace`
--
ALTER TABLE `marketplace`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `a_edu`
--
ALTER TABLE `a_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `a_exportir`
--
ALTER TABLE `a_exportir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `a_perizinan`
--
ALTER TABLE `a_perizinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `k_edu`
--
ALTER TABLE `k_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `k_exportir`
--
ALTER TABLE `k_exportir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `k_perizinan`
--
ALTER TABLE `k_perizinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `marketplace`
--
ALTER TABLE `marketplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
