<?php

session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:staff_login.php");  
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="tot_disp.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">PHD Student Details</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="phd_data_view.php">View <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="show_upd.php">Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="show_del.php">Delete</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main.php">Index</a>
      </li>
     
    </ul>
  </div>
</nav>
  <h1></h1>
    <div class="container">
      <div class="form-outline">
<input class="form-control" id="myInput" type="search" placeholder="Search.."></div>
<br>
<table  width="100%"  class = "styled-table" class = "table table-bordered table-striped">
<thead>
<tr>
<th><strong>Id</strong></th>
<th><strong>Name</strong></th>
<th><strong>Register Number</strong></th>
<th><strong>Guide Name</strong></th>
<th><strong>Thesis Title</strong></th>
<th><strong>Year Of Registration</strong></th>
<th><strong>Year Of Award of Phd</strong></th>

</tr>
</thead>
<tbody id="myTable">
<?php
$con = mysqli_connect("localhost","root","","phd_stu_details");
$count=1;
$sel_query="Select * from details;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center" ><p style="font-size:25px"><?php echo $row["Sid"]; ?></p></td>
<td align="center"><?php echo(($row["Name"] == NULL)?"NULL":$row["Name"]); ?></td>
<td align="center"><?php echo(($row["regno"] == NULL)?"NULL":$row["regno"]); ?></td>
<td align="center"><?php echo(($row["Gname"] == NULL)?"NULL":$row["Gname"]); ?></td>
<td align="center"><?php echo(($row["thesis"] == NULL)?"NULL":$row["thesis"]); ?></td>
<td align="center"><?php echo(($row["yor"] == NULL)?"NULL":$row["yor"]); ?></td>
<td align="center"><?php echo(($row["yoa"] == NULL)?"NULL":$row["yoa"]); ?></td>

</tr>
<?php 

$count++; } 
?>
</tbody>
</table>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</html>
</body>
<?php
}
?>