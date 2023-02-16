<?php 
	if (isset($_POST['id'])) {
		include "connect.php";

		$id = $_POST['id'];

		$sql2 = "SELECT * FROM tbl_carousel WHERE id=$id";

		$result2 = mysqli_query($con, $sql2);
		$row2 = mysqli_fetch_array($result2);

		echo json_encode($row2);

		$con->close();
	}
?>