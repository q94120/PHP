<?php
    $r = $x = $y = $opop = '';
    if (isset($_GET['x'])&& isset($_GET['y'])){
        $x = $_GET['x']; $y = $_GET['y'];
        $opop = $_GET['opop'];

        if ($opop == '1'){
            $r = $x + $y;
        } else if ($opop == '2'){
            $r = $x - $y;
        } else if ($opop == '3'){
            $r = $x * $y;
        } else if ($opop == '4'){
            $r1 = (int)($x / $y);
            $r2 = $x % $y;
            $r = "$r1 ...... {$r2}";
        }

    // $r = $x + $y;
    //echo "{$x} + {$y} = {$r}";    
    }
    
?>

<form>
    <input name="x" value="<?php echo $x; ?>">
    <select name='opop'>
        <option value="1"<?php echo $opop == '1'?'selected':'' ?>>+</option>
        <option value="2"<?php echo $opop == '2'?'selected':'' ?>>-</option>
        <option value="3" <?php echo($opop == '3')?'selected':''; ?>>x</option>
        <option value="4"<?php echo $opop == '4'?'selected':'' ?> >/</option>
    </select>
    <input name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <span>
       <?php echo $r; ?> 
    </span>
</form>