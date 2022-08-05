-- phpMyAdmin SQL Dump
-- version 5.0.4deb2ubuntu5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2022 at 08:36 PM
-- Server version: 8.0.29-0ubuntu0.21.10.2
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyline`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_03_122743_create_servives_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `meta`, `content`, `image`, `slung`, `created_at`, `updated_at`) VALUES
(1, 'CORPORATE BRANDING AND MANAGEMENT.', 'The main objective of brand positioning is to establish a positive reputation for brands to stand out in the competitive market space.', '<p>The main objective of brand positioning is to establish a positive reputation for brands to stand out in the competitive market space. Organizations should enhance their reputation both internally and externally. Ensure they develop and maintain a mutually beneficial relationship with their target markets to enhance customer loyalty and deliver value and quality service to sustain themselves in the market.</p>\r\n<p>Internal marketing plays a key role in shaping your client&rsquo;s perception of the organization. It plays an important role in the decision-making of your clients. The first person they interact with helps them make that decision. It is always about how you make them feel. Customer care, therefore, is an important function for any organization or business.</p>\r\n<p>This is only dependent on;</p>\r\n<ul>\r\n    <li>\r\n        <p>Strategic organizational communication</p>\r\n    </li>\r\n    <li>\r\n        <p>Client relationship management&nbsp;</p>\r\n    </li>\r\n    <li>\r\n        <p>Customer care service</p>\r\n    </li>\r\n    <li>\r\n        <p>Brand Education</p>\r\n    </li>\r\n    <li>\r\n        <p>Employee relations</p>\r\n    </li>\r\n    <li>\r\n        <p>Crisis communication management</p>\r\n    </li>\r\n</ul>\r\n<p><br>&nbsp;</p>', 'blog-post-small-1.jpg', 'corporate-branding-and-management', NULL, NULL),
(2, 'ADVOCACY COMMUNICATIONS.', 'For Non-governmental, governmental, and philanthropic organizations to communicate effectively with their target audiences, a strategic communication plan is essential to the success of any undertaking.\r\n\r\n', '<p>For Non-governmental, governmental, and philanthropic organizations to\r\ncommunicate effectively with their target audiences, a strategic communication\r\nplan is essential to the success of any undertaking. The ability to influence and drive</p>\r\n\r\n<p>change is achieved through effective, consistent and focused communication.</p>\r\nAn effective communication strategy will help advocacy driven organizations to\r\nmanage work effectively targeting the people who have the power to make the\r\nchanges desired by the organizations. Strategic communication is the only pathway\r\nto a successful and impactful advocacy campaigns.</p>\r\n\r\n\r\n\r\n<p>We have therefore positioned ourselves to work with these organizations to\r\nundertake research, draw an advocacy communication plan and carry out media\r\nmonitoring.</p>', 'blog-post-small-1.jpg', 'advocacy-communications', NULL, NULL),
(3, 'BRAND COMMUNICATION AND PUBLICITY.', 'Brand awareness and company visibility through the media provides an opportunity for organizations to expand their horizons for businesses and enhance its growth.', '<p>Brand awareness and company visibility through the media provides an opportunity for organizations to expand their horizons for businesses and enhance its growth. We have therefore fully equipped ourselves to work with various mass communication channels to increase brand awareness across the globe. This requires research and analysis to ensure you maximize your resources for the larger organizational benefits. This is achieved through;</p>\r\n<ul>\r\n    <li>\r\n        <p>media marketing</p>\r\n    </li>\r\n    <li>\r\n        <p>quality content marketing and advertising</p>\r\n    </li>\r\n    <li>\r\n        <p>digital marketing e.g., Search Engine Optimization</p>\r\n    </li>\r\n    <li>\r\n        <p>influencer marketing</p>\r\n    </li>\r\n    <li>\r\n        <p>social media marketing&nbsp;</p>\r\n    </li>\r\n    <li>\r\n        <p>special events&nbsp;</p>\r\n    </li>\r\n</ul>\r\n<p><br>&nbsp;</p>', 'blog-post-small-1.jpg', 'brand-communication-and-publicity', NULL, NULL),
(4, 'MEDIA RELATIONS.', 'To position yourself in public you need the media. The media ushers in an opportunity to tell your story and connect with your target audiences.', '<p>To position yourself in public you need the media. The media ushers in an opportunity to tell your story and connect with your target audiences. As a PR agency we are committed to establishing and maintaining a long-term beneficial relationship between the media and our clients to give our clients an opportunity to establish a relationship and connect with their target market. The media increases brand awareness and enhances an existing positive organizational reputation as well as helps in crisis communication e.g., use of press releases, events coverage and storytelling.</p>\r\n<p><span size=\"4\">We conduct research to ensure the organizations or individual objectives are achieved through working with the chosen media.&nbsp;</span></p>', 'blog-post-small-1.jpg', 'media-relations', NULL, NULL),
(5, 'PUBLIC RELATIONS TRAINING AND EDUCATION.', 'Public relations is at the forefront of the organization’s success. With our expertise we provide training on organizational communication.', '<p>Public relations is at the forefront of the organization&rsquo;s success. With our expertise, we provide training on organizational communication. The strategies in which organizations can effectively communicate with their stakeholders.</p>\r\n<p>Effective Public relations training helps organizations understand how to foster relationships with their different stakeholders through developing strategies of engagement e.g., corporate communication strategy.</p>\r\n<p><br>&nbsp;</p>\r\n<p><span size=\"4\">We conduct training on pillars of public relations&nbsp;</span></p>\r\n<ul>\r\n    <li>\r\n        <p>client relationship management</p>\r\n    </li>\r\n    <li>\r\n        <p>customer care</p>\r\n    </li>\r\n    <li>\r\n        <p>employee relations&nbsp;</p>\r\n    </li>\r\n    <li>\r\n        <p>Organizational communication</p>\r\n    </li>\r\n    <li>\r\n        <p>Crisis management</p>\r\n    </li>\r\n</ul>', 'blog-post-small-1.jpg', 'public-relations-training-and-education', NULL, NULL),
(6, 'DIGITAL COMMUNICATION', 'Online presence of your business matters. As a result of globalization, it is important for an organization to maximize digital communication.', '<p><span size=\"4\">Online presence of your business matters. As a result of globalization, it is&nbsp;<br>&nbsp;important for an organization to maximize digital communication. To position your organization in the digital space and communicate effectively it is important to analyze your target audience needs. Digital communication positions your organization in the global space and attracts a wider audience.&nbsp;</span></p>\r\n<p>This is achieved through the following digital marketing tools;</p>\r\n<ul>\r\n    <li>\r\n        <p>Search Engine optimization</p>\r\n    </li>\r\n    <li>\r\n        <p>Social media marketing&nbsp;</p>\r\n    </li>\r\n    <li>\r\n        <p>Content marketing</p>\r\n    </li>\r\n    <li>\r\n        <p>Affiliate marketing</p>\r\n    </li>\r\n</ul>', 'blog-post-small-1.jpg', 'digital-communication', NULL, NULL),
(7, 'ENTERTAINMENT PR AND EVENTS MANAGEMENT', 'This involves managing of individual artists, groups and bands by organizing events and media shows that enhance their visibility and awareness to the public.', '<p><strong>Entertainment PR</strong></p>\r\n<p>This involves the managing of individual artists, groups, and bands by organizing events and media shows that enhance their visibility and awareness to the public. In so doing, we are able to sell their brands to the public and other entertainment channels and media houses thus increasing their popularity in the public sphere and artists such as endorsement of certain brands for clients and taking part in advertisement projects for interested institutions and organizations.</p>\r\n\r\n\r\n<p><strong>Events Management</strong></p>\r\n<p\">We, together with our clients work hand in hand to cover the logistics of planning, organizing, coordinating and staging events e.g., corporate events, artists, NGO&rsquo;s and fundraising activities. The events are an opportunity to showcase your company or individual service or products to the general public./p>\r\n<p>It is a proactive communication tool to connect with your target audiences and beneficiaries with the main objective of establishing client relationships</p>', 'blog-post-small-1.jpg', 'entertainment-pr-and-events-management', NULL, NULL),
(8, 'CRISIS COMMUNICATION AND MANAGEMENT.', 'In the event that an organization experiences a crisis that has a negative impact on the organization’s image, we work hand in hand with our clients to manage, protect and defend the organization\'s or individual’s public image.', '<p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\">In the event that an organization experiences a crisis that has a negative impact on the organization&rsquo;s image, we work hand in hand with our clients to manage, protect and defend the organization&apos;s or individual&rsquo;s public image. We conduct training on crisis management and develop a crisis management plan and a crisis communication strategy in line with the media for crisis management.</p>\r\n<p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\">.</p>\r\n<p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\"><span size=\"4\" style=\"font-size:19px;\"><strong>Our strategies&nbsp;</strong></span></p>\r\n<ul>\r\n    <li>\r\n        <p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\">Quality content marketing&nbsp;</p>\r\n    </li>\r\n    <li>\r\n        <p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\">Influencer/ Affiliate marketing&nbsp;</p>\r\n    </li>\r\n    <li>\r\n        <p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\">Special events&nbsp;</p>\r\n    </li>\r\n    <li>\r\n        <p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\">Media marketing and&nbsp;</p>\r\n    </li>\r\n    <li>\r\n        <p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\">advertising&nbsp;</p>\r\n    </li>\r\n    <li>\r\n        <p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\">social media marketing</p>\r\n    </li>\r\n    <li>\r\n        <p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\">digital communication e.g., SEO and websites</p>\r\n    </li>\r\n</ul>\r\n<p style=\"line-height: 108%;text-align: left;margin-bottom: 0.11in;background: transparent;\"><br>&nbsp;</p>', 'blog-post-small-1.jpg', 'crisis-communication-and-management', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
