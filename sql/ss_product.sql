
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ss_product
-- ----------------------------
DROP TABLE IF EXISTS `ss_product`;
CREATE TABLE `ss_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `state` int(11) DEFAULT NULL COMMENT '0=删除，1=关闭，2=启用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ss_product
-- ----------------------------
INSERT INTO `ss_product` VALUES ('1', '包月套餐', '数量表示购买几个月', null, '10', '1', '2015-08-05 11:15:42', '2');
INSERT INTO `ss_product` VALUES ('2', '半年套餐', '数量表示购买几个半年套餐', null, '50', '6', '2015-08-05 14:52:49', '2');
INSERT INTO `ss_product` VALUES ('3', '包年套餐', '数量表示购买多少年', null, '100', '12', '2015-08-05 14:53:09', '2');
