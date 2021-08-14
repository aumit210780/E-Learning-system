
<?php  
session_start();

	include ("connection.php");
	include ("teacher_function.php");

	//Checking the user is set or not using check_login function
	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E_Learning | Teacher Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<style>

		 body{
            background: #E9F7EF ;
            /* background-attachment: fixed; */
            background-size: auto;
            background-repeat: no-repeat;

        }
        .table_1{
        	margin-left: 150px;
        	margin-right: 400px;
        	width: 90%;

        }
        table, td, th {  
			border: 1px solid blue;
			text-align: left;
			padding: 40px;
		}
        table {
			/* border-collapse: collapse; */
			width: 100%;
			}
			#g{
				float: left;

			}
			.pol{
				  background-color: lightcoral;
				  width: 1020px;
				  border: 5px red;
				  height: 200px;
				  padding: 50px;
				  margin-left: 300px;
				
			}
			.boll{
				  background-color: #F9E79F;
				  width: 1020px;
				  border: 5px red;
				  height: 200px;
				  padding: 50px;
				  margin-left: 300px; 
			}
		/* 	.nav-item{
				padding: 10px;
			} */
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">	  
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a style="color: white; font-style: bold;" class="navbar-brand" href="teacher_home.php"><big><h1 align=center>Welcome
				<?php
					echo $user_data['INSTRUCTOR_FIRST_NAME'], " ", $user_data['INSTRUCTOR_LAST_NAME']; 
				?></h1></big></a>
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
							<a style="float: right; margin-left: 250px;" class="nav-link active" aria-current="page"  tabindex="-1" href="index.php">Home</a>
						</li>
						<!-- <li class="nav-item">
							<a style="float: right;" class="nav-link active" aria-current="page" href="upload_for_teachers.php">Add-Course</a>
						</li> -->
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
<form style = "float: left; height: 100%;" method="post" class="border shadow p-5 rounded" style="width: 100%;">
<ul style = "margin-top: -30px; "class="nav flex-column" id="g">
  <li class="nav-item">
    <a style="padding: 20px;" class="nav-link active" aria-current="page" href="teacher_course.php">Your Courses</a>
  </li>
  <!--   <li class="nav-item">
    <a style="padding: 20px;"class="nav-link active" aria-current="page" href="teacher_course.php">Add-Course</a>
  </li> -->
   <li class="nav-item">
    <a style="padding: 20px;"class="nav-link active" aria-current="page" href="#">Communication</a>
  </li>
   <li class="nav-item">
    <a style="padding: 20px;"class="nav-link active" aria-current="page" href="#">Performances</a>
  </li>
   <li class="nav-item">
    <a style="padding: 20px;"class="nav-link active" aria-current="page" href="#">Tools</a>
  </li>
   <li class="nav-item">
    <a style="padding: 20px;"class="nav-link active" aria-current="page" href="#">Resources</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
    </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
    </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
    </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
    </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
    </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
    </li> <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
    </li> 
    <li style="padding-bottom: 10px;" class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
</ul>
</form>
<h1 align="center">Your Courses</h1>
<div class="pol">
	<img style="margin-right: 200px;" src="fff.png" alt="" height="100px" width="100px">
	<h3 style=" margin-left: 110px; margin-top: -70px; ">Wanna Add Course?</h3>
	<a href="upload_course.php" button style="float: right; padding: 10px; padding-left: 100px; padding-right: 100px; margin-left: 550px; margin-top: -40px;" type="button" class="btn btn-info">Add New Course</button></a>
	

</div>
<h5 style="margin-top:80px;margin-bottom:30px;font-family: geneva;color: #0D8109 ;"align="center">We think following resources will be helpful for you to create an excellent course:</h5>

<div class="boll">
	<img style="margin-right: 200px; margin-left: -50px; margin-top: -50px;" src="lop.png" alt="" height="200px" width="250px">
	<h4 style=" margin-left: 300px; margin-top: -180px; ">Create an Outstanding Course</h4>
	<p style=" margin-left: 300px; margin-top: 15px; ">Whether you've been teaching for years or are teaching for the first time, you can make an engaging course. We've compiled resources and best practices to help you get to the next level, no matter where you're starting.</p>
	<a href="excellent_course_creation.php" button style="margin-right: 200px; padding: 10px; padding-left: 100px; padding-right: 100px; margin-left: 300px; margin-top: -8px;" type="button" class="btn btn-info">Lets Go!!!</button></a>
	

</div>

<h5 style="margin-top:80px;margin-bottom:30px;color: #0D8109 ;"align="center">Have Any Questions? Here is our most popular instructor forum. Check it out... <a href="upload_for_teachers.php" button style="margin-right: 200px; padding: 10px; padding-left: 100px; padding-right: 100px; margin-left: 250px; margin-top: 10px;" type="button" class="btn btn-info">Check here...</button></a> </h5>
<!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
   <!--  <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div> -->
    <!-- Left -->

    <!-- Right -->
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>E_Learning Online Course
          </h6>
          <p style="margin-left: 15px;">
           An Excellent place to learn<br> new knowledge.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Course-Categories
          </h6>
          <p>
            <a style="text-decoration: none;"href="#!" class="text-reset">ICT</a>
          </p>
          <p>
            <a style="text-decoration: none;"href="#!" class="text-reset">Web Design</a>
          </p>
          <p>
            <a style="text-decoration: none;"href="#!" class="text-reset">Graphics Design</a>
          </p>
          <p>
            <a style="text-decoration: none;"href="#!" class="text-reset">Programming</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Go to
          </h6>
          <p>
            <a style="text-decoration: none;" href="index.php" class="text-reset">Home</a>
          </p>
          <p>
            <a style="text-decoration: none;" href="#!" class="text-reset">About Us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p style="margin-left: -15px;">
            <i class="fas fa-home me-3"></i> Khagan, Savar, Dhaka</p>
          <p style="margin-left: -15px;"><i class="fas fa-phone me-3"></i> +880 1956806071</p>
          <p style="margin-left: -15px;"><i class="fas fa-print me-3"></i> +880 1849335792</p>
           <p style="margin-left: -15px;"><i class="fas fa-print me-3"></i> +880 1747402363</p>
            <p style="margin-left: -15px;"><i class="fas fa-print me-3"></i> +880 1639483224</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">E_Learning_Officials</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!--  <form method="post" class="border shadow p-5 rounded" style="width: 100%;">
 <table class="table_1" border="1" cellpadding="40px" >
            <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>ICT 101</td>
                <td>Number System</td>
                <td>This is the Description of this Course</td>
            
               
            </tr>
            <tr>
                <td>ICT 102</td>
                <td>Logic gates</td>
                 <td>This is the Description of this Course</td>
         
            </tr>
        </table>

        <h1 style = "margin-top: 20px; padding: 10px; " align="center">About Me</h1>
        <hr>
        </form>
 -->


<!-- 	<a href="student_logout.php">Logout</a>
	<h1>This is the Student Home Page</h1> -->

	<!-- Hello, <?php echo $user_data['STUDENT_FIRST_NAME'], " ", $user_data['STUDENT_LAST_NAME']; ?> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <div class="footer">
</body>
</html>


