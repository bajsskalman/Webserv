<?php
require_once('../../mysql_connect.php');


 
 $query = 'INSERT INTO anmälningar(username,mail,short,detail,Prio) 
VALUES("'
. $_POST['username'] .'","'
. $_POST['email'] . '","'
. $_POST['short'] .'","'
. $_POST['Detail'] .'","'
. $_POST['Prio'].'");';

mysqli_query($dbc,$query);



?>