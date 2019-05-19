<?php
/*
字符串拼接运算
*/

$givenName = '20Tom78';		#名
$familyName = '3.5Green99';	#姓

#echo  $givenName,$familyName ; #语法上正确，不推荐
echo  $givenName + $familyName;  #0!与JS不同！！
echo '<hr>';
echo  $givenName . $familyName;  #JS中没有此运算！

echo '<hr>';

/*
练习：创建变量保存商品单价和购买数量，用一个echo输出商品金额小计，形如：
	商品金额小计：4500 
*/
$price = 1500;
$count = 3;
#echo  "商品金额小计：$price * $count "; 
#商品金额小计：1500 * 3

#echo "商品金额小计：" + $price*$count;
#4500

echo "商品金额小计：" . $price*$count;

echo '<hr>';
/*
练习：创建变量保存学生的语文和数学成绩，用一个echo输出该学生的总分，形如：
	该学生总分为： 170 
*/
$chinese = 90;
$math = 80;
echo "该学生总成绩： " . ($chinese+$math);
#.和+优先级一样
