/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : tms

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 19/06/2018 21:49:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address`  (
  `tid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `state` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `streetname` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  INDEX `tid`(`tid`) USING BTREE,
  CONSTRAINT `trainee_id` FOREIGN KEY (`tid`) REFERENCES `trainee` (`tid`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES ('1528051374', 'Jorhat', 'Assam', 'JPR');

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for offcampus
-- ----------------------------
DROP TABLE IF EXISTS `offcampus`;
CREATE TABLE `offcampus`  (
  `sn` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(245) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `durationfrom` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `durationto` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `venue` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type_id` int(4) NOT NULL,
  `scheduleID` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  INDEX `sID_idx`(`scheduleID`) USING BTREE,
  CONSTRAINT `program_type` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `pros` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offcampus
-- ----------------------------
INSERT INTO `offcampus` VALUES (6, 'Communication and Training Skills for Efficient Extension Service', '2018-06-23', '2018-06-26', 'SAMETI,Manipuar', 2, '180604030612');

-- ----------------------------
-- Table structure for oncampus
-- ----------------------------
DROP TABLE IF EXISTS `oncampus`;
CREATE TABLE `oncampus`  (
  `sn` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(245) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `durationfrom` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `durationto` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `venue` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type_id` int(4) NOT NULL,
  `scheduleID` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  INDEX `pross_idx`(`scheduleID`) USING BTREE,
  CONSTRAINT `pross` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ptype` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of oncampus
-- ----------------------------
INSERT INTO `oncampus` VALUES (8, 'Skill Development for m-Extension and e-Extension', '2018-05-09', '2018-05-13', 'EEI(NE Region) AAU,Jorhat', 1, '180604000648');

-- ----------------------------
-- Table structure for pgdaem
-- ----------------------------
DROP TABLE IF EXISTS `pgdaem`;
CREATE TABLE `pgdaem`  (
  `pgdaemid` int(4) NOT NULL AUTO_INCREMENT,
  `batch` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `state` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `semester` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `canname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `canID` varbinary(40) NULL DEFAULT NULL,
  `designation` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phoneno` int(11) NULL DEFAULT NULL,
  `email` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qualification` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `discipline` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lenofservice` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pgdaemid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pgdaem
-- ----------------------------
INSERT INTO `pgdaem` VALUES (1, 'abc', 'def', 'hij', 'klm', 0x797979, 'nop', 'qrst', 1234, 'uvwx@gmail.com', 'degee', 'bbbbbb', 'zzzzz');
INSERT INTO `pgdaem` VALUES (2, '2014-15', 'assam', '1st', 'abc', 0x646566, 'ghi', 'jkl', 1234, 'abc@gmail.com', 'mno', 'pqrst', 'uvwx');
INSERT INTO `pgdaem` VALUES (3, '2014-15', 'assam', '1st', 'abc', 0x646566, 'ghi', 'jkl', 1234, 'abc@gmail.com', 'mno', 'pqrst', 'uvwx');
INSERT INTO `pgdaem` VALUES (4, '2014-15', 'assam', '1st', 'Biraj', 0x31353239343137323330, 'stuent', 'titabor', 8976332, 'biraj@gmail.com', '12th', 'pgd', '2');

-- ----------------------------
-- Table structure for pro_schedule
-- ----------------------------
DROP TABLE IF EXISTS `pro_schedule`;
CREATE TABLE `pro_schedule`  (
  `schedule_ID` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `schedule_name` varchar(245) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`schedule_ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pro_schedule
-- ----------------------------
INSERT INTO `pro_schedule` VALUES ('180604000648', 'Skill Development for m-Extension and e-Extension');
INSERT INTO `pro_schedule` VALUES ('180604030612', 'Communication and Training Skills for Efficient Extension Service');

-- ----------------------------
-- Table structure for programme
-- ----------------------------
DROP TABLE IF EXISTS `programme`;
CREATE TABLE `programme`  (
  `type_id` int(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of programme
-- ----------------------------
INSERT INTO `programme` VALUES (1, 'OnCampus');
INSERT INTO `programme` VALUES (2, 'OffCampus');
INSERT INTO `programme` VALUES (3, 'Regional Workshop');

-- ----------------------------
-- Table structure for pschedule
-- ----------------------------
DROP TABLE IF EXISTS `pschedule`;
CREATE TABLE `pschedule`  (
  `schedule_ID` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pdays` int(4) NULL DEFAULT NULL,
  `time` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `psession` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `methods` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `facilitator` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  INDEX `pro_schdule`(`schedule_ID`) USING BTREE,
  CONSTRAINT `pro_schdule` FOREIGN KEY (`schedule_ID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pschedule
-- ----------------------------
INSERT INTO `pschedule` VALUES ('180604000648', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('180604030612', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for researchstudy
-- ----------------------------
DROP TABLE IF EXISTS `researchstudy`;
CREATE TABLE `researchstudy`  (
  `sn` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(245) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `conductby` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `issue` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type_id` int(4) NOT NULL,
  `scheduleID` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  INDEX `prossss_idx`(`scheduleID`) USING BTREE,
  CONSTRAINT `prossss` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `protype` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of researchstudy
-- ----------------------------
INSERT INTO `researchstudy` VALUES (2, 'Block Chin Working Principle', 'Rocktim', 'Charles Xavier', 3, '180603140631');

-- ----------------------------
-- Table structure for trainee
-- ----------------------------
DROP TABLE IF EXISTS `trainee`;
CREATE TABLE `trainee`  (
  `tid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tname` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `degisnation` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phn` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `DOR` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type_id` int(4) NOT NULL,
  `sn` int(4) NOT NULL,
  `qualification` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `discipline` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`tid`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  CONSTRAINT `prtype` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of trainee
-- ----------------------------
INSERT INTO `trainee` VALUES ('1528051374', 'Govinda Poddar', 'Student', '8795462120', '2018-06-06', 1, 8, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
