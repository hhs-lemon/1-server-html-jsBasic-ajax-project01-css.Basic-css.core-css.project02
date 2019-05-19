<?php
/*
练习：创建sum.php，接收客户端提交给服务器的start和end两个请求数据，服务器端页面输出从start到end的累加和
*/
echo '累加和';
echo '<hr>';

var_dump($_REQUEST);
echo '<hr>';

#读取客户端提交给服务器的请求数据	17:12
$s = $_REQUEST['start'];
$e = $_REQUEST['end'];

#for($i=$1, $sum=0;  $i<=100;  $i++){
for($i=$s, $sum=0;  $i<=$e;  $i++){
	$sum += $i;
}
echo $sum;