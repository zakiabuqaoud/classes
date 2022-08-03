<?php
$data = array(
array("firstname" => "Mary", "lastname" => "Johnson", "age" => 25),
array("firstname" => "Amanda", "lastname" => "Miller", "age" => 18),
array("firstname" => "James", "lastname" => "Brown", "age" => 31),
array("firstname" => "Patricia", "lastname" => "Williams", "age" => 7),
array("firstname" => "Michael", "lastname" => "Davis", "age" => 43),
array("firstname" => "Sarah", "lastname" => "Miller", "age" => 24),
array("firstname" => "Patrick", "lastname" => "Miller", "age" => 27)
);

asort($data);

?>
<html>
<table>
<thead>
<tr>
<td>
index
</td>
<td>
fristname
</td>
<td>
lastname
</td>
<td>
age
</td>
</tr>
</thead>
<tbody>
<?php
$index = 0;
foreach($data as $arr){
?>
<tr>
<td><?php echo $index ?></td>

<td><?php echo $arr['firstname']?></td>
<td><?php echo $arr['lastname']?></td>
<td><?php echo $arr['age']?></td>

</tr>


<?php $index ++ ; } ?>
</tbody>
</table>

</html>
