<?php
$con = new mysqli("localhost","root","","db_bsit3");

if ($con->connect_error){
	die("connection error:".$con->con_error);
}
	$con->set_charset("utf8");
?>