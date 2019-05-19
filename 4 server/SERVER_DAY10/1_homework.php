<?php
#创建数组，保存学子商城一个用户的信息：uid/uname/sex/email/phone/avatar
$user0 = ['uid'=>10, 'uname'=>'ding', 'sex'=>0, 'email'=>'ding@jd.cn', 'phone'=>'13501234567', 'avatar'=>'img/10.jpg'];

#创建数组，保存学子商城一个用户的信息：uid/uname/sex/email/phone/avatar
$user1 = ['uid'=>20, 'uname'=>'dang', 'sex'=>1, 'email'=>'dang@jd.cn', 'phone'=>'13501234568', 'avatar'=>'img/20.jpg'];

#创建数组，保存学子商城一个用户的信息：uid/uname/sex/email/phone/avatar
$user2 = ['uid'=>30, 'uname'=>'doudou', 'sex'=>1, 'email'=>'dou@jd.cn', 'phone'=>'13501234569', 'avatar'=>'img/30.jpg'];

#创建数组，保存学子商城一个用户的信息：uid/uname/sex/email/phone/avatar
$user3 = ['uid'=>40, 'uname'=>'yaya', 'sex'=>0, 'email'=>'yaya@jd.cn', 'phone'=>'13501111111', 'avatar'=>'img/40.jpg'];

#创建一个大数组，保存上述4个小数组
#$userList = [ 0=>$user0, 1=>$user1, 2=>$user2, 3=?$user3 ];

#由四个关联数组组成的索引数组 —— 二维数组
$userList = [ $user0, $user1, $user2, $user3 ];
#var_dump($userList);

for($i=0;  $i<count($userList); $i++){
	$u = $userList[$i];
	echo  $u['uid'];
	echo  '&nbsp;&nbsp;';
	echo  $u['uname'];
	echo  '&nbsp;&nbsp;';
	echo  $u['sex']==1?'男':'女';
	echo  '&nbsp;&nbsp;';
	echo  $u['email'];
	echo  '&nbsp;&nbsp;';
	echo  $u['phone'];
	echo  '&nbsp;&nbsp;';
	echo  $u['avatar'];
	echo '<hr>';
}
