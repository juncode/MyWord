/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : myword

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-06-26 17:59:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `web`
-- ----------------------------
DROP TABLE IF EXISTS `web`;
CREATE TABLE `web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sys_name` varchar(11) DEFAULT NULL COMMENT '网站名称',
  `sys_theme` varchar(11) DEFAULT NULL COMMENT '网站主题',
  `sys_creator` varchar(11) DEFAULT NULL COMMENT '创始人',
  `sys_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web
-- ----------------------------
INSERT INTO `web` VALUES ('1', '欢迎来到', '小安', '黄军', '1403773112');
