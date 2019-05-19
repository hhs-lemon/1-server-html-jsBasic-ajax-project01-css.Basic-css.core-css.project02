<?php
/*
选择执行——“判定已付金额是否足够”
编写一个收银柜台收款程序，根据商品单价、购买数量以及收款金额计算并输出应收金额和找零。
*/

/********1 数据输入 *********/
$price = 200;		#单价
$count = 4;			#购买数量
$money = 500;		#已付金额

/********2 执行运算 *********/
$total = $price * $count;	#商品总价
####执行满500的判定#######
if( $total>=500 ){
	#$total = $total * 0.8;
	$total  *=  0.8;
	echo "已满500打八折<br>";
}
##########################

if( $money >= $total ){
	$change = $money - $total;	#应找零
	/********3 输出结果 *********/
	echo "商品总价: $total<br>";
	echo "应找零额: $change";
}else {
	echo "错误：已支付金额不足！";
}

echo "<br>收银程序运行结束";
