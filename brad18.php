<?php 
    $a = array();
    $a[1] = 12; $a[2] = 13;
    $a[4] = array();
    $a[4][0] = 100;
    $a[4][3] = true;
    var_dump($a);
    foreach($a as $k => $v)
       echo "{$k} : {$v}"; 
?>