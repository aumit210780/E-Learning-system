<?php 
	session_start();
  include("connection.php");
  include("student_function.php");

  $s_data = check_s_login($con);
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>E_Learning | Course Enroll</title>
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
				<a style="color: white; font-style: bold;" class="navbar-brand" href="course_dashboard.php"><big><h1 align=center>Course Enrollment</h1></big></a>
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
							<a style="float: left; margin-left: 350px ; " class="nav-link active" aria-current="page"  tabindex="-1" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a style="float: right;" class="nav-link active" aria-current="page" href="student_logout.php">Log-out</a>
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
  <h3 class="b" align="center">Please Enter the following information of your course<br> & <br>Click on the "Submit" button to enroll the course:</h3>

 <form class = "forp" method="post">
    <div class="mb-3">
      <label for="cc" class="form-label">Course Code</label>
      <input type="text" class="form-control" id="cc" aria-describedby="cc" name="cc" required>
    </div>
    <div class="mb-3">
      <label for="tid" class="form-label">Transaction Id</label>
      <input type="text" class="form-control" id="tid" name="tid" required>
    </div>
    <div>
    	<?php 

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //STUDENT ID in id
  	$id = $s_data['STUDENT_ID'];

    $cc = $_POST['cc'];
    // $tid = $_POST['tid'];
    if(!empty($cc))
      {
        
      	//
        $pay_query = "SELECT `COURSE_ID`,`COURSE_PRICE` FROM `course` WHERE `COURSE_CODE` = '$cc' limit 1";
      	$pay_result = mysqli_query($con, $pay_query);
      	if(mysqli_num_rows($pay_result)>0)
      	{
      		$course = mysqli_fetch_assoc($pay_result);
	          
          $c_id = $course['COURSE_ID'];
					$query = "SELECT * FROM `payment` WHERE `STUDENT_ID`= '$id' AND `COURSE_ID`='$c_id'";
        	$result = mysqli_query($con, $query);
        	if(mysqli_num_rows($result) < 1)
        	{
        		//Storing payment information
        		$query = "INSERT INTO `payment`(`STUDENT_ID`,`COURSE_ID`) VALUES ('$id','$c_id')";
        		mysqli_query($con, $query);
        		//Geting payment information
        		$query = "SELECT * FROM `payment` WHERE `STUDENT_ID`= '$id' AND `COURSE_ID`='$c_id' limit 1";
        		$result = mysqli_query($con, $query);
        		$pay_info = mysqli_fetch_assoc($result);
        		$p_id = $pay_info['PAYMENT_ID'];
        		//Storing enrollment information
        		$query = "INSERT INTO `enroll`(`STUDENT_ID`,`COURSE_ID`,`PAYMENT_ID`) VALUES ('$id','$c_id','$p_id')";
	        	mysqli_query($con, $query);
	        	header("Location: student_home.php");
	        	die();
        	}
        	else
        	{
        		echo "<p>Already enrolled</p>";
        	}
      	}
      	else
	    {
	        echo "<p>Enter valid input</p>";
	    }
        
      }
      else
      {
        echo "<p>Fill with valid information</p>";
      }

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
