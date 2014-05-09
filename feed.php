<?php
mysql_connect('localhost', 'root', '1111');
mysql_select_db('farm');
$flag = $_POST['flag'];
$result = mysql_query('REPLACE INTO waterfeed (flag) VALUES('.$flag.')');
die(json_encode($flag));
?>
