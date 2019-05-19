<?php
/*
练习：创建一个数组，保存4个员工的姓名，使用foreach循环遍历出每个元素。
*/
$enames = ['Tom', 'Mary', 'King', 'Scott'];

foreach( $enames  as  $n ){
	echo  $n . '<br>';
}
echo '<hr>';

foreach( $enames  as  $k => $v){
	echo "$k - $v <br>";
}

echo '<hr>';

/*
练习：创建一个数组，保存一个笔记本信息，包括：编号、标题、价格，是否特价。使用foreach遍历输出每个元素的值。—— foreach可以遍历关联数组
*/
$laptop = ['lid'=>101, 'title'=>'戴尔燃7000', 'price'=>6500, 'isOnsale'=>true ];

foreach($laptop  as   $v){
	echo  "$v <br>";
}
echo '<hr>';
foreach($laptop  as   $k=>$v){
	echo  "$k : $v <br>";
}