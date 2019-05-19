<?php
/*
练习：创建一个数组，保存学子商城中一个用户的信息，包含编号、用户名、性别、是否在线。
练习：创建一个数组，保存学子商城中一个用户的信息，包含编号、用户名、性别、是否在线。
练习：创建一个数组，保存学子商城中一个用户的信息，包含编号、用户名、性别、是否在线。
练习：创建一个数组，保存学子商城中一个用户的信息，包含编号、用户名、性别、是否在线。
练习：创建一个数组，保存学子商城中一个用户的信息，包含编号、用户名、性别、是否在线。
练习：创建一个数组，保存上述五个用户。
*/
$u0 = ['uid'=>10, 'uname'=>'ding', 'sex'=>1, 'isOnline'=>true];
$u1 = ['uid'=>11, 'uname'=>'dang', 'sex'=>1, 'isOnline'=>true];
$u2 = ['uid'=>12, 'uname'=>'dou', 'sex'=>1, 'isOnline'=>false];
$u3 = ['uid'=>13, 'uname'=>'yaya', 'sex'=>0, 'isOnline'=>false];
$u4 = ['uid'=>14, 'uname'=>'peng', 'sex'=>0, 'isOnline'=>true];

$userList = [ $u0, $u1, $u2 ];
$userList[] = $u3;
$userList[] = $u4;
#userList:  [  0=>[], 1=>[],...4=>[]  ]

var_dump($userList);