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

	$query=mysqli_query($con, "SELECT * FROM users WHERE user_name='$user_name'");
	  if(mysqli_num_rows($query)>0){
		  echo '<p>Username exists!</p></br>';
	  }
	  $query=mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
	  if(mysqli_num_rows($query)>0){
		echo '<p>Email exists!</p></br>';
		}
		elseif($password != $cpassword){
			echo ("Not matching password");
		  }
	  else{
			//ulozeni do databaze
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name, email, password, cpassword) values ('$user_id','$user_name','$email','$password','$cpassword')";
		
			mysqli_query($con, $query);
		
			header("Location: login1.php");
			die;
	  }

  }

?>
