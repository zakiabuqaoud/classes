<!doctype html>
<html>
    <head>
        <meta charset="utf-8" name="zaki" content="zako">
        <title>Q6</title>
        <style>
            table,td{
                border: 1px solid red ;
                margin: 10px auto ;
                
            }
        
        </style>
    </head>
    <?php
        $table = array(
        array("fn" => "Mary", "ln" => "Johnson", "a" => 25),
        array("fn" => "Amanda", "ln" => "Miller", "a" => 18),
        array("fn" => "James", "ln" => "Brown", "a" => 31),
        array("fn" => "Patricia", "ln" => "Williams", "a" => 7),
        array("fn" => "Michael", "ln" => "Davis", "a" => 43),
        array("fn" => "Sarah", "ln" => "Miller", "a" => 24),
        array("fn" => "Patrick", "ln" => "Miller", "a" => 27)
        );

        asort($table);
    
    ?>
    <body>
        <table>
            <thead>
                <tr>
                    <td>index</td>
                    <td>fristname</td>
                    <td>lastname</td>
                    <td>age</td>
                </tr>
            </thead>
            <?php
                $i = 0;
                foreach($table as $z){
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $z['fn']?></td>
                    <td><?php echo $z['ln']?></td>
                    <td><?php echo $z['a']?></td>
                </tr>
                <?php $i++ ; } ?>
        </table>
    </body>
</html>