<?php
//在PHP中修改响应消息头部
header('Content-Type: text/html;charset=UTF-8');
//header('Refresh: 5;url=index.html');

echo '用户登录';
echo '<hr>';
#1)读取客户端提交的请求数据uname/upwd,进行非空验证 
@$n = $_REQUEST['uname'];
if($n===null || $n===""){
	die('用户名不能为空');
}
@$p = $_REQUEST['upwd'];
if($p===null || $p===""){
	die('密码不能为空');
}

#2)连接到数据库服务器   
require('init.php');

#3)向数据库服务器发送SQL语句			
$sql = "SELECT * FROM xz_user WHERE uname='$n' AND upwd='$p'";
$result = mysqli_query($conn, $sql);

#4)查看SQL语句的执行结果，若查询到结果集中能抓到一行记录，提示“登录成功”；否则提示“用户名或密码错误”
if($result===false){
	echo 'SQL查询语句执行失败！<br>';
	echo "请检查SQL语法：$sql";
}else {
	#SQL语句执行成功！$result此时是查询结果集的描述对象

	/*************方法1*****************
	$rowList = mysqli_fetch_all($result, 1);
	if( count($rowList)===0 ){	#查询结果集中有0行记录
		echo '用户名或密码错误';
	}else {  #查询结果集中查询到了记录
		echo '登录成功！';
	}
	************************************/

	/*************方法2*****************/
	#从查询结果集中抓取一行数据
	#$row = mysqli_fetch_row($result);
	$row = mysqli_fetch_assoc($result);
	if($row===null){	#结果集中一行数据都抓不到
		echo '用户名或密码错误';
	}else {
		//修改响应消息头部Refresh，实现定时跳转
		header('Refresh: 5;url=index.html');
		echo '登录成功，5s后将自动跳转到首页...';
	}

}

