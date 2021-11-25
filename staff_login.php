<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
               <img src="images/Madras_Institute_of_Technology_logo.png" alt=""/>
                <h3>Welcome</h3>
                <p>Enter to your login credentials to proceed further!</p>
               
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="" role="tab" aria-controls="home" aria-selected="true">Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="stu_login.php" role="tab" aria-controls="profile" aria-selected="false">Student</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">SignIn as a Faculty</h3>
                        <div class="row register-form">
                           
                            <div class="col-md-6">
                                <form action="server.php" method = "post">
                                <div class="form-group">
                                    <input type="text" name = "id" class="form-control" placeholder="Your ID *" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password"  name="pass" class="form-control" placeholder="Your Password *"  required />
                                </div>
                              
                                <input type="submit" class="btnRegister" name = "faculty"  value="Login"/>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    
    </div>				                            
</body>
</html>
