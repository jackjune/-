/*
Navicat MySQL Data Transfer

Source Server         : a
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : ts

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2021-06-15 17:48:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `biao1`
-- ----------------------------
DROP TABLE IF EXISTS `biao1`;
CREATE TABLE `biao1` (
  `tsh` int(10) NOT NULL,
  `tsm` varchar(50) DEFAULT NULL,
  `zz` varchar(50) DEFAULT NULL,
  `zt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tsh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of biao1
-- ----------------------------
INSERT INTO `biao1` VALUES ('1', '追风筝的人', '[美]卡勒德·胡赛尼', '已借出');
INSERT INTO `biao1` VALUES ('2', '解忧杂货店', '[日]东野硅吾', '已借出');
INSERT INTO `biao1` VALUES ('3', '小王子', '[法]圣埃克苏佩里', '已借出');
INSERT INTO `biao1` VALUES ('4', '白夜行', '[日]东野硅吾', '在馆');
INSERT INTO `biao1` VALUES ('5', '围城', '钱钟书', '在馆');
INSERT INTO `biao1` VALUES ('6', '三体', '刘慈欣', '在馆');
INSERT INTO `biao1` VALUES ('7', '挪威的森林', '[日]村上春树', '在馆');
INSERT INTO `biao1` VALUES ('8', '嫌疑人x的献身', '[日]东野硅吾', '在馆');
INSERT INTO `biao1` VALUES ('9', '活着', '余华', '在馆');
INSERT INTO `biao1` VALUES ('10', '红楼梦', '中国古典文学读本丛书', '在馆');
INSERT INTO `biao1` VALUES ('11', '顶替', '1111', '在馆');

-- ----------------------------
-- Table structure for `biao2`
-- ----------------------------
DROP TABLE IF EXISTS `biao2`;
CREATE TABLE `biao2` (
  `id` int(10) NOT NULL,
  `xm` varchar(50) DEFAULT NULL,
  `bj` varchar(50) DEFAULT NULL,
  `用户名` varchar(50) DEFAULT NULL,
  `zt` varchar(50) DEFAULT NULL,
  `密码` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of biao2
-- ----------------------------
INSERT INTO `biao2` VALUES ('10000', '李四', 'PHP1班', 'admin', '正常', 'admin');

-- ----------------------------
-- Table structure for `biao3`
-- ----------------------------
DROP TABLE IF EXISTS `biao3`;
CREATE TABLE `biao3` (
  `tsh` int(10) NOT NULL,
  `tsmc` varchar(50) NOT NULL,
  `jssj` datetime DEFAULT NULL,
  `yhsj` datetime DEFAULT NULL,
  PRIMARY KEY (`tsmc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of biao3
-- ----------------------------
INSERT INTO `biao3` VALUES ('111', '111', '2018-09-01 00:00:00', '2019-04-01 00:00:00');
INSERT INTO `biao3` VALUES ('2', '解忧杂货店', '2018-09-01 00:00:00', '2018-10-01 00:00:00');
INSERT INTO `biao3` VALUES ('1', '追风筝的人', '2018-09-01 00:00:00', '2019-04-01 00:00:00');

-- ----------------------------
-- Table structure for `jy`
-- ----------------------------
DROP TABLE IF EXISTS `jy`;
CREATE TABLE `jy` (
  `id` int(50) NOT NULL,
  `tsh` varchar(55) NOT NULL,
  `cz` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`tsh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jy
-- ----------------------------
INSERT INTO `jy` VALUES ('10000', '1', '借书');
INSERT INTO `jy` VALUES ('10000', '2', '借书');
