<?php

    $con = new mysqli("localhost","root","","db_bsit3");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $con->set_charset("utf8");

?>