<?php
  #1.接收前端传递过来的数据
   $uid=$_REQUEST["uid"];
   $uname=$_REQUEST["uname"];
   $upwd=$_REQUEST["upwd"];
   $email=$_REQUEST["email"];
   $phone=$_REQUEST["phone"];
   $user_name=$_REQUEST["user_name"];
   $gender=$_REQUEST["gender"];
  #2.连接数据库
  require("init.php");
  #3.拼sql语句
  $sql="update xz_user set uname='$uname',upwd='$upwd',email='$email',phone='$phone',user_name='$user_name',gender=$gender where uid=$uid";
  $result=mysqli_query($conn,$sql);
  if($result==true){
    echo "修改成功";
  }else{
    echo "修改失败";
  }
?>