<?php
$a = $b = $c = $d = $e = $f = 0 ;

for($i = 0;$i < 100; $i++){
    $roll = rand(1,6);
    if($roll == 1){
        $a++;
    } else if($roll == 2){
            $b++;
        } else if($roll == 3){
                $c++;
            } else if($roll == 4){
                    $d++;
                } else if($roll == 5){
                        $e++;
                    } else if($roll == 6)
                        $f++;
}
echo "1點出現{$a}次<br> 2點出現{$b}次<br> 3點出現{$c}次<br> 4點出現{$d}次<br> 5點出現{$e}次<br> 6點出現{$f}次<br>";

?>