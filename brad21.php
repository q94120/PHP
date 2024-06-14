<?php
    $poker  = range(0,51);
    shuffle($poker);
    foreach($poker as $k => $v){
        echo "{$k} : {$v}<br>";
    }
    
?>
<hr>
<?php
    $players = [[],[],[],[]]; // array(array(),array(),array(),array()) 二維陣列
    foreach($poker as $i => $card){
        $players[$i%4][(int)($i/4)] = $card;
    }
    foreach($players[0] as $card){
        echo "{$card}<br>";
    }
    for($i = 0; $i < count($players); $i++) {
        sort($players[$i]);
    }
?>


<table border="1" width="90%">
        <?php
        $colors = ['&spades;','<span style="color: red;">&hearts;</span>','<span style="color: red;">&diams;</span>','&clubs;'];
        $values = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
            foreach($players as $player){
                //sort($player);
                echo"<tr>";
                    foreach($player as $card){
                        
                        $c = (int)($card / 13);
                        $v = $card % 13;
                            echo"<td>";
                            echo "{$colors[$c]}{$values[$v]}";
                            echo"</td>";
                        }                        
                echo"</tr>";
            }
        ?>
</table>
&spades; &hearts; &diams; &clubs;