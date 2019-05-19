<?php
/*
新建7.php页面，使用常量保持圆周率π。再使用程序分别计算30度角、60度角、70度角转换成弧度值各是多少？
角度转换为弧度公式： ? = deg * PI / 180
*/
const  PI = 3.14;

$deg = 30;
$result = $deg * PI / 180 ;
echo '30度转换为弧度值为：' ;
echo $result;
echo '<hr>';

$deg = 60;
$result = $deg * PI / 180 ;
echo '60度转换为弧度值为：' ;
echo $result;
echo '<hr>';

$deg = 70;
$result = $deg * PI / 180 ;
echo '70度转换为弧度值为：' ;
echo $result;
echo '<hr>';