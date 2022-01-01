-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 06:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toshokan_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `sinopsis` text NOT NULL,
  `gambar_portrait` varchar(255) DEFAULT NULL,
  `gambar_landscape` varchar(255) DEFAULT NULL,
  `series` varchar(128) NOT NULL,
  `rilis` date NOT NULL,
  `informasi` text NOT NULL,
  `genre` text NOT NULL,
  `mode` text NOT NULL,
  `platform` text NOT NULL,
  `minimum` text,
  `rekomen` text,
  `waktu_buat` datetime NOT NULL,
  `rating` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `nama`, `sinopsis`, `gambar_portrait`, `gambar_landscape`, `series`, `rilis`, `informasi`, `genre`, `mode`, `platform`, `minimum`, `rekomen`, `waktu_buat`, `rating`) VALUES
(1, 'Resident Evil 3 (2020)', '<p>Raccoon City&nbsp;dilanda ke dalam kekacauan&nbsp;dengan kiamat zombie yang disebabkan oleh wabah T-Virus yang diciptakan oleh perusahaan farmasi Umbrella Corp. Pada tanggal 28 September 1998, mantan anggota Special Tactics And Rescue Service (STARS) Jill Valentine diserang dalam apartemennya oleh bioweapon cerdas yang diciptakan Umrbella yang dikenal sebagai Nemesis-T Type ,&nbsp;Nemesis mencoba membunuhnya dan semua anggota STARS yang tersisa. Setelah melarikan diri dari gedungnya, ia bertemu dengan sesama petugas STARS Brad Vickers, tapi Brad&nbsp;telah tergigit oleh zombie&nbsp;kemudian memberitahu Jill untuk menyelamatkan dirinya sendiri. Setelah pertemuan lain dengan Nemesis, ia diselamatkan oleh tentara bayaran bayaran Umbrella Biohazard Countermeasure Service (UBCS) Carlos Oliveira . Carlos dan kelompok tentara bayaran UBCS yang masih hidup yaitu&nbsp;Mikhail Victor , Tyrell Patrick, dan Nicholai Ginovaef telah menyiapkan kereta bawah tanah yang mereka rencanakan akan gunakan untuk mengevakuasi warga sipil yang selamat dari kota.</p>', 'RE32020.jpg', 'RE32020LC.jpg', 'Resident Evil', '2020-04-03', '<p><strong>Developer:</strong> Capcom</p><p><strong>Publisher:</strong> Capcom</p><p><strong>Director:</strong> Kiyohiko Sakata, Yasuhiro Seto, Yasuhiro Anpo, Yukio Ando</p><p><strong>Producer:</strong> Masachika Kawata</p><p><strong>Designer:</strong> Masanori Komine, Takashi Ishihara</p><p><strong>Programmer:</strong> Go Azawa</p><p><strong>Artist:</strong> Cho Yonghee, Yuka Chi</p><p><strong>Composer:</strong> Kota Suzuki, Azusa Kato</p><p><strong>Engine: </strong>RE Engine</p>', '<p><strong>Genre:</strong> Adventure, Shooter, Horror, Survival</p>', '<p><strong>Mode: </strong>Single-player, multiplayer</p>', '<p><strong>Platform:</strong> Microsoft Windows, PlayStation 4, Xbox One</p>', '<p>Membutuhkan prosesor 64-bit dan sistem operasi</p><p><strong>OS:</strong> WINDOWS® 7, 8.1, 10 (64-BIT Dibutuhkan)</p><p><strong>Processor:</strong> Intel® Core™ i5-4460 atau AMD FX™-6300 atau yang lebih baik</p><p><strong>Memory:</strong> 8 GB RAM</p><p><strong>Graphics:</strong> NVIDIA® GeForce® GTX 760 atau AMD Radeon™ R7 260x dengan 2GB VRAM</p><p><strong>DirectX:</strong> Version 11</p><p><strong>Network:</strong> Broadband Internet connection</p><p><strong>Storage:</strong> 45 GB ruang yang harus tersedia</p><p><strong>Additional Notes:</strong> Kinerja yang diantisipasi pada spesifikasi ini adalah 1080p / 30FPS untuk Resident Evil 3 dan 720p / 30FPS untuk Resident Evil Resistance. Jika Anda tidak memiliki cukup memori grafis untuk menjalankan permainan pada kualitas tekstur yang Anda pilih, Anda harus pergi ke Pilihan&gt; Grafik dan menurunkan kualitas tekstur atau kualitas bayangan, atau mengurangi resolusi. Koneksi internet diperlukan untuk aktivasi produk. Selain itu, koneksi internet diperlukan setiap saat saat memainkan Resident Evil Resistance. (Konektivitas jaringan menggunakan Steam® yang dikembangkan oleh Valve® Corporation.)</p>', '<p>Membutuhkan prosesor 64-bit dan sistem operasi</p><p><strong>OS:</strong> WINDOWS® 10 (64-BIT Dibutuhkan)</p><p><strong>Processor:</strong> Intel® Core™ i7-3770 atau AMD FX™-9590 atau yang lebih baik</p><p><strong>Memory:</strong> 8 GB RAM</p><p><strong>Graphics:</strong> NVIDIA® GeForce® GTX 1060 atau AMD Radeon™ RX 480 dengan 3GB VRAM</p><p><strong>DirectX:</strong> Version 12</p><p><strong>Network:</strong> Broadband Internet connection</p><p><strong>Storage:</strong> 45 GB ruang yang harus tersedia</p><p><strong>Additional Notes:</strong> Performa yang diharapkan pada spesifikasi ini adalah 1080p / 60FPS. Koneksi internet diperlukan untuk aktivasi produk. Selain itu, koneksi internet diperlukan setiap saat saat memainkan Resident Evil Resistance. (Konektivitas jaringan menggunakan Steam® yang dikembangkan oleh Valve® Corporation.)</p>', '2020-05-02 12:35:25', 4),
(2, 'Final Fantasy VII Remake', '<p>Cloud Strife adalah mantan anggota SOLDIER, pejuang elit Perusahaan Listrik Shinra. Shinra menggunakan mako, energi spiritual Planet, yang dipanen oleh reaktor besar-besaran, untuk memberi daya pada kota metropolitan Midgar dan mengembangkan teknologi canggih. Kecewa dengan Shinra, dan atas permintaan teman masa kecilnya Tifa Lockhart, Cloud mengambil pekerjaan tentara bayaran untuk Avalanche, organisasi ekoteroris, yang dipimpin oleh Barret Wallace, yang percaya pengambilan mako yang berlebihan akan menyebabkan bencana lingkungan, yang mereka coba cegah dengan membom sebuah reaktor mako. Setelah kejadian itu, Cloud dihantui oleh kenangan Sephiroth, mantan anggota SOLDIER yang penuh teka-teki, dan bertemu penjual bunga Aerith Gainsborough. Meskipun Cloud berniat meninggalkan avalanche setelah menerima bayarannya, entitas seperti hantu misterius, yang sering muncul kembali pada saat-saat penting dalam permainan, menyebabkannya harus terlibat&nbsp;dalam pemboman reaktor lain.</p>', 'FF7R.jpg', 'FF7RLC.jpg', 'Final Fantasy', '2020-03-02', '<p><strong>Developer:</strong> Square Enix</p><p><strong>Supporting Developers:&nbsp;</strong>CyberConnect2</p><p><strong>Publisher:</strong> Square Enix</p><p><strong>Director: </strong>Tetsuya Nomura, Naoki Hamaguchi, Motomu Toriyama</p><p><strong>Producer:</strong> Yoshinori Kitase</p><p><strong>Designer: </strong>Naoki Hamaguchi, Teruki Endo</p><p><strong>Programmer: </strong>Naoki Hamaguchi, Daiki Hoshina, Satoru Koyama</p><p><strong>Artist:&nbsp;</strong>Shintaro Takai, Roberto Ferrari, Tetsuya Nomura</p><p><strong>Writer:&nbsp;</strong>Kazushige Nojima, Motomu Toriyama, Hiroaki Iwaki, Sachie Hirano</p><p><strong>Composer: </strong>Masashi Hamauzu, Mitsuto Suzuki, Nobuo Uematsu</p><p><strong>Engine:</strong> Unreal Engine 4</p>', '<p><strong>Genre:</strong> Adventure, Role-playing (RPG), Action, Fantasy</p>', '<p><strong>Mode:</strong> Single-player, Third person</p>', '<p><strong>Platform:</strong> PlayStation 4</p>', '<p>Playstation Exclusive Games</p>', '<p>Playstation Exclusive Games</p>', '2020-05-02 12:34:54', 5),
(3, 'One Piece: Pirate Warriors 4', '<p>Seri PIRATE WARRIORS telah berhasil menggabungkan anime populer ONE PIECE dengan aksi mendebarkan dari seri WARRIORS untuk menciptakan fenomena di seluruh dunia yang menjual lebih dari empat juta kopi!</p><p>Berdasarkan konsep \"memerangi gerombolan musuh saat berpetualang dengan sekutu tepercaya,\" pengalaman aksi ONE PIECE yang luar biasa terangkat langsung dari anime!</p><p>ONE PIECE: PIRATE WARRIORS 4 adalah evolusi terbaru dari aksi PIRATE WARRIORS! Berdasarkan konsep \"mengalami medan perang ONE PIECE nyata,\" bangunan akan runtuh selama aksi dan serangan akan mengeluarkan asap dan debu, menempatkan Anda di tengah-tengah dunia ONE PIECE!</p><p>Menyuntikkan elemen-elemen segar yang tidak dapat dicapai dalam entri sebelumnya dan kini permainan nya lebih realitas yang membuat series&nbsp;ini lebih mendebarkan dari aksi PIRATE WARRIORS!</p>', 'OPPW4.jpg', 'OPPW4LC.jpg', 'One Piece: Pirate Warriors (One Piece)', '2020-03-26', '<p><strong>Developer:</strong>&nbsp;Omega Force (Koei Tecmo)</p><p><strong>Publisher:</strong>&nbsp;Bandai Namco Entertainment</p><p><strong>Director:</strong>&nbsp;Hideo Suzuki</p><p><strong>Producer:</strong>&nbsp;Katsuaki Tsuzuki,&nbsp;Akihiro Suzuki</p><p><strong>Composer:</strong>&nbsp;Satoshi Seki</p>', '<p><strong>Genre:</strong>&nbsp;Action, Adventure,&nbsp;Hack and slash/Beat \'em up</p>', '<p><strong>Mode:</strong>&nbsp;Single-player, Multiplayer, Third person</p>', '<p><strong>Platform:</strong>&nbsp;Microsoft Windows,&nbsp;PlayStation 4,&nbsp;Xbox One,&nbsp;Nintendo Switch</p>', '<p>Membutuhkan prosesor 64-bit dan sistem operasi</p><p><strong>OS:</strong> Windows 10, 64bits</p><p><strong>Processor:</strong> Intel Core i5 3450 / AMD Ryzen 3 1300X</p><p><strong>Memory:</strong> 8 GB RAM</p><p><strong>Graphics:</strong> NVIDIA GeForce GTX 660 (2GB) / AMD Radeon HD 7870 (2GB)</p><p><strong>DirectX:</strong> Version 11</p><p><strong>Network:</strong> Broadband Internet connection</p><p><strong>Storage:</strong> 25 GB ruang yang harus tersedia</p><p><strong>Additional Notes:</strong> Pengaturan gambar: Semua \'Rendah\' ??atau \'MATI\'; Framerate yang diharapkan: 30 FPS @ 1280x720</p>', '<p>Membutuhkan prosesor 64-bit dan sistem operasi</p><p><strong>OS:</strong> Windows 10, 64bits</p><p><strong>Processor:</strong> Intel Core i7 3770 / AMD Ryzen 5 1400</p><p><strong>Memory:</strong> 8 GB RAM</p><p><strong>Graphics:</strong> NVIDIA GeForce GTX 1060 (3GB) / AMD Radeon RX 580 (4GB)</p><p><strong>DirectX:</strong> Version 11</p><p><strong>Network:</strong> Broadband Internet connection</p><p><strong>Storage:</strong> 25 GB ruang yang harus tersedia</p><p><strong>Additional Notes:</strong> Pengaturan gambar: Semua \'Tinggi\' atau \'AKTIF\'; \'Nomor tampilan karakter\' hanya disetel ke \'Sedang\'; Framerate yang diharapkan: 60 FPS @ 1920x1080</p>', '2020-05-02 12:34:03', 4),
(4, 'Cyberpunk 2077', '<p>Cyberpunk 2077 adalah game open-world, action-adventure yang berlatar di Night City, megalopolis yang terobsesi dengan kekuatan, kemewahan dan modifikasi tubuh. Anda bermain sebagai V, penjahat bayaran yang mengejar implan satu-satunya yang merupakan kunci keabadian. Anda dapat menyesuaikan cyberware karakter Anda, skillet dan gaya bermain, dan menjelajahi kota yang luas di mana pilihan yang Anda buat membentuk cerita dan dunia di sekitar Anda.</p><p>Menjadi cyberpunk, tentara bayaran perkotaan yang dilengkapi dengan peningkatan cybernetic dan membangun legenda Anda di jalanan Night City.</p><p>Masuki dunia terbuka Night City yang besar, tempat yang menetapkan standar baru dalam hal visual, kompleksitas, dan kedalaman.</p><p>Ambil pekerjaan paling berisiko dalam hidup Anda dan cari implan prototipe yang merupakan kunci keabadian.</p>', 'CP2077.jpg', 'CP2077LC.jpg', 'Cyberpunk 2077', '2020-09-17', '<p><strong>Developer:</strong> CD Projekt Red</p><p><strong>Publisher: </strong>EU: Bandai Namco Entertainment, NA: Warner Bros. Interactive Entertainment</p><p><strong>Director:</strong> Adam Badowski</p><p><strong>Producer:</strong> Richard Borzymowski</p><p><strong>Designer:</strong> Konrad Tomaszkiewicz</p><p><strong>Artist:</strong> Katarzyna Redesiuk</p><p><strong>Writer:&nbsp;</strong>Marcin Blacha, Jakub Szama?ek, Stanis?aw ?wi?cicki</p><p><strong>Composer: </strong>Marcin Przyby?owicz, P. T. Adamczyk, Paul Leonard-Morgan</p><p><strong>Engine:</strong>&nbsp;REDengine 4</p>', '<p><strong>Genre:</strong> Role-playing</p>', '<p><strong>Mode:&nbsp;</strong>Single-player, multiplayer</p><p><strong>Player Perspectives: </strong>First person, Third person</p>', '<p><strong>Platform: </strong>Microsoft Windows, PlayStation 4, Stadia. Xbox One, Xbox Series X</p>', '<p>Belum dicantumkan</p>', '<p>Belum dicantumkan</p>', '2020-06-01 13:54:51', NULL),
(5, 'Captain Tsubasa: Rise of New Champions', '<p>Dunia Sepak Bola dan Anime bertemu di Kapten Tsubasa: Bangkitnya Juara Baru, berdasarkan seri Kapten Tsubasa yang terkenal. Permainan ini menceritakan eksploitasi atletik dari Tsubasa Ozora saat ia memainkan cintanya untuk permainan dan maju melalui jajaran beberapa liga Soccer. Kapten Tsubasa: Rise of New Champions membenamkan pemain dalam permainan sepak bola penuh aksi yang menampilkan gameplay yang menggembirakan, di atas bidikan andalan, dan gameplay yang dapat diakses.</p>', 'CTRONC.jpg', 'CTRONCLC.jpg', 'Captain Tsubasa', '2020-08-28', '<p><strong>Developer:</strong> Tamsoft</p><p><strong>Publisher: </strong>Bandai Namco Entertainment</p>', '<p><strong>Genre:&nbsp;</strong>Sports, Arcade, Action</p>', '<p><strong>Mode:&nbsp;</strong>Co-operative,<strong>&nbsp;</strong>Single-player, multiplayer</p><p><strong>Player Perspectives:&nbsp;</strong>Side view, Third person</p>', '<p><strong>Platform:</strong> Microsoft Windows, PlayStation 4, Nintendo Switch</p>', '<p>Belum ditentukan</p>', '<p>Belum ditentukan</p>', '2020-06-01 13:24:56', NULL),
(6, 'Death Stranding', '<p>Sam Bridges harus berani menghadapi dunia yang sepenuhnya ditransformasi oleh Death Stranding. Membawa sisa-sisa masa depan kita yang terputus di tangannya, dia memulai perjalanan untuk menghubungkan kembali dunia yang hancur selangkah demi selangkah.</p>', 'DS.jpg', 'DSLC.jpg', 'Death Stranding', '2019-11-08', '<p><strong>Developer: </strong>Kojima Productions</p><p><strong>Publisher: </strong>Sony Interactive Entertainment (PS4), 505 Games (PC)</p><p><strong>Director: </strong>Hideo Kojima</p><p><strong>Producer: </strong>Hideo Kojima, Kenichiro Imaizumi, James Vance, Ken Mendoza</p><p><strong>Designer:</strong> Hideo Kojima</p><p><strong>Programmer: </strong>Akio Sakamoto</p><p><strong>Artist:</strong> Yoji Shinkawa</p><p><strong>Writer:&nbsp;</strong>Hideo Kojima, Kenji Yano, Shuyo Murata</p><p><strong>Composer:</strong> Ludvig Forssell,&nbsp;</p><p><strong>Engine: </strong>Decima</p>', '<p><strong>Genre:</strong>&nbsp; Action, Adventure, Shooter, Open world, Science fiction, Stealth</p>', '<p><strong>Mode:</strong>&nbsp; Single-player</p><p><strong>Player Perspectives:&nbsp;</strong>Third person</p>', '<p><strong>Platform: </strong>PlayStation 4, Microsoft Windows</p><p><strong>Release: </strong>14 July 2020 - Windows&nbsp;</p>', '<p>Belum ditentukan</p>', '<p>Belum ditentukan</p>', '2020-06-01 14:22:52', 5),
(7, 'Marvel\'s Avengers ', '<p>Kumpulkan tim Pahlawan Terkuat Bumi Anda, raih kekuatan Anda, dan jalankan impian Pahlawan Super Anda.</p><p>Marvel\'s Avengers adalah game epic, third-person, action-adventure yang menggabungkan kisah sinematik orisinal dengan permainan single-player dan gameplay co-operative *. Berkumpul menjadi sebuah tim yang terdiri dari empat pemain online, kuasai kemampuan luar biasa, sesuaikan daftar Pahlawan yang sedang meningkat, dan pertahankan Bumi dari ancaman yang meningkat.</p><p>Marvel\'s Avengers dimulai pada Suatu hari, di mana Kapten Amerika, Iron Man, Hulk, Black Widow, dan Thor sedang meluncurkan Markas Besar Avengers berteknologi tinggi di San Francisco. Perayaan berubah mematikan ketika musuh misterius menyebabkan kecelakaan bencana yang mengakibatkan kehancuran besar. Disalahkan atas tragedi itu, The Avengers bubar. Lima tahun kemudian, dengan semua Pahlawan Super dilarang dan dunia dalam bahaya, sebuah petualangan meluas menyulut ketika seorang wanita muda yang gigih bernama Kamala Khan berangkat untuk mengumpulkan kembali dan membangun kembali para Avengers untuk menghentikan kekuatan tak terkendali dari kekuatan baru rahasia yang dikenal sebagai AIM.</p><p>Marvel\'s Avengers melanjutkan perjalanan epik dengan Heroes baru dan narasi baru yang disampaikan secara berkelanjutan, untuk pengalaman gaming Avengers yang pasti.</p>', 'MA.jpg', 'MALC.jpg', 'Marvel\'s Avengers', '2020-09-04', '<p><strong>Developer: </strong>Crystal Dynamics, Eidos Montréal, Nixxes Software</p><p><strong>Publisher: </strong>Square Enix</p><p><strong>Director: </strong>Shaun Escayg</p><p><strong>Designer:</strong> Magali Stretton, Alisha Thayer</p><p><strong>Artist:&nbsp;</strong>Patrick Parenteau</p><p><strong>Engine:&nbsp;</strong>Foundation Engine</p>', '<p><strong>Genre:&nbsp;</strong>Action, Adventure, Shooter, Fantasy, Science fiction</p>', '<p><strong>Mode:&nbsp;</strong>Co-operative,<strong>&nbsp;</strong>Single-player, multiplayer</p><p><strong>Player Perspectives:&nbsp;</strong>Third person</p>', '<p><strong>Platform: </strong>Microsoft Windows, PlayStation 4, Stadia, Xbox One</p>', '<p>Belum ditentukan</p>', '<p>Belum ditentukan</p>', '2020-06-01 16:31:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `nama_genre` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `nama_genre`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Fantasy'),
(4, 'Hack and Slash'),
(5, 'Beat \'em up'),
(6, 'Horror'),
(7, 'Role-Playing (RPG)'),
(8, 'Shooter'),
(9, 'Survival');

-- --------------------------------------------------------

--
-- Table structure for table `tbvisitor`
--

CREATE TABLE `tbvisitor` (
  `ip` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbvisitor`
--

INSERT INTO `tbvisitor` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2020-05-31', 6, '1590910667'),
('192.168.100.23', '2020-05-31', 5, '1590899789'),
('::1', '2020-06-01', 171, '1591012203'),
('::1', '2020-06-02', 2, '1591065207'),
('::1', '2020-06-03', 5, '1591186354'),
('::1', '2020-06-04', 12, '1591248945'),
('::1', '2020-06-05', 4, '1591343278'),
('::1', '2020-06-06', 2, '1591414887'),
('::1', '2020-06-14', 10, '1592127176'),
('::1', '2020-06-20', 8, '1592663148'),
('::1', '2020-06-21', 37, '1592757001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` varchar(10) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `gambar`, `password`, `level`, `aktif`) VALUES
(1, 'Muhammad Nashir M', 'acilsir@gmail.com', 'fp.jpg', '$2y$10$WcrH6fihKJ8tSFXpQLMuu.psr8S0byyjJrN0vbJYCXklfusTFTYri', 'admin', 1),
(3, 'admin', 'admin@gmail.com', 'illust_55069217_20171114_191416.png', '$2y$10$4j/t.KiRxSWbtye/noICKOUGoW4doAMvJr.V7vG/33SX7xTm00djG', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
