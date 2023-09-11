
<?php
    require_once "conn.php";
    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["incharge"]) && isset($_POST["contact"])){
        $name = $_POST['name'];
        $mail = $_POST['email'];
        $incharge = $_POST['incharge'];
        $contact = $_POST['contact'];

      
    
        $sql = "UPDATE admin SET 
        
            `name`= '$name',
            `email`= '$mail',
            `incharge`= '$incharge',
            `contact`= '$contact'
        
       
             
              WHERE id= ".$_GET["id"];


       

        if(mysqli_query($conn, $sql)) {
            header("location: admin.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>





