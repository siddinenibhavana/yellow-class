<?php session_start();
require_once('dbconnection.php');

// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="loginnext.html";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/icons/">
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" href="bootstrap/css/style1.css">
    <link rel="stylesheet" href="bootstrap/css/style2.css">
    <title>365movies.com</title>
    <link rel = "icon" href ="images1/images.png" type = "image/png"> 
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-b">
        <div class="container">
            <a href="index1.html" class="navbar-brand text-white"><img src="images1/images.png" width="40" height="40" class = "rounded-circle" alt = "Rounded Image">&emsp;<img src="images1/title.gif" width="300" height="60"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#travel-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="travel-navbar"></div>
        </div>
    </nav>
    <!--loginbox-->
    <section class="fullscreen-landing1">
    <div class="container1">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Login</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form name="login" action="" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" name="uemail" class="form-control" placeholder="Email id" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <center><input type="submit" name="login" value="Login" class="btn login_btn"></center>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="signin.php">Sign Up</a>
                    </div><br>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--main footer-->
    <footer class="bg-b text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="font-weight-bold"><i class="fa fa-film fa-1x m-3"></i>Follow 365Movies.com</h4>
                    <a href="#"><i class="fab fa-facebook-square fa-2x m-2"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-2x m-3"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-2x m-3"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x m-3"></i></a>
                    <h6>Copyright &copy; 2020 , 365Movies.com Pvt Ltd<br>All Rights Reserved<br>Developed & Maintained by Ml group</h6>
                </div>
            </div>
        </div>
    </footer>
<!-- Bootstrap Js files -->
<script src="bootstrap/js/jquery.js"></script>  
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/mdb.js"></script>
</body>
</html>