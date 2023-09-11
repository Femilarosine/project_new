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
			<nav id="sidebar" class="img" style="background-image: url(images/bg_1.jpg);">
				<div class="p-4">
		  		<h1><a href="index.html" class="logo"> HOSTEL</a></h1>
          <nav id="navbar" class="sidenav">
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa fa-chevron-right mr-3"></span> Hostel List</a>
	          </li>
	          <li>
	              <a class="nav-link" href="#list"><span class="fa fa-chevron-right mr-3"></span>Students List </a>
	          </li>
	          <li>
              <a href="logout.php"><span class="fa fa-chevron-right mr-3"></span>Logout</a>
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

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">



    <section>
          <h2 align="center">Hostel List</h2>
    <div class="container">
            <table class="table text-center table-striped table-hover table-bordered">
                <thead>
          <tr>
              
                    <th scope="col">ID</th>
                    <th scope="col">HOSTEL NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">INCHARGE</th>
                    <th scope="col">CONTACT</th>
                
                     <th scope="col" colspan="2">ACTION<br>
                        <i class="fa fa-edit" style="font-size:30px;color:black"></i>
                    <i class="fa fa-trash" style="font-size:30px;color:black"></i></th>
                    
          </tr>

      </thead>
</div>
</div>
</div>
      <?php
        require_once "conn.php";
         $query = "SELECT id,name,email,incharge,contact FROM `admin`";
           $result = $conn->query($query);
 
         while ($row = mysqli_fetch_array($result)) {
             ?>
             <tr>
             <td><?php echo $row["id"] ?></td>
                 <td><?php echo $row["name"] ?></td>
                 <td><?php echo $row["email"] ?></td>
                 <td><?php echo $row["incharge"] ?></td>
                 <td><?php echo $row["contact"] ?></td>
                <td><a href="adminedit.php?id=<?php echo $row["id"]; ?>" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit" style="font-size:30px;color:black"></i></a></td>
                        <td><a href="admindelete.php?id=<?php echo $row["id"]; ?>"  onclick="myFunction()" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o" style="font-size:30px;color:black"></i></a>

                              <script>
                        function myFunction() {
                        alert("Are sure you want to delete!");
                        }
                        </script></td></tr>

        <?php
         }
      ?>
  </table>
        </div>
    </section>


    <section>
   <div class="container">
    <h2 align="center" id="list">Students List</h2>

</div>
    <div class="row">
        <div class="col-sm-12">
  <table class='table table-secondary'>
      <thead>
          <tr>
              
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DOB</th>
                    <th scope="col">GENDER</th>
                    <th scope="col">HOSTEL</th>
                    <th scope="col">MAIL</th>
                    <th scope="col" colspan="2">ACTION<br>
                        <i class="fa fa-edit" style="font-size:30px;color:black"></i>
                    <i class="fa fa-trash" style="font-size:30px;color:black"></i></th>
          </tr>

      </thead>
</div>
</div>
</div>
      <?php
        require_once "conn.php";
         $query = "SELECT id,name,birthday,gender,hostel,mail FROM `students`";
           $result = $conn->query($query);
 
         while ($row = mysqli_fetch_array($result)) {
             ?>
             <tr>
             <td><?php echo $row["id"] ?></td>
                 <td><?php echo $row["name"] ?></td>
                 <td><?php echo $row["birthday"] ?></td>
                 <td><?php echo $row["gender"] ?></td>
                 <td><?php echo $row["hostel"] ?></td>
                 <td><?php echo $row["mail"] ?></td>
                   <td><a href="listedit.php?id=<?php echo $row["id"]; ?>" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit" style="font-size:30px;color:black"></i></a></td>
                        <td><a href="listdelete.php?id=<?php echo $row["id"]; ?>"  onclick="myFunction()" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o" style="font-size:30px;color:black"></i></a>

                              <script>
                        function myFunction() {
                        alert("Are sure you want to delete!");
                        }
                        </script></td>
                </tr>

        <?php
         }
      ?>
  </table>
        </div>
    </section>
        
        </div>
     <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <script src="side/js/jquery.min.js"></script>
    <script src="side/js/popper.js"></script>
    <script src="side/js/bootstrap.min.js"></script>
    <script src="side/js/main.js"></script>
  </body>
</html>