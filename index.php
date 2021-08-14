<!DOCTYPE html>
<html>
<head>
    <title>E_Learning</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{
            background-image: url('finn.png');
            /* background-attachment: fixed; */
            background-size: 100%;
            background-repeat: no-repeat;

        }
        .logo{
          float: left; 
          margin-left: 100px; 
          margin-top: 120px; 
          margin-right: 10px; 
          background-attachment: fixed;
        }
        .get_er_uporer_likha{
          float: left;

          margin-left: -140px; 
          margin-top: 90px;
          font-style: italic;

        }
        .welcome{
          float: right;
          font-style: italic;
          color: #7D3C98;
          margin-top: 70px;
          margin-right: 330px;
        }
        .pic{
          float: right;
          margin-left: 20px;

        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #ABEBC6;
            color: black;
            text-align: center;
        }
    </style> 

</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a style="color:#1ABC9C; font-style: bold;" class="navbar-brand" href="#"><big>E_Learning Online Course</big></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
       
        <li class="nav-item dropdown">
          <a style="color:#3BCF0F;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            For Students
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="sign_up_for_student.php">Sign Up</a></li>
            <li><a class="dropdown-item" href="login_for_student.php">Login</a></li>
            <li><a class="dropdown-item" href="#">Your Courses</a></li>
            <li><a class="dropdown-item" href="#">Find Courses</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">     </a>
        </li>
         <li class="nav-item dropdown">
          <a style="color:#3BCF0F;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            For Teachers
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="sign_up_for_teacher.php">Sign Up</a></li>
            <li><a class="dropdown-item" href="login_for_teacher.php">Login</a></li>
            <li><a class="dropdown-item" href="#">Upload Courses</a></li>
            <li><a class="dropdown-item" href="#">Your Courses</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <li class="nav-item">
          <a style="color:#3BCF0F;" class="nav-link active" aria-current="page" href="course_dashboard.php"> Courses </a>
          </li>
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
           <a class="nav-link active" aria-current="page" href="sign_in.php">Sign In</a>
        </li>
      </ul>

      <form class="d-flex">

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <a href="sign_up_for_student.php" button style="float: left; margin-left: 550px; margin-top: 140px;" type="button" class="btn btn-primary btn-lg">Get Started!</button></a>
  <h2 style="color: white;" class = "get_er_uporer_likha">New learner ?<h2>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <div class="footer">
  <h4>&copy;E_Learning Officials 2021</h4>
</div>
</body>

</html>
