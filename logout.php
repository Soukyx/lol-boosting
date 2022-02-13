<?php

session_start();
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	unset($_SESSION['email']);

}

header("Location: login1.php");
die;