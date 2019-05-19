<?php
/*
练习：创建一个函数getScore()，其中声明三个变量，分别表示语文、数学、英语的成绩，输出三科总分。调用此函数三次。
*/
function getScore(){
	$chinese =  70;
	$math =  80;
	$english=  90;
	$sum = $chinese + $math + $english;
	echo $sum;
}

#调用函数三次
getScore();
getScore();
getScore();

echo '<hr>';
/*
练习：创建一个函数printStar()，其中输出一个5行10列的※矩阵。调用此函数三次。
*/
function printStar(){
	for($i=1; $i<=5; $i++){
		for($j=1; $j<=10; $j++){
			echo '※';
		}
		echo '<br>';
	}
}
#调用函数三次
printStar();
printStar();
printStar();