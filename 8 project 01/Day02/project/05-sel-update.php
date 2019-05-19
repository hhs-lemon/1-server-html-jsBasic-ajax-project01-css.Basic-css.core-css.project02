<?php
  $uid=$_REQUEST["uid"];
  require("init.php");
  $sql="select * from xz_user where uid=$uid";
  $result=mysqli_query($conn,$sql);
  #转出关联数组，以字符串为下标方便读取数据
  $row=mysqli_fetch_assoc($result);
  #echo json_encode($row);
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>修改用户信息</title>
 </head>
 <body>
    <form action="06-update.php" method="post">
	   <p>
	     用户名称：<input type="text" name="uname" value="<?php echo $row['uname']?>">
		 
	   </p>
	   <p>
	     用户密码：<input type="password" name="upwd" value="<?php echo $row['upwd']?>">
	   </p>
	   <p>
	     用户邮箱：<input type="email" name="email" value="<?php echo $row['email']?>">
	   </p>
	   <p>
	     联系方式：<input type="text" name="phone" value="<?php echo $row['phone']?>">
	   </p>
	   <p>
	     真实姓名：<input type="text" name="user_name" value="<?php echo $row['user_name']?>">
	   </p>
	   <p>
	     用户性别：<select name="gender" id="">
		   <option value="0" <?php 
		     if($row['gender']==0){
			   echo "selected";
			 }
		   ?>>女</option>
		   <option value="1" <?php 
		     if($row['gender']==1){
			   echo "selected";
			 }
		   ?>>男</option>
		 </select>
	   </p>
	   <p>
	     <input type="hidden" name="uid" value="<?php echo $row['uid']?>">
	   </p>
	   <p>
	     <input type="submit" value="修改">	
	   </p>
	</form>
 </body>
</html>
