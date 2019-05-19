<?php
/*
练习：创建变量表示员工的月薪，每月底扣除个税30%，年底的年终奖20000，不交税，计算每个月平均到手的工资是多少
*/
$salary = 9000;
$tax = 0.3;
$commission = 20000;

$reality = ($salary*(1-$tax)*12 + $commission)/12;
echo "每月实际到手工资额：$reality";
