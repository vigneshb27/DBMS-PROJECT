
<?php  
if(isset($_POST["faculty"])){  
      
  
if(!empty($_POST['id']) && !empty($_POST['pass'])) {  
    $user=$_POST['id'];  
    $pass=$_POST['pass'];  
  
    $con = mysqli_connect("localhost","root","","phd_stu_details");

  
    $query=mysqli_query($con,"SELECT * FROM faculty_login WHERE id='".$user."' AND pass='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['id'];  
    $dbpassword=$row['pass'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: main.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  

else if(isset($_POST['student']))
{
    
      
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['id'];  
        $pass=$_POST['pass'];  
      
        $con = mysqli_connect("localhost","root","","phd_stu_details");
        
        $query=mysqli_query($con,"SELECT * FROM students_login WHERE id='".$user."' AND pass='".$pass."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row['username'];  
        $dbpassword=$row['password'];  
        }  
      
        if($user == $dbusername && $pass == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_user']=$user;  
      
        /* Redirect browser */  
        header("Location: dash.php");  
        }  
        } else {  
        echo "Invalid username or password!";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    }    
    