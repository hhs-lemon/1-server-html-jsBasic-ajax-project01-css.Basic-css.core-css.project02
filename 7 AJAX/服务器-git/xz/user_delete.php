<?php
echo '用户删除';
echo '<hr>';
#1)读取客户端提交的请求数据uid，并进行非空验证
@$i = $_REQUEST['uid'];
if($i===null || $i===""){
	die('用户编号不能为空');
}

#2)连接到数据库服务器
require('init.php');

#3)向数据库服务器发送SQL语句——DELETE...WHERE...
$sql = "DELETE FROM xz_user WHERE uid='$i'";
$result = mysqli_query($conn, $sql);

#4)查看SQL语句执行结果，向客户端输出“删除失败/成功”
if($result===false){
	echo '用户删除失败！<br>';
	echo "请检查SQL语法：$sql";
}else{
	echo '用户删除成功！<br>';
	#获取刚刚执行的DELETE影响的行数
	$c = mysqli_affected_rows( $conn );
	echo "删除操作影响的行数为：$c";
}