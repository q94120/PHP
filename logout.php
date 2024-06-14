<?php
    session_start();
    // unset($_SESSION['rand']);
    session_destroy();
    header('Location: login.php')
?>