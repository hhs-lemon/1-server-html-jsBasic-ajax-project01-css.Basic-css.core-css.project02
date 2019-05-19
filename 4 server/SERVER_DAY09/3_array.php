<?php
/*
练习：创建一个数组保存3个笔记本的标题，使用循环输出数组中的每个元素。再向数组中追加2个新的笔记本信息，使用循环输出数组中的每个元素。
*/
$laptops = ['小米Air', '戴尔燃700', '联想小新'];

for($i=0;  $i<count($laptops); $i++){
	echo "$i => $laptops[$i] <br>";
}

#数组尾部追加新元素
$laptops[] = 'MacBook';
$laptops[] = '神州系列';

echo '<hr>';
for($i=0;  $i<count($laptops); $i++){
	echo "$i => $laptops[$i] <br>";
}
