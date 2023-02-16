<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- My CSS -->
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
				<a href="../../../calendar/index.php">
					<i class='bx bxs-calendar' ></i>
					<span class="text">Schedule</span>
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
				<a href="../../../index.php" class="logout">
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
			<i class='bx bx-menu' style="color: white"></i>
			<a href="#" class="nav-link" style="color: white">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<a href="#" class="notification">
				<i class='bx bxs-bell' style="color: white"></i>
			</a>
			<a href="#" class="profile">
				<img src="../../../img/people.png">
			</a>
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

        <form method="post" action="insertCarousel.php" style="font-weight: 700; margin-top: 30px;" id="profile-form" class="form-group mcw" enctype="multipart/form-data" autocomplete="off">
          <input type="hidden" value="0" name="id" id="myid">
          <div style="margin-bottom: 20px ;" class="form-group">
            <label>SELECT IMAGE:</label>
            <input class="form-control  ms-auto me-auto mb-3" type="file" name="pic1" id="myPic1" required>
          </div>
          <div style="margin-bottom: 20px ;" class="form-group">
            <label>SELECT IMAGE:</label>
            <input class="form-control  ms-auto me-auto mb-3" type="file" name="pic2" id="myPic2" required>
          </div>
          <div style="margin-bottom: 20px ;" class="form-group">
            <label>SELECT IMAGE:</label>
            <input class="form-control  ms-auto me-auto mb-3" type="file" name="pic3" id="myPic3" required>
          </div>
          <div style="margin-bottom: 20px ;" class="form-group">
            <label>SELECT IMAGE:</label>
            <input class="form-control  ms-auto me-auto mb-3" type="file" name="pic4" id="myPic4" required>
          </div>
            <div class="text-center">
                <button type="submit" class="submit1 btn btn-success">ADD IMAGE</button>
                <button type="reset" class=" btn btn-danger">RESET FORM</button>
          </div>
        </form>
   


<!-- Modal delete-->
<div class="modal fade" id="videos-delete" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div style="background: black; color: white;" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">DELETE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <p class="text-center">DELETE THIS ARTICLE?</p>
          <p class="text-center alert alert-danger" id="deleten"></p>
        </div>
          <div class="text-center">
                <button data-dismiss="modal" class="yes btn btn-success">YES
                </button>
                <button data-dismiss="modal" class=" btn btn-danger">CANCEL</button>
          </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>