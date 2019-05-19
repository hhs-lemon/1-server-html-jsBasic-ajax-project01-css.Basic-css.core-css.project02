<?php
$total = 0;  #购物车的总金额
/*
练习：创建一个变量，表示第一款笔记本的单价；再创建一个变量，表示第一款笔记本购买的数量；再创建一个变量，表示第一款笔记本金额的小计。输出该小计。
*/
$price = 3000;
$count = 2;
$sum = $price  *  $count;
echo  $sum;
$total = $total + $sum;    #6000

echo '<hr>';
/*
练习：创建一个变量，表示第二款笔记本的单价；再创建一个变量，表示第二款笔记本购买的数量；再创建一个变量，表示第二款笔记本金额的小计。输出该小计。
*/
$price = 4000;
$count = 1;
$sum = $price * $count;
echo  $sum;
$total = $total + $sum;		#10000

echo '<hr>';
/*
练习：创建一个变量，表示第三款笔记本的单价；再创建一个变量，表示第三款笔记本购买的数量；再创建一个变量，表示第三款笔记本金额的小计。输出该小计。
*/
$price = 5000;
$count = 3;
$sum = $price * $count;
echo $sum;
$total = $total + $sum;     #25000

echo '<hr>';
/*
练习：创建一个变量，表示上述三款笔记的金额总和，输出该总和
*/

#$total = $sum + $sum + $sum;
echo $total;