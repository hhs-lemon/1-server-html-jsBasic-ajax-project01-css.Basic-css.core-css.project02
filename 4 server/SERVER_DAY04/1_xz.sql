#设置mysql.exe客户端连接服务器时所用字符集
SET  NAMES  UTF8;
#编写1_xz.sql，丢弃并重建数据库xz，进入该库。
DROP  DATABASE  IF  EXISTS  xz;
CREATE  DATABASE  xz CHARSET=UTF8;
USE xz;

#创建笔记本型号表laptop_family： 
CREATE TABLE laptop_family(
  fid INT PRIMARY KEY,  
  fname VARCHAR(32) NOT NULL,     
  laptopCount TINYINT  
);
INSERT INTO laptop_family VALUES
('10', '联想E580', '3'),
('20', 'Mac Book', '2'),
('30', '戴尔燃700','2');

#创建笔记本信息表，并插入7行数据laptop：
CREATE TABLE laptop(
  lid INT PRIMARY KEY,
  pic VARCHAR(128) NOT NULL  DEFAULT 'img/logo.gif',
  title VARCHAR(128) NOT NULL,
  price DECIMAL(7,2) CHECK(price<=80000),   #99999.99 
  spec VARCHAR(64),
  marketDate BIGINT,#真实项目中推荐使用大整数代替日期时间 
  isRecommended BOOL, 
  familyId INT
);
INSERT INTO laptop VALUES			
('1',DEFAULT,'笔记本标题1','95000','4G 500G','1520123456789','0','10'),
('2',DEFAULT,'笔记本标题2','3500','4G 500G','1520123456789','0','10'),
('3',DEFAULT,'笔记本标题3','3500','4G 500G','1520123456789','0','10'),
('4',DEFAULT,'笔记本标题4','3500','4G 500G','1520123456789','1','20'),
('5',DEFAULT,'笔记本标题5','3500','4G 500G','1520123456789','1','20'),
('6',DEFAULT,'笔记本标题6','3500','4G 500G','1520123456789','1','30'),
('7',DEFAULT,'笔记本标题7','3500','4G 500G','1520123456789','0','30');

#删除编号为7的笔记本——需要几条SQL？
#删除笔记本
DELETE FROM laptop WHERE lid=7;
#修改对应的型号
UPDATE laptop_family  
SET  laptopCount=laptopCount-1  WHERE  fid=30;

#编号为1的笔记本由10号型号改为20号型号——需要几条SQL？
#修改笔记本
UPDATE laptop  SET  familyId=20  WHERE  lid=1;
#修改10号型号，笔记本数量-1
UPDATE laptop_family 
SET laptopCount=laptopCount-1  WHERE fid=10;
#修改20号型号，笔记本数量+1
UPDATE laptop_family 
SET laptopCount=laptopCount+1  WHERE fid=20;
