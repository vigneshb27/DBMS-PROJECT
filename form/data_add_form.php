

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
			<form class="contact100-form validate-form" action = "../phd_data_add.php" method="post">
				<span class="contact100-form-title">
					Add!
				</span>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">ID</span>
					<input class="input100" type="text" name="id" placeholder="Enter the ID" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter the name" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Roll no</span>
					<input class="input100" type="text" name="rollno" placeholder="Enter the Roll Number" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Guide</span>
					<div>
						<select class="selection-2" name="guide">
							<option value="">Select your guide</option>
							<option value="DR. DHANANJAY KUMAR" >DR. DHANANJAY KUMAR</option>
							<option value="DR. RADHA SENTHILKUMAR">DR. RADHA SENTHILKUMAR</option>
							<option value="Dr.P.Anandhakumar" >Dr.P.Anandhakumar</option>
							<option value="Dr.V.Rhymend Uthariaraj" >Dr.V.Rhymend Uthariaraj</option>
							<option value="Dr.M.R. Sumalatha" >Dr.M.R. Sumalatha</option>
							<option value="Dr.B.Vinayagasundaram">Dr.B.Vinayagasundaram</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input">
					<span class="label-input100">Thesis</span>
					<textarea class="input100" name="thesis" placeholder="Title of THESIS" ></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Registration Year</span>
					<input class="input100" type="text" name="reg_year" placeholder="Enter the Registration Year" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Year of Award</span>
					<input class="input100" type="text" name="award_year" placeholder="Enter the Year of Award" >
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
