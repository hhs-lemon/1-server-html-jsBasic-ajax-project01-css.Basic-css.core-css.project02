<?php

/*
boolean的使用
*/
$isOnsale = true;
#echo $isOnsale;		#"1"
var_dump($isOnsale);

echo  '<hr>';

$isOnsale = false;
#echo $isOnsale;		#""
var_dump($isOnsale);

echo '<hr>';

/*
练习：创建一个变量表示商城中的用户名，另一个变量表示用户的登录密码，一个变量表示用户的登录次数，一个变量表示用户当前是否在线。使用一个echo输出如下的内容：
用户名：dingding  登录密码：123456  登录次数：58  当前是否在线：1
*/
$uname = 'dingding';
$upwd = '123456';
#$userlogincount     #不推荐
#$user_login_count   #下划线命名法，匈牙利命名法
#$userLoginCount	 #驼峰命名法
$loginCount = 58;
$isOnline = true;

echo "用户名：$uname, 登录密码：$upwd, 登录次数：$loginCount, 当前是否在线：$isOnline";
