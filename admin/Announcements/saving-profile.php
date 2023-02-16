<?php
if(isset($_POST['id'])){
include_once "connect.php";
  // collect value of input field
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $dateDay = $_POST['dateDay'];
  $dateMonth = $_POST['dateMonth'];
  $dateposted = $_POST['dateposted'];
  $place = $_POST['place'];
  



  if($id!=0){
	  $sql = "UPDATE tbl_news
			SET title = '$title',description='$description',dateDay='$dateDay',dateMonth='$dateMonth',dateposted='$dateposted',place='$place'
			WHERE id=$id";
  }else{
  	$sql = "INSERT INTO tbl_news (title,description,dateDay,dateMonth,dateposted,place)
           VALUES('$title','$description','$dateDay','$dateMonth','$dateposted','$place')";  	
  }


	if ($con->query($sql) === TRUE) {
	  header('location:index.html');
	} else {
	  echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
}
?>