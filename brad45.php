<?php
    if (!isset($_POST['account'])) header ('Location: brad44.html');

    $account = $_POST['account'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $realname = $_POST['realname'];


    $mysqli = new mysqli('localhost', 'root', '', 'iii');
    $mysqli->set_charset('utf8');

    // 檢查帳號是否重複
    $sql = 'SELECT account from member WHERE account = ?';
    $stmt = $mysqli -> prepare($sql);
    $stmt -> bind_param('s', $account);
    $stmt ->execute();
    $stmt -> store_result();
    if ($stmt -> num_rows == 0){

        $sql = 'INSERT INTO member (account,password,realname) VALUES (?,?,?)';
        $stmt = $mysqli->prepare($sql);
        $stmt -> bind_param('sss',$account, $password, $realname);
        if ($stmt -> execute()){
            echo 'OK';
        } else {
            echo 'XX';
        }

    } else{
        echo 'Account already exist';
    }

  
?>