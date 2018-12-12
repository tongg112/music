-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期:
-- 服务器版本: 5.5.53
-- PHP 版本: 7.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `music`
--

-- --------------------------------------------------------

--
-- 表的结构 `gedan`
--

CREATE TABLE IF NOT EXISTS `gedan` (
  `gedan_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `list_name` varchar(255) NOT NULL DEFAULT '' COMMENT '歌单名',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `created` varchar(255) NOT NULL DEFAULT '' COMMENT '创建时间',
  `updated` varchar(255) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`gedan_id`),
  KEY `gedan_fk_1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='歌单' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `gequ`
--

CREATE TABLE IF NOT EXISTS `gequ` (
  `gequ_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `song_name` varchar(255) NOT NULL DEFAULT '',
  `singer` varchar(255) DEFAULT NULL COMMENT '歌手',
  `album` varchar(255) DEFAULT NULL COMMENT '专辑',
  `release_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`gequ_id`),
  KEY `gequ_fk_1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='歌曲表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `gequ_relation`
--

CREATE TABLE IF NOT EXISTS `gequ_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gedan_id` int(11) DEFAULT NULL,
  `gequ_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gequ_relation_fk_1` (`gedan_id`),
  KEY `gequ_relation_fk_2` (`gequ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='歌单歌曲关联表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1544496816),
('m130524_201442_init', 1544496819);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 限制导出的表
--

--
-- 限制表 `gedan`
--
ALTER TABLE `gedan`
  ADD CONSTRAINT `gedan_fk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `gequ`
--
ALTER TABLE `gequ`
  ADD CONSTRAINT `gequ_fk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `gequ_relation`
--
ALTER TABLE `gequ_relation`
  ADD CONSTRAINT `gequ_relation_fk_1` FOREIGN KEY (`gedan_id`) REFERENCES `gedan` (`gedan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gequ_relation_fk_2` FOREIGN KEY (`gequ_id`) REFERENCES `gequ` (`gequ_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
