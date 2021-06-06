<?php 
	function connect() {

	    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	    $mysqli = new mysqli("localhost", "root", "", "fullstack_uas");

	    return $mysqli;
	}

?>