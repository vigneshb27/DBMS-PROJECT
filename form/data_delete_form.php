
<?php

session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:staff_login.php");  
} else {

$id=$_REQUEST['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

	<style>
		h4{
			margin-bottom : 20px;
		}
	</style>

</head>

<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action = "" method="post">
				
	
<label for="aadn"><h4>Are You sure about Deleting, if so click yes and Next:</h4></label><br>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="yes" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    YES
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="NO" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    NO
  </label>
</div>

             
			  <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name = "Submit">
							<span>
								Next
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>      
</form>
</fieldset>
</div>
<?php
if(isset($_POST["Submit"])){ 

    
$ki=$_POST['flexRadioDefault'];
if($ki=='yes'){
$un=$_SESSION['sess_user'];
$con = mysqli_connect("localhost","root","","phd_stu_details");
$query = "DELETE FROM phd_stu WHERE ID='".$id."';"; 
$resultt = mysqli_query($con,$query) or die (mysqli_error());

if($resultt){
    header("location:../show_del.php");
 }
}
else{
    echo "U will be redirected ";
    header("location:../show_del.php");  
}
}
}
?>