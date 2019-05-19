<?php
/*
逻辑运算符
*/

$deptId = 10;
$sex = 0;

#此员工是10号部门的女员工吗？
$result = $deptId===10  &&  $sex===0 ;
var_dump($result);

# false &&  false  =>  false
# true  &&  false  =>  false
# false &&  true   =>  false
# true  &&  true   =>  true
echo '<hr>';


$deptId = 30;

#该员工是10号或30号部门员工吗？
$result = $deptId===10 ||  $deptId===30;
var_dump($result);
#  false  ||  false  =>  false
#  true   ||  false  =>  true
#  false  ||  true   =>  true
#  true   ||  true   =>  true