<?php
session_start();
$id = '';
$pass = '';

$db = mysqli_connect('localhost','root','','phd_stu_details') or die("Could not connect to database");

if(isset($_POST['faculty']))
{
    $id = mysqli_real_escape_string($db,$_POST['id']);
    $pass = mysqli_real_escape_string($db,$_POST['pass']);

    $query = "SELECT * FROM faculty_login WHERE id='$id' AND password='$pass'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1){
           // $_SESSION['username'] = $username;
           // $_SESSION['success'] = "You have now logged in";
            header('location: index.php');

    }else{
           // array_push($errors,"Wrong username/password combination");
           echo '<script type="text/javascript">alert("Wrong id and password combination")</script>';
           
           
        }
}


if(isset($_POST['student']))
{
    $id = mysqli_real_escape_string($db,$_POST['id']);
    $pass = mysqli_real_escape_string($db,$_POST['pass']);

    $query = "SELECT * FROM students_login WHERE id='$id' AND password='$pass'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1){
          //  $_SESSION['username'] = $username;
          //  $_SESSION['success'] = "You have now logged in";
            header('location: index.php');

    }else{
           // array_push($errors,"Wrong username/password combination");
           echo '<script type="text/javascript">alert("Wrong id and password combination")</script>';
        }
}