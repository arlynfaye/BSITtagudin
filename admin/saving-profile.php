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
  $para1 = $_POST['para1'];
  $para2 = $_POST['para2'];
  $para3 = $_POST['para3'];
  $fileName= $_FILES['pic']['name'];
  $filesn = "../news_image/";
	$tempn = $_FILES['pic']['tmp_name'];
	move_uploaded_file($tempn,$filesn.'/'.$fileName);
  $fileName2= $_FILES['pic2']['name'];
  $filesn = "../news_image/";
  $tempn = $_FILES['pic2']['tmp_name'];
  move_uploaded_file($tempn,$filesn.'/'.$fileName2);
  $fileName3= $_FILES['pic3']['name'];
  $filesn = "../news_image/";
  $tempn = $_FILES['pic3']['tmp_name'];
  move_uploaded_file($tempn,$filesn.'/'.$fileName3);



  if($id!=0){
	  $sql = "UPDATE tbl_news
			SET pic = '$fileName', title = '$title',description='$description',dateDay='$dateDay',dateMonth='$dateMonth',dateposted='$dateposted',place='$place',para1='$para1',para2='$para2',para3='$para3',pic2 = '$fileName2',pic3 = '$fileName3'
			WHERE id=$id";
  }else{
  	$sql = "INSERT INTO tbl_news (pic,title,description,dateDay,dateMonth,dateposted,place,para1,para2,para3,pic2,pic3)
           VALUES('$fileName','$title','$description','$dateDay','$dateMonth','$dateposted','$place','$para1','$para2','$para3','$fileName2','$fileName3')";  	
  }


	if ($con->query($sql) === TRUE) {
	  header('location:index.html');
	} else {
	  echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
}
?>