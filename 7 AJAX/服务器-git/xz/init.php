<?php
#整个项目的初始化页面
#包含所有其它页面都共同需要的代码

$host = '127.0.0.1';
$user = 'root';
$pwd = '';
$dbname = 'xz';
$port = 3306;
/*
$host	=	SAE_MYSQL_HOST_M;
$user	=	SAE_MYSQL_USER;
$pwd	=	SAE_MYSQL_PASS;
$dbname	=	SAE_MYSQL_DB;
$port	=	SAE_MYSQL_PORT;
*/
#连接到指定的数据库         
$conn = mysqli_connect( $host, $user, $pwd, $dbname, $port );
#设置一下客户端连接服务器所用的字符集
mysqli_query($conn, "SET  NAMES  UTF8");

