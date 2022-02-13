<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//neco bylo poslano
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//cti z databaze
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$query = "select * from users where usertype = '$usertype' limit 1";
						if($query['usertype']=="admin"){
							$_SESSION['user_id'] = $user_data['user_id'];
							header("Location:index1.php");
							die;
						}
						else{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:index.php");
						die;
						}
					}
				}
			}
			
			header('location:login1.php?error=1');
		}else
		{
			header('location:login1.php?error=1');
		}
	}

?>