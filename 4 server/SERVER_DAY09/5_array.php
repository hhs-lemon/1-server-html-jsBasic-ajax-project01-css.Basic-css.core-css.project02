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

$userList = [ $u0, $u1, $u2, $u3, $u4 ];
#userList: [0=>[],1=>[],2=>[],3=>[],4=>[]  ]
/*
$userList = [
  0=>['uid'=>20,'uname'=>'tom','sex'=>1],
  1=>['uid'=>21,'uname'=>'tom','sex'=>1],
  2=>['uid'=>22,'uname'=>'tom','sex'=>1],
  3=>['uid'=>23,'uname'=>'tom','sex'=>1],
  4=>['uid'=>24,'uname'=>'tom','sex'=>1]
];
*/
#var_dump($userList);
for($i=0; $i<count($userList); $i++){
	$u = $userList[$i];

	echo $u['uid'];
	echo $u['uname'];
	echo $u['sex']===0?'女':'男';
	echo $u['isOnline']?'在线':'离线';
	echo '<hr>';
}




