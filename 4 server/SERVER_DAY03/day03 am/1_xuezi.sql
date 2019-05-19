#丢弃数据库xuezi，如果存在的话
DROP DATABASE IF EXISTS xuezi;
#创建数据库xuezi
CREATE DATABASE xuezi;
#进入数据库xuezi
USE xuezi;

#创建笔记本信息表
#laptop: lid(编号),pic(图片路径),title(标题),
#price(单价),isOnsale(是否特价),shelfDate(上架日期)
CREATE TABLE laptop(
  lid INT,
  pic VARCHAR(128),
  title VARCHAR(100),
  price DECIMAL(7,3),
  isOnsale BOOL,
  shelfDate DATE	
);

#插入4行笔记本数据
INSERT INTO laptop VALUES(
  101,'img/101.jpg','Dell R700',
  3500.51, TRUE,'2015-1-2'
);
INSERT INTO laptop VALUES(
  108,'img/108.jpg','ACER R700',4500,FALSE,'2016-10-12'
);
INSERT INTO laptop VALUES(
  '215','img/215.jpg','HASEE R700','5500','0','2017-10-12'
);
INSERT INTO laptop VALUES(
  '317','img/317.jpg','SONY R700','6500','1','2018-10-12'
);


#删除编号为108的笔记本
#DELETE  FROM  laptop ;			#删除所有
#DELETE FROM laptop WHERE lid='108';	#删除满足条件的数据行

#修改编号为101的笔记本
#UPDATE laptop SET price='8500',title='DELLX90';
#UPDATE laptop 
#SET price='8500',title='DELLX90'  
#WHERE  lid='101' ;


#SELECT  * FROM laptop;




