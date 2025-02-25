-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2025 at 12:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorswalle`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutfeature`
--

CREATE TABLE `aboutfeature` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutfeature`
--

INSERT INTO `aboutfeature` (`id`, `title`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Learn From Anywhere', 'public/icons/Fv7az8tJvSQqF90aodULUxF8F1cryeDJFaZeGMUr.png', 'Competently unleash competitive initiatives for alternative interfaces. Enthusiastically supply resource leveling platforms.', '2025-02-21 21:08:22', '2025-02-21 21:08:22'),
(2, 'Expert Instructor', 'public/icons/VauuIGJnIBqX48kklPDauLMcVzamx6pl2DdBahWL.png', 'Competently unleash competitive initiatives for alternative interfaces. Enthusiastically supply resource leveling platforms.', '2025-02-21 21:08:22', '2025-02-21 21:08:22'),
(3, '24/7 Live Support', 'public/icons/Y3Ko2gapqAPqqzTkdsIkDKjfy1YWcNOdY39weeTe.png', 'Competently unleash competitive initiatives for alternative interfaces. Enthusiastically supply resource leveling platforms.', '2025-02-21 21:08:22', '2025-02-21 21:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `successfully_trained` int(11) NOT NULL DEFAULT 0,
  `classes_completed` int(11) NOT NULL DEFAULT 0,
  `satisfaction_rate` int(11) NOT NULL DEFAULT 0,
  `student_community` int(11) NOT NULL DEFAULT 0,
  `popular_course_title1` varchar(191) DEFAULT NULL,
  `popular_course_description1` text DEFAULT NULL,
  `popular_course_cta_text1` varchar(191) DEFAULT NULL,
  `popular_course_cta_link1` varchar(191) DEFAULT NULL,
  `popular_course_title2` varchar(191) DEFAULT NULL,
  `popular_course_description2` text DEFAULT NULL,
  `popular_course_cta_text2` varchar(191) DEFAULT NULL,
  `popular_course_cta_link2` varchar(191) DEFAULT NULL,
  `banner_image` varchar(191) DEFAULT NULL,
  `student_image_1` varchar(191) DEFAULT NULL,
  `student_image_2` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `successfully_trained`, `classes_completed`, `satisfaction_rate`, `student_community`, `popular_course_title1`, `popular_course_description1`, `popular_course_cta_text1`, `popular_course_cta_link1`, `popular_course_title2`, `popular_course_description2`, `popular_course_cta_text2`, `popular_course_cta_link2`, `banner_image`, `student_image_1`, `student_image_2`, `created_at`, `updated_at`) VALUES
(1, 3900, 15800, 97500, 100200, 'POPULAR COURSES', 'Get The Best Courses & Upgrade Your Skills', 'JOIN WIITH US', 'join', 'POPULAR COURSES', 'Engaging Courses for Intellectual Exploration', 'EXPLORE COURSES', 'course', 'public/banner_images/ajxIW5ejCpdUtrOwaeQl40xVahMo1hXFpadOSuq5.png', 'public/student_image_1s/MeL8Phz18CdIJ7EcZ6b3quzbcAOQbiU71TsfLHCx.png', 'public/student_image_2s/s3S8vF01UJdpuzfnVh58YjThNO100QfdFIi1beKU.png', '2025-02-21 21:08:22', '2025-02-21 21:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(191) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(191) DEFAULT NULL,
  `event` varchar(191) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(191) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bannermanagements`
--

CREATE TABLE `bannermanagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `link` varchar(225) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bannermanagements`
--

INSERT INTO `bannermanagements` (`id`, `title`, `description`, `image`, `link`, `status`, `order`, `created_by`, `updated_by`, `deleted_by`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Lorem ipsum dolor sit.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, facere!', '1740092581.png', 'about-us', 1, 1, 1, 1, NULL, NULL, '2025-01-29 11:06:22', '2025-02-20 23:33:01', NULL),
(3, 'Lorem ipsum dolor sit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam!', '1740092572.png', 'about-us', 1, 2, 1, 1, NULL, NULL, '2025-01-29 19:53:48', '2025-02-20 23:32:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `group_name` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `order` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'Active',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classmanagements`
--

CREATE TABLE `classmanagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classmanagements`
--

INSERT INTO `classmanagements` (`id`, `name`, `slug`, `description`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'XII', 'xii', 'Classs 12', 1, 1, 1, NULL, '2025-02-20 23:34:08', '2025-02-20 23:34:08', NULL),
(2, 'XI', 'xi', 'Class 11', 1, 1, 1, NULL, '2025-02-20 23:34:34', '2025-02-20 23:34:34', NULL),
(3, 'X', 'x', 'Class 10', 1, 1, 1, NULL, '2025-02-20 23:34:55', '2025-02-20 23:34:55', NULL),
(4, 'IX', 'ix', 'Class 9', 1, 1, 1, NULL, '2025-02-20 23:35:12', '2025-02-20 23:35:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `commentable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `commentable_type` varchar(191) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `user_name` varchar(191) DEFAULT NULL,
  `order` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `moderated_by` int(10) UNSIGNED DEFAULT NULL,
  `moderated_at` datetime DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `subject` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test', 'login@gmail.com', '8888888888', 'physics', 'messsage', '2025-02-19 21:13:56', '2025-02-19 21:13:56'),
(2, 'test2', 'test@gmail.com', '8888888888', '', 'tst', '2025-02-19 21:16:12', '2025-02-19 21:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `exclusiveclasses`
--

CREATE TABLE `exclusiveclasses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `session_date` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exclusiveclasses`
--

INSERT INTO `exclusiveclasses` (`id`, `subject_id`, `class_id`, `description`, `status`, `session_date`, `location`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Five Classes a Week', 1, '2025-02-21', 'Mumbai', 1, 1, NULL, '2025-02-20 23:37:29', '2025-02-20 23:37:29', NULL),
(2, 4, 2, 'Three Classes a Week', 1, '2025-02-21', 'Mumbai', 1, 1, NULL, '2025-02-20 23:38:01', '2025-02-20 23:38:01', NULL),
(3, 5, 3, 'Two Classes a Week', 1, '2025-02-22', 'Kolkata', 1, 1, NULL, '2025-02-20 23:38:39', '2025-02-20 23:38:39', NULL),
(4, 6, 4, 'Four Classes a Week', 1, '2025-02-21', 'Mumbai', 1, 1, NULL, '2025-02-20 23:39:04', '2025-02-20 23:39:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'What Does It Take to Be an Excellent Author?', 'The time it takes to repair a roof depends on the extent of the damage. For minor repairs, it might take an hour or two. For significant repairs, a team might be at your home for half a day.', 1, 1, 1, NULL, '2025-01-29 21:10:29', '2025-01-29 21:10:29', NULL),
(2, 'Is the purpose of education integral development?', 'Education serves to foster the holistic growth of individuals, enabling them to reach their full potential.', 1, 1, 1, NULL, '2025-02-19 21:32:54', '2025-02-19 21:32:54', NULL),
(3, 'Can education contribute to betterment?', 'Yes, education equips individuals with the skills and knowledge to improve society and achieve progress.', 1, 1, 1, NULL, '2025-02-19 21:33:29', '2025-02-19 21:33:29', NULL),
(4, 'Can education contribute to betterment?', 'Yes, education equips individuals with the skills and knowledge to improve society and achieve progress.', 1, 1, 1, NULL, '2025-02-19 21:33:29', '2025-02-19 21:33:29', NULL),
(5, 'Can education contribute to betterment?', 'Yes, education equips individuals with the skills and knowledge to improve society and achieve progress.', 1, 1, 1, NULL, '2025-02-19 21:33:29', '2025-02-19 21:33:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `file_name` varchar(191) NOT NULL,
  `mime_type` varchar(191) DEFAULT NULL,
  `disk` varchar(191) NOT NULL,
  `conversions_disk` varchar(191) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_11_062135_create_posts_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_02_19_173641_create_settings_table', 1),
(7, '2020_02_19_173700_create_userprofiles_table', 1),
(8, '2020_02_19_173711_create_notifications_table', 1),
(9, '2020_02_22_115918_create_user_providers_table', 1),
(10, '2020_05_01_163442_create_tags_table', 1),
(11, '2020_05_01_163833_create_polymorphic_taggables_table', 1),
(12, '2020_05_04_151517_create_comments_table', 1),
(13, '2022_04_01_132914_create_media_table', 1),
(14, '2022_04_01_133918_create_permission_tables', 1),
(15, '2022_04_01_134140_create_activity_log_table', 1),
(16, '2022_04_01_134141_add_event_column_to_activity_log_table', 1),
(17, '2022_04_01_134142_add_batch_uuid_column_to_activity_log_table', 1),
(18, '2023_03_12_195541_add_expires_at_column_to_personal_access_tokens_table', 1),
(19, '2023_07_30_013129_create_categories_table', 1),
(20, '2025_01_28_160306_create_table_name', 2),
(25, '2025_01_29_010736_create_bannermanagements_table', 3),
(27, '2025_01_30_021539_create_faqs_table', 4),
(28, '2025_01_30_021702_create_testimonials_table', 5),
(29, '2025_01_28_160821_banner', 6),
(30, '2025_02_06_031542_create_classmanagements_table', 6),
(31, '2025_02_06_035524_create_subjectmanagements_table', 6),
(32, '2025_02_06_160504_update_subjectmanagements_table', 6),
(33, '2025_02_08_065426_create_exclusiveclasses_table', 6),
(36, '2025_02_19_141140_create_contacts_table', 7),
(37, '2025_02_20_020017_create_tutorhirings_table', 8),
(40, '2025_02_20_034056_create_aboutus_table', 9),
(41, '2025_02_09_024747_create_tutormanagements_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(191) NOT NULL,
  `notifiable_type` varchar(191) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `guard_name` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_backend', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(2, 'edit_settings', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(3, 'view_logs', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(4, 'view_users', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(5, 'add_users', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(6, 'edit_users', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(7, 'delete_users', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(8, 'restore_users', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(9, 'block_users', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(10, 'view_roles', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(11, 'add_roles', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(12, 'edit_roles', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(13, 'delete_roles', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(14, 'restore_roles', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(15, 'view_backups', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(16, 'add_backups', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(17, 'create_backups', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(18, 'download_backups', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(19, 'delete_backups', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(20, 'view_posts', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(21, 'add_posts', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(22, 'edit_posts', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(23, 'delete_posts', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(24, 'restore_posts', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(25, 'view_categories', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(26, 'add_categories', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(27, 'edit_categories', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(28, 'delete_categories', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(29, 'restore_categories', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(30, 'view_tags', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(31, 'add_tags', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(32, 'edit_tags', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(33, 'delete_tags', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(34, 'restore_tags', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(35, 'view_comments', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(36, 'add_comments', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(37, 'edit_comments', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(38, 'delete_comments', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(39, 'restore_comments', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `intro` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` varchar(191) DEFAULT NULL,
  `is_featured` int(11) DEFAULT NULL,
  `featured_image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_og_image` varchar(191) DEFAULT NULL,
  `meta_og_url` varchar(191) DEFAULT NULL,
  `hits` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `moderated_by` int(10) UNSIGNED DEFAULT NULL,
  `moderated_at` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_by_name` varchar(191) DEFAULT NULL,
  `created_by_alias` varchar(191) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `guard_name` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(2, 'administrator', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(3, 'manager', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(4, 'executive', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48'),
(5, 'user', 'web', '2025-01-17 21:29:48', '2025-01-17 21:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `val` text DEFAULT NULL,
  `type` char(20) NOT NULL DEFAULT 'string',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `val`, `type`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'app_name', 'Tutorswale', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(2, 'footer_text', 'Built with ♥ from App Web World', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(3, 'show_copyright', '1', 'text', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(4, 'email', 'info@example.com', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(5, 'website_url', '#', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(6, 'facebook_url', '#', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(7, 'twitter_url', 'https://twitter.com', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(8, 'instagram_url', 'https://www.instagram.com', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(9, 'youtube_url', 'https://www.youtube.com/', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(10, 'linkedin_url', '#', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(11, 'whatsapp_url', '#', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(12, 'messenger_url', '#', 'string', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(13, 'meta_site_name', 'Tutorswale', 'text', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(14, 'meta_description', 'Test Meta Description', 'text', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(15, 'meta_keyword', 'Test Meta Keywords', 'text', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(16, 'meta_image', 'img/default_banner.jpg', 'text', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(17, 'meta_fb_app_id', '569561286532601', 'text', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(18, 'meta_twitter_site', '@abcd', 'text', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(19, 'meta_twitter_creator', '@abcd', 'text', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(20, 'google_analytics', NULL, 'text', 1, 1, NULL, '2025-01-17 22:02:58', '2025-01-17 22:02:58', NULL),
(21, 'custom_css_block', NULL, 'string', 1, 1, NULL, '2025-01-17 22:02:59', '2025-01-17 22:02:59', NULL),
(22, 'telephone', '9971606760', 'string', 1, 1, NULL, '2025-01-29 21:50:57', '2025-01-29 21:50:57', NULL),
(23, 'address', '<a href=\"https://github.com/nasirkhan/laravel-starter/\" class=\"text-muted\">Built with ♥ from Bangladesh</a>', 'string', 1, 1, NULL, '2025-02-19 09:54:42', '2025-02-19 09:54:42', NULL),
(24, 'contactemail', 'physicspointjrai@gmail.com', 'string', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-19 21:21:30', NULL),
(25, 'supportemail', 'Supportmail@gmail.com', 'string', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-19 21:22:11', NULL),
(26, 'aboutus_description', '<p class=\"text-blk subHeading\">He is a Gold Medalist in M.Sc and has trained students out of which two of his students have cleared their IIT-JEE Exams and two students have cleared the NEET exam. Get the best Preparation Before Examinations. Clear your doubts in Physics.</p>\r\n\r\n<div class=\"responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12\">\r\n<div class=\"cardImgContainer\"><img class=\"cardImg\" src=\"assets/icon/course.png\" /></div>\r\n\r\n<div class=\"cardText\">\r\n<p class=\"text-blk cardHeading\">Qualified Tutors</p>\r\n\r\n<p class=\"text-blk cardSubHeading\">We offer a wide range of highly qualified tutors across various subjects.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12\">\r\n<div class=\"cardImgContainer\"><img class=\"cardImg\" src=\"assets/icon/graduated.png\" /></div>\r\n\r\n<div class=\"cardText\">\r\n<p class=\"text-blk cardHeading\">Student Approach</p>\r\n\r\n<p class=\"text-blk cardSubHeading\">Our platform offers an easy, flexible, and enjoyable learning.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12\">\r\n<div class=\"cardImgContainer\"><img class=\"cardImg\" src=\"assets/icon/student-grades.png\" /></div>\r\n\r\n<div class=\"cardText\">\r\n<p class=\"text-blk cardHeading\">Proven Results</p>\r\n\r\n<p class=\"text-blk cardSubHeading\">We aim for real academic improvement. With the right tutor by your side.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12\">\r\n<div class=\"cardImgContainer\"><img class=\"cardImg\" src=\"assets/icon/authentication.png\" /></div>\r\n\r\n<div class=\"cardText\">\r\n<p class=\"text-blk cardHeading\">Trusted Reviews</p>\r\n\r\n<p class=\"text-blk cardSubHeading\">Transparency is key. Read real feedback from other students or tutors.</p>\r\n</div>\r\n</div>', 'string', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-20 08:11:47', NULL),
(27, 'Front_image', '/storage/setting/1739996657_Front_image.png', 'file', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-19 20:54:17', NULL),
(28, 'Banner_image', '/storage/setting/1739996657_Banner_image.png', 'file', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-19 20:54:17', NULL),
(29, 'whyChooseUs_description', '<p>Learning, Tailored for You</p>\r\n\r\n<p>At TutorWale, we understand that every student is unique. That&rsquo;s why we connect you with tutors who tailor lessons to fit your learning style and pace. Whether you prefer in-depth discussions or quick, focused sessions, our platform helps you find the perfect tutor to meet your individual needs. With us, learning is always personal, flexible, and effective.</p>', 'string', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-20 08:18:37', NULL),
(30, 'whyChooseUs_statistic', '<div class=\"counter\"><img alt=\"Years of Excellence\" class=\"counter-icon\" src=\"assets/icon/talent.png\" />\r\n<div class=\"counter-content\">\r\n<h3 class=\"counter-value\" data-suffix=\"+\" data-target=\"18\">18+</h3>\r\n\r\n<p class=\"counter-label\">Years of Excellence</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"counter\"><img alt=\"Students Taught\" class=\"counter-icon\" src=\"assets/icon/course.png\" />\r\n<div class=\"counter-content\">\r\n<h3 class=\"counter-value\" data-suffix=\"+\" data-target=\"10000\">10000+</h3>\r\n\r\n<p class=\"counter-label\">Students Taught</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"counter\"><img alt=\"Result\" class=\"counter-icon\" src=\"assets/icon/student-grades.png\" />\r\n<div class=\"counter-content\">\r\n<h3 class=\"counter-value\" data-suffix=\"%\" data-target=\"99\">99%</h3>\r\n\r\n<p class=\"counter-label\">Result</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"counter\"><img alt=\"Team\" class=\"counter-icon\" src=\"assets/icon/management.png\" />\r\n<div class=\"counter-content\">\r\n<h3 class=\"counter-value\" data-suffix=\"+\" data-target=\"500\">500+</h3>\r\n\r\n<p class=\"counter-label\">Team</p>\r\n</div>\r\n</div>', 'string', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-20 08:18:37', NULL),
(31, 'whatsappNo', '99111 08084', 'string', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-19 21:25:45', NULL),
(32, 'supportNo', '123456987', 'string', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-19 21:25:45', NULL),
(33, 'Contact1', '83684 06646', 'string', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-19 21:25:45', NULL),
(34, 'Contact2', '99111 08084', 'string', 1, 1, NULL, '2025-02-19 09:54:43', '2025-02-19 21:25:45', NULL),
(36, 'aboutus_image', '/storage/setting/1739996656_aboutus_image.png', 'file', 1, 1, NULL, '2025-02-19 20:46:00', '2025-02-19 20:54:17', NULL),
(37, 'officeaddress', 'office no 1, first floor SHD complex shatavbdi inclave sector 49 noida-201301.', 'string', 1, 1, NULL, '2025-02-19 21:21:30', '2025-02-19 21:21:30', NULL),
(38, 'faq_description', 'Here are answers to some of the most common questions about education, learning, and self-development. Expand each question to see the detailed answer!', 'string', 1, 1, NULL, '2025-02-19 21:43:11', '2025-02-19 21:43:11', NULL),
(39, 'faq_image', '/storage/setting/1739999591_faq_image.webp', 'file', 1, 1, NULL, '2025-02-19 21:43:11', '2025-02-19 21:43:11', NULL),
(40, 'registration_title', 'Tutor Registration Form', 'string', 1, 1, NULL, '2025-02-22 11:06:54', '2025-02-22 11:06:54', NULL),
(41, 'registration_image', '/storage/setting/1740220769_registration_image.png', 'file', 1, 1, NULL, '2025-02-22 11:06:54', '2025-02-22 11:09:29', NULL),
(42, 'company_logo', '/storage/setting/1740221228_company_logo.png', 'file', 1, 1, NULL, '2025-02-22 11:17:08', '2025-02-22 11:17:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjectmanagements`
--

CREATE TABLE `subjectmanagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `subjects` varchar(191) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjectmanagements`
--

INSERT INTO `subjectmanagements` (`id`, `class_id`, `subjects`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Physics', 1, 1, NULL, '2025-02-20 23:35:27', '2025-02-20 23:35:27', NULL),
(2, 1, 'Chemistry', 1, 1, NULL, '2025-02-20 23:35:36', '2025-02-20 23:35:36', NULL),
(3, 1, 'Maths', 1, 1, NULL, '2025-02-20 23:35:45', '2025-02-20 23:35:45', NULL),
(4, 2, 'Physics', 1, 1, NULL, '2025-02-20 23:36:20', '2025-02-20 23:36:20', NULL),
(5, 3, 'Maths', 1, 1, NULL, '2025-02-20 23:36:27', '2025-02-20 23:36:27', NULL),
(6, 4, 'Physics', 1, 1, NULL, '2025-02-20 23:36:47', '2025-02-20 23:36:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_name`
--

CREATE TABLE `table_name` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `taggable_id` bigint(20) UNSIGNED NOT NULL,
  `taggable_type` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `group_name` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `profession` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `profession`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Shikha D.', 'Working with TutorWale has been a rewarding experience. The platform connects me with students who genuinely want to learn and succeed. It’s fulfilling to see the progress my students make, and the support from the team at TutorWale has always been fantastic!', 'Tutor', 1, 1, 1, NULL, '2025-01-29 21:36:51', '2025-01-29 21:36:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutorhirings`
--

CREATE TABLE `tutorhirings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutorhirings`
--

INSERT INTO `tutorhirings` (`id`, `heading`, `image`, `description`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Find Your Ideal Tutor', '1740040110.png', 'Discovering the right tutor has never been easier. Simply share your preferences and requirements, and we’ll connect you with the perfect tutor who meets your needs. You’ll be hearing from them in no time!', 1, 1, NULL, '2025-02-20 08:54:36', '2025-02-20 08:58:30', NULL),
(2, 'Set Up Your Sessions', '1740041326.png', 'Whether you need a single lesson or ongoing tutoring, we make scheduling a breeze. Choose the time that works best for you, and we’ll handle the communication with the tutor to ensure everything runs smoothly.', 1, 1, NULL, '2025-02-20 09:18:46', '2025-02-20 09:18:46', NULL),
(3, 'Check Tutor Reviews', '1740041349.png', 'It’s important to know who you’re working with. We provide detailed profiles of each tutor, including their qualifications, background, and student reviews. Make an informed decision by reading honest feedback from others.', 1, 1, NULL, '2025-02-20 09:19:09', '2025-02-20 09:19:09', NULL),
(4, 'Stay Focused on Learning', '1740041369.png', 'Leave the administrative tasks to us. We manage the payments, booking, and other details, so you can focus solely on your lessons and academic success.', 1, 1, NULL, '2025-02-20 09:19:29', '2025-02-20 09:19:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutormanagements`
--

CREATE TABLE `tutormanagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_image` varchar(191) DEFAULT NULL,
  `full_name` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('Female','Male','Other') NOT NULL,
  `street_address` varchar(191) NOT NULL,
  `area` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `pincode` varchar(191) NOT NULL,
  `subject` varchar(191) DEFAULT NULL,
  `qualification` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `experience` int(11) NOT NULL DEFAULT 0,
  `is_verified` enum('Yes','No') NOT NULL DEFAULT 'No',
  `availability` enum('Online','Offline') NOT NULL DEFAULT 'Online',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutormanagements`
--

INSERT INTO `tutormanagements` (`id`, `profile_image`, `full_name`, `phone_number`, `email`, `password`, `date_of_birth`, `age`, `gender`, `street_address`, `area`, `city`, `pincode`, `subject`, `qualification`, `description`, `experience`, `is_verified`, `availability`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '1740224017.png', 'Dr. Sarin Vijay Mythry', '8888888888', 'sarin@gmail.com', '$2y$10$6/07lUgKF48Ix6hsHVTgAeyQk23HV5TRD2j0Zd0nZuE2aezEo3VWm', '2025-02-21', 30, 'Male', 'test', 'test', 'test', '12345', 'physics', 'B.Tech, M.E, PhD', NULL, 10, 'Yes', 'Online', 'Active', 1, 1, NULL, '2025-02-22 11:24:36', '2025-02-22 12:12:16', NULL),
(4, '1740223150.png', 'Jai Rai Sir', '8888888888', 'JaiRaiSir@gmail.com', '$2y$10$6/07lUgKF48Ix6hsHVTgAeyQk23HV5TRD2j0Zd0nZuE2aezEo3VWm', '2025-02-21', 30, 'Male', 'test', 'test', 'test', '12345', 'math', 'Founder & CEO', NULL, 9, 'Yes', 'Online', 'Active', 1, 1, NULL, '2025-02-22 11:24:36', '2025-02-22 12:13:50', NULL),
(5, '1740223185.png', 'Satykam Sir', '8888888888', 'Satykam@gmail.com', '$2y$10$6/07lUgKF48Ix6hsHVTgAeyQk23HV5TRD2j0Zd0nZuE2aezEo3VWm', '2025-02-21', 30, 'Male', 'test', 'test', 'test', '12345', 'Science', 'MSc for chemistry', NULL, 11, 'No', 'Online', 'Active', 1, 1, NULL, '2025-02-22 11:24:36', '2025-02-22 12:17:45', NULL),
(6, '1740223206.png', 'Tarun Prakash', '8888888888', 'Tarun@gmail.com', '$2y$10$6/07lUgKF48Ix6hsHVTgAeyQk23HV5TRD2j0Zd0nZuE2aezEo3VWm', '2025-02-21', 30, 'Male', 'test', 'test', 'test', '12345', 'Biology', 'MSc for chemistry', NULL, 12, 'No', 'Online', 'Active', 1, 1, NULL, '2025-02-22 11:24:36', '2025-02-22 12:13:23', NULL),
(7, '1740224571.png', 'Ranjeet Kumar', '8888888888', 'Ranjeet@gmail.com', '$2y$10$6/07lUgKF48Ix6hsHVTgAeyQk23HV5TRD2j0Zd0nZuE2aezEo3VWm', '2025-02-21', 30, 'Male', 'test', 'test', 'test', '12345', 'Biology', 'BTech from NIT', NULL, 12, 'Yes', 'Online', 'Active', 1, 1, NULL, '2025-02-22 11:24:36', '2025-02-22 12:12:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE `userprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `username` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `mobile` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `url_website` varchar(191) DEFAULT NULL,
  `url_facebook` varchar(191) DEFAULT NULL,
  `url_twitter` varchar(191) DEFAULT NULL,
  `url_instagram` varchar(191) DEFAULT NULL,
  `url_linkedin` varchar(191) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` text DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `user_metadata` text DEFAULT NULL,
  `last_ip` varchar(191) DEFAULT NULL,
  `login_count` int(11) NOT NULL DEFAULT 0,
  `last_login` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userprofiles`
--

INSERT INTO `userprofiles` (`id`, `user_id`, `name`, `first_name`, `last_name`, `username`, `email`, `mobile`, `gender`, `url_website`, `url_facebook`, `url_twitter`, `url_instagram`, `url_linkedin`, `date_of_birth`, `address`, `bio`, `avatar`, `user_metadata`, `last_ip`, `login_count`, `last_login`, `email_verified_at`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Super Admin', 'Super', 'Admin', '100001', 'super@admin.com', '(541) 613-8874', 'Other', NULL, NULL, NULL, NULL, NULL, '1983-07-20', NULL, NULL, 'img/default-avatar.jpg', NULL, '127.0.0.1', 13, '2025-02-22 09:38:42', NULL, 1, NULL, 1, NULL, '2025-01-17 21:29:47', '2025-02-22 09:38:42', NULL),
(2, 2, 'Admin Istrator', 'Admin', 'Istrator', '100002', 'admin@admin.com', '(305) 399-0955', 'Female', NULL, NULL, NULL, NULL, NULL, '2004-11-13', NULL, NULL, 'img/default-avatar.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2025-01-17 21:29:47', '2025-01-17 21:29:47', NULL),
(3, 3, 'Manager', 'Manager', 'User User', '100003', 'manager@manager.com', '+1 (815) 873-0489', 'Other', NULL, NULL, NULL, NULL, NULL, '1976-01-19', NULL, NULL, 'img/default-avatar.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2025-01-17 21:29:47', '2025-01-17 21:29:47', NULL),
(4, 4, 'Executive User', 'Executive', 'User', '100004', 'executive@executive.com', '+1-925-648-3871', 'Other', NULL, NULL, NULL, NULL, NULL, '1987-08-17', NULL, NULL, 'img/default-avatar.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2025-01-17 21:29:47', '2025-01-17 21:29:47', NULL),
(5, 5, 'General User', 'General', 'User', '100005', 'user@user.com', '+1.903.616.5904', 'Other', NULL, NULL, NULL, NULL, NULL, '2016-07-01', NULL, NULL, 'img/default-avatar.jpg', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2025-01-17 21:29:47', '2025-01-17 21:29:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `username` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `avatar` varchar(191) DEFAULT 'img/default-avatar.jpg',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `username`, `email`, `mobile`, `gender`, `date_of_birth`, `email_verified_at`, `password`, `avatar`, `status`, `remember_token`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', 'Super', 'Admin', '100001', 'super@admin.com', '(541) 613-8874', 'Other', '1983-07-20', '2025-01-17 21:29:43', '$2y$10$U3Bsw04CGno0Ye79HuOfBuRtLVVVnCCotGNpIr.ZULygZywFSzygK', 'img/default-avatar.jpg', 1, NULL, NULL, NULL, NULL, '2025-01-17 21:29:43', '2025-01-17 21:29:43', NULL),
(2, 'Admin Istrator', 'Admin', 'Istrator', '100002', 'admin@admin.com', '(305) 399-0955', 'Female', '2004-11-13', '2025-01-17 21:29:43', '$2y$10$rinGRZd/9BYrXV4KajgqvejACN2.sCPeUlNz8LImdddxjAlvefSzy', 'img/default-avatar.jpg', 1, NULL, NULL, NULL, NULL, '2025-01-17 21:29:43', '2025-01-17 21:29:43', NULL),
(3, 'Manager', 'Manager', 'User User', '100003', 'manager@manager.com', '+1 (815) 873-0489', 'Other', '1976-01-19', '2025-01-17 21:29:43', '$2y$10$gjtA1teKZgVF6WzLgS4A2eZ4DHfxzSp4vE67a5ILTdc2k/NgR.ym6', 'img/default-avatar.jpg', 1, NULL, NULL, NULL, NULL, '2025-01-17 21:29:43', '2025-01-17 21:29:43', NULL),
(4, 'Executive User', 'Executive', 'User', '100004', 'executive@executive.com', '+1-925-648-3871', 'Other', '1987-08-17', '2025-01-17 21:29:43', '$2y$10$BjGh5myr53dOYSLmQx1FTOJQFFnUAxpTjZpECYCLtGyenFePTWXrS', 'img/default-avatar.jpg', 1, NULL, NULL, NULL, NULL, '2025-01-17 21:29:43', '2025-01-17 21:29:43', NULL),
(5, 'General User', 'General', 'User', '100005', 'user@user.com', '+1.903.616.5904', 'Other', '2016-07-01', '2025-01-17 21:29:43', '$2y$10$JVrmHjIJH6.o4sGjOwxGi.h1NcpEKLMh7MMjsAW5t2jWck7V6ELp2', 'img/default-avatar.jpg', 1, NULL, NULL, NULL, NULL, '2025-01-17 21:29:43', '2025-01-17 21:29:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_providers`
--

CREATE TABLE `user_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `provider` varchar(191) NOT NULL,
  `provider_id` varchar(191) NOT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutfeature`
--
ALTER TABLE `aboutfeature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `bannermanagements`
--
ALTER TABLE `bannermanagements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classmanagements`
--
ALTER TABLE `classmanagements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exclusiveclasses`
--
ALTER TABLE `exclusiveclasses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exclusiveclasses_subject_id_foreign` (`subject_id`),
  ADD KEY `exclusiveclasses_class_id_foreign` (`class_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD KEY `password_reset_tokens_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectmanagements`
--
ALTER TABLE `subjectmanagements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjectmanagements_class_id_foreign` (`class_id`);

--
-- Indexes for table `table_name`
--
ALTER TABLE `table_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorhirings`
--
ALTER TABLE `tutorhirings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutormanagements`
--
ALTER TABLE `tutormanagements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tutormanagements_email_unique` (`email`);

--
-- Indexes for table `userprofiles`
--
ALTER TABLE `userprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_providers`
--
ALTER TABLE `user_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_providers_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutfeature`
--
ALTER TABLE `aboutfeature`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bannermanagements`
--
ALTER TABLE `bannermanagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `classmanagements`
--
ALTER TABLE `classmanagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exclusiveclasses`
--
ALTER TABLE `exclusiveclasses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `subjectmanagements`
--
ALTER TABLE `subjectmanagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_name`
--
ALTER TABLE `table_name`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutorhirings`
--
ALTER TABLE `tutorhirings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tutormanagements`
--
ALTER TABLE `tutormanagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userprofiles`
--
ALTER TABLE `userprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_providers`
--
ALTER TABLE `user_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exclusiveclasses`
--
ALTER TABLE `exclusiveclasses`
  ADD CONSTRAINT `exclusiveclasses_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classmanagements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exclusiveclasses_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjectmanagements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subjectmanagements`
--
ALTER TABLE `subjectmanagements`
  ADD CONSTRAINT `subjectmanagements_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classmanagements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_providers`
--
ALTER TABLE `user_providers`
  ADD CONSTRAINT `user_providers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
