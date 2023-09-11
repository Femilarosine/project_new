


<?php
session_start();
if(count($_POST)>0)
{
include('conn.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["name"];
    $password=$_POST["incharge"];
  

    $sql="select * from admin where name ='".$username."' AND incharge='".$password."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    if ($row) {
        $_SESSION['name'] = $row['name'];
        header("location:hostel.php");
    }else{
        echo('Incorrect user');
    }
}
}
?>
 
 

 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="assets/img/logo.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="log/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="log/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/css/util.css">
    <link rel="stylesheet" type="text/css" href="log/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('log/images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" name="f1" action = "#" onsubmit = "return validation()" method = "POST">
                    <span class="login100-form-logo">
                    <img rel="icon" type="image/png" src="assets/img/logo.png" width="60px" height="60px">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="name" placeholder="Enter the Hostel name">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="incharge" placeholder="Enter the Incharge name">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>


                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="row">
                            <div class="col-sm-4">
                        <button class="login100-form-btn">
                            Login
                        </button>
</div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="log/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/bootstrap/js/popper.js"></script>
    <script src="log/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/daterangepicker/moment.min.js"></script>
    <script src="log/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="log/js/main.js"></script>

</body>
</html>

