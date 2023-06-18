<?php

define('DBHOST', '127.0.0.1');
define('DBUSER', 'belovedogs');
define('DBPASS', 'belovedogs');
define('DBNAME', 'belovedogs');

$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if (!$conn) {
	die("Connection failure: " . mysqli_connect_error());
}
?>