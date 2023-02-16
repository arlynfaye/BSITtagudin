<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo_white.png">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/FontAwesome/css/all.css"></script>
     <link rel="stylesheet" type="text/css" href="css/IndexCSS/Style.css">
     <link rel="stylesheet" type="text/css" href="css/IndexCSS/Style2.css">
 
    <title>HOME | ISPSC-BSIT</title>
     <!-- Favicon -->
    <link href="logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.gstatic.com/s/heebo/v21/NGS6v5_NC0k9P9H2TbE.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
      
.zoom {
  transition: transform .2s;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
    </style>
</head>
<body>
  <script src="assets/FontAwesome/js/all.js"></script>
<div class="container-fluid p-0">
<!-- Header -->
    <div class="container-xxl bg-white p-0">


        <!-- Navbar Start -->
            <a href="index.html" class="logo-brand">
                <img src="img/logo.png">
            </a>
        <nav class="navbar navbar-expand-lg bg-white navbar-light px-4 px-lg-5 py-lg-0">
           <a href="index.html" class="logo-brand">
                
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto ">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="academics.html" class="nav-item nav-link">Academics</a>
                    <a href="admission.html" class="nav-item nav-link">Admission</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="survey.html" class="dropdown-item">Survey Test Result</a>
                            <a href="feedback.html" class="dropdown-item">Send Feedback</a>
                        </div>                    
                    </div>
                </div>
                <a href="admin/LoginAdmin/index.php"><i class='fas fa-user-alt' style="color:#791105; font-size: 20px;"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
        
<!-- Carousel -->
<div id="home_carousel" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner">
<?php 
  include_once "admin/carousel/bootstrap carousel/admin/connect.php";
  $sql = "SELECT * FROM tbl_carousel";
  $result = mysqli_query($con,$sql);

  if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_array($result)){
?>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="admin/carousel/bootstrap carousel/admin/pic/<?php echo $row['pic1']; ?>" class="img-fluid d-block w-100" alt="Slide 1" style="height: 49vw;">
    </div>
    <div class="carousel-item">
      <img src="admin/carousel/bootstrap carousel/admin/pic/<?php echo $row['pic2']; ?>" class="img-fluid d-block w-100" alt="Slide 2" style="height: 49vw;">
    </div>
    <div class="carousel-item">
      <img src="admin/carousel/bootstrap carousel/admin/pic/<?php echo $row['pic3']; ?>" class="img-fluid d-block w-100" alt="Slide 3" style="height: 49vw;">
    </div>
    <div class="carousel-item">
      <img src="admin/carousel/bootstrap carousel/admin/pic/<?php echo $row['pic4']; ?>" class="img-fluid d-block w-100" alt="Slide 4" style="height: 49vw;">
    </div>
<?php
}
}
?>
  <!-- Left and right controls/icons -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#home_carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#home_carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>s
</div>
</div>
<!-- About -->
    <div id="about" class="section">

      <!-- container -->
      <div class="container">

        <!-- row -->
        <div class="row">

          <div class="col-md-6">
            <div class="section-header wow fadeIn" data-wow-delay="0.1s">

              <h2 style="color:#791105;">Bachelor of Science in Information Technology (BSIT)</h2>
            </div>
            <br>
            <!-- feature -->
            <div class="feature">
              <div class="feature-content  wow fadeIn" data-wow-delay="0.2s">
                <p style="text-align: justify;">The website for the BSIT program is a comprehensive online platform designed to provide prospective students, current students, and alumni with all the information they need about the program. The website includes details on program requirements, course descriptions, and admission criteria. Overall, the BSIT program website is an essential resource for anyone interested in pursuing a degree in information technology.</p>
              </div>
            </div>
            <!-- /feature -->

            <!-- feature -->
            <div class="feature">
              <div class="feature-content  wow fadeIn" data-wow-delay="0.3s">
                <p style="text-align: justify;">BSIT stands for Bachelor of Science in Information Technology. It is a four-year undergraduate program that provides students with a strong foundation in the field of information technology. The program covers various subjects such as programming languages, database management, networking, web development, and software engineering. </p>
              </div>
            </div>
            <!-- /feature -->

          </div>

          <div class="col-md-6">
            <div class="about-img  wow fadeIn" data-wow-delay="0.3s">
              <img src="img/home5.png" alt="">
            </div>
          </div>

        </div>
        <!-- row -->

      </div>
       <br>
<!-- Events -->
<div class="history container" style="margin-top: 0px; padding-right: 20px; padding-left: 20px;">
  <div class=" card rounded-4 shadow-lg">
  <div class="events">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title_container text-center">
            <h2 class="section_title" style="color: #791105; font-weight:bold;">ANNOUNCEMENTS</h2>
            <div class="section_subtitle"><p></p></div>
          </div>
        </div>
      </div>
      <div class="row events_row">
        <?php 
$sql = "SELECT * FROM tbl_news ORDER BY id DESC";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)> 0){
  while($row = mysqli_fetch_array($result)){
?>  
        <!-- Event -->
        <div class="col-lg-4 event_col">
          <div class="event event_left">
           
            <div class="event_body d-flex flex-row align-items-start justify-content-start">
              <div class="event_date">
                <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                  <div class="event_day trans_200"><?php echo $row['dateDay'];?></div>
                  <div class="event_month trans_200"><?php echo $row['dateMonth'];?></div>
                </div>
              </div>
              <div class="event_content">
                <div class="event_title" style="font-size: 23px; font-family: serif; color:black; font-weight: bold; "><?php echo $row['title'];?></div>
                <span  style="font-size: 12px;"><i class="fa-solid fa-calendar"></i> Date Posted: <?php echo $row['dateposted'];?></span>
               
                <div class="event_info_container">
                  <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo $row['place'];?></span></div>
                  <div class="event_text" style="text-align: justify;">
                    <p><?php echo $row['description'];?></p>
                  </div>
                  
              
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <br>
  <br>

  <!-- Modal -->
<div class="modal fade" id="news<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <center>
        <div style="font-size: 23px; font-weight: bold; padding-top: 15px;" class="text-center mb-5"><?php echo $row['title'];?>
        <span style="font-size: 16px; font-weight: bold;" ><p class="text-center">Date Posted:<?php echo $row['dateposted'];?></p>
      </center>
      <div class="modal-header">
       
      </div>
      <div class="modal-body effect-img" style="padding-left: 20px;padding-right: 20px; padding-top: 20px;">
           <div class="modal-body">
        <div style="text-align:justify; padding: 20px;" class=" mt-5"><?php echo $row['para1'];?></div>
        <div style="text-align:justify; padding: 20px" ><?php echo $row['para2'];?></div>
        <div style="text-align:justify; padding: 20px"><?php echo $row['para3'];?></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div></span></div>



<?php
  }
}
?> </div></div></div></div></div><br><br>   
      <!-- Features -->

  <div class="features1">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title_container text-center  wow fadeIn" data-wow-delay="0.2s">
            <h2 class="section_title" style="color:  #791105">Bachelor of Science in Information Technology Skills</h2>
            <div class="section_subtitle  wow fadeIn" data-wow-delay="0.3s"><p>Knowledge in computers is is not a prerequisite for this course. However , there are skills that you need to possess or develop to be able to succeed in this course:</p></div>
          </div>
        </div>
      </div>
      <div class="row features_row">
        
        <!-- Features Item -->
        <div class="col-lg-3 feature_col  wow fadeIn" data-wow-delay="0.2s">
          <div class="feature1 text-center trans_400">
            <div class="feature_icon"><img src="img/two.png" alt=""></div><br>
            <h3 class="feature_title">Analytical skills</h3>
            <div class="feature_text"><p>problem-solving skills that help you parse data and information to develop creative, rational solutions. </p></div>
          </div>
        </div>

        <!-- Features Item -->
        <div class="col-lg-3 feature_col  wow fadeIn" data-wow-delay="0.3s">
          <div class="feature1 text-center trans_400">
            <div class="feature_icon"><img src="img/one.png" alt=""></div><br>
            <h3 class="feature_title">Technical skills</h3>
            <div class="feature_text"><p> specialized knowledge and expertise required to perform specific tasks and use specific tools and programs in real world situations</p></div>
          </div>
        </div>

        <!-- Features Item -->
        <div class="col-lg-3 feature_col">
          <div class="feature1 text-center trans_400  wow fadeIn" data-wow-delay="0.4s">
            <div class="feature_icon"><img src="img/three.png" alt=""></div><br>
            <h3 class="feature_title">Mathematical skills</h3>
            <div class="feature_text"><p>separate area that includes verbal components and nonverbal components </p></div>
          </div>
        </div>

        <!-- Features Item -->
        <div class="col-lg-3 feature_col">
          <div class="feature1 text-center trans_400  wow fadeIn" data-wow-delay="0.5s">
            <div class="feature_icon"><img src="img/four.png" alt=""></div><br>
            <h3 class="feature_title">Interpersonal skills</h3>
            <div class="feature_text"><p>verbal and nonverbal communication, the ability to handle conflict, teamwork, empathy, listening, and a positive attitude</p></div>
          </div>
        </div>

      </div>
    </div>
  </div>


<div class="about">
        <div class="inner-section  wow fadeIn" data-wow-delay="0.2s">
            <h3>ABOUT - Bachelor of Science in Information Technology (BSIT) </h3>
            <p class="text">
                The Bachelor of Science in Information Technology (BSIT) program is a four-year degree that focuses on providing students with the necessary knowledge and skills to design, develop, implement, and maintain various types of information technology systems. In a world that is increasingly driven by technology, this program offers students an opportunity to be at the forefront of the digital revolution.
            </p>
            <div class="skills">
                <button><a href="about.html" style="color: white;">Read more</a></button>
            </div>
        </div>
    </div>

<!-- row -->
<center><div id="courses-wrapper">
        <!-- /courses -->
       
        <div class="container">
        <div class="row">
          <div class="section-header text-center  wow fadeIn" data-wow-delay="0.2s" >
           
            <h1 style="color:black; border-bottom: 1px solid maroon;">Why BSIT?</h1>
          </div>
        </div></center>
        <!-- /row -->
<br>
        <!-- courses -->
        <div id="courses-wrapper">
        <!-- /courses -->
       
        <div class="container">
  <div class="row">
    <div class="col-lg-6  wow fadeIn" data-wow-delay="0.3s" style="color: black;  font-size:16px; text-align: justify;">
   Choosing the BSIT program is an excellent option for those interested in technology, innovation, and problem-solving. In today's digital world, technology is a driving force behind progress in almost every field. As such, skilled information technology professionals are in high demand. Here are some reasons why you should choose the BSIT program:<br>

The BSIT program is designed to prepare students for a range of careers in the field of information technology. The program covers a broad spectrum of topics, including programming, networking, database management, and software development. These areas of study will equip students with the skills needed to design, develop, implement, and maintain a variety of technological systems.<br>

Graduates of the BSIT program have a wide range of career options available to them, including software development, network administration, database administration, and IT project management, among others. These careers are well-paying and in high demand, making the BSIT program an excellent investment in your future.
     <hr>
    </div>
    <div class="col-lg-6  wow fadeIn" data-wow-delay="0.4s">
     <img src="img/info.png" class="zoom">
    </div>
  </div>
  <br>
 
          <!-- row -->
          <div class="row">

            <!-- single course -->
            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeIn" data-wow-delay="0.2s">
              <div class="course">
                <a href="#" class="course-img">
                  <img src="./img/com.jpg" alt="">
                  <i class="course-link-icon fa fa-link"></i>
                </a>
              
                <div class="course-details wow fadeIn" data-wow-delay="0.2s">
                  <span class="course-category">Mobile Development Native</span>
                </div>
              </div>
            </div>
            <!-- /single course -->

            <!-- single course -->
            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
              <div class="course">
                <a href="#" class="course-img">
                  <img src="./img/course02.jpg" alt="">
                  <i class="course-link-icon fa fa-link"></i>
                </a>
                <div class="course-details wow fadeIn" data-wow-delay="0.3s">
                  <span class="course-category">Web Development Back end</span>
                </div>
              </div>
            </div>
            <!-- /single course -->

            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeIn" data-wow-delay="0.4s">
              <div class="course">
                <a href="#" class="course-img">
                  <img src="./img/course05.jpg" alt="">
                  <i class="course-link-icon fa fa-link"></i>
                </a>
                <div class="course-details wow fadeIn" data-wow-delay="0.4s">
                  <span class="course-category">Web developement Front End</span>
                </div>
              </div>
            </div>
            <!-- /single course -->

             <div class="col-md-3 col-sm-6 col-xs-6 wow fadeIn" data-wow-delay="0.5s">
              <div class="course">
                <a href="#" class="course-img">
                  <img src="./img/comcom.jpg" alt="">
                  <i class="course-link-icon fa fa-link"></i>
                </a>
                <div class="course-details wow fadeIn" data-wow-delay="0.5s">
                  <span class="course-category">Database Management</span>
                </div>
              </div>
            </div>
            <!-- /single course -->

          </div>
          <!-- /row -->
        </div>
<br>
      </div>
      <!-- container -->
    </div>
    <!-- /Courses -->
<div class="container">
  <div class="row">
    <h2 style="color: #791105;">Choose BSIT Program!</h2>
    <div class="col-lg-6" style="border: 2px black;">
     <video width="500" height="400" controls>
  <source src="img/video1.mp4" type="video/mp4">
  <source src="img/video1.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
    </div>
     <div class="col-lg-6">
        <video width="500" height="400" controls>
  <source src="img/video2.mp4" type="video/mp4">
  <source src="img/video2.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
    </div>
  </div></div><br>
 <!-- Footer Start -->
        <div class="container-fluid text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #791105;">
            <div class="container py-5">
                <div class="row g-5">
                     <div class="col-lg-6 col-md-6" id="logoo">
                        <h3 class="mb-4" style="color:#FFB800;">Ilocos Sur Polytechnic State College</h3>
                        <p >"Taking the lead. Our trademark for globalization."</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="mb-4" style="color:#FFB800;">Get In Touch</h3>
                        <p class="mb-2" style="font-size: 13px;"><i class="fa fa-map-marker-alt me-3"></i>National High Way, Quirino, Tagudin, Ilocos Sur</p>
                        <p class="mb-2" style="font-size: 13px;"><i class="fa fa-phone-alt me-3"></i>(077)- 65 2093</p>
                        <p class="mb-2" style="font-size: 13px;"><i class="fa fa-envelope me-3"></i>ispsctagudin@yahoo.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/CSATagudin"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="mb-4" style="color:#FFB800;">Quick Links</h3>  
                        <a class="btn btn-link text-white-50" href="about.html">About</a>
                        <a class="btn btn-link text-white-50" href="admission.html">Admission</a> 
                        <a class="btn btn-link text-white-50" href="academics.html">Academics</a>
                        <a class="btn btn-link text-white-50" href="survey.html">Survey</a>
                        <a class="btn btn-link text-white-50" href="feedback.html">Feedback</a>
                      
                       
                    </div>
                    
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="index.html">ISPSC2023</a>, All Right Reserved. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top" style="background-color: #FFB800; color:black;"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script type="text/javascript" src="css/indexCss/script.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".show").load("backend/fetch.php");
        })
    </script>
</body>
</html> 