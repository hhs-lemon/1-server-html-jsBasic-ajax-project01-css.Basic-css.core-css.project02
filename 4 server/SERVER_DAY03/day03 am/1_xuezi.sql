#�������ݿ�xuezi��������ڵĻ�
DROP DATABASE IF EXISTS xuezi;
#�������ݿ�xuezi
CREATE DATABASE xuezi;
#�������ݿ�xuezi
USE xuezi;

#�����ʼǱ���Ϣ��
#laptop: lid(���),pic(ͼƬ·��),title(����),
#price(����),isOnsale(�Ƿ��ؼ�),shelfDate(�ϼ�����)
CREATE TABLE laptop(
  lid INT,
  pic VARCHAR(128),
  title VARCHAR(100),
  price DECIMAL(7,3),
  isOnsale BOOL,
  shelfDate DATE	
);

#����4�бʼǱ�����
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


#ɾ�����Ϊ108�ıʼǱ�
#DELETE  FROM  laptop ;			#ɾ������
#DELETE FROM laptop WHERE lid='108';	#ɾ������������������

#�޸ı��Ϊ101�ıʼǱ�
#UPDATE laptop SET price='8500',title='DELLX90';
#UPDATE laptop 
#SET price='8500',title='DELLX90'  
#WHERE  lid='101' ;


#SELECT  * FROM laptop;




