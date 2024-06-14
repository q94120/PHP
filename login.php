<?php
    include('bradapis.php');
    session_start();

    if (!isset($_SESSION['member'])) header('Location: login.php');
    if (time() > $_SESSION['now'] + 5){
        header('Location: logout.php');
    } 

    $member = $_SESSION['member'];





    if (isset($_GET['account'])){
        $account = $_GET['account']; $password = $_GET['password'];

        $mysqli = new mysqli('localhost', 'root', '', 'iii');
        $mysqli->set_charset('utf8');

        $sql = 'SELECT id,account,password,realname,icon FROM member WHERE account = ?';
        $stmt = $mysqli -> prepare($sql);
        $stmt -> bind_param('s', $account);
        $stmt -> execute();
        $stmt->store_result();
        if($stmt -> num_rows > 0){
            $stmt -> bind_result($id,$account,$hashpassword,$realname,$icon);
            $stmt->fetch();

            if(password_verify($password, $hashpassword)){
                $member = new Member();
                $member -> setId($id);
                $member -> setAccount($account);
                $member -> setRealname($realname);
                $member -> setIcon($icon);
                $_SESSION['member'] = $member;
                header('Location: main.php');
        }else{
            echo 'account error';
        }

    }
    
    // $member = new Member();
    // $member -> setId(1);
    // $member -> setAccount('brad');

    // $_SESSION['member'] = $member;

    // $member -> setAccount('newbrad');

    // $ary = [1,2,3,4];
    // var_dump($ary);
    // // $rand = rand(1,49);
    
    // $_SESSION['ary'] = $ary;
    // $ary[2] = 333;
    }
?>
<hr>
Login <hr>
<form>
    Account:<input name="account" >  <br>
    Password:<input type="password" name="password"> <br>

    <input type="submit" value="Login"> <br>
</form>