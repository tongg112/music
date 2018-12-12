

CREATE TABLE IF NOT EXISTS `gedan` (
  `gedan_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) REFERENCES user(id) ,
  `list_name` varchar(255) NOT NULL DEFAULT '' COMMENT '歌单名',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `created` varchar(255) NOT NULL DEFAULT '' COMMENT '创建时间',
  `updated` varchar(255) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`gedan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='歌单' AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `gequ` (
  `gequ_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) REFERENCES user(id) ,
  `song_name` varchar(255) NOT NULL DEFAULT '',
  `singer` varchar(255) DEFAULT NULL COMMENT '歌手',
  `album` varchar(255) DEFAULT NULL COMMENT '专辑',
  `release_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`gequ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='歌曲表' AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `gequ_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gedan_id` int(11) REFERENCES gedan(gedan_id) ,
  `gequ_id` int(11) REFERENCES gequ(gequ_id) ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='歌单歌曲关联表' AUTO_INCREMENT=1 ;


