<?php

echo '用户登录';
echo '<hr>';

#WEB服务器自动把客户端请求数据保存入$_REQUEST数组中
#var_dump($_REQUEST);

#服务器端页面读取客户端请求提交过来的数据
$n = $_REQUEST['uname'];
$p = $_REQUEST['upwd'];
#echo "用户名：$n 登录密码：$p";
if($n==='root' && $p==='123456'){
	echo '登录成功';
}else {
	echo '用户名或密码错误';
}

