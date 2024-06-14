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
?>

<table border="1">
        <?php
            for($j = 0; $j < 4; $j++){
                echo"<tr>";
                        foreach($players[$j] as $card){
                            echo"<td>";
                            
                                $a_card = $card % 13;
                                $b_card = (int)($card / 13);
                                        if($b_card == 0){
                                        $cardColor = '&spades;';
                                    }   else if($b_card == 1) {
                                        $cardColor = '&hearts;';
                                    }   else if($b_card == 2) {
                                        $cardColor = '&diams;';
                                    }   else if($b_card == 3) {
                                        $cardColor = '&clubs;';
                                    }
                            
                            echo "{$cardColor}{$a_card}";
                            echo"</td>";
                        }                        
                echo"</tr>";
            }
        ?>
</table>