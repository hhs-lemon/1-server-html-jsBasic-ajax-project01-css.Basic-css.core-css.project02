<?php
  #1.连接数据库
    require("init.php");
  #2.拼查询sql语句
    $sql="select * from xz_user";
  #3.执行查询，得到结果
    $result=mysqli_query($conn,$sql);
  #4.将结果转换成关联数组
    $array=mysqli_fetch_all($result,MYSQLI_ASSOC);
  #5.将数组转换成json字符串
    echo json_encode($array);

?>