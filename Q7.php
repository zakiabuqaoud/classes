<?php
//زكي خالد زكي ابو قاعود
//20172106
//Q7
/*Write a PHP script to split the following string. */
echo"Sample string : '082307'"."<br>";
$s= '082307'; 
echo substr(chunk_split($s, 2, ':'), 0, -1)."<br>";

?>