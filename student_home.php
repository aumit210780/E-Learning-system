<?php  
session_start();

	include ("connection.php");
	include ("student_function.php");

	//Checking the user is set or not using check_login function
	$student_data = check_s_login($con);

	$id = $student_data['STUDENT_ID'];
	$query = "SELECT `COURSE_TITLE`,`COURSE_CODE`,`COURSE_DESC`,`COURSE_INSTRUCTOR` FROM `enroll` JOIN `course` WHERE enroll.STUDENT_ID = '$id' AND enroll.COURSE_ID = course.COURSE_ID";
	$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>E_Learning | Student Dashboard</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
	rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>

		body{
            background: #E9F7EF ;
            /* background-attachment: fixed; */
            background-size: 80%;
            background-repeat: no-repeat;
        }
		table {
			/* border-collapse: collapse; */
			width: 100%;
		}
		table, td, th {  
			border: 1px;
			text-align: left;
			padding: 40px;
		}

		th, td {
			text-align: left;
			padding: 15px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
			background-color: #04AA6D;
			color: white;
		}
		.button{	
			background-color: #555555;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
		.pol{
			width: 1150px;
			border: 5px red;
			height: 200px;
			padding: 50px;
			margin-left: 220px;
			margin-top: 5px;
		}
		h2{
			margin-left: 650px;
		}
		/* ul {
			list-style-type: none;

			padding: 0;
			width: 200px;
			background-color: #f1f1f1;
		}

			li a {
			display: block;
			color: #000;
			padding: 8px 16px;
			text-decoration: none;
		} 

			li a:hover {
			background-color: #555;
			color: white;
		} */

	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">	  
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a style="color: white; font-style: bold;" class="navbar-brand" href="#"><big><h1 align=center>Welcome
				<?php
					echo $student_data['STUDENT_FIRST_NAME'], " ", $student_data['STUDENT_LAST_NAME']; 
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
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a style="float: right; margin-left: 250px" class="nav-link active" aria-current="page"  tabindex="-1" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a style="float: right;" class="nav-link active" aria-current="page" href="student_logout.php">Log-out</a>
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
				<a style="padding: 10px;" class="nav-link active" aria-current="page" href="3">Profile</a>
			</li>
			<li class="nav-item">
				<a style="padding: 10px;" class="nav-link active" aria-current="page" href="course_dashboard.php">Enroll course</a>
			</li>

			<!--   <li class="nav-item">
				<a style="padding: 20px;"class="nav-link active" aria-current="page" href="teacher_course.php">Add-Course</a>
			</li> -->			
		</ul>
</form>
<h2>Your Courses</h2>
<div class="pol">
<table class="table_1" cellpadding="40px">
            <tr>
                <th>Course Title</th>
                <th>Course Name</th>
                <th>Instructor Name</th>
            </tr>
            <!-- <tr> -->
                
                <?php 
					if(mysqli_num_rows($result) > 0)
					{	
						foreach($result as $now)
						{
							echo "<tr>";
							echo "<td>";
							echo $now['COURSE_CODE'];
							echo "</td>";
							echo "<td>";
							echo $now['COURSE_TITLE'];
							echo "</td>";
							echo "<td>";
							echo $now['COURSE_INSTRUCTOR'];
							echo "</td>";
							echo "</tr>";
						}
					}
	 			?>
    </table>

</div>

            <!-- <h4><b>Archive knowledge with your friends</b></h4><br>
			<button class="button"><b><a color= white; href="https://www.facebook.com/">Share your friends</a></b></button> -->
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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <div class="footer">
	
</body>
</html>