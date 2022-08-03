<?php
//زكي خالد زكي ابو قاعود
//20172106
//Q8
/*Write a PHP script to insert a string at the specified position in a given string. Go to the editor */
//////
echo "The brown fox"."<br>" ;
/*Insert 'quick' between 'The' and 'brown'.*/

$str = 'The brown fox';
$ins ='quick';
$postion = 4;
$stringFinal = substr_replace($str,$ins.' ',$postion, 0);
echo $stringFinal."<br>";
?>


