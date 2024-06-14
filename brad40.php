<?php   
    $mysqli = new mysqli('localhost','root','', 'iii');
    $mysqli->set_charset('utf8'); 

    $id = 94122;
    $sql = 'DELETE FROM cust WHERE id = ?';
    $stmt = $mysqli -> prepare($sql);
    $stmt -> bind_param('i', $id);
    $stmt -> execute();     
// 刪除資料
?>
