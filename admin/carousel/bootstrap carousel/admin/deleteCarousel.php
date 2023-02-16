<?php 
	if (isset($_POST['id'])) {
		include "connect.php";
		$id = $_POST['id'];

		$sql = "DELETE FROM tbl_carousel WHERE id = $id";

		$con->query($sql);
		$con->close();

	}
?>