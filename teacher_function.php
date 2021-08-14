<?php 

function check_login($con)
{

	//$_SESSION['user_id'] holds the teachers is who want to access the teachers home page
	$id = $_SESSION['t_id'];

	if(isset($_SESSION['t_id']))
	{
		
		$id = $_SESSION['t_id'];
		$query = "select * from instructor where INSTRUCTOR_ID = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result)>0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	header("Location: login_for_teacher.php");
	die;
}