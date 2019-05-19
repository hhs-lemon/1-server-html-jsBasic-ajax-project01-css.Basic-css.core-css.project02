<?php
echo '用户删除';
echo '<hr>';

#1.读取客户端提交的请求数据：uid
@$i = $_REQUEST['uid'];
if($i===null || $i===""){
	die('用户编号不能为空');
}

#2.使用PHP连接MySQL服务器
$conn = mysqli_connect('127.0.0.1', 'root', '', 'xz', 3306);

#3.向MySQL服务器提交一条DELETE语句。
$sql = "DELETE  FROM  xz_user  WHERE  uid='$i'";
$result = mysqli_query($conn, $sql);

#4.根据SQL语句执行结果，向客户端输出“删除成功/失败”
if($result===false){
	echo "删除操作执行失败！<br>";
	echo "请检查SQL语法：$sql";
}else {
	echo "删除操作执行成功！<br>";
	#获取刚刚执行增删改语句影响的行数
	$num = mysqli_affected_rows($conn);
	echo "刚刚执行的删除操作影响的行数为：$num";
}





