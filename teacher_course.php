<?php  
session_start();

	include ("connection.php");
	include ("teacher_function.php");

	//Checking the Instructor login is set or not using check_login function
	$t_data = check_login($con);
	$f_name =  $t_data['INSTRUCTOR_FIRST_NAME'];
    $l_name =  $t_data['INSTRUCTOR_LAST_NAME'];
    $name = $f_name." ".$l_name;
	$query = "SELECT * FROM `course` WHERE `course`.COURSE_INSTRUCTOR = '$name' ";
	$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>E_Learning | Instructor Course</title>
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
				<a style="color: white; font-style: bold;" class="navbar-brand" href="teacher_home.php"><big><h1 align=center>Welcome
				<?php
					echo $t_data['INSTRUCTOR_FIRST_NAME'], " ", $t_data['INSTRUCTOR_LAST_NAME']; 
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
							<a style="float: right;" class="nav-link active" aria-current="page" href="teacher_logout.php">Log-out</a>
						</li>			
					</ul>
				</div>
			</div>
		</nav>
	</div>
</nav>
<h2>Your Courses</h2>
<div class="pol">
<table class="table_1" cellpadding="40px">
            <tr>
                <th>Course Code</th>
                <th>Course Title</th>
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

</div>

            <!-- <h4><b>Archive knowledge with your friends</b></h4><br>
			<button class="button"><b><a color= white; href="https://www.facebook.com/">Share your friends</a></b></button> -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <div class="footer">
	
</body>
</html>