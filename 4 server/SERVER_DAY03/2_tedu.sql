#����Ȼ���ؽ����ݿ�tedu������ÿ⡣		
DROP DATABASE IF EXISTS tedu;
CREATE DATABASE tedu;
USE tedu;

#�������沿����Ϣ�ı�dept
CREATE TABLE dept(
  did INT,
  dname VARCHAR(32),
  empCount INT
);
INSERT INTO dept VALUES('10','Devlep','3');
INSERT INTO dept VALUES('20','Market','1');
INSERT INTO dept VALUES('40','Test','2');

#��������Ա����Ϣ�İ�emp:  �����µ��У�
CREATE TABLE emp(
  eid INT,
  ename VARCHAR(64),
  sex VARCHAR(1), 
  salary INT, 
  birthday VARCHAR(10), 
  deptId INT		
);
INSERT INTO emp VALUES
('3001','TOM','M','8000','1990-1-1','10');
INSERT INTO emp VALUES
('3099','JOE','M','3000','1990-1-2','10');
INSERT INTO emp VALUES
('4155','TIM','M','5000','1990-1-3','10');
INSERT INTO emp VALUES
('4677','MARY','F','9000','1990-1-4','20');
INSERT INTO emp VALUES
('6191','KATE','F','4000','1990-1-5','40');
INSERT INTO emp VALUES
('6199','KING','M','7000','1990-1-6','40');

#ɾ��һ��Ա��6199 ���� ��Ҫִ�м�����䣿delete+update
#ɾ��Ա��
DELETE  FROM  emp  WHERE eid='6199';
#�޸ĸ�Ա����Ӧ�Ĳ�����Ա������
UPDATE  dept  SET  empCount=empCount-1
WHERE  did='40';


#��һ��Ա����10�Ų���ת��20�Ų��� ���� ��Ҫִ�м�����䣿
#�޸�Ա�����ڲ���
UPDATE  emp  SET  deptId=20  
WHERE  eid=3001;
#�޸Ĳ��ű� 10�Ų���Ա������-1
UPDATE  dept  SET  empCount=empCount-1
WHERE  did='10';
#�޸Ĳ��ű� 20�Ų���Ա������+1
UPDATE  dept  SET  empCount=empCount+1
WHERE  did='20';

#�����ϰ��ɾ���������룬����ע�����ִ���