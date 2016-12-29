<?php 
	if (strpos($_SERVER["REQUEST_URI"], "index.php") !== false && $_SERVER["PHP_SELF"] !== "/404.php") {
		include("/404.php");
	}
?>