<?php

include 'db.php';

if (isset($_POST['register'])) {
    // code...
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $reg = $_POST['regno'];
    $depart = $_POST['depart'];

    $sql="INSERT INTO student(FNAME,LNAME,REG,DEPART) 
              VALUES ('$fname','$lname','$reg','$depart')";
    $query = mysqli_query($con,$sql);
    if ($query) {
        // code...
        header('location:register.php');
    } else {
        // code...
        echo "Not Recorded".mysqli_error($con);
    }
    
}







 ?>