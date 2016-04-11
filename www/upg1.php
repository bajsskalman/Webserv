<?php
require_once('../mysql_connect.php')

$query = 'SELECT * FROM cities ORDER BY population DESC;';

$result = mysqli_query($bdc,$query);

echo '<table border="solid">';
while (&row = mysqli_fetch_array($result))
?>