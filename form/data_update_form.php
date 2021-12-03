<?php

$id=$_REQUEST['id'];
$con = mysqli_connect("localhost","root","","phd_stu_details");
$query = "SELECT * from phd_stu where ID='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
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
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action = "../phd_data_update.php" method="post">
				<span class="contact100-form-title">
					Update!
				</span>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">ID</span>
					<input class="input100" type="text" name="id" placeholder="Enter the ID" value="<?php echo $row['ID'];?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter the name" value="<?php echo $row['NAME'];?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Roll no</span>
					<input class="input100" type="text" name="rollno" placeholder="Enter the Roll Number" value="<?php echo $row['REG_NO'];?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Guide</span>
					<div>
						<select class="selection-2" name="guide">
							<option value="">Select your guide</option>
							<option value="DR. DHANANJAY KUMAR" <?php if($row['GUIDE'] == 'DR. DHANANJAY KUMAR'): ?> selected="selected"<?php endif; ?>>DR. DHANANJAY KUMAR</option>
							<option value="DR. RADHA SENTHILKUMAR" <?php if($row['GUIDE'] == 'DR. RADHA SENTHILKUMAR'): ?> selected="selected"<?php endif; ?>>DR. RADHA SENTHILKUMAR</option>
							<option value="Dr.P.Anandhakumar" <?php if($row['GUIDE'] == 'Dr.P.Anandhakumar'): ?> selected="selected"<?php endif; ?>>Dr.P.Anandhakumar</option>
							<option value="Dr.V.Rhymend Uthariaraj" <?php if($row['GUIDE'] == 'Dr.V.Rhymend Uthariaraj'): ?> selected="selected"<?php endif; ?>>Dr.V.Rhymend Uthariaraj</option>
							<option value="Dr.M.R. Sumalatha" <?php if($row['GUIDE'] == 'Dr.M.R. Sumalatha'): ?> selected="selected"<?php endif; ?>>Dr.M.R. Sumalatha</option>
							<option value="Dr.B.Vinayagasundaram" <?php if($row['GUIDE'] == 'Dr.B.Vinayagasundaram'): ?> selected="selected"<?php endif; ?>>Dr.B.Vinayagasundaram</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input">
					<span class="label-input100">Thesis</span>
					<textarea class="input100" name="thesis" placeholder="Title of THESIS" ><?php echo $row['TITLE_OF_THESIS'];?></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Registration Year</span>
					<input class="input100" type="text" name="reg_year" placeholder="Enter the Registration Year" value="<?php echo $row['REG_YEAR'];?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Year of Award</span>
					<input class="input100" type="text" name="award_year" placeholder="Enter the Year of Award" value="<?php echo $row['YEAR_OF_AWARD'];?>">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
