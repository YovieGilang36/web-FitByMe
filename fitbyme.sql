-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 03:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitbyme`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `email`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'administrator', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `gambar`, `judul`, `artikel`) VALUES
(26, '1671934275.jpg', 'Manfaat Olahraga Secara Teratur', 'KOMPAS.com – Setiap orang pasti ingin memiliki tubuh yang bugar, sehat, dan indah. Tentu saja, olahraga menjadi salah satu hal yang penting jika ingin mendapatkan semua itu. Olahraga secara teratur merupakan solusi tepat untuk menjaga kesehatan tubuh dan mengingkatkan kepercayaan diri. Banyak orang yang berolahraga karena mengetahui manfaatnya yang beragam. Nah, jika kalian berencana untuk memulai olahraga secara teratur, bersiaplah untuk ketagihan karena hasil yang didapatkan. Berikut yang terjadi pada tubuh saat kita berolahraga secara teratur.\r\n\r\n1. Mengontrol berat badan Olahraga teratur membantu kita untuk mengendalikan berat badan, karena mampu mengurangi timbunan lemak dalam tubuh. Olahraga juga meningkatkan tingkat metabolisme karena tubuh kita membakar lebih banyak kalori, apalagi bila lebih banyak otot terbentuk. Nah, tentu saja dengan manfaat ini berat badan berlebih menjadi berkurang. Baca juga : 4 Cara Meningkatkan Metabolisme Agar Mudah Langsing\r\n\r\n2. Membuat tubuh menjadi aktif Olahraga teratur membuat persediaan jumlah oksigen dan nutrisi dalam jaringan tubuh menjadi maksimal. Selain itu, olahraga teratur juga mempromosikan aktivitas sistem kardiovaskular kita.\r\n\r\n3. Memperbaiki mood Berolahraga juga mampu meningkatkan mood kita. Ini menghilangkan rasa stres, cemas atau depresi. Olahraga teratur melepaskan hormon – misalnya norepinefrin dan serotonin – yang mampu mengendalikan tingkat stres dalam otak.\r\n\r\n4. Memperkuat tulang dan otot Berolahraga sangat bermanfaat untuk membentuk dan memperkuat otot. Melakukan olahraga secara teratur dapat membuat tubuh kita menyerap sejumlah besar asam amino, yang membantu pertumbuhan dan perkembangan tubuh.\r\n\r\n5. Memperbaiki kualitas tidur Suhu tubuh akan menurun ketika tidur jika kita berolahraga secara teratur. Inilah yang membuat kita bisa tidur dengan nyenyak dalam waktu lama. Selain itu, olahraga teratur sangat bermanfaat bagi penderita gangguan tidur dan memberikan sensasi rileks yang besar.\r\n\r\nSumber Link Artikel : ini telah tayang di Kompas.com dengan judul “Yang Terjadi Pada Tubuh Jika Berolahraga Secara teratur”, https://lifestyle.kompas.com/read/2018/03/16/062000120/yang-terjadi-pada-tubuh-jika-berolahraga-secara-teratur.'),
(27, '1671935266.jpg', 'Olahraga jadi tren gaya hidup usai pandemi COVID-19', 'Jakarta (ANTARA) - Olahraga sebagai upaya dalam menjaga kesehatan kini sudah berkembang pesat menjadi tren gaya hidup hingga kompetisi yang membutuhkan keseriusan usai pandemi COVID-19, kata komisaris utama PT Welspro Inspirasi Utama, Dr dr Edi Mustamsir Sp.OT(K).\r\n\r\n\"Parameter pace berlari, power, bike fitting sudah menjadi suatu term yang tidak asing bagi mereka para penghobi yang gila olahraga ini,\" kata dr Edi dalam keterangannya pada Kamis.\r\n\r\nMenurutnya, perkembangan ilmu dan teknologi pun mendorong dunia olahraga ke level yang berbeda, salah satunya di klinik sport yang banyak bergerak di bidang penanganan cedera maupun peningkatan performa olahraga.\r\n\r\nData dan pengukuran objektif yang menjadi kunci dalam memberikan pelayanan yang komprehensif menjadi parameter penting dalam assessment baik cedera maupun performa olahraga. Tim medis yang sesuai dengan kebutuhan dapat memberikan program treatment dan exercise secara spesifik sesuai dengan hasil assessment yang ada.\r\n\r\n\"Untuk itu setidaknya terdapat tiga komponen penting yang menjadi kunci dari keberhasilan keberhasilan pelayanan olahraga ini yaitu servis yang komprehensif, data pengukuran yang kuantitatif, serta didukung dengan penggunaan teknologi yang tepat,\" katanya.\r\n\r\nIa menjelaskan, komprehensif adalah aspek penting dalam pelayanan. Tidak hanya dari item pelayanan apa saja yang dilakukan namun juga siapa yang melakukan.\r\n\r\nSebuah pelayanan komprehensif tentunya membutuhkan sebuah tim yang kolaboratif. Dalam pelayanan di klinik olahraga, cedera dan peningkatan performa membutuhkan berbagai pihak. Mulai dari penanganan cedera, kemudian terapi, dilanjutkan dengan mengembalikan performa, hingga bagi mereka yang pada level atlet yang ingin kembali berolahraga merupakan sebuah rangkaian panjang yang membutuhkan kolaborasi dengan latar belakang keilmuan dan pengalaman yang tepat.\r\n\r\nMenurutnya, aspek berikutnya adalah pengukuran yang kuantitatif. Sukses tidaknya sebuah program latihan ditentukan oleh perbandingan dari sebelum dan sesudah mengikuti program.\r\n\r\nPenggunaan teknologi yang canggih juga menjadi faktor penting. Teknologi di dunia medis dan olahraga sendiri sudah berkembang pesat.\r\n\r\n\"Mulai dari alat assessment, therapy, hingga melibatkan robotik dan artificial intelligence, teknologi memberikan kesempatan bagi dunia olahraga untuk berkembang ke level yang berbeda. Bagi mereka sport enthusiast, teknologi memudahkan mereka untuk mengukur pencapaian performance olahraga yang dilakukan. Selain itu, teknologi juga memudahkan assessment dan terapi dalam dunia kesehatan. Sebagai contoh alat footscan analysis dan juga gait lab yang mengukur pola gerak dan berjalan seseorang sekaligus dengan analiisa resiko cederanya,\" kata Edi.\r\n\r\nSementara itu, Direktur Utama PT.Welspro Inspirasi Utama dr Agus Chairul Anab, Sp. BS mengatakan, Welspro Sports Clinic and Peformance hadir dalam menjawab tiga tantangan tersebut.\r\n\r\n\"Welspro didukung oleh tim yang kolaboratif mulai dari dokter kedokteran fisik dan rehabilitasi, dokter kedokteran olahraga, dokter gizi klnik, fisioterapi, hingga ke depan bersama professional coach,\" kata dr Agus.\r\n\r\nsumber link artikel : https://www.antaranews.com/berita/3292591/olahraga-jadi-tren-gaya-hidup-usai-pandemi-covid-19\r\n'),
(28, '1671935692.png', '5 Langkah Mudah Menuju Pola Hidup Sehat', 'Pola hidup sehat sebaiknya dijalankan sejak dini agar terhindar dari berbagai serangan penyakit. Penyakit yang mengintai akibat pola hidup yang buruk antara lain diabetes, gagal ginjal, kanker, maupun penyakit kardiovaskular seperti stroke, darah tinggi, dan jantung. Sebaliknya, apabila menerapkan pola hidup sehat nantinya akan memberi efek yang luar biasa dan terhindar dari penyakit tersebut.\r\n\r\nDengan memiliki kesehatan tubuh yang lebih baik, Anda dapat merasa lebih semangat dalam menjalani hidup serta meningkatkan produktivitas. Jangan tunda untuk mulai merencanakan dan menerapkan kebiasaan gaya hidup sehat.\r\n\r\nMeskipun sulit untuk keluar dari kebiasaan lama, terapkan gaya hidup sehat secara bertahap namun konsisten. Meski perlahan namun dampak yang dirasakan cukup signifikan, yakni dapat memberi lebih banyak energi pada tubuh, meningkatkan kesehatan mental, dan menyingkirkan penyakit.\r\n\r\n\r\nDilansir dari beberapa sumber, berikut lima langkah mudah menuju pola hidup sehat.\r\n\r\n1. Perhatikan menu diet\r\nUntuk mempertahankan gaya hidup sehat, Anda harus makan makanan sehat seperti sayur dan buah. Makanlah sedikit karbohidrat, garam, lemak tidak sehat, dan hindari junk food. Anda bisa meminum segelas jus dan buah di pagi hari dan porsi sayuran yang berbeda setiap kali makan.\r\n\r\nSayuran hijau dan buah-buahan mengandung banyak nutrisi seperti vitamin dan antioksidan yang membantu meningkatkan sistem kekebalan tubuh dan melawan penyakit yang menyebabkan racun. Antioksidan membantu melawan penyakit mata, meningkatkan kesehatan kulit, dan kesehatan secara keseluruhan.\r\n\r\nTerlebih, World Health Organization (WHO) merekomendasikan makan buah-buahan dan sayuran sebagai bagian rutin dari diet Anda supaya tubuh mampu melawan penyakit seperti kanker dan penyakit jantung. Selain itu, hindari melewatkan makan seperti meninggalkan sarapan karena dapat membuat Anda makan berlebih di siang hari. Perhatikan pula ukuran porsi makan untuk menghindari mengonsumsi kalori berlebih. \r\n\r\n2. Perbanyak minum air putih\r\nAnda dapat meningkatkan kesehatan sekaligus menghemat uang dengan banyak minum air putih. Air putih memberikan banyak manfaat bagi tubuh seperti menutrisi, membersihkan racun dari tubuh, meningkatkan fungsi otak, memberi energi pada otot, mengontrol kenaikan berat badan, dan menyeimbangkan suhu dan cairan tubuh.\r\n\r\nSemakin sedikit minum akan menurunkan cadangan cairan dalam tubuh dan berisiko mengentalkan darah. Apabila darah mengental, jantung akan bekerja lebih keras untuk memompa. Jantung yang bekerja ekstra dalam jangka panjang akan mengalami gangguan dan masalah lainnya. Oleh sebab itu, dianjurkan untuk minum sekitar 8 gelas air per hari. \r\n\r\n3. Kelola kesehatan mental\r\nMenerapkan gaya hidup sehat tak cukup hanya dengan makan makanan bergizi. Kesehatan mental juga perlu diperhatikan karena mental merupakan fondasi kesehatan secara keseluruhan. Penting untuk mengelola pikiran dan perasaan setiap hari. Kelilingi diri dengan orang-orang yang dapat memberi semangat dan masukan konstruktif. Biasakan untuk selalu melihat sisi kehidupan yang positif.\r\n\r\nSekalipun berada dalam situasi terburuk, yakin bahwa selalu ada sisi positifnya. Hindari menaruh perasaan negatif terhadap diri sendiri maupun orang lain. Hal itu hanya akan memunculkan ketidakbahagiaan dalam kehidupan sosial Anda. Meningkatkan kesehatan mental dan emosional dapat dilakukan dengan bersosialisasi. Jangan lupa untuk selalu tidur cukup, 7-9 jam setiap malam.\r\n\r\n4. Jauhi stres\r\nAgar terhindar dari stres dan tuntutan hidup, coba rileks dan istirahatlah. Ada saatnya untuk berhenti, menarik napas dalam-dalam, dan bersantai dengan melakukan sesuatu yang Anda sukai. Cobalah beberapa kegiatan santai seperti meditasi, mendengarkan musik, membaca, tidur, menonton komedi, atau berlibur. Kegiatan-kegiatan ini dapat membantu Anda bersantai dan mereka menimbulkan perasaan tenang dan bahagia.\r\n\r\n5. Rutin berolahraga\r\nIbarat Anda sudah memiliki kesehatan mental yang baik, maka harus didukung dengan kondisi fisik yang sehat dan bugar. Penelitian menunjukkan bahwa rutin melakukan aktivitas fisik seperti olahraga membantu memperpanjang umur dan meningkatkan kesehatan secara keseluruhan. Cobalah berolahraga satu minggu tiga kali. The American Heart Association menyarankan 150 menit berolahraga per minggunya. Pilih jadwal yang tepat dan luangkan waktu untuk berolahraga di pagi hari.\r\n\r\nAgar tidak membosankan dan merasa malas, pilih olahraga yang menyenangkan. Anda harus menikmati olahraga dan tidak merasa seperti dipaksa. Lakukan olahraga yang menyenangkan sekaligus memungkinkan bagi tubuh seperti senam aerobik, yoga, latihan sirkuit, berenang, berjalan, lari, atau bersepeda.\r\n\r\nSUMBER :https://www.cnnindonesia.com/gaya-hidup/20190917105225-255-431143/5-langkah-mudah-menuju-pola-hidup-sehat');

-- --------------------------------------------------------

--
-- Table structure for table `detail_latihan`
--

CREATE TABLE `detail_latihan` (
  `id_latihan` int(10) NOT NULL,
  `id_workout` int(11) NOT NULL,
  `total_waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `latihan`
--

CREATE TABLE `latihan` (
  `id` int(10) NOT NULL,
  `tanggal_latihan` date NOT NULL DEFAULT current_timestamp(),
  `total_latihan` int(10) NOT NULL,
  `email_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id`, `gambar`, `judul`, `deskripsi`) VALUES
(1, '1671937668.jpg', 'Capcay Tofu', 'Brokoli yang sehat dipadukan dengan tahu yang rendah kalori namun lembut dan gurih.  Bahan :  2 buah tofu, potong 1 bonggol kecil brokoli, siangi per kuntum 1 buah wortel, potong 1 buah sawi putih ukuran kecil 3 siung bawang putih, geprek Larutan maizena secukupnya Bahan saus :  1 sdm saus tiram 1 sdm kecap asin 1 sdm minyak wijen 1/2 sdm kecap ikan 1 sdt kecap manis Air secukupnya Garam, merica, kaldu bubuk secukupnya Cara buat :  Balur tofu dengan tepung maizena  lalu goreng. Sisihkan Panaskan sedikit minyak, tumis bawang putih hingga harum. Masukan wortel masak hingga setengah matang Masukan air, brokoli dan sisa bahan saus. Masak hingga brokoli empuk Tambahkan sawi putih masak sebentar, terakhir masukan tofu aduk perlahan koreksi rasanya jika sudah pas kentalkan dengan larutan maizena. Sajikan hangat'),
(2, '1671938794.jpg', 'Rendang kentang (1 porsi: 195 kalori)', 'Bahan:  500 gram kentang mini, bersihkan dan cuci 400 ml santan kental 50 gram kelapa parut, sangrai 2 sdm minyak untuk menumis Bumbu halus: 3 butir bawang merah, iris 2 siung bawang putih, iris 3 buah cabai merah, iris 1 butir kemiri, giling 1 sdt ketumbar 1 sdm garam 1 sdm lengkuas, giling.  Bumbu lain:  2 lembar daun salam 2 lembar daun jeruk 1 lembar daun kunyit Cara membuat:  Panaskan minyak di wajan anti lengket. Masukkan bumbu yang sudah dihaluskan dan bumbu lainnya. Tumis hingga harum. Tuangi santan, masak dengan api sedang hingga mendidih. Masukkan kentang mini dan masak kembali sampai santan setengah menyusut. Beri parutan kelapa yang sudah disangrai, tumis sejenak di atas api sampai parutan kelapa dan bumbu tercampur rata dengan kentang. Matikan api dan angkat. Hidangkan selagi hangat'),
(3, '1671938323.jpg', 'Sayur tahu jamur rumput laut (1 porsi: 45,5 kalori)', 'Bahan:\r\n150 gram tahu putih, potong dadu sedang\r\n50 gram rumput laut\r\n100 gram jamur segar, iris tipis\r\n400 ml kaldu ayam\r\n1 buah tomat, potong jadi 4\r\n1 sdm minyak goreng untuk menumis\r\nBumbu:\r\n\r\n1 sdm bawang putih, cincang\r\n1 ruas jahe, cincang\r\n1/2 sdt garam\r\n1 sdt kecap asin\r\nCara membuat:\r\n\r\nPanaskan 1 sdm minyak di panci kecil, masukkan jahe dan bawang putih cincang. Tumis hingga aromanya keluar.\r\nTuang kaldu di panci, didihkan. Masukkan tahu, jamur, tomat, rumput laut, garam, dan kecap. Didihkan kembali lalu angkat.\r\nSajikan sayur selagi hangat'),
(4, '1671938463.jpg', 'Tumis genjer (1 porsi: 77 kalori)', 'Bahan:\r\n500 gram bunga genjer segar, potong 5 cm\r\n2 sdm minyak untuk menumis\r\n\r\nBumbu:\r\nIrisan tipis 2 sdm bawang merah\r\nIrisan tipis 1 sdm bawang putih\r\n1 sdt terasi\r\nIrisan bulat 2 sdm cabai merah, buang isinya\r\nIrisan bulat 2 sdm cabai hijau, buang isinya.\r\n1 ruas lengkuas, iris\r\n2 lembar daun salam\r\n1 sdm garam\r\n\r\nCara membuat:\r\nPanaskan 2 sdm minyak dan tumis irisan bawang merah dan bawang putih hingga layu dan aromanya keluar.\r\nMasukkan irisan bulat cabai merah, cabai hijau, terasi, garam, irisan lengkuas, daun salam, dan garam. Tumis kembali sampai layu.\r\nMasukkan potongan bunga genjer, tumis selama 5 menit hingga lalu, angkat.\r\nHidangkan tumis genjer selagi hangat,'),
(5, '1671938572.jpg', 'Pindang telur (1 porsi: 82 kalori)', 'Bahan:\r\n\r\n5 butir telur ayam\r\n2 lembar daun salam\r\n500 ml air untuk merebus\r\nBumbu:\r\n\r\nIrisan 1 sdm bawang merah\r\nIrisan 1 sdm bawang putih\r\n1 sdm air asam\r\n1 ruas lengkuas,iris\r\n1 sdt garam\r\nCara membuat:\r\n\r\nRebus telur dengan air dan semua bumbu dengan api sedang hingga telur matang dan air menyusut.\r\nAngkat telur lalu ketuk-ketuk kulit telur hingga retak. Masukkan kembali ke air rebusan lalu masak hingga air menyusut. Angkat.\r\nKupas telur dan hidangkan,');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `usia` int(2) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `tanggal_registrasi` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `nama`, `jenis_kelamin`, `usia`, `berat_badan`, `tinggi_badan`, `tanggal_registrasi`) VALUES
('', '', '', '', 0, 0, 0, '2022-12-30'),
('aku@gmail.com', '12345', 'Grace', 'Laki-laki', 23, 60, 179, '2022-12-13'),
('biar@gmail.com', 'mnbvc', 'biarr', '', 0, 0, 0, '2022-12-27'),
('dia@gmail.com', '123', 'dia', 'Female', 19, 45, 160, '2022-12-30'),
('manaakutau@gmail.com', '09876', 'mina', 'male', 18, 40, 158, '2022-12-30'),
('rani@gmail.com', '09876', 'rani', 'male', 19, 40, 157, '2022-12-30'),
('rohil@gmail.com', 'abcdefg', 'rohilll', '', 0, 0, 0, '0000-00-00'),
('sayasiapa@gmail.com', 'qwert', 'siapa saya', '', 0, 0, 0, '2022-12-30'),
('siapa@gmail.com', 'zxcvb', 'siapa', '', 0, 0, 0, '2022-12-30'),
('siapaku@gmail.com', 'mnbvcx', 'siapa aku?', '', 0, 0, 0, '2022-12-18'),
('sitirohilah@gmail.com', '09876', 'Siti Rohilah ', '', 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `id` int(11) NOT NULL,
  `vidio` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `tanggal_input` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`id`, `vidio`, `judul`, `durasi`, `deskripsi`, `oleh`, `gambar`, `tanggal_input`) VALUES
(1, '1671843733.mp4', 'Meredakan sakit pinggang', '11:42', '10 menit untuk 8 gerakan simple hip stretch. Latihan singkat ini bisa kamu lakukan kapan pun dan dapat mencegah sakit pinggang. By Aalaya Pilates', 'Aalaya Pilates', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhIcvqcJPFm4hsfJc4t2buhGltQX08OW0fP2uGq253P7Ux9DTXlNhu_1sv6_ASlpnjAE-4mBSRZsPdrjKOaORTmJsOql1G0dClhlFwtrszBFiQ_JBV7_VKMdoU-GPKe1YrvodghP2oZEVFFxD1VJpvGI49733NILQkA9HPX6sJb6LMNh_DI0lAIIN9pPQ/s1288/Sakit%20pinggang%20.jpg', '2022-12-30'),
(2, '1671844481.mp4', 'Melatih Otot & Mengecilkan Perut dalam 10 menit', '10:19', 'Latihan singkat dan simple ini bisa kamu lakukan setiap hari. Cukup dengan 10 menit kamu bisa mengecilkan perutmu dan melatih otot perutmu. By Aalaya Pilates', 'Aalaya Pilates', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhYGRcm1FbOu6r0F2J7vvhLO08aJ7t-8L0-P_3vuITW7IR0wewhecXt8ihZPPwytww4TydVREgBK93vzJRzH9pmK12YyTdD4lSpZhVsmtv13xNm1dQAU6ytcUeOtw7hLvdCHHz3zRa5RBcX5XYPfX-SNbVrNljjBRBTDCyRQbmOmGCj3UcHOcg9XYo07g/s1280/Mengecilkan%20perut%20.jpg', '2022-12-29'),
(3, '1671844647.mp4', 'Menghilangkan sakit lutut', '19:41', 'Seringkali lutut kita terasa sakit / tidak nyaman karena otot2 sekitar lutut (paha depan, hamstring, bahkan bokong) tidak terlatih untuk menopang / membantu, atau mobilitas pinggul yang kurang. \r\nSesi ini akan melatih otot sekitar lutut, abdominal, bokong, dan pinggul.\r\n\r\nLakukan dengan tetap memperhatikan keadaan lutut selama latihan. Apabila terasa nyeri atau sangat tidak nyaman, hentikan dan istirahat. By Aalaya Pilates', 'Aalaya Pilates', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi5X-SqpZYfXAxDdJt4BnxY-RFRp1SmzPHnFtBTzCeXZPg0o3IMOK6VbRg7SEnQ8-Ph_b72L78VYTR_f-lABapp8pLdxtxKgza4qd7rY4yisFAOSwiQnddaW-pVP8uJrdXWYILR9ZnWVLncK7lgJ1RsUGEstUNCkY6Xb9xaeM4nZLkVKUWwS2YqocMmUA/s320/Sakit%20lutut%20.jpg', '2022-12-30'),
(4, '1671845476.mp4', 'Mengatasi sakit leher dan bahu', '25:05', 'Leher dan pundak pegal? Masalah yang cukup biasa dialami, terutama dengan gaya hidup akhir-akhir ini dimana kita banyak duduk menggunakan smart phone atau laptop.\r\nAyo kita coba beberapa gerakan simple ini untuk release ketegangan di daerah pundak dan leher.', 'Aalaya Pilates', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiAgZlDoVGoF22NKQGOBYfbzr0Mx076hd1ecAhd9xudZ_CrrvoRCx5Bqr5NuAk4Ofbw3ocKi2YW82zFg-OL4Z-skAppDffMVycJnTVMt6evjbkoQ2GAfVHyhSfE7mYXXLqIS4Oj02Axw__TAoEXHlUz1WPRRO9gr0gn3bDPtLk6rEMr_Jym2q0VBELX0Q/s1272/Sakit%20bahu.jpg', '2022-12-30'),
(5, '1671846012.mp4', 'Memperbaiki postur tubuh', '13:33', 'Latihan untuk postur perlu dilakukan bersama dengan latihan mobilitas. Jika kamu mengikuti series latihan untuk postur, apakah kamu memiliki kesulitan dalam melatih back muscle? Latihan singkat kali kita akan melatih upper back untuk back muscle dan melatih mobilitas thoracic spine. Kenapa ini penting untuk dilakukan? Karena efektifitas latihan untuk postur ditentukan oleh punggung atas yang bisa bergerak sesuai dengan range of motion-nya. Contohnya, gerakan Chest Lift atau Roll Up untuk abdomin', 'Aalaya Pilates', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiMdQAutDXCtRL_6VJznHfwUDjzWYAY8cajK89hzjpEVAa2wXc3rqKe6uNagOX33Q3-uyTu32lLPmnlIsEy2pFaOrxVxxSOR08eKeb8qdOLn0fRVwh3DWlnjI7ug1uEUu8yhWHCUbzkzoRjyZUMU4rJQ-HHVh2760KCJybaO0f7_nAtYqe4TSUtpuqHng/s1284/Postur%20tubuh%20.jpg', '2022-12-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_latihan`
--
ALTER TABLE `detail_latihan`
  ADD KEY `id_latihan` (`id_latihan`),
  ADD KEY `id_workout` (`id_workout`);

--
-- Indexes for table `latihan`
--
ALTER TABLE `latihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_user` (`email_user`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `latihan`
--
ALTER TABLE `latihan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_latihan`
--
ALTER TABLE `detail_latihan`
  ADD CONSTRAINT `detail_latihan_ibfk_1` FOREIGN KEY (`id_latihan`) REFERENCES `latihan` (`id`),
  ADD CONSTRAINT `detail_latihan_ibfk_2` FOREIGN KEY (`id_workout`) REFERENCES `workout` (`id`);

--
-- Constraints for table `latihan`
--
ALTER TABLE `latihan`
  ADD CONSTRAINT `latihan_ibfk_1` FOREIGN KEY (`email_user`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
