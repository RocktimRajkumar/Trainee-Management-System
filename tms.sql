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

 Date: 03/06/2018 20:41:52
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
INSERT INTO `address` VALUES ('1528036776', 'Jorhat', 'ASSAM', 'Rajbari Lane Behind Eleye Cinema Hall');

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offcampus
-- ----------------------------
INSERT INTO `offcampus` VALUES (1, 'Communication and Training Skills for Efficient', '2018-05-23', '2018-05-26', 'SAMETI, Manipur', 2, '1');
INSERT INTO `offcampus` VALUES (2, 'Training Methods and Training Management Skills', '2018-06-06', '2018-06-09', 'SAMETI, Sikkim', 2, '2');
INSERT INTO `offcampus` VALUES (3, 'Organic Farming Techniques and Organic Certification', '2018-08-01', '2018-08-04', 'SAMETI, Arunachal Pradesh', 2, '180603130655');
INSERT INTO `offcampus` VALUES (4, 'sdfsd', '', '', '', 2, '180603140606');

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
  CONSTRAINT `ptype` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `pross` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of oncampus
-- ----------------------------
INSERT INTO `oncampus` VALUES (1, 'Skill development for m-Extension and e-Extension', '2018-05-09', '2018-05-12', 'EEI(NE Region) AAU, Jorhat', 1, '3');
INSERT INTO `oncampus` VALUES (2, 'Soft skills for Interpersonal Effectiveness of Extension Personnel', '2018-08-08', '2018-08-11', 'EEI(NE Region) AAU, Jorhat', 1, '4');
INSERT INTO `oncampus` VALUES (3, 'Managerial Skills and Leadership Development', '2018-02-06', '2018-02-09', 'EEI(NE Region AAU,Jorhat)', 1, '180603140641');
INSERT INTO `oncampus` VALUES (4, 'Regional Workshop on Implementation of Central Sector Schemes and Training Plannign of EEI(NE Region) and SAMETIs of NE states', 'Dates to be decided', 'Dates to be decided', '', 1, '180603140627');
INSERT INTO `oncampus` VALUES (5, 'Workshop on Climate Smart Agriculture and Disaster Management in NE States', '2018-09-05', '2018-09-08', 'EEI(NE Region AAU, Jorhat)', 1, '180603170609');

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
  `scheduleID` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`sn`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  INDEX `prosss_idx`(`scheduleID`) USING BTREE,
  CONSTRAINT `progrm_type` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `prosss` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pgdaem
-- ----------------------------
INSERT INTO `pgdaem` VALUES (1, 'Contact classes of PGDAEM 1st Semester for Assam', 'Dates to be decided', 'Dates to be decided', 4, '5');
INSERT INTO `pgdaem` VALUES (2, 'PGDAEM Examination 1st Semester, Assam', 'Dates to be decided', 'Dates to be decided', 4, '180603140630');
INSERT INTO `pgdaem` VALUES (3, 'Contact classes of PGDAEM 2nd Semester for Nagaland', 'Dates to be decided', 'Dates to be decided', 4, '180603190642');

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
INSERT INTO `pro_schedule` VALUES ('1', NULL);
INSERT INTO `pro_schedule` VALUES ('180603130631', '1');
INSERT INTO `pro_schedule` VALUES ('180603130650', 'gggg');
INSERT INTO `pro_schedule` VALUES ('180603130651', 'gggg');
INSERT INTO `pro_schedule` VALUES ('180603130655', 'Organic Farming Techniques and Organic Certification');
INSERT INTO `pro_schedule` VALUES ('180603140606', 'sdfsd');
INSERT INTO `pro_schedule` VALUES ('180603140627', 'Regional Workshop on Implementation of Central Sector Schemes and Training Plannign of EEI(NE Region) and SAMETIs of NE states');
INSERT INTO `pro_schedule` VALUES ('180603140630', 'PGDAEM Examination 1st Semester, Assam');
INSERT INTO `pro_schedule` VALUES ('180603140631', 'Block Chin Working Principle');
INSERT INTO `pro_schedule` VALUES ('180603140641', 'Managerial Skills and Leadership Development');
INSERT INTO `pro_schedule` VALUES ('180603170609', 'Workshop on Climate Smart Agriculture and Disaster Management in NE States');
INSERT INTO `pro_schedule` VALUES ('180603190642', 'Contact classes of PGDAEM 2nd Semester for Nagaland');
INSERT INTO `pro_schedule` VALUES ('2', NULL);
INSERT INTO `pro_schedule` VALUES ('3', NULL);
INSERT INTO `pro_schedule` VALUES ('4', NULL);
INSERT INTO `pro_schedule` VALUES ('5', NULL);
INSERT INTO `pro_schedule` VALUES ('6', NULL);

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
  `schedule_ID` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pdays` int(4) NULL DEFAULT NULL,
  `time` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `psession` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `methods` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `facilitator` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  INDEX `prosssss_idx`(`schedule_ID`) USING BTREE,
  CONSTRAINT `prosssss` FOREIGN KEY (`schedule_ID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pschedule
-- ----------------------------
INSERT INTO `pschedule` VALUES ('1', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('2', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('3', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('4', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('5', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('6', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('180603130651', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('180603130655', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('180603140606', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('180603140641', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('180603140627', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('180603140630', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('180603140631', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('180603170609', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pschedule` VALUES ('180603190642', NULL, NULL, NULL, NULL, NULL);

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
  CONSTRAINT `protype` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `prossss` FOREIGN KEY (`scheduleID`) REFERENCES `pro_schedule` (`schedule_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of researchstudy
-- ----------------------------
INSERT INTO `researchstudy` VALUES (1, 'CROPII', 'BILL AAA', 'TERE MAKI', 3, '6');
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
  PRIMARY KEY (`tid`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  CONSTRAINT `prtype` FOREIGN KEY (`type_id`) REFERENCES `programme` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of trainee
-- ----------------------------
INSERT INTO `trainee` VALUES ('1528036776', 'Rajkumar Rocktim Narayan Singha', 'Student', '+918011806053', '2018-06-05', 2, 2);
INSERT INTO `trainee` VALUES ('1528038565', 'Joy Saha', 'Teacher', '08974561230', '2018-06-04', 4, 2);

SET FOREIGN_KEY_CHECKS = 1;
