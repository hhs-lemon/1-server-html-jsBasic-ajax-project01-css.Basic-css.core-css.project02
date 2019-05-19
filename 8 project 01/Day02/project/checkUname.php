<?php
  $uname=$_REQUEST["uname"]; 
  require("init.php");
  $sql="select * from xz_user where uname='$uname'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_row($result);
  if($row==null){
     echo "用户名可用";
  }else{
     echo "用户名已存在";
  }

?>