<?php
/*
可以接收执行参数的函数
*/

#创建一个函数:  形式参数
function  myAdd( $start,  $end ){
	for($i=$start, $sum=0;  $i<=$end;  $i++){
		$sum += $i;
	}
	echo $sum ;
}

#执行一次函数， 实际参数
myAdd(1, 100);   #$start=1, $end=100
#执行一次函数
myAdd(2, 5);	 #$start=2, $end=5
#执行一次函数
myAdd(10, 20);	 #$start=10, $end=20

