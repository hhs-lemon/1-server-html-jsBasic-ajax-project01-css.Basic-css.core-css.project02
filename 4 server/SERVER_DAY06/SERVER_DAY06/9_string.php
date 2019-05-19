<?php

#下面两种写法作用一样：
$ename = 'Kingston';
var_dump($ename);
echo '<hr>';
$ename = "Kingston";
var_dump($ename);


echo '<br><br><br><br>';

echo '员工姓名：$ename';
echo '<hr>';
echo "员工姓名：$ename";

echo '<hr>';

/*
练习：创建一个变量表示笔记本商品的名称，另一个变量表示笔记本的价格，使用一个echo 输出如下的内容：
笔记本名称：戴尔燃7000  笔记本价格：6500
*/
$laptopName = '戴尔燃7000' ;
$price = 6500;

#echo '笔记本名称：$laptopName  单价：$price';
echo "笔记本名称：$laptopName  单价：$price";