<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
<?php 
	include_once "admin/connect.php";
	$sql = "SELECT * FROM tbl_carousel";
	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result)> 0){
		while($row = mysqli_fetch_array($result)){
?>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="admin/pic/<?php echo $row['pic1']; ?>" class="img-fluid d-block w-100" alt="Slide 1" style="height: 49vw;">
    </div>
    <div class="carousel-item">
      <img src="admin/pic/<?php echo $row['pic2']; ?>" class="img-fluid d-block w-100" alt="Slide 2" style="height: 49vw;">
    </div>
    <div class="carousel-item">
      <img src="admin/pic/<?php echo $row['pic3']; ?>" class="img-fluid d-block w-100" alt="Slide 3" style="height: 49vw;">
    </div>
    <div class="carousel-item">
      <img src="admin/pic/<?php echo $row['pic4']; ?>" class="img-fluid d-block w-100" alt="Slide 4" style="height: 49vw;">
    </div>
<?php
}
}
?>
  <!-- Left and right controls/icons -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</body>
</html>