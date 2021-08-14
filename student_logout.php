<?php  

session_start();

if(isset($_SESSION['s_id']))
{
	//Unsetting the SESSION when user logged out
	unset($_SESSION['s_id']);
}
header("Location: login_for_student.php");
die;