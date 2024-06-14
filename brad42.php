<?php
$mysqli = new mysqli('localhost', 'root', '', 'iii');
$mysqli->set_charset('utf8');

define('RPP', 10); // rows per page
$rpp = RPP;
$page = isset($_GET['page'])? $_GET['page'] : 1;
$start = ($page - 1) * $rpp;
$prev = $page == 1 ? 1 : $page - 1;
$next = $page + 1;


$key = '';
$sql = 'SELECT id, name , addr, picurl FROM gift';
if (isset($_GET['key']) && strlen($_GET['key']) > 0) {
    $key = $_GET['key'];
    $skey = "%{$key}%";
    $sql .= ' WHERE name Like ? OR addr LIKE ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ss', $skey, $skey);
} else {
    $sql .= ' LIMIT ?, ?';
    $stmt = $mysqli->prepare($sql);
    $stmt -> bind_param('ii',$start, $rpp);
}


?>

<form>
    Keyword: <input name="key" value="<?php echo $key; ?>">
    <input type="submit" value="Search">
</form>
<hr>
<a href="?page=<?php echo $prev; ?>">Prev</a> | 
<a href="?page=<?php echo $next; ?>">Next</a>
<hr>

<table border="1" width="100%">
    <tr>
        <th>#</th><img src="" alt="">
        <th>Name</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    <?php
    if ($stmt->execute()) {
        $stmt->store_result(); 
        $stmt->bind_result($id, $name, $addr, $picurl); // 綁定

        while ($stmt->fetch()) {
            echo '<tr>';
            echo "<td>{$id}</td>";
            echo "<td>{$name}</td>";
            echo "<td>{$addr}</td>";
            echo "<td><img src='{$picurl}' width='160px' height='90px' /></td>";
            // echo "<td><img src="{$picurl} width='160px' height='90px'"></td>";
            echo '</tr>';
        }
    }
    ?>
</table>