/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : rico

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-11-11 17:57:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增主键',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '姓名',
  `sex` enum('male','female','unknown') NOT NULL DEFAULT 'unknown' COMMENT '性别',
  `age` tinyint(3) NOT NULL DEFAULT '0' COMMENT '年龄',
  `account` varchar(20) NOT NULL DEFAULT '' COMMENT '帐号',
  `passwd` varchar(20) NOT NULL DEFAULT '' COMMENT '密码',
  `profile` text NOT NULL COMMENT '简介',
  `create_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  `modify_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'rico', 'male', '22', 'rico.wu', '111111', 'none', '0000-00-00 00:00:00', '2015-11-11 16:30:01');
INSERT INTO `user` VALUES ('2', 'a', 'male', '23', 'aa', '123456', 'none', '0000-00-00 00:00:00', '2015-11-11 16:32:12');
INSERT INTO `user` VALUES ('3', 'b', 'female', '21', 'be', '666666', 'hi', '0000-00-00 00:00:00', '2015-11-11 16:32:44');
INSERT INTO `user` VALUES ('4', 'c', 'female', '24', 'cc', '111111', 'cc', '0000-00-00 00:00:00', '2015-11-11 16:33:08');
INSERT INTO `user` VALUES ('5', 'd', 'male', '28', 'da', 'asdfgh', 'json', '0000-00-00 00:00:00', '2015-11-11 16:33:44');
INSERT INTO `user` VALUES ('6', 'sd', 'unknown', '0', '', '', '', '0000-00-00 00:00:00', '2015-11-11 17:03:35');
INSERT INTO `user` VALUES ('7', 'seven', 'female', '7', ':account', ':passwd', '', '0000-00-00 00:00:00', '2015-11-11 17:42:29');
INSERT INTO `user` VALUES ('9', 'hello', 'female', '18', 'world', 'program', '', '0000-00-00 00:00:00', '2015-11-11 17:07:41');
INSERT INTO `user` VALUES ('12', 'test1', 'unknown', '23', '', '', '', '0000-00-00 00:00:00', '2015-11-11 17:55:54');
INSERT INTO `user` VALUES ('13', 'test2', 'unknown', '23', '', '', '', '0000-00-00 00:00:00', '2015-11-11 17:55:54');
