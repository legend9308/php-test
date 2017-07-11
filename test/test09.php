<?php

	//php强制转换 settype  gettype  (int)$val  (float)$val
	
	//bool settype  ( mixed  &$var  , string $type  )

	//处理计算
	if(isset($_GET['sub'])){
		$num1=(int)$_GET['num1'];
		$num2=(int)$_GET['num2'];
		$ysf=$_GET['ysf'];
		
		//is_numeric($var)  is_null
		//echo $num1."||".$num2;
		$sum=0;
		switch($ysf){
			case '+' :
				$sum=$num1+$num2;
				break;
			case '-' :
				$sum=$num1-$num2;
				break;
			case '*' :
				$sum=$num1*$num2;
				break;
			case '/' :
				$sum=$num1 / $num2;
				break;
			case '%' :
				$sum=$num1 % $num2;
				break;
			default :
				echo "输入有误";
		}
	}

?>

<meta charset="utf-8">
<table align="center" border="1" width="500">
<caption><h1>计算器</h1></caption>
<form action="test09.php" method="get">
	<tr>
		<td>
			<input type="text" name="num1" value="<?php echo $_GET['num1']?$_GET['num1']:""?>">
		</td>
		<td>
			<select name="ysf">
				<option value="+" <?php echo ($_GET['ysf']=='+')?'selected':''?>>+</option>
				<option value="-" <?php echo ($_GET['ysf']=='-')?'selected':''?>>-</option>
				<option value="*" <?php echo ($_GET['ysf']=='*')?'selected':''?>>×</option>
				<option value="/" <?php echo ($_GET['ysf']=='/')?'selected':''?>>/</option>
				<option value="%" <?php echo ($_GET['ysf']=='%')?'selected':''?>>%</option>
			</select>
		</td>
		<td>
			<input type="text" name="num2" value="<?php if(isset($_GET['num2'])){echo $_GET['num2'];}?>">
		</td>
		<td>
			<input type="submit" name="sub" value="计算">
		</td>		
	</tr>
	<?php
		if(isset($_GET['sub'])){
			echo "<tr>";
			echo "<td colspan='4'>".$num1." $ysf ".$num2." = ".$sum."</td>";
			echo "</tr>";
		}
	
	?>
</form>	
</table>















