SET NAMES UTF8;
#重建数据库tedu
DROP DATABASE IF EXISTS tedu;
CREATE DATABASE tedu CHARSET=UTF8;
USE tedu;

#创建部门信息表dept(did,dname,location)
CREATE TABLE dept(
  did INT PRIMARY KEY,
  dname VARCHAR(16),
  location VARCHAR(16)
);
INSERT INTO dept VALUES
('10','研发部','北京'),
('20','市场部','上海'),
('30','运营部','杭州'),
('40','测试部','深圳');

#创建员工信息表emp
CREATE TABLE emp(
  eid INT PRIMARY KEY  AUTO_INCREMENT,
  ename VARCHAR(32),
  sex TINYINT,		#1表男  0表女
  birthday DATE,
  salary DECIMAL(8,2),  
  deptId INT ,
  FOREIGN  KEY(deptId)  REFERENCES  dept(did)
);
#插入14行数据
INSERT INTO emp VALUES
(NULL,'TOM','1','1990-1-1','6000','10');
INSERT INTO emp VALUES
(NULL,'JOE','1','1989-8-25','3000','10');
INSERT INTO emp VALUES
(NULL,'JERRY','1','1990-1-1','6500','20');
INSERT INTO emp VALUES
(NULL,'TEA','0','1987-7-13','8000','30');
INSERT INTO emp VALUES
(NULL,'MARY','0','1990-1-1','7999','10');
