-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Bulan Mei 2024 pada 08.19
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sanjaya_rent_car`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `Id_Admin` bigint NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Sebagai` text,
  `Nomor_Registrasi` text,
  `Email` varchar(100) DEFAULT NULL,
  `Nama_Lengkap` varchar(100) DEFAULT NULL,
  `Nomor_Handphone` text,
  `Waktu_Terakhir_Login` datetime DEFAULT NULL,
  `Id_Role` text NOT NULL,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`Id_Admin`, `Username`, `Password`, `Sebagai`, `Nomor_Registrasi`, `Email`, `Nama_Lengkap`, `Nomor_Handphone`, `Waktu_Terakhir_Login`, `Id_Role`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'admin', 'c8971720819c50b265b0ed632a25b3de', 'Super Administrator', 'A21021302013622', 'admin@cvrahayuputra.com', 'Super Admin', '81231231', NULL, '1', '2021-02-13 02:01:36', 'Aktif'),
(4, 'admin2', '58833e049e2c5bc381b3b39bbd5166de', 'Super Administrator', 'A24022708545244', 'admin@survei.io', 'Admin', '08123132123', NULL, '1', '2024-02-27 08:54:52', 'Terhapus Permanen'),
(5, 'admin3', '2e9b1bddcdf76f39a063b0afc9abe044', 'Administrator', 'A24022708562426', 'admin@survei.io', 'Staff', '08123132123', NULL, '2', '2024-02-27 08:56:24', 'Terhapus Permanen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_banner`
--

CREATE TABLE `tb_banner` (
  `Id_Banner` bigint NOT NULL,
  `Judul` varchar(150) NOT NULL,
  `Deskripsi` text,
  `Link` varchar(150) DEFAULT NULL,
  `Kategori` varchar(100) DEFAULT NULL,
  `Foto_Banner` text,
  `Judul_Eng` text,
  `Deskripsi_Eng` text,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_banner`
--

INSERT INTO `tb_banner` (`Id_Banner`, `Judul`, `Deskripsi`, `Link`, `Kategori`, `Foto_Banner`, `Judul_Eng`, `Deskripsi_Eng`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'Sanjaya Rental Mobil Medan', 'Pusat Layanan Rental Mobil Terbaik di Kota Medan', '', 'top-center', '45bd61892478b39add7af63081bb4242_1_Foto_Banner.jpg', 'Sanjaya Rent Car', 'Pusat Layanan Rental Mobil Terbaik di Kota Medan', '2024-02-27 11:02:52', 'Aktif'),
(2, 'Kualitas Teruji, Layanan Terbaik', 'Bekerja Bersama Kami!', '', 'top-center', 'dbaeefb92a1d13e4daa68672651919ca_2_Foto_Banner.jpg', 'Sanjaya Rent Car', 'Kualitas Teruji, Layanan Terbaik', '2024-02-27 11:03:04', 'Aktif'),
(3, 'Bekerja Bersama Kami!', 'Bergabunglah dengan kami untuk kerjasama yang terpercaya dan jangka panjang dalam menyediakan solusi kemasan kayu yang tepat bagi bisnis Anda.', '', 'bottom-center', '', 'Work With Us!', 'Work with us for a trusted and long-term collaboration in providing the right wooden packaging solutions for your business.', '2024-02-29 10:29:09', 'Terhapus Permanen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_blog_artikel`
--

CREATE TABLE `tb_blog_artikel` (
  `Id_Blog_Artikel` bigint NOT NULL,
  `Id_Pengguna` bigint NOT NULL,
  `Judul_Artikel` text,
  `Isi_Artikel` text,
  `Tag_Artikel` text,
  `Status_Artikel` text NOT NULL,
  `Foto_Artikel` text,
  `Waktu_Terakhir_Update` datetime DEFAULT NULL,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_blog_artikel`
--

INSERT INTO `tb_blog_artikel` (`Id_Blog_Artikel`, `Id_Pengguna`, `Judul_Artikel`, `Isi_Artikel`, `Tag_Artikel`, `Status_Artikel`, `Foto_Artikel`, `Waktu_Terakhir_Update`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 1, 'Mengoptimalkan Keamanan dan Efisiensi: Peran Penting Packing Box Pallet Kayu', 'Packing box pallet kayu telah menjadi salah satu elemen yang tidak terpisahkan dalam rantai pasok modern. Baik untuk pengiriman domestik maupun internasional, pallet kayu menawarkan solusi yang kuat, handal, dan ramah lingkungan untuk mengemas dan mengangkut berbagai jenis barang. Artikel ini akan menjelaskan mengapa penggunaan packing box pallet kayu tetap menjadi pilihan yang populer di berbagai industri.\r\n\r\n1. Keunggulan Keamanan\r\n\r\nKeamanan adalah faktor utama dalam pengiriman barang. Dalam hal ini, pallet kayu menonjol karena kekuatannya yang dapat diandalkan. Dibandingkan dengan material lain, seperti plastik atau kardus, kayu menawarkan kekuatan yang superior, memastikan barang tetap aman selama proses pengiriman. Selain itu, pallet kayu juga memberikan stabilitas yang baik, mengurangi risiko kerusakan akibat pergeseran atau benturan.\r\n\r\n2. Kehandalan dan Daya Tahan\r\n\r\nPallet kayu terkenal karena daya tahan dan kemampuannya untuk menangani beban yang berat. Mereka dapat digunakan berulang kali tanpa mengalami penurunan kinerja yang signifikan. Ini membuatnya menjadi investasi yang berkelanjutan dalam jangka panjang bagi perusahaan yang terlibat dalam rantai pasok.\r\n\r\n3. Ketersediaan dan Kemudahan Pembuatan\r\n\r\nSalah satu keuntungan besar dari pallet kayu adalah ketersediaannya yang luas. Kayu adalah bahan yang relatif murah dan mudah didapat di banyak bagian dunia. Selain itu, pembuatan pallet kayu relatif sederhana dan dapat dilakukan dengan biaya yang rendah. Hal ini memungkinkan perusahaan untuk dengan mudah mengakses dan memperoleh pallet kayu sesuai kebutuhan mereka.\r\n\r\n4. Ramah Lingkungan\r\n\r\nMeskipun ada perdebatan tentang dampak lingkungan dari penggunaan kayu dalam industri, pallet kayu sering dianggap lebih ramah lingkungan daripada alternatifnya. Kayu adalah sumber daya yang dapat diperbarui dan dapat didaur ulang dengan relatif mudah. Selain itu, ketika dibandingkan dengan plastik, pembuatan pallet kayu cenderung menghasilkan jejak karbon yang lebih rendah.\r\n\r\n5. Fleksibilitas dalam Desain\r\n\r\nPallet kayu dapat disesuaikan dengan kebutuhan spesifik pengguna. Mereka dapat dirancang dalam berbagai ukuran dan bentuk, serta dapat dimodifikasi untuk memenuhi persyaratan khusus pengiriman atau penyimpanan. Fleksibilitas ini membuatnya menjadi pilihan yang ideal untuk berbagai jenis barang, dari produk makanan hingga barang elektronik.\r\n\r\nDengan mempertimbangkan keunggulan-keunggulan di atas, tidak mengherankan bahwa packing box pallet kayu tetap menjadi pilihan yang dominan dalam industri pengemasan dan pengiriman. Dalam menghadapi tantangan global seperti meningkatnya kebutuhan akan efisiensi dan keselamatan dalam rantai pasok, penggunaan pallet kayu terus berkembang sebagai solusi yang andal dan efektif.', 'Kayu,PackingBox,Pallet,Box', 'Publikasi', '432895e0936e6f9ac878a4386306a81e_1Foto_Artikel.jpg', '2024-02-27 11:34:09', '2021-06-02 08:27:11', 'Aktif'),
(2, 1, 'Pentingnya Pohon dan Kayu bagi Manusia', 'Pohon dan kayu tidak hanya memberikan manfaat langsung bagi manusia, tetapi juga secara tidak langsung memengaruhi berbagai aspek kehidupan kita. Mereka berperan dalam mengatur iklim, menyerap karbon dioksida, dan mengurangi polusi udara. Selain itu, hutan-hutan yang sehat menjadi habitat bagi berbagai spesies tumbuhan dan hewan, menjaga keanekaragaman hayati Bumi. Dalam bidang ekonomi, industri kayu menyediakan pekerjaan bagi jutaan orang di seluruh dunia.\r\n\r\nOleh karena itu, penting bagi kita untuk memahami nilai ekologis, ekonomis, dan sosial dari pohon dan kayu serta berkomitmen untuk melestarikannya demi masa depan yang berkelanjutan bagi planet ini.', 'Kayu,manusia,kehidupan,pohon', 'Publikasi', 'a308b610a9c38904da864ac1e9988f2a_2Foto_Artikel.jpg', '2024-02-27 11:33:21', '2021-06-03 06:50:41', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_role`
--

CREATE TABLE `tb_data_role` (
  `Id_Role` bigint NOT NULL,
  `Nama_Role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi_Role` text COLLATE utf8mb4_unicode_ci,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_data_role`
--

INSERT INTO `tb_data_role` (`Id_Role`, `Nama_Role`, `Deskripsi_Role`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'Super Administrator', 'All of Module', '2022-02-01 12:39:01', 'Aktif'),
(2, 'Staff Informasi', 'Staff Informasi', '2022-02-01 14:15:34', 'Aktif'),
(4, 'Admin Galeri dan Artikel', 'Hanya Galeri dan Artikel', '2024-02-27 09:52:41', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_role_crud`
--

CREATE TABLE `tb_data_role_crud` (
  `Id_Role_CRUD` bigint NOT NULL,
  `Id_Role` bigint NOT NULL,
  `Nama_Modul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi_Modul` text COLLATE utf8mb4_unicode_ci,
  `Akses` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_data_role_crud`
--

INSERT INTO `tb_data_role_crud` (`Id_Role_CRUD`, `Id_Role`, `Nama_Modul`, `Deskripsi_Modul`, `Akses`) VALUES
(1, 4, 'Admin_Panel', '', 'Tidak'),
(2, 4, 'Data_Banner', '', 'Tidak'),
(3, 4, 'Tentang_Kami', '', 'Tidak'),
(4, 4, 'FAQ', '', 'Tidak'),
(5, 4, 'Testimoni', '', 'Tidak'),
(6, 4, 'Data_Artikel', '', 'Iya'),
(7, 4, 'Data_Galeri', '', 'Iya'),
(8, 2, 'Admin_Panel', '', 'Tidak'),
(9, 2, 'Data_Banner', '', 'Tidak'),
(10, 2, 'Tentang_Kami', '', 'Iya'),
(11, 2, 'FAQ', '', 'Iya'),
(12, 2, 'Testimoni', '', 'Iya'),
(13, 2, 'Data_Artikel', '', 'Iya'),
(14, 2, 'Data_Galeri', '', 'Iya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_faq`
--

CREATE TABLE `tb_faq` (
  `Id_Faq` int NOT NULL,
  `Pertanyaan` text COLLATE utf8mb4_general_ci NOT NULL,
  `Jawaban` text COLLATE utf8mb4_general_ci NOT NULL,
  `Pertanyaan_Eng` text COLLATE utf8mb4_general_ci,
  `Jawaban_Eng` text COLLATE utf8mb4_general_ci,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_faq`
--

INSERT INTO `tb_faq` (`Id_Faq`, `Pertanyaan`, `Jawaban`, `Pertanyaan_Eng`, `Jawaban_Eng`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'Apa itu Sanjaya Rental Mobil Medan?', 'Sanjaya Rental Mobil Medan adalah Pusat Layanan Rental Mobil Terbaik di Kota Medan', 'What is a Sanjaya Rent Car?', 'Sanjaya Rental Mobil Medan adalah Pusat Layanan Rental Mobil Terbaik di Kota Medan', '2021-05-30 05:50:28', 'Aktif'),
(2, 'Apa saja paket layanan Sanjaya Rental Mobil Medan?', 'PAKET BERASTAGI INCLUDE (MOBIL+DRIVER+BBM);\r\nPAKET SAMOSIR INCLUDE (MOBIL+DRIVER+BBM);\r\nPAKET WISATA  INCLUDE (MOBIL+DRIVER+BBM);\r\nPAKET WEDDING CAR;\r\nANTAR JEMPUT BANDARA KUALANAMU', 'What does  Sanjaya Rent Car Medan?', 'PAKET BERASTAGI INCLUDE (MOBIL+DRIVER+BBM);\r\nPAKET SAMOSIR INCLUDE (MOBIL+DRIVER+BBM);\r\nPAKET WISATA  INCLUDE (MOBIL+DRIVER+BBM);\r\nPAKET WEDDING CAR;\r\nANTAR JEMPUT BANDARA KUALANAMU', '2021-05-30 05:56:06', 'Aktif'),
(3, 'Siapa saja yang telah menggunakan Sanjaya Rental Mobil?', 'Kami telah melayani sewa mobil kepada lebih dari 1000 orang di Kota Medan', 'What companies have used Sanjaya Rent Car?', 'Kami telah melayani sewa mobil kepada lebih dari 1000 orang di Kota Medan', '2021-05-30 05:56:59', 'Aktif'),
(4, 'Apakah CV. Rahayu Putra memiliki hasil pekerjaan yang berkualitas?', 'Kami berkomitmen dengan pelayanan yang terbaik dan kualitas yang terbaik kepada perusahaan-perusahaan yang memerlukan produk kami dan untuk memastikan memenuhi kebutuhan mitra kami. Motto : Terpercaya, Berkualitas & Berintegritas.', 'Is CV. Rahayu Putra has quality work?', 'We are committed to providing the best service and best quality to companies that need our products and to ensuring we meet the needs of our partners. Motto: Trusted, Quality & Integrity.', '2021-05-30 05:58:35', 'Terhapus Permanen'),
(5, 'Apakah soal dan pembahasan TryOut bisa didownload?', 'Soal dan pembahasan Try Out UTBK online TryoutMandiri tidak bisa didownload atau dicetak, tetapi soal dan pembahasan akan tersimpan terus di akun kamu supaya bisa kamu gunakan untuk belajar.', NULL, NULL, '2021-05-30 06:02:58', 'Terhapus Permanen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `Id_Galeri` bigint NOT NULL,
  `Judul_Galeri` text,
  `Keterangan` text,
  `Foto_Galeri` text,
  `Judul_Galeri_Eng` text,
  `Keterangan_Eng` text,
  `Waktu_Terakhir_Update` datetime DEFAULT NULL,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`Id_Galeri`, `Judul_Galeri`, `Keterangan`, `Foto_Galeri`, `Judul_Galeri_Eng`, `Keterangan_Eng`, `Waktu_Terakhir_Update`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'Galeri 1', 'Sewa Mobil 1', 'd3ee8cf9bc9101a550cafb6d80f4ef38_1Foto_Galeri.jpg', 'Galeri 1', 'Sewa Mobil 1', '2024-05-25 07:46:32', '2024-03-06 20:50:35', 'Aktif'),
(2, 'Galeri 2', 'Sewa Mobil 2', 'd6a886ba701323dc2b4857012e24763d_2Foto_Galeri.jpg', 'Galeri 2', 'Sewa Mobil 2', '2024-05-25 07:48:00', '2024-02-27 11:18:44', 'Aktif'),
(3, 'Galeri 3', 'Sewa Mobil 3', 'b27a0b9fb259292c4b01942b3bfc3578_3Foto_Galeri.jpg', 'Galeri 3', 'Sewa Mobil 3', '2024-05-25 07:47:28', '2024-02-27 11:19:20', 'Aktif'),
(4, 'Galeri 4', 'Sewa Mobil 4', 'aa9b9806602d03d43c1d33841be12708_4Foto_Galeri.jpg', 'Galeri 4', 'Sewa Mobil 4', '2024-05-25 07:47:47', '2024-03-04 05:46:02', 'Aktif'),
(5, 'Siku L10 & Siku L20', 'Contoh hasil pembuatan Siku L10 & Siku L20', '', 'Wooden Bracket L10 & Siku L20', 'Example of the results of making Wooden Bracket L10 & L20', '2024-03-06 22:55:26', '2024-02-29 10:23:38', 'Terhapus Permanen'),
(6, 'Bbsc 2mm 48x40', 'Pembuatan Bbsc 2mm 48x40', '', 'Bbsc 2mm 48x40', 'Making Bbsc 2mm 48x40', '2024-03-06 22:55:51', '2024-02-27 11:20:00', 'Terhapus Permanen'),
(8, 'Pallet Kayu', 'Pallet Kayu', 'b7856c4d7f9149176b498c6495ac34d8_8_Foto_Galeri.jpg', 'Wooden Pallet', 'Wooden Pallet', '2024-03-07 08:57:32', '2024-03-07 08:57:32', 'Terhapus Permanen'),
(9, 'End cap 120x84', 'Contoh End cap 120x84', '1320ea416b1d6f4bdf5dda3ce6db9f7e_9_Foto_Galeri.jpg', 'End cap 120x84', 'End cap 120x84 Example', '2024-03-07 09:02:04', '2024-03-07 08:59:42', 'Terhapus Permanen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `Id_Kontak` bigint NOT NULL,
  `Nama` text COLLATE utf8mb4_general_ci NOT NULL,
  `Instansi` text COLLATE utf8mb4_general_ci,
  `Pesan` text COLLATE utf8mb4_general_ci NOT NULL,
  `Email` text COLLATE utf8mb4_general_ci NOT NULL,
  `Nomor_Handphone` text COLLATE utf8mb4_general_ci,
  `Follow_Up` text COLLATE utf8mb4_general_ci,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`Id_Kontak`, `Nama`, `Instansi`, `Pesan`, `Email`, `Nomor_Handphone`, `Follow_Up`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'Ghifary Ilham', 'PT. Revolter Clothing', 'Saya ingin pesan box kayu sebanyak 1.000 pcs', 'ghiffary.ilham@gmail.com', '6285779908779', NULL, '2024-03-04 06:04:28', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_newsletter`
--

CREATE TABLE `tb_newsletter` (
  `Id_Newsletter` bigint NOT NULL,
  `Nama` text NOT NULL,
  `Email` text NOT NULL,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_newsletter`
--

INSERT INTO `tb_newsletter` (`Id_Newsletter`, `Nama`, `Email`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'Ghifary 98', 'ghiffary98@gmail.com', '2024-03-04 06:25:20', 'Aktif'),
(2, 'Iyan', 'yanask@gmail.com', '2024-05-25 09:49:19', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelayanan`
--

CREATE TABLE `tb_pelayanan` (
  `Id_Pelayanan` bigint NOT NULL,
  `Judul_Pelayanan` text COLLATE utf8mb4_general_ci NOT NULL,
  `Cover_Pelayanan` text COLLATE utf8mb4_general_ci,
  `Kategori` text COLLATE utf8mb4_general_ci,
  `Deskripsi` text COLLATE utf8mb4_general_ci,
  `Foto_Pelayanan` text COLLATE utf8mb4_general_ci,
  `Judul_Pelayanan_Eng` text COLLATE utf8mb4_general_ci,
  `Deskripsi_Eng` text COLLATE utf8mb4_general_ci,
  `Harga` text COLLATE utf8mb4_general_ci NOT NULL,
  `Fasilitas` text COLLATE utf8mb4_general_ci NOT NULL,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pelayanan`
--

INSERT INTO `tb_pelayanan` (`Id_Pelayanan`, `Judul_Pelayanan`, `Cover_Pelayanan`, `Kategori`, `Deskripsi`, `Foto_Pelayanan`, `Judul_Pelayanan_Eng`, `Deskripsi_Eng`, `Harga`, `Fasilitas`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'Toyota Innova Reborn', '29882b436a897cf2ce1118194c35d178_1_Foto.jpg', '1', 'Spesifikasi Innova adalah', NULL, 'Wooden Pallet', 'A wooden pallet is a tool or base made of wood and used to support and facilitate the process of loading and unloading goods. The existence of wooden pallets has become an integral part of the global supply chain, facilitating the efficient delivery and storage of goods throughout the world. The use of wooden pallets is very broad, found in various industries ranging from manufacturing, logistics, agriculture, to e-commerce trade. Its flexibility and reliability make wooden pallets the main choice for companies that prioritize efficiency in the distribution of their goods.\r\n<br>\r\nOne of the main advantages of wooden pallets is their strength and durability. Compared to other materials such as plastic or cardboard, wood provides superior strength that can support heavy loads. This allows items to be stacked and transported safely, reducing the risk of damage during the shipping process. Apart from that, wood is also relatively easy to process and repair if damaged, making wooden pallets an economical choice in the long term.', '699000', '', '2024-02-29 10:19:42', 'Aktif'),
(2, 'Toyota All New Avanza', '2e02981eb0774e8331fe1dde9f776925_2_Foto.jpg', '1', 'Spesifikasi Avanza', NULL, 'Packing Box', 'Packing Box is a storage area specifically designed to maintain the security and integrity of goods during the shipping process. With strong materials and proper design, packing boxes provide the necessary protection against impacts, shocks and pressure that may occur during transportation. Apart from that, packing boxes also facilitate efficient organization and grouping of goods, making loading and unloading and storage easier. Thus, the use of packing boxes is key in ensuring that goods remain safe and in good condition until they reach their final destination.', '649000', '', '2024-02-29 15:31:10', 'Aktif'),
(3, 'Mitsubishi New Expander', '8754a8a3b3940ebd438eeb27a0591d9e_3_Foto.jpg', '1', 'Spesifikasi Expander', NULL, 'Wooden Bracket', 'Wooden brackets are a type of wood that is often used in various craft and construction projects. This wood has sufficient strength to be used as a support or hook in a variety of applications. With its ability to be easily cut and shaped, wooden elbows are a popular choice for making shelves, tables or small building construction. Additionally, the natural beauty and grain of wood lends a unique aesthetic touch to these projects. With good durability and wide availability, wooden elbows remain a relevant choice in the world of crafts and construction today.', '649000', '', '2024-02-29 15:32:02', 'Aktif'),
(4, 'Toyota New Fortuner', '03b835fd7b638e1ad35feea51ebcdf53_4_Foto.jpg', '1', 'Spesifikasi Fortuner', NULL, '', '', '999000', 'Driver;BBM;Paket Minuman', '2024-05-25 07:39:21', 'Aktif'),
(5, 'Mitsubishi New Pajero Sport', '355818d0ce7f5c24e29b78a8d3386c95_5_Foto.jpg', '1', 'Spesifikasi Mobil', NULL, '', '', '999000', 'Driver\'BBM;Paket Minuman', '2024-05-25 07:40:09', 'Aktif'),
(6, 'Toyota New Alphard', '625f824810f18b05f4c18d0dd664fba9_6_Foto.jpg', '1', 'Spesifikasi Mobil', NULL, '', '', '2199000', 'Driver;BBM;Paket Minuman', '2024-05-25 07:40:55', 'Aktif'),
(7, 'Toyota Hi-Ace', '7cfa1bed787c2ba4620b2c422a020ad0_7_Foto.jpg', '1', 'Spesifikasi Mobil', NULL, '', '', '1199000', 'Driver;BBM;Paket Minuman', '2024-05-25 07:41:27', 'Aktif'),
(8, 'Toyota Innova Reborn', '0634f141e9390432dc90a7be81db4450_8_Foto.jpg', '2', 'Spesifikasi Mobil', NULL, '', '', '699000', 'Driver;BBM;Paket Minuman', '2024-05-25 07:43:11', 'Aktif'),
(9, 'Toyota Innova Reborn', 'bb862f9247c66e0a4e8ed5a9933e08fc_9_Foto.jpg', '3', 'Spesifikasi', NULL, '', '', '949000', 'Driver;BBM;Paket Minuman', '2024-05-25 07:43:50', 'Aktif'),
(10, 'Toyota Innova Reborn', 'ee0d7dac8b301510b650b57a15a0ca31_10_Foto.jpg', '4', 'Spesifikasi', NULL, '', '', '899000', 'Driver;BBM;Bunga Hias', '2024-05-25 07:44:31', 'Aktif'),
(11, 'Toyota Innova Reborn', 'c26036e47eb70b33b1804e5919d33ba1_11_Foto.jpg', '1', 'Spesifikasi Mobil', NULL, '', '', '900000', 'Driver;BBM;Paket Minuman', '2024-05-25 07:45:00', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelayanan_kategori`
--

CREATE TABLE `tb_pelayanan_kategori` (
  `Id_Pelayanan_Kategori` bigint NOT NULL,
  `Nama_Pelayanan_Kategori` text NOT NULL,
  `Deskripsi_Pelayanan_Kategori` text NOT NULL,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_pelayanan_kategori`
--

INSERT INTO `tb_pelayanan_kategori` (`Id_Pelayanan_Kategori`, `Nama_Pelayanan_Kategori`, `Deskripsi_Pelayanan_Kategori`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'PAKET BERASTAGI INCLUDE (MOBIL+DRIVER+BBM)', 'BOOKING SEWA/RENTAL MOBIL HARIAN /  MINGGUAN BISA LANGSUNG WHATSAPP KE SALAH SATU ADMIN 1 ATAU ADMIN 2. ;\r\nSANJAYA RENTAL MOBIL MEDAN SEDIA SETIAP HARI SENIN - SABTU , DAN HARI LIBUR NASIONAL;\r\nKHUSUS HARI  MINGGU TIDAK BEROPERASI.;\r\n(NOTE : KECUALI SUDAH ADA BOOKING DIJAUH HARI ).', '2024-05-25 06:23:44', 'Aktif'),
(2, 'PAKET SAMOSIR INCLUDE (MOBIL+DRIVER+BBM)', 'BOOKING SEWA/RENTAL MOBIL HARIAN /  MINGGUAN BISA LANGSUNG WHATSAPP KE SALAH SATU ADMIN 1 ATAU ADMIN 2. ;\r\nSANJAYA RENTAL MOBIL MEDAN SEDIA SETIAP HARI SENIN - SABTU , DAN HARI LIBUR NASIONAL;\r\nKHUSUS HARI  MINGGU TIDAK BEROPERASI.;\r\n(NOTE : KECUALI SUDAH ADA BOOKING DIJAUH HARI ).;', '2024-05-25 06:24:19', 'Aktif'),
(3, 'PAKET WISATA  INCLUDE (MOBIL+DRIVER+BBM)', 'BOOKING SEWA/RENTAL MOBIL HARIAN /  MINGGUAN BISA LANGSUNG WHATSAPP KE SALAH SATU ADMIN 1 ATAU ADMIN 2. ;\r\nSANJAYA RENTAL MOBIL MEDAN SEDIA SETIAP HARI SENIN - SABTU , DAN HARI LIBUR NASIONAL;\r\nKHUSUS HARI  MINGGU TIDAK BEROPERASI.;\r\n(NOTE : KECUALI SUDAH ADA BOOKING DIJAUH HARI ).;', '2024-05-25 06:24:43', 'Aktif'),
(4, 'PAKET WEDDING CAR', 'BOOKING SEWA/RENTAL MOBIL HARIAN /  MINGGUAN BISA LANGSUNG WHATSAPP KE SALAH SATU ADMIN 1 ATAU ADMIN 2. ;\r\nSANJAYA RENTAL MOBIL MEDAN SEDIA SETIAP HARI SENIN - SABTU , DAN HARI LIBUR NASIONAL;\r\nKHUSUS HARI  MINGGU TIDAK BEROPERASI.;\r\n(NOTE : KECUALI SUDAH ADA BOOKING DIJAUH HARI ).;', '2024-05-25 06:25:02', 'Aktif'),
(5, 'ANTAR JEMPUT BANDARA KUALANAMU', 'BOOKING SEWA/RENTAL MOBIL HARIAN /  MINGGUAN BISA LANGSUNG WHATSAPP KE SALAH SATU ADMIN 1 ATAU ADMIN 2. ;\r\nSANJAYA RENTAL MOBIL MEDAN SEDIA SETIAP HARI SENIN - SABTU , DAN HARI LIBUR NASIONAL;\r\nKHUSUS HARI  MINGGU TIDAK BEROPERASI.;\r\n(NOTE : KECUALI SUDAH ADA BOOKING DIJAUH HARI ).;', '2024-05-25 06:25:16', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengaturan_website`
--

CREATE TABLE `tb_pengaturan_website` (
  `Id_Pengaturan_Website` int NOT NULL,
  `Judul_Website` text,
  `Deskripsi_Singkat` text,
  `Deskripsi_Lengkap` text,
  `Email_Admin` text,
  `Email_Customer_Service` text,
  `Nomor_Telpon` varchar(13) DEFAULT NULL,
  `Nomor_Handphone` varchar(13) DEFAULT NULL,
  `Alamat_Lengkap` text,
  `Nama_Facebook` text,
  `Url_Facebook` text,
  `Nama_Instagram` text,
  `Url_Instagram` text,
  `Nama_Twitter` text,
  `Url_Twitter` text,
  `Nama_Linkedin` text,
  `Url_Linkedin` text,
  `Nama_Youtube` text,
  `Url_Youtube` text,
  `Embed_Google_Maps` text,
  `Google_Maps_Url` text,
  `Nomor_CS` text,
  `Nama_CS` text,
  `CS_Sebagai` text,
  `Pesan_CS` text NOT NULL,
  `Judul_Website_Eng` text,
  `Deskripsi_Singkat_Eng` text,
  `Deskripsi_Lengkap_Eng` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengaturan_website`
--

INSERT INTO `tb_pengaturan_website` (`Id_Pengaturan_Website`, `Judul_Website`, `Deskripsi_Singkat`, `Deskripsi_Lengkap`, `Email_Admin`, `Email_Customer_Service`, `Nomor_Telpon`, `Nomor_Handphone`, `Alamat_Lengkap`, `Nama_Facebook`, `Url_Facebook`, `Nama_Instagram`, `Url_Instagram`, `Nama_Twitter`, `Url_Twitter`, `Nama_Linkedin`, `Url_Linkedin`, `Nama_Youtube`, `Url_Youtube`, `Embed_Google_Maps`, `Google_Maps_Url`, `Nomor_CS`, `Nama_CS`, `CS_Sebagai`, `Pesan_CS`, `Judul_Website_Eng`, `Deskripsi_Singkat_Eng`, `Deskripsi_Lengkap_Eng`) VALUES
(1, 'Sanjaya Rental Mobil Medan', 'Pusat Layanan Rental Mobil Terbaik di Kota Medan', 'Pusat Layanan Rental Mobil Terbaik di Kota Medan', 'tentalmobilsanjaya3@gmail.com', 'rentalmobilsanjaya3@gmail.com', '082167958055', '085710397197', 'Jl. Pelangi No.27, Teladan Bar., Kec. Medan Kota, Kota Medan, Sumatera Utara 20217', 'Sanjaya RentalMobil', 'https://www.facebook.com/profile.php?id=61559500105631&mibextid=rS40aB7S9Ucbxw6v', '@sanjayarentalmobil', 'https://www.instagram.com/sanjayarentalmobil?igsh=MTVkdzB1MTlwZDd3aA==', 'Sanjaya Rent Car', 'http://www.tiktok.com/@postrentcarmedan', '', '', '', '', '!1m18!1m12!1m3!1d3982.1080670374545!2d98.69153159999999!3d3.562586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313042e10184fd%3A0x932482cb7c41018f!2sJl.%20Pelangi%20No.27%2C%20Teladan%20Bar.%2C%20Kec.%20Medan%20Kota%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020217!5e0!3m2!1sid!2sid!4v1716593364071!5m2!1sid!2sid', 'https://maps.app.goo.gl/8kpAfFCw3AzAGwZi9', '82167958055', 'Admin 1', 'Admin', 'Halo Selamat Datang di Sanjaya Rental Mobil Medan, Silahkan beritahu kami jika anda terkendala masalah teknis atau administrasi lainnya', 'CV. Rahayu Putra', 'CV Rahayu Putra was established on November 11, 2016, in Leuwisadeng, Kabupaten Bogor. The business began in 1996, operating in the wood sawing industry for bistek/ckd. Since 2004 until now, the business has shifted towards pallet/packing box manufacturing.', 'In November 2016 we formed the business entity Commanditaire Vennotschaap or what can be called CV, with the name CV Rahayu Putra. Our company has collaborated as one of the box vendors of PT Asahimas Flat Glass Tbk. We are committed to providing the best service and best quality to companies that need our products and to ensuring we meet the needs of our partners. Motto: Trusted, Quality & Integrity. Our three motto values: Trust, Quality & Integrity are the core of our company. These three operational values are the basis for our company in making products that meet our partners\' standards.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tentang_kami`
--

CREATE TABLE `tb_tentang_kami` (
  `Id_Tentang_Kami` int NOT NULL,
  `Visi` text COLLATE utf8mb4_general_ci NOT NULL,
  `Misi` text COLLATE utf8mb4_general_ci NOT NULL,
  `Motto` text COLLATE utf8mb4_general_ci NOT NULL,
  `Sejarah` text COLLATE utf8mb4_general_ci,
  `Foto_Tentang_Kami` text COLLATE utf8mb4_general_ci,
  `Visi_Eng` text COLLATE utf8mb4_general_ci,
  `Misi_Eng` text COLLATE utf8mb4_general_ci,
  `Motto_Eng` text COLLATE utf8mb4_general_ci,
  `Sejarah_Eng` text COLLATE utf8mb4_general_ci,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_tentang_kami`
--

INSERT INTO `tb_tentang_kami` (`Id_Tentang_Kami`, `Visi`, `Misi`, `Motto`, `Sejarah`, `Foto_Tentang_Kami`, `Visi_Eng`, `Misi_Eng`, `Motto_Eng`, `Sejarah_Eng`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'Pusat Layanan Rental Mobil Terbaik di Kota Medan', 'Mudah & Nyaman,\r\nPost Rent Car Medan sudah teruji dengan Layanan dan Kualitas Terbaik; \r\nDriver Terbaik,\r\nDriver yang Ramah dan Sudah Teruji dan Tersertifikasi;\r\nCepat dan Sigap,\r\nFast Response dan Sigap dalam Menangani Permintaan Pelanggan', 'Kualitas Teruji, Layanan Terbaik', 'Pusat Layanan Rental Mobil Terbaik di Kota Medan', '03e8185e9d02245a547a8cd7b6832d7b_Foto_Tentang_Kami.jpg', 'To become a professional company with integrity in the pallet/packing box sector.', '1. Realizing a reliable company in the production of Pallet/Glass Packing Box. <br>\r\n2. Providing the best quality products. <br>\r\n3. Providing tangible benefits to all stakeholders of the company, including management, employees, society, and the environment.', 'TRUSTED, QUALITY, INTEGRITY', 'In November 2016 we formed the business entity Commanditaire Vennotschaap or what can be called CV, with the name CV Rahayu Putra. Our company has collaborated as one of the box vendors of PT Asahimas Flat Glass Tbk. We are committed to providing the best service and best quality to companies that need our products and to ensuring we meet the needs of our partners. Motto: Trusted, Quality & Integrity. Our three motto values: Trust, Quality & Integrity are the core of our company. These three operational values are the basis for our company in making products that meet our partners\' standards.', '2024-05-25 06:32:44', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `Id_Testimoni` bigint NOT NULL,
  `Nama` text COLLATE utf8mb4_general_ci NOT NULL,
  `Instansi` text COLLATE utf8mb4_general_ci NOT NULL,
  `Testimoni` text COLLATE utf8mb4_general_ci NOT NULL,
  `Rating` text COLLATE utf8mb4_general_ci NOT NULL,
  `Foto` text COLLATE utf8mb4_general_ci,
  `Waktu_Simpan_Data` datetime NOT NULL,
  `Status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`Id_Testimoni`, `Nama`, `Instansi`, `Testimoni`, `Rating`, `Foto`, `Waktu_Simpan_Data`, `Status`) VALUES
(1, 'Ghifary Ilham', 'Revolter Clothing', 'Pelayanan profesional, mobiil sehat, harga terjangkau', '5', '29882b436a897cf2ce1118194c35d178_1_Foto.png', '2021-06-01 07:17:23', 'Aktif'),
(2, 'Iyan', 'Customer', 'Sewa mobil dengan kualitas terbaik', '5', '2e02981eb0774e8331fe1dde9f776925_2_Foto.png', '2021-06-01 07:19:55', 'Aktif'),
(3, 'Nazma', 'Universitas Indonesia', 'Masuk UI bukan berarti nggak belajar. Tapi sering ikut TryOut membuat kita percaya diri dalam menghadapi UTBK', '5', '8754a8a3b3940ebd438eeb27a0591d9e_3_Foto.png', '2021-07-20 21:26:04', 'Terhapus Permanen'),
(4, 'Rahmat Hidayat', 'Customer', 'Pelayanan Pelanggan yang Ramah dan Responsif', '5', '03b835fd7b638e1ad35feea51ebcdf53_4_Foto.png', '2021-08-06 03:47:39', 'Aktif'),
(5, 'Robby', 'Customer', 'Konsistensi dalam Kualitas dan Layanan', '3', '355818d0ce7f5c24e29b78a8d3386c95_5_Foto.png', '2024-02-27 12:30:16', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Indeks untuk tabel `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`Id_Banner`);

--
-- Indeks untuk tabel `tb_blog_artikel`
--
ALTER TABLE `tb_blog_artikel`
  ADD PRIMARY KEY (`Id_Blog_Artikel`);

--
-- Indeks untuk tabel `tb_data_role`
--
ALTER TABLE `tb_data_role`
  ADD PRIMARY KEY (`Id_Role`);

--
-- Indeks untuk tabel `tb_data_role_crud`
--
ALTER TABLE `tb_data_role_crud`
  ADD PRIMARY KEY (`Id_Role_CRUD`);

--
-- Indeks untuk tabel `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD PRIMARY KEY (`Id_Faq`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`Id_Galeri`);

--
-- Indeks untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`Id_Kontak`);

--
-- Indeks untuk tabel `tb_newsletter`
--
ALTER TABLE `tb_newsletter`
  ADD PRIMARY KEY (`Id_Newsletter`);

--
-- Indeks untuk tabel `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  ADD PRIMARY KEY (`Id_Pelayanan`);

--
-- Indeks untuk tabel `tb_pelayanan_kategori`
--
ALTER TABLE `tb_pelayanan_kategori`
  ADD PRIMARY KEY (`Id_Pelayanan_Kategori`);

--
-- Indeks untuk tabel `tb_pengaturan_website`
--
ALTER TABLE `tb_pengaturan_website`
  ADD PRIMARY KEY (`Id_Pengaturan_Website`);

--
-- Indeks untuk tabel `tb_tentang_kami`
--
ALTER TABLE `tb_tentang_kami`
  ADD PRIMARY KEY (`Id_Tentang_Kami`);

--
-- Indeks untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`Id_Testimoni`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `Id_Admin` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `Id_Banner` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_blog_artikel`
--
ALTER TABLE `tb_blog_artikel`
  MODIFY `Id_Blog_Artikel` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_faq`
--
ALTER TABLE `tb_faq`
  MODIFY `Id_Faq` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `Id_Galeri` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_newsletter`
--
ALTER TABLE `tb_newsletter`
  MODIFY `Id_Newsletter` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  MODIFY `Id_Pelayanan` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_pelayanan_kategori`
--
ALTER TABLE `tb_pelayanan_kategori`
  MODIFY `Id_Pelayanan_Kategori` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_tentang_kami`
--
ALTER TABLE `tb_tentang_kami`
  MODIFY `Id_Tentang_Kami` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `Id_Testimoni` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
