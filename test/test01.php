<?php
	
	//输出标量 echo 
	//输出数组 print_r
	//输出类型 var_dump()
	echo "<table align='center' border='1' width='500'>";
	echo "<caption><h1>打印100行10列</h1></caption>";
	for($i=0;$i<100;$i++){
		if($i % 2==0){
			$color='green';
		}else{
			$color='red';
		}
		echo "<tr onmouseout=lrow(this)  onmouseover=drow(this) bgColor=".$color.">";
		for($j=0;$j<10;$j++){
			echo '<td>'.$j.'</td>';
		}
		
		echo "</tr>";
	}
	
	echo "</table>";
	
	//int i
	/*
	$for=10;
	echo 10;
	echo "<br />";*/
	
	/*  sjdkfdjs */
	/*
	for($i=0;$i<10;$i++){
		echo "<h1>hello world</h1>";
		echo "<br />";
	}*/
	
	
	//在php中是可以嵌套html标签 和 script标签
?>


<script>
	var ys="";
	function lrow(obj){
		obj.bgColor=ys;
	}
	
	function drow(obj){
		ys=obj.bgColor;
		obj.bgColor='blue';
	}

</script>












