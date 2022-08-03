<doctype html>
<html>
    <head>
        <meta charset="utf-8" name="calc" content="zaki" >
        <title>Q4</title>
        <style>
            body{
                background-color: aqua;
                
            }
            input[name="b"]{
                background-color:indianred;
            }
            label{
                width:300px ;
            }
            input[type="number"]{
                background-color:aliceblue;
            }
            
        
        </style>
    </head>
    
    <?php
        if(isset($_POST['b'])){
        extract($_POST);
        $b = $_POST['b'];
        $result = '';
        if (is_numeric($number1) && is_numeric($number2)){
        switch ($b){ 
        case "Add": 
        $result = $number1+ $number2; 
        break;
        case "Subtract": 
        $result = $number1 - $number2;
        break;
        case "Multiply": 
        $result = $number1 * $number2;
        break; 
        case 
        "Division": $result = $number1 / $number2; 
}
}
}

    ?>
    <body>
        <form method="post">
            <label>Number1</label>
            <input type="number" name="number1"  required="required" value="<?php echo $number1; ?>" > <br><br>
            <label>Number2</label>
            <input type="number" name="number2"  required="required" value="<?php echo $number2; ?>" > <br><br>
            <label>Result</label> 
            <input type="number" name="result" value="<?php 
            if(isset($result)){
            echo $result; }?>" readonly="readonly"><br><br>
            
            <input type="submit" name="b" value="Add"> <br><br>
            <input type="submit" name="b" value="Subtract"><br><br>
            <input type="submit" name="b" value="Multiply"><br><br>
            <input type="submit" name="b" value="Division"><br><br>
        </form>
    
    </body>
</html>    