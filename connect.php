<?php
	require_once('config.php');
	if(!($con = mysql_connect(HOST, USERNAME, PASSWORD))) {
		echo mysql_error();
	}
	if(!(mysql_select_db(DATABASE))) {
		echo mysql_error();
	}
	if(!(mysql_query('set names utf8'))) {
		echo mysql_error();
	}
	function tophp($php) {
		require_once($php);
	}

?>