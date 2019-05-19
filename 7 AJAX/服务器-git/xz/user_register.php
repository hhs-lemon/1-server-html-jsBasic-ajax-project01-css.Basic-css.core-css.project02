<?php
echo '注册新用户';
echo '<hr>';
var_dump($_REQUEST);
echo '<hr>';
#1)读取客户端提交的请求数据uname、upwd、email、phone，并进行非空验证
@$n = $_REQUEST['uname'];	#屏蔽此行中的错误消息
if($n===null || $n===""){	#验证用户是否提交了必需的数据
	die('用户名不能为空');	#必需数据未提交，终止页面的继续执行
}
@$p = $_REQUEST['upwd'];
if($p===null || $p===""){
	die('密码不能为空');
}
@$m = $_REQUEST['email'];
if($m===null || $m===""){
	die('邮箱不能为空');
}
@$h = $_REQUEST['phone'];
if($h===null || $h===""){
	die('电话不能为空');
}

#2)连接到数据库服务器(Improved增加版)
#$conn = mysqli_connect('127.0.0.1', 'root', '', 'xz', 3306);
#mysqli_query($conn, "SET  NAMES  UTF8");
require('init.php');

#3)向数据库服务器发送SQL语句——INSERT
$sql = "INSERT INTO xz_user VALUES(NULL, '$n', '$p', '$m', '$h', NULL, NULL, NULL)";
$result = mysqli_query($conn, $sql);#query:执行查询

#4)查看SQL语句执行结果，向客户端输出“注册失败/成功”
if($result===false){	#执行失败
	echo "新用户注册失败<br>";
	echo "请检查SQL语法：$sql";
}else {					#执行成功
	echo "新用户注册成功<br>";
	#获取刚刚执行的INSERT语句产生的自增编号
	$uid = mysqli_insert_id( $conn );  #只能在刚刚执行完INSERT语句才能执行
	echo "新用户在数据库中的自增编号为：$uid";
}

#5)断开与数据库服务器的连接(可以省略)
#mysqli_close($conn);