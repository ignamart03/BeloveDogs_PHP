<?php

	define('DBHOST', '127.0.0.1');
	define('DBUSER', 'root');
	define('DBPASS', 'webuser');
	define('DBNAME', 'jardineria');
	
	$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

      	
	if ( !$conn ) {
		die("Connection failure: " . mysqli_connect_error());
	}
        else echo "Connection succeeded!<br/>";
        
        ?>

