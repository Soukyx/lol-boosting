<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$user_name=$_POST['user_name'];
		$user_review=$_POST['user_review'];
		$user_rate=$_POST['user_rate'];
		if($user_rate<11){
		$sql = "insert into reviews (user_name, user_review, user_rate) values ('$user_name','$user_review', '$user_rate')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$review_id=$_POST['review_id'];
		$sql = "DELETE FROM `reviews` WHERE review_id=$review_id ";
		if (mysqli_query($conn, $sql)) {
			echo $review_id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);

		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$review_id=$_POST['review_id'];
		$sql = "DELETE FROM reviews WHERE review_id in ($review_id)";
		if (mysqli_query($conn, $sql)) {
			echo $review_id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
