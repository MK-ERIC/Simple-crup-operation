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
      <div class="col-md-4"></div>
      <div class="col-md-4">

        <label>STUDENT REGISTRATION FORM</label>

        <form method="POST" action="reg.php">
          <div class="form-group">
            <label style="margin-right: 400px;">FirstName</label>
            <input type="text" placeholder="Enter FirstName" class="form-control" name="fname">
          </div>
          <div class="form-group">
            <label style="margin-right: 400px;">LastName</label>
            <input type="text" placeholder="Enter FirstName" class="form-control" name="lname">
          </div>
          <div class="form-group">
            <label style="margin-right: 400px;">RegNumber</label>
            <input type="text" placeholder="Enter FirstName" class="form-control" name="regno">
          </div>
          <div class="form-group">
            <label style="margin-right: 400px;">Department</label>
            <select class="form-control" name="depart">
              <option value="ict">ICT</option>
              <option value="eee">EEE</option>
              <option value="civil eng">CIVIL ENG</option>
              <option value="veternary">VETERNARY</option>
            </select>
          </div><br>
          <div class="form-group">  
            <button class="btn btn-success" name="register">REGISTER</button>
          </div
                  
        </form>

      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
  


</body>
</html>
