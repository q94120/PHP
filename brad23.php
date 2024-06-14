<?php
    sayYa();
    sayYa();
    sayHello('Brad');sayHello('Leo');
    sayHello();
    sayMysea('IU',2);
    sayMysea('IU');
    sayMysea();
    sayMysea('Rock');
    sayMysea(3);
    // sayMysea(,3); 錯誤語法
    $v = sum(1,2,3,100,2000 -47);
    echo $v;

    function sum(){
        $args = func_get_args();
        $ret = 0;
        foreach($args as $v){
            $ret += $v;
        }
        return $ret;
    }


    function sayYa(){
        echo 'Ya<br>';
    }
    function sayHello($name = 'World'){
        echo "Hello, {$name}<br>";
    }
    function sayMysea($name = 'Love IU', $times = 1){
        for($i = 0;$i < $times; $i++){
            echo "Hello, {$name}<br>";
        }
    }

?>
OK