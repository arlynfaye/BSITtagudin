<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
    color: #2F5233;
  background: #f5f5f5;
  font-family: 'Varela Round', sans-serif;
  font-size: 13px;
 }
 tr{
  font-size: 16px;
 }
 .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
  border-radius:1px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.247);
    }
 .table-title {        
  padding-bottom: 15px;
  background-image: linear-gradient(to right bottom, #791105, #922219, #ab332c, #c44340, #de5455);
  color: #fff;
  padding: 16px 30px;
  margin: -20px -25px 10px;
  border-radius: 1px 1px 0 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.247);
    }
    .table-title h2 {
  margin: 5px 0 0;
  font-size: 24px;
 }
 .table-title .btn-group {
  float: right;
 }
 .table-title .btn {
  color: #fff;
  float: right;
  font-size: 15px;
  border: none;
  min-width: 50px;
  border-radius: 1px;
  border: none;
  outline: none !important;
  margin-left: 10px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.247);
 }
 .table-title .btn i {
  float: left;
  font-size: 21px;
  margin-right: 5px;
 }
 .table-title .btn span {
  float: left;
  margin-top: 2px;
 }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
  padding: 12px 15px;
  vertical-align: middle;
    }
 table.table tr th:first-child {
  width: 60px;
 }
 table.table tr th:last-child {
  width: 100px;
 }
    table.table-striped tbody tr:nth-of-type(odd) {
     background-color: #fcfcfc;
 }
 table.table-striped.table-hover tbody tr:hover {
  background:#2F5233;
 }
    table.table th i {
        font-size: 26px;
        margin: 0 5px;
        cursor: pointer;
    } 
    table.table td:last-child i {
  opacity: 0.9;
  font-size: 26px;
        margin: 0 5px;
    }
 table.table td a {
  font-weight: bold;
  color: #2F5233;
  display: inline-block;
  text-decoration: none;
  outline: none !important;
 }
 table.table td a:hover {
  color: #2196F3;
 }
 table.table td a.edit {
        color: #2F5233;
    }
    table.table td a.delete {
        color: #2F5233;
    }
    table.table td i {
        font-size: 27px;
    }
 table.table .avatar {
  border-radius: 1px;
  vertical-align: middle;
  margin-right: 10px;
 }
</style>

<div>
		<table border="1" width="75%" class="table table-hover table-bordered">
			<tr>
				<th style="color: #2F5233;">ID</th>
				<th style="color: #2F5233;">Title</th>
				<th style="color: #2F5233;">Description</th>
				<th style="color: #2F5233;">Action</th>
			</tr>
<?php
	include_once "connect.php";
    $sql_profile = "SELECT * FROM tbl_news";
    $result_profile = mysqli_query($con, $sql_profile);

    if (mysqli_num_rows($result_profile) > 0) {
        while($row = mysqli_fetch_array($result_profile)) {
        	echo "<tr>";
	        	echo "<td>".$row['id']."</td>";
	        	echo "<td>".$row['title']."</td>";
	        	echo "<td>".$row['description']."</td>";
	        	echo "<td>";
	        		echo "<a href='#' id='".$row['id']."' class='edit-profile btn btn-outline-danger material-icons' data-bs-toggle='modal' data-bs-target='#profile-modal'>&#xE254;</a>";

	        		echo " <a href='#' id='".$row['id']."' class='delete-profile btn btn-outline-danger material-icons' data-bs-toggle='modal' data-bs-target='#profile-modal-delete'>&#xE872;</a>";
	        	echo "</td>";
        	echo "</tr>";
       }
    }
?>
		</table>
</div>

<script type="text/javascript">
	//when Edit link is clicked
      $(".edit-profile").click(function(){
        $("#m-title").text("Edit profile");
        $("#b-save").val("Save Changes");
              
        var id =  $(this).attr("id");
        $.ajax({
            type:"POST", 
            url: "fetch-edit-profile.php",   
            data:{id:id},
            cache:false,
            dataType:"JSON",
            success:function(data) {

              $('#id_n').val(data.id);
              $('#title_n').val(data.title);
              $('#description_n').val(data.description);
              $('#dateDay_n').val(data.dateDay);
              $('#dateMonth_n').val(data.dateMonth);
              $('#dateposted_n').val(data.dateposted);
              $('#place_n').val(data.place_n);
              $('#para1_n').val(data.para1);
              $('#para2_n').val(data.para2);
              $('#para3_n').val(data.para3);
            }
          });
      });
	//when Add record is clicked
      $(".add-record").click(function(){
        $("#m-title").text("Register profile");
        $("#b-save").val("Save");
        $("#profile-form")[0].reset();      
       
      });
        //when delete icon is clicked
      $(".delete-profile").click(function(){
        var id =  $(this).attr("id");
        //alert(profile_ID);
        $("#to-delete").text("Profile ID: "+id);

        $(".btn-delete").click(function(){
          $.ajax({
            url:'delete-profile.php',   // backend file: where your codes for saving were written.
            method:'POST',
            data: {id:id},
            success: function(response){ 
              $.ajax({
                  type:"POST", 
                  url: "fetch-profile.php",   
                  data:{},
                  cache:false,
                  success:function(data) {
                    $("#news-list").html(data);
                  }
                });
            }
          });
        });
      });

</script>