<?php

	DEFINE('DB_USER','root');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_PASSWORD','');
	DEFINE('DB_DATABASE','anmälningar');
	
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
?> 