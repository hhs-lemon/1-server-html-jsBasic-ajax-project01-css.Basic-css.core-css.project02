<?php
echo '注册新用户名';
echo '<hr>';

#1.读取客户端提交的请求数据：uname/upwd/email/phone
@$n = $_REQUEST['uname'];
if($n===null || $n===""){ 
	#若客户端未提交uname或uname为空字符串，终止执行
	die('用户名不能为空');#终止当前页面的执行
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

#2.使用PHP连接MySQL服务器
require('init.php');

#3.向MySQL服务器提交一条INSERT语句
$sql = "INSERT INTO xz_user VALUES(NULL,'$n', '$p', '$m', '$h', NULL, NULL, NULL)";
$result = mysqli_query($conn, $sql); #在指定的连接上执行指定的SQL语句

#4.根据SQL语句执行结果，向客户端输出“注册成功/失败”
if($result===false){
	echo "用户注册执行失败！<br>";
	echo "请检查SQL语法：$sql";
}else{
	echo "用户注册成功！<br>";
	#获取刚执行的INSERT语句在数据库中产生的自增编号
	$uid = mysqli_insert_id($conn);
	echo "新用户在数据库中的编号为：$uid";
}