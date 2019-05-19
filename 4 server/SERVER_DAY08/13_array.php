<?php
#创建数组
$ages = [22, 38, 19];		#复数
$ageArr = [22, 38, 19];		#数组
$ageSet = [22, 38, 19];		#集合
$ageList = [22, 38, 19, 20, 27];	#列表

#echo $ageList;  PHP中不允许对数组使用echo！！
var_dump($ageList);

echo '<hr>';
/*
练习：创建一个数组，保存5个员工的工资
*/
$salaryList = [3500, 4800, 3900, 7500.5, 9500.56];
#var_dump($salaryList);
/*
练习：创建一个数组，保存4个用户的用户名
*/
$unameList = ['dingding', 'dangdang', 'doudou', 'yaya'];
#echo  $unameList[1];
#$unameList[1] = 'dd';
#var_dump($unameList);
/*
echo $unameList[0];
echo $unameList[1];
echo $unameList[2];
echo $unameList[3];
*/
for($i=0; $i<count($unameList);  $i++){
	echo $unameList[$i] . '<br>';
}

echo '<hr>';
/*
练习：创建一个数组，保存6个用户当前是否在线
*/
$isOnlineList = [true, true, false, false, true, false];
#var_dump($isOnlineList);

#echo  count($isOnlineList);