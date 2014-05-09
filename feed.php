<?php
mysql_connect('localhost', 'root', '1111');
mysql_select_db('farm');
$flag = $_POST['flag'];
$result = mysql_query('UPDATE waterfeed SET flag='.$flag);
die(json_encode($flag));
?>
