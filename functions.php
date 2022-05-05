<?php

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	header("Location: login1.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 6)
	{
		$length = 6;
	}

	$len = rand(9,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(1,9);
	}

	return $text;
}
?>