<?php
//زكي خالد زكي ابو قاعود
//20172106
//Q11
/*Write PHP code to print following number table: */

echo "<table border =\"1\" >";
	for ($row=1;$row<=10; $row++) { 
		echo "<tr>\n";
		for ($col=1; $col<= 10; $col++) { 
		   $f = $col * $row;
		   echo "<td>$f</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>