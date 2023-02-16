<?php

$adminsname= "localhost";
$adminunmae= "root";
$adminpassword = "";

$admindb_name = "db_bsit3";

$conn = mysqli_connect($adminsname, $adminunmae, $adminpassword, $admindb_name);

if (!$conn) {
	echo "Connection failed!";
}