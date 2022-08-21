<?php
	// Redirect Function:
    function redirect_to($new_location) {
        header("Location: " . $new_location);
        exit;
    }

    //user Login validation:
    function user_validation($username) {
        global $connection;
        $sql = "SELECT * FROM users WHERE username = '$username' ";
        $result = mysqli_query($connection, $sql);
        if($user = mysqli_fetch_assoc($result)) {
		// return means handover result
        return $user;
        } else {
            echo "WHAT?";
        }
    }	
	
	//user Login validation:
    function admin_validation($username) {
        global $connection;
        $sql = "SELECT * FROM admins WHERE Admin_username= '$username' ";
        $result = mysqli_query($connection, $sql);
        if($users = mysqli_fetch_assoc($result)) {
		// return means handover result
        return $users;
        } else {
            echo "WHAT?";
        }
    } 
	
    function password_encrypt($password) {
		$hash_format = "$2y$10$";
		$salt_length = 22;
		$salt = generate_salt($salt_length);
		$format_and_salt = $hash_format . $salt;

		$hash = crypt($password, $format_and_salt);
		return $hash;
	}

	function generate_salt($length) {
	  // Not 100% unique, not 100% random, but good enough for a salt
	  // MD5 returns 32 characters
	  $unique_random_string = md5(uniqid(mt_rand(), true));

		// Valid characters for a salt are [a-zA-Z0-9./]
	  $base64_string = base64_encode($unique_random_string);

		// But not '+' which is valid in base64 encoding
	  $modified_base64_string = str_replace('+', '.', $base64_string);

		// Truncate string to the correct length
	  $salt = substr($modified_base64_string, 0, $length);
	  	return $salt;
	}


	function password_check($password, $existing_hash) {
		// existing hash contains format and salt at start
		$hash = crypt($password, $existing_hash);
		if ($hash === $existing_hash) {
			return true;
		} else {
			return false;
		}
	}

	//for user
	function attempt_login($username, $password) {
		$user = user_validation($username);
		if($user) {
		// found admin, now check password
			if(password_check($password, $user['user_password'])) {
			// password matches
			return $user;
			} else {
			// password does not match
                return false;
			}
		} else {
		// admin not found
		return false;
		}
	}
	
	
 	//for admin
	function attempt_login_admin($username, $password) {
		$users = admin_validation($username);
		if($users) {
		// found admin, now check password
			if(password_check($password, $users['Admin_password'])) {
			// password matches
			return $users;
			} else {
			// password does not match
                return false;
			}
		} else {
		// admin not found
		return false;
		}
	}
	 
	
	
	function logged_in() {
        return isset($_SESSION["Admin_username"]);
	}

	
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to ('index.php');
		}
	}
	
	
	
	
	
	
	//....
	function log_status($status,$userId,$attrib=null){
		//get the connection
		global $connection;
		//sql for insert
		$sql = is_null($attrib)?" INSERT INTO status_log(user_id,status) VALUES (? , ?)":
		"INSERT INTO status_log(user_id,status,attrib) VALUES (? , ?, ?)";
		
		//if sql is good
		if ($stmt = $connection->prepare($sql)) {
			//set sql parameter
			/* bind parameters for markers */
			if(is_null($attrib)){
				$stmt->bind_param("is", $userId, $status);
			}else{
				$stmt->bind_param("iss", $userId, $status,$attrib);
			}
			/* execute query */
			$stmt->execute();
		}
	}
?>