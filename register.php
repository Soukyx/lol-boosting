<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//neco bylo poslano
		$user_name = $_POST['user_name'];
    $email = $_POST['email'];
		$password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

  if($password != $cpassword){
    echo ("Not matching password");
  }
  else{
			//ulozeni do databaze
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name, email, password, cpassword) values ('$user_id','$user_name','$email','$password','$cpassword')";

			mysqli_query($con, $query);

			header("Location: login.html");
			die;
  }
	}
?>
