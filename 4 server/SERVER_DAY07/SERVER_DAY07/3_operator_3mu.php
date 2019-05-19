<?php
/*
$result = A ? B : C
#$result = B;
#$result = C;

变量保存学生成绩，输出是否及格
*/
$score = 8;
$result = $score>=60 ? '及格' : '不及格';
echo "考试结果：$result";
echo '<hr>';
/*
练习：创建一个变量表示游客的年龄，公园门票价格2元，如果是老人和儿童票价打五折，否则打八折，输出该游客最终需要付的门票金额。
*/
$age = 30;
$price = 2;
#$result = $price*0.5;
#$result = $price*0.8;
$result = ($age>=80)||($age<6) ? $price*0.5 : $price*0.8;
echo "该游客需支付：$result";
echo '<hr>';
/*
练习：创建一个变量表示论坛中用户的个人签名，若某用户签名为""，则自动赋值为“该用户很懒,什么都没留下”，输出该用户的签名。
*/
#$signiture = "问天问地";
$signiture = "";
$result = $signiture==="" ? "该用户很懒，什么都没留下" : $signiture;
echo "用户签名：$result";

echo '<hr>';
/*
练习：创建两个变量保存两个数字，使用三目运算符返回这两个数字中较大的那个值。
*/
$num1 = 90;
$num2 = 79;
$result = $num1>$num2  ?  $num1  :  $num2;
echo "两数中的较大值：$result";