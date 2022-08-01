-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 02:23 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nads_postan_marj`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `script` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `album_photo`
--

CREATE TABLE `album_photo` (
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `photo_id` bigint(20) UNSIGNED NOT NULL,
  `is_display` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `album_video`
--

CREATE TABLE `album_video` (
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` bigint(20) UNSIGNED NOT NULL,
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_polls`
--

CREATE TABLE `article_polls` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `poll_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_settings`
--

CREATE TABLE `article_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `show_views_no` tinyint(1) NOT NULL,
  `show_category_name` tinyint(1) NOT NULL,
  `show_aouthor_name` tinyint(1) NOT NULL,
  `show_orderby` tinyint(1) NOT NULL,
  `show_display_no` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_video`
--

CREATE TABLE `article_video` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL,
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `open_newtab` tinyint(1) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `photo_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_id_inner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `home_display` tinyint(1) NOT NULL,
  `sort` bigint(20) NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `layout_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories_banners`
--

CREATE TABLE `categories_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `sort` bigint(20) NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories_staffs`
--

CREATE TABLE `categories_staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '1',
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactusinfos`
--

CREATE TABLE `contactusinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `googlemap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

CREATE TABLE `custom_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validation` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `sort` bigint(20) NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_field_descriptions`
--

CREATE TABLE `custom_field_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `custom_field_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_field_values`
--

CREATE TABLE `custom_field_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custom_field_id` bigint(20) UNSIGNED NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_field_value_descriptions`
--

CREATE TABLE `custom_field_value_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `custom_field_value_id` bigint(20) UNSIGNED NOT NULL,
  `custom_field_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `displaylimits`
--

CREATE TABLE `displaylimits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `limit` bigint(20) NOT NULL,
  `is_trash` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_video`
--

CREATE TABLE `event_video` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footercontents`
--

CREATE TABLE `footercontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `column_first_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_seconed_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_third_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_fourth_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `functional_titles`
--

CREATE TABLE `functional_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `is_trash` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `sort`, `is_trash`, `created_at`, `updated_at`) VALUES
(1, 'العربية', 'ar', 0, 0, NULL, NULL),
(2, 'English', 'en', 1, 0, NULL, NULL),
(4, 'العبرية', 'ara', 3, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `layouts`
--

CREATE TABLE `layouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `left_col_enable` tinyint(1) NOT NULL,
  `right_col_enable` tinyint(1) NOT NULL,
  `top_col_enable` tinyint(1) NOT NULL,
  `bottom_col_enable` tinyint(1) NOT NULL,
  `header_enable` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_models`
--

CREATE TABLE `list_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allow_dashboard_show` bigint(20) NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mailsettings`
--

CREATE TABLE `mailsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_protocol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SMTP_hostname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SMTP_username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SMTP_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SMTP_port` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SMTP_timeout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailcc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_id` int(10) UNSIGNED NOT NULL,
  `updater_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `media_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Media Name',
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Media Type',
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media_entities`
--

CREATE TABLE `media_entities` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `entity_id` int(10) UNSIGNED NOT NULL,
  `media_id` int(10) UNSIGNED NOT NULL,
  `entity_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `dropdown_level` bigint(20) NOT NULL,
  `is_parent` tinyint(1) NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_03_13_095636_create_permissions_table', 2),
(6, '2019_03_13_095719_create_roles_table', 2),
(8, '2019_03_13_100058_create_roles_permissions_table', 3),
(85, '2014_10_12_100010_create_languages_table', 4),
(86, '2019_03_13_101455_create_users_permissions_table', 4),
(87, '2019_03_13_102401_create_users_roles_table', 4),
(88, '2019_03_13_102402_create_states_table', 4),
(140, '2019_03_17_135634_create_news_table', 14),
(141, '2014_10_12_100009_create_layouts_table', 15),
(142, '2017_11_15_052801_create_media_table', 15),
(143, '2017_11_23_114946_create_media_entities_table', 15),
(144, '2019_03_17_102311_create_contactusinfos_table', 15),
(145, '2019_03_17_102312_create_photos_table', 15),
(146, '2019_03_17_110855_create_sociallinks_table', 15),
(147, '2019_03_17_125545_create_categories_table', 15),
(148, '2019_03_17_132413_create_authors_table', 15),
(149, '2019_03_17_132414_create_articles_table', 16),
(150, '2019_03_17_134843_create_categories_banners_table', 16),
(151, '2019_03_17_134844_create_banners_table', 16),
(152, '2019_03_17_135520_create_settings_table', 16),
(153, '2019_03_17_135904_create_albums_table', 16),
(154, '2019_03_17_151442_album_photo', 16),
(155, '2019_03_18_115910_create_videos_table', 17),
(156, '2019_03_18_115911_create_polls_table', 17),
(157, '2019_03_18_115912_create_comments_table', 17),
(158, '2019_03_18_120021_create_questions_table', 17),
(159, '2019_03_18_120106_create_answers_table', 17),
(160, '2019_03_18_120600_create_events_table', 17),
(161, '2019_03_18_142229_article_video', 17),
(162, '2019_03_18_142407_event_video', 17),
(163, '2019_03_18_142452_album_video', 17),
(164, '2019_03_18_142600_create_menus_table', 17),
(165, '2019_03_19_143626_create_menu_items_table', 17),
(166, '2019_03_19_143802_create_social_apps_table', 17),
(167, '2019_03_19_144033_create_list_models_table', 17),
(168, '2019_03_20_074427_create_article_settings_table', 17),
(170, '2019_03_20_075346_article_poll', 17),
(171, '2019_03_20_075644_create_uploadfiles_table', 17),
(172, '2019_03_20_090629_create_adds_table', 17),
(173, '2019_03_20_124100_create_fields_table', 17),
(174, '2019_03_20_124240_create_categories_staffs_table', 17),
(175, '2019_03_20_124534_create_functional_titles_table', 17),
(176, '2019_03_20_125005_create_staff_table', 17),
(177, '2019_03_21_115832_create_mailsettings_table', 17),
(178, '2019_03_21_123936_create_orders_table', 17),
(179, '2019_03_21_125019_create_displaylimits_table', 17),
(180, '2019_03_24_080314_create_custom_fields_table', 17),
(181, '2019_03_24_080623_create_custom_field_descriptions_table', 17),
(182, '2019_03_24_082025_create_custom_field_values_table', 17),
(183, '2019_03_24_082046_create_custom_field_value_descriptions_table', 17),
(184, '2019_03_20_074924_create_footercontents_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` bigint(20) UNSIGNED NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `is_trash` tinyint(1) NOT NULL,
  `thumb_display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `short_description`, `description`, `language_id`, `thumb`, `alias`, `meta_title`, `youtube_url`, `meta_description`, `sort`, `status`, `user_id_create`, `user_id_modify`, `is_trash`, `thumb_display`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test', 2, '/photos/1/invoice.png', 'test', 'test', 'test', 'test', 0, 3, 1, 1, 1, 1, '2019-03-29 19:25:51', '2019-03-29 21:30:27'),
(2, 'test', 'test', 'test', 2, '/photos/1/invoice.png', 'test', 'test', 'test', 'test', 0, 3, 1, 1, 1, 1, '2019-03-29 19:26:09', '2019-03-29 21:30:33'),
(3, 'test', 'test', 'test', 2, '/photos/1/invoice.png', 'test', 'test', 'test', 'test', 0, 3, 1, 1, 1, 1, '2019-03-29 19:27:18', '2019-03-29 21:30:36'),
(4, 'test', 'test', 'test', 2, '/photos/1/invoice.png', 'test', 'test', 'test', 'test', 0, 3, 1, 1, 1, 1, '2019-03-29 19:30:52', '2019-03-29 21:30:40'),
(5, 'test', 'test', 'test', 2, '/photos/1/invoice.png', 'test', 'test', 'test', 'test', 0, 3, 1, 1, 1, 1, '2019-03-29 19:32:48', '2019-03-29 21:34:57'),
(6, 'test', 'test', 'test', 2, '/photos/1/invoice.png', 'test', 'test', 'test', 'test', 0, 3, 1, 1, 1, 1, '2019-03-29 19:34:34', '2019-03-29 21:36:27'),
(7, 'Kuwaiti Dinar', 'Kuwaiti Dinar', '<p>Kuwaiti Dinarddddddddddddddddddddddddddddddd<img data-filename=\"screencapture-makhzaan-mawaqaatest-2018-08-22-13_20_50.png\" style=\"width: 978px;\" src=\"/photos/15541027060.png\"><img data-cke-saved-src=\"/photos/15541026740.png\" style=\"width:978px\" src=\"/photos/15541027061.png\"></p>\n', 2, '/photos/1/1553438558_makhzaan.jpeg', 'Kuwaiti Dinar', 'Kuwaiti Dinar', 'Kuwaiti Dinar', 'Kuwaiti Dinar', 2, 2, 1, 1, 0, 1, '2019-03-29 19:37:16', '2019-04-01 05:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(3, 'create-tasks', 'create-tasks', '2019-03-13 14:31:32', '2019-03-13 14:31:46'),
(4, 'edit-users', 'edit-users', '2019-03-13 14:31:32', '2019-03-13 14:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `poll_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 'developer', 'developer', '2019-03-13 14:28:13', '2019-03-13 14:28:25'),
(2, 'manager', 'manager', '2019-03-13 14:28:13', '2019-03-13 14:28:25'),
(5, 'admin', 'admin', '2019-03-14 08:23:44', '2019-03-14 08:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`role_id`, `permission_id`) VALUES
(1, 4),
(2, 3),
(2, 4),
(5, 3),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_news_perpage` bigint(20) NOT NULL,
  `number_articles_perpage` bigint(20) NOT NULL,
  `number_categories_perpage` bigint(20) NOT NULL,
  `number_itemsphotos_peralbum` bigint(20) NOT NULL,
  `number_itemsvideos_peralbum` bigint(20) NOT NULL,
  `allow_watermark` tinyint(1) NOT NULL,
  `allow_comments` tinyint(1) NOT NULL,
  `allow_register` tinyint(1) NOT NULL,
  `allow_login` tinyint(1) NOT NULL,
  `allow_captcha` tinyint(1) NOT NULL,
  `use_seo_urls` tinyint(1) NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allow_upload_types_offiles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `watermark` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_default_language` bigint(20) UNSIGNED NOT NULL,
  `web_default_language` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa_icon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_apps`
--

CREATE TABLE `social_apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `app_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_id` bigint(20) UNSIGNED NOT NULL,
  `categories_staff_id` bigint(20) UNSIGNED NOT NULL,
  `function_title_id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `is_trash` tinyint(1) NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `title`, `alias`, `sort`, `status`, `is_trash`, `language_id`, `created_at`, `updated_at`) VALUES
(1, 'منشور', 'منشور', 1, 1, 0, 1, NULL, NULL),
(2, 'جاهز للنشر', 'جاهز-للنشر', 2, 1, 0, 1, NULL, NULL),
(3, 'بحاجة لصور', 'بحاجة-لصور', 3, 1, 0, 1, NULL, NULL),
(4, 'بحاجة للمراجعة', 'بحاجة-للمراجعة', 4, 1, 0, 1, NULL, NULL),
(5, 'ليس للنشر', 'ليس-للنشر', 5, 1, 0, 1, NULL, NULL),
(6, 'To publication', 'to-publication', 1, 1, 0, 2, NULL, NULL),
(7, 'Publication', 'publication', 0, 1, 0, 2, NULL, NULL),
(8, 'Need Images', 'need-images', 4, 1, 0, 2, NULL, NULL),
(9, 'Need to review', 'need-review', 5, 1, 0, 2, NULL, NULL),
(10, 'Not for publication', 'not-for-publication', 6, 1, 0, 2, NULL, NULL),
(11, 'פורסם', 'פורסם', 0, 1, 0, 4, NULL, NULL),
(12, 'מוכן לפרסם', 'מוכן לפרסם', 1, 1, 0, 4, NULL, NULL),
(13, 'צריך תמונות', 'צריך תמונות', 2, 1, 0, 4, NULL, NULL),
(14, 'זקוק לבדיקה', 'זקוק לבדיקה', 3, 1, 0, 4, NULL, NULL),
(15, 'לא לפרסום', 'לא לפרסום', 4, 1, 0, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uploadfiles`
--

CREATE TABLE `uploadfiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ibtisam', 'ibtisam_im@yahoo.com', NULL, '$2y$10$Zq1NX6s9xWbfHTBHPEBmMusq/CT36laWl9sd11BfQ/SCQbZF7FSwu', 'fPSYfaJwQpITdXYO0w1O73ecj77fLcFah3KX85XFuaS0Vks0LTDMuxOHQA8z', '2019-03-12 19:42:01', '2019-03-12 19:42:01'),
(2, 'admin', 'admin@hotmail.com', NULL, '1234567890', 'fPSYfaJwQpITdXYO0w1O73ecj77fLcFah3KX85XFuaS0Vks0LTDMuxOHQA8z', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

CREATE TABLE `users_permissions` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_permissions`
--

INSERT INTO `users_permissions` (`user_id`, `permission_id`) VALUES
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`user_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  `user_id_create` bigint(20) UNSIGNED NOT NULL,
  `user_id_modify` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `thumb` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adds_id_index` (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_language_id_foreign` (`language_id`),
  ADD KEY `albums_parent_id_foreign` (`parent_id`),
  ADD KEY `albums_user_id_create_foreign` (`user_id_create`),
  ADD KEY `albums_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `albums_id_index` (`id`);

--
-- Indexes for table `album_photo`
--
ALTER TABLE `album_photo`
  ADD PRIMARY KEY (`album_id`,`photo_id`);

--
-- Indexes for table `album_video`
--
ALTER TABLE `album_video`
  ADD PRIMARY KEY (`album_id`,`video_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_language_id_foreign` (`language_id`),
  ADD KEY `answers_question_id_foreign` (`question_id`),
  ADD KEY `answers_user_id_create_foreign` (`user_id_create`),
  ADD KEY `answers_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `answers_id_index` (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_language_id_foreign` (`language_id`),
  ADD KEY `articles_author_id_foreign` (`author_id`),
  ADD KEY `articles_user_id_create_foreign` (`user_id_create`),
  ADD KEY `articles_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_status_foreign` (`status`),
  ADD KEY `articles_id_index` (`id`);

--
-- Indexes for table `article_polls`
--
ALTER TABLE `article_polls`
  ADD PRIMARY KEY (`article_id`,`poll_id`);

--
-- Indexes for table `article_settings`
--
ALTER TABLE `article_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_settings_id_index` (`id`);

--
-- Indexes for table `article_video`
--
ALTER TABLE `article_video`
  ADD PRIMARY KEY (`article_id`,`video_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authors_language_id_foreign` (`language_id`),
  ADD KEY `authors_user_id_create_foreign` (`user_id_create`),
  ADD KEY `authors_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `authors_id_index` (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_language_id_foreign` (`language_id`),
  ADD KEY `banners_category_id_foreign` (`category_id`),
  ADD KEY `banners_user_id_create_foreign` (`user_id_create`),
  ADD KEY `banners_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `banners_id_index` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_language_id_foreign` (`language_id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_layout_id_foreign` (`layout_id`),
  ADD KEY `categories_user_id_create_foreign` (`user_id_create`),
  ADD KEY `categories_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `categories_id_index` (`id`);

--
-- Indexes for table `categories_banners`
--
ALTER TABLE `categories_banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_banners_language_id_foreign` (`language_id`),
  ADD KEY `categories_banners_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_banners_user_id_create_foreign` (`user_id_create`),
  ADD KEY `categories_banners_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `categories_banners_id_index` (`id`);

--
-- Indexes for table `categories_staffs`
--
ALTER TABLE `categories_staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_staffs_user_id_create_foreign` (`user_id_create`),
  ADD KEY `categories_staffs_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `categories_staffs_language_id_foreign` (`language_id`),
  ADD KEY `categories_staffs_id_index` (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_article_id_foreign` (`article_id`),
  ADD KEY `comments_video_id_foreign` (`video_id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`),
  ADD KEY `comments_id_index` (`id`);

--
-- Indexes for table `contactusinfos`
--
ALTER TABLE `contactusinfos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contactusinfos_language_id_foreign` (`language_id`),
  ADD KEY `contactusinfos_id_index` (`id`);

--
-- Indexes for table `custom_fields`
--
ALTER TABLE `custom_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_fields_user_id_create_foreign` (`user_id_create`),
  ADD KEY `custom_fields_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `custom_fields_id_index` (`id`);

--
-- Indexes for table `custom_field_descriptions`
--
ALTER TABLE `custom_field_descriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_field_descriptions_language_id_foreign` (`language_id`),
  ADD KEY `custom_field_descriptions_custom_field_id_foreign` (`custom_field_id`),
  ADD KEY `custom_field_descriptions_id_index` (`id`);

--
-- Indexes for table `custom_field_values`
--
ALTER TABLE `custom_field_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_field_values_user_id_create_foreign` (`user_id_create`),
  ADD KEY `custom_field_values_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `custom_field_values_custom_field_id_foreign` (`custom_field_id`),
  ADD KEY `custom_field_values_id_index` (`id`);

--
-- Indexes for table `custom_field_value_descriptions`
--
ALTER TABLE `custom_field_value_descriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_field_value_descriptions_language_id_foreign` (`language_id`),
  ADD KEY `custom_field_value_descriptions_custom_field_value_id_foreign` (`custom_field_value_id`),
  ADD KEY `custom_field_value_descriptions_custom_field_id_foreign` (`custom_field_id`),
  ADD KEY `custom_field_value_descriptions_id_index` (`id`);

--
-- Indexes for table `displaylimits`
--
ALTER TABLE `displaylimits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `displaylimits_id_index` (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_language_id_foreign` (`language_id`),
  ADD KEY `events_user_id_create_foreign` (`user_id_create`),
  ADD KEY `events_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `events_id_index` (`id`);

--
-- Indexes for table `event_video`
--
ALTER TABLE `event_video`
  ADD PRIMARY KEY (`event_id`,`video_id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fields_user_id_create_foreign` (`user_id_create`),
  ADD KEY `fields_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `fields_language_id_foreign` (`language_id`);

--
-- Indexes for table `footercontents`
--
ALTER TABLE `footercontents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footercontents_id_index` (`id`);

--
-- Indexes for table `functional_titles`
--
ALTER TABLE `functional_titles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `functional_titles_user_id_create_foreign` (`user_id_create`),
  ADD KEY `functional_titles_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `functional_titles_language_id_foreign` (`language_id`),
  ADD KEY `functional_titles_id_index` (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `languages_id_index` (`id`);

--
-- Indexes for table `layouts`
--
ALTER TABLE `layouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `layouts_language_id_foreign` (`language_id`),
  ADD KEY `layouts_id_index` (`id`);

--
-- Indexes for table `list_models`
--
ALTER TABLE `list_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `list_models_language_id_foreign` (`language_id`),
  ADD KEY `list_models_user_id_create_foreign` (`user_id_create`),
  ADD KEY `list_models_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `list_models_id_index` (`id`);

--
-- Indexes for table `mailsettings`
--
ALTER TABLE `mailsettings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mailsettings_id_index` (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_entities`
--
ALTER TABLE `media_entities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_entities_entity_id_index` (`entity_id`),
  ADD KEY `media_entities_media_id_index` (`media_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_language_id_foreign` (`language_id`),
  ADD KEY `menus_user_id_create_foreign` (`user_id_create`),
  ADD KEY `menus_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `menus_id_index` (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_language_id_foreign` (`language_id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`),
  ADD KEY `menu_items_user_id_create_foreign` (`user_id_create`),
  ADD KEY `menu_items_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `menu_items_id_index` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_language_id_foreign` (`language_id`),
  ADD KEY `news_status_foreign` (`status`),
  ADD KEY `news_user_id_create_foreign` (`user_id_create`),
  ADD KEY `news_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `news_id_index` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_language_id_foreign` (`language_id`),
  ADD KEY `orders_id_index` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_language_id_foreign` (`language_id`),
  ADD KEY `photos_user_id_create_foreign` (`user_id_create`),
  ADD KEY `photos_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `photos_id_index` (`id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `polls_language_id_foreign` (`language_id`),
  ADD KEY `polls_user_id_create_foreign` (`user_id_create`),
  ADD KEY `polls_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `polls_id_index` (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_language_id_foreign` (`language_id`),
  ADD KEY `questions_poll_id_foreign` (`poll_id`),
  ADD KEY `questions_user_id_create_foreign` (`user_id_create`),
  ADD KEY `questions_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `questions_id_index` (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`),
  ADD KEY `roles_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_admin_default_language_foreign` (`admin_default_language`),
  ADD KEY `settings_web_default_language_foreign` (`web_default_language`),
  ADD KEY `settings_id_index` (`id`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sociallinks_language_id_foreign` (`language_id`),
  ADD KEY `sociallinks_id_index` (`id`);

--
-- Indexes for table `social_apps`
--
ALTER TABLE `social_apps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_apps_id_index` (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_user_id_create_foreign` (`user_id_create`),
  ADD KEY `staff_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `staff_categories_staff_id_foreign` (`categories_staff_id`),
  ADD KEY `staff_field_id_foreign` (`field_id`),
  ADD KEY `staff_function_title_id_foreign` (`function_title_id`),
  ADD KEY `staff_language_id_foreign` (`language_id`),
  ADD KEY `staff_id_index` (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_language_id_foreign` (`language_id`),
  ADD KEY `states_id_index` (`id`);

--
-- Indexes for table `uploadfiles`
--
ALTER TABLE `uploadfiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uploadfiles_language_id_foreign` (`language_id`),
  ADD KEY `uploadfiles_user_id_create_foreign` (`user_id_create`),
  ADD KEY `uploadfiles_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `uploadfiles_id_index` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `users_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `users_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_language_id_foreign` (`language_id`),
  ADD KEY `videos_user_id_create_foreign` (`user_id_create`),
  ADD KEY `videos_user_id_modify_foreign` (`user_id_modify`),
  ADD KEY `videos_id_index` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_settings`
--
ALTER TABLE `article_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories_banners`
--
ALTER TABLE `categories_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories_staffs`
--
ALTER TABLE `categories_staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactusinfos`
--
ALTER TABLE `contactusinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_fields`
--
ALTER TABLE `custom_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_field_descriptions`
--
ALTER TABLE `custom_field_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_field_values`
--
ALTER TABLE `custom_field_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_field_value_descriptions`
--
ALTER TABLE `custom_field_value_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `displaylimits`
--
ALTER TABLE `displaylimits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footercontents`
--
ALTER TABLE `footercontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `functional_titles`
--
ALTER TABLE `functional_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `layouts`
--
ALTER TABLE `layouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_models`
--
ALTER TABLE `list_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mailsettings`
--
ALTER TABLE `mailsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media_entities`
--
ALTER TABLE `media_entities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_apps`
--
ALTER TABLE `social_apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `uploadfiles`
--
ALTER TABLE `uploadfiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `albums_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `albums_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `albums_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_status_foreign` FOREIGN KEY (`status`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `authors_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `authors_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories_banners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `banners_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `banners_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `banners_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_layout_id_foreign` FOREIGN KEY (`layout_id`) REFERENCES `layouts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories_banners`
--
ALTER TABLE `categories_banners`
  ADD CONSTRAINT `categories_banners_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_banners_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories_banners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_banners_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_banners_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories_staffs`
--
ALTER TABLE `categories_staffs`
  ADD CONSTRAINT `categories_staffs_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_staffs_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_staffs_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contactusinfos`
--
ALTER TABLE `contactusinfos`
  ADD CONSTRAINT `contactusinfos_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `custom_fields`
--
ALTER TABLE `custom_fields`
  ADD CONSTRAINT `custom_fields_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `custom_fields_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `custom_field_descriptions`
--
ALTER TABLE `custom_field_descriptions`
  ADD CONSTRAINT `custom_field_descriptions_custom_field_id_foreign` FOREIGN KEY (`custom_field_id`) REFERENCES `custom_fields` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `custom_field_descriptions_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `custom_field_values`
--
ALTER TABLE `custom_field_values`
  ADD CONSTRAINT `custom_field_values_custom_field_id_foreign` FOREIGN KEY (`custom_field_id`) REFERENCES `custom_fields` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `custom_field_values_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `custom_field_values_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `custom_field_value_descriptions`
--
ALTER TABLE `custom_field_value_descriptions`
  ADD CONSTRAINT `custom_field_value_descriptions_custom_field_id_foreign` FOREIGN KEY (`custom_field_id`) REFERENCES `custom_fields` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `custom_field_value_descriptions_custom_field_value_id_foreign` FOREIGN KEY (`custom_field_value_id`) REFERENCES `custom_field_values` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `custom_field_value_descriptions_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `events_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `events_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fields`
--
ALTER TABLE `fields`
  ADD CONSTRAINT `fields_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fields_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fields_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `functional_titles`
--
ALTER TABLE `functional_titles`
  ADD CONSTRAINT `functional_titles_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `functional_titles_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `functional_titles_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `layouts`
--
ALTER TABLE `layouts`
  ADD CONSTRAINT `layouts_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `list_models`
--
ALTER TABLE `list_models`
  ADD CONSTRAINT `list_models_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `list_models_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `list_models_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menus_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menus_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menu_items_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menu_items_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_status_foreign` FOREIGN KEY (`status`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `photos_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `photos_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `polls`
--
ALTER TABLE `polls`
  ADD CONSTRAINT `polls_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `polls_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `polls_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD CONSTRAINT `roles_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_admin_default_language_foreign` FOREIGN KEY (`admin_default_language`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `settings_web_default_language_foreign` FOREIGN KEY (`web_default_language`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD CONSTRAINT `sociallinks_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_categories_staff_id_foreign` FOREIGN KEY (`categories_staff_id`) REFERENCES `categories_staffs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_function_title_id_foreign` FOREIGN KEY (`function_title_id`) REFERENCES `functional_titles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `uploadfiles`
--
ALTER TABLE `uploadfiles`
  ADD CONSTRAINT `uploadfiles_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `uploadfiles_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `uploadfiles_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD CONSTRAINT `users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `videos_user_id_create_foreign` FOREIGN KEY (`user_id_create`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `videos_user_id_modify_foreign` FOREIGN KEY (`user_id_modify`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
