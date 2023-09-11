<?php
session_start();

include "conn.php";

if (!isset($_SESSION['username'])) {
    header('location:');
    exit;
}
?>

<?php
//getting id from url
 $id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT reg_id,stu_name,stu_photo,group_photo,birth_cert,address_proof,income_proof,categ_certi FROM nursey_admission WHERE id=$id");
// print_r($result);exit;
while($res = mysqli_fetch_array($result))
{
    
    $reg_id = $res['reg_id'];
    $stu_name = $res['stu_name'];
    $stu_photo = $res['stu_photo'];
    $group_photo = $res['group_photo'];
    $birth_cert=$res['birth_cert'];
    $address_proof=$res['address_proof'];
    $income_proof=$res['income_proof'];
    $categ_certi = $res['categ_certi'];
//   print_r($res); 
    
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Online Admission Registration</title>
   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">

</head>

<body>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #090707;
        margin-bottom: 14px;
    }

    th,
    td {
        text-align: center;
        padding: 6px;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }
    .alert1 {
        color: red;
    }

    .error {
        color: red;
    }

    input.error {
        border: 1px solid red;
        font-weight: 300;
        color: red;
    }

    select.error {
        border: 1px solid red;
        font-weight: 300;
        color: red;
    }
   .form-header {
    background-image: linear-gradient(190deg, #fff, #c8ff00);
    padding: 5px;
    box-shadow: 0px 2px 10px 0px rgba(0,0,0,.5);
}
 body{
	font-family: 'Poppins', sans-serif;
	font-size: 16px;
	line-height: 24px;
	margin: 0px;
	padding: 0px;
}
fieldset{
	display: block;
    margin-inline-start: 2px;
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.75em;
    padding-inline-end: 0.75em;
    padding-block-end: 0.625em;
    min-inline-size: min-content;
    border-width: 2px;
    border-style: groove;
    border-color: rgb(222, 255, 100);
    border-image: initial;
    border-radius: 5px;
    padding-top: 15px;
}
legend {
    float: none;
    width: 100%;
    margin-bottom: 0px;
    display: block;
    padding: 5px 10px;
    background-color: #003cf2;
    color: #fff;
    font-size: 18px;
    text-align: center;
    font-weight: 600;
}
.form-header .row{
	align-items: center;
}
.content-inner{
	background-image: linear-gradient(120deg, #fff, #e7f5f8);
	padding: 20px 15px;
	box-shadow: inset 0px 0px 10px 2px rgba(57,53,191,0.5);
	margin-bottom: 15px;
	border-radius: 0px 0px 5px 5px;
}
.admission-form{
 	background-color: #e7f5f8;
 	padding-bottom: 20px;
}   
.admission-form h3{
	text-align: center;
	padding: 15px 0px 10px;
}
.admission-form input{

}
.form-group{
	margin-bottom: 10px;
}
.form-group .form-control{
	font-size: 14px;
	color: #111;
	padding: 5px 8px;
	border-radius: 2px;
}
.form-group .form-control:focus{
	outline: none;
	box-shadow: none;
}
.form-group .row{
	align-items: center;
}
.form-group label{
	font-size: 15px;
	font-weight: 600;
}
fieldset .form-control{
	margin-bottom: 8px;
}
    </style>

    <header class="form-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="title-img">
                        <img class="img-fluid" src="https://loretoshimla.org/admission/nursery/public/images/title.png">
                    </div>
                </div>
            </div>
        </div>
    </header>

<section class="admission-form">
    <div class="container">
        <div class="content-inner">
            <h3 class="filehead">NURSERY DOWNLOAD FORM 2024 - 2025</h3>
            <form action="" method="post" id="admissionForm" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 parents father">
                        <fieldset>
                            <legend>DOCUMENTS</legend>
                            
                            <center><img src="https://loretoshimla.org/admission/nursery/public/uploads/studentphoto/<?php echo $stu_photo; ?>" alt="Student Photo" width="200px;"></center>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                       <label for="dob">Student Name</label>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                            <input class="form-control" type="text" id="stu_name" name="stu_name" value="<?php echo $stu_name;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                       <label for="dob">Student Register Number</label>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                            <input class="form-control" type="text" id="reg_id" name="reg_id" value="<?php echo $reg_id;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                       <label for="dob">Student Photo</label>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                            <a href="https://loretoshimla.org/admission/nursery/public/uploads/studentphoto/<?php echo $stu_photo; ?>" download><i class="fa fa-download" aria-hidden="true"></i>Click here for Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                       <label for="dob">Family Group Photo</label>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                            <a href="https://loretoshimla.org/admission/nursery/public/uploads/groupphoto/<?php echo $group_photo; ?>" download><i class="fa fa-download" aria-hidden="true"></i>Click here for Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                       <label for="dob">Student Birth Certificate</label>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                            <a href="https://loretoshimla.org/admission/nursery/public/uploads/birthcertificate/<?php echo $birth_cert; ?>" download><i class="fa fa-download" aria-hidden="true"></i>Click here for Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                       <label for="dob">Student Address Proof</label>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                            <a href="https://loretoshimla.org/admission/nursery/public/uploads/addressproof/<?php echo $address_proof; ?>" download><i class="fa fa-download" aria-hidden="true"></i>Click here for Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                       <label for="dob">Student Income Proof</label>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                            <a href="https://loretoshimla.org/admission/nursery/public/uploads/incomeproof/<?php echo $income_proof; ?>" download><i class="fa fa-download" aria-hidden="true"></i>Click here for Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                       <label for="dob">Student Category Certificate</label>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                            <a href="https://loretoshimla.org/admission/nursery/public/uploads/categorycertificate/<?php echo $categ_certi; ?>" download><i class="fa fa-download" aria-hidden="true"></i>Click here for Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                </div>

            </form>
        </div>
    </div>
    </div>
</section>
</body>

</html>