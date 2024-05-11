/*
 Navicat Premium Data Transfer

 Source Server         : db_YPMB
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : mvp_php

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 11/05/2024 18:02:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pasien
-- ----------------------------
DROP TABLE IF EXISTS `pasien`;
CREATE TABLE `pasien`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tempat` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tl` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telp` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pasien
-- ----------------------------
INSERT INTO `pasien` VALUES (1, '2202292', 'iqbal', 'Jakarta', '2004-03-16', 'Laki-laki', 'iqbal@upi.edu', '085812121221');
INSERT INTO `pasien` VALUES (2, '6754327002', 'Wahyu', 'Cimahi', '2020-12-14', 'Laki-laki', 'wah@upi.edu', '089678898545');
INSERT INTO `pasien` VALUES (4, '7890654001', 'Ayang', 'Bandung', '2020-11-29', 'Perempuan', 'ay@gmail.com', '081321778980');
INSERT INTO `pasien` VALUES (5, '9876576008', 'Zulfan', 'bandung', '2021-01-04', 'Laki-laki', 'jull@gmai.com', '088970803025');
INSERT INTO `pasien` VALUES (6, '4', 'Prilla', 'Seoul', '2001-05-05', 'Perempuan', 'prillarosaria@upi.edu', '081234876235');
INSERT INTO `pasien` VALUES (12, '123123123', 'koki', 'Jakarta', '2024-05-09', 'Laki-laki', 'asdasd@fansd', '12341231');

SET FOREIGN_KEY_CHECKS = 1;
