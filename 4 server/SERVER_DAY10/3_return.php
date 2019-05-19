<?php
/*
练习：创建函数 getSum($n1, $n2, $n3)，计算这三个数的和，返回计算结果。
*/
function getSum($n1, $n2, $n3){
	$sum = $n1 + $n2 + $n3;
	return $sum;
}
#计算1+2+3+4+5+6+7+8+9的和
$s1 = getSum(1, 2, 3);
$s2 = getSum(4, 5, 6);
$s3 = getSum(7, 8, 9);
$total = getSum($s1, $s2, $s3);
echo $total;

/*
练习：创建函数 getAvg($n1, $n2, $n3)，计算这三个数的平均值，返回计算结果。
试着调用上述函数
*/
function  getAvg($n1, $n2, $n3){
	#$avg = ($n1+$n2+$n3)/3;
	$avg = getSum($n1, $n2, $n3)/3;
	return  $avg;
}
$a = getAvg(10, 20, 30);
echo $a;
