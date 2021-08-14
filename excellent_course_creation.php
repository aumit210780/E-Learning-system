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
	<title>E_Learning</title>
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
			.dass{
				align-items: center;
			}
			.tass{
				 text-align: justify;
                 text-justify: inter-word;
				margin-left: 400px;
				margin-right: 300px;
			}
	</style>
</head>
<body>
	<nav style=" width: 100%; height: 100px;" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">	  
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent"> 
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a style="float: left; margin-top: 3px;color:#1ABC9C; font-style: bold;" class="navbar-brand" href="#"><big>E_Learning Online Course</big></a>
						</li>
						<li class="nav-item">
							<a style="float: right; margin-left: 900px;" class="nav-link active" aria-current="page"  tabindex="-1" href="index.php">Home</a>
						</li>
						<!-- <li class="nav-item">
							<a style="float: right;" class="nav-link active" aria-current="page" href="upload_for_teachers.php">Add-Course</a>
						</li> -->
						<li class="nav-item">
							<a style="float: right; margin-left: 30px;" class="nav-link active" aria-current="page" href="teacher_logout.php">Log-out</a>
						</li>			
					</ul>
				</div> 
			</div>
		</nav>
	</div>
</nav>

<div class="dass">
	<img align="center" style="margin-top: 20px; margin-left: 550px;" src="lol.png" alt="This is a pic" height="250px" width="250px">
	<h1 align="center" style="margin-top: 10px; margin-left: 40px;">Create an Excellent Course</h1>
	</div>
	<div class="tass">
		<h4 style="margin-top: 20px;">It's important to make sure your course is engaging for your students with a well-structured, practical, and rewarding learning experience. The most successful instructors spend time planning their course content before they start recording to ensure their course helps students achieve clear goals.</h4>

		<h5 style="margin-top: 20px;">Step 1: Choose your course topic.</h5>
		<p style="margin-top: 20px;">Pick something you're knowledgeable in and genuinely excited about teaching. Learn more about E_Learning’s Marketplace Insights tool that helps you understand the demand and competition for your chosen topic.</p>
		<h5 style="margin-top: 20px;">Step 2: Define your intended learners and your course’s learning objectives.</h5>
		<p style="margin-top: 20px;">Before you begin creating content for your course, it's important to determine who you are teaching and what your students will learn or be able to accomplish by the end of your course. Learn more about what questions to ask yourself about your learners and how to write clear learning objectives.</p>
		<h5 style="margin-top: 20px;">Step 3: Decide how students will practice what you’re teaching.</h5>
		<p style="margin-top: 20px;">E_Learning students love being hands-on with their learning: they want to practice what they've learned through exercises, activities, case studies, and more! There are lots of different types of practice activities you can add to your course to help create an engaging online learning experience.</p>
		<h5 style="margin-top: 20px;">Step 4: Create your course outline.</h5>
		<p style="margin-top: 20px;">Your course outline is the foundation for your course--this is where you decide how you will structure and organize your course content. We have an outline template to help you get started!</p>
		<h5 style="margin-top: 20px;">Step 5: Script your course.</h5>
		<p style="margin-top: 20px;">Once you know how your course will be structured, the next step is to prep for recording your lectures. Most instructors find that scripting each lecture (or writing bullet point notes) helps to reduce the amount of time spent recording and editing and increases the overall quality of their delivery.</p>

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

		
	</div>

</body>
</html>