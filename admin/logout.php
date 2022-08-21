<?php require_once 'includes/session.php'; ?>
<?php require_once 'includes/dbconfig.php'; ?>
<?php require_once 'includes/functions.php'; ?>



<?php
	// v1: simple logout
	// session_start();
	//$_SESSION["admin_id"] = null;
	$_SESSION["Admin_username"] = null;
	$_SESSION['Admin_password'] = null;
	//$_SESSION['user_type'] = null;
	
	redirect_to("index.php");
?>