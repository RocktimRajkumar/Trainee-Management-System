/*
 Navicat Premium Data Transfer

 Source Server         : hp
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : tms

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 29/05/2018 20:54:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address`  (
  `tid` int(8) NULL DEFAULT NULL,
  `city` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `state` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `streetname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  INDEX `tid`(`tid`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `userid` int(4) NOT NULL AUTO_INCREMENT,
  `pswd` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `uname` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `uemail` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `usecurekey` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`userid`) USING BTREE,
  UNIQUE INDEX `uemail`(`uemail`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for offcampus
-- ----------------------------
DROP TABLE IF EXISTS `offcampus`;
CREATE TABLE `offcampus`  (
  `sn` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(245) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `duration` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `venue` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type_id` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offcampus
-- ----------------------------
INSERT INTO `offcampus` VALUES (1, 'Communication and training skills for efficient extension service', '4', 'SAMETI,MAnipur', 2);
INSERT INTO `offcampus` VALUES (2, 'Trainning Methods and Training Mangement Skills', '4', 'SAMETI, SIKKIM', 2);

-- ----------------------------
-- Table structure for oncampus
-- ----------------------------
DROP TABLE IF EXISTS `oncampus`;
CREATE TABLE `oncampus`  (
  `sn` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(24) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `duration` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `venue` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type_id` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pgdaem
-- ----------------------------
DROP TABLE IF EXISTS `pgdaem`;
CREATE TABLE `pgdaem`  (
  `sn` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(24) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `duration` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type_id` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for programme
-- ----------------------------
DROP TABLE IF EXISTS `programme`;
CREATE TABLE `programme`  (
  `type_id` int(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`type_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of programme
-- ----------------------------
INSERT INTO `programme` VALUES (1, 'OnCampus');
INSERT INTO `programme` VALUES (2, 'OffCampus');
INSERT INTO `programme` VALUES (3, 'Research Study');
INSERT INTO `programme` VALUES (4, 'PGDAEM');

-- ----------------------------
-- Table structure for pschedule
-- ----------------------------
DROP TABLE IF EXISTS `pschedule`;
CREATE TABLE `pschedule`  (
  `pdays` int(4) NOT NULL,
  `time` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `psession` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `methods` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `facilitator` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type_id` int(4) NULL DEFAULT NULL,
  INDEX `type_id`(`type_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for researchstudy
-- ----------------------------
DROP TABLE IF EXISTS `researchstudy`;
CREATE TABLE `researchstudy`  (
  `sn` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(24) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `conductby` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `issue` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type_id` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for trainee
-- ----------------------------
DROP TABLE IF EXISTS `trainee`;
CREATE TABLE `trainee`  (
  `tid` int(8) NOT NULL AUTO_INCREMENT,
  `tname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `degisnation` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phn` int(10) NOT NULL,
  `DOR` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type_id` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`tid`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
