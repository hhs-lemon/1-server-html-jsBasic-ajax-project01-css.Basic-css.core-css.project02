<?php
  #1.接收前端传递过来的uid
    $uid=$_REQUEST["uid"];
  #2.连接数据库
    require("init.php");
  #3.拼sql语句
    $sql="delete from xz_user where uid=$uid";
  #4.执行sql语句
    $result=mysqli_query($conn,$sql);
	if($result==true){
	   echo "1";//删除成功
	}else{
	   echo "0";//删除失败
	}



?>