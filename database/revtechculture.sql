-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2024 at 08:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revtechculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `culture_id` int NOT NULL,
  `user_id` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_commenter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_comment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `culture_id`, `user_id`, `nama_commenter`, `isi_comment`, `waktu_comment`, `created_at`, `updated_at`) VALUES
(2, 2, '', 'Mega Oktaaa', 'Menarik dan unik!', '2023-06-26 11:29:26', '2023-06-26 11:28:50', NULL),
(3, 3, '', 'Dwi Ramadhan', 'Aruh Baharin sangat menarik dan kaya akan tradisi.', '2023-06-26 11:29:26', '2023-06-26 11:28:50', NULL),
(4, 5, '', 'Andika riady', 'Indah dan kaya akan sejarah.', '2023-06-26 11:29:26', '2023-06-26 11:28:50', NULL),
(6, 7, '', 'Alana van Debora', 'Budaya tari Saman sangat menakjubkan dan memukau. Gerakan yang cepat dan seragam dari para penari menciptakan suasana yang energik dan penuh semangat. Tari Saman adalah contoh nyata kekayaan budaya Indonesia yang perlu dijaga dan dilestarikan.', '2023-06-26 11:29:26', '2023-06-26 11:28:50', NULL),
(7, 7, '3', 'Satria Ardhya', 'Tarinya butuh konsentrasi dan butuh kerjasama extra, menurut saya itu hebat karena tarinya bagus dan dilakukan bersama.', '2023-06-27 14:23:40', '2023-06-27 07:22:41', '2023-06-27 07:22:41'),
(9, 7, '3', 'Satria Ardhya', 'hai', '2023-07-04 19:07:32', '2023-07-04 12:07:32', '2023-07-04 12:07:32'),
(10, 10, '3', 'Satria Ardhya', 'Isi Komentar', '2023-07-08 01:33:07', '2023-07-07 18:33:07', '2023-07-07 18:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `cultures`
--

CREATE TABLE `cultures` (
  `id` int NOT NULL,
  `nama_culture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_culture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_culture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cultures`
--

INSERT INTO `cultures` (`id`, `nama_culture`, `desc_culture`, `gambar_culture`, `kategori_id`, `created_at`, `updated_at`) VALUES
(2, 'Angklung', 'lat musik bernada ganda ini berasal dari Jawa Barat. Bahan dasar yang digunakan dalam alat musik ini adalah bambu. Angklung dimainkan dengan cara digetarkan, sehingga pipa pipa bambu akan bergetar dan menghasilkan nada tertentu. Selain fungsi sebagai alat musik, angklung berfungsi sebagai salah satu alat dalam upacara adat untuk mengundang Dewi Sri atau dewi kemakmuran untuk turun ke bumi dan memberikan kesuburan pada padi., Angklung dinobatkan sebagai Karya Agung Warisan Budaya Lisan dan Nonbendawi Manusia oleh UNESCO pada bulan November 2010 dan telah menjadi salah satu budaya asli Indonesia yang mendunia.', 'admin/assets/img/cultures/F0eJEvJfZD2IJNpLekggtbzujDW5RWMQYgWDwrFy.jpg', 4, '2023-06-16 07:40:57', '2024-01-29 06:40:57'),
(3, 'Aruh Baharin', 'Upacara adat serta keagamaan Kaharingan yang digelar oleh masyarakat Suku Dayak Meratus dan Suku Dayak Halong di Kalimantan Selatan yang dilaksanakan saat musim panen padi ladang (Pahumaan) telah usai. Dalam tradisi mereka, beras hasil panen (baras hanyar) belum boleh dimakan sebelum menggelar upacara Aruh Baharin. Biasanya, upacara adat ini dipusatkan di Balai Adat Agama Kaharingan atau di tempat-tempat khusus yang sengaja dibuat untuk keperluan ritual keagamaan dan adat.', 'admin/assets/img/cultures/Mhu66ppM2zcW9uVZO8ULXAEE9E9w04Yf71zWEiYo.jpg', 1, '2023-06-17 03:22:18', '2023-07-07 19:04:04'),
(5, 'Rumah Joglo', 'Rumah joglo adalah jenis rumah tradisional Jawa yang memiliki ciri khas atap limasan yang melengkung dan tiang-tiang yang kokoh. Rumah joglo umumnya terbuat dari kayu jati yang kuat dan indah', 'admin/assets/img/cultures/Ax4q9N14BunLWgFHHjyi8lZB6DkygTSqcNZnNQSx.jpg', 2, '2023-06-17 08:21:27', '2024-01-29 01:23:05'),
(7, 'Tari Saman', 'Tari Saman adalah tarian tradisional yang berasal dari Aceh, Indonesia. Tarian ini juga dikenal dengan sebutan \"Tari Pidato\" atau \"Tari Sufi\" karena gerakannya yang menggambarkan pesan-pesan moral dan keagamaan. Tari Saman dilakukan dalam kelompok besar dengan para penari duduk berbaris dan saling bersilangan kaki.', 'admin/assets/img/cultures/cThFMVsW5JpylzCWeCk88l3Pejiijl7SapFwY31S.jpg', 3, '2023-06-17 09:05:58', '2023-06-17 09:33:44'),
(8, 'Pantun', 'Pantun adalah salah satu bentuk puisi tradisional dalam budaya Indonesia. Pantun biasanya terdiri dari empat baris dengan pola a-b-a-b, di mana setiap baris terdiri dari 8-12 suku kata. Pantun sering digunakan dalam berbagai kesempatan, seperti perayaan, pertemuan sosial, atau acara adat.', 'admin/assets/img/cultures/zq9y6alYMgj8EoNErHJT2D717bnaROIqH4TIVmcf.jpg', 6, '2023-06-18 08:50:00', '2023-06-18 08:50:00'),
(9, 'Ulee Balang', 'Pakaian adat Ulee Balang adalah pakaian tradisional yang berasal dari Aceh, Indonesia. Ulee Balang merupakan salah satu jenis pakaian adat yang digunakan dalam acara-acara formal atau upacara adat di Aceh.', 'admin/assets/img/cultures/mXacVF1dX6v9bJhfW51aMwYDOoresbVXuie91GMQ.jpg', 7, '2023-06-18 08:57:55', '2023-06-18 08:57:55'),
(10, 'Rendang', 'Rendang adalah makanan khas daerah Minangkabau, Sumatera Barat, Indonesia. Rendang adalah sebuah hidangan daging yang dimasak dengan rempah-rempah khas dan bumbu yang kaya, menghasilkan cita rasa yang khas dan kuah yang kental.', 'admin/assets/img/cultures/GYmOEgHds9VumcbsVlMZ7Ocubi3RKq31Wi9FIEzR.jpg', 8, '2023-06-18 09:04:22', '2024-01-29 00:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `detail_culture`
--

CREATE TABLE `detail_culture` (
  `id` int NOT NULL,
  `id_culture` int NOT NULL,
  `sejarah_culture` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `makna_culture` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciri_culture` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_culture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_culture`
--

INSERT INTO `detail_culture` (`id`, `id_culture`, `sejarah_culture`, `makna_culture`, `ciri_culture`, `video_culture`, `created_at`, `updated_at`) VALUES
(2, 2, 'Sejarah angklung dapat ditelusuri hingga zaman Kerajaan Pajajaran pada abad ke-13. Pada masa itu, angklung digunakan dalam upacara keagamaan dan kebudayaan. Angklung juga digunakan sebagai alat komunikasi antar desa karena suaranya yang bisa terdengar dari jarak jauh.Pada abad ke-19, angklung mulai dipopulerkan oleh Daeng Soetigna, seorang guru dari Bandung. Ia mengembangkan angklung menjadi alat musik yang lebih kompleks dengan menambahkan beberapa tabung bambu dan menciptakan notasi musik untuk angklung. Daeng Soetigna juga mendirikan sekolah angklung pertama di Bandung untuk melestarikan dan mengajarkan alat musik tradisional ini kepada generasi muda.Pada tahun 2010, angklung diakui sebagai Warisan Budaya Takbenda oleh UNESCO. Pengakuan ini memperkuat status angklung sebagai salah satu alat musik tradisional yang penting dan bernilai budaya tinggi.Hingga saat ini, angklung masih banyak digunakan dalam berbagai pertunjukan seni tradisional, seperti wayang golek, tarian tradisional, dan musik tradisional Sunda. Selain itu, angklung juga telah menjadi alat musik yang populer di berbagai negara di dunia dan sering digunakan dalam pertunjukan musik internasional.Sebagai alat musik tradisional yang kaya akan sejarah dan nilai budaya, angklung terus dilestarikan dan diwariskan kepada generasi muda. Banyak sekolah dan komunitas seni yang mengajarkan anak-anak cara memainkan angklung dan memperkenalkan mereka pada kekayaan budaya Indonesia.', 'Berikut beberapa makna yang terkait dengan angklung:1. Warisan Budaya: Angklung merupakan simbol penting dari warisan budaya Indonesia. Alat musik ini telah ada selama berabad-abad dan menjadi bagian integral dari tradisi musik Jawa Barat. Pengakuan internasional terhadap angklung sebagai Warisan Kemanusiaan Nonbendawi oleh UNESCO pada tahun 2010 menegaskan pentingnya alat musik ini dalam warisan budaya dunia.2. Harmoni dan Kolaborasi: Angklung dimainkan dalam kelompok, di mana setiap pemain bertanggung jawab untuk memainkan satu atau beberapa nada. Untuk menghasilkan melodi yang indah, setiap pemain harus bekerja sama dengan pemain lainnya secara sinkron. Hal ini mengajarkan pentingnya harmoni, kerjasama, dan kolaborasi dalam kehidupan sehari-hari.3. Identitas Nasional: Angklung menjadi simbol identitas nasional Indonesia. Dalam upacara resmi dan acara budaya, angklung sering kali dimainkan untuk mewakili kekayaan budaya dan keunikan Indonesia. Alat musik ini menjadi salah satu ciri khas Indonesia yang membanggakan.4. Pendidikan dan Pemasyarakatan: Angklung sering digunakan sebagai alat pendidikan di sekolah-sekolah dan komunitas untuk mengajarkan musik kepada anak-anak dan orang dewasa. Melalui pembelajaran angklung, mereka juga belajar tentang kebersamaan, disiplin, kekreatifan, dan menghargai seni budaya.5. Kesenangan dan Hiburan: Angklung memberikan kesenangan dan hiburan kepada para pemain dan pendengarnya. Bunyi angklung yang unik dan ceria menghadirkan suasana riang dan positif. Dalam pertunjukan musik atau acara budaya, angklung mampu menghibur dan memukau penonton dengan keindahannya.Makna angklung mencakup aspek budaya, sosial, pendidikan, dan hiburan. Sebagai simbol identitas budaya Indonesia, angklung mengajarkan nilai-nilai penting seperti harmoni, kerjasama, dan menghargai keunikan setiap individu.', 'Berikut ini adalah beberapa ciri-ciri angklung:1. Terbuat dari bambu: Angklung terdiri dari tabung-tabung bambu dengan ukuran dan panjang yang berbeda. Bambu yang digunakan harus berkualitas baik agar menghasilkan suara yang jernih dan harmonis.2. Skala nada pentatonik: Angklung menggunakan skala nada pentatonik, yang terdiri dari lima nada. Biasanya, setiap angklung mewakili satu nada dalam skala tersebut. Ketika dimainkan secara bersama-sama, angklung menghasilkan melodi yang indah dan harmonis.3. Sistem getar: Angklung menghasilkan suara melalui sistem getar. Setiap tabung angklung memiliki satu atau dua potongan bambu kecil yang disebut \"tongkat\". Saat tabung angklung digoyangkan, tongkatnya akan bergetar dan menghasilkan suara.4. Teknik memainkan: Angklung dimainkan dengan cara digoyangkan. Pemain angklung biasanya memegang angklung dengan satu tangan dan menggunakan tangan lainnya untuk memukul bagian bawah tabung angklung. Dengan memukul angklung, tabung bambu bergetar dan menghasilkan suara.5. Alat musik ensemble: Angklung umumnya dimainkan dalam bentuk ensemble atau kelompok. Setiap angklung mewakili satu nada dalam skala, sehingga angklung-angklung yang berbeda akan dimainkan bersama-sama untuk menciptakan harmoni.6. Identitas budaya Indonesia: Angklung adalah salah satu alat musik tradisional Indonesia yang paling terkenal. Ini adalah simbol budaya dan kekayaan musik Indonesia. Angklung sering dimainkan dalam berbagai kesempatan, seperti upacara adat, pertunjukan seni, acara budaya, dan festival.7. Unesco Intangible Cultural Heritage: Pada tahun 2010, Angklung diakui oleh UNESCO sebagai Warisan Budaya Takbenda Manusia untuk Indonesia. Pengakuan ini memperkuat posisi angklung sebagai simbol budaya yang penting bagi bangsa Indonesia.Itulah beberapa ciri angklung. Alat musik ini memiliki suara yang khas dan merupakan bagian tak terpisahkan dari kebudayaan Indonesia.', 'https://www.youtube.com/watch?v=2hhzmcHC2HY', NULL, '2024-01-29 06:42:23'),
(3, 3, 'Sejarah adat istiadat Aruh Baharin dimulai dari kepercayaan suku Dayak bahwa roh nenek moyang memiliki peran penting dalam kehidupan mereka. Mereka meyakini bahwa roh nenek moyang memiliki kekuatan yang dapat memberikan berkah, melindungi, dan menjaga keselamatan suku Dayak.Dalam tradisi Aruh Baharin, suku Dayak akan mengadakan upacara adat yang melibatkan seluruh anggota komunitas. Upacara ini biasanya dilakukan di rumah adat atau tempat yang dianggap sakral. Selama upacara, suku Dayak akan memanjatkan doa dan memberikan persembahan kepada roh nenek moyang.Persembahan yang diberikan biasanya berupa makanan, minuman, dan barang-barang lain yang dianggap berharga oleh suku Dayak. Selain itu, mereka juga melakukan tarian dan musik tradisional sebagai bentuk ekspresi dan penghormatan kepada roh nenek moyang.Adat istiadat Aruh Baharin juga memiliki nilai-nilai sosial yang kuat. Tradisi ini mengajarkan rasa saling menghormati, gotong royong, dan kebersamaan dalam komunitas suku Dayak. Selain itu, tradisi ini juga menjadi sarana untuk mempererat hubungan antaranggota komunitas dan mempertahankan identitas budaya mereka.Meskipun zaman terus berubah dan modernisasi semakin meluas, adat istiadat Aruh Baharin masih tetap dijaga dan dilestarikan oleh suku Dayak. Mereka menyadari pentingnya menjaga warisan budaya dan melestarikan tradisi nenek moyang agar tidak dilupakan oleh generasi mendatang.Demikianlah sejarah adat istiadat Aruh Baharin, tradisi yang kaya akan makna dan nilai-nilai budaya suku Dayak di Kalimantan Barat.', 'Makna dari adat istiadat ini adalah sebagai berikut:1. Memperkuat ikatan sosial: Adat istiadat Aruh Baharin bertujuan untuk memperkuat ikatan sosial antara anggota suku Dayak. Melalui upacara dan ritual yang dilakukan, mereka saling berbagi pengalaman, pengetahuan, dan kebijaksanaan yang telah diwariskan dari generasi sebelumnya. Hal ini membantu memperkuat rasa solidaritas dan persatuan di antara anggota suku Dayak.2. Melestarikan budaya dan tradisi: Adat istiadat Aruh Baharin juga memiliki peran penting dalam melestarikan budaya dan tradisi suku Dayak. Melalui upacara adat, mereka mengajarkan nilai-nilai budaya, etika, dan moral kepada generasi muda. Dengan demikian, adat istiadat ini berfungsi sebagai sarana untuk menjaga dan mempertahankan identitas budaya suku Dayak.3. Menghormati leluhur: Adat istiadat Aruh Baharin juga memiliki makna dalam menghormati leluhur suku Dayak. Melalui upacara adat yang dilakukan, mereka mengenang dan menghormati leluhur mereka yang telah meninggal. Upacara ini juga dianggap sebagai bentuk penghormatan terhadap alam dan lingkungan sekitar, yang dianggap sebagai tempat tinggal roh leluhur.4. Menjaga keseimbangan alam: Adat istiadat Aruh Baharin juga memiliki makna dalam menjaga keseimbangan alam. Suku Dayak meyakini bahwa manusia dan alam saling terkait dan saling mempengaruhi. Melalui upacara adat, mereka berusaha menjaga keseimbangan alam dengan memberikan penghormatan kepada alam dan menghormati segala makhluk hidup di dalamnya.5. Memperkuat kepercayaan spiritual: Adat istiadat Aruh Baharin juga memiliki makna dalam memperkuat kepercayaan spiritual suku Dayak. Melalui upacara dan ritual yang dilakukan, mereka berkomunikasi dengan roh leluhur dan entitas spiritual lainnya. Upacara ini dianggap sebagai sarana untuk memohon berkat, perlindungan, dan petunjuk dari roh leluhur dan entitas spiritual.Secara keseluruhan, adat istiadat Aruh Baharin memiliki makna yang sangat penting dalam kehidupan suku Dayak. Adat istiadat ini tidak hanya sebagai bentuk penghormatan terhadap leluhur dan alam, tetapi juga sebagai sarana untuk memperkuat ikatan sosial, melestarikan budaya, menjaga keseimbangan alam, dan memperkuat kepercayaan spiritual.', 'Beberapa ciri adat istiadat Aruh Baharin antara lain:1. Upacara Adat: Aruh Baharin adalah upacara adat yang dilakukan oleh Suku Dayak Ngaju setiap tahunnya. Upacara ini dilakukan untuk memohon kelancaran dan kesuburan dalam bercocok tanam serta memperingati hari jadi desa atau komunitas.2. Penyuluhan: Selama Aruh Baharin, terdapat penyuluhan atau ceramah yang diberikan oleh tokoh adat kepada masyarakat. Penyuluhan ini bertujuan untuk memberikan pemahaman mengenai pentingnya melestarikan adat istiadat dan nilai-nilai budaya Suku Dayak Ngaju.3. Tarian dan Musik: Upacara Aruh Baharin juga diisi dengan tarian dan musik tradisional. Tarian yang sering ditampilkan adalah tarian Mandau yang dilakukan oleh beberapa penari pria dengan menggunakan senjata tradisional Mandau. Musik yang mengiringi tarian biasanya menggunakan alat musik tradisional seperti gong, suling, dan gendang.4. Pakaian Adat: Selama Aruh Baharin, masyarakat Suku Dayak Ngaju mengenakan pakaian adat. Pakaian adat pria terdiri dari baju berwarna cerah dengan hiasan kepala dari bulu burung enggang. Sedangkan pakaian adat wanita terdiri dari baju berwarna cerah dengan hiasan kepala dari daun lontar atau bunga.5. Persembahan dan Doa: Masyarakat Suku Dayak Ngaju juga melakukan persembahan kepada leluhur dan roh-roh yang dipercaya. Persembahan ini berupa makanan, minuman, dan hasil bumi lainnya. Selain itu, juga dilakukan doa-doa yang dipimpin oleh tokoh adat untuk memohon keberkahan dan perlindungan.6. Permainan Tradisional: Selama Aruh Baharin, juga diadakan berbagai permainan tradisional seperti panjat pinang, tarik tambang, dan lomba memasukkan paku ke dalam botol. Permainan ini bertujuan untuk mempererat tali persaudaraan dan kebersamaan antara masyarakat.Itulah beberapa ciri adat istiadat Aruh Baharin dari Suku Dayak Ngaju. Adat istiadat ini merupakan warisan budaya yang sangat berharga dan harus dilestarikan agar tidak punah.', 'https://www.youtube.com/watch?v=lJDOYwFKLzg', NULL, '2023-06-17 07:49:31'),
(5, 5, 'Sejarah Rumah Joglo dapat ditelusuri hingga abad ke-17, pada masa pemerintahan Kerajaan Mataram Islam di Jawa. Rumah Joglo pertama kali digunakan sebagai istana atau tempat tinggal keluarga kerajaan dan bangsawan. Bentuk rumah Joglo yang megah dan elegan mencerminkan status sosial tinggi pemiliknya.  Rumah Joglo didesain dengan perpaduan antara arsitektur Jawa klasik dan unsur-unsur Hindu. Salah satu ciri khasnya adalah adanya kayu-kayu yang saling bersilangan dan terikat tanpa menggunakan paku, sehingga rumah ini bisa disusun dan dirakit tanpa menggunakan paku atau baut. Teknik ini dikenal sebagai \"sistem pencongan\" atau \"sistem tumpang sari\" yang memungkinkan fleksibilitas dan daya tahan bangunan.  Selain itu, bentuk atap Joglo yang melengkung ke atas merupakan simbolisasi dari Gunung Mahameru atau Gunung Sumeru, yang dalam kosmologi Jawa dianggap sebagai pusat alam semesta. Atap Joglo terbuat dari bahan-bahan alami seperti kayu jati dan sirap yang dirangkai dengan presisi tinggi.  Pada awalnya, Rumah Joglo', 'Makna atau arti dari rumah Joglo memiliki beberapa aspek yang meliputi:  Warisan Budaya: Rumah Joglo memiliki nilai budaya yang tinggi karena merupakan bagian dari warisan budaya Jawa. Bentuk dan desainnya telah melewati berabad-abad dan menjadi simbol identitas budaya masyarakat Jawa.  Keindahan Arsitektur: Rumah Joglo ditandai dengan bentuk atap yang melengkung dan kokoh, serta tiang-tiang besar yang menghiasi bagian depan rumah. Arsitektur rumah Joglo menunjukkan keindahan dan keanggunan yang melekat pada budaya Jawa.  Ruang Terbuka: Salah satu ciri khas rumah Joglo adalah ruang terbuka yang dimilikinya. Rumah ini memiliki konsep yang mengutamakan sirkulasi udara dan pencahayaan alami. Hal ini memberikan kenyamanan bagi penghuninya dan menciptakan hubungan yang harmonis antara alam dan bangunan.  Filosofi dan Simbolisme: Rumah Joglo juga memiliki makna filosofis dan simbolis dalam setiap elemen arsitekturnya. Misalnya, jumlah tiang-tiang di depan rumah Joglo biasanya genap, melambangkan keselarasan dan kes', 'Beberapa ciri rumah joglo antara lain:  1. Bentuk atap: Rumah joglo memiliki atap yang tinggi dan melengkung dengan ujung yang meruncing. Atap ini biasanya terbuat dari bahan alami seperti sirap atau genteng keramik.  2. Kolom dan tiang: Rumah joglo memiliki kolom dan tiang yang kuat dan kokoh. Kolom dan tiang ini terbuat dari kayu jati yang dipahat dengan motif ornamen tradisional Jawa.  3. Ruang terbuka: Rumah joglo memiliki ruangan yang luas dan terbuka. Biasanya terdapat ruang tengah yang besar dan terbuka di tengah rumah, yang dikenal sebagai pendopo. Ruang ini digunakan untuk kegiatan sosial, seperti pertemuan keluarga atau acara adat.  4. Ornamentasi: Rumah joglo memiliki ornamen tradisional yang kaya dan indah. Ornamen ini terlihat pada dinding, kolom, dan tiang rumah joglo. Motif ornamen ini biasanya terinspirasi dari alam, seperti bunga, daun, atau hewan.  5. Material alami: Rumah joglo umumnya terbuat dari bahan alami seperti kayu jati, batu, dan bambu. Material ini memberikan kesan alami dan tradi', 'https://www.youtube.com/watch?v=b8d--4KVI-Y', '2023-06-17 08:21:27', '2023-06-17 08:21:27'),
(7, 7, 'Sejarah tari Saman bermula pada abad ke-16, saat seorang ulama bernama Sheikh Saman dari Gayo menyebarkan agama Islam di wilayah tersebut. Tarian ini awalnya diciptakan sebagai bentuk ekspresi keagamaan dan dianggap sebagai bentuk komunikasi dengan Tuhan. Namun, seiring berjalannya waktu, tarian Saman juga menjadi sarana hiburan dan identitas budaya bagi suku Gayo.  Tari Saman memiliki gerakan yang cepat dan kompleks, dengan penari yang saling berinteraksi dan saling melengkapi gerakan satu sama lain. Gerakan tari Saman ini melibatkan tangan, kepala, dan tubuh secara keseluruhan yang diiringi dengan nyanyian dan tepukan tangan yang ritmis.  Tari Saman telah diakui oleh UNESCO sebagai Warisan Budaya Takbenda Manusia pada tahun 2011. Tarian ini menjadi sangat populer di Indonesia dan sering ditampilkan dalam berbagai acara budaya dan festival.', 'Makna dari tari Saman adalah sebagai bentuk ekspresi kebersamaan, persatuan, dan kekompakan antara para penari. Tarian ini juga memiliki nilai-nilai religius dalam budaya Aceh, karena sering digunakan sebagai sarana untuk menghormati dan memuji Tuhan. Selain itu, tari Saman juga melambangkan semangat kebersamaan, kerja sama, dan keadilan dalam masyarakat Aceh.', 'Berikut beberapa ciri-ciri tari Saman:  1. Gerakan yang cepat: Tari Saman ditandai dengan gerakan yang cepat dan dinamis. Para penari melakukan gerakan tangan, kepala, dan tubuh dengan ritme yang cepat dan terkoordinasi.  2. Formasi yang padat: Para penari tari Saman biasanya membentuk barisan yang padat dan berjejer rapat. Mereka duduk bersila dan melakukan gerakan tangan secara bersamaan.  3. Vokal yang khas: Selama menari, para penari tari Saman juga menyanyikan lagu-lagu dengan suara yang khas. Vokal ini menjadi bagian penting dari pertunjukan tari Saman.  4. Kebersamaan dan kerjasama: Tari Saman dikenal sebagai tarian yang membutuhkan kerjasama yang baik antara penari. Gerakan yang seragam dan sinkron membutuhkan latihan dan koordinasi yang baik.', 'https://www.youtube.com/watch?v=zfN85nxMLDM', '2023-06-17 09:05:58', '2023-06-17 09:05:58'),
(8, 8, 'Sejarahnya dapat ditelusuri hingga zaman kerajaan-kerajaan di Nusantara pada abad ke-15. Pantun merupakan jenis puisi yang terdiri dari empat baris dalam setiap baitnya, dengan pola a-b-a-b atau a-a-b-b. Bait pertama dan kedua saling berkaitan dan berisi pembukaan atau permulaan, sedangkan bait ketiga dan keempat berisi kelanjutan atau penutup.  Asal usul pantun ini belum dapat dipastikan secara pasti, tetapi dapat ditemukan pengaruh budaya Arab, Persia, dan India dalam perkembangannya. Pantun telah menjadi bagian dari tradisi lisan masyarakat Melayu dan diwariskan secara turun temurun. Awalnya, pantun digunakan sebagai bentuk komunikasi dalam percakapan sehari-hari, baik sebagai ungkapan perasaan, pujian, hiburan, atau nasihat. Pantun juga digunakan dalam acara-acara adat, upacara perkawinan, dan kegiatan sosial lainnya.', 'Makna seni sastra daerah pantun adalah bentuk seni yang menampilkan kekhasan budaya dan keindahan bahasa dalam rangka memperkaya warisan budaya suatu daerah. Pantun juga merupakan karya kreatif yang menggambarkan pemikiran, perasaan, dan imajinasi penulisnya. Dengan memahami dan menghargai pantun, kita dapat memperkaya pengalaman budaya dan menjaga keberlanjutan seni sastra daerah.', 'Pantun Indonesia memiliki ciri khas dalam penggunaan bahasa yang indah dan penuh dengan makna. Biasanya, pantun terdiri dari dua bait yang saling berkaitan, di mana bait pertama berfungsi sebagai pembuka atau penanya, sedangkan bait kedua berfungsi sebagai jawaban atau penyelesaian.', 'https://www.youtube.com/watch?v=hPMtrmyE5Ug', '2023-06-18 08:50:00', '2023-06-18 08:50:00'),
(9, 9, 'Pakaian ini mengambil nama dari Ulee Balang, seorang panglima perang terkenal dari masa Kesultanan Aceh pada abad ke-16. Pakaian adat Ulee Balang memiliki makna dan simbolisme yang kuat dalam budaya Aceh, dan sering dipakai dalam upacara adat, pernikahan, atau acara penting lainnya.  Sejarah pakaian adat Ulee Balang ini berkaitan erat dengan perkembangan kesultanan Aceh. Pada masa lalu, Ulee Balang adalah seorang panglima perang yang memiliki peran penting dalam melindungi dan mempertahankan kesultanan Aceh dari serangan musuh. Dalam upacara-upacara kenegaraan dan keagamaan, pakaian adat Ulee Balang dipakai oleh para penguasa dan bangsawan Aceh untuk menunjukkan status, kekuasaan, dan martabat mereka.', 'pakaian adat Ulee Balang memiliki makna yang mendalam dalam konteks budaya Aceh. Ia mewakili status, kehormatan, kekuasaan, identitas budaya, dan warisan leluhur yang dijunjung tinggi oleh masyarakat Aceh.', 'Beberapa ciri-ciri dari pakaian adat Ulee Balang:  1. Bahan dan warna: Pakaian adat Ulee Balang biasanya terbuat dari bahan sutra atau kain brokat dengan warna-warna cerah seperti merah, biru, atau emas. Warna-warna tersebut melambangkan kekuasaan dan kemewahan.  2. Model pakaian: Pakaian adat Ulee Balang terdiri dari beberapa komponen utama, termasuk sarung, baju kurung, dan selendang. Sarung panjang digunakan oleh pria dan dikenakan di bagian bawah pinggang. Baju kurung panjang dengan lengan panjang dan kerah tinggi digunakan oleh wanita. Selendang yang dihias dengan motif tradisional juga sering dikenakan di atas baju.  3. Hiasan dan bordiran: Pakaian adat Ulee Balang sering dihiasi dengan bordiran rumit yang menggunakan benang emas atau perak. Motif bordir tersebut sering kali terinspirasi dari alam, seperti bunga, daun, atau hewan. Hiasan dan aksesoris tambahan seperti bros atau gelang juga dapat digunakan untuk melengkapi pakaian.  4. Simbolisme: Pakaian adat Ulee Balang sering kali memiliki makna simbolis. Misalnya, warna merah melambangkan keberanian dan kekuatan, sedangkan warna emas melambangkan kemewahan dan keagungan. Motif bordir juga dapat menggambarkan status sosial atau kelompok etnis tertentu.  5. Kepatuhan pada aturan berpakaian: Pakaian adat Ulee Balang memiliki aturan tertentu tentang cara berpakaian yang harus diikuti. Hal ini memastikan kesesuaian dan kesakralan pakaian dalam budaya Aceh.  Pakaian adat Ulee Balang adalah bagian yang penting dari identitas budaya Aceh dan dipakai dalam acara-acara adat, pernikahan, atau perayaan tradisional.', 'https://www.youtube.com/watch?v=RO5Y14wFDSA', '2023-06-18 08:57:55', '2023-06-18 08:57:55'),
(10, 10, 'Rendang konon pertama kali muncul pada abad ke-16 di Kerajaan Minangkabau. Makanan ini awalnya disajikan dalam acara-acara adat, seperti pesta pernikahan, upacara adat, atau perayaan penting. Rendang juga memiliki nilai simbolis dalam budaya Minangkabau, menggambarkan kekayaan, kehormatan, dan kebesaran seseorang.  Dalam perkembangannya, rendang menjadi populer di luar Sumatra Barat dan menjadi bagian integral dari masakan Indonesia. Kelezatannya menarik minat banyak orang, baik di dalam maupun di luar negeri. Rendang sering kali dianggap sebagai salah satu masakan terenak di dunia.', 'Makna tentang kesabaran, keberagaman, kekeluargaan, kebanggaan lokal, dan kelezatan. Makanan ini menjadi bagian tak terpisahkan dari identitas budaya Minangkabau, dan terus menjadi warisan yang berharga bagi generasi mendatang.', 'Ciri khas dari makanan rendang:  1. Bahan Utama: Rendang umumnya terbuat dari daging sapi, meskipun ada juga variasi rendang dengan menggunakan daging ayam, kambing, atau itik. Daging tersebut dipotong kecil-kecil dan dimasak dalam bumbu rendang yang kaya rempah-rempah.  2. Proses Memasak: Rendang adalah masakan yang dimasak dalam waktu yang lama dengan cara direbus, kemudian dikeringkan dengan api kecil dan diaduk secara terus menerus. Proses memasak ini berlangsung berjam-jam hingga daging menjadi empuk dan bumbu meresap.  3. Rempah-rempah: Rendang menggunakan berbagai rempah-rempah yang khas, termasuk serai (sereh), lengkuas, cabai, bawang merah, bawang putih, jahe, kemiri, kayu manis, dan banyak lagi. Kombinasi rempah-rempah ini memberikan cita rasa yang kaya dan kompleks pada rendang.  4. Kuah Kental dan Kering: Rendang memiliki dua variasi kuah, yaitu rendang dengan kuah yang kental dan rendang kering. Rendang dengan kuah kental biasanya lebih banyak menggunakan santan, sedangkan rendang kering memiliki kuah yang sudah lebih mengental dan bumbunya meresap ke dalam daging.  5. Rasa yang Kaya: Rendang memiliki rasa yang sangat kaya dan gurih, dengan perpaduan antara rempah-rempah, santan, dan daging yang empuk. Rendang biasanya memiliki rasa pedas yang sedang hingga pedas yang kuat, tergantung pada preferensi penggunaan cabai.  6. Ketahanan dan Pengawetan: Rendang memiliki sifat tahan lama dan sering dianggap semakin enak jika disimpan dalam jangka waktu yang lebih lama. Ini karena proses pengeringan dan pengawetan bumbu rendang yang kuat, yang membuat rendang dapat bertahan dalam waktu yang lama tanpa harus direfrigerasi.  Rendang adalah hidangan yang sangat populer di Indonesia dan diakui oleh UNESCO sebagai Warisan Budaya Takbenda Indonesia. Ia sering dihidangkan dalam acara-acara khusus, perayaan, atau menjadi hidangan istimewa dalam berbagai kesempatan.', 'https://www.youtube.com/watch?v=fEpt5JX7nQc', '2023-06-18 09:04:22', '2023-06-18 09:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Adat Istiadat', NULL, NULL),
(2, 'Rumah Adat', NULL, NULL),
(3, 'Tarian Daerah', NULL, NULL),
(4, 'Alat Musik Daerah', NULL, NULL),
(5, 'Seni Rupa Daerah', NULL, NULL),
(6, 'Seni Sastra Daerah', NULL, NULL),
(7, 'Pakaian Adat', NULL, NULL),
(8, 'Makanan Khas Daerah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_15_131716_create_sessions_table', 1),
(7, '2023_06_16_091558_create_cultures_table', 2),
(8, '2023_06_17_082928_create_kategori_table', 3),
(9, '2023_06_17_103858_create_detail_cultures_table', 4),
(10, '2023_06_18_062933_create_comments_table', 5),
(11, '2023_06_18_062942_create_replies_table', 5),
(12, '2023_06_18_092648_create_comment_table', 6),
(13, '2023_06_18_093411_create_reply_table', 7),
(14, '2023_06_19_145703_create_views_table', 8),
(15, '2016_02_07_000000_create_likeable_tables', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int NOT NULL,
  `comment_id` int NOT NULL,
  `user_id` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_replier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_reply` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_reply` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `comment_id`, `user_id`, `nama_replier`, `isi_reply`, `waktu_reply`, `created_at`, `updated_at`) VALUES
(2, 2, '', 'Kim Seokjin', 'wahhh bener nih..', '2023-06-27 13:24:48', '2023-06-20 13:24:24', NULL),
(3, 3, '', 'Min Yoongi', 'setuju setuju setuju!!', '2023-06-27 13:24:48', '2023-06-22 13:24:24', NULL),
(9, 6, '', 'Waduh gatau', 'ahh setujuu', '2023-06-27 13:24:48', '2023-06-22 13:24:24', NULL),
(10, 6, '3', 'Satria Ardhya', 'bener banget', '2023-06-28 14:44:10', '2023-06-28 07:44:10', '2023-06-28 07:44:10'),
(11, 7, '3', 'Satria Ardhya', 'wah iya', '2023-06-28 14:45:18', '2023-06-28 07:45:18', '2023-06-28 07:45:18'),
(12, 9, '3', 'Satria Ardhya', 'apa', '2023-07-04 19:09:21', '2023-07-04 12:09:21', '2023-07-04 12:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('WsBTaid686MLmglVvlxNHmGOy5ol9ksTPKTvQiW8', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWjZqckhTaGJYZmpDemFPN01uZW5MOGNtcnYxTVhoeXBtWlR6QzkzWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9yZXZ0ZWNoLWN1bHR1cmUudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1706864100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(3, 'Satria Ardhya', 'SatriaAN', 'satt@gmail.com', 'user', '2023-06-25 12:07:45', '$2y$10$c2UpfyZi/yUQdllgrjOcNODUOZX/b1lpsvwPuDciqF1cASa4fpjea', NULL, NULL, NULL, 'nJZ1xViFs61MVYfoAX9AbjLGoifZTSwZ1ezZz3OYkTZbynzwDTPp36xSjdgb', NULL, 'profile-photos/Ahw0fYSvkTvUdp4IaNTBYNzazieLzQnr3t9AAFbd.jpg', '2023-06-15 07:24:19', '2024-01-29 05:58:04'),
(4, 'Admin', 'admin', 'admin@gmail.com', 'admin', '2023-06-21 09:51:59', '$2y$10$k860Y0X/Lce8bb7q7xjFpeiZrzIWwBbm0jJEBPELFWc4Nrn1lUmqu', NULL, NULL, NULL, 'myoXZpBRLodGodc2x4zd3tb9ZTuEPh1KSTLHZqUKRlIOLeAZ9iL7ciH4656Y', NULL, NULL, '2023-06-15 07:25:41', '2023-06-15 07:25:41'),
(12, 'Satria Ardhya', 'ratuufaradiiba', 'ratuufaradyb.05@gmail.com', 'user', '2024-01-27 08:53:40', '$2y$10$SYf/qWWjQnJJOCh72nxTn..ynnuhGo7lNhkCrpJMVV4Tl.6N/zOUO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-27 08:53:20', '2024-01-27 08:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int NOT NULL,
  `viewable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `viewable_type`, `viewable_id`, `created_at`, `updated_at`) VALUES
(304, 'App\\Models\\Culture', 10, '2024-01-26 00:31:18', '2024-01-26 00:31:18'),
(305, 'App\\Models\\Culture', 9, '2024-01-26 00:32:15', '2024-01-26 00:32:15'),
(306, 'App\\Models\\Culture', 9, '2024-01-26 00:32:21', '2024-01-26 00:32:21'),
(307, 'App\\Models\\Culture', 9, '2024-01-26 00:32:25', '2024-01-26 00:32:25'),
(308, 'App\\Models\\Culture', 8, '2024-01-26 00:34:02', '2024-01-26 00:34:02'),
(309, 'App\\Models\\Culture', 2, '2024-01-26 00:49:02', '2024-01-26 00:49:02'),
(310, 'App\\Models\\Culture', 2, '2024-01-26 22:52:04', '2024-01-26 22:52:04'),
(311, 'App\\Models\\Culture', 1, '2024-01-26 23:05:46', '2024-01-26 23:05:46'),
(312, 'App\\Models\\Culture', 3, '2024-01-26 23:05:51', '2024-01-26 23:05:51'),
(313, 'App\\Models\\Culture', 1, '2024-01-26 23:06:04', '2024-01-26 23:06:04'),
(314, 'App\\Models\\Culture', 1, '2024-01-26 23:06:19', '2024-01-26 23:06:19'),
(315, 'App\\Models\\Culture', 10, '2024-01-26 23:16:30', '2024-01-26 23:16:30'),
(316, 'App\\Models\\Culture', 8, '2024-01-26 23:25:32', '2024-01-26 23:25:32'),
(317, 'App\\Models\\Culture', 3, '2024-01-26 23:33:09', '2024-01-26 23:33:09'),
(318, 'App\\Models\\Culture', 3, '2024-01-26 23:35:52', '2024-01-26 23:35:52'),
(319, 'App\\Models\\Culture', 3, '2024-01-27 00:14:41', '2024-01-27 00:14:41'),
(320, 'App\\Models\\Culture', 3, '2024-01-27 00:15:50', '2024-01-27 00:15:50'),
(321, 'App\\Models\\Culture', 3, '2024-01-27 00:15:54', '2024-01-27 00:15:54'),
(322, 'App\\Models\\Culture', 1, '2024-01-27 00:16:01', '2024-01-27 00:16:01'),
(323, 'App\\Models\\Culture', 1, '2024-01-27 00:18:58', '2024-01-27 00:18:58'),
(324, 'App\\Models\\Culture', 1, '2024-01-27 00:19:45', '2024-01-27 00:19:45'),
(325, 'App\\Models\\Culture', 1, '2024-01-27 00:19:53', '2024-01-27 00:19:53'),
(326, 'App\\Models\\Culture', 3, '2024-01-27 00:22:55', '2024-01-27 00:22:55'),
(327, 'App\\Models\\Culture', 3, '2024-01-27 00:23:51', '2024-01-27 00:23:51'),
(328, 'App\\Models\\Culture', 1, '2024-01-27 00:29:55', '2024-01-27 00:29:55'),
(329, 'App\\Models\\Culture', 3, '2024-01-27 00:30:03', '2024-01-27 00:30:03'),
(330, 'App\\Models\\Culture', 2, '2024-01-27 00:30:12', '2024-01-27 00:30:12'),
(331, 'App\\Models\\Culture', 2, '2024-01-27 05:51:21', '2024-01-27 05:51:21'),
(332, 'App\\Models\\Culture', 2, '2024-01-27 05:52:01', '2024-01-27 05:52:01'),
(333, 'App\\Models\\Culture', 2, '2024-01-27 05:52:26', '2024-01-27 05:52:26'),
(334, 'App\\Models\\Culture', 2, '2024-01-27 05:52:38', '2024-01-27 05:52:38'),
(335, 'App\\Models\\Culture', 7, '2024-01-27 05:53:52', '2024-01-27 05:53:52'),
(336, 'App\\Models\\Culture', 3, '2024-01-27 05:53:58', '2024-01-27 05:53:58'),
(337, 'App\\Models\\Culture', 8, '2024-01-27 05:54:42', '2024-01-27 05:54:42'),
(338, 'App\\Models\\Culture', 9, '2024-01-27 08:54:11', '2024-01-27 08:54:11'),
(339, 'App\\Models\\Culture', 10, '2024-01-27 08:54:54', '2024-01-27 08:54:54'),
(340, 'App\\Models\\Culture', 14, '2024-01-29 00:19:44', '2024-01-29 00:19:44'),
(341, 'App\\Models\\Culture', 14, '2024-01-29 00:19:49', '2024-01-29 00:19:49'),
(342, 'App\\Models\\Culture', 1, '2024-01-29 00:30:21', '2024-01-29 00:30:21'),
(343, 'App\\Models\\Culture', 1, '2024-01-29 00:32:49', '2024-01-29 00:32:49'),
(344, 'App\\Models\\Culture', 5, '2024-01-29 01:25:17', '2024-01-29 01:25:17'),
(345, 'App\\Models\\Culture', 1, '2024-01-29 05:51:21', '2024-01-29 05:51:21'),
(346, 'App\\Models\\Culture', 5, '2024-01-29 06:02:13', '2024-01-29 06:02:13'),
(347, 'App\\Models\\Culture', 10, '2024-01-29 06:03:35', '2024-01-29 06:03:35'),
(348, 'App\\Models\\Culture', 1, '2024-01-29 06:04:04', '2024-01-29 06:04:04'),
(349, 'App\\Models\\Culture', 2, '2024-01-29 06:04:53', '2024-01-29 06:04:53'),
(350, 'App\\Models\\Culture', 2, '2024-01-29 06:34:19', '2024-01-29 06:34:19'),
(351, 'App\\Models\\Culture', 2, '2024-01-29 06:36:11', '2024-01-29 06:36:11'),
(352, 'App\\Models\\Culture', 2, '2024-01-29 06:41:12', '2024-01-29 06:41:12'),
(353, 'App\\Models\\Culture', 2, '2024-01-29 06:42:26', '2024-01-29 06:42:26'),
(354, 'App\\Models\\Culture', 25, '2024-01-29 06:47:38', '2024-01-29 06:47:38'),
(355, 'App\\Models\\Culture', 25, '2024-01-29 06:48:38', '2024-01-29 06:48:38'),
(356, 'App\\Models\\Culture', 10, '2024-01-31 19:54:00', '2024-01-31 19:54:00'),
(357, 'App\\Models\\Culture', 9, '2024-01-31 19:58:53', '2024-01-31 19:58:53'),
(358, 'App\\Models\\Culture', 10, '2024-01-31 20:04:26', '2024-01-31 20:04:26'),
(359, 'App\\Models\\Culture', 10, '2024-01-31 20:13:17', '2024-01-31 20:13:17'),
(360, 'App\\Models\\Culture', 10, '2024-01-31 20:16:13', '2024-01-31 20:16:13'),
(361, 'App\\Models\\Culture', 10, '2024-01-31 20:21:42', '2024-01-31 20:21:42'),
(362, 'App\\Models\\Culture', 10, '2024-01-31 20:23:47', '2024-01-31 20:23:47'),
(363, 'App\\Models\\Culture', 8, '2024-01-31 20:27:56', '2024-01-31 20:27:56'),
(364, 'App\\Models\\Culture', 7, '2024-01-31 20:28:03', '2024-01-31 20:28:03'),
(365, 'App\\Models\\Culture', 27, '2024-02-01 03:12:26', '2024-02-01 03:12:26'),
(366, 'App\\Models\\Culture', 27, '2024-02-01 03:24:44', '2024-02-01 03:24:44'),
(367, 'App\\Models\\Culture', 37, '2024-02-01 23:26:31', '2024-02-01 23:26:31'),
(368, 'App\\Models\\Culture', 37, '2024-02-01 23:37:02', '2024-02-01 23:37:02'),
(369, 'App\\Models\\Culture', 37, '2024-02-01 23:37:49', '2024-02-01 23:37:49'),
(370, 'App\\Models\\Culture', 38, '2024-02-01 23:38:49', '2024-02-01 23:38:49'),
(371, 'App\\Models\\Culture', 5, '2024-02-01 23:39:04', '2024-02-01 23:39:04'),
(372, 'App\\Models\\Culture', 37, '2024-02-02 00:24:29', '2024-02-02 00:24:29'),
(373, 'App\\Models\\Culture', 37, '2024-02-02 00:38:21', '2024-02-02 00:38:21'),
(374, 'App\\Models\\Culture', 37, '2024-02-02 00:38:33', '2024-02-02 00:38:33'),
(375, 'App\\Models\\Culture', 37, '2024-02-02 00:46:26', '2024-02-02 00:46:26'),
(376, 'App\\Models\\Culture', 37, '2024-02-02 00:47:41', '2024-02-02 00:47:41'),
(377, 'App\\Models\\Culture', 39, '2024-02-02 00:52:19', '2024-02-02 00:52:19'),
(378, 'App\\Models\\Culture', 40, '2024-02-02 01:06:42', '2024-02-02 01:06:42'),
(379, 'App\\Models\\Culture', 41, '2024-02-02 01:12:31', '2024-02-02 01:12:31'),
(380, 'App\\Models\\Culture', 44, '2024-02-02 01:18:28', '2024-02-02 01:18:28'),
(381, 'App\\Models\\Culture', 46, '2024-02-02 01:37:58', '2024-02-02 01:37:58'),
(382, 'App\\Models\\Culture', 46, '2024-02-02 01:38:01', '2024-02-02 01:38:01'),
(383, 'App\\Models\\Culture', 46, '2024-02-02 01:38:08', '2024-02-02 01:38:08'),
(384, 'App\\Models\\Culture', 46, '2024-02-02 01:43:14', '2024-02-02 01:43:14'),
(385, 'App\\Models\\Culture', 47, '2024-02-02 01:53:28', '2024-02-02 01:53:28'),
(386, 'App\\Models\\Culture', 10, '2024-02-02 01:54:59', '2024-02-02 01:54:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id_culture_foreign` (`culture_id`);

--
-- Indexes for table `cultures`
--
ALTER TABLE `cultures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`kategori_id`);

--
-- Indexes for table `detail_culture`
--
ALTER TABLE `detail_culture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_culture` (`id_culture`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cultures`
--
ALTER TABLE `cultures`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `detail_culture`
--
ALTER TABLE `detail_culture`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=387;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_id_culture_foreign` FOREIGN KEY (`culture_id`) REFERENCES `cultures` (`id`);

--
-- Constraints for table `cultures`
--
ALTER TABLE `cultures`
  ADD CONSTRAINT `kategori_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON UPDATE RESTRICT;

--
-- Constraints for table `detail_culture`
--
ALTER TABLE `detail_culture`
  ADD CONSTRAINT `detail_foreign` FOREIGN KEY (`id_culture`) REFERENCES `cultures` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_id_comment_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
