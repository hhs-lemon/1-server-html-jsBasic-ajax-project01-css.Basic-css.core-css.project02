#丢弃数据库dangdang,如果存在的话
drop  database  if   exists   dangdang;

#创建数据库dangdang
create  database  dangdang;

#进入数据库dangdang
use  dangdang;

#创建保存书籍信息的表book
CREATE  TABLE  book(
  name  VARCHAR(64),		#varchar:字符串 
  price  INT,			#int:整数 
  birthday  VARCHAR(10),	#字符串 
  intro  VARCHAR(1024)		#字符串
);

#向表中插入一行数据
INSERT  INTO  book  VALUES(
  'SanGuo','35','1998-10-22','JieShao1'
);
#向表中插入一行数据
INSERT  INTO  book  VALUES(
  'XiYou','36','1998-10-23','JieShao2'
);
#向表中插入一行数据
INSERT  INTO  book  VALUES(
  'ShuiHu','37','1998-10-24','JieShao3'
);

#查询book中所有内容
#SELECT   *   FROM   book;