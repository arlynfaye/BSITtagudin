<?php
if(isset($_POST['id'])){
include_once "connect.php";
  // collect value of input field
  $id = $_POST['id']; 

	  $sql = "DELETE FROM tbl_news
			WHERE id=$id";



	if ($con->query($sql) === TRUE) {
	  echo "Deleted successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
}
?>