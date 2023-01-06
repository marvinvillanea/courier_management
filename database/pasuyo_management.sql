-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pasuyo_management
CREATE DATABASE IF NOT EXISTS `pasuyo_management` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pasuyo_management`;

-- Dumping structure for table pasuyo_management.access_token
CREATE TABLE IF NOT EXISTS `access_token` (
  `token_id` int NOT NULL AUTO_INCREMENT,
  `access_token` varchar(75) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.access_token: ~13 rows (approximately)
INSERT INTO `access_token` (`token_id`, `access_token`, `user_id`) VALUES
	(131, '7df537ec1cf01c0590d3b118fa18b977', 46),
	(132, 'a9028c12bb31f804b5ad38ac4cda3eb6', 43),
	(133, '4eef847f623fa3289c68567f4b10cbfa', 44),
	(134, '502f3985c7bad841cbbd23e9b26e981b', 47),
	(135, '4be0ca698e81d6793ec45239bf94a8a8', 43),
	(136, '389dea08cd23f680654a60af5f8fc187', 47),
	(137, 'bdb51b109e4d5c3b24b50febb0de5e95', 43),
	(138, 'de97724cd22ad7b653835ab90ed562cc', 47),
	(139, 'ebd0db19e1e22f0dfd1ce3a23516ebf1', 43),
	(140, '59a70992e75d268eff1a249831835044', 43),
	(141, 'b6de26c7c11fa32582f6c41fa680026a', 44),
	(142, '3dc3137ecc8f71bfbf087f237100581b', 43),
	(143, '98943f88bd4507a8508fa8356de206f5', 43),
	(144, '8a48408cbddfa2407fb4cd3c1b47a325', 46),
	(145, '58d125865d0a0898d87beb0b1d5c7122', 44),
	(146, 'd42f00128a8bedbcaaedbf1703774eac', 48),
	(147, '74c0079c3d32756064247d4a4b66fc6b', 49),
	(148, '5c8d8a173dcb0bcdca48b13932968bb2', 50),
	(149, '958b8d34f6f7d73c98cfa7407a51e56a', 1),
	(150, '56841ac4f81421dc674ade5299a6b63a', 1),
	(151, '1bdaf491928eff956f0f52ed301df32c', 43),
	(152, '04884a38a9a2e89ed44b324c06cfd508', 44),
	(153, '9431b36d8569901623f9aa736d376fb3', 44),
	(154, '62fe6072d1daac8cac2d05805e94bcdf', 43),
	(155, '1e45336436722ae440d2551f3b9db2b4', 44),
	(156, 'db1e8d6049dcd50b2a9a3b6170120584', 44),
	(157, 'bbbf45829d049fa54b11bd66886bae4f', 44),
	(158, 'f6e8b90d1dd365f27d3cb8ffcca86b08', 43),
	(159, '0699afb257566e7d1d4be24940a06683', 50),
	(160, 'ddabd5dd120915a4343ef8ffe08cd558', 1),
	(161, '77cd1b0ae4aa099f144b28ebc4bdd6f4', 50),
	(162, 'f0017cb74148dfdb83e37af4acb5dab1', 1),
	(163, 'f4fee353128177fbc65fe6dadc5e56a2', 44),
	(164, '0e66e29d71a972e031306e5ea937d78e', 44),
	(165, 'f025dfc443599c0773aeb41e98d38d4e', 1),
	(166, '8cc45e61b9fc29871f46ac40cbc3a7c2', 51),
	(167, 'ea88f730c6f0fc75c423302e2bc48330', 1),
	(168, 'bb11bd6751b94b57854c054633acf6c9', 1),
	(169, '734c2616853123b1570f4bd88fa16b4c', 1),
	(170, 'cef24bf06b802375ffddaa1163dff76e', 44),
	(171, 'bbeeefbac458fc4ddbfdff9681be9572', 1),
	(172, 'f58e115ad4f0b5f882f0c8bcfeaa3121', 44),
	(173, '0825616980ca49621a499409cc78867c', 1),
	(174, 'c293c2716f2e401030ff19d536b48241', 43),
	(175, '69d5119f941dbfa310ba79d498de5f3e', 45),
	(176, 'cff396dabae31796785faf376300512a', 1),
	(177, '99ee98c7e786e0eb1e2541bd3f18850a', 44),
	(178, '2b4812008913b8f0aca368b8a03bf20b', 51),
	(179, '06c5d8d2aaf8fd379d15e6f2986ab59d', 44),
	(180, 'f8b382661d6ffefe682da294debccd0e', 1),
	(181, '2a650f9c470db581d209559dc2e98e37', 46),
	(182, '161217957f251015aab247458aef2f5c', 1),
	(183, '9b15969a409cb721cecdf1a8fbba2255', 44),
	(184, '3fa044615e5e4ee1e9e7aeb71ef15c12', 1),
	(185, '30aa47de0c2a77c85886e6372ba94447', 43),
	(186, '7faeadac4f779297de0b0ffef2e86568', 1),
	(187, 'ad007dea320b326ff21a18fa2f20f268', 43),
	(188, '758fb48fd2b26ec30973b4f73b541fee', 44),
	(189, 'b4bbed278b0203ba52ea7408ab034ead', 1),
	(190, '964353a5cf965c1d934752ba4134f63d', 44),
	(191, '8a07fca25ab87b10975619097966063a', 1),
	(192, '6bcc0de3fb323ab3a5e3907bd8c06dd0', 1),
	(193, 'ac228166539bda980660e64c6d82adcc', 43),
	(194, '0cffcd14f7476c4efbf53bb870d1cc40', 1),
	(195, '618835f7ecdb6ac288cfa2b256cf8707', 1),
	(196, '673d723e0b5bf0166df4d15e88d08f6f', 43),
	(197, 'e6bdb5f078a473927fca9bf12c3c9082', 45),
	(198, '0729d9bfd8f42addcfff2ddfa5203a30', 43),
	(199, 'a8e770aa83adc3165ef788955e4c705b', 45),
	(200, '55fe4f681fc0e438b45b5514f6fff95b', 1),
	(201, 'c23bfca8cb467091c9abd26c9f7c9c41', 43),
	(202, '67a2a3a07b9d1309ae5268a162e1256f', 45),
	(203, '722dc66261feb596d98d85f24c514414', 43),
	(204, 'a614d372a2e98cd42cde0837abbfc7f7', 44),
	(205, 'b6c8633e698228bf2b144775a7040ec7', 43),
	(206, '07911faa46dad356c69d008a96775757', 44),
	(207, '1704b7955eaf5e8fdbeb10f24aebb747', 44),
	(208, '627dec7d4b9bf76a2cfab9d3bf8fe986', 43);

-- Dumping structure for table pasuyo_management.address_info
CREATE TABLE IF NOT EXISTS `address_info` (
  `id_address_info` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_address_info`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.address_info: ~4 rows (approximately)
INSERT INTO `address_info` (`id_address_info`, `user_id`, `address`, `contact_no`, `created_at`, `updated_at`) VALUES
	(35, 44, '55 Casili, Anao City, Tarlac 2310 ', NULL, '2022-10-31 21:00:59', '2022-10-31 21:00:59'),
	(36, 45, '585 Don Ramon, Anao City, Tarlac 2310 ', NULL, '2022-11-01 00:34:06', '2022-11-01 00:34:06'),
	(37, 47, '5 Don Ramon, Anao City, Tarlac 2310 ', NULL, '2022-11-02 17:17:29', '2022-11-02 17:17:29'),
	(38, 45, '55 Casili, Anao City, Tarlac 2310 ', NULL, '2022-12-23 23:24:09', '2022-12-23 23:24:09'),
	(39, 44, '4 Campos, Anao City, Tarlac 2310 ', NULL, '2023-01-05 15:47:41', '2023-01-05 15:47:41');

-- Dumping structure for table pasuyo_management.approval_users
CREATE TABLE IF NOT EXISTS `approval_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.approval_users: ~4 rows (approximately)
INSERT INTO `approval_users` (`id`, `type`) VALUES
	(1, 'Confirmed'),
	(2, 'Enable'),
	(3, 'Disapproved'),
	(5, 'Pending');

-- Dumping structure for table pasuyo_management.barangay
CREATE TABLE IF NOT EXISTS `barangay` (
  `barangay_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`barangay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.barangay: ~18 rows (approximately)
INSERT INTO `barangay` (`barangay_id`, `name`) VALUES
	(1, 'Baguindoc'),
	(2, 'Bantog'),
	(3, 'Campos'),
	(4, 'Carmen'),
	(5, 'Casili'),
	(6, 'Don Ramon'),
	(7, 'Hernando'),
	(8, 'Poblacion'),
	(9, 'Rizal'),
	(10, 'San Francisco East'),
	(11, 'San Francisco West'),
	(12, 'San Jose Norte'),
	(13, 'San Jose South'),
	(14, 'San Juan'),
	(15, 'San Roque'),
	(16, 'Santo Domingo'),
	(17, 'Sinense'),
	(18, 'Suarvedez');

-- Dumping structure for table pasuyo_management.courier_details
CREATE TABLE IF NOT EXISTS `courier_details` (
  `idcourier_details` int NOT NULL AUTO_INCREMENT,
  `p_info_id` int DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcourier_details`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.courier_details: ~4 rows (approximately)
INSERT INTO `courier_details` (`idcourier_details`, `p_info_id`, `resume`, `description`) VALUES
	(11, 26, 'http://localhost:7070/Resume/1667277983.pdf', 'Hi good day team, we would like to enter your office sir.'),
	(12, 32, 'http://localhost:7070/Resume/1667570537.pdf', 'sadfdasfdasfsdafdasf'),
	(13, 33, 'http://localhost:7070/Resume/1667570887.pdf', 'dsfahhhhh'),
	(14, 34, 'http://localhost:7070/Resume/1668298795.docx', 'Hi team, good day we would like to apply for your company.');

-- Dumping structure for table pasuyo_management.courier_notify
CREATE TABLE IF NOT EXISTS `courier_notify` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updatd_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.courier_notify: ~14 rows (approximately)
INSERT INTO `courier_notify` (`id`, `description`, `status`, `user_id`, `created_at`, `updatd_at`) VALUES
	(5, 'You got New Parcel # 7894561 22-11-03 01:11:29', 1, 43, '2022-11-02 17:17:29', '2023-01-06 10:25:07'),
	(6, 'You got New Parcel # 54489 22-11-04 01:11:38', 1, 43, '2022-11-03 17:20:38', '2023-01-06 10:25:07'),
	(7, 'You got New Parcel # 855588 22-11-04 03:11:13', 1, 43, '2022-11-03 19:32:13', '2023-01-06 10:25:07'),
	(8, 'You got New Parcel # 789456411 22-11-04 03:11:29', 1, 43, '2022-11-03 19:49:29', '2023-01-06 10:25:07'),
	(9, 'You got New Parcel # 78945611 22-11-04 03:11:15', 1, 43, '2022-11-03 19:56:15', '2023-01-06 10:25:07'),
	(10, 'You got New Parcel # 1234555512 22-11-04 04:11:32', 1, 43, '2022-11-03 20:00:32', '2023-01-06 10:25:07'),
	(11, 'You got New Parcel # 5324324 22-11-04 04:11:04', 1, 43, '2022-11-03 20:11:04', '2023-01-06 10:25:07'),
	(12, 'You got New Parcel #  22-11-10 02:11:51', 1, 43, '2022-11-10 14:57:51', '2023-01-06 10:25:07'),
	(13, 'Account Has been Rejected or Denied by Admin', 1, 50, '2022-11-10 15:59:13', '2023-01-06 10:25:07'),
	(14, 'Account Has been Verify/Confirmed by Admin', 0, 50, '2022-11-10 15:59:41', '2023-01-06 10:25:07'),
	(15, 'You got New Parcel # 132132144442123 22-11-12 12:11:03', 1, 43, '2022-11-12 12:41:03', '2023-01-06 10:25:07'),
	(16, 'You got New Parcel # 1671840471413333 22-12-24 12:12:41', 0, NULL, '2022-12-24 00:08:41', '2023-01-06 10:25:07'),
	(17, 'You got New Parcel # 16718405813070 22-12-24 12:12:06', 0, NULL, '2022-12-24 00:11:06', '2023-01-06 10:25:07'),
	(18, 'You got New Parcel # 16718409699694538 22-12-24 12:12:25', 1, 43, '2022-12-24 00:16:25', '2023-01-06 10:25:07'),
	(19, 'You got New Order # 16729334955748210 23-01-05 03:01:41', 1, 43, '2023-01-05 15:47:41', '2023-01-06 10:25:07'),
	(20, 'You got New Order # 16729349798846775 23-01-05 04:01:51', 1, 43, '2023-01-05 16:09:51', '2023-01-06 10:25:07'),
	(21, 'You got New Order # 16729365413923112 23-01-05 04:01:06', 0, 43, '2023-01-05 16:39:06', '2023-01-06 10:25:07');

-- Dumping structure for table pasuyo_management.defective_items
CREATE TABLE IF NOT EXISTS `defective_items` (
  `defective_id` int NOT NULL AUTO_INCREMENT,
  `idparcel_details` int DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`defective_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.defective_items: ~5 rows (approximately)
INSERT INTO `defective_items` (`defective_id`, `idparcel_details`, `comment`, `image`, `created_at`, `updated_at`) VALUES
	(1, 45, 'dsafdafdasf', 'dsafdafdasf', '2023-01-06 12:31:59', '2023-01-06 12:31:59'),
	(2, 43, 'dafdsafdasf', 'dafdsafdasf', '2023-01-06 12:32:41', '2023-01-06 12:32:41'),
	(3, 43, 'dafdsafdasf', 'dafdsafdasf', '2023-01-06 12:41:29', '2023-01-06 12:41:29'),
	(4, 43, 'dafdsafdasf', 'dafdsafdasf', '2023-01-06 12:41:31', '2023-01-06 12:41:31'),
	(5, 35, 'dasfdasfa', NULL, '2023-01-06 13:41:30', '2023-01-06 13:41:30');

-- Dumping structure for table pasuyo_management.error_logs
CREATE TABLE IF NOT EXISTS `error_logs` (
  `iderror_logs` int NOT NULL AUTO_INCREMENT,
  `descriptions` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iderror_logs`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.error_logs: ~76 rows (approximately)
INSERT INTO `error_logs` (`iderror_logs`, `descriptions`, `created_at`) VALUES
	(1, 'Good day, Ma\'am/Sir Users1 Your parcel #  has been Accepted by Courier. Recipient name:  VILLANEA MARVIN. Thank you for your choosing us!..', '2022-11-10 14:58:31'),
	(2, '{"type":"USD","amount":25.614991}', '2022-11-10 14:58:32'),
	(3, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"m0hv1Nw4C0949gsL9RGVRIp75QomqWsLqD5fjpjB","from":"MVDSMS","to":"+639755983121","text":"Good day, Ma\'am\\/Sir Users1 Your parcel #  has been Accepted by Courier. Recipient name:  VILLANEA MARVIN. Thank you for your choosing us!.."}', '2022-11-10 14:58:32'),
	(4, '{"remaining_balance":25.608991,"total_sms":1,"phone_number_list":[{"number":"639755983121","message_id":"5nRJwCgt95yfmq9qXgYzCl16680923121653","price":0.006}],"bad_phone_number_list":[]}', '2022-11-10 14:58:32'),
	(5, 'Good day, Ma\'am/Sir Users1 Your parcel # 4124124321FF has been Denied by Courier. Thank you for your choosing us!..', '2022-11-10 15:00:11'),
	(6, '{"type":"USD","amount":25.608991}', '2022-11-10 15:00:11'),
	(7, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"m0hv1Nw4C0949gsL9RGVRIp75QomqWsLqD5fjpjB","from":"MVDSMS","to":"+639755983121","text":"Good day, Ma\'am\\/Sir Users1 Your parcel # 4124124321FF has been Denied by Courier. Thank you for your choosing us!.."}', '2022-11-10 15:00:11'),
	(8, '{"remaining_balance":25.602991,"total_sms":1,"phone_number_list":[{"number":"639755983121","message_id":"5nRJwCgt95yfmq9qXgZ6KE16680924113785","price":0.006}],"bad_phone_number_list":[]}', '2022-11-10 15:00:12'),
	(9, 'Good day, Ma\'am/Sir Fernan Torres. The item has been Shipped. Parcel #: 789456411. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!..', '2022-11-10 15:17:17'),
	(10, '{"type":"USD","amount":25.602991}', '2022-11-10 15:17:17'),
	(11, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"m0hv1Nw4C0949gsL9RGVRIp75QomqWsLqD5fjpjB","from":"MVDSMS","to":"+639486502742","text":"Good day, Ma\'am\\/Sir Fernan Torres. The item has been Shipped. Parcel #: 789456411. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!.."}', '2022-11-10 15:17:17'),
	(12, '{"remaining_balance":25.596991,"total_sms":1,"phone_number_list":[{"number":"639486502742","message_id":"5nRJwCgt95yfmq9qXgaPp416680934374156","price":0.006}],"bad_phone_number_list":[]}', '2022-11-10 15:17:18'),
	(13, 'Good day, Ma\'am/Sir VILLANEA MARVIN. The item has been arrived at destination. Parcel #: 4124124321FF. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!..', '2022-11-10 15:18:53'),
	(14, '{"type":"USD","amount":25.596991}', '2022-11-10 15:18:53'),
	(15, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"m0hv1Nw4C0949gsL9RGVRIp75QomqWsLqD5fjpjB","from":"MVDSMS","to":"+6309755983121","text":"Good day, Ma\'am\\/Sir VILLANEA MARVIN. The item has been arrived at destination. Parcel #: 4124124321FF. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!.."}', '2022-11-10 15:18:53'),
	(16, '{"remaining_balance":25.584991,"total_sms":2,"phone_number_list":[{"number":"639755983121","message_id":"5nRJwCgt95yfmq9qXgaX9e16680935338261","price":0.012}],"bad_phone_number_list":[]}', '2022-11-10 15:18:53'),
	(17, 'Good day, Ma\'am/Sir VILLANEA MARVIN. The item already picked-up by Recipient. Parcel #: 4124124321FF. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!..', '2022-11-10 15:20:49'),
	(18, '{"type":"USD","amount":25.584991}', '2022-11-10 15:20:49'),
	(19, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"m0hv1Nw4C0949gsL9RGVRIp75QomqWsLqD5fjpjB","from":"MVDSMS","to":"+6309755983121","text":"Good day, Ma\'am\\/Sir VILLANEA MARVIN. The item already picked-up by Recipient. Parcel #: 4124124321FF. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!.."}', '2022-11-10 15:20:49'),
	(20, '{"remaining_balance":25.572991,"total_sms":2,"phone_number_list":[{"number":"639755983121","message_id":"5nRJwCgt95yfmq9qXgaeUE16680936495554","price":0.012}],"bad_phone_number_list":[]}', '2022-11-10 15:20:49'),
	(21, 'Good day, Ma\'am/Sir VILLANEA MARVIN. Out for Delivery Parcel #: 4124124321FF. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!..', '2022-11-10 15:21:06'),
	(22, '{"type":"USD","amount":25.572991}', '2022-11-10 15:21:07'),
	(23, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"m0hv1Nw4C0949gsL9RGVRIp75QomqWsLqD5fjpjB","from":"MVDSMS","to":"+6309755983121","text":"Good day, Ma\'am\\/Sir VILLANEA MARVIN. Out for Delivery Parcel #: 4124124321FF. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!.."}', '2022-11-10 15:21:07'),
	(24, '{"remaining_balance":25.566991,"total_sms":1,"phone_number_list":[{"number":"639755983121","message_id":"5nRJwCgt95yfmq9qXgafku16680936668577","price":0.006}],"bad_phone_number_list":[]}', '2022-11-10 15:21:07'),
	(25, 'Good day, Ma\'am/Sir VILLANEA MARVIN. The item Unsuccessful Delivered Attempty Parcel #: 4124124321FF. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!..', '2022-11-10 15:21:46'),
	(26, '{"type":"USD","amount":25.566991}', '2022-11-10 15:21:46'),
	(27, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"m0hv1Nw4C0949gsL9RGVRIp75QomqWsLqD5fjpjB","from":"MVDSMS","to":"+6309755983121","text":"Good day, Ma\'am\\/Sir VILLANEA MARVIN. The item Unsuccessful Delivered Attempty Parcel #: 4124124321FF. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!.."}', '2022-11-10 15:21:46'),
	(28, '{"remaining_balance":25.554991,"total_sms":2,"phone_number_list":[{"number":"639755983121","message_id":"5nRJwCgt95yfmq9qXgahs216680937061724","price":0.012}],"bad_phone_number_list":[]}', '2022-11-10 15:21:46'),
	(29, 'Good day, Ma\'am/Sir Users1 Your parcel # 789456411 Have been succesfully Delivered to Fernan Torres Thank you for your choosing us!..', '2022-11-10 15:27:33'),
	(30, '{"type":"USD","amount":25.554991}', '2022-11-10 15:27:33'),
	(31, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"m0hv1Nw4C0949gsL9RGVRIp75QomqWsLqD5fjpjB","from":"MVDSMS","to":"+639755983121","text":"Good day, Ma\'am\\/Sir Users1 Your parcel # 789456411 Have been succesfully Delivered to Fernan Torres Thank you for your choosing us!.."}', '2022-11-10 15:27:33'),
	(32, '{"remaining_balance":25.548991,"total_sms":1,"phone_number_list":[{"number":"639755983121","message_id":"5nRJwCgt95yfmq9qXgb4vL16680940533078","price":0.006}],"bad_phone_number_list":[]}', '2022-11-10 15:27:34'),
	(33, 'Good day, Ma\'am/Sir Ggg Your parcel # 16718409699694538 has been Accepted by Courier. Recipient name:  Rynzoo. Thank you for choosing us!..', '2022-12-24 00:19:03'),
	(34, 'Client error: `POST https://api.movider.co/v1/balance` resulted in a `401 Unauthorized` response:\n{"error":{"code":403,"name":"ERR_AUTHENTICATION_FAILED","description":"Authentication field."}}\n', '2022-12-24 00:19:04'),
	(35, 'Good day, Ma\'am/Sir Ggg Your parcel # 16718409699694538 Have been succesfully Delivered to Rynzoo Thank you for choosing us!..', '2022-12-24 00:19:27'),
	(36, 'Client error: `POST https://api.movider.co/v1/balance` resulted in a `401 Unauthorized` response:\n{"error":{"code":403,"name":"ERR_AUTHENTICATION_FAILED","description":"Authentication field."}}\n', '2022-12-24 00:19:28'),
	(37, 'Good day, Ma\'am/Sir Users1 Your parcel # 16729334955748210 has been Accepted by Courier. Recipient name:  VILLANEA MARVIN. Thank you for choosing us!..', '2023-01-05 16:00:52'),
	(38, '{"type":"USD","amount":22.715988}', '2023-01-05 16:00:53'),
	(39, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"l8KFeCstZZokPZFEW0n8ci8L21k9PQ","from":"MVDSMS","to":"+639755983121","text":"Good day, Ma\'am\\/Sir Users1 Your parcel # 16729334955748210 has been Accepted by Courier. Recipient name:  VILLANEA MARVIN. Thank you for choosing us!.."}', '2023-01-05 16:00:53'),
	(40, '{"remaining_balance":22.709988,"total_sms":1,"phone_number_list":[{"number":"639755983121","message_id":"Ds0ehjtF3FJ3159qtXSOXk16729344548276","price":0.006}],"bad_phone_number_list":[]}', '2023-01-05 16:00:53'),
	(41, 'Good day, Ma\'am/Sir Users1 Your parcel # 16729334955748210 Have been succesfully Delivered to VILLANEA MARVIN Thank you for choosing us!..', '2023-01-05 16:01:28'),
	(42, '{"type":"USD","amount":22.709988}', '2023-01-05 16:01:28'),
	(43, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"l8KFeCstZZokPZFEW0n8ci8L21k9PQ","from":"MVDSMS","to":"+639755983121","text":"Good day, Ma\'am\\/Sir Users1 Your parcel # 16729334955748210 Have been succesfully Delivered to VILLANEA MARVIN Thank you for choosing us!.."}', '2023-01-05 16:01:28'),
	(44, '{"remaining_balance":22.703988,"total_sms":1,"phone_number_list":[{"number":"639755983121","message_id":"Ds0ehjtF3FJ3159qtXSSmm16729344892520","price":0.006}],"bad_phone_number_list":[]}', '2023-01-05 16:01:28'),
	(45, 'Good day, Ma\'am/Sir Users1 Your parcel # 16729349798846775 has been Accepted by Courier. Recipient name:  VILLANEA MARVIN. Thank you for choosing us!..', '2023-01-05 16:11:44'),
	(46, '{"type":"USD","amount":22.703988}', '2023-01-05 16:11:44'),
	(47, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"l8KFeCstZZokPZFEW0n8ci8L21k9PQ","from":"MVDSMS","to":"+639755983121","text":"Good day, Ma\'am\\/Sir Users1 Your parcel # 16729349798846775 has been Accepted by Courier. Recipient name:  VILLANEA MARVIN. Thank you for choosing us!.."}', '2023-01-05 16:11:44'),
	(48, '{"remaining_balance":22.697988,"total_sms":1,"phone_number_list":[{"number":"639755983121","message_id":"Ds0ehjtF3FJ3159qtXTZWs16729351052180","price":0.006}],"bad_phone_number_list":[]}', '2023-01-05 16:11:45'),
	(49, 'Good day, Ma\'am/Sir VILLANEA MARVIN. The Item has been Collected by Courier. Order #: 16729349798846775. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!..', '2023-01-05 16:14:05'),
	(50, '{"type":"USD","amount":22.697988}', '2023-01-05 16:14:05'),
	(51, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"l8KFeCstZZokPZFEW0n8ci8L21k9PQ","from":"MVDSMS","to":"+6309755983121","text":"Good day, Ma\'am\\/Sir VILLANEA MARVIN. The Item has been Collected by Courier. Order #: 16729349798846775. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!.."}', '2023-01-05 16:14:05'),
	(52, '{"remaining_balance":22.685988,"total_sms":2,"phone_number_list":[{"number":"639755983121","message_id":"Ds0ehjtF3FJ3159qtXTnz816729352462281","price":0.012}],"bad_phone_number_list":[]}', '2023-01-05 16:14:05'),
	(53, 'Good day, Ma\'am/Sir VILLANEA MARVIN. The Item has been Defective Order #: 16729349798846775. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!..', '2023-01-05 16:14:37'),
	(54, '{"type":"USD","amount":22.685988}', '2023-01-05 16:14:38'),
	(55, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"l8KFeCstZZokPZFEW0n8ci8L21k9PQ","from":"MVDSMS","to":"+6309755983121","text":"Good day, Ma\'am\\/Sir VILLANEA MARVIN. The Item has been Defective Order #: 16729349798846775. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!.."}', '2023-01-05 16:14:38'),
	(56, '{"remaining_balance":22.673988,"total_sms":2,"phone_number_list":[{"number":"639755983121","message_id":"Ds0ehjtF3FJ3159qtXTrpo16729352793539","price":0.012}],"bad_phone_number_list":[]}', '2023-01-05 16:14:38'),
	(57, 'Good day, Ma\'am/Sir Users1 Your parcel # 16729365413923112 has been Accepted by Courier. Recipient name:  Fernando Jose Torres. Thank you for choosing us!..', '2023-01-05 16:39:21'),
	(58, '{"type":"USD","amount":22.673988}', '2023-01-05 16:39:22'),
	(59, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"l8KFeCstZZokPZFEW0n8ci8L21k9PQ","from":"MVDSMS","to":"+639534834817","text":"Good day, Ma\'am\\/Sir Users1 Your parcel # 16729365413923112 has been Accepted by Courier. Recipient name:  Fernando Jose Torres. Thank you for choosing us!.."}', '2023-01-05 16:39:22'),
	(60, '{"remaining_balance":22.667988,"total_sms":1,"phone_number_list":[{"number":"639534834817","message_id":"Ds0ehjtF3FJ3159qtXWJcW16729367638385","price":0.006}],"bad_phone_number_list":[]}', '2023-01-05 16:39:22'),
	(61, 'Good day, Ma\'am/Sir Fernando Jose Torres. The item has been Shipped. Order #: 16729365413923112. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!..', '2023-01-05 16:41:02'),
	(62, '{"type":"USD","amount":22.667988}', '2023-01-05 16:41:02'),
	(63, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"l8KFeCstZZokPZFEW0n8ci8L21k9PQ","from":"MVDSMS","to":"+6309486502742","text":"Good day, Ma\'am\\/Sir Fernando Jose Torres. The item has been Shipped. Order #: 16729365413923112. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!.."}', '2023-01-05 16:41:02'),
	(64, '{"remaining_balance":22.655988,"total_sms":2,"phone_number_list":[{"number":"639486502742","message_id":"Ds0ehjtF3FJ3159qtXWPfa16729368639888","price":0.012}],"bad_phone_number_list":[]}', '2023-01-05 16:41:03'),
	(65, 'Good day, Ma\'am/Sir Fernando Jose Torres The parcel # 16729365413923112 mouse will be Arrived today. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!..', '2023-01-05 16:41:31'),
	(66, '{"type":"USD","amount":22.655988}', '2023-01-05 16:41:31'),
	(67, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"l8KFeCstZZokPZFEW0n8ci8L21k9PQ","from":"MVDSMS","to":"+6309486502742","text":"Good day, Ma\'am\\/Sir Fernando Jose Torres The parcel # 16729365413923112 mouse will be Arrived today. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!.."}', '2023-01-05 16:41:31'),
	(68, '{"remaining_balance":22.643988,"total_sms":2,"phone_number_list":[{"number":"639486502742","message_id":"Ds0ehjtF3FJ3159qtXWRry16729368922434","price":0.012}],"bad_phone_number_list":[]}', '2023-01-05 16:41:31'),
	(69, 'Good day, Ma\'am/Sir Fernando Jose Torres. The item has been arrived at destination. Order #: 16729365413923112. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!..', '2023-01-05 16:41:44'),
	(70, '{"type":"USD","amount":22.643988}', '2023-01-05 16:41:45'),
	(71, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"l8KFeCstZZokPZFEW0n8ci8L21k9PQ","from":"MVDSMS","to":"+6309486502742","text":"Good day, Ma\'am\\/Sir Fernando Jose Torres. The item has been arrived at destination. Order #: 16729365413923112. Please prepare the exact amount. Total : 50.00 Thank you have a nice day!.."}', '2023-01-05 16:41:45'),
	(72, '{"remaining_balance":22.631988,"total_sms":2,"phone_number_list":[{"number":"639486502742","message_id":"Ds0ehjtF3FJ3159qtXWT3216729369053779","price":0.012}],"bad_phone_number_list":[]}', '2023-01-05 16:41:45'),
	(73, 'Good day, Ma\'am/Sir Users1 Your parcel # 16729365413923112 Have been succesfully Delivered to Fernando Jose Torres Thank you for choosing us!..', '2023-01-05 16:42:15'),
	(74, '{"type":"USD","amount":22.631988}', '2023-01-05 16:42:16'),
	(75, '{"api_key":"2H7GtWOeyWYMff0XzK7en5zEdy6","api_secret":"l8KFeCstZZokPZFEW0n8ci8L21k9PQ","from":"MVDSMS","to":"+639534834817","text":"Good day, Ma\'am\\/Sir Users1 Your parcel # 16729365413923112 Have been succesfully Delivered to Fernando Jose Torres Thank you for choosing us!.."}', '2023-01-05 16:42:16'),
	(76, '{"remaining_balance":22.625988,"total_sms":1,"phone_number_list":[{"number":"639534834817","message_id":"Ds0ehjtF3FJ3159qtXWUr416729369374416","price":0.006}],"bad_phone_number_list":[]}', '2023-01-05 16:42:16');

-- Dumping structure for table pasuyo_management.parcel_details
CREATE TABLE IF NOT EXISTS `parcel_details` (
  `idparcel_details` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `idcourier_details` int DEFAULT NULL,
  `recepient_name` varchar(255) DEFAULT NULL,
  `recepient_address` varchar(255) DEFAULT NULL,
  `recepient_contact_no` varchar(255) DEFAULT NULL,
  `parcel_number` varchar(55) DEFAULT NULL,
  `parcel_description` varchar(255) DEFAULT NULL,
  `type_delivery` varchar(45) DEFAULT NULL,
  `weight_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT '1',
  `amount` decimal(13,2) DEFAULT NULL,
  `address_sender` varchar(255) DEFAULT NULL,
  `recipient_image` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idparcel_details`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.parcel_details: ~20 rows (approximately)
INSERT INTO `parcel_details` (`idparcel_details`, `user_id`, `idcourier_details`, `recepient_name`, `recepient_address`, `recepient_contact_no`, `parcel_number`, `parcel_description`, `type_delivery`, `weight_id`, `created_at`, `status`, `amount`, `address_sender`, `recipient_image`, `comment`) VALUES
	(26, 44, 43, 'Sender seder Recipient', 'Tarlac City Anao', '9755983121', '123213', 'This is testing', 'Delivery', 2, '2022-10-31 20:52:07', 7, 50.00, ', Campos, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1667372264.jpg', NULL),
	(27, 44, 43, 'Sender to Sender', 'Tomas Cabili Avenue', '9755983121', '13212414141321321', 'sadfa', 'Delivery', 3, '2022-10-31 21:00:59', 7, 50.00, '55 Casili, Anao City, Tarlac 2310 ', 'http://localhost:7070/api/images/recipient/recipient1667371602.jpg', NULL),
	(28, 45, 43, 'ggg ggg', '2313123', '9755983121', '13212414141', '1321321312', 'Delivery', 3, '2022-11-01 00:34:06', 7, 50.00, '585 Don Ramon, Anao City, Tarlac 2310 ', NULL, NULL),
	(29, 46, 43, 'Marvin tae', 'Tarlac anao bugoy', '9755983121', '7959', 'Mommy ', 'Delivery', 2, '2022-11-01 23:57:12', 7, 50.00, ', Carmen, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1667532346.jpg', NULL),
	(30, 46, 43, 'Marivn villanea', 'Yendje', '9755983121', '5777', 'Narak', 'Delivery', 2, '2022-11-02 00:02:02', 11, 50.00, ', Carmen, Anao, Tarlac, 2310', NULL, NULL),
	(31, 47, 43, 'ggg ggg', '2313123', '9755983121', '7894561', 'This is testing', 'Delivery', 2, '2022-11-02 17:17:29', 7, 50.00, '5 Don Ramon, Anao City, Tarlac 2310 ', 'http://localhost:7070/api/images/recipient/recipient1667438427.jpg', NULL),
	(32, 44, 43, 'MArvin Villanea', 'Purok 2 saray iligan city', '9755983121', '54489', 'Laptop', 'Delivery', 2, '2022-11-03 17:20:38', 7, 50.00, '55 Casili, Anao City, Tarlac 2310 ', 'http://localhost:7070/api/images/recipient/recipient1667525903.jpg', NULL),
	(33, 44, 43, 'Marvin Villanea', 'Campos, Anao, Tarlac, 2310', '9755983121', '855588', 'Computers Hardware', 'Delivery', 2, '2022-11-03 19:32:13', 7, 50.00, '55 Casili, Anao City, Tarlac 2310 ', 'http://localhost:7070/api/images/recipient/recipient1667532862.jpg', NULL),
	(34, 44, 43, 'Fernan Torres', 'Campos, Anao, Tarlac, 2310', '9486502742', '789456411', 'Laptop', 'Delivery', 2, '2022-11-03 19:49:28', 7, 50.00, ', Campos, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1668094053.jpg', NULL),
	(35, 44, 43, 'Fernando Torre', 'Campos, Anao, Tarlac, 2310', '9534834817', '78945611', 'computer', 'Delivery', 3, '2022-11-03 19:56:15', 7, 50.00, ', Campos, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1667609158.png', NULL),
	(36, 48, 43, 'Fernando Torres', 'Campos, Anao, Tarlac, 2310', '9755983121', '1234555512', 'Keyboard', 'Delivery', 3, '2022-11-03 20:00:32', 7, 50.00, ', Campos, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1667534568.jpg', NULL),
	(37, 48, 43, 'Fernando Torres', 'Campos, Anao, Tarlac, 2310', '9534834817', '5324324', 'Computer', 'Delivery', 3, '2022-11-03 20:11:04', 7, 50.00, ', Campos, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1667535180.jpg', NULL),
	(38, 44, 43, 'VILLANEA MARVIN', 'Purok 2, Tibanga-Saray', '09755983121', '4124124321FF', 'SSD', 'Delivery', 2, '2022-11-10 14:57:51', 11, 50.00, ', Campos, Anao, Tarlac, 2310', NULL, NULL),
	(39, 44, 43, 'VILLANEA MARVIN', 'Purok 2, Tibanga-Saray', '09755983121', '132132144442123', 'SSD', 'Delivery', 2, '2022-11-12 12:41:03', 1, 50.00, ', Campos, Anao, Tarlac, 2310', NULL, NULL),
	(40, 45, 43, 'Rynzoo', 'Tarlac', '12345678910', '1671840471413333', 'Fragile lang', 'Delivery', 1, '2022-12-24 00:08:41', 1, 50.00, '585 Don Ramon, Anao City, Tarlac 2310 ', NULL, NULL),
	(41, 45, 43, 'Rynzoo', 'Tarlac', '12345678910', '16718405813070', 'Fragile lang', 'Delivery', 1, '2022-12-24 00:11:06', 1, 50.00, '585 Don Ramon, Anao City, Tarlac 2310 ', NULL, NULL),
	(42, 45, 43, 'Rynzoo', 'Tarlac', '12345678910', '16718409699694538', 'Fragile lang', 'Delivery', 1, '2022-12-24 00:16:25', 7, 50.00, '585 Don Ramon, Anao City, Tarlac 2310 ', 'http://localhost:7070/api/images/recipient/recipient1671841168.jpg', NULL),
	(43, 44, 43, 'VILLANEA MARVIN', ' 5 Suarvedez, Anao, Tarlac 2310 ', '09486502742', '16729334955748210', 'Keyboard', 'Delivery', 2, '2023-01-05 15:47:41', 7, 50.00, '4 Campos, Anao City, Tarlac 2310 ', 'http://localhost/api/images/recipient/recipient1672934488.webp', NULL),
	(44, 44, 43, 'VILLANEA MARVIN', ' 1 Campos, Iligan City, Lanao Del Norte 9200 ', '09755983121', '16729349798846775', 'Keyboard', 'Delivery', 2, '2023-01-05 16:09:51', 13, 50.00, '55 Casili, Anao City, Tarlac 2310 ', NULL, 'sira'),
	(45, 44, 43, 'Fernando Jose Torres', ' 1 Campos, Tarlac, Lanao Del Norte 2300 ', '09486502742', '16729365413923112', 'mouse', 'Delivery', 2, '2023-01-05 16:39:06', 7, 50.00, '55 Casili, Anao City, Tarlac 2310 ', 'http://localhost/api/images/recipient/recipient1672936936.jpg', '');

-- Dumping structure for table pasuyo_management.parcel_status
CREATE TABLE IF NOT EXISTS `parcel_status` (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.parcel_status: ~12 rows (approximately)
INSERT INTO `parcel_status` (`id_status`, `description`, `details`) VALUES
	(1, 'Pending Request', 'Waiting Confirmation from Courier'),
	(2, 'Parcel Accepted by Courier', NULL),
	(3, 'Item Collected by Courier', 'The Item has been Collected by Courier.'),
	(4, 'Shipped', 'The item has been Shipped.'),
	(5, 'In-Transit', 'The parcel will be arrived to day.'),
	(6, 'Arrived at Destination', 'The item has been arrived at destination.'),
	(7, 'Delivered', NULL),
	(8, 'Picked-up', 'The item already picked-up by Recipient.'),
	(9, 'Ready to Pickup', 'The item are ready to pickup.'),
	(10, 'Out for Delivery', 'Out for Delivery'),
	(11, 'Unsuccessfull Delivery Attempt', 'The item Unsuccessful Delivered Attempty'),
	(12, 'Parcel Denied by Courier', 'The Parcel Denied by Courier');

-- Dumping structure for table pasuyo_management.personal_info
CREATE TABLE IF NOT EXISTS `personal_info` (
  `p_info_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `house_no` varchar(255) DEFAULT NULL,
  `discrict_code` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.personal_info: ~9 rows (approximately)
INSERT INTO `personal_info` (`p_info_id`, `user_id`, `first_name`, `last_name`, `middle_name`, `street`, `city`, `province`, `zip_code`, `zone`, `landmark`, `barangay`, `house_no`, `discrict_code`, `birthdate`, `gender`, `contact_no`, `image`, `created_at`, `updated_at`) VALUES
	(26, 43, 'Courier', 'Courier', 'Courier', NULL, 'Anao', 'Tarlac', '2310', '44', '3213213', 'Carmen', '41241412412', NULL, '2022-11-02', 'male', '9755983121', 'http://localhost:7070/images/profile1671177658.png', '2022-10-31 20:46:23', '2022-12-16 08:00:57'),
	(27, 44, 'users1', 'users1', 'users1', NULL, 'Anao', 'Tarlac', '2310', '24', 'test', 'Campos', '32', NULL, '2022-11-09', 'Male', '9534834817', 'http://localhost:7070/images/profile1667278247.jpg', '2022-10-31 20:49:12', '2023-01-05 16:35:38'),
	(28, 45, 'ggg', 'ggg', 'JANUBAS', NULL, 'Iligan City', 'Lanao del Norte', '9200', '5', '', 'Campos', '', NULL, '', '', '9755983121', 'http://localhost:7070/images/profile1667291572.jpg', '2022-11-01 00:32:19', '2022-11-03 19:22:53'),
	(29, 46, 'Mommy', 'Mommy', 'Mommy', NULL, 'Anao', 'Tarlac', '2310', '3', 'Hahaha', 'Carmen', '', NULL, '2022-11-02', 'M', '9755983121', 'http://4d44-158-62-63-200.ap.ngrok.io/images/profile1667375620.jpg', '2022-11-01 23:47:58', '2022-11-03 19:22:53'),
	(30, 47, 'users1', 'User1', 'user1', NULL, 'Anao', 'Tarlac', '2310', '5', '', 'Casili', '', NULL, '2022-11-03', 'M', '9755983121', 'http://localhost:7070/images/profile1667438203.jpg', '2022-11-02 17:14:25', '2022-11-03 19:22:54'),
	(31, 48, 'MArvin', 'Villanea', 'TApere', NULL, 'Anao', 'Tarlac', '2310', '10', '', 'Campos', '', NULL, '2022-11-10', 'M', '9755983121', 'http://localhost:7070/images/profile1667534380.jpg', '2022-11-03 19:59:02', '2022-11-03 19:59:39'),
	(32, 49, NULL, NULL, NULL, NULL, 'Anao', 'Tarlac', '2310', '54', '', 'Campos', NULL, NULL, NULL, NULL, NULL, 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-04 06:02:16', '2022-11-04 06:02:16'),
	(33, 50, NULL, NULL, NULL, NULL, 'Anao', 'Tarlac', '2310', '4', '', 'Bantog', NULL, NULL, NULL, NULL, NULL, 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-04 06:08:07', '2022-11-04 06:08:07'),
	(34, 51, NULL, NULL, NULL, NULL, 'Anao', 'Tarlac', '2310', '213', 'Have a nice day', 'Carmen', NULL, NULL, NULL, NULL, NULL, 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-13 00:19:54', '2022-11-13 00:19:54');

-- Dumping structure for table pasuyo_management.rate_courier
CREATE TABLE IF NOT EXISTS `rate_courier` (
  `id_rate` int NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `rate_type` varchar(45) DEFAULT NULL,
  `courier_id` bigint DEFAULT NULL,
  `parcel_id` varchar(45) DEFAULT NULL,
  `comment` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.rate_courier: ~9 rows (approximately)
INSERT INTO `rate_courier` (`id_rate`, `user_id`, `rate_type`, `courier_id`, `parcel_id`, `comment`, `created_at`) VALUES
	(1, 44, '1', 43, '27', NULL, '2022-11-02 02:03:36'),
	(2, 44, '5', 43, '26', NULL, '2022-11-02 02:07:43'),
	(3, 47, '5', 43, '31', NULL, '2022-11-02 17:21:22'),
	(4, 44, '3', 43, '32', NULL, '2022-11-03 17:38:52'),
	(5, 44, '2', 43, '33', NULL, '2022-11-03 19:35:09'),
	(6, 48, '5', 43, '36', NULL, '2022-11-03 20:04:14'),
	(7, 48, '5', 43, '37', NULL, '2022-11-03 20:13:38'),
	(8, 45, '4', 43, '28', 'Test', '2022-12-24 00:00:18'),
	(18, 45, '4', 43, '42', 'TESTEST', '2022-12-24 01:40:31'),
	(19, 44, '1', 43, '43', 'goods', '2023-01-05 16:24:29');

-- Dumping structure for table pasuyo_management.set_weight
CREATE TABLE IF NOT EXISTS `set_weight` (
  `weight_id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `amount` decimal(13,2) DEFAULT NULL,
  PRIMARY KEY (`weight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.set_weight: ~0 rows (approximately)
INSERT INTO `set_weight` (`weight_id`, `description`, `amount`) VALUES
	(1, 'Small', 50.00),
	(2, 'Medium', 100.00),
	(3, 'Large', 150.00);

-- Dumping structure for table pasuyo_management.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `user_type` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.users: ~0 rows (approximately)
INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `user_type`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin123', '1', '1', '2022-09-23 02:36:01', '2022-09-23 02:36:01'),
	(43, 'courier', 'courier@gmail.com', 'marvin123', '1', '3', '2022-11-01 12:46:23', '2022-11-01 12:47:47'),
	(44, 'users1', 'users1@gmail.com', 'marvin123', '1', '2', '2022-11-01 12:49:12', '2022-11-01 12:49:12'),
	(45, 'marvin123', 'marvin123@gmial.com', 'marvin123', '1', '2', '2022-11-01 16:32:18', '2022-11-01 16:32:18'),
	(46, 'Mommy', 'mommy@gmail.com', 'marvin123', '1', '2', '2022-11-02 15:47:58', '2022-11-02 15:47:58'),
	(47, 'users123', 'users123@gmail.com', 'marvin123', '1', '2', '2022-11-03 09:14:25', '2022-11-03 09:14:25'),
	(48, 'marvin1234', 'marvin1234@gmail.com', 'marvin123', '1', '2', '2022-11-04 11:59:02', '2022-11-04 11:59:02'),
	(49, 'courier222', 'courier222@gmail.com', 'courier222', '1', '3', '2022-11-04 22:02:16', '2022-11-05 08:13:40'),
	(50, 'courier123', 'courier123@gmail.com', 'marvin123', '3', '3', '2022-11-04 22:08:07', '2022-11-13 09:20:31'),
	(51, 'marvincourier', 'courier44@gmail.com', 'marvin123', '0', '3', '2022-11-13 08:19:54', '2022-11-13 08:55:01');

-- Dumping structure for table pasuyo_management.users_notify
CREATE TABLE IF NOT EXISTS `users_notify` (
  `id_notify` bigint NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL DEFAULT '0',
  `status` tinytext NOT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_notify`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pasuyo_management.users_notify: ~0 rows (approximately)
INSERT INTO `users_notify` (`id_notify`, `description`, `status`, `user_id`, `created_at`) VALUES
	(13, '7894561 Has been Parcel Accepted by Courier', '0', 47, '2022-11-02 17:18:43'),
	(14, '7894561 Has been Delivered', '0', 47, '2022-11-02 17:20:27'),
	(15, '5777 Has been Unsuccessfull Delivery Attempt', '1', 46, '2022-11-03 17:17:30'),
	(16, '54489 Has been Parcel Accepted by Courier', '1', 44, '2022-11-03 17:29:52'),
	(17, '54489 Has been Shipped', '1', 44, '2022-11-03 17:33:30'),
	(18, '54489 Has been In-Transit', '1', 44, '2022-11-03 17:33:54'),
	(19, '54489 Has been Delivered', '1', 44, '2022-11-03 17:38:23'),
	(20, '7959 Has been Item Collected by Courier', '1', 46, '2022-11-03 18:52:36'),
	(21, '7959 Has been Item Collected by Courier', '1', 46, '2022-11-03 18:55:30'),
	(22, '7959 Has been In-Transit', '1', 46, '2022-11-03 19:17:20'),
	(23, '7959 Has been Delivered', '1', 46, '2022-11-03 19:25:46'),
	(24, '855588 Has been Parcel Accepted by Courier', '1', 44, '2022-11-03 19:32:23'),
	(25, '855588 Has been In-Transit', '1', 44, '2022-11-03 19:33:00'),
	(26, '855588 Has been Delivered', '1', 44, '2022-11-03 19:34:22'),
	(27, '789456411 Has been Parcel Accepted by Courier', '1', 44, '2022-11-03 19:50:02'),
	(28, '789456411 Has been In-Transit', '1', 44, '2022-11-03 19:50:58'),
	(29, '78945611 Has been Parcel Accepted by Courier', '1', 44, '2022-11-03 19:56:36'),
	(30, '78945611 Has been In-Transit', '1', 44, '2022-11-03 19:57:11'),
	(31, '1234555512 Has been Parcel Accepted by Courier', '1', 48, '2022-11-03 20:00:52'),
	(32, '1234555512 Has been In-Transit', '1', 48, '2022-11-03 20:01:13'),
	(33, '1234555512 Has been Delivered', '1', 48, '2022-11-03 20:02:47'),
	(34, '5324324 Has been Parcel Accepted by Courier', '1', 48, '2022-11-03 20:11:21'),
	(35, '5324324 Has been In-Transit', '1', 48, '2022-11-03 20:11:45'),
	(36, '5324324 Has been Delivered', '1', 48, '2022-11-03 20:13:00'),
	(37, '78945611 Has been In-Transit', '1', 44, '2022-11-04 16:45:48'),
	(38, '78945611 Has been Delivered', '1', 44, '2022-11-04 16:45:57'),
	(39, ' Has been Parcel Accepted by Courier', '1', 44, '2022-11-10 14:58:31'),
	(40, '4124124321FF Has been Parcel Denied by Courier', '1', 44, '2022-11-10 15:00:11'),
	(41, '789456411 Has been Shipped', '1', 44, '2022-11-10 15:17:17'),
	(42, '4124124321FF Has been Arrived at Destination', '1', 44, '2022-11-10 15:18:53'),
	(43, '4124124321FF Has been Picked-up', '1', 44, '2022-11-10 15:20:49'),
	(44, '4124124321FF Has been Out for Delivery', '1', 44, '2022-11-10 15:21:06'),
	(45, '4124124321FF Has been Unsuccessfull Delivery Attempt', '1', 44, '2022-11-10 15:21:46'),
	(46, '789456411 Has been Delivered', '1', 44, '2022-11-10 15:27:33'),
	(47, '16718409699694538 Has been Parcel Accepted by Courier', '1', 45, '2022-12-24 00:19:03'),
	(48, '16718409699694538 Has been Delivered', '1', 45, '2022-12-24 00:19:27'),
	(49, '16729334955748210 Has been Parcel Accepted by Courier', '0', 44, '2023-01-05 16:00:52'),
	(50, '16729334955748210 Has been Delivered', '0', 44, '2023-01-05 16:01:28'),
	(51, '16729349798846775 Has been Parcel Accepted by Courier', '0', 44, '2023-01-05 16:11:44'),
	(52, '16729349798846775 Has been Item Collected by Courier', '0', 44, '2023-01-05 16:14:05'),
	(53, '16729349798846775 Has been Defective Item', '0', 44, '2023-01-05 16:14:37'),
	(54, '16729365413923112 Has been Parcel Accepted by Courier', '0', 44, '2023-01-05 16:39:21'),
	(55, '16729365413923112 Has been Shipped', '0', 44, '2023-01-05 16:41:02'),
	(56, '16729365413923112 Has been In-Transit', '0', 44, '2023-01-05 16:41:31'),
	(57, '16729365413923112 Has been Arrived at Destination', '0', 44, '2023-01-05 16:41:44'),
	(58, '16729365413923112 Has been Delivered', '0', 44, '2023-01-05 16:42:15');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
