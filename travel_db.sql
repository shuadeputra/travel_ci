-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 09:51 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_tbl`
--

CREATE TABLE `aboutus_tbl` (
  `id_aboutus` int(11) NOT NULL,
  `judul_besar` varchar(300) NOT NULL,
  `isi_besar` mediumtext NOT NULL,
  `judul_k1` varchar(300) NOT NULL,
  `isi_k1` varchar(300) NOT NULL,
  `judul_k2` varchar(300) NOT NULL,
  `isi_k2` varchar(300) NOT NULL,
  `judul_k3` varchar(300) NOT NULL,
  `isi_k3` varchar(300) NOT NULL,
  `judul_k4` varchar(300) NOT NULL,
  `isi_k4` varchar(300) NOT NULL,
  `judul_k5` varchar(300) NOT NULL,
  `isi_k5` varchar(300) NOT NULL,
  `judul_k6` varchar(300) NOT NULL,
  `isi_k6` varchar(300) NOT NULL,
  `aboutus_gmbr` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus_tbl`
--

INSERT INTO `aboutus_tbl` (`id_aboutus`, `judul_besar`, `isi_besar`, `judul_k1`, `isi_k1`, `judul_k2`, `isi_k2`, `judul_k3`, `isi_k3`, `judul_k4`, `isi_k4`, `judul_k5`, `isi_k5`, `judul_k6`, `isi_k6`, `aboutus_gmbr`, `date`) VALUES
(1, 'What We do', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sequi necessitatibus deleniti accusamus provident dignissimos numquam fuga nulla quia voluptatibus, dolore voluptate excepturi accusantium dolores temporibus fugit, voluptas velit omnis!</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sequi necessitatibus deleniti accusamus provident dignissimos numquam fuga nulla quia voluptatibus, dolore voluptate excepturi accusantium dolores temporibus fugit, voluptas velit omnis!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sequi necessitatibus deleniti accusamus provident dignissimos numquam fuga nulla quia voluptatibus, dolore voluptate excepturi accusantium dolores temporibus fugit, voluptas velit omnis!</p>\r\n', 'Traveli aja', 'Beginilah awal cerita dari traveli', 'Traveli ok oc', 'Beginilah awal cerita dari traveli', 'Traveli Mendukung', 'Beginilah awal cerita dari traveli', 'Traveli super kece', 'Beginilah awal cerita dari traveli', 'Super sekali Traveli', 'Beginilah awal cerita dari traveli asdasdasd', 'Percobaan', 'beginilah asal mulanya', 'about_traveli.jpg', '2018-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `user_lavel` varchar(30) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`username`, `password`, `nama`, `alamat`, `user_lavel`, `datetime`) VALUES
('Ade Putra', 'shuade', 'ade putra', 'jl.antara', 'super admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `blog_id` int(30) NOT NULL,
  `blog_name` varchar(200) NOT NULL,
  `blog_dsc` text NOT NULL,
  `blog_foto` varchar(400) NOT NULL,
  `title_seo` varchar(500) NOT NULL,
  `keyword_seo` varchar(500) NOT NULL,
  `description_seo` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`blog_id`, `blog_name`, `blog_dsc`, `blog_foto`, `title_seo`, `keyword_seo`, `description_seo`, `date`) VALUES
(13, '5 Fakta Mengejutkan Thai Tea yang Sedang Digandrungi', 'Teh Thailand yang kini sedang naik daun memang berbeda dari teh lainnya. Thai tea sudah dikenal masyarakat asli Thailand sejak tahun 1980an.\r\nOleh masyarakat lokal, Thai tea dikenal dengan sebutan cha yen, yaitu campuran teh hitam, susu kental manis dan es. Kini Thai tea menjadi bagian utama dari beberapa kuliner Thailand dengan membawa fakta menariknya.\r\n\r\n<br><br>Fakta Thai Tea\r\nThai tea terbuat dari teh, susu, dan gula. Teh Thailand dibuat dari teh Ceylon yang banyak tumbuh di Bai Miang. Ada fakta lain tentang thai tea yang pasti baru kamu tahu, seperti berikut:\r\n\r\n<br><br>Kaya Rempah\r\nYang membedakan Thailand tea dari teh lainnya adalah rempah-rempah. Tahukah kamu, dalam teh Thailand dimasak bersama orange blossom water, star anise, asam jawa, dan rempah lain sehingga kesegaran sangat terasa dalam Thai tea.\r\n\r\n<br><br>Susu Kental Manis\r\nCondensed milk dipilih bukan tanpa alasan. Susu kental manis dinilai lebih kaya rasa dalam minuman ketimbang susu bubuk. Selain itu, gula juga ditambahkan sebagai pemanisnya. Beberapa gerai Thai tea juga menambahkan creamer agar semakin kaya rasa.\r\n\r\n<br><br><br>sumber : http://lifestyle.liputan6.com/read/3025333/5-fakta-mengejutkan-thai-tea-yang-sedang-digandrungi', 'thai_tea_lim-lim.jpg', 'cobaan', 'Percobaan', 'Test', '2017-12-14 07:12:04'),
(14, 'Fakta di Balik Thai Tea, Minuman yang sedang Tren', 'pasti tahu minuman segar dan nikmat yang sedang tren sekarang ini. Ya, minuman itu adalah thai tea. Dimanapun Anda bisa menemukan gerai teh ini, seperti di Mall, atau di pinggiran jalan. Bahkan di restoran ternama pun menyediakan thai tea sebagai menu minuman mereka.\r\nBerbicara mengenai minuman populer thai tea mungkin selama ini Anda hanya menikmatinya saja. Padahal, ada beberapa fakta menarik yang perlu Anda ketahui. Sudah dikenal masyarakat Thailand sejak 1980 an, simak fakta mengenai thai tea berikut.\r\n<br><br>1. Susu kental manis\r\nAnda yang hobi minum thai tea pasti pernah melihat cara membuatnya. Thai tea selalu menggunakan susu kental manis daripada susu bubuk. Hal ini bukan tanpa alasan, susu kental memiliki rasa yang lebih kaya. Itulah yang membuat thai tea selalu enak dinikmati. Selain itu, gula dan creamer juga suka ditambahkan sebagai penambah rasa.\r\n<br><br>2. Kaya rempah\r\nTahukah Anda bahwa thai tea kaya akan rempah? Inilah yang membedakan thai tea dari teh lainnya. Meski berasal dari Thailand, ada rempah Indonesia pada minuman ini. Thai tea dimasak bersama star anise, asam jawa, blossom water dan beberapa rempah lainya. Sekarang terjawab sudah kesegaran dibalik thai tea.\r\n<br><br>3. Durasi pembuatan\r\nTidak bisa sembarangan dalam membuat thai tea. Jika Anda sering mampir ke gerai thai tea, Anda pasti pernah melihat proses pembuatannya. Memasak thai tea bersama rempahnya membutuhkan waktu 5 menit. Agar lebih maksimal, dibutuhan waktu sekitar 7-8 menit untuk mengentalkan rasanya.\r\n<br><br>4. Antioksidan tinggi\r\nMengonsumsi thai tea juga bermanfaat untuk tubuh Anda. Kaya akan rempah membuat thai tea mengandung banyak zat yang menyehatkan tubuh. Terdapat antioksidan padathai tea sehingga dapat menangkal radikal bebas dan mencegah kanker.\r\n\r\n<br><br><br> sumber : https://merahputih.com/post/read/fakta-dibaik-thai-tea-minuman-yang-sedang-tren', 'thia_tea_limlim_terenak.png', '', '', '', '2017-12-14 07:15:34'),
(15, 'Segarnya Thai Green Tea Racikan Gerai Thai Tea Populer', 'Thailand juga punya racikan teh susu yang enak. Bernama Thai tea, minuman tersedia dalam pilihan original maupun teh hijau. Slurrpp!\r\n\r\n<br><br>Thai tea atau Thai iced tea umumnya dibuat dengan teh hitam atau disebut Bai Miang dalam bahasa setempat. Teh lalu ditambahkan pewarna merah dan oranye sehingga menghasilkan warna khas pada racikan teh ini.\r\n\r\n<br><br>Teh lalu dipadukan dengan gula pasir, krimer, hingga susu kental manis untuk menciptakan paduan rasa lezat. Minuman bisa dinikmati panas maupun dingin.\r\n<br><br>Kami sempat mengintip proses pembuatan Thai green tea di gerai berlogo gajah ini. Dalam gelas, krimer bubuk, gula pasir dan teh hijau diaduk jadi satu.\r\n\r\n<br><br>Sebelumnya teh diseduh dalam teko berpenyaring. Kemudian teh dituang kembali ke teko kosong lainnya. Proses ini dilakukan hingga 4 kali agar warna dan rasa teh hijau semakin kuat.\r\n<br><br>\"Kalau sudah 15 menit, bubuk teh dalam penyaring harus dibuang. Supaya rasanya ngga pahit,\" tutur salah satu pegawai Dum Dum. Selanjutnya, racikan teh hijau ditambahkan susu kental manis dan diaduk rata kembali.\r\n\r\n<br><br>Thai green tea pun siap dimasukkan dalam cup plastik tinggi berisi es batu. \"Langkah terakhir, minuman diberi krimer cair sehingga memberi tekstur creamy,\" ujar pegawai.\r\n<br><br>sumber : https://food.detik.com/info-kuliner/d-3463594/segarnya-thai-green-tea-racikan-gerai-thai-tea-populer\r\n', 'thai_tea_enak_limlim.jpg', '', '', '', '2017-12-14 07:18:46'),
(16, 'Ternyata Inilah Asal-usul Thai Tea yang Belum Banyak Diketahui!', 'Kerajaan Thailand didirikan pada pertengahan abad ke 14. Dikenal dengan nama Siam sampai dengan 1939, Thailand adalah satu-satunya Negara di Asia tenggara yang tidak pernah dikuasai oleh bangsa Eropa. Revolusi damai pada tahun 1932 berujung pada monarki konstitusional. Bekerja sama dengan Jepang pada perang dunia ke-dua, Thailand menjadi ally Amerika setelah konflik yang terjadi.\r\n\r\n<br><br>Walaupun Thailand dari sudut pandang sejarah tidak pernah menjadi negara peminum teh, Thai tea merupakan hal umum di sepanjang sejarah Thailand. Kebanyakan mengenal minuman manis kental yang disebut Thai tea. Biasanya terdiri dari the hitam dengan bunga lawang (star anise), pewarna makanan, kadang dicampur dengan rempah-rempah dan susu kental manis. Disuguhkan secara panas atau dengan es.\r\n\r\n<br><br>Pohon teh adalah tanaman asli dari Thailand Utara, namun penduduk Thailand dan tetangga dekatnya Burma tidak memiliki tradisi meminum teh. Didalam sebuah resep kuno tertulis teh hijau yang direndam dengan air asin dimakan sebagai sayuran. Acar yang asin, dan agak pahit yang dihasilkandisebut “miang” dalam dialek local, adalah teh aneh bagi kebudayaan barat.\r\n\r\n<br><br>Cerita yang lebih baru mengenai bagaimana kultivasi tanaman teh lebih menarik, termasuk didalamnya sedikit sejarah yang berhubungan dengan revolusi China tahun 1949 dan periode perang dingin.\r\n\r\n<br><br>Pada tahun 1949 akhir, sebagian kecil dari pasukan nasionalis Chiang-kei Shek di Yunnan (dikenal dengan nama Guo-min-dang, atau KMT) terpisah dengan pasukan utamanya. Bersamaan dengan itu, pasukan nasionalis yang kalah perang mundur ke Taiwan, meninggalkan pasukan kecil yang terpisah dari KMT Yunnan. Terisolasi, namun tidak gentar, pasukan ini memimpin serangan gerilya terhadap pasukan pembebasan China (PLA). Namun, mereka dipukul mundur ke selatan hingga ke Burma, dimana mereka melanjutkan serangan terhadap para komunis. Pada tahun 1960-1961, mereka dipaksa keluar dari Burma menuju Thailand utara, dimana asimilasi mereka baru selesai sebagian.\r\n\r\n<br><br>sumber : http://peacockbistro.blogspot.co.id/2012/11/sejarah-thai-tea.html', 'teh_limlim_thai_tea5.png', '', '', '', '2017-12-14 07:29:35'),
(17, '10 Manfaat Menakjubkan Thai Tea Bila Diminum Secara Teratur', 'Tengah digandrungi anak muda. Cha-yen, begitulah orang Thailand menyebut jenis teh ini. Bahan thai tea terbilang cukup unik karena tidak memiliki bahan yang serupa layaknya jenis teh lain.\r\n<br><br>Komposisi khusus thai tea kaya dengan rempah-rempah khas Asia, seperti kapulaga dan adas bintang. Thai tea merupakan campuran teh hitam, gula, bunga jeruk, rempah-rempah, dan gula susu yang diuapkan.\r\n<br><br>1. Mengurangi alergi\r\nCukup minum dua atau tiga cangkir thai tea dengan susu lebih banyak dan tanpa tambahan gula. Senyawa flavonoid yang terkandung pada thai tea dapat melindungi tubuh Anda dari peradangan dan keracunan.\r\n<br><br>2. Cegah asma\r\nMinum dua cangkir thai tea dapat mencegah asma. Hal ini dikarenakan adanya senyawa anise bintang (star anise) yang melindungi tubuh agar penderitanya tak mengalami asma.\r\nKandungan anti oksida juga dapat menghambat zat peradangan di dalam tubuh. Kekebalan tubuh menjadi lebih baik, ditulis dari DrHealthBenefits, Kamis (20/7/2017).\r\n<br><br>3. Mencegah dan memerangi kanker\r\nSebuah penelitian yang dilakukan oleh Stanford University, Amerika Serikat menemukan, penyebaran sel kanker payudara stadium awal dapat dihentikan dengan mengonsumsi thai tea.\r\nMinum secangkir thai tea akan menghalangi penyebaran sel kanker. Hal ini karena adanya polifenol dan anti oksida untuk menghentikan penyebaran sel kanker lebih luas.\r\n<br><br>4. Usir stres\r\nDi Jepang, peneliti membuktikan thai tea untuk menyembuhkan dan mengatasi stres. Adanya kafein pada thai tea dapat mengurangi rasa kelelahan dan stres.\r\n<br><br>5. Melawan radikal bebas\r\nRadikal bebas sangat berbahaya karena dapat menyebabkan timbulnya kanker. Penelitian dari Tufts University membuktikan, thai tea dapat membunuh radikal bebas yang diserap ke dalam tubuh.\r\nRadikal bebas timbul melalui pembuluh darah lantas menyebar ke seluruh organ tubuh. Zat anti oksida pada thai tea juga mengurangi tingkat radikal bebas. Minum 3-5 cangkir thai tea dalam seminggu sangat dianjurkan.\r\n\r\n<br><br> sumber:http://www.klikdokter.com/info-sehat/read/2911921/manfaat-tersembunyi-di-balik-thai-tea', 'thia_tea_enak_limlim.jpg', '', '', '', '2017-12-14 07:33:49'),
(18, 'Segarnya Thai Tea dalam Berbagai Pilihan Rasa', 'Menikmati rasa otentik Thai Tea kini dapat langsung dengan mudah didapatkan di berbagai tempat di Indonesia. Namun, menikmati rasa sesungguhnya dari minuman segar asal Thailand ini tentunya tidak semua mampu menyajikan dengan rasa seperti aslinya.\r\n\r\n<br><br> Thai tea ini sejuta manfaat.. Nah secara teh nya aja banyak manfaat ditambah lagi rempah bunga lawang dan kapulaga, membuat lengkap manfaatnya.. Saya jelaskan yaa .. manfaat luar biasa teh thailand, teh Thailand itu kaya akan Antioksidan. Antiksidan yang terkandung lebih tinggi daripada antioksidan vitamin C dan vitamin E. Maka dari itu daun teh Thailand dimanfaatkan untuk minuman kesehatan.\r\n\r\n<br><br>Manfaat lainnya adalah, mencegah penyakit stroke dan mengurangi resiko terkena penyakit stroke bagi mereka yang masih sehat dan tidak mengalami gangguan kesehatan. Melancarkan peredaran darah,membuang kolesterol jahat dalam darah, melancarkan pencernaan, dan banak manfaat lainnya.\r\n\r\n<br><br> sumber : https://thaiteabotol.wordpress.com/2015/03/05/thai-tea-dan-manfaatnya-untuk-kesehatan/', 'segarnya_thai_tea_limlim.jpg', '', '', '', '2017-12-14 08:07:52'),
(19, 'THAI TEA DAN MANFAATNYA UNTUK KESEHATAN', 'Kadang saya kebingungan menjelaskannya kepada orang yang baru. Tapi ketika saya memberi tahu bahwa thai tea itu mirip dengan teh tarik. Barulah mereka mengerti apa itu thai tea. Tetapi ada perbedaanya, thai tea itu memakai teh khas Thailand bukan teh biasa. Nah oleh sebab itu dinamakan thai tea karena bahan dasarnya berasal dari Thailand. Kalo di negara asalnya thai tea sering disebut ‘cha-yen’\r\n<br><br>Tahukah anda bahwa komposisi teh thailand itu unik??  kenapa dikatakan demikian karena teh Thailand ada tambahan kandungan rempah rempah seperti bunga lawang dan kapulaga. Taste nya Asia banget pokoknya.\r\n<br><br>Thai tea ini sejuta manfaat.. Nah secara teh nya aja banyak manfaat ditambah lagi rempah bunga lawang dan kapulaga, membuat lengkap manfaatnya.. Saya jelaskan yaa .. manfaat luar biasa teh thailand, teh Thailand itu kaya akan Antioksidan. Antiksidan yang terkandung lebih tinggi daripada antioksidan vitamin C dan vitamin E. Maka dari itu daun teh Thailand dimanfaatkan untuk minuman kesehatan.\r\n<br><br>Manfaat lainnya adalah, mencegah penyakit stroke dan mengurangi resiko terkena penyakit stroke bagi mereka yang masih sehat dan tidak mengalami gangguan kesehatan. Melancarkan peredaran darah,membuang kolesterol jahat dalam darah, melancarkan pencernaan, dan banak manfaat lainnya,\r\n<br><br>Bayangkan itu hanya manfaat teh nya saja, bagaimana dengan manfaat rempah rempah yang terkandung dalam teh thailand.  Seperti manfaat bunga lawang untuk melancarkan air seni, menyembuhkan sakit sendi dan gigi, melancarkan sistem pernafasan, mengobati batuk dan sakit tenggorokan, dll . Dan terakhir manfaat kapulaga baik untuk darah, perut, ginjal dan meningkatkan kekebalan tubuh.\r\n<br><br>Dengan berbagai manfaat thai tea untuk kesehatan tak heran, banyak orang yang menyukai teh ini, disamping rasanya yang enak dan menyegarkan.\r\n<br><br> sumber: https://thaiteabotol.wordpress.com/2015/03/05/thai-tea-dan-manfaatnya-untuk-kesehatan/', 'susu_thai_tea_limlim.jpg', '', '', '', '2017-12-14 08:07:01'),
(20, 'Ini Bedanya Teh Tarik, Teh Susu dan Thai Tea', 'Hayooo, ngaku deh, siapa yang sedang kecanduan minum Thai Tea? Olahan teh khas Thailand dengan cita rasa yang khas ini, sedang menjamur di Indonesia. Di sudut mal, makin mudah menemukan kios penjualnya dengan berbagai merek jual. Olahan teh lain yang enggak kalah populer adalah Teh Tarik. Ada juga Teh Susu. Banyak kan ragamnya? Tampilannya pun mirip. Nah, gimana cara bedainnya?\r\n<br><br>1.Teh Tarik\r\nRasanya khas, yaitu manis tapi ada sedikit rasa pahit. Warna teh coklat muda, dengan busa  diatasnya. Teh tarik berbahan dasar teh dan susu.  Varian teh ini mudah ditemukan di Malaysia, India dan Indonesia. Yang unik, adalah cara membuatnya.\r\n<br><br>Teh dihitam dicampur susu dengan mengopernya dari satu cangkir ke cangkir lain secara berulang. Sekilas terlihat seperti tehnya ditarik-tarik. Aksi ini biasanya  juga jadi tontonan pembeli, loh, karena enggak sembarang orang bisa melakukan proses ini.\r\n<br><br>2. Thai Tea\r\nBerbeda dengan teh tarik dan teh susu, teh khas Thailand ini memiliki warna oranye dengan rasa manis dan milky.  Daun tehnya berbeda, yang biasanya digunakan adalah teh yang hanya tumbuh di dataran Thailand. Teh juga dicampur rempah-rempah seperti kapulaga dan daun lawang. Susu evaporasi dan susu kental manis, krimer dan gula,\r\n<br><br>Nah, sekarang kamu udah tahu kan bedanya antara ketiga varian rasa teh tersebut? Mana yang paling kamu suka?\r\n\r\n<br><br> sumber: https://netz.id/news/2017/06/10/00716-01816/1002070617/ini-bedanya-teh-tarik-teh-susu-dan-thai-tea', 'perbedaan_teh_tarik_dengan_thai_tea_limlim.jpg', '', '', '', '2017-12-14 08:12:19'),
(28, 'amatttttt tompel', '<p>PErcobaan</p>\r\n', 'Full_logo_no_bg18.png', 'CObaan', 'Persiapan', 'supersekali', '2018-02-03 13:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_tbl`
--

CREATE TABLE `contact_form_tbl` (
  `contact_id` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `lt_nama` varchar(300) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ph_number` varchar(300) NOT NULL,
  `massage` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form_tbl`
--

INSERT INTO `contact_form_tbl` (`contact_id`, `nama`, `lt_nama`, `email`, `ph_number`, `massage`, `date`) VALUES
(1, 'Ade', 'putra', 'Shuadeputra@gmail.com', '081249621499', 'Saya adalah manusia yang baik hati', '2017-12-01 00:00:00'),
(2, 'Putra', '', 'putra@gmail.com', '', 'Minumannya mungkin bisa diperdingin', '2017-12-01 00:00:00'),
(4, 'Put', '', 'put@gmail.com', '', 'Minumannya segar dan maknyus, saya mau pesan 100 y', '2017-12-01 00:00:00'),
(5, 'ade putraaa', '', 'saya_fansen@gmail.com', '', 'saya pesan tahi tea 10pcs, di antar ke sini aja', '2017-12-04 00:00:00'),
(6, 'ADe', 'ADe', 'shuadeputra@gmail.com', '812374747', 'biasa aja dong bos', '2018-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `contact_ds_id` int(255) NOT NULL,
  `get_in_touch` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `nama_1` varchar(400) NOT NULL,
  `gelar_1` varchar(400) NOT NULL,
  `nama_2` varchar(400) NOT NULL,
  `gelar_2` varchar(400) NOT NULL,
  `nama_3` varchar(400) NOT NULL,
  `gelar_3` varchar(400) NOT NULL,
  `nama_4` varchar(400) NOT NULL,
  `gelar_4` varchar(400) NOT NULL,
  `foto_1` varchar(400) NOT NULL,
  `foto_2` varchar(400) NOT NULL,
  `foto_3` varchar(400) NOT NULL,
  `foto_4` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`contact_ds_id`, `get_in_touch`, `address`, `email`, `phone`, `nama_1`, `gelar_1`, `nama_2`, `gelar_2`, `nama_3`, `gelar_3`, `nama_4`, `gelar_4`, `foto_1`, `foto_2`, `foto_3`, `foto_4`) VALUES
(1, 'Traveli is the best choice we have to know', 'jl.begitulah lalala', 'Traveli@gmail.com', '81249494949', 'Fera aja', 'Marketing Manager', 'Fera cuy', 'Business Manager', 'Super Fera', 'CEO', 'Fera Hoi', 'Web Developer', 'person1.jpg', 'person2.jpg', 'person3.jpg', 'person4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_tbl`
--

CREATE TABLE `home_tbl` (
  `home_id` int(40) NOT NULL,
  `slider_1` varchar(300) NOT NULL,
  `readmore_1` varchar(300) NOT NULL,
  `slider_2` varchar(300) NOT NULL,
  `readmore_2` varchar(300) NOT NULL,
  `slider_3` varchar(300) NOT NULL,
  `readmore_3` varchar(300) NOT NULL,
  `judul_atas_1` varchar(300) NOT NULL,
  `isi_atas_1` varchar(300) NOT NULL,
  `judul_atas_2` varchar(300) NOT NULL,
  `isi_atas_2` varchar(300) NOT NULL,
  `judul_atas_3` varchar(300) NOT NULL,
  `isi_atas_3` varchar(300) NOT NULL,
  `subjudul1` varchar(300) NOT NULL,
  `isijudul1` varchar(300) NOT NULL,
  `subjudul2` varchar(300) NOT NULL,
  `isijudul2` varchar(300) NOT NULL,
  `subjudul3` varchar(300) NOT NULL,
  `isijudul3` varchar(300) NOT NULL,
  `subjudulb` varchar(300) NOT NULL,
  `isijudulb` varchar(300) NOT NULL,
  `aboutus` varchar(300) NOT NULL,
  `isiabout` varchar(300) NOT NULL,
  `foto_about` varchar(300) NOT NULL,
  `readmore_about` varchar(300) NOT NULL,
  `video` varchar(400) NOT NULL,
  `photo_1` varchar(300) NOT NULL,
  `photo_2` varchar(300) NOT NULL,
  `photo_3` varchar(300) NOT NULL,
  `photo_4` varchar(300) NOT NULL,
  `photo_5` varchar(300) NOT NULL,
  `photo_6` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_tbl`
--

INSERT INTO `home_tbl` (`home_id`, `slider_1`, `readmore_1`, `slider_2`, `readmore_2`, `slider_3`, `readmore_3`, `judul_atas_1`, `isi_atas_1`, `judul_atas_2`, `isi_atas_2`, `judul_atas_3`, `isi_atas_3`, `subjudul1`, `isijudul1`, `subjudul2`, `isijudul2`, `subjudul3`, `isijudul3`, `subjudulb`, `isijudulb`, `aboutus`, `isiabout`, `foto_about`, `readmore_about`, `video`, `photo_1`, `photo_2`, `photo_3`, `photo_4`, `photo_5`, `photo_6`) VALUES
(1, 'traveli_1.jpg', '', 'traveli_2.jpg', '', 'traveli_3.jpg', '', 'Beginilah atlas', 'awal dari beginillah', 'Pajangan', 'Beginilah awal dari pajangan yang mantap', 'Pelaminan', 'Beginilah awal dari pelaminan', 'Proses cepat', 'Dengan team yang solit', 'Memiliki penyimpanan', 'memiliki penyimpanan cepat', 'Pilihan tebaik', 'Merupakan pilihan utama untuk keluarga', 'Are you ready to traveli?', 'Mari lakukan transaksi', 'Traveli Aboutus', 'Traveli adalah sebuah perusahaan yang menyediakan jasa travel sekalian jasa foto praweding.', 'aboutus2.png', 'baca lebih banyak', 'https://www.youtube.com/embed/STO4-8vkG0U', 'photo_1.jpg', 'photo_2.jpg', 'photo_3.jpg', 'photo_4.jpg', 'photo_5.jpg', 'photo_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_dsc` text NOT NULL,
  `product_gambar` varchar(300) NOT NULL,
  `product_price` int(30) NOT NULL,
  `product_kategori` varchar(200) NOT NULL,
  `product_gambar2` varchar(300) NOT NULL,
  `product_gambar3` varchar(300) NOT NULL,
  `video` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `agent_name` varchar(300) NOT NULL,
  `agent_number` varchar(300) NOT NULL,
  `agent_email` varchar(300) NOT NULL,
  `agent_place` varchar(300) NOT NULL,
  `agent_dsc` varchar(500) NOT NULL,
  `agent_pic` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `product_name`, `product_dsc`, `product_gambar`, `product_price`, `product_kategori`, `product_gambar2`, `product_gambar3`, `video`, `date`, `agent_name`, `agent_number`, `agent_email`, `agent_place`, `agent_dsc`, `agent_pic`) VALUES
(1, 'Original Thai', 'Thai tea yang terbuat dari daun asli dan berwarna orange sesuai kenikmatan aslinya.', 'OriginalTaiTea.png', 15000, 'Dingin', '0', '0', '0', '0000-00-00', '', '', '', '', '', ''),
(2, 'Thia Green Tea', 'Thai green tea yang terbuat dari daun asli dan berwarna hijau sesuai kenikmatan aslinya.', 'Greenteathaitea.png', 15000, 'Dingin', '0', '0', '0', '0000-00-00', '', '', '', '', '', ''),
(3, 'Thia Millo Tea', 'Thai tea yang terbuat dari daun asli dan milo yang berwarna coklat sehingga sangat enak untuk diminum.', 'MiloTaiTea.png', 15000, 'Dingin', '0', '0', '0', '0000-00-00', '', '', '', '', '', ''),
(4, 'Thia Cofe Tea', 'Thai tea yang terbuat dari daun dan kopi asli dari thailang yang berwarna hitam sehingga sangat enak.', 'cofetea.png', 15000, 'Dingin', '0', '0', '0', '0000-00-00', '', '', '', '', '', ''),
(6, 'BIasa aja dong', '<p>percobaan saja</p>\r\n', 'pc1.jpg', 2131223, 'SUper power ranger', 'ep31.jpg', 'pc1.jpg', 'siak asi sik asik', '2018-01-29', 'Abang ganteng', '123213', 'email@gmail.com', '2323', 'SUper sekali', 'pc31.jpg'),
(7, 'power ranger', '<p>BIasa ajaa</p>\r\n', 'pc2.jpg', 50000, 'Panas', 'pc3.jpg', 'pc11.jpg', '', '2018-02-01', 'Mari datang', '90909', 'shu@gmail.com', 'tidak tau', 'biasa aja geng', 'al1.jpg'),
(8, 'Bangka Belitung', '<p>COba saja dah siapa tau beruntung</p>\r\n', 'al3.jpg', 50000, 'Tour', 'al4.jpg', 'al31.jpg', 'https://www.youtube.com/embed/TE2_J-5QMvg', '2018-02-01', 'macam macam', '707070', 'macam@gmail.com', 'biasa ajaaa', 'lalalala', 'ep32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seo_tbl`
--

CREATE TABLE `seo_tbl` (
  `seo_id` int(255) NOT NULL,
  `title` varchar(600) NOT NULL,
  `description` varchar(600) NOT NULL,
  `keywords` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo_tbl`
--

INSERT INTO `seo_tbl` (`seo_id`, `title`, `description`, `keywords`) VALUES
(1, 'Limlim | Tea Mix, Buy Thai, Powder Thai, Tea Leaves, Riau Pekan Baru, Bengkalis, Jakarta', 'thai tea online , thai tea mix where to buy, supplier thai tea, thai tea packege thai tea mix, distributor thai tea, where can i buy thai tea leaves, best thai tea powder, thai green tea number one, thai iced tea powder mix, number one brand thai tea, thai milk tea packet, powder thai tea, thai tea no 1 brand, thai tea number one, teh thai tea, thai tea mix chatramue brand, tea for thai tea, thai tea in thaim thai tea leaves, buy thai team thai tea powder, thai iced tea powder, thai green tea powderm thai tea thailand chatramue thai tea,thai tea pudding m thai tea iceream, thai coffie, minuman', 'Tea Mix, Buy Thai, Powder Thai, Tea Leaves, Brand Thai, Lim-Lim, Thai Green, Buy Thai, Thai Black, Thai Milk, Thai Tea, Instant Thai, Thai Bubble, Ice Milk, Thai Iced Tea, Thai Chai, Tea Bangkok, Yen Thai, Resep Thai, Tea Ingredients, Tea Calories, Thai Lim, Tea Recipe, Thai Milik Tea Recipe, Make Thai, Make Thai, Healthy Thai, Tea Made, Get Thai, Thao tea powder, thai tea bags, where to buy thai tea, thai green tea, thai iced tea leaves, distributor thai tea, thai milk tea packet, tea for thai tea, buy thai tea, thai tea thailand, beli thai tea');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_tbl`
--

CREATE TABLE `subscribe_tbl` (
  `subscribe_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe_tbl`
--

INSERT INTO `subscribe_tbl` (`subscribe_id`, `nama`, `email`) VALUES
(1, 'Ade', 'Shuadeputra@gmail.com'),
(3, 'Samsul', 'Sambul@gmail.com'),
(5, 'Hale', 'Hale@gmail.com'),
(6, 'saya', 'ganteng@biasa.com'),
(7, 'super', 'supersekali@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_tbl`
--

CREATE TABLE `tiket_tbl` (
  `tiket_id` int(200) NOT NULL,
  `nama_paket` varchar(300) NOT NULL,
  `jumlah` varchar(300) NOT NULL,
  `nomor_tlp` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket_tbl`
--

INSERT INTO `tiket_tbl` (`tiket_id`, `nama_paket`, `jumlah`, `nomor_tlp`, `email`, `nama`, `tanggal`) VALUES
(1, 'NIkah cuy', '40', '0812343434', 'shu@gmail.com', 'Amatt', '0000-00-00'),
(2, 'Bangka', '30', '081249494949', 'SHUSBHU@GMAIL.COM', 'suPKI', '0000-00-00'),
(3, 'nirwanaa', '20', '08080808080', 'biasaaja@gmail.com', 'percobaan', '0000-00-00'),
(4, 'Bangka Belitung', '2', '99999', 'amat@gmail.com', 'amat', '2018-02-03'),
(5, 'Bangka Belitung', '12', '12345', 'fera@fera.com', 'Fera hoi', '2018-02-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus_tbl`
--
ALTER TABLE `aboutus_tbl`
  ADD PRIMARY KEY (`id_aboutus`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact_form_tbl`
--
ALTER TABLE `contact_form_tbl`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`contact_ds_id`);

--
-- Indexes for table `home_tbl`
--
ALTER TABLE `home_tbl`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seo_tbl`
--
ALTER TABLE `seo_tbl`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `subscribe_tbl`
--
ALTER TABLE `subscribe_tbl`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `tiket_tbl`
--
ALTER TABLE `tiket_tbl`
  ADD PRIMARY KEY (`tiket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus_tbl`
--
ALTER TABLE `aboutus_tbl`
  MODIFY `id_aboutus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `blog_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `contact_form_tbl`
--
ALTER TABLE `contact_form_tbl`
  MODIFY `contact_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `home_tbl`
--
ALTER TABLE `home_tbl`
  MODIFY `home_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `seo_tbl`
--
ALTER TABLE `seo_tbl`
  MODIFY `seo_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subscribe_tbl`
--
ALTER TABLE `subscribe_tbl`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tiket_tbl`
--
ALTER TABLE `tiket_tbl`
  MODIFY `tiket_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
