<?php
echo '用户登录';
echo '<hr>';

#1.读取客户端提交的请求数据uname/upwd
$n = $_REQUEST['uname'];
$p = $_REQUEST['upwd'];
#此处暂时省略了是否为空的判定

#2.使用PHP连接MySQL服务器
require('init.php');

#3.向MySQL服务器提交一条SELECT语句
$sql = "SELECT * FROM xz_user WHERE uname='$n' AND upwd='$p'";
$result = mysqli_query($conn, $sql);

#4.如果能查询到记录则向客户端输出“登录成功”，否则输出“用户名或密码错误”。
if($result===false){	#SQL语法错误
	echo "数据查询失败！<br>";
	echo "请查询SQL语句：$sql";
}else {
	#此时的$result是一个查询结果集的描述对象
	#从查询结果集中抓取一行：
	#$row = mysqli_fetch_row($result);
	$row = mysqli_fetch_assoc($result);
	if($row===null){  #一行数据都抓不到
		echo '用户名或密码错误';
	}else {			  #能够抓取到一行数据
		echo '登录成功';
	}
}
