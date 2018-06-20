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

 Date: 21/06/2018 01:09:15
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
INSERT INTO `address` VALUES ('1529429536', 'Mumbai', 'Maharastra', 'Andhari');

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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offcampus
-- ----------------------------
INSERT INTO `offcampus` VALUES (6, 'Communication and Training Skills for Efficient Extension Service', '2018-06-23', '2018-06-26', 'SAMETI,Manipuar', 2, '180604030612');
INSERT INTO `offcampus` VALUES (7, 'Workshop on Climate Smart Agriculture and Disaster Management in Assam', '2018-11-07', '2018-11-10', 'SAMETI,Assam', 2, '180621000642');

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
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of oncampus
-- ----------------------------
INSERT INTO `oncampus` VALUES (8, 'Skill Development for m-Extension and e-Extension', '2018-05-09', '2018-05-13', 'EEI(NE Region) AAU,Jorhat', 1, '180604000648');
INSERT INTO `oncampus` VALUES (9, 'Management Games and Interactive Training Tools', '2018-11-14', '2018-11-17', 'SAMETI, Manipur', 1, '180620120645');

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
-- Table structure for pgdaemmaterial
-- ----------------------------
DROP TABLE IF EXISTS `pgdaemmaterial`;
CREATE TABLE `pgdaemmaterial`  (
  `sn` int(3) NOT NULL AUTO_INCREMENT,
  `batch` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `state` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `semester` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `result` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`sn`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pgdaemmaterial
-- ----------------------------
INSERT INTO `pgdaemmaterial` VALUES (3, '2014-15', 'assam', '1st', './pgdaemmaterial/standardColor.txt');

-- ----------------------------
-- Table structure for pgdaemresult
-- ----------------------------
DROP TABLE IF EXISTS `pgdaemresult`;
CREATE TABLE `pgdaemresult`  (
  `sn` int(3) NOT NULL AUTO_INCREMENT,
  `batch` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `state` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `semester` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `result` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`sn`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pgdaemresult
-- ----------------------------
INSERT INTO `pgdaemresult` VALUES (1, '2014-15', 'assam', '1st', './pgdaemresult/Typing 19th May 2018.pdf');
INSERT INTO `pgdaemresult` VALUES (2, '2017-18', 'assam', '1st', './pgdaemresult/Typing 21st May 2018.pdf');

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
INSERT INTO `pro_schedule` VALUES ('180619220657', 'Managerial Skills and Leadership Development');
INSERT INTO `pro_schedule` VALUES ('180620120645', 'Management Games and Interactive Training Tools');
INSERT INTO `pro_schedule` VALUES ('180621000642', 'Workshop on Climate Smart Agriculture and Disaster Management in Assam');

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
  `psession` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `methods` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `facilitator` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sn` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pschedule
-- ----------------------------
INSERT INTO `pschedule` VALUES ('180604030612', 1, '9.30-10.00', 'Registration', '', 'Ms.M.Dutta', '0');
INSERT INTO `pschedule` VALUES ('180604030612', 1, '10.00-10.30', 'Introductory session', '', '', '1');
INSERT INTO `pschedule` VALUES ('180604030612', 1, '10.30-10.45', 'Tea Break', 'Tea Break', 'Tea Break', '2');
INSERT INTO `pschedule` VALUES ('180604030612', 1, '10.45-11.30', 'Course briefing and Training Need Assessment/Pre-course evaluation', 'Briefing-Proforma', 'Dr.S.Borua,EEI,Jorhat', '3');
INSERT INTO `pschedule` VALUES ('180619220657', 1, '09.30-11.15', 'Management Game -II', 'Interactive session   Presentation', 'Dr. B.L. Khuhly, SAMETI, Mizoram', '0');
INSERT INTO `pschedule` VALUES ('180619220657', 1, '11.15-11.30', 'Tea Break', 'Tea Break', 'Tea Break', '1');
INSERT INTO `pschedule` VALUES ('180619220657', 1, '11.30-01.00', 'Management Game-III', 'Group work  presentation input', 'Dr.A.K.Bhattacharyya', '2');

-- ----------------------------
-- Table structure for regional
-- ----------------------------
DROP TABLE IF EXISTS `regional`;
CREATE TABLE `regional`  (
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
  CONSTRAINT `regional_ibfk_1` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `regional_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of regional
-- ----------------------------
INSERT INTO `regional` VALUES (9, 'Managerial Skills and Leadership Development', '2018-12-11', '2018-12-11', 'EEI(NEW REGION) AAU,JORHAT', 3, '180619220657');

-- ----------------------------
-- Table structure for researchreport
-- ----------------------------
DROP TABLE IF EXISTS `researchreport`;
CREATE TABLE `researchreport`  (
  `sn` int(3) NOT NULL AUTO_INCREMENT,
  `report` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`sn`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of researchreport
-- ----------------------------
INSERT INTO `researchreport` VALUES (3, './reserachreport/SSL-Installation.pdf');

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
INSERT INTO `trainee` VALUES ('1529429536', 'Telusko', 'Teacher', '7896543210', '2018-06-19', 3, 9, 'Graduate', 'telusko@gmail.com', 'Regional');

SET FOREIGN_KEY_CHECKS = 1;
