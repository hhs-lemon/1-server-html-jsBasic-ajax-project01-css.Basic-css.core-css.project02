<?php
/*
计算1~100的累加和
*/

#创建一个函数
function  myAdd(){
	for($i=1, $sum=0;  $i<=10;  $i++){
		$sum += $i;
	}
	echo $sum ;
}

#执行一次函数
myAdd();
#执行一次函数
myAdd();
#执行一次函数
myAdd();

