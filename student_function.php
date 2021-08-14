<?php 

function check_s_login($con)
{

	//$_SESSION['s_id'] holds the student is who want to access the student home page
	
	if(isset($_SESSION['s_id']))
	{
		
		$id = $_SESSION['s_id'];
		$query = "select * from student where STUDENT_ID = '$id' limit 1";

		$result = mysqli_query($con, $query);
		if($result && mysqli_num_rows($result)>0)
		{

			$student_data = mysqli_fetch_assoc($result);
			return $student_data;
		}
	}
	// Redirect to Student login page
	header("Location: login_for_student.php");
	die;
}