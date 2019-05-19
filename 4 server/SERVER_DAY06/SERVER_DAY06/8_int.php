<?php


$age = 2147483647;
#echo $age;
var_dump( $age );

echo '<hr>';

$age = 2147483648;
#echo $age;
var_dump( $age );

echo '<hr>';

#$age = 10;
#$age = 012;		#0开头的整数是八进制数
#1/2/3/4/5/6/7/10/11/12/13/14/15/16/17/20/21...

$age = 0x12;		#0x开头的整数是十六进制数
#1/2/3/4/5/6/7/8/9/a/b/c/d/e/f/10/11/12...

var_dump($age);
