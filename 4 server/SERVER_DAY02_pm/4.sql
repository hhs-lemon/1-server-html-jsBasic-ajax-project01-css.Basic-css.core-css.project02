#�������ݿ�dangdang,������ڵĻ�
drop  database  if   exists   dangdang;

#�������ݿ�dangdang
create  database  dangdang;

#�������ݿ�dangdang
use  dangdang;

#���������鼮��Ϣ�ı�book
CREATE  TABLE  book(
  name  VARCHAR(64),		#varchar:�ַ��� 
  price  INT,			#int:���� 
  birthday  VARCHAR(10),	#�ַ��� 
  intro  VARCHAR(1024)		#�ַ���
);

#����в���һ������
INSERT  INTO  book  VALUES(
  'SanGuo','35','1998-10-22','JieShao1'
);
#����в���һ������
INSERT  INTO  book  VALUES(
  'XiYou','36','1998-10-23','JieShao2'
);
#����в���һ������
INSERT  INTO  book  VALUES(
  'ShuiHu','37','1998-10-24','JieShao3'
);

#��ѯbook����������
#SELECT   *   FROM   book;