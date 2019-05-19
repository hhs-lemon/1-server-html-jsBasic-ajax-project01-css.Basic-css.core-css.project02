<?php
echo '修改用户注册信息';
echo '<hr>';

#1.读取客户端提交的请求数据：uid/user_name/gender/email/phone
@$i = $_REQUEST['uid'];
if($i===null || $i===""){
	die('用户编号不能为空');
}
@$n = $_REQUEST['user_name'];
if($n===null || $n===""){
	die('用户名不能为空');
}
@$g = $_REQUEST['gender'];
if($g===null || $g===""){
	die('性别不能为空');
}
@$m = $_REQUEST['email'];
if($m===null || $m===""){
	die('邮箱不能为空');
}
@$h = $_REQUEST['phone'];
if($h===null || $h===""){
	die('电话不能为空');
}

#2.使用PHP连接MySQL服务器。
require('init.php');

#3.向MySQL服务器提交一条UPDATE语句。
$sql = "UPDATE xz_user SET user_name='$n', gender='$g', email='$m', phone='$h'  WHERE uid='$i'";
$result = mysqli_query($conn, $sql);

#4.根据SQL语句执行结果，向客户端输出“修改成功/失败”
if($result===false){
	echo "用户修改执行失败！<br>";	
	echo "请检查SQL语法：$sql";
}else {
	echo "用户修改执行成功！<br>";
	$num = mysqli_affected_rows($conn);
	echo "修改操作影响的行数为：$num";
}
