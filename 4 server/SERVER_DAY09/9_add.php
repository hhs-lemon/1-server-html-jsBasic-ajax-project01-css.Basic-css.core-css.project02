<?php
/*
练习：创建add.php，客户端访问此页面时需要提交num1、num2和num3三个数据，服务器端页面接收这三个数据，向客户端输出三个请求数据的整数和。
*/
echo '数字相加';
echo '<hr>';

#var_dump($_REQUEST);

echo '<hr>';
#获取客户端提交的三个数据
$n1 = $_REQUEST['num1'];
$n2 = $_REQUEST['num2'];
$n3 = $_REQUEST['num3'];

echo  $n1 + $n2 + $n3;

