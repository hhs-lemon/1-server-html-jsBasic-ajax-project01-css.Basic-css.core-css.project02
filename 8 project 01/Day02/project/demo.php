 <?php
   $uname="dangdang";
   $gender=0;
   $user_name="当当猫";
 
 ?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
 </head>
 <body>
    <h1>修改：<?php echo $uname?>的信息</h1>
	<p>
	   登录名称：<input type="text" value="<?php echo $uname?>">
	</p>
	<p>
	   真实姓名：<input type="text" value="<?php echo $user_name?>">
	</p>
    <p>
	   <select id="">
	      <option value="1" <?php 
		     if($gender=="1"){
			   echo "selected";
			 }
		  ?>
		  >男</option>
		  <option value="0" <?php 
		    if($gender=="0"){
			  echo "selected";
			}
		  ?>
		  >女</option>
	   </select>
	</p>
 </body>
</html>
