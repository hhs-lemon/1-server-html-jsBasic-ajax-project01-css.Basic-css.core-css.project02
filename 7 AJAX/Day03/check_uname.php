<?php
  #1.接收前端传递过来的uname
     $uname=$_REQUEST["uname"];
  #2.连接数据库
     require("init.php");
  #3.拼查询sql语句
     $sql="select * from xz_user where uname='$uname'";
  #4.执行sql语句并得到结果
     $result=mysqli_query($conn,$sql);
  #5.从结果集中取出一行数据
     $row=mysqli_fetch_row($result);
  #6.根据取出的这行数据给出响应
     if($row==null){
	    echo "0"; //用户名不存在
	 }else{
	    echo "1";//用户名已存在
	 }
?>