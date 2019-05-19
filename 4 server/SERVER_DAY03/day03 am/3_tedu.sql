#设置mysql.exe连接服务器时传输的字符所用的字符方案
SET  NAMES   UTF8;

#丢弃然后重建数据库tedu，进入该库。		
DROP DATABASE IF EXISTS tedu;
CREATE DATABASE tedu  CHARSET=UTF8;
USE tedu;

#创建保存部门信息的表dept
CREATE TABLE dept(
  did TINYINT   PRIMARY  KEY,	#主键约束
  dname VARCHAR(32) ,
  empCount SMALLINT
);
INSERT INTO dept VALUES('10','yanfa','3');
INSERT INTO dept VALUES('20','shichang','1');
INSERT INTO dept VALUES('40','ceshi','2');
INSERT INTO dept VALUES('15','yunying','0');
INSERT INTO dept VALUES('13','tuozhan','0');

#创建保存员工信息的包emp:  有如下的列：
CREATE TABLE emp(
  eid INT UNIQUE,			
  ename VARCHAR(64)  NOT  NULL,
  sex CHAR(1)  NOT  NULL, 
  salary DECIMAL(9,2),	 
  birthday DATE, 
  deptId TINYINT		
);
INSERT INTO emp VALUES
('3001','TOM','男','8000','1990-1-1','10');
INSERT INTO emp VALUES
('3002','JOE','女', NULL,'1990-1-2','10');
INSERT INTO emp VALUES
('4155','TIM','男','5000','1990-1-3','10');
INSERT INTO emp VALUES
('4677','MARY','女',NULL,'1990-1-4','20');
INSERT INTO emp VALUES
('6191','KATE','F','4000','1990-1-5','40');
INSERT INTO emp VALUES
('6199','KING','M','7000','1990-1-6','40');
