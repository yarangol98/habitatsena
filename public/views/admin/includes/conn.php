<?php

	$conn = new mysqli('bl5ux5krulw62lcqnk7b-mysql.services.clever-cloud.com', 'ur6e2fgizg2u43jx', 'wWp1SkPBCyNTz6SKdh0F', 'bl5ux5krulw62lcqnk7b');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
/*
	$conn = new mysqli('localhost', 'root', '', 'bl5ux5krulw62lcqnk7b');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}else{
		//echo 'Conexion exitosa';
	}*/
?>