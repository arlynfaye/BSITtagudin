<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
     <link rel="icon" href="img/logo.png">
     <title>ADMIN SIGN-UP</title>

  <style>
   
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
  box-sizing: border-box;
}

body {
  background: url('img/login-bg.png');
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: 'Montserrat', sans-serif;
  height: 100vh;
  margin: -20px 0 50px;
}

h1 {
  font-weight: bold;
  margin: 0;
  margin-bottom: 20px;
}

p {
  font-size: 14px;
  font-weight: 100;
  line-height: 20px;
  letter-spacing: 0.5px;
  margin: 20px 0 30px;
}

span {
  font-size: 12px;
}

a {
  color: #333;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
}

button {
  border-radius: 20px;
  border: 1px solid  #800000;
  background-color:#800000;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
  margin-top: 20px;
}
button:hover{
 background-color: white; 
  color: black; 
  border: 2px solid #8D0303;
}
form {
  background-color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

input {
  background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.container {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  position: relative;
  overflow: hidden;
  width: 768px;
  margin-top: 50px;
  max-width: 100%;
  min-height: 600px;
}

.form-container {
  position: absolute;
  top: 0;
  height: 100%;
}

.log-in-container {
  left: 0;
  width: 50%;
  z-index: 2;
}


.overlay-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
}


.overlay {
  background: #FF416C;
  background: linear-gradient(to left, #cc3300 0%, #800000 100%);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #FFFFFF;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
}

.overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
}


.overlay-right {
  right: 0;
}


.social-container {
  margin: 50px 0;
}

.social-container a {
  border: 1px solid #DDDDDD;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
}
 </style>
</head>
<body>
    <div class="container" id="container">
    <div class="form-container log-in-container">
     <form action="signup-check.php" method="post">
     	<h2>ADMIN SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['adminname'])) { ?>
               <input type="text" 
                      name="adminname" 
                      placeholder="Name"
                      value="<?php echo $_GET['adminname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="adminname" 
                      placeholder="Name"><br>
          <?php }?>

          <?php if (isset($_GET['adminuname'])) { ?>
               <input type="text" 
                      name="adminuname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['adminuname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="adminuname" 
                      placeholder="User Name"><br>
          <?php }?>

     	<input type="password" 
                 name="adminpassword" 
                 placeholder="Password"><br>

          <input type="password" 
                 name="adminre_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
   </div>
 <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
         <img src="img/logo.png">
        </div>
      </div>
    </div>
  </div>
</body>
</html>