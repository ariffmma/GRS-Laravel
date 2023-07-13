-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2023 at 10:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grs`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `image` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categori_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cate_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categori_id`, `name`, `cate_slug`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit', 'rumah-sakit', '2023-07-04 03:36:31', '2023-07-04 03:36:31'),
(2, 'Fasilitas Pendidikan', 'fasilitas-pendidikan', '2023-07-04 03:36:31', '2023-07-04 03:36:31'),
(3, 'Mixed Use', 'mixed-use', '2023-07-04 03:37:41', '2023-07-04 03:37:41'),
(4, 'Hospitality', 'hospitality', '2023-07-04 03:38:16', '2023-07-04 03:38:16'),
(5, 'Fasilitas Komersial', 'fasilitas-komersial', '2023-07-04 03:38:16', '2023-07-04 03:38:16'),
(6, 'Fasilitas Publik', 'fasilitas-publik', '2023-07-04 03:38:16', '2023-07-04 03:38:16'),
(7, 'Residential', 'Residential', '2023-07-04 03:38:16', '2023-07-04 03:38:16'),
(8, 'Kawasan', 'kawasan', '2023-07-04 03:38:16', '2023-07-04 03:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'des@gmail.com', 'cek', 'des', '2023-07-06 20:54:28', '2023-07-06 20:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` int(11) NOT NULL,
  `categori` enum('enquiry','press','jobs') NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `categori`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(2, 'enquiry', 'cek', 'desty@gmail.com', 'cek 123', '2023-07-09 21:01:25', '2023-07-09 21:01:25'),
(3, 'enquiry', 'cek', '123@gm', '123', '2023-07-13 07:09:58', '2023-07-13 07:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `pc_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `categori_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`pc_id`, `post_id`, `categori_id`, `created_at`, `updated_at`) VALUES
(13, 17, 1, '2023-07-04 21:09:32', '2023-07-04 21:09:32'),
(14, 18, 1, '2023-07-04 21:09:32', '2023-07-04 21:09:32'),
(15, 19, 1, '2023-07-04 21:09:32', '2023-07-04 21:09:32'),
(16, 20, 1, '2023-07-04 21:09:32', '2023-07-04 21:09:32'),
(17, 21, 1, '2023-07-04 21:09:32', '2023-07-04 21:09:32'),
(18, 22, 1, '2023-07-04 21:09:32', '2023-07-04 21:09:32'),
(19, 23, 1, '2023-07-04 21:09:32', '2023-07-04 21:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(150) NOT NULL,
  `year` int(4) NOT NULL,
  `completion_year` year(4) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `latlong` varchar(200) NOT NULL,
  `scale` varchar(100) NOT NULL,
  `highlight` int(11) NOT NULL DEFAULT 0,
  `selected` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `short_description`, `details`, `thumb`, `created_at`, `updated_at`, `location`, `year`, `completion_year`, `slug`, `latlong`, `scale`, `highlight`, `selected`, `status`) VALUES
(17, 'RS EMC Pertamina Sentul City', 'Rumah sakit Pertamina Sentul City merupakan rumah sakit dengan fasilitas kesehatan bertaraf internasional dengan layanan unggulan pusat jantung dan hati ', '<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Rumah sakit Pertamina Sentul City merupakan rumah sakit dengan fasilitas kesehatan bertaraf internasional dengan layanan unggulan pusat jantung dan hati yang didukung oleh dokter dan peralatan medis berkualitas.&nbsp;EMC Sentul terletak di lingkungan eco green Sentul, Bogor Timur. Didukung oleh berbagai fasilitas medis yang lengkap dan terkini untuk memberikan pelayanan terpadu bagi perawatan kesehatan Anda.</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Perancangan dimulai pada tahun 2011 di atas lahan seluas 25.000&nbsp;m&sup2;, pembangunan dilakukan dalam 4 tahap, pada tiap pengembangan didasari oleh pertumbuhan pasar dan kebutuhan layanan, diarahkan vertikal dengan ketinggian maksimal 5 lantai. Akses masuk menuju ruang klinik diarahkan jelas dan terarah. Hal tersebut bertujuan untuk mengoptimalkan pemanfaatan lahan sebagai ruang terbuka hijau, guna mewujudkan akses pengunjung yang terkontrol, optimalisasi, dan multifungsi. Penggunaan dinding kaca diharapkan dapat&nbsp;memberikan Peluang untuk semua kamar atau ruang yang dapat dihuni untuk memiliki cahaya alami dan pemandangan ke luar.</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Melalui perancangan ini diharapkan dapat mewujudkan kenyamanan bagi pasien dan pengguna lainnya sehingga menjadikan Rumah Sakit Pertamina Sentul City sebagai yang terdepan.&nbsp;</span></span></span></span></p>\n\n<p>&nbsp;</p>\n\n\n', 'RS EMC SentulDJI_0261a.jpg', '2023-07-04 21:07:16', '2023-07-11 07:23:39', 'Sentul, Bogor', 2011, 2011, 'rs-emc-pertamina-sentul-city', '-6.567104368486238, 106.85374547015135', '-', 1, 0, 1),
(18, 'Rumah Sakit Bethesda', 'Perancangan dimulai tahun 2004 diatas lahan seluas 61. 373 m². Pengembangan direncanakan dalam 6 tahap berdasarkan skala prioritas dan nilai investasi. ', '<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Rumah Sakit Bethesda merupakan rumah sakit yang memberikan pelayanan kesehatan di Yogyakarta dengan menyediakan sarana dan prasarana dalam mewujudkan pelayanan kesehatan yang terjangkau, memuaskan pengguna dan diharapkan mampu berkembang dengan baik.</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Perancangan dimulai tahun 2004 diatas lahan seluas 61. 373&nbsp;m&sup2;. Pengembangan direncanakan dalam 6 tahap berdasarkan skala prioritas dan nilai investasi. Mengatasi kondisi yang cukup ramai, maka pengembangan memperhatikan aspek kemudahan dalam pembangunan sehingga tidak mengganggu operasional layanan. Optimalisasi ruang, sirkulasi, fungsi dan keindahan estetika bangunan merupakan fokus utama dalam penyusunan masterplan.</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Peningkatan fisik rumah sakit tidak terbatas pada kebutuhan ruang yang harus dipenuhi saja. Kebutuhan akan estetika yang baik juga didukung dengan perencanaan interior yang baik. Desain interior RS Bethesda dibuat dengan harapan mampu meningkatkan suasana kekeluargaan dan memberikan suasana sehat.</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Dengan konsep perancangan masterplan di atas diharapkan dapat mencapai rumah sakit dengan akreditasi berskala internasional dan mampu meningkatkan mutu pelayanan maupun kualitas layanan dari RS Bethesda.</span></span></span></span></p>\n\n<p>&nbsp;</p>\n', 'RS_Bethesda2DJI_0183.jpg', '2023-07-04 21:07:16', '2023-07-11 07:23:39', 'Yogyakarta', 2010, 2010, 'rumah-sakit-bethesda', '-7.795395036315829, 110.37294942184636', '-', 0, 0, 1),
(19, 'RS Bandung Eye Center', 'Rumah Sakit Mata Bandung Eye Center adalah rumah sakit khusus mata yang terletak di kawasan Buah Batu, Kota Bandung.', '<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Rumah Sakit Mata Bandung Eye Center adalah rumah sakit khusus mata yang terletak di kawasan Buah Batu, Kota Bandung. Beberapa layanan medis yang diberikan diantaranya yaitu LASIK, operasi kelopak mata, penanganan penyakit katarak, penanganan mata juling, dan penyakit glaukoma.&nbsp;</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Perancangan dimulai pada tahun 2014 diatas lahan 1440&nbsp;m&sup2;. Perancangan diarahkan vertikal setinggi 5 lantai untuk mengoptimalisasi lahan. Materal dinding kaca menjadi fokus pecahayaan pasien atau pengunjung untuk mendapatkan cahaya sinar matahari secara langsung dan bertujuan dapat menghemat energi listrik. Tampak di beberapa sisi juga diberikan taman lanskap yang diharapkan dapat memberikan suasana yang asri dan sejuk. Untuk pembagian ruangan, lantai 1 terdiri dari 2 klinik, ruang diagnostik, optik, apotek, YAG Laser, USG, dan perimetri humprey. lantai 2 terdiri dari 14 klinik dan kafetaria. lantai 3 terdiri dari ruang rawat inap 6 Bed, medical record, dan kantor.&nbsp;</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Dengan perancangan seperti di atas, diharapkan RS Bandung Eye Center dapat memberikan pelayanan kesehatan mata yang cukup memadai bagi masyarakat khususnya kota Bandung.</span></span></span></span></p>\n\n<p>&nbsp;</p>\n', 'BEC_DSC0894.jpg', '2023-07-04 21:07:16', '2023-07-11 07:23:39', 'Bandung', 2014, 2014, 'rs-bandung-eye-center', '-6.9375404814715935, 107.62378681223144', '-', 0, 1, 1),
(20, 'RS Palang Biru Gombong', 'Rumah Sakit Palang Biru Gombong merupakan layanan kesehatan di Kota Kebumen yang diharapkan dapat mewujudkan peningkatan pelayanan yang memadai.', '<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Rumah Sakit Palang Biru Gombong merupakan layanan kesehatan di Kota Kebumen yang diharapkan dapat mewujudkan peningkatan pelayanan yang memadai.</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Dibangun di atas tanah seluas 9.722 m&sup2; serta luas bangunan 9.962 m&sup2;, proses perancangan desain Rumah Sakit Palang Biru difokuskan pada optimalisasi lahan dengan perancangan bangunan vertikal setinggi 4 lantai. Dalam memberikan kesan yang asri, sekeliling bangunan diberikan ruang terbuka hijau, pohon peneduh, pohon pengarah, rumput penutup tanah, serta furniture landscape. Persawahan yang mengelilingi rumah sakit menjadi salah satu oase bagi setiap pasien sehingga memberikan pengalaman dan harapan cepat sembuh bagi setiap pasiennya.</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Dengan konsep perancangan landscape hijau, Rumah Sakit Palang Biru Gombong diharapkan dapat memberikan suasana hijau yang nyaman dan penyembuhan menjadi lebih baik.</span></span></span></span></p>\n\n<p>&nbsp;</p>\n', 'RS Palang Biru Gombong_0003-HDR-2.jpg', '2023-07-04 21:07:16', '2023-07-11 07:23:39', 'Kebumen, Jawa Tengah', 2015, 2015, 'rs-palang-biru-gombong', '-7.608189964743451, 109.53205758491052', '-', 0, 1, 1),
(21, 'Rumah Sakit Kariadi', 'Perancangan Rumah Sakit Dr. Kariadi ini merupakan penambahan dari sarana yang sudah ada. ', '<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Rumah Sakit Umum Pusat Dr. Kariadi merupakan rumah sakit yang memberikan fasilitas kesehatan yang diharapkan memberikan pelayanan kesehatan yang terpadu bagi masyarakat khususnya Kota Semarang dan merupakan RSUP Tipe A dengan rujukan nasional sekaligus rumah sakit pendidikan utama.</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Perancangan Rumah Sakit Dr. Kariadi ini merupakan penambahan dari sarana yang sudah ada. Hal ini ditujukan untuk meningkatkan kapasitas dan pelayanan bagi masyarakat di Kota Semarang. Gedung ini mewadahi beberapa layanan, antara lain rawat jalan dan inap, area servis, fasilitas penunjang dan umum, kamar bedah dan bersalin, serta instalasi gawat darurat. Dengan kebutuhan ruang yang cukup banyak, maka diperlukan struktur fisik bangunan memadai. Penggunaan sun shading selain ditujukan sebagai penghalang sinar matahari berlebihan, juga sebagai nilai tambah pada estetika tampak luar bangunan sehingga lebih terkesan modern dan dinamis.</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Perancangan arsitektur di Rumah Sakit Dr. Kariadi Semarang dimulai pada tahun 2011 yang difokuskan untuk memberikan respon kerja otak dan sensor terhadap perubahan tata ruang, pengaturan warna, pencahayaan, perbaikan tanda dan lainnya secara baik untuk membantu proses perawatan dan penyembuhan pasien.&nbsp;</span></span></span></span></p>\n\n<p style=\"text-align:start\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-family:Arial,sans-serif\">Penambahan dan perbaikan fisik bangunan merupakan wujud peningkatan kesan bangunan melalui arsitektural, hal tersebut bertujuan agar tidak berakibat ke penurunan performansi fisik.</span></span></span></span></p>\n\n<p>&nbsp;</p>\n', 'RS Kariadi Pav Garuda2_DSC0076-Pano.jpg', '2023-07-04 21:07:16', '2023-07-11 07:23:39', 'Semarang, Jawa Tengah', 2011, 2011, 'rumah-sakit-kariadi', '-6.993972197562718, 110.40744142025915', '-', 0, 1, 1),
(22, 'Rumah Sakit Islam Klaten\r\n', 'RS Islam Klaten merupakan rumah sakit yang awal pendiriannya pada tahun 1981 bernama Balai Pengobatan (BP) yang berlokasi di lantai dasar masjid Raya Klaten.', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">RS Islam Klaten merupakan&nbsp;rumah sakit yang awal pendiriannya pada tahun 1981 bernama Balai Pengobatan (BP) yang berlokasi di lantai dasar masjid Raya Klaten. Setelah berkembang, muncul ide dari pengurus Yayasan Jamaah Haji Klaten untuk mendirikan sebuah rumah sakit karena pada waktu itu belum terdapat RS. Swasta Islam yang diharapkan dapat memberikan fasilitas layanan kesehatan yang islami, unggul, dalam pelayanan dan teknologi di Kota Klaten.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Bangunan dirancang setinggi 3 lantai di atas lahan 41.078 m&sup2;. Konsep perancangan bangunan diarahkan pada pengaturan fungsi dan zonasi . Ruang-ruang yang berkaitan direncanakan pada satu zona sehingga memudahkan dalam pemberian pelayanan. Tampak di sekitar bangunan dibuat lanskap taman sehingga memberikan suasana yang sejuk dan sehingga diharapkan mempercepat kesembuhan pasien.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">RS Islam Klaten merupakan salah satu bentuk ibadah, kebaikan, dan integritas sebuah yayasan islam di Kota Klaten untuk berkontribusi menyelenggarakan fasilitas kesehatan yang ramah, amanah, profesional dan islami.&nbsp;</span></span></span></p>\r\n\r\n<p><br />\r\n<br />\r\n&nbsp;</p>\r\n', 'RSI_Klaten_DJI_0182.jpg', '2023-07-04 21:07:16', '2023-07-11 07:23:39', 'Klaten, Jawa Tengah', 2015, 2015, 'rumah-sakit-islam-klaten', '-7.681025481499944, 110.63451103567336', '-', 0, 0, 1),
(23, 'RS Mardi Rahayu Kudus\r\n', 'Rumah sakit Mardi Rahayu adalah rumah sakit umum milik swasta dan merupakan salah satu rumah sakit tipe B yang terletak di wilayah Kudus, Jawa Tengah.\r\n', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Rumah sakit Mardi Rahayu adalah rumah sakit umum milik swasta dan merupakan salah satu rumah sakit tipe B yang terletak di wilayah Kudus, Jawa Tengah.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Strategi pengembangan rumah sakit Mardi Rahayu difokuskan pada peningkatan pelayanan citra dan pendapatan. Dalam mewujudkan fokus pengembangan tersebut, maka pembangunan fisik direncanakan melalui 5 tahap.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Perancangan dimulai pada tahun 2010. Tahap 1 meliputi pembangunan gedung medik sentral setinggi 3 lantai yang terdapat ruang VK, perinatologi, ICU, ICCU, OK, CSSD. Tahap 2 sebagai pembangunan gedung asrama setinggi 3 lantai dan area parkir semi basement. sementara tahap 3 akan dilakukan pemindahan untuk IPSRS, Mushola, dan kamar jenazah ke gedung EVA. Tahap 4 merupakan penataan zona servis meliputi laundry, gizi, dan bengkel di area instalasi gizi. Terakhir, tahap 5 sebagai pembangunan gedung komersial setingi 3 lantai dan semi basement untuk area parkir dan ME.&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Konsep interior yang dinamis dan ramah ditampilkan dalam mewujudkan kenyamanan dan rasa tenang bagi pasien maupun keluarga pasien sehingga memberikan suasana penyembuhan yang baik. Lanskap taman dihadirkan disekeliling bangunan untuk memberikan kesan yang asri.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Perancangan Rumah Sakit Mardi Rahayu Kudus dengan beberapa tahap diharapkan dapat mewujudkan tuntutan masyarakat akan hadirnya fasilitas kesehatan yang memadai dan berkualitas kepada penggunannya.</span></span></span></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', 'RS Mardi Rahayu Kudus_DSC0767.jpg', '2023-07-04 21:07:16', '2023-07-11 07:23:39', 'Kudus, Jawa Tengah', 2016, 2016, 'rs-mardi-rahayu-kudus\r\n', '-6.829632144226986, 110.83115083673023', '-', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_image`
--

CREATE TABLE `project_image` (
  `id_pi` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_image`
--

INSERT INTO `project_image` (`id_pi`, `image`, `id_project`) VALUES
(1, 'RS EMC Sentul_DSC0002-HDR.jpg', 17),
(2, 'RS EMC Sentul_DSC0118.jpg', 17),
(3, 'RS EMC Sentul_DSC0441-HDR.jpg', 17),
(4, 'RS EMC Sentul_DSC0255-HDR.jpg', 17),
(5, 'RS EMC Sentul_DSC0150.jpg', 17),
(6, 'BEC_DSC0086-HDR.jpg', 19),
(7, 'BEC_DSC0550.jpg', 19),
(8, 'BEC_DSC0613.jpg', 19),
(9, 'BEC_DSC0768.jpg', 19),
(10, 'RS Kariadi Pav Garuda2_DSC0074.jpg', 21),
(11, 'RS Kariadi Pav Garuda2_DSC0076-Pano.jpg', 21),
(12, 'RS Kariadi Pav Garuda2_DSC0446.jpg', 21),
(13, 'RS Kariadi Pav Garuda2_DSC0165.jpg', 21),
(14, 'RS Kariadi Pav Garuda2_DSC0107.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Editor', 'editor', NULL, NULL),
(3, 'User', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`, `nama`) VALUES
(4, 'destyseptyana.ds@gmail.com', '2023-07-02 23:21:05', '2023-07-02 23:21:05', 'cek'),
(5, 'destyseptyana.dk@gmail.com', '2023-07-06 18:57:06', '2023-07-06 18:57:06', 'cek'),
(6, 'destyseptyanaa.ds@gmail.com', '2023-07-06 18:59:33', '2023-07-06 18:59:33', 'cek2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(5, 'admin', 'marcomm.grs@gmail.com', NULL, '$2y$10$oXualqt6oRRv/Yr5ulxXUOB5tK8CXKAraG5q1gPXypFOne4r5YTPK', NULL, '2023-06-19 21:51:33', '2023-06-19 21:51:33', 1),
(9, 'admin', 'admin@globalrancangselaras.com', NULL, '$2y$10$oXualqt6oRRv/Yr5ulxXUOB5tK8CXKAraG5q1gPXypFOne4r5YTPK', NULL, '2023-06-20 01:20:41', '2023-06-20 01:20:41', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categori_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`pc_id`),
  ADD KEY `post_categori_id` (`post_id`),
  ADD KEY `categories_categori_id` (`categori_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_image`
--
ALTER TABLE `project_image`
  ADD PRIMARY KEY (`id_pi`),
  ADD KEY `project_image_ibfk_1` (`id_project`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `roles_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `project_image`
--
ALTER TABLE `project_image`
  MODIFY `id_pi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD CONSTRAINT `categories_categori_id` FOREIGN KEY (`categori_id`) REFERENCES `categories` (`categori_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_categori_id` FOREIGN KEY (`post_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_image`
--
ALTER TABLE `project_image`
  ADD CONSTRAINT `project_image_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
