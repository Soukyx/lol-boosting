<?php
  session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

if(count($_POST)>0){
	if($_POST['type']==3){
		$user_id=$_POST['user_id'];
		$sql = "DELETE FROM `users` WHERE user_id=$user_id ";
		if (mysqli_query($con, $sql)) {
			echo $user_id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);

		}
		mysqli_close($con);
	}
}
?>