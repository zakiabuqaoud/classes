<?php
//زكي خالد زكي ابو قاعود
//20172106
//Q9
/*Write a PHP script to get the characters after the last '/' in an url. Go to the editor */
echo"'http://www.example.com/5478631' "."<br>";
$url = 'http://www.example.com/5478631';
echo substr($url, strrpos($url, '/' )+1)."\n";



?>