<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>
<body>
    <div class="container">
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>
<table width="100%" border="1" class="table table-bordered table-striped">
<thead>
<tr>
<th><strong>Id</strong></th>
<th><strong>Name</strong></th>
<th><strong>Register Number(If Present)</strong></th>
<th><strong>Guide Name</strong></th>
<th><strong>Department Name</strong></th>
<th><strong>Year Of Registration</strong></th>
<th><strong>Year Of Award of Phd</strong></th>
<th><strong>Thesis Title</strong></th>

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
<td align="center"><p style="font-size:25px"><?php echo $row["Sid"]; ?></p></td>
<td align="center"><?php echo $row["Name"]; ?></td>
<td align="center"><?php echo $row["regno"]; ?></td>
<td align="center"><?php echo $row["Gname"]; ?></td>
<td align="center"><?php echo $row["Deptname"]; ?></td>
<td align="center"><?php echo $row["yor"]; ?></td>
<td align="center"><?php echo $row["yoa"]; ?></td>
<td align="center"><?php echo $row["thesis"]; ?></td>

</tr>


<?php $count++; } 
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
