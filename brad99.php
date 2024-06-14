<?php
$rows = 2;
$cols = 4;
$start = 2;
if (isset($_GET['rows'])) {
    $rows = $_GET['rows'];
    $cols = $_GET['cols'];
    $start = $_GET['start'];
}
?>

<h1>Brad Big Company</h1>
<hr />
<form>
    Rows: <input type="number" name="rows" value="<?php echo $rows ?>">
    Cols: <input type="number" name="cols" value="<?php echo $cols ?>">
    Start: <input type="number" name="start" value="<?php echo $start ?>">
    <input type="submit" value="Change" />
</form>
<hr />

<table border="1" width="100%">
    <?php
    define('ROWS', $rows);
    define('COLS', $cols);
    define('START', $start);

    //------------------------------------
    for ($k = 0; $k < ROWS; $k++) {
        
        echo '<tr>';
        
        for ($j = START; $j < START + COLS; $j++) {
            $newj = $j + $k * COLS;
            
            // 第一行以 td 為 0 開始，+2 的格子數背景改為綠色
        if ($k % 2 == 0 && $j % 2 == 0) {
            $background_color = 'background-color: green;';
        } else { $background_color = 'background-color: red;' ;}
        
        // 第二行起以 +1 的格子數背景改為綠色
        if ($k % 2 != 0 && $j  % 2 != 0) {
            $background_color = 'background-color: green;';
        } 

            echo "<td style='$background_color'>";

            for ($i = 1; $i <= 9; $i++) {
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br />";
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>