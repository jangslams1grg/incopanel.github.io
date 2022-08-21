<?php
	$dsn = 'mysql:host=localhost;dbname=inventorymanagementsystem';
	
	$db = new PDO($dsn, 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>