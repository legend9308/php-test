<table border='1' cellspacing="0" width="500">
	<tr>
		<th>ID</th>
		<th>NAME</th>
	</tr>

<?php
	include "../blog/conn.php"; 
	// for($i=0;$i<150;$i++){
		// $name="name".$i;
		// $sql="insert into fenye(id,name) values(null,$name)";
		// $query=mysqli_query($link,$sql);
	// }
	
	$page=$_GET['p']<1?1:$_GET['p'];
	$pagenum=10;
	$showpage=5;
	$pageoffset=($showpage-1)/2;

	$sql="select * from fenye limit ".$pagenum*($page-1).",$pagenum";
	$query=mysqli_query($link,$sql);
	while($arr=mysqli_fetch_array($query)){
?>	

<tr>
	<td><?php  echo $arr['id'];?></td>
	<td><?php  echo $arr['name'];?></td>
</tr>	
<?php  
	}
?>
</table>
<?php  
	$sql="select count(*) from fenye";
	$query=mysqli_query($link,$sql);
	$arr=mysqli_fetch_array($query);
	$all=$arr[0];

	$page_all=ceil($all/$pagenum);

	$str="";
	$ppage=$page-1;
	$npage=$page+1;
	// echo $_SERVER['PHPSELF'];
	$str.="<a href='".$_SERVER["PHPSELF"]."?p=1'>首页</a>";
	if($page>1){
		$str.="<a href='".$_SERVER['PHPSELF']."?p=$ppage'>上一页</a>";
	}else{
		$str.="<a href='javascript:void(0)' disabled = 'true' style='opacity: 0.2'>上一页</a>";
	}

	$start=1;
	$end=$page_all;

	if($page_all>$showpage){
		if($page>$pageoffset+1){
			$str.="...";
			$start=$page-$pageoffset;
			$end=$page_all>$page+$pageoffset ? $page+$pageoffset : $page_all;
		}else{
			$start=1;
			$end=$page_all>$showpage ? $showpage : $page_all;
		}
		if($page+$pageoffset>$page_all){
			$start=$page_all-$showpage+1;
			$end=$page_all;
		}
		// if($page>$pageoffset)
		// if($page>)
	}



	for($i=$start;$i<=$end;$i++){
		$str.="<a href='".$_SERVER['PHPSELF']."?p=$i'>$i</a>&nbsp;";
	}
	if($page_all>$showpage && $page_all>$page+$pageoffset){
		$str.="...";
	}

	if($page<$page_all){
		$str.="<a href='".$_SERVER['PHPSELF']."?p=$npage'>下一页</a>";
	}else{
		$str.="<a href='javascript:void(0)' disabled = 'true' style='opacity: 0.2'>下一页</a>";
	}
	$str.="<a href='".$_SERVER["PHPSELF"]."?p=$page_all'>末页</a>";
	echo $str;
?>

