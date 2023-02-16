<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="../../../style.css">

  <title>Admin ISPSC</title>
</head>
<body>

  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="#" class="brand">
      <i><img src="../../../img/logo.png" style="padding-top: 20px; padding-left: 10px"></i>
      <span class="text" style="padding-left: 5px">ISPSC</span>
    </a>
    <ul class="side-menu top">
      <li>
        <a href="../../../index.html">
          <i class='bx bxs-dashboard' ></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li class="active">
        <a href="#">
          <i class='bx bxs-group' ></i>
          <span class="text">Carousel</span>
        </a>
      </li>
      <li>
        <a href="../../../Announcements/index.html">
          <i class='bx bxs-calendar'></i>
          <span class="text">Announcements</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="#">
          <i class='bx bxs-cog' ></i>
          <span class="text">Settings</span>
        </a>
      </li>
      <li>
        <a href="../../../../index.php" class="logout">
          <i class='bx bxs-log-out-circle' style="color: white"></i>
          <span class="text" style="color: white">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->



  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Carousel</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Carousel</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
              <a class="active" href="#">Home</a>
            </li>
          </ul>
        </div>
      </div>

<!--form for questions-->
<div class="shows"></div>
<div style="margin-top: 70px;" class="table-responsive">
<table class="table table-hover table-bordered table-primary table-striped">
	<tr class="text-center">
	    <th>ID</th>
	    <th>IMAGE 1</th>
	    <th>IMAGE 2</th>
	    <th>IMAGE 3</th>
      <th>IMAGE 4</th>
      <th>ACTION</th>
	</tr>
<?php 
	include_once "connect.php";
	$sql = "SELECT * FROM tbl_carousel";
	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result)> 0){
		while($row = mysqli_fetch_array($result)){
?>
		<tr style="text-align: center;">
			<td style="word-break:break-word;"><?php echo $row['id']; ?></td>
			<td>
				<img width="200px" height="200px" src='pic/<?php echo $row['pic1']; ?>'>
			</td>
			<td>
        <img width="200px" height="200px" src='pic/<?php echo $row['pic2']; ?>'>
      </td>
      <td>
        <img width="200px" height="200px" src='pic/<?php echo $row['pic3']; ?>'>
      </td>
      <td>
        <img width="200px" height="200px" src='pic/<?php echo $row['pic4']; ?>'>
      </td>
			<td>
				<div class="text-center">
					<a href="#" class="editVideosBtn" id="<?php echo $row['id']; ?>"> <button class="btn btn-outline-warning">Edit</button></a>

					<a class="videosDelete" href="#" id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#videos-delete"><button class="btn btn-outline-danger">Delete</button></a>
				</div>
			</td>
		</tr>
<?php			
		}
	}
?>

</table>
</div>


      </div>
      <!-- End Dashboard Content -->
    </div>
    <!-- End Dashboard -->



	
<script type="text/javascript">
	$(document).ready(function(){
		$(".shows").load("addCarouselform.php");
	});
		$('.editVideosBtn').click(function(){
			var editid = $(this).attr("id");
			$.ajax({
				data:{id:editid},
				method:'POST',
				url: "selectCarousel.php",
				cache: false,
				dataType: 'JSON',
				success:function(data){
					$('#myid').val(data.id);
					$('#mylink').val(data.link);
				}
			});
});
</script>
<script>
  $(document).ready(function(){   
    $('.videosDelete').click(function(){
      var id = $(this).attr('id');
      $('#deleten').text('DELETE THIS ID:  ' +id +' ?');

      $('.yes').click(function(){
      	location.reload(true);
        $.ajax({
        	method: 'POST',
        	data: {id:id},
          url:'deleteCarousel.php',
          success:function(response){
            $.ajax({
              type:'POST',
              url: 'carouselTable.php',
              data: {},
              cache: false,
              success:function(){
                $(".show3").load("carouselTable.php");
              }
            });
          }
        });
      });
    });
  })
</script>
</body>
</html>