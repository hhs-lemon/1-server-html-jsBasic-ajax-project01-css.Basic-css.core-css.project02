<?php
/*
练习：创建变量表示考试成绩，如果满60则输出及格，否则输出不及格。
*/
$score = 40;
#$result = $score>=60 ? '及格' : '不及格';
if( $score>=60 ){
	echo "及格";
}else {
	echo "不及格";
}

echo '<hr>';
/*
练习：创建一个变量表示一个年份，如果是闰年，则输出“该年份有366天”，否则输出“该年份有365天”。
*/
$year = 2004;
if( ($year%400===0) || (($year%4===0) && ($year%100!==0)) ){
	echo "$year 年有366天";
}else {
	echo "$year 年有365天";
}

$uname = 'root';
$upwd = '123456';
if( ($uname==='root')&&($upwd==='123456') ){
	echo "登录成功！";
}else {
	echo "用户名或密码错误！";
}

