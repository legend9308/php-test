<?php
	$str="lpm";
	
	//var str="hello world";
	
	
	
	function reserver($str){
		if(strlen($str)>0){
			reserver(substr($str,1));
		}
		
		echo substr($str,0,1);
		return;
	}
	
	reserver($str);
	
	/*
	for($i=strlen($str)-1;$i>=0;$i--){
		$str1.=$str[$i];
	}*/
	
	/*
	for($i=1;$i<=strlen($str);$i++){
		$str1.=substr($str,-$i,1);
	}*/
	
	//echo $str1;


?>