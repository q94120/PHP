<?php
    $mysqli = new mysqli('localhost','root','', 'iii');
    $mysqli->set_charset('utf8'); 
    $sql = 'SELECT * FROM gift';
    $result = $mysqli -> query($sql);
    // $row = $result -> fetch_array();
    // $row = $result -> fetch_object();
    // while ($row = $result -> fetch_array()){
    //     echo "{$row['id']} : {$row['name']}<br>";
    // }
    
    // var_dump($row);

    while ($row = $result -> fetch_object()){
        echo "{$row -> id} : {$row -> name} : {$row -> addr} <br>";
    }
?>