-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2019 at 08:10 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_1200`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `summary`, `status`, `image`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Local News', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '1.jpg', 1, '2019-06-21 15:21:00', NULL),
(2, 'International', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '2.jpg', 1, '2019-06-22 15:21:00', '2019-06-23 12:59:42'),
(3, 'Economy', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '1.jpg', 1, '2019-06-23 15:21:00', '2019-06-23 12:58:04'),
(4, 'Politics', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '2.jpg', 1, '2019-06-24 15:21:00', NULL),
(5, 'Sports', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '1.jpg', 1, '2019-06-25 15:21:00', NULL),
(6, 'Weather', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '3.jpg', 1, '2019-06-26 15:21:00', NULL),
(7, 'Classified ads', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'inactive', '4.jpg', 1, '2019-06-27 15:21:00', '2019-06-23 12:58:27'),
(8, 'Interviews', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '5.jpg', 1, '2019-06-28 15:21:00', NULL),
(9, 'Letters from the readers', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '6.jpg', 1, '2019-06-29 15:21:00', NULL),
(10, 'Opinion/editorial', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '7.jpg', 1, '2019-06-30 15:21:00', NULL),
(11, 'Entertainment', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '8.jpg', 1, '2019-07-01 15:21:00', '2019-06-23 12:58:47'),
(12, 'Arts', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '9.jpg', 1, '2019-07-02 15:21:00', '2019-06-23 12:57:40'),
(13, 'Events', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '10.jpg', 1, '2019-07-03 15:21:00', '2019-06-23 12:58:58'),
(14, 'Broadcast', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '1.jpg', 1, '2019-07-04 15:21:00', '2019-06-23 12:57:52'),
(15, 'Society/people', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '2.jpg', 1, '2019-07-05 15:21:00', NULL),
(16, 'Tourism/travel tips', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '1.jpg', 1, '2019-07-06 15:21:00', NULL),
(17, 'Computers', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '2.jpg', 1, '2019-07-07 15:21:00', NULL),
(18, 'Automobiles', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '1.jpg', 1, '2019-07-08 15:21:00', NULL),
(19, 'Style/fashion', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '3.jpg', 1, '2019-07-09 15:21:00', NULL),
(20, 'Cooking/cuisine', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'inactive', '4.jpg', 1, '2019-07-10 15:21:00', '2019-06-23 12:58:37'),
(21, 'Health', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '5.jpg', 1, '2019-07-11 15:21:00', '2019-06-23 12:59:16'),
(22, 'Home & decoration', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'inactive', '6.jpg', 1, '2019-07-12 15:21:00', '2019-06-23 12:59:30'),
(23, 'Family', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '7.jpg', 1, '2019-07-13 15:21:00', NULL),
(24, 'Kids/youth', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '8.jpg', 1, '2019-07-14 15:21:00', NULL),
(25, 'Magazines and other supplements', 'In journalism, local news refers to coverage of events, by the news, in a local context that would not be an interest of another locality, or otherwise be of national or international scope. Local news, in contrast to national or international news, caters to the news of their regional and local communities; they focus on more localized issues and events.Some key features of local newsrooms includes regional politics, business, and human interest stories.[', 'active', '9.jpg', 1, '2019-07-15 15:21:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `photographer` text COLLATE utf8mb4_unicode_ci,
  `added_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `summary`, `status`, `photographer`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Gallery one', 'Gallery-20190625125859726.jpg', 'Gallery One', 'active', 'User One', 1, '2019-06-25 12:58:59', NULL),
(2, 'Gallery Two', 'Gallery-20190625125926929.jpg', 'Second Gallery', 'active', 'User One', 1, '2019-06-25 12:59:26', NULL),
(3, 'Gallery Three', 'Gallery-20190625010023169.jpg', 'Third Gallery', 'active', 'User Two', 1, '2019-06-25 13:00:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `image_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `gallery_id`, `image_name`) VALUES
(1, 1, 'Gallery-20190625125859483.jpg'),
(2, 1, 'Gallery-20190625125859129.png'),
(3, 1, 'Gallery-20190625125859319.jpg'),
(4, 2, 'Gallery-20190625125926798.jpg'),
(5, 2, 'Gallery-2019062512592696.jpg'),
(6, 2, 'Gallery-20190625125926397.jpg'),
(7, 3, 'Gallery-20190625010023656.jpg'),
(8, 3, 'Gallery-20190625010023607.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `news_date` date DEFAULT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporter` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `is_breaking` tinyint(4) DEFAULT NULL,
  `is_main` tinyint(4) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `source` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `summary`, `description`, `cat_id`, `location`, `news_date`, `image`, `reporter`, `status`, `is_breaking`, `is_main`, `is_featured`, `source`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Title and Headline Ideas for�Kathmandu:', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 1, 'Kathmandu', '2019-06-21', '1.jpg', 1, 'active', 1, 0, 1, 'Dibesh Raj Subedi', 1, '2019-06-21 16:07:00', NULL),
(2, 'Inside�Kathmandu', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 25, 'Pokhera', '2019-06-22', '2.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-06-22 16:07:00', NULL),
(3, 'The Kathmandu Tribune', 'Nothing is safe in this world, don\'t trust anyone. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore?', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!&lt;/p&gt;', 12, 'Chitlang', '2019-06-23', '3.jpg', 1, 'active', 1, 0, 0, 'Rohan Puri', 1, '2019-06-23 16:07:00', '2019-06-25 12:31:02'),
(4, 'The�Kathmandu�Chronicle', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 11, 'Makwanpure', '2019-06-24', '1.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-06-24 16:07:00', NULL),
(5, 'The�Kathmandu�Star', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 10, 'Ramechap', '2019-06-25', '2.jpg', 1, 'active', 1, 0, 1, 'Binay Karki', 1, '2019-06-25 16:07:00', NULL),
(6, 'The�Kathmandu�HeraldKathmandu�Today', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 5, 'Bhaktapur', '2019-06-26', '3.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-06-26 16:07:00', NULL),
(7, 'The�Kathmandu�News', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 4, 'Lalitpur', '2019-06-27', '1.jpg', 1, 'active', 1, 0, 0, 'Pujan Paudel', 1, '2019-06-27 16:07:00', NULL),
(8, 'Kathmandu�Daily News', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 3, 'Chitwan', '2019-06-28', '2.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-06-28 16:07:00', NULL),
(9, 'Kathmandu�Post', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 2, 'Parsa', '2019-06-29', '4.jpg', 1, 'active', 1, 0, 1, 'Sandesh Khanal', 1, '2019-06-29 16:07:00', NULL),
(10, 'The�Kathmandu�Post', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 9, 'Bahara', '2019-06-30', '5.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-06-30 16:07:00', NULL),
(11, 'Kathmandu�Sun', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 8, 'Rauthat', '2019-07-01', '6.jpg', 1, 'active', 1, 0, 0, 'Dibesh Raj Subedi', 1, '2019-07-01 16:07:00', NULL),
(12, 'Kathmandu�Tribune', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 6, 'Sindhuli', '2019-07-02', '7.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-07-02 16:07:00', NULL),
(13, 'The�Kathmandu�Morning News', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 7, 'Papla', '2019-07-03', '8.jpg', 1, 'active', 1, 0, 1, 'Rohan Puri', 1, '2019-07-03 16:07:00', NULL),
(14, 'Kathmandu�Newsday', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 13, 'Sindhupalchok', '2019-07-04', '8.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-07-04 16:07:00', NULL),
(15, 'The�Kathmandu�Chronicle', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 17, 'Kathmandu', '2019-07-05', '9.jpg', 1, 'active', 1, 0, 0, 'Binay Karki', 1, '2019-07-05 16:07:00', NULL),
(16, 'Kathmandu�Register', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 15, 'Pokhera', '2019-07-06', '10.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-07-06 16:07:00', NULL),
(17, 'The�Kathmandu�Ledger', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 16, 'Chitlang', '2019-07-07', '1.jpg', 1, 'active', 1, 0, 1, 'Pujan Paudel', 1, '2019-07-07 16:07:00', NULL),
(18, 'The�Kathmandu�Inquirer', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 14, 'Makwanpure', '2019-07-08', '2.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-07-08 16:07:00', NULL),
(19, 'The�Kathmandu�Republic', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 19, 'Ramechap', '2019-07-09', '3.jpg', 1, 'active', 1, 0, 0, 'Sandesh Khanal', 1, '2019-07-09 16:07:00', NULL),
(20, 'Kathmandu�Star-Advertiser', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 21, 'Bhaktapur', '2019-07-10', '1.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-07-10 16:07:00', NULL),
(21, 'Kathmandu�Review', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 10, 'Lalitpur', '2019-07-11', '2.jpg', 1, 'active', 1, 0, 1, 'Dibesh Raj Subedi', 1, '2019-07-11 16:07:00', NULL),
(22, 'Kathmandu�Journal', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 20, 'Chitwan', '2019-07-12', '3.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-07-12 16:07:00', NULL),
(23, 'The�Kathmandu�Union', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 22, 'Parsa', '2019-07-13', '1.jpg', 1, 'active', 1, 0, 0, 'Rohan Puri', 1, '2019-07-13 16:07:00', NULL),
(24, 'The�Kathmandu�Globe', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 23, 'Bahara', '2019-07-14', '2.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-07-14 16:07:00', NULL),
(25, 'Kathmandu�Courant', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 24, 'Rauthat', '2019-07-15', '4.jpg', 1, 'active', 1, 0, 1, 'Binay Karki', 1, '2019-07-15 16:07:00', NULL),
(26, 'Daily�Kathmandu�Gazette', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 1, 'Sindhuli', '2019-07-16', '5.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-07-16 16:07:00', NULL),
(27, 'Kathmandu�Herald', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 25, 'Papla', '2019-07-17', '6.jpg', 1, 'active', 1, 0, 0, 'Pujan Paudel', 1, '2019-07-17 16:07:00', NULL),
(28, 'Kathmandu Bulletin', 'Nothing is safe in this world, don\'t trust anyone. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore?', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!&lt;/p&gt;', 12, 'Sindhupalchok', '2019-07-18', '7.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-07-18 16:07:00', '2019-06-25 12:30:40'),
(29, 'Press-Kathmandu', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 11, 'Kathmandu', '2019-07-19', '8.jpg', 1, 'active', 1, 0, 1, 'Sandesh Khanal', 1, '2019-07-19 16:07:00', NULL),
(30, 'The�Kathmandu�Patriot', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 10, 'Pokhera', '2019-07-20', '8.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-07-20 16:07:00', NULL),
(31, 'Kathmandu�Daily Townsman', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 5, 'Chitlang', '2019-07-21', '9.jpg', 1, 'active', 1, 0, 0, 'Dibesh Raj Subedi', 1, '2019-07-21 16:07:00', NULL),
(32, '24 Hours�Kathmandu', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 4, 'Makwanpure', '2019-07-22', '10.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-07-22 16:07:00', NULL),
(33, 'The�Kathmandu�Star', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 3, 'Ramechap', '2019-07-23', '1.jpg', 1, 'active', 1, 0, 1, 'Rohan Puri', 1, '2019-07-23 16:07:00', NULL),
(34, 'Kathmandu�Free Press', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 2, 'Bhaktapur', '2019-07-24', '2.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-07-24 16:07:00', NULL),
(35, 'The Daily�Kathmandu', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 9, 'Lalitpur', '2019-07-25', '3.jpg', 1, 'active', 1, 0, 0, 'Binay Karki', 1, '2019-07-25 16:07:00', NULL),
(36, 'Metro�Kathmandu', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 8, 'Chitwan', '2019-07-26', '1.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-07-26 16:07:00', NULL),
(37, 'The�Kathmandu�Spectator', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 6, 'Parsa', '2019-07-27', '2.jpg', 1, 'active', 1, 0, 1, 'Pujan Paudel', 1, '2019-07-27 16:07:00', NULL),
(38, 'Kathmandu�Nugget', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 7, 'Bahara', '2019-07-28', '3.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-07-28 16:07:00', NULL),
(39, 'Kathmandu�Citizen', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 13, 'Rauthat', '2019-07-29', '1.jpg', 1, 'active', 1, 0, 0, 'Sandesh Khanal', 1, '2019-07-29 16:07:00', NULL),
(40, 'The�Kathmandu�Examiner', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 17, 'Sindhuli', '2019-07-30', '2.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-07-30 16:07:00', NULL),
(41, 'The�Kathmandu�Reformer', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 15, 'Papla', '2019-07-31', '4.jpg', 1, 'active', 1, 0, 1, 'Dibesh Raj Subedi', 1, '2019-07-31 16:07:00', NULL),
(42, 'Kathmandu�Daily Observer', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 16, 'Sindhupalchok', '2019-08-01', '5.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-08-01 16:07:00', NULL),
(43, 'Kathmandu�Standard', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 14, 'Kathmandu', '2019-08-02', '6.jpg', 1, 'active', 1, 0, 0, 'Rohan Puri', 1, '2019-08-02 16:07:00', NULL),
(44, 'Kathmandu�Echo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 19, 'Pokhera', '2019-08-03', '7.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-08-03 16:07:00', NULL),
(45, 'Kathmandu�Leader', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 21, 'Chitlang', '2019-08-04', '8.jpg', 1, 'active', 1, 0, 1, 'Binay Karki', 1, '2019-08-04 16:07:00', NULL),
(46, 'Kathmandu�Commentator', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 10, 'Makwanpure', '2019-08-05', '8.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-08-05 16:07:00', NULL),
(47, 'The Voice of�Kathmandu', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 20, 'Ramechap', '2019-08-06', '9.jpg', 1, 'active', 1, 0, 0, 'Pujan Paudel', 1, '2019-08-06 16:07:00', NULL),
(48, 'Kathmandu�Outlook', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 22, 'Bhaktapur', '2019-08-07', '10.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-08-07 16:07:00', NULL),
(49, 'Kathmandu�Booster', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 23, 'Lalitpur', '2019-08-08', '3.jpg', 1, 'active', 1, 0, 1, 'Sandesh Khanal', 1, '2019-08-08 16:07:00', NULL),
(50, 'Kathmandu�Anchor', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 24, 'Chitwan', '2019-08-09', '1.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-08-09 16:07:00', NULL),
(51, 'Inside�Kathmandu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 1, 'Parsa', '2019-08-10', '2.jpg', 1, 'active', 1, 0, 0, 'Dibesh Raj Subedi', 1, '2019-08-10 16:07:00', NULL),
(52, 'Kathmandu�Express', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 25, 'Bahara', '2019-08-11', '3.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-08-11 16:07:00', NULL),
(53, 'Kathmandu This Week', 'Be Aware of your friends, don\'t trust them bliendly. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore?', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!&lt;/p&gt;', 12, 'Rauthat', '2019-08-12', '1.jpg', 1, 'active', 1, 0, 1, 'Rohan Puri', 1, '2019-08-12 16:07:00', '2019-06-25 12:30:09'),
(54, 'Kathmandu�Source', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 11, 'Sindhuli', '2019-08-13', '2.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-08-13 16:07:00', NULL),
(55, 'Kathmandu�Freelancer', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 10, 'Papla', '2019-08-14', '3.jpg', 1, 'active', 1, 0, 0, 'Binay Karki', 1, '2019-08-14 16:07:00', NULL),
(56, 'Kathmandu�Community Voice', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 5, 'Sindhupalchok', '2019-08-15', '1.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-08-15 16:07:00', NULL),
(57, 'Kathmandu�Mercury', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 4, 'Kathmandu', '2019-08-16', '2.jpg', 1, 'active', 1, 0, 1, 'Pujan Paudel', 1, '2019-08-16 16:07:00', NULL),
(58, 'Kathmandu�Advocate', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 3, 'Pokhera', '2019-08-17', '4.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-08-17 16:07:00', NULL),
(59, 'The�Kathmandu�Mirror', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 2, 'Chitlang', '2019-08-18', '5.jpg', 1, 'active', 1, 0, 0, 'Sandesh Khanal', 1, '2019-08-18 16:07:00', NULL),
(60, 'Kathmandu�Sounder', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 9, 'Makwanpure', '2019-08-19', '6.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-08-19 16:07:00', NULL),
(61, 'Kathmandu�Independent', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 8, 'Ramechap', '2019-08-20', '7.jpg', 1, 'active', 1, 0, 1, 'Dibesh Raj Subedi', 1, '2019-08-20 16:07:00', NULL),
(62, 'Kathmandu�Optimist', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 6, 'Bhaktapur', '2019-08-21', '8.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-08-21 16:07:00', NULL),
(63, 'Title and Headline Ideas for�Donald Trump', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 7, 'Lalitpur', '2019-08-22', '8.jpg', 1, 'active', 1, 0, 0, 'Rohan Puri', 1, '2019-08-22 16:07:00', NULL),
(64, 'Made In Nepal', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 13, 'Chitwan', '2019-08-23', '9.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-08-23 16:07:00', NULL),
(65, 'The�Donald Trump�Tribune', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 17, 'Parsa', '2019-08-24', '10.jpg', 1, 'active', 1, 0, 1, 'Binay Karki', 1, '2019-08-24 16:07:00', NULL),
(66, 'The�Donald Trump�Chronicle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 15, 'Bahara', '2019-08-25', '5.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-08-25 16:07:00', NULL),
(67, 'The�Donald Trump�Star', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 16, 'Rauthat', '2019-08-26', '6.jpg', 1, 'active', 1, 0, 0, 'Pujan Paudel', 1, '2019-08-26 16:07:00', NULL),
(68, 'The�Donald Trump�HeraldDonald Trump�Today', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 14, 'Sindhuli', '2019-08-27', '7.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-08-27 16:07:00', NULL),
(69, 'The�Donald Trump�News', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 19, 'Papla', '2019-08-28', '8.jpg', 1, 'active', 1, 0, 1, 'Sandesh Khanal', 1, '2019-08-28 16:07:00', NULL),
(70, 'Donald Trump�Daily News', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 21, 'Sindhupalchok', '2019-08-29', '8.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-08-29 16:07:00', NULL),
(71, 'Donald Trump�Post', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 10, 'Kathmandu', '2019-08-30', '9.jpg', 1, 'active', 1, 0, 0, 'Dibesh Raj Subedi', 1, '2019-08-30 16:07:00', NULL),
(72, 'The�Donald Trump�Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 20, 'Pokhera', '2019-08-31', '10.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-08-31 16:07:00', NULL),
(73, 'Donald Trump�Sun', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 22, 'Chitlang', '2019-09-01', '3.jpg', 1, 'active', 1, 0, 1, 'Rohan Puri', 1, '2019-09-01 16:07:00', NULL),
(74, 'Donald Trump�Tribune', 'Be Aware of your friends, don�t trust them bliendly.', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!&lt;/p&gt;\n&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!&lt;/p&gt;\n&lt;blockquote&gt;\n&lt;p&gt;&lt;em&gt;&lt;strong&gt;&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!&quot;&lt;/strong&gt;&lt;/em&gt;&lt;/p&gt;\n&lt;/blockquote&gt;\n&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!&lt;/p&gt;', 23, 'Makwanpure', '2019-09-02', '1.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-09-02 16:07:00', '2019-06-26 12:52:21'),
(75, 'The�Donald Trump�Morning News', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 24, 'Ramechap', '2019-09-03', '2.jpg', 1, 'active', 1, 0, 0, 'Binay Karki', 1, '2019-09-03 16:07:00', NULL),
(76, 'Donald Trump�Newsday', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 1, 'Bhaktapur', '2019-09-04', '3.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-09-04 16:07:00', NULL),
(77, 'The�Donald Trump�Chronicle', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 25, 'Lalitpur', '2019-09-05', '1.jpg', 1, 'active', 1, 0, 1, 'Pujan Paudel', 1, '2019-09-05 16:07:00', NULL),
(78, 'Donald Trump Register', 'Be Aware of your friends, don\'t trust them bliendly. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore?', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!&lt;/p&gt;', 12, 'Chitwan', '2019-09-06', '2.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-09-06 16:07:00', '2019-06-25 12:29:44'),
(79, 'The�Donald Trump�Ledger', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 11, 'Parsa', '2019-09-07', '3.jpg', 1, 'active', 1, 0, 0, 'Sandesh Khanal', 1, '2019-09-07 16:07:00', NULL),
(80, 'The�Donald Trump�Inquirer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 10, 'Bahara', '2019-09-08', '1.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-09-08 16:07:00', NULL),
(81, 'The�Donald Trump�Republic', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 5, 'Rauthat', '2019-09-09', '2.jpg', 1, 'active', 1, 0, 1, 'Dibesh Raj Subedi', 1, '2019-09-09 16:07:00', NULL),
(82, 'Donald Trump�Star-Advertiser', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 4, 'Sindhuli', '2019-09-10', '4.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-09-10 16:07:00', NULL),
(83, 'Donald Trump�Review', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 3, 'Papla', '2019-09-11', '5.jpg', 1, 'active', 1, 0, 0, 'Rohan Puri', 1, '2019-09-11 16:07:00', NULL),
(84, 'Donald Trump�Journal', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 2, 'Sindhupalchok', '2019-09-12', '6.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-09-12 16:07:00', NULL),
(85, 'The�Donald Trump�Union', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 9, 'Kathmandu', '2019-09-13', '7.jpg', 1, 'active', 1, 0, 1, 'Binay Karki', 1, '2019-09-13 16:07:00', NULL),
(86, 'The�Donald Trump�Globe', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 8, 'Pokhera', '2019-09-14', '8.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-09-14 16:07:00', NULL),
(87, 'Donald Trump�Courant', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 6, 'Chitlang', '2019-09-15', '8.jpg', 1, 'active', 1, 0, 0, 'Pujan Paudel', 1, '2019-09-15 16:07:00', NULL),
(88, 'Daily�Donald Trump�Gazette', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 7, 'Makwanpure', '2019-09-16', '9.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-09-16 16:07:00', NULL),
(89, 'Donald Trump�Herald', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 13, 'Ramechap', '2019-09-17', '10.jpg', 1, 'active', 1, 0, 1, 'Sandesh Khanal', 1, '2019-09-17 16:07:00', NULL),
(90, 'Donald Trump�Bulletin', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 17, 'Bhaktapur', '2019-09-18', '5.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-09-18 16:07:00', NULL),
(91, 'Press-Donald Trump', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 15, 'Lalitpur', '2019-09-19', '6.jpg', 1, 'active', 1, 0, 0, 'Dibesh Raj Subedi', 1, '2019-09-19 16:07:00', NULL),
(92, 'The�Donald Trump�Patriot', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 16, 'Chitwan', '2019-09-20', '7.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-09-20 16:07:00', NULL),
(93, 'Donald Trump�Daily Townsman', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 14, 'Parsa', '2019-09-21', '8.jpg', 1, 'active', 1, 0, 1, 'Rohan Puri', 1, '2019-09-21 16:07:00', NULL),
(94, '24 Hours�Donald Trump', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 19, 'Bahara', '2019-09-22', '8.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-09-22 16:07:00', NULL),
(95, 'The�Donald Trump�Star', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 21, 'Rauthat', '2019-09-23', '9.jpg', 1, 'active', 1, 0, 0, 'Binay Karki', 1, '2019-09-23 16:07:00', NULL),
(96, 'Donald Trump�Free Press', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 10, 'Sindhuli', '2019-09-24', '10.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-09-24 16:07:00', NULL),
(97, 'The Daily�Donald Trump', 'Be Aware of your friends, don�t trust them bliendly.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 20, 'Papla', '2019-09-25', '3.jpg', 1, 'active', 1, 0, 1, 'Pujan Paudel', 1, '2019-09-25 16:07:00', NULL),
(98, 'Metro�Donald Trump', 'Nothing is safe in this world, don�t trust anyone.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 22, 'Sindhupalchok', '2019-09-26', '1.jpg', 1, 'active', 0, 1, 1, 'Dummy Insert', 1, '2019-09-26 16:07:00', NULL),
(99, 'The Donald Trump Spectator', 'Be Aware of your friends, don\'t trust them bliendly.', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!&lt;/p&gt;', 17, 'Kathmandu', '2019-09-27', '2.jpg', 1, 'active', 1, 0, 0, 'Sandesh Khanal', 1, '2019-09-27 16:07:00', '2019-06-25 12:39:28'),
(100, 'Donald Trump Nugget', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae!', 24, 'Pokhera', '2019-09-28', '3.jpg', 1, 'active', 0, 1, 0, 'Dummy Insert', 1, '2019-09-28 16:07:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `role` enum('admin','reporter') COLLATE utf8mb4_unicode_ci DEFAULT 'reporter',
  `remember_token` text COLLATE utf8mb4_unicode_ci,
  `last_ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `role`, `remember_token`, `last_ip`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'Admin News', 'admin@news1200.com', '48fba17a86b1201c2bc0d26d6d4bb15e0425aac2', 'active', 'admin', '9aTAnc4WCKiPI4OvcukMF4MTkJwzF1YS8z7uvOZaFFc5muK0cafCADiinDKPJMuHTnrpxBgQ1fI3WnikAuKe5uDPlRBrhkeULiA3', '127.0.0.1', '2019-06-26 12:26:37', '2019-06-12 12:29:26', '2019-06-26 12:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `video_link` text COLLATE utf8mb4_unicode_ci,
  `video_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `added_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `video_link`, `video_id`, `status`, `added_by`, `created_at`, `updated_at`) VALUES
(2, 'Quaerat tempor aut q', 'Et deserunt minus am', 'https://www.youtube.com/embed/ihxU7VUG1XA', 'ihxU7VUG1XA', 'active', 1, '2019-06-21 12:52:01', '2019-06-21 12:53:26'),
(3, 'Et deleniti ipsam ve', 'Tempore eum debitis', 'https://www.gadydyqil.ca', NULL, 'active', 1, '2019-06-25 12:49:02', NULL),
(4, 'Qui dolor necessitat', 'Fugiat delectus as', 'https://www.youtube.com/watch?v=hMBKmQEPNzI', 'hMBKmQEPNzI', 'active', 1, '2019-06-25 12:49:24', NULL),
(5, 'Repudiandae et molli', 'Fugiat voluptate ten', 'https://m.youtube.com/watch?v=izilPnkMAA8', 'izilPnkMAA8', 'active', 1, '2019-06-25 12:49:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_id` (`gallery_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`,`reporter`,`added_by`),
  ADD KEY `reporter` (`reporter`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `constraint_fkey_gallery_id` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`reporter`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `news_ibfk_3` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
