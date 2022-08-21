<?php require_once 'includes/session.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/dbconfig.php'; ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inco panel industries Pvt Ltd</title>
<!--<link rel="stylesheet" href="css/style1.css" />-->
<link rel="stylesheet" href="includes/css/style1.css" />
<link rel="stylesheet" href="includes/stylesheets/style.css" type="text/css" />
</head>



<?php

$username= "";
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password)) {
        $found_admin = attempt_login_admin($username, $password);
        if ($found_admin){
			
			$_SESSION['Admin_userid'] = $found_admin["Admin_id"];
            $_SESSION['Admin_username'] = $found_admin["Admin_username"];
			$_SESSION['user_type'] = 'admin';
			redirect_to('dashboard.php');
        } else {
            header('Location:index.php?mode=invalid');
        }
    } 
}

?>

<body>
	<div class="lg-container">
		<h1>NSTPL Login</h1>
		<form action="index.php" id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" name="submit" id="login">Login</button>
			</div>
			
		</form>
			<?php
				if(isset($_REQUEST['mode'])&&$_REQUEST='invalid')
				{
					echo '<center><font color="red">ERROR: Invalid username and/or password.</center>';
				}
				?>
				
	</div>
</body>
</html>