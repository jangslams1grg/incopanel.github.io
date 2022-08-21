<?php
	ob_start();
	session_start();

	function message() {
		if (isset($_SESSION["message"])) {
			$output = "<div class=\"message\">";
			$output .= htmlentities($_SESSION["message"]);
			$output .= "</div>";

			// clear message after use
			$_SESSION["message"] = null;

			return $output;
		}
	}

	function errors() {
		if (isset($_SESSION["errors"])) {
			$output = "<div class=\"errors\">";
			$output .= htmlentities($_SESSION["errors"]);
			$output .= "</div>";

			// clear message after use
			$_SESSION["errors"] = null;

			return $output;
		}
	}

?>