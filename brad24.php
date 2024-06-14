<?php
    include('bradapis.php');

    $myId = 'A123456789';   // 1.第一碼一定要是大寫英文     
    if(checkTWId($myId)){   // 2.第二碼不是1就是2
        echo"OK";           // 3.總共10碼
    } else{                 // 4.第三碼以後都是數字
        echo"XX";           // 5.
    }





?>
<hr />
random : <?php echo createTWIdByRandom(); ?><br />
area B : <?php echo createTWIdByArea('B'); ?><br />
gender false : <?php echo createTWIdByGender(false); ?><br />
both C, true: <?php echo createTWIdByBoth('C', true); ?><br />