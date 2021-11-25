
<?php

session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {

$id=$_REQUEST['id'];
?>

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
<p>Welcome <nbsp><nbsp> Admin </p>
<div align="center">
<fieldset>
<form name="myform" action="" method="POST">
<label for="aadn">Are You sure about Deleting,If so click yes and Next:</label><br>
<label for="opt">Option:</label><br>
       <input type="radio" name="opt" value="yes">
       <label for="yes">YES</label><br>
       <input type="radio" name="opt" value="no">
       <label for="no">NO</label><br>

              <input type="submit"  name="Submit" value="Next" />
       <input type="reset" value="reset">       
</form>
</fieldset>
</div>
<?php
if(isset($_POST["Submit"])){ 

    
$ki=$_POST['opt'];
if($ki=='yes'){
$un=$_SESSION['sess_user'];
$con = mysqli_connect("localhost","root","","phd_stu_details");
$query = "DELETE FROM details WHERE Sid='".$id."';"; 
$resultt = mysqli_query($con,$query) or die (mysqli_error());

if($resultt){
    echo "Record Deleted Successfully!!!";
 }
}
else{
    echo "U will be redirected ";
    header("location:index.php");  
}
}
}
?>