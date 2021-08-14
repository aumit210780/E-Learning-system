<?php 
session_start();

  include ("connection.php");
  include ("student_function.php");

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>E_Learning | Student Sign Up</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <style type="text/css" media="screen">
    body{
      background: pink;
    }
    .forom{
      margin-left: 50px;
      margin-right: 50px;
    }

     
   </style>
    
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a style="color: white; font-style: bold;" class="navbar-brand" href="sign_up_for_student.php"><big><h1 align=center>Student Sign Up</h1></big></a>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li><li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a style="float: left; margin-left: 450px ; " class="nav-link active" aria-current="page"  tabindex="-1" href="index.php">Home</a>
            </li>
            <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>   
          </ul>
        </div>
      </div>
    </nav>
  </div>
</nav>
      <h2 align="center"><b>Enter Your information</b></h2>
      <div>
    <?php 
      if($_SERVER['REQUEST_METHOD'] == "POST")
        {
          //Something was posted
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $clgname = $_POST['clgname'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $dob = $_POST['dob'];

          // Checking query if the same email exists on DB or not for instructor table
          $check_t_query = "SELECT `INSTRUCTOR_EMAIL` FROM `instructor` WHERE '$email' = `instructor`.`INSTRUCTOR_EMAIL`";
          $check_t_result = mysqli_query($con,$check_t_query);

          // Checking query if the same email exists on DB or not for student table
          $check_s_query = "SELECT `STUDENT_EMAIL` FROM `student` WHERE '$email' = `student`.`STUDENT_EMAIL`";
          $check_s_result = mysqli_query($con,$check_s_query);

          //Email existance checking 
          if(mysqli_num_rows($check_t_result)==0 && mysqli_num_rows($check_s_result)==0)
          {
            if(!empty($fname) && !empty($lname) && !empty($clgname) && !empty($email) && !empty($password) &&   !empty($dob) && !is_numeric($fname) && !is_numeric($lname))
            {

              //Save to Database
              $query = "insert into student(STUDENT_FIRST_NAME,STUDENT_LAST_NAME,STUDENT_EMAIL,STUDENT_PASSWORD,COLLEGE_NAME,DATE_OF_BIRTH) values('$fname','$lname','$email','$password','$clgname','$dob')";

              mysqli_query($con,$query);

              //Successfully Student information stored into DB now redirecting to Student Login Page
              header("Location: login_for_student.php");
              die;

            }
            else
            {
              // echo "<p >Please enter valid information !</p>";
              $_SESSION['serror'] = "Please enter valid information!";
            }
          }
          else
          {
            // echo '<p >Email is already taken !</p>';
            $_SESSION['serror'] = "Email is already taken!";
          }
        }

     ?>
  </div>
<form class = "forom" method="post">
  <div class="mb-3">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" aria-describedby="fname" name="fname" required>
  </div>
   <div class="mb-3">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" aria-describedby="lname" name="lname" required>
  </div>
   <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
   <div class="mb-3">
    <label for="clgname" class="form-label">College Name</label>
    <input type="text" class="form-control" id="clgname" aria-describedby="clgname" name="clgname" required>
  </div>
   <div class="mb-3">
    <label for="dob" class="form-label">Date of Birth</label>
    <input type="text" class="form-control" id="dob" aria-describedby="clgname" name="dob" required>
  </div>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Agree our terms & Conditions</label>
  </div>
  <div>
    <?php 
      if(isset($_SESSION['serror']))
      {
        $serror=$_SESSION['serror'];
        echo '<p >';
        echo $serror;
        echo '</p>';
        unset($_SESSION['serror']);
      }
     ?>

  </div>
 <button type="submit" class="btn btn-primary">Submit</button>
<p>Already a Member ? <a style="text-decoration: none;" href="login_for_student.php">Sign In</a></p>
</form>
    <<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
