<?php
//زكي خالد زكي ابو قاعود
//20172106
//Q13
$s = 'zaki abu qaoud';
$s = str_replace(' ', '', $s);
$a = str_split($s);

$b = array_count_values($a);

foreach ($b as $k => $val) {

echo $k . "  =  " . $val    ."<br>";

}

?>