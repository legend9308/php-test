<?php  
	include("conn.php");
	if($_POST['sub']){
		$usename=$_POST['usename'];
		$old=$_POST['old'];
		$new=$_POST['new'];

		$sql="select * from user where pass='$old' and uname='$usename'";
		$query=mysqli_query($link,$sql);
		$arr=mysqli_fetch_array($query);
		if($arr){
			$sql="update user set pass='$new' where uname='$usename'";
			$query=mysqli_query($link,$sql);
			if($query){
				echo "<script>location='login.php'</script>";
			}
		}else{
			echo "<script>alert('密码错误');</script>";
			echo "<script>location:change.php</script>";
		}
	}


?>




<meta charset="utf-8">
<form action="change.php" method="post">
	用户名：<input type="text" name="usename"><br>
	旧密码：<input type="text" name="old"><br>
	新密码：<input type="text" name="new"><br>
	<input type="submit" name="sub" value="提交">
</form>