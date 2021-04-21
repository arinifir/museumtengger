-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2021 pada 09.28
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_museum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` varchar(6) NOT NULL,
  `waktu_artikel` varchar(15) NOT NULL,
  `judul_artikel` varchar(128) NOT NULL,
  `title_artikel` varchar(128) NOT NULL,
  `isi_artikel` text NOT NULL,
  `content_artikel` text NOT NULL,
  `gambar_artikel` varchar(100) NOT NULL,
  `link_artikel` varchar(128) NOT NULL,
  `linkartikel` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `waktu_artikel`, `judul_artikel`, `title_artikel`, `isi_artikel`, `content_artikel`, `gambar_artikel`, `link_artikel`, `linkartikel`) VALUES
('ART001', '1616626937', 'Tempat Wisata', 'Tourist Attraction', '<p><strong>Gunung Bromo</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/436897175.jpg\"></strong></p>\r\n\r\n<p>Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. </p>\r\n\r\n<p><strong>Air Terjun Madakaripura</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1153391308.jpg\"></strong></p>\r\n\r\n<p>Air terjun Madakaripura adalah sebuah air terjun yang terletak di Kabupaten Probolinggo, Provinsi Jawa Timur. Air terjun setinggi 200 meter ini merupakan air terjun tertinggi di Pulau Jawa dan tertinggi kedua di Indonesia. </p>\r\n\r\n<p>Alamat: Sapih, Branggah, Lumbang, Probolinggo, Jawa Timur 67183</p>\r\n\r\n<p><strong>Taman Nasional Bromo Tengger Semeru</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/675185278.jpg\"></strong></p>\r\n\r\n<p>Taman Nasional Bromo Tengger Semeru adalah taman nasional di Jawa Timur, Indonesia, yang terletak di wilayah administratif Kabupaten Pasuruan, Kabupaten Malang, Kabupaten Lumajang dan Kabupaten Probolinggo.</p>\r\n\r\n<p><strong>Agrowisata Strawberry Desa Jetak</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/414951025.jpeg\"></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1741900452.jpg\"></strong></p>\r\n\r\n<p>Alamat: Jl. Raya Bromo No.90, Dusun I, Ngadisari, Sukapura, Probolinggo, Jawa Timur 67254</p>', '<p><strong>Bromo Mountain</strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1923309618.jpg\"></p>\r\n\r\n<p>Bromo Mountain is an active volcano located in East Java, Indonesia. It has 2.329 meters high above sea level. It is located between four regencies, such as Probolinggo, Pasuruan, Lumajang, and Malang Regency. </p>\r\n\r\n<p><strong>Madakaripura Waterfall </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1153391308.jpg\"></strong></p>\r\n\r\n<p>Madakaripura Waterfall is located in Probolinggo Regency, East Java. It has 200 meters high. It is the highest waterfall in Java Island and the second highest in Indonesia. </p>\r\n\r\n<p>Address: Sapih, Branggah, Lumbang, Probolinggo, Jawa Timur 67183</p>\r\n\r\n<p><strong>Bromo Tengger Semeru National Park</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/675185278.jpg\"></strong></p>\r\n\r\n<p>Bromo Tengger Semeru National Park is a national park in East Java, Indonesia. It is located in administrative region of Pasuruan, Malang, Lumajang, and Probolinggo Regency.</p>\r\n\r\n<p><strong>Jetak Village Strawberry Agrotourism\\</strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/414951025.jpeg\"></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1741900452.jpg\"></strong></p>\r\n\r\n<p>Address: Jl. Raya Bromo No.90, Dusun I, Ngadisari, Sukapura, Probolinggo, Jawa Timur 67254</p>', 'Taman_Nasional_Bromo_Tengger_Semeru1.jpg', 'tempat-wisata', 'tourist-attraction'),
('ART002', '1616628169', 'Penginapan', 'Lodge', '<p><strong>Savana Guesthouse </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1853813350.jpg\"></strong></p>\r\n\r\n<ul>\r\n <li>Alamat: Jl. Wonokerto 73 Kec. Sukapura, Wonotoro, Ngadisari, Probolinggo, East Java 67254 </li>\r\n <li>Telepon: 0813-5320-7888 </li>\r\n</ul>\r\n\r\n<p><strong>Homestay Mentari Bromo</strong> </p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1908218551.JPG\"></p>\r\n\r\n<ul>\r\n <li>Alamat: Wonotoro, Sukapura, Probolinggo, Jawa Timur 67254 </li>\r\n <li>Telepon: 0823-3764-7777 </li>\r\n</ul>\r\n\r\n<p><strong>Jiwa Jawa Bromo Resort </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1686945901.jpg\"></strong></p>\r\n\r\n<ul>\r\n <li>Alamat: Jl. Raya Bromo, Wonotoro, Sukapura, Probolinggo, Jawa Timur 67254 </li>\r\n <li>Telepon: (0335) 541193 </li>\r\n</ul>\r\n\r\n<p><strong>Java Go Pagupon Bromo </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1307310133.jpg\"></strong></p>\r\n\r\n<ul>\r\n <li>Alamat: Jl. Raya Bromo, Wonotoro, Sukapura, Probolinggo, Jawa Timur 67254 </li>\r\n <li>Telepon: 0822-7202-6000 </li>\r\n</ul>\r\n\r\n<p><strong>Villa Wonotoro Asri 1 Bromo </strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/315311998.jpg\"></p>\r\n\r\n<ul>\r\n <li>Alamat: Jl. Raya Bromo No.087, Wonotoro, Ngadisari, Sukapura, Probolinggo, Jawa Timur 67254 </li>\r\n <li>Telepon: 0823-5066-5630 </li>\r\n</ul>\r\n\r\n<p><strong>Homestay Tengger Asri 1 Bromo </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1445190047.jpg\"></strong></p>\r\n\r\n<ul>\r\n <li>Alamat: Jalan Raya Bromo No.087 Wonotoro, Wonotoro, Ngadisari, Sukapura, Probolinggo, Jawa Timur 67254 </li>\r\n <li>Telepon: 0823-5066-5630 </li>\r\n</ul>\r\n\r\n<p><strong>Villa Tengger Asri 6 Gunung Bromo </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/219794105.jpg\"></strong></p>\r\n\r\n<ul>\r\n <li>Alamat: Jl. Raya Bromo, Wanasari, Ngadisari, Sukapura, Probolinggo, Jawa Timur 67524 </li>\r\n <li>Telepon: 0823-5066-5630 </li>\r\n</ul>\r\n\r\n<p><strong>Hotel Java Banana </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/792467694.jpg\"></strong></p>\r\n\r\n<ul>\r\n <li>Alamat: Jl. Raya Bromo, Wonotoro, 67254, Probolinggo, Indonesia</li>\r\n <li>Telepon: +62 (335) 541193</li>\r\n</ul>', '<p><strong>Savana Guesthouse </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1853813350.jpg\"></strong></p>\r\n\r\n<ul>\r\n <li>Address: Jl. Wonokerto 73 Kec. Sukapura, Wonotoro, Ngadisari, Probolinggo, East Java 67254</li>\r\n <li>Phone: 0813-5320-7888</li>\r\n</ul>\r\n\r\n<p><strong>Homestay Mentari Bromo</strong> </p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1908218551.JPG\"></p>\r\n\r\n<ul>\r\n <li>Address: Wonotoro, Sukapura, Probolinggo, Jawa Timur 67254</li>\r\n <li>Phone: 0823-3764-7777</li>\r\n</ul>\r\n\r\n<p><strong>Jiwa Jawa Bromo Resort </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1686945901.jpg\"></strong></p>\r\n\r\n<ul>\r\n <li>Address: Jl. Raya Bromo, Wonotoro, Sukapura, Probolinggo, Jawa Timur 67254</li>\r\n <li>Phone: (0335) 541193</li>\r\n</ul>\r\n\r\n<p><strong>Java Go Pagupon Bromo </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1307310133.jpg\"></strong></p>\r\n\r\n<ul>\r\n <li>Address: Jl. Raya Bromo, Wonotoro, Sukapura, Probolinggo, Jawa Timur 67254</li>\r\n <li>Phone: 0822-7202-6000</li>\r\n</ul>\r\n\r\n<p><strong>Villa Wonotoro Asri 1 Bromo</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/315311998.jpg\" xss=removed> </strong></p>\r\n\r\n<ul>\r\n <li>Address: Jl. Raya Bromo No.087, Wonotoro, Ngadisari, Sukapura, Probolinggo, Jawa Timur 67254</li>\r\n <li>Phone: 0823-5066-5630</li>\r\n</ul>\r\n\r\n<p><strong>Homestay Tengger Asri 1 Bromo </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/1445190047.jpg\" xss=removed></strong></p>\r\n\r\n<ul>\r\n <li>Address: Jalan Raya Bromo No.087 Wonotoro, Wonotoro, Ngadisari, Sukapura, Probolinggo, Jawa Timur 67254</li>\r\n <li>Phone: 0823-5066-5630</li>\r\n</ul>\r\n\r\n<p><strong>Villa Tengger Asri 6 Gunung Bromo </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/219794105.jpg\" xss=removed></strong></p>\r\n\r\n<ul>\r\n <li>Address: Jl. Raya Bromo, Wanasari, Ngadisari, Sukapura, Probolinggo, Jawa Timur 67524</li>\r\n <li>Phone: 0823-5066-5630</li>\r\n</ul>\r\n\r\n<p><strong>Hotel Java Banana </strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/792467694.jpg\" xss=removed></strong></p>\r\n\r\n<ul>\r\n <li>Address: Jl. Raya Bromo, Wonotoro, 67254, Probolinggo, Indonesia</li>\r\n <li>Phone: +62 (335) 541193</li>\r\n</ul>', 'Homestay_Mentari_Bromo.JPG', 'penginapan', 'lodge');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_koleksi`
--

CREATE TABLE `tb_koleksi` (
  `kd_koleksi` varchar(6) NOT NULL,
  `waktu_koleksi` varchar(15) NOT NULL,
  `nama_koleksi` varchar(128) NOT NULL,
  `name_koleksi` varchar(128) NOT NULL,
  `desk_koleksi` text NOT NULL,
  `desc_koleksi` text NOT NULL,
  `gambar_koleksi` varchar(100) NOT NULL,
  `link_koleksi` varchar(128) NOT NULL,
  `linkoleksi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_koleksi`
--

INSERT INTO `tb_koleksi` (`kd_koleksi`, `waktu_koleksi`, `nama_koleksi`, `name_koleksi`, `desk_koleksi`, `desc_koleksi`, `gambar_koleksi`, `link_koleksi`, `linkoleksi`) VALUES
('KLS001', '1615488298', 'Baju Pengantin Adat Tengger Berwarna Hitam', 'Black Tengger Traditional Wedding Attire', '<p>Dalam acara perkawinan masyarakat Tengger, mereka menggunaka pakaian adat masyarakat Tengger yang disebut dengan “Basahan Hitam”. Untuk mempelai laki-laki menggunakan semacam ikat kepala yang disebut udeng.</p><p>Model ikat kepala yang digunakan masyarakat Tengger diikat di bagian belakang, sedangkan busana yang dipakai berwarna hitam. Untuk mempelai wanita masyarakat Tengger menggunakan kebaya hitam dan jarik. Filosofi warna pakaian adat perkawinan dalam masyarakat Tengger yang berwarna hitam mengartikan warna hitam sebagai ketenangan, kedamaian, “anteng”.</p>', '<p>In a marriage ceremony, the Tengger people use the traditional attire called “<i>Basahan Hitam</i>”. For the bridegroom, they use a kind of headband called “<i>udeng</i>”.</p><p>The headband used by the Tengger people is tied at the back of the head. Meanwhile, for the clothes, they use black attire. For the bride, they use black <i>kebaya</i> and <i>jarik</i>. The black color on the wedding attire refers to peacefulness and calmness.</p>', 'baju_pengantin.jpg', 'baju-pengantin-adat-tengger-berwarna-hitam', 'black-tengger-traditional-wedding-attire'),
('KLS002', '1615488388', 'Patung Roro Anteng & Joko Seger', 'Roro Anteng & Joko Seger Statue', '<p>Suku Tengger ialah salah satu suku yang berada di wilayah Indonesia. Nama Tengger berasal dari kata akhiran nama legenda Roro Anteng dan Joko Seger yakni “-teng” dan “-ger”.</p><p>Roro Anteng dan Joko Seger juga erat kaitannya dengan asal usul adanya Upacara Kasada. Roro Anteng dan Joko Seger sangat ingin memiliki keturunan. Mereka pun akhirnya memohon kepada Dewata agar bisa memiliki 25 anak.</p><p>Permohonan mereka dikabulkan namun dengan satu syarat anak ke 25 harus dipersembahkan untuk Dewa Bromo. Saat dewasa Kusuma anak dari Roro Anteng dan Joko Seger menceburkan diri ke kawah dan meminta saudara-saudaranya memberikan kurban ke kawah Gunung Bromo pada bulan kasada atau tepat pada bulan purnama muncul.</p><p>Maka upacara ini kemudian menjadi awal mula dilaksanakannya Upacara Kasada oleh masyarakat suku Tengger.</p>', '<p>Tengger tribe is one of the tribes in Indonesia. The name Tengger is derived from the ending words of the legend of Roro Anteng and Joko Seger namely “-teng” and “-ger”.</p><p>The legend of Roro Anteng and Joko Seger is closely related to the origin of the Kasada Ceremony. Roro Anteng and Joko Seger really wanted to have children. They finally begged Dewata to have 25 children.</p><p>Their request was granted but under one condition, the 25th child must be offered to Dewata Bromo. As an adult, Kusuma –the children of Roro Anteng and Joko Seger threw himself into the crater and asked their siblings to give sacrifies to the crater of Mount Bromo in the Kasada month or just in full moon.</p><p>Then this ceremony became the beginning of the Kasada Ceremony by the Tengger tribe community.</p>', 'patung_roro_dan_jogo.jpg', 'patung-roro-anteng-%26-joko-seger', 'roro-anteng-%26-joko-seger-statue'),
('KLS003', '1615492392', 'Replika Keris Wahyu Sejagat', 'Replica of Keris Wahyu Sejagat', '<p><span xss=removed><span xss=removed>Keris Wahyu Sejagat adalah sebuah keris peninggalan dari leluhur Suku Tengger untuk dipakai pada saat acara ritual dan pembuka Tari Sodoran di puncak Perayaan Hari Raya Karo</span></span></p>', '<p><span xss=removed><span xss=removed>Keris Wahyu Sejagat is <em>keris </em>– Indonesian dagger with a ridged serpentine blade of Tengger Tribe’s ancestors. It used for ritual and opening of Sodoran Dance at the Karo Celebration.</span></span></p>', 'replika_keris.jpg', 'replika-keris-wahyu-sejagat', 'replica-of-keris-wahyu-sejagat'),
('KLS004', '1615972561', 'Replika Tari Glipang', 'Replica of Glipang Dance', '<p>Tari Glipang merupakan salah satu tarian tradisional yang paling terkenal dari Probolinggo, Jawa Timur. Glipang berasal dari bahasa Arab “Gholiban” yang artinya kebiasaan. Tarian ini menggambarkan keberanian seorang ksatria yang mengungkapkan ketidakpuasannya terhadap penjajahan Belanda.</p><p>Tari Glipang dibuat oleh Sari Truno dari Pulau Madura.</p>', '<p>Glipang dance is a traditional dance from Probolinggo, East Java. Glipang comes from the Arabic word “ Gholiban” which means habit.</p><p>This term refers to Sari Truno’s dislike of the arbitrary Dutch customs of the natives. It depicts the bravery of a knight who expresses his dissatisfaction with Dutch colonialism.</p><p>It was created by Sari Truno from Madura Island. Therefore, this dance consists of broken movements from of depiction of Madurese culture.</p>', 'tari_glipang.jpg', 'replika-tari-glipang', 'replica-of-glipang-dance'),
('KLS005', '1615972605', 'Alat Musik', 'Music Instrumental', '<p>Alat musik tradisional suku Tengger yang masih digunakan adalah Gendang, Gamelan dan Gong. Semua alat musik tersebut digunakan dalam acara-acara adat tertentu seperti Upacara Kasada, Tari Sodoran, dan lain-lain.</p>', '<p>Traditional musical instruments in the Tengger tribe that are still used are Bonang, Gamelan, Gong. All of these musical instruments are used in certain traditional events such as Kasada Ceremony, Sodoran Dance, etc.</p>', 'alat_musik1.jpg', 'alat-musik', 'music-instrumental'),
('KLS006', '1615972644', 'Gamelan', 'Gamelan', '<p>Fungsi gamelan adalah sebagai iring-iringan tari, upacara adat, pernikahan, dan pagelaran seni.</p>', '<p>It has function as accompaniment of dance, wedding, and art show.</p>', 'gamelan.jpg', 'gamelan', 'gamelan'),
('KLS007', '1615972709', 'Gendang', 'Gendang', '<p>Fungsi gendang adalah sebagai penentu tempo pada musik untuk mengiringi tarian atau silat. Gendang juga dipakai untuk mengiringi penganten dan upacara menyambut tamu.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/245470596.jpg\" xss=removed></p>', '<p>It has function for determining rhythm in dance or <em>silat</em> – Indonesian’s traditional self-defense art.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/245470596.jpg\" xss=removed></p>', 'gendang.jpg', 'gendang', 'gendang'),
('KLS008', '1615972748', 'Gong', 'Gong', '<p>Fungsi gong adalah sebagai bagian dari upacara keluarga, masyarakat, kerajaan, dan keagamaan.</p>', '<p>It has function as accompaniment of family, community, kingdom, and religious ceremony.</p>', 'gong.jpg', 'gong', 'gong'),
('KLS009', '1615972785', 'Replika Tari Sodoran', 'Replica of Sodoran Dance', '<p>Tari Sodoran adalah sebuah tarian tradisional dari Suku Tengger. Tari Sodoranmerupakan tarian pembuka pada acara Hari Raya Karo. Biasanya, Hari Raya Karo dilaksanakan pada bulan kedua berdasarkan Kalender Suku Tengger. Tarian ini adalah sebuah tarian yang menggambarkan proses terjadinya manusia yang divisualisasikan dengan gerakan yang mempertimbangkan kesopanan.</p>', '<p>Sodoran Dance is a traditional dance of Tengger tribe. Sodoran Dance is an opening dance in Karo Celebration. Usually, Karo Celebration is held on the second month of Tengger Tribe’s Calender. This dance is a dance that illustrates the process of human’s formed which is visualized by movement that consider politeness.</p>', 'tari_sodoran.jpg', 'replika-tari-sodoran', 'replica-of-sodoran-dance'),
('KLS010', '1615972910', 'Baju Adat Tengger', 'Tengger Traditional Clothes', '<p>Masyarakat suku Tengger memakai baju hitam, sarung, dan memakai udheng. Udheng atau ikat kepala biasanya hanya dikenakan oleh laki-laki dan pada hari-hari besar seperti Kasada, Karo, Unan-unan, Tirto Aji, dan Entas-entas atau pada saat beribadah di pura.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/94201144.jpg\" xss=removed></p>\r\n\r\n<p>Laki-laki mengenakan sarung untuk dibuka dan dimasukkan di atas kepala dan kemudian diselempangkan di badan. Tujuannya adalah untuk melindungi tubuh dari dinginnya cuaca dan teriknya matahari saat bekerja di ladang.</p>\r\n\r\n<p>Wanita mengenakan sarung dengan cara menyatukan atau mengikatkan salah satu ujung bawah dan ujung atas sarung lalu dikalungkan di leher sehingga terjuntai ke belakang. Tujuannya bukan hanya melindungi tubuh dari terik dan dinginnya cuaca tapi juga untuk melindungi bayi yang biasanya digendong di punggung.</p>', '<p>Tengger people wear black shirt, <em>sarung</em> and <em>udheng</em>. <em>Udheng</em> usually only worn by men on big days such as <em>Kasada</em>, <em>Karo</em>, <em>Unan-unan</em>, <em>Tirto Aji</em>, and <em>Entas-entas</em> or during worship at temple.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/museumtengger/assets/upload/94201144.jpg\" xss=removed></p>\r\n\r\n<p>Meanwhile, sarong is an everyday garment worn by men, women, both young and old. Men wear a <em>sarung</em> by opening and inserting it over their head and then slung over their body. The aim is to protect their body from the cold weather and the hot sun while working in the fields.</p>\r\n\r\n<p>Women wear <em>sarung </em>by combining or tying one of the lower and upper ends of the sarung and then putting it around the neck, so that it falls backwards. The aim is not only to protect the body from the hot and cold weather, but also to protect the baby who usually carried on the back.</p>', 'bajuadat_tengger.jpg', 'baju-adat-tengger', 'tengger-traditional-clothes'),
('KLS011', '1615973050', 'Patung Dukun', 'Shaman Statue', '<p>Dukun di Suku Tengger sebagai pemimpin kegiatan atau acara di Suku Tengger seperti upacara adat, upacara Yadnya Kasada, dan lain-lain.</p><p>Setiap desa di daerah kawasan Tengger terdapat satu dukun.</p><p>Dukun di Suku Tengger dikenal dengan sebutan “Dukun Pandhita.”</p>', '<p>A shaman in Tengger tribe has a role as a leader of activities or events in Tengger tribe such as traditional ceremony, Yadnya Kasada ceremony, etc.</p><p>Each villages in Tengger area has one shaman.</p><p>A shaman of Tengger tribe was known as “<i>Dukun Pandhita</i>.”</p>', 'patung_dukun.jpg', 'patung-dukun', 'shaman-statue'),
('KLS012', '1615973087', 'Baju Pengantin Adat Tengger Berwarna Merah', 'Red Tengger Traditional Wedding Attire', '<p>Terdapat dua macam warna baju pernikahan yaitu warna hitam dan merah.</p><p>Baju pernikahan berwarna hitam merupakan baju pernikahan untuk pasangan yang beragama hindu sedangkan baju berwarna merah merupakan baju pernikahan untuk pasangan yang beragama hindu dan islam.</p>', '<p>There are two types of wedding attire color, which are black and red.</p><p>The black wedding attire is only for Hindu couples, while the red wedding attire is for couples who are Muslim.</p>', 'baju_merah.jpg', 'baju-pengantin-adat-tengger-berwarna-merah', 'red-tengger-traditional-wedding-attire'),
('KLS013', '1615973133', 'Dandang Kenteng', 'Dandang Kenteng', '<p>Bukti temuan benda kuno peninggalan Kerajaan Majapahit. Benda ini ditemukan di sekitar Candi Lawang Kedaton di Desa Segaran Kecamatan Tiris pada tanggal 21 Februari 1980. Benda ini ditemukan oleh Bapak Sutopo yang merupakan seorang petani.</p>', '<p>It is a heritance from Majapahit Empire. It was founded around Lawang Kedaton Temple in Segaran Village Tiris District on February, 21st 1980. It was founded by a farmer named Sutopo.</p>', 'dandang_kenteng.jpg', 'dandang-kenteng', 'dandang-kenteng'),
('KLS014', '1615973163', 'Fosil Daun', 'Leaf Fossil', '<p>Benda ini merupakan salah satu bukti sarana pengobatan atau penyembuhan keluarga Kerajaan Majapahit. Benda ini ditemukan di Desa Andung Biru Kecamatan Tiris pada tanggal 7 Mei 1954. Benda ini ditemukan oleh Bapak Kerto Djojo yang merupakan perangkat desa.</p>', '<p>This fossil is the evidence of medicinal treatment in Majapahit Empire family. It was founded in Andung Biru Village Tiris District on May, 7th 1954. It was founded by village official named Kerto Djojo.</p>', 'fosil_daun.jpg', 'fosil-daun', 'leaf-fossil'),
('KLS015', '1615973206', 'Guci (Besar)', 'Vase (Big)', '<p>Bukti temuan benda kuno peninggalan Kerajaan Majapahit. Benda ini ditemukan di sekitar Candi Jabung di Desa Asembakor Kecamatan Kraksaan pada tanggal 5 Januari 1970.  Benda ini ditemukan oleh Bapak Sariwongso yang merupakan perangkat desa Asembakor.</p>', '<p>It is a heritance from Majapahit Empire. It was founded around Jabung Temple in Asembakor Village Kraksaan District on January, 5th 1970. It was founded by Asembakor village official named Sariwongso.</p>', 'guci_besar.jpg', 'guci-%28besar%29', 'vase-%28big%29'),
('KLS016', '1615973265', 'Guci (Tanggung)', 'Vase (Medium)', '<p>Bukti temuan benda kuno peniggalan Kerajaan Majapahit. Benda ini ditemukan di sekitar Candi Jabung Jabung di Desa Asembakor Kecamatan Kraksaan pada tanggal 5 Januari 1970. Benda ini ditemukan oleh Bapak Sariwongso yang merupakan perangkat desa Asembakor.</p>', '<p>It is a heritance from Majapahit Empire. It was founded around Jabung Temple in Asembakor Village Kraksaan District on January, 5th 1970. It was founded by Asembakor village official named Sariwongso.</p>', 'guci_tanggung.jpg', 'guci-%28tanggung%29', 'vase-%28medium%29'),
('KLS017', '1615973307', 'Guci (Kecil)', 'Vase (Small)', '<p>Bukti temuan benda kuno peniggalan Kerajaan Majapahit. Benda ini ditemukan di sekitar Candi Jabung Jabung di Desa Asembakor Kecamatan Kraksaan pada tanggal 5 Januari 1970. Benda ini ditemukan oleh Bapak Sariwongso yang merupakan perangkat desa Asembakor.</p>', '<p>It is a heritance from Majapahit Empire. It was founded around Jabung Temple in Asembakor Village Kraksaan District on January, 5th 1970. It was founded by Asembakor village official named Sariwongso.</p>', 'guci_kecil.jpg', 'guci-%28kecil%29', 'vase-%28small%29'),
('KLS018', '1615973353', 'Penai (Kuwali)', 'Penai (Kuwali)', '<p>Bukti temuan benda kuno peninggalan Kerajaan Majapahit. Benda ini ditemukan di sekitar Candi Jabung Jabung di Desa Asembakor Kecamatan Kraksaan pada tanggal 31 Desember 1978. Benda ini ditemukan oleh Bapak Sariwongso yang merupakan perangkat desa Asembakor.</p>', '<p>It is a heritance from Majapahit Empire. It was founded around Jabung Temple in Asembakor Village Kraksaan District on December, 31st 1978. It was founded by Asembakor village official named Sariwongso.</p>', 'penai.jpg', 'penai-%28kuwali%29', 'penai-%28kuwali%29'),
('KLS019', '1615973387', 'Kenteng', 'Kenteng', '<p>Bukti temuan benda kuno peninggalan Kerajaan Majapahit. Benda ini ditemukan di sekitar Candi Jabung di Desa Jabung Candi Kecamatan Paiton pada tanggal 24 Maret 1977. Benda ini ditemukan oleh Bapak Mukri yang merupakan seorang petani.</p>', '<p>It is a heritance from Majapahit Empire. It was founded around Jabung Temple in Jabung Candi Village Paiton District on December, 24th 1977. It was founded by a farmer named Mukri.</p>', 'kenteng.jpg', 'kenteng', 'kenteng'),
('KLS020', '1615973415', 'Bonang', 'Bonang', '<p>Bukti temuan benda kuno peninggalan Kerajaan Majapahit. Benda ini ditemukan di sekitar Candi Lawang Kedaton di Desa Segaran Kecamatan Tiris pada tanggal 10 Desember 1975. Benda ini ditemukan oleh Bapak Sukardi yang merupakan perangkat desa Segaran.</p>', '<p>It is a heritance from Majapahit Empire. It was founded around Lawang Kedaton Temple in Segaran Village Tiris District on December, 10th 1975. It was founded by Segaran village official named Sukardi.</p>', 'bonang1.jpg', 'bonang', 'bonang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `kode_id` varchar(6) NOT NULL,
  `nama_komentar` varchar(128) NOT NULL,
  `email_komentar` varchar(50) NOT NULL,
  `isi_komentar` varchar(200) NOT NULL,
  `waktu_komentar` varchar(15) NOT NULL,
  `level_komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `kode_id`, `nama_komentar`, `email_komentar`, `isi_komentar`, `waktu_komentar`, `level_komentar`) VALUES
(6, 'KLS001', 'Rin', 'rin@gmail.com', 'dawdwa', '@1616620228', 0),
(7, 'KLS001', 'halooo', 'rin@gmail.com', '<strong><i>@Rin</i></strong> awdwada', '@1616620246', 6),
(11, 'KLS001', 'ciee', 'rin@gmail.com', 'aiuwgda', '@1616764725', 0),
(13, 'KLS001', 'halooo', 'rin@gmail.com', '<strong><i>@ciee</i></strong> adedqd', '@1616768973', 11),
(14, 'KLS001', 'halooo', 'rin@gmail.com', 'katakan', '@1617201475', 0),
(15, 'KLS001', 'oke', 'rin@gmail.com', '<strong><i>@halooo</i></strong> hiyaaaaa', '@1617201490', 14),
(16, 'KLS001', 'Dhea', 'dhea@gmail.com', 'haaiiii', '@1617977027', 0),
(17, 'KLS001', 'Arini', 'rin@gmail.com', '<strong><i>@Dhea</i></strong> Halooo', '@1617977050', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pesan` varchar(128) NOT NULL,
  `email_pesan` varchar(128) NOT NULL,
  `subyek_pesan` varchar(128) NOT NULL,
  `isi_pesan` text NOT NULL,
  `waktu_pesan` varchar(30) NOT NULL,
  `status_pesan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama_pesan`, `email_pesan`, `subyek_pesan`, `isi_pesan`, `waktu_pesan`, `status_pesan`) VALUES
(1, 'Aisyah Putri', 'ariniarin.af@gmail.com', 'Apa ya', 'Saya ingin benherti langganan', '1617208781', 1),
(3, 'Dhea Siwy', 'dhea@gmail.com', 'Tanya', 'Halo admin Museum Jember', '1617977239', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subscribe`
--

CREATE TABLE `tb_subscribe` (
  `id` int(11) NOT NULL,
  `email_subs` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_subscribe`
--

INSERT INTO `tb_subscribe` (`id`, `email_subs`) VALUES
(4, 'danyahmadihza99@gmail.com'),
(5, 'ariniarin.af@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(5) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email_user` varchar(128) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_user` datetime NOT NULL,
  `level_user` int(1) NOT NULL,
  `status_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email_user`, `username`, `password`, `tanggal_user`, `level_user`, `status_user`) VALUES
('X08BI', 'Dhea Siwy Wardhani', 'dheasiwy@gmail.com', 'dheasiwyy', 'c8e7a3bcff95a3114bb2399da489cf3c', '2021-02-21 21:17:13', 0, 1),
('X08BY', 'Arini Firdausiyah Ali', 'arini@gmail.com', 'arinifir', '25d55ad283aa400af464c76d713c07ad', '2021-02-21 21:17:13', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tb_koleksi`
--
ALTER TABLE `tb_koleksi`
  ADD PRIMARY KEY (`kd_koleksi`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_subscribe`
--
ALTER TABLE `tb_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_subscribe`
--
ALTER TABLE `tb_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
