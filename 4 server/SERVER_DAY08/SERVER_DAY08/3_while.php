<?php
/*
8.输出：
  ※
*/
echo '※';

echo '<hr>';
/*
9.输出：
  ※※※※※※※※※※<br>
  提示：把练习8循环执行10次
*/
$i = 1;			#1~10
while( $i<=10 ){
	####执行练习8一次######
	echo '※';
	#######################
	$i++;
}
echo '<br>';
echo '<hr>';
/*
10.输出：
  ※※※※※※※※※※<br>
  ※※※※※※※※※※<br>
  ※※※※※※※※※※<br>
  ※※※※※※※※※※<br>
  ※※※※※※※※※※<br>
  提示：把练习9循环执行5次
*/
$i = 1;			#控制行数
while($i<=5){
	######执行练习9#######
	$j = 1;		#控制列数		
	while( $j<=10 ){
		echo '※';
		$j++;
	}
	echo '<br>';
	######################
	$i++;
}


echo  '<hr>';
$i = 1;		#控制行数1~5
while($i<=5){

	$j = 1; #控制列数1~10
	while($j<=10){
		echo '※';
		$j++;
	}
	echo '<br>';

	$i++;
}














