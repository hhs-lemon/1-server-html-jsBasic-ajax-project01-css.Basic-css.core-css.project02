<?php
echo '用户列表';
echo '<hr>';

#1)读取客户端提交的请求数据pageNum(要分页显示的页号)，若客户端未提交则默认设置为1 
@$p = $_REQUEST['pageNum'];
if($p===null || $p===""){
	$p = 1;		#此处不需要终止执行
}

#2)连接到数据库服务器   
require('init.php');

#3)向数据库服务器发送SQL语句——假设每页最多显示5行
$count = 10;	#每页查询时每页最多显示的行数
$start = ($p-1)*$count;	#从哪一条记录开始读取数据
$sql = "SELECT * FROM xz_user LIMIT $start,$count";
$result = mysqli_query($conn, $sql);

#4)查看SQL语句执行结果，向客户端输出“查询到结果集”
if($result===false){
	echo '查询失败！<br>';
	echo "请检查SQL语法：$sql";
}else {
	#SELECT执行成功，此时$result是查询结果集的描述对象

	#从结果集中抓取所有数据行——二维数组
	#$rowList = mysqli_fetch_all($result);    #不写第二个参数的话，默认为2
	$rowList = mysqli_fetch_all($result, 1);  #1表每行数据显示为一个关联数组
	#$rowList = mysqli_fetch_all($result, 2); #2表每行数据显示为一个索引数组
	#$rowList = mysqli_fetch_all($result, 3); #3表每行数据显示为一个索引+关联数组
	var_dump($rowList);
}