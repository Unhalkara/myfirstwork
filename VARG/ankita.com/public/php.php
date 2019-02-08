<?php

echo"<table border'1'>";
$i =40;
while($ <200){
	if($i%10==0) {
		echo"<tr>";
	}
	echo"<td>".chr($i)."</td>";
	if($i%10==9) {
		echo "</tr>";
	}
	
	$i++;
	
	
}





echo"</table>";









?>