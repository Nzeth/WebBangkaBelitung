-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2017 at 05:10 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wisataa`
--

CREATE TABLE `wisataa` (
  `id` int(11) NOT NULL,
  `tempat_wisata` varchar(50) NOT NULL,
  `deskripsi_wisata` longtext NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisataa`
--

INSERT INTO `wisataa` (`id`, `tempat_wisata`, `deskripsi_wisata`, `gambar`) VALUES
(3, 'Pantai Parai Bangka', '<p style="text-align: justify;">Pantai Parai Tenggiri adalah salah satu objek wisata yang terletak di Kecamatan Sungai Liat, Kabupaten Bangka, Kepulauan Bangka Belitung.Tepatnya berada di Desa Sinar Baru yang kira-kira berjarak 30 kilometer di sebelah utara kota Pangkalpinang.Pantai ini memiliki kontur tanah yang landai dengan ombak yang relatif kecil.Pantai ini merupakan pantai andalan yang ada di kepulauan Bangka Belitung.</p>', 'file_1484466806.jpg'),
(4, 'Bangka Botanical Garden', '<p style="margin: 0px 0px 10px; line-height: 22.75px; text-align: justify; font-size: 13px; padding: 0px; color: #333333; font-family: Roboto, Arial, ''Sans Serif'';">Bangka Botanical Garden (BBG) merupakan lahan pengembangan holtikultura, peternakan, penyediaan bibit dan pakan ternak memanfaatkan lahan eks tambang timah dan lahan kritis berupa lahan gambut dan berpasir serta merupakan program percontohan yang dilakukan pihak swasta dalam mengelola dan menciptakan ekosistem baru.</p>\r\n<p style="margin: 0px 0px 10px; line-height: 22.75px; text-align: justify; font-size: 13px; padding: 0px; color: #333333; font-family: Roboto, Arial, ''Sans Serif'';">Bangka Botanical Garden mampu mengolah lahan dengan tingkat pH (keasaman) di bawah 5 menjadi lahan subur dengan berbagai jenis tanaman, tambak budidaya jenis ikan air tawar dan peternakan sapi perah dan potong.</p>', 'file_1484467195.JPG'),
(5, 'Bukit Menumbing', '<p style="text-align: justify;">Bukit Menumbing di adalah sebuah bukit di wilayah Kota Muntok, Kabupaten Bangka Barat.Bukit Menumbing memiliki ketinggian 355 meter dari permukaan laut.</p>\r\n<p style="text-align: justify;">Di puncak bukit ini terdapat Wisma Menumbing atau Pesanggerahan Menumbing yang merupakan tempat pengasingan mantan presiden Indonesia, Soekarno.Wisma ini memiliki satu bangunan utama dengan beberapa fasilitas umum lainnya. Bangunan tersebut dibangun pada masa penjajahan Belanda, sekitar tahun 1928 -1933. Berdasarkan informasi yang tertulis pada kamar 102 di wisma Menumbing, inilah tempat Soekarno, Muhammad Hatta, Mr. Ag. Pringgodigdo, Komodor Surya Darma dan Mr. Assa&rsquo;at diasingkan sejak tanggal 22 Desember 1948 hingga 7 Juli 1949.</p>', 'file_1484467651.jpg'),
(8, 'Danau Kaolin', '<p style="text-align: justify;">Danau Kaolin adalah sebuah danau yang memiliki warna daratan yang putih bersih dan air yang berwarna biru menyala. Danau ini bukan berasal dari kawah gunung seperti Danau Kawah Putih Ciwidey atau Kawah Putih Tinggi Raja, danau terbentuk dari bekas tempat pertambangan Kaolin yang telah ditinggalkan dan alam menyempurnakan dengan keindahannya. Sedikit pengetahuan tentang Kaolin. Kaolin adalah suatu mineral sebagai bahan industri seperti kosmetik, kertas, makanan, pasta gigi dan Kaolin digemari karena sifatnya yang halus, putih, kuat, halus serta daya hantarlistrik dan daya hantar panas yang rendah.</p>', 'file_1484467796.jpg'),
(9, 'Lempah Kuning', '<p style="text-align: justify;">Resep Lempah Kuning merupakan salah satu resep asli daerah bangka belitung yang banyak diminati oleh masyarakat, selain rasanya yang khas masakan ini sangat lezat saat disantap dengan nasi panas.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">Lempah kuning ini terbuat dari olahan ikan kerapu yang merupakan salah satu masakan nusantara yang banyak mengandung Omega 3 dengan kandungan 200 mg yang sangat baik terhadap kecerdasan anak, selain itu ikan kerapu juga dapat mengurangi resiko penyakit jantung.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">Resep masakan bangka yang satu ini terbuat dari bahan dasar ikan kerapu ditambahi sedikit bumbu-bumbu halus dan dimasak secara bersamaan dalam satu wadah, dan masakan ini juga sangat mudah dibuatnya. Ok silahkan anda simak bagaimana cara membuat lempah kuning khas bangka belitung ini.</p>', 'file_1484468084.jpg'),
(10, 'Novotel Bangka', '<p style="text-align: justify;">Novotel Bangka Hotel and Convention Centre terletak di Pangkal Pinang, kota terbesar di Pulau Bangka. Hotel ini membanggakan keanggunan Indonesia dan dapat menyelenggarakan segala acara Anda, mulai dari pernikahan, pertemuan, hingga pameran. Kolam renang luar-ruang juga menanti Anda. Pilihlah dari kamar yang menawan, suite, atau lounge eksekutif VIP untuk pengalaman menginap yang santai di Novotel.</p>\r\n<p>&nbsp;</p>', 'file_1484468105.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisataa`
--
ALTER TABLE `wisataa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wisataa`
--
ALTER TABLE `wisataa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
