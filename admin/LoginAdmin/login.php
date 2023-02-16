<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['adminuname']) && isset($_POST['adminpassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$adminuname = validate($_POST['adminuname']);
	$adminpass = validate($_POST['adminpassword']);

	if (empty($adminuname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($adminpass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $adminpass = md5($adminpass);

        
		$sql = "SELECT * FROM admin WHERE adminUser_name='$adminuname' AND adminPassword='$adminpass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['adminUser_name'] === $adminuname && $row['adminPassword'] === $adminpass) {
            	$_SESSION['adminUser_name'] = $row['adminUser_name'];
            	$_SESSION['adminName'] = $row['adminName'];
            	$_SESSION['adminId'] = $row['adminId'];
            	header("Location: ../carousel/bootstrap carousel/admin/carouselTable.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}