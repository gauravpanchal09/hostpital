-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2023 at 07:05 AM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u106338101_hostpital1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anc_tests`
--

CREATE TABLE `anc_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `menstrual_history_lmp` date DEFAULT NULL,
  `menstrual_history_edd` date DEFAULT NULL,
  `obstetric_history_g` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obstetric_history_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obstetric_history_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obstetric_history_l` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obstetric_history_first` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obstetric_history_second` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obstetric_history_third` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_life` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infertility_treatment` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `previous_surgeries` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `past_history` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_history` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platelets` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hiv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hbsag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urine_randm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tsh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bl_suger` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ogtt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hb_electro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dual_markar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quadraple_markar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaccination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `general_examination` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anc_tests`
--

INSERT INTO `anc_tests` (`id`, `patient_id`, `menstrual_history_lmp`, `menstrual_history_edd`, `obstetric_history_g`, `obstetric_history_p`, `obstetric_history_a`, `obstetric_history_l`, `obstetric_history_first`, `obstetric_history_second`, `obstetric_history_third`, `marital_life`, `infertility_treatment`, `previous_surgeries`, `past_history`, `family_history`, `blood_group`, `hb`, `platelets`, `hiv`, `hbsag`, `udrl`, `urine_randm`, `tsh`, `bl_suger`, `ogtt`, `hb_electro`, `dual_markar`, `quadraple_markar`, `vaccination`, `created_at`, `updated_at`, `general_examination`) VALUES
(1, 1, '2022-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-07-21 08:54:41', '2022-07-21 08:54:41', NULL),
(2, 3, '2022-06-01', '2023-03-08', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-07-21 09:35:31', '2022-07-21 09:35:31', 'nad'),
(3, 2, NULL, NULL, '2', '1', NULL, '0', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-07-22 09:05:38', '2022-07-22 09:05:38', 'previus lscs with  eclampsia in last preg'),
(4, 12, NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-07-23 09:33:12', '2022-07-23 09:33:12', NULL),
(5, 14, NULL, NULL, '3', '1', '1', '0', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-07-25 09:14:16', '2022-07-25 09:14:16', 'high risk'),
(6, 22, '2022-01-17', '2022-10-24', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-08-08 09:05:25', '2022-08-08 09:05:25', NULL),
(7, 23, NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-08-09 09:04:28', '2022-08-09 09:04:28', 'ivf pregnancy'),
(8, 25, NULL, NULL, '2', NULL, '0', NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-08-09 10:19:00', '2022-08-09 10:19:00', 'EARLY PREG WITH EPILAPSY'),
(9, 28, '2022-04-29', '2023-02-06', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-08-12 10:04:46', '2022-08-12 10:04:46', NULL),
(10, 32, NULL, NULL, '5', '1', '3', '1', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-08-13 09:39:10', '2022-08-13 09:39:10', '1st female congenital blind'),
(11, 53, NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-08-22 08:34:30', '2022-08-22 08:34:30', NULL),
(12, 55, '2022-06-02', NULL, '1', 'o', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-08-24 08:02:31', '2022-08-24 08:02:31', NULL),
(13, 57, NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-08-24 08:56:57', '2022-08-24 08:56:57', NULL),
(14, 58, '2022-03-24', NULL, '1', 'o', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-08-25 08:11:53', '2022-08-25 08:11:53', NULL),
(15, 59, '2022-06-13', NULL, '2', NULL, '1', NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-09-01 08:28:42', '2022-09-01 08:28:42', NULL),
(16, 62, '2022-07-13', NULL, '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-09-02 10:28:02', '2022-09-02 10:28:02', NULL),
(17, 69, '2022-06-03', NULL, '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-09-08 08:11:01', '2022-09-08 08:11:01', NULL),
(18, 85, '2022-09-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TI', '2022-11-03 08:42:58', '2022-11-03 08:42:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ss', 'Active', '2022-07-19 16:59:11', '2022-07-23 02:04:29'),
(2, 'Paidar', 'Active', '2022-07-23 02:03:38', '2022-07-23 02:03:38'),
(3, 'Balaji', 'Active', '2022-07-23 02:03:47', '2022-07-23 02:03:47'),
(4, 'Awanti', 'Active', '2022-07-23 02:04:15', '2022-07-23 02:04:15'),
(5, 'Sanjeevani', 'Active', '2022-08-19 05:50:36', '2022-08-19 05:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `in_tests`
--

CREATE TABLE `in_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `p_married_year` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_ttc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_ttc_year` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_toi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pc_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pc_duration_year` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mh_menarchat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mh_year` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mh_previous_cycle` date DEFAULT NULL,
  `mh_present_cycle` date DEFAULT NULL,
  `mh_lmp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oh_delivery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oh_miscarriage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oh_pgti` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oh_pa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmh_thyroid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmh_tuberculosis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmh_hypertension` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmh_diabetes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmh_other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sfh_wife` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sfh_husband` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_stature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_pulse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_height` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_bp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_bmi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_anaemia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_hyriod` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_hirsutism` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_face` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_breast` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_cvs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_rs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_sec_sex_character` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_breast2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_public_hair` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eve_axillary_hairs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ea_stature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ep_ps` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ep_vulva` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ep_pv` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ep_veg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_year` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_dob` date DEFAULT NULL,
  `husband_occupation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_married_previously` date DEFAULT NULL,
  `husband_age` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_children` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_coitus_frequency` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_exection` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_ejaculation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_orgasm` date DEFAULT NULL,
  `husband_drugs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_smoking` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_alcohol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_semon_analysic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_hysteroscopy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_laparoscopy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_pcr_for_tb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_hysterosalpingography` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_anh_date` date DEFAULT NULL,
  `he_anh_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_anh_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_anh_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_prolaction_date` date DEFAULT NULL,
  `he_prolaction_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_prolaction_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_prolaction_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_lh_date` date DEFAULT NULL,
  `he_lh_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_lh_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_lh_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_fsh_date` date DEFAULT NULL,
  `he_fsh_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_fsh_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_fsh_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_testosterone_date` date DEFAULT NULL,
  `he_testosterone_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_testosterone_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_testosterone_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_oestrogen_date` date DEFAULT NULL,
  `he_oestrogen_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_oestrogen_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_oestrogen_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_progesterone_date` date DEFAULT NULL,
  `he_progesterone_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_progesterone_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_progesterone_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_dheas_date` date DEFAULT NULL,
  `he_dheas_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_dheas_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_dheas_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_cortisol_date` date DEFAULT NULL,
  `he_cortisol_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_cortisol_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_cortisol_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_t3_date` date DEFAULT NULL,
  `he_t3_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_t3_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_t3_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_t4_date` date DEFAULT NULL,
  `he_t4_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_t4_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_t4_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_tsh_date` date DEFAULT NULL,
  `he_tsh_day_of_cycle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_tsh_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_tsh_normal_range` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oi_plan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oi_iui` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oi_iuf` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inv_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`inv_images`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `in_tests`
--

INSERT INTO `in_tests` (`id`, `patient_id`, `p_married_year`, `p_ttc`, `p_ttc_year`, `p_toi`, `pc_method`, `pc_duration_year`, `mh_menarchat`, `mh_year`, `mh_previous_cycle`, `mh_present_cycle`, `mh_lmp`, `oh_delivery`, `oh_miscarriage`, `oh_pgti`, `oh_pa`, `pmh_thyroid`, `pmh_tuberculosis`, `pmh_hypertension`, `pmh_diabetes`, `pmh_other`, `sfh_wife`, `sfh_husband`, `eve_stature`, `eve_pulse`, `eve_height`, `eve_weight`, `eve_bp`, `eve_bmi`, `eve_anaemia`, `eve_hyriod`, `eve_hirsutism`, `eve_face`, `eve_breast`, `eve_other`, `eve_cvs`, `eve_rs`, `eve_sec_sex_character`, `eve_breast2`, `eve_public_hair`, `eve_axillary_hairs`, `ea_stature`, `ep_ps`, `ep_vulva`, `ep_pv`, `ep_veg`, `tr_year`, `husband_dob`, `husband_occupation`, `husband_married_previously`, `husband_age`, `husband_children`, `husband_coitus_frequency`, `husband_exection`, `husband_ejaculation`, `husband_orgasm`, `husband_drugs`, `husband_smoking`, `husband_alcohol`, `husband_semon_analysic`, `inv_hysteroscopy`, `inv_laparoscopy`, `inv_pcr_for_tb`, `inv_hysterosalpingography`, `he_anh_date`, `he_anh_day_of_cycle`, `he_anh_result`, `he_anh_normal_range`, `he_prolaction_date`, `he_prolaction_day_of_cycle`, `he_prolaction_result`, `he_prolaction_normal_range`, `he_lh_date`, `he_lh_day_of_cycle`, `he_lh_result`, `he_lh_normal_range`, `he_fsh_date`, `he_fsh_day_of_cycle`, `he_fsh_result`, `he_fsh_normal_range`, `he_testosterone_date`, `he_testosterone_day_of_cycle`, `he_testosterone_result`, `he_testosterone_normal_range`, `he_oestrogen_date`, `he_oestrogen_day_of_cycle`, `he_oestrogen_result`, `he_oestrogen_normal_range`, `he_progesterone_date`, `he_progesterone_day_of_cycle`, `he_progesterone_result`, `he_progesterone_normal_range`, `he_dheas_date`, `he_dheas_day_of_cycle`, `he_dheas_result`, `he_dheas_normal_range`, `he_cortisol_date`, `he_cortisol_day_of_cycle`, `he_cortisol_result`, `he_cortisol_normal_range`, `he_t3_date`, `he_t3_day_of_cycle`, `he_t3_result`, `he_t3_normal_range`, `he_t4_date`, `he_t4_day_of_cycle`, `he_t4_result`, `he_t4_normal_range`, `he_tsh_date`, `he_tsh_day_of_cycle`, `he_tsh_result`, `he_tsh_normal_range`, `oi_plan`, `oi_iui`, `oi_iuf`, `created_at`, `updated_at`, `inv_images`) VALUES
(1, 1, '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-21 09:00:05', '2022-07-21 09:00:05', '[]'),
(2, 2, '1.5', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-21 09:01:17', '2022-07-21 09:01:17', '[]'),
(3, 5, '8', '2', NULL, 'prim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '79.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ivf', '2022-07-21 10:05:24', '2022-07-21 10:05:24', '[]'),
(4, 13, NULL, NULL, NULL, 'secondary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 09:08:38', '2022-07-25 09:08:38', '[]'),
(5, 15, NULL, NULL, NULL, 'secondary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ivf', '2022-07-25 09:19:25', '2022-07-25 09:19:25', '[]'),
(6, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-02 09:19:28', '2022-09-02 09:19:28', '[]'),
(7, 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-02 09:22:53', '2022-09-02 09:22:53', '[]'),
(8, 65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-03 07:41:32', '2022-09-03 07:41:32', '[]');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_11_110306_create_hospitals_table', 1),
(6, '2022_06_11_123738_create_patients_table', 1),
(7, '2022_06_13_023656_create_anc_tests_table', 1),
(8, '2022_06_16_040808_create_in_tests_table', 1),
(9, '2022_06_17_062506_create_pl_tests_table', 1),
(10, '2022_06_22_180953_create_test_histories_table', 1),
(11, '2022_07_01_044141_update_anc_tests_table', 1),
(12, '2022_07_01_044836_update_hospitals_table', 1),
(13, '2022_07_01_045909_update_patients_table', 1),
(14, '2022_07_17_133403_update_in_tests_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `monthlypregnancies`
--

CREATE TABLE `monthlypregnancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result_pregnancy` date DEFAULT NULL,
  `type_pregnancy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthlypregnancies`
--

INSERT INTO `monthlypregnancies` (`id`, `first_name`, `last_name`, `result_pregnancy`, `type_pregnancy`, `created_at`, `updated_at`) VALUES
(2, 'test333333333333wwwwwww', 'sssssssssssssstest', '2022-10-03', 'IVU', '2022-10-03 11:30:24', '2022-10-06 07:34:18'),
(4, 'w', 'w', '2022-10-07', 'w', '2022-10-06 07:34:34', '2022-10-06 07:34:34');

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `registration_number` int(11) NOT NULL,
  `hospital_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `aadhar_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discharge_date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `tests` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procedure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `registration_number`, `hospital_id`, `first_name`, `last_name`, `address`, `age`, `aadhar_card`, `mobile`, `discharge_date`, `price`, `tests`, `procedure`, `created_at`, `updated_at`) VALUES
(1, 1000, NULL, 'test', 'test', 'Ujjain', 26, '410000000000', '9876543210', NULL, NULL, '', NULL, '2022-07-19 16:59:34', '2022-07-19 16:59:34'),
(2, 1001, NULL, 'Gaurav', 'Panchal', 'ujjain', 25, '122222222222', '0982744110', NULL, NULL, '', NULL, '2022-07-21 09:01:00', '2022-07-21 09:01:00'),
(3, 1002, NULL, 'yasmin', 'mohmood', 'agar', 25, '474702307226', '9589153490', NULL, NULL, '', NULL, '2022-07-21 09:32:25', '2022-07-21 09:32:25'),
(4, 1003, NULL, 'rekha', 'anil', 'shajapur', 45, '449129508856', '9826572700', NULL, NULL, '', NULL, '2022-07-21 09:45:14', '2022-07-21 09:45:14'),
(5, 1004, NULL, 'laxmi', 'ramesh', 'nagda', 35, '862451465128', '9399388001', NULL, NULL, '', NULL, '2022-07-21 10:04:04', '2022-07-21 10:04:04'),
(6, 1005, NULL, 'sweety', 'naresh', 'ujjain', 35, '880625286378', '7580808000', NULL, NULL, '', NULL, '2022-07-21 10:17:44', '2022-07-21 10:17:44'),
(7, 1006, NULL, 'radha', 'bhagwan', 'pipaliya khedi', 16, '280664783506', '9589653006', NULL, NULL, '', NULL, '2022-07-21 10:35:31', '2022-07-21 10:35:31'),
(8, 1007, NULL, 'mamta', 'arjun', 'delchi', 22, '410271139127', '6260207665', NULL, NULL, '', NULL, '2022-07-22 09:04:10', '2022-07-22 09:04:10'),
(9, 1008, 1, 'Nl', 'E', NULL, NULL, NULL, NULL, '2022-07-22', 15000, '', 'Nl', '2022-07-23 02:01:19', '2022-07-23 02:01:19'),
(10, 1009, 1, 'Ov', 'Cyst', NULL, NULL, NULL, NULL, '2022-07-22', 15000, '', 'Lap', '2022-07-23 02:02:34', '2022-07-23 02:02:34'),
(11, 1010, NULL, 'seema', 'mukesh', 'kanad', 37, '224577715285', '9981574960', NULL, NULL, '', NULL, '2022-07-23 08:08:02', '2022-07-23 08:08:02'),
(12, 1011, NULL, 'uma', 'vishnu', 'ghalana', 18, '359183883035', '8817567167', NULL, NULL, '', NULL, '2022-07-23 09:32:16', '2022-07-23 09:32:16'),
(13, 1012, NULL, 'anjali', 'tarun', 'ujjain', 29, '123456789012', '9424535852', NULL, NULL, '', NULL, '2022-07-25 09:07:38', '2022-07-25 09:07:38'),
(14, 1013, NULL, 'santosh', 'deepak', 'indore', 23, '374048188102', '7898395805', NULL, NULL, '', NULL, '2022-07-25 09:13:01', '2022-07-25 09:13:01'),
(15, 1014, NULL, 'rajani', 'manoj', 'agar', 49, '317337850901', '9424011558', NULL, NULL, '', NULL, '2022-07-25 09:18:38', '2022-07-25 09:18:38'),
(16, 1015, NULL, 'arti', 'rohit', 'dewas', 24, '685890035464', '9827274031', NULL, NULL, '', NULL, '2022-07-25 09:21:57', '2022-07-25 09:21:57'),
(18, 1016, NULL, 't', 't', 'u', 3, '666666666666', '5555555555', NULL, NULL, 'anc', NULL, '2022-08-08 08:59:42', '2022-08-08 08:59:42'),
(20, 1018, 2, 'KHASBOO', 'bansal', NULL, NULL, NULL, NULL, '2022-08-04', 15000, NULL, 'ND', '2022-08-08 09:01:37', '2022-08-08 09:01:37'),
(21, 1020, 2, 'primi', 'primi', NULL, NULL, NULL, NULL, '2022-08-08', 10000, NULL, 'NL', '2022-08-08 09:02:30', '2022-08-08 09:02:30'),
(22, 1021, NULL, 'priya', 'chetan', 'ujjain', 31, '849576221872', '8269870056', NULL, NULL, 'anc', NULL, '2022-08-08 09:04:18', '2022-08-08 09:04:18'),
(23, 1022, NULL, 'reena', 'nandkishore', 'gudravan', 25, '566842772609', '6265508426', NULL, NULL, 'anc', NULL, '2022-08-09 09:03:54', '2022-08-09 09:03:54'),
(24, 1023, NULL, 'shilpi', 'abhishek', 'pune', 32, '213896748579', '9405848796', NULL, NULL, 'in', NULL, '2022-08-09 09:15:55', '2022-08-09 09:15:55'),
(25, 1024, NULL, 'SONA KUWAR', 'DEVENDRA SINGH', 'DUG', 23, '830600637439', '8463001828', NULL, NULL, 'anc', NULL, '2022-08-09 10:18:14', '2022-08-09 10:18:14'),
(26, 1025, NULL, 'DIVYA KUWAR', 'RAVIRj', 'vijaynagar raj', 24, '206616997066', '9302979775', NULL, NULL, 'pl', NULL, '2022-08-12 08:34:47', '2022-08-12 08:34:47'),
(27, 1026, NULL, 'puja', 'aditya', 'ujjain', 32, '658927862096', '8989551570', NULL, NULL, 'pl', NULL, '2022-08-12 08:58:04', '2022-08-12 08:58:04'),
(28, 1027, NULL, 'durga', 'shivam', 'nagda', 19, '856332740185', '7999375635', NULL, NULL, 'anc', NULL, '2022-08-12 10:04:13', '2022-08-12 10:04:13'),
(29, 1028, NULL, 'sheetal', 'anil', 'mandaurar', 28, '216705903629', '8427219965', NULL, NULL, 'pl', NULL, '2022-08-13 08:28:35', '2022-08-13 08:28:35'),
(30, 1029, NULL, 'urvashi', 'arpit', 'indore', 26, '427816569070', '8269946776', NULL, NULL, 'anc', NULL, '2022-08-13 08:31:11', '2022-08-13 08:31:11'),
(31, 1030, NULL, 'swati', 'd/oramchant', 'ujjain', 18, '673360759712', '7770817818', NULL, NULL, 'pl', NULL, '2022-08-13 08:49:07', '2022-08-13 08:49:07'),
(32, 1031, NULL, 'sunita', 'ravindra', 'ujjain', 24, '954937168000', '7000921435', NULL, NULL, 'anc', NULL, '2022-08-13 09:37:58', '2022-08-13 09:37:58'),
(33, 1032, NULL, 'arti', 'roshan', 'ujjain', 30, '551379718483', '8982827870', NULL, NULL, 'in', NULL, '2022-08-13 10:50:01', '2022-08-13 10:50:01'),
(34, 1033, NULL, 'mahima', 'mehraj', 'devli', 36, '354171416569', '9755544635', NULL, NULL, 'pl', NULL, '2022-08-15 08:29:29', '2022-08-15 08:29:29'),
(35, 1034, NULL, 'apsara', 'sharook', 'jahgirpur', 25, '506582139157', '9993391794', NULL, NULL, 'pl', NULL, '2022-08-15 08:32:30', '2022-08-15 08:32:30'),
(36, 1035, NULL, 'deepa jain', 'ashish', 'bhopal', 39, '317977686608', '9425004468', NULL, NULL, 'in', NULL, '2022-08-15 08:55:48', '2022-08-15 08:55:48'),
(37, 1036, 2, 'monika', 'sharma', NULL, NULL, NULL, NULL, '2022-08-15', 18000, NULL, 'vh', '2022-08-15 09:20:08', '2022-08-15 09:20:08'),
(38, 1037, 2, 'tabssum', 'moh', NULL, NULL, NULL, NULL, '2022-08-15', 15000, NULL, 'lscs', '2022-08-15 09:20:53', '2022-08-15 09:20:53'),
(39, 1038, 2, 'g3', 'pr lscs', NULL, NULL, NULL, NULL, '2022-08-15', 15000, NULL, 'nl', '2022-08-15 09:21:36', '2022-08-15 09:21:36'),
(40, 1039, 2, 'sunita', 'shajapur', NULL, NULL, NULL, NULL, '2022-08-13', 18000, NULL, 'vh', '2022-08-15 09:22:26', '2022-08-15 09:22:26'),
(41, 1040, NULL, 'radhika', 'anand', 'indore', 32, '123456789012', '9179425757', NULL, NULL, 'in', NULL, '2022-08-15 09:25:56', '2022-08-15 09:25:56'),
(42, 1041, NULL, 'maleka', 'hussain', 'shajapur', 31, '504396665684', '8269628555', NULL, NULL, 'in', NULL, '2022-08-16 08:08:18', '2022-08-16 08:08:18'),
(43, 1042, NULL, 'preeti', 'rajender', 'ujjain', 44, '123456789012', '9827068333', NULL, NULL, 'pl', NULL, '2022-08-16 08:34:31', '2022-08-16 08:34:31'),
(44, 1043, NULL, 'shilpa', 'satish', 'ujjain', 42, '887752293109', '8982341278', NULL, NULL, 'pl', NULL, '2022-08-16 09:10:17', '2022-08-16 09:10:17'),
(45, 1044, NULL, 'puja', 'pawan', 'shamgarh', 24, '698167514024', '7869056941', NULL, NULL, 'in', NULL, '2022-08-16 09:24:33', '2022-08-16 09:24:33'),
(46, 1045, 3, 'Farida', 'Hussain', NULL, NULL, NULL, NULL, '2022-08-17', 12000, NULL, 'NL', '2022-08-17 04:01:08', '2022-08-17 04:01:08'),
(47, 1046, NULL, 'pooja', 'mahesh', 'tarana', 25, '791680037019', '8103791510', NULL, NULL, 'anc', NULL, '2022-08-17 07:58:39', '2022-08-17 07:58:39'),
(48, 1047, 5, 'Jawara', 'Jain', NULL, NULL, NULL, NULL, '2022-08-19', 20000, NULL, 'VH', '2022-08-19 05:49:55', '2022-08-19 05:50:57'),
(49, 1048, 2, 'Maleka', 'Shakapur', NULL, NULL, NULL, NULL, '2022-08-20', 20000, NULL, 'Myomectomy', '2022-08-20 03:30:57', '2022-08-20 03:30:57'),
(50, 1049, 2, 'See.a', 'DM', NULL, NULL, NULL, NULL, '2022-08-20', NULL, NULL, 'VH', '2022-08-20 03:31:29', '2022-08-20 03:31:29'),
(51, 1050, 2, 'See.a', 'DM', NULL, NULL, NULL, NULL, '2022-08-20', NULL, NULL, 'VH', '2022-08-20 03:31:30', '2022-08-20 03:31:30'),
(52, 1051, 2, 'Kavita', 'Anamia', NULL, NULL, NULL, NULL, '2022-08-20', NULL, NULL, 'VH', '2022-08-20 03:32:11', '2022-08-20 03:32:11'),
(53, 1052, NULL, 'ROSHNI', 'AKASH', 'UJJAIN', 20, '866026986214', '9171438316', NULL, NULL, 'anc', NULL, '2022-08-22 08:34:21', '2022-08-22 08:34:21'),
(54, 1053, NULL, 'DHAPU', 'DINESH', 'DELCHI', 25, '822383011211', '9179473488', NULL, NULL, 'pl', NULL, '2022-08-24 07:57:08', '2022-08-24 07:57:08'),
(55, 1054, NULL, 'sona', 'shiv', 'ragvi', 22, '431696062211', '7225930644', NULL, NULL, 'anc', NULL, '2022-08-24 08:01:43', '2022-08-24 08:01:43'),
(56, 1055, NULL, 'anna', 'prem', 'nalkheda', 35, '908737975078', '6263362536', NULL, NULL, 'pl', NULL, '2022-08-24 08:45:24', '2022-08-24 08:45:24'),
(57, 1056, NULL, 'JAIKUWAR', 'SHIVSINGH', 'AGAR', 25, '956192378532', '6260441491', NULL, NULL, 'anc', NULL, '2022-08-24 08:56:48', '2022-08-24 08:56:48'),
(58, 1057, NULL, 'PINKY', 'MAHARBAN', 'RANAHEDA', 21, '915174161229', '6266887451', NULL, NULL, 'anc', NULL, '2022-08-25 08:11:34', '2022-08-25 08:11:34'),
(59, 1058, NULL, 'sheetal', 'abhishek', 'piploda', 23, '263067080110', '9516066386', NULL, NULL, 'anc', NULL, '2022-09-01 08:28:18', '2022-09-01 08:28:18'),
(60, 1059, NULL, 'mamta', 'hari', 'shajalpur', 33, '264085047750', '6266447270', NULL, NULL, 'in', NULL, '2022-09-02 08:02:40', '2022-09-02 08:02:40'),
(61, 1060, NULL, 'priyanka', 'ajay', 'ujjain', 25, '739143497961', '7999814445', NULL, NULL, 'in', NULL, '2022-09-02 09:22:35', '2022-09-02 09:22:35'),
(62, 1061, NULL, 'diksha', 'jatwa', 'prakash nagar ujjain', 22, '859013579130', '7024623513', NULL, NULL, 'anc', NULL, '2022-09-02 10:27:34', '2022-09-02 10:27:34'),
(63, 1062, 2, 'Rani', 'Malviya', NULL, NULL, NULL, NULL, '2022-09-01', 25000, NULL, 'Tlh', '2022-09-02 11:55:00', '2022-09-02 11:55:00'),
(64, 1063, 2, 'G2', 'Blind baby', NULL, NULL, NULL, NULL, '2022-09-01', NULL, NULL, 'Nl', '2022-09-02 11:55:39', '2022-09-02 11:55:39'),
(65, 1064, NULL, 'mamta', 'bhagwansingh', 'shajapur', 20, '867790446447', '8435657307', NULL, NULL, 'in', NULL, '2022-09-03 07:39:47', '2022-09-03 07:39:47'),
(66, 1065, NULL, 'munnabai', 'radheshyam', 'agar', 28, '783224574224', '9340442540', NULL, NULL, 'anc', NULL, '2022-09-03 07:45:27', '2022-09-03 07:45:27'),
(67, 1066, NULL, 'kalpana', 'hariom', 'sehore', 35, '255841306126', '9977402596', NULL, NULL, 'in', NULL, '2022-09-03 09:10:51', '2022-09-03 09:10:51'),
(68, 1067, NULL, 'vishka', 'ankit', 'jower', 32, '653601944330', '0424049411', NULL, NULL, 'pl', NULL, '2022-09-05 09:30:32', '2022-09-05 09:30:32'),
(69, 1068, NULL, 'AARTI', 'SANDEEP', 'PALIA', 26, '123456789000', '8839408018', NULL, NULL, 'anc', NULL, '2022-09-08 08:10:40', '2022-09-08 08:10:40'),
(70, 1069, NULL, 'DHAPU', 'SHYAM', 'PALDA', 23, '420573599163', '7773895651', NULL, NULL, 'in', NULL, '2022-09-08 08:16:09', '2022-09-08 08:16:09'),
(71, 1070, 2, 'Chadni', 'Rto', NULL, NULL, NULL, NULL, '2022-09-07', 15000, NULL, 'LSCS', '2022-09-10 03:17:09', '2022-09-10 03:17:09'),
(72, 1071, 2, 'Nl', 'Ml', NULL, NULL, NULL, NULL, '2022-09-07', 10000, NULL, 'Nl', '2022-09-10 03:17:38', '2022-09-10 03:17:38'),
(73, 1072, 2, 'Reena', 'Ect', NULL, NULL, NULL, NULL, '2022-09-09', 15000, NULL, 'VAGINAL Surgery', '2022-09-10 03:18:21', '2022-09-10 03:18:21'),
(74, 1073, 2, 'Nl', 'Nl', NULL, NULL, NULL, NULL, '2022-09-07', 10000, NULL, 'Nl', '2022-09-10 03:18:46', '2022-09-10 03:18:46'),
(75, 1074, 2, 'Nl', 'Nl', NULL, NULL, NULL, NULL, '2022-09-07', 10000, NULL, 'Nl', '2022-09-10 03:19:02', '2022-09-10 03:19:02'),
(76, 1075, 2, 'Payal', 'Charsk', NULL, NULL, NULL, NULL, '2022-09-10', 15000, NULL, 'LSCS', '2022-09-10 03:19:37', '2022-09-10 03:19:37'),
(77, 1076, 2, 'Payal', 'Charak', NULL, NULL, NULL, NULL, '2022-09-10', 15000, NULL, 'lLSCS', '2022-09-10 03:20:30', '2022-09-10 03:20:30'),
(78, 1077, 2, 'Neha', 'Amrut', NULL, NULL, NULL, NULL, '2022-09-15', 10000, NULL, 'Nl', '2022-09-16 10:00:23', '2022-09-18 05:41:47'),
(79, 1078, 2, 'Fibroid', 'Vh', NULL, NULL, NULL, NULL, '2022-09-14', 15000, NULL, 'Vh', '2022-09-16 10:01:11', '2022-09-16 10:01:11'),
(80, 1079, 2, 'Urmilla', 'Delgi', NULL, NULL, NULL, NULL, '2022-09-17', 15000, NULL, 'VH', '2022-09-17 03:41:33', '2022-09-17 03:41:33'),
(81, 1080, 2, 'Sushila', 'Sharma', NULL, NULL, NULL, NULL, '2022-09-18', 15000, NULL, 'VH', '2022-09-18 05:40:15', '2022-09-18 05:40:15'),
(82, 1081, 2, 'Trapti', 'Vyas', NULL, NULL, NULL, NULL, '2022-09-18', 10000, NULL, 'HL', '2022-09-18 05:40:55', '2022-09-18 05:40:55'),
(83, 1082, 2, 'Darshana', 'Yadav', NULL, NULL, NULL, NULL, '2022-09-18', 12000, NULL, 'NL', '2022-09-18 08:40:50', '2022-09-18 08:40:50'),
(84, 1083, NULL, 'Neelam', 'Sandeep', 'Sihore', 28, '700535117685', '9754161214', NULL, NULL, 'in', NULL, '2022-09-21 08:03:00', '2022-09-21 08:03:00'),
(85, 1084, NULL, 'ayushi', 'songara', 'ujjain', 22, '206860807890', '7869475949', NULL, NULL, 'anc', NULL, '2022-11-03 08:42:30', '2022-11-03 08:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pl_tests`
--

CREATE TABLE `pl_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pl_tests`
--

INSERT INTO `pl_tests` (`id`, `patient_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>Test</p>', '2022-07-21 08:54:29', '2022-07-21 08:54:29'),
(2, 2, '<p>multiple fibroid</p>', '2022-07-21 09:45:36', '2022-07-21 09:45:36'),
(3, 4, '<p>multiple fibroid</p>', '2022-07-21 09:46:02', '2022-07-21 09:46:02'),
(4, 6, '<p>menno</p>', '2022-07-21 10:18:16', '2022-07-21 10:18:16'),
(5, 24, '<p>infertilty with low AMH</p>', '2022-08-09 09:16:31', '2022-08-09 09:16:31'),
(6, 26, '<p>?early preg with ovarian cyst</p>', '2022-08-12 08:39:49', '2022-08-12 08:39:49'),
(7, 27, '<p>uti</p>', '2022-08-12 08:58:11', '2022-08-12 08:58:11'),
(8, 29, '<p>a1ectopic 1</p>', '2022-08-13 08:28:56', '2022-08-13 08:28:56'),
(9, 31, '<p>puberty menorrahgia</p>', '2022-08-13 08:49:29', '2022-08-13 08:49:29'),
(10, 33, '<p>secondary infertility</p>', '2022-08-13 10:50:21', '2022-08-13 10:50:21'),
(11, 34, '<p>?pregnancy</p>', '2022-08-15 08:29:46', '2022-08-15 08:29:46'),
(12, 35, '<p>dub</p>', '2022-08-15 08:32:38', '2022-08-15 08:32:38'),
(13, 36, '<p>secondary infertility with poor ovarian reserve</p>', '2022-08-15 08:56:25', '2022-08-15 08:56:25'),
(14, 41, '<p>infertility bicornuate uterus</p>', '2022-08-15 09:26:52', '2022-08-15 09:26:52'),
(15, 42, '<p>sec infertility with fibroid</p>', '2022-08-16 08:08:45', '2022-08-16 08:08:45'),
(16, 43, '<p>vulval swelling</p>', '2022-08-16 08:34:47', '2022-08-16 08:34:47'),
(17, 44, '<p>post fibroid</p>', '2022-08-16 09:10:35', '2022-08-16 09:10:35'),
(18, 45, '<p><em>primary infertility</em></p>', '2022-08-16 09:24:54', '2022-08-16 09:24:54'),
(19, 54, '<p>Dub uti</p>', '2022-08-24 07:57:23', '2022-08-24 07:57:23'),
(20, 56, '<p>UTI</p>', '2022-08-24 08:45:33', '2022-08-24 08:45:33'),
(21, 67, '<p>primary infertility with myomectomy</p>', '2022-09-03 09:11:22', '2022-09-03 09:11:22'),
(22, 68, '<p>DUB</p>', '2022-09-05 09:30:41', '2022-09-05 09:30:41'),
(23, 70, '<p>PRIMARY INFERTILITY</p>', '2022-09-08 08:16:25', '2022-09-08 08:16:25'),
(24, 84, '<p>Sec infertility&nbsp;</p>\r\n\r\n<p>P1 -preterm of ,6,month 3,yrs back</p>', '2022-09-21 08:04:07', '2022-09-21 08:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `test_histories`
--

CREATE TABLE `test_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `change_set` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`change_set`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Manju Rathi', 'manjuharshi18@gmail.com', '2022-06-30 23:52:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3goc20I1V25oBSWRXKontv14vfnokRO1pmNDrEqD9YlYFld78MzWMQU2lvUn', '2022-06-30 23:52:01', '2022-06-30 23:52:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anc_tests`
--
ALTER TABLE `anc_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anc_tests_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_tests`
--
ALTER TABLE `in_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `in_tests_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthlypregnancies`
--
ALTER TABLE `monthlypregnancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_hospital_id_foreign` (`hospital_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pl_tests`
--
ALTER TABLE `pl_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pl_tests_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `test_histories`
--
ALTER TABLE `test_histories`
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
-- AUTO_INCREMENT for table `anc_tests`
--
ALTER TABLE `anc_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `in_tests`
--
ALTER TABLE `in_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `monthlypregnancies`
--
ALTER TABLE `monthlypregnancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pl_tests`
--
ALTER TABLE `pl_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `test_histories`
--
ALTER TABLE `test_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anc_tests`
--
ALTER TABLE `anc_tests`
  ADD CONSTRAINT `anc_tests_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `in_tests`
--
ALTER TABLE `in_tests`
  ADD CONSTRAINT `in_tests_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pl_tests`
--
ALTER TABLE `pl_tests`
  ADD CONSTRAINT `pl_tests_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
