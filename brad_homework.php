<table border="1">
    

        <?php
            for($j = 0; $j < 100; $j += 10){
                echo "<tr>";
                for($i = 1; $i <= 10; $i++ ){
                    echo "<td>";
                    $r = $i + $j;
                    echo "$r";
                        
                    
                    echo "</td>";      
                }
                echo "</tr>";
            }
        ?>

</table>


    
<?php
$r = 18;
for($x = 2; $x < $r; $x++){
    $c = ($r % $x != 0) ? '質數' : ' ';
    }
    echo "$c";
?>

// if($r % 2 != 0){
                    //     echo "是質數";
                    // }