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

 Date: 03/06/2018 12:20:42
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
  `streetname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  INDEX `tid`(`tid`) USING BTREE,
  CONSTRAINT `trainee_id` FOREIGN KEY (`tid`) REFERENCES `trainee` (`tid`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

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
  `scheduleID` int(5) NOT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  INDEX `sID_idx`(`scheduleID`) USING BTREE,
  CONSTRAINT `program_type` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `sID` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offcampus
-- ----------------------------
INSERT INTO `offcampus` VALUES (1, 'Communication and Training Skills for Efficient', '2018-05-23', '2018-05-26', 'SAMETI, Manipur', 2, 1);
INSERT INTO `offcampus` VALUES (2, 'Training Methods and Training Management Skills', '2018-06-06', '2018-06-09', 'SAMETI, Sikkim', 2, 2);

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
  `scheduleID` int(5) NOT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  INDEX `schID_idx`(`scheduleID`) USING BTREE,
  CONSTRAINT `ptype` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `scid` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of oncampus
-- ----------------------------
INSERT INTO `oncampus` VALUES (1, 'Skill development for m-Extension and e-Extension', '2018-05-09', '2018-05-12', 'EEI(NE Region) AAU, Jorhat', 1, 3);
INSERT INTO `oncampus` VALUES (2, 'Soft skills for Interpersonal Effectiveness of Extension Personnel', '2018-08-08', '2018-08-11', 'EEI(NE Region) AAU, Jorhat', 1, 4);

-- ----------------------------
-- Table structure for pgdaem
-- ----------------------------
DROP TABLE IF EXISTS `pgdaem`;
CREATE TABLE `pgdaem`  (
  `sn` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(245) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `durationfrom` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `durationto` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type_id` int(4) NOT NULL,
  `scheduleID` int(5) NOT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  INDEX `ssId_idx`(`scheduleID`) USING BTREE,
  CONSTRAINT `progrm_type` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `ssId` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pgdaem
-- ----------------------------
INSERT INTO `pgdaem` VALUES (1, 'Contact classes of PGDAEM 1st Semester for Assam', 'Dates to be decided', 'Dates to be decided', 4, 5);

-- ----------------------------
-- Table structure for pro_schedule
-- ----------------------------
DROP TABLE IF EXISTS `pro_schedule`;
CREATE TABLE `pro_schedule`  (
  `schedule_ID` int(5) NOT NULL,
  `schedule_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`schedule_ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pro_schedule
-- ----------------------------
INSERT INTO `pro_schedule` VALUES (1, NULL);
INSERT INTO `pro_schedule` VALUES (2, NULL);
INSERT INTO `pro_schedule` VALUES (3, NULL);
INSERT INTO `pro_schedule` VALUES (4, NULL);
INSERT INTO `pro_schedule` VALUES (5, NULL);
INSERT INTO `pro_schedule` VALUES (6, NULL);

-- ----------------------------
-- Table structure for programme
-- ----------------------------
DROP TABLE IF EXISTS `programme`;
CREATE TABLE `programme`  (
  `type_id` int(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

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
  `schedule_ID` int(5) NOT NULL,
  `pdays` int(4) NULL DEFAULT NULL,
  `time` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `psession` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `methods` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `facilitator` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  INDEX `type_id`(`schedule_ID`) USING BTREE,
  CONSTRAINT `proschedule` FOREIGN KEY (`schedule_ID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pschedule
-- ----------------------------
INSERT INTO `pschedule` VALUES (1, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES (2, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES (3, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES (4, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES (5, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES (6, NULL, NULL, NULL, NULL, NULL);

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
  `scheduleID` int(5) NOT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  INDEX `ssssid_idx`(`scheduleID`) USING BTREE,
  CONSTRAINT `protype` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `ssssid` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of researchstudy
-- ----------------------------
INSERT INTO `researchstudy` VALUES (1, 'CROPII', 'BILL AAA', 'TERE MAKI', 3, 6);

-- ----------------------------
-- Table structure for trainee
-- ----------------------------
DROP TABLE IF EXISTS `trainee`;
CREATE TABLE `trainee`  (
  `tid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `degisnation` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phn` int(10) NOT NULL,
  `DOR` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type_id` int(4) NOT NULL,
  `sn` int(4) NOT NULL,
  PRIMARY KEY (`tid`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
