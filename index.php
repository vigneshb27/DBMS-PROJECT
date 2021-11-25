<?php
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:staff_login.php");  
} else {  
?>  

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Secured Page</title>
    
    <link rel="stylesheet" href="bootstrap.css">


</head>
<body>
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="view.php">View Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="edit.php">Edit Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="delete.php">Delete Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add.php">Add Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>
</ul>
<br><br>
</body>
</html>
<?php  
}  
?>  