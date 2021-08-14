<?php 
session_start();

	include ("connection.php");
	include ("teacher_function.php");
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>E_Learning | Teacher Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
    <style type="text/css" media="screen">
        body{
        background: rgb(211, 202, 204);
        }
    </style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">	  
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a style="color: white; font-style: bold;" class="navbar-brand" href="login_for_teacher.php"><big><h1 align=center>Instructor Sign In</h1></big></a>
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
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form method="post" class="border shadow p-5 rounded" style="width: 470px;">
            <h3><b>Enter information for login</b></h3><br>
            <div class="mb-3">
                <label for="email" class="form-label"><b>
                    Email</b>
                </label>
                <input type="text" name="email" class="form-control" id="email" name="email">
            </div> 
            <div class="mb-3">
                <label for="password" class="form-label"><b>
                    Password</b>
                </label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div>
            	<?php 
            		if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//Something was posted 
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//Read from database
			$query = "select * from instructor where INSTRUCTOR_EMAIL = '$email' limit 1";
			
			$result = mysqli_query($con,$query);

			if($result)
			{
				if($result && mysqli_num_rows($result)>0)
				{

					// Fetching the instructor infrmation (row) and storing to teacher_data variable
					$teacher_data = mysqli_fetch_assoc($result);

					if($teacher_data['INSTRUCTOR_PASSWORD'] == $password)
					{
						$_SESSION['t_id'] = $teacher_data['INSTRUCTOR_ID'];
						$_SESSION['t_pass'] = $teacher_data['INSTRUCTOR_PASSWORD'];
						$_SESSION['t_f_name'] = $teacher_data['INSTRUCTOR_FIRST_NAME'];
						$_SESSION['t_l_name'] = $teacher_data['INSTRUCTOR_LAST_NAME'];

						//Redirecting to Instructor home page
						header("Location: teacher_home.php");
						die;
					}
				}
			}
			echo "<p>Wrong user name or password!</p>";
		}else
		{
			echo "<p>Please enter valid information!</p>";
		}
	}

            	 ?>

            </div>
            <button type="submit" class="btn btn-primary"><b>Login</b></button>
            <a href="sign_up_for_teacher.php">Click to Signup</a><br><br>
        </form>
    </div>


</body>