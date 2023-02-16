<?php 
if (isset($_POST['id'])) {
	include "connect.php";
	$id = $_POST['id'];
	$file1= $_FILES['pic1']['name'];
	$filesn1 = "pic/";
	$tempn1 = $_FILES['pic1']['tmp_name'];
	move_uploaded_file($tempn1,$filesn1.'/'.$file1);

	$file2= $_FILES['pic2']['name'];
	$filesn2 = "pic/";
	$tempn2 = $_FILES['pic2']['tmp_name'];
	move_uploaded_file($tempn2,$filesn2.'/'.$file2);

	$file3= $_FILES['pic3']['name'];
	$filesn3 = "pic/";
	$tempn3 = $_FILES['pic3']['tmp_name'];
	move_uploaded_file($tempn3,$filesn3.'/'.$file3);

	$file4= $_FILES['pic4']['name'];
	$filesn4 = "pic/";
	$tempn4 = $_FILES['pic4']['tmp_name'];
	move_uploaded_file($tempn4,$filesn4.'/'.$file4);
	if ($id != 0){
		$sqln = "UPDATE tbl_carousel SET pic1 = '$file1',pic2 = '$file2',pic3 = '$file3',pic4 = '$file4' WHERE id = $id";
	}else{
		$sqln = "INSERT INTO tbl_carousel (pic1,pic2,pic3,pic4)
	VALUES ('$file1','$file2','$file3','$file4')";
	}


	if ($con->query($sqln) === TRUE) {
	  header("location:carouselTable.php");
	} else {
	  echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
}else{
	header("location:https://www.youtube.com/watch?v=qEJjlB002Tk");
}
?>