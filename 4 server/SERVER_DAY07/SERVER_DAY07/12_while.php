<?php

/*
循环结构
输出10个Hello
*/
$count = 0;     #记录已经输出的Hello的个数

while( $count<5 ){
	echo 'Hello ';
	$count++;
}

echo '<br>输出结束<hr>';

/*
输出Hello0、Hello1、Hello2... Hello99
*/

$i = 0;   #已经执行的循环次数
while( $i<100 ){
	echo "Hello-$i ";
	$i++;
}

echo '<br>输出结束';