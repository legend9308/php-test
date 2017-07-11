<?php
	$str="thunder://aHR0cDovL3d3dy4xNjMuY29tLzEucm12Yg==";
	
	
	$restr=substr($str,10);
	
	echo base64_decode($restr);
	
	
	
	//parse   stringfy
	//urlencode($str)  json_encode  base64_encode($data)
	//$basestr=base64_encode($str);
	
	//echo $basestr;
	//$thunderbase="thunder://".$basestr;
	
	
	
	//thunder://aHR0cDovL3d3dy4xNjMuY29tLzEucm12Yg==
	
	



?>