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
    <title>Add</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">>
</head>
<body>
<?php
    $con=mysqli_connect("localhost","root","","phd_stu_details");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $guide = $_POST['guide'];
    $thesis = $_POST['thesis'];
    $reg_year = $_POST['reg_year'];
    $award_year = $_POST['award_year'];

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql = "INSERT INTO details(`Sid`, `Name`, `regno`, `Gname`, `thesis`, `yor`, `yoa`) VALUES 
    ('$id','$name','$rollno','$guide','$thesis','$reg_year','$award_year')";
    if(mysqli_query($con, $sql)){
            echo "<h1>Records were added successfully.</h1>";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
        ?>
        <a href="main.php"><button>Return</button></a>

        <?php

       
// Close connection
    mysqli_close($con);
?>
    
</body>
</html>
<?php
}
?>