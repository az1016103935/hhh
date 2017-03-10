<?php
	header("content-type: text/html;charset=utf-8");
	//$mem = new Memcache();
	//$flag = $mem->connect('localhost',11211);

	ini_set("session.save_handler","memcache");
	ini_set("session.save_path","tcp://127.0.0.1:11211");

	session_start();
	echo session_id();
	echo "<br/>";
	var_dump($_SESSION['username']);
	

?>