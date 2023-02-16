<?php
if(isset($_POST['id'])){
      include_once 'connect.php';
      $id = $_POST['id'];

      $query1 = "SELECT * FROM tbl_news
      WHERE id=$id";
      $result1 = mysqli_query($con, $query1);

    

     $row1 = mysqli_fetch_array($result1);
     echo json_encode($row1);  

      	$con->close();

}
?>