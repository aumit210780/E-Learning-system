<?php 
  session_start();
  include("connection.php");
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $cc = $_POST['cc'];
    $ct = $_POST['ct'];
    $cdes = $_POST['cdes'];
    $cp = $_POST['cp'];
    $pass = $_POST['password'];
    $f_name =  $_SESSION['t_f_name'];
    $l_name =  $_SESSION['t_l_name'];
    $name = $f_name." ".$l_name;
    
    $query = "SELECT * FROM `course` WHERE `COURSE_CODE` = '$cc' limit 1";
    $result= mysqli_query($con, $query);
    if(mysqli_num_rows($result) < 1)
    {
      if(!empty($cc) && !empty($ct) && !empty($cdes) && !empty($cp) && !empty($pass))
      {
        if($pass == $_SESSION['t_pass'])
        {
          $query = "INSERT INTO `course`(`COURSE_CODE`,`COURSE_TITLE`,`COURSE_DESC`,`COURSE_INSTRUCTOR`,`COURSE_PRICE`) VALUES ('$cc','$ct','$cdes','$name','$cp')";
          mysqli_query($con, $query);
          header("Location: teacher_home.php");
          die;
        }
        else
        {
          // echo "<p>Wrong Password!</p>";
          $_SESSION['cerror'] = "Wrong Password!";
        }
      }
      else
      {
        // echo "<p>Fill with valid information!</p>";
        $_SESSION['cerror'] = "Fill with valid information!";
      }
    }
    else
    {
      $_SESSION['cerror'] = "Course is already uploaded!";
    }
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>E_Learning | Course Upload</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
      body{
         background: #2E4053;
         color: white;
      }
      .forp{
        align-content: center;
        margin-top: 70px;
        margin-left: 70px;
        margin-right: 70px;
      }
      .b{
        color: #DE3163;
        margin-top: 10px;
        font-style: italic;
      }

    </style> 
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a style="color: white; font-style: bold;" class="navbar-brand" href="upload_course.php"><big><h1 align=center>Course Upload</h1></big></a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
          <a class="nav-link active" aria-current="page" href="#">     </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a style="float: right; margin-left: 350px;" class="nav-link active" aria-current="page"  tabindex="-1" href="index.php">Home</a>
            </li>
            <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
            <li class="nav-item">
              <a style="float: right;" class="nav-link active" aria-current="page" href="teacher_logout.php">Log-out</a>
            </li>     
          </ul>
        </div>
      </div>
    </nav>
  </div>
</nav>
  <h3 class="b" align="center">Please Enter the following information of your course<br> & <br>Click on the "Choose File" button to upload files:</h3>

 <form class = "forp" method="post">
    <div class="mb-3">
      <label for="cc" class="form-label">Course Code</label>
      <input type="text" class="form-control" id="cc" aria-describedby="cc" name="cc" required>
    </div>
     <div class="mb-3">
      <label for="ct" class="form-label">Course Title</label>
      <input type="text" class="form-control" id="ct" aria-describedby="ct" name="ct" required>
    </div>
     <div class="mb-3">
      <label for="cdes" class="form-label">Course_Description</label>
      <input type="text" class="form-control" id="cdes" aria-describedby="cdes" name="cdes" required>
    </div>
    <div class="mb-3">
      <label for="cp" class="form-label">Course_Price</label>
      <input type="text" required="required" class="form-control" id="cp" aria-describedby="cp" name="cp" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="d-grid gap-2">
    <input type="file" id="myFile" name="filename">
    <div>
    <?php 
      if(isset($_SESSION['cerror']))
      {
        $cerror=$_SESSION['cerror'];
        echo '<p >';
        echo $cerror;
        echo '</p>';
        unset($_SESSION['cerror']);
      }
     ?>
  </div>
    <input class="btn btn-primary" type="submit">
</form>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <div class="footer">
  <!-- <h4>&copy;E_Learning Officials 2021</h4> -->
</div>
</body>

</html>
