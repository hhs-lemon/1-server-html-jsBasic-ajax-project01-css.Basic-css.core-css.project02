<?php
/*
创建数组保存学生成绩
*/
$scoreList = [50.5, 70, 60.5, 85, 90, 77, 63, 98];

#echo $scoreList;
#var_dump($scoreList);
/*
echo $scoreList[0].'<br>';
echo $scoreList[1].'<br>';
echo $scoreList[2].'<br>';
echo $scoreList[3].'<br>';
*/
#循环输出数组中的每个元素——遍历数组
#for($i=0; $i<8; $i++){
for($i=0; $i<count($scoreList); $i++){
	echo "$i : $scoreList[$i] <br>";
}
echo '<hr>';
#给每个学生+5分
/*
$scoreList[0] += 5;
$scoreList[1] += 5;
$scoreList[2] += 5;
$scoreList[3] += 5;
$scoreList[4] += 5;
$scoreList[5] += 5;
$scoreList[6] += 5;
$scoreList[7] += 5;
*/
for($i=0;  $i<count($scoreList); $i++){
	$scoreList[$i] += 5;
	if($scoreList[$i]>100){
		$scoreList[$i] = 100;
	}
}

#再次输出修改后的所有学生成绩
for($i=0; $i<count($scoreList); $i++){
	echo "$i : $scoreList[$i] <br>";
}
echo '<hr>';