��򵥵�web service��
1.�������ݿ�test
2.������
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
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1��
3.Ϊ��ʱ��ʾ�����Ӽ�����¼��
4.����alldata.php��
5.���������alldata.php
6.����feed.php,���������feed.php�᷵��json���ݣ�ֻȡ���µ�����
7.����fetch.php,���������fetch.php���Ὣ��ȡ����������д�����ݿ��У�����һ������
  ��ͣ�ķ��ʴ˵�ַ����ô���ݿ�Ҳ����Ӧ������ȡ����������