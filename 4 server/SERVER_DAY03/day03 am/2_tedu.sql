#设置mysql.exe连接服务器时传输的字符所用的字符方案
SET  NAMES   UTF8;

#丢弃然后重建数据库tedu，进入该库。		
DROP DATABASE IF EXISTS tedu;
CREATE DATABASE tedu  CHARSET=UTF8;
USE tedu;

#创建保存部门信息的表dept
CREATE TABLE dept(
  did TINYINT,
  dname VARCHAR(32),
  empCount SMALLINT
);
INSERT INTO dept VALUES('10','研发部','3');
INSERT INTO dept VALUES('20','市场部','1');
INSERT INTO dept VALUES('40','测试部','2');

#创建保存员工信息的包emp:  有如下的列：
CREATE TABLE emp(
  eid INT,			
  ename VARCHAR(64),
  sex CHAR(1), 
  salary DECIMAL(9,2),	 
  birthday DATE, 
  deptId TINYINT		
);
INSERT INTO emp VALUES
('3001','TOM','男','8000','1990-1-1','10');
INSERT INTO emp VALUES
('3099','JOE','男','3000','1990-1-2','10');
INSERT INTO emp VALUES
('4155','TIM','男','5000','1990-1-3','10');
INSERT INTO emp VALUES
('4677','MARY','女','9000','1990-1-4','20');
INSERT INTO emp VALUES
('6191','KATE','F','4000','1990-1-5','40');
INSERT INTO emp VALUES
('6199','KING','M','7000','1990-1-6','40');

/*
#删除一个员工6199 —— 需要执行几条语句？delete+update
#删除员工
DELETE  FROM  emp  WHERE eid='6199';
#修改该员工对应的部门中员工数量
UPDATE  dept  SET  empCount=empCount-1
WHERE  did='40';


#将一个员工由10号部门转到20号部门 —— 需要执行几条语句？
#修改员工所在部门
UPDATE  emp  SET  deptId=20  
WHERE  eid=3001;
#修改部门表 10号部门员工数量-1
UPDATE  dept  SET  empCount=empCount-1
WHERE  did='10';
#修改部门表 20号部门员工数量+1
UPDATE  dept  SET  empCount=empCount+1
WHERE  did='20';

#午间练习：删除上述代码，根据注释再现代码
*/