<!DOCTYPE html>
<html>
    <head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reqister form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

        <link href="assets/css/style.css" rel="stylesheet">

    <?php
require_once "link.php";
?>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="side/css/style.css">
    
  </head>
  <body>
        <div class="container d-flex align-items-stretch">
            <nav id="sidebar" class="img" style="background-image: url(side/images/bg_1.jpg);">
                <div class="p-4">
                <h1><a href="index.html" class="logo"> HOSTEL</a></h1>
          <nav id="navbar" class="sidenav">
            <ul class="list-unstyled components mb-5">
              <li class="active">
                <a href="#"><span class="fa fa-chevron-right mr-3"></span>Profile</a>
              </li>
              <li>
                  <a class="nav-link" href="logout.php"><span class="fa fa-chevron-right mr-3"></span>Logout</a>
              </li>
            </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

            

            <div class="footer">
                <p>
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        </p>
            </div>

          </div>
        </nav>

   

    <section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
  
      <div class="col-lg-12 align-center">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><img src="images.jpeg" width="50%" height="50%">Student Profile</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
     


<?php
session_start();

include "conn.php";

$mail= $_SESSION['name'];

//selecting data associated with this particular id
 $query = "SELECT id,name,birthday,gender,hostel,mail FROM `students` WHERE mail='$mail'";
           $result = $conn->query($query);
 
         while ($row = mysqli_fetch_array($result))
{
  ?>  
      <tr>
                <th width="30%">ID</th>
                <td width="2%">:</td>
                <td><?php echo $row['id'] ?></td>
              </tr>
              <tr>
                <th width="30%">NAME</th>
                <td width="2%">:</td>
                <td><?php echo $row['name'] ?></td>
              </tr>
              <tr>
                <th width="30%">DOB</th>
                <td width="2%">:</td>
                <td><?php echo $row['birthday'] ?></td>
              </tr>
              <tr>
                <th width="30%">GENDER</th>
                <td width="2%">:</td>
                <td><?php echo $row['gender'] ?></td>
              </tr>
              <tr>
                <th width="30%">HOSTEL</th>
                <td width="2%">:</td>
                <td><?php echo $row['hostel'] ?></td>
              </tr>
              <tr>
                <th width="30%">MAIL</th>
                <td width="2%">:</td>
                <td><?php echo $row['mail'] ?></td>
              </tr>
            </table>
          </div>
        </div>
        <?php
         }
        
        ?>
         
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
            </div>
        </div>
  </div>
</section>
</div>
</body>
</html>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <script src="side/js/jquery.min.js"></script>
    <script src="side/js/popper.js"></script>
    <script src="side/js/bootstrap.min.js"></script>
    <script src="side/js/main.js"></script>




   