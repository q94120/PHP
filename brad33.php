<?php
    $account = $_REQUEST['account'];
    $password = $_REQUEST['password'];
    $gender = $_REQUEST['gender'];
    $habit = $_REQUEST['habit'];


    echo "{$account} : {$password} : {$gender}<br>";
    foreach($habit as $v){
        echo "{$v}<br>";
    }

    $upload = $_FILES['upload'];
    //var_dump($upload);
    foreach($upload['error'] as $i => $errcode){
        if ($errcode == 0){
            move_uploaded_file($upload['tmp_name'][$i],
                                "upload/{$upload['name'][$i]}");
        }
    }
?>