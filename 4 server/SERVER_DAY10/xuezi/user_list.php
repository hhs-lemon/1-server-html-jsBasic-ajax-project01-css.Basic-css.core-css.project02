<?php
echo '用户列表';
echo '<hr>';

#1.无

#2.使用PHP连接MySQL服务器
require('init.php');

#3.向MySQL服务器提交一条SELECT语句
$sql = "SELECT * FROM xz_user";
$result = mysqli_query($conn, $sql);

#4.向客户端输出查询结果：一个二维数组
if($result===false){
	echo "数据查询失败！<br>";
	echo "请检查SQL语法：$sql";
}else {
	#此时$result是一个“查询结果集的描述对象”
	#从查询结果集描述对象中抓取所有查询数据
	$rowList = mysqli_fetch_all($result, 1);
	var_dump($rowList);  #此处暂时无需其他处理
}
