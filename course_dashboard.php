<?php  
session_start();

	include ("connection.php");

	$query = "SELECT * FROM `course`";
	$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E_Learning | Course Dashboard</title>
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
		#g{
				float: left;

		}
		.pol{
				width: 1150px;
				border: 5px red;
				height: 200px;
				padding: 50px;
				/*margin-left: 220px;
				margin-top: 5px;*/
				text-align: center ;
			}
				
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
				<a style="color: white; font-style: bold;" class="navbar-brand" href="course_dashboard.php"><big><h1 align=center>Course Dashboard</h1></big></a>
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
							<a style="float: right; margin-left: 450px" class="nav-link active" aria-current="page"  tabindex="-1" href="index.php">Home</a>
						</li>			
					</ul>
				</div>
			</div>
		</nav>
	</div>
</nav>

<div class="pol">
<table class="table_1" cellpadding="20px">
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Instructor Name</th>
                <th>Course Description</th>
                <th>Course Price (TAKA)</th>
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
							echo "<td>";
							echo $now['COURSE_DESC'];
							echo "</td>";
							echo "<td>";
							echo $now['COURSE_PRICE'];
							echo "</td>";

							echo "</tr>";
							
						}

					}
	 			?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</div>
<h5 align = center><a class="boll" href="enroll_course.php">Click to Enroll Course</a></h5>
</body>
</html>