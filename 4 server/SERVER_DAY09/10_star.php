<?php
/*
练习：创建star.php，接收客户端提交的rows和cols两个请求数据，根据这两个数据输出指定行数和列数的※
*/

echo '打印星星';
echo '<hr>';

#var_dump($_REQUEST);
echo '<hr>';
#读取客户端提交给服务器的请求数据
$r = $_REQUEST['rows'];
$c = $_REQUEST['cols'];

for($i=1; $i<=$r; $i++){
	for($j=1; $j<=$c; $j++){
		echo '※';
	}
	echo '<br>';
}

