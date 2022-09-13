<?php 
include 'db.php';
session_start();
// $con = mysqli_connect("localhost","root","mukeshaeric");
// if($con){
//     echo"Connected Successfully";
// }
// else{
//     echo "No Connection";
// }

// mysqli_select_db($con,'sessionpratical');

$name=$_POST['username'];
$pass=$_POST['password'];

$sql = "SELECT * FROM user WHERE username='$name' && password='$pass'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username']=$name;
    header('location:view.php');
}
else{
    header('location:index.php');
}


?>