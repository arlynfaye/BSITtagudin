<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['adminuname']) && isset($_POST['adminpassword'])
    && isset($_POST['adminname']) && isset($_POST['adminre_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$adminuname = validate($_POST['adminuname']);
	$adminpass = validate($_POST['adminpassword']);

	$adminre_pass = validate($_POST['adminre_password']);
	$adminname = validate($_POST['adminname']);

	$adminuser_data = 'adminuname='. $adminuname. '&adminname='. $adminname;


	if (empty($adminuname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($adminpass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($adminre_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($adminname)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($adminpass !== $adminre_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $adminpass = md5($adminpass);

	    $sql = "SELECT * FROM admin WHERE adminUser_name='$adminuname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO admin(adminUser_name, adminPassword, adminName) VALUES('$adminuname', '$adminpass', '$adminname')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}