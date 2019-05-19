<?php
/*
练习：创建一个函数add()，函数内声明变量$num1，$num2，计算这两个数字的和，并输出。调用此函数三次。
*/
/*
function add(){
	$num1 = 100;
	$num2 = 200;
	$sum = $num1 + $num2;
	echo $sum;
}

add();
add();
add();
*/
echo '<hr>';
/*
练习：创建一个函数add($num1, $num2)，函数内计算这两个数字的和，并输出。调用此函数三次。
*/
function  add($num1, $num2){
	$sum = $num1 + $num2;
	#echo $sum;  #画蛇添足
	#任务完成，把处理结果返回给调用者即可
	return  $sum;
}

#使用一个变量接收函数的返回值
$result = add(1, 2);  #$num1=1;  $num2=2
echo $result;
#或者使用弹框弹出$result
#或者使用语音软件读出$result

$r2 = add(10, 20);  #$num1=10;  $num2=20
echo $r2;

#$r3 = add(100, 200);  #$num1=100;  $num2=200

#计算1+2+3+4
$n1 = add(1, 2);
$n2 = add(3, 4);
$sum = add($n1, $n2);
echo $sum;