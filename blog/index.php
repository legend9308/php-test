<a href="add.php">添加文章</a>&nbsp;
<span>
	<?php  
		if($_COOKIE['uid']){
			echo $_COOKIE['uname']." 已登录 ";
			echo "<a href='ulogin.php'>注销登录</a>";
			echo "<a href='change.php'>修改密码</a>";
		}else{
			echo "<a href='login.php'>登录</a>";
		}

	?>
</span>


<form action="index.php" method="get">
	<input type="text" name="ser">
	<input type="submit" name="sub" value="搜索">
</form>

<?php 
	include "conn.php";
	if($_GET['sub']){
		$sth=$_GET['ser'];
		$w="title like '%$sth%'";
	}else{
		$w=1;
	}
	$sql="select * from blog where $w order by bid desc";
	$query=mysqli_query($link,$sql);
	while ($arr=mysqli_fetch_array($query)) {
?>
<h3><a href="all.php?bid=<?php echo $arr['bid'];?>"><?php echo $arr['title']?></a> | <a href="del.php?bid=<?php echo $arr['bid']?>">删除</a> |<a href="edit.php?bid=<?php echo $arr['bid']?>">修改</a></h3>
<li><?php echo $arr['time']?></li>
<p><?php echo iconv_substr($arr['content'],0,4);?>...</p>
<hr />
<?php 
	}
 ?>



