<?php
  header("Content-Type:application/json");
  #1.连接数据库
    require("init.php");
  #2.拼查询sql语句
    $sql="select * from xz_user";
  #3.执行sql语句获取查询结果
    $result=mysqli_query($conn,$sql);
  #4.将结果转换为关联数组
    $array=mysqli_fetch_all($result,MYSQLI_ASSOC);
  #5.将关联数组转换为JSON字符串响应给前端
    echo json_encode($array);
?>