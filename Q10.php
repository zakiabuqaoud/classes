<?php
//زكي خالد زكي ابو قاعود
//20172106
//Q10
/*Write a PHP script to select first 5 words from the following string. Go to the editor*/
echo"The quick brown fox jumps over the lazy dog"."<br>";
$str = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $str), 0, 5))."<br>";


?>