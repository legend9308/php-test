<?php
	//文件完整性验证  大小验证、文件头结构体验证

	//JS本地化存储
	
	//同源策略    http://www.163.com:80
	
	//洗库  爆库 拖库  单向不可逆  md5 rc6 rsa 

	if(isset($_POST['sub'])){
		$name=$_POST['uname'];
		$pass=$_POST['pass'];
		
		
		//md5(md5($pass)+$salt);
		
		//echo time();  
		
		$pass1=md5($pass).time();
		$pass2=md5($pass1);
		
		echo $pass2;
		
		//827ccb0eea8a706c4c34a16891f84e7b
		//ddba6bfec572593dda7a5c4c52a10bbe
		//5e394281dfac81c1e7dddcaf4d35d1f6
		
		//=  ==  ===
		//echo $name."  || ".$pass;
		/*
		if($name=='laoshan' and $pass=='laoxie'){
			//设置cookie
			echo "登录成功";
		}else{
			echo "登录失败";
		}*/
	}
	/*
	$aa=array(1,2,3);
	var_dump($aa);
	echo "<br />";
	unset($aa);
	var_dump($aa);*/



?>


<meta charset="utf-8">
<form action="test08.php" method="post">
	用户名:<input type="text" name="uname"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">
	<input type="reset" name="rst" value="重置">

</form>