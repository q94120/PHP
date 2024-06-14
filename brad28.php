<?php
    
    // 1.畫布
    //$img = imagecreatefromjpeg("https://th.bing.com/th/id/OIP.eV4p1USgusfG_fz8a8eiSgHaNK?w=208&h=326&c=7&r=0&o=5&dpr=1.3&pid=1.7");
    $img = imagecreatefromjpeg("img/IU.jpg");
    
    // 2.作畫
    
    $iStanU = imagecolorallocate($img, 255, 255, 0);
    imagettftext($img,88,330,100,200,$iStanU,'fonts/Tiny5-Regular.ttf','LOVE IU');
    
    // 3.輸出
    header("content-type: image/jpeg");  //要能顯示圖片要header + imagejpeg
    imagejpeg($img,);

    imagejpeg($img,'dir1/loveIU1.jpg');  //要儲存圖片
    // 4.清除
    imagedestroy($img);

?>  