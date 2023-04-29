-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 07:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techanic`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text,
  `meta_data` text,
  `short_content` text,
  `main_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `kategori_id`, `title`, `slug`, `content`, `meta_data`, `short_content`, `main_image`, `created_at`, `is_delete`) VALUES
(5, 1, 'Bagaimana Cara Menangani Kerusakan Karena Air atau Cairan?', 'bagaimana-cara-menangani-kerusakan-karena-air-atau-cairan', '<p>Apa yang harus dilakukan jika iPhone atau iPad Anda jatuh dalam air, kena tumpahan, dll...?</p>\n                                    <p>• Matikan segera iPhone/iPad Anda</p>\n                                    <p>• Jangan mencoba untuk mengisi daya baterai iPhone/iPad Anda untuk mengetahui apakah kondisinya hidup atau mati. Tindakan ini dapat menyebabkan arus pendek ke motherboard iPhone/iPad Anda.</p>\n                                    <p>• Bawa segera perangkat Anda ke Dr. Gadget untuk mendapatkan hasil terbaik. Semakin lama Anda membawa perangkat sesudah peristiwa tersebut terjadi semakin kecil kemungkinan bisa diperbaiki. Faktanya, 80% perbaikan berhasil dilakukan jika kerusakan sudah terjadi selama 2-3 hari.</p>\n                                    <p>• Jika Anda membawa iPhone atau iPad Anda ke penyedia servis lainnya, kemungkinan keberhasilan perbaikan turun hanya hingga 40%. Ini disebabkan teknik yang tidak tepat dan kerusakan tambahan yang mungkin akan dilakukan sebagian besar penyedia servis lain pada ponsel Anda.</p>\n                                    <p>Bagaimana cara kerjanya?</p>\n                                    <p>Saat Anda datang ke Dr. Gadget, teknisi kami akan berkomunikasi dengan Anda untuk menentukan masalah &nbsp;pada iPhone atau iPad Anda. Pemeriksaan iPhone atau iPad Anda akan dilakukan secara cuma-cuma. kami akan membersihkan motherboard iPhone atau iPadAnda dengan pencucian bahan kimia ultrasonik dalam.</p>\n                                    <p>Jika iPhone atau iPad Anda tampaknya tidak mungkin lagi diperbaiki, kami akan memberi tahu Anda secepatnya. Jika kami memperbaiki iPhone atau iPad Anda dan tetap tidak berfungsi selama masa garansi 90 hari, kami akan mengembalikan setiap biaya perbaikan yang telah Anda bayar.</p>			<br><br>', 'Apa yang harus dilakukan jika iPhone atau iPad Anda jatuh dalam air, kena tumpahan, dll...? • Matikan segera iPhone/iPad Anda • Jangan mencoba untuk mengisi daya baterai iPhone/iPad Anda untuk mengetahui apakah…', 'Apa yang harus dilakukan jika iPhone atau iPad Anda jatuh dalam air, kena tumpahan, dll...? • Matikan segera iPhone/iPad Anda • Jangan mencoba untuk mengisi daya baterai iPhone/iPad Anda untuk mengetahui apakah…', 'uploads/art_waterdamaged.jpg', '2023-04-27 13:31:51', 0),
(6, 2, 'Masalah IC dan Motherboard?', 'masalah-ic-dan-motherboard', '<p>Jenis masalah apa sajakah yang mungkin timbul pada motherboard atau IC?</p>\n<p>• Layar sentuh tidak berfungsi<br>• Fungsi kamera rusak<br>• Tombol abu-abu muncul di ikon Wi-Fi - Wi-Fi tidak terdeteksi<br>• iPhone/iPad tiba-tiba tidak mau diisi daya baterainya setelah segala cara dilakukan dan beberapa suku cadang diganti.<br>• iPhone atau iPad ‘stuck’ saat disinkronkan dengan iTunes</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ini tentu bukanlah daftar semua masalah yang dapat terjadi pada iPhone atau iPad Anda. Namun masalah-masalah ini cukup umum dalam kasus perbaikan yang dilakukan seadanya atau kesalahan suku cadang. Ketika Anda membawa iPhone/iPad Anda ke pusat perbaikan/servis lainnya, ada kemungkinan ponsel Anda bertambah rusak tanpa bisa diperbaiki lagi. Percayakan perangkat Anda pada Dr. Gadget untuk mendapatkan suku cadang terbaik dan perbaikan dari ahlinya. Meski kami terbaik dalam bisnis ini, biasanya kami tidak bisa memperbaiki kerusakan yang diakibatkan oleh gerai penyedia layanan lain jika Anda membawa iPhone atau iPad Anda ke penyedia servis lainnya terlebih dahulu. Hubungi Dr. Gadget secara langsung untuk mendapatkan perbaikan terbaik bagi iPhone atau iPad Anda sekarang juga!</p>', 'Jenis masalah apa sajakah yang mungkin timbul pada motherboard atau IC? • Layar sentuh tidak berfungsi• Fungsi kamera rusak• Tombol abu-abu muncul di ikon Wi-Fi - Wi-Fi tidak terdeteksi• iPhone/iPad tiba-tiba…', 'Jenis masalah apa sajakah yang mungkin timbul pada motherboard atau IC? • Layar sentuh tidak berfungsi• Fungsi kamera rusak• Tombol abu-abu muncul di ikon Wi-Fi - Wi-Fi tidak terdeteksi• iPhone/iPad tiba-tiba…', 'uploads/IC__300_300.jpg', '2023-04-27 13:31:51', 0),
(7, 3, 'Tips untuk Merawat Battery iPhone/iPad/Macbook', 'tips-untuk-merawat-battery-iphone-ipad-macbook', '<p><strong>Lakukan Pengisian battery saat INDIKATOR menunjukkan tanda merah, dan Lepas Pengisian saat battery sudah Full atau 100%.</strong></p>\n<p>Dalam hal ini bagi kita pengguna device sering mengalami kehabisan battery yang menyebabkan device mati, sangat tidak disarankan bagi Anda untuk didiamkan terlalu lama bahkan hingga berhari-hari karna dapat menyebabkan battery tidak akan kuat untuk menghasilkan power untuk menghidupkan device kembali, sehingga battery dinyatakan rusak bahkan dapat menyebabkan kerusakan pada mesinnya. Dan sebaliknya apabila Anda melakukan pengisian battery secara berlebihan, maka hal tersebut dapat memperpendek usia battery bahkan mengakibatkan battery akan Kembung atau mengembang.</p>\n<p><strong>Jangan mainkan aplikasi yang berat seperti, kamera, video atau games saat pengisian battery sedang dilakukan.</strong></p>\n<p>Pada saat dilakukan pengisian battery maka kinerja mesin akan terfokus pada proses penyimpanan daya ke battery. Untuk mendapatkan pengisian yang optimal maka disarankan untuk posisikan device dalam keadaan Stand By, apabila Anda menggunakan device saat pengisian apalagi dengan aplikasi yang berat, sudah dipastikan kinerja mesin akan terganggu dan pengisian tidak optimal. Hal ini juga dapat menyebabkan kerusakan pada Battery dan mesin.</p>\n<p><strong>Jangan lakukan pengisian battery melalui charger mobil yang terlalu sering dan berlebihan.</strong></p>\n<p>Sumber daya yang di supply ke battery berasal dari putaran mesin mobil, dimana apabila kecepatan tinggi maka battery cepat terisi, sebaliknya saat kecepatan rendah maka battery lambat terisi. Dengan kondisi jalan yang tidak menentu inilah, maka pengisian melalui charger mobil sangat tidak baik untuk device, selain merusak battery juga akan merusak mesin pada device.</p>\n<p><strong>Selalu menggunakan Aksesoris charger yang Original atau berkualitas.</strong></p>\n<p>Fitur canggih yang sudah disematkan pada produk Apple adalah peringatan akan penggunaan aksesoris yang tidak original. Setiap kali Anda menggunakan aksesoris palsu maka device anda akan menolak dan memberikan peringatan. Apabila kita lakukan itu secara terus-menerus maka akan mengakibatkan kerusakan pada battery dan fatal pada mesin.</p>\n<p><strong>Pastikan Stop Kontak yang digunakan Aman dan tidak terjadi Korsleting Listrik.</strong></p>\n<p>Apabila sudah ada tanda-tanda korsleting pada stop kontak, sebaiknya pindahkan pengisian ke stop kontak lainnya, dan segera cek kembali stop kontak tersebut guna menghindari kerusakan pada device dan mencegah terjadinya bencana kebakaran.</p>\n<p>Note : Umur setiap battery biasanya di ukur melalui cycle count yang dihasilkan battery. Setiap 1 x pengisian battery yang mencapai 100% maka itu baru dihitung 1 cycle, begitu pun seterusnya sampai angka cycle count battery tersebut dinyatakan sudah rusak.</p>			<br><br>', 'Lakukan Pengisian battery saat INDIKATOR menunjukkan tanda merah, dan Lepas Pengisian saat battery sudah Full atau 100%. Dalam hal ini bagi kita pengguna device sering mengalami kehabisan battery yang menyebabkan device…', 'Lakukan Pengisian battery saat INDIKATOR menunjukkan tanda merah, dan Lepas Pengisian saat battery sudah Full atau 100%. Dalam hal ini bagi kita pengguna device sering mengalami kehabisan battery yang menyebabkan device…', 'uploads/header_artikel__300_300.jpg', '2023-04-27 13:31:51', 0),
(8, 3, 'Anda Punya iPhone Baru? Anda Harus Mulai Merawatnya, Ini Caranya', 'cara-merawat-iphone-untuk-penggunaan-tahan-lama', '<p>Fungsi dari perawatan khusus ini adalah bahwa sejak awal ponsel dinyalakan, Anda pastinya ingin menjaganya agar tahan lama. Karena itulah tujuan utama dari sebuah ponsel. Berdasarkan hal tersebut, tips sederhana ini harus diikuti agar iPhone baru selalu tetap seperti baru dan dengan cara ini tidak akan mengalami masalah di masa depan.</p>\n<h2>Kiat Dasar untuk Merawat iPhone Baru</h2>\n<h3>1. Jangan sampai basah</h3>\n<p>Ini adalah saran yang mungkin sangat lawas, tetapi pada saat yang sama juga sangat berguna. Karena orang cenderung lupa bahwa tidak semua ponsel tahan air, oleh karena itu tidak boleh ditinggalkan di dekat wastafel atau kolam, dan hindari port charger menjadi lembab.</p>\n<h3>2. Perbarui terus-menerus</h3>\n<p>Setiap kali muncul simbol di layar bahwa ponsel itu sendiri atau aplikasi tertentu harus diperbarui, itu harus segera dilakukan agar tidak ada penundaan informasi yang ditawarkan Apple.</p>\n<h3>3. Jangan gunakan kabel atau pengisi daya selain yang asli</h3>\n<p>Ini mungkin terdengar seperti strategi pemasaran agar produk asli toko tetap digunakan, tetapi kenyataannya adalah bahwa itu harus dilakukan agar iPhone berfungsi dengan benar. Oleh karena itu, tidak boleh bergantian dengan charger atau kabel dari perusahaan lain.</p>\n<p><strong><em>Baca Juga: </em></strong><a href="../../../id/happenings/articles/46/mengapa-anda-harus-move-on-dari-android-ke-iphone"><strong><em>Mengapa Anda Harus Move On dari Android ke iPhone?</em></strong></a></p>\n<h3>4. Matikan sesekali</h3>\n<p>Disarankan setidaknya sekali atau dua kali seminggu telepon dimatikan agar beristirahat dari semua penggunaan yang diberikan setiap hari. Jadi, melakukannya dari waktu ke waktu tidak buruk sama sekali.</p>\n<h3>5. Tidak mencapai batas atas penyimpanan</h3>\n<p>Jika Anda menganggap iPhone Anda harus penuh dengan gambar dan video, Anda salah besar. Karena Anda tidak boleh membuatnya jenuh, apalagi membiarkan memori berada di atas batas penyimpanannya. Anda harus selalu berhati-hati untuk tidak melampaui 16, 32 atau 64GB tergantung kapasitas ponsel Anda.</p>\n<h3>6. Jangan menguras baterai hingga 1%</h3>\n<p>Sebelumnya, topik jenis ini telah dibahas oleh banyak orang dan disimpulkan bahwa baterai tidak boleh dibiarkan terkuras hingga 1%, terutama karena siklus pengisian daya.</p>\n<h3>7. Aktifkan “Find My Phone”</h3>\n<p>Kedengarannya memang terlalu dini, tetapi lebih baik main aman daripada menyesal kemudian. Berarti sejak Anda membeli iPhone baru, Anda harus mengaktifkan fungsi berguna ini yang dapat membantu dalam situasi apa pun.</p>\n<p>Kita semua tahu, bahwa teknologi apapun tidak akan bertahan selamanya. Dengan kata lain, berbagai benda elektronik itu pasti bisa rusak meskipun kita telah menjaganya dengan baik. Dan ketika produk Apple Anda menemui kerusakan, Anda bisa membawanya kepada para ahli service kami di Dr Gadget service iPhone terdekat.</p>\n<p>Dr Gadget mempersembahkan layanan terbaik dalam dunia perbaikan atau service produk Apple, baik itu iPhone, iPad maupun Macbook iMac. Tempat service iPhone terdekat ini dapat memperbaiki gadget Anda di depan mata Anda secara langsung. Memiliki para ahli perbaikan yang sangat andal dan bisa mendiagnosis kerusakan gadget Anda dengan akurat.</p>\n<p>Dr Gadget juga akan memberikan garansi hingga 30 hari hingga 90 hari setelah perbaikan dilakukan. Yang tak kalah menarik selain mereka sangat ahli untuk masalah IC dan Motherboard, Anda juga mendapatkan jaminan uang kembali jika perangkat yang Anda miliki tidak dapat diperbaiki. Bagaimana, jangan ragu lagi ya, <a href="../../../id/contact"><strong>hubungi kami</strong></a> sekarang juga untuk mendapatkan perangkat kesayangan Anda bisa Anda gunakan kembali. Atau Anda juga bisa langsung meluncur ke <a href="../../../id/locations"><strong>pusat service Dr Gadget</strong></a> yang terdekat lokasi Anda.</p>			<br><br>', 'Service Iphone Terdekat - Adalah umum bahwa pada tanggal-tanggal tertentu, seseorang menghadiahkan iPhone baru yang mereka berikan pada orang tersayang saat merayakan sesuatu, atau mereka membeli sendiri untuk "memanjakan…', 'Service Iphone Terdekat - Adalah umum bahwa pada tanggal-tanggal tertentu, seseorang menghadiahkan iPhone baru yang mereka berikan pada orang tersayang saat merayakan sesuatu, atau mereka membeli sendiri untuk "memanjakan…', 'uploads/Anda_Punya_iPhone_Baru_Anda_Harus_Mulai_Merawatnya,_Ini_Caranya__300_300.jpg', '2023-04-27 13:31:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_has_log`
--

CREATE TABLE `blog_has_log` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `device` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_has_log`
--

INSERT INTO `blog_has_log` (`id`, `blog_id`, `ip_address`, `created_at`, `device`, `country`) VALUES
(1, 8, '::1', '2023-04-29 06:09:47', 'Windows 10', NULL),
(2, 7, '::1', '2023-04-29 06:10:49', 'Windows 10', NULL),
(3, 5, '::1', '2023-04-29 08:10:12', 'Windows 10', NULL),
(4, 6, '::1', '2023-04-29 12:13:27', 'Windows 10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `title`, `slug`, `created_at`, `is_delete`) VALUES
(1, 'Panduan Customer', 'panduan-customer', '2023-04-27 13:59:13', 0),
(2, 'Tips & Trik Teknisi', 'Tips-dan-Trik-Teknisi', '2023-04-27 13:59:13', 0),
(3, 'Iphone & Ipad', 'iphone-dan-ipad', '2023-04-27 13:59:13', 0),
(4, 'Android', 'android', '2023-04-27 13:59:13', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_has_log`
--
ALTER TABLE `blog_has_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `blog_has_log`
--
ALTER TABLE `blog_has_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
