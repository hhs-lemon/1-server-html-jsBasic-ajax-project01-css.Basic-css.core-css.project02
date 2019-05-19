<?php
/*
练习:创建变量保存学生成绩，输出：优秀、及格、不及格
*/
$score = 95;
if($score>=80){
	echo '优秀';
}else if($score>=60){
	echo '及格';
}else{
	echo '不及格';
}
echo '<hr>';
/*
学子商城中，订单状态可能取值和对应编码：
等待付款——10	备货中——20  运输中——30
派送中—— 40  已签收——50  未知状态—— 其它
在数据库中真实存储的是每个状态的编码，创建一个变量表示某个订单的状态编码，输出为对应的汉字
*/
$stat = 30;	
if($stat===10){
	echo '等待付款';
}else if($stat===20){
	echo '备货中';
}else if($stat===30){
	echo '运输中';
}else if($stat===40){
	echo '派送中';
}else if($stat===50){
	echo '已完成';
}else {
	echo '未知状态';
}

echo '<hr>';

$stat = 20;	
switch($stat){
	case  10: 
		echo '等待付款';
		break;
	case  20:
		echo '备货中';
		break;
	case  30:
		echo '运输中';
		break;
	case  40:
		echo '派送中';
		break;
	case  50:
		echo '已完成';
		break;
	default:
		echo '未知状态';
}


echo '<hr>';