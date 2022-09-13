<?php
include 'db.php';
 session_start();
 if(!isset($_SESSION['username'])){
    header('location:index.php');
 }?>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------<title> Website Layout | CodingLab</title>------>
    <link rel="stylesheet" href="style1.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#"> STUDENT REGISTRATION </a>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center text-success"> Welcome ,<?php echo $_SESSION['username'] ?></h2>
        <a style="text-decoration: none;color: white;" href="logout.php">SignOut</a>
        <div class="card mt-5">
        <div class="card-header">All Student </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>FIRSTNAME</th>
                    <th>LASTNAME</th>
                    <th>REG NUMBER</th>
                    <th>DEPARTMENT</th>
                    <th colspan="2">ACTION</th>
                </tr>
                <?php
                $sql = "SELECT * FROM student";
                $query = mysqli_query($con,$sql);
                if($query){
                  while ($row=mysqli_fetch_assoc($query)) {
                    // code...
                    $id=$row['ID'];
                    $fname=$row['FNAME'];
                    $lname=$row['LNAME'];
                    $reg=$row['REG'];
                    $depart=$row['DEPART'];
                 
                 
                
               
                echo '<tr>
                    <td>  '.$id.'   </td>
                    <td>  '.$fname.'   </td>
                    <td>  '.$lname.'   </td>
                    <td>  '.$reg.'   </td>
                    <td>  '.$depart.'   </td>

                    <td> <a  href="delete.php?deleteid='.$id.'"><i class="btn btn-danger">Delete</i>  </td>
                    <td> <a  href="update.php?updateid='.$id.'"><i class="btn btn-success">Update</i>  </td>
                </tr> ';
                 } } ?>
                 
            </table>
        </div>
    </div>


      </div>
    </div>
  </div>
  


</body>
</html>
