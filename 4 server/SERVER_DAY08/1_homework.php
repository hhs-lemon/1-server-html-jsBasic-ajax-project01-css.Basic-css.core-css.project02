<?php
/*
1.在页面中输出10个Hello
*/
#0~9
#1~10
$i = 1;
while( $i<=10 ){
	echo 'Hello ';
	$i++;
}

echo '<hr>';
/*
2.输出1/2/3/...100
*/
$i = 1;
while( $i<=100 ){
	echo "$i ";
	$i++;
}
echo '<hr>';
/*
3.输出2/4/6/...98
*/
$i = 2;
while( $i<100 ){
	echo "$i ";
	$i+=2;
}
echo '<hr>';
/*
4.输出90/80/70/...10
*/
$i = 90;
#while( $i<100 ){
while( $i>=10 ){
	echo "$i ";
	$i-=10;
}









