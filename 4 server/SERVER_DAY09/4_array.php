<?php

/*
索引数组
*/
$emp = [ 3051,  'Tom',  6000,  true ];
var_dump($emp);
echo '<hr>';

/*
索引数组
*/
$emp = [ 0=>3051,  1=>'Tom',  2=>6000,  3=>true ];
var_dump($emp);
echo '<hr>';

/*
关联数组
*/
$emp = [ 'eid'=>3051,  'ename'=>'Tom',  'salary'=>6000,  'isMarried'=>true ];
var_dump($emp);
echo '<hr>';



/*
练习：创建一个数组，保存学子商城中一个用户的信息，包含编号、用户名、性别、是否在线。输出每个元素的值
*/

#多个类型不同/含义不同的数据，不适合使用索引数组
#$user = [10, 'dingding', 1,  true];
#var_dump($user);

$user = [	'uid'		=>	10, 
			'uname'		=>	'dingding', 
			'sex'		=>	1, 
			'isOnline'	=>	true   ];
#var_dump($user);
/*
echo $user[0];
echo $user[1];
echo $user[2];
echo $user[3];
*/
echo $user['uid'].'<br>';
echo $user['uname'].'<br>';
echo $user['sex'].'<br>';
echo $user['isOnline'].'<br>';