<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>register</title>

    <!-- Icons font CSS-->
    <link href="reg/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="reg/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="reg/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="reg/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="reg/css/main.css" rel="stylesheet" media="all">
    <?php
include "link.php";

    ?>
     <style>
          .container{
            padding-top:30px;
            padding-bottom:30px;
            margin-top:100px;
          }
          </style>
</head>

<body>

<?php
require_once "conn.php";

                $id = $_GET['id'];
                $sql_query ="SELECT * FROM admin WHERE id = '$id'";
             
                            $retval = mysqli_query($conn , $sql_query);
                    while ($row = $retval -> fetch_assoc()) { 

                                $id = $row['id'];
                                $name = $row['name'];
                                $mail = $row['email'];
                                $incharge = $row['incharge'];
                                $contact = $row['contact'];
                            
            ?>
    <section class="site-section form-holder-2" id="section-about">
          <div class="container"  style="background-color:lightblue;border-radius:50px;">

            <div class="row justify-content-center">

              <div class="col-md-6">

                <!-- <h2 class="heading">About</h2> -->
                 <form action="adminupdate.php?id=<?php echo $id; ?>" method="POST"  enctype="multipart/form-data">
                      <div class="inner">
                        <div class="wizard-header">
                  <h3 class="heading text-center">Update</h3>
 
                </div>
                
                <div class="form-row">
                  <div class="form-holder form-holder-2 ">
                    <fieldset>
                      <legend>Hostel Name</legend>
                      <input type="text" class="form-control" id="first-name" name="name" value="<?php echo $name; ?>" required>
                    </fieldset>
                  </div>
                  
                </div>
                <div class="form-row">
                  <div class="form-holder form-holder-2">
                    <fieldset>
                      <legend>Your Email</legend>
                      <input type="text" name="email" id="your_email" class="form-control" placeholder="example@email.com" value="<?php echo $mail; ?>" required>
                    </fieldset>
                  </div>
                </div>
                                <div class="form-row">
                  <div class="form-holder form-holder-2">
                    <fieldset>
                      <legend>Incharge</legend>
                      <input type="text" class="form-control" id="in" name="incharge" value="<?php echo $incharge; ?>" required>
                    </fieldset>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-holder form-holder-2">
                    <fieldset>
                      <legend>Phone Number</legend>
                      <input type="text" class="form-control" id="phone" name="contact" placeholder="8889997777" value="<?php echo $contact; ?>" required>
                    </fieldset>
                  </div>
                </div>
              <br>
                <div class="form-row">
                  <div class="form-holder form-holder-2">
                  <input type="submit" value="submit" name="submit" class="btn btn-primary btn-md">&nbsp&nbsp<input type="button"  class="btn btn--radius-2 btn-dark" value="Back!" onclick="history.go(-1)">
                  </div>
                </div>
              </div>
          </div>
                </form>
              </div>
            </div>
          </div>
        </section>
<?php
}
?>
    <!-- Jquery JS-->
    <script src="reg/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="reg/vendor/select2/select2.min.js"></script>
    <script src="reg/vendor/datepicker/moment.min.js"></script>
    <script src="reg/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="reg/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->





