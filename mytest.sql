/*
MySQL Backup
Source Server Version: 5.5.24
Source Database: mytest
Date: 2017-8-30 15:13:12
*/


-- ----------------------------
--  Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `star` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dt` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `comments` VALUES ('1','小布点','支持Ajax星星投票的PHP无刷新评论程序+分页','3','2017-08-30 14:58:59'),  ('2','开源爱好者','开源是一种境界！开源爱好者提供开源源码下载。','3','2017-08-30 14:59:02'),  ('3','小黄人','这个小程序真心不错，找了好久没找到哦','5','2017-08-30 14:59:06'),  ('4','www.srcfans.com','开源是一种境界！开源爱好者提供开源源码下载。提供网页特效，文章教程、开源源代码等资源。','2','2017-08-30 14:59:11'),  ('5','源码粉儿','支持Ajax星星投票的PHP无刷新评论程序+分页','4','2017-08-30 14:59:16');