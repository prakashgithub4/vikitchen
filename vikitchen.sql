-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 06:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vikitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_us_id` int(11) NOT NULL,
  `tittle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_id`, `tittle`, `content`, `image`) VALUES
(2, 'About us', '<p style=\"box-sizing: border-box; margin: 0px; color: #656565; font-family: \'Open Sans\', sans-serif; font-size: 14px; font-weight: 400;\">Lxorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p style=\"box-sizing: border-box; margin: 5px 0px 0px; color: #656565; font-family: \'Open Sans\', sans-serif; font-size: 14px; font-weight: 400;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p style=\"box-sizing: border-box; margin: 5px 0px 0px; color: #656565; font-family: \'Open Sans\', sans-serif; font-size: 14px; font-weight: 400;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '1595239347.jpg'),
(3, 'faq', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>FAQIpsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', ''),
(4, 'Company Policy', '<h3>GENERAL</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h3>ACCEPTANCE OF TERMS AND CONDITIONS</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h3>MODIFICATION</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h3>PROHIBITIONS</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', ''),
(5, 'Shipping Policy', '<h1>&nbsp;</h1>\r\n\r\n<h3>GENERAL</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h3>ACCEPTANCE OF TERMS AND CONDITIONS</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h3>MODIFICATION</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h3>PROHIBITIONS</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', ''),
(6, 'Privacy Policy', '<h3>GENERAL</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h3>ACCEPTANCE OF TERMS AND CONDITIONS</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h3>MODIFICATION</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h3>PROHIBITIONS</h3>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `blog_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `image`, `title`, `description`, `blog_date`) VALUES
(8, '14566040_Banarasi_sari.jpg', 'Banarasi Sari', '<p style=\"text-align: justify;\">A Banarasi saree is a saree made in Varanasi, a city which is also called Benares or Banaras. The sarees are among the finest sarees in India and are known for their gold and silver brocade or zari, fine silk and opulent embroidery. The sarees are made of finely woven silk and are decorated with intricate design, and, because of these engravings, are relatively heavy.<br /><br />Their special characteristics are Mughal inspired designs such as intricate intertwining floral and foliate motifs, kalga and bel, a string of upright leaves called jhallar at the outer, edge of border is a characteristic of these sarees. Other features are gold work, compact weaving, figures with small details, metallic visual effects, pallus, jal (a net like pattern), and mina work.</p>', '2018-11-15'),
(9, '77694702_Kurti_top.jpg', 'Kurti Top', '<p style=\"text-align: justify;\">In modern usage, a short kurta is referred to as the kurti,which is the attire of females. However, traditionally, the term kurti refers to waist coats, jackets and blouses[2] which sit above the waist without side slits, and are believed to have descended from the tunic of the Shunga period (2nd century B.C.). The kurti is distinguished from the choli by the latter leaving the midriff exposed.<br /><br />It is a typical dressing pattern of Indians especially the northern regions.<br /><br />The trend and origin of this clothing style is from the northern India and even today the other parts of the nation though modernalized wear kurti but it is worn by females majorly in north while the south prefers saree.</p>', '2018-11-15'),
(10, '47680664_Handloom-Sarees.jpg', 'The handloom saree tradition', '<p style=\"text-align: justify;\">Handloom sarees are a traditional textile art of Bangladesh and India. The production of handloom sarees are important for economic development in rural India. Completion of a single saree takes two to three days of work. Several regions have their own traditions of handloom sarees.</p>\r\n<p style=\"text-align: justify;\">As per 2010 census 44 lakhs of families are engaged in hand weaving. In 2011-12, the handloom industry wove 6900 million square metres of cloth. Andhra Pradesh is said to be the home of 3, 59,212 weaver families who all works in primary co operative handloom societies. Primary Handloom Weavers Co operative&rsquo;s (PHWCS) includes weavers within certain specific geographical limits and provides production work to the members. The co operatives also see that the weavers receive fare Wage and at the same time conduct various Welfare measures.</p>', '2018-11-15'),
(11, '85882568_muslin_sarees.jpg', 'One of the finest muslin textiles of Bengal', '<p>Jamdani (Bengali: জামদানি) is one of the finest muslin textiles of Bengal, produced in South Rupshi of Narayanganj district in Bangladesh for centuries. The historic production of jamdani was patronized by imperial warrants of the Mughal emperors. Under British colonialism, the Bengali jamdani and muslin industries rapidly declined due to colonial import policies favoring industrially manufactured textiles. In more recent years, the production of jamdani has witnessed a revival in Bangladesh.</p>\r\n\r\n<p>Whether figured or flowered, jamdani is a woven fabric in cotton, and it is undoubtedly one of the varieties of the finest muslin. It has been spoken of as the most artistic textile of the Bangladeshi weaver. They are traditionally woven around Dhaka, Bangladesh, and on the brocade loom. This is a supplementary weft technique of weaving, where the artistic motifs are produced by a non-structural weft, in addition to the standard weft that holds the warp threads together. The standard weft creates a fine, sheer fabric while the supplementary weft with thicker threads adds the intricate patterns to it. Each supplementary weft motif is added separately by hand by interlacing the weft threads into the warp with fine bamboo sticks using individual spools of thread. The result is a myriad of vibrant patterns that appear to float on a shimmering surface. What&rsquo;s remarkable in this weaving technique is that the pattern is not sketched or outlined on the fabric. Instead, it is drawn on a graph paper and placed underneath the warp. Jamdani is a fine muslin cloth on which decorative motifs are woven on the loom, typically in grey and white. Often a mixture of cotton and gold thread were/was used.</p>', '2020-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`) VALUES
(1, 'Blue Buffalo Company'),
(2, 'Colgate-Palmolive'),
(3, 'Mars Petcare'),
(4, 'Nestlé'),
(5, 'The J.M. Smucker'),
(6, 'Beaphar');

-- --------------------------------------------------------

--
-- Table structure for table `brand_prouct_name_id`
--

CREATE TABLE `brand_prouct_name_id` (
  `brand_product_name_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_prouct_name_id`
--

INSERT INTO `brand_prouct_name_id` (`brand_product_name_id`, `brand_id`, `product_category_id`, `product_id`, `product_name_id`) VALUES
(1, 1, 73, 169, 179),
(2, 1, 70, 163, 178),
(3, 2, 70, 164, 178),
(4, 3, 73, 170, 179),
(6, 2, 73, 172, 207),
(7, 1, 100, 173, 220),
(8, 2, 105, 174, 221),
(9, 2, 112, 175, 250),
(10, 2, 125, 176, 261),
(11, 2, 128, 177, 264),
(12, 2, 116, 178, 254),
(13, 2, 101, 179, 226),
(14, 1, 113, 180, 251),
(15, 1, 108, 181, 238),
(16, 1, 108, 182, 238),
(17, 1, 108, 183, 238),
(18, 1, 108, 184, 238),
(19, 1, 100, 185, 220),
(20, 1, 100, 186, 220),
(21, 2, 100, 187, 220),
(22, 2, 100, 188, 220),
(23, 1, 100, 189, 220),
(24, 2, 100, 190, 220),
(25, 1, 105, 191, 221),
(26, 2, 100, 192, 220),
(27, 3, 100, 193, 220),
(28, 2, 100, 194, 220),
(29, 2, 100, 195, 220),
(30, 2, 100, 196, 220),
(31, 1, 100, 197, 220),
(32, 3, 100, 198, 220),
(33, 3, 100, 199, 220),
(34, 2, 132, 202, 0),
(35, 2, 135, 203, 0),
(36, 1, 134, 204, 0),
(37, 1, 134, 205, 0),
(38, 2, 134, 206, 0),
(39, 2, 138, 207, 0);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Samsung ', NULL, NULL),
(2, 'Nokia', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courier_services`
--

CREATE TABLE `courier_services` (
  `courier_services_id` int(11) NOT NULL,
  `courier_services_name` text NOT NULL,
  `address` text NOT NULL,
  `contact_person_name` text NOT NULL,
  `contact_no` text NOT NULL,
  `email` text NOT NULL,
  `website` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_services`
--

INSERT INTO `courier_services` (`courier_services_id`, `courier_services_name`, `address`, `contact_person_name`, `contact_no`, `email`, `website`) VALUES
(2, 'Courier Services Name 2', 'Address 2', 'Contact Person Name 2', '7059055008', 'monishsahadg@gmail.com', ''),
(4, 'New Courier', 'Panchla', 'Abusufian', '8017964102', 'kayal.sufian.abu@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gst`
--

CREATE TABLE `gst` (
  `gst_id` int(11) NOT NULL,
  `gst` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst`
--

INSERT INTO `gst` (`gst_id`, `gst`) VALUES
(1, '5');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_no`
--

CREATE TABLE `invoice_no` (
  `invoice_no_id` int(11) NOT NULL,
  `invoice_no` text,
  `total_amt` text NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  `status_date` date NOT NULL,
  `web_user_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `cancel_date` date DEFAULT NULL,
  `payment_mode` char(1) NOT NULL DEFAULT '0',
  `payment_status` char(1) NOT NULL DEFAULT '0',
  `transaction_id` varchar(255) NOT NULL DEFAULT '0',
  `use_wallet` char(1) NOT NULL DEFAULT '0',
  `use_wallet_amt` int(11) NOT NULL DEFAULT '0',
  `browser_id` varchar(255) DEFAULT NULL,
  `cancel` char(1) NOT NULL DEFAULT '0',
  `courier_services_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_no`
--

INSERT INTO `invoice_no` (`invoice_no_id`, `invoice_no`, `total_amt`, `status`, `status_date`, `web_user_id`, `invoice_date`, `cancel_date`, `payment_mode`, `payment_status`, `transaction_id`, `use_wallet`, `use_wallet_amt`, `browser_id`, `cancel`, `courier_services_id`) VALUES
(80, 'TAW00000080', '715', '4', '2020-07-25', 3, '2020-07-25', NULL, '2', '1', '0', '0', 0, NULL, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` tinytext NOT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `sequence`) VALUES
(2, 'Chimney', 1),
(3, 'Hob', 0),
(1, 'Micro', 0),
(4, 'Oven', 0),
(6, 'Sink & Faucet', 0),
(5, 'Other', 6);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_24_055224_create_about_us_table', 0),
(2, '2020_03_24_055224_create_blog_table', 0),
(3, '2020_03_24_055224_create_courier_services_table', 0),
(4, '2020_03_24_055224_create_gst_table', 0),
(5, '2020_03_24_055224_create_invoice_no_table', 0),
(6, '2020_03_24_055224_create_menu_table', 0),
(7, '2020_03_24_055224_create_offer_table', 0),
(8, '2020_03_24_055224_create_product_table', 0),
(9, '2020_03_24_055224_create_product_cart_table', 0),
(10, '2020_03_24_055224_create_product_category_table', 0),
(11, '2020_03_24_055224_create_product_colour_table', 0),
(12, '2020_03_24_055224_create_product_details_colour_table', 0),
(13, '2020_03_24_055224_create_product_details_size_table', 0),
(14, '2020_03_24_055224_create_product_image_details_table', 0),
(15, '2020_03_24_055224_create_product_name_table', 0),
(16, '2020_03_24_055224_create_product_size_table', 0),
(17, '2020_03_24_055224_create_product_star_review_table', 0),
(18, '2020_03_24_055224_create_return_product_table', 0),
(19, '2020_03_24_055224_create_shipping_address_table', 0),
(20, '2020_03_24_055224_create_slider_table', 0),
(21, '2020_03_24_055224_create_user_table', 0),
(22, '2020_03_24_055224_create_web_user_table', 0),
(23, '2020_03_24_055224_create_wishlist_table', 0),
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2020_02_28_140846_create_companies_table', 1),
(27, '2020_02_28_144036_create_products_table', 1),
(28, '2020_04_11_114754_create_roles_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text,
  `url` text,
  `cat` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offer_id`, `image`, `description`, `url`, `cat`) VALUES
(1, '1597255680.jpg', 'Treats & Biscuits', 'https://google.com', '4'),
(2, '1597255691.jpg', 'Dog Food', '#', '4'),
(4, '1597255699.jpg', 'Harness', '#', '4'),
(7, '1597255720.jpg', NULL, 'https://www.w3schools.com/tags/att_a_target.asp', '4'),
(8, '1597255738.jpg', NULL, '#', '4'),
(10, '1597255749.jpg', NULL, '#', '4'),
(11, '1595241626.jpg', NULL, '#', '3');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$fIzzVK.SidcN0h.YksRzd.GVySKOtBBqpf/o.fSEXyYkEt1T1mywO', '2020-04-02 02:01:38'),
('abu.exprolab@gmail.com', '$2y$10$q38KX/OqLt5A5AHRFPyZReltJ7GO5rDGyh5/fd7h576.gVQUr5fbC', '2020-04-12 01:04:37'),
('kayal.sufian.abu@gmail.com', '$2y$10$zxhkJ1KmH5b6eYDxF0WeMug73v5XT4mimYMgZq364edc9lOkDMhOe', '2020-07-15 01:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

CREATE TABLE `pincode` (
  `id` int(11) NOT NULL,
  `pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pincode`
--

INSERT INTO `pincode` (`id`, `pin`) VALUES
(2, 711322);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_name_id` int(11) NOT NULL,
  `product_name` tinytext NOT NULL,
  `description` text NOT NULL,
  `price` tinytext NOT NULL,
  `price_ex_gst` text,
  `price_gst` text,
  `discount` text NOT NULL,
  `discount_ex_gst` text,
  `discount_gst` text,
  `actual_price` int(11) NOT NULL,
  `actual_price_ex_gst` text,
  `actual_price_gst` text,
  `actual_gst` text,
  `delivery_charge` int(11) NOT NULL,
  `offers` char(1) NOT NULL DEFAULT '0',
  `feature_products` char(1) NOT NULL DEFAULT '0',
  `best_selling` char(1) NOT NULL DEFAULT '0',
  `home` char(1) NOT NULL DEFAULT '0',
  `brand_id` int(11) NOT NULL,
  `food_type1` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `menu_id`, `product_category_id`, `product_name_id`, `product_name`, `description`, `price`, `price_ex_gst`, `price_gst`, `discount`, `discount_ex_gst`, `discount_gst`, `actual_price`, `actual_price_ex_gst`, `actual_price_gst`, `actual_gst`, `delivery_charge`, `offers`, `feature_products`, `best_selling`, `home`, `brand_id`, `food_type1`) VALUES
(207, 1, 138, 0, 'New product', '<p>Desc</p>', '1500', '', '', '10', '', '', 1350, '', '', '', 500, '0', '1', '0', '0', 2, '0'),
(206, 3, 134, 0, 'New Product', '<p>Demo</p>', '1200', '', '', '60', '', '', 480, '', '', '', 0, '0', '1', '1', '0', 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'nokia', '3', NULL, NULL),
(2, 'TV', '1', '2020-03-24 00:28:46', '2020-03-24 00:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE `product_cart` (
  `product_cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_size_id` int(11) NOT NULL,
  `product_colour_id` int(11) NOT NULL,
  `qty` text NOT NULL,
  `price` text NOT NULL,
  `delivery_charge` text NOT NULL,
  `buy_now` char(1) NOT NULL DEFAULT '0',
  `web_user_id` int(11) NOT NULL,
  `invoice_no_id` int(11) NOT NULL,
  `browser_id` text NOT NULL,
  `cancel` char(1) NOT NULL DEFAULT '0',
  `cancel_browser_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_cart`
--

INSERT INTO `product_cart` (`product_cart_id`, `product_id`, `product_size_id`, `product_colour_id`, `qty`, `price`, `delivery_charge`, `buy_now`, `web_user_id`, `invoice_no_id`, `browser_id`, `cancel`, `cancel_browser_id`) VALUES
(200, 179, 36, 101, '9', '700', '50', '0', 0, 0, 'eqlnh7o6pehj3aqussgrd2majs', '0', '0'),
(201, 182, 17, 108, '1', '700', '20', '0', 0, 0, 'eqlnh7o6pehj3aqussgrd2majs', '0', '0'),
(208, 174, 21, 105, '1', '1260', '25', '0', 3, 71, '0', '0', '0'),
(209, 181, 36, 108, '4', '714', '34', '0', 3, 71, '0', '0', '0'),
(210, 181, 36, 108, '1', '714', '34', '0', 3, 71, '0', '0', '0'),
(211, 175, 36, 112, '1', '1260', '0', '0', 3, 73, '0', '0', '0'),
(212, 179, 36, 101, '1', '700', '50', '0', 3, 73, '0', '0', '0'),
(213, 179, 36, 101, '7', '700', '50', '0', 3, 73, '0', '0', '0'),
(214, 181, 36, 108, '1', '714', '34', '0', 3, 74, '0', '0', '0'),
(215, 182, 17, 108, '1', '700', '20', '0', 1, 75, '0', '0', '0'),
(216, 182, 18, 108, '1', '700', '50', '0', 3, 76, '0', '0', '0'),
(217, 181, 36, 108, '1', '714', '34', '0', 3, 77, '0', '0', '0'),
(218, 179, 36, 101, '1', '700', '50', '0', 3, 77, '0', '0', '0'),
(219, 181, 36, 108, '1', '714', '34', '0', 3, 80, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `product_category` tinytext NOT NULL,
  `column_no` int(11) NOT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `menu_id`, `product_category`, `column_no`, `sequence`) VALUES
(131, 2, 'Bosch', 0, 0),
(132, 2, 'Hafele', 0, 0),
(133, 2, 'Kaff', 0, 0),
(134, 3, 'hob 1', 0, 0),
(135, 3, 'hob2', 0, 0),
(136, 3, 'hob 3', 0, 0),
(137, 1, 'micro 1', 0, 0),
(138, 1, 'micro2', 0, 0),
(139, 1, 'micro 3', 0, 0),
(140, 4, 'oven 1', 0, 0),
(141, 4, 'oven2', 0, 0),
(142, 4, 'oven 3', 0, 0),
(143, 6, 'Sink 1', 0, 0),
(144, 6, 'Sink 2', 0, 0),
(145, 6, 'sink 3', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_colour`
--

CREATE TABLE `product_colour` (
  `product_colour_id` int(11) NOT NULL,
  `product_colour` text NOT NULL,
  `product_colour_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_colour`
--

INSERT INTO `product_colour` (`product_colour_id`, `product_colour`, `product_colour_code`) VALUES
(11, 'no color', '#FFFFFFFFF');

-- --------------------------------------------------------

--
-- Table structure for table `product_details_colour`
--

CREATE TABLE `product_details_colour` (
  `product_details_colour_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_colour_id` int(11) NOT NULL,
  `default_colour` int(11) NOT NULL DEFAULT '0',
  `product_details_size_id` int(11) DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_name_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details_colour`
--

INSERT INTO `product_details_colour` (`product_details_colour_id`, `product_id`, `product_colour_id`, `default_colour`, `product_details_size_id`, `product_category_id`, `product_name_id`) VALUES
(320, 205, 5, 1, 377, 134, 0),
(321, 206, 11, 1, 378, 134, 0),
(322, 207, 11, 1, 379, 138, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_details_size`
--

CREATE TABLE `product_details_size` (
  `product_details_size_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_size_id` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT '10',
  `price` int(11) NOT NULL DEFAULT '0',
  `discount` int(11) NOT NULL DEFAULT '0',
  `actual_price` int(11) NOT NULL DEFAULT '0',
  `delivery_charge` int(11) NOT NULL DEFAULT '0',
  `default_price` int(11) NOT NULL DEFAULT '0',
  `product_colour_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_name_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details_size`
--

INSERT INTO `product_details_size` (`product_details_size_id`, `product_id`, `product_size_id`, `stock`, `price`, `discount`, `actual_price`, `delivery_charge`, `default_price`, `product_colour_id`, `product_category_id`, `product_name_id`) VALUES
(378, 206, 37, 1, 1200, 60, 480, 0, 1, 11, 134, 0),
(379, 207, 37, 1, 1500, 10, 1350, 500, 1, 11, 138, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_image_details`
--

CREATE TABLE `product_image_details` (
  `product_image_details_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_details_colour_id` int(11) DEFAULT NULL,
  `product_colour_id` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `default_image` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image_details`
--

INSERT INTO `product_image_details` (`product_image_details_id`, `product_id`, `product_details_colour_id`, `product_colour_id`, `image`, `default_image`) VALUES
(1, 89, 152, 2, '87488632_333.jpg', '1'),
(2, 89, 152, 2, '92319354_334.jpg', '1'),
(3, 89, 152, 2, '98833911_338.jpg', '1'),
(4, 89, 152, 2, '26554791_336.jpg', '1'),
(5, 88, 151, 2, '78802560_309.jpg', '1'),
(6, 88, 151, 2, '42251135_310.jpg', '1'),
(7, 88, 151, 2, '27403079_311.jpg', '1'),
(8, 88, 151, 2, '98768349_312.jpg', '1'),
(9, 87, 150, 12, '79573664_305.jpg', '1'),
(10, 87, 150, 12, '330103_306.jpg', '1'),
(11, 87, 150, 12, '63163368_307.jpg', '1'),
(12, 87, 150, 12, '63967344_308.jpg', '1'),
(13, 86, 149, 10, '35143633_290.jpg', '1'),
(14, 86, 149, 10, '74817308_291.jpg', '1'),
(15, 86, 149, 10, '46607587_292.jpg', '1'),
(16, 86, 149, 10, '96667466_293.jpg', '1'),
(17, 85, 148, 7, '59676975_282.jpg', '1'),
(18, 85, 148, 7, '46344130_283.jpg', '1'),
(19, 85, 148, 7, '59601045_284.jpg', '1'),
(20, 85, 148, 7, '40924872_285.jpg', '1'),
(21, 84, 147, 1, '16166469_262.jpg', '1'),
(22, 84, 147, 1, '12100861_263.jpg', '1'),
(23, 84, 147, 1, '63993053_264.jpg', '1'),
(25, 83, 146, 6, '91001527_258.jpg', '1'),
(26, 83, 146, 6, '44650777_259.jpg', '1'),
(27, 83, 146, 6, '56187152_260.jpg', '1'),
(28, 83, 146, 6, '31448060_261.jpg', '1'),
(33, 81, 144, 1, '17963862_250.jpg', '1'),
(34, 81, 144, 1, '94023187_251.jpg', '1'),
(35, 81, 144, 1, '2733305_252.jpg', '1'),
(36, 81, 144, 1, '79155188_253.jpg', '1'),
(37, 80, 143, 11, '65110595_228.jpg', '1'),
(38, 80, 143, 11, '12275943_229.jpg', '1'),
(39, 80, 143, 11, '57543464_230.jpg', '1'),
(40, 79, 142, 2, '29509568_205.jpg', '1'),
(41, 79, 142, 2, '26706203_206.jpg', '1'),
(42, 79, 142, 2, '79434987_207.jpg', '1'),
(43, 79, 142, 2, '18028771_208.jpg', '1'),
(44, 78, 141, 6, '82102159_201.jpg', '1'),
(45, 78, 141, 6, '32994118_202.jpg', '1'),
(46, 78, 141, 6, '9482651_203.jpg', '1'),
(47, 78, 141, 6, '96012633_204.jpg', '1'),
(48, 77, 140, 2, '76627637_185.jpg', '1'),
(49, 77, 140, 2, '86226212_186.jpg', '1'),
(50, 77, 140, 2, '86032562_187.jpg', '1'),
(52, 77, 140, 2, '49041761_188.jpg', '1'),
(61, 74, 137, 9, '81034135_339.jpg', '1'),
(63, 74, 137, 9, '88555517_340.jpg', '1'),
(64, 74, 137, 9, '77854763_341.jpg', '1'),
(65, 74, 137, 9, '79534503_342.jpg', '1'),
(66, 73, 136, 3, '39385688_329.jpg', '1'),
(67, 73, 136, 3, '13611841_330.jpg', '1'),
(68, 73, 136, 3, '32953724_331.jpg', '1'),
(69, 73, 136, 3, '10728226_332.jpg', '1'),
(70, 72, 135, 12, '46567404_298.jpg', '1'),
(71, 72, 135, 12, '55910815_299.jpg', '1'),
(72, 72, 135, 12, '32278936_300.jpg', '1'),
(73, 72, 135, 12, '73947083_301.jpg', '1'),
(74, 71, 134, 2, '46792264_294.jpg', '1'),
(75, 71, 134, 2, '40883106_296.jpg', '1'),
(76, 71, 134, 2, '81374555_296.jpg', '1'),
(77, 71, 134, 2, '80504086_297.jpg', '1'),
(78, 70, 153, 6, '216618_274.jpg', '1'),
(79, 70, 153, 6, '94288882_275.jpg', '1'),
(80, 70, 153, 6, '28494985_276.jpg', '1'),
(81, 70, 153, 6, '16104021_277.jpg', '1'),
(82, 69, 154, 19, '78082702_270.jpg', '1'),
(83, 69, 154, 19, '99319591_271.jpg', '1'),
(84, 69, 154, 19, '76952219_272.jpg', '1'),
(85, 69, 154, 19, '81852716_273.jpg', '1'),
(90, 67, 130, 1, '67406353_247.jpg', '1'),
(91, 67, 130, 1, '44116263_248.jpg', '1'),
(92, 67, 130, 1, '18447576_249.jpg', '1'),
(93, 65, 128, 1, '73458209_239.jpg', '1'),
(94, 65, 128, 1, '96958991_240.jpg', '1'),
(95, 65, 128, 1, '307457_241.jpg', '1'),
(96, 65, 128, 1, '69462114_242.jpg', '1'),
(97, 64, 127, 1, '47088020_231.jpg', '1'),
(98, 64, 127, 1, '8310687_232.jpg', '1'),
(99, 64, 127, 1, '37036_233.jpg', '1'),
(100, 64, 127, 1, '67677090_234.jpg', '1'),
(101, 63, 126, 1, '73062661_217.jpg', '1'),
(102, 63, 126, 1, '62688483_218.jpg', '1'),
(103, 63, 126, 1, '52728524_219.jpg', '1'),
(104, 62, 125, 1, '98390180_189.jpg', '1'),
(105, 62, 125, 1, '12095394_190.jpg', '1'),
(106, 62, 125, 1, '91319877_191.jpg', '1'),
(107, 62, 125, 1, '50094897_192.jpg', '1'),
(108, 60, 123, 17, '51590543_177.jpg', '1'),
(109, 60, 123, 17, '827214_178.jpg', '1'),
(110, 60, 123, 17, '92286492_179.jpg', '1'),
(111, 60, 123, 17, '98921586_180.jpg', '1'),
(112, 59, 122, 7, '16750906_157.jpg', '1'),
(113, 59, 122, 7, '47136934_158.jpg', '1'),
(114, 59, 122, 7, '41608008_159.jpg', '1'),
(115, 59, 122, 7, '28084995_160.jpg', '1'),
(116, 58, 121, 2, '13833603_149.jpg', '1'),
(118, 58, 121, 2, '34907578_150.jpg', '1'),
(119, 58, 121, 2, '10189429_151.jpg', '1'),
(120, 58, 121, 2, '85546512_152.jpg', '1'),
(121, 57, 119, 2, '36881768_145.jpg', '1'),
(122, 57, 119, 2, '59058940_146.jpg', '1'),
(123, 57, 119, 2, '70648983_147.jpg', '1'),
(125, 57, 119, 2, '5325325_148.jpg', '1'),
(126, 76, 139, 2, '18600587_101.jpg', '1'),
(127, 76, 139, 2, '26337265_102.jpg', '1'),
(128, 76, 139, 2, '92900682_103.jpg', '1'),
(129, 76, 139, 2, '34332105_104.jpg', '1'),
(130, 75, 138, 9, '73476690_343.jpg', '1'),
(131, 75, 138, 9, '4185663_344.jpg', '1'),
(132, 75, 138, 9, '97040162_345.jpg', '1'),
(133, 75, 138, 9, '83937560_346.jpg', '1'),
(134, 75, 138, 9, '2248514_347.jpg', '1'),
(135, 90, 155, 11, '54849451_1.jpg', '1'),
(136, 90, 155, 11, '79893421_2.jpg', '1'),
(137, 90, 155, 11, '43534623_3.jpg', '1'),
(138, 90, 155, 11, '45463093_4.jpg', '1'),
(139, 91, 156, 5, '18442633_5.jpg', '1'),
(140, 91, 156, 5, '98339729_6.jpg', '1'),
(141, 91, 156, 5, '86607620_7.jpg', '1'),
(142, 91, 156, 5, '29963183_8.jpg', '1'),
(143, 92, 157, 1, '97189170_9.jpg', '1'),
(144, 92, 157, 1, '42732231_10.jpg', '1'),
(145, 92, 157, 1, '37770488_11.jpg', '1'),
(146, 92, 157, 1, '67677459_12.jpg', '1'),
(147, 93, 158, 18, '90078055_14.jpg', '1'),
(148, 93, 158, 18, '59328429_13.jpg', '1'),
(149, 93, 158, 18, '27288031_15.jpg', '1'),
(150, 93, 158, 18, '62773228_16.jpg', '1'),
(151, 94, 159, 7, '60072403_17.jpg', '1'),
(152, 94, 159, 7, '93122695_18.jpg', '1'),
(153, 94, 159, 7, '46506244_19.jpg', '1'),
(154, 94, 159, 7, '17899244_20.jpg', '1'),
(155, 95, 160, 18, '33947411_21.jpg', '1'),
(156, 95, 160, 18, '9775277_22.jpg', '1'),
(157, 95, 160, 18, '93252003_23.jpg', '1'),
(158, 95, 160, 18, '85495343_24.jpg', '1'),
(159, 96, 161, 11, '56910752_25.jpg', '1'),
(160, 96, 161, 11, '11067356_26.jpg', '1'),
(161, 96, 161, 11, '42779859_27.jpg', '1'),
(162, 96, 161, 11, '56832559_28.jpg', '1'),
(163, 97, 162, 6, '39259984_29.jpg', '1'),
(164, 97, 162, 6, '59190307_30.jpg', '1'),
(165, 97, 162, 6, '66626397_31.jpg', '1'),
(166, 97, 162, 6, '25009177_32.jpg', '1'),
(167, 98, 163, 6, '44999421_33.jpg', '1'),
(168, 98, 163, 6, '62743908_34.jpg', '1'),
(169, 98, 163, 6, '98704173_35.jpg', '1'),
(170, 98, 163, 6, '5711701_36.jpg', '1'),
(171, 98, 164, 1, '34175919_33.jpg', '1'),
(172, 98, 164, 1, '89742999_34.jpg', '1'),
(173, 98, 164, 1, '40215530_35.jpg', '1'),
(174, 98, 164, 1, '60400399_36.jpg', '1'),
(175, 99, 165, 12, '19504793_37.jpg', '1'),
(176, 99, 165, 12, '33471459_38.jpg', '1'),
(177, 99, 165, 12, '52065009_39.jpg', '1'),
(178, 99, 165, 12, '48109411_40.jpg', '1'),
(185, 100, 166, 11, '95103319_41.jpg', '1'),
(186, 100, 166, 11, '10607437_42.jpg', '1'),
(187, 100, 166, 11, '43182079_43.jpg', '1'),
(188, 100, 166, 11, '55124263_44.jpg', '1'),
(189, 101, 167, 18, '39676984_45.jpg', '1'),
(190, 101, 167, 18, '37476283_46.jpg', '1'),
(191, 101, 167, 18, '19610543_47.jpg', '1'),
(192, 101, 167, 18, '97903444_48.jpg', '1'),
(193, 102, 168, 9, '15093228_49.jpg', '1'),
(194, 102, 168, 9, '42781658_50.jpg', '1'),
(196, 102, 168, 9, '26372099_51.jpg', '1'),
(197, 102, 168, 9, '99306823_52.jpg', '1'),
(198, 103, 170, 12, '13880936_53.jpg', '1'),
(199, 103, 170, 12, '33763563_54.jpg', '1'),
(200, 103, 170, 12, '93177609_55.jpg', '1'),
(201, 103, 170, 12, '51579344_56.jpg', '1'),
(202, 104, 171, 20, '20729368_57.jpg', '1'),
(203, 104, 171, 20, '43470762_58.jpg', '1'),
(204, 104, 171, 20, '13601603_59.jpg', '1'),
(205, 104, 171, 20, '18740659_60.jpg', '1'),
(206, 105, 172, 9, '2390442_61.jpg', '1'),
(207, 105, 172, 9, '40588405_62.jpg', '1'),
(208, 105, 172, 9, '76538343_63.jpg', '1'),
(209, 105, 172, 9, '64024888_64.jpg', '1'),
(210, 106, 173, 1, '45758185_65.jpg', '1'),
(211, 106, 173, 1, '82134143_66.jpg', '1'),
(212, 106, 173, 1, '12739932_67.jpg', '1'),
(213, 106, 173, 1, '66247224_68.jpg', '1'),
(217, 107, 174, 7, '73920972_361.jpg', '1'),
(218, 107, 174, 7, '49340701_362.jpg', '1'),
(219, 107, 174, 7, '22054289_363.jpg', '1'),
(220, 107, 174, 7, '37153576_360.jpg', '1'),
(221, 108, 175, 5, '80731576_A01015_(1).jpg', '1'),
(222, 108, 175, 5, '25629576_A01015_(2)_(1).jpg', '1'),
(223, 108, 175, 5, '92481100_A01015_(2).jpg', '1'),
(224, 108, 175, 5, '36861972_A01015.jpg', '1'),
(225, 109, 176, 17, '97912443_16.jpg', '1'),
(226, 109, 176, 17, '9452383_17.jpg', '1'),
(227, 109, 176, 17, '96936693_18.jpg', '1'),
(228, 109, 176, 17, '67148634_19.jpg', '1'),
(229, 110, 177, 18, '23186554_13_(2).jpg', '1'),
(230, 110, 177, 18, '17711901_14_(2).jpg', '1'),
(231, 110, 177, 18, '41894554_15_(2).jpg', '1'),
(233, 111, 178, 12, '81021647_9_(2).jpg', '1'),
(234, 111, 178, 12, '21481106_10_(2).jpg', '1'),
(235, 111, 178, 12, '15347052_11_(2).jpg', '1'),
(236, 111, 178, 12, '75780213_12.jpg', '1'),
(241, 112, 179, 11, '82253196_CODE_NO_A1004282.jpg', '1'),
(242, 112, 179, 11, '64245646_A1004282.jpg', '1'),
(243, 112, 179, 11, '96235149_355.jpg', '1'),
(244, 113, 180, 2, '73049036_356.jpg', '1'),
(245, 113, 180, 2, '32371077_357.jpg', '1'),
(246, 113, 180, 2, '96149713_358.jpg', '1'),
(247, 113, 180, 2, '90487807_359.jpg', '1'),
(248, 114, 181, 1, '603488_197.jpg', '1'),
(249, 114, 181, 1, '87717740_198.jpg', '1'),
(250, 114, 181, 1, '11499026_199.jpg', '1'),
(251, 114, 181, 1, '55576431_200.jpg', '1'),
(252, 115, 182, 11, '72780974_348.jpg', '1'),
(253, 115, 182, 11, '97877802_349.jpg', '1'),
(254, 115, 182, 11, '92656383_351.jpg', '1'),
(255, 116, 183, 11, '86174954_69.jpg', '1'),
(256, 116, 183, 11, '15679090_70.jpg', '1'),
(257, 116, 183, 11, '18673664_71.jpg', '1'),
(258, 116, 183, 11, '60435049_72.jpg', '1'),
(259, 117, 184, 18, '31189141_77.jpg', '1'),
(260, 117, 184, 18, '30818969_78.jpg', '1'),
(261, 117, 184, 18, '79161989_79.jpg', '1'),
(262, 117, 184, 18, '13160500_80.jpg', '1'),
(263, 118, 185, 18, '90412688_81.jpg', '1'),
(264, 118, 185, 18, '72267367_82.jpg', '1'),
(265, 118, 185, 18, '18072159_83.jpg', '1'),
(266, 118, 185, 18, '58528986_84.jpg', '1'),
(267, 119, 186, 11, '42406674_88.jpg', '1'),
(268, 119, 186, 11, '37962899_87.jpg', '1'),
(269, 119, 186, 11, '99649626_86.jpg', '1'),
(270, 119, 186, 11, '54192254_85.jpg', '1'),
(271, 120, 187, 18, '56586428_92.jpg', '1'),
(272, 120, 187, 18, '69391916_91.jpg', '1'),
(273, 120, 187, 18, '7414809_90.jpg', '1'),
(274, 120, 187, 18, '74986841_89.jpg', '1'),
(275, 121, 188, 21, '8961165_93.jpg', '1'),
(276, 121, 188, 21, '85597417_94.jpg', '1'),
(277, 121, 188, 21, '58782349_95.jpg', '1'),
(278, 121, 188, 21, '57467083_96.jpg', '1'),
(279, 122, 189, 3, '22673263_100.jpg', '1'),
(280, 122, 189, 3, '26978327_99.jpg', '1'),
(282, 122, 189, 3, '68053613_98.jpg', '1'),
(283, 122, 189, 3, '75413170_97.jpg', '1'),
(284, 123, 190, 13, '50051548_105.jpg', '1'),
(285, 123, 190, 13, '99576387_106.jpg', '1'),
(286, 123, 190, 13, '10235038_107.jpg', '1'),
(287, 123, 190, 13, '70392389_108.jpg', '1'),
(288, 124, 191, 11, '99200527_109.jpg', '1'),
(289, 124, 191, 11, '18881816_110.jpg', '1'),
(290, 124, 191, 11, '71666571_111.jpg', '1'),
(291, 124, 191, 11, '95862539_112.jpg', '1'),
(292, 125, 192, 13, '53287812_113.jpg', '1'),
(293, 125, 192, 13, '67403697_114.jpg', '1'),
(294, 125, 192, 13, '38438948_115.jpg', '1'),
(295, 125, 192, 13, '73225931_116.jpg', '1'),
(296, 126, 193, 11, '31442850_117.jpg', '1'),
(297, 126, 193, 11, '19641446_118.jpg', '1'),
(298, 126, 193, 11, '23894935_119.jpg', '1'),
(299, 126, 193, 11, '62775145_120.jpg', '1'),
(300, 127, 194, 1, '42507028_121.jpg', '1'),
(301, 127, 194, 1, '76253905_122.jpg', '1'),
(302, 127, 194, 1, '19147300_123.jpg', '1'),
(303, 127, 194, 1, '32295882_124.jpg', '1'),
(304, 128, 195, 19, '92986304_125.jpg', '1'),
(305, 128, 195, 19, '11166429_126.jpg', '1'),
(306, 128, 195, 19, '73685919_127.jpg', '1'),
(307, 128, 195, 19, '56121231_128.jpg', '1'),
(308, 128, 196, 22, '89010945_125.jpg', '1'),
(309, 128, 196, 22, '28005796_126.jpg', '1'),
(310, 128, 196, 22, '95243927_127.jpg', '1'),
(311, 128, 196, 22, '25778182_128.jpg', '1'),
(312, 129, 197, 3, '77164772_129.jpg', '1'),
(313, 129, 197, 3, '2168214_130.jpg', '1'),
(314, 129, 197, 3, '41833739_131.jpg', '1'),
(315, 129, 197, 3, '40491951_132.jpg', '1'),
(316, 130, 198, 11, '60664102_133.jpg', '1'),
(317, 130, 198, 11, '20084980_134.jpg', '0'),
(318, 130, 198, 11, '32591405_135.jpg', '0'),
(319, 130, 198, 11, '6012621_136.jpg', '0'),
(357, 148, 257, 1, '1586165847.jpg', '0'),
(377, 130, 263, 1, '1586667162.jpg', '1'),
(379, 155, 272, 1, '1593141074.jpg', '1'),
(380, 154, 273, 1, '1593481088.jpg', '1'),
(381, 154, 273, 1, '1593481108.jpg', '0'),
(397, 167, 282, 1, '1594965372.jpg', '1'),
(400, 171, 285, 1, '1594968275.jpg', '1'),
(410, 180, 294, 1, '1595251605.jpg', '1'),
(412, 181, 295, 1, '1595252293.jpg', '1'),
(413, 182, 296, 1, '1595312421.jpg', '1'),
(414, 182, 296, 1, '1595312434.jpg', '1'),
(417, 184, 298, 2, '1595315613.jpg', '1'),
(445, 205, 320, 5, '1597286956.jpg', '1'),
(446, 206, 321, 11, '1597287291.jpg', '1'),
(447, 207, 322, 11, '1597324383.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_name`
--

CREATE TABLE `product_name` (
  `product_name_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `favourite` int(11) DEFAULT NULL,
  `toys` int(11) DEFAULT NULL,
  `grooming` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `product_size_id` int(11) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`product_size_id`, `size`) VALUES
(37, 'No Size');

-- --------------------------------------------------------

--
-- Table structure for table `product_star_review`
--

CREATE TABLE `product_star_review` (
  `product_star_review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `star` text NOT NULL,
  `review_date` date NOT NULL,
  `summury` text NOT NULL,
  `review` longtext NOT NULL,
  `review_by` text NOT NULL,
  `web_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_star_review`
--

INSERT INTO `product_star_review` (`product_star_review_id`, `product_id`, `star`, `review_date`, `summury`, `review`, `review_by`, `web_user_id`) VALUES
(6, 181, '5', '2020-04-27', 'Nice Product', 'Nice product at reasonable price', 'Munna', 3),
(7, 181, '5', '2020-07-25', 'NICE AT ALL', 'GReat ', 'Abu ', 3),
(8, 181, '5', '2020-07-25', 'nil', 'Nice Product', 'Alex', 3);

-- --------------------------------------------------------

--
-- Table structure for table `promocode`
--

CREATE TABLE `promocode` (
  `promocode_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promocode`
--

INSERT INTO `promocode` (`promocode_id`, `name`, `amount`, `active`) VALUES
(1, 'BIGDEALS100', 100, 1),
(2, 'LOVESTUDY200', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `return_product`
--

CREATE TABLE `return_product` (
  `return_product_id` int(11) NOT NULL,
  `web_user_id` int(11) NOT NULL,
  `invoice_no_id` int(11) NOT NULL,
  `refund_mode` char(1) NOT NULL,
  `bank_name` text,
  `branch_name` text,
  `ifsc_code` text,
  `acc_holder_name` text,
  `acc_no` text,
  `amount` text,
  `description` longtext NOT NULL,
  `return_date` date NOT NULL,
  `refund_status` char(1) NOT NULL DEFAULT '1',
  `refund_date` date DEFAULT NULL,
  `product_received_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_product`
--

INSERT INTO `return_product` (`return_product_id`, `web_user_id`, `invoice_no_id`, `refund_mode`, `bank_name`, `branch_name`, `ifsc_code`, `acc_holder_name`, `acc_no`, `amount`, `description`, `return_date`, `refund_status`, `refund_date`, `product_received_date`) VALUES
(11, 3, 55, '1', 'my bank ', 'new brqn', 'sad', 'baal', 'baaal', '8540', 'Quality', '2018-12-14', '2', '2020-05-06', '2020-05-06'),
(19, 3, 70, '1', 'c', 'd', 'e', 'ed', 'd', '2790', 'hvh', '0000-00-00', '2', NULL, '2020-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-04-11 12:01:00', '2020-04-11 12:10:00'),
(2, 'Usrer', '2020-04-11 11:10:44', '2020-04-11 12:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `shipping_address_id` int(11) NOT NULL,
  `invoice_no_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `contact_no` text NOT NULL,
  `email` text,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `pin_no` text NOT NULL,
  `address` text NOT NULL,
  `appartment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`shipping_address_id`, `invoice_no_id`, `name`, `last_name`, `contact_no`, `email`, `state`, `city`, `pin_no`, `address`, `appartment`) VALUES
(62, 65, 'Abusufian', NULL, '8017964102', 'kayal.sufian.abu@gmail.com', 'West Bengal', 'Kolkata', '232q', 'South Panchla', ''),
(63, 66, 'Abusufian', NULL, '8017964102', 'kayal.sufian.abu@gmail.com', 'West Bengal', 'Kolkata', '232q', 'South Panchla', ''),
(64, 67, 'Abusufian Kayal', NULL, '8017964102', 'kayal.sufian.abu@gmail.com', 'West Bengal', 'Kolkata', '711322', 'South Panchla', ''),
(65, 68, 'Abusufian Kayal', NULL, '8017964102', 'kayal.sufian.abu@gmail.com', 'West Bengal', 'kolkata', '711322', 'South Panchla', ''),
(66, 69, 'abudufin', NULL, '232232', 'abu.exprolab@gmail.com', 'sdfsdfd', 'sdfd', 'sdf', 'sdds', ''),
(67, 70, 'sdad', NULL, 'sda', 'asads@fmao.com', 'assa', 'as', 'asda', 'asda', ''),
(68, 71, 'Alex', 'Wilson', '8017964102', NULL, 'wb', 'Howrah `', '711322', 'South Panchla', 'app1'),
(69, 73, 'aza', 'kaa', 'asa', NULL, 'wb', 'as', '711322', 'a', NULL),
(70, 74, 'as', 'dd', 'A', NULL, 'wb', 'DS', 'dcfd', 'DS', 'DFS'),
(71, 75, 'Alex', 'wilson', '8017964102', NULL, 'wb', 'Howrah', '711322', 'South Panchla', 'Appart ment'),
(72, 76, 'Alex', 'wilson', '8017964102', NULL, 'wb', 'Howrah `', '711322', 'South Panchla', 'app'),
(73, 77, 'Alex', 'Wilson', '8017964102', NULL, 'wb', 'Kolkata', '711322', 'South Panchla', 'appartment'),
(74, 78, 'Alex', 'Wilson', '8017964102', NULL, 'wb', 'Kolkata', '711322', 'South Panchla', 'appartment'),
(75, 79, 'Alex', 'Wilson', '8017964102', NULL, 'wb', 'Kolkata', '711322', 'South Panchla', 'appartment'),
(76, 80, 'Alex', 'wilson', '80174964402', NULL, 'wb', 'Kolkata', '711322', 'South Panchla', 'App');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `image`, `sequence`) VALUES
(52, '1595228888.jpg', 1),
(53, '1595228898.jpg', 2),
(54, '1595228908.jpg', 3),
(55, '1595228917.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `user_name` tinytext NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `user_name`, `password`) VALUES
(1, 'Administrator', 'attiread', 'atti@#site51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser_id` text COLLATE utf8mb4_unicode_ci,
  `wallet_amt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `contact_no`, `state`, `city`, `address`, `pincode`, `browser_id`, `wallet_amt`, `google_id`, `facebook_id`) VALUES
(1, 'Administrator', 'kayal.sufian.abu@gmail.com', '$2y$10$gHilEJAp863VE6OQyT.gIOrLI/pOUxM.kdyNST.jywyJMtDumrUmS', '9GKa4S7ZxM5ag7vD3gItOTfbIirwn4BVIiNoDMdMC1EHg8Yyff2UKYtEVfdI', '2020-03-25 01:17:08', '2020-03-27 04:19:37', 1, '', '', '', '', '', '', '0', '', ''),
(3, 'Alex', 'abu.exprolab@gmail.com', '$2y$10$dgWQ4otN1BAeK.0Lt3MWj.XT7UN1USxikn2hGJLSm5u6o0StXf79q', 'PGgHnhX8GExNtspoFVLZRJbaYUybm3c9929mwtNokjtAxD3NjeQqc43jSZQs', '2020-04-11 07:05:09', '2020-07-21 05:05:55', 2, '801796414102', 'West Bengal', 'Kolkata', 'South Panchla', '711322', '', 'India', '', ''),
(4, 'askayal', 'kayal@gmail.com', '$2y$10$0Tv0YXejnY0kmhyoIGDj4eGG2IBqNjWvMQNk9EDHMHWE4QzIVjvIW', 'Yvkp0p7dQ8KpSoHbfUX4QUZ4IjXuZDgZiXT7pKxRyxB7YrRg8Zg71cLQgN2C', '2020-04-12 00:13:46', '2020-04-12 00:13:46', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(5, 'Shehzad', 'She@gmail.com', '$2y$10$BuHzaQW40cDIb3sBfxiR9u7uXgOjMTWh4iFCmLPeTVhbj6fcvA0uO', 'x9uiyFeIfEboql5InfLklpyH1t0RwOXkI2dwrWmZplrc51O9wucoArMQdQJ6', '2020-04-12 00:20:38', '2020-04-12 00:20:38', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(6, 'Alex', 'alex@gmail.com', '$2y$10$dm/fYSgDE0hCiFYJPSjUAebIeqLZEdLpXSei4Wp1qQSjInIdop7ZC', 'FzSvObPj1A6ykAwM1QwBChlmd6A2DIbbGBG91kjWc3316xg7TaMhMDP6okOD', '2020-04-12 00:39:59', '2020-04-12 00:39:59', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(7, 'abu', 'abu@gmsa.com', '$2y$10$yEaybcrCySbN70WQ7cH5Z.cHYav8PIqXnGUlDobMDR/dgTKHebq5u', 'JxXyXosZNX1TYYjTamp0iw4xddlM5eqkZeFx5E9Fi0tdMFVvQ8hZOrrRELhl', '2020-07-15 00:28:36', '2020-07-15 00:28:36', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(8, 'abusufian', 'abu@gmail.com', '$2y$10$cRxjohmam3fKa6e0xEgBT.uXuTDXXXXyhAG0y0jW7SIfn34CqpgGu', '199lscw2EYZj90xk6TfwUhE8gEQpDjFF4FXeCeA4g8h2AMIF146glZ1YQkiQ', '2020-07-15 05:50:45', '2020-07-15 05:50:45', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(9, 'new user', 'new@gmail.com', '$2y$10$rikxJQyNJhxT17d55qJZkuj5THXWeyBFc2vOH1d0YLn8ijdFzUOjW', 'wEEIg7rYZdx4U6cyspuwVf3iWu2sbx1rlfqpUADRdHimJtdTPh14rP0RQ2Rf', '2020-07-15 21:59:02', '2020-07-15 21:59:02', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(10, 'old', 'k@gm.com', '$2y$10$qygWzY1RQ81oDUUS/Bt6auqwUL1c0aSHM7CMc.rfDek4Wp2xnm.OK', 'zNg6BOE6y1ar4oayQKjsbdAqUb7tdbXxNPLmoMVVbs1tHPDQVK1OZqYs6443', '2020-07-15 22:01:11', '2020-07-15 22:01:11', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(11, 'Abusufian', 'kas@gmail.com', '$2y$10$ap684e3iT/MH5BW.96OwNOs6a2WzMJ5INDMDR2pmTMMvV0j0Wu8ya', 'vJnH1OzbyeEgcbSCAbE5iI1BxgQH84jkcZuh6jeQENbpGdjsK4qjKNMUfcD0', '2020-07-21 03:25:44', '2020-07-21 03:25:44', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(12, 'Asasa', 'kde@gmail.com', '$2y$10$wruwPSfHvXWMkkPFEyKmx.TPO2wVHoIfMktnTQw2LEaP6LqS7ZEq6', 'jqRAyZxJFAPy0d3aEXl6U41PBOzhHkJ6ZZvURtU5IVoe1hdxElUF3dojneOP', '2020-07-21 03:26:28', '2020-07-21 03:26:28', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(23, 'Prakash Paramanick', 'prakashmca577@gmail.com', NULL, 'MvrwogLfRzqTZQRRPWwRDl4gFn5pVJQPycbGzAfuMjekEXLqIhAVwdGIGFbk', '2020-08-19 00:54:47', '2020-08-19 00:54:47', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Prakash Paramanick', 'prakashmca577@gmail.com', NULL, 'tnBmHTgT3a06eobsBt2jsJAlYhsQqwraJ54Dtdqb5mWNaepPCRNaSo2hXCYF', '2020-08-19 01:02:39', '2020-08-19 01:02:39', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Prakash Paramanick', 'prakashmca577@gmail.com', NULL, NULL, '2020-08-19 01:08:43', '2020-08-19 01:08:43', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Prakash Paramanick', 'prakashmca577@gmail.com', NULL, 'ECiNx0V4mc1nBruV6W3O4gvsfh9kHfGdV6E9atagdl9e7QgcUHSuEeIVc3Vg', '2020-08-19 13:33:57', '2020-08-19 13:33:57', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Prakash Chandra Paramanick', 'prakash.ivaninfotech@gmail.com', NULL, '4T9oMyNNutBtmvoiG9HVYg3YduUnGFlT4zhqk3M1DrKiFrPNCPy8zAIs5prM', '2020-08-19 13:37:09', '2020-08-19 13:37:09', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '115098201632683121043', NULL),
(28, 'Prakash Paramanick', 'prakashmca577@gmail.com', NULL, 'mDnGKgg1DvH2p1pZyi5UWRx7WO6ZY4tuWSdM6Oqc33funCaQdRr2zKo6INlt', '2020-08-19 13:42:26', '2020-08-19 13:42:26', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Prakash Paramanick', 'prakashmca577@gmail.com', NULL, 'z7RMZyEWSbFAbneQe7wCP2WgE5fwZua2gd4xXusFjHQAmc5at3GUWnpCdJd2', '2020-08-19 13:47:27', '2020-08-19 13:47:27', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Prakash Paramanick', 'prakashmca577@gmail.com', NULL, 'IX6d8ADJv4p7UZL8ef6tPCJ9cUNFz43XH1iBufsFZ470KnCQNJTIXZfwNN7U', '2020-08-19 13:48:50', '2020-08-19 13:48:50', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Prakash Paramanick', 'prakashmca577@gmail.com', NULL, '29FWS56jSj1HitInxE6IIWjzMKBfxpHZdnXTNnDIgjDHudcfKLQ8YdCGQ7ZH', '2020-08-19 13:50:41', '2020-08-19 13:50:41', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_user`
--

CREATE TABLE `web_user` (
  `web_user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact_no` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL,
  `pinno` text NOT NULL,
  `browser_id` text NOT NULL,
  `wallet_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_user`
--

INSERT INTO `web_user` (`web_user_id`, `name`, `contact_no`, `email`, `password`, `state`, `city`, `address`, `pinno`, `browser_id`, `wallet_amt`) VALUES
(11, 'Sanjit Patra', '9874391620', 'mail2sanjitpatra@gmail.com', '123', 'West Bengal', 'Kolkata', 'P-37 P.B Road.', '700041', '7bmrfdjl96gm4e86o07ahrbkr7', 0),
(13, 'Sanjit Patra', '7059055008', 'sanjitpatradg@gmail.com', '123', '', '', '', '', 'ccqnqsssvq9qmpl4q5an19fif6', 0),
(14, 'abc', '8335898222', 'abc@gmail.com', '12', '', '', '', '', '42227ef3cbkiocudlus3pjjac2', 0),
(15, 'kausik', '3 050 5055', 'kausik.mazumdar@gmail.com', 'venturee@', '', '', '', '', '5daibhps8oga528b3uvsc8tnp2', 0),
(16, 'Rajashree Mullick', '7980486485', 'rajashreemullick20@gmail.com', 'googlemagic', '', '', '', '', 'j7kk0dpu28qio8dtbk3dve8850', 0),
(17, 'Oindrila Chatterjee', '7044563190', 'oindrilacool193@gmail.com', 'oin1995', 'West Bengal', 'Kolkata', 'Purnima Bhavan,\r\n10, Nayan Sur Lane,\r\nSovabazar, Hathkhola', '700005', '9lnulv4t8545pn3363l8apvt41', 0),
(18, 'Purbita ', '7980672826', 'purbsen@gmail.com', '143@purbita', '', '', '', '', 'm4ndlfo12hq8ntgnpekl8rn0d4', 0),
(19, 'Shweta chakraborty', '9830502340', 'shweta21011986@gmail.com', 'Maam@1234', '', '', '', '', 'e45lfdvm56vl57ppe00as0iir6', 0),
(20, 'Rahid Gazi', '8336920677', 'rahidwemakefree@gmail.com', 'rahid123', '', '', '', '', 'ln15dr1q7ll033hjaa80d34u72', 0),
(21, 'additiya saha', '6290205383', 'additiya@transtek-solutions.com', 'attire123', '', '', '', '', 'q0dto6jko0k0g243798mebj8n2', 0),
(22, 'Bipasha', '9830090133', 'biswasbipasha@yahoo.co.in', 'kamakshi', '', '', '', '', 'la3k34it3fmd547p00jbb880i4', 0),
(23, 'mr  Giri', '9432553476', 'ashoke.giri54@gmail.com', 'ashokegiri', '', '', '', '', 'sp0fo9koah4rk1cjm4mcvhqgf0', 0),
(24, 'Akash', '9007390818', 'akash0341@gmail.com', 'akash@0341', '', '', '', '', 'h7j6betugq6jrte202tdkn4lq0', 0),
(25, 'Poonam Roy', '9123015439', 'nilkanthopakhi@gmail.com', '..9883117855..', '', '', '', '', 'vn2tdla3lc4i81ak1cc4r994t1', 0),
(26, 'djmustxjsm', 'edcziheqyl', '140a8284e8542da98825eb64a5311b02@pubrelay.info', 'b7Ig7Kt4Fn', '', '', '', '', 'tvolmqvf63etvskfsi8kvkbra5', 0),
(27, 'GeorgeFlire', '86452347959', 'inbox413@glmux.com', 'bS6d%2xn8wE', '', '', '', '', 'ie0kgas5e6di7alo33cvp63gv3', 0),
(28, 'Jamesaceve', '82149481568', 's.z.y.m.anskiashley5@gmail.com', '#6wto9y3QxQ', '', '', '', '', '05vvhhk6rdpbv89is1si3f4nh3', 0),
(29, 'Hsbbs', '6440043490', 'fuck@gmail.com', 'fuck', '', '', '', '', 'kh6ngi8vndb7hb2aovsbo20j33', 0),
(30, '#ç‰›www.attireboutique.co.iné€¼#', '#ç‰›www.attireboutique.co.iné€¼#', 'maosi60313@163.com', '#ç‰›www.attireboutique.co.iné€¼#', '', '', '', '', 'kittu96558ldqnefgeb7j2no25', 0),
(31, '$(\".logo\").html(\"hacker\")', '9999999999', 'ff@ff.com', '9999999999', '', '', '', '', 'obss8aiodvjrb52aujdnn3cpr2', 0),
(32, 'ukrnslekop', '83373963298', 'ukrnslekop@fsmodshub.com', 'a12Sqwery=', '', '', '', '', 'sruf6po81i3d19b6n6or07gqu1', 0),
(33, 'Sahar', '0563851858', 'cartridgesolutionuae@gmail.com', 'Y123456@s', '', '', '', '', 'h8lst8gkiu0rer5avqke66j972', 0),
(34, '', '', '', '', '', '', '', '', 'd99t5m034np33600rg360vum34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `web_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `product_id`, `web_user_id`) VALUES
(1, 44, 11),
(2, 44, 15),
(5, 60, 3),
(6, 60, 3),
(7, 60, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_prouct_name_id`
--
ALTER TABLE `brand_prouct_name_id`
  ADD PRIMARY KEY (`brand_product_name_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier_services`
--
ALTER TABLE `courier_services`
  ADD PRIMARY KEY (`courier_services_id`);

--
-- Indexes for table `gst`
--
ALTER TABLE `gst`
  ADD PRIMARY KEY (`gst_id`);

--
-- Indexes for table `invoice_no`
--
ALTER TABLE `invoice_no`
  ADD PRIMARY KEY (`invoice_no_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `pincode`
--
ALTER TABLE `pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`product_cart_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `product_colour`
--
ALTER TABLE `product_colour`
  ADD PRIMARY KEY (`product_colour_id`);

--
-- Indexes for table `product_details_colour`
--
ALTER TABLE `product_details_colour`
  ADD PRIMARY KEY (`product_details_colour_id`);

--
-- Indexes for table `product_details_size`
--
ALTER TABLE `product_details_size`
  ADD PRIMARY KEY (`product_details_size_id`);

--
-- Indexes for table `product_image_details`
--
ALTER TABLE `product_image_details`
  ADD PRIMARY KEY (`product_image_details_id`);

--
-- Indexes for table `product_name`
--
ALTER TABLE `product_name`
  ADD PRIMARY KEY (`product_name_id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`product_size_id`);

--
-- Indexes for table `product_star_review`
--
ALTER TABLE `product_star_review`
  ADD PRIMARY KEY (`product_star_review_id`);

--
-- Indexes for table `promocode`
--
ALTER TABLE `promocode`
  ADD PRIMARY KEY (`promocode_id`);

--
-- Indexes for table `return_product`
--
ALTER TABLE `return_product`
  ADD PRIMARY KEY (`return_product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`shipping_address_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_user`
--
ALTER TABLE `web_user`
  ADD PRIMARY KEY (`web_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
