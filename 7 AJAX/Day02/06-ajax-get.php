<?php
  $uname=$_REQUEST["uname"];
  $upwd=$_REQUEST["upwd"];
  if($uname=="dangdang"&&$upwd=="123456"){
     echo "登录成功";
  }else{
     echo "登录失败";
  }
  
?>