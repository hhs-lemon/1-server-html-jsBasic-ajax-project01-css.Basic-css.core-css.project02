<?php
echo '修改用户注册信息';
echo '<hr>';
#1)读取客户端提交的请求数据uid、user_name、gender、email、phone，并进行非空验证
$i = $_REQUEST['uid'];
$n = $_REQUEST['user_name'];
$g = $_REQUEST['gender'];
$m = $_REQUEST['email'];
$h = $_REQUEST['phone'];

#2)连接到数据库服务器   
require('init.php');

#3)向数据库服务器发送SQL语句			
$sql = "UPDATE xz_user SET user_name='$n', gender='$g', email='$m', phone='$h'  WHERE  uid='$i'";
$result = mysqli_query($conn, $sql);

#4)查看SQL语句执行结果，向客户端输出“修改失败/成功”
if($result===false){
	echo '用户信息修改失败！<br>';
	echo "请检查SQL语法：$sql";
}else {
	echo '用户信息修改成功！<br>';
	#获取UPDATE语句影响的行数
	$c = mysqli_affected_rows($conn);
	echo "更新操作影响的行数为：$c";
}