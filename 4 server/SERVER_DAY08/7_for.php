<?php
/*
练习4)：使用for计算出1+2+3+4+...100的累加和，输出该整数和
*/
#在语句1和3中可能出现多个用逗号分隔的语句
for( $i=1,$sum=0;  $i<=100;  $i++){
	$sum += $i;
}
echo "1~100的累加和：$sum";

echo '<hr>';
/*
练习5)：使用for计算出1*2*3*4*...10的累乘积，输出该乘积
*/
for($i=1,$chengJi=1;  $i<=10;  $i++){
	$chengJi *= $i;
}
echo "1~10的累乘积为：$chengJi";
echo '<hr>';
/*
练习6)：使用for循环计算出90/5 + 80/10 + 70/15 + 60/20 + 50/25的和，输出该和
*/
for($sum=0,$zi=90,$mu=5; $mu<=25; $zi-=10,$mu+=5){
	$sum += $zi/$mu;
}
echo "总和为: $sum";



