<?php
    $password = '123456';
    $newpassword = password_hash($password, PASSWORD_DEFAULT);
    // echo $newpassword;
    if (password_verify('123456', $newpassword)){
        echo 'OK';
    } else {
        echo 'XX';
    }
?>