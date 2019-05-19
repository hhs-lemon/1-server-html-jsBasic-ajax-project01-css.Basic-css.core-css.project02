<?php
  #1.接收前端提交过来的数据
    $uname=$_REQUEST["uname"];
	$upwd=$_REQUEST["upwd"];
  #2.连接数据库
    require("init.php");
  #3.拼sql语句
    $sql="select * from xz_user where uname='$uname' and upwd='$upwd'";
  #4.执行sql语句判断结果
    $result=mysqli_query($conn,$sql);
	if($result==false){
	   echo "SQL语句执行失败";
	}else{
	   $user=mysqli_fetch_row($result);
	   if($user==null){
	     echo "用户名或密码错误";
	   }else{
	     echo "登录成功";
	   }
	}

?>