-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2022 at 03:37 AM
-- Server version: 10.3.34-MariaDB-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafejips_thcsmd`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fbLink` longtext NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message_cancel`
--

CREATE TABLE `message_cancel` (
  `id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_cancel`
--

INSERT INTO `message_cancel` (`id`, `message`, `time`) VALUES
(29, 'cho em há»i anh Ä‘Ã¬nh thá»‹nh 8/3 gÃ¬ Ä‘Ã³ cÃ³ ng yÃªu ch dáº¡', '2022-04-26 09:45:38'),
(30, 'vy 6/2 cko mÃ¬nh lquen nhaa =)) báº¡n xinh quÃ¡', '2022-04-28 19:25:40'),
(31, 'Xin phá»‘t Báº¡n ThÆ° 6/2 \r\nÄÃ£ xáº¥u ngÆ°á»i cÃ²n xáº¥u náº¿t\r\nLá»›p trÆ°á»Ÿng mÃ  k ra lá»›p trÆ°á»Ÿng!!!\r\nChá»§ biáº¿t báº¯t náº¡t báº¡n lÃ  giá»i!!!!', '2022-05-01 06:49:54'),
(32, 'b lÃªn cfs phá»‘t mÃ¬nh nÃªn coi láº¡i ai báº¯t náº¡t ai nhÃ© ðŸ«¶ðŸ»! ', '2022-05-01 10:23:40'),
(33, 'b lÃªn cfs phá»‘t mÃ¬nh nÃªn coi láº¡i ai báº¯t náº¡t ai nhÃ© ðŸ«¶ðŸ»! ', '2022-05-01 10:23:41'),
(34, 'thÆ° 6/2 ngÃ´ng quÃ¡ nha', '2022-05-01 10:23:42'),
(35, 'báº¡n Vy 6/2 chuyÃªn Ä‘i báº¯t náº¡t ng khÃ¡c , mÃ  lÃªn cfs phá»‘t ngta !!', '2022-05-01 10:23:44'),
(36, 'mhy dg crush hquy in4 : Ebee Hyy', '2022-05-02 07:09:26'),
(37, 'Xin phá»‘t Báº¡n ThÆ° 6/2 \r\nÄÃ£ xáº¥u ngÆ°á»i cÃ²n xáº¥u náº¿t\r\nLá»›p trÆ°á»Ÿng mÃ  k ra lá»›p trÆ°á»Ÿng!!!\r\nChá»§ biáº¿t báº¯t náº¡t báº¡n lÃ  giá»i!!!!', '2022-05-02 07:09:38'),
(38, 'cÃ³ ai Ä‘u BL ThÃ¡i dá»›i em khum<3', '2022-05-04 08:59:42'),
(39, 'khÃ´ng ai care máº¥y bÃ© sao Ä‘á» canh cá»•ng Ä‘Ã¢u máº¥y bÃ© Æ¡i, Ä‘á»ƒ in4 chi z =))))', '2022-05-05 09:43:08'),
(40, 'Xin in4 NTN dá»›i trÆ°á»ng thcs phÆ°á»›c háº£i Ä‘i ', '2022-05-05 09:45:00'),
(41, 'bá»›t nhÃ¬n bá»“ ngta láº¡i dÃ¹m', '2022-05-05 18:02:03'),
(42, 'thÆ° 62 bá»›t cháº£nh Ä‘i nha em', '2022-05-05 18:02:56'),
(43, 'Cáº­y kÃ©t máº¯ náº¡p fi fai:33', '2022-05-07 05:43:40'),
(44, 'Gá»­i anh BÃ¬nh 9/3 em mÃª anh cá»±c, em Ä‘Ã£ gá»­i lá»i má»i kb vá»›i anh Ä‘áº¿n bÃ¢y giá» Ä‘c 15 ngÃ y rÃ²ii chÆ°a cháº¥p nháº­n , anh mÃ  tháº¥y cÃ¡i nÃ y cháº¥p nháº­n kb Ä‘i áº¡:)))', '2022-05-07 06:57:04'),
(45, 'PhÃ²ng Æ¡i phÃ²ng thÃ¢m láº¯m phÃ²ng Ã¡c láº¯m:((', '2022-05-07 10:12:34'),
(47, 'mÃ¬nh muá»‘n nÃ³i lÃ  báº¡n lá»›p trÆ°á»Ÿng lá»›p 8/3 giáº£m cÃ¢n Ä‘i nhaaa ðŸ˜¿', '2022-05-07 18:25:29'),
(48, 'm.n cÃ³ biáº¿t 7/2 ai cháº£nh nháº¥t khÃ´ng áº¡ðŸ˜¢', '2022-05-08 08:17:48'),
(49, 'Ngá»c huyá»n lá»›p 7/2 xinh váº­y=))', '2022-05-08 10:14:02'),
(50, '#hethon', '2022-05-08 10:14:05'),
(51, 'MÃ¬nh lÃ  trÃ¹m lq Ä‘Ã¢y áº¡', '2022-05-08 10:25:32'),
(52, 'Xin in4 Tráº§n TrÆ°Æ¡ng Kim NgÃ¢n lá»›p 6 vá»›i ', '2022-05-08 10:27:07'),
(59, 'Hok cÃ³ tÃ¢m sá»± ', '2022-05-08 18:03:11'),
(60, 'minh thÆ°, phÆ°Æ¡ng thuá»·, nhÆ° quyÃªn, há»“ng yáº¿n Ä‘á»«ng cÃ³ nhÃ¢y nhÃ¢y vá»›i tao ðŸ˜', '2022-05-09 09:50:44'),
(61, 'phÃ²nggggg 7', '2022-05-09 10:56:46'),
(62, 'Ai thi p7 cho iem lÃ m quen vá»›i áº¡:>', '2022-05-09 12:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `message_checked`
--

CREATE TABLE `message_checked` (
  `id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_checked`
--

INSERT INTO `message_checked` (`id`, `message`, `time`) VALUES
(27, 'Cho mÃ¬nh xin in4 máº¥y ank Ä‘z háº¿t trÆ°á»ng nÃ yyy mÃ¬nh bÃªn phðŸ˜‚', '2022-04-09 06:18:54'),
(28, 'cáº§n 1 anh nÃ o Ä‘Ã³ kÃ¨m hÃ³a áº¡ ', '2022-04-12 00:48:08'),
(29, 'xin in4 máº¥y a Ä‘áº¹p trai áº¡=)))))', '2022-04-16 05:03:36'),
(30, 'MÃ¬nh xin in4 báº¡n phi hÃ¹ng 9/4 vá»›i áº¡ ', '2022-04-25 09:23:45'),
(31, 'ChÃºc cÃ¡c báº¡n k7 trÆ°á»ng mÃ¬nh thi tá»‘t nhen Ä‘á»— cáº¥p 3 nhooo', '2022-04-25 09:23:47'),
(32, 'Cáº§n báº¡n nÃ o ráº£nh kÃ¨m giÃºp mÃ¬nh mÃ´n tiáº¿ng anh vá»›i áº¡ lá»›p 9 nheðŸ˜”', '2022-04-25 09:23:51'),
(33, 'cho em há»i anh Ä‘Ã¬nh thá»‹nh 8/3 gÃ¬ Ä‘Ã³ cÃ³ ng yÃªu ch dáº¡', '2022-04-26 09:44:43'),
(34, 'xin in4 ntmg zk cá»§a hgt áº¡', '2022-04-26 20:20:00'),
(35, 'thá»­ thÃ¡ch 6 ngÃ y 6 Ä‘Ãªm ko há»c bÃ i cá»§a sá» mai.gÃ©t gÃ´', '2022-04-26 20:20:52'),
(36, 'thá»­ thÃ¡ch 6 ngÃ y 6 Ä‘Ãªm khÃ´ng há»c bÃ i tiáº¿ng anh cá»§a tomorrow gÃ©t gÃ´', '2022-04-27 03:32:36'),
(37, '9/4 cÃ³ ai xinh hong áº¡, cho em xin in4', '2022-04-27 04:06:35'),
(38, 'Thá»­ thÃ¡ch 6 ngÃ y 6 Ä‘im khÃ´ng há»c bÃ i Ä‘á»ƒ thi, dÃ¹ cho nÆ°á»›c cÃ³ Ä‘áº¿n Ä‘áº§u cÃ´ cÃ³ máº¯ng máº¹ cÃ³ Ä‘uá»•i ra khá»i nhÃ  cÅ©ng khÃ´ng há»c, gÃ©t gÃ´ ', '2022-04-28 02:26:27'),
(39, '@@ xin in4 máº¥y a deptr trÆ°á»ng mÃ¬nh=))))))))', '2022-04-28 19:26:56'),
(40, 'Vy 6/2 b xinh Ä‘áº¹p Æ¡i cho mÃ¬nh lquen dc k áº¡aa=)', '2022-04-28 19:27:04'),
(41, 'ChÃ o táº¥t cáº£ cÃ¡c ae 9/2 \r\nT lÃ  ngÆ°á»i dáº¥u máº·t xin thÆ°a \r\n1 báº¡n nÃ o Ä‘Ã³ á»Ÿ 9/2 cÃ³ cÃ¡i náº¿t láº¡ lÃ¡m, cá»© thÃ­ch dÃ¹ng tone giá»ng ra lá»‡nh hay tráº£ treo nÃ³i chuyá»‡n vá»›i tháº§y cÃ´, cÃ²n bÃ´ bÃ´ cÃ¡i má»“m lÃ m cÃ¡i gÃ¬ cÅ©ng nhÆ° bÃ  hoÃ ng, chÃºa xáº¡o lon=) cháº£ ra cÃ¡i Ä‘inh gÃ¬ cá»© thÃ­ch ra lá»‡nh cÃ¡ch nÃ³i máº¥t náº¿t deo ra thá»ƒ thá»‘ng gÃ¬ cÅ©ng ngang báº±ng báº¡n bÃ¨ thÃ´i mÃ  cá»© pháº£i t nÃ³i lÃ  nghe khÃ´ng nghe bá»‹ chá»­i:)) clm há» hÆ°á»›i hÃ i cá»‘t váº£i dÃ¢u máº­n kkkkkk\r\n', '2022-04-29 22:43:30'),
(42, 'Gáº·p TrÆ°Æ¡ng Táº¥n Äáº¡t á»Ÿ Ä‘Ã¢u lÃ  lá»¥i á»Ÿ Ä‘Ã³', '2022-04-30 07:03:13'),
(43, 'trÆ°Æ¡ng táº¥n Ä‘áº¡t bá»›t Ä‘i soi má»‘i Ä‘i', '2022-04-30 20:47:02'),
(44, 'Ngá»§ nhÃ  báº¡n nhÃ¢n dá»‹p lá»…:)) giá» bá»‹ dÃ¬ biáº¿t ,dÃ¬ Ä‘Ã²i mÃ©c máº¹ thÃ¬ nÃªn lÃ m sao má»i nguoiwfiðŸ˜¿', '2022-05-01 03:36:04'),
(46, 'khá»‘i 8 cÃ³ anh chá»‹ nÃ o chuyÃªn toÃ¡n khÃ´ng áº¡', '2022-05-04 08:59:38'),
(47, 'cÃ³ ai Ä‘u BL ThÃ¡i dá»›i em khum<3', '2022-05-04 08:59:41'),
(48, 'Pháº£i nÃ³i lÃ : in4 sao Ä‘á» máº·c Ã¡o 7zia : Ebee Hyy=)))', '2022-05-04 09:00:03'),
(49, 'Lá»›p 6a2 nhÃ¬u páº¡n Ä‘áº¹p chaii láº¯m=33 *nháº¥t lÃ  hy', '2022-05-05 09:41:41'),
(50, 'Páº¡n tÃ¢m Ä‘á»«ng má»Ÿ khá»• trang raa Ä‘c k 1 láº§n mÃ  páº¡n má»Ÿ raa lÃ  mÃ¬nh cá»«i háº¿t tiáº¿t=))', '2022-05-05 09:44:47'),
(51, 'Báº¡n sao Ä‘á» Ã¡o 7zia depzai wa:33', '2022-05-05 18:01:34'),
(52, 'MÃ¡y bÃ© 6/3 giá»¯ kÃ­nh ngá»¯ vá»›i nhá»¯ng anh chá»‹ lá»›n tuá»•i hÆ¡n dÃ¹m. BÃ© nÃ o Ä‘Ã³ lá»›p 6/3 lÃ  nam trog nhÃ³m mÃºa hay liáº¿c ngta quÃ¡ ha rá»“i tá»± nhiÃªn qua Ä‘Ã¡nh ngta váº­y Ä‘Ã³ rá»“i nÃ³i ko lÃ m gÃ¬ =))???', '2022-05-07 05:41:16'),
(53, 'bÃ© hy sao Ä‘á» gÃ¬ Æ¡i, cháº£ ai muá»‘n xin in4 bÃ© Ä‘Ã¢u, cÅ©ng cháº£ ai quen tÃ¢m bÃ© máº·c Ã¡o khoÃ¡c gÃ¬ cáº£ nÃªn Ä‘á»«ng cÃ³ lÃªn cfs tá»± luyáº¿n ná»¯a nhÃ©! quÃª dÃ¹m ', '2022-05-07 05:43:49'),
(54, 'Gá»­i anh BÃ¬nh 9/3 em mÃª anh cá»±c, em Ä‘Ã£ gá»­i kb vá»›i anh Ä‘áº¿n bÃ¢y giá» Ä‘c 15 ngÃ y rÃ²ii nhma anh chÆ°a cháº¥p nháº­n , anh mÃ  tháº¥y cÃ¡i nÃ y thÃ¬ xin anh cháº¥p nháº­n Ä‘iðŸ˜¡ðŸ’ž', '2022-05-07 06:57:08'),
(55, 'tiáº¿ng anh trÃªn 3Ä‘ tuá»™t quáº§n lá»›p trÆ°á»Ÿng 9/3', '2022-05-07 10:12:04'),
(56, 'MÃ¬nh cÃ³ like page nÃ y vÃ  1 page cá»§a trÆ°á»ng mÃ¬nh ná»¯a vÃ  hÃ¬nh nhÆ° page Ä‘Ã³ die r thÃ¬ pháº£i????', '2022-05-07 10:12:30'),
(57, 'rÃµ rÃ ng nhÃ¬n vÃ o lÃ  biáº¿t tá»± Ä‘Äƒng cÃ²n bÃªnh ngang Ä‘Æ°á»£c hay z =))))', '2022-05-07 10:14:27'),
(58, 'PhÃ²ng Æ¡i lÃ m quÃ¡ nÃ³ Ã´ dá» sao ná»¡ lÃ²ng nÃ o cho lá»›p em 4 tiáº¿t khoai má»¡ váº­y áº¡ em Ä‘á»§ má»‡t rÃ¹i em muá»‘n ngá»§', '2022-05-07 10:14:37'),
(59, 'xin phÃ©p hÃ¡t 1 cÃ¢u xua tan cÄƒng tháº³ng trÆ°á»›c kÃ¬ thi cho máº¥y pÃ© iu ðŸ˜˜\r\nkÃ¬ yÃ´ mÃ¬ kÃ¬ kÃ¬ kÃ¬ yÃ´ mi', '2022-05-07 11:23:04'),
(60, 'tháº±ng gia bÃ¬nh gÃ¬ Ä‘Ã³ bá»“ tt9/2 háº£?', '2022-05-07 12:11:04'),
(61, 'tt 9/2 sao khÃ³ cua záº­y', '2022-05-07 12:11:19'),
(62, 'mÃª tt9/2 quÃ¡ ta', '2022-05-07 12:11:21'),
(63, 'bá»›t Ä‘i cÃ¡i tÆ°á»›ng Ä‘áº¡i ca dÃ¹m cÃ¡i nha báº¡n 8/3 :))', '2022-05-07 18:35:38'),
(64, 'Xin in4 trai aline trÆ°á»ng mÃ¬nh :))\r\n', '2022-05-08 00:03:19'),
(65, 'Xin in4 báº¡n NTNH 7/2 vá»›i áº¡ðŸ¥²', '2022-05-08 00:03:26'),
(66, 'VÄƒn 10â‚« láº¯c Ä‘uÃ½t trÆ°á»›c máº·t cr ðŸ‘ï¸ðŸ‘„ðŸ‘ï¸ ðŸ¤¡', '2022-05-08 00:03:29'),
(67, 'Há»“ng Äáº¹p LÃ  Há»“ng CÃ³ Gai\r\nGÃ¡i Äáº¹p LÃ  GÃ¡i CÃ³ Gai Giá»‘ng Há»“ng\r\nhastag:caygaisiudai2xcm', '2022-05-08 08:17:59'),
(68, 'Ngá»c huyá»n 7/2 cÃ³ ngiu chÆ°a áº¡=))))', '2022-05-08 10:13:53'),
(69, 'gÃi má»™T CoN tRÃ´Ng mÃ’n coN máº®t gÃi má»˜t máº¯T Háº¿T Há»’n chÆ¯a Con\r\n#hethon', '2022-05-08 10:14:07'),
(70, 'ðŸ¤¬kÃ¨m tiáº¿ng Anh cho tÃ´i Ä‘i', '2022-05-08 10:26:57'),
(71, 'Xin in4 bn máº·t hoodie sadboiz xÃ¡m Ä‘i', '2022-05-08 10:29:24'),
(72, 'Xin in4 Tráº§n TrÆ°Æ¡ng Kim NgÃ¢n lá»›p 6 vá»›i ', '2022-05-08 10:29:26'),
(73, 'MÃ¬nh lÃ  trÃ¹m lq Ä‘Ã¢y áº¡', '2022-05-08 10:29:33'),
(74, 'K biáº¿t bÃ© BÃ­ch VÃ¢n lá»›p 6/3 cÃ³ ngÆ°á»i yÃªu chÆ°a áº¡? ChÆ°a cÃ³ thÃ¬ cho em xin in4 vá»›i áº¡ ', '2022-05-08 18:03:04'),
(75, 'xin in4 c máº·c Ã¡o khoÃ¡c má»—i ngÃ y 1 cÃ¡i', '2022-05-08 18:03:22'),
(76, 'Cho há»i ngá»c huyá»n 7/2 Äƒn gÃ¬ mÃ  xinh quÃ¡ váº­yðŸ˜³', '2022-05-09 02:33:32'),
(77, 'XN 7a3 cÃ³ ny chx áº¡,cao quÃ¡=))', '2022-05-09 02:35:55'),
(78, 'rÆ°á»£t nhao, rá»p báº», zui záº» gÃ²y thi rá»›t nha con', '2022-05-09 09:50:52'),
(79, 'Cho há»i anh HoÃ ng Quy lá»›p 8/2 cÃ³ ngiu chx áº¡?', '2022-05-09 09:51:46'),
(80, 'Ai phÃ²ng 1 cho em lÃ m quen vá»›i áº¡a ðŸ˜', '2022-05-09 09:51:54'),
(81, 'cho há»i chá»¯ T thi phÃ²ng máº¥y dá»‹ :v', '2022-05-09 10:56:42'),
(82, 'Báº¡n máº·c Ã¡o khoÃ¡c Nike mÃ u Ä‘en lá»›p 6l4 cho mÃ¬nh xin in4 vá»›i áº¡?><', '2022-05-09 11:03:23'),
(83, 'Ai thi p7 cho iem lÃ m quen vá»›i áº¡:>', '2022-05-09 12:03:55'),
(84, 'Ai thi  phÃ²ng  4 cho  mÃ¬nh  lÃ m  quen ', '2022-05-09 18:30:27'),
(85, 'Ai Ä‘á»c bÃ i nÃ y thÃ¬â€¦\r\nChÃºc cÃ¡c báº¡n thi tá»‘t nhÃ©ðŸ€ðŸ€', '2022-05-10 01:04:04'),
(86, '', '2022-05-10 01:04:04'),
(87, '', '2022-05-10 01:04:05'),
(88, '', '2022-05-10 01:04:05'),
(89, 'TrÆ°Æ¡ng Táº¥n Äáº¡t ÄÃ¬nh Thá»‹nh Ä‘á»«ng cÃ³ bathegang nha!\r\n', '2022-05-10 01:04:07'),
(90, 'cho mÃ¬nh xin in4 anh TKiá»‡t 8/2 vá»›i áº¡', '2022-05-10 01:04:09'),
(91, 'CÃ³ báº¡n nÃ o thi phÃ²ng 9 ko áº¡ ,cho lÃ m quen Ä‘á»ƒ Ä‘á»¡ bá»¡ ngá»¡ iiii :(((((((', '2022-05-10 01:04:10'),
(92, 'LÃ½ thuyáº¿t cá»§a chá»‹ nÃ o Ä‘Ã³ 9/3 mua ly nÆ°á»›c ngá»t sÃ¡ng h váº«n cÃ²n Ä‘áº§y Ä‘Ã¡ ðŸ¥²ðŸ¤Œ', '2022-05-10 02:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_cancel`
--
ALTER TABLE `message_cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_checked`
--
ALTER TABLE `message_checked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `message_cancel`
--
ALTER TABLE `message_cancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `message_checked`
--
ALTER TABLE `message_checked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
