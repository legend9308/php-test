<?php
	//www.baidu.com/s?wd=javascript
	/*
	php  四个标量类型  int float string bool
	             两个复合类型 array object
	     两个特殊类型 resource  null*/
	
	if(isset($_POST['sub'])){
		//echo "123";
		$year=$_POST['year'];
		if(is_numeric($year)){
			if($year % 400 ==0 || ($year % 4==0 && $year % 100 !=0)){
				echo $year."是闰年";
			}else{
				echo $year."不是闰年";
			}
		}else{
			echo "<script>alert('no number')</script>";
		}
		
		/*
		$arr=array();
		for($i=0;$i<strlen($year);$i++){
			$arr[$i]=$year[$i];
		}
		for($j=count($arr)-1;$j>=0;$j--){
			$str.=$arr[$j];
		}
		
		echo $str;*/
		/*
		echo "<pre>";
		print_r($arr);
		echo "</pre>";*/
		//var str="hello world";
		
		
		//is_numeric($var)
		/*
		var_dump($year);
		echo "<br />";
		
		$ynum=(int)$year;
		var_dump($ynum);*/
		//echo $year;
	}


?>


<meta charset="utf-8">
<form action="test05.php" method="post">
	year:<input type="text" name="year">
	<input type="submit" name="sub" value="判断">
</form>