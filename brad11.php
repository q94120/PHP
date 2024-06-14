<?php
    $year = 2000;
    if ($year % 4 == 0){
        if ($year % 100 == 0){
            if ($year %400 == 0){
                //潤
            }else{
                //平
            }
        }else{
            //潤
        }
    }  else{
        //平
    }

    if($year %4 != 0 || ($year % 100 == 0 && $year % 400 != 0)){

    }
?>

<?php
function isLeapYear($year) {
    if ($year % 400 == 0) {
        return true;
    } elseif ($year % 100 == 0) {
        return false;
    } elseif ($year % 4 == 0) {
        return true;
    } else {
        return false;
    }
}

$year = 2078; // 輸入要檢查的年份

if (isLeapYear($year)) {
    echo "$year 是閏年";
} else {
    echo "$year 不是閏年";
}
?>
