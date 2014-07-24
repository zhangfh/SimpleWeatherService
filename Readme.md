最简单的web service：
1.创建数据库test
2.创建表：
CREATE TABLE `weather` (
  `id` int(11) NOT NULL auto_increment,
  `station` char(2) NOT NULL,
  `temp_deg_c` float default NULL,
  `relative_humidity` float default NULL,
  `dewpoint_deg_c` float default NULL,
  `wind_chill_deg_c` float default NULL,
  `pressure_millibars` float default NULL,
  `aeronautical_correction_millibars` float default NULL,
  `wind_speed_m_per_s` float default NULL,
  `peak_gust_m_per_s` float default NULL,
  `wind_from_dir` char(3) default NULL,
  `wind_from_deg` float default NULL,
  `rain_accumulation_mm` float default NULL,
  `timestamp` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1；
3.为临时显示，增加几条记录。
4.创建alldata.php。
5.浏览器访问alldata.php
6.增加feed.php,浏览器访问feed.php会返回json数据