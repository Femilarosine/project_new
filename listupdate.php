
<?php
    require_once "conn.php";
    if(isset($_POST["name"]) && isset($_POST["birthday"]) && isset($_POST["gender"]) && isset($_POST["hostel"]) && isset($_POST["mail"])){
        $name = $_POST['name'];
        $date = $_POST['birthday'];
        $gender = $_POST['gender'];
        $hostel = $_POST['hostel'];
        $mail = $_POST['mail'];
      
    
        $sql = "UPDATE students SET 
        
            `name`= '$name',
            `birthday`= '$date',
            `gender`= '$gender',
            `hostel`= '$hostel',
            `mail`= '$mail'
        
       
             
              WHERE id= ".$_GET["id"];


       

        if(mysqli_query($conn, $sql)) {
            header("location: admin.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>





