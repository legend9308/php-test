<?php 
	//echo "success";
	
	//可变变量
	/*
	$one="####";
	$two='one';
	$three='two';
	$four='three';
	echo $four."<br />";
	echo $$four;
	echo "<br />";*/
	
	//传值传址
	$one=10;
	$two=&$one;
	
	$one=100;
	$two="hello";
	echo $one."<br />";
	echo $two."<br />";
	
	//++ --
	$a=10;
	$b=$a++;  //$b=10
	$c=--$b; //$c=9
	$d=$c++ + ++$c; //$d=20
	$e=$d-- - --$d; //$e=2
	echo $e;
	
	//$str=`ping 127.0.0.1`;
	//echo $str;
	
	//$a=10;
	/*
	function aa(){
		//$b=12;
		//global $a;
		static $a=10;
		$a=$a+1;
		//echo $b;
		//echo "<br />";
		echo $a;
		
		return ;
		echo 123;
	}
	
	aa();
	aa();*/
?>



