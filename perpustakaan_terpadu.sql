-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 05:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_terpadu`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `foto_buku` varchar(250) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `foto_buku`, `penerbit`, `deskripsi`) VALUES
(1, 'Laskar Pelangi', 'books/laskarpelangi.jpg', 'Bintang Pustaka', 'Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah'),
(2, 'Cinta Brontosaurus', 'books/cintabrontosaurus.jpg', 'Gagas Media', 'Novel Cinta Brontosaurus ini menceritakan tentang kisah sehari-harinya seorang penulis buku yang bernama Raditya Dika yang lahir pada tanggal 28 desember 1984'),
(3, 'Burung - Burung Manyar', 'books/burungmanyar.jpg', 'Djambatan', '\"Burung-Burung Manyar\" adalah sebuah buku yang penuh dengan pesan humanisme dari seorang penulis yang sangat Humanis. Buku yang lahir dari seorang tokoh keagamaan, seorang arsitek, seorang pendidik, dan seorang penggiat lingkungan.'),
(4, 'Bumi Manusia', 'books/bumimanusia.jpg', 'Hasta Mitra', 'Buku ini melingkupi masa kejadian antara tahun 1898 hingga tahun 1918, masa ini adalah masa munculnya pemikiran politik etis dan masa awal periode Kebangkitan Nasional. Masa ini juga menjadi awal masuknya pemikiran rasional ke Hindia Belanda'),
(5, 'Sapiens: A Brief History of Humankind', 'books/sapiens.jpg', 'Harper', 'Merupakan sebuah buku karya Yuval Noah Harari, mula-mula diterbitkan dalam bahasa Ibrani di Israel pada 2011 berdasarkan pada serangkaian ceramah yang diajarkan oleh Harari di Universitas Ibrani Yerusalem.'),
(6, 'Animal Farm', 'books/animalfarm.jpg', 'Secker and Warburg', 'Merupakan sebuah novel pendek yang ditulis oleh George Orwell mengenai sekelompok hewan yang menggulingkan kekuasaan manusia di sebuah peternakan yang mereka miliki.'),
(7, 'To Kill a Mockingbird', 'books/mockingbird.jpg', 'J. B. Lippincott', 'Merupakan sebuah novel klasik garapan Harper Lee. Fokus cerita novel tersebut ialah perjuangan seorang pengacara kulit putih dalam membela kliennya yang merupakan kaum kulit hitam'),
(8, 'The Selfish Gene', 'books/selfishgene.jpg', 'Oxford University Press', 'The Selfish Gene adalah buku mengenai evolusi karya Richard Dawkins. Buku ini dibuat berdasarkan teori George C. Williams dalam bukunya Adaptation and Natural Selection.'),
(9, 'Kosmos', 'books/kosmos.jpg', 'Random House', 'Ruang angkasa mungkin merupakan misteri terbesar dalam kehidupan manusia. Ruang dan waktu seakan tidak berlaku di antariksa yang luas ini. Cahaya menjadi pengukur jarak yang paten. '),
(10, 'Guru Aini', 'books/guruaini.jpg', 'Bentang Pustaka', 'Merupakan sebuah novel yang menggambarkan idealisme seorang guru bernama Bu Desi, yang mengajar matematika di pelosok. '),
(11, 'Sang Singa, Sang Penyihir, dan Lemari', 'books/singapenyihir.jpg', 'Goffrey Bless', 'Merupakan novel fantasi karya C. S. Lewis. Buku ini ditulis pada tahun 1950 dan mempunyai nuansa sekitar tahun 1940. Buku ini adalah yang pertama kali ditulis dari ketujuh seri \"The Chronicles of Narnia\".'),
(12, 'Kamu Gak Sendiri', 'books/kamugaksendiri.jpg', 'Gradien Mediatama', 'Kita sudah cukup baik membuat orang mengira kita baik-baik saja. Sekarang saatnya jujur, yang kecewa, yang kelelahan, yang gak tahu kapan harus istirahat, kamu boleh marah, boleh menangis, boleh kalau ingin sendiri dulu.'),
(13, 'Sebuah Seni untuk Bersikap Bodo Amat', 'books/senibodoamat.jpg', 'HarperOne', 'Bercerita tentang seseorang yang bernama Charles Bukowski yang mempunyai masa lalu yang kelam, suka mabuk-mabukan, berjudi, mempermainkan wanita, kasar, tukang utang dan seorang penyair.'),
(14, 'Data Visualization Made Simple: Insights into Becoming Visual', 'books/datavisual.jpg', 'ROUTLEDGE', 'Visualisasi Data yang Disederhanakan adalah panduan praktis tentang dasar-dasar, strategi, dan kasus dunia nyata untuk visualisasi data, keterampilan penting yang diperlukan di dunia yang kaya informasi saat ini.'),
(15, 'Structured Computer Organization', 'books/structuredcomputer.jpg', 'Pearson', 'Merupakan buku mengenai komputer dan strukturnya'),
(16, 'Atomic Habits: Perubahan Kecil yang memberikan hasil luar biasa', 'books/atomic.jpg', 'Gramedia Pustaka Utama', 'Orang mengira ketika Anda ingin mengubah hidup, Anda perlu memikirkan hal-hal besar. Namun pakar kebiasaan terkenal kelas dunia James Clear telah menemukan sebuah cara lain.'),
(17, 'Buku Ajar Matematika Terapan Untuk Teknisi', 'books/matematikaterapan.jpg', 'deepublish', 'Buku ini berisi materi lengkap Matematika Terapan bagi Teknisi mulai dari materi paling dasar dan fundamental dalam keterampilan menghitung hingga materi Kalkulus yang berisi turunan diferensial dan integral yang sangat bermanfaat bagi para teknisi. '),
(18, 'The Woman in White', 'books/womanwhite.jpg', 'All the Year Round', 'Novel ini menceritakan seorang guru melukis yang bernama Walter Hartright bertemu wanita misterius berpakaian serba putih, di hari pertama  ia pergi mengajar ke Limmeridge house'),
(19, 'A Crime in the Neighborhood', 'books/crimeneighbor.jpg', 'Workman Publishing Company', 'A murdered boy, a runaway husband, a family spinning out of control--Suzanne Berne\'s A Crime in the Neighborhood is no ordinary coming-of-age novel. '),
(20, 'Sihir Kelam (A Darker Shade of Magic)', 'books/sihirkelam.jpg', 'Gramedia Pustaka Utama', 'Sihir Kelam (A Darker Shade of Magic) Selamat datang di London Kelabu, kotor dan membosankan, tanpa sihir, dipimpin raja gila'),
(21, 'Setelah Pemakaman(After the Funeral)', 'books/setelahpemakaman.jpg', 'Dodd, Mead and Company', 'Setelah Pemakaman atau After the Funeral adalah sebuah karya fiksi detektif buatan Agatha Christie dan pertama kali diterbitkan di AS oleh Dodd'),
(22, 'Pulang', 'books/pulang.jpg', 'Kepustakaan Populer Gramedia', 'Pulang. Satu kata yang biasa diartikan kembali pada tempat teakhir setelah merasa lelah, butuh tempat istirahat dan penenang jiwa setelah semua urusan telah selesai.'),
(23, 'Negeri 5 Menara', 'books/negeri5menara.jpg', 'Gramedia', 'Novel ini bercerita tentang kehidupan 6 santri dari 6 daerah yang berbeda menuntut ilmu di Pondok Madani Ponorogo Jawa Timur yang jauh dari rumah dan berhasil mewujudkan mimpi menggapai jendela dunia'),
(24, 'Guns, Germs, and Steel', 'books/gunsgerms.jpg', 'W. W. Norton', 'Salah satu masalah terbesar dari penelitian yang dilakukan ilmuwan barat terhadap sejarah dunia adalah bias. Mereka seringkali menganggap kulit putih adalah ras superior karena itu kemajuan terjadi di negara-negara barat'),
(25, 'Misteri-Misteri tentang Ruang dan Waktu', 'books/ruangwaktu.jpg', 'Gramedia Pustaka Utama', 'Dalam buku yang sangat memikat ini, kamu akan berjumpa dengan beberapa ilmuwan aneh, teori-teori aneh yang menjadi perdebatan sampai lama sekali, juga beberapa penemuan tidak disengaja yang mengubah cara kita memahami sains.'),
(26, 'The Fellowship of the Ring', 'books/lordofrings.jpg', 'George Allen & Unwin', 'Menceritakan tentang Hobbit yang lemah lembut dari Shire dan delapan temannya berangkat dalam perjalanan untuk menghancurkan cincin utama yang kuat dan menyelamatkan Middle-earth dari Pangeran Kegelapan Sauron'),
(27, 'Perfume', 'books/perfume.jpg', 'Diogenes, Alfred A. Knopf, Hamish Hamilton', 'Pembunuhan berantai yang misterius. Dua puluh lima gadis perawan tewas mengenaskan. Pakaian beserta rambut dan kulit kepala mereka hilang. Tubuh mereka benar-benar layu, seolah tak pernah hidup sebelumnya.'),
(28, 'The Mysterious Affair at Styles', 'books/misterius.jpg', 'Gramedia Pustaka', 'Meresensi novel perdana Agatha Christie merupakan pekerjaan penting karena pada novel ini Agatha meletakan dasar bagi penulisan novel novel berikutnya.');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(10) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id`, `nama_peminjam`, `tanggal_peminjaman`, `tanggal_pengembalian`, `judul`) VALUES
(1, 'Levi Jovanatan', '2021-08-15', '2021-08-23', 'The Mysterious Affair at Styles	'),
(2, 'Mikasa', '2021-08-08', '2021-08-25', 'The Fellowship of the Ring	'),
(4, 'asdasd', '2021-08-17', '2021-08-26', 'Misteri-Misteri tentang Ruang dan Waktu	'),
(5, 'dfsdffsdfds', '2021-08-10', '2021-08-26', 'The Woman in White	');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama`, `pass`) VALUES
(1, 'akunsaya1009@gmail.com', 'ABID TONDI', 'asoiuertngm'),
(2, 'larktest12345@gmail.com', 'Levi Jovanatan', 'asoiuertngm'),
(3, 'admin@gmail.com', 'Admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
