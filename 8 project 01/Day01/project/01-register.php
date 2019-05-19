<?php
  #1.获取前端提交过来的数据
    $uname=$_REQUEST["uname"];
	$upwd=$_REQUEST["upwd"];
	$email=$_REQUEST["email"];
	$phone=$_REQUEST["phone"];
	$user_name=$_REQUEST["user_name"];
	$gender=$_REQUEST["gender"];
  #2.连接数据库
    require("init.php");
  #3.拼sql语句
    $sql="insert into xz_user(uname,upwd,email,phone,user_name,gender)values('$uname','$upwd','$email','$phone','$user_name',$gender)";
  #4.执行sql并根据结果给出提示
    $result=mysqli_query($conn,$sql);
	if($result==true){
	   echo "注册成功";
	}else{
	   echo "注册失败";
	}
?>