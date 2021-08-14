<?php  

session_start();

if(isset($_SESSION['t_id']))
{
	//Unsetting the SESSION when user logged out
	unset($_SESSION['t_id']);
	unset($_SESSION['t_pass']);
	unset($_SESSION['t_f_name']);
	unset($_SESSION['t_l_name']);
}
header("Location: login_for_teacher.php");
die;