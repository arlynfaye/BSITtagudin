<?php
$con = new mysqli("localhost","root","","dummy_db");

if ($con->connect_error) {
	die("connection error:".$con->con_error);
}
	$con->set_charset("utf8");
?>
