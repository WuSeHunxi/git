show databases;
use test;
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `student` VALUES (1,'123','么么哒213123123123','大学',123),(2,'123','么么哒213123123123','大学',123),(3,'1234567890','么么哒','你猜',998),(4,'1234567890','么么哒-讨厌','你猜-不告诉你',1998),(5,'1234567890','西兰花','蔬菜大学',1998),(6,'1234567890','西红柿','水果大学',1998),(7,'1234567890','花菜','鲜花大学',1998),(8,'1234567890','牛肉','肉类大学',123),(9,'123456','绿色的花菜','花菜大学',998),(11,'12','你好吗','123',0),(13,'123','你好吗','我不好',0),(14,'123','fox','么么哒',998),(16,'123','苹果大西瓜','好吃棒棒哒',12);



