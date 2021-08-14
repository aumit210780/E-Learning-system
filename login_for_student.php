<?php 
session_start();

	include ("connection.php");
	include ("student_function.php");
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>E_Learning | Student Sign In</title>
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
				<a style="color: white; font-style: bold;" class="navbar-brand" href="login_for_student.php"><big><h1 align=center>Student Sign In</h1></big></a>
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
                <label for="s_email" class="form-label"><b>
                    Student Email</b>
                </label>
                <input type="text" name="s_email" class="form-control" id="s_email">
            </div> 
            <div class="mb-3">
                <label for="s_password" class="form-label"><b>
                    Password</b>
                </label>
                <input type="password" name="s_password" class="form-control" id="s_password">
            </div>
            <div>
            	<?php 
            		if($_SERVER['REQUEST_METHOD'] == "POST")
					{
						//Something was posted 
						$email = $_POST['s_email'];
						$password = $_POST['s_password'];

						if(!empty($email) && !empty($password) && !is_numeric($email))
						{

							//Read from database
							$query = "select * from student where STUDENT_EMAIL = '$email' limit 1";
							
							$result = mysqli_query($con,$query);

							if($result)
							{
								if($result && mysqli_num_rows($result)>0)
								{

									// Fetching the student infrmation (row) and storing to user_data variable
									$user_data = mysqli_fetch_assoc($result);

									if($user_data['STUDENT_PASSWORD'] == $password)
									{

										//Set the session and storing the Student_id to SESSION as global variable
										$_SESSION['s_id'] = $user_data['STUDENT_ID'];

										//Redirecting to Student home page
										header("Location: student_home.php");
										die;
									}
								}
							}
							echo "<p >Wrong email or password!</p>";
						}
						else
						{
							echo "<p >Please enter valid information!</p> ";
						}
					}

            	 ?>

            </div>
            <button type="submit" class="btn btn-primary"><b>Login</b></button>
            <a href="sign_up_for_student.php">Click to Signup</a><br><br>
        </form>
    </div>


</body>