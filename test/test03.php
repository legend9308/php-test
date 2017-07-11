<?php

	echo "<table width=800 border=1>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>$i * $j = ".($i*$j)."</td>";
		}
		
		echo "</tr>";
	}
	
	echo "</table>";
	
	
	echo "<br />";
	echo "<table width=800 border=1>";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>$i * $j = ".($i*$j)."</td>";
		}
		
		echo "</tr>";
	}
	
	echo "</table>";
	
	echo "<br />";
	
	echo "<table width=800 border=1>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($k=1;$k<=9-$i;$k++){
			echo "<td>&nbsp;</td>";
		}
		for($j=1;$j<=$i;$j++){
			echo "<td> $i * $j = ".($i*$j)."</td>";
		}
		
		echo "</tr>";
	}
	
	echo "</table>";
	
	


?>