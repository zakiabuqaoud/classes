<!DOCTYPE html> 
<html>
<head> 
<title>quiz 4 </title>
</head>
<?php
if(isset($_POST['cal'])){
extract($_POST);
$cal = $_POST['cal'];
$result = '';
if (is_numeric($no1) && is_numeric($no2)){
switch ($cal)
{ case "Add": $result = $no1+ $no2; 
break;
case "Subtract": $result = $no1 - $no2;
break;
case "Multiply": $result = $no1 * $no2;
break; 
case "Divide": $result = $no1 / $no2; 
}
}
}
?>
<body> 
<div> 
<h1> Quiz Q.4</h1> 
<form action="" method="post" >
<input type="number" name="no1" id="first_num" required="required" value="<?php echo $no1; ?>" /> 
<label>No1</label>
<input type="number" name="no2" id="second_num" required="required" value="<?php echo $no2; ?>" /> 
<label>No2</label> 
<input readonly="readonly" name="result" value="<?php 
if(isset($result)){
echo $result; }?>"> 
<label>Result</label> 

<input type="submit" name="cal" value="Add" /> 
<input type="submit" name="cal" value="Subtract" />
<input type="submit" name="cal" value="Multiply" />
<input type="submit" name="cal" value="Divide" /> 
</form> 
</div>
</body> 
</html>
