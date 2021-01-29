-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2021 pada 16.37
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `nogaleri` int(3) NOT NULL,
  `namagaleri` text NOT NULL,
  `tanggalgaleri` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`nogaleri`, `namagaleri`, `tanggalgaleri`, `status`, `foto`) VALUES
(1, 'Ibadah Awal Pekan', '2021-01-13', 'Aktif', '7.jpg'),
(2, 'Ibadah Raya Natal ', '2021-01-11', 'Aktif', '9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibadah`
--

CREATE TABLE `ibadah` (
  `noibadah` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `link` text NOT NULL,
  `ayat` text NOT NULL,
  `isi` text NOT NULL,
  `kesimpulan` text NOT NULL,
  `pic` varchar(60) NOT NULL,
  `status` varchar(10) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ibadah`
--

INSERT INTO `ibadah` (`noibadah`, `judul`, `tanggal`, `link`, `ayat`, `isi`, `kesimpulan`, `pic`, `status`, `foto`) VALUES
(1, 'Ibadah Raya  \"Bertumbuh & Berbuah\" 12 November 2020', '2020-07-05', 'https://www.youtube.com/embed/oOjwZ2Sb7QU', 'Adakah kapak memegahkan diri terhadap orang yang memakainya, atau gergaji membesarkan diri terhadap orang yang mempergunakannya? (Yes 10:15)', 'Tuhan Yesus sering menggunakan perumpamaan di dalam pengajarannya. Perumpamaan adalah metafora yang diambil dari kehidupan sehari-hari atau juga hasil kebudayaan yang dekat dengan para pendengarnya, supaya apa yang diajarkan lebih mudah dipahami dan dimengerti oleh para pendengarnya dan akhirnya mereka mengerti akan penerapannya. Perumpamaan-perumpamaan yang diajarkan oleh Yesus adalah Perumpamaan tentang Kerajaan Allah yang mengundang kepada pertobatan. Pada perumpamaan pertama di dalam Markus 4, Yesus menceritakan tentang seorang penabur yang menaburkan benihnya. Markus ingin mengajak pendengar mengerti bahwa sesuatu yang kecil (seperti benih) dapat berkembang atau tidak berkembang dan menghasilkan atau tidak menghasilkan gandum yang banyak tergantung apakah tanahnya bagus, berduri, berbatu atau tandus.', 'Anak-anak juga seperti tanah yang ditaburi oleh benih-benih firman Allah. Firman Allah itu akan menjadi pedoman dan pegangan mereka dalam menjalani kehidupannya baik sekarang maupun ke depannya. Jika mereka dapat mendengar, menyambut dan melakukan dengan baik tentu mereka dapat berbuah dengan baik juga. Menjadi anak-anak yang setia kepada Yesus, bisa menjadi berkat bagi sesama, menjadi teladan bagi sesama. Dibalik semuanya itu tentu dibutuhkan peran serta orangtua, guru, pamong dan semua orang-orang yang dekat dengan sang anak supaya dapat mempersiapkan diri anak menjadi tanah yang subur (bukan jalan raya, tanah berbatu atau bersemak duri). Sehingga mereka benar-benar akan menjadi anak-anak yang membanggakan dan setia kepada Tuhan, memuliakan Kristus sebagai Raja mereka.', 'Pdt. Pahala Hutabarat', 'Aktif', '8.jpg'),
(2, 'Ibadah Raya Anak ', '2021-01-10', 'https://www.youtube.com/embed/oOjwZ2Sb7QU', 'oke', 'Oke', 'oke', 'Erwin Kristiawan', 'Non Aktif', '3988725.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_pengguna` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telepone` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_pengguna`, `username`, `password`, `nama_lengkap`, `email`, `telepone`, `alamat`, `foto`) VALUES
('1', 'admin', 'admin', 'Admin', 'admin37@gmail.com', '081228213057', 'Jagalan 06/08, Jebres, Surakarta', '850x850.jpg'),
('2', 'kenny', 'kenny', 'Kenny Dio Krisnamukti', 'kennydio99@gmail.com', '08916527722', 'Pucangsawit 09/22, Jebres, Surakarta.', 'ahmad.shyarief-___BvjQO4kJ3Ki___-1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motto` text NOT NULL,
  `sejarah` text NOT NULL,
  `Sejarah1` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL,
  `logo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`nama`, `alamat`, `nohp`, `email`, `motto`, `sejarah`, `Sejarah1`, `visi`, `misi`, `tujuan`, `logo`) VALUES
('GSJA Kristus Kekal', 'Pucangsawit 02/09, Pucangsawit, Jebres, Surakarta', '(0271) 669602', 'gsjakristuskekal20@gmail.com', 'Cinta Tuhan - Rendah Hati - Jujur - Rajin', 'GSJA KK adalah satu gereja yang bertumbuh di kota Solo.berawal dari sebuah bangunan yang berdinding bambu(gedhek) \r\ngereja ini mulai dibuka pada tahun 1980 dengan jemaat mula-mula 7 orang.seiring berjalannya waktu gereja ini mulai dibangun\r\nlagi pada tahum 1982 untuk mencapai visi Pdt.Pahala Hutabarat tetap setia dalam melayami gereja ini hingga semakin bertambah banyaknya \r\njemaat di gereja ini.karena bertambahnya jemaat maka gedung gereja pun di bangun kembali pada tahun 2000 dengan gedung yang lebih\r\nbesar untuk mencakup jemaat yang lebih banyak.GSJA Kk tidak hanya melayani di gereja saja mulai didirikannya kelompok-kelompok sel\r\ndi rumah-rumah jemaat untuk menjangkau lebih banyak lagi jiwa.Dan seiring berjalanya waktu GSJA KK kembali di bangun pada tahun 2016 hingga saat ini\r\nkurang lebih 300 jemaat di gembalakan di gereja ini.', '', '', '', '', 'gsja.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `renungan`
--

CREATE TABLE `renungan` (
  `norenungan` int(8) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `tanggal` date NOT NULL,
  `pic` varchar(60) NOT NULL,
  `isi1` text NOT NULL,
  `isi2` text NOT NULL,
  `ayat` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `renungan`
--

INSERT INTO `renungan` (`norenungan`, `judul`, `tanggal`, `pic`, `isi1`, `isi2`, `ayat`, `status`, `foto`) VALUES
(4, 'Berserah Kepada Tuhan', '2020-07-24', 'Deddy Pasaribu', 'Betapa sedihnya hati seorang ibu apabila melihat anaknya sendiri mengalami penderitaan yang amat dahsyat. Hal inilah yang juga dirasakan oleh Bunda Maria ketika melihat Yesus tergantung di atas salib. Entah seberapa besar kepedihan yang ia rasakan ketika menyaksikan Puteranya menderita di kayu salib. Namun, semuanya ia terima dalam penyerahan yang total kepada Allah, seperti yang Maria sampaikan kepada Malaikat Gabriel, `Aku ini adalah hamba Tuhan, jadilah padaku menurut perkataanmu itu` (Luk 1:38).', 'Ketika kita mengalami penderitaan dalam hidup kita, apakah kita selalu mengingat kehadiran Allah dalam hidup kita? Mungkin seringkali kita mengeluh kepada Allah, mengapa saya mengalami semuanya ini. Kita melupakan satu hal, bahwa Allah selalu menginginkan yang terbaik bagi kita, walaupun mungkin rencana-Nya tidak bisa kita pahami sepenuhnya. Dalam situasi demikian, hendaknya kita meneladan Bunda Maria dalam sikap kepercayaan dan kepasrahan total kepada Allah, seraya selalu berharap bahwa Allah memberikan yang terbaik bagi kita.Santa Perawan Maria dari Gunung Karmel, doakanlah kami semua yang berlindung di bawah naungan skapulir suci dan mantol keibuanmu.', '`Marilah kepada-Ku, semua yang letih lesu dan berbeban berat, Aku akan memberi kelegaan kepadamu` (Mat 11 : 28)', 'Non Aktif', '9.jpg'),
(6, 'Buktikan Bila Kau Percaya', '2021-01-11', 'Budi Wijaya', 'Ketika saya mengantre untuk mengambil sarapan di sebuah konferensi Kristen, sekelompok wanita memasuki ruang makan kami. Saya tersenyum sembari menyapa seorang wanita yang berdiri di belakang saya. Saat membalas sapaan saya, ia berkata, â€œSaya kenal kamu.â€ Sambil mengambil telur orak-arik, kami berusaha mengingat-ingat kapan kami pernah saling bertemu sebelumnya. Saya rasa ia salah mengenali saya. Ketika kami bertemu lagi saat makan siang, wanita itu mendekati saya. â€œApakah kamu mengendarai mobil berwarna putih?â€ Saya mengangkat bahu. â€œYa, pernah. Beberapa tahun lalu.â€ Ia tertawa. â€œHampir setiap pagi, mobil kita berhenti di lampu merah di depan sebuah sekolah dasar,â€ katanya. â€œBiasanya kamu mengangkat tangan dan bernyanyi penuh sukacita. Saya pikir kamu pasti sedang menyembah Tuhan. Saya pun jadi ingin ikut menyembah-Nya, bahkan ketika hari itu terasa berat.â€ Kami pun bersyukur untuk hal itu, berdoa, berpelukan, dan menikmati makan siang bersama.', 'Perkataan teman baru saya itu menegaskan bahwa orang memang memperhatikan perilaku para pengikut Yesus, bahkan ketika kita mengira tidak ada yang melihat. Saat kita menghayati gaya hidup penyembahan yang penuh dengan sukacita, kita dapat menghampiri Allah Pencipta kita kapan saja dan di mana saja. Dengan mengakui kasih setia-Nya yang tak berkesudahan, kita dapat menikmati hubungan yang erat dengan-Nya dan bersyukur atas pemeliharaan-Nya yang setia (Mzm. 100). Baik dengan bernyanyi di dalam mobil, berdoa di depan umum, atau berbagi kasih Allah lewat perbuatan baik, kita dapat menginspirasi orang lain untuk ikut â€œ[memuji] nama-Nyaâ€ (ay.4). Menyembah Allah perlu dibiasakan setiap hari, bukan hanya pada hari Minggu.', 'Beribadahlah kepada Tuhan dengan sukacita, datanglah ke hadapan-Nya dengan sorak-sorai! â€” Mazmur 100:2', 'Non Aktif', '9.jpg'),
(2, 'Kemenangan Atas Iman', '2020-07-17', 'Deddy Pasaribu', 'Tak seorang pun mau menjalani hidup dengan memikul beban yang berat, artinya semua orang ingin terbebas dari beban, apa pun bentuknya.  Mana lebih enak:  berjalan membawa tas di punggung yang isinya sesuatu yang berat, atau berjalan santai tanpa membawa barang apa pun?  Pastinya lebih enak berjalan tanpa membawa apa-apa.  Tapi tak bisa dipungkiri bahwa hari-hari yang sedang kita hadapi saat ini begitu berat, semakin hari tantangan hidup semakin besar, beban hidup yang harus kita tanggung pun ssemakin berat.  Banyak orang menjadi putus asa dan frustasi karena tak sanggup menanggung beban yang begitu menekan dan memberati, langkah pun serasa terseok-seok.', 'Bagaimana supaya kita dapat bertahan dan mampu melewati hari-hari yang penuh beban ini?  Mari belajar memiliki penyerahan hidup sepenuhnya kepada Tuhan.  Bukankah Tuhan telah berfirman,  ', '', 'Non Aktif', '7.jpg'),
(5, 'Memandang Melampaui Masalah', '2021-01-27', 'Erwin Kristiawan', 'Awan-awan melayang rendah, menutupi cakrawala dan membatasi jarak pandang hingga tinggal beberapa ratus meter saja. Waktu terasa berjalan lambat. Keadaan tersebut membuat hati saya gundah. Namun kemudian, menjelang siang, awan mulai menyingkir, dan saya pun melihatnya: Pikes Peak, puncak tertinggi dari Pegunungan Rocky dan penanda kota saya yang paling terkenal, yang diapit pada kiri-kanannya oleh deretan pegunungan. Senyum pun merekah pada wajah saya. Saya menyadari bahwa perspektif fisik kitaâ€”jarak pandang mata kita yang sebenarnyaâ€”ternyata dapat mempengaruhi perspektif rohani kita. Saya pun teringat kepada nyanyian pemazmur, â€œAku melayangkan mataku ke gunung-gunungâ€ (Mzm. 121:1). Terkadang yang perlu kita lakukan hanyalah mengangkat mata kita sedikit lebih tinggi!', 'Sang pemazmur memikirkan dari mana datangnya pertolongan baginya, mungkin karena puncak-puncak bukit di sekitar Israel dipenuhi mezbah penyembahan berhala dan sering menjadi tempat persembunyian perampok. Mungkin juga pemazmur memandang jauh melampaui bukit-bukit itu ke arah Gunung Sion, tempat Bait Allah berada, dan mengingat bahwa Pencipta langit dan bumi adalah Allah sendiri (ay.2). Apa pun alasannya, untuk menyembah kita harus mengangkat mata. Pandangan mata kita haruslah terangkat melampaui situasi kita, melampaui masalah dan pencobaan yang kita hadapi, melampaui janji-janji kosong dari ilah-ilah palsu zaman ini. Dengan demikian kita akan dapat melihat Sang Pencipta dan Penebus, yaitu Dia yang mengenal kita seutuhnya. Dialah Allah, Pribadi yang akan â€œmenjaga keluar masukmu, dari sekarang sampai selama-lamanyaâ€ (ay.8).', 'Pertolonganku ialah dari Tuhan, yang menjadikan langit dan bumi. â€“Mazmur 121:2', 'Non Aktif', '8.jpg'),
(3, 'Merendahkan Diri Di Hadapan Allah', '2020-07-15', 'Deddy Pasaribu', 'Banyak kita dengar bahwa ada orang yang mengaku beriman tetapi melakukan penghinaan dan penindasan terhadap sesamanya yang memeluk agama lain dengan dalil membela Allahnya. Mereka mengira apa yang telah mereka lakukan itu adalah benar dan menjadi kehendak Allah, padahal nyatanya tidak demikian.', 'Kita tahu bahwa Allah adalah kasih (bdk.1Yoh 4:721), dan tidak mungkin kasih diwujudkan dalam bentuk penindasan dan ketidakadilan. Ini merupakan bentuk kecongkakan dan kesombongan manusia yang seakanakan sudah memahami Allah yang Mahabesar. Semakin kita mengenal Allah semakin besar pula kasih kita kepada sesama.', 'Adakah kapak memegahkan diri terhadap orang yang memakainya, atau gergaji membesarkan diri terhadap orang yang mempergunakannya? (Yes 10:15)', 'Aktif', '8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD UNIQUE KEY `nogaleri` (`nogaleri`);

--
-- Indeks untuk tabel `ibadah`
--
ALTER TABLE `ibadah`
  ADD PRIMARY KEY (`noibadah`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `renungan`
--
ALTER TABLE `renungan`
  ADD PRIMARY KEY (`judul`),
  ADD UNIQUE KEY `norenungan` (`norenungan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `nogaleri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ibadah`
--
ALTER TABLE `ibadah`
  MODIFY `noibadah` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `renungan`
--
ALTER TABLE `renungan`
  MODIFY `norenungan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
