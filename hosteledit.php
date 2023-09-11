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
</head>

<body>

<?php
require_once "conn.php";

                $id = $_GET['id'];
                $sql_query ="SELECT * FROM students WHERE id = '$id'";
             
                            $retval = mysqli_query($conn , $sql_query);
                    while ($row = $retval -> fetch_assoc()) { 

                                $id = $row['id'];
                                $name = $row['name'];
                                $date = $row['birthday'];
                                $Gender = $row['gender'];
                                $mail = $row['mail'];
                                $hostel = $row['hostel'];
            ?>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form action="hostelupdate.php?id=<?php echo $id; ?>" method="POST"  enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name" value="<?php echo $name ?>" required>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input type="date" placeholder="BIRTHDATE" name="birthday" value="<?php echo $date ?>" required>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" required>
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option value="Male" <?php if($Gender == "Male"){ echo "Selected"; } ?>>Male</option>
                                            <option value="Female" <?php if($Gender == "Female"){ echo "Selected"; } ?>>Female</option>
                                            <option value="Other" <?php if($Gender == "Other"){ echo "Selected"; } ?>>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select4 js-select-simple select--no-search">
                                <select name="hostel">
                                    <option disabled="disabled" selected="selected">HOSTELS</option>
                                    <option value="AAH" <?php if($hostel == "AAH"){ echo "Selected"; } ?>>AAH</option>
                                    <option value="PDH" <?php if($hostel == "PDH"){ echo "Selected"; } ?>>PDH</option>
                                    <option value="Joachim Villa/ Ennagam" <?php if($hostel == "Joachim Villa/ Ennagam"){ echo "Selected"; } ?>>Joachim Villa/ Ennagam</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input type="email" name="mail" placeholder="MAIL" value="<?php echo $mail ?>" required>
                                </div>
                            </div>
</div>
<div class="row">
<div class=col-sm-4>
                        
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Submit</button></div>&nbsp&nbsp
                            <div class="col-sm-4"><input type="button"  class="btn btn--radius-2" style="color:white;background-color:black;" value="Back!" onclick="history.go(-1)"></div>
                     
</div>
                    </form>
                    <?php
}
                    ?>
                </div>
</div>
            </div>
        </div>
    </div>

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





