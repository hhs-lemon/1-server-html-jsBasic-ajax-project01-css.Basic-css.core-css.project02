#设置客户端连接服务器使用UTF8字符集
SET NAMES UTF8;
#丢弃数据库xz如果存在的话
DROP DATABASE IF EXISTS xz;
#创建数据库xz使用UTF8字符集
CREATE DATABASE xz CHARSET=UTF8;
#进入数据库xz
USE xz;

/****产品模块相关的表****/
#笔记本型号表
#笔记本表
#笔记本图片表
/****用户模块相关的表****/
#用户表
CREATE TABLE xz_user(
  uid INT PRIMARY KEY AUTO_INCREMENT,  #自增的主键
  uname VARCHAR(32) UNIQUE,   #登录名是唯一的
  upwd VARCHAR(32),
  email VARCHAR(64),
  phone VARCHAR(16),
  avatar VARCHAR(128),
  user_name VARCHAR(32),
  gender INT		     #1-男  0-女
);
INSERT INTO xz_user VALUES
(NULL, 'dingding','123456','ding@tedu.cn',
'13501111111','img/1.jpg','丁然','1'),
(NULL, 'dangdang','123456','dang@tedu.cn',
'13502222222','img/2.jpg','当当','1'),
(NULL, 'doudou','123456','dou@tedu.cn',
'13503333333','img/3.jpg','窦涛','1'),
(NULL, 'yaya','123456','ya@tedu.cn',
'13504444444','img/4.jpg','王小丫','0');
#收货地址表
/****购物车&订单模块相关的表****/
#购物车表
#订单表
#订单详情表
/****其它无关的表****/
#首页轮播广告表
#首页商品表