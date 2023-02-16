<?php
include_once "connect.php";
?>
<!DOCTYPE html>
<html>
	<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
     <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Manage <b>Announcements</b></h2>
     </div>

     <div class="col-sm-6">
      <a href="#" class="add-record btn btn-danger" data-bs-toggle='modal' data-bs-target='#profile-modal'><i class="material-icons">&#xE147;</i> <span>Add Announcement</span></a>
          
     </div></div></div>
		
    <div id="news-list"></div>

		</div></div>

<!-- The Modal-EDIT -->
<div class="modal" id="profile-modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="m-title"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <form id="profile-form" action="saving-profile.php" method="post" class="form-group" enctype="multipart/form-data">
      <div class="modal-body">
      <input type="hidden" name="id" id="id_n" value="0">
      <label for="lastname" class="form-label">Title: </label>
            <input type="text" placeholder="Enter title" name="title" id="title_n" required class="form-control" >
            
      <label for="firstname" class="form-label">Description: </label>
        <input type="text" placeholder="Enter Description" name="description" required id="description_n" class="form-control" >

        <label for="firstname" class="form-label">Day: </label>
        <input type="text" placeholder="Enter Description" name="dateDay" required id="dateDay_n" class="form-control" >

         <label for="firstname" class="form-label">Month: </label>
        <input type="text" placeholder="Enter Description" name="dateMonth" required id="dateMonth_n" class="form-control" >

            <label for="firstname" class="form-label">Posting Date: </label>
        <input type="text" placeholder="Enter Description" name="dateposted" required id="dateposted_n" class="form-control" >


            <label for="firstname" class="form-label">Place:</label>
        <input type="text" placeholder="Enter Description" name="place" required id="place_n" class="form-control" >

    
      <!-- Modal footer -->
      <div class="modal-footer">
          <input type="submit" name="btn-saving" class="btn btn-primary" id="b-save" value="save">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
      </form>

    </div>
  </div>
</div>
<!-- The Modal-DELETE -->
<div class="modal" id="profile-modal-delete">
  <div class="modal-dialog modal-fullscreen-lg-down">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Record</h4>
        <button type="button" class="btn-cancel btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div>
          <p>Delete this news?</p>
          <p class="alert alert-warning" id="to-delete"></p>
          
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
          <button type="submit" name="btn-update" class="btn-delete btn btn-danger" data-bs-dismiss="modal">Yes</button>
        <button type="button" class="btn-cancel btn btn-primary" data-bs-dismiss="modal">Cancel</button>
      </div>

    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
              $.ajax({
                  type:"POST", 
                  url: "fetch-profile.php",   
                  data:{},
                  cache:false,
                  success:function(data) {
                    $("#news-list").html(data);
                  }
                });

  });
          
        
    
        
   


</script>
	</body>
</html>